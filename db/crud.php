<?php 
    class crud{
        //database object
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        public function insertAsset($assetname,$assetcat,$assetdesc,$assetimg){
            try {
                $sql ="insert into asset_tb (asset_name,category_id,asset_disc,picture) values(:asset_name, :category_id,:asset_disc, :picture)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':asset_name', $assetname);
                $stmt->bindparam(':category_id', $assetcat);
                $stmt->bindparam(':asset_disc', $assetdesc);
                $stmt->bindparam(':picture', $assetimg);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function newCategory($category, $category_desc){
            try {
                $sql="insert into category_tb (category, category_desc) values (:category, :category_desc)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':category', $category);
                $stmt->bindparam(':category_desc', $category_desc);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        
        }

        public function editAssets($asset_id,$assetname, $assetcat, $assetdesc, $destination){
           try{ 
                $sql = "UPDATE `asset_tb` SET `asset_name`=:assetname,`asset_disc`=:assetdesc,`picture`=:assetimg,`category_id`=:assetcat WHERE asset_id = :asset_id ";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':asset_id',$asset_id);
                $stmt->bindparam(':assetname',$assetname);
                $stmt->bindparam(':assetcat',$assetcat);
                $stmt->bindparam(':assetdesc',$assetdesc);
                $stmt->bindparam(':assetimg',$destination); 
                // execute statement
                $stmt->execute();
                return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }
        public function getAssets(){
            try{
                $sql = "SELECT * FROM `asset_tb` a inner join category_tb s on a.category_id = s.category_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getCategories(){
            try{
                $sql = "SELECT * FROM `category_tb`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getAssetDetails($asset_id){
            try{
                 $sql = "select * from asset_tb a inner join category_tb s on a.category_id = s.category_id 
                 where asset_id = :asset_id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':asset_id', $asset_id);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 return $result;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }

         public function deleteAsset($id){
            try{
                $sql = "delete from asset_tb where asset_id = :asset_id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':asset_id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
         }
     
         public function insertUser($firstname,$lastname,$email,$username, $password, $picture){
            try {
                $result = $this->getUserEmail($email);
                if ($result['num'] > 0){
                    return false;
                }else{
               #$pass= md5($password.$username);
                 $sql ="insert into users_tb (firstname, lastname, email , username, password, picture) values(:firstname, :lastname,:email, :username, :password, :picture)";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':firstname', $firstname);
                 $stmt->bindparam(':lastname', $lastname);
                 $stmt->bindparam(':email', $email);
                 $stmt->bindparam(':username', $username);
                 $stmt->bindparam(':password', $password);
                 $stmt->bindparam(':picture', $picture);
                 $stmt->execute();
                 return true;
                }
            
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        public function getUserImg($uid){
            try {
                    $sql = "select firstname, lastname , picture from users_tb where uid = :uid";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam(':uid', $uid);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    return $result;
            } catch (PDOException $e) {
                $e->getMessage();
                return false;
                
            }
        }

        public function getUserEmail($email){
            try{
                $sql = "select count(*) as num from users_tb where email = :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':email',$email);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }
    }
?>