<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP PDO OOP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!-- Add New User Modal Start -->
     <div class="modal fade" tabindex="1" id="addNewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-header">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="add-user-form" class="p-2" novalidate>
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input type="text" name="fname" class="form-control form-control-lg" placeholder="Enter First Name" required id="">
                                <div class="invalid-feedback">First name id required!</div>
                            </div>
                            <div class="col">
                                <input type="text" name="lname" class="form-control form-control-lg" placeholder="Enter Last Name" required id="">
                                <div class="invalid-feedback">Last name id required!</div>
                            </div>
                        </div>
                            <div class="mb-3">
                                <input type="text" name="email" class="form-control form-control-lg" placeholder="Enter E-mail" required id="">
                                <div class="invalid-feedback">E-mail id required!</div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="phone" class="form-control form-control-lg" placeholder="Enter Phone" required id="">
                                <div class="invalid-feedback">Phone id required!</div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add User" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
                                
                            </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
    <!-- Add New User Modal End -->

    <!-- Edit User Modal Start -->
     <div class="modal fade" tabindex="1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-header">Edit This User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="edit-user-form" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input type="text" id="fname" name="fname" class="form-control form-control-lg" placeholder="Enter First Name" required id="">
                                <div class="invalid-feedback">First name id required!</div>
                            </div>
                            <div class="col">
                                <input type="text" id="lname" name="lname" class="form-control form-control-lg" placeholder="Enter Last Name" required id="">
                                <div class="invalid-feedback">Last name id required!</div>
                            </div>
                        </div>
                            <div class="mb-3">
                                <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Enter E-mail" required id="">
                                <div class="invalid-feedback">E-mail id required!</div>
                            </div>
                            <div class="mb-3">
                                <input type="text" id="phone" name="phone" class="form-control form-control-lg" placeholder="Enter Phone" required id="">
                                <div class="invalid-feedback">Phone id required!</div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Edit User" class="btn btn-primary btn-block btn-lg" id="edit-user-btn">
                                
                            </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
    <!-- Edit User Modal End -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">All users in the database</h4>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add New User</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-boredered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>