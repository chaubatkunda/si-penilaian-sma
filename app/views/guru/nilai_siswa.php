<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>
                <?php echo $title; ?>
            </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="tile">
                <div class="tile-body">
                    <!-- <div class="form-group">
                            <label for="">Tahun Ajaran</label>
                            <select name="tahun" id="" class="form-control">
                                <option value="">Tahun Ajaran</option>
                                <?php foreach ($tahun as $t) : ?>
                                    <option value="<?php echo $t->id; ?>"><?php echo $t->thn_ajaran . "/ <i>$t->ket_thn_ajaran</i>"; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div> -->
                    <ul class="list-group">
                        <li class="list-group-item active"><?php echo $title; ?></li>
                        <?php foreach ($kd as $k) : ?>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <li class="list-group-item">
                                        <b><?php echo $k->kd; ?></b>
                                        <br>
                                        <span><i><?php echo $k->sub_kd; ?></i></span>
                                    </li>
                                </div>
                                <div class="col-md-2 mt-2 text-center">
                                    <li class="list-group-item">
                                        <?php
                                        $sql = $this->db->query("SELECT * FROM t_nilai WHERE kd_id = '$k->id_kd' AND siswa_id = '$siswa'")->row();
                                        $query = $this->db->query("SELECT * FROM t_nilai WHERE kd_id = '$k->id_kd' AND siswa_id = '$siswa'")->num_rows();
                                        // die;
                                        ?>
                                        <strong class="badge badge-primary">
                                            <?php if ($query > 0) : ?>
                                                <?php echo $sql->nilai; ?>
                                            <?php else : ?>
                                                0
                                            <?php endif; ?>
                                        </strong>
                                    </li>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <li class="list-group-item">
                                        <?php if ($query > 0) : ?>
                                            <a href="<?php echo base_url('nilai/edit_nilai/' . $k->id_kd . "?siswa=" . $siswa . "&mapel=" . $mapel . "&&kelas=" . $kelas . "&&&ajaran=" . $tahun); ?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php echo base_url('nilai/tambah_nilai/' . $k->id_kd . "?siswa=" . $siswa . "&mapel=" . $mapel . "&&kelas=" . $kelas . "&&&ajaran=" . $tahun); ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </ul>
                    <div class="form-group mt-3">
                        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                        <a href="<?php echo base_url('nilai/kelas/' . $kelas . "?mapel=" . $mapel); ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>