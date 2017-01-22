<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit571f9d19802717f7be61d57b40d60b28
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'splitbrain\\PHPArchive\\' => 22,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'splitbrain\\PHPArchive\\' => 
        array (
            0 => __DIR__ . '/..' . '/splitbrain/php-archive/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit571f9d19802717f7be61d57b40d60b28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit571f9d19802717f7be61d57b40d60b28::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
