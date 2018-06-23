<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd\Test;

use EvenOrOdd\Game;
use EvenOrOdd\Players\Winner;
use EvenOrOdd\Players\Player;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function playerEvenWins()
    {
        $player1 = new Player('player1', Player::ODD, 1);
        $player2 = new Player('player2', Player::EVEN, 1);

        $game = new Game;

        $winner = $game->play($player1, $player2);
        $this->assertInstanceOf(
            Winner::class,
            $winner
        );

        $this->assertSame($winner->getResult(), 2);
    }
}
