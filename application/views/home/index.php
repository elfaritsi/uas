<div class="container">

	<div class="row mt-4 mb-2">
		<div class="col-md-6 mx-auto">
			<?= $this->session->flashdata('flash'); ?>		
		</div>
	</div>

	<div class="row mt-2">
		<div class="col-md-6 mx-auto">

			<div class="card shadow">
				<div class="card-header text-center">
					<h4>Tambah Data Mahasiswa <br>STMIK Triguna Dharma</h4>
				</div>
				<div class="card-body">

					<form method="post" action="">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" name="nama" id="nama" autocomplete="off" value="<?= set_value('nama'); ?>" >
							<small class="form-text text-danger"> <?= form_error('nama'); ?> </small>
						</div>

						<div class="form-group">
							<label for="nirm">Nirm</label>
							<input type="text" class="form-control" name="nirm" id="nirm" autocomplete="off" value="<?= set_value('nirm'); ?>" >
							<small class="form-text text-danger"> <?= form_error('nirm'); ?> </small>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email" autocomplete="off" value="<?= set_value('email'); ?>" >
							<small class="form-text text-danger"> <?= form_error('email'); ?> </small>
						</div>

						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" name="jurusan" id="jurusan">
								<option value="Manajemen Informatika">Manajemen Informatika</option>
								<option value="Teknik Komputer">Teknik Komputer</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Sistem Komputer">Sistem Komputer</option>
							</select>
						</div>


						<button type="submit" class="btn btn-primary float-right mt-2">Tambah</button>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>

