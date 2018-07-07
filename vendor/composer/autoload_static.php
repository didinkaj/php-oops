<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa1b8eb94b19a1d92d9ee8cfca665c4b
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'didinka\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'didinka\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'didinka\\Greeting' => __DIR__ . '/../..' . '/src/customlib/Greeting.php',
        'didinka\\Humans' => __DIR__ . '/../..' . '/src/includes/Humans.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa1b8eb94b19a1d92d9ee8cfca665c4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa1b8eb94b19a1d92d9ee8cfca665c4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa1b8eb94b19a1d92d9ee8cfca665c4b::$classMap;

        }, null, ClassLoader::class);
    }
}
