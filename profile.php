<?php include 'inc/header.php';?>
<?php
   $login = Session::get("cuslogin");
   if ($login == false) {
     header("Location:login.php");
   }
?>


<!DOCTYPE html>
<html>
<head>
<style>

.container {
  position: relative;
  width: 20%;
  top: 15px;
  left: 70px;
}

.image {
  display: block;
  width: 100%;
  height: 180px;
  width: 220px;
  border: 1px solid black;
  outline-style: solid;
  outline-color: #19c19f;
  outline-width: 4px;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #19c19f;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container:hover .overlay {
  width:  207px;
}

.text {
  white-space: nowrap;
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

div.ex3 {
  border: 2px solid black;
  outline-style: solid;
  outline-color: hsl(0, 0%, 73%); /* grey */
}

.tbl{
  position: relative;
  bottom: 180px;
  left: 350px;
  padding-left: 500px;
  width: 50%;
  text-align: left;
  border-style: groove;
  border-width: 7px;
  border-color: #19c19f;

}


.tbl th {
  background: #666 none repeat scroll 0 0;
  color: #fff;
  font-size: 20px;
  padding: 5px 8px;
  text-align: center;
}
.tbl td{padding:10px;text-align:center;}

table.tbl tr:nth-child(2n+1){background:#fff;height:30px;}
table.tbl tr:nth-child(2n){background:#fdf0f1;height:30px;}
table.tbl input[type="number"] {
  border: 1px solid #ddd;
  padding: 2px;
  width: 60px;
}
table.tbl input[type="submit"] {
  background: #333 none repeat scroll 0 0;
  border: 1px solid #000;
  border-radius: 3px;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  padding: 1px 5px;
}
table.tbl a {
  color: #fe5800;
  font-weight: bold;
  text-decoration: none;
}
table.tbl a:hover{color: #000;}
table.tbl img {
  height: 20px;
  width: 30px;
}

</style>
</head>
<body>



<style >
  .tblone{ width:550px; margin: 0 auto; border: 2px; solid #ddd;}
  .tblone tr td { text-align: justify;}
</style>


 <div class="main">
    <div class="content">
    	<div class="section group">
        <?php
          $id = Session:: get ("cmrId");
          $getdata = $cmr->getCustomerData($id);
          if ($getdata) {
            while($result = $getdata->fetch_assoc()){
         ?>

         <div class="container">
           <img src="<?php echo $result['image']; ?>" alt="Avatar" class="image" >
           <div class="overlay">
             <div class="text"><?php echo $result['name']; ?></div>
           </div>
         </div>

          <table class = "tbl">
            <tr>
              <td colspan="3">
                <h2>Your Profile Details</h2>
              </td>
            </tr>
            <tr>
              <td width = "20%">Name</td>
              <td width = "5%">:</td>
              <td><?php echo $result['name']; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?php echo $result['email']; ?></td>
            </tr>
            <tr>
              <td>Phone No</td>
              <td>:</td>
              <td><?php echo $result['phone']; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td>:</td>
              <td><?php echo $result['address']; ?></td>
              </tr>
              <tr>
                <td>City</td>
                <td>:</td>
                <td><?php echo $result['city']; ?></td>
              </tr>
              <tr>
                <td>ZipCode</td>
                <td>:</td>
                <td><?php echo $result['zip']; ?></td>
              </tr>

            <tr>
              <td>Country</td>
              <td>:</td>
              <td><?php echo $result['country']; ?></td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td><a href="editprofile.php">Update Details</a></td>
            </tr>
          </table>

        <?php } } ?>
 		</div>
 	</div>
	</div>
</body>
</html>
  <?php include 'inc/footer.php';?>
