 

<?php

// Reads the variables sent via POST from our gateway

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ( $text == "" ) {
// Show all LGA in Akwa Ibom

$response = "CON Enter Your PU code\n";
}

  else if ($text == "030101001"){
  $response .= "END Your pulling unit is VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101002"){
  $response .= "END Your pulling unit is PRY SCH, IKOT OBONG EDIENE\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101003"){
  $response .= "END Your pulling unit is PRY SCH, IKOT OKU UBARA \n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101004"){
  $response .= "END Your pulling unit is VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101005"){
  $response .= "END Your pulling unit is VILLAGE SQUARE, ATAI EDIENE\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101006"){
  $response .= "END Your pulling unit is PRY SCH IBANANG\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101007"){
  $response .= "END Your pulling unit is VILLAGE HALL, IKOT UDOUSUNG \n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101008"){
  $response .= "END Your pulling unit is VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101009"){
  $response .= "END Your pulling unit is VILLAGE HALL, NTO UTOM UKPOM\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101010"){
  $response .= "END Your pulling unit is NCSS, IKOT IYIRE\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101011"){
  $response .= "END Your pulling unit is VILLAGE SQUARE, IKOT AKPAN ADIA\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101012"){
  $response .= "END Your pulling unit is VILLAGE HALL, IKOT AKPAN ADIA\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101013"){
  $response .= "END Your pulling unit is VILLAGE HALL, IKOT ONUK UKPOM\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101014"){
  $response .= "END Your pulling unit is PRY SCH, MANTA\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

else if ($text == "030101015"){
  $response .= "END Your pulling unit is VILLAGE SQUARE, MANTA EDEM IDIM\n";
    
    $response .= "**************************\n";
    $response .= "<pre style = \"line-height:7px\">";
    $response .= " ##    ###   ### \n
#  #  #  #  #
####  ####  #  \n
#  #  #      ###  \n";
$response .= "</pre>";
    
    $response .= "\n";
    
    $response .= "**************************\n";
}

//End of pulling unit in Ward 1 of Local government 1.









/**
$database ="votersdesk";
$pass = "";
$username = "root";
$host = "localhost";

$con = new mysqli($host,$username,$pass,$database);
if($con->connect_error){
    die("connection failed " . $con->connect_error);
}else{

}
$query = "Select * from message";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){

  while($row = mysqli_fetch_assoc($result)){
      $message = $row['message'];
  }
}

if(isset($_POST['message'])){
    $msg = $_POST['message'] ;
    $query2 = "UPDATE message set message='$msg' where id=0";

    //submit the query to dy
    $result = mysqli_query($con,$query2);
    if($result){
        echo "Success";
    }
}

//inserting 

// $query1 = "INSERT INTO message (message) VALUES ('$msg')";

//updating




// Print the response onto the page so that our gateway can read it

header('Content-type: text/plain');

echo $response;

// DONE!
?>
