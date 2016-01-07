<?php

//http://localhost/apilatihan/index.php/laptop <-(simpan bagian ini di rest essay lalu pilih body dan type POST)

require 'Slim/Slim.php';


\Slim\Slim::registerAutoloader();



$app = new \Slim\Slim();
//hit parent URL

});


// GET route
$app->get(
    '/laptop',
    function () {

	}
);
// GET route
$app->get(
    '/laptop',
    function () {
        $laptop = new \Uas\laptop();
		$laptop->tampilLaptop($_GET['brand'], $_GET['model'], $_GET['release']);
	}
);
//post data laptop
$app->post(
    '/laptop',
    function (){
        $laptop = new \Uas\laptop();
		$laptop->tambahLaptop($_POST['brand'], $_POST['model'], $_POST['release']);
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

// GET route kategori
$app->get(
    '/kategori',
    function () {

	}
);

//pos data kategori
$app->post(
    '/kategori',
    function (){
        $kategori = new \Uas\kategori();
		$kategori->tambahKategori($_POST['cat_name']);
    }
);

// GET route sukucadang
$app->get(
    '/sukucadang',
    function () {

	}
);

//pos data suku cadang
$app->post(
    '/sukucadang',
    function (){
        $sukucadang = new \Uas\sukucadang();
		$sukucadang->tambahSukuCadang($_POST['id_laptop'],$_POST['id_cat'],$_POST['part_number'],$_POST['description']);
    }
);

$app->run();
