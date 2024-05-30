<main>
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <?php foreach ($students as $aBiere) : ?>
                <div class="item">
                    <a href="page_nos_bieres.php?id=<?= $aBiere['id'] ?>">
                        <img src="public/images/<?= $aBiere['photo'] ?>">
                        <div class="content">
                            <div class="author">BIERE COMMUNE</div>
                            <div class="title"><?= $aBiere['Nom'] ?></div>
                            <div class="topic"><?= $aBiere['Description'] ?></div>
                            <div class="buttons">
                                <button>EN SAVOIR PLUS</button>
                                <button>
                                    <a href="biere.php?id=<?= $aBiere['id'] ?>">ACHETER</a></button>
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
                <button id="prev">
                    << /button>
                        <button id="next">></button>
            </div>
            <!-- time running -->
            <div class="time"></div>
        </div>

        <script src="public\js\app.js"></script>
</main>