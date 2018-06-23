<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd\Players;

final class Winner implements PlayerBase
{
    /**
     * @var Player
     */
    private $player;

    /**
     * @var int
     */
    private $result;

    public function __construct(Player $player, $result)
    {
        $this->player = $player;
        $this->result = $result;
    }

    public function getName(): string
    {
        $this->player->getName();
    }

    public function getOption(): string
    {
        $this->player->getOtion();
    }

    public function getValue(): int
    {
        $this->player->getValue();
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }


}