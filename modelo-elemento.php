<?php 
		include_once 'includes/funciones/bd_conexion.php';
		$cantidad=$_POST['cantidad'];
        $id=$_POST['id'];
        
	try {

		$stmt=$conn->prepare("INSERT INTO carrito (idUsuario,idArticulo,Cantidad,Comprado) VALUES (1,?,?,0)");
		$stmt->bind_param("ii",$id,$cantidad);
		$stmt->execute();
		$id_registro=$stmt->insert_id;
		if($id_registro>0){
			$respuesta=array(
				'respuesta'=>'exito',
				'id_articulo'=> $id_registro
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