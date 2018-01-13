<?php
require_once '../vendor/autoload.php';
$category = new App\classes\Category;



$id=$_GET['id'];
$queryResult=$category->getCategoryInfoById($id);
$information = mysqli_fetch_assoc($queryResult);

$message='';
if(isset($_POST['btn'])){
    $message=$category->updateCategoryInfo($_POST, $id);

}

?>

<?php include 'includes/header.php'; ?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-body">


                    <form action="" method="POST">
                        <div class="form-group row" >
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text"  name="category_name"  value="<?php echo $information['category_name']?>" class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control"  name="category_description" > <?php echo $information['category_description']?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publication_status" class="col-sm-3 col-form-label">Publication</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status"  value="1"  <?php echo ($information['status']=='1')?'checked':'' ?>/>Published
                                <input type="radio"  name="status" value="0" <?php echo ($information['status']=='0')?'checked':'' ?> />Unpublished

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
