<?php
class User {
  protected $mongo;
  protected $db;
  protected $table;

  public function __construct() {
    try {
      //Connect to Mongo
      $this->mongo = new Mongo('127.0.0.1:27017');

      $this->db = $this->mongo->selectDB('mydb'); //You have to create a new DB User in Mongo
      //if($this->db) echo "Connected Successfully";

      //Select a Collection/Table
      $tableName = 'user';
      $this->table = $this->db->$tableName;
    }
    catch(Exception $e) {
      echo "Something Went Wrong.";
      exit();
    }
  }

  public function createUser() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['agge'];
    $gender = $POST['gender'];

    $insert = array(
      'name' => $name,
      'email' => $email,
      'password' => $password,
      'age' => $age,
      'gender' => $gender,
    );
    $this->table->insert($insert);
  }

  //Update User
  public function updateUser($email) {

    $query = array('email'=>$email);

    //Get the existing info of the user
    $aUserInfo = $this->table->findOne($query);

    //Assign New Values
    $aUserInfo['name'] = $_POST['name'];
    $aUserInfo['email'] = $_POST['email'];
    $aUserInfo['password'] = $_POST['password'];
    $aUserInfo['age'] = $_POST['age'];
    $aUserInfo['gender'] = $_POST['gender'];

    //Update the User Info
    $this->table->save($aUserInfo);
  }

  //Get All Users
  function getUsers($limit = '4') {
    $users = $this->table->find()->limit($limit);

    return $users;
  }

  //Getting selected user info by email
  function getUserByEmail($email) {
    $query = array('email'=>$email);

    $aUserInfo = $this->table->findOne($query);

    return $aUserInfo;
  }

  function deleteUser($email) {
    $this->table->remove(array('email' => $email));
  }
}
?>
