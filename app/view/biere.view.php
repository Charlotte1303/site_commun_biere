<main> 
<div class="beer-description">
<?php foreach ($bieres as $aBiere) : ?>
  <h2><?= $aBiere['Nom'] ?></h2>
  <p>Une bière qui vous fera voyager à travers un mélange d'agrumes et épices, avec le poivre de Sichuan.</p>
  <p><?= $aBiere['Description'] ?></p>
  <h3>Ingrédients:</h3>
  <ul>
  <?php
    $ingredients = explode('/', $aBiere['Ingredients']);
    foreach ($ingredients as $ingredient) {
        echo '<li>'. trim($ingredient). '</li>';
    }
   ?>
  </ul>
  <p>Amertume: <span>(no value provided)</span></p>
  <p>Coloration: <span>(no value provided)</span></p>
  <p><?= $aBiere['Valeurs_nutritionnelles'] ?></p>
</div>
<img src="public/images/<?= $aBiere['Photo'] ?>" alt="Beer Portrait" class="portrait-image">
<?php endforeach ?>
</main>