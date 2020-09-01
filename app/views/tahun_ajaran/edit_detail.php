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
                <input class="form-control" type="text" name="thn_ajaran" value="<?php echo $detail->thn_ajaran; ?>" placeholder="Tahun Ajaran" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Keterangan</label>
              <div class="col-md-8">
                <textarea class="form-control" name="Ket_thn" rows="4" placeholder="Keterangan"><?php echo $detail->ket_thn_ajaran; ?></textarea>
                <small class="text-danger"><?php echo form_error('Ket_thn'); ?></small>
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-3"></label>
              <div class="col-md-8 tile-footer">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-paper-plane-o"></i> Simpan
                </button>
                <a href="<?php echo base_url('tahun_ajaran/detail/' . $tahun->id); ?>" class="btn btn-danger">
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