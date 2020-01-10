<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82631aa8b19643c720986d4cfb488f21
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sodecl\\Formulame\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sodecl\\Formulame\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82631aa8b19643c720986d4cfb488f21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82631aa8b19643c720986d4cfb488f21::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}