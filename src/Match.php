<?php declare(strict_types=1);

namespace Kata;

/**
 * Class Match
 * @package Kata
 */
class Match
{
    private $matchFinished;
    private $matchball;
    private $advantage;
    //protected $player1;
    //protected $player2;

    public function __construct()
    {
        $this->matchFinished = false;
        //$this->player1 = new Player('A');
        //$this->player2 = new Player('B');
    }

    public function play(Player $winner, Player $loser)
    {
        if($this->hasEnded() === false)
        {
            $winner->score();
            $this->setAdvantage($winner);

            if($winner->getCurrentScore() - $loser->getCurrentScore() >= 1)
            {
                $this->setMatchball($winner);
            }

            if($winner->getCurrentScore() > 3 && ($winner->getCurrentScore() - $loser->getCurrentScore() >= 1))
            {
                $this->endMatch();
            }
        }
    }

    public function checkMatchball(Player $player)
    {
        return $player === $this->matchball;
    }

    public function checkAdvantage(Player $player)
    {
        return $player === $this->advantage;
    }

    public function hasEnded() : bool
    {
        return $this->matchFinished;
    }

    private function endMatch()
    {
        $this->matchFinished = true;
    }

    /*public function checkWinner() : Player
    {

    }*/

    public function setMatchball(Player $player)
    {
        $this->matchball = $player;
    }

    public function getMatchball()
    {
        return $this->matchball;
    }

    public function setAdvantage(Player $player)
    {
        $this->advantage = $player;
    }

    public function getAdvantage()
    {
        return $this->advantage;
    }

    public function resetMatchball()
    {
        $this->matchball = false;
    }

    public function resetAdvantage()
    {
        $this->matchball = false;
    }

}