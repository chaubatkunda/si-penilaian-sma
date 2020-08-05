<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-plus"></i> <?php echo $title; ?></h1>
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

                        <div class="row mb-4">
                            <div class="col-md-3"></div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="radio" name="kelas_x" value="11">
                                <label class="form-check-label">
                                    Kelas X
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="radio" name="kelas_x" value="22">
                                <label class="form-check-label">
                                    Kelas XI
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="radio" name="kelas_x" value="33">
                                <label class="form-check-label">
                                    Kelas XI
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kode Kelas</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kode_kls" placeholder="Kode Kelas" autocomplete="off" autofocus>
                                <small class="text-danger"><?php echo form_error('kode_kls'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kelas</label>
                            <div class="col-md-8">
                                <input class="form-control" name="kelas" type="text" placeholder="Kelas" autocomplete="off">
                                <small class="text-danger"><?php echo form_error('kelas'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-8 tile-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o"></i> Simpan</button>
                                <a href="<?php echo base_url('kelas'); ?>" class="btn btn-danger">
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