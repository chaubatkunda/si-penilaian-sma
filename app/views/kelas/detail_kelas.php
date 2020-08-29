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
        <?php if ($kode == 'X01' || $kode == 'X02') : ?>
          <a href="<?php echo base_url('kelas/siswa_baru/' . $kode); ?>" class="btn btn-primary mb-3">Tambah
            <i class="fa fa-plus"></i>
          </a>
        <?php endif; ?>
        <a href="<?php echo base_url('kelas'); ?>" class="btn btn-danger mb-3">Kembali
          <!-- <i class="fa fa-plus"></i> -->
        </a>
      <?php endif; ?>
      <?php echo $this->session->flashdata('warning'); ?>
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
              <!-- <?php if (empty($kelas)) : ?>
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
              <?php endif; ?> -->
              <?php
              $no = 1;
              foreach ($kelas as $k) :
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $k->nis; ?></td>
                  <td><?php echo $k->nama; ?></td>
                  <td><?php echo $k->thn_ajaran; ?></td>
                  <td>
                    <a href="<?php echo base_url('kelas/naik_kelas/' . $k->id_detail . "?kode=" . $k->id); ?>" class="btn btn-outline-success btn-sm">Naik Kelas</a>
                    <a href="<?php echo base_url('hapus-detail-kelas/' . $k->id_detail . "?kode=" . $k->kode_kelas . "?&siswa=" . $k->nis); ?>" class="btn btn-danger btn-sm">Hapus</a>

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