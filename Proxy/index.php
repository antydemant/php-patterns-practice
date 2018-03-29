<?php

/// Subject
interface Messages
{
    function helloWorld($firstMessage, $secondMessage);
    function helloTelegram($firstMessage, $secondMessage);
    function helloFacebook($firstMessage, $secondMessage);
    function helloViber($firstMessage, $secondMessage);
}



/// RealSubject

class sayHello implements Messages
{
    public function __construct()
    {
        echo "Create object sayHello. Wait for message..." . "\n";
    }

    function helloWorld($firstMessage, $secondMessage)
    {
        return 'Message: ' . $firstMessage . ' and ' . $secondMessage . ' | from World' . "\n";
    }

    function helloTelegram($firstMessage, $secondMessage)
    {
        return 'Message: ' . $firstMessage . ' or ' . $secondMessage . ' | from Telegram' . "\n";
    }

    function helloFacebook($firstMessage, $secondMessage)
    {
        return 'Message: ' . $firstMessage . ' not ' . $secondMessage . ' | from Facebook' . "\n";
    }

    function helloViber($firstMessage, $secondMessage)
    {
        return 'Message: ' . $firstMessage . ' I am ' . $secondMessage . ' | from Viber' . "\n";
    }
}


class sayHelloProxy implements Messages
{
    protected $sayhello;

    public function __construct()
    {
        $this->sayhello = null;
    }
    /// Быстрая операция - не требует реального субъекта
    public function helloWorld($firstMessage, $secondMessage)
    {
        return 'Message: ' . $firstMessage . ' or ' . $secondMessage . ' | from World' . "\n";
    }

    public function  helloTelegram($firstMessage, $secondMessage)
    {
        return 'Message: ' . $firstMessage . ' and ' . $secondMessage . ' | from Telegram' . "\n";
    }


    /// Slow method
    public function helloFacebook($firstMessage, $secondMessage)
    {
        if ($this->sayhello == null)
            $this->sayhello = new sayHello();
        return $this->sayhello->helloFacebook($firstMessage, $secondMessage . ' (joke) ');
    }

    public function helloViber($firstMessage, $secondMessage)
    {
        if ($this->sayhello == null)
            $this->sayhello = new sayHello();
        return $this->sayhello->helloViber($firstMessage, $secondMessage . ' (Star Wars) ');
    }
}


$p = new sayHelloProxy;

// Say Hello
echo("1| " . $p->helloWorld('Hello world', 'Goodbye World!'));
echo("2| " . $p->helloTelegram('Hello Telegram', 'Happy New Year'));
echo("3| " . $p->helloFacebook('Hello Facebook I am', 'your father'));
echo("4| " . $p->helloViber('Hello Viber', 'your father'));

?>