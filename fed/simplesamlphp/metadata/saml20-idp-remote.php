<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */


//$metadata['idp1.hospital-1.example.com'] = [
//    'SingleSignOnService' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/SSOService.php',
//    'SingleLogoutService' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
//    'certificate' => 'hospital1.pem',
//];

$metadata['https://idp1.hospital-1.example.com/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/metadata.php',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp1.hospital-1.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEtzCCAx+gAwIBAgIUMkU+8uRT+KO9nuS+Au4nNinpl+0wDQYJKoZIhvcNAQELBQAwazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UECwwbaWRwMS5ob3NwaXRhbC0xLmV4YW1wbGUuY29tMB4XDTIyMDYyNTE3Mjk0OFoXDTMyMDYyNDE3Mjk0OFowazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UECwwbaWRwMS5ob3NwaXRhbC0xLmV4YW1wbGUuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA1Jo5eL2qa7qvcKK/cbcD3z3OsRfu/THae4PjEKLSMz4LCyZaTUh1NaRW9xlgisroRC31ao1h4kDv6QVj5PRkdG6b/IBf6oYjztkjwfBntMvMY/GkbKtbTrrzM1NTGq2ti03xA6/4Ih506OE4hbPzXrmiBryDzyvFtrvO7GUQgXV0GLJozVP7DbTpGR6v6RgD+J4PzIsdBb5HLj0CydOK5b222CCKZe2GWkkpPHLH4Ec8hujQ9Hx1b40xTMkylVKvmWs68mhFfCBpIUAJVY3ETqEbQNptac7c23bh+BX61f/9wsNtzTLa+ChQOskLVQLOA5VfPiFVzO+lcjqvNTFcPFu3u5dz7Jv2vFepdWxKyjaioTQa/0aJ2al/FZHJc871lVy5+FPi1z2ddjj5pPrb2UnUE13iCxyvbvs5ZTMW2ndyBAabxodHb5vY0dorSEmKR0EYBa6B4Oj0rI+WuF2WS/9qugVQyQnOos8KYqKfhK8fm/T2mxWpLCKr62C4x9P/AgMBAAGjUzBRMB0GA1UdDgQWBBQ4zXJTi/pQCfcHjNMrTfA+D9OmsTAfBgNVHSMEGDAWgBQ4zXJTi/pQCfcHjNMrTfA+D9OmsTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQDJ2kl1Plfmqxev01PIAt2VZxaU12nwhb9jZY+ZgHe9WT1O3ycprt+U39BuSaiC8PnUvnqLyPKqblUYvGblvFWcIjvYav+CZIIA334rhk2C32y0gRi2jyd17iT7ZSTwvqpRNjbdJoH0oQS67MTcyZ839Ak2s949QF3bSeFan48XQMeYrPDbrwuKUH2ZxTlPs6RpK1wdz5hi5MUi5lNc530/IQTE5pW7UcXx+dSH0UDyaQ3HbU7CKgH4cikiwg5DhpVxox3toYpgjYAEPaWdMrsvsT4WyGNBs02l9QYH57TeBhH1RK/fa7SkwAuFBr5Ng+utcmUSvsJ3no7rK7w+IqUkzhmbK807HCc/htlGzMeVu+/ieyipcC+wEk7xAPHMNfMl8X3nS0s+vhg7PZm1wXg0ZVtbF+QBB8KDDFrrXy7Al4eiRzJ1D9iTQDSDnuQWGFyxUAnEHvdCIgPKcGn8wT8W6GPggf0BvcaxhmRtklzfGZzPQZFNXUOLmZGn3dvgCEU=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEtzCCAx+gAwIBAgIUMkU+8uRT+KO9nuS+Au4nNinpl+0wDQYJKoZIhvcNAQELBQAwazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UECwwbaWRwMS5ob3NwaXRhbC0xLmV4YW1wbGUuY29tMB4XDTIyMDYyNTE3Mjk0OFoXDTMyMDYyNDE3Mjk0OFowazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UECwwbaWRwMS5ob3NwaXRhbC0xLmV4YW1wbGUuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA1Jo5eL2qa7qvcKK/cbcD3z3OsRfu/THae4PjEKLSMz4LCyZaTUh1NaRW9xlgisroRC31ao1h4kDv6QVj5PRkdG6b/IBf6oYjztkjwfBntMvMY/GkbKtbTrrzM1NTGq2ti03xA6/4Ih506OE4hbPzXrmiBryDzyvFtrvO7GUQgXV0GLJozVP7DbTpGR6v6RgD+J4PzIsdBb5HLj0CydOK5b222CCKZe2GWkkpPHLH4Ec8hujQ9Hx1b40xTMkylVKvmWs68mhFfCBpIUAJVY3ETqEbQNptac7c23bh+BX61f/9wsNtzTLa+ChQOskLVQLOA5VfPiFVzO+lcjqvNTFcPFu3u5dz7Jv2vFepdWxKyjaioTQa/0aJ2al/FZHJc871lVy5+FPi1z2ddjj5pPrb2UnUE13iCxyvbvs5ZTMW2ndyBAabxodHb5vY0dorSEmKR0EYBa6B4Oj0rI+WuF2WS/9qugVQyQnOos8KYqKfhK8fm/T2mxWpLCKr62C4x9P/AgMBAAGjUzBRMB0GA1UdDgQWBBQ4zXJTi/pQCfcHjNMrTfA+D9OmsTAfBgNVHSMEGDAWgBQ4zXJTi/pQCfcHjNMrTfA+D9OmsTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQDJ2kl1Plfmqxev01PIAt2VZxaU12nwhb9jZY+ZgHe9WT1O3ycprt+U39BuSaiC8PnUvnqLyPKqblUYvGblvFWcIjvYav+CZIIA334rhk2C32y0gRi2jyd17iT7ZSTwvqpRNjbdJoH0oQS67MTcyZ839Ak2s949QF3bSeFan48XQMeYrPDbrwuKUH2ZxTlPs6RpK1wdz5hi5MUi5lNc530/IQTE5pW7UcXx+dSH0UDyaQ3HbU7CKgH4cikiwg5DhpVxox3toYpgjYAEPaWdMrsvsT4WyGNBs02l9QYH57TeBhH1RK/fa7SkwAuFBr5Ng+utcmUSvsJ3no7rK7w+IqUkzhmbK807HCc/htlGzMeVu+/ieyipcC+wEk7xAPHMNfMl8X3nS0s+vhg7PZm1wXg0ZVtbF+QBB8KDDFrrXy7Al4eiRzJ1D9iTQDSDnuQWGFyxUAnEHvdCIgPKcGn8wT8W6GPggf0BvcaxhmRtklzfGZzPQZFNXUOLmZGn3dvgCEU=',
        ],
    ],
];

//$metadata['idp1.hospital-2.example.com'] = [
//    'SingleSignOnService' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/SSOService.php',
//    'SingleLogoutService' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
//    'certificate' => 'hospital2.pem',
//];

$metadata['https://idp1.hospital-2.example.com/simplesaml/saml2/idp/metadata.php'] = [
    'entityid' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/metadata.php',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp1.hospital-2.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEtzCCAx+gAwIBAgIUaK9qQLrUhLbP+QTfJ78vpITa75EwDQYJKoZIhvcNAQELBQAwazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UEAwwbaWRwMS5ob3NwaXRhbC0yLmV4YW1wbGUuY29tMB4XDTIyMDYyNTE3MzA1N1oXDTMyMDYyNDE3MzA1N1owazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UEAwwbaWRwMS5ob3NwaXRhbC0yLmV4YW1wbGUuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAws1RvLxEbS23Qbay6/cYxNOPV3jVumsl9PtzuOvjSd0u4deAViuDC/Nx92BreKNpE4hexNwuGli/zKk0zwdPbRAo/uF22Kxe6xwcvzAce/qalpLd/lmNVk01ypD0A0qmBaEBMH9hXUvq4gNMZCG1Igk4RLf8kjOQ3uAUMEvZyAGCPfX2FxCJeOomeToQm5yZvQjtpQsboNNRJ398ZiLMDfqHpPaBOr5fryL366d17oetzGpxbTSuIDtdBVCONzU82kVHFOi7Q1YYtgNEfjI/D3t+rsmT+dbJBgWbtIDx9pO9tH5Qt12HN1SaY6TPwMKPjgnev1BJ+6mZa4BEHDdX/c4Q5iTyKA9WuCNSyJ2/RRQs1GvuYV93zf0+Vjhc9nkyeD13215vSweL7c7zhqIY9vCnuXGL8XRD5pH5ecEIYX4M/oecGwnnMcQZvkA08TxDDWJvs//6akG+qdZHmY4p69X32jFyL2bxSExTF449j/++GHlAgMDRwfpudaHAyWSxAgMBAAGjUzBRMB0GA1UdDgQWBBRBZx4GobWA+mf0GZi+jjAUd5tVqTAfBgNVHSMEGDAWgBRBZx4GobWA+mf0GZi+jjAUd5tVqTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQAWyufhfrflqTATfsqOrswRqLe5u01mQip8BjPzAWzP1VRqfnwsAQxALFVHGNjz+S/npM1srQsYPwEzvJNFe8ys0GHoOHIYJH+BLTkNHLnVnvT4xdKuJ1V7GMwjUoXSAJ/5s6MK46jd+8Xae6tSyJKNPBAzjaQP6VPJn5S2x3JlsWGUT7lfV2xh3blBE3TBjgZumL0aQWspAzXPOKmh8zOxdBjVVFMeG1PpNoo70INU0Wallb/CI/fbtaAfBK6VKaXoTsO4U6hm6WN+sPMrg5uotP8CSXYdTVIBcXkrLETpldqfO+qlY0cphHbNQ5vg7Vj/ofkbR7ITAoeRzVbVvpj/1GtBGbD+95divfXyySaiHMXNTpA/C261BonzZdjlbbveZwAUMfmgdo7Yp2SVF6ZUmcciTgAY7wHb20ztja4QHY6kEe5t+eeAioxxWE7zw7MqPHureCZU/Dg//BkBvThOVBLsHoCRAvKqEZUS/w+Qve0VQjEzUZoqI9Wkt57mZ7s=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEtzCCAx+gAwIBAgIUaK9qQLrUhLbP+QTfJ78vpITa75EwDQYJKoZIhvcNAQELBQAwazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UEAwwbaWRwMS5ob3NwaXRhbC0yLmV4YW1wbGUuY29tMB4XDTIyMDYyNTE3MzA1N1oXDTMyMDYyNDE3MzA1N1owazELMAkGA1UEBhMCSlAxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEkMCIGA1UEAwwbaWRwMS5ob3NwaXRhbC0yLmV4YW1wbGUuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAws1RvLxEbS23Qbay6/cYxNOPV3jVumsl9PtzuOvjSd0u4deAViuDC/Nx92BreKNpE4hexNwuGli/zKk0zwdPbRAo/uF22Kxe6xwcvzAce/qalpLd/lmNVk01ypD0A0qmBaEBMH9hXUvq4gNMZCG1Igk4RLf8kjOQ3uAUMEvZyAGCPfX2FxCJeOomeToQm5yZvQjtpQsboNNRJ398ZiLMDfqHpPaBOr5fryL366d17oetzGpxbTSuIDtdBVCONzU82kVHFOi7Q1YYtgNEfjI/D3t+rsmT+dbJBgWbtIDx9pO9tH5Qt12HN1SaY6TPwMKPjgnev1BJ+6mZa4BEHDdX/c4Q5iTyKA9WuCNSyJ2/RRQs1GvuYV93zf0+Vjhc9nkyeD13215vSweL7c7zhqIY9vCnuXGL8XRD5pH5ecEIYX4M/oecGwnnMcQZvkA08TxDDWJvs//6akG+qdZHmY4p69X32jFyL2bxSExTF449j/++GHlAgMDRwfpudaHAyWSxAgMBAAGjUzBRMB0GA1UdDgQWBBRBZx4GobWA+mf0GZi+jjAUd5tVqTAfBgNVHSMEGDAWgBRBZx4GobWA+mf0GZi+jjAUd5tVqTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQAWyufhfrflqTATfsqOrswRqLe5u01mQip8BjPzAWzP1VRqfnwsAQxALFVHGNjz+S/npM1srQsYPwEzvJNFe8ys0GHoOHIYJH+BLTkNHLnVnvT4xdKuJ1V7GMwjUoXSAJ/5s6MK46jd+8Xae6tSyJKNPBAzjaQP6VPJn5S2x3JlsWGUT7lfV2xh3blBE3TBjgZumL0aQWspAzXPOKmh8zOxdBjVVFMeG1PpNoo70INU0Wallb/CI/fbtaAfBK6VKaXoTsO4U6hm6WN+sPMrg5uotP8CSXYdTVIBcXkrLETpldqfO+qlY0cphHbNQ5vg7Vj/ofkbR7ITAoeRzVbVvpj/1GtBGbD+95divfXyySaiHMXNTpA/C261BonzZdjlbbveZwAUMfmgdo7Yp2SVF6ZUmcciTgAY7wHb20ztja4QHY6kEe5t+eeAioxxWE7zw7MqPHureCZU/Dg//BkBvThOVBLsHoCRAvKqEZUS/w+Qve0VQjEzUZoqI9Wkt57mZ7s=',
        ],
    ],
];
