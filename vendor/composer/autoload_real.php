<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc8b27e8ba8c03c3550f8284d999dc4c8
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

        spl_autoload_register(array('ComposerAutoloaderInitc8b27e8ba8c03c3550f8284d999dc4c8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc8b27e8ba8c03c3550f8284d999dc4c8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc8b27e8ba8c03c3550f8284d999dc4c8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
