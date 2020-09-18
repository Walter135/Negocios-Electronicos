<?php 
		include_once 'includes/funciones/bd_conexion.php';

	if($_POST['registro']=='eliminar'){

		try {		
		$id_borrar=$_POST['id'];
		$stmt=$conn->prepare('DELETE FROM carrito WHERE id = ?');
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
?>