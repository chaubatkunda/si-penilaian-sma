<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <p><?php echo $this->session->flashdata('warning'); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class=" tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($guru as $gr) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $gr->nip; ?></td>
                                    <td><?php echo $gr->nama_guru; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('historiguru/show/' . $gr->id_guru); ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i>
                                            </i>
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