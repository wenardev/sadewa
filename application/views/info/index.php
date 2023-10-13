<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4 class="text-primary"><i class="fa fa-id-badge" aria-hidden="true"></i> <?= $title; ?></h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">Info</li>
								<li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
							</ol>
						</nav>
					</div>
				</div>
			</div>

			<?= $this->session->flashdata('message'); ?>
			<div class="row">

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
					<?= form_open_multipart('info/ubah_pimpinan'); ?>
					<div class="pd-20 card-box height-100-p">
						<div class="profile-photo">
							<a href="modal" data-toggle="modal" data-target="#ubah" class="edit-avatar"><i class="fa fa-pencil"></i></a>
							<img src="<?= base_url('assets/deskapp/vendors/images/kelurahan/') . $kelurahan['image_pimpinan']; ?>" alt="image" class="rounded-circle" style="height: 170px;">

							<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="col-lg">
												<div class="row">
													<div class="col-md-12 col-sm-12 text-center">
														<div class="form-group">
															<img src="<?= base_url('assets/deskapp/vendors/images/kelurahan/') . $kelurahan['image_pimpinan']; ?>" alt="" class="avatar-photo" style="height: 180px;">
															<br />
															<input type="file" id="image_pimpinan" name="image_pimpinan" class="form-control text-dark">
														</div>

													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Nama Pimpinan</label>
															<input type="text" class="form-control" name="nama_pimpinan" id="nama_pimpinan" placeholder="Nama..." value="<?= ucwords($kelurahan['nama_pimpinan']); ?>">
															<?= form_error('nama_pimpinan', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>NIP Pimpinan</label>
															<input type="number" class="form-control" name="nip_pimpinan" id="nip_pimpinan" placeholder="NIP..." value="<?= $kelurahan['nip_pimpinan']; ?>">
															<?= form_error('nip_pimpinan', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Email Pimpinan</label>
															<input type="email" class="form-control" name="email_pimpinan" id="email_pimpinan" placeholder="email_pimpinan" value="<?= $kelurahan['email_pimpinan']; ?>">
															<?= form_error('email_pimpinan', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>No Telephone</label>
															<input type="number" class="form-control" name="telephone_pimpinan" id="telephone_pimpinan" placeholder="No Telephone..." value="<?= $kelurahan['telephone_pimpinan']; ?>">
															<?= form_error('telephone_pimpinan', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary">Ubah</button>
										</div>
									</div>
								</div>
							</div>

						</div>
						<h5 class="text-center h5 mb-0"> <?= $kelurahan['nama_pimpinan']; ?></h5>
						<p class="text-center text-muted font-14">NIP: <?= $kelurahan['nip_pimpinan']; ?></p>
						<div class="profile-info">
							<h5 class="mb-20 h5 text-blue">Imformasi Pimpinan</h5>
							<ul>
								<li>
									<span>Email:</span>
									<?= $kelurahan['email_pimpinan']; ?>
								</li>
								<li>
									<span>No Telephone:</span>
									<?= $kelurahan['telephone_pimpinan']; ?>
								</li>
							</ul>
						</div>
					</div>
					</form>
				</div>

				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
					<?= form_open_multipart('info'); ?>
					<div class="pd-20 card-box height-100-p">
						<div class="profile-photo">
							<img src="<?= base_url('assets/deskapp/vendors/images/kelurahan/') . $kelurahan['image_instansi']; ?>">
						</div>
						<br /><br /><br />
						<div class="profile-info">

							<div class="row align-items">
								<div class="col-8">
									<h5 class="mb-20 h5 text-blue">Informasi Instansi</h5>
								</div>
								<div class="col-4 text-right">
									<button type="submit" class="btn btn-sm btn-primary">Ubah</button>
								</div>
							</div>

							<form>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Nama Instansi</label>
											<input type="text" class="form-control" name="nama_instansi" id="nama_instansi" value="<?= ucwords($kelurahan['nama_instansi']); ?>">
											<?= form_error('nama_instansi', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Jenis Instansi</label>
											<input type="text" class="form-control" name="jenis_instansi" id="jenis_instansi" value="<?= ucwords($kelurahan['jenis_instansi']); ?>">
											<?= form_error('jenis_instansi', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Email Instansi</label>
											<input type="email" class="form-control" name="email_instansi" id="email_instansi" value="<?= $kelurahan['email_instansi']; ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>No Telephone Instansi</label>
											<input type="number" class="form-control" name="telephone_instansi" id="telephone_instansi" value="<?= $kelurahan['telephone_instansi']; ?>">
										</div>
									</div>
								</div>

								<div class=" row">
									<div class="col-md-9 col-sm-12">
										<div class="form-group">
											<label>Alamat</label>
											<input type="text" class="form-control" name="alamat" id="alamat" value="<?= ucwords($kelurahan['alamat']); ?>">
										</div>
									</div>
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>Kode Pos</label>
											<input type="number" class="form-control" name="kode_pos" id="kode_pos" value="<?= $kelurahan['kode_pos']; ?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Kelurahan</label>
											<input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= ucwords($kelurahan['kelurahan']); ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Kecamatan</label>
											<input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= ucwords($kelurahan['kecamatan']); ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Kabupaten</label>
											<input type="text" class="form-control" name="kabupaten" id="kabupaten" value="<?= ucwords($kelurahan['kabupaten']); ?>">
										</div>
									</div>
								</div>

							</form>

						</div>
					</div>
					</form>
				</div>


			</div>
		</div>
		<div class="footer-wrap pd-20 mb-20 card-box">
			<?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
		</div>
	</div>
</div>