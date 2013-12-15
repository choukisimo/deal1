<?php

class Cart extends Model{

	public function __construct(){
		if(!isset($_SESSION)){
			session_start();
			}
	  if(isset($_GET['id'])){
        $this->addDealSession();
         header("location:cart.php");
      }
      if(isset($_GET['del'])){
        $this->deleteDealSession(); 
        header("location:cart.php");
      }
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
			}
		if(isset($_POST['cart']['quantite'])){
			$this->updateQte();
			
		}
	}

	public function updateQte(){


		foreach ($_SESSION['cart'] 	as $dealID => $quantite) {
			if($_SESSION['cart'][$dealID]==0){
					unset($_SESSION['cart'][$dealID]);
				}else{
			if(isset($_POST['cart']['quantite'][$dealID])){
				$_SESSION['cart'][$dealID]=$_POST['cart']['quantite'][$dealID];
				}
			}
		}
	}
	public function deleteDealSessionAfter($id){
		unset($_SESSION['cart'][$id]);
	}

	public function addDealSession(){
		extract($_GET);
		if(!$this->isIdExist($id))
		{
				header("Location: index.php");
		}
		else{

			if(isset($_SESSION['cart'][$id])){
				$_SESSION['cart'][$id]++;
				}else{
				$_SESSION['cart'][$id]=1;
				}
			}
		
	}

	public function deleteDealSession(){
		extract($_GET);	
		unset($_SESSION['cart'][$del]);
	}
	
	public function count(){
		return array_sum($_SESSION['cart']);
	}

	public function total(){
		$model = new Model();
		$model->table="deals";
		$total=0;
		$ids=array_keys($_SESSION['cart']);
		if(empty($ids)){
			$deals=array();
		}else{
			$deals=$model->find(array(
					'fields' => 'id,prixReduit',
					'conditions' =>'id IN ('.implode(',', $ids).')'
				));
		}
		foreach ($deals as $deal) {
			$total+=$deal->prixReduit * $_SESSION['cart'][$deal->id];
		}
		return $total;
	}

	public function getDealBySessionId()
	{
		$model=new Model();
		$model->table='deals';
		$d=array();
		extract($_GET);
		$ids=array_keys($_SESSION['cart']);
		if(empty($ids)){
			$d=array();
		}else{
		$d=$model->find(array(
					'fields' => 'id,titre,image,prixReduit',
					'conditions' => 'id IN ('.implode(',', $ids).')'
				));
		}
		return $d;
		
		
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

		public function findIdByEmail(){
		$model=new Model();
		$model->table='utilisateurs';
		extract($_POST);
		$d=$model->findFirst(array(
					'fields' =>'id',
					'conditions' => array(
								'email'	=> $email
					)
			));
		return $d;
			
	}

}


?>