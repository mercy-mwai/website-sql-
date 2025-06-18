

<!-- <?php  
// INSERTING DATA USING PHP
// include("database.php");


// $username = "Patrick";
// $password = "rock3";
// $hash =password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (user,password)
//         VALUES ('$username', '$hash')";

       
// try{
//         mysqli_query($conn, $sql);
//         echo "User is now registered";
// }catch(mysqli_sql_exception $e){
//         echo "Could not register user" . $e->getMessage();
// }

// mysqli_close($conn);
?> -->

<?php
        include("database.php");
$sql ="SELECT * FROM users WHERE user= 'Spongebob'";
$result= mysqli_query($conn, $sql); 

if(mysqli_num_rows($result) > 0){
        $row =mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
}else{
        echo "No user found";
}


mysqli_close($conn);
?>