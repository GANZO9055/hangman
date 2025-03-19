<?php

namespace game\words;

class Words
{
    function getWords(): array
    {
        return $words = ["программирование", "пхп", "разработка"];
    }

    function getWordByNumber(int $number): string
    {
        $words = $this->getWords();
        return $words[$number];
    }
}
