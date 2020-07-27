<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> <?php echo $title; ?></h1>
            <!-- <p>Sample forms</p> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="tile">
                <!-- <h3 class="tile-title">Register</h3> -->
                <?php echo $this->session->flashdata('warning'); ?>
                <div class="tile-body">
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">NIP</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="nip" placeholder="NIP">
                                        <small class="text-danger"><?php echo form_error('nip'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nama</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="nama" type="text" placeholder="Nama">
                                        <small class="text-danger"><?php echo form_error('nama'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">No Tlp/Hp</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="no_tlp" type="text" placeholder="No Tlp/Hp">
                                        <small class="text-danger"><?php echo form_error('no_tlp'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Alamat</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat"></textarea>
                                        <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="username" placeholder="Username">
                                        <small class="text-danger"><?php echo form_error('username'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <input class="form-control" name="password1" type="text" placeholder="Password">
                                        <small class="text-danger"><?php echo form_error('password1'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <input class="form-control" name="password2" type="text" placeholder="Konfirmasi Password">
                                        <small class="text-danger"><?php echo form_error('password2'); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
                                <a href="<?php echo base_url('tata_usaha'); ?>" class="btn btn-danger">
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