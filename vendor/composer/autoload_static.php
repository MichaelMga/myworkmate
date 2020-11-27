<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit867c1a1087a683282674c1bf88aa821b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'E' => 
        array (
            'ElephantIO\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'ElephantIO\\' => 
        array (
            0 => __DIR__ . '/..' . '/wisembly/elephant.io/src',
            1 => __DIR__ . '/..' . '/wisembly/elephant.io/test',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit867c1a1087a683282674c1bf88aa821b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit867c1a1087a683282674c1bf88aa821b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
