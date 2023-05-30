<?php
require VENDOR;

$cours=\App\Cours::getCours();
if(!empty($_POST))
{
    $nouvelleSession = new \App\Session();
    $nouvelleSession->setDescription($_POST['description']);
    $nouvelleSession->setDebut($_POST['debut']);
    $nouvelleSession->setFin($_POST['fin']);
    $nouvelleSession->setIdCours($_POST['cours']);
    $nouvelleSession->setPrix($_POST['prxinscription']);
    $nouvelleSession->setPrixMod($_POST['prxmodule']);
    $nouvelleSession->setNombreMod($_POST['nbmodule']);

    $nouvelleSession->print();

    $verify = $nouvelleSession->saveSession();
    if ($verify) {
        echo "<div class='alert alert-success'>Vous avez enregistré une nouvelle session de formation</div>";
    }else {
        echo "<div class='alert alert-danger'>nous avons rencontré une erreur!</div>";
    }
}

?>
<section class="container text-center">
    <header>
        <h1 class="display-5"><img src="../../asset/img/palm(2).png">Palm tree strength</h1>
        <h2 class="red-color">Ajouter une session de formation</h2>
    </header>

    <form method="post" class="text-start">
        <select name="cours" class="form-select">
            <?php
                foreach ($cours as $value) {
                    echo "<option value='$value->idCours'>$value->intitule</option>";
                }
            ?>
        </select>
        <div class="form-group">
            <input type="text" class="form-control" required maxlength="100" name="description" placeholder="petite description de la session de formation">
        </div>
        <div class="form-group m-1">
            <input type="date" name="debut" placeholder="Entrer le nom du professerur" class="form-control" required>
        </div>
        <div class="form-group m-1">
            <input type="date" name="fin" placeholder="Entrer le nom du professerur" class="form-control" required>
        </div>
        <div class="form-group m-1">
            <input type="text" name="prxinscription" placeholder="Entrer le prix d'inscription" class="form-control" required>
        </div>
        <div class="form-group m-1">
            <input type="text" name="prxmodule" placeholder="Entrer le prix par module" class="form-control" required>
        </div>
        <div class="form-group m-1">
            <input type="number" name="nbmodule" placeholder="Entrer le nombre des modules" class="form-control" required>
        </div>
        <button type="submit" class="btn red-bg text-white">Create</button>
    </form>
</section>
