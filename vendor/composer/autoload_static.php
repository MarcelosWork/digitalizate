<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit595d4f4af04e05298b1d5e2e85ed7e25
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit595d4f4af04e05298b1d5e2e85ed7e25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit595d4f4af04e05298b1d5e2e85ed7e25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit595d4f4af04e05298b1d5e2e85ed7e25::$classMap;

        }, null, ClassLoader::class);
    }
}
