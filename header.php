<?php
session_start();
include_once 'sql.php';
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $da = $_POST['data'];
     
$sql = "SELECT * FROM login_demo WHERE username ='".$user."'";
    if (mysqli_num_rows(mysqli_query($conn,$sql))== 1) {
        $data = mysqli_fetch_array(mysqli_query($conn,$sql));
        if ($data['password'] == $pass) {
            $_SESSION['user_id'] = $data['data'];
          $_SESSION['username'] = $data['username'];
          $_SESSION['password'] = $data["password"];
            $_SESSION['md5']= $data['md5'];
            include_once("load1.php");
        } else {
            echo "mật khẩu không đúng".$pass;
        }
        
    } else {
        echo "tài khoản không chính sát".$user .$da;
    }
    
}; 

 if(isset($_POST['logins'])){
     $user = $_POST['user'];
     $pass = $_POST['password'];
     $dar = $_POST['data'];
    $md5 = md5($user.$pass.$kt);
      $sql="select * from login_demo where username='$user'";
 $kt=mysqli_query($conn, $sql);
 
 if(mysqli_num_rows($kt)  > 0){
 echo "tài khoản đa tồn tại";
# headed("index.php?add=id_user2");

 }else{

     
$sql = "INSERT INTO login_demo( username,
 password,data,md5) VALUES (
 '$user',
 '$pass',
 '$dar',
 '$md5'
 );";
    
    mysqli_query($conn,$sql);
    mysqli_close($conn);
  echo "đang ký thành công";
#    mkdir("upload/".$id);
  #  $rrrrrd = fopen("upload/".$id."/index.php","a");

    include_once('load1.php');
    echo "5";
exit();
};
};

