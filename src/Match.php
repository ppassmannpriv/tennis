<?php declare(strict_types=1);

namespace Kata;

/**
 * Class Match
 * @package Kata
 */
class Match
{
    protected $matchFinished;
    //protected $player1;
    //protected $player2;

    public function __construct()
    {
        $this->matchFinished = false;
        //$this->player1 = new Player('A');
        //$this->player2 = new Player('B');
    }

    public function checkMatchball() : Player
    {

    }

    public function checkAdvantage() : Player
    {

    }

    public function hasEnded() : bool
    {
        return $this->matchFinished;
    }

    public function checkWinner() : Player
    {

    }

}