<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
      <!-- <p>Table to display analytical data effectively</p> -->
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <a href="<?php echo base_url('daftar_nilai'); ?>" class="btn btn-danger mb-2">Kembali</a>
      <div class="row">
        <div class="col-md-6">
          <!-- <div class="input-group mb-3">
            <select name="" id="" class="form-control">
              <option value="">Tahun Ajaran</option>
              <?php foreach ($tahun as $t) : ?>
                <option value="<?php echo $t->id; ?>"><?php echo $t->thn_ajaran . " $t->ket_thn_ajaran"; ?></option>
              <?php endforeach; ?>
            </select>
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
            </div>
          </div> -->
        </div>
      </div>
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Mapel</th>
                <th>Mata Pelajaran</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($mapel as $n) : ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td>
                    <a href="<?php echo base_url('daftar_nilai/nilai/' . $n->kode_mapel .  "?kode=" . $kode . "&mapel=" . $n->id_mapel); ?>"><?php echo $n->kode_mapel; ?></a>
                  </td>
                  <td><?php echo $n->nama_mapel; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>