<?php

class Menus extends Controller
{
    public function __construct()
    {
        $this->menuModel = $this->model('Menu');
    }


    public function index()
    {
        $result = $this->menuModel->getMenus();

        // if ($result) {
        //     $instructeurNaam = $result[0]->INNA;
        // } else {
        //     $instructeurNaam = '';
        // }


        //echo $result[0]->DatumTijd;
        $rows = '';
        foreach ($result as $info) {
            $rows .= "<tr>
                        <td><h3>Menu Nummer: $info->MenuId</h3></td>
                        <td><h4>Menu Naam: </h4>$info->MenuName</td>
                        <br>
                        <td><h4>Soep: </h4>$info->SoupName</td>
                        <br>
                        <td><h4>Salade: </h4>$info->SaladName</td>
                        <br>
                        <td><h4>Hoofdgerecht: </h4>$info->MainDishName</td>
                        <br>
                        <td><h4>Drank: </h4>$info->DrinkName</td>
                        <br>
                        <td><h4>Dessert: </h4>$info->DessertName</td>
                        <br>
                        </tr>
                        <br>";
        }

        $data = [
            'title' => "Overzicht Menus",
            'rows' => $rows,
            'result' => $result

        ];
        $this->view('menus/index', $data);
    }

    public function items()
    {
        $result = $this->menuModel->getItems();
        $soup = '';
        $salad = '';
        $mainDish = '';
        $drink = '';
        $dessert = '';
        foreach ($result as $info) {

            $soup .= "
                        <td>$info->SoupName</td>
                        <br>";

            $salad .= "
                        <td>$info->SaladName</td>
                        <br>";

            $mainDish .= "
                        <td>$info->MainDishName</td>
                        <br>";

            $drink .= "
                        <td>$info->DrinkName</td>
                        <br>";

            $dessert .= "
                        <td>$info->DessertName</td>
                        <br>";
        }

        $data = [
            'title' => "Menu Items",
            'salad' => $salad,
            'soup' => $soup,
            'mainDish' => $mainDish,
            'drink' => $drink,
            'dessert' => $dessert,
            'result' => $result

        ];
        $this->view('menus/items', $data);
    }

    // function topicsLesson($lesId)
    // {
    //     $result = $this->menuModel->getTopicsLesson($lesId);

    //     if ($result) {
    //         $d = new DateTimeImmutable($result[0]->Datum, new DateTimeZone('Europe/Amsterdam'));
    //         $date = $d->format('d-m-Y');
    //         $time = $d->format('H:i');
    //     } else {
    //         $date = '';
    //         $time = '';
    //     }

    //     $rows = "";
    //     foreach ($result as $topic) {
    //         $rows .= "<tr>
    //                     <td>$topic->Onderwerp</td>
    //                   </tr>";
    //     }

    //     $data = [
    //         'title' => 'Onderwerpen Les',
    //         'rows' => $rows,
    //         'lesId' => $lesId,
    //         'date' => $date,
    //         'time' => $time
    //     ];
    //     $this->view('lessen/topicslesson', $data);
    // }

    // function lessoninfo($lesId)
    // {
    //     $result = $this->menuModel->getLessonInfo($lesId);

    //     if ($result) {
    //         $d = new DateTimeImmutable($result[0]->Datum, new DateTimeZone('Europe/Amsterdam'));
    //         $date = $d->format('d-m-Y');
    //         $time = $d->format('H:i');
    //     } else {
    //         $date = '';
    //         $time = '';
    //     }

    //     $rows = "";
    //     foreach ($result as $topic) {
    //         $rows .= "<tr>
    //                     <td>$topic->Onderwerp</td>
    //                   </tr>";
    //     }

    //     $data = [
    //         'title' => 'Onderwerpen Les',
    //         'rows' => $rows,
    //         'lesId' => $lesId,
    //         'date' => $date,
    //         'time' => $time
    //     ];
    //     $this->view('lessen/lessoninfo', $data);
    // }
}
