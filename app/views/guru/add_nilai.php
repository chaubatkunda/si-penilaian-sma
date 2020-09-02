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
          <form method="post" action="" class="form-horizontal">
            <div class="form-group">
              <label for="">Tahun Ajaran</label>
              <select name="tahun" class="form-control">
                <option value="">Tahun Ajaran</option>
                <?php foreach ($tahun as $t) : ?>
                  <option value="<?php echo $t->id; ?>"><?php echo $t->thn_ajaran . "/ <i>$t->ket_thn_ajaran</i>"; ?></option>
                <?php endforeach; ?>
              </select>
              <small class="text-danger"><?php echo form_error('tahun'); ?></small>
            </div>
            <ul class="list-group">
              <li class="list-group-item active"><?php echo $title; ?></li>
              <div class="row">
                <div class="col-md-6">
                  <li class="list-group-item mt-2">
                    <b><?php echo $kd->kd; ?></b>
                    <br>
                    <span><i><?php echo $kd->sub_kd; ?></i></span>
                  </li>
                </div>
                <div class="col-md-4">
                  <li class="list-group-item mt-2">
                    <div class="from-group row">
                      <input type="text" name="nilai" class="form-control col-md-12" autofocus autocomplete="off">
                      <small class="text-danger"><?php echo form_error('nilai'); ?></small>
                    </div>
                  </li>

                </div>
              </div>
            </ul>

            <div class="form-group row">
              <label class="control-label col-md-3"></label>
              <div class="col-md-8 tile-footer">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-paper-plane-o"></i> Simpan
                </button>
                <a href="<?php echo base_url('nilai/kelas/' . $kelas . "?mapel=" . $mapel); ?>" class="btn btn-danger">
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