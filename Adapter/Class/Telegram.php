<?php

namespace Classes;

class Telegram {

    private $message;

    public function __construct() {
        // initial code //
        $this->message = 'Posting to Telegram';

    }

    public function sendStatus($msg) {
        // sending message & data //
        echo json_encode([
            'msg' => $this->message
        ]);
    }
}