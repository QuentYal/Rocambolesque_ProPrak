<?php

class Core
{
    // Properties
    public $currentController = 'Landingpages';
    public $currentMethod = 'index';
    public $params = [];

    // Constructor
    public function __construct()
    {
        $url = $this->getURL();
        // Kijkt of het controllerclass bestand bestaat
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Maak niew object van clas
        require_once('../app/controllers/' . $this->currentController . '.php');

        $this->currentController = new $this->currentController;


        // echo $this->currentController;
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        Session::start();
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        Session::save();
    }

    public function getURL()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            $url = rtrim($_SERVER['REQUEST_URI'], '/');

            $url = filter_var($url, FILTER_SANITIZE_URL);

            $url = explode('/', $url);
            array_shift($url);
            if (empty($url[0])) {
                $url[0] = '';
            }
            // var_dump($url);exit();
            return $url;
        } else {
            return array('Landingpages', 'index');
        }
    }
}
