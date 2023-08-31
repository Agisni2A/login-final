<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assets IT</title>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.bootstrap5.min.css">

    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="../../assets/css/dashboard/dashboard.css" />
    <link rel="stylesheet" href="../../assets/css/dashboard/saset.css" />
</head>

<body>
    <!-- Side-Nav -->
    <div class="side-navbar d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100 ">
            <a href="#" class="nav-link h3 text-white my-2">
                SPL
            </a>
            <li class="nav-link">
                <a href="<?= site_url("/dashboard") ?>" class="text-decoration-none">
                    <i class="bx bxs-dashboard "></i><span class="mx-2">Dashboard</span></a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link">
                    <i class='bx bxs-component'></i><span class="mx-2"> Master</span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100 active">
                        <a href="<?= site_url("/dashboard/master/maset") ?>" class="nav-link px-4"><i class='bx bxs-package'></i> <span class="mx-3">Asset</span></a>
                    </li>
                    <li>
                        <a href="<?= site_url("/dashboard/master/muser") ?>" class="nav-link px-4"> <i class='bx bx-user'></i><span class="mx-3">User</span> </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link">
                    <i class='bx bx-menu'></i><span class="mx-2"> Main Menu </span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="<?= site_url("/dashboard/mmenu/pinjam") ?>" class="nav-link px-4"><i class='bx bx-transfer'></i> <span class="mx-3">Peminjaman</span></a>
                    </li>
                    <li>
                        <a href="<?= site_url("/dashboard/mmenu/kembali") ?>" class="nav-link px-4"> <span class="mx-3">Pengembalian</span> </a>
                    </li>
                </ul>
            </li>
        </ul>
        <span href="#" class="nav-link h4 w-100 mb-5">
            <a href="/logout" class="text-decoration-none text-white">Logout</a>
        </span>
    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light bg-light ps-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <h4 class="pe-4">Inventory IT</h4>
        </nav>
        <!--End Top Nav -->
        <div class="space"></div>
        <div class="card p-5">
            <div class="table-responsive text-nowrap">
                <div class="text-center">
                    <h3 class="header dark">ASSETS IT</h3>
                </div>
                <!-- Table -->
                <?php if (session('success')) : ?>
                    <div class="alert alert-success mt-3">
                        <?= session('success'); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-striped nonwrap" id="item" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Code Item</th>
                            <th scope="col">Category Items</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Warehouse</th>
                            <th scope="col">Location Item</th>
                            <th scope="col">Buy Date</th>
                            <th scope="col">Name PIC</th>
                            <th scope="col">Condition</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        foreach ($items as $item) : ?>
                            <tr>
                                <td><?= $counter++; ?></td>
                                <td><?= $item['kodeItem']; ?></td>
                                <td><?= $item['namaItem']; ?></td>
                                <td><?= $item['brand']; ?></td>
                                <td><?= $item['warehouse']; ?></td>
                                <td><?= $item['lokasiItem']; ?></td>
                                <td><?= $item['tglPembelian']; ?></td>
                                <td><?= $item['peminjam']; ?></td>
                                <td><?= $item['kondisi']; ?></td>
                                <td><?= $item['status'] == '1' ? 'Dipinjam' : 'Tersedia'; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- End Table -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="../../assets/js/table.js"> </script>
    <script src="../../assets/js/dashboard.js"> </script>
</body>

</html>