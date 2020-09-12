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
                        <div class="form-group row">
                            <label class="control-label col-md-4">Guru</label>
                            <div class="col-md-8">
                                <select name="guru" id="" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($guru as $g) : ?>
                                        <option value="<?php echo $g->id_guru; ?>"><?php echo $g->nama_guru; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('guru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Kelas</label>
                            <div class="col-md-8">
                                <select name="kelas_sub[]" id="kelas" class="form-control kelas" id="0">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($kelas as $k) : ?>
                                        <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4"></label>
                            <div class="col-md-8" id="kelas_dropdown">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Kode Mapel</label>
                            <div class="col-md-8">
                                <select name="kodemp" class="form-control kodemp">
                                    <option value="">Kode Mata Pelajaran</option>
                                    <?php foreach ($mapel as $m) : ?>
                                        <option value="<?php echo $m->kode_mapel; ?>"><?php echo $m->kode_mapel . "/" . $m->nama_mapel; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('kodemp'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Mata Pelajaran</label>
                            <div class="col-md-8">
                                <input class="form-control namamp" name="namamp" type="text" value="<?php echo set_value('namamp'); ?>" placeholder="Mata Pelajaran" readonly>
                                <small class="text-danger"><?php echo form_error('namamp'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Tahun Ajaran</label>
                            <div class="col-md-8">
                                <select name="thn" class="form-control">
                                    <option value="">Tahun Ajaran</option>
                                    <?php foreach ($thn as $t) : ?>
                                        <option value="<?php echo $t->id_thn_det; ?>"><?php echo $t->thn_ajaran . " " .   $t->ket_thn_ajaran; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('kodemp'); ?></small>
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