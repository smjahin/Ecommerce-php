<?php
  $filepath  = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');

?>

<?php
class Customer{

  private $db;
  private $fm;
  public function __construct(){
    $this->db = new Database();
    $this->fm = new Format();
      }
    public function customerRegistration($data,$file)
    {
      $name           = mysqli_real_escape_string($this->db->link, $data['name']);
      $address        = mysqli_real_escape_string($this->db->link, $data['address']);
      $city           = mysqli_real_escape_string($this->db->link, $data['city']);
      $country        = mysqli_real_escape_string($this->db->link, $data['country']);
      $zip            = mysqli_real_escape_string($this->db->link, $data['zip']);
      $phone          = mysqli_real_escape_string($this->db->link, $data['phone']);
      $email          = mysqli_real_escape_string($this->db->link, $data['email']);
      $pass           = mysqli_real_escape_string($this->db->link, md5($data['pass']));

      $permited  = array('jpg', 'jpeg', 'png', 'gif');
       $file_name = $file['image']['name'];
       $file_size = $file['image']['size'];
       $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
          $file_ext = strtolower(end($div));
          $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
          $uploaded_image = "upload/".$unique_image;


      if ($name == "" || $address == "" || $city == "" || $country == "" || $zip == "" || $phone == "" || $email == ""
      || $pass == ""|| $file_name == "") {

        $msg = "<span class='error'>Fields must not be empty!</span>";
        return $msg;
         }
         elseif ($file_size >5242880) {
                echo "<span class='error'>Image Size should be less then 1MB!
                </span>";
           }
         elseif (in_array($file_ext, $permited) === false) {
               echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
           }



         $mailquery = "SELECT * FROM tbl_customer WHERE email='$email'  LIMIT 1";
         $mailchk = $this->db->select($mailquery);
         if ($mailchk != false) {
           $msg = "<span class='error'>Email already exist!</span>";
           return $msg;
         }

         else {
           move_uploaded_file($file_temp, $uploaded_image);
           $query = "INSERT INTO tbl_customer (name,address,city,country,zip,phone,email,pass,image)
           VALUES('$name','$address','$city','$country','$zip','$phone','$email','$pass','$uploaded_image')";


           $inserted_row = $this->db->insert($query);
           if($inserted_row)
           {
             $msg = "<span class='success'>Customer Data Successfully</span>";
             return $msg;
           } else {
             $msg = "<span class='error'>Customer Data not Inserted</span>";
             return $msg;
           }
         }
     }
     public function customerLogin($data)
     {
       $email   = mysqli_real_escape_string($this->db->link, $data['email']);
       $pass    = mysqli_real_escape_string($this->db->link, md5($data['pass']));

       if (empty($email) || empty($pass))
       {
         $msg = "<span class='error'>Fields must not be empty!</span>";
         return $msg;
       }
       $query = "SELECT * FROM tbl_customer WHERE email = '$email' AND pass='$pass'";
       $result = $this->db->select($query);
       if ($result !=false) {
           $value = $result->fetch_assoc();
           Session::set("cuslogin",true);
           Session::set("cmrId",$value['id']);
           Session::set("cmrName",$value['name']);
           header("Location:cart.php");
       }
       else {
         $msg = "<span class='error'>Email or Password not match!</span>";
         return $msg;
       }
     }
     public function getCustomerData($id){
       $query = "SELECT * FROM tbl_customer WHERE id = '$id'";
       $result = $this->db->select($query);
       return $result;
     }
     public function customerUpdate($data,$file, $cmrId){
       $name           = mysqli_real_escape_string($this->db->link, $data['name']);
       $address        = mysqli_real_escape_string($this->db->link, $data['address']);
       $city           = mysqli_real_escape_string($this->db->link, $data['city']);
       $country        = mysqli_real_escape_string($this->db->link, $data['country']);
       $zip            = mysqli_real_escape_string($this->db->link, $data['zip']);
       $phone          = mysqli_real_escape_string($this->db->link, $data['phone']);
       $email          = mysqli_real_escape_string($this->db->link, $data['email']);



       $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

         $div = explode('.', $file_name);
           $file_ext = strtolower(end($div));
           $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
           $uploaded_image = "upload/".$unique_image;

       if ($name == "" || $address == "" || $city == "" || $country == "" || $zip == ""
       || $phone == "" || $email == "") {

         $msg = "<span class='error'>Fields must not be empty!</span>";
         return $msg;
          }
            if (!empty($file_name)) {

          if ($file_size >5242880) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
            }
          elseif (in_array($file_ext, $permited) === false) {
                echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
            }


          else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query="UPDATE tbl_customer SET
                    name    ='$name',
                    address ='$address',
                    city    ='$city',
                    country ='$country',
                    zip     ='$zip',
                    phone   ='$phone',
                    email   ='$email',
                    image   = '$uploaded_image'
                    WHERE id ='$cmrId'";
                    $updated_row = $this->db->update($query);
                    if($updated_row)
                    {
                      $msg = "<span class='success'>Customer data Updated Successfully</span>";
                      return $msg;
                    }
                    else {
                      $msg = "<span class='error'>Customer datanot Updated! </span>";
                      return $msg;
                    }
          }
        }

        else{
  $query ="UPDATE tbl_customer SET
          name    ='$name',
          address ='$address',
          city    ='$city',
          country ='$country',
          zip     ='$zip',
          phone   ='$phone',
          email   ='$email'

          WHERE id ='$cmrId'";
          $updated_row = $this->db->update($query);
  if($updated_row)
  {
    $msg = "<span class='success'>Product Updated Successfully</span>";
    return $msg;
  } else {
    $msg = "<span class='error'>Product not Updated</span>";
    return $msg;
  }
}
     }
}
?>
