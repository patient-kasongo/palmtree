<?php
    require VENDOR;
    $id=$match['params']['id'] ?? 0;
    $client= new \App\Client();
    $client=$client->getClientById($id);
    if(!empty($_POST)){
        $newClient= new \App\Client();
        $newClient->setIdClient($id);
        $newClient->setFirstname($_POST['name']);
        $newClient->setSecondname($_POST['secondname']);
        $newClient->setLastname($_POST['lastname']);
        $newClient->setPhoneNumber($_POST['phonenumber']);
        $newClient->setNumWhatsapp($_POST['whatsapp']);
        $newClient->setGenre($_POST['genre']);
        $newClient->setMail($_POST['email']);
        $newClient->setAdresse($_POST['adresse']);
        $newClient->setNationalie($_POST['nationalite']);
        $newClient->setEtudesFaites($_POST['etudes']);
        $newClient->setDiplomeObetenue($_POST['diplome']);
        $newClient->setDisponibilite($_POST['disponibilite']);
        $verify=$newClient->modifier();
        if($verify){
            echo '<div class="alert alert-success">Vous avez modifié les informations, veuillez actualiser la page pour voir les changements  </div>';
        }else{
            echo '<div class="alert alert-danger">Nous avons rencontré une erreur</div>';
        }
    }
?>
<div class="container mt-2">
    <div class="row justify-content-end">
        <div class="col-2">
            <a class="red-bg text-white btn" href="/public/logout">Se déconnecter</a>
        </div>
    </div>
</div>
<section class="container text-center">
    <header>
        <h1 class="display-5"><img src="../../asset/img/palm(2).png">Palm tree strength</h1>
        <h2 class="red-color">Modification des identitées</h2>
    </header>
    <form method="post">
        <div>
            <label class="form-label">Nom</label>
            <input class="form-control" name="name" value="<?= $client->nom ?>" required>
        </div>
        <div>
            <label class="form-label">Postnom</label>
            <input class="form-control" name="secondname" value="<?= $client->postNom ?>" required>
        </div>
        <div>
            <label class="form-label">Prenom</label>
            <input class="form-control" name="lastname" value="<?= $client->preNom ?>" required>
        </div>
        <div>
            <label class="form-label">Numéro de téléphone</label>
            <input class="form-control" name="phonenumber" value="<?= $client->numPhone ?>" required>
        </div>
        <div>
            <label class="form-label">Numéro whatsapp</label>
            <input class="form-control" name="whatsapp" value="<?= $client->numWhatapp ?>" required>
        </div>
        <div>
            <label class="form-label">Adresse mail</label required>
            <input class="form-control" name="email" value="<?= $client->email ?>" required>
        </div>
        <div>
            <label class="form-label">Adresse</label>
            <input class="form-control" name="adresse" value="<?= $client->adresse ?>" required>
        </div>
        <div>
            <label class="form-label">genre</label>
            <input class="form-control" name="genre" value="<?= $client->genre ?>" required>
        </div>
        <div>
            <label class="form-label">Nationalité</label>
            <input class="form-control" name="nationalite" value="<?= $client->nationality ?>" required>
        </div>
        <div>
            <label class="form-label">Etudes faites</label>
            <input class="form-control" name="etudes" value="<?= $client->etudesFaites ?>" required>
        </div>
        <div>
            <label class="form-label">Disponibilité</label>
            <input class="form-control" name="disponibilite" value="<?= $client->disponibility ?>" required>
        </div>
        <div>
            <label class="form-label">Diplome obtenue</label>
            <input class="form-control" name="diplome" value="<?= $client->diplomeObtenu ?>" required>
        </div>

        <button type="submit" class="btn red-bg text-white">Modifié</button>
    </form>
</section>


