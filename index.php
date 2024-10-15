<!DOCTYPE html>
<html>
  <head>

  </head>

  <style>

    body
    {
	margin : 0 ;
    }

    div#menu
    {
	background-color : #AAA         ;
	text-align       : center       ;
    }

    div#menu a
    {
	display          : inline-block ;
	width            : 80px         ;
	color            : #666         ;
	text-decoration  : none         ;
	text-align       : center       ;
    }

    div#menu a:hover
    {
	background-color : #CCC         ;
	color            : #000         ;
    }

    div#tartalom
    {
	margin           : 32px auto    ;
	width            : 920px        ;
	min-height       : 480px        ;
    }

    div#lablec
    {
	background-color : #666         ;
	color            : #FFF         ;
    }

  </style>

  <body>

    <div id='menu'>
      [
	<a href='./'          > Kezdőlap </a>  |
	<a href='./?p=termek' > Termékek </a>  |
	<a href='./?p=help'   > Segítség </a>  |
	<a href='./?p=gyik'   > GY.I.K   </a>  |
	<a href='./?p=rolunk' > Rólunk   </a>   
      ]
    </div>

    <div id='tartalom'>

<?php

    if( isset($_GET['p']) )  $p = $_GET['p'] ;
    else                     $p = ""         ;

    if( $p==""       )  print "<h2> Akciók </h2>"                    ; else
    if( $p=="termek" )  print "<h2> Termékek, szolgáltatások </h2>"  ; else
    if( $p=="help"   )  print "<h2> Terméktámogatás </h2>"           ; else
    if( $p=="gyik"   )  include("gyik.php")                          ; else
    if( $p=="rolunk" )  include("rolunk.php")                        ; else
	                include("404.php")                           ;
?>

    </div>

    <div id='lablec'>

	&copy; enoldalam.hu - 2024.

	<div style='float:right;'>
<?php
	$honapok  = array( "", "január", "február", "március", "április", "május", "június", "július", "augusztus", "szeptember", "október", "november", "december" ) ;
	$napnevek = array( "", "hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap" ) ;

	include("nevnapok.php") ;
	$mainevnap = "Ma ünnepli névnapját: " . nevnapos( date("Y") , date("n") , date("j")  ) ;

	print date("Y. ") . $honapok[date("n")] . date(" d., ") . $napnevek[date("N")] . " - " . $mainevnap ;
?>
	</div>

    </div>

  </body>
</html>

