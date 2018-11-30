<html>

<body>
<?php

$con = mysqli_connect('localhost','root','','shopping_cart');
 

$sql="INSERT INTO tbl_product (name,price,image)

VALUES

('$_POST[name]','$_POST[price]','$_POST[image]')";

mysqli_query($con,$sql);

echo '<script>alert("Item has been Added")</script>';
echo '<script>window.location="index1.php"</script>';
?>
</body>

</html>