
	<div class="col-sm-12"> 
		
		<div class="box">
			
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
		
			<!--  Infos
			<br />
				<?php if(!$user): ?>
					<p>
					Pour gérer votre propre liste, <a href="inscription">inscrivez vous</a><br />
					C'est gratuit.
					</p>
				<?php endif; ?>
				<?php if($user): ?>
					<p>
					Ceci est votre propre liste.<br />
					Seul vous y avez accés.
					</p>
				<?php endif; ?>
			<br />
			-->
			<div class="infos">
					<p>
						Histoire de ne pas prendre de mauvaises habitudes en utilisant toujours le même Framework PHP (Laravel dans mon cas), je réalise de temps en temps quelques bouts de code sous différents Frameworks PHP. 
						Ici un système de liste de tâches sous Codeigniter.<br />
						Codeigniter est un framework léger et facile à prendre en main. En revanche, il manque cruellement de fonctionnalités par rapport à ces principaux concurrents. Pas de système de template, pas d'orm. 
						J'ai ajouté quelques classes basiques qui permettent de combler ces manques. Vous l'aurrez compris, ce n'est pas mon framework favori. <br />
						<!--
						Des version similaires de ce système sous d'autres Frameworks (CakePHP, FuelPHP et Laravel) sont également disponible sur Github. 
						Je vous recommande la version sous le framework Laravel (verison 5) que je trouve plus complet, intuitif et logique que les autres.
						-->
					</p>
			</div>
					
		</div>
		
    </div>
