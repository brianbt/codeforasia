<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e0559de48406378a99ec1e69c203d65
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EasyCSRF\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EasyCSRF\\' => 
        array (
            0 => __DIR__ . '/..' . '/gilbitron/easycsrf/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e0559de48406378a99ec1e69c203d65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e0559de48406378a99ec1e69c203d65::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
