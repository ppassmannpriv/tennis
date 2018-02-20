<?php declare(strict_types=1);

namespace Kata\Tests;

use Kata\Match;

/**
 * Class MatchTest
 * @package Kata
 */
class MatchTest extends \PHPUnit_Framework_TestCase
{
    protected $match;

    public function setUp()
    {
        $this->match = new Match;
    }

    public function testPlayerHasMatchball()
    {
        $this->assertEquals(true, $this->match->checkMatchball());
    }

    public function testPlayerHasAdvantageDuringDeuce()
    {
        $this->assertEquals(false, $this->match->checkMatchball());
        $this->assertEquals(true, $this->match->checkAdvantage());
    }

    public function testMatchIsOver()
    {
        $this->assertEquals(true, $this->match->hasEnded());
    }

    public function testPlayerHasWon()
    {
        $this->assertEquals('A', $this->match->checkWinner());
    }
}