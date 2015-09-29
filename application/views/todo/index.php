			<h2>Todo - Liste de tâches - Codeigniter 3</h2>
			
			<!--  Formulaire d'ajout -->
			<br />
			<?php echo form_open('todo/add'); ?>
				<div class="form-group">
					<div class="controls">
			        	<div class="input-group">
				            <input type="texte" class="form-control" name="text" id="input_add" placeholder="AJOUTER UNE TÂCHE" />
				            <span class="input-group-btn">
				            	<button type="button" class="btn btn-primary" onclick="ajax_add('todo/ajax_add',text.value,'#input_add')">
				            	AJOUTER
				            	</button>
				            </span>
				            <small class="text-danger"></small>
				        </div>
				    </div>
				</div>
	 		<?php echo form_close(); ?>
		
			<!--  Todos -->
			<?php if (isset($todos)): ?>
			    <?php include_once('_todos.php'); ?>
			<?php endif; ?>
		
