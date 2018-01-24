<?php

	include("template.class.php");
    include("formulier_DB.php");
	
	/**
	 * Creates a new template for the user's profile.
	 * Fills it with mockup data just for testing.
	 */
	$input = new Template("input.tpl");
	
	
    if (isset($_POST['verstuur'])) {

        $voornaam = $_POST['vnaam'];
        $tussenvoegsel = ($_POST['tvoegsel']);
        $achternaam = ($_POST['anaam']);
        $emailadres = ($_POST['email']);

        $input->set("voornaam", $voornaam ?: "leeg");
        $input->set(
            "response", 
            getFormulier($voornaam, $tussenvoegsel, $achternaam, $emailadres)
        );
    };


	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("layout_form.tpl");
	$layout->set("title", "Inschrijf Formulier");
	$layout->set("content", $input->output());

    /**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();

?>