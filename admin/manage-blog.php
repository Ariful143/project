<?php
    require_once '../vendor/autoload.php';
    $view= new App\classes\Blog;

$message=' ';
if(isset($_GET['delete'])){
    $id=$_GET['id'];
    $message=$view->deleteBlogInfo($id);
}


    $queryResult=$view->getBlogInfo();




?>

<?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL NO</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Blog Title</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  while( $blog= mysqli_fetch_assoc($queryResult)){ ?>
                            <tr>
                                <th scope="row"><?php echo $blog['id']?></th>
                                <td><?php echo $blog['category_name']?></td>
                                <td><?php echo $blog['blog_title']?></td>
                                <td><?php echo $blog['publication_status']?></td>
                                <td>
                                    <a href="manage-blog.php">View</a>
                                    <a href="edit-blog.php?id=<?php echo $blog['id']?>"">Edit</a>
                                    <a href="?delete=true&id=<?php echo $blog['id']?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>