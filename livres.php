<?php

require_once 'partials/header.php';

?>
    <form action="details.php" method="POST">
      <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" />
      </div>
      <div>
        <label for="author">Auteur</label>
        <input type="text" name="author" id="author" />
      </div>
      <div>
        <span>Civilité :</span>
        <label for="homme">Mr</label>
        <input type="radio" name="civility" id="homme" value="Mr"/>
        <label for="femme">Mme</label>
        <input type="radio" name="civility" id="femme" value="Mme"/>
        <label for="mademoiselle">Mlle</label>
        <input type="radio" name="civility" id="mademoiselle" value="Mlle"/>
      </div>
      <div>
        <label for="year">Année de publication</label>
        <input type="text" name="year" id="year" />
      </div>
      <div>
        <label for="pages">Nombre de pages</label>
        <input type="text" name="pages" id="pages" />
      </div>
      <div>
        <span>Catégorie :</span>
        <label for="roman">roman</label>
        <input type="checkbox" name="categories[]" id="roman" value="roman"/>

        <label for="poesie">poésie</label>
        <input type="checkbox" name="categories[]" id="poesie" value="poésie"/>

        <label for="theatre">théâtre</label>
        <input type="checkbox" name="categories[]" id="theatre" value="théâtre"/>

        <label for="essai">essai</label>
        <input type="checkbox" name="categories[]" id="essai" value="essai"/>

        <label for="bd">BD</label>
        <input type="checkbox" name="categories[]" id="bd" value="BD"/>

        <label for="jeunesse">jeunesse</label>
        <input type="checkbox" name="categories[]" id="jeunesse" value="jeunesse"/>
      </div>
      <div>
        <label for="price">Prix</label>
        <input type="text" name="price" id="price" />
      </div>
      <div>
        <label for="description">Description courte</label>
        <input type="text" name="description" id="description" />
      </div>
      <div>
        <label for="link">Lien vers la page d'achat</label>
        <input type="text" name="link" id="link" />
      </div>
      <input type="submit" value="Envoyer" id="submit"/>
    </form>
    <?php
include 'partials/footer.php';
?>
