<?php

class View {

    public static function render($view, $params = null) {
        require_once('Views/' . $view);
    }

}

?>