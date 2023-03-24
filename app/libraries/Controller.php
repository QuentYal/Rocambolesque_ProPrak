<?php
// De parent controllerclass laad de model en view
class Controller
{
    public function model($model)
    {
        // Pad naar de modelclass bestand opgeven
        require_once '../app/models/' . $model . '.php';

        // Nieuw object van de opgegeven model
        return new $model();
    }

    public function view($view, $data = [])
    {
        /**
         * Extract all the data from the $data array
         * so that we can use it in the view
         * without having to use $date['title'] but just $title
         */
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        } else {
            die('view does not exist');
        }
    }

    public function validate(string $validator, mixed $data)
    {
        require_once __DIR__ . '/../Helpers/Validators/' . $validator . '.php';
        return (new $validator())->validate($data);
    }

    public function redirect($route)
    {
        header('Location: ' . URLROOT . $route);
    }
}
