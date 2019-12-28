<?php
$sql = new mysqli("127.0.0.1", "root", "root", "bedrijf");

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 * SHA1 HASH:
 * Welkom01 = 057C8C1B2046375DF06E6BDA51FB4CE7528D5625
 */

class Loader
{
    protected static $parentPath = null;
    protected static $paths = null;
    protected static $files = null;
    protected static $nsChar = '\\';
    protected static $initialized = false;

    protected static function initialize()
    {
        if (static::$initialized) {
            return;
        }
        static::$initialized = true;
        static::$parentPath = __FILE__;
        for ($i = substr_count(get_class(), static::$nsChar); $i >= 0; $i--) {
            static::$parentPath = dirname(static::$parentPath);
        }
        static::$paths = array();
        static::$files = array(__FILE__);
    }

    public static function register($path, $namespace)
    {
        if (!static::$initialized) {
            static::initialize();
        }
        static::$paths[$namespace] = trim($path, DIRECTORY_SEPARATOR);
    }

    public static function load($class)
    {
        if (class_exists($class, false)) {
            return;
        }
        if (!static::$initialized) {
            static::initialize();
        }

        foreach (static::$paths as $namespace => $path) {
            if (
                !$namespace ||
                $namespace . static::$nsChar ===
                    substr($class, 0, strlen($namespace . static::$nsChar))
            ) {
                $fileName = substr(
                    $class,
                    strlen($namespace . static::$nsChar) - 1
                );
                $fileName = str_replace(
                    static::$nsChar,
                    DIRECTORY_SEPARATOR,
                    ltrim($fileName, static::$nsChar)
                );
                $fileName =
                    static::$parentPath .
                    DIRECTORY_SEPARATOR .
                    $path .
                    DIRECTORY_SEPARATOR .
                    $fileName .
                    '.php';

                if (file_exists($fileName)) {
                    include $fileName;
                    return true;
                }
            }
        }
        return false;
    }
}
spl_autoload_register(array('Loader', 'load'));

require "TwoFactorAuth/lib/TwoFactorAuth.php";
Loader::register('lib', 'RobThree\\Auth');
use RobThree\Auth\TwoFactorAuth;
$tfa = new RobThree\Auth\TwoFactorAuth(
    'Administratie BelangrijkBedrijf',
    6,
    60
);
$secret = $tfa->createSecret();

?>
