<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd;

use EvenOrOdd\Players\Winner;
use EvenOrOdd\Players\PlayerBase;

class Game
{
    public function play(PlayerBase $player1, PlayerBase $player2) : Winner
    {
        return new Winner($player2, 2);
    }
}
