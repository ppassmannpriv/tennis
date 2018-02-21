<?php declare(strict_types=1);

namespace Kata;

/**
 * Class Player
 * @package Kata
 */
class Player
{
    protected $score;
    protected $name;
    protected $matchball;
    protected $advantage;

    public function __construct(
        string $name
    )
    {
        $this->name = $name;
        $this->matchball = false;
        $this->advantage = false;
        $this->score = new Score;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function score()
    {
        $this->score->addPoint();
    }

    public function getCurrentScore() : int
    {
        return $this->score->getCurrentScore();
    }

}