<?php

abstract class AbstractHandler
{
    const DEBUG_HANDLER = 1;
    const TEST_HANDLER = 2;
    const PROD_HANDLER = 3;

    protected $_next;

    abstract public function sendRequest($message);

    public function setNext($next)
    {
        $this->_next = $next;
        return $this->_next;
    }

    public function getNext()
    {
        return $this->_next;
    }
}
class DebugHandler extends AbstractHandler
{
    public function sendRequest($message)
    {
        if ($message == 1) {
            echo __CLASS__ . "process this message" . var_dump($message) . PHP_EOL;
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->sendRequest($message);
            }
        }
    }
}
class TestHandler extends AbstractHandler
{
    /**
     * @param mixed $message
     */
    public function sendRequest($message)
    {
        if ($message == 2) {
            echo __CLASS__ . "process this message" .  PHP_EOL;
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->sendRequest($message);
            }
        }
    }
}

class ProdHandler extends AbstractHandler
{
    /**
     * @param mixed $message
     */
    public function sendRequest($message)
    {
        if ($message == 3) {
            echo __CLASS__ . "process this message on PROD!" . PHP_EOL;
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->sendRequest($message);
            }
        }
    }
}
$handler = new DebugHandler();
$handlerNext = $handler->setNext(new TestHandler());
$handlerEnd = $handlerNext->setNext(new ProdHandler());

$handler->sendRequest(AbstractHandler::DEBUG_HANDLER);
$handler->sendRequest(AbstractHandler::TEST_HANDLER);
$handler->sendRequest(AbstractHandler::PROD_HANDLER);