<?php
       if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["submit"])){
        $con=mysqli_connect("localhost","root","","mydb_ree");
        if(!$con)
        {
          die("cannot connect to server");
        }else{
            if(isset($_POST["submit"]))
            {
                $name= $_POST['name'];
                $occupation= $_POST['occupation'];
                $dob= $_POST['dob'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $sex = $_POST['sex'];
                $reference = $_POST['reference'];
                $query = "INSERT into `partner`(`name`,`occupation`,`dob`,`sex`,`phone`,`email`,`reference`) values('$name','$occupation','$dob','$sex','$phone','$email','$reference')";
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