<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd;

use EvenOrOdd\Player;

class Game
{
    public function play(Player $player1, Player $player2) : Player
    {
        return new Player('player2', Player::EVEN, 1);
    }
}