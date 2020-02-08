<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Wilayah Lombok Tengah</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Wilayah</th>
            <th>Wilayah</th>
            <th>Data Wilayah</th>
            <th>Keterangan</th>
            <th>
                <a href=" <?= base_url('index.php/wilayah/add'); ?> ">Tambah</a>
            </th>
        </tr>
        <?php $no = 1;
        foreach ($wilayah as $wil) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $wil->nama ?></td>
                <td><?= $wil->wilayah ?></td>
                <td><?= $wil->datawilayah ?></td>
                <td><?= $wil->keterangan ?></td>
                <td>
                    <a href="<?= base_url('index.php/wilayah/update/') . $wil->idwilayah; ?>">ubah</a>
                    <a href="<?= base_url('index.php/wilayah/delete/') . $wil->idwilayah; ?>" onclick="return confirm('Anda Yakin Untuk Menghapus?');">hapus</a>
                </td>

            </tr>
        <?php } ?>
    </table>


</body>

</html>