<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add-siswa'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
            <?php echo $this->session->flashdata('warning'); ?>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($siswa as $sw) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $sw->nis; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('detsiswa/') . $sw->id; ?>"><?php echo $sw->nama; ?></a>
                                    </td>
                                    <td><?php echo $sw->nama_kelas; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('detsiswa/') . $sw->id; ?>" class="btn btn-outline-secondary btn-sm">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                        <a href="<?php echo base_url('editsiswa/') . $sw->id; ?>" class="btn btn-outline-success btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="<?php echo base_url('hapus.siswa/') . $sw->id; ?>" class="btn btn-outline-danger btn-sm">
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