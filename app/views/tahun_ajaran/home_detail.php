<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php if ($this->fungsi->user_login()->level == 1) : ?>
        <a href="<?php echo base_url('tahun_ajaran/add_detail/' . $tahun->id); ?>" class="btn btn-primary mb-3">Tambah
          <i class="fa fa-plus"></i>
        </a>
        <a href="<?php echo base_url('tahun_ajaran'); ?>" class="btn btn-danger mb-3">
          Kembali
          <!-- <i class="fa fa-plus"></i> -->
        </a>
      <?php else : ?>
        <a href=" <?php echo base_url('print_out/siswa'); ?>" class="btn btn-warning mb-3" target="_blank">Cetak
          <i class="fa fa-print"></i>
        </a>
      <?php endif; ?>
      <?php echo $this->session->flashdata('warning'); ?>
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Tahun Ajaran</th>
                <th>Keterangan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($detail as $d) :
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d->thn_ajaran; ?></td>
                  <td><?php echo $d->ket_thn_ajaran; ?></td>
                  <td>
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
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