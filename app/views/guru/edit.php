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
                <?php echo $this->session->flashdata('warning'); ?>
                <div class="tile-body">
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group row">
                            <label class="control-label col-md-3">NIP</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kode_guru" value="<?php echo $guru->nip; ?>" readonly>
                                <small class="text-danger"><?php echo form_error('kode_guru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-8">
                                <input class="form-control" name="nama_guru" type="text" value="<?php echo $guru->nama_guru; ?>">
                                <small class="text-danger"><?php echo form_error('nama_guru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-8">
                                <strong class="badge badge-primary text-white">
                                    <?php
                                    if ($guru->jabatan == 1) {
                                        echo "Wakil Kurikulum";
                                    } elseif ($guru->jabatan == 3) {
                                        echo "Guru";
                                    }
                                    ?>
                                </strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">No Tlp/Hp</label>
                            <div class="col-md-8">
                                <input class="form-control" name="no_tlp" type="text" value="<?php echo $guru->no_tlp; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat"><?php echo $guru->alamat_guru; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
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