<?php
    $title ="Edit Item - Tayouth";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Users</li>
        <li class="breadcrumb-item">Edit Users</li>
    </ol>
    <div class="row mt-3">
        <div class="col-lg-12">
            <?php 
                if(isset($_GET['id'])){

                    $id = $_GET['id']; // fetch item with id.
                    $tbl_users = getByID("tbl_users", $id);

                    if(mysqli_num_rows($tbl_users) > 0){

                        $data = mysqli_fetch_array($tbl_users);
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit item Form</h4>
                                </div>
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="hidden" name="tbl_user_id" value="<?= $data['id'] ?>">
                                                    <label class="form-label">User ID</label>
                                                    <input disabled type="text" name="id" value="<?= $data['id'] ?>" class="form-control" placeholder="Enter Item Name" disable>

                                                    <label class="form-label pt-1">Name</label>
                                                    <input type="text" name="name" value="<?= $data['name'] ?>" class="form-control" placeholder="Enter Full Name">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" placeholder="Enter Email">

                                                <label class="form-label pt-1">Phone</label>
                                                <input type="text" name="phone" value="<?= $data['phone'] ?>" class="form-control" placeholder="Enter Phone Number">
                                            </div>

                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Password</label>
                                                <input type="text" name="password" value="<?= $data['password'] ?>" class="form-control" placeholder="Enter Passowrd">
                                            </div>

                                            <div class="col-lg-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-outline-primary" name="update_user_btn" title="Update News & Blog"><i class="fa-solid fa-check"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    }else{
                        redirect("menu.php", "Item Not Found");
                    }
                }else{
                    redirect("menu.php", "ID Missing from URL");
                }
            ?>
        </div>
    </div>
</div>
<?php
    include('inc/footer.php');
?>