<?php declare(strict_types=1);

namespace Kata;

/**
 * Class Score
 * @package Kata
 */
class Score
{
    private $current;

    public function __construct()
    {
        $this->current = 0;
    }

    public function addPoint()
    {
        $this->current++;
    }

    public function getCurrentScore()
    {
        return $this->current;
    }

}