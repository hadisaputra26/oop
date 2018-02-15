<?php 
class nilaiAkhir {

	public $nama;
	public $nim;

	protected function nilaiRata(){
		return (70+30+50+78) / 4;
	}

	// Untuk Menampilkan return dari function nilaiRata
	public function nilaiR (){
		return $this->nilaiRata();
	}

	protected function statusNilai(){
		$nilai = $this->nilaiR();
		if($nilai >= 60){
			$hasil = "LULUS";
		} else {
			$hasil = "TIDAK LULUS";
		}
		return $hasil;
	}

	public function statusN(){
		return $this->statusNilai();
	}
}

class class2 extends nilaiAkhir {

	function nilai2(){
		return $this->nilaiRata();
	}	
}

?>