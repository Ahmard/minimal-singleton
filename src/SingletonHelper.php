<?php

namespace Ahmard\Singleton;

final class SingletonHelper
{
    /**
     * @var array<class-string, object>
     */
    private static array $singleton_array = [];

    /**
     * @template TInit as object
     *
     * @param class-string<TInit> $classname
     *
     * @return TInit
     */
    public static function init($classname)
    {
        if (!isset(self::$singleton_array[$classname])) {
            self::$singleton_array[$classname] = new $classname();
        }

        $return = self::$singleton_array[$classname];
        assert(is_a($return, $classname, true));

        return $return;
    }

    /**
     * @template TInit as object
     *
     * @param class-string<TInit> $classname
     *
     * @return TInit|null
     */
    public static function get($classname)
    {
        if (!isset(self::$singleton_array[$classname])) {
            return null;
        }

        $return = self::$singleton_array[$classname];
        assert(is_a($return, $classname, true));

        return $return;
    }

    /**
     * @return array<class-string, object>
     */
    public static function getAll(): array
    {
        return self::$singleton_array;
    }
}
