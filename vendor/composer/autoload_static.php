<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7421de6b238d459b527abecf7fd7a113
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'img\\email_validator\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'img\\email_validator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7421de6b238d459b527abecf7fd7a113::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7421de6b238d459b527abecf7fd7a113::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}