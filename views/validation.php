<?php
    require VENDOR;
    \App\Authentification::accessBlocker();
    $id = $match['params']['id'] ?? 0;

    $valide = \App\Reservation::validate($id);
    $client = \App\Reservation::getClientByIdReservation($id);
?>
<h2 class="red-color">Le reçu</h2>
<div class="reçu">
    <div class="reçuFlex">
        <h5>Reçu N°</h5>
        <p>5555555555</p>
        <h5 class="rigth">Montant </h5>
        <p>5555555555</p>
    </div>
    <div class="info">
        <div class="line">
            <h5>Reçu de </h5> <div  class="left nom"><p class="rigth">kasumba mutamba</p></div>
        </div>
        <div class="line">
            <h5>La somme de</h5> <div class="left somme"><p class="rigth">kasongo ilunga</p></div>
        </div>
        <div class="line">
            <h5>En règlement de</h5> <div class="left reglement"><p class="rigth">kasumba kasongo</p></div>
        </div>
        <div class="line-rigth">
            <h5>Date</h5> <div class="date"><p class="rigth">aujourd'hui</p></div>
        </div>
        <div class="line">
            <h5 class="sign">Signature</h5>
        </div>
    </div>
</div>
<button type="submit" class="btncent btn red-bg text-white">Imprimer</button>
