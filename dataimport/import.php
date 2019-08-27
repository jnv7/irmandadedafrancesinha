<?php
// Bootstrap Drupal
define('DRUPAL_ROOT', '/var/www/drupal7');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

require_once 'francesinhas.php';


$valuesF = array(
  'type' => 'francesinha',
  'uid' => 3,
  'status' => 1,
  'comment' => 0,
  'promote' => 0,
  'created' => 0,
);

$valuesC = array(
  'type' => 'cronica',
  'uid' => 3,
  'status' => 1,
  'comment' => 0,
  'promote' => 0,
   'created' => 0,
);

echo "Já está tudo importado!";

exit;
$entity = null;
$c=0;
foreach($nodearray as $node){
	$c++;
	if($c<=7){
		continue;
	}

	$valuesF['created'] = $node['created'];
	$valuesC['created'] = $node['created'];
	
	
	$entity = entity_create('node', $valuesF);
	$ewrapper = entity_metadata_wrapper('node', $entity);	
	
	$ewrapper->title->set($node['nome']);
	
	$ewrapper->field_morada->set($node['morada']);
	$ewrapper->field_local->set($node['local']);
	$entity->field_coordenadas[LANGUAGE_NONE][0] = array(
		'value' => '<gmap>'.$node['coordenadas'].'</gmap>',
		'format' => 'francesinha_filters',
	);
	$entity->field_foto[LANGUAGE_NONE][0] = array(
		'value' => '<fbfoto>'.$node['foto'].'</fbfoto>',
		'format' => 'francesinha_filters',
	);

	$ewrapper->save();	

	$new_francesinha_id = $ewrapper->getIdentifier();
	
	$path = array('source' => "node/$new_francesinha_id", 'alias' => $node['url']);
	path_save($path);

	$entity = entity_create('node', $valuesC);
	$ewrapper = entity_metadata_wrapper('node', $entity);

	$ewrapper->title->set($node['nome']."@".substr($node['data'],0,10));	
	
	
	$cronica = $node['cronica'];
	$cronica = str_replace("\\n", "\n", $cronica);
	$cronica = str_replace("[FFAR]", "", $cronica);
	$cronica = str_replace("[FFER]", "", $cronica);
	$ewrapper->body->set(array('value' => $cronica));
	
	$ewrapper->field_data->set();	
	
	$entity->field_data[LANGUAGE_NONE][0] = array(
	   'value' => substr($node['data'],0,10),
	   'timezone' => 'UTC',
	   'timezone_db' => 'UTC',
	 );
	$ewrapper->field_veredicto->set($node['veredicto']);	
	$ewrapper->field_pontuacao->set($node['pontuacao']);
	$ewrapper->field_fecho_temporada->set(1);
	$ewrapper->field_temporada->set(1);
	
	$ewrapper->field_francesinha->set(intval($new_francesinha_id));
	$ewrapper->field_confronto->set(9);

	$ewrapper->save();	

	$new_cronica_id = $ewrapper->getIdentifier();

	$path = array('source' => "node/$new_cronica_id", 'alias' => "cronica/$new_cronica_id");
	path_save($path);	
		
	
	echo "criados os nós: francesinha/$new_francesinha_id<br>";
	echo "cronica/$new_cronica_id<br>";
	
	ob_flush();
    flush();
    

}

?>