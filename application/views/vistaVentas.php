<?php foreach ($ventasGuardadas as $datos ): ?>
    		
        <tr>
        	<td>
				<?php echo $datos['cliente'] ?>
			</td>
			<td>
				<?php echo $datos['monto'] ?>
			</td>
			<td>
				<?php echo $datos['descripcion'] ?>
			</td>
			<td>
				<?php echo $datos['fecha'] ?>
			</td>

		 	<td>
		 		<a href=\"index/modificarGastosGuardados?id=<?php echo $datos['id'] ?>\">
		 			<p class='modificarGastos'>
		 				<i class='fa fa-pencil fa-2x'>
		 				</i>
					</p>
				</a>
				<a onClick='return eliminarGastos()' href="index/eliminarGastos?id=<?php echo $datos['id'] ?>">
					<p class='eliminarGasto'>
						<i class='fa fa-trash-o fa-2x'>
		 				</i>
		 			</p>
		 		</a>
		 	</td>
		</tr>	
   <?php endforeach ?>