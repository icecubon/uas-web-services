<?php
namespace Uas;
class SukuCadang{
  function tambahSukuCadang($id_laptop,$id_cat,$part_number,$description){
    $db = new Db();
    $stmt = $db->prepare("INSERT INTO sukucadang (id_laptop,id_cat,part_number,description) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $id_laptop);
    $stmt->bindParam(2, $id_cat);
    $stmt->bindParam(3, $part_number);
	$stmt->bindParam(4, $description);
    $stmt->execute();

	echo "Data Suku Cadang berhasil di simpan";
  }
}
