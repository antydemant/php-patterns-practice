<?php

require 'vendor/autoload.php';

use Factory\OReillyBookFactory as OReillyBookFactory;
use Factory\SamsBookFactory as SamsBookFactory;

/*
*   Инициаллизация
*/

echo("Начинаем тестировать паттерн Абстрактная фабрика" . "\n");

echo("тестируем работу конкретной фабрики  издательства OReilly" . "\n");
$bookFactoryInstance = new OReillyBookFactory(); // создаём экземпляр фабрики

// запускаем функцию тестирования передав в неё в качестве параметра
// экземпляр нашей фабрики
testConcreteFactory($bookFactoryInstance); // запустили тестирование


echo("тестируем работу конкретной фабрики  издательства Sams" . "\n");
$bookFactoryInstance = new SamsBookFactory(); // создаём экземпляр фабрики
testConcreteFactory($bookFactoryInstance); // запустили тестирование

echo("Тесты завершены" . "\n");

/*
далее приводим код самой функции тестирование - она-то
как раз и демонстрирует "удобство" применения паттерна Абстрактная фабрика

*/
function testConcreteFactory($bookFactoryInstance) // принимает объект конретной фабрики
{
// вызываем  метод создания PHP книги - наш код не зависит от того какое именно издательство
// передано (фабрика какого именно издательства передана) для реализации создания книг
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    echo('Автор первой книги  по PHP: ' . $phpBookOne->getAuthor() . "\n");
    echo('Заголовок первой книги  по PHP: ' . $phpBookOne->getTitle() . "\n");

    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    echo('Автор второй книги по PHP: ' . $phpBookTwo->getAuthor() . "\n");
    echo('Заголовок второй книги по PHP:: ' . $phpBookTwo->getTitle() . "\n");

    $mySqlBook = $bookFactoryInstance->makeMySQLBook();
    echo('Автор  книги по MySQL: ' . $mySqlBook->getAuthor() . "\n");
    echo('Заголовок книги по MySQL: ' . $mySqlBook->getTitle() . "\n");
}

?>