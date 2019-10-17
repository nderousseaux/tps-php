<?php include "MyPDO.php";

//On créée une classe de manipulation des users
class User{

    //Attributs
    private $_login = NULL;
    private $_password = NULL;
    private static $USERTABLE;

    //Constructeur
    public function __construct($login, $password)
    {
        $this->_login = $login;
        $this->_password = $password;
    }

    //Accesseurs
    public function getLogin()
    {
        return $this->_login;
    }
    public function setLogin($login)
    {
        $this->_login = $login;
    }
    public function getPassword()
    {
        return $this->_password;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }
    public static function getUSERTABLE()
    {
        return self::$USERTABLE;
    }
    public static function setUSERTABLE($USERTABLE)
    {
        self::$USERTABLE = $USERTABLE;
    }


    //Méthodes d'instance
    public function exists(){
        $connect = MyPDO::pdo();

        //On va chercher l'utilisateur
        $result = $connect->prepare("SELECT * FROM users WHERE login = :login");
        $result->bindValue(':login', $this->_login, PDO::PARAM_STR);
        $result->execute();
        if($result->rowCount()==1){
            $row = $result->fetch();
        }
        else{
            throw new Exception("Utilisateur introuvable" .$result->rowCount());
        }

        //On teste le mot de passe
        $ok = false;
        if(!password_verify($this->_password,$row["password"] )){
            $ok = false;
        }
        else{
            $ok = true;
        }
        return $ok;

    }



}