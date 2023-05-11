<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f6dd09f015db79c579cd544903abae1
{
    public static $files = array (
        'b416e987906a63283fd72878dacd3650' => __DIR__ . '/../..' . '/lib/class-html-data-table.php',
        '1e1c590c4e48c0c0f915ef317df92a09' => __DIR__ . '/../..' . '/lib/class-wp-scoped-hooks.php',
        '79dfa8a0f7e1087acf3cdac5acb1ac69' => __DIR__ . '/../..' . '/includes/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTRT\\AdminNotices\\' => 19,
        ),
        'B' => 
        array (
            'Barn2\\WPT_Lib\\' => 14,
            'Barn2\\Plugin\\WC_Product_Table\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTRT\\AdminNotices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/vendor/admin-notices/src',
        ),
        'Barn2\\WPT_Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Barn2\\Plugin\\WC_Product_Table\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Api' => __DIR__ . '/../..' . '/dependencies/src/Api.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Bootable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Bootable.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Deferrable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Deferrable.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Pluggable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Pluggable.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Restartable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Restartable.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Setup_Wizard' => __DIR__ . '/../..' . '/dependencies/src/Setup_Wizard.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Starter' => __DIR__ . '/../..' . '/dependencies/src/Starter.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Step' => __DIR__ . '/../..' . '/dependencies/src/Step.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Cross_Selling' => __DIR__ . '/../..' . '/dependencies/src/Steps/Cross_Selling.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Ready' => __DIR__ . '/../..' . '/dependencies/src/Steps/Ready.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Welcome' => __DIR__ . '/../..' . '/dependencies/src/Steps/Welcome.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Welcome_Free' => __DIR__ . '/../..' . '/dependencies/src/Steps/Welcome_Free.php',
        'Barn2\\Plugin\\WC_Product_Table\\Dependencies\\Barn2\\Setup_Wizard\\Util' => __DIR__ . '/../..' . '/dependencies/src/Util.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f6dd09f015db79c579cd544903abae1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f6dd09f015db79c579cd544903abae1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f6dd09f015db79c579cd544903abae1::$classMap;

        }, null, ClassLoader::class);
    }
}