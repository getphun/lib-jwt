<?php
/**
 * lib-jwt config file
 * @package lib-jwt
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'lib-jwt',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/lib-jwt',
    '__files' => [
        'modules/lib-jwt' => [
            'install',
            'remove',
            'update'
        ]
    ],
    '__dependencies' => [],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'Lcobucci\\JWT\\Builder' => 'modules/lib-jwt/third-party/jwt/Builder.php',
            'Lcobucci\\JWT\\Claim\\Basic' => 'modules/lib-jwt/third-party/jwt/Claim/Basic.php',
            'Lcobucci\\JWT\\Claim\\EqualsTo' => 'modules/lib-jwt/third-party/jwt/Claim/EqualsTo.php',
            'Lcobucci\\JWT\\Claim\\Factory' => 'modules/lib-jwt/third-party/jwt/Claim/Factory.php',
            'Lcobucci\\JWT\\Claim\\GreaterOrEqualsTo' => 'modules/lib-jwt/third-party/jwt/Claim/GreaterOrEqualsTo.php',
            'Lcobucci\\JWT\\Claim\\LesserOrEqualsTo' => 'modules/lib-jwt/third-party/jwt/Claim/LesserOrEqualsTo.php',
            'Lcobucci\\JWT\\Claim\\Validatable' => 'modules/lib-jwt/third-party/jwt/Claim/Validatable.php',
            'Lcobucci\\JWT\\Claim' => 'modules/lib-jwt/third-party/jwt/Claim.php',
            'Lcobucci\\JWT\\Parser' => 'modules/lib-jwt/third-party/jwt/Parser.php',
            'Lcobucci\\JWT\\Parsing\\Decoder' => 'modules/lib-jwt/third-party/jwt/Parsing/Decoder.php',
            'Lcobucci\\JWT\\Parsing\\Encoder' => 'modules/lib-jwt/third-party/jwt/Parsing/Encoder.php',
            'Lcobucci\\JWT\\Signature' => 'modules/lib-jwt/third-party/jwt/Signature.php',
            'Lcobucci\\JWT\\Signer\\BaseSigner' => 'modules/lib-jwt/third-party/jwt/Signer/BaseSigner.php',
            'Lcobucci\\JWT\\Signer\\Ecdsa\\KeyParser' => 'modules/lib-jwt/third-party/jwt/Signer/Ecdsa/KeyParser.php',
            'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256' => 'modules/lib-jwt/third-party/jwt/Signer/Ecdsa/Sha256.php',
            'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha384' => 'modules/lib-jwt/third-party/jwt/Signer/Ecdsa/Sha384.php',
            'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha512' => 'modules/lib-jwt/third-party/jwt/Signer/Ecdsa/Sha512.php',
            'Lcobucci\\JWT\\Signer\\Ecdsa' => 'modules/lib-jwt/third-party/jwt/Signer/Ecdsa.php',
            'Lcobucci\\JWT\\Signer\\Hmac\\Sha256' => 'modules/lib-jwt/third-party/jwt/Signer/Hmac/Sha256.php',
            'Lcobucci\\JWT\\Signer\\Hmac\\Sha384' => 'modules/lib-jwt/third-party/jwt/Signer/Hmac/Sha384.php',
            'Lcobucci\\JWT\\Signer\\Hmac\\Sha512' => 'modules/lib-jwt/third-party/jwt/Signer/Hmac/Sha512.php',
            'Lcobucci\\JWT\\Signer\\Hmac' => 'modules/lib-jwt/third-party/jwt/Signer/Hmac.php',
            'Lcobucci\\JWT\\Signer\\Key' => 'modules/lib-jwt/third-party/jwt/Signer/Key.php',
            'Lcobucci\\JWT\\Signer\\Keychain' => 'modules/lib-jwt/third-party/jwt/Signer/Keychain.php',
            'Lcobucci\\JWT\\Signer\\Rsa\\Sha256' => 'modules/lib-jwt/third-party/jwt/Signer/Rsa/Sha256.php',
            'Lcobucci\\JWT\\Signer\\Rsa\\Sha384' => 'modules/lib-jwt/third-party/jwt/Signer/Rsa/Sha384.php',
            'Lcobucci\\JWT\\Signer\\Rsa\\Sha512' => 'modules/lib-jwt/third-party/jwt/Signer/Rsa/Sha512.php',
            'Lcobucci\\JWT\\Signer\\Rsa' => 'modules/lib-jwt/third-party/jwt/Signer/Rsa.php',
            'Lcobucci\\JWT\\Signer' => 'modules/lib-jwt/third-party/jwt/Signer.php',
            'Lcobucci\\JWT\\Token' => 'modules/lib-jwt/third-party/jwt/Token.php',
            'Lcobucci\\JWT\\ValidationData' => 'modules/lib-jwt/third-party/jwt/ValidationData.php'
        ],
        'files' => []
    ]
];