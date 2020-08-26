<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-plus"></i> <?php echo $title; ?></h1>
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
              <label class="control-label col-md-3">Siswa</label>
              <div class="col-md-8">
                <select name="siswa" class="form-control kelas-siswa">
                  <option value="">--Pilih--</option>
                  <?php foreach ($siswa as $s) : ?>
                    <option value="<?php echo $s->nis; ?>"><?php echo $s->nama; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="text-danger"><?php echo form_error('siswa'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3"></label>
              <div class="col-md-8 tile-footer">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-paper-plane-o"></i> Simpan</button>
                <a href="<?php echo base_url('kelas/' . $kode); ?>" class="btn btn-danger">
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