<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd\Players;

use EvenOrOdd\Players\PlayerBase;

final class Player implements PlayerBase
{
    const ODD = 'odd';
    const EVEN = 'even';

    /**
     * @var string name
     */
    private $name;

    /**
     * @var string $opt
     */
    private $opt;

    /**
     * @var int $value
     */
    private $value;

    /**
     * Player constructor.
     *
     * @param string $name
     * @param string $opt
     * @param int $value
     *
     * @throws \Exception
     */
    public function __construct(string $name, string $opt, int $value)
    {
        $this->name = $name;
        if ($opt !== self::EVEN && $opt !== self::ODD) {
            throw new \Exception('Invalid option');
        }
        $this->opt = $opt;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOption(): string
    {
        return $this->opt;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
