<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit916ec0cce62bdfade31036ccd3657962
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit916ec0cce62bdfade31036ccd3657962::$classMap;

        }, null, ClassLoader::class);
    }
}
