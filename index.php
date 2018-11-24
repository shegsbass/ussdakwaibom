 

<?php

// Reads the variables sent via POST from our gateway

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

$display = "**************************\n
    <pre style = \"line-height:7px\">
 ##    ##    ### \n
#  #  #  #  #
####  ###   #  \n
#  #  #      ###  \n
</pre>
    
    \n
    
    **************************\n";

if ( $text == "" ) {
// Show all LGA in Akwa Ibom

$response = "CON Enter Your PU code\n";
}

  else if ($text == "030101001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
    
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
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ADIA\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN ADIA\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ONUK UKPOM\n";
    
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
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MANTA\n";
    
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
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MANTA EDEM IDIM\n";
    
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

else if ($text == "030102001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBAGWA 1\n";
    
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

else if ($text == "030102002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBAGWA 2\n";
    
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

else if ($text == "030102003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, OKON ABAK\n";
    
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

else if ($text == "030102004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AFAHA\n";
    
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

else if ($text == "030102005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, MBARAKOM\n";
    
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

else if ($text == "030102006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ITUNG\n";
    
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

else if ($text == "030102007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABAK USUNG ATAI\n";
    
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

//End of pulling unit in Ward 2 of Local government 1.


else if ($text == "030103001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ETUK UDO\n";
    
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

else if ($text == "030103002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, PARK LANE\n";
    
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

else if ($text == "030103003"){
  $response .= "END YOUR POLLING UNIT IS BISHOP CLARKS PRY SCH\n";
    
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

else if ($text == "030103004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MIDIM WATERSIDE\n";
    
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

else if ($text == "030103005"){
  $response .= "END YOUR POLLING UNIT IS GOVT TECHNICAL COLLEGE\n";
    
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

else if ($text == "030103006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OKU ABAK\n";
    
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

else if ($text == "030103007"){
  $response .= "END YOUR POLLING UNIT IS V/H, ABAK USUNG IDIM\n";
    
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

else if ($text == "030103008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NO 1 ABAK\n";
    
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

else if ($text == "030103009"){
  $response .= "END YOUR POLLING UNIT IS CONVENT PRY SCH\n";
    
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

//End of pulling unit in Ward 3 of Local government 1.


else if ($text == "030104001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABAK ITENGE\n";
    
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

else if ($text == "030104002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, OBIOBOM\n";
    
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

else if ($text == "030104003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EKANG\n";
    
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

else if ($text == "030104004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBONG UTU\n";
    
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

else if ($text == "030104005"){
  $response .= "END YOUR POLLING UNIT IS MCSS, IKOT EBAK 1\n";
    
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

else if ($text == "030104006"){
  $response .= "END YOUR POLLING UNIT IS MCSS, IKOT EBAK 2\n";
    
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

else if ($text == "030104007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE VILLAGE SQUARE, UTU EDEM URUA\n";
    
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

else if ($text == "030104008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU EDEM AKAI\n";
    
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

else if ($text == "030104009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ABAK IKOT\n";
    
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

//End of pulling unit in Ward 4 of Local government 1.


  else if ($text == "030105001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA ESSANG\n";
    
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

else if ($text == "030105002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK OBONG\n";
    
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

else if ($text == "030105003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO UROM\n";
    
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

else if ($text == "030105004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NNA ENIN\n";
    
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

else if ($text == "030105005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAKAN\n";
    
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

else if ($text == "030105006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN IKPONG\n";
    
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

else if ($text == "030105007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EBEBIT\n";
    
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

else if ($text == "030105008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EBEIT\n";
    
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

else if ($text == "030105009"){
  $response .= "END YOUR POLLING UNIT IS PRIMARY SCHOOL, IKOT ODIONG\n";
    
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

else if ($text == "030105010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ERIAM\n";
    
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

else if ($text == "030105011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ERIAM\n";
    
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

else if ($text == "030105012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EDEM ANWA\n";
    
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

else if ($text == "030105013"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EDEM ANWA\n";
    
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

else if ($text == "030105014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO OBIOINOK\n";
    
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

else if ($text == "030105015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO OBIOINOK\n";
  $response .= $display;
}

//End of pulling unit in Ward 5 of Local government 1.

  else if ($text == "030106001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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

else if ($text == "030106002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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

else if ($text == "030106003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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

else if ($text == "030106004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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

else if ($text == "030106005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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

else if ($text == "030106006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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

else if ($text == "030106007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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

else if ($text == "030106008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
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

else if ($text == "030106009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
    
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

else if ($text == "030106010"){
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
    
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

else if ($text == "030106011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ADIA\n";
    
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

else if ($text == "030106012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN ADIA\n";
    
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

else if ($text == "030106013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ONUK UKPOM\n";
    
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

else if ($text == "030106014"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MANTA\n";
    
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

else if ($text == "030106015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MANTA EDEM IDIM\n";
    
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

else if ($text == "030106016"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MANTA EDEM IDIM\n";
    
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

else if ($text == "030106017"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MANTA EDEM IDIM\n";
    
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

else if ($text == "030106018"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MANTA EDEM IDIM\n";
    
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

//End of pulling unit in Ward 6 of Local government 1.

  else if ($text == "030107001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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

else if ($text == "030107002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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

else if ($text == "030107003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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

else if ($text == "030107004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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

else if ($text == "030107005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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

else if ($text == "030107006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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

else if ($text == "030107007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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

else if ($text == "030107008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
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

else if ($text == "030107009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
    
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

else if ($text == "030107010"){
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
    
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

else if ($text == "030107011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ADIA\n";
    
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

else if ($text == "030107012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN ADIA\n";
    
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

else if ($text == "030107013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ONUK UKPOM\n";
    
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

//End of pulling unit in Ward 7 of Local government 1.

  else if ($text == "030108001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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

else if ($text == "030108002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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

else if ($text == "030108003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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

else if ($text == "030108004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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

else if ($text == "030108005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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

else if ($text == "030108006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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

else if ($text == "030108007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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

else if ($text == "030108008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
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

else if ($text == "030108009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
    
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

else if ($text == "030108010"){
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
    
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

else if ($text == "030108011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ADIA\n";
    
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

else if ($text == "030108012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN ADIA\n";
    
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

else if ($text == "030108013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ONUK UKPOM\n";
    
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

//End of pulling unit in Ward 8 of Local government 1.

  else if ($text == "030109001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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

else if ($text == "030109002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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

else if ($text == "030109003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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

else if ($text == "030109004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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

else if ($text == "030109005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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

else if ($text == "030109006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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

else if ($text == "030109007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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

//End of pulling unit in Ward 9 of Local government 1.

  else if ($text == "030110001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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

else if ($text == "030110002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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

else if ($text == "030110003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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

else if ($text == "030110004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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

else if ($text == "030110005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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

else if ($text == "030110006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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

else if ($text == "030110007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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

else if ($text == "030110008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
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

else if ($text == "030110009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
    
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

else if ($text == "030110010"){
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
    
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

//End of pulling unit in Ward 10 of Local government 1.

  else if ($text == "030111001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
    
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

else if ($text == "030111002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
    
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

else if ($text == "030111003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
    
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

else if ($text == "030111004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
    
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

else if ($text == "030111005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
    
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

else if ($text == "030111006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
    
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

else if ($text == "030111007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
    
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

else if ($text == "030111008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
    
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

else if ($text == "030111009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
    
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

else if ($text == "030111010"){
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
    
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

//End of pulling unit in Ward 11 of Local government 1.









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
**/




// Print the response onto the page so that our gateway can read it

header('Content-type: text/plain');

echo $response;

// DONE!
?>
