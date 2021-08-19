<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['https://sts.windows.net/9c3b038f-3465-42e5-bbad-125efca4ccaa/'] = [
    'entityid' => 'https://sts.windows.net/9c3b038f-3465-42e5-bbad-125efca4ccaa/',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/9c3b038f-3465-42e5-bbad-125efca4ccaa/saml2',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://login.microsoftonline.com/9c3b038f-3465-42e5-bbad-125efca4ccaa/saml2',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/9c3b038f-3465-42e5-bbad-125efca4ccaa/saml2',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQaSo/0bmR1JBOtby0mJ986DANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMTA3MTYwODQ2MzZaFw0yNDA3MTYwODQ2MjlaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoyzL6qwRDyOn6jO0hpHrGcvv4sd9TmC/QQm7sLv387f0MN9CD30tVgtghPe2EANZMw4T0m9fOhAX8u138UtXk7jNgg9o8OFMIw67wJIXOBL0K5ELXo+V8/ObXkCIzuT7sSLbEAh+HUpWNI8qx97dnoIG0glOeOYdvacmX05/WyfvdL7KJmQA1S0NcO73beN3AC2dlK1Ep4RFE/67jfCkgl85Qha3hb3/2lqsj59EnmgVEP1cdOUUb4gAaHgHm6lDDXOZcyXzbTdopOtOqbBnNTDh0hu9X6iCieadj6t6qE8939UTzxLXKndW8yubhmFWt44vvhtFeKJkj/DCZnUQjQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQBEUp5fUSj4nDs/DGmAHYxsE7/0HBiG3TLSfdH75RUb78ALmkEvjtGYy65DKsVhYoTuH4bn7QdAm7yGHggrnlJXmU47E384NHg8PBR8iDndTWgv81ZagKR05vOnm3s6cUjUjBkU19JDo2y9ToF0WHDvkaIEJSNrs0ttNUy9JVvzpXcYE4C6CqoFa58nOgSTYvyttNduiiyRLXvqoI13v2Ia7UDHU1/PDlvXmnO7BOtDlfhWiLotDyxQrEn1XscUoPkXG2F8sJZeVEh6wYgLY+hoLQ7e9CjGX7PWeokHWw0HgXhriub5gx98R/GElUCI5W6IkCZFx2EAUd0Ni9awPCpW',
        ],
    ],
];

$metadata['https://registry.shibboleth.ox.ac.uk/idp'] = [
    'entityid' => 'https://registry.shibboleth.ox.ac.uk/idp',
    'description' => [
        'en' => 'University of Oxford',
    ],
    'OrganizationName' => [
        'en' => 'University of Oxford',
    ],
    'name' => [
        'en' => 'University of Oxford',
    ],
    'OrganizationDisplayName' => [
        'en' => 'University of Oxford',
    ],
    'url' => [
        'en' => 'http://www.ox.ac.uk/',
    ],
    'OrganizationURL' => [
        'en' => 'http://www.ox.ac.uk/',
    ],
    'contacts' => [
        [
            'contactType' => 'support',
            'givenName' => 'Help',
            'emailAddress' => [
                'help@it.ox.ac.uk',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'Sysdev',
            'emailAddress' => [
                'sysdev@it.ox.ac.uk',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'expire' => 1660490048,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
            'Location' => 'https://idp.shibboleth.ox.ac.uk/idp/profile/Shibboleth/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://idp.shibboleth.ox.ac.uk/idp/profile/SAML2/POST/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://idp.shibboleth.ox.ac.uk/idp/profile/SAML2/POST-SimpleSign/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.shibboleth.ox.ac.uk/idp/profile/SAML2/Redirect/SSO',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://idp.shibboleth.ox.ac.uk/idp/profile/SAML2/POST/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.shibboleth.ox.ac.uk/idp/profile/SAML2/Redirect/SLO',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:mace:shibboleth:1.0:nameIdentifier',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => true,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDTDCCAjSgAwIBAgIJAJ3Ublo6lbs7MA0GCSqGSIb3DQEBBQUAMCIxIDAeBgNVBAMTF2lkcC5zaGliYm9sZXRoLm94LmFjLnVrMB4XDTE0MDEwOTE0MzkyNFoXDTM0MDEwOTE0MzkyNFowIjEgMB4GA1UEAxMXaWRwLnNoaWJib2xldGgub3guYWMudWswggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCw+bbvyxNRo4vqJ7KuunzGmQUqIxIkPKIbcIMzLDy9qJPqAx+GkycAXUjAJZxQdaKBqWRaSqJfFU4rEmyJcFiRyCh/7/KDylWQ+NKfgfbrzPc4EQ0mkCMt75Hi4dzpqs0FodlU/uzhlXCvyS0XG4d8Xz8Sm9bDTnIzfuWF8k3jcFjMTXXrx6mm1fqnhtSYgC65ZvJi3WZySF1KjAcWfg4pKyep7d1wrNUpl9/f+mw+3snwogAwrfgMTcrE0HGszozeQLzpxF07BXCHcplGP/oqtb4JuCs+yWfTRwjX3yGF7qQ0vUhz9Ujukn7c/kwloe1CVBnfDXre80rBMOx/lnsPAgMBAAGjgYQwgYEwHQYDVR0OBBYEFJjIqPJ4q4nUpNIPB4J3EiQ2X/RqMFIGA1UdIwRLMEmAFJjIqPJ4q4nUpNIPB4J3EiQ2X/RqoSakJDAiMSAwHgYDVQQDExdpZHAuc2hpYmJvbGV0aC5veC5hYy51a4IJAJ3Ublo6lbs7MAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBABGZFS4mtXb2vU13u6iDnT37ZhC+6M6b2dFtDNFVZQdCktfI3EvvmGuS56t26QaaR8rgfBv4dYpHiVXOj/p8+UPnJPC6HSFsnhHUsCdTaCh0kw8+T4yKYQKBm7vkwItZv/wegtz1GPrcQMu8/xqaROu0SDnUn6UTiPY5Km0exKz7H0oDt1HEdH/27sP4oo1Mfcj+7+n6caKbrnOH3hVNWbDJa0WIfiK03ciufpwGd3+VZnKz8ZUKn9ypehARSzHsOYPFBsWzFHWZfhN4JLUmAsaAcapBmDo2Rn1ZkXDAGYMT3We0cygwa3z8pz8F9sHQEhdE2CTxxhJpdmOeI1UYE5c=',
        ],
    ],
    'scope' => [
        'ox.ac.uk',
    ],
    'RegistrationInfo' => [
        'registrationAuthority' => 'http://ukfederation.org.uk',
    ],
    'UIInfo' => [
        'DisplayName' => [
            'en' => 'University of Oxford',
        ],
        'Description' => [],
        'InformationURL' => [],
        'PrivacyStatementURL' => [],
    ],
];