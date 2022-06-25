<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */


$metadata['idp1.hospital-1.example.com'] = [
    'SingleSignOnService' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate' => 'example.pem',
];

$metadata['idp1.hospital-2.example.com'] = [
    'SingleSignOnService' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate' => 'example.pem',
];
