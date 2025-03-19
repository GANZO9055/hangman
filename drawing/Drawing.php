<?php

namespace drawing;

class Drawing {
    function getDrawing(int $number): string
    {
        $drawing = [
            "
             _____
                  |
                  |
                  |
                  |
                  |
        __________| \n",
            "
             _____
            |     |
                  |
                  |
                  |
                  |
        __________| \n",
            "
             _____
            |     |
            O     |
                  |
                  |
                  |
        __________| \n",
            "
             _____
            |     |
            O     |
            |     |
                  |
                  |
        __________| \n",
            "
             _____
            |     |
            O     |
           /|\    |
                  |
                  |
        __________| \n",
            "
             _____
            |     |
            O     |
           /|\    |
           / \    |
                  |
        __________| \n"
        ];

       return $drawing[$number];
    }

}
