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

    /**
     * @test
     */
    public function mustSumPlayersOptions()
    {
        $player1 = new Player('player1', Player::ODD, 3);
        $player2 = new Player('player2', Player::EVEN, 5);

        $game = new Game($player1, $player2);

        $this->assertSame(8, $game->sumPlayersOptions());
    }

    /**
     * @test
     */
    public function mustKnowIfResultIsEvenOrOdd()
    {
        $player1 = new Player('player1', Player::ODD, 3);
        $player2 = new Player('player2', Player::EVEN, 5);

        $game = new Game($player1, $player2);

        $this->assertTrue($game->resultIsEven());
    }

    /**
     * @test
     */
    public function mustReturnTheWinner()
    {
        $player1 = new Player('player1', Player::ODD, 3);
        $expectedWinner = new Player('player2', Player::EVEN, 5);

        $game = new Game($player1, $expectedWinner);

        $result = $game->play();

        $this->assertEquals($expectedWinner, $result->getWinner()->getPlayer());
    }
}
