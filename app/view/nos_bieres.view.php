<main>
<script src="public/js/app.js"></script>
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <?php foreach ($bieres as $aBiere) :?>
                <div class="item">
                    <img src="public/images/<?= htmlspecialchars($aBiere['Photo'])?>">
                    <div class="content">
                        <div class="author">BIERE COMMUNE</div>
                        <div class="title"><?= htmlspecialchars($aBiere['Nom'])?></div>
                        <div class="topic"><?= htmlspecialchars($aBiere['Description'])?></div>
                        <div class="buttons"><button><a href="biere.php?id=<?= $aBiere['idBiere'] ?>">ACHETER</a></button></div>
                    </div>
                </div>
            <?php endforeach?>

            <!-- next prev -->

            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>

            <!-- time running -->
            <div class="time"></div>
        </div>

       
        
    </div>
</main>