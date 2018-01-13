<?php
    require_once '../vendor/autoload.php';
    $view= new App\classes\Category;

    $message=' ';
    if(isset($_GET['delete'])){
        $id=$_GET['id'];
        $message=$view->deleteCategoryInfo($id);
    }

    $queryResult=$view->getCategoryInfo();




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
                                <th scope="col">Category Description</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  while( $category = mysqli_fetch_assoc($queryResult)){ ?>
                            <tr>
                                <th scope="row"><?php echo $category['id']?></th>
                                <td><?php echo $category['category_name']?></td>
                                <td><?php echo $category['category_description']?></td>
                                <td><?php echo $category['status']?></td>
                                <td>
                                    <a href="edit-category.php?id=<?php echo $category['id']?>">Edit</a>
                                    <a href="?delete=true&id=<?php echo $category['id']?>">Delete</a>
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