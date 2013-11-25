<?php
require 'core/model.php';

class User extends Model{

	public function __construct(){
			session_start();
	}


	public function login(){
		$model=new Model();
		$model->table='utilisateurs';
		extract($_POST);
			if($this->isMember($loginEmailLabel,$loginPwdLabel))
				{
						$_SESSION['auth']="logged";
						$_SESSION['email']=$loginEmailLabel;
						if($remember_me = '1'){
						setcookie('remeber_deals',$remember_me,time()+(60*60*24));
						}


				}
	}

	public function isLogged(){
		if(!isset($_SESSION['auth']) XOR !isset($_COOKIE['remeber_deals'])){
		}
		else{

			header("Location: panel.php");

		}

	}
	
	public function isMember($email,$password){
		$model=new Model();
		$model->table='utilisateurs';
		$d=$model->find(array(
				'conditions' => array(
					'email'	=> $email,
					'motDePasse' => sha1($password)
					)
			));
		if(!empty($d)){

			return true;
		}
		return false;

	}
	public function isExist($email=null){
		$model=new Model();
		$model->table='utilisateurs';
		$d=$model->find(array(
				'conditions' => array(
					'email'	=> $email
					)
			));
		if(!empty($d)){

			return true;
		}
		return false;

	}

		public function isExistFB($id){
			$model=new Model();
			$model->table='utilisateurs';
			$d=$model->find(array(
					'conditions' => array(
						'id_oauth'	=> $id
						)
				));
			if(!empty($d)){

				return true;
			}
			return false;

	}

	public function register(){
			$model=new Model();
			$model->table='utilisateurs';
			extract($_POST);
			if(!$this->isExist($registerEmailLabel))
			{
				if(isset($commit)){
				$model->save(array(
				'nom' => $registerNomLabel,
				'prenom' =>$registerPrenomLabel,
				'email' =>$registerEmailLabel,
				'motDePasse' => sha1($registerPwdLabel),
				'type' => 0
				));
				}

				header("Location: register.php?msg=succee");
			}
			else{

				header("Location: register.php?err=erreur");
			}
	}

		public function facebook(){
			require 'core/facebook.php';
			$model=new Model();
			$model->table='utilisateurs';
			$facebook =new Facebook(array(
					'appId'=>'602919433088689',
					'secret'=>'1e39ecd86e959e11189cdf998e29e7ef'
				));
				$user = $facebook->getUser();
				if($user){
					try {
						$infos=$facebook->api('/me');
						var_dump($infos);
							if($this->isExistFB($infos['id'])){
								//$_SESSION['auth']="logged";
								$_SESSION['email']=$infos['email'];
							}
							else
							{
								$model->save(array(
								'id_oauth' => $infos['id'],
								'nom' => $infos['first_name'],
								'prenom' =>$infos['last_name'],
								'email' =>$infos['email'],
								'ville'=>$infos['location']['name'],
								'type' => 0
								));
								//$_SESSION['auth']="logged";
								$_SESSION['email']=$infos['email'];

							}

					} catch (FacebookApiException $e) {
						header("location: register.php?fbmsg=err");
					}
				}else{
					header("location: register.php?fbmsg=err");
				}

		}
	
}


?>
