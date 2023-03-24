<?php

class Menu
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMenus()
    {
        $this->db->query("SELECT Menu.Id as MenuId,
                                 Menu.Name as MenuName,
                                 Soup.Name as SoupName,
                                 Salad.Name as SaladName,
                                 MainDish.Name as MainDishName,
                                 Drink.Name as DrinkName,
                                 Dessert.Name as DessertName

                            FROM Menu
                            INNER JOIN SoupMenu
                            ON Menu.Id = SoupMenu.MenuId
                            INNER JOIN Soup
                            ON SoupMenu.SoupId = Soup.Id
                            INNER JOIN SaladMenu
                            ON Menu.Id = SaladMenu.MenuId
                            INNER JOIN Salad
                            ON SaladMenu.SaladId = Salad.Id
                            INNER JOIN MainDishMenu
                            ON Menu.Id = MainDishMenu.MenuId
                            INNER JOIN MainDish
                            ON MainDishMenu.MainDishId = MainDish.Id
                            INNER JOIN DrinkMenu
                            ON Menu.Id = DrinkMenu.MenuId
                            INNER JOIN Drink
                            ON DrinkMenu.DrinkId = Drink.Id
                            INNER JOIN DessertMenu
                            ON Menu.Id = DessertMenu.MenuId
                            INNER JOIN Dessert
                            ON DessertMenu.DessertId = Dessert.Id
                            WHERE Menu.isActive = 1
                         ");


        $result = $this->db->resultSet();

        return $result;
    }

    public function getItems()
    {
        $this->db->query("SELECT Soup.Name as SoupName,
                                 Salad.Name as SaladName,
                                 MainDish.Name as MainDishName,
                                 Drink.Name as DrinkName,
                                 Dessert.Name as DessertName

                            FROM Menu
                            INNER JOIN SoupMenu
                            ON Menu.Id = SoupMenu.MenuId
                            INNER JOIN Soup
                            ON SoupMenu.SoupId = Soup.Id
                            INNER JOIN SaladMenu
                            ON Menu.Id = SaladMenu.MenuId
                            INNER JOIN Salad
                            ON SaladMenu.SaladId = Salad.Id
                            INNER JOIN MainDishMenu
                            ON Menu.Id = MainDishMenu.MenuId
                            INNER JOIN MainDish
                            ON MainDishMenu.MainDishId = MainDish.Id
                            INNER JOIN DrinkMenu
                            ON Menu.Id = DrinkMenu.MenuId
                            INNER JOIN Drink
                            ON DrinkMenu.DrinkId = Drink.Id
                            INNER JOIN DessertMenu
                            ON Menu.Id = DessertMenu.MenuId
                            INNER JOIN Dessert
                            ON DessertMenu.DessertId = Dessert.Id
                         ");


        $result = $this->db->resultSet();

        return $result;
    }
}
