<?php 

session_start();
$p=!empty($_GET['p'])?$_GET['p']:"";



switch ($p) {
	case 'admin':

	

		    require("Vues/backend/index.php");
		// 
		break;
	case 'familles': 
		$famille = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_famille ORDER BY famille_id  DESC",array());
		    require("Vues/backend/familles.php");
		break;
	case 'add_famille_run':


		    $famille = new Ec_familleManager($db);


			$famille_libelle = $_POST['famille_libelle'];
			$famille_description = $_POST['famille_description'];

			$famille_image = isset($_FILES['famille_image'])?$_FILES['famille_image']:'';


			$result_query = $famille->getRow("SELECT * FROM ec_famille WHERE famille_libelle=?",array(strtolower($famille_libelle)));


			if(!$result_query){


			


			if($famille_image==""){


				

				$result_query = $famille->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description) VALUES(?,?)",array(strtolower($famille_libelle),$famille_description));

				$data['code'] =1;
				$data['message']="La Famille ".$famille_libelle." est enrégistrée avec succès";


			}else{


				   $familleName = $_FILES['famille_image']['name'];
				   $familleTmpName = $_FILES['famille_image']['tmp_name'];
				   $familleSize = $_FILES['famille_image']['size'];
				   $familleError = $_FILES['famille_image']['error'];
				   $familleType = $_FILES['famille_image']['type'];


				   $fileExt = explode('.',$familleName);
				   $fileActualExt = strtolower(end($fileExt));

				   $allowed = array('jpg','jpeg','png','pdf');

				   if(in_array($fileActualExt,$allowed)){

					    if($familleError===0){


							$fileNameNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/familles/'.$fileNameNew;

							move_uploaded_file($familleTmpName,$fileDestination);


							$result_query = $famille->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description,famille_image) VALUES(?,?,?)",array(strtolower($famille_libelle),$famille_description,$fileNameNew));

							$data['code'] =1;
							$data['message']="La Famille ".$famille_libelle." est enrégistrée avec succès";


						}else{

							$data['code']=2;
							$data['message']="on a rencontré une erreur";
						}

					   
				   }else{

					      $data['code']=2;
						  $data['message']="ce type de fichier n'est pas supporté";
				   }




				  
			}


		}else{


			$data['code']=2;
			$data['message']="cette famille existe déjà";
			      
		}

			

		 
		  echo json_encode($data);
		break;

	case 'delete_famille_run': 

		$id=$_POST['id'];

		$famille = new Ec_familleManager($db);

		$result_query = $famille->deleteRow("DELETE FROM ec_famille WHERE famille_id=?",array($id));

		

		

		echo json_encode($id);
		break;
	case 'update_famille_run':
		
		$famille = new Ec_familleManager($db);


		$famille_libelle = $_POST['famille_libelle'];
		$famille_description = $_POST['famille_description'];
		$famille_id = $_POST['id'];

		// var_dump($_FILES);
		// die();

		$famille_image = isset($_FILES['famille_image'])?$_FILES['famille_image']:'';



		$result_query = $famille->getRow("SELECT * FROM ec_famille WHERE famille_libelle=?",array(strtolower($famille_libelle)));


		if(!$result_query){


		


		if($famille_image==""){


			

			$result_query = $famille->updateRow1("UPDATE ec_famille SET famille_libelle=?,famille_description=? WHERE famille_id=?",array(strtolower($famille_libelle),$famille_description,$famille_id));

			$data['code'] =1;
			$data['message']="La Famille ".$famille_libelle." est mise à jour avec succès";


		}else{


			   $familleName = $_FILES['famille_image']['name'];
			   $familleTmpName = $_FILES['famille_image']['tmp_name'];
			   $familleSize = $_FILES['famille_image']['size'];
			   $familleError = $_FILES['famille_image']['error'];
			   $familleType = $_FILES['famille_image']['type'];


			   $fileExt = explode('.',$familleName);
			   $fileActualExt = strtolower(end($fileExt));

			   $allowed = array('jpg','jpeg','png','pdf');

			   if(in_array($fileActualExt,$allowed)){

					if($familleError===0){


						$fileNameNew = uniqid('',true).".".$fileActualExt;

						$fileDestination = 'assets/images/familles/'.$fileNameNew;

						move_uploaded_file($familleTmpName,$fileDestination);


						$result_query = $famille->updateRow1("UPDATE ec_famille SET famille_libelle=?,famille_description=?,famille_image=? WHERE famille_id=?",array(strtolower($famille_libelle),$famille_description,$fileNameNew,$famille_id));

						$data['code'] =1;
						$data['message']="La Famille ".$famille_libelle." est mise à jour avec succès";


					}else{

						$data['code']=2;
						$data['message']="on a rencontré une erreur";
					}

				   
			   }else{

					  $data['code']=2;
					  $data['message']="ce type de fichier n'est pas supporté";
			   }




			  
		}


	}else{


		$data['code']=2;
		$data['message']="cette famille existe déjà";
	}

		

	 
	  echo json_encode($data);
		break;

	case 'many_deletes':

		$famille = new Ec_familleManager($db);


		foreach($_POST['id'] as $id){

				$result_query = $famille->deleteRow("DELETE FROM ec_famille WHERE famille_id=?",array($id));
		}

		$data['message'] = "ok";
		
		echo json_encode($data);
		break;

	case 'sous_familles': 

		$famille = new Ec_familleManager($db);
		$famille2 = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_sous_famille ORDER BY sous_famille_id  DESC",array());

		$query_result2 = $famille->getRows("SELECT * FROM ec_famille");
		    
		       require("Vues/backend/sous_familles.php");
		break;

	case 'add_sous_famille_run': 


		$famille = new Ec_familleManager($db);


		$famille_libelle = $_POST['famille_libelle'];
		$famille_description = $_POST['famille_description'];
		$famille_cle = $_POST['famille_cle'];

		$famille_image = isset($_FILES['famille_image'])?$_FILES['famille_image']:'';


		$result_query = $famille->getRow("SELECT * FROM ec_sous_famille WHERE sous_famille_libelle=?",array(strtolower($famille_libelle)));

		


	   if(!$result_query){


		if($famille_image==""){


			

			$result_query = $famille->insertRow("INSERT INTO ec_sous_famille(sous_famille_libelle,sous_famille_description,famille_id) VALUES(?,?,?)",array(strtolower($famille_libelle),$famille_description,$famille_cle));

			$data['code'] =1;
			$data['message']="La Sous  Famille ".$famille_libelle." est enrégistrée avec succès";


		}else{


			   $familleName = $_FILES['famille_image']['name'];
			   $familleTmpName = $_FILES['famille_image']['tmp_name'];
			   $familleSize = $_FILES['famille_image']['size'];
			   $familleError = $_FILES['famille_image']['error'];
			   $familleType = $_FILES['famille_image']['type'];


			   $fileExt = explode('.',$familleName);
			   $fileActualExt = strtolower(end($fileExt));

			   $allowed = array('jpg','jpeg','png','pdf');

			   if(in_array($fileActualExt,$allowed)){

					if($familleError===0){


						$fileNameNew = uniqid('',true).".".$fileActualExt;

						$fileDestination = 'assets/images/familles/'.$fileNameNew;

						move_uploaded_file($familleTmpName,$fileDestination);


						$result_query = $famille->insertRow("INSERT INTO ec_sous_famille(sous_famille_libelle,sous_famille_description,sous_famille_image,famille_id) VALUES(?,?,?,?)",array(strtolower($famille_libelle),$famille_description,$fileNameNew,$famille_cle));

						$data['code'] =1;
						$data['message']="La Sous Famille ".$famille_libelle." est enrégistrée avec succès";


					}else{

						$data['code']=2;
						$data['message']="on a rencontré une erreur";
					}

				   
			   }else{

					  $data['code']=2;
					  $data['message']="ce type de fichier n'est pas supporté";
			   }




			  
		}


	}else{


		$data['code']=2;
		$data['message']="cette sous famille existe déjà";
	}

		

	 
	  echo json_encode($data);
		break;

	case 'delete_sous_famille_run':
		$id=$_POST['id'];

		$famille = new Ec_familleManager($db);

		$result_query = $famille->deleteRow("DELETE FROM ec_sous_famille WHERE sous_famille_id=?",array($id));

		

		

		echo json_encode($id); 
		break;
	case 'many_deletes_sous_famille': 

		$famille = new Ec_familleManager($db);


		foreach($_POST['id'] as $id){

				$result_query = $famille->deleteRow("DELETE FROM ec_sous_famille WHERE sous_famille_id=?",array($id));
		}

		$data['message'] = "ok";
		
		echo json_encode($data);
		break;

	case 'update_sous_famille_run': 

		$famille = new Ec_familleManager($db);


		$famille_libelle = $_POST['famille_libelle'];
		$famille_description = $_POST['famille_description'];
		$famille_id = $_POST['id'];
		$famille_parent_id = $_POST['famille_parent_id'];

		// var_dump($_FILES);
		// die();

		$famille_image = isset($_FILES['famille_image'])?$_FILES['famille_image']:'';





		$result_query = $famille->getRow("SELECT * FROM ec_sous_famille WHERE sous_famille_libelle=?",array(strtolower($famille_libelle)));




		if(!$result_query){


		







		if($famille_image==""){


			

			$result_query = $famille->updateRow1("UPDATE ec_sous_famille SET sous_famille_libelle=?,sous_famille_description=?,famille_id=? WHERE sous_famille_id=?",array(strtolower($famille_libelle),$famille_description,$famille_parent_id,$famille_id));

			$data['code'] =1;
			$data['message']="La Sous Famille ".$famille_libelle." est mise à jour avec succès";


		}else{


			   $familleName = $_FILES['famille_image']['name'];
			   $familleTmpName = $_FILES['famille_image']['tmp_name'];
			   $familleSize = $_FILES['famille_image']['size'];
			   $familleError = $_FILES['famille_image']['error'];
			   $familleType = $_FILES['famille_image']['type'];


			   $fileExt = explode('.',$familleName);
			   $fileActualExt = strtolower(end($fileExt));

			   $allowed = array('jpg','jpeg','png','pdf');

			   if(in_array($fileActualExt,$allowed)){

					if($familleError===0){


						$fileNameNew = uniqid('',true).".".$fileActualExt;

						$fileDestination = 'assets/images/familles/'.$fileNameNew;

						move_uploaded_file($familleTmpName,$fileDestination);


						$result_query = $famille->updateRow1("UPDATE ec_sous_famille SET sous_famille_libelle=?,sous_famille_description=?,sous_famille_image=?,famille_id=? WHERE sous_famille_id=?",array(strtolower($famille_libelle),$famille_description,$fileNameNew,$famille_parent_id,$famille_id));

						$data['code'] =1;
						$data['message']="La Sous Famille ".$famille_libelle." est mise à jour avec succès";


					}else{

						$data['code']=2;
						$data['message']="on a rencontré une erreur";
					}

				   
			   }else{

					  $data['code']=2;
					  $data['message']="ce type de fichier n'est pas supporté";
			   }




			  
		}


	}else{


		$data['code']=2;
		$data['message']="cete sous famille existe déjà";

		      
	}

		

	 
	  echo json_encode($data);

		break;

	case 'categories':

		$famille = new Ec_familleManager($db);
		$famille2 = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_categorie ORDER BY categorie_id  DESC",array());

		$query_result2 = $famille->getRows("SELECT * FROM ec_sous_famille");
		   require("Vues/backend/categories.php"); 
		break;

	case 'add_categorie_run': 
		$famille = new Ec_familleManager($db);


		$famille_libelle = $_POST['famille_libelle'];
		$famille_description = $_POST['famille_description'];
		$famille_cle = $_POST['famille_cle'];

		$famille_image = isset($_FILES['famille_image'])?$_FILES['famille_image']:'';


		$result_query = $famille->getRow("SELECT * FROM ec_categorie WHERE categorie_libelle=?",array(strtolower($famille_libelle)));


	   if(!$result_query){


		if($famille_image==""){


			

			$result_query = $famille->insertRow("INSERT INTO ec_categorie(categorie_libelle,categorie_description,sous_famille_id) VALUES(?,?,?)",array(strtolower($famille_libelle),$famille_description,$famille_cle));

			$data['code'] =1;
			$data['message']="La Catégorie ".$famille_libelle." est enrégistrée avec succès";


		}else{


			   $familleName = $_FILES['famille_image']['name'];
			   $familleTmpName = $_FILES['famille_image']['tmp_name'];
			   $familleSize = $_FILES['famille_image']['size'];
			   $familleError = $_FILES['famille_image']['error'];
			   $familleType = $_FILES['famille_image']['type'];


			   $fileExt = explode('.',$familleName);
			   $fileActualExt = strtolower(end($fileExt));

			   $allowed = array('jpg','jpeg','png','pdf');

			   if(in_array($fileActualExt,$allowed)){

					if($familleError===0){


						$fileNameNew = uniqid('',true).".".$fileActualExt;

						$fileDestination = 'assets/images/familles/'.$fileNameNew;

						move_uploaded_file($familleTmpName,$fileDestination);


						$result_query = $famille->insertRow("INSERT INTO ec_categorie(categorie_libelle,categorie_description,categorie_image,sous_famille_id) VALUES(?,?,?,?)",array(strtolower($famille_libelle),$famille_description,$fileNameNew,$famille_cle));

						$data['code'] =1;
						$data['message']="La Catégorie ".$famille_libelle." est enrégistrée avec succès";


					}else{

						$data['code']=2;
						$data['message']="on a rencontré une erreur";
					}

				   
			   }else{

					  $data['code']=2;
					  $data['message']="ce type de fichier n'est pas supporté";
			   }




			  
		}

	}else{


		$data['code']=2;
		$data['message']="cette catégorie existe déjà ";
	}

		

	 
	  echo json_encode($data);
		break;

	case 'delete_categorie_run':
		$id=$_POST['id'];

		$famille = new Ec_familleManager($db);

		$result_query = $famille->deleteRow("DELETE FROM ec_categorie WHERE categorie_id=?",array($id));

		

		

		echo json_encode($id);
		break;

	case 'many_deletes_categorie': 
		$famille = new Ec_familleManager($db);


		foreach($_POST['id'] as $id){

				$result_query = $famille->deleteRow("DELETE FROM ec_categorie WHERE categorie_id=?",array($id));
		}

		$data['message'] = "ok";
		
		echo json_encode($data);
		break;

	case 'update_categorie_run': 

		$famille = new Ec_familleManager($db);


		$famille_libelle = $_POST['famille_libelle'];
		$famille_description = $_POST['famille_description'];
		$famille_id = $_POST['id'];
		$famille_parent_id = $_POST['famille_parent_id'];

		// var_dump($_FILES);
		// die();

		$famille_image = isset($_FILES['famille_image'])?$_FILES['famille_image']:'';


		$result_query = $famille->getRow("SELECT * FROM ec_categorie WHERE categorie_libelle=?",array(strtolower($famille_libelle)));


		if(!$result_query){


		


		if($famille_image==""){


			

			$result_query = $famille->updateRow1("UPDATE ec_categorie SET categorie_libelle=?,categorie_description=?,sous_famille_id=? WHERE categorie_id=?",array(strtolower($famille_libelle),$famille_description,$famille_parent_id,$famille_id));

			$data['code'] =1;
			$data['message']="La Catégorie ".$famille_libelle." est mise à jour avec succès";


		}else{


			   $familleName = $_FILES['famille_image']['name'];
			   $familleTmpName = $_FILES['famille_image']['tmp_name'];
			   $familleSize = $_FILES['famille_image']['size'];
			   $familleError = $_FILES['famille_image']['error'];
			   $familleType = $_FILES['famille_image']['type'];


			   $fileExt = explode('.',$familleName);
			   $fileActualExt = strtolower(end($fileExt));

			   $allowed = array('jpg','jpeg','png','pdf');

			   if(in_array($fileActualExt,$allowed)){

					if($familleError===0){


						$fileNameNew = uniqid('',true).".".$fileActualExt;

						$fileDestination = 'assets/images/familles/'.$fileNameNew;

						move_uploaded_file($familleTmpName,$fileDestination);


						$result_query = $famille->updateRow1("UPDATE ec_categorie SET categorie_libelle=?,categorie_description=?,categorie_image=?,sous_famille_id=? WHERE categorie_id=?",array(strtolower($famille_libelle),$famille_description,$fileNameNew,$famille_parent_id,$famille_id));

						$data['code'] =1;
						$data['message']="La Catégorie ".$famille_libelle." est mise à jour avec succès";


					}else{

						$data['code']=2;
						$data['message']="on a rencontré une erreur";
					}

				   
			   }else{

					  $data['code']=2;
					  $data['message']="ce type de fichier n'est pas supporté";
			   }




			  
		}

	}else{



		$data['code']=2;
	    $data['message']="cette catégorie existe déjà";
		  
	}

		

	 
	  echo json_encode($data);
		break;

	case 'taille_articles': 

		$famille = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=0 ORDER BY taille_pointure_id  DESC",array());
		
		   require("Vues/backend/taille_articles.php");
		break;

	case 'add_pointure_taille_run': 


		$taille = $_POST['pointure_taille_libelle'];

		$famille = new Ec_familleManager($db);


		


		

		$result_query = $famille->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=? AND taille_pointure_type=0",array(strtolower($taille)));

		if(!$result_query){


			$result_query =$famille->insertRow("INSERT INTO ec_taille_pointure(taille_pointure_libelle) VALUES(?)",array(strtolower($taille)));



			$data['code']=1;
		$data['message']="la taille ".$taille."  est ajoutée avec succès";

		}else{

			$data['code']=2;
			$data['message']="la taille ".$taille."  existe déjà";
		}


		






		
		

		echo json_encode($data);
		break;

	case 'delete_taille_run': 

		   $id = $_POST['id'];
		   $famille = new Ec_familleManager($db);

		   $result_query = $famille->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id=? AND taille_pointure_type=0",array($id));

		   $data['response'] ="deleted";

		   echo json_encode($data);
		   
		break;
	case 'many_deletes_taille_pointure': 

		$famille = new Ec_familleManager($db);


		foreach($_POST['id'] as $id){

				$result_query = $famille->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id=? AND taille_pointure_type=0",array($id));
		}

		$data['message'] = "ok";
		
		echo json_encode($data);

		break;
	case 'update_taille_pointure_run':

		$taille = $_POST['pointure_taille_libelle'];

		$id = $_POST['id'];

		$famille = new Ec_familleManager($db);


		


		

		$result_query = $famille->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=?",array(strtolower($taille)));

		if(!$result_query){


			$result_query =$famille->updateRow1("UPDATE ec_taille_pointure SET taille_pointure_libelle=? WHERE taille_pointure_id=?",array(strtolower($taille),$id));



			$data['code']=1;
		$data['message']="la taille ".$taille."  est modifiée avec succès";

		}else{

			$data['code']=2;
			$data['message']="la taille ".$taille."  existe déjà";
		}


		






		
		

		echo json_encode($data);
		 
		break;

	case 'couleur_articles': 
		$famille = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_article_couleur ORDER BY article_couleur_id  DESC",array());
		  require("Vues/backend/couleur_articles.php");
		break;

	case 'add_couleur_article_run': 
		$taille = $_POST['pointure_taille_libelle'];

		$famille = new Ec_familleManager($db);


		


		

		$result_query = $famille->getRow("SELECT * FROM ec_article_couleur WHERE article_couleur_libelle=?",array(strtolower($taille)));

		if(!$result_query){


			$result_query =$famille->insertRow("INSERT INTO ec_article_couleur(article_couleur_libelle) VALUES(?)",array(strtolower($taille)));



			$data['code']=1;
		$data['message']="la couleur ".$taille."  est ajoutée avec succès";

		}else{

			$data['code']=2;
			$data['message']="la couleur ".$taille."  existe déjà";
		}


		






		
		

		echo json_encode($data);
		break;


	case 'delete_couleur_run':
		
		$id = $_POST['id'];
		   $famille = new Ec_familleManager($db);

		   $result_query = $famille->deleteRow("DELETE FROM ec_article_couleur WHERE article_couleur_id=?",array($id));

		   $data['response'] ="deleted";

		   echo json_encode($data);

		break;

	case 'many_deletes_couleur_article':
		$famille = new Ec_familleManager($db);


		foreach($_POST['id'] as $id){

				$result_query = $famille->deleteRow("DELETE FROM ec_article_couleur WHERE article_couleur_id=?",array($id));
		}

		$data['message'] = "ok";
		
		echo json_encode($data);
		 
		break;

	case 'update_article_couleur_run': 
		$taille = $_POST['pointure_taille_libelle'];

		$id = $_POST['id'];

		$famille = new Ec_familleManager($db);


		


		

		$result_query = $famille->getRow("SELECT * FROM ec_article_couleur WHERE article_couleur_libelle=?",array(strtolower($taille)));

		if(!$result_query){


			$result_query =$famille->updateRow1("UPDATE ec_article_couleur SET article_couleur_libelle=? WHERE article_couleur_id=?",array(strtolower($taille),$id));



			$data['code']=1;
		$data['message']="la couleur ".$taille."  est modifiée avec succès";

		}else{

			$data['code']=2;
			$data['message']="la coleur ".$taille."  existe déjà";
		}


		






		
		

		echo json_encode($data);
		break;





	case 'marque_articles': 

		$famille = new Ec_familleManager($db);

		
		$query_result1 = $famille->getRows("SELECT * FROM ec_marque ORDER BY marque_id  DESC",array());
		require("Vues/backend/marque_articles.php");

		break;

	case 'add_marque_article_run': 
		$taille = $_POST['pointure_taille_libelle'];

		$famille = new Ec_familleManager($db);


		


		

		$result_query = $famille->getRow("SELECT * FROM ec_marque WHERE marque_libelle=?",array(strtolower($taille)));

		if(!$result_query){


			$result_query =$famille->insertRow("INSERT INTO ec_marque(marque_libelle) VALUES(?)",array(strtolower($taille)));



			$data['code']=1;
		$data['message']="la marque ".$taille."  est ajoutée avec succès";

		}else{

			$data['code']=2;
			$data['message']="la marque ".$taille."  existe déjà";
		}


		






		
		

		echo json_encode($data);
		break;

	case 'delete_marque_article_run': 
		$id = $_POST['id'];
		   $famille = new Ec_familleManager($db);

		   $result_query = $famille->deleteRow("DELETE FROM ec_marque WHERE marque_id=?",array($id));

		   $data['response'] ="deleted";

		   echo json_encode($data);
		break;


	case 'many_deletes_marque_article':
		$famille = new Ec_familleManager($db);


		foreach($_POST['id'] as $id){

				$result_query = $famille->deleteRow("DELETE FROM ec_marque WHERE marque_id=?",array($id));
		}

		$data['message'] = "ok";
		
		echo json_encode($data);

		break;

	case 'update_marque_article_run': 


		$taille = $_POST['pointure_taille_libelle'];

		$id = $_POST['id'];

		$famille = new Ec_familleManager($db);


		


		

		$result_query = $famille->getRow("SELECT * FROM ec_marque WHERE marque_libelle=?",array(strtolower($taille)));

		if(!$result_query){


			$result_query =$famille->updateRow1("UPDATE ec_marque SET marque_libelle=? WHERE marque_id=?",array(strtolower($taille),$id));



			$data['code']=1;
		$data['message']="la marque ".$taille."  est modifiée avec succès";

		}else{

			$data['code']=2;
			$data['message']="la marque ".$taille."  existe déjà";
		}


		






		
		

		echo json_encode($data);

		break;


	

	case 'ajouter_articles': 

		   $famille = new Ec_familleManager($db);


		   $categorie_select_data = $famille->getRows("SELECT * FROM ec_categorie",array());

		   $marque_select_data = $famille->getRows("SELECT * FROM ec_marque",array());


		   $article_couleur_data = $famille->getRows("SELECT * FROM ec_article_couleur",array());


		   $taille_pointure_data = $famille->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=0",array());


		   $pointure_pointure_data = $famille->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=1",array());


		  require("Vues/backend/ajouter_articles.php");
		break;

	case 'pointure_articles': 

		$famille = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=1 ORDER BY taille_pointure_id  DESC",array());
		
		   require("Vues/backend/pointure_articles.php");
		break;

	case 'add_pointure_pointure_run': 


			$taille = $_POST['pointure_taille_libelle'];
	
			$famille = new Ec_familleManager($db);
	
	
			
	
	
			
	
			$result_query = $famille->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=? AND taille_pointure_type=1",array(strtolower($taille)));
	
			if(!$result_query){
	
	
				$result_query =$famille->insertRow("INSERT INTO ec_taille_pointure(taille_pointure_libelle,taille_pointure_type) VALUES(?,?)",array(strtolower($taille),1));
	
	
	
				$data['code']=1;
			$data['message']="la pointure ".$taille."  est ajoutée avec succès";
	
			}else{
	
				$data['code']=2;
				$data['message']="la pointure ".$taille."  existe déjà";
			}
	
	
			
	
	
	
	
	
	
			
			
	
			echo json_encode($data);
			break;
	
	case 'delete_pointure_run': 
	
			   $id = $_POST['id'];
			   $famille = new Ec_familleManager($db);
	
			   $result_query = $famille->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id=? AND taille_pointure_type=1",array($id));
	
			   $data['response'] ="deleted";
	
			   echo json_encode($data);
			   
			break;
	case 'many_deletes_pointure_pointure': 
	
			$famille = new Ec_familleManager($db);
	
	
			foreach($_POST['id'] as $id){
	
					$result_query = $famille->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id=? AND taille_pointure_type=1",array($id));
			}
	
			$data['message'] = "ok";
			
			echo json_encode($data);
	
			break;
	case 'update_pointure_pointure_run':
	
			$taille = $_POST['pointure_taille_libelle'];
	
			$id = $_POST['id'];
	
			$famille = new Ec_familleManager($db);
	
	
			
	
	
			
	
			$result_query = $famille->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=? AND taille_pointure_type=1",array(strtolower($taille)));
	
			if(!$result_query){
	
	
				$result_query =$famille->updateRow1("UPDATE ec_taille_pointure SET taille_pointure_libelle=? WHERE taille_pointure_id=?",array(strtolower($taille),$id));
	
	
	
				$data['code']=1;
			$data['message']="la pointure ".$taille."  est modifiée avec succès";
	
			}else{
	
				$data['code']=2;
				$data['message']="la pointure ".$taille."  existe déjà";
			}
	
	
			
	
	
	
	
	
	
			
			
	
			echo json_encode($data);
			 
			break;

	case 'add_article_run': 


			$famille = new Ec_familleManager($db);

			$type_option = $_POST["type_option"];

			$article_categorie = $_POST['article_categorie'];

			$article_description = $_POST['article_description'];

			$article_marque = $_POST['article_marque'];

			$article_code = uniqid('',true);

			$article_libelle = $_POST['article_libelle'];

			$article_prix = $_POST['article_prix'];

			$array_of_images_names = $_FILES["article_images"]['name'];
			$array_of_images_tmps = $_FILES["article_images"]['tmp_name'];


			$result_query_first = $famille->getRow("SELECT * FROM ec_article WHERE article_libelle=?",array(strtolower($article_libelle)));

			// var_dump($result_query_first);
			// die();



			if($result_query_first==false){

			


			

			

			

			if($type_option=="option"){

				$option = "autres";


				


				
				$article_quantite_option_block = $_POST['quantite_option_block'];

				

				$result_query1 = $famille->insertRowMine1("INSERT INTO `ec_article`( `categorie_id`, `article_libelle`, `article_description`, `article_prix`, `article_code`, `marque_id`, `article_option`, `article_qte`, `article_qtestock`) VALUES(?,?,?,?,?,?,?,?,?)",array($article_categorie,strtolower($article_libelle),$article_description,$article_prix,$article_code,$article_marque,$option,$article_quantite_option_block,$article_quantite_option_block));



				// array($article_categorie,$article_libelle,$article_description,$article_prix,$article_code,$article_marque,$article_quantite_option_block,$article_quantite_option_block


				// INSERT INTO `ec_article`( `categorie_id`, `article_libelle`, `article_description`, `article_prix`, `article_code`, `marque_id`, `article_option`, `article_qte`, `article_qtestock`) VALUES (8,'chris article','descdription',2000,'yuhb',4,'autres',30,30)

				 $i =0;

				foreach($array_of_images_names as $image){

					  $fileExt = explode('.',$image);

					  $fileActualExt = strtolower(end($fileExt));

					  $fileNameNew = uniqid('',true).".".$fileActualExt;

					  $fileDestination = 'assets/images/articles/'.$fileNameNew;



					   $result_query2 = $famille->insertRow("INSERT INTO ec_image(article_id,image_url) VALUES(?,?)",array($result_query1,$fileNameNew));

					   move_uploaded_file($array_of_images_tmps[$i],$fileDestination);


					$i=$i+1;


					         
				}


				if(isset($_POST["options"]) && isset($_POST["valeurs"])){


					$options = $_POST["options"];
				    $options_values = $_POST["valeurs"];


					$i =0;


					foreach($options as $opt){


						$result_query3 = $famille->insertRow("INSERT INTO ec_option_parametre(option_parametre_parametre,option_parametre_libelle,article_id) VALUES(?,?,?)",array($opt,$options_values[$i],$result_query1));


						  $i=$i+1;
					}


				}


				

				




				$data['code'] =1;
				$data['message']=" l'article ".$article_libelle."  est enregistré avec succès";


			}else if($type_option=="taille_couleur_pointure"){  // end of option



				$taille=array();
				$qte_taille=0;
				if(!empty($_POST['taille_id'])){
				foreach ($_POST['taille_id'] as $key => $value) {
				if(in_array($value, array_keys($_POST))){
				if(!empty($_POST[$value])){
				array_push($taille, $value.':'.$_POST[$value]);
				$qte_taille+=intval($_POST[$value]);
				}
				}
				}
				}
				
				if(!empty($_POST['couleur_id'])){
				foreach ($_POST['couleur_id'] as $key => $value) {
				
				}
				}

				$couleur=array();
				$qte_couleur=0;



				if(!empty($taille))
				$_POST['produit_taille']=implode(',', $taille);
				else
				$_POST['produit_taille']='';

				if(!empty($couleur))
				$_POST['produit_couleur']=implode(',', $couleur);
				else
				$_POST['produit_couleur']='';


				$_POST['produit_quantite']=$qte_taille;
				$POST['taille_id']=$_POST['taille_id'];
				$POST['couleur_id']=$_POST['couleur_id'];


				$option = "taille";


				$result_query1 = $famille->insertRowMine1("INSERT INTO `ec_article`( `categorie_id`, `article_libelle`, `article_description`, `article_prix`, `article_code`, `marque_id`, `article_option`, `article_qte`, `article_qtestock`) VALUES(?,?,?,?,?,?,?,?,?)",array($article_categorie,strtolower($article_libelle),$article_description,$article_prix,$article_code,$article_marque,$option,$qte_taille,$qte_taille));


				$i =0;

				foreach($array_of_images_names as $image){

					  $fileExt = explode('.',$image);

					  $fileActualExt = strtolower(end($fileExt));

					  $fileNameNew = uniqid('',true).".".$fileActualExt;

					  $fileDestination = 'assets/images/articles/'.$fileNameNew;



					   $result_query2 = $famille->insertRow("INSERT INTO ec_image(article_id,image_url) VALUES(?,?)",array($result_query1,$fileNameNew));

					   move_uploaded_file($array_of_images_tmps[$i],$fileDestination);


					$i=$i+1;


					         
				}


				



				$donnees=array();
				if(!empty($POST['taille_id'])){
				foreach ($POST['taille_id'] as $cle => $valeur) {
				$tailleQte=$valeur.':'.$_POST[$valeur];
				foreach ($POST['couleur_id'] as $key => $value) {
				if(!empty($value)){
				$value=str_replace(' ', '_', $value);
				$nouveau=explode('|', $value);
				$nouveau0=!empty($nouveau[0])?$nouveau[0]:'';
				$nouveau1=!empty($nouveau[1])?$nouveau[1]:'';
				if($valeur==$nouveau[0]){
				$donnees['atcq_taille']=$valeur;
				$donnees['atcq_qte']=$_POST[$value];
				$donnees['atcq_couleur']=$nouveau[1];
				// $donnees['produit_id']=$reponse;
				// $couleur_taille=new atout_taille_couleur_qte($donnees);
				// $Mcouleur_taille=new atout_taille_couleur_qteManager($db);
				// $rep=$Mcouleur_taille->Enregistrer($couleur_taille);

				   $result_query3 = $famille->insertRow("INSERT INTO ec_parametre_article(parametre_article_couleur,parametre_article_taille_pointure,parametre_article_quantite,article_id) VALUES(?,?,?,?)",array($donnees['atcq_couleur'],$donnees['atcq_taille'],$donnees['atcq_qte'],$result_query1));


				   $result_query4 = $famille->insertRow("INSERT INTO ec_parametre_liste(parametre_liste_liste,parametre_base_id) VALUES(?,?)",array($donnees['atcq_taille'],1));
				}
				}
				}

				}
				}














				$data['code'] =1;
				$data['message']=" l'article ".$article_libelle."  est enregistré avec succès";


				



				

					


			}else{   // end of taille_couleur_pointure






				$taille=array();
				$qte_taille=0;
				if(!empty($_POST['taille_id'])){
				foreach ($_POST['taille_id'] as $key => $value) {
				if(in_array($value, array_keys($_POST))){
				if(!empty($_POST[$value])){
				array_push($taille, $value.':'.$_POST[$value]);
				$qte_taille+=intval($_POST[$value]);
				}
				}
				}
				}
				
				if(!empty($_POST['couleur_id'])){
				foreach ($_POST['couleur_id'] as $key => $value) {
				
				}
				}

				$couleur=array();
				$qte_couleur=0;



				if(!empty($taille))
				$_POST['produit_taille']=implode(',', $taille);
				else
				$_POST['produit_taille']='';

				if(!empty($couleur))
				$_POST['produit_couleur']=implode(',', $couleur);
				else
				$_POST['produit_couleur']='';


				$_POST['produit_quantite']=$qte_taille;
				$POST['taille_id']=$_POST['taille_id'];
				$POST['couleur_id']=$_POST['couleur_id'];


				$option = "pointure";


				$result_query1 = $famille->insertRowMine1("INSERT INTO `ec_article`( `categorie_id`, `article_libelle`, `article_description`, `article_prix`, `article_code`, `marque_id`, `article_option`, `article_qte`, `article_qtestock`) VALUES(?,?,?,?,?,?,?,?,?)",array($article_categorie,strtolower($article_libelle),$article_description,$article_prix,$article_code,$article_marque,$option,$qte_taille,$qte_taille));


				$i =0;

				foreach($array_of_images_names as $image){

					  $fileExt = explode('.',$image);

					  $fileActualExt = strtolower(end($fileExt));

					  $fileNameNew = uniqid('',true).".".$fileActualExt;

					  $fileDestination = 'assets/images/articles/'.$fileNameNew;



					   $result_query2 = $famille->insertRow("INSERT INTO ec_image(article_id,image_url) VALUES(?,?)",array($result_query1,$fileNameNew));

					   move_uploaded_file($array_of_images_tmps[$i],$fileDestination);


					$i=$i+1;


					         
				}


				



				$donnees=array();
				if(!empty($POST['taille_id'])){
				foreach ($POST['taille_id'] as $cle => $valeur) {
				$tailleQte=$valeur.':'.$_POST[$valeur];
				foreach ($POST['couleur_id'] as $key => $value) {
				if(!empty($value)){
				$value=str_replace(' ', '_', $value);
				$nouveau=explode('|', $value);
				$nouveau0=!empty($nouveau[0])?$nouveau[0]:'';
				$nouveau1=!empty($nouveau[1])?$nouveau[1]:'';
				if($valeur==$nouveau[0]){
				$donnees['atcq_taille']=$valeur;
				$donnees['atcq_qte']=$_POST[$value];
				$donnees['atcq_couleur']=$nouveau[1];
				// $donnees['produit_id']=$reponse;
				// $couleur_taille=new atout_taille_couleur_qte($donnees);
				// $Mcouleur_taille=new atout_taille_couleur_qteManager($db);
				// $rep=$Mcouleur_taille->Enregistrer($couleur_taille);

				   $result_query3 = $famille->insertRow("INSERT INTO ec_parametre_article(parametre_article_couleur,parametre_article_taille_pointure,parametre_article_quantite,article_id) VALUES(?,?,?,?)",array($donnees['atcq_couleur'],$donnees['atcq_taille'],$donnees['atcq_qte'],$result_query1));


				   $result_query4 = $famille->insertRow("INSERT INTO ec_parametre_liste(parametre_liste_liste,parametre_base_id) VALUES(?,?)",array($donnees['atcq_taille'],2));
				}
				}
				}

				}
				}














				$data['code'] =1;
				$data['message']=" l'article ".$article_libelle."  est enregistré avec succès";











			}






		}else{


			$data['code'] =2;
			$data['message']=" l'article ".$article_libelle."  est déjà enregistré ici";


			  
		}






		   echo json_encode($data);
		    break;

	case 'liste_articles':


		$famille = new Ec_familleManager($db);
		$query_result1 = $famille->getRows("SELECT * FROM ec_article ORDER BY article_id  DESC",array());
		    
		      require("Vues/backend/liste_articles.php");
		break;

	case 'delete_article_run': 
		$id=$_POST['id'];

		$famille = new Ec_familleManager($db);

		$result_query = $famille->deleteRow("DELETE FROM ec_article WHERE article_id=?",array($id));

		

		

		echo json_encode($id);
		break;

	case 'many_article_deletes':
		
				$famille = new Ec_familleManager($db);


				foreach($_POST['id'] as $id){

						$result_query = $famille->deleteRow("DELETE FROM ec_article WHERE article_id=?",array($id));
				}

				$data['message'] = "ok";
				
				echo json_encode($data);
		break;

	case 'aperçu_article': 

		$famille = new Ec_familleManager($db);

		

		   if(isset($_GET["article_id"])){

			    $article_id = (int)$_GET["article_id"];

				$result_query1 = $famille->getRow("SELECT * FROM ec_article WHERE article_id=?",array($article_id));

				if($result_query1){



					$result_query2 = $famille->getRow("SELECT * FROM ec_categorie WHERE categorie_id=?",array($result_query1->categorie_id));

					$result_query3 = $famille->getRows("SELECT * FROM ec_image WHERE article_id=?",array($result_query1->article_id));


					require("Vues/backend/aperçu_article.php");


				}else{

					header("Location:?p=liste_articles");
					  
				}



				
		   }else{

			     header("Location:?p=liste_articles");
		   }

		     
		break;

	default:

		   require("Vues/frontend/index.php");
		break;
}

 

 ?>

 