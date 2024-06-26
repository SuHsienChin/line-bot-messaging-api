<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2439a590dff3f57ea2adbc4bfab166c0
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '9c67151ae59aff4788964ce8eb2a0f43' => __DIR__ . '/..' . '/clue/stream-filter/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '8cff32064859f4559445b89279f3199c' => __DIR__ . '/..' . '/php-http/message/src/filters.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'L' => 
        array (
            'LINE\\Webhook\\' => 13,
            'LINE\\Parser\\' => 12,
            'LINE\\Laravel\\' => 13,
            'LINE\\Constants\\' => 15,
            'LINE\\Clients\\MessagingApi\\' => 26,
            'LINE\\Clients\\ManageAudience\\' => 28,
            'LINE\\Clients\\Liff\\' => 18,
            'LINE\\Clients\\Insight\\' => 21,
            'LINE\\Clients\\ChannelAccessToken\\' => 32,
        ),
        'H' => 
        array (
            'Http\\Promise\\' => 13,
            'Http\\Message\\' => 13,
            'Http\\Discovery\\' => 15,
            'Http\\Client\\Curl\\' => 17,
            'Http\\Client\\' => 12,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Clue\\StreamFilter\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'LINE\\Webhook\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/webhook/lib',
        ),
        'LINE\\Parser\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/parser/lib',
        ),
        'LINE\\Laravel\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/laravel/lib',
        ),
        'LINE\\Constants\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/constants',
        ),
        'LINE\\Clients\\MessagingApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/clients/messaging-api/lib',
        ),
        'LINE\\Clients\\ManageAudience\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/clients/manage-audience/lib',
        ),
        'LINE\\Clients\\Liff\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/clients/liff/lib',
        ),
        'LINE\\Clients\\Insight\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/clients/insight/lib',
        ),
        'LINE\\Clients\\ChannelAccessToken\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src/clients/channel-access-token/lib',
        ),
        'Http\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/promise/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message/src',
        ),
        'Http\\Discovery\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/discovery/src',
        ),
        'Http\\Client\\Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/curl-client/src',
        ),
        'Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/httplug/src',
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
        'Clue\\StreamFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/stream-filter/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2439a590dff3f57ea2adbc4bfab166c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2439a590dff3f57ea2adbc4bfab166c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2439a590dff3f57ea2adbc4bfab166c0::$classMap;

        }, null, ClassLoader::class);
    }
}
