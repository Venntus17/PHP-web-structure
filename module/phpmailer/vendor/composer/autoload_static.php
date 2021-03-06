<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4083b34143a92ae10e6ebe6a983f0974
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4083b34143a92ae10e6ebe6a983f0974::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4083b34143a92ae10e6ebe6a983f0974::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
