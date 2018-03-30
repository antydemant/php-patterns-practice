<?php

// Client of Store
class Originator {

    private $state;

    public function setState($state) {
        $this->state = $state;
        echo "State setted ";
        var_dump($this->state);
        echo '------' . PHP_EOL;
    }

    public function getState() {
        return $this->state;
    }

    public function createStore() {
        return new Store($this->state);
    }

    public function setStore(Store $store) {
        echo sprintf("Restoring state...\n");
        $this->state = $store->getState();
    }

}

/**
 * Store saver
 */
class Store {

    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

}

/**
 * Store Visor
 */
class StoreVisor {

    private $store;

    public function getStore() {
        return $this->store;
    }

    public function setStore(Store $store) {
        $this->store = $store;
    }

}


$originator = new Originator();
$originator->setState(['button' => 'On', 'window' => 'Opened']);

// Store internal state
$storeVisor = new StoreVisor();
$storeVisor->setStore($originator->createStore());

// Continue changing originator
$originator->setState(['button' => 'Off', 'window' => 'Closed']);

// Restore saved state
$originator->setStore($storeVisor->getStore());


var_dump($originator);