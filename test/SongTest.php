<?php

namespace Test;

use App\Song;
use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    /** @test */
    public function it_gets_the_lyrics_by_verse()
    {
        $result = (new Song)->verse(99);

        $this->assertEquals(<<<EOF
            99 bottles of beer on the wall, 99 bottles of beer.
            Take one down and pass it around, 98 bottles of beer on the wall.\n
            EOF
            , $result);
    }

    /** @test */
    public function it_gets_the_lyrics()
    {
        $expected = file_get_contents(__DIR__ . '/stubs/lyrics.stub');

        $result = (new Song)->sing();

        $this->assertEquals($expected, $result);
    }
}
