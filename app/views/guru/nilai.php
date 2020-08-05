<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- <a href="<?php echo base_url('add-nilai'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a> -->
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($nilai as $n) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('guru/nilai/siswa/' . $n->kode_kelas . "?mapel=" . $n->kode_mapel); ?>"><?php echo $n->nama_mapel; ?></a>
                                    </td>
                                    <td><?php echo $n->nama_kelas; ?></td>
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