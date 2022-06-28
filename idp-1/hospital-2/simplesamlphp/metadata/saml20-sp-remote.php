<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
//$metadata['https://saml2sp.example.org'] = [
//    'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
//    'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
//];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => false,
];

$metadata['https://legacy.example.edu'] = [
    'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
    /*
     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
     * Uncomment the following option to use SHA-1 for signatures directed
     * at this specific service provider if it does not support SHA-256 yet.
     *
     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
     * Please refer to the following document for more information:
     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
     */
    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
];

//$metadata['https://fed.example.org/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = [
//    'AssertionConsumerService' => 'https://fed.example.org/simplesaml/module.php/saml/sp/assertionConsumerService/default-sp',
//    'SingleLogoutService'      => 'https://fed.example.org/simplesaml/module.php/saml/sp/singleLogoutService/default-sp',
//];

$metadata['https://fed.example.org/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = [
    'entityid' => 'https://fed.example.org/simplesaml/module.php/saml/sp/metadata.php/default-sp',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 0,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
            'index' => 1,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 2,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
            'index' => 3,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEnzCCAwegAwIBAgIUcYih5G8f0aDlZD6S2aLPaOfGx20wDQYJKoZIhvcNAQELBQAwXzELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEYMBYGA1UEAwwPZmVkLmV4YW1wbGUub3JnMB4XDTIyMDYyNTE3MTQzM1oXDTMyMDYyNDE3MTQzM1owXzELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEYMBYGA1UEAwwPZmVkLmV4YW1wbGUub3JnMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAxeCeW5Ce3CyY4FvRMGgqD+ibkba2AlgR6NOywnMNH5BGgisdnQK/ak52NnmSuiOmvI7HqX7z9GZJxUtRmYcHFSNwXx+riCRcW/17FGcrW4uIAdKVXZN5FxdxJiv5PG84iNxBwRssQWEM0CsIh0kFLDF2OMUKqUTHJiIz7hVQaTjIS6VPep65Htc4G+TBCdFVqoF0FyPyqGYegh8nHVTvBw4nVQ8pxJearN/KX25CnHMmZpshBF6Odulk3l8iz5mwd4jwU9Jz/D/mheadV+TkM1Au1AUCjRbHnYzzMdJTaTUQ36ud0nV2z9RtuFzyNBmikVEEMFkPIVQlhK/GOdc4SNapRVqVwcltVSYiq7QXhMNagxeypoRIwpIb4JRu45gj9H5ovBbL3OrIGViZoVqdN+fzufDfM3Yyp0RTTHvhYvajE17fJHZonPAlD1xoC35nwvw6wy5dQTNjfAKparx3IYfNmOJbcTN2WEW6nwvohX69hcGCxy81aSOxHgXp+D/XAgMBAAGjUzBRMB0GA1UdDgQWBBTnJRRHXHVzZTEJKxIOhofkNTs7qjAfBgNVHSMEGDAWgBTnJRRHXHVzZTEJKxIOhofkNTs7qjAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQC2YomznV1Vm2NdGvp5D5XuS2+Dr62WfOAalOyMDVrfKg44Lo1+gieuhrkkEuoArRxC93DHk+5pSzeOdHVmkS4eR3cu/OtrIX54MCW/PmvYfoyK8JmDCOdTWBGXpbd2miAqU0wyMCp1+/+f0vXtMjIbMy+yzqF+qxBApKt/iiUyhHO++lbJaAHUsWUPoA02JbouFMiIu32kl4UCzLR0j64tEZ/rTSy6XvenqE5HJxkDcEbyn/gFReYiWSmUgHTUQKzIV5FfF2D0jiEBMVnjj3qG19KDAV3gkfycJTZafE8FKwLIStNAiPo/Scp1LfTQaoEGJkA3RkSSCc90lo3fGg20hNV6RUVMFNwOWC15cw+lfmue0bbwYDtX33DuSOBph34zcq1LzeYRUlseTmkUhBg5a76GzWH0JNFwgeFzpmw6jf2TjJCr66i1BWfiyfMr7yRVBbEmwxEVsnHnJephM4Pus8sadMzlmbFiHF1pfkdOOPdHnW6XWEoOgtOFia2UtxU=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEnzCCAwegAwIBAgIUcYih5G8f0aDlZD6S2aLPaOfGx20wDQYJKoZIhvcNAQELBQAwXzELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEYMBYGA1UEAwwPZmVkLmV4YW1wbGUub3JnMB4XDTIyMDYyNTE3MTQzM1oXDTMyMDYyNDE3MTQzM1owXzELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEYMBYGA1UEAwwPZmVkLmV4YW1wbGUub3JnMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAxeCeW5Ce3CyY4FvRMGgqD+ibkba2AlgR6NOywnMNH5BGgisdnQK/ak52NnmSuiOmvI7HqX7z9GZJxUtRmYcHFSNwXx+riCRcW/17FGcrW4uIAdKVXZN5FxdxJiv5PG84iNxBwRssQWEM0CsIh0kFLDF2OMUKqUTHJiIz7hVQaTjIS6VPep65Htc4G+TBCdFVqoF0FyPyqGYegh8nHVTvBw4nVQ8pxJearN/KX25CnHMmZpshBF6Odulk3l8iz5mwd4jwU9Jz/D/mheadV+TkM1Au1AUCjRbHnYzzMdJTaTUQ36ud0nV2z9RtuFzyNBmikVEEMFkPIVQlhK/GOdc4SNapRVqVwcltVSYiq7QXhMNagxeypoRIwpIb4JRu45gj9H5ovBbL3OrIGViZoVqdN+fzufDfM3Yyp0RTTHvhYvajE17fJHZonPAlD1xoC35nwvw6wy5dQTNjfAKparx3IYfNmOJbcTN2WEW6nwvohX69hcGCxy81aSOxHgXp+D/XAgMBAAGjUzBRMB0GA1UdDgQWBBTnJRRHXHVzZTEJKxIOhofkNTs7qjAfBgNVHSMEGDAWgBTnJRRHXHVzZTEJKxIOhofkNTs7qjAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQC2YomznV1Vm2NdGvp5D5XuS2+Dr62WfOAalOyMDVrfKg44Lo1+gieuhrkkEuoArRxC93DHk+5pSzeOdHVmkS4eR3cu/OtrIX54MCW/PmvYfoyK8JmDCOdTWBGXpbd2miAqU0wyMCp1+/+f0vXtMjIbMy+yzqF+qxBApKt/iiUyhHO++lbJaAHUsWUPoA02JbouFMiIu32kl4UCzLR0j64tEZ/rTSy6XvenqE5HJxkDcEbyn/gFReYiWSmUgHTUQKzIV5FfF2D0jiEBMVnjj3qG19KDAV3gkfycJTZafE8FKwLIStNAiPo/Scp1LfTQaoEGJkA3RkSSCc90lo3fGg20hNV6RUVMFNwOWC15cw+lfmue0bbwYDtX33DuSOBph34zcq1LzeYRUlseTmkUhBg5a76GzWH0JNFwgeFzpmw6jf2TjJCr66i1BWfiyfMr7yRVBbEmwxEVsnHnJephM4Pus8sadMzlmbFiHF1pfkdOOPdHnW6XWEoOgtOFia2UtxU=',
        ],
    ],
];