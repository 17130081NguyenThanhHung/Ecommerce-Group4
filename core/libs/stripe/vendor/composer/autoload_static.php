<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit084a27dee4693ddc80bb03b800c7dfd6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit084a27dee4693ddc80bb03b800c7dfd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit084a27dee4693ddc80bb03b800c7dfd6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
