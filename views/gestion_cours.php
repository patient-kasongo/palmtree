<?php
require VENDOR;
\App\Authentification::accessBlocker();
$sessions=\App\Session::getSessions();
?>

<div class="container mt-2">
    <div class="row justify-content-end">
        <div class="col-2" m-1>
            <a class="btn-primary btn" href="/public/cours/add">Ajouter un cours</a>
        </div>
        <div class="col-2" m-1>
            <a class="btn-primary btn" href="/public/session/create">Programmer une session de formation</a>
        </div>
        <div class="col-2" m-1>
            <a class="red-bg text-white btn" href="/public/logout">Se déconnecter</a>
        </div>
    </div>
</div>
<section class="container text-center">
    <header>
        <h1 class="display-5"><img src="../../asset/img/palm(2).png">Palm tree strength</h1>
        <h2 class="red-color">gestion des cours</h2>
    </header>
    <div class="container d-flex justify-content-center flex-wrap">
        <?php if($sessions): ?>
            <?php foreach ($sessions as $value):?>
                <div class="m-1" data-wow-delay="0.3s" style="width:370px">
                    <div class="bg-white rounded shadow" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="dark_color mb-1"><?=$value->intitule?></h4>
                            <small class="text-uppercase"><?=$value->description?></small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small><?=$value->prixModule?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Module</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Prix inscription</span><?=$value->prix?></div>
                            <div class="d-flex justify-content-between mb-3"><span>Début</span><?=$value->debut?></div>
                            <div class="d-flex justify-content-between mb-3"><span>Fin</span><?=$value->fin?></div>
                            <div class="d-flex justify-content-between mb-2"><span>Nombres des modules</span><?=$value->nombreModule?></div>
                            <a href="/public/client/inscription-<?=$value->idSession?>" class="btn py-2 px-4 mt-4 text-white red-bg">S'incrire</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <div class="alert alert-danger">Aucune session de formation pour l'instant</div>
        <?php endif ?>
    </div>
</section>

