<?php

namespace Factory;

use Book\OReillyPHPBook;
use Book\OReillyMySQLBook;

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";

    function makePHPBook()
    { // метод создания книги о PHP
        return new OReillyPHPBook();
    }

    function makeMySQLBook()
    { // метод создания книги о MySQL
        return new OReillyMySQLBook();
    }
}