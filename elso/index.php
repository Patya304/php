<?php

	echo "Hello world! <hr>";
	
	if( isset( $_GET['a'] ) ) $a = @($_GET['a']*1) ;
	if( isset( $_GET['b'] ) ) $b = @($_GET['b']*1) ;

	if( !isset( $_GET['a'] ) || !isset( $_GET['b'] ) )
	{
		die( "
			Használd az oldalt ügyesen!<br><br>
			<a href='./?a=11&b=13'>index.php?a=11&b=13</a>
	
		" ) ;
	}

	if( $b==0 )		die("A 'b' nem lehet 0!"); 

	$a = $_GET['a'];
	$b = $_GET['b'];
	echo "
		$a + $b = " ,       $a + $b 	  , "<br>
		$a - $b = " ,       $a - $b 	  , "<br>
		$a * $b = " ,  	    $a * $b 	  , "<br>
		$a / $b = " , round($a / $b , 3 ) , "<br>
	" ;
	
?>