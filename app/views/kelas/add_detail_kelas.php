<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-home"></i> <?php echo $title; ?></h1>
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
              <label class="control-label col-md-4">Siswa</label>
              <div class="col-md-6">
                <select name="siswa" class="form-control" readonly>
                  <option value="<?php echo $siswa->nis; ?>"><?php echo $siswa->nama; ?></option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-4">Ke Kelas</label>
              <div class="col-md-6">
                <select name="kelas" class="form-control">
                  <option value="">Kelas</option>
                  <?php foreach ($kelas as $k) : ?>
                    <option value="<?php echo $k->kode_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="text-danger"><?php echo form_error('kelas'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-4">Tahun Ajaran</label>
              <div class="col-md-6">
                <select name="tahun" class="form-control">
                  <option value="">Tahun Ajaran</option>
                  <?php foreach ($thn_ajaran as $t) : ?>
                    <option value="<?php echo $t->id; ?>"><?php echo $t->thn_ajaran; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="text-danger"><?php echo form_error('tahun'); ?></small>
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