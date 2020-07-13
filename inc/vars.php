<?php
// Define site
$siteTitle 		= 'SITE_TITLE';
$siteURL 		= 'http://1idweb.com/doc/sandbox/';
$siteUi 		= 'http://1idweb.com/ui/';
$absolutePath 	= $siteURL;
$relativePath	= '';
/*
 * Define language
 */
if(isset($_GET['lang'])) {
	$langTag 	= $_GET['lang'];
} else {
	$langTag 	= 'fr'; // set default lang
}
/*
 * Define language strings
 */
if ($langTag == 'en') {

	// Define page
	$theTitle 				= 'HTML 5 prototype';
	$theParentTitle 		= 'The Category';
	$hdMeta_description 	= 'Describe the page content';
	$hdMeta_keywords 		= 'Keywords, Keywords, Keywords';
	//Define language
	$langTag 				= 'en';
	$langPath 				= '';
	$filePath 				= $langTag.'/';
	$altLangTag 			= 'fr';
	$altLangLabel 			= 'Français';

	/* pour demo */
	$p1_title 				= 'Home';
	$p2_title 				= 'Products';
	$p3_title 				= 'News';
	$p4_title 				= 'About us';
	$p5_title 				= 'Contact us';
	$p6_title 				= 'Search';

} else {

	// Define page
	$theTitle 				= 'Prototype HTML 5';
	$theParentTitle 		= 'La catégorie';
	$hdMeta_description 	= 'Description du contenu de la page';
	$hdMeta_keywords 		= 'Mot clé, Mot clé, Mot clé';
	//Define language
	$langTag 				= 'fr';
	$langPath 				= $langTag.'/';
	$filePath 				= $langTag.'/';
	$altLangTag 			= 'en';
	$altLangLabel 			= 'English';
	
	/* pour demo */
	$p1_title 				= 'Accueil';
	$p2_title 				= 'Produits';
	$p3_title 				= 'Nouvelles';
	$p4_title 				= 'À propos de nous';
	$p5_title 				= 'Nous joindre';
	$p6_title 				= 'Recherche';

}
$culture 		= $langTag.'-CA';

?>