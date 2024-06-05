<main> 
  <div class="texte">
<div class="beer-description">

  <h2><?= $bieres['Nom'] ?></h2>
  <p><?= $bieres['Accroche'] ?></p>
  <p><?= $bieres['Description'] ?></p>
  <h3>Ingrédients:</h3>
  <ul>
  <?php
    $ingredients = explode('/', $bieres['Ingredients']);
    foreach ($ingredients as $ingredient) {
        echo '<li>'. trim($ingredient). '</li>';
    }
    ?>
  </ul>
  <p><?= $bieres['Valeurs_nutritionnelles'] ?></p>
</div>
  </div>

<div class="portrait-image"><img src="public/images/<?= $bieres['Bouteille'] ?>" alt="Beer Portrait"></div>
</main>