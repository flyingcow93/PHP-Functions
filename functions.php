<?

echo inverf($_GET["x"]);

function inverf($x) {
		$a=0.147;
		$sign=( $x > 0 ) ? 1 : ( ( $x < 0 ) ? -1 : 0 );
		return $sign*sqrt(sqrt(pow(((2/(pi()*$a))+((log(1-pow($x, 2)))/2)), 2) - ((log(1-pow($x, 2)))/$a) )-((2/(pi()*$a))+(log(1-pow($x, 2)))/2));
	}
	
	?>