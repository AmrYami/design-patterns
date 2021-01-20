<?php


namespace flyweightClasses;


use flyweightFlyweight\GameTileFlyweight;

class GameTileBorder
{
    private string $style;
    private string $thickness;
    private GameTile $tile;

    /**
     * GameTileBorder constructor.
     */
    public function __construct(string $style, string $thickness, string $color, string $size, string $level)
    {

        $this->style = $style;
        $this->thickness = $thickness;
        $this->tile = GameTileFlyweight::createTile($color, $size, $level);
    }

    /**
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @return string
     */
    public function getThickness(): string
    {
        return $this->thickness;
    }

    /**
     * @return GameTile|mixed
     */
    public function getTile()
    {
        return $this->tile;
    }
}