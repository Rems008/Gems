<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8b27e8ba8c03c3550f8284d999dc4c8
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gems\\App\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gems\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8b27e8ba8c03c3550f8284d999dc4c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8b27e8ba8c03c3550f8284d999dc4c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8b27e8ba8c03c3550f8284d999dc4c8::$classMap;

        }, null, ClassLoader::class);
    }
}
