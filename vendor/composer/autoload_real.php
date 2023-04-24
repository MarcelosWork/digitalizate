<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit595d4f4af04e05298b1d5e2e85ed7e25
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit595d4f4af04e05298b1d5e2e85ed7e25', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit595d4f4af04e05298b1d5e2e85ed7e25', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit595d4f4af04e05298b1d5e2e85ed7e25::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
