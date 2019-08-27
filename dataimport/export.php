<?php
// Bootstrap Drupal
define('DRUPAL_ROOT', '/var/www/html/drupal-7.52');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);


$query = new EntityFieldQuery();


  $entities = $query->entityCondition('entity_type', 'node')
  ->propertyCondition('type', 'francesinha')
  ->propertyCondition('status', '1')
  ->execute();

  foreach ($entities['node'] as $entity) {

    $node = node_load($entity->vid);

  	echo ("$"."nodearray[".$entity->vid."]['nome']='".clean($node->title)."';<br>");
  	echo ("$"."nodearray[".$entity->vid."]['created']='".$node->created."';<br>");  	
  	echo ("$"."nodearray[".$entity->vid."]['local']='".clean($node->field_local[LANGUAGE_NONE][0]['value'])."';<br>");  	
  	echo ("$"."nodearray[".$entity->vid."]['morada']='".clean($node->field_morada[LANGUAGE_NONE][0]['value'])."';<br>");  	
	echo ("$"."nodearray[".$entity->vid."]['coordenadas']='".$node->field_mapa[LANGUAGE_NONE][0]['v']."';<br>");  	
  	echo ("$"."nodearray[".$entity->vid."]['foto']='".$node->field_foto[LANGUAGE_NONE][0]['value']."';<br>");  	
  	echo ("$"."nodearray[".$entity->vid."]['url']='".drupal_get_path_alias('node/'.$node->vid)."';<br>");  	
	echo ("$"."nodearray[".$entity->vid."]['cronica']='".clean($node->body[LANGUAGE_NONE][0]['value'])."';<br>");  	
	echo ("$"."nodearray[".$entity->vid."]['veredicto']='".veredicto($node->field_veredicto[LANGUAGE_NONE][0]['value'])."';<br>");  	
	echo ("$"."nodearray[".$entity->vid."]['pontuacao']='".$node->field_classificacao[LANGUAGE_NONE][0]['value']."';<br>");  	
	echo ("$"."nodearray[".$entity->vid."]['data']='".$node->field_data[LANGUAGE_NONE][0]['value']."';<br>");  	
	echo ("$"."nodearray[".$entity->vid."]['uid']='8';<br>");  	

  }
 // echo "LALALA";
  var_dump($node);


function clean($str){
	$str = preg_replace("/\[...\]/", "", $str);
	$str = str_replace("\n<!--break-->","",$str);
	$str = str_replace("'", "\'", $str);
	$str = htmlspecialchars($str);

	return str_replace("\n", "\\n", $str);
	
}


function veredicto($str){
	switch($str){
		case 'Excepcional':
			$str="5";
			break;
		case 'Muito Boa':
			$str="4";
			break;
		case 'Boa':
			$str="3";
			break;
		case 'Razoável':
			$str="3";
			break;
		case 'Suficiente':
			$str="2";
			break;
		case 'Insuficiente':
			$str="2";
			break;
		default:
			$str="1";	
			break;
					
	}
	return $str;
	
}

?>
