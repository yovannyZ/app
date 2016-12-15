<table id="example" class="table table-hover table-condensed table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>USUARIO</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>USUARIO</th>
                <th>ESTADO</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php
        	foreach ($usuarios as $usuario) {
        	?>
        		<tr class="<?php echo ($usuario->estado=='INC')?'danger':'' ?>">
	                <td><?=$usuario->usuario?></td>
	                <td ><?=$usuario->estado?></td>
            	</tr>
            <?php
        	}
            ?>
        </tbody>
    </table>