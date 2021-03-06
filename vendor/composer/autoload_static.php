<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90176cd6dd9399f737d8dcc7da7005e9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Antron\\Ivsi\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Antron\\Ivsi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Antron\\Ivsi\\Ivsi' => __DIR__ . '/../..' . '/src/Ivsi.php',
        'Antron\\Ivsi\\IvsiServiceProvider' => __DIR__ . '/../..' . '/src/IvsiServiceProvider.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90176cd6dd9399f737d8dcc7da7005e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90176cd6dd9399f737d8dcc7da7005e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90176cd6dd9399f737d8dcc7da7005e9::$classMap;

        }, null, ClassLoader::class);
    }
}
