<?php
    require VENDOR;
    \App\Authentification::accessBlocker();
    $id = $match['params']['id'] ?? 0;

    $valide = \App\Reservation::validate($id);
    $client = \App\Reservation::getClientByIdReservation($id);
    $sommeLettre=\App\Recu::convertirEnLettres($client->prixModule);
    $date=date('d/m/Y');
    $recu=new \App\Recu();
    $recu->setSommeChiffre($client->prixModule);
    $recu->setSommeLettre($sommeLettre);
    $recu->setDate($date);
    $recu->enregistrer();
?>
<h2 class="red-color">Le reçu</h2>
<div class="reçu">
    <div class="reçuFlex">
        <h5>Reçu N°</h5>
        <p><?=$id?></p>
        <h5 class="rigth">Montant</h5>
        <p><?=$client->prixModule?>$</p>
    </div>
    <div class="info">
        <div class="line">
            <h5>Reçu de </h5> <div  class="left nom"><p class="rigth"><?=$client->nom.' '.$client->postNom.' '.$client->preNom?></p></div>
        </div>
        <div class="line">
            <h5>La somme en toute lettre :</h5> <div class="left somme"><p class="rigth"><?= $sommeLettre ?></p></div>
        </div>
        <div class="line">
            <h5>En règlement de</h5> <div class="left reglement"><p class="rigth"><?=$client->intitule?></p></div>
        </div>
        <div class="line-rigth">
            <h5>Date</h5> <div class="date"><p class="rigth"><?=$date?></p></div>
        </div>
        <div class="line">
            <h5 class="sign">Signature</h5>
        </div>
    </div>
    <button class="btn red-bg text-white text-center imprimer">Imprimer</button>
</div>

