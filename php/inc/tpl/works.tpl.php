<link rel="stylesheet" href="../css/works.css"> 
            

<h2>
    <i class="fas fa-code"></i>   
    Mes réalisations
</h2>

<section class="my-works">

<?php
foreach ($worksTable as $workNb => $workDetail): ?>

    <figure class="my-works__work">
        <img src="<?=$workDetail['image']?>" alt="Visuel de ma réalisation"  id="my_works__work<?=$workNb?>">
        <figcaption>
            <a href="index.php?page=work-detail&id=<?=$workNb?>">
                <?=$workDetail['titre']?>
            </a>
            <div>
                <a href="<?=$workDetail['lienSite']?>">
                    <i class="fas fa-external-link-alt"></i>
                 </a>
                <a href="<?=$workDetail['lienGithub']?>">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </figcaption>
    </figure>

<?php endforeach ?>

</section>