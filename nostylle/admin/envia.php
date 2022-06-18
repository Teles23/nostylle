<?php 

   include_once('../config/connection.php');
   $stmt = $conectar->prepare("INSERT INTO posts (title, description, data) VALUES(:TITLE, :DESCRIPTION, :DATA) ");

   $title = $_POST['title'];
   $data = $_POST['data'];
   $description = $_POST['description'];
   




   $stmt->bindParam(":TITLE", $title);
   $stmt->bindParam(":DESCRIPTION", $description);
   $stmt->bindParam(":DATA", $data);
     $stmt->execute();

   /*redireciona o arquivo */
   header("Location:view2.php");

?>
