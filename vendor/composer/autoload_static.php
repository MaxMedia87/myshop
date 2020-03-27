<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2285ae2d5cc6e01d974b8d63583295e
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2285ae2d5cc6e01d974b8d63583295e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2285ae2d5cc6e01d974b8d63583295e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
