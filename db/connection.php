<!-- tao file connection ket noi den db -->
<?php 

$conn = mysqli_connect('localhost','root','','adminwatch');
if($conn) {
    mysqli_query($conn, 'SET NAMES "UTF8"');
   
}else{
    echo ' ket noi loi';
}