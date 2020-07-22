<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add-kd'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Kompetensi Dasar</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kd as $k) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $k->nama_guru; ?></td>
                                    <td><?php echo $k->nama_mapel; ?></td>
                                    <td><?php echo $k->kd . "&nbsp" . $k->ket_kd; ?></td>
                                    <td>
                                        <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i> Detail</i></a>
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