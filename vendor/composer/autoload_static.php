<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit273450ac61af38ef0b463dab243729d6
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'B' => 
        array (
            'Bogdan\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Bogdan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Bogdan',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit273450ac61af38ef0b463dab243729d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit273450ac61af38ef0b463dab243729d6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}