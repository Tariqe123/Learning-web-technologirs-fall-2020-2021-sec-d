<?php


if(empty($_POST['degree'])){

    
echo "select Nothing";

    

}

else{

    
$degree = $_POST['degree'];

    
 for($i = 0; $i < count($degree); $i++){

        
echo "Degree: ".$degree[$i]."<br>";

        

    }

    

}



?>