<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87f2a13602be4b806e7adadc12e2f293
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ngenius\\NgeniusCommon\\' => 22,
            'NGenius\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ngenius\\NgeniusCommon\\' => 
        array (
            0 => __DIR__ . '/..' . '/ngenius/ngenius-common/src',
        ),
        'NGenius\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87f2a13602be4b806e7adadc12e2f293::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87f2a13602be4b806e7adadc12e2f293::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87f2a13602be4b806e7adadc12e2f293::$classMap;

        }, null, ClassLoader::class);
    }
}
