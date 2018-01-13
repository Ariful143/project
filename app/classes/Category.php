<?php
namespace App\classes;
use App\classes\Database;


class Category
{
    public function saveCategoryInfo($data)
    {
        $sql = "INSERT INTO categories(category_name, category_description, status) VALUES ('$data[category_name]', '$data[category_description]', '$data[status]')";
        if (mysqli_query(Database::dbConnection(), $sql)) {

            $message = 'Category info save successfully';
            return $message;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }
    }

    public function getCategoryInfo()
    {
        $sql = "SELECT * FROM categories";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }
    }

    public function getCategoryInfoById($id)
    {
        $sql = "SELECT * FROM categories WHERE id='$id'";

        if (mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }

    }

    public function updateCategoryInfo($data, $id)
    {

        $sql = "UPDATE categories SET  category_name='$data[category_name]', category_description='$data[category_description]', status='$data[status]' WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            header('Location: manage-category.php');
        } else {
            die ('Query problem' . mysqli_error(Database::dbConnection));
        }

    }
    public function deleteCategoryInfo($id){

        $sql="DELETE FROM categories WHERE id='$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $message= "Category info delete successfully";
            return $message;
        }else{
            die ('Query problem'.mysqli_error(Database::dbConnection));
        }

    }
}