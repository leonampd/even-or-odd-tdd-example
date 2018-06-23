<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd;


use EvenOrOdd\Players\PlayerBase;
use EvenOrOdd\Players\Winner;

class Result
{
    /**
     * @var \EvenOrOdd\Players\Winner
     */
    private $winner;

    /**
     * @var \EvenOrOdd\Players\PlayerBase[]
     */
    private $players;

    public function __construct(array $players, Winner $winner)
    {
        $this->players = $players;
        $this->winner = $winner;
    }

    public function getResult()
    {
        return $this->winner->getResult();
    }
}