<?php declare(strict_types=1);

namespace Kata\Tests;

use Kata\Player;

/**
 * Class PlayerTest
 * @package Kata
 */
class PlayerTest
{

    protected $player;

    public function setUp()
    {
        $this->player = new Player('A');
    }

    public function testCanPlayerHaveName()
    {
        $this->assertSame('A', $this->player->getName());
    }

    public function testPlayerCurrentScoreCanBeRetrieved()
    {
        $this->player->score();
        $this->player->score();
        $this->assertEquals(2, $this->player->getCurrentScore());
    }

}