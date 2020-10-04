<?php


namespace flyweightClasses;


class GameBoard
{

    private ?array $tiles;

    /**
     * GameBoard constructor.
     * @param array|null $tiles
     */
    public function __construct(?array $tiles = []){

        $this->tiles = $tiles;
    }

    public function addTile(GameTileBorder $tileBorder):void{
        array_push($this->tiles, $tileBorder);
    }

    public function __toString(): string
    {
        return join("\n", array_map(fn(GameTileBorder $border) =>
                $border->getStyle() .
                ' | '.
                $border->getThickness() .
                ' | '.
                $border->getTile()->getColor() .
                ' | '.
                $border->getTile()->getSize() .
                ' | '.
                $border->getTile()->getLevel()
                ,$this->tiles)
        );
    }
}