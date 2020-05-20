<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> <?php echo $title; ?></h1>
            <!-- <p>Sample forms</p> -->
        </div>
        <!-- <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul> -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                <!-- <h3 class="tile-title">Register</h3> -->
                <div class="tile-body">
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nama Waka</label>
                            <div class="col-md-8">
                                <select name="nama_waka" class="form-control" id="demoSelect">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($waka as $g) : ?>
                                        <option value="<?php echo $g->kode_guru; ?>"><?php echo $g->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('nama_waka'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Mata Pelajaran</label>
                            <div class="col-md-8">
                                <select name="id_mapel" class="form-control" id="demoSelectm">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($mapel as $ma) : ?>
                                        <option value="<?php echo $ma->id_mapel; ?>"><?php echo $ma->nama_mapel; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('id_mapel'); ?></small>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <input class="form-control" name="nama_siswa" type="text" placeholder="Nama Siswa">
                                <small class="text-danger"><?php echo form_error('nama_siswa'); ?></small>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan
                                </button>
                                <a href="<?php echo base_url('siswa'); ?>" class="btn btn-danger">
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