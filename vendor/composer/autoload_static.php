<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd27f15ca1ba97ad6d75274e74d5894c3
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CjwPhpDesign\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CjwPhpDesign\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd27f15ca1ba97ad6d75274e74d5894c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd27f15ca1ba97ad6d75274e74d5894c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}