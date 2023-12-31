<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66494dfb06d68049156e730708154b32
{
    public static $files = array (
        'f1ea5a45e6b017ec562097a94f1ee3a4' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaxon\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaxon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Jaxon\\Admin' => __DIR__ . '/../..' . '/inc/Admin.php',
        'Jaxon\\Assets_Manager' => __DIR__ . '/../..' . '/inc/Assets_Manager.php',
        'Jaxon\\Block_Patterns' => __DIR__ . '/../..' . '/inc/Block_Patterns.php',
        'Jaxon\\Block_Styles' => __DIR__ . '/../..' . '/inc/Block_Styles.php',
        'Jaxon\\Constants' => __DIR__ . '/../..' . '/inc/Constants.php',
        'Jaxon\\Core' => __DIR__ . '/../..' . '/inc/Core.php',
        'Jaxon\\Starter_Content' => __DIR__ . '/../..' . '/inc/Starter_Content.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66494dfb06d68049156e730708154b32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66494dfb06d68049156e730708154b32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66494dfb06d68049156e730708154b32::$classMap;

        }, null, ClassLoader::class);
    }
}
