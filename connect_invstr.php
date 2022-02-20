<?php
       if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["submit"])){
        $con=mysqli_connect("localhost","root","","mydb_ree");
        if(!$con)
        {
          die("cannot connect to server");
        }else{
            session_start();
            if(isset($_POST["submit"]))
            {
                $name= $_POST['name'];
                $occupation= $_POST['occupation'];
                $sex = $_POST['sex'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $time_to_connect = $_POST['time_to_contact'];
                $reference = $_POST['reference'];
                $query = "INSERT into `investor`(`name`,`occupation`,`sex`,`phone`,`email`,`time_to_connect`,`reference`) values('$name','$occupation','$sex','$phone','$email','$time_to_connect','$reference')";
                $res = mysqli_query($con,$query);
                if($res)
                {
                    echo "you have registered successfully";
                    header('Location: result.php');
                    exit;

                }else{
                   
                    echo $res;
                }
                
            }
           
            
        }
       }
         
        ?>