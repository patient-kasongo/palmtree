<?php
    $id=$match['params']['id'] ?? null;
    require VENDOR;
    \App\Authentification::accessBlocker();
    $pdo=\App\Database::getPdo();
    $auth=new \App\Authentification($pdo);
    $user=$auth->isConnect();
    $client=\App\Reservation::getClientByIdReservation($id);
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
        <h2 class="red-color">Détails sur l'inscription</h2>
    </header>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col"><?= $client->nom ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Postnom</th>
            <td><?= $client->postNom ?></td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td><?= $client->preNom ?></td>
        </tr>
        <tr>
            <th scope="row">Genre</th>
            <td><?= $client->genre ?></td>
        </tr>
        <tr>
            <th scope="row">Téléphone</th>
            <td><?= $client->numPhone ?></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><?= $client->email ?></td>
        </tr>
        <tr>
            <th scope="row">Whatsapp</th>
            <td><?= $client->numWhatapp ?></td>
        </tr>
        <tr>
            <th scope="row">adresse domicile</th>
            <td><?= $client->adresse ?></td>
        </tr>
        <tr>
            <th scope="row">Nationalité</th>
            <td><?= $client->nationality ?></td>
        </tr>
        <tr>
            <th scope="row">Etudes faites</th>
            <td><?= $client->etudesFaites ?></td>
        </tr>
        <tr>
            <th scope="row">Diplôme obtenu</th>
            <td><?= $client->diplomeObtenu ?></td>
        </tr>
        <tr>
            <th scope="row">inscription</th>
            <td><?= $client->prix ?></td>
        </tr>
        <tr>
            <th scope="row">cours</th>
            <td><?= $client->intitule ?></td>
        </tr>
        <tr>
            <th scope="row">Prix par module</th>
            <td><?= $client->prixModule ?></td>
        </tr>
        <tr>
            <th scope="row">Nombre de module</th>
            <td><?= $client->nombreModule ?></td>
        </tr>
        </tbody>
    </table>
    <?php if($user->getRole() ==='DIRECTION DES FINANCES'){
        echo '<div class="red-bg btn text-white">VALIDER L\'INSCRIPTION</div>';
    }elseif ($user->getRole() ==='SECRETARIAT'){
        echo "<a href='/public/client-". $client->idCl ."/modifie' class="."'red-bg btn text-whitre'>Modifié</a>";
    }
    ?>
</section>
