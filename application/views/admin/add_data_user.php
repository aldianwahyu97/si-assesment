<div class="modal fade" id="modal-addDataUser">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Tambah User</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<form action="/action_page.php">
				<div class="form-group">
					<label for="nip">NIP:</label>
					<input type="text" class="form-control" id="nip">
				</div>
				<div class="form-group">
					<label for="nama">Nama:</label>
					<input type="text" class="form-control" id="nama">
				</div>
				<div class="form-group">
					<label for="level">Level</label>
					<select class="form-control" id="level">
						<option>Kalapas</option>
						<option>Kasi</option>
						<option>Kasubsi</option>
						<option>Assesor</option>
					</select>
				</div>
			</form>
		</div>
		<div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			<button type="button" class="btn btn-primary">Simpan</button>
		</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
