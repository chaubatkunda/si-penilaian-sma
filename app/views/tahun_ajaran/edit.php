<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> <?php echo $title; ?></h1>
            <!-- <p>S ample forms</p> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="tile">
                <!-- <h3 class="tile-title">Register</h3> -->
                <div class="tile-body">
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tahun Ajaran</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="thn_ajaran" value="<?php echo $tahun->thn_ajaran; ?>" placeholder="Tahun Ajaran" autocomplete="off">
                                <small class="text-danger"><?php echo form_error('thn_ajaran'); ?></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
                                <a href="<?php echo base_url('tahun_ajaran'); ?>" class="btn btn-danger">
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