 

<?php

// Reads the variables sent via POST from our gateway

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];
$message = "Because Akwa Ibom Deserves Better.\n";
/**
$display = "<pre style = \"line-height:6px; line-weight:6px\">
                ..........\n  
                 ........\n    
                  ......\n
 ##    ##    ###   ....\n
#  #  #  #  #       ..
####  ###   #      ....\n
#  #  #      ###\n </pre>";

**/
/**
$display = "<pre style = \"line-height:6px; line-weight:6px\">
                -----------\n  
                 ---------\n    
                  -------\n
  --    --    ---   ----\n
 /  \  |  |  |       --
 ----  |--   |      ----\n
 |  |  |      ---\n </pre>";

**/

$display = "<pre style = \"line-height:7px; line-width:2px\">
#    #  ###  ### ### \n   
 #  #  #   #  #  ## \n 
   #    ###   #  ###\n 
 \n  
#   # ### # #   #  ## \n
# # # #_  # ## ## #__#\n
#  ## __# # # # # #  #\n
</pre>";

/**
$display = "<pre style = \"line-height:10px; line-width:3px\">
# # ### ### ###\n
##  ##  #   ##\n
# # ### #   ###\n 
   \n 
#   # ### # #   #  ## \n
# # # #__ # ## ## #__#\n
#  ## __# # # # # #  #\n
</pre>";

**/

if ( $text == "" ) {
// Show all LGA in Akwa Ibom

$response .= "CON Enter Your Polling Unit Number\n";
}

  else if ($text == "030101001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKWA IBOM \n";
  $response .= $display;
}

else if ($text == "030101002"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBONG EDIENE\n";
   $response .= $display;
}

else if ($text == "030101003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKU UBARA \n";
   $response .= $display;
}

else if ($text == "030101004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INYANG EDIENE\n";
  $response .= $display;
}

else if ($text == "030101005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAI EDIENE\n";
   $response .= $display;
}

else if ($text == "030101006"){
  $response .= "END Your polling unit is PRY SCH IBANANG\n";
   $response .= $display;
}

else if ($text == "030101007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDOUSUNG \n";
  $response .= $display;
}

else if ($text == "030101008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOUSUNG\n";
   $response .= $display;
}

else if ($text == "030101009"){
  $response .= "END Your polling unit is VILLAGE HALL, NTO UTOM UKPOM\n";
  $response .= $display;
}

else if ($text == "030101010"){
  $response .= "END Your polling unit is NCSS, IKOT IYIRE\n";
  $response .= $display;
}

else if ($text == "030101011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ADIA\n";
  $response .= $display;
}

else if ($text == "030101012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN ADIA\n";
   $response .= $display;
}

else if ($text == "030101013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ONUK UKPOM\n";
   $response .= $display;
}

else if ($text == "030101014"){
  $response .= "END Your polling unit is PRY SCH, MANTA\n";
 $response .= $display;
}

else if ($text == "030101015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MANTA EDEM IDIM\n";
 $response .= $display;
}

//End of pulling unit in Ward 1 of Local government 1.

else if ($text == "030102001"){
  $response .= "END Your polling unit is PRY SCH, IBAGWA 1\n";
   $response .= $display;
}

else if ($text == "030102002"){
  $response .= "END Your polling unit is PRY SCH, IBAGWA 2\n";
  $response .= $display;
}

else if ($text == "030102003"){
  $response .= "END Your polling unit is VILLAGE HALL, OKON ABAK\n";
   $response .= $display;
}

else if ($text == "030102004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AFAHA\n";
  $response .= $display;
}

else if ($text == "030102005"){
  $response .= "END Your polling unit is VILLAGE HALL, MBARAKOM\n";
   $response .= $display;
}

else if ($text == "030102006"){
  $response .= "END Your polling unit is PRY SCH, ITUNG\n";
  $response .= $display;
}

else if ($text == "030102007"){
  $response .= "END Your polling unit is PRY SCH, ABAK USUNG ATAI\n";
  $response .= $display;
}

//End of pulling unit in Ward 2 of Local government 1.


else if ($text == "030103001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETUK UDO\n";
  $response .= $display;
}

else if ($text == "030103002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, PARK LANE\n";
  $response .= $display;
}

else if ($text == "030103003"){
  $response .= "END Your polling unit is BISHOP CLARKS PRY SCH\n";
   $response .= $display;
}

else if ($text == "030103004"){
  $response .= "END Your polling unit is PRY SCH, MIDIM WATERSIDE\n";
  $response .= $display;
}

else if ($text == "030103005"){
  $response .= "END Your polling unit is GOVT TECHNICAL COLLEGE\n";
  $response .= $display;
}

else if ($text == "030103006"){
  $response .= "END Your polling unit is PRY SCH, OKU ABAK\n";
  $response .= $display;
}

else if ($text == "030103007"){
  $response .= "END Your polling unit is V/H, ABAK USUNG IDIM\n";
   $response .= $display;
}

else if ($text == "030103008"){
  $response .= "END Your polling unit is PRY SCH, NO 1 ABAK\n";
  $response .= $display;
}

else if ($text == "030103009"){
  $response .= "END Your polling unit is CONVENT PRY SCH\n";
 $response .= $display;
}

//End of pulling unit in Ward 3 of Local government 1.

else if ($text == "030104001"){
  $response .= "END Your polling unit is PRY SCH, ABAK ITENGE\n";
  $response .= $display;
}

else if ($text == "030104002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBIOBOM\n";
  $response .= $display;
}

else if ($text == "030104003"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKANG\n";
  $response .= $display;
}

else if ($text == "030104004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG UTU\n";
  $response .= $display;
}

else if ($text == "030104005"){
  $response .= "END Your polling unit is MCSS, IKOT EBAK 1\n";
  $response .= $display;
}

else if ($text == "030104006"){
  $response .= "END Your polling unit is MCSS, IKOT EBAK 2\n";
  $response .= $display;
}

else if ($text == "030104007"){
  $response .= "END Your polling unit is VILLAGE VILLAGE SQUARE, UTU EDEM URUA\n";
  $response .= $display;
}

else if ($text == "030104008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU EDEM AKAI\n";
   $response .= $display;
}

else if ($text == "030104009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ABAK IKOT\n";
  $response .= $display;
}

//End of pulling unit in Ward 4 of Local government 1.


  else if ($text == "030105001"){
  $response .= "END Your polling unit is PRY SCH, AFAHA ESSANG\n";
  $response .= $display;
}

else if ($text == "030105002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK OBONG\n";
  $response .= $display;
}

else if ($text == "030105003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO UROM\n";
   $response .= $display;
}

else if ($text == "030105004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NNA ENIN\n";
   $response .= $display;
}

else if ($text == "030105005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAKAN\n";
   $response .= $display;
}

else if ($text == "030105006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN IKPONG\n";
   $response .= $display;
}

else if ($text == "030105007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EBEBIT\n";
   $response .= $display;
}

else if ($text == "030105008"){
  $response .= "END Your polling unit is PRY SCH, EBEIT\n";
  $response .= $display;
}

else if ($text == "030105009"){
  $response .= "END Your polling unit is PRIMARY SCHOOL, IKOT ODIONG\n";
   $response .= $display;
}

else if ($text == "030105010"){
  $response .= "END Your polling unit is PRY SCH, ERIAM\n";
  $response .= $display;
}

else if ($text == "030105011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ERIAM\n";
  $response .= $display;
}

else if ($text == "030105012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDEM ANWA\n";
  $response .= $display;
}

else if ($text == "030105013"){
  $response .= "END Your polling unit is PRY SCH, EDEM ANWA\n";
  $response .= $display;
}

else if ($text == "030105014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO OBIOINOK\n";
  $response .= $display;
}

//End of pulling unit in Ward 5 of Local government 1.

  else if ($text == "030106001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UBOM\n";
  $response .= $display;
}

else if ($text == "030106002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT INYANG\n";
   $response .= $display;
}

else if ($text == "030106003"){
  $response .= "END Your polling unit is PRY SCH, IKOT IBIT EKPE\n";
  $response .= $display;
}

else if ($text == "030106004"){
  $response .= "END Your polling unit is V/H, IKOT OBIO IKPA\n";
  $response .= $display;
}

else if ($text == "030106005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO IKPA\n";
    $response .= $display;
}

else if ($text == "030106006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKANA MKPA EYOP\n";
  $response .= $display;
}

else if ($text == "030106007"){
  $response .= "END Your polling unit is V/H , UKANA MKPA EYOP\n";
   $response .= $display;
}

else if ($text == "030106008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UFEN\n";
   $response .= $display;
}

else if ($text == "030106009"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBONG\n";
 $response .= $display;
}

else if ($text == "030106010"){
  $response .= "END Your polling unit is VILLAGE SQUARE , IKOT OBONG\n";
  $response .= $display;
}

else if ($text == "030106011"){
  $response .= "END Your polling unit is V/H, IKOT AKPA EDEM\n";
   $response .= $display;
}

else if ($text == "030106012"){
  $response .= "END Your polling unit is V/H, IKOT AKPABIO 1\n";
   $response .= $display;
}

else if ($text == "030106013"){
  $response .= "END Your polling unit is V/H, IKOT AKPABIO 2\n";
   $response .= $display;
}

else if ($text == "030106014"){
  $response .= "END Your polling unit is PRY SCH, IKWEK\n";
  $response .= $display;
}

else if ($text == "030106015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, VILLAGE SQUARE, IKWEK\n";
  $response .= $display;
}

else if ($text == "030106016"){
  $response .= "END Your polling unit is V/H, IKOT NDUE\n";
   $response .= $display;
}

else if ($text == "030106017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NDUE\n";
   $response .= $display;
}

else if ($text == "030106018"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTUKUK\n";
  $response .= $display;
}

//End of pulling unit in Ward 6 of Local government 1.


  else if ($text == "030107001"){
  $response .= "END Your polling unit is CUSTOMARY COURT, IKOT ESHIET\n";
  $response .= $display;
}

else if ($text == "030107002"){
  $response .= "END Your polling unit is V/H, IKOT EKIDUK\n";
  $response .= $display;
}

else if ($text == "030107003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKIDUK\n";
  $response .= $display;
}

else if ($text == "030107004"){
  $response .= "END Your polling unit is PRY SCH, IKOT IKPE\n";
  $response .= $display;
}

else if ($text == "030107005"){
  $response .= "END Your polling unit is V/H, IKOT IFANG\n";
  $response .= $display;
}

else if ($text == "030107006"){
  $response .= "END Your polling unit is PRY SCH, NTO OTONG\n";
  $response .= $display;
}

else if ($text == "030107007"){
  $response .= "END Your polling unit is V/H, NTO OTONG\n";
  $response .= $display;
}

else if ($text == "030107008"){
  $response .= "END Your polling unit is V/H, IKOT UKO\n";
 $response .= $display;
}

else if ($text == "030107009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKO\n";
 $response .= $display;
}

else if ($text == "030107010"){
  $response .= "END Your polling unit is V/H, IKOT ANYAKANA\n";
 $response .= $display;
}

else if ($text == "030107011"){
  $response .= "END Your polling unit is PRY SCH, ATAN MIDIM\n";
  $response .= $display;
}

else if ($text == "030107012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAN MIDIM\n";
   $response .= $display;
}

else if ($text == "030107013"){
  $response .= "END Your polling unit is V/H, IKOT EDEDE\n";
  $response .= $display;
}

//End of pulling unit in Ward 7 of Local government 1.

  else if ($text == "030108001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EDONG\n";
    $response .= $display;
}

else if ($text == "030108002"){
  $response .= "END Your polling unit is PRY SCH, IKOT UMO\n";
   $response .= $display;
}

else if ($text == "030108003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UMO\n";
  $response .= $display;
}

else if ($text == "030108004"){
  $response .= "END Your polling unit is V/H, UTU MIDIM\n";
  $response .= $display;
}

else if ($text == "030108005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU MIDIM\n";
  $response .= $display;
}

else if ($text == "030108006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO OBO 11\n";
  $response .= $display;
}

else if ($text == "030108007"){
  $response .= "END Your polling unit is V/H , NTO OBO 11\n";
 $response .= $display;
}

else if ($text == "030108008"){
  $response .= "END Your polling unit is KING INT. SCH NTO OBO\n";
   $response .= $display;
}

else if ($text == "030108009"){
  $response .= "END Your polling unit is PRY SCH, NTO OBO 1\n";
  $response .= $display;
}

else if ($text == "030108010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKPAT IDUOT\n";
  $response .= $display;
}

else if ($text == "030108011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANTUK\n";
  $response .= $display;
}

else if ($text == "030108012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKON\n";
  $response .= $display;
}

else if ($text == "030108013"){
  $response .= "END Your polling unit is V/H, IKOT EKON\n";
  $response .= $display;
}

//End of pulling unit in Ward 8 of Local government 1.


  else if ($text == "030109001"){
  $response .= "END Your polling unit is PRY SCH, ATAI OTORO\n";
  $response .= $display;
}

else if ($text == "030109002"){
  $response .= "END Your polling unit is V/H, ATAI OTORO\n";
  $response .= $display;
}

else if ($text == "030109003"){
  $response .= "END Your polling unit is V/H, IKOT OKU MFANG\n";
    $response .= $display;
}

else if ($text == "030109004"){
  $response .= "END Your polling unit is PRY SCH, ABIA OKPO\n";
   $response .= $display;
}

else if ($text == "030109005"){
  $response .= "END Your polling unit is CSS, ATAI OTORO\n";
  $response .= $display;
}

else if ($text == "030109006"){
  $response .= "END Your polling unit is PRY SCH, OTORO 1\n";
   $response .= $display;
}

else if ($text == "030109007"){
  $response .= "END Your polling unit is V/H, IKOT ESSIENETOK\n";
  $response .= $display;
}

//End of pulling unit in Ward 9 of Local government 1.


  else if ($text == "030110001"){
  $response .= "END Your polling unit is V/H, URUK USO\n";
   $response .= $display;
}

else if ($text == "030110002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK USO\n";
   $response .= $display;
}

else if ($text == "030110003"){
  $response .= "END Your polling unit is V/H, IKOT OBIOKO\n";
  $response .= $display;
}

else if ($text == "030110004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOKO 1\n";
   $response .= $display;
}

else if ($text == "030110005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOKO 2\n";
   $response .= $display;
}

else if ($text == "030110006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSOM\n";
   $response .= $display;
}

else if ($text == "030110007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OSOM\n";
  $response .= $display;
}

else if ($text == "030110008"){
  $response .= "END Your polling unit is PRY SCH, NKO OTORO\n";
 $response .= $display;
}

else if ($text == "030110009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NKO OTORO\n";
   $response .= $display;
}

else if ($text == "030110010"){
  $response .= "END Your polling unit is MKT SQUARE, IDORO (URUK USO)\n";
  $response .= $display;
}

//End of pulling unit in Ward 10 of Local government 1.


  else if ($text == "030111001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATA UDO\n";
  $response .= $display;
}

else if ($text == "030111002"){
  $response .= "END Your polling unit is V/H, IKOT ODON\n";
   $response .= $display;
}

else if ($text == "030111003"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETUKUDO\n";
   $response .= $display;
}

else if ($text == "030111004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETUKUDO\n";
 $response .= $display;
}

else if ($text == "030111005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EBOK\n";
   $response .= $display;
}

else if ($text == "030111006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBONG OTORO\n";
   $response .= $display;
}

else if ($text == "030111007"){
  $response .= "END Your polling unit is PRY SCH , IBONG OTORO\n";
  $response .= $display;
}

else if ($text == "030111008"){
  $response .= "END Your polling unit is V/H, IBONG IKOT AKPAN ABASI\n";
  $response .= $display;
}

else if ($text == "030111009"){
  $response .= "END Your polling unit is PRY SCH, IBIAKPAN 1\n";
  $response .= $display;
}

else if ($text == "030111010"){
  $response .= "END Your polling unit is PRY SCH, IBIAKPAN 11\n";
   $response .= $display;
}

//End of pulling unit in Ward 11 of Local government 1.

// End of all pulling units in every wards under ABAK LGA

// START OF PULLING UNITS UNDER EASTERN OBOLO LGA

else if ($text == "030201001"){
  $response .= "END Your polling unit is PRY SCH OKOROETE 1\n";
  $response .= $display;
}

else if ($text == "030201002"){
  $response .= "END Your polling unit is PRY SCH OKOROETE 2\n";
   $response .= $display;
}

else if ($text == "030201003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OKORETE\n";
   $response .= $display;
}

else if ($text == "030201004"){
  $response .= "END Your polling unit is VILLAGE SQUARE OJO'S OKORETE\n";
 $response .= $display;
}

else if ($text == "030201005"){
  $response .= "END Your polling unit is VILLAGE SQUARE OTU-UNIM AYAMA\n";
   $response .= $display;
}

else if ($text == "030201006"){
  $response .= "END Your polling unit is VILLAGE SQUARE AYAMA\n";
   $response .= $display;
}

else if ($text == "030201007"){
  $response .= "END Your polling unit is VILLAGE SQUARE EGWILE 11\n";
  $response .= $display;
}

else if ($text == "030201008"){
  $response .= "END Your polling unit is MARKET SQUARE AYAMA\n";
  $response .= $display;
}

//End of pulling units in ward 1 or LGA 2

else if ($text == "030202001"){
  $response .= "END Your polling unit is PRY SCH OKOROMBOHO 1\n";
  $response .= $display;
}

else if ($text == "030202002"){
  $response .= "END Your polling unit is PRY SCH OKOROMBOHO 2\n";
   $response .= $display;
}

else if ($text == "030202003"){
  $response .= "END Your polling unit is VILLAGE SQUARE OKOROITI 2\n";
   $response .= $display;
}

//End of pulling units in ward 2 or LGA 2

else if ($text == "030203001"){
  $response .= "END Your polling unit is PRY SCH AMADAKA\n";
  $response .= $display;
}

else if ($text == "030203002"){
  $response .= "END Your polling unit is VILLAGE SQUARE ELILE 1\n";
   $response .= $display;
}

else if ($text == "030203003"){
  $response .= "END Your polling unit is VILLAGE SQUARE ELILE 2\n";
   $response .= $display;
}

//End of pulling units in ward 3 or LGA 2

else if ($text == "030204001"){
  $response .= "END Your polling unit is TOWN HALL ELEKPON\n";
  $response .= $display;
}

else if ($text == "030204002"){
  $response .= "END Your polling unit is TOWN HALL AKPABOM\n";
   $response .= $display;
}

else if ($text == "030204003"){
  $response .= "END Your polling unit is VILLAGE SQUARE OTUNENE\n";
   $response .= $display;
}

//End of pulling units in ward 4 or LGA 2

else if ($text == "030205001"){
  $response .= "END Your polling unit is PRY SCH EMEROKE\n";
  $response .= $display;
}

else if ($text == "030205002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AGBA-AMA EMEROKE\n";
   $response .= $display;
}

else if ($text == "030205003"){
  $response .= "END Your polling unit is TOWN HALL EMEROKE 11\n";
   $response .= $display;
}

else if ($text == "030205004"){
  $response .= "END Your polling unit is TOWN HALL EMEREMEN 1\n";
  $response .= $display;
}

else if ($text == "030205005"){
  $response .= "END Your polling unit is VILLAGE SQUARE OKWAN OBOLO 1\n";
   $response .= $display;
}

else if ($text == "030205006"){
  $response .= "END Your polling unit is VILLAGE SQUARE OKWAN OBOLO 2\n";
   $response .= $display;
}

//End of pulling units in ward 5 or LGA 2

else if ($text == "030206001"){
  $response .= "END Your polling unit is TOWN HALL AMAUKA\n";
  $response .= $display;
}

else if ($text == "030206002"){
  $response .= "END Your polling unit is VILLAGE SQUARE AYAMA\n";
   $response .= $display;
}

else if ($text == "030206003"){
  $response .= "END Your polling unit is TOWN HALL AMANGLASS\n";
   $response .= $display;
}

else if ($text == "030206004"){
  $response .= "END Your polling unit is TOWN HALL OKOROMOBOLO\n";
  $response .= $display;
}

else if ($text == "030206005"){
  $response .= "END Your polling unit is TOWN HALL OKOROMMILOM\n";
   $response .= $display;
}

else if ($text == "030206006"){
  $response .= "END Your polling unit is PRY SCH OBIANGA\n";
   $response .= $display;
}
else if ($text == "030206007"){
  $response .= "END Your polling unit is PRY SCH IWOFE\n";
   $response .= $display;
}

//End of pulling units in ward 6 or LGA 2

else if ($text == "030207001"){
  $response .= "END Your polling unit is PRY SCH OKOROINYONG\n";
  $response .= $display;
}

else if ($text == "030207002"){
  $response .= "END Your polling unit is TOWN HALL BETHLEHEM\n";
   $response .= $display;
}

else if ($text == "030207003"){
  $response .= "END Your polling unit is VILLAGE SQUARE EGWENWE\n";
   $response .= $display;
}

else if ($text == "030207004"){
  $response .= "END Your polling unit is TOWN HALL OZUAGBO\n";
  $response .= $display;
}

else if ($text == "030207005"){
  $response .= "END Your polling unit is VILLAGE SQUARE AMANGBUZI\n";
   $response .= $display;
}

//End of pulling units in ward 7 or LGA 2

else if ($text == "030208001"){
  $response .= "END Your polling unit is PRY SCH IKO I\n";
  $response .= $display;
}

else if ($text == "030208002"){
  $response .= "END Your polling unit is PRY SCH IKO II\n";
   $response .= $display;
}

else if ($text == "030208003"){
  $response .= "END Your polling unit is PRY SCH IKO III\n";
   $response .= $display;
}

else if ($text == "030208004"){
  $response .= "END Your polling unit is SEC SCH IKO 1\n";
  $response .= $display;
}

else if ($text == "030208005"){
  $response .= "END Your polling unit is SEC SCH IKO 2\n";
   $response .= $display;
}

else if ($text == "030208006"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKO 1\n";
   $response .= $display;
}

else if ($text == "030208007"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKO 2\n";
   $response .= $display;
}

else if ($text == "030208008"){
  $response .= "END Your polling unit is MARKET SQUARE IKO 1\n";
   $response .= $display;
}

else if ($text == "030208009"){
  $response .= "END Your polling unit is MARKET SQUARE IKO 2\n";
   $response .= $display;
}

//End of pulling units in ward 8 or LGA 2

else if ($text == "030209001"){
  $response .= "END Your polling unit is PRY SCH KAMPA 1\n";
  $response .= $display;
}

else if ($text == "030209002"){
  $response .= "END Your polling unit is PRY SCH KAMPA 2\n";
   $response .= $display;
}

else if ($text == "030209003"){
  $response .= "END Your polling unit is TOWN HALL IKONTA 1\n";
   $response .= $display;
}

else if ($text == "030209004"){
  $response .= "END Your polling unit is TOWN HALL IKONTA 2\n";
  $response .= $display;
}

else if ($text == "030209005"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKONTA\n";
   $response .= $display;
}

//End of pulling units in ward 9 or LGA 2

else if ($text == "030210001"){
  $response .= "END Your polling unit is VILLAGE SQUARE ATABRIKANG 1\n";
  $response .= $display;
}

else if ($text == "030210002"){
  $response .= "END Your polling unit is VILLAGE SQUARE ATABRIKANG 2\n";
   $response .= $display;
}

//End of pulling units in ward 10 or LGA 2

// End of all pulling units in every wards under EASTERN OBOLO LGA

// START OF PULLING UNITS UNDER EKET LGA


else if ($text == "030301001"){
  $response .= "END Your polling unit is V/H, IKOT NSIDIBE\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301002"){
  $response .= "END Your polling unit is V/H, IKOT OKUDOM\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301003"){
  $response .= "END Your polling unit is PRY SCH , IKOT OKUDOM\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301004"){
  $response .= "END Your polling unit is PRY SCH IKOT ABIA\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301005"){
  $response .= "END Your polling unit is PRY SCH IKOT ATAKU 1\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030301006"){
  $response .= "END Your polling unit is PRY SCH IKOT ATAKU 2\n";
  $response .= $display;
  $response .= $message;
}

//End of Pulling units in ward 1 of LGA 3

else if ($text == "030302001"){
  $response .= "END Your polling unit is TOWN HALL ATABONG 1\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302002"){
  $response .= "END Your polling unit is TOWN HALL ATABONG 2\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302003"){
  $response .= "END Your polling unit is PRY SCH, IDUA\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302004"){
  $response .= "END Your polling unit is IBUGHOEM V/H, IDUA 1\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302005"){
  $response .= "END Your polling unit is IBUGHOEM V/H, IDUA 2\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030302006"){
  $response .= "END Your polling unit is V/H EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030302007"){
  $response .= "END Your polling unit is V/H IDUNG UDOFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030302008"){
  $response .= "END Your polling unit is V/H UQUA\n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 2 of LGA 3

else if ($text == "030303001"){
  $response .= "END Your polling unit is V/H IDUNG USO\n";
  $response .= $display;
  $response .= $message;
}

else if ($text == "030303002"){
  $response .= "END Your polling unit is USUNG INYANG COMMUNITY CENTRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303003"){
  $response .= "END Your polling unit is USUNG INYANG COMMUNITY CENTRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303004"){
  $response .= "END Your polling unit is PRY SCH USUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303005"){
  $response .= "END Your polling unit is TOWN HALL ASSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030301006"){
  $response .= "END Your polling unit is GOVT PRY SCH IKOT EBIYAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303007"){
  $response .= "END Your polling unit is TOWN HALL ETEBI IDUNG AKPAISANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030303008"){
  $response .= "END Your polling unit is GOVT PRY SCH, IKOT EBOK\n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 3 of LGA 3

else if ($text == "030304001"){
  $response .= "END Your polling unit is TOWN HALL OKOPEDI IDUNG UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304002"){
  $response .= "END Your polling unit is TOWN HALL MKPOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304003"){
  $response .= "END Your polling unit is PRY SCH ATAI NDON 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304004"){
  $response .= "END Your polling unit is PRY SCH ATAI NDON 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304005"){
  $response .= "END Your polling unit is TOWN HALL ATAI NDON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304006"){
  $response .= "END Your polling unit is TOWN HALL ETEBI IDUNG IWAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304007"){
  $response .= "END Your polling unit is TOWN HALL EKPENE AFAHA EKET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304008"){
  $response .= "END Your polling unit is GOVT PRY SCH EKPENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304009"){
  $response .= "END Your polling unit is PRY SCH AFAHA UQUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304010"){
  $response .= "END Your polling unit is V/H AFAHA UQUQ OBOKIDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304011"){
  $response .= "END Your polling unit is ATIBE AFAHA EKET, SCH OF NURSING\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030304012"){
  $response .= "END Your polling unit is V/H, ATIBE\n";
  $response .= $display;
  $response .= $message;
}

//End of pulling units in ward 4 of LGA 3

else if ($text == "030305001"){
  $response .= "END Your polling unit is T/H, IDIM AFIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305002"){
  $response .= "END Your polling unit is V/H EDE URUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305003"){
  $response .= "END Your polling unit is V/H EBANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305004"){
  $response .= "END Your polling unit is PRY SCH EDEOBUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305005"){
  $response .= "END Your polling unit is V/H, ESIT URUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305006"){
  $response .= "END Your polling unit is PRY SCH , ESIT URUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305007"){
  $response .= "END Your polling unit is PRY SCH , AFAHA ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305008"){
  $response .= "END Your polling unit is TOWN HALL, AFAHA ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030305009"){
  $response .= "END Your polling unit is V/H, IKO EKWA\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 5 OF LGA 3

else if ($text == "030306001"){
  $response .= "END Your polling unit is V/H, IKOT UDOMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306002"){
  $response .= "END Your polling unit is V/H, ISEYET IDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306003"){
  $response .= "END Your polling unit is V/H, AFIA NSIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306004"){
  $response .= "END Your polling unit is V/H ODORO ENEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306005"){
  $response .= "END Your polling unit is V/H, OFRIYO IDUNG INIANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306006"){
  $response .= "END Your polling unit is PRY SCH IKOT IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306007"){
  $response .= "END Your polling unit is V/H NATISIP IKOT IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306008"){
  $response .= "END Your polling unit is V/H IDUNG AKWA IDUNG IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306009"){
  $response .= "END Your polling unit is V/H IKO EKET IDUNG AMADU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306010"){
  $response .= "END Your polling unit is IKO EKET CDA SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306011"){
  $response .= "END Your polling unit is V/H IKOT UDOTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306012"){
  $response .= "END Your polling unit is V/H ETEBI IKOT UDOTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030306013"){
  $response .= "END Your polling unit is V/H OSSIOK\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 6 OF LGA 3


else if ($text == "030307001"){
  $response .= "END Your polling unit is PRY SCH USOEKONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307002"){
  $response .= "END Your polling unit is TOWN HALL ATA IDUNG AFAHA EKET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307003"){
  $response .= "END Your polling unit is V/H ATA IDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307004"){
  $response .= "END Your polling unit is TOWN HALL IKOT ASSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307005"){
  $response .= "END Your polling unit is TOWN HALL IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307006"){
  $response .= "END Your polling unit is V/H IKOT AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307007"){
  $response .= "END Your polling unit is V/H UDA IKOT AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307008"){
  $response .= "END Your polling unit is NURSERY SCH IKOT AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307009"){
  $response .= "END Your polling unit is IDUNG UDO AME ZION PRY SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307010"){
  $response .= "END Your polling unit is PRY SCH IDUNG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307011"){
  $response .= "END Your polling unit is V/H IDUNG ENEN, IKOT USO EKONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307012"){
  $response .= "END Your polling unit is VILLAGE SQUARE ATANG ASIKPE IDUNG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030307013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ASSANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 7 OF LGA 3

else if ($text == "030308001"){
  $response .= "END Your polling unit is V/H IKOT ODIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308002"){
  $response .= "END Your polling unit is PRY SCH EFFOI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308003"){
  $response .= "END Your polling unit is HEALTH CENTRE EFFOI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308004"){
  $response .= "END Your polling unit is V/H IDUNG AKPAEDIM UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308005"){
  $response .= "END Your polling unit is TOWN HALL ETEBI IKOT USOEKONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030308006"){
  $response .= "END Your polling unit is V/H IDUNG IMO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PULLING UNITS IN WARD 8 OF LGA 3

else if ($text == "030309001"){
  $response .= "END Your polling unit is PRY SCH ODIO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309002"){
  $response .= "END Your polling unit is PRY SCH ODIO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309003"){
  $response .= "END Your polling unit is PRY SCH ODIO 3\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030309004"){
  $response .= "END Your polling unit is V/H NDITIA\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 9 OF LGA 3


else if ($text == "030310001"){
  $response .= "END Your polling unit is V/H IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310002"){
  $response .= "END Your polling unit is PRY SCH IKOT OBIOANANA I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310003"){
  $response .= "END Your polling unit is PRY SCH IKOT OBIOANANA II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310004"){
  $response .= "END Your polling unit is V/H IKOT AKPAENANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310005"){
  $response .= "END Your polling unit is PRY SCH IKOT OSO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310006"){
  $response .= "END Your polling unit is PRY SCH IKOT OSO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310007"){
  $response .= "END Your polling unit is PRY SCH NDUO EDUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030310008"){
  $response .= "END Your polling unit is V/H NDUO EDUO\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 10 OF LGA 3


else if ($text == "030311001"){
  $response .= "END Your polling unit is TOWN HALL IKOT AKPANDEM 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311002"){
  $response .= "END Your polling unit is TOWN HALL IKOT AKPANDEM 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311003"){
  $response .= "END Your polling unit is TOWN HALL IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311004"){
  $response .= "END Your polling unit is V/H IKOT OBIORO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311005"){
  $response .= "END Your polling unit is V/H IKOT OBIORO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311006"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT AKPAIKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311007"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT EKPOKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311008"){
  $response .= "END Your polling unit is IKOT IKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311009"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT OBIOTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311010"){
  $response .= "END Your polling unit is V/H IKOT IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030311011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IKPONG\n";
  $response .= $display;
  $response .= $message;
}

//END OF POLLING UNITS IN WARD 11 OF LGA 3
//END OF ALL POLLING UNITS IN LGA 3 (EKIT)

//START OF PULLING UNITS IN WARD 1 OF LGA 4

else if ($text == "030401001"){
  $response .= "END Your polling unit is PRY SCH EKPENE OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401002"){
  $response .= "END Your polling unit is V/H NDITO INI IDUNG IKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401003"){
  $response .= "END Your polling unit is 	V/H NDITO UTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401004"){
  $response .= "END Your polling unit is SEC SCH EKPENE OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401005"){
  $response .= "END Your polling unit is V/H UQUA ISI EDOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030401006"){
  $response .= "END Your polling unit is VILLAGE SQUARE IDUNG AWAI\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 4

else if ($text == "030402001"){
  $response .= "END Your polling unit is 	HEALTH CENTRE ONIOK EDOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402002"){
  $response .= "END Your polling unit is 	VILLAGE SQUARE EDO ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402003"){
  $response .= "END Your polling unit is V/H ONIOK EDOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402004"){
  $response .= "END Your polling unit is V/H AFAHA IKOT EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402005"){
  $response .= "END Your polling unit is 	VILLAGE SQUARE IKOT EYO. II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030402006"){
  $response .= "END Your polling unit is V/H ASSAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 4

else if ($text == "030403001"){
  $response .= "END Your polling unit is 	PRY SCH EBE EKPI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403002"){
  $response .= "END Your polling unit is 	V/H EBE EKPI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403003"){
  $response .= "END Your polling unit is 	V/H AKPA MBIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403004"){
  $response .= "END Your polling unit is 	PRY SCH EDIDA EDOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030403005"){
  $response .= "END Your polling unit is VILLAGE SQUARE EDIDA EDOR\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 4

else if ($text == "030404001"){
  $response .= "END Your polling unit is PRY SCH IKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404002"){
  $response .= "END Your polling unit is V/H IDUNG EBIENO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404003"){
  $response .= "END Your polling unit is VILLAGE SQUARE IDUNG AKPAUSEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404004"){
  $response .= "END Your polling unit is TECHNICAL SCH. IKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030404005"){
  $response .= "END Your polling unit is V/H IDUNG OKPO, IKPA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 4

else if ($text == "030405001"){
  $response .= "END Your polling unit is 	PRY SCH UQUO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405002"){
  $response .= "END Your polling unit is V/H IDUNG AKPANTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405003"){
  $response .= "END Your polling unit is V/H NDON EYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405004"){
  $response .= "END Your polling unit is 	V/H NDON EDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030405005"){
  $response .= "END Your polling unit is VILLAGE SQUARE EBIGHI ANWANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 4

else if ($text == "030406001"){
  $response .= "END Your polling unit is 	V/H EBIGHI OKPONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406002"){
  $response .= "END Your polling unit is V/H IDUNG NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406003"){
  $response .= "END Your polling unit is V/H EBIGHI ASSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406004"){
  $response .= "END Your polling unit is 	VILLAGE SQUARE IDUNG UNAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030406005"){
  $response .= "END Your polling unit is 	V/H IDUNG ITAM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 4

else if ($text == "030407001"){
  $response .= "END Your polling unit is 	PRY SCH IDUNG ASSAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407002"){
  $response .= "END Your polling unit is 	MARKET SQUARE AFANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407003"){
  $response .= "END Your polling unit is V/H ETEBI IDUNG ITA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407004"){
  $response .= "END Your polling unit is VILLAGE SQUARE IDUNG ITA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030407005"){
  $response .= "END Your polling unit is VILLAGE SQUARE IDUNG UMOYUO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 4

else if ($text == "030408001"){
  $response .= "END Your polling unit is 	MARKET SQUARE MBAK UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408002"){
  $response .= "END Your polling unit is V/H ETEBI MBAK UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408003"){
  $response .= "END Your polling unit is 	V/H MBAK UYO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408004"){
  $response .= "END Your polling unit is 	PRY SCH ETEBI AKWATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408005"){
  $response .= "END Your polling unit is PRY SCH AKWATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030408006"){
  $response .= "END Your polling unit is V/H IDUNG ASUA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 4

else if ($text == "030409001"){
  $response .= "END Your polling unit is PRY SCH AKPAUTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409002"){
  $response .= "END Your polling unit is V/H IDUNG ABIDIANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409003"){
  $response .= "END Your polling unit is V/H IDUNG USIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409004"){
  $response .= "END Your polling unit is 	V/H IDUNG OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409005"){
  $response .= "END Your polling unit is PRY SCH URUA OKOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030409006"){
  $response .= "END Your polling unit is VILLAGE HALL URUA OKOK\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 4

else if ($text == "030410001"){
  $response .= "END Your polling unit is PRY SCH ODORO NKIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410002"){
  $response .= "END Your polling unit is V/H IDUNG AMANA, ODORO NKIT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410003"){
  $response .= "END Your polling unit is VILLAGE SQUARE EBIGHI ADAHA UKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410004"){
  $response .= "END Your polling unit is V/H IDUNG OBIO EKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410005"){
  $response .= "END Your polling unit is V/H AFAHA EKPENEDI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410006"){
  $response .= "END Your polling unit is V/H IDUNG ATANGA EDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410007"){
  $response .= "END Your polling unit is PRY SCH NTAK INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030410008"){
  $response .= "END Your polling unit is MARKET SQUARE NTAK INYANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 4

//END OF ALL PU IN EVERY WARD OF LGA 4

//START OF PU IN WARD 1 OF LGA 5

else if ($text == "030501001"){
  $response .= "END Your polling unit is PRY SCH, NTO NSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501002"){
  $response .= "END Your polling unit is PRY SCH, URUA AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ESSIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501004"){
  $response .= "END Your polling unit is PRY SCH, AFAHA IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501005"){
  $response .= "END Your polling unit is OLD MARKET SQUARE, IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501007"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501008"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501011"){
  $response .= "END Your polling unit is PRY SCH, NSASAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN EKA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ADA UTOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030501014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UKO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 5

else if ($text == "030504001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OSSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIODOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANSANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOM MKPATAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504006"){
  $response .= "END Your polling unit is V/HALL, ATAI ESSIEN MKPATAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504007"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT OTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504010"){
  $response .= "END Your polling unit is V/HALL, EKPEYONG ATAI 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504011"){
  $response .= "END Your polling unit is V/HALL, IKOT ESIFON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030504012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK OBONG 1\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 5

else if ($text == "030502001"){
  $response .= "END Your polling unit is PRY SCH, NTO NSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502002"){
  $response .= "END Your polling unit is PRY SCH, URUA AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ESSIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502004"){
  $response .= "END Your polling unit is PRY SCH, AFAHA IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502005"){
  $response .= "END Your polling unit is OLD MARKET SQUARE, IKOT EBAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502007"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502008"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502011"){
  $response .= "END Your polling unit is PRY SCH, NSASAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN EKA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ADA UTOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030502014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UKO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 5

else if ($text == "030503001"){
  $response .= "END Your polling unit is V/HALL, EKPEYONG ATAI 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503002"){
  $response .= "END Your polling unit is V/HALL, NTO OBIO AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO ESENOWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503004"){
  $response .= "END Your polling unit is V/HALL, UTU EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503005"){
  $response .= "END Your polling unit is V/HALL, UTU EKPEYONG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503006"){
  $response .= "END Your polling unit is V/HALL, URUK OBONG 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK OBONG 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503008"){
  $response .= "END Your polling unit is V/HALL, NTAK EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503009"){
  $response .= "END Your polling unit is V/HALL, NTO OSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503010"){
  $response .= "END Your polling unit is V/HALL, IKOT INYANG UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503011"){
  $response .= "END Your polling unit is PRY SCH, MIDIM ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MIDIM ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MIDIM NTO UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030503015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UBO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 5

else if ($text == "030505001"){
  $response .= "END Your polling unit is PRY SCH, MBIABET IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505002"){
  $response .= "END Your polling unit is SEC SCH MBIABET IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EBE IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505004"){
  $response .= "END Your polling unit is PRY SCH IKOT ESIDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESIDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505006"){
  $response .= "END Your polling unit is V/HALL, EKPENE OTON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505007"){
  $response .= "END Your polling unit is V/HALL ONION ONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKOI IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505009"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ABIAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505011"){
  $response .= "END Your polling unit is GENERAL HOSPITAL, MBIAOBONG IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, USUNG IDIM, MBIAOBONG IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505013"){
  $response .= "END Your polling unit is V/HALL, IKPE NUNG INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKPE UDOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKPE IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKPE IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBAM IKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030505018"){
  $response .= "END Your polling unit is NEW COMP. HALL, EKPENE OTOM\n";
  $response .= $display;
  $response .= $message;
}


//END OF PU IN WARD 5 OF LGA 5

else if ($text == "030506001"){
  $response .= "END Your polling unit is V/HALL, IKOT UMOESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506002"){
  $response .= "END Your polling unit is PRY SCH, IKOT UMOESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506003"){
  $response .= "END Your polling unit is PRY SCH, IKOT INEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOM OBOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506007"){
  $response .= "END Your polling unit is V/HALL, UKANA, IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKPENYONG UFUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKANA MBAK UKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030506010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO AKPA OKO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 5

else if ($text == "030507001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UTIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IBANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507004"){
  $response .= "END Your polling unit is PRY SCH. IKOT EBOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507007"){
  $response .= "END Your polling unit is V/SQ IKOT IDEM, ANWA UYO/IKOT IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IDUNG ESIMUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030507009"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDU\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 5

else if ($text == "030508001"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508002"){
  $response .= "END Your polling unit is CONVENT SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKO ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508004"){
  $response .= "END Your polling unit is V/HALL, IKOT NYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508005"){
  $response .= "END Your polling unit is V/HALL UMON OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508006"){
  $response .= "END Your polling unit is V/HALL IKOT OCHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508008"){
  $response .= "END Your polling unit is V/HALL, NTO UBIAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO OKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508010"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508011"){
  $response .= "END Your polling unit is V/HALL, IKOT IDEM UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508012"){
  $response .= "END Your polling unit is V/HALL, IFA OKON 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508013"){
  $response .= "END Your polling unit is V/HALL, IFA OKON 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKEFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508015"){
  $response .= "END Your polling unit is V/HALL, IKOT EKPEYONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508016"){
  $response .= "END Your polling unit is V/HALL, IKOT IGWE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508017"){
  $response .= "END Your polling unit is V/HALL, NYI OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508018"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO OKURE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508019"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKPE OKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030508020"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UFUKU OKON\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 5

else if ($text == "030509001"){
  $response .= "END Your polling unit is V/HALL, IKOT NKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG EDONG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG EDONG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKANA NSASAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN EFIA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN EFIA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509011"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESODOMO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ESSANG";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OFFIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509017"){
  $response .= "END Your polling unit is PRY SCH, UKANA UNA EAST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509018"){
  $response .= "END Your polling unit is PRY SCH, UKANA UNA EAST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509019"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509020"){
  $response .= "END Your polling unit is IKOT OFOK, PRY SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509021"){
  $response .= "END Your polling unit is V/HALL, IKOT AKPAN ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509022"){
  $response .= "END Your polling unit is V/HALL, IKOT AKPAN ESSIEN 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509023"){
  $response .= "END Your polling unit is V/HALL, IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030509024"){
  $response .= "END Your polling unit is V/HALL, IKOT OFFIONG ETOR\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 5

else if ($text == "030510001"){
  $response .= "END Your polling unit is PRY SCH, UKANA UWA WEST\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510002"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKPONG ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510003"){
  $response .= "END Your polling unit is V/HALL, IKOT AKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO EKRAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510005"){
  $response .= "END Your polling unit is V/HALL, IKOT AFANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510007"){
  $response .= "END Your polling unit is V/HALL, NTAK IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 5

else if ($text == "030511001"){
  $response .= "END Your polling unit is V/HALL, IKOT EDET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511002"){
  $response .= "END Your polling unit is V/HALL, IKOT AKPAN NTIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AYARA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511004"){
  $response .= "END Your polling unit is V/HALL, AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511005"){
  $response .= "END Your polling unit is ST ALOYSIUS PRY SCH, AKPAUTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511007"){
  $response .= "END Your polling unit is V/HALL, ONUK NKOP EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPABIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511009"){
  $response .= "END Your polling unit is INDEPENDENCE HIGH SCH, UKANA IKOT NTUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511010"){
  $response .= "END Your polling unit is V/HALL, ONUK IKOT NGWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030510011"){
  $response .= "END Your polling unit is V/HALL, ONUK IKOTOSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511012"){
  $response .= "END Your polling unit is PRY SCH, UKANA (OKOP AKAMA)\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511013"){
  $response .= "END Your polling unit is V/HALL, UKANA IKOT IDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO ETIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO INAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAN IKOT OKORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKANA ONUK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030511018"){
  $response .= "END Your polling unit is V/HALL, IKOT OKWO ETIM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 11 OF LGA 5

//END OF ALL PU IN LGA 5 (ESSIEN UDIM)

//START OF PU IN WARD 1 OF LGA 6 (ETIM EKPO)



else if ($text == "030601001"){
  $response .= "END Your polling unit is PRY SCH, UTU NSEHE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU IKOT EBORO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601003"){
  $response .= "END Your polling unit is PRY SCH, ABAT TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ABAT TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601005"){
  $response .= "END Your polling unit is PRY SCH, ESA OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601006"){
  $response .= "END Your polling unit is PRY SCH ATA ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601007"){
  $response .= "END Your polling unit is V/HALL, OBONG IKOT AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030601008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU NSEKHE\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 6

else if ($text == "030602001"){
  $response .= "END Your polling unit is PRY SCH, NKWOT IKONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO NKWOT IKONO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKPE IKOT AKWA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602004"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIOMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602005"){
  $response .= "END Your polling unit is PRY SCH, INEN IKOT OKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602006"){
  $response .= "END Your polling unit is V/H, UTU IKOT NKOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602007"){
  $response .= "END Your polling unit is PRY SCH, URUK ATA IKOT ISEMIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030602008"){
  $response .= "END Your polling unit is PRY SCH AKAKPAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 6

else if ($text == "030603001"){
  $response .= "END Your polling unit is V/HALL, IKOT MBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603002"){
  $response .= "END Your polling unit is SEC SCH ETOK URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603003"){
  $response .= "END Your polling unit is PRY SCH, UTU IKOT IMONTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603004"){
  $response .= "END Your polling unit is V/HALL, UTU IDUNG AKPAN UDOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK ATA IKOT EKPOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603006"){
  $response .= "END Your polling unit is PRY SCH 1, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603007"){
  $response .= "END Your polling unit is PRY SCH, ATAI NTO OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603008"){
  $response .= "END Your polling unit is PRY SCH 11, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030603009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 6

else if ($text == "030604001"){
  $response .= "END Your polling unit is V/HALL, IKOT MBOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604002"){
  $response .= "END Your polling unit is SEC SCH ETOK URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604003"){
  $response .= "END Your polling unit is PRY SCH, UTU IKOT IMONTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604004"){
  $response .= "END Your polling unit is V/HALL, UTU IDUNG AKPAN UDOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK ATA IKOT EKPOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604006"){
  $response .= "END Your polling unit is PRY SCH 1, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604007"){
  $response .= "END Your polling unit is PRY SCH, ATAI NTO OBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604008"){
  $response .= "END Your polling unit is PRY SCH 11, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030604009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTU IKOT EKPO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 6

else if ($text == "030605001"){
  $response .= "END Your polling unit is PRY SCH, NTO EDET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605002"){
  $response .= "END Your polling unit is V/HALL, URUK ATA NSIDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK ATA IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605004"){
  $response .= "END Your polling unit is V/HALL, IKPE ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDODIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPANSEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030605007"){
  $response .= "END Your polling unit is V/HALL, IKOT IYAH\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 6

else if ($text == "030606001"){
  $response .= "END Your polling unit is SEC SCH, EKA URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606002"){
  $response .= "END Your polling unit is PRY SCH, EKA URUK ESHIET\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606003"){
  $response .= "END Your polling unit is V/HALL, IKOT INYANG EKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606004"){
  $response .= "END Your polling unit is V/HALL, NTAK INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606005"){
  $response .= "END Your polling unit is V/HALL, ATAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606006"){
  $response .= "END Your polling unit is U.P.E SCH, IKOT AKASOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606007"){
  $response .= "END Your polling unit is V/HALL, IKOT ODONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030606008"){
  $response .= "END Your polling unit is V/HALL, ATUAI\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 6

else if ($text == "030607001"){
  $response .= "END Your polling unit is PRY SCH, OMUM UNYAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607002"){
  $response .= "END Your polling unit is PRY SCH, IBIO NUNG ACHAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607003"){
  $response .= "END Your polling unit is V/HALL, OMUM UNYAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607004"){
  $response .= "END Your polling unit is PRY SCH, IBIO EDEM UDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607005"){
  $response .= "END Your polling unit is PRY SCH, OBONG NTAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607006"){
  $response .= "END Your polling unit is PRY SCH, OBON EBOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607007"){
  $response .= "END Your polling unit is V/HALL, IKOT MKPORIKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607008"){
  $response .= "END Your polling unit is SEC SCH, IKOT ESE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030607009"){
  $response .= "END Your polling unit is V/HALL, IBIO EDEM URUA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 6

else if ($text == "030608001"){
  $response .= "END Your polling unit is PRY SCH, UDIANG ENEM 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608002"){
  $response .= "END Your polling unit is PRY SCH, UDIANG ENEM 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608003"){
  $response .= "END Your polling unit is V/HALL, IKOT UMO EBAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608004"){
  $response .= "END Your polling unit is V/HALL, IKOT OBIOMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608005"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDOBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608006"){
  $response .= "END Your polling unit is PRY SCH, IKOT INUNG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608007"){
  $response .= "END Your polling unit is PRY SCH, IKOT INUNG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030608008"){
  $response .= "END Your polling unit is V/HALL, ABAK OBONG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 6

else if ($text == "030609001"){
  $response .= "END Your polling unit is PRY SCH, URUK ATAI 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609002"){
  $response .= "END Your polling unit is PRY SCH, IKPE ANANG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609003"){
  $response .= "END Your polling unit is PRY SCH, IKPE ANANG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKPE ANANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609005"){
  $response .= "END Your polling unit is V/HALL, BDOT OBONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609006"){
  $response .= "END Your polling unit is V/HALL, IBIO NUNG IBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AJA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, URUK ATA 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030609009"){
  $response .= "END Your polling unit is V/HALL, IKOT AMA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 6

else if ($text == "030610001"){
  $response .= "END Your polling unit is PRY SCH, TWUKEM TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610002"){
  $response .= "END Your polling unit is SEC SCH, IWUKEM TOWN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610003"){
  $response .= "END Your polling unit is PRY SCH, EDEM AKAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610004"){
  $response .= "END Your polling unit is V/HALL, IKOT NYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610005"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AWAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030610007"){
  $response .= "END Your polling unit is CUSTOMARY COURT, IWUKEM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 6

//END OF ALL PU IN LGA 6

//START OF PU IN WARD 1 OF LGA 7

else if ($text == "030701001"){
  $response .= "END Your polling unit is CENTRAL SCH, ETINAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701002"){
  $response .= "END Your polling unit is GOVT. SCH, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701003"){
  $response .= "END Your polling unit is CENTRAL SCH\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701004"){
  $response .= "END Your polling unit is FEDERATED TOWN HALL, ETINAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701005"){
  $response .= "END Your polling unit is SALVATION ARMY SCH, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701006"){
  $response .= "END Your polling unit is PRY SCH JOHN KIRK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701007"){
  $response .= "END Your polling unit is TECHNICAL SCH, SLOOD PETERS\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701008"){
  $response .= "END Your polling unit is Q.I.C PRESS, ETINAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701010"){
  $response .= "END Your polling unit is BUS STOP, IKOT EBIYAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701011"){
  $response .= "END Your polling unit is M.C.H SECRETARIAT RD, ETINANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030701012"){
  $response .= "END Your polling unit is POST OFFICE, ETINAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 7

else if ($text == "030702001"){
  $response .= "END Your polling unit is CIVIC CENTRE, EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702002"){
  $response .= "END Your polling unit is PRY SCH, IKOT EBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702003"){
  $response .= "END Your polling unit is PRY SCH, IKOT EBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702004"){
  $response .= "END Your polling unit is CENTRAL SCH, NDON UTIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702005"){
  $response .= "END Your polling unit is PRY SCH, NDON EYO 11\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702006"){
  $response .= "END Your polling unit is ADULT EDU. CENTRE, OTO AKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702007"){
  $response .= "END Your polling unit is PRY SCH, EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702008"){
  $response .= "END Your polling unit is V/HALL, IKOT EEKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030702009"){
  $response .= "END Your polling unit is PRY SCH, EKPENE UKPA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 7

else if ($text == "030703001"){
  $response .= "END Your polling unit is CUSTOMARY COURT, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703002"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703003"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703004"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO OTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703006"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UDO OTO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703007"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UDO OTO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030703008"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 7

else if ($text == "030704001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT INYANG OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704002"){
  $response .= "END Your polling unit is PRY SCH, EKPENE OBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704003"){
  $response .= "END Your polling unit is MARKET SQUARE, NDON EYO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704004"){
  $response .= "END Your polling unit is ST THERESA SEC SCH, EDEM EKPAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030704005"){
  $response .= "END Your polling unit is LEPROSY HOSPITAL EKPENE OBOM\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 7

else if ($text == "030705001"){
  $response .= "END Your polling unit is HOPE INSTITUTE, AFAHA IMAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705002"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA AEKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705003"){
  $response .= "END Your polling unit is PRY SCH, ISHIET ERONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705004"){
  $response .= "END Your polling unit is ST MARTIN, IKOT UDOBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IKPUHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKATA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030705007"){
  $response .= "END Your polling unit is PRY SCH, IKOTUDOBIA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 7

else if ($text == "030706001"){
  $response .= "END Your polling unit is PRY SCH AWA NTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706002"){
  $response .= "END Your polling unit is PRY SCH , IKOT AKPAN OBIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AFAHA URUA ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706004"){
  $response .= "END Your polling unit is GOVT SCH, ONIONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706005"){
  $response .= "END Your polling unit is COMM SEC SCH, IKOT ITINA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ITINA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706007"){
  $response .= "END Your polling unit is CIVIC CENTRE, IKOT OBONG IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706008"){
  $response .= "END Your polling unit is PRY SCH, IKOT INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706009"){
  $response .= "END Your polling unit is PRY SCH, NKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706010"){
  $response .= "END Your polling unit is VILLAGE HALL, NKANA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030706011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN OBIO EKOT\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 7

else if ($text == "030707001"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSIEN OKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707002"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO EKA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO EKA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707004"){
  $response .= "END Your polling unit is TOWN HALL, IKOT IBOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707007"){
  $response .= "END Your polling unit is PRY SCH, IKOT NTE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707008"){
  $response .= "END Your polling unit is PRY SCH, IKOT MFON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707009"){
  $response .= "END Your polling unit is PRY SCH, IKOT UMIANGEDE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707010"){
  $response .= "END Your polling unit is PRY SCH, IKOT UMIANGEDE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030707011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ESE\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 7

else if ($text == "030708001"){
  $response .= "END Your polling unit is GOVT SCH, ANYAM EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708002"){
  $response .= "END Your polling unit is CO-OPERATIVE HALL, ANYAM EFA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708003"){
  $response .= "END Your polling unit is CO-OPERATIVE HALL, ANYAM EFA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708004"){
  $response .= "END Your polling unit is SEC SCH, ATA EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708005"){
  $response .= "END Your polling unit is VILLAGE HALL, AKPASUK EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708006"){
  $response .= "END Your polling unit is CO-OPERATIVE HALL, ATA EFA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NSUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708008"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPA ESE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030708009"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPA ESE 2\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 7


else if ($text == "030709001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN NTEBOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709002"){
  $response .= "END Your polling unit is PRY SCH, IWOR ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709003"){
  $response .= "END Your polling unit is PRY SCH, IWOR ETOT 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709004"){
  $response .= "END Your polling unit is PRY SCH, IWOR ETOT 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709005"){
  $response .= "END Your polling unit is VILLAGE HALL , IWOR ETOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709006"){
  $response .= "END Your polling unit is TECH. SCH MBIOTO EKPENE ITUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709007"){
  $response .= "END Your polling unit is C/SCH MBIOTO EKPENE ITUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709008"){
  $response .= "END Your polling unit is PRY SCH, EFIAT MBIOTO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ETOR\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709010"){
  $response .= "END Your polling unit is GOVT SCH, IKOT ETEKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709011"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKPONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709012"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709013"){
  $response .= "END Your polling unit is PRY SCH, MBIOTO EKPENE ITUEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030709014"){
  $response .= "END Your polling unit is PRY SCH EFIAT MBIOTO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 7

else if ($text == "030710001"){
  $response .= "END Your polling unit is PRY SCH, IKOT NSEYEN 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710002"){
  $response .= "END Your polling unit is PRY SCH, IKOT NSEYEN 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710003"){
  $response .= "END Your polling unit is CO-OPERATIVE HALL, IKOT OSONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710004"){
  $response .= "END Your polling unit is PRY SCH IKOT OBIO INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710005"){
  $response .= "END Your polling unit is CO-OPERATIVE IKOT OBIO INYANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710006"){
  $response .= "END Your polling unit is PRY SCH AFAHA EFIAT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710007"){
  $response .= "END Your polling unit is PRY SCH EKOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030710008"){
  $response .= "END Your polling unit is PRY SCH EKOMANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 7

else if ($text == "030711001"){
  $response .= "END Your polling unit is PRY SCH IKOT ISONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711002"){
  $response .= "END Your polling unit is COMM SEC SCH, IKOT AKPABIO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711003"){
  $response .= "END Your polling unit is V/HALL, IKOT AKPAYA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711004"){
  $response .= "END Your polling unit is V/HALL, IKOT NKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711005"){
  $response .= "END Your polling unit is V/HALL, IKOT ESUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711006"){
  $response .= "END Your polling unit is V/HALL, IKOT UDOBIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711007"){
  $response .= "END Your polling unit is V/HALL, IKOT ANANGA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711008"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711009"){
  $response .= "END Your polling unit is V/HALL, MBIOTO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030711010"){
  $response .= "END Your polling unit is V/HALL, MBIOTO 2\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 11 OF LGA 7

//END OF ALL PU IN LGA 7

// START OF PU IN WARD 1 OF LGA 8

else if ($text == "030801001"){
  $response .= "END Your polling unit is CENTRAL SCH, UPENEKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801002"){
  $response .= "END Your polling unit is AREA OFFICE, UPENEKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801003"){
  $response .= "END Your polling unit is TOWN HALL, ATASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UPENEKANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801005"){
  $response .= "END Your polling unit is VILLAGE HALL, OSUNG NSE ULE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801006"){
  $response .= "END Your polling unit is POLY CLINIC, UDO OKUKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030801007"){
  $response .= "END Your polling unit is TOWN HALL, ESSIEN UTIARUK\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 8

else if ($text == "030802001"){
  $response .= "END Your polling unit is PRY SCH, ITAK ABASI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030802002"){
  $response .= "END Your polling unit is TOWN HALL, IKOT INWANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030802003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, INDUNG ABASI OKURE\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 8

else if ($text == "030803001"){
  $response .= "END Your polling unit is PRY SCH, MKPANAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803002"){
  $response .= "END Your polling unit is PRY SCH, MKPANAK 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803003"){
  $response .= "END Your polling unit is TOWN HALL, MKPANAK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803004"){
  $response .= "END Your polling unit is TOWN HALL, MKPANAK 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030803005"){
  $response .= "END Your polling unit is HEALTH CENTRE, MKPANAK\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 8

else if ($text == "030804001"){
  $response .= "END Your polling unit is PRY SCH, IWUOKPOM OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030804002"){
  $response .= "END Your polling unit is TOWN HALL, IWUOKPOM OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030804003"){
  $response .= "END Your polling unit is VILLAGE HALL, AKATA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 8

else if ($text == "030805001"){
  $response .= "END Your polling unit is OPEN SQUARE, IWOKPOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805002"){
  $response .= "END Your polling unit is PRY SCH, IWOKPOM 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805003"){
  $response .= "END Your polling unit is PRY SCH, IWOKPOM 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805004"){
  $response .= "END Your polling unit is PRY SCH, INUA EYET IKOT 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805005"){
  $response .= "END Your polling unit is PRY SCH, INUA EYET IKOT 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030805006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, INUA EYET IKOT\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 8

else if ($text == "030806001"){
  $response .= "END Your polling unit is PRY SCH, OKOROUTIP 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030806002"){
  $response .= "END Your polling unit is PRY SCH, OKOROUTIP 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030806003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OKOROUTIP\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 8

else if ($text == "030807001"){
  $response .= "END Your polling unit is GOVT. SCH, IWOACHANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030807002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IWOACHANG 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030807003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IWOACHANG 2\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 8

else if ($text == "030808001"){
  $response .= "END Your polling unit is PRY SCH, NKAFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030808002"){
  $response .= "END Your polling unit is PRY SCH, OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030808003"){
  $response .= "END Your polling unit is HEALTH CENTRE, OPOLOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030808004"){
  $response .= "END Your polling unit is PRY SCH, ATABRIKANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 8

else if ($text == "030809001"){
  $response .= "END Your polling unit is VILLAGE HALL, ATIA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809002"){
  $response .= "END Your polling unit is VILLAGE HALL, ATIA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809003"){
  $response .= "END Your polling unit is VILLAGE HALL, ETIO ESEK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809004"){
  $response .= "END Your polling unit is TOWN HALL, ITAK IDIM UKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809005"){
  $response .= "END Your polling unit is PRY SCH, OKPOSO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030809006"){
  $response .= "END Your polling unit is \PRY SCH, OKPOSO 2n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 8

else if ($text == "030810001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ESUK IKIM EKEME\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITAK AFAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810003"){
  $response .= "END Your polling unit is TOWN HALL, ITAK IDIM NNE EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810004"){
  $response .= "END Your polling unit is TOWN HALL, ESUK IKIM AKWAHA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810005"){
  $response .= "END Your polling unit is TOWN HALL, NDITO EKA IBA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030810006"){
  $response .= "END Your polling unit is TOWN HALL, OKOM ITA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 8

//END OF ALL WARDS UNDER LGA 8

//START OF WARD 1 OF LGA 9

else if ($text == "030901001"){
  $response .= "END Your polling unit is PRY SCH, MBIEREBE OBIO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901002"){
  $response .= "END Your polling unit is PRY SCH, MBIEREBE OBIO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901003"){
  $response .= "END Your polling unit is PRY SCH, IKOT IKO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901004"){
  $response .= "END Your polling unit is PRY SCH, IKOT IKO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901005"){
  $response .= "END Your polling unit is PRY SCH, AFAHA ATAI\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901006"){
  $response .= "END Your polling unit is PRY SCH, AFAHA ETOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901007"){
  $response .= "END Your polling unit is PRY SCH, NUNG OKU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901008"){
  $response .= "END Your polling unit is PRY SCH, AFAHA IKOT OSUM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901009"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT AKPAN EDU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901010"){
  $response .= "END Your polling unit is PRY SCH, MBIKPONG IKOT EDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIKPONG IKOT EDIM (NEAR BUS STOP)\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901012"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN ABIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901013"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ABIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901014"){
  $response .= "END Your polling unit is MARKET SQUARE, AFAHA IKOT OBIO NKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030901015"){
  $response .= "END Your polling unit is PRY SCH, AFAHA IKOT OBIO NKAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 1 OF LGA 9

else if ($text == "030902001"){
  $response .= "END Your polling unit is PRY SCH, NUNG ETTE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902002"){
  $response .= "END Your polling unit is PRY SCH, NUNG ETTE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902003"){
  $response .= "END Your polling unit is PRY SCH, IKOT ODUOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902004"){
  $response .= "END Your polling unit is CO-OP HALL, IKOT OBUOT\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902005"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKUBO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AMBON\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902007"){
  $response .= "END Your polling unit is PRY SCH, OWOT UTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902008"){
  $response .= "END Your polling unit is VILLAGE HALL, OWOT UTA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902009"){
  $response .= "END Your polling unit is VILLAGE HALL, EBERE OTU\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902010"){
  $response .= "END Your polling unit is PRY SCH, IKOT IKERE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902011"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO EKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABASI IDEM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030902013"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 2 OF LGA 9

else if ($text == "030903001"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG UDOE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903002"){
  $response .= "END Your polling unit is PRY SCH, NUNG UDOE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903003"){
  $response .= "END Your polling unit is MARKET SQUARE, NUNG UDOE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903004"){
  $response .= "END Your polling unit is PRY SCH, MBIEREBE AKPAWAT 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903005"){
  $response .= "END Your polling unit is PRY SCH, MBIEREBE AKPAWAT 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903006"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903007"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESSIEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA ETOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903009"){
  $response .= "END Your polling unit is PRY SCH , IKOT IDE AKPAKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030903010"){
  $response .= "END Your polling unit is PRY SCH , IKOT IDE ETUKUDO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 3 OF LGA 9

else if ($text == "030904001"){
  $response .= "END Your polling unit is PRY SCH, MBIKPONG ATAI 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904002"){
  $response .= "END Your polling unit is PRY SCH, MBIKPONG ATAI 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904003"){
  $response .= "END Your polling unit is CO-OP HALL, EDIAM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904004"){
  $response .= "END Your polling unit is MARKET SQUARE, OKU IBESIKPO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904005"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKURE 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKURE 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904007"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO ODONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO ODONGO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904009"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO OFFONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO OFFONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904011"){
  $response .= "END Your polling unit is PRY SCH, EDEM IBIOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030904012"){
  $response .= "END Your polling unit is VILLAGE HALL, OKU IKOT EDAHA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 4 OF LGA 9

else if ($text == "030905001"){
  $response .= "END Your polling unit is PRY SCH, NUNG UKANA IKOT EFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905002"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG UKANA IKOT EFRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905004"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA UDOEYOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA IKOT OWOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905006"){
  $response .= "END Your polling unit is PRY SCH, ITOKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030905007"){
  $response .= "END Your polling unit is PRY SCH, ABIA UKPO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 5 OF LGA 9

else if ($text == "030906001"){
  $response .= "END Your polling unit is PRY SCH, NO. 1 AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906002"){
  $response .= "END Your polling unit is PRY SCH, NO. 1 AKPA UTONG 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AKPA UTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ANNUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906005"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ANNUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906006"){
  $response .= "END Your polling unit is SEC SCH, OKOP NDUA ERONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906007"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT UKOP\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906008"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPA ERONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA NDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906010"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT AKPA NDUA 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906011"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT AKPA NDUA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906012"){
  $response .= "END Your polling unit is OBO MARKET SQUARE, IKOT AKPA NDUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDIOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906014"){
  $response .= "END Your polling unit is PRY SCH, MBAK EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBAK EKPE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030906015"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO NKAN\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 6 OF LGA 9

else if ($text == "030907001"){
  $response .= "END Your polling unit is HEALTH CENTRE, IKOT OBIO EDIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907002"){
  $response .= "END Your polling unit is PRY SCH, IKOT NKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NKIM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907005"){
  $response .= "END Your polling unit is NUR SCH, IKOT AKPA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907006"){
  $response .= "END Your polling unit is COURT HALL, IKOT IYAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IYAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030907009"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPASO\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 7 OF LGA 9

else if ($text == "030908001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908002"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT AKPA EDUNG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EBRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908004"){
  $response .= "END Your polling unit is PRY SCH , IKOT EBRE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908005"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT AKPA EYOHO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA EYOHO 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO EYOHO 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030908008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO ATA\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 8 OF LGA 9

else if ($text == "030909001"){
  $response .= "END Your polling unit is PRY SCH, NDIKPO ATANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDIKPO ATANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATANG ESEN 1\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATANG ESEN 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909005"){
  $response .= "END Your polling unit is PRY SCH, IKOT ATANG ESEN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909006"){
  $response .= "END Your polling unit is PRY SCH, IKOT ITOK\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909007"){
  $response .= "END Your polling unit is TOWN HALL, OBIO ADUANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG EDIENE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATANG UMA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATANG UMA 2\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909011"){
  $response .= "END Your polling unit is TOWN HALL, IKOT MBANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030909012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT MBANG\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 9 OF LGA 9

else if ($text == "030910001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NKWO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910002"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OSOM\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910004"){
  $response .= "END Your polling unit is SEC SCH, IKOT OBIO NKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910005"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO NKO\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPABIN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910008"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKU AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKU AKPAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910010"){
  $response .= "END Your polling unit is PRY SCH, IKOT ENUA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPASIA\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IKAN\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910013"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT MBRIDE\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910014"){
  $response .= "END Your polling unit is MARKET SQUARE, NTUK OTONG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "030910015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ABASI\n";
  $response .= $display;
  $response .= $message;
}

//END OF PU IN WARD 10 OF LGA 9

//END OF ALL PU IN LGA 9 (IBESIKPO ASUTAN)

//HERE IS WHERE SHEGS STOPS CODING

//PROSPER'S CODE BASE STARTS HERE
//STARTING FROM 10-20 
else if ($text == "031001001"){
  $response .= "END Your polling unit is PRY SCH, USE IKOT OKU \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031001002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NKIT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001003"){
  $response .= "END Your polling unit is MARKET SQUARE, OKOPEDI \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIAMA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IDIDEP USUK \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKOBO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001007"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBONG \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001008"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKWERE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKWERE \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001010"){
  $response .= "END Your polling unit is PRY SCH, IKOT UDO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001011"){
  $response .= "END Your polling unit is PRY SCH, AFAHA ITIAT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001012"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA ITIAT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001013"){
  $response .= "END Your polling unit is PRY SCH, NTAN MBAT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001014"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETIM \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPABIO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001016"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDIOK \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETAK IKOT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031001018"){
  $response .= "END Your polling unit is VILLAGE HALL, OBOT UKIM \n";
  $response .= $display;
  $response .= $message;
}







 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 02 IBIONO EASTERN 11

 else if ($text == "031002001"){
  $response .= "END Your polling unit is VILLAGE HALL, MBIABAM \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002002"){
  $response .= "END Your polling unit is S.S.S, IKOT NKO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO OBUK \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ANTIA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002005"){
  $response .= "END Your polling unit is PRY SCH, IKOT ANDEM IDIDEP \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031002006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ODORO AKA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ODIONG \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ODIONG IDIDEP \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDU \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002010"){
  $response .= "END Your polling unit is PRY SCH OKPOTO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN ABASI \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA NYA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ESSIEN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INYANG IDIDEP \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031002015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT INYANG EKPOT \n";
  $response .= $display;
  $response .= $message;
}






 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 03 IBIONO WESTERN 1

 else if ($text == "031003003"){
  $response .= "END Your polling unit is PRY SCH, AFAHA UTUAT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003002"){
  $response .= "END Your polling unit is PRY SCH, AFAHA NSAI \n";
  $response .= $display;
  $response .= $message; 
}
else if ($text == "031003003"){
  $response .= "END Your polling unit is PRY SCH, ANAM \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031003004"){
  $response .= "END Your polling unit is VILLAGE HALL, IDRE \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031003005"){
  $response .= "END Your polling unit is VILLAGE HALL, ITU ATAN \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031003006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AMBIT \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031003007"){
  $response .= "END Your polling unit isVILLAGE HALL, IKPA IKOT UBO \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031003008"){
  $response .= "END Your polling unit isVILLAGE HALL, NDOROBOT \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT MKPO \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO EDEP \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBOT UKANA \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTAN NSAI \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003013"){
  $response .= "END Your polling unit is PRY SCH, NSAN \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031003014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ANDIA \n";
  $response .= $display;
 $response .= $message;
}







 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 04 IBIONO WESTERN 11

else if ($text == "031004001"){
  $response .= "END Your polling unit is PRY SCH, AFAHA UTUAT \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004002"){
  $response .= "END Your polling unit is PRY SCH, AFAHA NSAI \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004003"){
  $response .= "END Your polling unit is PRY SCH, ANAM \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004004"){
  $response .= "END Your polling unit is VILLAGE HALL, IDRE \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004005"){
  $response .= "END Your polling unit is VILLAGE HALL, ITU ATAN \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004006"){
  $response .= "END Your polling unit is PRY SCH, IKOT AMBIT \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKPA IKOT UBO \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004008"){
  $response .= "END Your polling unit is VILLAGE HALL, NDOROBOT \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT MKPO \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO EDEP \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBOT UKANA \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTAN NSAI \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004013"){
  $response .= "END Your polling unit is PRY SCH, NSAN \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031004014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ANDIA \n";
  $response .= $display;
 $response .= $message;
}








 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 05 IBIONO SOUTHERN 1

else if ($text == "031005001"){
  $response .= "END Your polling unit is  PRY SCH, USE IKOT EKOP  \n";
$response .= $display;
 $response .= $message;
}
else if ($text == "031005002"){
  $response .= "END Your polling unit is PRY SCH, IKIDIP  \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031005003"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKOP OBIO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005004"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPABIO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005005"){
  $response .= "END Your polling unit is  PRY SCH, IKOT AMBANG \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005006"){
  $response .= "END Your polling unit is  VILLAGE HALL, MBIABAN \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005007"){
  $response .= "END Your polling unit is PRY SCH, OBIO IBIONO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005008"){
  $response .= "END Your polling unit is TECH COLLEGE, IKOT ADA IDEM  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OKOBO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031005010"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKWERE  \n";
  $response .= $display;
 $response .= $message;
}






 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 06 IBIONO SOUTHERN 11

 else if ($text == "031006001"){
  $response .= "END Your polling unit is LOTT. C. AFAHA OBIO ENO \n";
$response .= $display;
  $response .= $message;
}
else if ($text == "031006002"){
  $response .= "END Your polling unit is PRY SCH, IKPA IBIONO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006003"){
  $response .= "END Your polling unit is PRY SCH, IKPA IDAHA  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006004"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSUKPONG  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006005"){
  $response .= "END Your polling unit is PRY SCH, IKOT EFUN  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006006"){
  $response .= "END Your polling unit is PRY SCH, MBIAKPAN  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006007"){
  $response .= "END Your polling unit is VILLAGE HALL, NKIM  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006008"){
  $response .= "END Your polling unit is PRY SCH, MBIAKPAN IKOT EDIM  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006009"){
  $response .= "END Your polling unit is PRY SCH, ASANGTING  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006010"){
  $response .= "END Your polling unit is PRY SCH, USE NTAN  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006011"){
  $response .= "END Your polling unit is  PRY SCH, USE IBIAKU IKOT UKPONG \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031006012"){
  $response .= "END Your polling unit is VILLAGE HALL, USE IBIAKU IKOT UKPONG  \n";
  $response .= $display;
 $response .= $message;
}






 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 07 IBIONO NORTHERN 1

 else if ($text == "031007001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ODUBE  \n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "031007002"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT ESIFA \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKPE  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "03100704"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN OKPON  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESEN  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007006"){
  $response .= "END Your polling unit is PRY SCH, USE IKOT ASANA  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007007"){
  $response .= "END Your polling unit is PRY SCH, NTA IKTO USE  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007008"){
  $response .= "END Your polling unit is  VILLAGE HALL, EKIMBUK \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007009"){
  $response .= "END Your polling unit is  VILLAGE SQUARE , EKIMBUK \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007010"){
  $response .= "END Your polling unit is VILLAGE HALL, AKA IKOT UDO ENO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007011"){
  $response .= "END Your polling unit is  VILLAGE HALL, OMU EKENE \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007012"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT UBE \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007013"){
  $response .= "END Your polling unit is VILLAGE HALL, OBOT OKO  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007014"){
  $response .= "END Your polling unit is  VILLAGE HALL, AFUA \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABASI INYANG  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, INWUN USE  \n";
  $response .= $display;
 $response .= $message;
}
else if ($text == "031007017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESIDEN  \n";
  $response .= $display;
 $response .= $message;
}









 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 08 IBIONO NORTHERN 11

else if ($text == "031008001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBOM  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABIA  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ANTIA  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008004"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKOI  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008005"){
  $response .= "END Your polling unit is  PRY SCH, IKOT OBO \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ENYIN  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UBO ONO  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UBO ONO  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008009"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT NYA ONO \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IFOT ONO  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IFOT ONO  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO UKANA  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008013"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, MBUK IDORO \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UWA  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBO AFAHA  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008016"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ETO IDORO  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008017"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT UDO UKANA \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008018"){
  $response .= "END Your polling unit is  VILLAGE HALL, AFAHA ISE \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008019"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA ISE  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008020"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO UKANA  \n";
  $response .= $display;
 $response .= $message;
}

else if ($text == "031008021"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA ISE  \n";
  $response .= $display;
 $response .= $message;
}







 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 9 IBIONO CENTRAL 1

 
else if ($text == "031009001"){
  $response .= "END Your polling unit is  VILLAGE HALL, IBIATUK \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009002"){
  $response .= "END Your polling unit is VILLAGE HALL, USUK NTAN EKERE  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009003"){
  $response .= "END Your polling unit is  VILLAGE HALL, UDIAHA NTAN \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABA  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009005"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKU IKOT OKU  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKPENE  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKPENE  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009008"){
  $response .= "END Your polling unit is I.C.H.S EDEM URUA  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009009"){
  $response .= "END Your polling unit is VILLAGE HALL, ITU ANDEM  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDUNG  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO ASA  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009012"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, NDON NDEM IKOT OBO \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009013"){
  $response .= "END Your polling unit is VILLAGE HALL IKOT OBIO AKPAN  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009014"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ISO  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IDEM NTAN  \n";
    $response .= $display;
 $response .= $message;
}

else if ($text == "031009016"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UKPONG  \n";
    $response .= $display;
 $response .= $message;
}






 //STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 10 IBIONO CENTRAL 11

else if ($text == "031010016"){
  $response .= "END Your polling unit is  W.D.C IKPA IKOT UNIEKE  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010016"){
  $response .= "END Your polling unit is  VILLAGE HALL, OKO ITA  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010016"){
  $response .= "END Your polling unit is   PRY SCH, IKOT ESSIET \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010016"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT EDUNG  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010016"){
  $response .= "END Your polling unit is  PRY SCH, ITUKHE  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010016"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT ANTIA  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010007"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT UBA  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010008"){
  $response .= "END Your polling unit is  PRY SCH, IKOT INYANG  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010009"){
  $response .= "END Your polling unit is  PRY SCH, IKOT EKPEYONG  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010010"){
  $response .= "END Your polling unit is  PRY SCH, IKOT UNEKE  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010011"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT UDO EFUM  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010012"){
  $response .= "END Your polling unit is   VILLAGE HALL, IKOT UKANA \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010013"){
  $response .= "END Your polling unit is  PRY SCH, OSUK NTAN  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010014"){
  $response .= "END Your polling unit is  VILLAGE HALL, EKPUK  \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031010015"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT UDOM  \n";
    $response .= $display;
 $response .= $message;
}





//STARTING FROM THE 10TH LOCAL GOVT. IBIONO IBOM
 //WARD 11 IBIONO IKPANYA

 else if ($text == "031011001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ADAHA \n";
    $response .= $display;
  $response .= $message;
}
else if ($text == "031011002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBAK UNO \n";
    $response .= $display;
    $response .= $message;
}
else if ($text == "031011003"){
  $response .= "END Your polling unit is PRY SCH, ESIT IKPANYA \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031011004"){
  $response .= "END Your polling unit is VILLAGE HALL, AKANI OBIO \n";
    $response .= $display;
 $response .= $message;
}
else if ($text == "031011005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ABURU \n";
    $response .= $display;
 $response .= $message;
}
//CONCLUDED FOR IBIONO IBOM LOCAL GOVT.









//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 01 URBAN 1

 else if ($text == "031101001"){
  $response .= "END Your polling unit is PRY SCH, URUA INYANG\n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101002"){
  $response .= "END Your polling unit is VILLAGE SQUARE NTO MFONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101003"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT AKATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101004"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT ABARA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101005"){
  $response .= "END Your polling unit is VILLAGE SQUARE OYO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101006"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT INWANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101007"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT ESEDEN\n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031101008"){
  $response .= "END Your polling unit is 
  COUNSIL SECRETARIAT, URUA IYANG \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 02 URBAN 11

 else if ($text == "031102001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EFEN IBOM \n";
    $response .= $display;
    $response .= $message;
}
else if ($text == "031102002"){
  $response .= "END Your polling unit is CONVENT SCH, EFEN IBOM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031102003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDONYAH \n";
    $response .= $display;
    $response .= $message;
}
else if ($text == "031102004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKORO I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031102005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKORO II \n";
    $response .= $display;
    $response .= $message;
}
else if ($text == "031102006"){
  $response .= "END Your polling unit is VILLAGE SQUARE IKOT UKANG   \n";
    $response .= $display;
    $response .= $message;
}







//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 03 ACHAN IKA

 else if ($text == "031103001"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, ACHAN  \n";
    $response .= $display;
    $response .= $message;
}
else if ($text == "031103002"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT OSUKPONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031103003"){
  $response .= "END Your polling unit is  PRY SCH, IKOT OSUKPONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031103004"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT NTIA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031103005"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, ITUNG ACHAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031103006"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT EDEM INYANG  \n";
    $response .= $display;
    $response .=$message;
}








//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 04 ACHAN 11

else if ($text == "031104001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OKORATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031104002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN OFFIONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031104003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO UDOAFA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031104004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO OTUKO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031104005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IDIONG ETOR \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031104006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031104007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 05 ACHAN 111

 else if ($text == "031105001"){
  $response .= "END Your polling unit is 
VILLAGE SQUARE, IKOT ESU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031105002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INYANGESE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031105003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA OFFIONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031105004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IDOMO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031105005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN OKURE \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 06 ITO 1

 else if ($text == "031106001"){
  $response .= "END Your polling unit is 
VILLAGE SQUARE, ITO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031106002"){
  $response .= "END Your polling unit is COURT HALL, ITO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031106003"){
  $response .= "END Your polling unit is PRY SCH, IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031106004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITAK NTO USOR \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031106005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO URUA ITAK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031106006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKONG \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 07 ITO 11

 else if ($text == "031107001"){
  $response .= "END Your polling unit is PRY SCH, UDI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107002"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, UDI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OSOM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107004"){
  $response .= "END Your polling unit is  PRY SCH, IKOT AKPAN ANWA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN ANWA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ANWA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO UDO ETTE  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031107008"){
  $response .= "END Your polling unit is COMP. SEC SCH IKOT AKPAN ANWA  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 08 ITO 111

 else if ($text == "031108001"){
  $response .= "END Your polling unit is PRY SCH, NTO UDOENWAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031108002"){
  $response .= "END Your polling unit is VILLAGE HALL, OTOMO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031108003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031108004"){
  $response .= "END Your polling unit is PRY SCH, IKOT EBENWANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031108005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031108006"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, ITAK IKOT ONONO \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 09 ODORO 1

 else if ($text == "031109001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO USOH  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031109002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO AKPAN ETIM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031109003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ONONO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031109004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NTO UKPONG NTIA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031109005"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, NTO URUA ODORO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031109006"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT INYANG ODORO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031109007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ONONO  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 11TH LOCAL GOVT. IKA
 //WARD 10 ODORO 11

 else if ($text == "031110001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDIM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031110002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETUKUDO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031110003"){
  $response .= "END Your polling unit is TECH. SCH, IKOT UDO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031110004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IKARA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031110005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ABIADOK  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031110006"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT ESSIEN \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 01 IKONO MIDDLE 1

 else if ($text == "031201001"){
  $response .= "END Your polling unit is CUSTOMARY COURT, NUNG UKIM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201002"){
  $response .= "END Your polling unit is SCH OF REM. STUDIES, NUNG UKIM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201003"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDOM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OKORIE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201006"){
  $response .= "END Your polling unit is G/S IKOT ETEFIA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201007"){
  $response .= "END Your polling unit is G/S MBIAFUN NKWONO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201008"){
  $response .= "END Your polling unit is VILLAGE HALL, NDIYA ETOK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAETOK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031201010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABIA \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 02 IKONO MIDDLE 11

 else if ($text == "031202001"){
  $response .= "END Your polling unit is VILLAGE HALL, ASANTING IKOT EFREDIE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202002"){
  $response .= "END Your polling unit is VILLAGE HALL, ASANTING ATAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202003"){
  $response .= "END Your polling unit is VILLAGE HALL, ASANTING NKWONO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202004"){
  $response .= "END Your polling unit is G/S ITON ODORO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202005"){
  $response .= "END Your polling unit is WOMEN DEV. CENTRE, ITAK IKOT AKPANDEM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202006"){
  $response .= "END Your polling unit is CIVIC CENTRE, ODUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202007"){
  $response .= "END Your polling unit is METH. SCH, MBIOK IKOT ODUNG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202008"){
  $response .= "END Your polling unit is METH. SCH, MBIOK IKOT ODUNG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202009"){
  $response .= "END Your polling unit is VILLAGE HALL, ETOK ITON \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031202010"){
  $response .= "END Your polling unit is VILLAGE HALL, ITAK IKOT AKPANDEM \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 03 IKONO MIDDLE 111

 else if ($text == "031203001"){
  $response .= "END Your polling unit is COUNCIL HALL, IBIAKU NTOK OKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203002"){
  $response .= "END Your polling unit is COUNCIL HALL, IBIAKU NTOK OKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203003"){
  $response .= "END Your polling unit is MARKET SQUARE, IBIAKU NTOK OKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203004"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKU ATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203005"){
  $response .= "END Your polling unit is G/S IBIAKU IKOT UKANA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203006"){
  $response .= "END Your polling unit is VILLAGE HALL, NDIYA MFIA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203007"){
  $response .= "END Your polling unit is URBAN SEC SCH IBIAKU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIAOBONG EKPENE OTON \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031203009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIAOBONG EKPENE OTON \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 04 IKONO MIDDLE IV
 
 else if ($text == "031204001"){
  $response .= "END Your polling unit is UNITY HIGH SCH, MBIABONG UKAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN NTIM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204003"){
  $response .= "END Your polling unit is LUTH SCH, ITAK IKOT AKAP  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EDEM UDO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIABONG IKOT ETEFIA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT MBIAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204007"){
  $response .= "END Your polling unit is  PRY SCH, IBESIKPO/MBIABONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204008"){
  $response .= "END Your polling unit is VILLAGE HALL, MBIOKU IKOT ABASI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIAFUN IKOT NTIA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031204010"){
  $response .= "END Your polling unit is PRY SCH MBIABONG UKAN IKOT NUNG \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 05 IKONO IKONO SOUTH

 else if ($text == "031205001"){
  $response .= "END Your polling unit is METH SCH, UKPOM IKOT NTUEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031205002"){
  $response .= "END Your polling unit is LUTH. SCH, USUNG UBOM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031205003"){
  $response .= "END Your polling unit is METH CENTRAL SCH, UKPOM ANWANA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031205004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAKPAN \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ETIM \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205006"){
  $response .= "END Your polling unit is LUTH SCH UKPOM ANWANA \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ANWANA ASANGA USUNG \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ANWANA ABASI \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO ESSIEN \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205010"){
  $response .= "END Your polling unit is LUTH. SCH EKPENE INUEN \n";
    $response .= $display;
    $response .=$message;
} else if ($text == "031205011"){
  $response .= "END Your polling unit is COMP. SEC SCH, UKPOM \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205012"){
  $response .= "END Your polling unit is COMP. SEC SCH, UKPOM \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205013"){
  $response .= "END Your polling unit is LUTH SCH UKPOM ITA \n";
    $response .= $display;
    $response .=$message;
} else if ($text == "031205014"){
  $response .= "END Your polling unit is VILLAGE HALL, EKPENE OBOM ATAI ESSIEN \n";
    $response .= $display;
    $response .=$message;
} else if ($text == "031205015"){
  $response .= "END Your polling unit is VILLAGE HALL, IBAKESI IKOT EDEM UDO \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205016"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKAN \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205017"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OMONYON \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205018"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG EDUO \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205019"){
  $response .= "END Your polling unit is LUTH SCH IKOT NYOH \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205020"){
  $response .= "END Your polling unit is VILLAGE HALL, UKPOM UNYA \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205021"){
  $response .= "END Your polling unit is VILLAGE HALL, MBIAOBONG IKOT NTIA \n";
    $response .= $display;
    $response .=$message;
}
 else if ($text == "031205022"){
  $response .= "END Your polling unit is ST PATRICKS' SCH, IKOT ETTE UDOE \n";
    $response .= $display;
    $response .=$message;
}


//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 06 NKWOT 1

  else if ($text == "031206001"){
  $response .= "END Your polling unit is 
VILLAGE SQUARE, OKPOYO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206002"){
  $response .= "END Your polling unit is 
VILLAGE SQUARE, IKOT ESSIEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206003"){
  $response .= "END Your polling unit is ST MARY'S SCH, IKOT NSEYEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206004"){
  $response .= "END Your polling unit is ST MARY'S SCH, IKOT NSEYEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NSEYEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206006"){
  $response .= "END Your polling unit is XTIAN SCH, NUNG IMO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NUNG INUEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206008"){
  $response .= "END Your polling unit is VILLAGE HALL, ABAK ODUOT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN INYANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206010"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT UDO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO ATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO ATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABIA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IDOMO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NYA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206016"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NKWO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031206017"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UMO \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 07 NKWOT 11

 else if ($text == "031207001"){
  $response .= "END Your polling unit is VILLAGE HALL, MMONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207002"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT ETTE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UMO ESSIEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207004"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPA ISIAK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBOK IDEM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207006"){
  $response .= "END Your polling unit is PRY SCH, NKWOT NKO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207007"){
  $response .= "END Your polling unit is MARKET SQUARE, EDEM EDET NUNG ENIE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EDEM EDET NUNG EYIO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITON IKOT ITO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031207010"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT OKPO \n";
    $response .= $display;
    $response .=$message;
} 

//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 08 NKWOT 11

 else if ($text == "031208001"){
  $response .= "END Your polling unit is URUA ETO KIET HALL \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208002"){
  $response .= "END Your polling unit is PRY SCH, IKOT IDAHA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "0312080033"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKU IKOT EDET \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO EDI \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ENUA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208006"){
  $response .= "END Your polling unit is VILLAGE HALL, NKARA OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208007"){
  $response .= "END Your polling unit is VILLAGE HALL, NKARA OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208008"){
  $response .= "END Your polling unit is GROUP SCH, IKOT AKPAYARA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN NDIYA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208010"){
  $response .= "END Your polling unit is LUTH SCH, IKOT AKPAEDOK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208011"){
  $response .= "END Your polling unit is LUTH SCH, IKOT AKPAEDOK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208012"){
  $response .= "END Your polling unit is METH SCH IKOT AYAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA EDT NDIYA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208014"){
  $response .= "END Your polling unit is METH. SCH IKOT ODU \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA IDEM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208016"){
  $response .= "END Your polling unit is CUSTOMARY COURT, IBOK NDIYA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031208017"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA EKPUK \n";
    $response .= $display;
    $response .=$message;
} 







//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 09 NDIYA/IKOT IDANA

 else if ($text == "031209001"){
  $response .= "END Your polling unit is URUA ETO KIET HALL \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209002"){
  $response .= "END Your polling unit is PRY SCH, IKOT IDAHA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209003"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKU IKOT EDET \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO EDI \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ENUA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209006"){
  $response .= "END Your polling unit is VILLAGE HALL, NKARA OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209007"){
  $response .= "END Your polling unit is VILLAGE HALL, NKARA OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209008"){
  $response .= "END Your polling unit is GROUP SCH, IKOT AKPAYARA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN NDIYA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209010"){
  $response .= "END Your polling unit is LUTH SCH, IKOT AKPAEDOK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209011"){
  $response .= "END Your polling unit is LUTH SCH, IKOT AKPAEDOK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209012"){
  $response .= "END Your polling unit is METH SCH IKOT AYAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA EDT NDIYA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209014"){
  $response .= "END Your polling unit is METH. SCH IKOT ODU \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209015"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPA IDEM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209016"){
  $response .= "END Your polling unit is CUSTOMARY COURT, IBOK NDIYA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031209017"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA EKPUK \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 10 NDIYA/IKOT IDANA

 else if ($text == "031210001"){ 
  $response .= "END Your polling unit is ST JOSEPH'S SCH, UYO OBIO\n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210002"){
  $response .= "END Your polling unit is COURT HALL, UYO OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210003"){
  $response .= "END Your polling unit is VILLAGE HALL,USUK EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210004"){
  $response .= "END Your polling unit is  BUS STOP, UDOK ATAI\n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210005"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT AKPAN UDO\n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210006"){
  $response .= "END Your polling unit is G/S , AKA EKPEME \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210007"){
  $response .= "END Your polling unit is  G/S , UYO AFAHA NKAN\n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210008"){
  $response .= "END Your polling unit is MARKET SQUARE, EDIENE ATAI\n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210009"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210010"){
  $response .= "END Your polling unit is EDIENE COMM SEC SCH, AKA EKPEM/IKOT AYAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210011"){
  $response .= "END Your polling unit is 
VILLAGE HALL, IKOT OKUBO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO ENANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031210014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDIENE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 11 EDIENE 1

 else if ($text == "031211001"){
  $response .= "END Your polling unit is ST JOSEPH'S SCH, UYO OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211002"){
  $response .= "END Your polling unit is COURT HALL, UYO OBIO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211003"){
  $response .= "END Your polling unit is VILLAGE HALL,USUK EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211004"){
  $response .= "END Your polling unit is BUS STOP, UDOK ATAI \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPAN UDO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211006"){
  $response .= "END Your polling unit is G/S , AKA EKPEME \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211007"){
  $response .= "END Your polling unit is G/S , UYO AFAHA NKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211008"){
  $response .= "END Your polling unit is MARKET SQUARE, EDIENE ATAI \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211009"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211010"){
  $response .= "END Your polling unit is EDIENE COMM SEC SCH, AKA EKPEM/IKOT AYAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OKUBO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO ENANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211013"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031211014"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EDIENE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 12 EDIENE 11

 else if ($text == "031212001"){
  $response .= "END Your polling unit is G/S, OBIO EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212002"){
  $response .= "END Your polling unit is SEC SCH, USUK EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ANTEM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212004"){
  $response .= "END Your polling unit is G/S, EDEM EYERE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212005"){
  $response .= "END Your polling unit is VILLAGE HALL, EDEM EYERE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAN IBIANANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212007"){
  $response .= "END Your polling unit is VILLAGE HALL, OKOPEDI IBIANANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212008"){
  $response .= "END Your polling unit is VILLAGE HALL, EKPENE EDIENE IKOT NTIA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETIP EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ONWON \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212011"){
  $response .= "END Your polling unit is P.C.N EKPENE, EDIENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212012"){
  $response .= "END Your polling unit is VILLAGE HALL EKPENE, EDIENE MBAT \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031212013"){
  $response .= "END Your polling unit is VILLAGE HALL, IDORO EDIENE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 12TH LOCAL GOVT. IKONO
 //WARD 13 ITAK

 else if ($text == "031213001"){
  $response .= "END Your polling unit is 
G/S, AFAHA OBIO ENWANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213002"){
  $response .= "END Your polling unit is HOLY CHILD SCH, NUNG UDOE, ITAK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213003"){
  $response .= "END Your polling unit is XTIAN SCH, OBIO ITAK  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213004"){
  $response .= "END Your polling unit is 
ST AUGUSTINE'S SCH, UKPAP ITAK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213005"){
  $response .= "END Your polling unit is VILLAGE HALL, AFAHA ITAK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213006"){
  $response .= "END Your polling unit is VILLAGE HALL, UKPAP EKPAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213007"){
  $response .= "END Your polling unit isVILLAGE HALL, IKOT EDUEK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDOFIA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213009"){
  $response .= "END Your polling unit isPRY SCH, IKOT EFRE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213010"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG OKORO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213011"){
  $response .= "END Your polling unit is VILLAGE HALL, EKPEMIONG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031213012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKPAP IKOT IDANG \n";
    $response .= $display;
    $response .=$message;
} 







//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 01 IKPA IBEKWE 1

 else if ($text == "031301001"){
  $response .= "END Your polling unit is SEC SCH, IBEKWE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031301002"){
  $response .= "END Your polling unit is SEC SCH, IBEKWE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031301003"){
  $response .= "END Your polling unit is SALVATION ARMY PRY SCH, IBEKWE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031301004"){
  $response .= "END Your polling unit isST. GEORGE'S PRY SCH, IBEKWE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031301005"){
  $response .= "END Your polling unit is ST. THERESA'S PRY SCH, IBEKWE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031301006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UTA EWA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031301007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 02 IKPA IBEKWE 11

 else if ($text == "031302001"){
  $response .= "END Your polling unit is METH. CENTRAL SCH, ETE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031302002"){
  $response .= "END Your polling unit is VILLAGE HALL, ABIARAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031302003"){
  $response .= "END Your polling unit is  PRY SCH, OKPOTO ETE\n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031302004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBIO AKAMA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031302005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKPUK INANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031302006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ESSIEN ETUK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031302007"){
  $response .= "END Your polling unit is ABASUTE VILLAGE SQUARE, ETE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 03 IKPA UKPUM ETE 1

 else if ($text == "031303001"){
  $response .= "END Your polling unit is METH. CENTRAL SCH, ETE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031303002"){
  $response .= "END Your polling unit is VILLAGE HALL, ABIARAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031303003"){
  $response .= "END Your polling unit is PRY SCH, OKPOTO ETE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031303004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, OBIO AKAMA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031303005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKPUK INANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031303006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ESSIEN ETUK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031303007"){
  $response .= "END Your polling unit is ABASUTE VILLAGE SQUARE, ETE \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 04 IKPA UKPUM ETE 11

 else if ($text == "031304001"){
  $response .= "END Your polling unit is METH PRY SCH, IKWA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031304002"){
  $response .= "END Your polling unit is CUSTOMARY COURT HALL, IKOT AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031304003"){
  $response .= "END Your polling unit is PRY SCH, OKWO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031304004"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN UDO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031304005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETENGE ETE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031304006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATAHA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031304007"){
  $response .= "END Your polling unit is PRY SCH, NDA UKU \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 05 IKPA UKPUM OKON

 else if ($text == "031305001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UKPONG EKWERE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305002"){
  $response .= "END Your polling unit is PRY SCH, OBOM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UDO MBON \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305004"){
  $response .= "END Your polling unit is PRY SCH, IMAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATA UDO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UMIANG OKON \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031305008"){
  $response .= "END Your polling unit is CENTRAL VILLAGE SQUARE, OKON \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 06 EDEMAYA 1

 else if ($text == "031306001"){
  $response .= "END Your polling unit is 
PRY SCH, NO 1 UKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031306002"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031306003"){
  $response .= "END Your polling unit is PRY SCH, IKOT NDIEN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031306004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBOROENYIN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031306005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NDIEN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031306006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAESSIEM UKAN \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 07 EDEMAYA 11

 else if ($text == "031307001"){
  $response .= "END Your polling unit is VILLAGE HALL, EDIDUO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031307002"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETENGE NDON \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031307003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IYIRE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031307004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT USOIDE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031307005"){
  $response .= "END Your polling unit is PRY SCH, IKOT UBO AKAMA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031307006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EYENIMO \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 08 EDEMAYA 111

 else if ($text == "031308001"){
  $response .= "END Your polling unit is PRY SCH, IKOT OKPOR \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031308002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EFRE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031308003"){
  $response .= "END Your polling unit is PRY SCH, ATAN IKPE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031308004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKARA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031308005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBORO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031308006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO AKPAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031308007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO EKPE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 09 IKPA NUNG ASANG 1

 else if ($text == "031309001"){
  $response .= "END Your polling unit is PRY SCH, MISSION RD, ESSENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT IMOH \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309003"){
  $response .= "END Your polling unit is PRY SCH, NDUK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ESSENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ENIN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309006"){
  $response .= "END Your polling unit is CIVIC CENTRE, OWOK OTU-ESSENE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESSANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AKPABOM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309009"){
  $response .= "END Your polling unit is CIVIC CENTRE, OWOK ESEN 111 \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031309010"){
  $response .= "END Your polling unit is REGINA COELI SEC SCH, ESSENE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 13TH LOCAL GOVT. IKOT ABASI
 //WARD 10 IKPA NUNG ASANG 11

 else if ($text == "031310001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAIDIANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310002"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT USOP \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSUDU \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310004"){
  $response .= "END Your polling unit is PRY SCH, NDAR EKOM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIOKO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UBO EKPE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ATA UDO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310008"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ETEFIA \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031310009"){
  $response .= "END Your polling unit is PRY SCH, IKOT USOP \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 01 IKOT EKPENE 1

 else if ($text == "031401001"){
  $response .= "END Your polling unit is IKOT EKPENE, CIVIC CENTRE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401002"){
  $response .= "END Your polling unit is VILLAGE HALL, ATTA ESIEN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401003"){
  $response .= "END Your polling unit is PRY SCH, ESA ATTAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401004"){
  $response .= "END Your polling unit is GOVT SCH, NO 1 URBAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401005"){
  $response .= "END Your polling unit is PRY SCH, UTU EDEM USUNG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETE UTU EDEM USUNG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401007"){
  $response .= "END Your polling unit is COP/HALL, UTU EDEM USUNG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401008"){
  $response .= "END Your polling unit is VILLAGE HALL, UTU IKPE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401009"){
  $response .= "END Your polling unit is VILLAGE HALL, ABIAKPO EDEM IDIM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401010"){
  $response .= "END Your polling unit is CUSTOMARY COURT, IKOT UDO OFFIONG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031401011"){
  $response .= "END Your polling unit is TOWN HALL NTO UMO ETOK \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 02 IKOT EKPENE 11

 else if ($text == "031402001"){
  $response .= "END Your polling unit is PRY SCH, OLD ITU ROAD \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402002"){
  $response .= "END Your polling unit is CIVIC CENTRE, URUK USO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402003"){
  $response .= "END Your polling unit is IDEAL INT. NUR. SCH \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402004"){
  $response .= "END Your polling unit is HOLY CHILD PRY SCH, SANNI OGUN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402005"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKPAN AKANAWAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402006"){
  $response .= "END Your polling unit is PRY SCH, IBIAKPAN NTO AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402007"){
  $response .= "END Your polling unit is MARKET SQUARE, IBIAKPAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402008"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIAKPAN NTO OBIO EKERE \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031402009"){
  $response .= "END Your polling unit is FED. COLLEGE GATE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 03 IKOT EKPENE 111

 else if ($text == "031403001"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT ESIEN ABIAKPO \n";
    $response .= $display;
    $response .=$message;
} 
 else if ($text == "031403002"){
  $response .= "END Your polling unit is ST ANNE'S PRY SCH, ABIAKPO IKOT ESSIEN  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031403003"){
  $response .= "END Your polling unit is METH. PRY SCH, ABIAKPO IKOT ESSIEN  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031403004"){
  $response .= "END Your polling unit is MARKET SQUARE, URUA OTO  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031403005"){
  $response .= "END Your polling unit is PRY SCH, IKOT O T U  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031403006"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT O T U \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031403007"){
  $response .= "END Your polling unit is  VILLAGE HALL, ITAK IKOT UDO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031403008"){
  $response .= "END Your polling unit is  TOWN HALL, AFAHA ENWANG ITAK IKOT UDO \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 04 IKOT EKPENE 1V

 else if ($text == "031404001"){
  $response .= "END Your polling unit is 
VILLAGE HALL, UTU IKOT EKPEYONG  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031404002"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, UTU IKOT EKPEYONG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031404003"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, UTU IKOT ESIEN NDEM EKPOT \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031404004"){
  $response .= "END Your polling unit is  PRY SCH, ABAK OKO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031404005"){
  $response .= "END Your polling unit is  VILLAGE HALL, ABAK OKO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031404006"){
  $response .= "END Your polling unit is  PRY SCH, NSIAK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031404007"){
  $response .= "END Your polling unit is  VILLAGE HALL, NSIAK \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 05 IKOT EKPENE V

 else if ($text == "031405001"){
  $response .= "END Your polling unit is LUTH HIGH SCH GATE  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031405002"){
  $response .= "END Your polling unit is PRY SCH, EKOI  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031405003"){
  $response .= "END Your polling unit is  PRY SCH, EKOI \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031405004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ANTIA  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031405005"){
  $response .= "END Your polling unit is PRISON CLUB  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031405006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ABA ROAD (SECTOR 56)  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031405007"){
  $response .= "END Your polling unit is  MIN. OF WORKS GATE \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 06 IKOT EKPENE V1

 else if ($text == "031406001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NKAP IKOT OBIO EBOK \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406002"){
  $response .= "END Your polling unit is ST ANNE'S PRY SCH, IFUHO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406003"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IFUHO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406004"){
  $response .= "END Your polling unit is COMM. HALL, IFUHO \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406005"){
  $response .= "END Your polling unit is SEC SCH, IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406007"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031406008"){
  $response .= "END Your polling unit is PRY SCH , IKOT INYANG \n";
    $response .= $display;
    $response .=$message;
} 





//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 07 IKOT EKPENE V11

 else if ($text == "031407001"){
  $response .= "END Your polling unit is PRY SCH, IBONG IKOT AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407002"){
  $response .= "END Your polling unit is VILLAGE HALL , IBONG IKOT AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBONG IKOT AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407004"){
  $response .= "END Your polling unit is TOWN HALL, NTO UDOM, IBONG IKOT AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UMOREN, IBONG IKOT AKAN \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407006"){
  $response .= "END Your polling unit is TECH SCH, IKOT ABIA IDEM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407007"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ABIA IDEM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407008"){
  $response .= "END Your polling unit is PRY SCH , IKOT ABIA IDEM \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407009"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBIO OKPON \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407010"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT ENWANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ENWANG \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031407012"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOE \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 08 IKOT EKPENE V111

 else if ($text == "031408001"){
  $response .= "END Your polling unit is TOWN HALL, IKOT AKPAN ABIA  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPAN ABIA  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408003"){
  $response .= "END Your polling unit is PRY SCH, IKOT OSURUA  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408004"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT OSURUA  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408005"){
  $response .= "END Your polling unit is POLYTECNIC, IKOT OSURUA  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408006"){
  $response .= "END Your polling unit is ST JOSEPH MA MISSIONARY  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408007"){
  $response .= "END Your polling unit is VILLAGE HALL, ABIAKPO NTAK INYANG  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408008"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UBO  \n";
    $response .= $display;
    $response .=$message;
} 
else if ($text == "031408009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UBO  \n";
    $response .= $display;
    $response .=$message;
} 






//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 09 IKOT EKPENE IX

 else if ($text == "031409001"){
    $response .= "END Your polling unit is  MARKET SQUARE, NYARENYIN NTONG UNO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409002"){
    $response .= "END Your polling unit is COP HALL, NYARENYIN NTONG UNO  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409003"){
    $response .= "END Your polling unit is  TOWN HALL, NYARENYIN IKOT NKPO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409004"){
    $response .= "END Your polling unit is OPEN SPACE, NYARENYIN IKOT NKPO  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409005"){
    $response .= "END Your polling unit is  MARKET SQUARE, NYARENYIN IKOT NKPO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409006"){
    $response .= "END Your polling unit is  IKOT OBIO UDOM HALL \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409007"){
    $response .= "END Your polling unit is VILLAGE SQUARE, ANWA OSOM  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409008"){
    $response .= "END Your polling unit is TOWN HALL, IKOT UDO OSUNG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409009"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO OSUNG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409010"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT OFFIONG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031409011"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT OTO  \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 10 IKOT EKPENE X

 else if ($text == "031410001"){
    $response .= "END Your polling unit is VILLAGE HALL, ABIAKPO IKOT INAM  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031410002"){
    $response .= "END Your polling unit is  PRY SCH, NTO OBIO EKONG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031410003"){
    $response .= "END Your polling unit is VILLAGE SQUARE, NTO OBIO EKONG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031410004"){
    $response .= "END Your polling unit is ANWA UKO NTO OBIO EKONG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031410005"){
    $response .= "END Your polling unit is  VILLAGE HALL, ATA ESIEN MBIASO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031410006"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, NTO OBODOM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031410007"){
    $response .= "END Your polling unit is  TOWN HALL, IKOT ESA UDO \n";
      $response .= $display;
      $response .=$message;
 }





 
//STARTING FROM THE 14TH LOCAL GOVT. IKOT EKPENE
 //WARD 11 IKOT EKPENE XI

 else if ($text == "031411001"){
    $response .= "END Your polling unit is VILLAGE HALL, ADATAK  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411002"){
    $response .= "END Your polling unit is TOWN HALL, ADATAK  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411003"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, IKOTUDO OSUNG IKOT EDIET \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411004"){
    $response .= "END Your polling unit is TOWN HALL, IKOT EDIET \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411005"){
    $response .= "END Your polling unit is  TOWN HALL, ABAK AFIA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411006"){
    $response .= "END Your polling unit is NTO EKPORO HALL, ABAK AFIA  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411007"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG OTORO  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411008"){
    $response .= "END Your polling unit is  PRY SCH, IKTO OBONG OTORO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411009"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT ATASUNG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411010"){
    $response .= "END Your polling unit is COMM SEC SCH, URUA OBO  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411011"){
    $response .= "END Your polling unit is VILLAGE SQUARE, ABIAKPO IKOT OBIO NTING  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411012"){
    $response .= "END Your polling unit is  PRY SCH, ABIAKPO IKOT NTUEN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411013"){
    $response .= "END Your polling unit is  VILLAGE HALL, ABIAKPO IKOT NTUEN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411014"){
    $response .= "END Your polling unit is  TOWN HALL, ABIAKPO IKOT IKOT UDO OBORO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031411015"){
    $response .= "END Your polling unit is VILLAGE SQUARE, ABIAKPO IKOT IKOT UDO OBORO  \n";
      $response .= $display;
      $response .=$message;
 }




 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 01 IKPE 1

 else if ($text == "031501001"){
    $response .= "END Your polling unit is  PRY SCH, ODORO IKPE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501002"){
    $response .= "END Your polling unit is PRY SCH, ONIONG ONO IKPE  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501003"){
    $response .= "END Your polling unit is PRY SCH, USUNG ITA/NSIT IKPE  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501004"){
    $response .= "END Your polling unit is  PRY SCH, IBAM OBOT ENEN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501005"){
    $response .= "END Your polling unit is PRY SCH, AKPAYAK IKPE  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501006"){
    $response .= "END Your polling unit is VILLAGE HALL, MBIABET IKOT EFA  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501007"){
    $response .= "END Your polling unit is PRY SCH, NDOT IKPE  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501008"){
    $response .= "END Your polling unit is PRY SCH, MBIABET IKOT UDO  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501009"){
    $response .= "END Your polling unit is  VILLAGE HALL, MBIABET EYEHEDIA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501010"){
    $response .= "END Your polling unit is VILLAGE/COUNCIL HALL, IKOT OTOR/OTUNG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501011"){
    $response .= "END Your polling unit is  ST FRANCIS SCH, MBIABET IKOT ESIYERE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501012"){
    $response .= "END Your polling unit is ST JAMES PRY SCH, IBAM EDET/IKOT OSOM  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501013"){
    $response .= "END Your polling unit is PRY SCH. NNA ENIN  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031501014"){
    $response .= "END Your polling unit is ATAN VOILLAGE HALL, IBAM EDET  \n";
      $response .= $display;
      $response .=$message;
 }
 





 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 02 IKPE II

 else if ($text == "031502001"){
    $response .= "END Your polling unit is  PRY SCH, IKPE IKOT NKON \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502002"){
    $response .= "END Your polling unit is  VILLAGE HALL , IKPE IKOT NKON \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502003"){
    $response .= "END Your polling unit is  GOVT. SCH, NKANA/ITIE IKPE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502004"){
    $response .= "END Your polling unit is PRY SCH, EKOI ATAN UBOM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502005"){
    $response .= "END Your polling unit is PRY SCH, EKOI IKOT ABIA/IKOT OFON \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502006"){
    $response .= "END Your polling unit is  VILLAGE HALL, EKOI EDEM OBOM/IKOT EBOM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502007"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT UDOFE/IKOT NYOHO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502008"){
    $response .= "END Your polling unit is VILLAGE HALL, IBAM UKOT \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502009"){
    $response .= "END Your polling unit is PRY SCH, IBIONO EWURO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502010"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UKPONG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031502011"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, IBIONO EURO \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 03 ITU MBONUSO

 else if ($text == "031503001"){
    $response .= "END Your polling unit is PRY SCH, OGU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503001"){
    $response .= "END Your polling unit is TOWN HALL, OGU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503001"){
    $response .= "END Your polling unit is PRY SCH, IKPOROM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503001"){
    $response .= "END Your polling unit is PRY SCH, NCANA EBUA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503001"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESSIEN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503006"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NTA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503007"){
    $response .= "END Your polling unit is PRY SCH, ANANAMONG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503008"){
    $response .= "END Your polling unit is GOVT SCH, EBO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503009"){
    $response .= "END Your polling unit is SEC SCH, EBO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503010"){
    $response .= "END Your polling unit is VILLAGE HALL, OBOT NDOM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503011"){
    $response .= "END Your polling unit is TOWN HALL, MKPU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503012"){
    $response .= "END Your polling unit is VILLAGE SQUARE, EBO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031503013"){
    $response .= "END Your polling unit is TOWN HALL, NCHANA EBUA \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 04 NKARI

 else if ($text == "031504001"){
    $response .= "END Your polling unit is PRY SCH, IKOT OFRONG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031504001"){
    $response .= "END Your polling unit is ST PATRICK SCH, IBINOUSUK \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031504001"){
    $response .= "END Your polling unit is VILLAGE HALL, UBIE NKENE/IKOT AKPAN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031504001"){
    $response .= "END Your polling unit is VILLAGE HALL, IBIONO OKPORO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031504001"){
    $response .= "END Your polling unit isMETH SCH MBENTE/OBRONG/ANWAFIA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031504001"){
    $response .= "END Your polling unit is PRY SCH, IFA NKARI \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031504007"){
    $response .= "END Your polling unit is TOWN HALL, MBENTE \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 05 IWERRI

 else if ($text == "031505001"){
    $response .= "END Your polling unit is TOWN HALL, OBOTME \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031505002"){
    $response .= "END Your polling unit is TOWN HALL, IKWUEME \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031505003"){
    $response .= "END Your polling unit is VILLAGE HALL, EDEMURUA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031505004"){
    $response .= "END Your polling unit is VILLAGE HALL, UKPA OKON/NTURI \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031505005"){
    $response .= "END Your polling unit is PRY SCH, OKPOTO WITH MBIABONG \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 06 IKONO NORTH I

 else if ($text == "031506001"){
    $response .= "END Your polling unit is 
    PRY SCH, MBIAOBONG IKOT UDOFIA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506002"){
    $response .= "END Your polling unit is PRY SCH, MBIAOBONG IKOT UDOFIA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506003"){
    $response .= "END Your polling unit is VILLAGE HALL, MBIAOBONG IKOT UDO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506004"){
    $response .= "END Your polling unit is PRY SCH , MBIAOBONG IKOT UDO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506005"){
    $response .= "END Your polling unit is GOVT. SCH, MBIAOBONG IKOT ETIM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506006"){
    $response .= "END Your polling unit is PRY. SCH, MBIAOBONG MBAT \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506007"){
    $response .= "END Your polling unit is VILLAGE SQUARE , MBIAOBONG IKOT EMIANG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031506008"){
    $response .= "END Your polling unit is PRY SCH, NDIYA IKOT IMO \n";
      $response .= $display;
      $response .=$message;
 }





 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 07 IKONO NORTH II

 else if ($text == "031507001"){
    $response .= "END Your polling unit is METH PRY SCH, MBIAKPA IBAKESI  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507002"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT NYA MBIAKPA IBAKESI  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507003"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT UDO ASANG/USUK IBAKESI \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507004"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, USUK IBAKESI \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507005"){
    $response .= "END Your polling unit is METH SCH EDEM IDIM IBAKESI  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507006"){
    $response .= "END Your polling unit is VILLAGE SQUARE EDEM IDIM IBAKESI  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507007"){
    $response .= "END Your polling unit is PRY SCH, NKWOT ETOK  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031507008"){
    $response .= "END Your polling unit is PRY SCH, ASA NTING UTIT IKPE  \n";
      $response .= $display;
      $response .=$message;
 }






//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 08 IKONO NORTH III

 else if ($text == "031508001"){
    $response .= "END Your polling unit is METH SCH, MBIAFUN IKOT ABASI  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031508002"){
    $response .= "END Your polling unit is VILLAGE SQUARE, MBIAFUN UBOT OKO  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031508003"){
    $response .= "END Your polling unit is VILLAGE HALL , MBIAFUN EYEHEDIA  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031508004"){
    $response .= "END Your polling unit is METH SCH, ITAK IKOT OBIO ISE  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031508005"){
    $response .= "END Your polling unit is VILLAGE SQUARE, ITAK EDEM ESA  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031508006"){
    $response .= "END Your polling unit is METH SCH, ASATING OBOT ODOM  \n";
      $response .= $display;
      $response .=$message;
 }





 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 09 ODORO UKWOK

 else if ($text == "031509001"){
    $response .= "END Your polling unit is  VILLAGE HALL, IKOT EMEM/IKOT AWA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031509002"){
    $response .= "END Your polling unit is  VILLAGE HALL, IKOT NDEM ANWA URUA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031509003"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT UBAM/IKOT ABASI  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031509004"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT UDOATA/IKOT EDE  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031509005"){
    $response .= "END Your polling unit is PCN SCH, ABA ITIAT  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031509006"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT IDUT/IKOT INYANG  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031509007"){
    $response .= "END Your polling unit is VILLAGE HALL, IBESIKPO IKOT UDOBIA  \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 15TH LOCAL GOVT. INI
 //WARD 10 USUK UKWOK

 else if ($text == "031510001"){
    $response .= "END Your polling unit is VILLAGE HALL, IKOT OBIO ASANG/IKOT INYANG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031510002"){
    $response .= "END Your polling unit is  VILLAGE HALL, ATAN/IKOT UNO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031510003"){
    $response .= "END Your polling unit is  TOWN HALL, USUK NTATAN/IKOT UDO OBOHO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031510004"){
    $response .= "END Your polling unit is TOWN HALL, EDEM AKAI/IKOT ISE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031510005"){
    $response .= "END Your polling unit is  GOVT SCH, IKOT ATA UDO/IKOT ISE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031510006"){
    $response .= "END Your polling unit is  VILLAGE HALL, IKOT ANTIA/USUK IDIM \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031510007"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT IDEM \n";
      $response .= $display;
      $response .=$message;
 }




 
//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 01 OKU IBOKU

 else if ($text == "031601001"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ABIYAK \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601002"){
    $response .= "END Your polling unit is A/C SEC COMM SCH \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601003"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ADAKPAN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601004"){
    $response .= "END Your polling unit is TOWN HALL, IKOT EKA IKO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601005"){
    $response .= "END Your polling unit is TOWN HALL, IKOT ANTUEN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601006"){
    $response .= "END Your polling unit is TOWN HALL, IKOT ESIA \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601007"){
    $response .= "END Your polling unit is TOWN HALL, IKOT ESSIEN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601008"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NTU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601009"){
    $response .= "END Your polling unit is VILLAGE SQUARE, OKU NKA IBOKU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601010"){
    $response .= "END Your polling unit is VILLAGE SQUARE, MBARAKOM ITU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601011"){
    $response .= "END Your polling unit is CLERKS QUARTERS \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601012"){
    $response .= "END Your polling unit is HOSPITAL ROAD \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601013"){
    $response .= "END Your polling unit is VILLAGE SQUARE, ODU ITU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601014"){
    $response .= "END Your polling unit is VILLAGE SQUARE, EDEM INYANG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031601015"){
    $response .= "END Your polling unit is VILLAGE SQUARE, AKPA EKPENE OYUNG \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 02 MBIASE/AYADEHE

 else if ($text == "031602001"){
    $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT ONO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602002"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOTAKPABIO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602003"){
    $response .= "END Your polling unit is VILLAGE SQUARE, AYANATE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602004"){
    $response .= "END Your polling unit is VILLAGE SQUARE, NYA ANATANG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602005"){
    $response .= "END Your polling unit is TOWN HALL, ETEHENTAN \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602006"){
    $response .= "END Your polling unit is TOWN HALL, EFIK IBUNO \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602007"){
    $response .= "END Your polling unit is TOWN HALL, IKOT OFFIONG \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602008"){
    $response .= "END Your polling unit is VILLAGE HALL, MKPANARUK \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602009"){
    $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTU \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602010"){
    $response .= "END Your polling unit is VILLAGE SQUARE, MBIABO EDERE \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602011"){
    $response .= "END Your polling unit is EKONG SETTLEMENT \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602012"){
    $response .= "END Your polling unit is VILLAGE SQUARE, ETON ANI \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602013"){
    $response .= "END Your polling unit is VILLAGE SQUARE, OFFIONG ANI \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031602014"){
    $response .= "END Your polling unit is VILLAGE SQUARE, OKONO \n";
      $response .= $display;
      $response .=$message;
 }






 
//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 03 EAST ITAM 1

 else if ($text == "031603001"){
    $response .= "END Your polling unit is TOWN HALL, ODIOK  \n";
      $response .= $display;
      $response .=$message;
 }
 else if ($text == "031603002"){
  $response .= "END Your polling unit is  TOWN HALL, MBIABONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031603003"){
  $response .= "END Your polling unit is  TOWN HALL, EFI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031603004"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT ANSE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031603005"){
  $response .= "END Your polling unit is TOWN HALL, IBIAKU IKOT OBONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031603006"){
  $response .= "END Your polling unit is PRY SCH , IBIAKU IKOT OBONG  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 04 EAST ITAM II

 else if ($text == "031604001"){
  $response .= "END Your polling unit is PRY SCH, EKIRITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604002"){
  $response .= "END Your polling unit is PRY SCH, EKIRITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAI EKIRITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604004"){
  $response .= "END Your polling unit is AFE ATAI IBIATOK  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604005"){
  $response .= "END Your polling unit is PRY SCH, MBIATOK  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604006"){
  $response .= "END Your polling unit is PRY SCH, MBIATOK (1)  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604007"){
  $response .= "END Your polling unit is TOWN HALL, UYO ITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604008"){
  $response .= "END Your polling unit is TOWN HALL, IKOT IKONO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031604009"){
  $response .= "END Your polling unit is TOWN HALL, AKON ITAM  \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 05 EAST ITAM III

 else if ($text == "031605001"){
  $response .= "END Your polling unit is PRY SCH, OBIO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031605002"){
  $response .= "END Your polling unit is  SEC SCH, MBAK OBIO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031605003"){
  $response .= "END Your polling unit is PRY SCH, IKOT ANDEM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031605004"){
  $response .= "END Your polling unit is TOWN HALL, OBONG ITAM  \n";
    $response .= $display;
    $response .=$message;
}#
else if ($text == "031605005"){
  $response .= "END Your polling unit is TOWN HALL, OBONG ITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031605006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT USO AKPAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031605007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKIM ITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031605008"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UKAP  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 06 EAST ITAM IV

 else if ($text == "031606001"){
  $response .= "END Your polling unit is CO-OPERATIVE HALL, IKOT ANIE  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031606002"){
  $response .= "END Your polling unit is  PRY SCH, IKOT ANIE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031606003"){
  $response .= "END Your polling unit is TOWN HALL, EMA ITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031606004"){
  $response .= "END Your polling unit is PRY SCH, EMA ITAM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031606005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031606006"){
  $response .= "END Your polling unit is PRY SCH, IKOT NYA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031606007"){
  $response .= "END Your polling unit is TOWN HALL, NKIM  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 07 EAST ITAM V

 else if ($text == "031607001"){
  $response .= "END Your polling unit is TOWN HALL, MKPETI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AYAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607003"){
  $response .= "END Your polling unit is PRY SCH, MBAK ATAI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607004"){
  $response .= "END Your polling unit is PRY SCH, MBAK ATAI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607005"){
  $response .= "END Your polling unit is  TOWN HALL, ENEN ATAI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607006"){
  $response .= "END Your polling unit is  PRY SCH, AFAHA 1 \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKPOWENYEN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKPOENYEN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031607009"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATAKPA  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 08 WEST ITAM I

 else if ($text == "031608001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031608002"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT MBONDE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031608003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKWERE  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031608004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NKWUT USIONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031608005"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT EKPUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031608006"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, IKOT EMIEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031608007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFAHA UBE  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 09 WEST ITAM II

 else if ($text == "031609001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, MBIRIBIT  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031609002"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT OBIO ENANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031609003"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT ABASI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031609004"){
  $response .= "END Your polling unit is TOWN HALL, NUNG UKOT  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031609005"){
  $response .= "END Your polling unit is TOWN HALL, EKIRITAM 11  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031609006"){
  $response .= "END Your polling unit is  TOWN HALL, MBAK 11 \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 16TH LOCAL GOVT. ITU
 //WARD 10 WEST ITAM III

 else if ($text == "031610001"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT EBON \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610002"){
  $response .= "END Your polling unit is TOWN HALL, ATAI IBIAKU  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610003"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBONG EDONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610004"){
  $response .= "END Your polling unit is ADULT EDUCATION, IKOT OBONG EDONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610005"){
  $response .= "END Your polling unit is TOWN HALL, NTAK INYANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610006"){
  $response .= "END Your polling unit is  TOWN HALL, AFAHA ITAM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610007"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBIO ATAI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031610008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATA IDUNG  \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 01 ENWANG

 else if ($text == "031701001"){
  $response .= "END Your polling unit is  PRY SCH, UKO AKPAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031701002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYO UDO MBO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031701003"){
  $response .= "END Your polling unit is  VILLAGE SQUARE, EYO UKUT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031701004"){
  $response .= "END Your polling unit is VILLAGE EYO UKUT  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 02 ENWANG II

 else if ($text == "031702001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EYO EFAI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031702002"){
  $response .= "END Your polling unit is SEC SCH, IBETE  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031702003"){
  $response .= "END Your polling unit is PRY SCH, UBOTUNG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031702004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, EKIEBONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031702005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UBA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031702006"){
  $response .= "END Your polling unit is  VILLAGE HALL, EYO EPE \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 03 EBUGHU I

 else if ($text == "031703001"){
  $response .= "END Your polling unit is PRY SCH, ASAK IKANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031703002"){
  $response .= "END Your polling unit is OKOBO EBUGHU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031703003"){
  $response .= "END Your polling unit is EYULOR EBUGHU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031703004"){
  $response .= "END Your polling unit is UTUDIM VILLAGE SQUARE \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 04 EBUGHU II

 else if ($text == "031704001"){
  $response .= "END Your polling unit is PRY SCH, OSU EBUGHU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031704002"){
  $response .= "END Your polling unit is PRY SCH, ODUO EBUGHU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031704003"){
  $response .= "END Your polling unit is PRY SCH, ABIAKOWO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031704004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AKAI EBUGHU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031704005"){
  $response .= "END Your polling unit is VILLAGE HALL, EYESIN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031704006"){
  $response .= "END Your polling unit is PRY SCH, AKAI UDO \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 05 UDESI

 else if ($text == "031705001"){
  $response .= "END Your polling unit is PRY SCH, AKAI ATTI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705002"){
  $response .= "END Your polling unit is PRY SCH, AKAI ATTI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705003"){
  $response .= "END Your polling unit is PRY SCH, OSU UDESI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705004"){
  $response .= "END Your polling unit is  
  PRY SCH, UKOITAK EYEKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705005"){
  $response .= "END Your polling unit is UKOITAK EYULOR \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705006"){
  $response .= "END Your polling unit is VILLAGE HALL, UBOKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705007"){
  $response .= "END Your polling unit is PRY SCH, AKAI OWU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705008"){
  $response .= "END Your polling unit is PRY SCH, ISONG INYANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705009"){
  $response .= "END Your polling unit is PRY SCH, ISONG INYANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705010"){
  $response .= "END Your polling unit is PRY SCH, UDUNG IKANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UBOKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031705012"){
  $response .= "END Your polling unit is VILLAGE HALL, ISONG INYANG \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 06 EFIAT I

 else if ($text == "031706001"){
  $response .= "END Your polling unit is PRY SCH, INUA ABASI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031706002"){
  $response .= "END Your polling unit is VILLAGE HALL, OBIO IYATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031706003"){
  $response .= "END Your polling unit is VILLAGE HALL, USUK EFIAT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031706004"){
  $response .= "END Your polling unit is VILLAGE HALL, UTAN ANTAI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031706005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, INE EKPO \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 07 EFIAT II

 else if ($text == "031707001"){
  $response .= "END Your polling unit is PRY SCH, ESUK ENWANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031707002"){
  $response .= "END Your polling unit is PRY SCH, IBUOT UTAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031707003"){
  $response .= "END Your polling unit is PRY SCH, AKWA OBIO AFFIAT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031707004"){
  $response .= "END Your polling unit is VILLAGE HALL, MBENDORO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031707005"){
  $response .= "END Your polling unit is PRY SCH, UTAN EFFIONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031707006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT NTEKIM \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 08 IBAKA

 else if ($text == "031708001"){
  $response .= "END Your polling unit is PRY SCH, IBAKA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031708002"){
  $response .= "END Your polling unit is VILLAGE HALL, IDAK IKONO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031708003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, INUOT IKOT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031708004"){
  $response .= "END Your polling unit is CUSTOMARY COURT, JAMES TOWN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031708005"){
  $response .= "END Your polling unit is VILLAGE HALL, MKPANG UTONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031708006"){
  $response .= "END Your polling unit is VILLAGE HAALL, ASIAK OBUFA \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 09 UDA I

 else if ($text == "031709001"){
  $response .= "END Your polling unit is VILLAGE HALL, ORUKIM    \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031709002"){
  $response .= "END Your polling unit is PRY SCH, OFFI UDA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031709003"){
  $response .= "END Your polling unit is PRY SCH, UDA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031709004"){
  $response .= "END Your polling unit is PRY SCH, UKO NTEGHE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031709005"){
  $response .= "END Your polling unit is VILLAGE HALL, AKPRANG KPRANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031709006"){
  $response .= "END Your polling unit is VILLAGE HALL, UDUNG INYANG \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 17TH LOCAL GOVT. MBO
 //WARD 10 UDA II

 else if ($text == "031710001"){
  $response .= "END Your polling unit is PRY SCH UNYENGE    \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031710002"){
  $response .= "END Your polling unit is VILLAGE HALL UTIT ANTAI   \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031710003"){
  $response .= "END Your polling unit is VILLAGE HALL UDINGHI   \n";
    $response .= $display;
    $response .=$message;
}


/**


//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 01 UKPUM MINYIN 1

 else if ($text == "031801001"){
  $response .= "END Your polling unit is PRY SCH, IBOT  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBOT  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT UBO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801004"){
  $response .= "END Your polling unit is  PRY SCH, IKOT EDEGHE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDO EDEM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801006"){
  $response .= "END Your polling unit is VILLAGE HALL, NKIRARA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801007"){
  $response .= "END Your polling unit is CO-OP HALL, EKA NUNG UKIM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031801008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETUK NUNG UKIM  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 02 UKPUM MINYA II

 else if ($text == "031802001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATA MINYA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802002"){
  $response .= "END Your polling unit is  VILLAGE HALL, ATA MINYA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802003"){
  $response .= "END Your polling unit is  CO-OP HALL, IKOT OBONG MINYA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802004"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKAIDE. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKAIDE. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802006"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKAIDE. III  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802007"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETEFIA. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802008"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETEFIA. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA OKOP  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EKPUK  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031802011"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABASI MINYA  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 03 UKPUM MINYA III

 else if ($text == "031803001"){
  $response .= "END Your polling unit is PRY SCH, ASONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803002"){
  $response .= "END Your polling unit is TOWN HALL, ASONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803003"){
  $response .= "END Your polling unit is SEC SCH, ASONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803004"){
  $response .= "END Your polling unit is CO-OP HALL, ASONG. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803005"){
  $response .= "END Your polling unit is CO-OP HALL, ASONG. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ASONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803007"){
  $response .= "END Your polling unit is SEC SCH , IKOT OBIOKOI. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803008"){
  $response .= "END Your polling unit is  SEC SCH , IKOT OBIOKOI. II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803009"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABIA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803010"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABIA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPABIO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031803012"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT EKOP  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 04 UKPUM MINYA IV

 else if ($text == "031804001"){
  $response .= "END Your polling unit is  CO-OP HALL, MKPAT ENIN. I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804002"){
  $response .= "END Your polling unit is CO-OP HALL, MKPAT ENIN. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804003"){
  $response .= "END Your polling unit is PRY SCH, MKPAT ENIN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804004"){
  $response .= "END Your polling unit is MARKET SQUARE, MKPAT ENIN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804005"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKPE  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804006"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO AKWA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804007"){
  $response .= "END Your polling unit is  TOWN HALL, IKOT OBIO AKWA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804008"){
  $response .= "END Your polling unit is VILLAGE HALL, NUNG UKIM III. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804009"){
  $response .= "END Your polling unit is  VILLAGE HALL, NUNG UKIM III. II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031804010"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABASI UFON  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 05 IKPA IBOM 1

 else if ($text == "031805001"){
  $response .= "END Your polling unit is  PRY SCH, IKOT AKATA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBIO AKAI  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805003"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT AKPA EKOP  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805004"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO ITONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AYAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AYAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805007"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EDIM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031805008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EDIM  \n";
    $response .= $display;
    $response .=$message;
}

//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 06 IKPA IBOM II

 else if ($text == "031806001"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OSUNG OTUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPABIO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EDIONGO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETEFIA I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806005"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETEFIA II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG UKAM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806007"){
  $response .= "END Your polling unit is T/HALL IKOT OBONG UKAM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031806008"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAN UKAM \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 07 IKPA IBOM III

 else if ($text == "031807001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKWA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807002"){
  $response .= "END Your polling unit is VILLAGE HALL, NDON OBODOM. I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807003"){
  $response .= "END Your polling unit is VILLAGE HALL, NDON OBODOM. II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807004"){
  $response .= "END Your polling unit is CIVIC CENTRE, IKOT AKPADEM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807005"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPADEM \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807006"){
  $response .= "END Your polling unit is PRY SCH, EKIM I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807007"){
  $response .= "END Your polling unit is PRY SCH EKIM II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807008"){
  $response .= "END Your polling unit is VOC. SCH, IKOT OBIO NDOHO \n";
    $response .= $display;
    $response .=$message;
} else if ($text == "031807009"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807010"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ETI \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807011"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ISIGHE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807012"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807013"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIOETE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807014"){
  $response .= "END Your polling unit is PRY SCH, IKOT INYANG OKOP \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807015"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OKOPODONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "0318070116"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ENIN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031807017"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT OYORO  \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 08 IKPA IBOM IV

 else if ($text == "031808001"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKONG. I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808002"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKONG. II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808003"){
  $response .= "END Your polling unit is PRY SCH, ATANUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATANUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808005"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO EKPONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808006"){
  $response .= "END Your polling unit is PRY SCH, NDON IBOTIO I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808007"){
  $response .= "END Your polling unit is PRY SCH, NDON IBOTIO II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031808008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ATA IBOTIO \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 09 IKPA IBIAKU I

 else if ($text == "031809001"){
  $response .= "END Your polling unit is PRY SCH, IKOT NTOT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NTOT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809003"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPAOBONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809004"){
  $response .= "END Your polling unit is PRY SCH, IKOT ETINA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809005"){
  $response .= "END Your polling unit is DISPENSARY IBEKWE, AKPANYA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809006"){
  $response .= "END Your polling unit is PRY SCH, IKOT EBAK I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809007"){
  $response .= "END Your polling unit is PRY SCH, IKOT EBAK II \n";
    $response .= $display;
    $response .=$message7
}
else if ($text == "031809008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031809009"){
  $response .= "END Your polling unit is PRIMARY SCH, IKOT NTOT \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 10 IKPA IBIAKU II

 else if ($text == "031810001"){
  $response .= "END Your polling unit is PRY SCH, MINYA NTAK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810002"){
  $response .= "END Your polling unit is MARKET SQUARE, NYA ODIONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810003"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABIA ENIN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810004"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EKPENYONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810005"){
  $response .= "END Your polling unit is PRY SCH, IKOT ABASI AKPAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ABASI AKPAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810007"){
  $response .= "END Your polling unit is Q.I.C PRY SCH, AKA/NUNG IKONO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031810008"){
  $response .= "END Your polling unit is AME ZION SCH, IKOT AKA/NUNG IKONO \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 11 IKPA IBIAKU III

 else if ($text == "031811001"){
  $response .= "END Your polling unit is SEC SCH, ESA EKPO I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031811002"){
  $response .= "END Your polling unit is SEC SCH, ESA EKPO II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031811003"){
  $response .= "END Your polling unit is TOWN HALL, IBIAKU ESA EKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031811004"){
  $response .= "END Your polling unit is HEALTH CENTRE, IKOT ODIONG \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 12 IKPA IKONO I

 else if ($text == "031812001"){
  $response .= "END Your polling unit is PRY SCH, ASANA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031812002"){
  $response .= "END Your polling unit is VILLAGE HALL, IBIANGA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031812003"){
  $response .= "END Your polling unit is MARKET SQUARE, EKPUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031812004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UKPAB EKPUK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031812005"){
  $response .= "END Your polling unit is CO-OP HALL, IKOT EKPAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031812006"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT EKPAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031812007"){
  $response .= "END Your polling unit is PRY SCH, IKOT OBIO NSO \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 13 IKPA IKONO II

 else if ($text == "031813001"){
  $response .= "END Your polling unit is PRY SCH, IKOT ESEN A.  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813002"){
  $response .= "END Your polling unit is SEC SCH, IKOT ESEN AKPAN NTUEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813003"){
  $response .= "END Your polling unit is SEC SCH, IFFE TOWN I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813004"){
  $response .= "END Your polling unit is SEC SCH, IFFE TOWN II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813005"){
  $response .= "END Your polling unit is PRY SCH, IKOT UNYA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813006"){
  $response .= "END Your polling unit is HEALTH CENTRE, IKOT EDE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813007"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT MKPEYE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031813008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ABIA UTOK \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 18TH LOCAL GOVT. MKPAT ENIN
 //WARD 14 IKPA IKONO II

 else if ($text == "031814001"){
  $response .= "END Your polling unit is PRY SCH, IKOT UMIANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031814002"){
  $response .= "END Your polling unit is PRY SCH, IKOT ENYINE  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031814003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ITON  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031814004"){
  $response .= "END Your polling unit is  VILLAGE HALL, IKOT AFFANG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031814005"){
  $response .= "END Your polling unit is VILLAGE HALL, IKOT ABASI NKAN  \n";
    $response .= $display;
    $response .=$message;
}








//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 01 EASTERN NSIT 1

 else if ($text == "031901001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ODOT 1  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901002"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT EKONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901003"){
  $response .= "END Your polling unit is TOWN HALL, ODOT 11. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901004"){
  $response .= "END Your polling unit is TOWN HALL, ODOT 11. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901005"){
  $response .= "END Your polling unit is TOWN HALL, ODOT 111  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901006"){
  $response .= "END Your polling unit is PRY SCH, ODOT 111  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901007"){
  $response .= "END Your polling unit is MARKET SQUARE, IKOT INYANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NYOHO EDO  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031901009"){
  $response .= "END Your polling unit is TOWN HALL, AKPANG OFOP  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 02 EASTERN NSIT II

 else if ($text == "031902001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, ETOBODOM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902002"){
  $response .= "END Your polling unit is PRY SCH, IWOK 1. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902003"){
  $response .= "END Your polling unit is PRY SCH, IWOK 1. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902004"){
  $response .= "END Your polling unit is SEC SCH, IWOK 1  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IWOK 11  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902006"){
  $response .= "END Your polling unit is  TOWN HALL, IWOK 111 \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902007"){
  $response .= "END Your polling unit is PRY SCH, ABASI NSIT  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031902008"){
  $response .= "END Your polling unit is  TOWN HALL, IWOK 1 \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 03 EASTERN NSIT III

 else if ($text == "031903001"){
  $response .= "END Your polling unit is TOWN HALL, IDIABA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903002"){
  $response .= "END Your polling unit is TOWN HALL,AFAHABANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOTANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903004"){
  $response .= "END Your polling unit is TOWN HALL, IKOT UDOTANG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903005"){
  $response .= "END Your polling unit is PRY SCH, UBETIM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, UBETIM  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OTU  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031903008"){
  $response .= "END Your polling unit is TOWN HALL, IKOT EBIYAN  \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 04 EASTERN NSIT IV

 else if ($text == "031904001"){
  $response .= "END Your polling unit is TOWN HALL, OBIO AKPAN  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031904002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ERONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031904003"){
  $response .= "END Your polling unit is MKT SQUARE, NDON IKOT ITIE UDUNG.  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031904004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDON IKOT ITIE UDUNG I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031904005"){
  $response .= "END Your polling unit is  PRY SCH IKOT MKPO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031904006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDON IKOT ITIE UDUNG. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031904007"){
  $response .= "END Your polling unit is PRY SCH, NDON UMUM  \n";
    $response .= $display;
    $response .=$message;
}





//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 05 EASTERN NSIT V

 else if ($text == "031905001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT OBONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905002"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBONG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905003"){
  $response .= "END Your polling unit is  PRY SCH, IKOT ITIE UDUNG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ITIE UDUNG  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IDIAKPA IKOT NTUEN. I  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT IDIAKPA IKOT NTUEN. II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905007"){
  $response .= "END Your polling unit is SEC SCH, IKOT ASUA  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031905008"){
  $response .= "END Your polling unit is RY SCH, IKOT AKPABIO  \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 06 EASTERN NSIT VI

 else if ($text == "031906001"){
  $response .= "END Your polling unit is PRY SCH, IKOT EDEBE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031906002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT EDEBE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031906003"){
  $response .= "END Your polling unit is PRY SCH, IKOT AKPANIKE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031906004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT AKPANIKE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031906005"){
  $response .= "END Your polling unit is PRY SCH, EBITE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031906006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDON EKPE \n";
    $response .= $display;
    $response .=$message;
}



//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 07 EASTERN NSIT VII
 else if ($text == "031907001"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IDIKPA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907002"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IBEDU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907003"){
  $response .= "END Your polling unit is SEC SCH, IBEDU \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907004"){
  $response .= "END Your polling unit isVILLAGE SQUARE, IKOT ABIA ENYE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907005"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ABIA AMA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESEN NSIT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907007"){
  $response .= "END Your polling unit is TOWN HALL, IBIAKPAN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031907008"){
  $response .= "END Your polling unit is TOWN HALL, FOUR TOWNS, IKOT EKET \n";
    $response .= $display;
    $response .=$message;
}







//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 08 EASTERN NSIT VIII

 else if ($text == "031908001"){
  $response .= "END Your polling unit is TOWN HALL, UNYEHE NSIT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031908002"){
  $response .= "END Your polling unit is PRY SCH, OKORO NSIT I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031908003"){
  $response .= "END Your polling unit is PRY SCH, OKORO NSIT II  \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031908004"){
  $response .= "END Your polling unit isPRY SCH, IKOT NKPENE \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031908005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IDIFA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031908006"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UBOK UDOM \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 09 EASTERN NSIT IX

 else if ($text == "031909001"){
  $response .= "END Your polling unit is MARKET SQUARE, ADIA NSIT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031909002"){
  $response .= "END Your polling unit is TOWN HALL, IKOT OBON \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031909003"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDISIAK \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031909004"){
  $response .= "END Your polling unit is PRY SCH, IKOT UKPONG \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031909005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT NTUEN \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031909006"){
  $response .= "END Your polling unit is PRY SCH, IKOT EKPOT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031909007"){
  $response .= "END Your polling unit is TOWN HALL, IBAKANG \n";
    $response .= $display;
    $response .=$message;
}






//STARTING FROM THE 19TH LOCAL GOVT. NSIT ATAI
 //WARD 10 EASTERN NSIT X

 else if ($text == "031910001"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ESSIEN I \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910002"){
  $response .= "END Your polling unit is TOWN HALL, IKOT ESSIEN II \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910003"){
  $response .= "END Your polling unit is PRY SCH, IKOT UYO \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910004"){
  $response .= "END Your polling unit is VILLAGE SQUARE, AFIA \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910005"){
  $response .= "END Your polling unit is VILLAGE SQUARE, NDA NSIT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910006"){
  $response .= "END Your polling unit is PRY SCH, NDA NSIT \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910007"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT ESOP \n";
    $response .= $display;
    $response .=$message;
}
else if ($text == "031910008"){
  $response .= "END Your polling unit is VILLAGE SQUARE, IKOT UDOFIA \n";
    $response .= $display;
    $response .=$message;
}

//END OF PROSPER'S CODE BASE

**/
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

//POLLING UNIT FOR WARD 6 UNDER LGA 23

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
  $response .= "END Your polling unit is METH SCH, ESUK INWANG\n";
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
else if ($text == "032401010"){
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
else if ($text == "032408002"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBIDANG II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408003"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBIDANG III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408004"){
  $response .= "END Your polling unit is VILLAGE SQUARE,IKOT EBIDANG\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408005"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBEKPO I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408006"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBEKPO II\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408007"){
  $response .= "END Your polling unit is PRY SCH,IKOT EBEKPO III\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408008"){
  $response .= "END Your polling unit is TOWN HALL,IKOT ANNANG I\n";
  $response .= $display;
  $response .= $message;
}
else if ($text == "032408009"){
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
  $response .= "END Your polling unit is IQUITTA VILLAGE HALL\n";
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
  $response .= "END Your polling unit is PRY SCH, USE OFFOT\n";
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
  $response .= "END Hi there, \n I think you didn't input the right PU code, please check your Card and try again.\n";
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
