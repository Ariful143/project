<?php
require_once '../vendor/autoload.php';
$blog = new App\classes\Blog;



$id=$_GET['id'];
$queryResult=$blog->getBlogInfoById($id);
$information = mysqli_fetch_assoc($queryResult);

$message='';
if(isset($_POST['btn'])){
    $message=$blog->updateBlogInfo($_POST, $id);

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
                        <form action="" method="POST">
                            <div class="form-group row" >
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputEmail3" name="category_name">
                                        <option>Select any one</option>
                                        <option name="mobile">Mobile</option>
                                        <option name="television">Television</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input type="text"  name="blog_title" class="form-control" id="inputEmail3" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="short_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control textarea" name="long_description" rows="12"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file"/>
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

                                <div class=" offset-7 col-sm-5">
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">Save Category Info</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
