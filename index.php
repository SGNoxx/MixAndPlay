<!DOCTYPE html>
<html>
    <?php
        include("asset/common/head.php");
        include("asset/common/header.php");
    ?>
    <body>
        <main>
            <section class="section-1">
                <div class="genre">
                    <div class="groupe-1-genre">
                        <!-- <div class="genre-solo">
                            <p>ORCHESTRALE</p>
                        </div> -->
                        <div class="genre-solo" id="monElement">
                            <p>ELECTRONIQUE</p>
                        </div>
                    </div>
                    <!-- <div class="groupe-2-genre">
                        <div class="genre-solo">
                            <p>JAZZ</p>
                        </div>
                        <div class="genre-solo">
                            <p>CHIPTUNE</p>
                        </div>
                    </div>
                    <div class="groupe-3-genre">
                        <div class="genre-solo">
                            <p>HIP - HOP / RAP</p>
                        </div>
                        <div class="genre-solo">
                            <p>SYNTHWAVE / OUTRUN</p>
                        </div>
                    </div>
                    <div class="groupe-4-genre">
                        <div class="genre-solo">
                            <p>POP</p>
                        </div>
                        <div class="genre-solo">
                            <p>ROCK</p>
                        </div>
                    </div>
                    <div class="groupe-5-genre">
                        <div class="genre-solo">
                            <p>8 - BIT</p>
                        </div>
                        <div class="genre-solo">
                            <p>FOLK / ORIENTALE</p>
                        </div>
                    </div> -->
                </div>
                <img class="vinyle" src="vinyle.png" alt="Vinyle">
                <div class="mix-button">
                    <p>MIXER</p>
                </div>
            </section>

            <section class="section-2">
                <div class="jeux">
                    <div class="solo-jeu">
                        <div class="left-game">
                            <img class="logo-jeu" src="asset/images/isaac.jpg" alt="">
                        </div>
                        <div class="right-game">
                            <p class="titre-jeu">NOM DU JEU</p>
                            <p class="date-jeu">Date de sortie</p>
                            <p class="resume-jeu">Résumé</p>
                            <div class="genre-jeu">
                                <p class="solo-genre-jeu">GENRE 1</p>
                                <p class="solo-genre-jeu">GENRE 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="solo-jeu">
                        <div class="left-game">
                            <img class="logo-jeu" src="asset/images/fez.jpg" alt="">
                        </div>
                        <div class="right-game">
                            <p class="titre-jeu">NOM DU JEU</p>
                            <p class="date-jeu">Date de sortie</p>
                            <p class="resume-jeu">Résumé</p>
                            <div class="genre-jeu">
                                <p class="solo-genre-jeu">GENRE 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="solo-jeu">
                        <div class="left-game">
                            <img class="logo-jeu" src="asset/images/celeste.jpg" alt="">
                        </div>
                        <div class="right-game">
                            <p class="titre-jeu">NOM DU JEU</p>
                            <p class="date-jeu">Date de sortie</p>
                            <p class="resume-jeu">Résumé</p>
                            <div class="genre-jeu">
                                <p class="solo-genre-jeu">GENRE 1</p>
                                <p class="solo-genre-jeu">GENRE 2</p>
                                <p class="solo-genre-jeu">GENRE 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include("asset/common/footer.php");
        ?>
        <script src="script.js"></script>
    </body>
</html>