<?php
class Rover{

    private $host = 'localhost';
    private $dbname = 'rover';
    private $username = 'root';
    private $password = '';
    protected $db;
	
	public function __construct(){

        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        if(!empty($_GET['login'])){
            $this->tryLogin($_POST);
            header("Location: http://localhost/rover/index.php");
        }elseif(!empty($_GET['logoff'])){
            $_SESSION['isLoggedIn'] = false;
            header("Location: http://localhost/rover/index.php");
        }
	}
	
	public function tryLogin($data){
    echo 'data: ';
    var_dump($data);
    foreach($this->db->query('SELECT *FROM users WHERE username = \''.$data['nickname'].'\' LIMIT 1') as $row) {
        if($row['password'] == sha1($data['password'])) {
            return $_SESSION['isLoggedIn'] = true;
        }
    }
    $_SESSION['isLoggedIn'] = false;
    }

    public function isUserLoggedIn(){
        return (isset($_SESSION['isLoggedIn'])) ? $_SESSION['isLoggedIn'] : false;
    }
}