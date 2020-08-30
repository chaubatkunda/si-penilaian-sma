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
                      <input type="text" name="" id="" class="form-control col-md-12">
                    </div>
                  </li>

                </div>
              </div>
            </ul>
            <!-- <div class="form-group row">
              <label class="control-label col-md-3">NIP</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="kode_guru" placeholder="NIP" value="<?php echo set_value('kode_guru'); ?>">
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
                <input class="form-control" name="" type="text" value="Guru" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Alamat</label>
              <div class="col-md-8">
                <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat"></textarea>
              </div>
            </div> -->

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
      </div>
    </div>
  </div>
</main>