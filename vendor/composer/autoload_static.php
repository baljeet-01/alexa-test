<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9981d604903c9586018bdae3b1324c65
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Weysan\\Alexa\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'M' => 
        array (
            'MaxBeckers\\AmazonAlexa\\' => 23,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'B' => 
        array (
            'Baljeet\\Alexa\\' => 14,
        ),
        'A' => 
        array (
            'Alexa\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Weysan\\Alexa\\' => 
        array (
            0 => __DIR__ . '/..' . '/weysan/alexa-request',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'MaxBeckers\\AmazonAlexa\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxbeckers/amazon-alexa-php/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Baljeet\\Alexa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Alexa\\' => 
        array (
            0 => __DIR__ . '/..' . '/minicodemonkey/amazon-alexa-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9981d604903c9586018bdae3b1324c65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9981d604903c9586018bdae3b1324c65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9981d604903c9586018bdae3b1324c65::$classMap;

        }, null, ClassLoader::class);
    }
}
