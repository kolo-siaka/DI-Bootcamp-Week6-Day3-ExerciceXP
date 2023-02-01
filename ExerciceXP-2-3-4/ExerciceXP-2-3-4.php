<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice XP 2 3 4</title>
</head>
<body>  
	    <!-- Exercice 2-->
      <?php 
        function recArea($length , $width)
        {
        	$area = $length * $width;

        	echo "air de votre rectangle est = ", $area . "<br>";
        }

        recArea(8,5);

       ?>
       <!-- Exercice 3-->

       <hr>
       <?php 
         $val = 50;

        $affiche = (($val > 20) OR ($val > 30) OR ($val > 10))? 'le nombre est plus grand' : 'le nombre est plus petit ';

        echo $affiche;
         
        ?>
        <hr>
        <!-- Exercice 4-->
<?php                      
 
function extraireMotsDUnePhrase($phrase){    
/* caractères que l'on va remplacer (tout ce qui sépare les mots, en fait) */
    $aremplacer = array(",",";"," ");
 
  /* ... on va les remplacer par un espace, il n'y aura donc plus dans $phrase 
que des mots et des espaces */
 
    $enremplacement = " ";
 
      
/* on fait le remplacement (comme dit ci-avant), puis on supprime les espaces de
// début et de fin de chaîne (trim) */
    $sansponctuation = trim(str_replace($aremplacer, $enremplacement, $phrase));
   
  
   
/* on coupe la chaîne en fonction d'un séparateur, et chaque élément est une
// valeur d'un tableau */
    $separateur = "#[ ]+#"; // 1 ou plusieurs espaces
    $mots = preg_split($separateur, $sansponctuation);
      
    return $mots;
}
$table= array("zero" =>0,
             "one" => 1,
              "two" =>2,
              "three" =>3,
               "four" =>4,
               "five" =>5,
                "six" =>6,
               "seven" =>7,
               "eight" =>8,
               "nine" =>9 );
  
    $essaie = extraireMotsDUnePhrase("one ; two;three ; four; ten");
    foreach($essaie as $valeur)
    {
    	foreach($table as $key => $value){
    		if ($valeur == $key) {
    			echo $value;
    		}
    	}
        
    }
   
?> 

</body>
</html>