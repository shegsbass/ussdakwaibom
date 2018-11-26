 

<?php

// Reads the variables sent via POST from our gateway

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

$display = "<pre style = \"line-height:6px; line-weight:6px\">
                ..........\n  
                 ........\n    
                  ......\n
 ##    ##    ###   ....\n
#  #  #  #  #       ..
####  ###   #      ....\n
#  #  #      ###\n </pre>";

$message = "Your text goes here\n";



if ( $text == "" ) {
// Show all LGA in Akwa Ibom

$response = "CON Enter Your PU code\n";
}

  else if ($text == "030101001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKWA IBOM \n";
  $response .= $display;
}

else if ($text == "030101002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG EDIENE\n";
   $response .= $display;
}

else if ($text == "030101003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU UBARA \n";
   $response .= $display;
}

else if ($text == "030101004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INYANG EDIENE\n";
  $response .= $display;
}

else if ($text == "030101005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAI EDIENE\n";
   $response .= $display;
}

else if ($text == "030101006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IBANANG\n";
   $response .= $display;
}

else if ($text == "030101007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDOUSUNG \n";
  $response .= $display;
}

else if ($text == "030101008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOUSUNG\n";
   $response .= $display;
}

else if ($text == "030101009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NTO UTOM UKPOM\n";
  $response .= $display;
}

else if ($text == "030101010"){
  $response .= "END YOUR POLLING UNIT IS NCSS, IKOT IYIRE\n";
  $response .= $display;
}

else if ($text == "030101011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ADIA\n";
  $response .= $display;
}

else if ($text == "030101012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN ADIA\n";
   $response .= $display;
}

else if ($text == "030101013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ONUK UKPOM\n";
   $response .= $display;
}

else if ($text == "030101014"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MANTA\n";
 $response .= $display;
}

else if ($text == "030101015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MANTA EDEM IDIM\n";
 $response .= $display;
}

//End of pulling unit in Ward 1 of Local government 1.

else if ($text == "030102001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBAGWA 1\n";
   $response .= $display;
}

else if ($text == "030102002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBAGWA 2\n";
  $response .= $display;
}

else if ($text == "030102003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, OKON ABAK\n";
   $response .= $display;
}

else if ($text == "030102004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AFAHA\n";
  $response .= $display;
}

else if ($text == "030102005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, MBARAKOM\n";
   $response .= $display;
}

else if ($text == "030102006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ITUNG\n";
  $response .= $display;
}

else if ($text == "030102007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABAK USUNG ATAI\n";
  $response .= $display;
}

//End of pulling unit in Ward 2 of Local government 1.


else if ($text == "030103001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ETUK UDO\n";
  $response .= $display;
}

else if ($text == "030103002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, PARK LANE\n";
  $response .= $display;
}

else if ($text == "030103003"){
  $response .= "END YOUR POLLING UNIT IS BISHOP CLARKS PRY SCH\n";
   $response .= $display;
}

else if ($text == "030103004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MIDIM WATERSIDE\n";
  $response .= $display;
}

else if ($text == "030103005"){
  $response .= "END YOUR POLLING UNIT IS GOVT TECHNICAL COLLEGE\n";
  $response .= $display;
}

else if ($text == "030103006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OKU ABAK\n";
  $response .= $display;
}

else if ($text == "030103007"){
  $response .= "END YOUR POLLING UNIT IS V/H, ABAK USUNG IDIM\n";
   $response .= $display;
}

else if ($text == "030103008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NO 1 ABAK\n";
  $response .= $display;
}

else if ($text == "030103009"){
  $response .= "END YOUR POLLING UNIT IS CONVENT PRY SCH\n";
 $response .= $display;
}

//End of pulling unit in Ward 3 of Local government 1.

else if ($text == "030104001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABAK ITENGE\n";
  $response .= $display;
}

else if ($text == "030104002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, OBIOBOM\n";
  $response .= $display;
}

else if ($text == "030104003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EKANG\n";
  $response .= $display;
}

else if ($text == "030104004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBONG UTU\n";
  $response .= $display;
}

else if ($text == "030104005"){
  $response .= "END YOUR POLLING UNIT IS MCSS, IKOT EBAK 1\n";
  $response .= $display;
}

else if ($text == "030104006"){
  $response .= "END YOUR POLLING UNIT IS MCSS, IKOT EBAK 2\n";
  $response .= $display;
}

else if ($text == "030104007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE VILLAGE SQUARE, UTU EDEM URUA\n";
  $response .= $display;
}

else if ($text == "030104008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU EDEM AKAI\n";
   $response .= $display;
}

else if ($text == "030104009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ABAK IKOT\n";
  $response .= $display;
}

//End of pulling unit in Ward 4 of Local government 1.


  else if ($text == "030105001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA ESSANG\n";
  $response .= $display;
}

else if ($text == "030105002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK OBONG\n";
  $response .= $display;
}

else if ($text == "030105003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO UROM\n";
   $response .= $display;
}

else if ($text == "030105004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NNA ENIN\n";
   $response .= $display;
}

else if ($text == "030105005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAKAN\n";
   $response .= $display;
}

else if ($text == "030105006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN IKPONG\n";
   $response .= $display;
}

else if ($text == "030105007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EBEBIT\n";
   $response .= $display;
}

else if ($text == "030105008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EBEIT\n";
  $response .= $display;
}

else if ($text == "030105009"){
  $response .= "END YOUR POLLING UNIT IS PRIMARY SCHOOL, IKOT ODIONG\n";
   $response .= $display;
}

else if ($text == "030105010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ERIAM\n";
  $response .= $display;
}

else if ($text == "030105011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ERIAM\n";
  $response .= $display;
}

else if ($text == "030105012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EDEM ANWA\n";
  $response .= $display;
}

else if ($text == "030105013"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EDEM ANWA\n";
  $response .= $display;
}

else if ($text == "030105014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO OBIOINOK\n";
  $response .= $display;
}

//End of pulling unit in Ward 5 of Local government 1.

  else if ($text == "030106001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UBOM\n";
  $response .= $display;
}

else if ($text == "030106002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT INYANG\n";
   $response .= $display;
}

else if ($text == "030106003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT IBIT EKPE\n";
  $response .= $display;
}

else if ($text == "030106004"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT OBIO IKPA\n";
  $response .= $display;
}

else if ($text == "030106005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIO IKPA\n";
    $response .= $display;
}

else if ($text == "030106006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UKANA MKPA EYOP\n";
  $response .= $display;
}

else if ($text == "030106007"){
  $response .= "END YOUR POLLING UNIT IS V/H , UKANA MKPA EYOP\n";
   $response .= $display;
}

else if ($text == "030106008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UFEN\n";
   $response .= $display;
}

else if ($text == "030106009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG\n";
 $response .= $display;
}

else if ($text == "030106010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE , IKOT OBONG\n";
  $response .= $display;
}

else if ($text == "030106011"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT AKPA EDEM\n";
   $response .= $display;
}

else if ($text == "030106012"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT AKPABIO 1\n";
   $response .= $display;
}

else if ($text == "030106013"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT AKPABIO 2\n";
   $response .= $display;
}

else if ($text == "030106014"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKWEK\n";
  $response .= $display;
}

else if ($text == "030106015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, VILLAGE SQUARE, IKWEK\n";
  $response .= $display;
}

else if ($text == "030106016"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT NDUE\n";
   $response .= $display;
}

else if ($text == "030106017"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT NDUE\n";
   $response .= $display;
}

else if ($text == "030106018"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NTUKUK\n";
  $response .= $display;
}

//End of pulling unit in Ward 6 of Local government 1.


  else if ($text == "030107001"){
  $response .= "END YOUR POLLING UNIT IS CUSTOMARY COURT, IKOT ESHIET\n";
  $response .= $display;
}

else if ($text == "030107002"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT EKIDUK\n";
  $response .= $display;
}

else if ($text == "030107003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EKIDUK\n";
  $response .= $display;
}

else if ($text == "030107004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT IKPE\n";
  $response .= $display;
}

else if ($text == "030107005"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT IFANG\n";
  $response .= $display;
}

else if ($text == "030107006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NTO OTONG\n";
  $response .= $display;
}

else if ($text == "030107007"){
  $response .= "END YOUR POLLING UNIT IS V/H, NTO OTONG\n";
  $response .= $display;
}

else if ($text == "030107008"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT UKO\n";
 $response .= $display;
}

else if ($text == "030107009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UKO\n";
 $response .= $display;
}

else if ($text == "030107010"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT ANYAKANA\n";
 $response .= $display;
}

else if ($text == "030107011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ATAN MIDIM\n";
  $response .= $display;
}

else if ($text == "030107012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAN MIDIM\n";
   $response .= $display;
}

else if ($text == "030107013"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT EDEDE\n";
  $response .= $display;
}

//End of pulling unit in Ward 7 of Local government 1.

  else if ($text == "030108001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EDONG\n";
    $response .= $display;
}

else if ($text == "030108002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UMO\n";
   $response .= $display;
}

else if ($text == "030108003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UMO\n";
  $response .= $display;
}

else if ($text == "030108004"){
  $response .= "END YOUR POLLING UNIT IS V/H, UTU MIDIM\n";
  $response .= $display;
}

else if ($text == "030108005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU MIDIM\n";
  $response .= $display;
}

else if ($text == "030108006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NTO OBO 11\n";
  $response .= $display;
}

else if ($text == "030108007"){
  $response .= "END YOUR POLLING UNIT IS V/H , NTO OBO 11\n";
 $response .= $display;
}

else if ($text == "030108008"){
  $response .= "END YOUR POLLING UNIT IS KING INT. SCH NTO OBO\n";
   $response .= $display;
}

else if ($text == "030108009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NTO OBO 1\n";
  $response .= $display;
}

else if ($text == "030108010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EKPAT IDUOT\n";
  $response .= $display;
}

else if ($text == "030108011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ANTUK\n";
  $response .= $display;
}

else if ($text == "030108012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EKON\n";
  $response .= $display;
}

else if ($text == "030108013"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT EKON\n";
  $response .= $display;
}

//End of pulling unit in Ward 8 of Local government 1.


  else if ($text == "030109001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ATAI OTORO\n";
  $response .= $display;
}

else if ($text == "030109002"){
  $response .= "END YOUR POLLING UNIT IS V/H, ATAI OTORO\n";
  $response .= $display;
}

else if ($text == "030109003"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT OKU MFANG\n";
    $response .= $display;
}

else if ($text == "030109004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABIA OKPO\n";
   $response .= $display;
}

else if ($text == "030109005"){
  $response .= "END YOUR POLLING UNIT IS CSS, ATAI OTORO\n";
  $response .= $display;
}

else if ($text == "030109006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OTORO 1\n";
   $response .= $display;
}

else if ($text == "030109007"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT ESSIENETOK\n";
  $response .= $display;
}

//End of pulling unit in Ward 9 of Local government 1.


  else if ($text == "030110001"){
  $response .= "END YOUR POLLING UNIT IS V/H, URUK USO\n";
   $response .= $display;
}

else if ($text == "030110002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK USO\n";
   $response .= $display;
}

else if ($text == "030110003"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT OBIOKO\n";
  $response .= $display;
}

else if ($text == "030110004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIOKO 1\n";
   $response .= $display;
}

else if ($text == "030110005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIOKO 2\n";
   $response .= $display;
}

else if ($text == "030110006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OSOM\n";
   $response .= $display;
}

else if ($text == "030110007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OSOM\n";
  $response .= $display;
}

else if ($text == "030110008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NKO OTORO\n";
 $response .= $display;
}

else if ($text == "030110009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NKO OTORO\n";
   $response .= $display;
}

else if ($text == "030110010"){
  $response .= "END YOUR POLLING UNIT IS MKT SQUARE, IDORO (URUK USO)\n";
  $response .= $display;
}

//End of pulling unit in Ward 10 of Local government 1.


  else if ($text == "030111001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ATA UDO\n";
  $response .= $display;
}

else if ($text == "030111002"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT ODON\n";
   $response .= $display;
}

else if ($text == "030111003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ETUKUDO\n";
   $response .= $display;
}

else if ($text == "030111004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ETUKUDO\n";
 $response .= $display;
}

else if ($text == "030111005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EBOK\n";
   $response .= $display;
}

else if ($text == "030111006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IBONG OTORO\n";
   $response .= $display;
}

else if ($text == "030111007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , IBONG OTORO\n";
  $response .= $display;
}

else if ($text == "030111008"){
  $response .= "END YOUR POLLING UNIT IS V/H, IBONG IKOT AKPAN ABASI\n";
  $response .= $display;
}

else if ($text == "030111009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBIAKPAN 1\n";
  $response .= $display;
}

else if ($text == "030111010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBIAKPAN 11\n";
   $response .= $display;
}

//End of pulling unit in Ward 11 of Local government 1.

// End of all pulling units in every wards under ABAK LGA

// START OF PULLING UNITS UNDER EASTERN OBOLO LGA

else if ($text == "030201001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH OKOROETE 1\n";
  $response .= $display;
}

else if ($text == "030201002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH OKOROETE 2\n";
   $response .= $display;
}

else if ($text == "030201003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, OKORETE\n";
   $response .= $display;
}

else if ($text == "030201004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE OJO'S OKORETE\n";
 $response .= $display;
}

else if ($text == "030201005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE OTU-UNIM AYAMA\n";
   $response .= $display;
}

else if ($text == "030201006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE AYAMA\n";
   $response .= $display;
}

else if ($text == "030201007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE EGWILE 11\n";
  $response .= $display;
}

else if ($text == "030201008"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE AYAMA\n";
  $response .= $display;
}

//End of pulling units in ward 1 or LGA 2

else if ($text == "030202001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH OKOROMBOHO 1\n";
  $response .= $display;
}

else if ($text == "030202002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH OKOROMBOHO 2\n";
   $response .= $display;
}

else if ($text == "030202003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE OKOROITI 2\n";
   $response .= $display;
}

//End of pulling units in ward 2 or LGA 2

else if ($text == "030203001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AMADAKA\n";
  $response .= $display;
}

else if ($text == "030203002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE ELILE 1\n";
   $response .= $display;
}

else if ($text == "030203003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE ELILE 2\n";
   $response .= $display;
}

//End of pulling units in ward 3 or LGA 2

else if ($text == "030204001"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ELEKPON\n";
  $response .= $display;
}

else if ($text == "030204002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL AKPABOM\n";
   $response .= $display;
}

else if ($text == "030204003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE OTUNENE\n";
   $response .= $display;
}

//End of pulling units in ward 4 or LGA 2

else if ($text == "030205001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EMEROKE\n";
  $response .= $display;
}

else if ($text == "030205002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, AGBA-AMA EMEROKE\n";
   $response .= $display;
}

else if ($text == "030205003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL EMEROKE 11\n";
   $response .= $display;
}

else if ($text == "030205004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL EMEREMEN 1\n";
  $response .= $display;
}

else if ($text == "030205005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE OKWAN OBOLO 1\n";
   $response .= $display;
}

else if ($text == "030205006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE OKWAN OBOLO 2\n";
   $response .= $display;
}

//End of pulling units in ward 5 or LGA 2

else if ($text == "030206001"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL AMAUKA\n";
  $response .= $display;
}

else if ($text == "030206002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE AYAMA\n";
   $response .= $display;
}

else if ($text == "030206003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL AMANGLASS\n";
   $response .= $display;
}

else if ($text == "030206004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL OKOROMOBOLO\n";
  $response .= $display;
}

else if ($text == "030206005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL OKOROMMILOM\n";
   $response .= $display;
}

else if ($text == "030206006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH OBIANGA\n";
   $response .= $display;
}
else if ($text == "030206007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IWOFE\n";
   $response .= $display;
}

//End of pulling units in ward 6 or LGA 2

else if ($text == "030207001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH OKOROINYONG\n";
  $response .= $display;
}

else if ($text == "030207002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL BETHLEHEM\n";
   $response .= $display;
}

else if ($text == "030207003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE EGWENWE\n";
   $response .= $display;
}

else if ($text == "030207004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL OZUAGBO\n";
  $response .= $display;
}

else if ($text == "030207005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE AMANGBUZI\n";
   $response .= $display;
}

//End of pulling units in ward 7 or LGA 2

else if ($text == "030208001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKO I\n";
  $response .= $display;
}

else if ($text == "030208002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKO II\n";
   $response .= $display;
}

else if ($text == "030208003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKO III\n";
   $response .= $display;
}

else if ($text == "030208004"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH IKO 1\n";
  $response .= $display;
}

else if ($text == "030208005"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH IKO 2\n";
   $response .= $display;
}

else if ($text == "030208006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKO 1\n";
   $response .= $display;
}

else if ($text == "030208007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKO 2\n";
   $response .= $display;
}

else if ($text == "030208008"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE IKO 1\n";
   $response .= $display;
}

else if ($text == "030208009"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE IKO 2\n";
   $response .= $display;
}

//End of pulling units in ward 8 or LGA 2

else if ($text == "030209001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH KAMPA 1\n";
  $response .= $display;
}

else if ($text == "030209002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH KAMPA 2\n";
   $response .= $display;
}

else if ($text == "030209003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKONTA 1\n";
   $response .= $display;
}

else if ($text == "030209004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKONTA 2\n";
  $response .= $display;
}

else if ($text == "030209005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKONTA\n";
   $response .= $display;
}

//End of pulling units in ward 9 or LGA 2

else if ($text == "030210001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE ATABRIKANG 1\n";
  $response .= $display;
}

else if ($text == "030210002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE ATABRIKANG 2\n";
   $response .= $display;
}

//End of pulling units in ward 10 or LGA 2

// End of all pulling units in every wards under EASTERN OBOLO LGA

// START OF PULLING UNITS UNDER EKET LGA


else if ($text == "030301001"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT NSIDIBE\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301002"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT OKUDOM\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , IKOT OKUDOM\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT ABIA\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT ATAKU 1\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT ATAKU 2\n";
  $response .= $display;
  $response .= $message;
}

//End of Pulling units in ward 1 of LGA 3

else if ($text == "030302001"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ATABONG 1\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ATABONG 2\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IDUA\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302004"){
  $response .= "END YOUR POLLING UNIT IS IBUGHOEM V/H, IDUA 1\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302005"){
  $response .= "END YOUR POLLING UNIT IS IBUGHOEM V/H, IDUA 2\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302006"){
  $response .= "END YOUR POLLING UNIT IS V/H EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030302007"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG UDOFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030302008"){
  $response .= "END YOUR POLLING UNIT IS V/H UQUA\n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 2 of LGA 3

else if ($text == "030303001"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG USO\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030303002"){
  $response .= "END YOUR POLLING UNIT IS USUNG INYANG COMMUNITY CENTRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303003"){
  $response .= "END YOUR POLLING UNIT IS USUNG INYANG COMMUNITY CENTRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH USUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ASSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030301006"){
  $response .= "END YOUR POLLING UNIT IS GOVT PRY SCH IKOT EBIYAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303007"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ETEBI IDUNG AKPAISANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303008"){
  $response .= "END YOUR POLLING UNIT IS GOVT PRY SCH, IKOT EBOK\n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 3 of LGA 3

else if ($text == "030304001"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL OKOPEDI IDUNG UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL MKPOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ATAI NDON 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ATAI NDON 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ATAI NDON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304006"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ETEBI IDUNG IWAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304007"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL EKPENE AFAHA EKET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304008"){
  $response .= "END YOUR POLLING UNIT IS GOVT PRY SCH EKPENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AFAHA UQUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304010"){
  $response .= "END YOUR POLLING UNIT IS V/H AFAHA UQUQ OBOKIDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304011"){
  $response .= "END YOUR POLLING UNIT IS ATIBE AFAHA EKET, SCH OF NURSING\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304012"){
  $response .= "END YOUR POLLING UNIT IS V/H, ATIBE\n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 4 of LGA 3

else if ($text == "030305001"){
  $response .= "END YOUR POLLING UNIT IS T/H, IDIM AFIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305002"){
  $response .= "END YOUR POLLING UNIT IS V/H EDE URUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305003"){
  $response .= "END YOUR POLLING UNIT IS V/H EBANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EDEOBUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305005"){
  $response .= "END YOUR POLLING UNIT IS V/H, ESIT URUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , ESIT URUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , AFAHA ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305008"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, AFAHA ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305009"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKO EKWA\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 5 OF LGA 3

else if ($text == "030306001"){
  $response .= "END YOUR POLLING UNIT IS V/H, IKOT UDOMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306002"){
  $response .= "END YOUR POLLING UNIT IS V/H, ISEYET IDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306003"){
  $response .= "END YOUR POLLING UNIT IS V/H, AFIA NSIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306004"){
  $response .= "END YOUR POLLING UNIT IS V/H ODORO ENEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306005"){
  $response .= "END YOUR POLLING UNIT IS V/H, OFRIYO IDUNG INIANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306007"){
  $response .= "END YOUR POLLING UNIT IS V/H NATISIP IKOT IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306008"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG AKWA IDUNG IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306009"){
  $response .= "END YOUR POLLING UNIT IS V/H IKO EKET IDUNG AMADU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306010"){
  $response .= "END YOUR POLLING UNIT IS IKO EKET CDA SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306011"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT UDOTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306012"){
  $response .= "END YOUR POLLING UNIT IS V/H ETEBI IKOT UDOTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306013"){
  $response .= "END YOUR POLLING UNIT IS V/H OSSIOK\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 6 OF LGA 3


else if ($text == "030307001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH USOEKONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ATA IDUNG AFAHA EKET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307003"){
  $response .= "END YOUR POLLING UNIT IS V/H ATA IDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKOT ASSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307006"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307007"){
  $response .= "END YOUR POLLING UNIT IS V/H UDA IKOT AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307008"){
  $response .= "END YOUR POLLING UNIT IS NURSERY SCH IKOT AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307009"){
  $response .= "END YOUR POLLING UNIT IS IDUNG UDO AME ZION PRY SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IDUNG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307011"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG ENEN, IKOT USO EKONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE ATANG ASIKPE IDUNG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ASSANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 7 OF LGA 3

else if ($text == "030308001"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT ODIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EFFOI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308003"){
  $response .= "END YOUR POLLING UNIT IS HEALTH CENTRE EFFOI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308004"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG AKPAEDIM UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL ETEBI IKOT USOEKONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308006"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG IMO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PULLING UNITS IN WARD 8 OF LGA 3

else if ($text == "030309001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ODIO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ODIO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ODIO 3\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309004"){
  $response .= "END YOUR POLLING UNIT IS V/H NDITIA\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 9 OF LGA 3


else if ($text == "030310001"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT OBIOANANA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT OBIOANANA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310004"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT AKPAENANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT OSO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT OSO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH NDUO EDUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310008"){
  $response .= "END YOUR POLLING UNIT IS V/H NDUO EDUO\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 10 OF LGA 3


else if ($text == "030311001"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKOT AKPANDEM 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKOT AKPANDEM 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311004"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT OBIORO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311005"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT OBIORO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKOT AKPAIKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKOT EKPOKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311008"){
  $response .= "END YOUR POLLING UNIT IS IKOT IKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKOT OBIOTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311010"){
  $response .= "END YOUR POLLING UNIT IS V/H IKOT IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT IKPONG\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 11 OF LGA 3
//END OF ALL POLLING UNITS IN LGA 3 (EKIT)

//START OF PULLING UNITS IN WARD 1 OF LGA 4

else if ($text == "030401001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EKPENE OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401002"){
  $response .= "END YOUR POLLING UNIT IS V/H NDITO INI IDUNG IKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401003"){
  $response .= "END YOUR POLLING UNIT IS 	V/H NDITO UTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401004"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH EKPENE OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401005"){
  $response .= "END YOUR POLLING UNIT IS V/H UQUA ISI EDOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IDUNG AWAI\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 4

else if ($text == "030402001"){
  $response .= "END YOUR POLLING UNIT IS 	HEALTH CENTRE ONIOK EDOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402002"){
  $response .= "END YOUR POLLING UNIT IS 	VILLAGE SQUARE EDO ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402003"){
  $response .= "END YOUR POLLING UNIT IS V/H ONIOK EDOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402004"){
  $response .= "END YOUR POLLING UNIT IS V/H AFAHA IKOT EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402005"){
  $response .= "END YOUR POLLING UNIT IS 	VILLAGE SQUARE IKOT EYO. II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402006"){
  $response .= "END YOUR POLLING UNIT IS V/H ASSAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 4

else if ($text == "030403001"){
  $response .= "END YOUR POLLING UNIT IS 	PRY SCH EBE EKPI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403002"){
  $response .= "END YOUR POLLING UNIT IS 	V/H EBE EKPI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403003"){
  $response .= "END YOUR POLLING UNIT IS 	V/H AKPA MBIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403004"){
  $response .= "END YOUR POLLING UNIT IS 	PRY SCH EDIDA EDOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE EDIDA EDOR\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 4

else if ($text == "030404001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404002"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG EBIENO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IDUNG AKPAUSEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404004"){
  $response .= "END YOUR POLLING UNIT IS TECHNICAL SCH. IKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404005"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG OKPO, IKPA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 4

else if ($text == "030405001"){
  $response .= "END YOUR POLLING UNIT IS 	PRY SCH UQUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405002"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG AKPANTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405003"){
  $response .= "END YOUR POLLING UNIT IS V/H NDON EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405004"){
  $response .= "END YOUR POLLING UNIT IS 	V/H NDON EDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE EBIGHI ANWANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 4

else if ($text == "030406001"){
  $response .= "END YOUR POLLING UNIT IS 	V/H EBIGHI OKPONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406002"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406003"){
  $response .= "END YOUR POLLING UNIT IS V/H EBIGHI ASSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406004"){
  $response .= "END YOUR POLLING UNIT IS 	VILLAGE SQUARE IDUNG UNAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406005"){
  $response .= "END YOUR POLLING UNIT IS 	V/H IDUNG ITAM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 4

else if ($text == "030407001"){
  $response .= "END YOUR POLLING UNIT IS 	PRY SCH IDUNG ASSAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407002"){
  $response .= "END YOUR POLLING UNIT IS 	MARKET SQUARE AFANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407003"){
  $response .= "END YOUR POLLING UNIT IS V/H ETEBI IDUNG ITA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IDUNG ITA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IDUNG UMOYUO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 4

else if ($text == "030408001"){
  $response .= "END YOUR POLLING UNIT IS 	MARKET SQUARE MBAK UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408002"){
  $response .= "END YOUR POLLING UNIT IS V/H ETEBI MBAK UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408003"){
  $response .= "END YOUR POLLING UNIT IS 	V/H MBAK UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408004"){
  $response .= "END YOUR POLLING UNIT IS 	PRY SCH ETEBI AKWATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AKWATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408006"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG ASUA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 4

else if ($text == "030409001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AKPAUTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409002"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG ABIDIANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409003"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG USIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409004"){
  $response .= "END YOUR POLLING UNIT IS 	V/H IDUNG OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH URUA OKOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL URUA OKOK\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 4

else if ($text == "030410001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ODORO NKIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410002"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG AMANA, ODORO NKIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE EBIGHI ADAHA UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410004"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG OBIO EKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410005"){
  $response .= "END YOUR POLLING UNIT IS V/H AFAHA EKPENEDI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410006"){
  $response .= "END YOUR POLLING UNIT IS V/H IDUNG ATANGA EDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH NTAK INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410008"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE NTAK INYANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 4

//END OF ALL PU IN EVERY WARD OF LGA 4

//START OF PU IN WARD 1 OF LGA 5

else if ($text == "030501001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NTO NSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, URUA AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ESSIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501005"){
  $response .= "END YOUR POLLING UNIT IS OLD MARKET SQUARE, IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIOKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UKPONG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NSASAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN EKA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ADA UTOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UKO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 5

else if ($text == "030504001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OSSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIODOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ANSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOM MKPATAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504006"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ATAI ESSIEN MKPATAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE IKOT OTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504010"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, EKPEYONG ATAI 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504011"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT ESIFON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK OBONG 1\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 5

else if ($text == "030502001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NTO NSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, URUA AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ESSIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502005"){
  $response .= "END YOUR POLLING UNIT IS OLD MARKET SQUARE, IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIOKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UKPONG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NSASAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN EKA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ADA UTOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UKO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 5

else if ($text == "030503001"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, EKPEYONG ATAI 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503002"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NTO OBIO AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO ESENOWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, UTU EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503005"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, UTU EKPEYONG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503006"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, URUK OBONG 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK OBONG 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503008"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NTAK EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503009"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NTO OSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503010"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT INYANG UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MIDIM ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MIDIM ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MIDIM NTO UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UBO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 5

else if ($text == "030505001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIABET IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505002"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH MBIABET IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EBE IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT ESIDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ESIDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505006"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, EKPENE OTON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL ONION ONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EKOI IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ABIAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505011"){
  $response .= "END YOUR POLLING UNIT IS GENERAL HOSPITAL, MBIAOBONG IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, USUNG IDIM, MBIAOBONG IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505013"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKPE NUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKPE UDOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKPE IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505016"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKPE IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505017"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IBAM IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505018"){
  $response .= "END YOUR POLLING UNIT IS NEW COMP. HALL, EKPENE OTOM\n";
  $response .= $display;
  $response .= $message;
}


//END OF PU IN WARD 5 OF LGA 5

else if ($text == "030506001"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT UMOESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UMOESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT INEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT INEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDOM OBOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, UKANA, IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, EKPENYONG UFUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UKANA MBAK UKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NTO AKPA OKO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 5

else if ($text == "030507001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UTIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT IBANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH. IKOT EBOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ANDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507007"){
  $response .= "END YOUR POLLING UNIT IS V/SQ IKOT IDEM, ANWA UYO/IKOT IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IDUNG ESIMUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UDU\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 5

/**

else if ($text == "030508001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508002"){
  $response .= "END YOUR POLLING UNIT IS CONVENT SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UKO ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT NYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508005"){
  $response .= "END YOUR POLLING UNIT IS V/HALL UMON OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508006"){
  $response .= "END YOUR POLLING UNIT IS V/HALL IKOT OCHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508008"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NTO UBIAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NTO OKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508011"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT IDEM UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508012"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IFA OKON 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508013"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IFA OKON 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EKEFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508015"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508016"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT IGWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508017"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NYI OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508018"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO OKURE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508019"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKPE OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508020"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UFUKU OKON\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 5

else if ($text == "030509001"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT NKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBONG EDONG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBONG EDONG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UKANA NSASAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ANDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ETAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN EFIA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN EFIA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESODOMO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509014"){
  $response .= "END YOUR POLLING UNIT IS else if ($text == "030509014"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509016"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509017"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UKANA UNA EAST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509018"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UKANA UNA EAST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509019"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ESO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509020"){
  $response .= "END YOUR POLLING UNIT IS IKOT OFOK, PRY SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509021"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AKPAN ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509022"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AKPAN ESSIEN 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509023"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509024"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT OFFIONG ETOR\n";
  $response .= $display;
  $response .= $message;
}


//END OF PU IN WARD 9 OF LGA 5

else if ($text == "030510001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UKANA UWA WEST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UKPONG ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510003"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO EKRAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510005"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AFANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OTU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NTAK IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 5

else if ($text == "030511001"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT EDET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511002"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AKPAN NTIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AYARA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511005"){
  $response .= "END YOUR POLLING UNIT IS ST ALOYSIUS PRY SCH, AKPAUTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ONUK NKOP EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPABIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511009"){
  $response .= "END YOUR POLLING UNIT IS INDEPENDENCE HIGH SCH, UKANA IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511010"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ONUK IKOT NGWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510011"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ONUK IKOTOSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511012"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UKANA (OKOP AKAMA)\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511013"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, UKANA IKOT IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511014"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO ETIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO INAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511016"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ATAN IKOT OKORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511017"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UKANA ONUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511018"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT OKWO ETIM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 11 OF LGA 5

//END OF ALL PU IN LGA 5 (ESSIEN UDIM)

//START OF PU IN WARD 1 OF LGA 6 (ETIM EKPO)



else if ($text == "030601001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UTU NSEHE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU IKOT EBORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABAT TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ABAT TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ESA OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH ATA ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, OBONG IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU NSEKHE\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 6

else if ($text == "030602001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NKWOT IKONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDO NKWOT IKONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKPE IKOT AKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBIOMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, INEN IKOT OKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602006"){
  $response .= "END YOUR POLLING UNIT IS V/H, UTU IKOT NKOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, URUK ATA IKOT ISEMIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AKAKPAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 6

else if ($text == "030603001"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT MBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603002"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH ETOK URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UTU IKOT IMONTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, UTU IDUNG AKPAN UDOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK ATA IKOT EKPOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH 1, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ATAI NTO OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH 11, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 6

else if ($text == "030604001"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT MBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604002"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH ETOK URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UTU IKOT IMONTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, UTU IDUNG AKPAN UDOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK ATA IKOT EKPOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH 1, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ATAI NTO OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH 11, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 6

else if ($text == "030605001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NTO EDET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605002"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, URUK ATA NSIDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK ATA IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKPE ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDODIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPANSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT IYAH\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 6

else if ($text == "030606001"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH, EKA URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EKA URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606003"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT INYANG EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, NTAK INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606005"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606006"){
  $response .= "END YOUR POLLING UNIT IS U.P.E SCH, IKOT AKASOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT ODONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606008"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ATUAI\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 6

else if ($text == "030607001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OMUM UNYAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBIO NUNG ACHAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607003"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, OMUM UNYAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IBIO EDEM UDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OBONG NTAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OBON EBOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT MKPORIKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607008"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH, IKOT ESE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607009"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IBIO EDEM URUA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 6

else if ($text == "030608001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UDIANG ENEM 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, UDIANG ENEM 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608003"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT UMO EBAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT OBIOMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UDOBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT INUNG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT INUNG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608008"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, ABAK OBONG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 6

else if ($text == "030609001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, URUK ATAI 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKPE ANANG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKPE ANANG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKPE ANANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609005"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, BDOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609006"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IBIO NUNG IBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AJA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, URUK ATA 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609009"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AMA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 6

else if ($text == "030610001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, TWUKEM TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610002"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH, IWUKEM TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EDEM AKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT NYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AWAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610007"){
  $response .= "END YOUR POLLING UNIT IS CUSTOMARY COURT, IWUKEM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 6

//END OF ALL PU IN LGA 6

//START OF PU IN WARD 1 OF LGA 7

else if ($text == "030701001"){
  $response .= "END YOUR POLLING UNIT IS CENTRAL SCH, ETINAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701002"){
  $response .= "END YOUR POLLING UNIT IS GOVT. SCH, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701003"){
  $response .= "END YOUR POLLING UNIT IS CENTRAL SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701004"){
  $response .= "END YOUR POLLING UNIT IS FEDERATED TOWN HALL, ETINAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701005"){
  $response .= "END YOUR POLLING UNIT IS SALVATION ARMY SCH, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH JOHN KIRK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701007"){
  $response .= "END YOUR POLLING UNIT IS TECHNICAL SCH, SLOOD PETERS\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701008"){
  $response .= "END YOUR POLLING UNIT IS Q.I.C PRESS, ETINAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701010"){
  $response .= "END YOUR POLLING UNIT IS BUS STOP, IKOT EBIYAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701011"){
  $response .= "END YOUR POLLING UNIT IS M.C.H SECRETARIAT RD, ETINANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701012"){
  $response .= "END YOUR POLLING UNIT IS POST OFFICE, ETINAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 7

else if ($text == "030702001"){
  $response .= "END YOUR POLLING UNIT IS CIVIC CENTRE, EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702004"){
  $response .= "END YOUR POLLING UNIT IS CENTRAL SCH, NDON UTIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NDON EYO 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702006"){
  $response .= "END YOUR POLLING UNIT IS ADULT EDU. CENTRE, OTO AKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702008"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT EEKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 7

else if ($text == "030703001"){
  $response .= "END YOUR POLLING UNIT IS CUSTOMARY COURT, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT EKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT UDO OTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703006"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT UDO OTO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703007"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT UDO OTO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EKANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 7

else if ($text == "030704001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT INYANG OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EKPENE OBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704003"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, NDON EYO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704004"){
  $response .= "END YOUR POLLING UNIT IS ST THERESA SEC SCH, EDEM EKPAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704005"){
  $response .= "END YOUR POLLING UNIT IS LEPROSY HOSPITAL EKPENE OBOM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 7

else if ($text == "030705001"){
  $response .= "END YOUR POLLING UNIT IS HOPE INSTITUTE, AFAHA IMAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, AFAHA AEKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ISHIET ERONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705004"){
  $response .= "END YOUR POLLING UNIT IS ST MARTIN, IKOT UDOBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT IKPUHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOTUDOBIA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 7

else if ($text == "030706001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AWA NTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , IKOT AKPAN OBIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AFAHA URUA ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706004"){
  $response .= "END YOUR POLLING UNIT IS GOVT SCH, ONIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706005"){
  $response .= "END YOUR POLLING UNIT IS COMM SEC SCH, IKOT ITINA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ITINA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706007"){
  $response .= "END YOUR POLLING UNIT IS CIVIC CENTRE, IKOT OBONG IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN OBIO EKOT\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 7

else if ($text == "030707001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSIEN OKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBIO EKA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBIO EKA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT IBOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT NTE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT NTE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT NTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT MFON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UMIANGEDE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UMIANGEDE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ESE\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 7

else if ($text == "030708001"){
  $response .= "END YOUR POLLING UNIT IS GOVT SCH, ANYAM EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708002"){
  $response .= "END YOUR POLLING UNIT IS CO-OPERATIVE HALL, ANYAM EFA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708003"){
  $response .= "END YOUR POLLING UNIT IS CO-OPERATIVE HALL, ANYAM EFA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708004"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH, ATA EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, AKPASUK EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708006"){
  $response .= "END YOUR POLLING UNIT IS CO-OPERATIVE HALL, ATA EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT NSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AKPA ESE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AKPA ESE 2\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 7


else if ($text == "030709001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPAN NTEBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IWOR ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IWOR ETOT 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IWOR ETOT 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL , IWOR ETOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709006"){
  $response .= "END YOUR POLLING UNIT IS TECH. SCH MBIOTO EKPENE ITUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709007"){
  $response .= "END YOUR POLLING UNIT IS C/SCH MBIOTO EKPENE ITUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EFIAT MBIOTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709010"){
  $response .= "END YOUR POLLING UNIT IS GOVT SCH, IKOT ETEKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709012"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT EKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709013"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIOTO EKPENE ITUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709014"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EFIAT MBIOTO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 7

else if ($text == "030710001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT NSEYEN 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT NSEYEN 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710003"){
  $response .= "END YOUR POLLING UNIT IS CO-OPERATIVE HALL, IKOT OSONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT OBIO INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710005"){
  $response .= "END YOUR POLLING UNIT IS CO-OPERATIVE IKOT OBIO INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH AFAHA EFIAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EKOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH EKOMANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 7

else if ($text == "030711001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH IKOT ISONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711002"){
  $response .= "END YOUR POLLING UNIT IS COMM SEC SCH, IKOT AKPABIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711003"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT AKPAYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711004"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT NKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711005"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT ESUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711006"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT UDOBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711007"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, IKOT ANANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT EKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711009"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, MBIOTO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711010"){
  $response .= "END YOUR POLLING UNIT IS V/HALL, MBIOTO 2\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 11 OF LGA 7

//END OF ALL PU IN LGA 7

// START OF PU IN WARD 1 OF LGA 8

else if ($text == "030801001"){
  $response .= "END YOUR POLLING UNIT IS CENTRAL SCH, UPENEKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801002"){
  $response .= "END YOUR POLLING UNIT IS AREA OFFICE, UPENEKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, ATASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, UPENEKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, OSUNG NSE ULE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801006"){
  $response .= "END YOUR POLLING UNIT IS POLY CLINIC, UDO OKUKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801007"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, ESSIEN UTIARUK\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 8

else if ($text == "030802001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ITAK ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030802002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT INWANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030802003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, INDUNG ABASI OKURE\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 8

else if ($text == "030803001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MKPANAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MKPANAK 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, MKPANAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, MKPANAK 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803005"){
  $response .= "END YOUR POLLING UNIT IS HEALTH CENTRE, MKPANAK\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 8

else if ($text == "030804001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IWUOKPOM OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030804002"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IWUOKPOM OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030804003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, AKATA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 8

else if ($text == "030805001"){
  $response .= "END YOUR POLLING UNIT IS OPEN SQUARE, IWOKPOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IWOKPOM 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IWOKPOM 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, INUA EYET IKOT 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, INUA EYET IKOT 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, INUA EYET IKOT\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 8

else if ($text == "030806001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OKOROUTIP 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030806002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OKOROUTIP 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030806003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, OKOROUTIP\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 8

else if ($text == "030807001"){
  $response .= "END YOUR POLLING UNIT IS GOVT. SCH, IWOACHANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030807002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IWOACHANG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030807003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IWOACHANG 2\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 8

else if ($text == "030808001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NKAFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030808002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030808003"){
  $response .= "END YOUR POLLING UNIT IS HEALTH CENTRE, OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030808004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ATABRIKANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 8

else if ($text == "030809001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, ATIA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, ATIA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, ETIO ESEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, ITAK IDIM UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OKPOSO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809006"){
  $response .= "END YOUR POLLING UNIT IS \PRY SCH, OKPOSO 2n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 8

else if ($text == "030810001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ESUK IKIM EKEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, ITAK AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810003"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, ITAK IDIM NNE EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810004"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, ESUK IKIM AKWAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, NDITO EKA IBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810006"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, OKOM ITA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 8

//END OF ALL WARDS UNDER LGA 8

//START OF WARD 1 OF LGA 9

else if ($text == "030901001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIEREBE OBIO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIEREBE OBIO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT IKO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT IKO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA ETOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NUNG OKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA IKOT OSUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901009"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT AKPAN EDU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIKPONG IKOT EDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MBIKPONG IKOT EDIM (NEAR BUS STOP)\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901012"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AKPAN ABIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ABIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901014"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, AFAHA IKOT OBIO NKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901015"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, AFAHA IKOT OBIO NKAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 9

else if ($text == "030902001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NUNG ETTE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NUNG ETTE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902003"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ODUOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902004"){
  $response .= "END YOUR POLLING UNIT IS CO-OP HALL, IKOT OBUOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKUBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AMBON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, OWOT UTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, OWOT UTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, EBERE OTU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT IKERE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UDO EKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT ABASI IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902013"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ETO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 9

else if ($text == "030903001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NUNG UDOE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NUNG UDOE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903003"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, NUNG UDOE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIEREBE AKPAWAT 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIEREBE AKPAWAT 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT AKPA ETOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , IKOT IDE AKPAKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , IKOT IDE ETUKUDO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 9

else if ($text == "030904001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIKPONG ATAI 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBIKPONG ATAI 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904003"){
  $response .= "END YOUR POLLING UNIT IS CO-OP HALL, EDIAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904004"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, OKU IBESIKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKURE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKURE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBIO ODONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT OBIO ODONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBIO OFFONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT OBIO OFFONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904011"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, EDEM IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, OKU IKOT EDAHA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 9

else if ($text == "030905001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NUNG UKANA IKOT EFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, NUNG UKANA IKOT EFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT OBIO AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, AFAHA UDOEYOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905005"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, AFAHA IKOT OWOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ITOKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905007"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, ABIA UKPO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 9

else if ($text == "030906001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NO. 1 AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NO. 1 AKPA UTONG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ANNUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906005"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT ANNUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906006"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH, OKOP NDUA ERONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906007"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT UKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AKPA ERONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPA NDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906010"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT AKPA NDUA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906011"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT AKPA NDUA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906012"){
  $response .= "END YOUR POLLING UNIT IS OBO MARKET SQUARE, IKOT AKPA NDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906013"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT EDIOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906014"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, MBAK EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, MBAK EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906015"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT UDO NKAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 9

else if ($text == "030907001"){
  $response .= "END YOUR POLLING UNIT IS HEALTH CENTRE, IKOT OBIO EDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT NKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT NKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907005"){
  $response .= "END YOUR POLLING UNIT IS NUR SCH, IKOT AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907006"){
  $response .= "END YOUR POLLING UNIT IS COURT HALL, IKOT IYAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE HALL, IKOT IYAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT NKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907009"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AKPASO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 9

else if ($text == "030908001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPA EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908002"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT AKPA EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT EBRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908004"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH , IKOT EBRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908005"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT AKPA EYOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908006"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPA EYOHO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT UDO EYOHO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBIO ATA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 9

else if ($text == "030909001"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, NDIKPO ATANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909002"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, NDIKPO ATANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ATANG ESEN 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909004"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ATANG ESEN 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ATANG ESEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ITOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909007"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, OBIO ADUANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909008"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OBONG EDIENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ATANG UMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909010"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ATANG UMA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909011"){
  $response .= "END YOUR POLLING UNIT IS TOWN HALL, IKOT MBANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT MBANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 9

else if ($text == "030910001"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT NKWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910002"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910003"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910004"){
  $response .= "END YOUR POLLING UNIT IS SEC SCH, IKOT OBIO NKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910005"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OBIO NKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910006"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910007"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910008"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT OKU AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910009"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT OKU AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910010"){
  $response .= "END YOUR POLLING UNIT IS PRY SCH, IKOT ENUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910011"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPASIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910012"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT IKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910013"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, IKOT MBRIDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910014"){
  $response .= "END YOUR POLLING UNIT IS MARKET SQUARE, NTUK OTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910015"){
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 9

//END OF ALL PU IN LGA 9 (IBESIKPO ASUTAN)

//HERE IS WHERE SHEGS STOPS CODING








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
