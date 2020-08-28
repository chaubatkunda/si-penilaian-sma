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
                <form action="<?php echo base_url('nilai/simpanNilai/' . $kelas); ?>" method="post">
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="">Tahun Ajaran</label>
                            <select name="tahun" id="" class="form-control">
                                <option value="">Tahun Ajaran</option>
                                <?php foreach ($tahun as $t) : ?>
                                    <option value="<?php echo $t->id; ?>"><?php echo $t->thn_ajaran . "/ <i>$t->ket_thn_ajaran</i>"; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item active"><?php echo $title; ?></li>
                            <?php foreach ($kd as $k) : ?>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <li class="list-group-item">
                                            <input type="hidden" name="kd[]" value="<?php echo $k->id_kd; ?>">
                                            <input type="hidden" name="siswa[]" value="<?php echo $siswa; ?>">
                                            <input type="hidden" name="mapel[]" value="<?php echo $mapel; ?>">
                                            <input type="hidden" name="kelas[]" value="<?php echo $kelas; ?>">
                                            <b><?php echo $k->kd; ?></b>
                                            <br>
                                            <span><i><?php echo $k->sub_kd; ?></i></span>
                                        </li>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <li class="list-group-item">
                                            <input type="text" name="nilai[]" class="form-control">
                                        </li>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </ul>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('guru/nilai'); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>