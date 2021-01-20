<?php


namespace flyweightFactories;


use flyweightClasses\GameTile;

class GameTileFactory
{

    private static array $tiles = [];

    public function createTile(string $color, string $size, string $level)
    {
        $hash = md5($color . $size . $level);
        if (!array_key_exists($hash, self::$tiles)) {
            self::$tiles[$hash] = new GameTile($color, $size, $level);
        }
        return self::$tiles[$hash];
    }
}