<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ExerciceXP Gold</title>
</head>
<body>
       <!--Exercice 1 -->
      <?php 

         function sum_of_digits($value)
         {
         	$somme = 0;
         	for ($i=0; $i <strlen($value) ; $i++) { 
         		$somme = $somme + (int)$value[$i];
         	}
         	echo $somme;
         }
            sum_of_digits('2222222');
       ?>
       <hr>
       <!--Exercice 2 -->
       <?php 

          function multiply_two_lists($value='',$value2 = '')
          {
          	for ($i=0; $i <strlen($value) ; $i++) { 
          		
          		echo (float)$value[$i] * (float)$value2[$i] . " ";
          	}
          }
           
           multiply_two_lists('258','831');

        ?>
  <hr>
         <!--Exercice 3 -->

   <?php 

     function tempConversionC($value ='')
     {
     	$F = (((float)$value)* 9/5) + 32 ;

     	echo $F . ' °F ';
     }
     
     function tempConversionK($value='')
     {
     	$K = (float)$value + 273.15 ;

     	echo $K.' °K ';
     }
    
    $celcius = 25;
     echo $celcius.'°C is equal to ', tempConversionC($celcius). ' and ', tempConversionK($celcius). '.';
     
    ?>


</body>
</html>