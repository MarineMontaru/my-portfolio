<?php
    require ('templates/template-header.php');
    require ('templates/template-banner.php');
    require ('works-table.php');

    if(!empty($_GET)) {
        $id = filter_input(INPUT_GET, "id");
    }
?>

<link rel="stylesheet" href="../css/work-detail.css">

<h2><?= $worksTable[$id]['titre'] ?></h2>

<section class="work">

    <section class="work__left">

        <figure>
            <img src="<?= $worksTable[$id]['image'] ?>" alt="Visuel de ma réalisation">
        </figure>

        <p><?= $worksTable[$id]['date'] ?></p>

        <a href="<?= $worksTable[$id]['lienSite'] ?>">
            <i class="fas fa-external-link-alt"></i>
        </a>

        <a href="<?= $worksTable[$id]['lienGithub'] ?>">
            <i class="fab fa-github"></i>
        </a>

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
             
<?php
    require ('templates/template-footer.php');
?>