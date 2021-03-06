<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e138c2ea339d682ba75a596cb633514
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Viblo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Viblo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e138c2ea339d682ba75a596cb633514::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e138c2ea339d682ba75a596cb633514::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e138c2ea339d682ba75a596cb633514::$classMap;

        }, null, ClassLoader::class);
    }
}
