<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-home"></i> <?php echo $title; ?></h1>
      <!-- <p>Table to display analytical data effectively</p> -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

      <?php if ($this->fungsi->user_login()->level == 1) : ?>
        <a href="<?php echo base_url('add_kelas/' . $kode); ?>" class="btn btn-primary mb-3">Tambah
          <i class="fa fa-plus"></i>
        </a>
        <a href="<?php echo base_url('kelas'); ?>" class="btn btn-danger mb-3">Kembali
          <!-- <i class="fa fa-plus"></i> -->
        </a>
      <?php endif; ?>
      <div class="row">
        <div class="col-md-6">
          <form action="" method="post">
            <div class="input-group mb-3">
              <select name="tahun" id="" class="form-control">
                <option value="">Tahun Ajaran</option>
                <?php foreach ($tahun as $t) : ?>
                  <option value="<?php echo $t->id; ?>"><?php echo $t->thn_ajaran . " $t->ket_thn_ajaran"; ?></option>
                <?php endforeach; ?>
              </select>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Tampilkan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tahun Ajaran</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($kelas)) : ?>
                <tr>
                  <td colspan="5">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Data</strong> Tidak ditemukan.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </td>
                </tr>
              <?php endif; ?>
              <?php
              $no = 1;
              foreach ($kelas as $k) :
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $k->nis; ?></td>
                  <td><?php echo $k->nama; ?></td>
                  <td><?php echo $k->thn_ajaran . " / " . $k->ket_thn_ajaran; ?></td>
                  <td>
                    <a href="<?php echo base_url('hapus-detail-kelas/' . $k->id . "?kode=" . $k->kode_kelas . "?&siswa=" . $k->nis); ?>" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>