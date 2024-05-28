<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOA UNITY</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <span class="text-secondary">Dashboard > <span class="font-weight-bold text-primary">Pending Accounts</span></span>
                    <div class="d-flex justify-content-end align-items-center">
                        <!-- <a href="./pending_accounts.php" class="btn btn-primary mx-2">Pending Accounts<span>[3]</span></a> -->
                        <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button> -->
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                            <table id="mytable" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <th class="text-center">Profile</th>
                                    <th class="text-center">Firstname</th>
                                    <th class="text-center">Lastname</th>
                                    <th class="text-center">Contact No.</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><img src="./profile.jpg" class="img-fluid rounded-circle" style="width: 40px; height: 35px;"></td>
                                        <td class="text-center">Joshua</td>
                                        <td class="text-center">Bautista</td>
                                        <td class="text-center">09560294354</td>
                                        <td class="text-center">Male</td>
                                        <td class="text-center">Pending</td>
                                        <td class="text-center">
                                            <a href=""data-bs-toggle="modal" data-bs-target="#acceptModal"><i class="fa-solid fa-check text-primary" style="font-size: 20px;"></i></a>
                                            <a href=""><i class="fa-solid fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END SIDEBAR -->

    <!-- ACCEPT MODAL REGISTRATION -->
    <div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pending Accounts</h5>
                <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-regular fa-circle-check mb-3 text-success fa-3x"></i>
                    <span class="mb-3 text-secondary">Do you want to approve this account?</span>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-primary mx-2" data-bs-dismiss="modal">Confirm</button>
                    <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Decline</button>
                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
            <!-- <div class="modal-footer">
                
            </div> -->
            </form>
            </div>
        </div>
    </div>
    <!-- END MODAL REGISTRATION -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function(){
            new DataTable("#mytable", {
                "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                "pageLength": 5,
                responsive: true,
            })
        })
    </script>
</body>

</html>