<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89396a822212ae70aa6f53f18b6814ef
{
    public static $classMap = array (
        'Ps_Wirepayment' => __DIR__ . '/../..' . '/ps_wirepayment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit89396a822212ae70aa6f53f18b6814ef::$classMap;

        }, null, ClassLoader::class);
    }
}
