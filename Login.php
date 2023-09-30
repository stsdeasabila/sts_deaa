<?php 
$username = 1512;
$password = 1512;

if ($username == 1512 && $password == 1512){
    echo "Berhasil login";
}else if ($username == 123 && $password == 1512){
    echo "username salah";
}else if ($username == 1512 && $password == 2222){
    echo "password salah";
}else{
    echo "Mohon maaf username atau password salah";
}
?>