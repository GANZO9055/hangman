<?php

namespace words;

class Words
{
    function getWords(): array
    {
        return $words = ["программирование", "PHP", "разработка"];
    }

    function getWordByNumber(int $number): string
    {
        $words = $this->getWords();
        return $words[$number];
    }
}
