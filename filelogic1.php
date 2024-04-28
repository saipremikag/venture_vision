<?php


$conn = mysqli_connect("localhost","root","","year3");
$sql="SELECT * FROM files";
$result=mysqli_query($conn,$sql);
$files=mysqli_fetch_all($result,MYSQLI_ASSOC);
if(isset($_POST['save']))
{
    $filename=$_FILES['myfile']['name'];
    $destination='uploads1/'. $filename;
    $extension=pathinfo($filename,PATHINFO_EXTENSION);
    $file=$_FILES['myfile']['tmp_name'];
    $size=$_FILES['myfile']['size'];
    if(!in_array($extension,['zip','pdf','png','ppt','pptx'])){
        echo "Your file extension must be .zip or .pdf or .pptx or .ppt or .png";
    }
    elseif($_FILES['myfile']['size']>10000000){
        echo "file is too large";
    }
    else{
        if(move_uploaded_file($file,$destination)){
            $sql="INSERT INTO files(name,size) VALUES ('$filename','$size')";
            if(mysqli_query($conn,$sql)){
                echo "File uploaded Successfully!";
            }
            else{
                echo "Failed to Upload File..";
            }
        }
    }
}

if(isset($_GET['file_id'])){
    $id=$_GET['file_id'];
    $sql="SELECT * FROM files WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $file=mysqli_fetch_assoc($result);
    $filepath='uploads1/' . $file['name'];

    if(file_exists($filepath)){
        header('Content-Type: application/octet-stream');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma:public');
        header('Content-Length:' . filesize('uploads1/'.$file['name']));
        readfile('uploads1/' . $file['name']);
        mysqli_query($conn,$updatQuery);
        exit;
    }
}






?>