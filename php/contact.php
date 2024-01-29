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
            <input type="text" class="contact__form__field" id="nom" name="nom" placeholder="Prénom NOM" required>
        </fieldset>

        <fieldset>
            <label for="mail">Votre adresse mail<em>*</em></label>
            <input type="email" class="contact__form__field" id="mail" name="mail" placeholder="exemple@gmail.fr" required>
        </fieldset>

        <fieldset>
            <label for="message">Votre message<em>*</em></label>
            <textarea name="message" class="contact__form__field" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
        </fieldset>

        <fieldset>
            <label for="file">Pièce jointe <em id="em-small">(facultatif)</em></label>
            <input type="file" name="file" id="file">
        </fieldset>

        <div class="contact__form__submit">
            <button type="submit">Envoyer</button>
        </div>

    </form>
        
</section>

<?php
    include ('templates/template-footer.php');
?>
