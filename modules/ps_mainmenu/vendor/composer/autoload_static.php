<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde0d93181fb28f3e2354376cc1b3c685
{
    public static $classMap = array (
        'Ps_MainMenu' => __DIR__ . '/../..' . '/ps_mainmenu.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitde0d93181fb28f3e2354376cc1b3c685::$classMap;

        }, null, ClassLoader::class);
    }
}
