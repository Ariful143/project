<?php
    require_once '../vendor/autoload.php';
    $category = new App\classes\Category;

    $message='';
    if(isset($_POST['btn'])){
        $message=$category->saveCategoryInfo($_POST);

    }

?>

<h1><?php echo $message; ?></h1>
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
                                <input type="text"  name="category_name" class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                               <textarea class="form-control" name="category_description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publication_status" class="col-sm-3 col-form-label">Publication</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status" value="1"/>Published
                                <input type="radio" name="status" value="0"/>Unpublished
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
