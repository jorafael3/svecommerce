<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9d655232cda15967fb369760cb8c64c
{
    public static $classMap = array (
        'Gsitemap' => __DIR__ . '/../..' . '/gsitemap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc9d655232cda15967fb369760cb8c64c::$classMap;

        }, null, ClassLoader::class);
    }
}