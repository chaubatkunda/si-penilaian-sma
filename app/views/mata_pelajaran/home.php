<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
        <!-- <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add.mapel'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mapel</th>
                                <th>Nama Mapel</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mapel as $m) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $m->kode_mapel; ?></td>
                                    <td><?php echo $m->nama_mapel; ?></td>
                                    <td>
                                        <a href="" class="btn btn-outline-success btn-sm">Edit <i class="fa fa-pencil"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-sm">Hapus <i class="fa fa-trash"></i></a>
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