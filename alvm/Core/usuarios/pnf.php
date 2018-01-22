<div class="row center">
	<div class="col s12 center">
			<table class="striped">
				<tr>
					<?php for($i=0;$i<count($datos);$i++){ ?>
					<th class="center"><a href="<?php echo Link::deruta(); ?>usuarios/<?php Users::nom_url($datos[$i]['pnf']); ?>"><?php echo $datos[$i]['pnf']; ?></a></th>
					<?php } ?>
				</tr>
			</table>
	</div>	
</div>
