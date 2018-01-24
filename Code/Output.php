<?php

	include("template.class.php");
	
	/**
	 * Creates a new template for the user's profile.
	 * Fills it with mockup data just for testing.
	 */
	$output = new Template("Output.tpl");
	
	
	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("layout_form.tpl");
	$layout->set("title", "Inschrijf Formulier");
	$layout->set("content", $output->output());
	
	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();
	
?>