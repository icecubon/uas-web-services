<?php
namespace Uas;
class Kategori {
   function tambahKategori($cat_name){
     $db = new Db();
	 $stmt = $db->prepare("INSERT INTO part_cat (cat_name) VALUES (?)");
	 $stmt->bindParam(1, $cat_name);
	 $stmt->execute();

	 echo "Data Kategori berhasil di simpan";
   }
}
