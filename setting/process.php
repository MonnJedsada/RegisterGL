<?php include 'connect.php'; ?>

<?php
    // print_r($_POST);


    $Fname = $_POST['first_name'];
    $Lname = $_POST['last_name'];
    $phone = $_POST['numphone'];
    $mail =  $_POST['e_mail'];
    $price = $_POST['detail'];

    mysqli_query($connect, "INSERT INTO `tblregister` (`first_name`, `last_name`, `numphone`, `e_mail`, `detail`) 
                            VALUES ('$Fname', '$Lname', '$phone', '$mail', '$price');");

    if(mysqli_affected_rows($connect) > 0){
        // echo '<p>ท่านได้ทำการลงทะเบียนสำเร็จแล้ว</p>';
        echo "<script>alert('ท่านได้ทำการลงทะเบียนสำเร็จแล้ว')</script>";
        echo "<script>window.location='../thankyou.php'</script>";
        // header('location: index.php');
    }else{
        echo 'ท่านไม่ได้กรอกข้อมูลลงทะเบียน';
        echo mysqli_error($connect);
    }

    // header('location: index.php');
?>
