<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd;


final class Player
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
}