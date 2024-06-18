<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaQuest Dashboard</title>
    <link rel="stylesheet" href="dashboardstyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>PharmaQuest</h3>
            </div>
            <div class="user-info">
                <img src="user-286.png" alt="User Icon">
                <p>Admin</p>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dashboard</a>
                </li>
                <li>
                    <a href="#inventory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Inventory</a>
                </li>
                <li>
                    <a href="#prescriptions" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Prescriptions</a>
                </li>
                <li>
                    <a href="#sales" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sales</a>
                </li>
                <li>
                    <a href="#customers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customers</a>
                </li>
                <li>
                    <a href="#billing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Billing</a>
                </li>
                <li>
                    <a href="#supply-chain" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Supply Chain</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div class="logout ml-auto">
                        <a href="logout.html" title="Log out">
                            <i class="fas fa-power-off fa-lg"></i> Log-out
                        </a>
                    </div>
                </div>
            </nav>
            <div class="content-container">
                <h2>Dashboard</h2>
                <p>Welcome to the PharmaQuest Admin Dashboard. Here you can manage your pharmacy operations efficiently.</p>
                <!-- Add your content here -->
            </div>
        </div>
    </div>
    <script>
        document.getElementById('sidebarCollapse').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>
