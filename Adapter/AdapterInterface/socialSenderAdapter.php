<?php

namespace AdapterInterface;

interface socialSenderAdapter {

    public function providerInit($provider);
    public function send($message);
}