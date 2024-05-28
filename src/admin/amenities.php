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
                    <span class="text-secondary">Dashboard > <span class="font-weight-bold text-primary">Amenities</span></span>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                            <table id="mytable" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Type of Amenity</th>
                                    <th class="text-center">Reservation</th>
                                    <th class="text-center">Date & Time</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">Joshua Bautista</td>
                                        <td class="text-center">Basketball Court</td>
                                        <td class="text-center">Tenant</td>
                                        <td class="text-center">2024-05-24 12:00 PM</td>
                                        <td class="text-center">
                                            <a href=""><i class="fa-solid fa-pencil text-primary" style="font-size: 20px;"></i></a>
                                            <a href=""><i class="fa-solid fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Joshua Bautista</td>
                                        <td class="text-center">Basketball Court</td>
                                        <td class="text-center">Tenant</td>
                                        <td class="text-center">2024-05-24 12:00 PM</td>
                                        <td class="text-center">
                                            <a href=""><i class="fa-solid fa-pencil text-primary" style="font-size: 20px;"></i></a>
                                            <a href=""><i class="fa-solid fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Joshua Bautista</td>
                                        <td class="text-center">Basketball Court</td>
                                        <td class="text-center">Tenant</td>
                                        <td class="text-center">2024-05-24 12:00 PM</td>
                                        <td class="text-center">
                                            <a href=""><i class="fa-solid fa-pencil text-primary" style="font-size: 20px;"></i></a>
                                            <a href=""><i class="fa-solid fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Joshua Bautista</td>
                                        <td class="text-center">Basketball Court</td>
                                        <td class="text-center">Tenant</td>
                                        <td class="text-center">2024-05-24 12:00 PM</td>
                                        <td class="text-center">
                                            <a href=""><i class="fa-solid fa-pencil text-primary" style="font-size: 20px;"></i></a>
                                            <a href=""><i class="fa-solid fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Joshua Bautista</td>
                                        <td class="text-center">Basketball Court</td>
                                        <td class="text-center">Tenant</td>
                                        <td class="text-center">2024-05-24 12:00 PM</td>
                                        <td class="text-center">
                                            <a href=""><i class="fa-solid fa-pencil text-primary" style="font-size: 20px;"></i></a>
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

    <!-- START MODAL REGISTRATION -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" placeholder="Contact #">
                    </div>
                    <select class="form-control mt-3">
                        <option selected class="text-secondary">Select Role</option>
                        <option value="Secretary">Secretary</option>
                        <option value="Treasurer">Treasurer</option>
                        <option value="Auditor">Auditor</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                    <div class="mt-3">
                       
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="row">
                        <div class="col mt-3">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Register</button>
            </div>
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