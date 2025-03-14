<?php 

	// REQUEST 
	//fichier appelé par la requête HTTP

	// configure l'affichage des erreurs donc est chargé en premier pour éviter des erreurs non prises en charge
	require_once('../config.php');

	// APPEL DU MODEL 
	// je charge le repository pour avoir accès à la liste de produits (variable $products)
	require_once('../model/product-repository.php');

	// APPEL DE LA VIEW 
	// je charge la view, c'est à dire le fichier qui créé le HTML en fonction des données
	// créé le html pour chaque produit récupéré depuis le repository
	require_once('../view/list-products-view.php');

	// REPONSE
	// je gère le status de la réponse HTTP
	http_response_code(200); 
	
	exit;




