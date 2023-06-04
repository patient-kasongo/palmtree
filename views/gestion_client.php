<?php
require VENDOR;
\App\Authentification::accessBlocker();
$reservations=\App\Reservation::getReservations();
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
        <h2 class="red-color">Liste des inscrits</h2>
    </header>
    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Non</th>
                <th scope="col">Post-nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Plus</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($reservations as $reservation):?>
                <tr>
                    <td><?= $reservation->nom ?></td>
                    <td><?= $reservation->postNom ?></td>
                    <td><?= $reservation->intitule ?></td>
                    <td><a href="/public/client/show-<?= $reservation->idReservation ?>">Voir plus</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>

</section>
