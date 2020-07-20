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
                            <label class="control-label col-md-3">Kode Guru</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kode_guru" placeholder="Kode Guru">
                                <small class="text-danger"><?php echo form_error('kode_guru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-8">
                                <input class="form-control" name="nama_guru" type="text" placeholder="Nama Guru">
                                <small class="text-danger"><?php echo form_error('nama_guru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">No Tlp/Hp</label>
                            <div class="col-md-8">
                                <input class="form-control" name="no_tlp" type="text" placeholder="No Tlp/Hp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-8">
                                <select name="jabatan" id="" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="1">Kepala Sekolah</option>
                                    <option value="2">Waka</option>
                                    <option value="3">Guru</option>
                                </select>
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
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan</button>
                                <a href="<?php echo base_url('guru'); ?>" class="btn btn-danger">
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