<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4116ce38975770e9adc4ad7fede8048
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TimeNow\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TimeNow\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/TimeNow',
        ),
    );

    public static $classMap = array (
        'TimeNow\\LibraryTime\\timeHour' => __DIR__ . '/../..' . '/app/TimeNow/LibraryTime/TimeRepository.php',
        'TimeNow\\Time\\Hello' => __DIR__ . '/../..' . '/app/TimeNow/Time/Hello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4116ce38975770e9adc4ad7fede8048::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4116ce38975770e9adc4ad7fede8048::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4116ce38975770e9adc4ad7fede8048::$classMap;

        }, null, ClassLoader::class);
    }
}
