<?php
    include ('templates/template-header.php');
    include ('templates/template-banner.php');
?>

<link rel="stylesheet" href="../css/contact.css"> 

<h2>
    <i class="far fa-address-card" aria-label="Contact"></i>
    Contact
</h2>

<section class="contact">

    <form action="" method="post" class="contact__form">

        <fieldset>
            <label for="nom">Votre nom<em>*</em></label>
            <input type="text" id="nom" name="nom" placeholder="Prénom Nom" required>
        </fieldset>

        <fieldset>
            <label for="mail">Votre adresse mail<em>*</em></label>
            <input type="email" id="mail" name="mail" placeholder="exemple@exemple.fr" required>
        </fieldset>

        <fieldset>
            <label for="message">Votre message<em>*</em></label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
        </fieldset>

        <div class="contact__form__submit">
            <button type="submit">Envoyer</button>
        </div>

    </form>
        
</section>

<?php
    include ('templates/template-footer.php');
?>
