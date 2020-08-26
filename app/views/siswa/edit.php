<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> <?php echo $title; ?></h1>
            <!-- <p>Sample forms</p> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                <!-- <h3 class="tile-title">Register</h3> -->
                <div class="tile-body">
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group row">
                            <label class="control-label col-md-3">NISN</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nisn" value="<?php echo $siswa->nis; ?>" placeholder="NISN">
                                <small class="text-danger"><?php echo form_error('nisn'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <input class="form-control" name="nama_siswa" type="text" value="<?php echo $siswa->nama; ?>" placeholder="Nama Siswa">
                                <small class="text-danger"><?php echo form_error('nama_siswa'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input class="form-control" name="tempat_lhr" type="text" placeholder="Tempat Lahir" value="<?php echo $siswa->tempat_lahir; ?>">
                                <small class="text-danger"><?php echo form_error('tempat_lhr'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input class="form-control" name="tgl_lahir" id="demoDate" type="text" placeholder="Select Tanggal" value="<?php echo indoDate($siswa->tgl_lahir); ?>" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat"><?php echo $siswa->alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Foto</label>
                            <div class="col-md-8">
                                <input class="form-control" name="foto" type="file">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8">
                                <img src="<?php echo base_url('assets/foto/siswa/') . $siswa->foto; ?>" class="img-thumbnail" width="40%">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
                                <a href="<?php echo base_url('siswa'); ?>" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>