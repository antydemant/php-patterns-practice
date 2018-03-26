<?php
/**
 * Created by PhpStorm.
 * User: iostapchuk
 * Date: 3/15/18
 * Time: 08:45
 */

namespace Factory;


abstract class AbstractBookFactory
{
    abstract function makePHPBook();

    abstract function makeMySQLBook();
}