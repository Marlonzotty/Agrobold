<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2c16ebb985bfc3057f332f09abfaafa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2c16ebb985bfc3057f332f09abfaafa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2c16ebb985bfc3057f332f09abfaafa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2c16ebb985bfc3057f332f09abfaafa::$classMap;

        }, null, ClassLoader::class);
    }
}
