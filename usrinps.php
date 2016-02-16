<?php
 session_start();
 $usrname = $_SESSION['stuid'];
 $udir = md5($usrname);
 $lang = $_SESSION['lang'];
 if(isset($_FILES['usrinp']))
  {
   $errors= array();
   $file_name = $_FILES['usrinp']['name'];
   $file_tmp = $_FILES['usrinp']['tmp_name'];
   $file_type = $_FILES['usrinp']['type'];
   $file_size = $_FILES['usrinp']['size'];
   $file_ext = strtolower(end(explode('.',$_FILES['usrinp']['name'])));    
   $fname = "tmp_inps.txt";
   if($file_ext != "txt")
   {
   	$errors[]="Error : This extension is not allowed : $file_ext";
   }
   if($file_size>150)
   {
   	$errors[]="Error : Filesize too large (Greater than 150 bytes)";
   }    
   if(empty($errors)==true)
   {
    if (file_exists("code_dep/$udir/$lang/$fname"))
    {
	$rfile = "cd code_dep/$udir/$lang; rm $fname; cd ..; cd ..; cd ..";   
	exec($rfile,$ret);
	$_SESSION['com_err']="The existing input file was replaced";
    }
    if(move_uploaded_file($file_tmp,"code_dep/$udir/$lang/$fname"))
    {
     $_SESSION['com_resp']="File uploaded for inputs.. You can change the file before compiling the code";
     header('Location:jssonc_home.php');
    }
   }
 else
   {
    $_SESSION['com_err']=implode(',',$errors);
    header('Location:jssonc_home.php');
   }
  }
 else
 {
  header('Location:jssonc_home.php');
 }
?> 
