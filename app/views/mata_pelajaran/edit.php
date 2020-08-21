<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                <!-- <h3 class="tile-title">Register</h3> -->
                <div class="tile-body">
                    <form method="post" action="" class="form-horizontal">
                        <!-- <div class="form-group row">
                            <label class="control-label col-md-3">Guru</label>
                            <div class="col-md-8">
                                <select name="guru" id="" class="form-control">
                                    <?php foreach ($guru as $g) : ?>
                                        <?php if ($g->id_guru == $mapel->guru_id) : ?>
                                            <option value="<?php echo $g->id_guru; ?>" selected><?php echo $g->nama_guru; ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $g->id_guru; ?>"><?php echo $g->nama_guru; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('guru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kelas</label>
                            <div class="col-md-8">
                                <select name="kelas" id="" class="form-control">
                                    <?php foreach ($kelas as $k) : ?>
                                        <?php if ($k->id_kelas == $mapel->kelas_id) : ?>
                                            <option value="<?php echo $k->id_kelas; ?>" selected><?php echo $k->nama_kelas; ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('kelas'); ?></small>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kode Mapel</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kodemp" value="<?php echo $mapel->kode_mapel; ?>">
                                <small class="text-danger"><?php echo form_error('kodemp'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Mata Pelajaran</label>
                            <div class="col-md-8">
                                <input class="form-control" name="namamp" type="text" placeholder="Mata Pelajaran" value="<?php echo $mapel->nama_mapel; ?>">
                                <small class="text-danger"><?php echo form_error('namamp'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
                                <a href="<?php echo base_url('mata.pelajaran'); ?>" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="tile-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</main>