<?php
    include_once "functions.php";
    include_once "header.php";
    include_once "/utilities/nombre.php";
?>

<?php
    const options = array("Aption 1", "Bption 2", "Cption 3", "Dption 4");
?>

<div class="row" id="corps">
    <div class="col-2 bg-light text-center pt-2">
        <div class="mt-2 mb-2">
            <img src="" alt="Logo"/>
        </div>
        <div class="menu-gauche">
            <div class="input-group mb-2">
                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">Rec</span>
            </div>
            <div class="liste">
                <ul class="list-group">
                    <?= nav_item_menu("list-group-item","An active item" ); ?>
                    <?= nav_item_menu("list-group-item","A second item" ); ?>
                    <?= nav_item_menu("list-group-item","A third item" ); ?>
                    <?= nav_item_menu("list-group-item","A fourth item" ); ?>
                    <?= nav_item_menu("list-group-item","And a fifth one" ); ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-8 bg-warning pt-2 contrainer">
        <div class="form-row">
            <?= input_label_texte("col-auto form-input", "input-group mb-2", "input-group-text", "inputGroup-sizing-lg", "article", "Article", "text", "articles"); ?>
            <?= input_label_texte("col-auto form-input", "input-group mb-2", "input-group-text", "inputGroup-sizing-lg", "Quantité", "RECE", "number", ""); ?>
            <?= data_liste("articles", options); ?>  
            <div class="col-auto form-input">
                <div class="input-group mb-2">
                    <input type="button" class=" btn btn-primary form-button" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="Ajouter">
                </div>
            </div>
        </div>
        <div class="mt-3 container row">
            <div class="card col-7" id="liste-vente">
                <div class="card-body">
                    <table class="table row-border hover dataTable" id="list-article">
                        <thead>
                            <tr>
                                <td>Article</td><td>Quantité</td><td>PU</td><td>Option</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Coca cola</td><td>1</td><td>1500</td><td><a href="#">Edit</a><a href="#">supp</a></td>
                            </tr>
                            <tr>
                                <td>Sprite</td><td>6</td><td>1500</td><td><a href="#">Edit</a><a href="#">supp</a></td>
                            </tr>
                            <tr>
                                <td>Tonic</td><td>4</td><td>1500</td><td><a href="#">Edit</a><a href="#">supp</a></td>
                            </tr>
                            <tr>
                                <td>Bonbon Anglais</td><td>5</td><td>1500</td><td><a href="#">Edit</a><a href="#">supp</a></td>
                            </tr>
                            <tr>
                                <td>Grenadine</td><td>3</td><td>1500</td><td><a href="#">Edit</a><a href="#">supp</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4 card" id="calculatrice">
                <div class="card-header row text-center">
                    <div class="col-9">
                        <?= input_format("qnte", "text", 0, "form-control", "qnte"); ?>
                    </div>
                    <div class="col-2">
                        <?= input_format("", "button", "CE", "btn btn-danger mr-3", "ce_button"); ?>
                    </div>
                </div>
                <div class="card-body calc-pave">
                    <?= affiche_calc(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2 bg-danger pt-2 text-center">
        <div class="bg-primary text-white mb-3">
            <strong class="text-large">Nom caissier</strong>
        </div>
        <div class="mb-3 bg-primary text-white" id="temps">
            <?php include __dir__."/utilities/time.php"; ?>
        </div>
        <div class="bg-light text-center ">
            <strong>CA du jour</strong></br>
            <strong>500000 Ar</strong>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>