<?php

namespace Factory;

use Book\SamsPHPBook;
use Book\SamsMySQLBook;

class SamsBookFactory extends AbstractBookFactory
{
    private $context = "Sams";

    function makePHPBook()
    { // метод создания книги о PHP
        return new SamsPHPBook();
    }

    function makeMySQLBook()
    {
        return new SamsMySQLBook();// метод создания книги о MySQL
    }
}