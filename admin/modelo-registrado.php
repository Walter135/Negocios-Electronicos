<?php 
		include_once 'funciones/funciones.php';
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$email=$_POST['email'];
		//Boletos
		$boletos_adquiridos=$_POST['boletos'];
		//camisas y etiquetas
		$camisas=$_POST['pedido_extra']['camisas']['cantidad'];
		$etiquetas=$_POST['pedido_extra']['etiquetas']['cantidad'];
		$pedido=productos_json($boletos_adquiridos,$camisas,$etiquetas);
		$total=$_POST['total_pedido'];
		$regalo=$_POST['regalo'];
		$evento=$_POST['registro_evento'];
		$registros_eventos=eventos_json($evento);

if($_POST['registro']=='nuevo'){

	try {
		$stmt=$conn->prepare("INSERT INTO registrados (nombre_registrado,apellido_registrado,email_registrado,fecha_registro,pases_articulos,talleres_registrados,regalo,total_pagado,pagado) VALUES (?,?,?,NOW(),?,?,?,?,1)");
		$stmt->bind_param("sssssis",$nombre,$apellido,$email,$pedido,$registros_eventos,$regalo,$total);
		$stmt->execute();
		$id_registro=$stmt->insert_id;
		if($id_registro>0){
			$respuesta=array(
				'respuesta'=>'exito',
				'ID_Registrado'=> $id_registro
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
		$stmt=$conn->prepare('DELETE FROM registrados WHERE ID_Registrado = ?');
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
					$stmt=$conn->prepare('UPDATE registrados set nombre_registrado=?,apellido_registrado=?,email_registrado=?, pases_articulos=?, talleres_registrados=?, regalo=?, total_pagado=?,pagado=1 where ID_Registrado=?');
					$stmt->bind_param('sssssisi',$nombre,$apellido,$email,$pedido,$registros_eventos,$regalo,$total,$id);
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