<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb62043e092af54b30a436db8f86302bc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb62043e092af54b30a436db8f86302bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb62043e092af54b30a436db8f86302bc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
