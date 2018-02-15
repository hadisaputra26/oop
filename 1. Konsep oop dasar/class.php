<?php 
class nilaiAkhir {

	var $nama;
	var $nim;
	var $email;
	var $jurusan;

	function nilaiRata($n1, $n2, $n3, $n4){
		return ($n1+$n2+$n3+$n4) / 4;
	}

	function hasil($a){
		if($a >= 60){
			$hasil = "LULUS";
		} else {
			$hasil = "TIDAK LULUS";
		}
		return $hasil;
	}
}
?>