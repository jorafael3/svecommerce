<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit483139d7e492c1f9baa6bb6b7995e076
{
    public static $classMap = array (
        'Ps_Currencyselector' => __DIR__ . '/../..' . '/ps_currencyselector.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit483139d7e492c1f9baa6bb6b7995e076::$classMap;

        }, null, ClassLoader::class);
    }
}
