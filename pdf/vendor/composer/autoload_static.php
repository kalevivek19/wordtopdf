<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fa30907a790c230e50f38a403d8764e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ilovepdf\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ilovepdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/ilovepdf/ilovepdf-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fa30907a790c230e50f38a403d8764e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fa30907a790c230e50f38a403d8764e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fa30907a790c230e50f38a403d8764e::$classMap;

        }, null, ClassLoader::class);
    }
}