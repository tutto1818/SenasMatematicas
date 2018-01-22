<div class="container">
	<div class="row">
		<div class="col s12 m12 l12">
			
		</div>
		<div class="col s12 m12 l12 center"><br>
			<?php if(empty($home->controlador()))
			{
				?>
				<div class="slider">
					    <ul class="slides">
					    	<?php for($i=0;$i<2;$i++){ ?>
					      <li>
					        <img src="<?php echo Link::deruta(); ?>themes/ppal/<?php echo $i+1; ?>.jpg"> <!-- random image -->
					      </li>
					      <?php } ?>
					    </ul>
					  </div>
				<?php
			}else{
				
				$home->controller();
			} ?>
		</div>
	</div>
</div>
<br><br><br>

<script type="text/javascript">
	$(document).ready(function(){
		$('body').hide().fadeIn(5000);
	});
</script>