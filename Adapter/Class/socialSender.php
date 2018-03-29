<?php

namespace Classes;

use AdapterInterface\socialSenderAdapter;

class socialSender implements socialSenderAdapter {

    private $provider;

    public function __construct($facebook) {
        $this->providerInit($facebook);
    }

    public function providerInit($provider) {
        $this->provider = $provider;
    }

    public function send($msg) {
        $this->provider->sendStatus($msg);
    }
}