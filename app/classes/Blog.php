<?php
namespace App\classes;
use App\classes\Database;


class Blog
{
    public function saveBlogInfo($data)
    {
        $sql = "INSERT INTO blogs(category_name, blog_title, short_description,long_description,publication_status) VALUES ('$data[category_name]', '$data[blog_title]', '$data[short_description]','$data[long_description]','$data[status]')";
        if (mysqli_query(Database::dbConnection(), $sql)) {

            $message = 'blog info save successfully';
            return $message;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection()));
        }

    }

    public function getBlogInfo()
    {
        $sql = "SELECT id,category_name,blog_title,publication_status FROM blogs";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }
    }

    public function getBlogInfoById($id)
    {
        $sql = "SELECT id,category_name,blog_title,publication_status FROM blogs WHERE id='$id'";

        if (mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }
    }

    public function updateBlogInfo($data, $id)
    {

        $sql = "UPDATE blogs SET  category_name='$data[category_name]', blog_title='$data[blog_title]', publication_status='$data[status]' WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            header('Location: manage-blog.php');
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }

    }

    public function deleteBlogInfo($id)
    {

        $sql = "DELETE FROM blogs WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $message = " Blog info delete successfully";
            return $message;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }
    }
}