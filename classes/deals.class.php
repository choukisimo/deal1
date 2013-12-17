<?php


class Deal extends Model{

	public function __construct(){
		if(!isset($_SESSION)){
			session_start();
			}

	}
	public function getDealList()
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		$d=$model->find(array(
					'fields' => 'id,titre,image,fournisseur,adresse,ville,UNIX_TIMESTAMP(dateFin) as timer,prixInitial,prixReduit',
					'conditions' => 'etat=1',
					'orderDesc' =>'id'

				));
		return $d;
	}

		public function getFeaturedDeal()
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		$d=$model->findFirst(array(
					'fields' => 'id,titre,image,fournisseur,adresse,ville,UNIX_TIMESTAMP(dateFin) as timer,prixInitial,prixReduit',
					'conditions' => 'etat=1 AND isFeatured=1',
					'orderDesc' =>'id'

				));
		return $d;
	}

		public function getDealByCategory($id)
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		$d=$model->find(array(
					'fields' => 'id,titre,image,fournisseur,adresse,ville,UNIX_TIMESTAMP(dateFin) as timer,prixInitial,prixReduit',
					'conditions' => 'etat=1 AND categorie_id='.$id,
					'orderDesc' =>'id'

				));
		if (empty($d)){
			echo '<div style="text-align:center"><img src="views/icones/alert.ico" ><h3 style="text-align:center">Il n\'existe actuellement aucun deal dans cette catégorie !</h3></div>';
		}
		return $d;
		
	}

		public function getDealByCity($city)
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		$d=$model->find(array(
					'fields' => 'id,titre,image,fournisseur,adresse,ville,UNIX_TIMESTAMP(dateFin) as timer,prixInitial,prixReduit',
					'conditions' => 'etat=1 AND ville="'.$city.'"',
					'orderDesc' =>'id'

				));
		if (empty($d)){
			echo '<div style="text-align:center"><img src="views/icones/alert.ico" ><h3 style="text-align:center">Il n\'existe actuellement aucun deal disponible à cette ville !</h3></div>';
		}
		return $d;
		
	}

	public function getLastDeals()
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		extract($_GET);
		if(!$this->isIdExist($id))
		{
				header("Location: index.php");
		}
		else{
		$d=$model->find(array(
					'fields' => 'id,categorie_id,titre,image,UNIX_TIMESTAMP(dateFin) as timer,prixReduit',
					'conditions' => 'etat=1 AND id !='.mysql_real_escape_string($id),
					'orderDesc' =>'id',
					'limit' => '6'
				));
		return $d;
		}
	}

	public function isIdExist($id){
		$model=new Model();
		$model->table='deals';
		$d=array();
		extract($_GET);
		$d=$model->findFirst(array(
					'fields' => 'id',
					'conditions' => 'id ='.mysql_real_escape_string($id)
				));

			if(!empty($d)){
				return true;
			}
			else{

				return  false;

			}

		
	}

	public function getDealById()
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		extract($_GET);
		$d=$model->findFirst(array(
					'fields' => 'id,titre,image,conditions,description,fournisseur,adresse,ville,UNIX_TIMESTAMP(dateFin) as timer,prixInitial,prixReduit',
					'conditions' => 'id='.mysql_real_escape_string($id)
				));
		return $d;
	}

		public function getDealByUser(){	
		require_once 'users.class.php';
		$model=new Model();
		$model->table='deals,commandes';
		$d=array();
		$userID=User::getUserID()->id;
		extract($_GET);
		$d=$model->find(array(
					'fields' => 'deals.titre,deals.image,deals.prixReduit,Model.quantite,Model.date',
                    'conditions' => 'Model.deal_id=deals.id AND Model.user_id='.$userID,
                    'orderDesc' => 'Model.date'
				));
		return $d;
	}
		

	public function getDealRate($id)
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		$d=$model->findFirst(array(
					'fields' => 'prixInitial,prixReduit',
					'conditions' => 'id='.$id
				));
			if($d->prixInitial !=0){
				$v=($d->prixInitial - $d->prixReduit)/$d->prixInitial;
			}else{
				$v=0;
			}
		return sprintf("%.0f%%", $v*100);
	}

	public function getDealCount($id)
	{
		$model=new Model();
		$model->table='commandes';
		$d=$model->findFirst(array(
					'fields' => 'count(*) as count',
					'conditions' => 'estPayer=1 AND deal_id='.$id
				));
		return $d;
	}
	
	
}


?>
