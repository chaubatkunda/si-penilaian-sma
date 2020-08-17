<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <p>Data User</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->session->flashdata('warning'); ?>
            <a href="<?php echo base_url('add-user'); ?>" class="btn btn-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($users as $us) :

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $us['username']; ?></td>
                                    <td><small class="text-danger">******</small></td>
                                    <td>
                                        <!-- <a href="" class="btn btn-outline-success btn-sm">Edit <i class="fa fa-pencil"></i></a> -->
                                        <a href="<?php echo base_url('user/hapus/' . $us['id_user']); ?>" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
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