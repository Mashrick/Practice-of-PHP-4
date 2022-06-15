


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practice</title>
</head>
<body>



			<!-- Print (0-100) using do-while loop -->
			

	<?php
		
		echo "Print (0-100) BY do-while loop<br>";

		$num=0;

		do {

			echo $num.", ";

			$num++;

		} while ($num <=100);



	?>



	<br>
	<br>


			<!-- Show index & name using ARRAY -->
			

	<?php
		
		echo "ARRAY<br><br>";

		$student=array("Mashrick","Rahat","Emon","Maisha","Eshrat","Rabeya");

		print_r($student);

		echo "<br><br>";

		echo $student[3];
		


	?>




	<br>
	<br>


			<!-- Show index & name using Associative ARRAY -->
			

	<?php

		echo "Associative ARRAY<br><br>";
		
			$student = array(

				'Mashrick' => 87,
				'Rahat' => 54, 
				'Emon' => 88,
				'Maisha' => 90,
				'Eshrat' => 01, 
				'Rabeya' => 43,
				'Farzana' => 54


				);

			
		echo $student['Mashrick'] . "<br>" . $student['Farzana'] . "<br>" . $student['Maisha'];
		

	?>




	<br>
	<br>


			<!-- Show index & name using Multidimensional ARRAY -->
			

	<?php

		echo "Multidimensional ARRAY<br><br>";
		
			$division = array(
				array('Dhaka','khul',24,'ctg',),
				array('raj',24),
				array('syl',24)

			);

		print_r($division);	
			

	?>


	<br>
	<br>


			<!-- Two dimensional Array to Store Marks of Four Students in Five Subjects using Multidimensional ARRAY -->


	 <?php



	 	echo "Multidimensional ARRAY<br><br>";


	        $marks = array( 

	            "Mashrick" => array (

	               "Physics" 	=> 43,
	               "Biology" 	=> 45,
	               "Math" 		=> 54,
	               "English" 	=> 67,
	               "Chemistry" 	=> 56
	               

	            ),
	            
	            "Maisha" => array (

	               "Physics" 	=> 54,
	               "Biology"	=> 87,
	               "Math" 		=> 75,
	               "English"	=> 54,
	               "Chemistry" 	=> 43

	            ),
	            
	            "Farzana" => array (

	               "Physics"	=> 31,
	               "Biology" 	=> 43,
	               "Math" 		=> 54,
	               "English"	=> 39,
	               "Chemistry" 	=> 43

	            ),

	            "Eshrat" => array (

	               "Physics"	=> 31,
	               "Biology" 	=> 54,
	               "Math" 		=> 75,
	               "English"	=> 43,
	               "Chemistry" 	=> 54

	            )
	        );
         
     
         echo "Marks for Mashrick in English & Chemistry : " ;
         echo $marks['Mashrick']['English'] . "<br>"; 
         
         echo "Marks for Maisha in Math & English: ";
         echo $marks['Maisha']['Math'] . "<br>"; 
         
         echo "Marks for Farzana in Chemistry & Biology: " ;
         echo $marks['Farzana']['Chemistry'] . "<br>"; 

         echo "Marks for Eshrat in Biology & Math: " ;
         echo $marks['Eshrat']['Biology'] . "<br>"; 


      ?>



      <br>
      <br>


			<!-- Show iCity Name using ARRAY & foreach loop -->
			

	<?php


      echo "City Name in List <br>";

		$cities = array(
			'Dhaka',
			'Rrajshahi',
			'Bogra',
			'B.baria',
			'Sylhet',
			'Khulna',
			'Joypurhaat',
			'Chottogram',
			'Comilla',
			'Barishal'

		);
		
		echo "<ul>";
		
			foreach ($cities as $city){

				echo "<li>$city</li>";

			}

		echo "</ul>"
			

	?>

		

</body>
</html>







