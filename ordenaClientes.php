<?php
$ordcpf = "n";
$ordnome = "n";
if (array_key_exists("ordem",$_POST)) {

	$ord = "ord" . $_POST['campo'];
	$$ord = $_POST['ordem'];
	
	if (($$ord == "d") OR ($$ord == "n")) {
		
		usort($arrayClientes,"ordenarAscend");
		$$ord = "a";
		
	}elseif ($$ord == "a") {
		
		usort($arrayClientes,"ordenarDescend");
		$$ord = "d";
	}
}

function ordenarAscend($obj1, $obj2){
	
	if( $obj1->$_POST['campo'] == $obj2->$_POST['campo'] ) return 0;

    return ( ( $obj1->$_POST['campo'] < $obj2->$_POST['campo'] ) ? -1 : 1 );
	
}

function ordenarDescend($obj1, $obj2){
	
	if( $obj1->$_POST['campo'] == $obj2->$_POST['campo'] ) return 0;

    return ( ( $obj1->$_POST['campo'] < $obj2->$_POST['campo'] ) ? 1 : -1 );
	
}
?>