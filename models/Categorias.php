<?php
class Categorias extends model{

	public function getLista() {
		$array = array();
	//	global $pdo;

		$sql = $this->db->query("SELECT * FROM categorias");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}
?>