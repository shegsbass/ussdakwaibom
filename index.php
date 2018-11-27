 

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
  $response .= "END YOUR POLLING UNIT IS VILLAGE SQUARE, IKOT AKPAN ESSANG";
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



//MELODY CODE BASE
//STARTING FROM LGA 21 TO THE END

//POLLING UNIT UNDER WARD 001 OF LOCAL GOVT 21

else if ($text == "032101001"){
  $response .= "END Your polling unit is PRY SCH,IKOT IMO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101002"){
  $response .= "END Your polling unit is ADIAHA OBONG,SEC SCH IKOT IMO I \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101003"){
  $response .= "END Your polling unit is ADIAHA OBONG, SEC IKOT IMO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101004"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPATU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101005"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO IME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101006"){
  $response .= "END Your polling unit is SEC SCH, UKAT ARAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101007"){
  $response .= "END Your polling unit is PRY SCH, UKAT ARAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101008"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UKOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032101010"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EDIKPE\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 02 OF LOCAL GOVT 21

else if ($text == "032102001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102002"){
  $response .= "END Your polling unit is PRY SCH, NTIT OTON \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102003"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ADAKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102005"){
  $response .= "END Your polling unit is TOWN HALL,EDEBOM II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102006"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPENE UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102007"){
  $response .= "END Your polling unit is SEC SCH, IKOT EKPENE UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032102008"){
  $response .= "END Your polling unit is TOWN HALL,IKOT EKPENE UDO\n";
  $response .= $display;
  $response .= $message;
}
//POLLING UNIT UNDER WARD 003 OF LOCAL GOVT 21
else if ($text == "032103001"){
  $response .= "END Your polling unit is PRY SCH,ATAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103002"){
  $response .= "END Your polling unit is PRY SCH,IKOT ATAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103003"){
  $response .= "END Your polling unit is TOWNHALL, IKOT IYRE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103004"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN II \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103005"){
  $response .= "END Your polling unit is HEALTH CENTRE, IKOT ETOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103006"){
  $response .= "END Your polling unit is SEC SCH, IKOT UKOBO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103007"){
  $response .= "END Your polling unit is VILLAGE SQUARE,INYANG IBIAKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032103008"){
  $response .= "END Your polling unit is TOWNHALL, IKOT EDE\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 04 OF LOCAL GOVT 21

else if ($text == "032104001"){
  $response .= "END Your polling unit is SEC SCH, NDIYA USUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104002"){
  $response .= "END Your polling unit is PRY SCH, NDIYA USUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104003"){
  $response .= "END Your polling unit is TOWNHALL, NDIYA USUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104004"){
  $response .= "END Your polling unit is PRY SCH, AFIA NSIT ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104005"){
  $response .= "END Your polling unit is TOWNHALL, AFIA NSIT ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104006"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABASI UFAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104007"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAFUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104008"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKAP I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104009"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKAP II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104010"){
  $response .= "END Your polling unit is SEC SCH, IKOT ENWANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104011"){
  $response .= "END Your polling unit is IKOT INYANG ETI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104012"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO NDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104013"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDIBON I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032104014"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDIBON\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 005 OF LOCAL GOVT 21

else if ($text == "032105001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032105002"){
  $response .= "END Your polling unit is SEC SCH, IKOT EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032105003"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032105004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIEKENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032105005"){
  $response .= "END Your polling unit is SEC SCH, EDEM IDIM OKPOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032105006"){
  $response .= "END Your polling unit is PRY SCH, EDEM IDIM OKPOT EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032105007"){
  $response .= "END Your polling unit is PRY SCH, TOWNHALL, ODUATANG\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 006 OF LOCAL GOVT 21

else if ($text == "032106001"){
  $response .= "END Your polling unit is UPE, ATIAMKPAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032106002"){
  $response .= "END Your polling unit is ADULT EDUCATION,IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032106003"){
  $response .= "END Your polling unit is TOWNHALL, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032106004"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKWOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032106005"){
  $response .= "END Your polling unit is SEC SCH, IKOT OKWOT\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 007 OF LOCAL GOVT 21

else if ($text == "032107001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKWERE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032107002"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKWERE Ii\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032107003"){
  $response .= "END Your polling unit is PRY SCH, NDUKPOISE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032107004"){
  $response .= "END Your polling unit is SEC SCH, NDUKPOISE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032107005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPANABIA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032107006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPANABIA II\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 008 OF LOCAL GOVT 21

else if ($text == "032108001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UWAK IKOT UBO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108002"){
  $response .= "END Your polling unit is VILLAGE SQUARE NDAK UKANA, IKOT OBO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108003"){
  $response .= "END Your polling unit is NDAK UKANA, IKOT UBO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108004"){
  $response .= "END Your polling unit is SAL. ARMY PRY SCH, IKOT UBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108005"){
  $response .= "END Your polling unit is VILLAGE SQUARE ESSIEN UKPRAK, IKOT UBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108006"){
  $response .= "END Your polling unit is CENTRAL SCH, IKOT UBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108007"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO ITON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108008"){
  $response .= "END Your polling unit is PRY SCH, EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108009"){
  $response .= "END Your polling unit is TOWNHALL, UKAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108010"){
  $response .= "END Your polling unit is TOWNHALL, MBAK UNO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108011"){
  $response .= "END Your polling unit is HEAKTH CENTRE, IKOT UDO IME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108012"){
  $response .= "END Your polling unit is PRY SCH, OBIO UBIUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032108013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBIO AKPA IDU\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 009 OF LOCAL GOVT 21

else if ($text == "032109001"){
  $response .= "END Your polling unit is SEC SCH, AKAI UBIUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109002"){
  $response .= "END Your polling unit is VILLAGE HALL, EDEM IDIM AKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109003"){
  $response .= "END Your polling unit is PRY SCH, AKAI UBIUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109004"){
  $response .= "END Your polling unit is TOWNHALL, IKOT ENWANA AKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAENO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKPUDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKPUDO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAMBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109009"){
  $response .= "END Your polling unit is TOWNHALL, IBIOMIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109010"){
  $response .= "END Your polling unit is PRY SCH, IKOT NTUNG \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032109011"){
  $response .= "END Your polling unit is PRY SCH, NUNG OBONG\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 010 OF LOCAL GOVT 21

else if ($text == "032110001"){
  $response .= "END Your polling unit is VILLAGE HALL, ODORO ATASUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032110002"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBIO EKIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032110003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032110004"){
  $response .= "END Your polling unit is PRY SCH, IKOT NKOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032110005"){
  $response .= "END Your polling unit is TOWNHALL, IKOT OKPUYOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032110006"){
  $response .= "END Your polling unit is TOWNHALL, IKOT EDOK\n";
  $response .= $display;
  $response .= $message;
}


//POLLING UNIT UNDER WARD 001 OF LOCAL GOVT 22


else if ($text == "032201001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UKPONG IKOT UDOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032201002"){
  $response .= "END Your polling unit is VILLAGE HALL, MBAT ESIFON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032201003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UKPONG IKOT UDO ANWA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032201004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG IKOT UDO ANWA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032201005"){
  $response .= "END Your polling unit is VILLAGE HALL,NTONG UNO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032201006"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT ABIA\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 02 OF LOCAL GOVT 22

else if ($text == "032202001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IKOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202002"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT OBUK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202003"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT OBUK II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT MBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202005"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ABIAKPO IDIAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202006"){
  $response .= "END Your polling unit is VILLAGE HALL,IMAMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202007"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NTO ETON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202008"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO ETON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202009"){
  $response .= "END Your polling unit is VILLAGE HALL,URUK OSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032202010"){
  $response .= "END Your polling unit is VILLAGE HALL,ABIAKPO IKOT ABASI INYANG\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 03 OF LOCAL GOVT 22

else if ($text == "032203001"){
  $response .= "END Your polling unit is VILLAGE HALL,ABAK UKPOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203002"){
  $response .= "END Your polling unit is VILLAGE SQUARE,OBON UKWA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,OBON UKWA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203004"){
  $response .= "END Your polling unit is PRY SCH, NTO IKPANG - OBON UKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203005"){
  $response .= "END Your polling unit is VILLAGE HALL,OKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203006"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT OTO NTO AMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203007"){
  $response .= "END Your polling unit is VILLAGE HALL,IBIAKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032203008"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT AKPA ENUEK\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 04 OF LOCAL GOVT 22

else if ($text == "032204001"){
  $response .= "END Your polling unit is VILLAGE HALL,NSIT IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204002"){
  $response .= "END Your polling unit is VILLAGE HALL,IKPE USUNG ITA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKPE MBAK EYOP I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT MBAK EYOP II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204005"){
  $response .= "END Your polling unit is PRY SCH, IKPE MBAK EYOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204006"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ABASI EYOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204007"){
  $response .= "END Your polling unit is VILLAGE HALL,UROK USO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032204008"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO EKPU NYANYAHA\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 05 OF LOCAL GOVT 22

else if ($text == "032205001"){
  $response .= "END Your polling unit is VILLAGE HALL,ABIAKPO IBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205002"){
  $response .= "END Your polling unit is VILLAGE HALL,NKO NTO NKONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NKO NTO NKOBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205004"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO EKPU IKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205005"){
  $response .= "END Your polling unit is VILLAGE HALL,UTU IKOT INYANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205006"){
  $response .= "END Your polling unit is VILLAGE HALL,UTU IKOT INYANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205007"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO NGANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205008"){
  $response .= "END Your polling unit is METH. SEC SCH,NTO NADANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032205009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ABIA OSOM\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 06 OF LOCAL GOVT 22

else if ($text == "032206001"){
  $response .= "END Your polling unit is VILLAGE HALL,OKU OBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206002"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT UTU I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206003"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT UTU II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206004"){
  $response .= "END Your polling unit is VILLAGE HALL,MKPA UNO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206005"){
  $response .= "END Your polling unit is PRY SCH, NTO OBIO IKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206006"){
  $response .= "END Your polling unit is ST COL. SEC SCH, IKWEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206008"){
  $response .= "END Your polling unit is PRY SCH, IKWEN IKOT UDOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206009"){
  $response .= "END Your polling unit is VILLAGE HALL,ESA IKWEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAI IKWEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032206011"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UTIN\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 07 OF LOCAL GOVT 22

else if ($text == "032207001"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT AMBA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207002"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT AMBA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207003"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207004"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207005"){
  $response .= "END Your polling unit is PRY SCH,IKOT MEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207006"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UDO NTOP IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207007"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032207008"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO IDE ANWA EFFIAT\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 08 OF LOCAL GOVT 22

else if ($text == "032208001"){
  $response .= "END Your polling unit is VILLAGE HALL,USAKA ANNANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208002"){
  $response .= "END Your polling unit is VILLAGE HALL,ATAN IBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208003"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EDEM IDIM OKPO ETO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208005"){
  $response .= "END Your polling unit is VILLAGE SQUARE,OKOT ETO IKOT IMO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208006"){
  $response .= "END Your polling unit is VILLAGE HALL,ATAI ESSIEN IKOT IMO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208007"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IBONG URUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208008"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IBONG OKPO ETO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032208009"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT EYEM\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 10 OF LOCAL GOVT 22

else if ($text == "032210001"){
  $response .= "END Your polling unit is VILLAGE HALL,NTO ESU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210002"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT UKANA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210003"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT UKANA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210004"){
  $response .= "END Your polling unit is PRY SCH,IKOT UKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210005"){
  $response .= "END Your polling unit is VILLAGE HALL,ABAIKPO NKAP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210006"){
  $response .= "END Your polling unit is PRY SCH,ABIAKPO NKAP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210007"){
  $response .= "END Your polling unit is VILLAGE HALL,ABIAKPO IKOT UKAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210008"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT OKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ABAMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210010"){
  $response .= "END Your polling unit is VILLAGE HALL,ABAMA MBAK EYOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210011"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ABIAKPO IKOT ABASI EDUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032210012"){
  $response .= "END Your polling unit is PRY SCH,IKOT O T U\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 09 OF LOCAL GOVT 22

else if ($text == "032209001"){
  $response .= "END Your polling unit is VILLAGE HALL, NTO OBIO IWOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032209002"){
  $response .= "END Your polling unit is VILLAGE HALL, NTO OMUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032209003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032209004"){
  $response .= "END Your polling unit is VILLAGE HALL, NTO ASSIAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032209005"){
  $response .= "END Your polling unit is VILLAGE HALL, NTO EDINO OBOT IDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032209006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IDEM UDO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032209007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IDEM UDO II\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 01 OF LOCAL GOVT 23

else if ($text == "032301001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,MBIEDUO/ANUA OKOPEDI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032301002"){
  $response .= "END Your polling unit is CENTRAL SCHOOL, OKOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032301003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,AKANAWANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032301004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ATIPAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032301005"){
  $response .= "END Your polling unit is MARKET SQUARE,IBAWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032301006"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032301007"){
  $response .= "END Your polling unit is VILLAGE SQUARE,AFAHA NSUNG\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 02 OF LOCAL GOVT 23


else if ($text == "032302001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,AMMAMONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032302002"){
  $response .= "END Your polling unit is CO-OP HALL AMMAMONG ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032302003"){
  $response .= "END Your polling unit is ST THERESA'S SCH,NSATING\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032302004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NSATING OKOPEDI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032302005"){
  $response .= "END Your polling unit is  VILLAGE SQUARE,ATAI OTOPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032302006"){
  $response .= "END Your polling unit is ST PATRICK'S SCH APE AMMAMONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032302007"){
  $response .= "END Your polling unit is VILLAGE SQUARE APE AMMAMONG\n";
  $response .= $display;
  $response .= $message;
}

// POLLING UNIT 03 UNDER LGA 23

else if ($text == "032303001"){
  $response .= "END Your polling unit is MBAWA HALL, EBIGHI EDU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EBIGHI EDU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UBE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303004"){
  $response .= "END Your polling unit is TOWN HALL, UBE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303005"){
  $response .= "END Your polling unit is ST SIMON'S SCH,EBIGHI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EBIGHI OKOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AKIBA-OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IQUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OSUKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032303011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANTAI EMA\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNIT UNDER WARD 04 OF LOCAL GOVT 23

else if ($text == "032304001"){
  $response .= "END Your polling unit is ST JAMES SCH,OBUFI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304002"){
  $response .= "END Your polling unit is CO-OP HALL, OBUFI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,OBUFI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EBIGHI ETA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304005"){
  $response .= "END Your polling unit is ST PETER SCH,NUNG ATAI ETA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304006"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NUNG ATAI ETA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304007"){
  $response .= "END Your polling unit is ST PAUL SCH, NUNG UDOM ODOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304008"){
  $response .= "END Your polling unit is METH SCH, NUNG ATAI ODOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032304009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ATIPA ODOBO\n";
  $response .= $display;
  $response .= $message;
}

// POLLING UNIT FOR WARD 05 UNDER LGA 23

else if ($text == "032305001"){
  $response .= "END Your polling unit is PRY SCH, MBOKPU ODUOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032305002"){
  $response .= "END Your polling unit is VILLAGE SQUARE,MBOKPU ODUOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032305003"){
  $response .= "END Your polling unit is MARKET SQUARE,AKAI NDYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032305004"){
  $response .= "END Your polling unit is MARKET SQUARE,AFAHA AKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032305005"){
  $response .= "END Your polling unit is VILLAGE SQUARE,UDUNG UKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032305006"){
  $response .= "END Your polling unit is TOWN HALL 1, AFAHA AKAI I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032305007"){
  $response .= "END Your polling unit is TOWN HALL II, AFAHA AKAI II\n";
  $response .= $display;
  $response .= $message;
}

POLLING UNIT FOR WARD 6 UNDER LGA 23

else if ($text == "032306001"){
  $response .= "END Your polling unit is GOVT. SCH,URUE ITA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032306002"){
  $response .= "END Your polling unit is ST.BRIDRID SCH,UDUNG AFIANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032306003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UDUNG ULO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032306004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UDUNG UMO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032306005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UDUNG AMKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032306006"){
  $response .= "END Your polling unit is GOVT.SCH OYOKU ASANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032306007"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYO OFFONG\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNITS FOR WORD 07 UNDER LGA 23

else if ($text == "032307001"){
  $response .= "END Your polling unit is GOVT.SCH EWEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032307002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EWEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032307003"){
  $response .= "END Your polling unit is Q.I.C SCH, EBIGHI ANWA -ORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032307004"){
  $response .= "END Your polling unit is MARKET SQUARE, ISA OKIUSO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032307005"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ISA OKIUSO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032307006"){
  $response .= "END Your polling unit is METH.SCH NSIE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032307007"){
  $response .= "END Your polling unit is ST.JOHN SCH, NSIE\n";
  $response .= $display;
  $response .= $message;
}

// POLLING UNIT FOR WARD 08 UNDER LGA 23

else if ($text == "032308001"){
  $response .= "END Your polling unit is ST. ANDREW SCH, OTI-ORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308002"){
  $response .= "END Your polling unit is GOVT SCH, UTINE EYEKUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTINE NDUONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETIEKE UTINE ETO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308005"){
  $response .= "END Your polling unit is ST.JOSEPH SCH, EBIGHI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYO NKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITAK UYATI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITAK OKIUSO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032308009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITAK EKIM\n";
  $response .= $display;
  $response .= $message;
}

// POLLING UNITS FOR WARD 09 UNDER LGA 23

else if ($text == "032309001"){
  $response .= "END Your polling unit is MARKET SQUARE, ATIABANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYOBIAFAHA ATIABANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309003"){
  $response .= "END Your polling unit is ST JOSEPH SCH, URUTING\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OSU OFFI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309005"){
  $response .= "END Your polling unit is ST JAMES SCH, OTIEKE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309006"){
  $response .= "END Your polling unit is METH.SCH OFFI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309007"){
  $response .= "END Your polling unit is OBIO ISONG AFAHA OSU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA OSU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYEDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032309011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKONO\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNITS FOR WARD 10 UNDER LGA 23

else if ($text == "032310001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NUNG UKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310002"){
  $response .= "END Your polling unit is MARKET SQUARE,NUNG UKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310003"){
  $response .= "END Your polling unit is CONVENANT SCH, ANUA EKEYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310004"){
  $response .= "END Your polling unit is MARKET SQUARE,IDIBI ENIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310005"){
  $response .= "END Your polling unit is GOVT. SCH EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310006"){
  $response .= "END Your polling unit is VILLAGE SQUARE,UFOK ESUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310007"){
  $response .= "END Your polling unit is VILLAGE SQUARE,OBOT INWANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310008"){
  $response .= "END Your pol8ling unit is METH SCH, ESUK INWANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032310009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}

// POLLING UNITS FOR WARD 01 UNDER LGA 24

else if ($text == "032401001"){
  $response .= "END Your polling unit is TOWN HALL, AWA IMAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401002"){
  $response .= "END Your polling unit is TOWN HALL, AWA IMAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401003"){
  $response .= "END Your polling unit is PRY SCH, AWA IMAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401004"){
  $response .= "END Your polling unit is PRY SCH, AWA IMAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401005"){
  $response .= "END Your polling unit is PRY SCH, AWA IMAN III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AWA NKOP I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AWA NKOP II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AWA NDON I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AWA NDON I\n";
  $response .= $display;
  $response .= $message;
}
eelse if ($text == "032401010"){
  $response .= "END Your polling unit is TOWN HALL, AWA NDON I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401011"){
  $response .= "END Your polling unit is TOWN HALL, AWA NDON I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401012"){
  $response .= "END Your polling unit is TOWN HALL, AWA NDON II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401013"){
  $response .= "END Your polling unit is TOWN HALL, AFAHA UBIOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032401013"){
  $response .= "END Your polling unit is MARKET SQUARE, AFAHA UBIOM\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNITS FOR WARD 02 UUNDER LGA 24

else if ($text == "032402001"){
  $response .= "END Your polling unit is TOWN HALL, AFAHA ATAI. I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402002"){
  $response .= "END Your polling unit is TOWN HALL, AFAHA ATAI. II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402003"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDEM UDO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402004"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDEM UDO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402005"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT EDEM UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN NKPE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402007"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN NKPE II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402008"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN NKPE III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NKANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032402010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NKANG II\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNITS FOR WARD 03 UNDER LGA 24

else if ($text == "032403001"){
  $response .= "END Your polling unit is SEC SCH, IKOT AKPAN ISHIET I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403002"){
  $response .= "END Your polling unit is SEC SCH, IKOT AKPAN ISHIET II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403003"){
  $response .= "END Your polling unit is SEC SCH, IKOT AKPAN ISHIET III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403004"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN ISHIET I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN ISHIET II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403006"){
  $response .= "END Your polling unit is PRY SCH, NTAN IDE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403007"){
  $response .= "END Your polling unit is PRY SCH, NTAN IDE II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403008"){
  $response .= "END Your polling unit is MARKET SQUARE, NTAN IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403009"){
  $response .= "END Your polling unit is TOWN HALL,NTAN IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403010"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ESE ISHIET I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403011"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ESE ISHIET II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDEM IDIM ISHIET I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDEM IDIM ISHIET II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403014"){
  $response .= "END Your polling unit is TOWN HALL, MBAK ISHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403015"){
  $response .= "END Your polling unit is PRY SCH, MBAK ISHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403016"){
  $response .= "END Your polling unit is PRY SCH, ABAK ISHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403017"){
  $response .= "END Your polling unit is MARKET SQUARE, ABAK ISHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403018"){
  $response .= "END Your polling unit is TOWN HALL,IKOT OBONG ISHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032403019"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBONG ISHIET\n";
  $response .= $display;
  $response .= $message;
}

//POLLING UNITS FOR WARD 04 UNDER LGA 24

else if ($text == "032404001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO ESANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404002"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO ESANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404003"){
  $response .= "END Your polling unit is PRY SCH, ATIAMKPAT I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404004"){
  $response .= "END Your polling unit is PRY SCH, ATIAMKPA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404005"){
  $response .= "END Your polling unit is TOWN HALL, ATIAMKPAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404006"){
  $response .= "END Your pol6ling unit is HEALTH CENTER, ATIMKPAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO EKET I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO EKET II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404009"){
  $response .= "END Your polling unit is MARKET SQUARE,IKOT AKPAN NKOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404010"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT AKPAN NKOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404011"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT MBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404012"){
  $response .= "END Your polling unit is TOWN HALL, IKOT MBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404013"){
  $response .= "END Your polling unit is TOWN HALL, IKOT MBONG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT MBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404015"){
  $response .= "END Your polling unit is PRY SCH, NUNG OKU EKANEM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404016"){
  $response .= "END Your polling unit is PRY SCH, NUNG OKU EKANEM II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404017"){
  $response .= "END Your polling unit is TOWN HALL, NUNG OKU EKANEM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032404018"){
  $response .= "END Your polling unit is TOWN HALL, NUNG OKU EKANEM II\n";
  $response .= $display;
  $response .= $message;
}

// POLLING UNIT FOR WARD 5 UNDER LGA 24

else if ($text == "032405001"){
  $response .= "END Your polling unit is TOWN HALL, NDON EYO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405002"){
  $response .= "END Your polling unit is TOWN HALL, NDON EYO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405003"){
  $response .= "END Your polling unit is PRY SCH, NDON EYO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405004"){
  $response .= "END Your polling unit is TOWN HALL, MKPOK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405005"){
  $response .= "END Your polling unit is TOWN HALL, MKPOK II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405006"){
  $response .= "END Your polling unit is HEALTH CENTRE, MKPOK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405007"){
  $response .= "END Your polling unit is HEALTH CENTRE, MKPOK II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405008"){
  $response .= "END Your polling unit is TOWN HALL, OKAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405009"){
  $response .= "END Your polling unit is PRY SCH, OKAT I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405010"){
  $response .= "END Your polling unit is PRY SCH, OKAT II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405011"){
  $response .= "END Your polling unit is PRY SCH, OKAT III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032405012"){
  $response .= "END Your polling unit is PRY SCH, OKAT IV\n";
  $response .= $display;
  $response .= $message;
}

//WARD 6 LGA 24

else if ($text == "032406001"){
  $response .= "END Your polling unit is TOWNHALL,IKOT NKAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406002"){
  $response .= "END Your polling unit is TOWNHALL,IKOT NKAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406003"){
  $response .= "END Your polling unit is MARKET SQUARE,IKOT NKAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406004"){
  $response .= "END Your polling unit is MARKET SQUARE,IKOT NKAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406005"){
  $response .= "END Your polling unit VILLAGE SQUARE,IKOT NKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406006"){
  $response .= "END Your polling unit is PRY SCH,IKOT NDUA IMAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406007"){
  $response .= "END Your polling unit is PRY SCH,IKOT NDUA IMAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406008"){
  $response .= "END Your polling unit is PRY SCH,IKOT NDUA IMAN III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032406009"){
  $response .= "END Your polling unit is TOWN HALL, IKOT NDUA IMAN\n";
  $response .= $display;
  $response .= $message;
}

// WARD 7 OF LGA 24

else if ($text == "032407001"){
  $response .= "END Your polling unit is TOWN HALL, IKOT AKPATEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407002"){
  $response .= "END Your polling unit is TOWN HALL,IKOT AKPAETEK II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFE-UTUM IKOT AKPAETEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407004"){
  $response .= "END Your polling unit is HEALTH CENTRE, ABAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407005"){
  $response .= "END Your polling unit is PRY SCH, ADAHA EFFIAT I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407006"){
  $response .= "END Your polling unit is PRY SCH, ADAHA EFFIAT II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407007"){
  $response .= "END Your polling unit is PRY SCH, IKOT NTUEN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032407008"){
  $response .= "END Your polling unit is PRY SCH,IKOT NTUEN II\n";
  $response .= $display;
  $response .= $message;
}

// WARD 08 OF LGA 24

else if ($text == "032408001"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBIDANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBIDANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBIDANG III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT EBIDANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBEKPO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBEKPO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBEKPO III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is TOWN HALL,IKOT ANNANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408001"){
  $response .= "END Your polling unit is TOWN HALL,IKOT ANNANG II\n";
  $response .= $display;
  $response .= $message;
}

//WARD 9 LGA 24

else if ($text == "032409001"){
  $response .= "END Your polling unit is PRY SCH, IKWE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032409002"){
  $response .= "END Your polling unit is PRY SCH, IKWE II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032409003"){
  $response .= "END Your polling unit is PRY SCH, IKWE III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032409004"){
  $response .= "END Your polling unit is HEALTH CENTRE, IKWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032409005"){
  $response .= "END Your polling unit is TOWN HALL, IKOT MBUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032409006"){
  $response .= "END Your polling unit is TOWN HALL, OTONG OKPOK\n";
  $response .= $display;
  $response .= $message;
}

// WARD 10 LGA 24

else if ($text == "032410001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDOR I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410002"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDOR II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410003"){
  $response .= "END Your polling unit is SEC SCH, IKOT EDOR I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410004"){
  $response .= "END Your polling unit is SEC SCH, IKOT EDOR II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410005"){
  $response .= "END Your polling unit is TOWNHALL, IKOT EDOR I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410006"){
  $response .= "END Your polling unit is TOWNHALL, IKOT EDOR II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MKPAETO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MKPAETO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410009"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKO IBON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKO IBON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032410011"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKO IBON\n";
  $response .= $display;
  $response .= $message;
}

//WARD 11 LGA 24

else if ($text == "032411001"){
  $response .= "END Your polling unit is PRY SCH, UKPANA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032411002"){
  $response .= "END Your polling unit is PRY SCH, UKPANA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032411003"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032411004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032411005"){
  $response .= "END Your polling unit is PRY SCH, AKPABOM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032411006"){
  $response .= "END Your polling unit is PRY SCH, AKPABOM II\n";
  $response .= $display;
  $response .= $message;
}

//WARD 12 LGA 24

else if ($text == "032412001"){
  $response .= "END Your polling unit is TOWNHALL, OKOM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412002"){
  $response .= "END Your polling unit is TOWNHALL, OKOM II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412003"){
  $response .= "END Your polling unit is PRY SCH, IKOT NDUDOT I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412004"){
  $response .= "END Your polling unit is PRY SCH, IKOT NDUDOT II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412005"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UDO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412006"){
  $response .= "END Your polling unit is TOWNHALL, IKOT UDO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412008"){
  $response .= "END Your polling unit is SEC SCH, IKOT EBERE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412009"){
  $response .= "END Your polling unit is SEC SCH, IKOT EBERE II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032412010"){
  $response .= "END Your polling unit is SEC SCH, IKOT EBERE III\n";
  $response .= $display;
  $response .= $message;
}


// WARD 01 OF LGA 25

else if ($text == "032501001"){
  $response .= "END Your polling unit is OPEN SPACE, IDUA ESIT EDIK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032501002"){
  $response .= "END Your polling unit is OPEN SPACE, EDIK EKPU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032501003"){
  $response .= "END Your polling unit is PARK OFFICE, ORON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032501004"){
  $response .= "END Your polling unit is BEACH MARKET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032501005"){
  $response .= "END Your polling unit is IYAMBA/ITU STREET JUNCTION\n";
  $response .= $display;
  $response .= $message;
}

//WARD 02 OF LGA 25

else if ($text == "032502001"){
  $response .= "END Your polling unit is OPEN SPACE, AKPABIO BEACH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032502002"){
  $response .= "END Your polling unit is OPEN SPACE, ALONG METH AVENUE JUNCTION\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032502003"){
  $response .= "END Your polling unit is PRY SCH, AKWA EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032502004"){
  $response .= "END Your polling unit is OPEN SPACE, ANDIYO/AKWA EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032502005"){
  $response .= "END Your polling unit is OPEN SPACE, INE EMAN\n";
  $response .= $display;
  $response .= $message;
}

// WARD 03 OF LGA 25

else if ($text == "032503001"){
  $response .= "END Your polling unit is USO ATING\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032503002"){
  $response .= "END Your polling unit is AME ZION SCHOOL\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032503003"){
  $response .= "END Your polling unit is ODORO STREET, OPPOSITE OPEN SPACE AFRICANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032503004"){
  $response .= "END Your polling unit is IYAMBA/ORON JUNCTION\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032503005"){
  $response .= "END Your polling unit is OPEN SPACE, CALABAR STREET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032503006"){
  $response .= "END Your polling unit is OPEN SPACE, INE AFA URUTING IDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032503007"){
  $response .= "END Your polling unit is OPEN SPACE, UUWE AKAN/ODORO STREET JUNCTION\n";
  $response .= $display;
  $response .= $message;
}

// WARD 04 OF LGA 25

else if ($text == "032504001"){
  $response .= "END Your polling unit is PRY SCH, UKPATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032504002"){
  $response .= "END Your polling unit is OPEN SPACE, OPPOSITE VILLAGE HEAD COMP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032504003"){
  $response .= "END Your polling unit is OPEN SPACE, VILLAGE SQUARE JUNCTION\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032504004"){
  $response .= "END Your polling unit is OPEN SPACE, ESUK MBIAM\n";
  $response .= $display;
  $response .= $message;
}

// WARD 05 OF LGA 25+

else if ($text == "032505001"){
  $response .= "END Your polling unit is METH BOY'S HIGH SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032505002"){
  $response .= "END Your polling unit is BOTTOM GARDEN ESUK ORON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032505003"){
  $response .= "END Your polling unit is OPEN SPACE, ESUK MMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032505004"){
  $response .= "END Your polling unit is OPEN SPACE, UDUNG OKUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032505005"){
  $response .= "END Your polling unit is OPEN SPACE, MARITIME ACADEMY\n";
  $response .= $display;
  $response .= $message;
}

// WARD 06 OF LGA 25

else if ($text == "032506001"){
  $response .= "END Your polling unit is OPEN SPACE, NTAR FISH MARKET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032506002"){
  $response .= "END Your polling unit is MAINLAND TECHNICAL COLLEGE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032506003"){
  $response .= "END Your polling unit is CUSTOM HOUSE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032506004"){
  $response .= "END Your polling unit is MARY HANNEY SEC SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032506005"){
  $response .= "END Your polling unit is PRY SCH, UKO OKWONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032506006"){
  $response .= "END Your polling unit is OPEN SPACE FORNER N.R.C PREMISES\n";
  $response .= $display;
  $response .= $message;
}

// 07 of lga 25

else if ($text == "032507001"){
  $response .= "END Your polling unit is CONVENANT SCH, ORON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032507002"){
  $response .= "END Your polling unit PRY SCH, UKO UYUKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032507003"){
  $response .= "END Your polling unit is PARK MARKET/COURT HALL\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032507004"){
  $response .= "END Your polling unit is OPEN SPACE, ETIM INYANG STREET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032507005"){
  $response .= "END Your polling unit is ARMY CHILDREN SCH\n";
  $response .= $display;
  $response .= $message;
}

// 08 OF LGA 25

else if ($text == "032508001"){
  $response .= "END Your polling unit is PRY SCH, EYO ABASI I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508002"){
  $response .= "END Your polling unit is PRY SCH, EYO ABASI II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508003"){
  $response .= "END Your polling unit is PRY SCH, EYO ABASI III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508004"){
  $response .= "END Your polling unit is PRY SCH, MARY HARNEY ROAD/SEC,JUNCTION\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508005"){
  $response .= "END Your polling unit is PRY SCH, OPEN SPACE, HOUSING STATE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508006"){
  $response .= "END Your polling unit is WATER BOARD\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508007"){
  $response .= "END Your polling unit is OPEN SPACE, UDUNG USATAI, OPPOSITE APOSTOLIC CHURCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508008"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNG EKUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032508009"){
  $response .= "END Your polling unit is FIRE SERVICE\n";
  $response .= $display;
  $response .= $message;
}

// ward 09 LGA 25

else if ($text == "032509001"){
  $response .= "END Your polling unit is PRY SCH,IQUITTA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032509002"){
  $response .= "END Your polling unit is PRY SCH,IQUITTA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032509003"){
  $response .= "END Your polling unit is HOSPITAL COMPOUND\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032509004"){
  $response .= "END Your polling unit is EYOTONG LANE JUNCTION\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032509005"){
  $response .= "END Your polling unit is MARKET SQUARE, EYOTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032509006"){
  $response .= "END Your polling unit IS IQUITTA VILLAGE HALL\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032509007"){
  $response .= "END Your polling unit is OPEN SPACE, EBONG STREET EYOTONG VILLAGE\n";
  $response .= $display;
  $response .= $message;
}

// WARD 10 OF LGA 25

else if ($text == "032510001"){
  $response .= "END Your polling unit is GOVT. SCH, UYA ORON I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032510002"){
  $response .= "END Your polling unit is GOVT. SCH, UYA ORON II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032510003"){
  $response .= "END Your polling unit is GOVT. SCH, UYA ORON III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032510004"){
  $response .= "END Your polling unit is OPEN SPACE, TOYO ESTATE, UYO ORON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032510005"){
  $response .= "END Your polling unit is ST. PAUL PRY SCH I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032510006"){
  $response .= "END Your polling unit is ST. PAUL PRY SCH II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032510007"){
  $response .= "END Your polling unit is OPEN SPACE NEAR MADAM AFFIONG UMO'S COMPOUND\n";
  $response .= $display;
  $response .= $message;
}

// WARD 01 OF WARD 26

else if ($text == "032601001"){
  $response .= "END Your polling unit is PRY SCH, IKOT IBRITAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OKU URUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601003"){
  $response .= "END Your polling unit is PRY SCH, AKPAYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETOK NKWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDUEP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601008"){
  $response .= "END Your polling unit is TOWNHALL, IKOT ETEYE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKPUK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKPUK II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601011"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKPUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601012"){
  $response .= "END Your polling unit is SEC. SCH IKOT EKEFE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601013"){
  $response .= "END Your polling unit is VILLAGE HALL ETOK INEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032601014"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EFFIONG\n";
  $response .= $display;
  $response .= $message;
}

// WARD 02 OF LGA 26

else if ($text == "032602001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ESSE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO IDANG \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602003"){
  $response .= "END Your polling unit is VILLAGE, IKOT ETIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602004"){
  $response .= "END Your polling unit is TOWN HALL, MBAISO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602005"){
  $response .= "END Your polling unit is PRY SCH, IKOT NTUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602006"){
  $response .= "END Your polling unit is PRY SCH, IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO URUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO ENIN ATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO ENIIN UDOBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032602011"){
  $response .= "END Your polling unit is TOWN HALL. OKUKUK\n";
  $response .= $display;
  $response .= $message;
}

// WARD 03 OF LGA 26
else if ($text == "032603001"){
  $response .= "END Your polling unit is PRYSCH, NUNG OKU UBO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032603002"){
  $response .= "END Your polling unit is PRY SCH, INEN ABASI ATAI \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032603003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDOT USUBG IDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032603004"){
  $response .= "END Your polling unit is TOWN HALL, NDOT IKOT OBIOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032603005"){
  $response .= "END Your polling unit is PRY SCH, NUNG OKU IBIET\n";
  $response .= $display;
  $response .= $message;
}

// WATRD 04 OF LGA 26
else if ($text == "032604001"){
  $response .= "END Your polling unit is VILLAGE HALL, INEN IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, INEN NSAI \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604003"){
  $response .= "END Your polling unit is VILLAGE HALL, INEN ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDOT IKOT EDA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IDEM UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604007"){
  $response .= "END Your polling unit is PRY SCH,IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604009"){
  $response .= "END Your polling unit is SEC SCH,MBIAKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604010"){
  $response .= "END Your polling unit is TOWNHSLL, IBISNGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604011"){
  $response .= "END Your polling unit is VILLAGE HALL, URUK OTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604012"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSUKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604013"){
  $response .= "END Your polling unit is PRY SCH, OBIO EBIET ESA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA OBIO ITON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO NSU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604016"){
  $response .= "END Your polling unit is VILLAGE HALL, USUNG ATIAT UBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBIO IBIET NKARIKA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604018"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NUNG OKU UBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604019"){
  $response .= "END Your polling unit is PRY SCH, OBIO NDOT I\n";
  $response .= $display;
  $response .= $message;
}


// WARD 05 OF LGA 26
else if ($text == "032605001"){
  $response .= "END Your polling unit is PRY SCH, NUNG IKOT OBIODO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604002"){
  $response .= "END Your polling unit is PRY SCH, EKA NUNG IKOT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NUNG IKOT OKURUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604004"){
  $response .= "END Your polling unit is HEALTH CENTER, NUNG IKOT ASANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604005"){
  $response .= "END Your polling unit is PRY SCH, NTAK OBIO AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IDIAHA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604007"){
  $response .= "END Your polling unit is VILLAGE HALL, AYA OBIO AKPA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTENGE AKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604009"){
  $response .= "END Your polling unit is PRY SCH,ATA ESSIEN OBIO AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKA IDEH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604011"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO OBIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604013"){
  $response .= "END Your polling unit is VILLAGE HALL, ATA OBIO AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032604014"){
  $response .= "END Your polling unit is VILLAGE SQUARE NUNG IKOT URUA EKPO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 06 OF LGA 26
else if ($text == "032606001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AFANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606002"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ESSIEN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606003"){
  $response .= "END Your polling unit is PRY SCH, ISAMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606004"){
  $response .= "END Your polling unit is PRY SCH, NTAK IBESIT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ETIM IBESIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606007"){
  $response .= "END Your polling unit is VILLAGE HALL,URUK OBONG \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606008"){
  $response .= "END Your polling unit is PRY SCH, EDEM IDIM IBESIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK ENUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDON IKOT IMOIDEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606012"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN MBURE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606015"){
  $response .= "END Your polling unit is VILLAGE HALL, NTO ADUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESIKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606017"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ESIKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606018"){
  $response .= "END Your polling unit is IKOT OKO ETOK JUNCTION\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606019"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT UDO ADUAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032606020"){
  $response .= "END Your polling unit is PRY SCH, IBESIT EKOI\n";
  $response .= $display;
  $response .= $message;
}

// WARD 07 OF LGA 26


else if ($text == "032607001"){
  $response .= "END Your polling unit is PRY SCH, UKPOM EDEM INYANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607002"){
  $response .= "END Your polling unit is PRY SCH, UKPOM EDEM INYANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607003"){
  $response .= "END Your polling unit is PRY SCH, EKPARAKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDIENE IKOT EBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITUNG IKOT NDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607006"){
  $response .= "END Your polling unit is PRY SCH, IKA ANNANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607007"){
  $response .= "END Your polling unit is PRY SCH, MBON EBRE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607009"){
  $response .= "END Your polling unit is TOWN HALL, IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607010"){
  $response .= "END Your polling unit is CIVIC CENTRE, IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607011"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN EDA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607012"){
  $response .= "END Your polling unit is PRY SCH, IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDIENE ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607015"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBONG AKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032607016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA USUNG\n";
  $response .= $display;
  $response .= $message;
}

// WARD 08 OF LGA 26

else if ($text == "032608001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKPONG EREN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT MBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU IKOT IWARA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN ETEDUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN NTIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608005"){
  $response .= "END Your polling unit is SEC SCH, IKOT OWOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608007"){
  $response .= "END Your polling unit is TOWN HALL, IKOK OTOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032608008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OTUNG AYA\n";
  $response .= $display;
  $response .= $message;
}

// WARD 09 OF LGA 26

else if ($text == "032609001"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO ADUAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN OTUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609004"){
  $response .= "END Your polling unit is PRY SCH, UTU IKOT OBIO EKPE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ADIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETOK EDIENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609007"){
  $response .= "END Your polling unit is PRY SCH, EKA EDIENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT USO ETOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032609009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG\n";
  $response .= $display;
  $response .= $message;
}

// WARD  10 OF LGA 26


else if ($text == "032610001"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESENAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ESENAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610003"){
  $response .= "END Your polling unit is SEC SCH, IKOT ESENAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MANTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOSAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610007"){
  $response .= "END Your polling unit is PRY SCH, IKOT INUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610008"){
  $response .= "END Your polling unit is TOWN HALL, OFFOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDIENE IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610010"){
  $response .= "END Your polling unit is PRY SCH, UKPOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610011"){
  $response .= "END Your polling unit is CIVIC CENTRE,IKOT ESENAM\n";
  $response .= $display;
  $response .= $message;
}

// WARD 11 OF LGA 26


else if ($text == "032611001"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSUTE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OTU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611005"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKPONG OBIO ESE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611007"){
  $response .= "END Your polling unit is TOWNHALL,IKOT UTIAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611008"){
  $response .= "END Your polling unit is TOWN HALL, OFFOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTE ETOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INUEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032611011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO ATARA\n";
  $response .= $display;
  $response .= $message;
}

// WARD 12 OF LGA 26


else if ($text == "032612001"){
  $response .= "END Your polling unit is PRY SCH, IBESIT OKPORKORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612002"){
  $response .= "END Your polling unit is PRY SCH, ANWA UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612003"){
  $response .= "END Your polling unit is PRY SCH, IBESIT ANWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612004"){
  $response .= "END Your polling unit is VILLAGE HALL, ODUNG NTUK UMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612006"){
  $response .= "END Your polling unit is PRY SCH, IKOT IKPENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612007"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612008"){
  $response .= "END Your polling unit is VILLAGE HALL, ITUNG EKPIP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612009"){
  $response .= "END Your polling unit is TOWN HALL, IKOT AKAMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612010"){
  $response .= "END Your polling unit is PRY SCH, ETEBEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG OBIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032612013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO ADUAK\n";
  $response .= $display;
  $response .= $message;
}


// WARD 13 OF LGA 26


else if ($text == "032613001"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UDOFFIONG\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "032610001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OMONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OWOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610004"){
  $response .= "END Your polling unit is TOWN HALL, IKOT AKPAN UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN NSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610007"){
  $response .= "END Your polling unit is PRY SCH, WARIFFE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610008"){
  $response .= "END Your polling unit is PRY SCH, IKOT IBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610009"){
  $response .= "END Your polling unit is VILLAGE HALL, ATADO NTAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032610010"){
  $response .= "END Your polling unit is TOWNHALL, WARIFFE\n";
  $response .= $display;
  $response .= $message;
}


// WARD 01 OF LGA 27


else if ($text == "032701001"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNG OTOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032701002"){
  $response .= "END Your polling unit is VILLAGE HALL, EYONSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032701003"){
  $response .= "END Your polling unit is VILLAGE HALL,UDUNG ESIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032701004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ENIONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032701005"){
  $response .= "END Your polling unit is MARKET SQUARE, EYO ULIONG\n";
  $response .= $display;
  $response .= $message;
}

// WARD 02 OF LGA 27

else if ($text == "032702001"){
  $response .= "END Your polling unit is VILLAGE HALL, EYOFIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032702002"){
  $response .= "END Your polling unit is VILLAGE HALL, EYO UKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032702003"){
  $response .= "END Your polling unit is MARKET SQUARE, EYOBIEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032702004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYO UWE\n";
  $response .= $display;
  $response .= $message;
}

// WARD 03 OF LGA 27

else if ($text == "032703001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYOSIO OSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032703002"){
  $response .= "END Your polling unit is VILLAGE HALL, EYOKOR OSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032703003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYO ATING I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032703004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYO ATING II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032703005"){
  $response .= "END Your polling unit is VILLAGE HALL, EYO BISUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032703006"){
  $response .= "END Your polling unit is VILLAGE HALL, EYO ENAMMI\n";
  $response .= $display;
  $response .= $message;
}

// WARD 04 OF LGA 27

else if ($text == "032704001"){
  $response .= "END Yourpolling unit is HEALTH CENTRE, EYOKPONUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032704002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYOKPONUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032704003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,UDUNG ADATANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032704004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,USUNG UDUNG UKO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 05 OF LGA 27

else if ($text == "032705001"){
  $response .= "END Your polling unit is PRY SCH, EYOTAI I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032705002"){
  $response .= "END Your polling unit is PRY SCH, EYOTAI II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032705003"){
  $response .= "END Your polling unit is PRY SCH, EYOTAI III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032705004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYOTAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032705005"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNG OSUNG UDOH\n";
  $response .= $display;
  $response .= $message;
}

// WARD 06 OF LGA 27

else if ($text == "032706001"){
  $response .= "END Your polling unit is PRY SCH, UBORO 1. INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032706002"){
  $response .= "END Your polling unit is PRY SCH,EYO UWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032706003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYO UKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032706004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYOKPO ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032706005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYONIMINO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 07 OF LGA 27

else if ($text == "032707001"){
  $response .= "END Your polling unit is OPEN SPACE OPP POLICE EYIBIA EDIKOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032707002"){
  $response .= "END Your polling unit is VILLAGE SQUARE EYIBIA EDIKOR I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032707003"){
  $response .= "END Your polling unit is VILLAGE SQUARE EYIBIA EDIKOR II\n";
  $response .= $display;
  $response .= $message;
}

// WARD 08 OF LGA 27

else if ($text == "032708001"){
  $response .= "END Your polling unit is PRY SCH, EYOKPU EDIKOR I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032708002"){
  $response .= "END Your polling unit is PRY SCH, EYOKPU EDIKOR II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032708003"){
  $response .= "END Your polling unit is PRY SCH, EYOKPU EDIKOR III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032708004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EYOKPO EDIKOR\n";
  $response .= $display;
  $response .= $message;
}

// WARD 09 OF LGA 27

else if ($text == "032709001"){
  $response .= "END Your polling unit is MARKET SQUARE, EYOBIOSIO EDIKOR I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032709002"){
  $response .= "END Your polling unit is MARKET SQUARE, EYOBIOSIO EDIKOR II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032709003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYOBIOSIO EDIKOR\n";
  $response .= $display;
  $response .= $message;
}

// WARD 10 OF LGA 27

else if ($text == "032710001"){
  $response .= "END Your polling unit is PRY SCH, EKIM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032710002"){
  $response .= "END Your polling unit is PRY SCH, EKIM II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032710003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ODUETI EKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032710004"){
  $response .= "END Your polling unit is MARKET SQUARE,EKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032710005"){
  $response .= "END Your polling unit is VILLAGE SQUARE,UTUMONG EKIM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032710006"){
  $response .= "END Your polling unit is VILLAGE SQUARE,UTUMONG EKIM II\n";
  $response .= $display;
  $response .= $message;
}

// WARD 01 OF LGA 28

else if ($text == "032801001"){
  $response .= "END Your polling unit is Q.I.C PRY SCH, IKOT AKPA NKUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801002"){
  $response .= "END Your polling unit is WASCO, IKOT AKPA NKUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801003"){
  $response .= "END Your polling unit is C.P.S, IKOT INYANG ABIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801004"){
  $response .= "END Your polling unit is G/P/S IKOT UDO OBOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801005"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UDO OBOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801006"){
  $response .= "END Your polling unit is G/S, IDUNG EKA UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801007"){
  $response .= "END Your polling unit is ST THERESA PRY SCH, IKOT AKPANEYARA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032801008"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IDUNG IDEM UDO\n";
  $response .= $display;
  $response .= $message;
}


// WARD 02 OF LGA 28


else if ($text == "032802001"){
  $response .= "END Your polling unit is PRY SCH, IKOT ODIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032802002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032802003"){
  $response .= "END Your polling unit is G/P/S IDUNG UKO UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032802004"){
  $response .= "END Your polling unit is G/P/S IKOT ENANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032802005"){
  $response .= "END Your polling unit is G/P/S IKOT INYANG UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032802006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBON ODOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032802007"){
  $response .= "END Your polling unit is C/S, OHAOBU\n";
  $response .= $display;
  $response .= $message;
}

// WARD 03 OF LGA 28


else if ($text == "032803001"){
  $response .= "END Your polling unit is PRY SCH, NKEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803002"){
  $response .= "END Your polling unit is SEC SCH, NKEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803003"){
  $response .= "END Your polling unit is G/P/S NKEK ENEN IDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NYAK IBAH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803005"){
  $response .= "END Your polling unit is G/P/S IKOT UDOBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803006"){
  $response .= "END Your polling unit is G/P/S, OKOYO I and II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803007"){
  $response .= "END Your polling unit is Q.I.S OKOYO TOWN SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803008"){
  $response .= "END Your polling unit is G/S, IKOT IBEKWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IBEKWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803010"){
  $response .= "END Your polling unit is G/S,IKOT UNNAH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032803011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UNNAH\n";
  $response .= $display;
  $response .= $message;
}


// WARD 04 OF LGA 28


else if ($text == "032804001"){
  $response .= "END Your polling unit is COURT HALL, NKEK IDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804002"){
  $response .= "END Your polling unit is VILLAGE HALL, NKEK IDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804003"){
  $response .= "END Your polling unit is G/P/S IKOT OKU USUNG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804004"){
  $response .= "END Your polling unit is G/P/S, IKOT OKU USUNG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKU USUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804006"){
  $response .= "END Your polling unit is G/S, IKOT ANTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804008"){
  $response .= "END Your polling unit is G/P/S, IKOT UKO ANNANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804009"){
  $response .= "END Your polling unit is G/P/S, IKOT UKO ANNANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804010"){
  $response .= "END Your polling unit is G/P/S, IKOT AKPA NTUEN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804011"){
  $response .= "END Your polling unit is G/P/S, IKOT AKPA NTUEN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804012"){
  $response .= "END Your polling unit is G/P/S, IKOT OBIO OKPOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804013"){
  $response .= "END Your polling unit is GROUP PRY SCH, IKOT IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032804014"){
  $response .= "END Your polling unit is BUS STOP ORUA OFFIONG\n";
  $response .= $display;
  $response .= $message;
}


// WARD 05 OF LGA 28


else if ($text == "032805001"){
  $response .= "END Your polling unit is PRY SCH, NSEKHE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805002"){
  $response .= "END Your polling unit is PRY SCH, NSEKHE II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805003"){
  $response .= "END Your polling unit is VILLAGE HALL, UKANAFUN IKOT EKPAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805005"){
  $response .= "END Your polling unit is PRY SCH, UKANAFUN EDEM INYANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805006"){
  $response .= "END Your polling unit is PRY SCH, UKANAFUN EDEM INYANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805007"){
  $response .= "END Your polling unit is PRY SCH, NKEK ABAK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032805008"){
  $response .= "END Your polling unit is PRY SCH, NKEK ABAK II\n";
  $response .= $display;
  $response .= $message;
}

// WARD 06 OF LGA 28


else if ($text == "032806001"){
  $response .= "END Your polling unit is PRY SCH, AFAHA OBO ATA ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032806002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA OBO ATA IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032806003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,AFAHA IKOT AKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032806004"){
  $response .= "END Your polling unit is C/CENTRE, AFAHA IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032806005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA IKOT INYANG \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032806006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA ODON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032806007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA IKOR AKPA IDEM.\n";
  $response .= $display;
  $response .= $message;
}

// WARD 07 OF LGA 28


else if ($text == "032807001"){
  $response .= "END Your polling unit is G/S ATA ESSIEN NTAK, IKOT OKUME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807002"){
  $response .= "END Your polling unit is CATH SCH, IKOT EKPERIKPE I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807003"){
  $response .= "END Your polling unit is CATH SCH, IKOT EKPERIKPE II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTAK AFAHA IKOT AKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UTTIAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807007"){
  $response .= "END Your polling unit is C/SCH NTO OKON IKOT OBIOEKPE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANUWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NTO OKON IKOT ENYIEKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807010"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UDO MBANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO MBANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807012"){
  $response .= "END Your polling unit is ST.FRANCIS CATH SCH, NTO OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807013"){
  $response .= "END Your polling unit is GROUP PRY SCH, IKOT IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032807014"){
  $response .= "END Your polling unit is BUS STOP ORUA OFFIONG\n";
  $response .= $display;
  $response .= $message;
}


// WARD 08 OF LGA 28


else if ($text == "032808001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ANDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808002"){
  $response .= "END Your polling unit is VILLAGE SQUARE,EDONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808003"){
  $response .= "END Your polling unit is G/S IKOT ETIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808004"){
  $response .= "END Your polling unit is G/S IKOT AKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808006"){
  $response .= "END Your polling unit is PRY SCH, IDUNG NNEKE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808007"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808008"){
  $response .= "END Your polling unit is PRY SCH IKOT AKPA IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT AKPA IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032808010"){
  $response .= "END Your polling unit is VILLAGE SQUARE,USUNG ATTIAT\n";
  $response .= $display;
  $response .= $message;
}

// WARD 09 OF LGA 28

else if ($text == "032809001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ATA ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809002"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT EDEM AWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809004"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809005"){
  $response .= "END Your polling unit is PRY SCH, IKOT ARANKERE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ARANKERE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NDOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809008"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT EBOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809009"){
  $response .= "END Your polling unit is VILLAGE SQUARE,NDOT IKOT AKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032809010"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT ANTIA\n";
  $response .= $display;
  $response .= $message;
}

// WARD 10 OF LGA 28

else if ($text == "032810001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UROM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032810002"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT UDO IYAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032810003"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT AKPAN INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032810004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT AKPAN EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032810005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO MBANG AFAHA OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032810006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN EYO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 11 OF LGA 28

else if ($text == "032811001"){
  $response .= "END Your polling unit is VILLAGE SQUARE,B/W ODORO IKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032811002"){
  $response .= "END Your polling unit is G/P/S IKOT EFFIONG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032811003"){
  $response .= "END Your polling unit is G/P/S IKOT EFFIONG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032811004"){
  $response .= "END Your polling unit is G/P/S IKOT UDO OSSIOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032811005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTOR IWUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032811006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032811007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OWURE\n";
  $response .= $display;
  $response .= $message;
}

// WARD 01 OF LGA 29

else if ($text == "032901001"){
  $response .= "END Your polling unit is ST. JOSEPH PRY SCH, IDU I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901002"){
  $response .= "END Your polling unit is ST. JOSEPH PRY SCH, IDU II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901003"){
  $response .= "END Your polling unit is MOTOR PARK, IDU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901004"){
  $response .= "END Your polling unit is ST MAURICE EMAN IKOT EBO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901005"){
  $response .= "END Your polling unit is ST MAURICE EMAN IKOT EBO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901006"){
  $response .= "END Your polling unit is HOLY TRINITY PRY SCH, MBIAKONG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901007"){
  $response .= "END Your polling unit is HOLY TRINITY PRY SCH, MBIAKONG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032901008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIAKONG\n";
  $response .= $display;
  $response .= $message;
}


// WARD 02 OF LGA 29


else if ($text == "032902001"){
  $response .= "END Your polling unit is ST PATRICK PRY SCH,IFIAYONG ESUK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902002"){
  $response .= "END Your polling unit is HOLY CHILD PRY SCH, IFIAYONG ESUK II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902003"){
  $response .= "END Your polling unit is PRY SCH, NWANIBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902004"){
  $response .= "END Your polling unit is PRY SCH, AKANI OBIO URUAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902005"){
  $response .= "END Your polling unit is PRY SCH, AKANI OBIO URUAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AKPA MFRI UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UFAK EFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902008"){
  $response .= "END Your polling unit is PRY SCH, EDIK IKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032902009"){
  $response .= "END Your polling unit is VILLAGE HALL, EDIK IKPA\n";
  $response .= $display;
  $response .= $message;
}


// WARD 03 OF LGA 29


else if ($text == "032903001"){
  $response .= "END Your polling unit is PRY SCH, NUNG OKU I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903002"){
  $response .= "END Your polling unit is PRY SCH, NUNG OKU II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OTINYE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903004"){
  $response .= "END Your polling unit is ESSIEN STREET SQUARE, IKOT OTINYE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTINYE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903006"){
  $response .= "END Your polling unit is PRY SCH,IKOT INYANG ESUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INYANG ESUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ANAKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NNA ENIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903010"){
  $response .= "END Your polling unit is PRY SCH, NTRUKPUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032903011"){
  $response .= "END Your polling unit is VILLAGE SQUARE,ESUK ODU\n";
  $response .= $display;
  $response .= $message;
}

// WARD 04 OF LGA 29


else if ($text == "032904001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904002"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904003"){
  $response .= "END Your polling unit is PRY SCH, IKPA URUAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904004"){
  $response .= "END Your polling unit is PRY SCH, IBIKPE URUAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITA URUAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904006"){
  $response .= "END Your polling unit is PRY SCH,ITA URUAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904007"){
  $response .= "END Your polling unit is PRY SCH, OSONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904008"){
  $response .= "END Your polling unit is SEC SCH, MBIAYA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904009"){
  $response .= "END Your polling unit is SEC SCH, MBIAYA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904010"){
  $response .= "END Your polling unit is PRY SCH, MBIAYA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904011"){
  $response .= "END Your polling unit is PRY SCH, MBIAYA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032904012"){
  $response .= "END Your polling unit is TOWN HALL, MBIAYA II\n";
  $response .= $display;
  $response .= $message;
}

// WARD 05 OF LGA 29


else if ($text == "032905001"){
  $response .= "END Your polling unit is PRY SCH, NO.I IBIAKU URUAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905002"){
  $response .= "END Your polling unit is PRY SCH, NO.II IBIAKU URUAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905003"){
  $response .= "END Your polling unit is SEC SCH, IBIAKU URUAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905004"){
  $response .= "END Your polling unit is PRY SCH, UTIT URUAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EMAN URUAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905006"){
  $response .= "END Your polling unit is PRY SCH,EMAN URUAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905007"){
  $response .= "END Your polling unit is PRY SCH, EMAN URUAN II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905008"){
  $response .= "END Your polling unit is PRY SCH, AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905009"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032905010"){
  $response .= "END Your polling unit is PRY SCH, IFIAYONG OBOT\n";
  $response .= $display;
  $response .= $message;
}

// WARD 06 OF LGA 29


else if ($text == "032906001"){
  $response .= "END Your polling unit is PRY SCH, IBIAKU IKOT ESE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906002"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906003"){
  $response .= "END Your polling unit is PRY SCH, NUNG IKONO OBIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906004"){
  $response .= "END Your polling unit is TOWN HALL, NUNG IKONO OBIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906006"){
  $response .= "END Your polling unit is PRY SCH,IKOT AKPA EKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906007"){
  $response .= "END Your polling unit is PRY SCH, EKPENE IBIA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032906008"){
  $response .= "END Your polling unit is PRY SCH, EKPENE IBIA II\n";
  $response .= $display;
  $response .= $message;
}
// WARD 07 OF LGA 29


else if ($text == "032907001"){
  $response .= "END Your polling unit is PRY SCH, EMAN UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EMAN UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907003"){
  $response .= "END Your polling unit is PRY SCH, EKIM ENEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKIM ENEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA IKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ISIET INUAKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBUNO ISIET I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032907008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBUNO ISIET II\n";
  $response .= $display;
  $response .= $message;
}


// WARD 08 OF LGA 29


else if ($text == "032908001"){
  $response .= "END Your polling unit is PRY SCH, ADADIA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908002"){
  $response .= "END Your polling unit is PRY SCH, ADADIA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908003"){
  $response .= "END Your polling unit is PRY SCH, ADADIA III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908004"){
  $response .= "END Your polling unit is MARKET SQUARE, ADADIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908005"){
  $response .= "END Your polling unit is PRY SCH, ISIET EKIM I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908006"){
  $response .= "END Your polling unit is PRY SCH, ISIET EKIM II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908007"){
  $response .= "END Your polling unit is ISSIET EKIM BEACH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908008"){
  $response .= "END Your polling unit is PRY SCH, USE URUAN I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032908009"){
  $response .= "END Your polling unit is PRY SCH, USE URUAN II\n";
  $response .= $display;
  $response .= $message;
}


// WARD 09 OF LGA 29


else if ($text == "032909001"){
  $response .= "END Your polling unit is PRY SCH, NUNG IKONO UFOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032909002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NUNG IKONO UFOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032909003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NUNG ABIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032909004"){
  $response .= "END Your polling unit is PRY SCH, ITUK MBANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032909005"){
  $response .= "END Your polling unit is PRY SCH, ITUK MBANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032909006"){
  $response .= "END Your polling unit is OPP HOSPITAL, ITUK MBANG\n";
  $response .= $display;
  $response .= $message;
}

// WARD 10 OF LGA 29


else if ($text == "032910001"){
  $response .= "END Your polling unit is PRY SCH, EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910002"){
  $response .= "END Your polling unit is PRY SCH, EKPENE UKIM II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910003"){
  $response .= "END Your polling unit is MARKET SQUARE, EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910004"){
  $response .= "END Your polling unit is SEC SCH, EKPENE UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910005"){
  $response .= "END Your polling unit is PRY SCH,OBIO NDOBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910006"){
  $response .= "END Your polling unit is PRY SCH, IBIAKU ISSIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910007"){
  $response .= "END Your polling unit is TOWNHALL, IBIAKU ISSIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032910008"){
  $response .= "END Your polling unit is PRY SCH, NDON URUAN\n";
  $response .= $display;
  $response .= $message;
}


// WARD 11 OF LGA 29


else if ($text == "032911001"){
  $response .= "END Your polling unit is PRY SCH, NDON EBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032911002"){
  $response .= "END Your polling unit is PRY SCH, NO.1 NDON EBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032911003"){
  $response .= "END Your polling unit is ITU SQUARE NKIME NTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032911004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EBOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032911005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAUNAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032911006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NKIMENTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032911007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTIA\n";
  $response .= $display;
  $response .= $message;
}

//WARD 01 OF LGA 30

else if ($text == "033001001"){
  $response .= "END Your polling unit is PRY SCH, OYOKU IBIGHI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033001002"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNGABANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033001003"){
  $response .= "END Your polling unit is PRY SCH, MBOKPU EYOIMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033001004"){
  $response .= "END Your polling unit is PRY SCH, UKUKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033001005"){
  $response .= "END Your polling unit is VILLAGE HALL, ELEI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033001006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033001007"){
  $response .= "END Your polling unit is COMMUNITY SEC.SCH UKUKO\n";
  $response .= $display;
  $response .= $message;
}


//WARD 02 OF LGA 30

else if ($text == "033002001"){
  $response .= "END Your polling unit is VILLAGE HALL, URUE OFFONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033002002"){
  $response .= "END Your polling unit is PRY SCH, UBORO-ORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033002003"){
  $response .= "END Your polling unit is VILLAGE HALL, UMUME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033002004"){
  $response .= "END Your polling unit is VILLAGE HALL, UBORO-ORO\n";
  $response .= $display;
  $response .= $message;
}


//WARD 03 OF LGA 30

else if ($text == "033003001"){
  $response .= "END Your polling unit is VILLAGE HALL, IBOTONG NSIE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033003002"){
  $response .= "END Your polling unit is PRY SCH, OYUBIA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033003003"){
  $response .= "END Your polling unit is SEC SCH, OYUBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033003004"){
  $response .= "END Your polling unit is VILLAGE HALL, OYUBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033003005"){
  $response .= "END Your polling unit is VILLAGE SQUARE EYO NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033003006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYO EBIEKPI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033003007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBOTONG EWEME\n";
  $response .= $display;
  $response .= $message;
}


//WARD 04 OF LGA 30

else if ($text == "033004001"){
  $response .= "END Your polling unit is SEC SCH, MBOKPU EYOKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033004002"){
  $response .= "END Your polling unit is PRY SCH, MBOKPU EYOKAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033004003"){
  $response .= "END Your polling unit is VILLAGE HALL, EYOABANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033004004"){
  $response .= "END Your polling unit is PRY SCH, IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033004005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKPE\n";
  $response .= $display;
  $response .= $message;
}

//WARD 05 OF LGA 30

else if ($text == "033005001"){
  $response .= "END Your polling unit is PRY SCH, OKOSSI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033005002"){
  $response .= "END Your polling unit is SEC SCH, OKOSSI \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033005003"){
  $response .= "END Your polling unit is VILLAGE HALL,ATTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033005004"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNG ANWANA\n";
  $response .= $display;
  $response .= $message;
}

//WARD 6 OF LGA 30

else if ($text == "033006001"){
  $response .= "END Your polling unit is PRY SCH, MBOKPU UKOAKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006002"){
  $response .= "END Your polling unit is VILLAGE HALL, MBOKPU UKOKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006003"){
  $response .= "END Your polling unit is VILLAGE HALL,EYO AKWAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006004"){
  $response .= "END Your polling unit is VILLAGE HALL,EYOEYEKIP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006005"){
  $response .= "END Your polling unit is VILLAGE HALL,EYO-OKWONG\n";
  $response .= $display;
  $response .= $message;
}

//WARD 07 OF LGA 30

else if ($text == "033007001"){
  $response .= "END Your polling unit is VILLAGE HALL, EYUFUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006002"){
  $response .= "END Your polling unit is VILLAGE HALL, EDOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006003"){
  $response .= "END Your polling unit is VILLAGE HALL,UDUNG ETTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033006004"){
  $response .= "END Your polling unit is VILLAGE HALL,EYO KPIFIE\n";
  $response .= $display;
  $response .= $message;
}

//WARD 08 OF LGA 30

else if ($text == "033008001"){
  $response .= "END Your polling unit is VILLAGE HALL, EYO-UWESONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033008002"){
  $response .= "END Your polling unit is PRY SCH, ODUONIM-ORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033008003"){
  $response .= "END Your polling unit is VILLAGE HALL,ODUONIM ISONG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033008004"){
  $response .= "END Your polling unit is PRY SCH, EYO BIASANG\n";
  $response .= $display;
  $response .= $message;
}

//WARD 09 OF LGA 30

else if ($text == "033009001"){
  $response .= "END Your polling unit is PRY SCH, EYULOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033009002"){
  $response .= "END Your polling unit is PRY SCH, UKUDA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033009003"){
  $response .= "END Your polling unit is PRY SCH, ABIAK ELIBI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033009004"){
  $response .= "END Your polling unit is VILLAGE HALL, EYO-USOYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033009005"){
  $response .= "END Your polling unit is VILLAGE HALL, ANAI-OKPO\n";
  $response .= $display;
  $response .= $message;
}

//WARD 10 OF LGA 30

else if ($text == "033010001"){
  $response .= "END Your polling unit is PRY SCH, UDUNG-UWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033010002"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNG UKPOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033010003"){
  $response .= "END Your polling unit is PRY SCH, UBODUNG\n";
  $response .= $display;
  $response .= $message;
}

// WARD 01 LGA 31

else if ($text == "033101001"){
  $response .= "END Your polling unit is OPEN SPACE AT NO 27 ORON RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101002"){
  $response .= "END Your polling unit is PRY SCH, ENWE ST I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101003"){
  $response .= "END Your polling unit is PRY SCH, ENWE ST II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101004"){
  $response .= "END Your polling unit is STATE LIBRARY, UDOTUNG UBO ST.\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101005"){
  $response .= "END Your polling unit is UYO HIGH SCH, ORON RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101006"){
  $response .= "END Your polling unit is NDE, OBIO IMO ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101007"){
  $response .= "END Your polling unit is USUANGA UDO ST. JUNCTION\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101008"){
  $response .= "END Your polling unit is ADULT/NON FORMAL EDUCATION, AFIA ETOI ST.\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101009"){
  $response .= "END Your polling unit is PIONEER NEWSPAPER OFFICE, UDO UMANA ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101010"){
  $response .= "END Your polling unit is OPEN SPACE BY NO 24 KEVIN/UMOREN ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101011"){
  $response .= "END Your polling unit is PRY SCH, NO. 1 AKA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101012"){
  $response .= "END Your polling unit is ST GEOGE'S PRY SCH, AKA OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101013"){
  $response .= "END Your polling unit is MODERN SEC SCH, AKA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101014"){
  $response .= "END Your polling unit is OPEN SPACE AT CENOTAPH, AKA RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101015"){
  $response .= "END Your polling unit is NOA, NEPA LINE/OKON ESSIEN ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101016"){
  $response .= "END Your polling unit is JUBILEE PRY SCH, AKA OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101017"){
  $response .= "END Your polling unit is OPEN SPACE , NSENTIP BY IMAN JUNCTION\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033101018"){
  $response .= "END Your polling unit is OPEN SPACE ,BY ETUK/ENIONG ST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033101019"){
  $response .= "END Your polling unit is NATIONAL PRY SCH, EDU COMM. UDO EDUOK BY ITAM \n";
  $response .= $display;
  $response .= $message;
}

// WARD 02 LGA 31

else if ($text == "033102001"){
  $response .= "END Your polling unit is COMP. COMMTY SEC SCH, FOUR TOWNS I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033102002"){
  $response .= "END Your polling unit is COMP. COMMTY SEC SCH, FOUR TOWNS II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033102003"){
  $response .= "END Your polling unit is OPEN SPACE NEAR NO. 2, IBOKO ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102004"){
  $response .= "END Your polling unit is PRY SCH, IKOT NTUEN OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102005"){
  $response .= "END Your polling unit is AKTC, IKOT EKEPENE RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102006"){
  $response .= "END Your polling unit is OPEN SPACE BY NO. 45 AKPAN ESSIEN ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102007"){
  $response .= "END Your polling unit is OPEN SPACE BY NO. 2 AKPAN IDIOK ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102008"){
  $response .= "END Your polling unit is EFFICIENT SEC SCH, UDO-OBIO ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102009"){
  $response .= "END Your polling unit is OPEN SPACE, UDO ABASI BY EFFIONG UKPONG ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102010"){
  $response .= "END Your polling unit is OPEN SPACE, ANUA BY OKU ST. JUNCTION\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102011"){
  $response .= "END Your polling unit is IKOT AKPAN OKU ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102012"){
  $response .= "END Your polling unit is CIVIL SERVICE TRAINING CENTRE, UDI ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102013"){
  $response .= "END Your polling unit is OPEN SPACE, BY NO. 20 EKPANYA ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102014"){
  $response .= "END Your polling unit is UNIUYO ANNEX I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102015"){
  $response .= "END Your polling unit is IKPA RD, BUS STOP\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102016"){
  $response .= "END Your polling unit is UNIUYO MAIN CAMPUS\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102017"){
  $response .= "END Your polling unit is UNIUYO MAIN CAMPUS\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033102018"){
  $response .= "END Your polling unit is OPEN SPACE AT EPIC PLAZA, IKOT EKPENE RD\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033102019"){
  $response .= "END Your polling unit is MAIN MOTOR PARK, IKOT EKPENE RD\n";
  $response .= $display;
  $response .= $message;
}


// WARD 03 LGA 31

else if ($text == "033103001"){
  $response .= "END Your polling unit is CKS, WELLINGTON BASSEY WAY I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103002"){
  $response .= "END Your polling unit is CKS, WELLINGTON BASSEY WAY II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103003"){
  $response .= "END Your polling unit is GOVERNOR'S OFFICE ANNEX\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103004"){
  $response .= "END Your polling unit is PRISONS, WELLINGTON BASSEY WAY\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103005"){
  $response .= "END Your polling unit is OPEN SPACE, EKPO OBOT BY UTANG ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103006"){
  $response .= "END Your polling unit is FORMER MINISTRY OF INFORMATION, WELLINGTIN BASSEY WAY\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103007"){
  $response .= "END Your polling unit is OPEN SPACE. EKPENYONG BY PAUL BASSEY ST JUNCTION\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103008"){
  $response .= "END Your polling unit is OPEN SPACE BY NO. 66 ORON RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103009"){
  $response .= "END Your polling unit is VILLAGE HALL, 29 AKPAKPAN ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103010"){
  $response .= "END Your polling unit is WATERBOARD, AKPAKPAN ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103011"){
  $response .= "END Your polling unit is OPEN SPACE, UDOSEN UKO ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103012"){
  $response .= "END Your polling unit is OPEN SPACE, AKPAN ETUK BY HOSPITAL RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103013"){
  $response .= "END Your polling unit is OPEN SPACE BY NO. 24 EWET/ATAKPO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103014"){
  $response .= "END Your polling unit is TECHNICAL SCH, EWET\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103015"){
  $response .= "END Your polling unit is FIRE SERVICE, BROOKS ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103016"){
  $response .= "END Your polling unit is CKS NURSERY SCH, BROOKS ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103017"){
  $response .= "END Your polling unit is LOCAL EDUCATION COMMITTEE, NWANIBA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033103018"){
  $response .= "END Your polling unit is EWET TIMBA MARKET, URUAN ST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033103019"){
  $response .= "END Your polling unit is KING AND QUEEN MONT. NUR SCH, STATE HOUSING ESTATE\n";
  $response .= $display;
  $response .= $message;
}


// WARD 04 LGA 31

else if ($text == "033104001"){
  $response .= "END Your polling unit is LUTH PRY SCH, ITIAM IKOT EBIA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104002"){
  $response .= "END Your polling unit is MIN EDU SPECIAL PRY SCH, AKA ITIAM ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104003"){
  $response .= "END Your polling unit is PRY SCH, OBIO ETOI\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104004"){
  $response .= "END Your polling unit is METH PRY SCH, ITIAM ETOI\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104005"){
  $response .= "END Your polling unit is VILLAGE HALL ITIAM ETOI\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104006"){
  $response .= "END Your polling unit is PRY SCH, MBIABONG ANYANYA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104007"){
  $response .= "END Your polling unit is VILLAGE HALL, MBIABONG IKOT ANTHEM\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104008"){
  $response .= "END Your polling unit is VILLAGE HALL, MBIABONG IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104009"){
  $response .= "END Your polling unit is MARKET SQUARE, MBIABONG IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104010"){
  $response .= "END Your polling unit is VILLAGE HALL, IFA IKOT UBO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IFA IKOT AKPAN MBIA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033104012"){
  $response .= "END Your polling unit is PRY SCH, IFA IKOT OKPON\n";
  $response .= $display;
  $response .= $message;
}

// WARD 05 LGA 31

else if ($text == "033105001"){
  $response .= "END Your polling unit is PRY SCH, IFA ATAI I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105002"){
  $response .= "END Your polling unit is PRY SCH, IFA ATAI II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105003"){
  $response .= "END Your polling unit is COOP HALL, IFA IKOT IDANG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IFA IKOT IDANG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105005"){
  $response .= "END Your polling unit is COOP HALL, IFA IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105006"){
  $response .= "END Your polling unit is PRY SCH, MBAK IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105007"){
  $response .= "END Your polling unit is MARKET SQUARE, MBAK AKPAN EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105008"){
  $response .= "END Your polling unit is PRY SCH, MBAK IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105009"){
  $response .= "END Your polling unit is PRY SCH, OBOT OBOM\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105010"){
  $response .= "END Your polling unit is PRY SCH, IKOT INYANG IDUNG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IFA IKOT ABIA NTUEN\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105012"){
  $response .= "END Your polling unit is PRY SCH, IFA IKOT OBONG I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105013"){
  $response .= "END Your polling unit is PRY SCH, IFA IKOT OBONG II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105014"){
  $response .= "END Your polling unit is VILLAGE HALL,IKOT AKPABIO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033105015"){
  $response .= "END Your polling unit is VILLAGE HALL, IFA IKOT ABIA MKPO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 06 LGA 31


else if ($text == "033106001"){
  $response .= "END Your polling unit is PRY SCH, ATAN OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106002"){
  $response .= "END Your polling unit is VILLAGE HALL, ATAN OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106003"){
  $response .= "END Your polling unit is VILLAGE HALL, AKA OFFOT (IDAKEYOP)\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106004"){
  $response .= "END Your polling unit is VILLAGE HALL, IBOKO OFFOT (ABAK RD)\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106005"){
  $response .= "END Your polling unit is VILLAGE HALL, EFFIAT OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106006"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT EKPE OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106007"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT OKUBO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OKUBO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106009"){
  $response .= "END Your polling unit is SEC SCH, IKOT OKUBO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106010"){
  $response .= "END Your polling unit is PRY SCH, AFAHA OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106011"){
  $response .= "END Your polling unit is SEC SCH, OBIO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106012"){
  $response .= "END Your polling unit is ST MARY'S PRY SCH, OBIO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAI OBIO, OBIO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ANUA OBIO, OBIO OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033106015"){
  $response .= "END Your polling unit is VILLAGE HALL, USE IKOT EBIO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 07 LGA 31

else if ($text == "033107001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EWET OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107002"){
  $response .= "END Your polling unit is ADIAHA OBONG SEC SCH\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107003"){
  $response .= "END Your polling unit is PRY SCH, ENIONG OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107004"){
  $response .= "END Your polling unit is PRY SCH, ANUA OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ANUA OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107006"){
  $response .= "END Your polling unit is VILLAGE HALL, EKPRI NSUKARA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKPRI NSUKARA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107008"){
  $response .= "END Your polling unit is PRY SCH, NSUKARA OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107009"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKU OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTUEN OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKU IDIO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107012"){
  $response .= "END Your polling unit is C/SQUARE, IKOT ANYAN OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107013"){
  $response .= "END Your Polling unit is PRY SCH, USE OFFOT\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033107014"){
  $response .= "END Your polling unit is ST LUKE'S HOSPITAL, ANUA\n";
  $response .= $display;
  $response .= $message;
}

// WARD 08 LGA 31


else if ($text == "033108001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EBOR\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108002"){
  $response .= "END Your polling unit is PRY SCH, ITON IKONO I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108003"){
  $response .= "END Your polling unit is PRY SCH, ITON IKONO II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108004"){
  $response .= "END Your polling unit is SEC SCH IKOT ODUNG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108005"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO MKPONG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108006"){
  $response .= "END Your polling unit is PRY SCH, IKOT MBON\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT MBON (AKARA ANWA)n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108008"){
  $response .= "END Your polling unit is PRY SCH, IKOT MBON\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108009"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG UKIM\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108010"){
  $response .= "END Your polling unit is PRY SCH, MBIABONG IKONO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108011"){
  $response .= "END Your polling unit is OPEN SPACE CHURCH OF CHRIST, MBIABONG IKONO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108012"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKU IKONO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OKU IKONO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033108014"){
  $response .= "END Your polling unit is SEC SCH, IKOT AYAN\n";
  $response .= $display;
  $response .= $message;
}

// WARD 09 LGA 31

else if ($text == "033109001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPEYAK I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033109002"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPEYAK II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OFON\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OFON\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109005"){
  $response .= "END Your polling unit is PRY SCH, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109006"){
  $response .= "END Your polling unit is VILLAGE HALL, MINYA\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109007"){
  $response .= "END Your polling unit is PRY SCH, ANAN IKONO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109008"){
  $response .= "END Your polling unit is PRY SCH, NUNG ASANG \n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109009"){
  $response .= "END Your polling unit is PRY SCH, IKOT NSUNG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109010"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT OFFIONG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109011"){
  $response .= "END Your polling unit is PRY SCH, IKOT ENYIENGE\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033109012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ENYIENGE\n";
  $response .= $display;
  $response .= $message;
}


// WARD 10 LGA 31

else if ($text == "033110001"){
  $response .= "END Your polling unit is HEALTH CENTRE, AFAHA IDORO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110002"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA IDORO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110003"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG UYO IDORO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110004"){
  $response .= "END Your polling unit is OPEN SPACE OPP. XTIAN ASSEMBLY CHURCH, NUNG OBIO ENANG\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110005"){
  $response .= "END Your polling unit is CATH NUR SCH, NUNG EDIENE I\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110006"){
  $response .= "END Your polling unit is CATH NUR SCH, NUNG EDIENE II\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110007"){
  $response .= "END Your polling unit is OPEN SPACE OPP CHIEF'S COMPD, IKOT AKPAN EDIENE\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110008"){
  $response .= "END Your polling unit is PRY SCH, NUNG UDOE EDIENE\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110009"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG UDOE EDIENE\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033110010"){
  $response .= "END Your polling unit is MARKET SQUARE, EDIENE IKOT OBIO IMO\n";
  $response .= $display;
  $response .= $message;
}

// WARD 11 LGA 31

else if ($text == "033111011"){
  $response .= "END Your polling unit is OPEN SPACE NEAR NO. 37 IKPA RD\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "033111001"){
  $response .= "END Your polling unit is OPEN SPACE NEAR NO.25 UDOETTE/EBONG ESSIEN ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111002"){
  $response .= "END Your polling unit is PRY SCH, AFAHA OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDUETONG OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111004"){
  $response .= "END Your polling unit is MARKET SQUARE, NDUETONG OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111005"){
  $response .= "END Your polling unit is PRY SCH, IBA OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EBIDO\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTUEN OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111008"){
  $response .= "END Your polling unit is OPEN SPACE NEAR FORMER MAGISTRATE COURT, IKOT EKPENE RD\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111009"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDORO OKU\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111011"){
  $response .= "END Your polling unit is OPEN SPACE AT LORD'S MOTEL\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111012"){
  $response .= "END Your polling unit is BUS STOP, OPP BANK OF THE NORTH\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111013"){
  $response .= "END Your polling unit is OPEN SPACE NEAR FORMER NUT, NKEMBA ST\n";
  $response .= $display;
  $response .= $message;
}else if ($text == "033111014"){
  $response .= "END Your polling unit is STATE SEC SCH BOARD, WILLIAM BASSEY ST\n";
  $response .= $display;
  $response .= $message;
}

else{
  $response .= "END Please input a correct PU code.";
}

//END OF ALL PU IN ALL WARDS AND LGA IN AKWA IBOM STATE
//HERE IS WHERE MELODY STOP CODING






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
