<?php
    include ('templates/template-header.php');
    include ('templates/template-banner.php');
?>

<link rel="stylesheet" href="../css/skills.css"> 

<h2>
    <i class="fas fa-paperclip" aria-label="Skills"></i>
    Compétences
</h2>

<section class="competences">   

    <section class="competences__techniques">

        <h3>Techniques</h3>

        <!-- Ci-dessous un essai pour automatiser les progressbar des compétences techniques selon les variables déclarées dans les tableaux. Mais pas possible de récupérer une variable PHP dans CSS ensuite. Attend de voir si possible avec JS
        --------------------------------------------
            <?php
                $competences = [
                    "HTML/CSS" => "50%",
                    "PHP" => "10%",
                    "Résolution de problèmes" => "90%",
                    "Rédaction et communication" => "90%",
                    "Conduite du changement" => "70%"
                ]
            ?>  

            <?php 
            $i = 0;
            foreach ($competences as $skill => $level) : ?>
                <ul class="competences__techniques__details">
                    <li>
                        <p><?= $skill ?></p>
                        <p><?= $level ?></p>
                    </li>
                    <li>
                        <div class="comptences__techniques__details__greybar"></div>
                        <div class="comptences__techniques__details__progressbar"></div>
                    </li>
                </ul>
            <?php endforeach; ?> 
        ------------------------------------------>



        <ul class="competences__techniques__details">

            <li>
                <p>HTML/CSS</p>
                <p>50%</p>
            </li>

            <li class="competences__techniques__details__level">
                <div class="comptences__techniques__details__greybar"></div>
                <div class="comptences__techniques__details__progressbar" id="comptences__techniques__details__progressbar-HTML-CSS"></div>
            </li>

        </ul>

        <ul class="competences__techniques__details">

            <li>
                <p>PHP</p>
                <p>10%</p>
            </li>

            <li class="competences__techniques__details__level">
                <div class="comptences__techniques__details__greybar"></div>
                <div class="comptences__techniques__details__progressbar" id="comptences__techniques__details__progressbar-PHP"></div>
            </li>

        </ul>

        <ul class="competences__techniques__details">

            <li>
                <p>Résolution de problèmes</p>
                <p>90%</p>
            </li>

            <li class="competences__techniques__details__level">
                <div class="comptences__techniques__details__greybar"></div>
                <div class="comptences__techniques__details__progressbar" id="comptences__techniques__details__progressbar-pb"></div>
            </li>

        </ul>

        <ul class="competences__techniques__details">

            <li>
                <p>Rédaction et communication</p>
                <p>90%</p>
            </li>

            <li class="competences__techniques__details__level">
                <div class="comptences__techniques__details__greybar"></div>
                <div class="comptences__techniques__details__progressbar" id="comptences__techniques__details__progressbar-com"></div>
            </li>

        </ul>
    
        <ul class="competences__techniques__details">

            <li>
                <p>Conduite du changement</p>
                <p>70%</p>
            </li>

            <li class="competences__techniques__details__level">
                <div class="comptences__techniques__details__greybar"></div>
                <div class="comptences__techniques__details__progressbar" id="comptences__techniques__details__progressbar-change"></div>
            </li>

        </ul>
    
    
    </section>

    <section class="competences__langues">

        <h3>Langues</h3>

        <!-- Ci-dessous un essai pour automatiser les progressbar des compétences techniques selon les variables déclarées dans les tableaux. Mais pas possible de récupérer une variable PHP dans CSS ensuite. Attend de voir si possible avec JS
        --------------------------------------------
        <?php

            $langues = [
                "Français" => "Langue maternelle",
                "Anglais" => "Niveau C1 - Courant écrit et oral",
                "Espagnol" => "Niveau B1 - Intermédiaire",
            ]

        ?>
        
            
        <?php
            include ('templates/template-footer.php');
        ?>
        -------------------------------------------->
        <ul>
            <li>Français - Langue maternelle</li>
            <li>Anglais - Niveau C1 - Courant écrit et oral</li>
            <li>Espagnol - Niveau B1 - Intermédiaire</li>
        </ul>

    </section>

</section>