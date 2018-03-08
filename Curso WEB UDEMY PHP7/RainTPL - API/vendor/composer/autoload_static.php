<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea1cff094893baa5d198f943f3dfc73b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea1cff094893baa5d198f943f3dfc73b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea1cff094893baa5d198f943f3dfc73b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitea1cff094893baa5d198f943f3dfc73b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}