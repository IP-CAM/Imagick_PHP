<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit817644f1f6ffee7bf6881be2261dcbbd
{
    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagick' => 
            array (
                0 => __DIR__ . '/..' . '/calcinai/php-imagick/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit817644f1f6ffee7bf6881be2261dcbbd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}