<?php declare(strict_types=1);

namespace Kata\Tests;

use Kata\Score;

/**
 * Class ScoreTest
 * @package Kata
 */
class ScoreTest extends \PHPUnit_Framework_TestCase
{
    protected $score;

    public function setUp()
    {
        $this->score = new Score;
    }

    public function testCanPointsBeAddedToCurrentScore()
    {
        $this->score->addPoint();
        $this->assertEquals(1, $this->score->getCurrentScore());
    }
}