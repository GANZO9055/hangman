<?php

namespace logic;

use drawing\Drawing;



class LogicGame
{
    private int $maxNumberError;
    private string $word;
    private int $numberError;
    private array $guessedWords;
    private array $usedWords;

    /**
     * @param string $word
     */
    public function __construct(string $word)
    {
        $this->word = $word;
        $this->numberError = 0;
        $this->guessedWords = array_fill(0, strlen($word), "_");
        $this->usedWords = [];
        $this->maxNumberError = 6;
    }


    function startGame(): void
    {
        $drawing = new Drawing();
        echo $drawing->getDrawing($this->numberError);
    }
}