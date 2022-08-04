<!-- form validation -->
<?php 
//include database connection
include "../back-end/databaseConector.php";



    if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["receiptNumber"]) && isset($_POST["phone"])  ){

        $fname = validate($_POST["fname"]);
        $lname = validate($_POST["lname"]);
        $email = validate($_POST["email"]);
        $receiptNumber = validate($_POST["receiptNumber"]);
        $phone = validate($_POST["phone"]);

        //validation
        $userAuthenticate = "SELECT*FROM competitors WHERE receiptNumber='$receiptNumber'";
        $userExistance = mysqli_query($conn, $userAuthenticate );//execute the querry
        //check if receipt exists
        $checkReceiptExistance = "SELECT*FROM receipts WHERE receiptNumber='$receiptNumber'";
        $result = mysqli_query($conn, $checkReceiptExistance);
        $getReceipt = mysqli_fetch_assoc($result); 

        if($getReceipt["receiptNumber"]==$receiptNumber){//compare the fetched receipt number and the provided receipt number
            if(mysqli_num_rows($userExistance)>0){
                header("Location: ../front-end/Competition.php?error=Receipt Number Already In-Use");
                exit();
            }else{
                //insert data into database
                $sql = "INSERT INTO competitors(fname,lname,email,phone,receiptNumber) VALUES ('$fname','$lname','$email','$phone','$receiptNumber') ";
                mysqli_query($conn, $sql);//execute the querry
                header("Location: ../front-end/Competition.php?success=Successfully Registered");
                exit();
    
            }//end of account validation


        }else{
            header("Location: ../front-end/Competition.php?error=Invalid Receipt Number");
            exit();

        }//end of receipt validation

 
    }else{
        //TODO

    }


 //method for validation
 function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>