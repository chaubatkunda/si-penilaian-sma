<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-file-text-o"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                <!-- <h3 class="tile-title">Register</h3> -->
                <?php echo $this->session->flashdata('warning'); ?>
                <div class="tile-body">
                    <form method="post" action="" class="form-horizontal">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kompetensi Dasar</label>
                            <div class="col-md-8">
                                <textarea name="kd" id="" class="form-control"><?php echo $kd->kd; ?></textarea>
                                <small class="text-danger"><?php echo form_error('kd'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-8">
                                <textarea name="ket" id="" class="form-control"><?php echo $kd->sub_kd; ?></textarea>
                                <small class="text-danger"><?php echo form_error('ket'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Materi Pembelajaran</label>
                            <div class="col-md-8">
                                <textarea name="kds" id="" class="form-control"><?php echo $kd->ket_kd; ?></textarea>
                                <small class="text-danger"><?php echo form_error('kds'); ?></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
                                <a href="<?php echo base_url('kompetensi.dasar'); ?>" class="btn btn-danger">
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