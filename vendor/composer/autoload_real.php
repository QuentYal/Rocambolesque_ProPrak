<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit43a3bae89244ab186eb6949ece895408
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit43a3bae89244ab186eb6949ece895408', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit43a3bae89244ab186eb6949ece895408', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit43a3bae89244ab186eb6949ece895408::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
