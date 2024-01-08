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
        foreach ($competences as $skill => $level) : 
        ?>

        <ul class="competences__techniques__details">

            <li>
                <p><?=$skill?></p>
                <p><?=$level?></p>
            </li>

        <?php $levelNb = intval($level);
        $classLevel = "competences__techniques__details__progressbar-".$levelNb;
        ?>
        
        <li class="competences__techniques__details__level">
            <div class="competences__techniques__details__greybar"></div>
            <div class="competences__techniques__details__progressbar" class="<?=$classLevel?>"></div>
        </li>

        </ul>

        <?php endforeach; ?>    
    
    </section>

    <section class="competences__langues">

        <h3>Langues</h3>

        <ul>
            <li>Français - Langue maternelle</li>
            <li>Anglais - Niveau C1 - Courant écrit et oral</li>
            <li>Espagnol - Niveau B1 - Intermédiaire</li>
        </ul>

    </section>

</section>