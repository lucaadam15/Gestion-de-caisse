<!DOCTYPE html>
<html>
<head>
  <!-- appel des fichiers style bootstrap-->
  <link href="./Assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor JS Files -->
  <script src="./Assets/jquery/jquery.min.js"></script>

</head>


<body>

  <div class='row' >

    <div class='col-md-2 bg-dark' id='div_menu'>
        <button class='btn btn-info m-2 w-100' id='btn_mag' >Magasins</button><br>
        <button class='btn btn-info m-2 w-100' id='btn_inscri'>Inscription</button><br>
        <button class='btn btn-info m-2 w-100' id='btn_Prod'>Produits</button><br>
        <button class='btn btn-info m-2 w-100' id='btn_vente' href="vente.php">Vente</button><br>
        
    </div>
    <div class='col-md-10' id='div_ecran'> Bonjour</div>    

		dghgki

    </div>


</body>

<script>

  $(document).on('click', '#btn_mag', function () {

    $('#div_ecran').load('magasin.php');

  });
  $(document).on('click', '#btn_inscri', function () {

    $('#div_ecran').load('inscription.php');

  });
  $(document).on('click', '#btn_Prod', function () {

    $('#div_ecran').load('produit.php');

  });
  $(document).on('click', '#btn_vente', function () {

    $('#div_ecran').load('vente.php');

  });
   
</script>   

</html>