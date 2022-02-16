<?php
   	
	   $formdata = array(
	      'FirstName'=> $_POST["FirstName"],
	      'LastName'=> $_POST["LastName"],
          'age'=>$_POST["age"],
          'Designation'=>$_POST["Designation"],
          'Preferred language'=>$_POST["Preferred language"],
	      'E-mail'=>$_POST["E-mail"],
	      'Password'=> $_POST["Password"],
          'Choose file'=>$_POST["Choose file"],
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
?>