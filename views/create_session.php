<?php

?>
<section class="container text-center">
    <header>
        <h1 class="display-5"><img src="../../asset/img/palm(2).png">Palm tree strength</h1>
        <h2 class="red-color">Ajouter une session de formation</h2>
    </header>

    <form method="post" class="text-start">
        <select name="cours" class="form-select">
            <option value="idCours1">nom cours1</option>
            <option value="idCours2">nom cours2</option>
            <option value="idCours3">nom cours2</option>
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
        <button type="submit" class="btn red-bg text-white">Create</button>
    </form>
</section>
