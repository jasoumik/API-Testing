<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bfc7c5fc1ca25c6b3c7d6feed116fe9
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bfc7c5fc1ca25c6b3c7d6feed116fe9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bfc7c5fc1ca25c6b3c7d6feed116fe9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
