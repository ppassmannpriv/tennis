<?php declare(strict_types=1);

namespace Kata\Tests;

use Kata\Match;

/**
 * Class MatchTest
 * @package Kata
 */
class MatchTest
{
    protected $playerA;
    protected $playerB;

    public function testPlayerHasMatchball()
    {
        $this->assertEquals(true, $this->playerA->hasMatchball());
    }

    public function testPlayerHasAdvantageDuringDeuce()
    {
        $this->assertEquals(false, $this->playerA->hasMatchball());
        $this->assertEquals(false, $this->playerB->hasMatchball());
        $this->assertEquals(true, $this->playerA->hasAdvantage());
    }
}