<div>
    <h1><?= $data['title'] ?></h1>
    <a href="<?= URLROOT . "/landingspages/index"; ?>">Home page</a>
    <a href="<?= URLROOT . "/menus/items"; ?>">Menu Items</a>
    <br><br>

    <?= $data['rows'] ?>
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
        text-decoration: underline;
    }

    h4 {
        margin: 0;
    }
</style>