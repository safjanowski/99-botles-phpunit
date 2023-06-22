<?php

namespace App;

class Song
{
    public function sing(): string
    {
        return join("", array_map(function ($number) {
            return $this->verse($number);
        }, range(99, 0)));
    }

    public function verse(int $i): string
    {


    }
}