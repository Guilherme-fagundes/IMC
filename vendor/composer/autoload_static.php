<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d63a2e079486b679826b1643dce2fe6
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Guilherme\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Guilherme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d63a2e079486b679826b1643dce2fe6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d63a2e079486b679826b1643dce2fe6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d63a2e079486b679826b1643dce2fe6::$classMap;

        }, null, ClassLoader::class);
    }
}
