<?php
class City extends Model{


	public function __construct(){}


	public function getCities(){

		$model=new Model();
		$model->table='villes';
		$d=array();
		$d=$model->find(array(
					'fields' => 'id,nomVille'
				));
		return $d;
	}

	}

?>