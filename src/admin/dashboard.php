<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOA UNITY</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">HOAUNITY</a>
        
        <div class="d-flex justify-content-center align-items-center">
            <div class="mx-2">
                <a href=""><i class="fa-solid fa-bell text-danger" style="font-size: 20px;"></i></a>
            </div>
            <div class="mx-2">
            <span class="text-secondary">Joshua</span>
            </div>
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle ml-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="profile.jpg" class="img-fluid rounded-circle profile-img">
                </a>
                <ul class="dropdown-menu" style="right: 0; left: auto;">
                    <li><a class="dropdown-item d-flex align-items-center justify-content-evenly" href="#"><i class="lni lni-image"></i>Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-evenly" href="#"><i class="lni lni-enter"></i>Logout</a></li>
                </ul>
            </li>
        </div>

     

    </div>
    </nav>

    <!-- END NAVBAR -->

    <!-- START SIDEBAR -->
    <div class="wrapper">
        <aside id="sidebar" class="shadow">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">HOAUNITY</a>
                </div>
            </div>
            <li class="sidebar-item mt-3 bg-primary">
                <a href="./dashboard.php" class="sidebar-link">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <ul class="sidebar-nav">
                <span class="text-secondary mx-4 menu">Menu</span>
                <li class="sidebar-item">
                    <a href="./user_management.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>User Management</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-envelope"></i>
                        <span>Report</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Amenities</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Maintenance</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-envelope"></i>
                        <span>Complaint</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-files"></i>
                        <span>Documents</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-files"></i>
                        <span>Activity Logs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-target-revenue"></i>
                        <span>Finance Report</span>
                    </a>
                </li>
                
                
            </ul>
            
        </aside>
        <div class="main p-3">
            <div class="container-fluid">
                <div class="mb-2">
                    <span class="text-primary">Dashboard</span>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <i class="fa-solid fa-user-check fa-2x"></i>
                                    <span class="text-secondary">Verified Accounts</span>
                                </div>
                               <div class="text-center">
                                    <span class="text-secondary fs-3"><b>500</b></span>
                               </div>
                               <hr>
                               <span class="text-secondary">Total Verified Accounts</span> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <i class="fa-solid fa-file fa-2x"></i>
                                    <span class="text-secondary">Reports</span>
                                </div>
                               <div class="text-center">
                                    <span class="text-secondary fs-3"><b>500</b></span>
                               </div>
                               <hr>
                               <span class="text-secondary">Total Reports</span> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <i class="fa-solid fa-file fa-2x"></i>
                                    <span class="text-secondary">Complaints</span>
                                </div>
                               <div class="text-center">
                                    <span class="text-secondary fs-3"><b>500</b></span>
                               </div>
                               <hr>
                               <span class="text-secondary">Total Complaints</span> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <i class="fa-solid fa-user-check fa-2x"></i>
                                    <span class="text-secondary">Verified Accounts</span>
                                </div>
                               <div class="text-center">
                                    <span class="text-secondary fs-3"><b>500</b></span>
                               </div>
                               <hr>
                               <span class="text-secondary">Total Verified Accounts</span> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END SIDEBAR -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>