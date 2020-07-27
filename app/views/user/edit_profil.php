<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> <?php echo $title; ?></h1>
            <!-- <p>Sample forms</p> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="tile">
                    <?php echo $this->session->flashdata('warning'); ?>
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $this->fungsi->user_login()->nama; ?>">
                            <small class="text-danger"><?php echo form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" value=" <?php echo $this->fungsi->user_login()->username; ?>">
                            <small class="text-danger"><?php echo form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password Lama</label>
                            <input class="form-control" type="password" name="password" placeholder="Password Lama">
                            <small class="text-danger"><?php echo form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Password Baru</label>
                                    <input class="form-control" type="password" name="password1" placeholder="Password Baru">
                                    <small class="text-danger"><?php echo form_error('password1'); ?></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Konfirmasi Password</label>
                                    <input class="form-control" type="password" name="password2" placeholder="Konfirmasi Password Baru">
                                    <small class="text-danger"><?php echo form_error('password2'); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Foto</label>
                            <input type="file" name="foto" id="" class="form-control">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?php echo base_url('user'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</main>