<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95d1b4e5d3479efaf105848f37b3cf4d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProteusThemes\\WPContentImporter2\\' => 33,
        ),
        'O' => 
        array (
            'OCDI\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProteusThemes\\WPContentImporter2\\' => 
        array (
            0 => __DIR__ . '/..' . '/proteusthemes/wp-content-importer-v2/src',
        ),
        'OCDI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95d1b4e5d3479efaf105848f37b3cf4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95d1b4e5d3479efaf105848f37b3cf4d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}