<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf0fa9e3a2ac85d9b7d43da44eaf0038
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LeePrince\\WeChat\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LeePrince\\WeChat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf0fa9e3a2ac85d9b7d43da44eaf0038::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf0fa9e3a2ac85d9b7d43da44eaf0038::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
