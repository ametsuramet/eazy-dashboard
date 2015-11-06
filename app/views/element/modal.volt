<div class="modal fade" id="change-website">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" action="{{url.getBaseUri()}}setting/changeWeb">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Change Website</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Website</label>
					<select class="form-control" name="id_website">
						<?php foreach($auth->web as $w) : ?>
							<option value="<?= $w['id'] ?>" <?php  $auth->id_web==$w['id']? print("SELECTED") :null?> >
								<?= $w['title'] ?>
							</option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="change-website">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="images-browser">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-body images-browser">
				<h2 class="modal-title">Images Browser</h2>
				<div class="images-browser-wrapper"></div>
			</div>
			
		</div>
	</div>
</div>