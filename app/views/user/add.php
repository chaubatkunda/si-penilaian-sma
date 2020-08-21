<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="tile">
                    <!-- <h3 class="tile-title">Vertical Form</h3> -->
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Guru</label>
                            <select name="guru" class="form-control" id="guru-user">
                                <option value="">--Pilih--</option>
                                <?php foreach ($guru as $g) : ?>
                                    <option value="<?php echo $g->id_guru; ?>"><?php echo $g->nama_guru; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger"><?php echo form_error('guru'); ?></small>
                        </div>
                        <input type="hidden" name="nama_guru" class="form-control" id="nama_guru" readonly>
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                            <small class="text-danger"><?php echo form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Password</label>
                                    <input class="form-control" type="password" name="password1" placeholder="Password">
                                    <small class="text-danger"><?php echo form_error('password1'); ?></small>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Konfirmasi Password</label>
                                    <input class="form-control" type="password" name="password2" placeholder="Konfirmasi Password">
                                    <small class="text-danger"><?php echo form_error('password2'); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Level</label>
                            <select name="level" id="" class="form-control">
                                <option value="">--Pilih Level--</option>
                                <option value="2">Guru</option>
                                <option value="3">Waka</option>
                            </select>
                            <small class="text-danger"><?php echo form_error('level'); ?></small>
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