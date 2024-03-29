<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc1d0f0f55c590a6bda21b920cf9df07e
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

        spl_autoload_register(array('ComposerAutoloaderInitc1d0f0f55c590a6bda21b920cf9df07e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc1d0f0f55c590a6bda21b920cf9df07e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc1d0f0f55c590a6bda21b920cf9df07e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
