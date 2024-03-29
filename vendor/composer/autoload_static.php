<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit850b723a4fa4ae4a35ffc1b8711c3b8b
{
    public static $files = array (
        'edf8f0fbc64829657028dc9e00844540' => __DIR__ . '/../..' . '/src/Http/SetActive.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bashar\\Croute\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bashar\\Croute\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit850b723a4fa4ae4a35ffc1b8711c3b8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit850b723a4fa4ae4a35ffc1b8711c3b8b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
