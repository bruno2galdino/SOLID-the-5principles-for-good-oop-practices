<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8063b543f2a315bf2a96b92f366d4fcc
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8063b543f2a315bf2a96b92f366d4fcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8063b543f2a315bf2a96b92f366d4fcc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8063b543f2a315bf2a96b92f366d4fcc::$classMap;

        }, null, ClassLoader::class);
    }
}