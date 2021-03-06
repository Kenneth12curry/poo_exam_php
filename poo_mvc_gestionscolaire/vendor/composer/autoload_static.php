<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd35e117d27c2dedbaf49de3d8edc6c8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Exceptions\\' => 15,
            'App\\Core\\' => 9,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/exceptions',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd35e117d27c2dedbaf49de3d8edc6c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd35e117d27c2dedbaf49de3d8edc6c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd35e117d27c2dedbaf49de3d8edc6c8::$classMap;

        }, null, ClassLoader::class);
    }
}
