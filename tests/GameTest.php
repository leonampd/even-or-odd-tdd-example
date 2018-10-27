<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd\Test;

use EvenOrOdd\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function playerEvenWins()
    {
        $player1 = ['opt' => 'odd', 'value' => 1];
        $player2 = ['opt' => 'even', 'value' => 1];

        $game = new Game;

        $this->assertEquals(
            ['result' => 2, 'winner' => 'player2'],
            $game->play($player1, $player2)
        );
    }
}
