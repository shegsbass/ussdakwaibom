 

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
    **************************\n";

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

/**

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
  $response .= "END YOUR POLLING UNIT IS PRY SCH KAMPA 1;
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
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//End of Pulling units in ward 1 of LGA 3

else if ($text == "030302001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030302007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030302008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 2 of LGA 3

else if ($text == "030303001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030303002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030301006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 3 of LGA 3

else if ($text == "030304001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304009"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304010"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304011"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304012"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 4 of LGA 3

else if ($text == "030305001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305009"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 5 OF LGA 3

else if ($text == "030306001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306009"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306010"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306011"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306012"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306013"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 6 OF LGA 3


else if ($text == "030307001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307009"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307010"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307011"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307012"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307013"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 7 OF LGA 3

else if ($text == "030308001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF PULLING UNITS IN WARD 8 OF LGA 3

else if ($text == "030309001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 9 OF LGA 3


else if ($text == "030310001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 10 OF LGA 3


else if ($text == "030311001"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311002"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311003"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311004"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311005"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311006"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311007"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311008"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311009"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311010"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311011"){
  $response .= "END YOUR POLLING UNIT IS \n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 11 OF LGA 3



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
