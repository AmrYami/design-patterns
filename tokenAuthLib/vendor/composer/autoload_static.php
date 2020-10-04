<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit392a05f595a7ddb1a30d760442e1d423
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TokenAuthClasses\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TokenAuthClasses\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit392a05f595a7ddb1a30d760442e1d423::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit392a05f595a7ddb1a30d760442e1d423::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}