<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
      <!-- <p>Table to display analytical data effectively</p> -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
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
                <th>Nilai</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($nilai as $n) : ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $n->nis; ?></td>
                  <td><?php echo $n->nama; ?></td>
                  <td><?php echo $n->thn_ajaran . " / " . $n->ket_thn_ajaran; ?></td>
                  <td>
                    <?php
                    $query = $this->db->query("SELECT AVG(nilai) as rata2 FROM t_nilai WHERE siswa_id = '$n->nis' AND mapel_id = '$mapel' AND thn_ajaran_id = '$ajaran' ")->result();
                    foreach ($query as $q) : ?>
                      <span class="badge badge-primary">
                        <?php echo round($q->rata2); ?>
                      </span>
                    <?php endforeach; ?>
                  </td>
                  <td>
                    <!-- <a href="<?php echo base_url('guru/nilai_siswa/' . $kd->mapel_id); ?>" class="btn btn-outline-primary btn-sm">
                      <i class="fa fa-eye"></i>
                    </a> -->
                    <a href="<?php echo base_url('guru/nilai_siswa/' . $kd->mapel_id . "?siswa=" . $n->nis .  "&kelas=" . $n->kelas_id); ?>" class="btn btn-outline-primary btn-sm">
                      <i class="fa fa-eye"></i>
                    </a>
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