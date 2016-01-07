<?php
namespace Uas;
class Db extends \PDO {
	function __construct(){
		parent::__construct('mysql:host=localhost;dbname=apilaptop','root','');
	}
}
