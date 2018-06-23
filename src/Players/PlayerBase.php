<?php
/**
 * @author LeonamDias <leonam.pd@gmail.com>
 * @package PHP
 */

namespace EvenOrOdd\Players;


interface PlayerBase
{
    public function getName() : string;
    public function getOption() : string;
    public function getValue() : int;
}