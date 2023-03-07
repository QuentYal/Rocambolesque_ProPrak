    <div>
        <h1><?= $data['title'] ?></h3>
            <a href="<?= URLROOT . "/menus/index"; ?>">Menus</a>
            <tr>
                <h3>Soep</h3>
                <?= $data['soup'] ?>
                <h3>Salade</h3>
                <?= $data['salad'] ?>
                <h3>Hoofdgerecht</h3>
                <?= $data['mainDish'] ?>
                <h3>Drinken</h3>
                <?= $data['drink'] ?>
                <h3>Dessert</h3>
                <?= $data['dessert'] ?>
            </tr>
    </div>


    <style>
        div {
            display: flex;
            width: 100%;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
        }

        h3 {
            margin-bottom: 0;
        }
    </style>