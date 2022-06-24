<div class="container">
        <h2 align="center" style="margin: 30px;">Daftar Harga Rental Buku Antara 2000 dan 6000</h2>
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
                    <td>Judul Buku</td>
                    <td>Author</td>
                    <td>Harga Rental</td>
                    <td>Kategori Buku</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($data_buku as $show) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $show->title; ?></td>
                            <td><?= $show->author; ?></td>
                            <td><?= $show->price_rent; ?></td>
                            <td><?= $show->book_category; ?></td>
                        </tr>
                    <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>