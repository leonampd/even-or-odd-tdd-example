<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd;

use EvenOrOdd\Players\Player;
use EvenOrOdd\Players\Winner;
use EvenOrOdd\Players\PlayerBase;

class Game
{
    /**
     * @var PlayerBase
     */
    private $player1;

    /**
     * @var PlayerBase
     */
    private $player2;

    public function __construct(PlayerBase $p1, Player $p2)
    {
        $this->player1 = $p1;
        $this->player2 = $p2;
    }

    public function resultIsEven() : bool
    {
        $sum = $this->sumPlayersOptions();
        return ($sum % 2) == 0 ? true : false;
    }

    public function sumPlayersOptions() : int
    {
        return $this->player1->getValue() + $this->player2->getValue();
    }

    public function play() : Result
    {
        $sumResult = $this->sumPlayersOptions();
        $winner = new Winner($this->player2, $sumResult);
        return new Result([$this->player1, $this->player2], $winner);
    }
}
