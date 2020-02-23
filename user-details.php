<?php
function setUserDetails($mysqli){
    if($result = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$_POST[username]'")){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $_SESSION['getUserID'] = $row['id'];
                $_SESSION['getEmail'] = $row['email'];
                $_SESSION['getDisplayName'] = $row['username'];
                $_SESSION['getPassword'] = $row['password'];
            }
            mysqli_free_result($result);
        }
    } else{
        echo "ERROR: Could not able to execute $result. " . mysqli_error($mysqli);
    }
    
    mysqli_close($mysqli);
}

?>