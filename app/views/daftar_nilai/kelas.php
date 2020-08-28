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
                <th>NIS</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Tahun Ajaran</th>
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
                  <td>
                    <?php
                    $query = $this->db->query("SELECT  AVG(nilai) as rata2, thn_ajaran_id, thn_ajaran FROM t_nilai_kls_x JOIN t_thn_ajaran ON t_nilai_kls_x.thn_ajaran_id = t_thn_ajaran.id  WHERE siswa_id = '$n->nis' GROUP BY (thn_ajaran_id)")->result();
                    foreach ($query as $q) : ?>
                      <span class="badge badge-primary">
                        <?php echo round($q->rata2); ?>
                      </span>
                    <?php endforeach; ?>
                  </td>
                  <td>
                    <?php
                    $query = $this->db->query("SELECT  AVG(nilai) as rata2, thn_ajaran_id, thn_ajaran FROM t_nilai_kls_x JOIN t_thn_ajaran ON t_nilai_kls_x.thn_ajaran_id = t_thn_ajaran.id  WHERE siswa_id = '$n->nis' GROUP BY (thn_ajaran_id) ORDER BY thn_ajaran DESC")->result();
                    foreach ($query as $q) : ?>
                      <?php echo $q->thn_ajaran; ?>
                    <?php endforeach; ?>
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