<?php
    if(!empty($_POST)){
        $reservation=new \App\Reservation();
        $reservation->client=new \App\Client();
        $reservation->session=new \App\session();
        $reservation->session->setId($match['params']['id'] ?? 0);
        $reservation->client->setFirstname($_POST['firstname']);
        $reservation->client->setSecondname($_POST['secondname']);
        $reservation->client->setLastname($_POST['lastname']);
        $reservation->client->setPhoneNumber($_POST['phonenumber']);
        $reservation->client->setAdresse($_POST['location']);
        $reservation->client->setGenre($_POST['genre']);
        $reservation->client->setIdClient();
        $verify=$reservation->create();
        if($verify){
            echo "<div class='alert alert-success'>Votre inscription a été enregistrer, merci de passer dans nos bureaus pour plus des détails</div>";
        }else{
            echo "<div class='alert alert-danger'>Nous avons rencontré une erreur, merci de reessayer</div>";
        }

    }
?>


<section class="container text-center">
    <header>
        <h1 class="display-5"><img src="../../asset/img/palm(2).png">Palm tree strength</h1>
        <h2 class="red-color">inscription</h2>
    </header>

    <form method="post" class="text-start">
        <div class="form-group m-1">
            <input type="text" class="form-control" placeholder="Entrez votre nom" name="firstname">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" placeholder="Entrez votre post-nom" name="secondname">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" placeholder="Entrez votre prenom" name="lastname">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" placeholder="Votre numéro de téléphone" name="phonenumber">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" placeholder="Votre adresse" name="location">
        </div>
        <div class="form-group m-1">
            <input type="radio" class="form-check-input" value="M" name="genre"> M <input type="radio" class="form-check-input" name="genre" value="F"> F
        </div>
        <button type="submit" class="btn red-bg text-white">S'inscrire</button>
    </form>
</section>
