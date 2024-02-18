<?php
    $title = "All Users - Tayouth";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">All Users</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                 All Users Form
                </div>

                <div class="card-body" id="user_table">
                    <div class="table table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $users = getAll("tbl_users");
                                    if (mysqli_num_rows($users) > 0) {
                                        foreach ($users as $data) {
                                            ?>
                                                <tr>
                                                    <td><?= $data['id']; ?></td>
                                                    <td><?= $data['name']; ?></td>
                                                    <td><?= $data['email']; ?></td>
                                                    <td><?= $data['phone']; ?></td>
                                                    <td><?= $data['password']; ?></td>
                                                    <td class="">
                                                        <div class="row">
                                                            <div class="col-3" title="Edit User">
                                                                <a href="edit_user.php?id=<?= $data['id']; ?>" type="button" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            </div>
                                                            <div class="col-3" title="Delete User">
                                                                <button type="button" value="<?= $data['id']; ?>" class="btn btn-outline-danger delete_user_btn"><i class="fa-solid fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }else{
                                        echo "No record found.";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mt-lg-3  float-end" data-bs-toggle="modal" data-bs-target="#add_category_btn">
                Add User
            </button>         
        </div>
    </div> -->
</div>
<?php
include('inc/footer.php');
?>