<?php
    $title = "All News & Blogs - Tayouth";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">News & Blogs</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    All News & Blogs Form
                </div>

                <div class="card-body" id="blog_table">
                    <div class="table table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>News ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $blog = getAllBlog("tbl_blog");
                                if (mysqli_num_rows($blog) > 0) {
                                    foreach ($blog as $data) {
                                ?>
                                    <tr>
                                        <td><?= $data['id']; ?></td>
                                        <td><?= $data['title']; ?></td>
                                        <td>
                                            <img style="width: 50px; height: 50px; border-radius: 50%;" src="../uploaded/<?= $data['image']; ?>">
                                        </td>
                                        <td><?= $data['description']; ?></td>
                                        <td class="">
                                            <div class="row">   
                                                <div class="col-3" title="Edit News & Blogs">
                                                    <a href="edit_blog.php?id=<?= $data['id']; ?>" type="button" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-3" title="Delete News & Blogs">
                                                    <button type="button" value="<?= $data['id']; ?>" class="btn btn-outline-danger delete_blog_btn"><i class="fa-solid fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                } else {
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

    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-outline-primary mt-lg-3  float-end" data-bs-toggle="modal" data-bs-target="#add_blog_btn">
                Add News & Blogs
            </button>         
        </div>
    </div>
</div>
<?php
include('inc/footer.php');
?>