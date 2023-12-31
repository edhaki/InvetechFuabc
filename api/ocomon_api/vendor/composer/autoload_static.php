<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80b8ca92fe3a77c3733992202b59fe3d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'O' => 
        array (
            'OcomonApi\\' => 10,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\Paginator\\' => 21,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'OcomonApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\Paginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/paginator/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80b8ca92fe3a77c3733992202b59fe3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80b8ca92fe3a77c3733992202b59fe3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80b8ca92fe3a77c3733992202b59fe3d::$classMap;

        }, null, ClassLoader::class);
    }
}
