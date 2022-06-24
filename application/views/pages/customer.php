<div class="container">
        <h2 align="center" style="margin: 30px;">Data Customer</h2>
        <a href="<?= base_url() ?>index.php/Home/Customer">
            <button class="btn btn-primary btn-sm pull-right">Lihat Customer</button>
        </a>
        <div class="btn-group">
            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                Filter Buku
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url() ?>index.php/Home">Semua Buku</a>
                <a class="dropdown-item" href="<?= base_url() ?>index.php/Home/Belum">Belum Pernah dipinjam</a>
                <a class="dropdown-item" href="<?= base_url() ?>index.php/Home/Harga">Berdasarkan Harga</a>
            </div>
        </div>
        <table class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Customer</td>
                    <td>Judul Buku</td>
                    <td>Total Pinjam Buku</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($jumlah_buku->jumlah_produk > 10) { ?>
                        <?php
                            $no = 1;
                            foreach ($data_customer as $show) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $show->name; ?></td>
                                    <td><?= $show->title; ?></td>
                                    <td><?= $show->jumlah_buku; ?></td>
                                </tr>
                            <?php
                            $no++;
                            }
                        ?>
                    <?php
                    } else { ?>
                        <tr>
                            <td colspan="5">Data Tidak Ada</td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>