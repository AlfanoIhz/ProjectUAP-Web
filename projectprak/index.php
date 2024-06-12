<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDAMBI</title>
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F8F4E1; /* Mengubah warna latar belakang */
    }
        .wrapper {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #74512D;
            color: white;
            transition: all 0.3s;
        }
        .sidebar.toggled {
            margin-left: -250px;
        }
        .sidebar .sidebar-heading {
            padding: 1.5rem;
            font-size: 1.25rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .sidebar .list-group-item {
            background-color: #74512D;
            color: white;
        }
        .sidebar .list-group-item:hover {
            background-color: #74512D;
        }
        .sidebar .list-group-item.active {
            background-color: #74512D;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .table-container {
            margin-top: 20px;
        }
        .table-container h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">SIDAMBI</div>
            <div class="list-group list-group-flush">
                <a href="dashboard.php" class="list-group-item list-group-item-action text-white">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action text-white">Account</a>
                <a href="#" class="list-group-item list-group-item-action text-white">Member</a>
                <a href="#" class="list-group-item list-group-item-action text-white">Course</a>
            </div>
        </div>

        <div class="content" id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <i class="fa-solid fa-bars" id="menu-toggle" style="color: #4e73df; font-size: 30px;"></i>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Admin <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h2>Account List</h2>
                <a href="tambahhp.php" class="btn btn-success mb-3" style="background-color: #74512D; border-color: #74512D;">Add New Account</a>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
