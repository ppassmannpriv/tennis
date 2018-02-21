<?php declare(strict_types=1);

namespace Kata\Tests;

use Kata\Match;
use Kata\Player;

/**
 * Class MatchTest
 * @package Kata
 */
class MatchTest extends \PHPUnit_Framework_TestCase
{
    protected $match;
    protected $player1;
    protected $player2;

    public function setUp()
    {
        $this->match = new Match;
        $this->player1 = new Player('Player 1');
        $this->player2 = new Player('Player 2');
    }

    public function testPlayerHasMatchball()
    {
        $this->match->setMatchball($this->player1);
        $this->assertEquals(true, $this->match->checkMatchball($this->player1));
    }

    public function testPlayerHasAdvantageDuringDeuce()
    {
        $this->match->setAdvantage($this->player1);
        $this->assertEquals(true, $this->match->checkAdvantage($this->player1));
    }

    /*public function testMatchIsOver()
    {
        $this->assertEquals(true, $this->match->hasEnded());
    }*/

    /*public function testPlayerHasWon()
    {
        $this->assertEquals('A', $this->match->checkWinner());
    }*/
}