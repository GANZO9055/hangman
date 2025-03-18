<?php

use logic\LogicGame;
use words\Words;

require __DIR__ . '/words/Words.php';
require __DIR__ . '/logic/LogicGame.php';
require __DIR__ . '/drawing/Drawing.php';

const START_GAME = "1";
const END_GAME = "0";

echo "Виселица\n";
echo "Начать игру? Выберите 1, чтобы начать, или 0, чтобы выйти.\n";
$words = new Words();
$word = $words->getWordByNumber(array_rand($words->getWords()));

$string = trim(fgets(STDIN));

if ($string == START_GAME) {
    echo "Игра начинается!\n";
    $logic = new LogicGame($word);
    $logic->startGame();
} else if ($string !== END_GAME) {
    echo "Введено неверное число. Введите 1, для старта игры, или 0, для выхода.";
}

echo "Конец игры!\n";