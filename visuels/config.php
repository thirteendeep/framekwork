<?php

$urls = array(

	'Accueil' => array(
        'desktop' => "http://www.globaliadev.com/donaldproulx/responsive/accueil/accueil-desktop.html",        
        'tablet-l' => "http://www.globaliadev.com/donaldproulx/responsive/accueil/accueil-1024.html",
        'tablet' => "http://www.globaliadev.com/donaldproulx/responsive/accueil/accueil-768.html",
        'phone' => "http://www.globaliadev.com/donaldproulx/responsive/accueil/accueil-mobile.html",
        ),
		

	'Salon' => array(
        'desktop' => "http://www.globaliadev.com/donaldproulx/responsive/salon/salon-desktop.html",        
     	'tablet-l' => "",
        'tablet' => "",
        'phone' => ""
        ),
		
		
		

		
    );

$x = 0;
echo "<ul class='menu'>";
    foreach ($urls as $key => $value) {
        $active = ($x == 0) ? "active" : "";
        echo "<li class='".$active."'>".$key;
            echo "<ul>";
            foreach ($value as $key => $value) {
                echo "<li data-section='".$key."'>".$value."</li>";
            }
            echo "</ul>";
        echo "</li>";
        $x++;
    }
echo "</ul>";
?>

