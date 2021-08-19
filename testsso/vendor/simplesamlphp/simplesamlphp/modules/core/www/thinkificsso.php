<?php

$config = \SimpleSAML\Configuration::getInstance();

if (!array_key_exists('as', $_REQUEST)) {
    $t = new \SimpleSAML\XHTML\Template($config, 'core:authsource_list.tpl.php');

    $t->data['sources'] = \SimpleSAML\Auth\Source::getSources();
    $t->show();
    exit();
}

$asId = (string) $_REQUEST['as'];
$as = new \SimpleSAML\Auth\Simple($asId);

if (array_key_exists('logout', $_REQUEST)) {
    $as->logout($config->getBasePath() . 'logout.php');
}

if (array_key_exists(\SimpleSAML\Auth\State::EXCEPTION_PARAM, $_REQUEST)) {
    // This is just a simple example of an error

    /** @var array $state */
    $state = \SimpleSAML\Auth\State::loadExceptionState();

    assert(array_key_exists(\SimpleSAML\Auth\State::EXCEPTION_DATA, $state));
    $e = $state[\SimpleSAML\Auth\State::EXCEPTION_DATA];

    throw $e;
}
echo "--".$config->getBasePath()."--";
if (!$as->isAuthenticated()) {
    $url = \SimpleSAML\Module::getModuleURL('core/thinkificsso.php', ['as' => $asId]);
	//$url="https://oxfobox.thinkific.com/users/sign_in";
    $params = [
        'ErrorURL' => $url,
        'ReturnTo' => $url,
    ];
    $as->login($params);
}

$attributes = $as->getAttributes();
$authData = $as->getAuthDataArray();

$t = new \SimpleSAML\XHTML\Template($config, 'status.php', 'attributes');

$t->data['header'] = '{status:header_saml20_sp}';
$t->data['attributes'] = $attributes;
$t->data['authData'] = $authData;
$t->data['nameid'] = !is_null($as->getAuthData('saml:sp:NameID')) ? $as->getAuthData('saml:sp:NameID') : false;
$t->data['logouturl'] = \SimpleSAML\Utils\HTTP::getSelfURLNoQuery() . '?as=' . urlencode($asId) . '&logout';
//$t->show();

$firstname="";
$username="";
$lastname="";
$externalid="";
foreach ($attributes as $name => $value) {
	echo $name.":".$value[0]."<br/>";
	if($name=="http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname"){
		$firstname=$value[0];
	}
	if($name=="http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname"){
		$lastname=$value[0];
	}
	if($name=="http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress"){
		$username=$value[0];
	}
	if($name=="http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name"){
		$externalid=$value[0];
	}
}

 // Create token header as a JSON string
$arr_jwt = array("typ"=>'JWT', "alg"=>'HS256');
$header = json_encode($arr_jwt);

// Create token payload as a JSON string
$arr_payload = array("email"=>$username, "first_name"=>$firstname,'last_name'=>$lastname,'iat'=>time(),'external_id'=>$externalid);
$payload = json_encode($arr_payload);

// Encode Header to Base64Url String
$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

// Encode Payload to Base64Url String
$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

// Create Signature Hash
$key = '19ed95587a479b15fa27c208d90450a0';
$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $key, true);

// Encode Signature to Base64Url String
$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

// Create JWT
$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

$baseUrl = "https://oxfobox.thinkific.com/api/sso/v2/sso/jwt?jwt=";
$returnTo = urlencode("https://oxfobox.thinkific.com");
$errorUrl = urlencode("https://oxfobox.thinkific.com");
$url = $baseUrl . $jwt . "&return_to=" . $returnTo . "&error_url=" . $errorUrl;

//echo $url;
header("Location:".$url);
