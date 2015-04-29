<?php


$villes = array(
	'brossard' => array(
		'nom' => "Brossard",
		'salle' => "l'étoile...",
		'date' => "15 juin 2015",
		'animateur' => "Phil Laprise",
		'billetterie' => array(
			'nom' => "Odyscène",
			'logo' => "image/img.jpg",
			'phone' => "450.676.1030",
			'url' => "htttp://site.com"
		),
		'humoriste' => array(
			array(
				'nom' => "dude 1",
				'prenom' => "dude dude 1",
				'image' => "images/img.jpg"
			),
			array(
				'nom' => "",
				'prenom' => "",
				'image' => ""
			),
		)
	),
	'lasalle' => array(
		'nom' => "",
		'salle' => "",
		'date' => "",
		'animateur' => "",
		'billetterie' => array(
			'nom' => "",
			'logo' => "",
			'phone' => "0",
			'url' => ""
		),
		'humoriste' => array(
			array(
				'nom' => "",
				'prenom' => "",
				'image' => ""
			),
			array(
				'nom' => "",
				'prenom' => "",
				'image' => ""
			),
		)
	),
);


print_r($villes);