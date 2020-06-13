<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> <?php echo $title; ?></h1>
            <!-- <p>Sample forms</p> -->
        </div>
        <!-- <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul> -->
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
                                <input class="form-control" type="text" name="nisn" placeholder="NISN">
                                <small class="text-danger"><?php echo form_error('nisn'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <input class="form-control" name="nama_siswa" type="text" placeholder="Nama Siswa">
                                <small class="text-danger"><?php echo form_error('nama_siswa'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="jk" value="1">Pria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="jk" value="2">Wanita
                                    </label>
                                </div>
                                <small class="text-danger"><?php echo form_error('jk'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input class="form-control" name="tempat_lhr" type="text" placeholder="Tempat Lahir">
                                <small class="text-danger"><?php echo form_error('tempat_lhr'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input class="form-control" name="tgl_lahir" id="demoDate" type="text" placeholder="Select Tanggal" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Foto</label>
                            <div class="col-md-8">
                                <input class="form-control" name="foto" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kelas</label>
                            <div class="col-md-8">
                                <select name="kls" class="form-control" id="demoSelect">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($kelas as $kls) : ?>
                                        <option value="<?php echo $kls->kode_kelas; ?>"><?php echo $kls->nama_kelas; ?></option>
                                    <?php endforeach; ?>
                                </select>
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
                <!-- <div class="tile-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</main>