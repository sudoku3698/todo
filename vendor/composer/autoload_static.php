<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb27982d2e73b8b3703b985e7af67b193
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sudoku3698\\Todo\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sudoku3698\\Todo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb27982d2e73b8b3703b985e7af67b193::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb27982d2e73b8b3703b985e7af67b193::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
