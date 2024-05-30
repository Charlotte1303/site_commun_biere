<main>
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <?php foreach ($bieres as $aBiere) : ?>
                <div class="item">
                        <img src="public/images/<?= $aBiere['Photo'] ?>">
                        <div class="content">
                            <div class="author">BIERE COMMUNE</div>
                            <div class="title"><?= $aBiere['Nom'] ?></div>
                            <div class="topic"><?= $aBiere['Description'] ?></div>
                            <div class="buttons">
                                <button><a href="biere.view.php?id=<?= $aBiere['idBiere'] ?>">ACHETER</a></button>
                            </div>
                        </div>
                </div>
            <?php endforeach ?>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="public/images/phoenix.png">
                    <div class="content">
                    </div>
                </div>
                <div class="item">
                    <img src="public/images/serpent.png">
                    <div class="content">
                    </div>
                </div>
                <div class="item">
                    <img src="public/images/leviathan.png">
                    <div class="content">
                    </div>
                </div>
                <div class="item">
                    <img src="public/images/pegase.png">
                    <div class="content">
                    </div>
                </div>
                <div class="item">
                    <img src="public/images/ours.png">
                    <div class="content">
                    </div>
                </div>
                <div class="item">
                    <img src="public/images/sable.png">
                    <div class="content">
                    </div>
                </div>
            </div>
            <!-- next prev -->

            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- time running -->
            <div class="time"></div>
        </div>

        <script src="public\js\app.js"></script>
</main>