<?php
$page_title="ajout d'un nouveau cours";
 require VENDOR;
 if(!empty($_POST)){
     $cours= new \App\Cours();
     $cours->setIntitule($_POST['name']);
     $cours->setVolumeHoraire($_POST['volumeHoraire']);
     $cours->setProfesseur($_POST['prof']);
     $verify=$cours->create();
     if($verify){
         echo "<div class='alert alert-success'>Vous avez ajouté un nouveau cours</div>";
     }else{
         echo "<div class='alert alert-danger'>Nous avons recontré une erreur</div>";
     }
 }

?>
<section class="container text-center">
    <header>
        <h1 class="display-5"><img src="../../asset/img/palm(2).png">Palm tree strength</h1>
        <h2 class="red-color">Ajout d'un nouveau cours</h2>
    </header>

    <form method="post" class="text-start">
        <div class="form-group m-1">
            <input type="text" name="name" placeholder="Entrer le nom du cours" class="form-control" required>
        </div>
        <div class="form-group m-1">
            <input type="text" name="volumeHoraire" placeholder="Entrer le volume horaire" class="form-control" required>
        </div>
        <div class="form-group m-1">
            <input type="text" name="prof" placeholder="Entrer le nom du professerur" class="form-control" required>
        </div>
        <button type="submit" class="btn red-bg text-white">Create</button>
    </form>
</section>