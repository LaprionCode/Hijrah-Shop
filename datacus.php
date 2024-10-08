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
        <h2>Table Customer</h2>
        <h3> <a href="index.php"> Kembali ke home </a> // <a href="databrg.php"> Table Barang </a> </h3>
        <a href="contact.php" class="btn btn-success btn-sm float-right mb-1">Tambah Data</a>
        <table class="table table-striped table-sm .table-responsive" id="example" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $query = mysqli_query($conn, "SELECT * FROM customer ");
                while ($m = mysqli_fetch_array($query)) {
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php print $i; ?></th>
                        <td><?php print $m['nama_customer'] ?></td>
                        <td><?php print $m['alamat_customer'] ?></td>
                        <td><?php print $m['no_hp'] ?></td>
                        <td><?php print $m['keterangan'] ?></td>
                        <td>
                        <a href="deletecus.php?id=<?php print $m['id_customer'] ?>" class="btn btn-danger" onclick="return confirm ('Yakin ingin hapus?')">Hapus</a>
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

    <script src="table-09/js/jquery.min.js"></script>
    <script src="table-09/js/popper.js"></script>
    <script src="table-09/js/bootstrap.min.js"></script>
    <script src="table-09/js/main.js"></script>

</body>

</html>