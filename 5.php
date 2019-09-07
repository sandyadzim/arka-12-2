<?php

	function hitung($string){
		$result = substr_count($string, "a")+substr_count($string, "i")+substr_count($string, "u")+substr_count($string, "e")+substr_count($string, "o");
		return $result;
	}
	echo hitung("programmer");
	echo "<br/>";
	echo hitung("hmm..");


?>