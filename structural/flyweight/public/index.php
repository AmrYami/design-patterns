<?php

require __DIR__ . '/../../../vendor/autoload.php';
use \flyweightClasses\GameTileBorder;
use \flyweightClasses\GameTileColor;
use \flyweightClasses\GameTileLevel;
use \flyweightClasses\GameBoard;
function info()
{
    try {
        $board = new GameBoard();
        $borderTile = new GameTileBorder('Dashed', 'Thick',
            GameTileColor::TILE_COLOR_GREEN, '100*100',
            GameTileLevel::TILE_LEVEL_BEGINNER);

        $borderTile1 = new GameTileBorder('Dashed', 'Thick',
            GameTileColor::TILE_COLOR_GREEN, '100*100',
            GameTileLevel::TILE_LEVEL_BEGINNER);

        $borderTile2 = new GameTileBorder('Dashed', 'Thick',
            GameTileColor::TILE_COLOR_GREEN, '100*100',
            GameTileLevel::TILE_LEVEL_BEGINNER);

        $borderTile3 = new GameTileBorder('Dashed', 'Thin',
            GameTileColor::TILE_COLOR_GREEN, '100*100',
            GameTileLevel::TILE_LEVEL_EXPERT);

        $borderTile4 = new GameTileBorder('Dashed', 'Thick',
            GameTileColor::TILE_COLOR_GREEN, '100*100',
            GameTileLevel::TILE_LEVEL_BEGINNER);

        $borderTile5 = new GameTileBorder('Dashed', 'Thick',
            GameTileColor::TILE_COLOR_GREEN, '150*150',
            GameTileLevel::TILE_LEVEL_BEGINNER);

        $board->addTile($borderTile);
        $board->addTile($borderTile1);
        $board->addTile($borderTile2);
        $board->addTile($borderTile3);
        $board->addTile($borderTile4);
        $board->addTile($borderTile5);

//echo $board . "\n";
        \flyweightFlyweight\GameTileFlyweight::getTiles();


        echo '<br>';
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();