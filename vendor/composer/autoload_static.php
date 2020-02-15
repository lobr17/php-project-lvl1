<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit667494ec8ae68a596dc53d204cb1d370
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '67ef229a2639ba5b12ba4e30a644fc95' => __DIR__ . '/../..' . '/games/even.php',
        '945d0296b496c60379804f7265ce1a92' => __DIR__ . '/../..' . '/games/calc.php',
        '26c30d6f77823749c00919166257b3cf' => __DIR__ . '/../..' . '/games/gcd.php',
        'da950d24d2ed884a67a46fe7bc5447ba' => __DIR__ . '/../..' . '/games/progression.php',
        '523225593999b5f5069b265dbf6530b9' => __DIR__ . '/../..' . '/games/prime.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit667494ec8ae68a596dc53d204cb1d370::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
