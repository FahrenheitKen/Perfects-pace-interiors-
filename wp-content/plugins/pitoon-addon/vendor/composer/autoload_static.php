<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6d18c4f8fabede2ae3480fa884be4e6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Layerdrops\\Pitoon\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Layerdrops\\Pitoon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6d18c4f8fabede2ae3480fa884be4e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6d18c4f8fabede2ae3480fa884be4e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6d18c4f8fabede2ae3480fa884be4e6::$classMap;

        }, null, ClassLoader::class);
    }
}
