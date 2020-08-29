<?php 
		include_once 'funciones/funciones.php';
		$nombre_cat=$_POST['nombre_categoria'];
		$icono=$_POST['icono'];

if($_POST['registro']=='nuevo'){

	try {

		$stmt=$conn->prepare("INSERT INTO categoria_evento (cat_evento,icono,editado) VALUES (?,?,NOW())");
		$stmt->bind_param("ss",$nombre_cat,$icono);
		$stmt->execute();
		$id_registro=$stmt->insert_id;
		if($id_registro>0){
			$respuesta=array(
				'respuesta'=>'exito',
				'id_categoria'=> $id_registro
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
		$stmt=$conn->prepare('DELETE FROM categoria_evento WHERE id_categoria = ?');
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

			try {
					$id=$_POST['id_registro'];
					$stmt=$conn->prepare('UPDATE categoria_evento set cat_evento=?,icono=?, editado=NOW() where id_categoria=?');
					$stmt->bind_param('ssi',$nombre_cat,$icono,$id);
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