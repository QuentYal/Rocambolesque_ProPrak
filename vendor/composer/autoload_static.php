<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43a3bae89244ab186eb6949ece895408
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raoul\\Validator\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raoul\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/raoul/php-validator/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit43a3bae89244ab186eb6949ece895408::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43a3bae89244ab186eb6949ece895408::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43a3bae89244ab186eb6949ece895408::$classMap;

        }, null, ClassLoader::class);
    }
}
