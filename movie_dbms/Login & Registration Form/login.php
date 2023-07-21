<?php

 $nameid=$_POST['nameid'];
 $passkey=$_POST['passkey'];
 echo ($nameid);
 echo ($passkey);





$conn= new mysqli("localhost","root","","idbm");

    if ($conn->connect_error){
     echo"Connection failed<br>";
     die;
    }
    echo"connection success<br>";


    

    $cmd="select * from login where nameid='$nameid' and passkey='$passkey'";
    $sql_result=mysqli_query($conn,$cmd);
    
    $total_row_count=mysqli_num_rows($sql_result);
    


    if($total_row_count==1)
    {
       
  header("Location:http://localhost/idbm/page.html");
        echo "Login Success";
    
    }
    // else
    // {
    //     echo "error";
        
    
    // }
    
?>


























