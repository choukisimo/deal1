<?php
class Category extends Model{


	public function __construct(){


	}

	public function getCategoryName($id){

		$model=new Model();
		$model->table='categories';
		$d=array();
		$d=$model->findFirst(array(
					'fields' => 'intitule',
					'conditions' =>'id='.$id
				));
		return $d;
	}

	public function getCategories(){

		$model=new Model();
		$model->table='categories';
		$d=array();
		$d=$model->find(array(
					'fields' => 'id,intitule,icone'
				));
		return $d;
	}

	}

?>