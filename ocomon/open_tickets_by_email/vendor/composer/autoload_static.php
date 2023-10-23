<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcec8d69740cc440cfed2b86a2237edc
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Ddeboer\\Imap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ddeboer\\Imap\\' => 
        array (
            0 => __DIR__ . '/..' . '/ddeboer/imap/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcec8d69740cc440cfed2b86a2237edc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcec8d69740cc440cfed2b86a2237edc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcec8d69740cc440cfed2b86a2237edc::$classMap;

        }, null, ClassLoader::class);
    }
}
