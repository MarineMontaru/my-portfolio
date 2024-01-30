<?php
    require ('templates/template-header.php');
    require ('templates/template-banner.php');
    require ('works-table.php');

    if(!empty($_GET)) {
        $id = filter_input(INPUT_GET, "id");
    }

    if(isset($worksTable[$id])) :
?>

<link rel="stylesheet" href="../css/work-detail.css">

<h2><?= $worksTable[$id]['titre'] ?></h2>

<section class="work">

    <section class="work__left">

        <figure>
            <img src="<?= $worksTable[$id]['image'] ?>" alt="Visuel de ma réalisation">
        </figure>

        <section>

            <p><em><?= $worksTable[$id]['date'] ?></em></p>

            <div>
                
                <a href="<?= $worksTable[$id]['lienSite'] ?>">
                    <i class="fas fa-external-link-alt"></i>
                </a>

                <a href="<?= $worksTable[$id]['lienGithub'] ?>">
                    <i class="fab fa-github"></i>
                </a>
                
            </div>

        </section>

    </section>

    <aside class="work__right">
        
        <section>

            <h3>Client</h3>
            <p><?= $worksTable[$id]['client'] ?></p>

            <h3>Langages</h3>
            <p><?= $worksTable[$id]['langages'] ?></p>

        </section>
        
        <h3>En quelques mots</h3>
        <p><?= $worksTable[$id]['description'] ?></p>

    </aside>

</section>

<nav class="work__nav">

    <?php 
    if($id > 1) : ?>
        <a href="http://127.0.0.1/ProjetsPerso/my-resume/php/work-detail.php?id=<?=$id - 1?>">
            <i class="fas fa-arrow-circle-left"></i>
            <p>Réalisation précédente</p>
        </a>
    <?php endif; ?>

    <?php if($id < count($worksTable)) : ?>
        <a href="http://127.0.0.1/ProjetsPerso/my-resume/php/work-detail.php?id=<?=$id + 1?>">
            <p>Réalisation suivante</p>
            <i class="fas fa-arrow-circle-right"></i>
        </a>
    <?php endif; ?>

</nav>
             
<?php

    endif;
    require ('templates/template-footer.php');
?>