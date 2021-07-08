<?php
$con=mysqli_connect("http://remotemysql.com/", "dZlqhGsQpi","iWJZMyqgQm","dZlqhGsQpi");

if(isset($_POST['pat_submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $date=$_POST['date'];
  $date = str_replace('-', '/', $date);
  $phonenumber=$_POST['phonenumber'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $homephone=$_POST['homephone'];

  $query = "insert into emergency_form(fname,lname,gender,date,phonenumber,address,city,homephone)values ('$fname','$lname','$gender','$date','$phonenumber','$address','$city','$homephone')";
  $result = mysqli_query($con, $query);

  if($result)
  {
    echo "<script>alert ('Successfully Registered')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }

}

if(isset($_POST['reg_submit']))
{
  $patient_name = $_POST['patient_name'];
  $gender = $_POST['gender'];
  $mobile_number = $_POST['mobile_number'];
  $date=$_POST['DOB'];
  $date = str_replace('-', '/', $date);
  $street_address = $_POST['street_address'];
  $city = $_POST['city'];
  $zipcode = $_POST['zipcode'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $test1 = $_POST['test1'];
  $test1 = str_replace('on', 'YES', $test1);
  $test2 = $_POST['test2'];
  $test2 = str_replace('on', 'YES', $test2);
  $test3 = $_POST['test3'];
  $test3 = str_replace('on', 'YES', $test3);
  $test4 = $_POST['test4'];
  $test4 = str_replace('on', 'YES', $test4);
  $test5 = $_POST['test5'];
  $test5 = str_replace('on', 'YES', $test5);
  $test6 = $_POST['test6'];
  $test6 = str_replace('on', 'YES', $test6);
  $count=0;
  $check=mysqli_query($con, "select * from patient_registration where mobile_number='$_POST[mobile_number]'");
  $count=mysqli_num_rows($check);

    if($count>0)
    {
      ?>
      <script type="text/javascript">
      alert("Already Registered with this Number");

      </script>
      <?php
      echo "<script>window.open('patient_registration.php','_self')</script>";
    }
    else {

          $registration = " insert into patient_registration(patient_name,gender,mobile_number,date,street_address,city,zipcode,country,email,test1,test2,test3,test4,test5,test6)values('$patient_name','$gender','$mobile_number','$date','$street_address','$city','$zipcode','$country','$email','$test1','$test2','$test3','$test4','$test5','$test6')";

          ?>
          <script type="text/javascript">
          alert("Successfully registered");
          </script>
          <?php

        }


  $registration_result = mysqli_query($con,$registration);

  if($registration_result)
  {
    echo "<script>window.open('index.php','_self')</script>";
  }








}


 ?>
