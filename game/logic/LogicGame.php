<?php

namespace game\logic;

use game\drawing\Drawing;

class LogicGame
{
    private int $maxNumberError;
    private string $word;
    private int $numberError;
    private array $guessedLetters;
    private array $usedLetters;

    /**
     * @param string $word
     */
    public function __construct(string $word)
    {
        $this->word = strtoupper($word);
        $this->numberError = 0;
        $this->guessedLetters = array_fill(0, strlen($word), "_");
        $this->usedLetters = [];
        $this->maxNumberError = 5;
    }

    public function getMaxNumberError(): int
    {
        return $this->maxNumberError;
    }

    public function startGame(): void
    {
        $drawing = new Drawing();
        echo $drawing->getDrawing($this->numberError);

        while (($this->numberError < $this->maxNumberError) && !$this->isWon()) {
            echo $this->getGuessedLetters();

            $letter = strtoupper(readline(""));

            if (in_array($letter, $this->usedLetters)) {
                echo "Буква " . $letter . " уже была использована.\n";
                continue;
            }

            $this->usedLetters[] = $letter;

            if (mb_strpos($this->word, $letter) !== false) {
                for ($i = 0; $i < mb_strlen($this->word); $i++) {
                    if ($this->word[$i] == $letter) {
                        $this->guessedLetters[$i] = $letter;
                        echo "Верно. Буква " . $letter . " есть в слове.\n";
                    }
                }
            } else {
                $this->numberError++;
                echo "Ошибка. Буквы " . $letter . " нет в слове.\n";
            }

            echo $drawing->getDrawing($this->numberError);
            echo $this->getUsedLetters();
        }

        if ($this->isWon()) {
            echo "Вы победили!";
        } else {
            echo "Вы проиграли!";
        }
    }

    public function isWon(): bool
    {
        return implode('', $this->guessedLetters) === $this->word;
    }

    public function gameOver(): bool
    {
        return false;
    }

    private function getUsedLetters(): string
    {
        return "Используемые буквы: " . implode(' ', $this->usedLetters) . "\n";
    }

    private function getGuessedLetters(): string
    {
        return "Слово: " . implode(' ', $this->guessedLetters) . "\n";
    }
}