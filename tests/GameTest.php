<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd\Test;

use EvenOrOdd\Game;
use EvenOrOdd\Result;
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

        $game = new Game($player1, $player2);

        $result = $game->play();
        $this->assertInstanceOf(
            Result::class,
            $result
        );

        $this->assertSame($result->getResult(), 2);
    }

    /**
     * @test
     */
    public function mustReturnCorrectResult()
    {
        $player1 = new Player('player1', Player::ODD, 5);
        $player2 = new Player('player2', Player::EVEN, 5);

        $game = new Game($player1, $player2);
        $result = $game->play();

        $this->assertSame(10, $result->getResult());
    }
}
