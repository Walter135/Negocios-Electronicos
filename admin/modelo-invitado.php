<?php 
		include_once 'funciones/funciones.php';
		$nombre=$_POST['nombre_invitado'];
		$apellido=$_POST['apellido_invitado'];
		$biografia=$_POST['biografia_invitado'];

if($_POST['registro']=='nuevo'){
	/*
	$respuesta=array(
				'post'=>$_POST,
				'file'=>$_FILES
				);
	die(json_encode($respuesta));
	*/
	$directorio="../img/invitados/";
	if(!is_dir($directorio)){
		mkdir($directorio,0755,true);
	}

	if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio.$_FILES['archivo_imagen']['name'])){
		$imagen_url=$_FILES['archivo_imagen']['name'];
		$imagen_resultado="Se subio correctamente";
	}else{
		$respuesta=array(
				'respuesta'=>error_get_last()
			);
	}
	try {
		$stmt=$conn->prepare("INSERT INTO invitados (nombre_invitado,apellido_invitado,descripcion,url,editado) VALUES (?,?,?,?,NOW())");
		$stmt->bind_param("ssss",$nombre,$apellido,$biografia,$imagen_url);
		$stmt->execute();
		$id_registro=$stmt->insert_id;
		if($id_registro>0){
			$respuesta=array(
				'respuesta'=>'exito',
				'id_categoria'=> $id_registro,
				'resultado_imagen'=>$imagen_resultado
			);
		}else{
			$respuesta=array(
				'respuesta'=>'error'
			);
		}
		$stmt->close();
		$conn->close();

		die(json_encode($respuesta));
	} catch (Exception $e) {
		$respuesta=array(
			'respuesta'=>$e->getMessage()
		);
	}
	}

	if($_POST['registro']=='eliminar'){

		try {		
		$id_borrar=$_POST['id'];
		$stmt=$conn->prepare('DELETE FROM invitados WHERE invitado_id = ?');
		$stmt->bind_param('i',$id_borrar);
		$stmt->execute();
		if ($stmt->affected_rows) {
			$respuesta=array(
				'respuesta'=>'exito',
				'id_eliminado'=>$id_borrar
			);
		}else{
			$respuesta=array(
				'respuesta'=>'Error!!!'
			);
		}
		$stmt->close();
		$conn->close();
		} catch (Exception $e) {
			$respuesta=array(
				'respuesta'=>$e->getMessage()
			);
		}
		
		die(json_encode($respuesta));
	}


	if($_POST['registro']=='actualizar'){

		$directorio="../img/invitados/";
		if(!is_dir($directorio)){
			mkdir($directorio,0755,true);
		}

		if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio.$_FILES['archivo_imagen']['name'])){
			$imagen_url=$_FILES['archivo_imagen']['name'];
			$imagen_resultado="Se subio correctamente";
		}else{
			$respuesta=array(
					'respuesta'=>error_get_last()
				);
		}
			try {
					$id=$_POST['id_registro'];
					if ($_FILES['archivo_imagen']['size']>0) {
						$stmt=$conn->prepare('UPDATE invitados set nombre_invitado=?,apellido_invitado=?,descripcion=?,url=?,editado=NOW() where invitado_id=?');
						$stmt->bind_param('ssssi',$nombre,$apellido,$biografia,$imagen_url,$id);
					}
					else{
						$stmt=$conn->prepare('UPDATE invitados set nombre_invitado=?,apellido_invitado=?,descripcion=?,editado=now() where invitado_id=?');
						$stmt->bind_param('sssi',$nombre,$apellido,$biografia,$id);
					}					
					
					$stmt->execute();
				if ($stmt->affected_rows) {
					$respuesta=array(
						'respuesta'=>'exito',
						'id_actualizado'=>$id
					);
				}else{
					$respuesta=array(
						'respuesta'=>'Error!!!'
					);
				}
				$stmt->close();
				$conn->close();
		} catch (Exception $e) {
			$respuesta=array(
				'respuesta'=>$e->getMessage()
			);
		}
			die(json_encode($respuesta));
	}	
?>