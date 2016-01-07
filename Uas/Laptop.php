<?php
namespace Uas;
class Laptop {
	function tambahLaptop($brand, $model, $release){
		$db = new Db();

		$stmt = $db->prepare("INSERT INTO laptops (brand, model, release) VALUES (?, ?, ?)");
		$stmt->bindParam(1, $brand);
		$stmt->bindParam(2, $model);
		$stmt->bindParam(3, $release);
		$stmt->execute();

		echo "success save";
	}

	function tampilLaptop($brand, $model, $release){
	    $db = new Db();
		$stmt = $db->prepare("SELECT * FROM laptops");
		$stmt->bindParam(1, $brand);
		$stmt->bindParam(2, $model);
		$stmt->bindParam(3, $release);
		$stmt->execute();

		echo "";
	}
}
