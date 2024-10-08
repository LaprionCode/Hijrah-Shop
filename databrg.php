<?php
include 'database.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Data Customer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <style>
        .table tbody tr.highlight td {
            background-color: rgb(0, 0, 255);
            color: white;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#example').on('mousemove', 'tbody tr', function(event) {
                $(this).addClass('highlight').siblings().removeClass('highlight');
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Welcome Admin</h1>
        <h2>Table Barang</h2>
        <h3> <a href="index.php"> Kembali ke home </a> // <a href="datacus.php"> Table Customer </a> </h3>
        <a href="input.php" class="btn btn-success btn-sm float-right mb-1">Tambah Data</a>
        <table class="table table-striped table-sm .table-responsive" id="example" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Dekripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $query = mysqli_query($conn, "SELECT * FROM barang ");
                while ($m = mysqli_fetch_array($query)) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?php print $i; ?></th>
                        <td><?php print $m['nama_barang'] ?></td>
                        <td><?php print $m['deskripsi'] ?></td>
                        <td><?php print $m['harga'] ?></td>

                        <td>
                        <a href="deletebrg.php?id=<?php print $m['id_barang'] ?>" class="btn btn-danger" onclick ="return confirm ('Yakin ingin hapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </section>

</body>
</html>