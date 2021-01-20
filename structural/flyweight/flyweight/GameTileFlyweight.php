<?php


namespace flyweightFlyweight;


use flyweightClasses\GameTile;

class GameTileFlyweight
{

    private static array $tiles = [];

    /**
     * @return array
     */
    public static function getTiles(): array
    {
        echo '<pre>';
        print_r(self::$tiles);
        echo '</pre>';

    }

    public function createTile(string $color, string $size, string $level)
    {
        $hash = md5($color . $size . $level);
        if (!array_key_exists($hash, self::$tiles)) {
            self::$tiles[$hash] = new GameTile($color, $size, $level);
        }
        return self::$tiles[$hash];
    }
}