<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assets IT</title>

    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="../../assets/css/style_cust.css" />
</head>

<body>
    <!-- Side-Nav -->
    <div class="side-navbar d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100 ">
            <a href="#" class="nav-link h3 text-white my-2">
                SPL
            </a>
            <li class="nav-link ">
                <a href="<?= site_url("/dashboard") ?>" class="text-decoration-none">
                    <i class="bx bxs-dashboard "></i><span class="mx-2">Dashboard</span></a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link">
                    <i class='bx bxs-component'></i><span class="mx-2"> Master</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="<?= site_url("/dashboard/master/maset") ?>" class="nav-link px-4"><i class='bx bxs-package'></i> <span class="mx-3">Asset</span></a>
                    </li>
                    <li>
                        <a href="<?= site_url("/dashboard/master/muser") ?>" class="nav-link px-4"><i class='bx bx-user'></i> <span class="mx-3">User</span> </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link">
                    <i class='bx bx-menu'></i><span class="mx-2"> Main Menu </span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="<?= site_url("/dashboard/mmenu/pinjam") ?>" class="nav-link px-4"><i class='bx bx-transfer'></i> <span class="mx-3">Peminjaman</span></a>
                    </li>
                    <li class="active">
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
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="../../assets/js/table.js"> </script>
</body>

</html>