<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit498f9f7355322abc7a1c21a392b05fc3
{
    public static $classMap = array (
        'Ps_Languageselector' => __DIR__ . '/../..' . '/ps_languageselector.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit498f9f7355322abc7a1c21a392b05fc3::$classMap;

        }, null, ClassLoader::class);
    }
}
