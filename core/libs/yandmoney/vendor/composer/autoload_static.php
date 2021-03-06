<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1085bd57ea5c49e9618cc8a8aad9026
{
    public static $classMap = array (
        'YandexMoney\\API' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/api.php',
        'YandexMoney\\BaseAPI' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/base.php',
        'YandexMoney\\Config' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/base.php',
        'YandexMoney\\Exceptions\\APIException' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/exceptions.php',
        'YandexMoney\\Exceptions\\FormatError' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/exceptions.php',
        'YandexMoney\\Exceptions\\ScopeError' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/exceptions.php',
        'YandexMoney\\Exceptions\\ServerError' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/exceptions.php',
        'YandexMoney\\Exceptions\\TokenError' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/exceptions.php',
        'YandexMoney\\ExternalPayment' => __DIR__ . '/..' . '/yandex-money/yandex-money-sdk-php/lib/external_payment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita1085bd57ea5c49e9618cc8a8aad9026::$classMap;

        }, null, ClassLoader::class);
    }
}
