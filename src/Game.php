<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd;


class Game
{
    public function play(array $player1, array $player2) : array
    {
        return [
            'result' => 2,
            'winner' => 'player2'
        ];
    }
}