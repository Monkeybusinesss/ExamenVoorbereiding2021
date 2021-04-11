<?php 

class database{
    private $host;
    private $username;
    private $password; 
    private $database;
    private $dbh;

    public function __construct(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'flowerpower';

        try {

            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            die("Connection failed!-> " . $exception->getMessage());
        }
    }

// Alle medewerkers
    public function getAllUsers(){

        $sql = "SELECT * FROM medewerker"; 

        // prepared statement (send statement to server  + checks syntax)
        $statement = $this->dbh->prepare($sql);

        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

// Alle artikelen
    public function getAllArticles(){

        $sql = "SELECT * FROM artikel";

        // prepared statement (send statement to server  + checks syntax)
        $statement = $this->dbh->prepare($sql);

        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
 
// Login medewerker
    public function loginEmployee($username, $password){
        $sql = "SELECT * FROM medewerker WHERE gebruikersnaam= :username";
        
        $statement = $this->dbh->prepare($sql);

        $statement->execute([
            'username'=> $username
        ]);

        $data = $statement->fetch(PDO::FETCH_ASSOC);
            
        if($data){
            print_r($data);
        
            if (password_verify($password, $data['wachtwoord'])) {
                session_start();
                $_SESSION['medewerker'] = $data;
                header('location:../../medewerker/medewerker.php');
            } else {
                return $_SESSION['login_error'] = true;
            }
        }else{
            return $_SESSION['login_error'] = true;
        }
    }

// Login function klanten
    public function loginCustomer($username, $password){
        $sql = "SELECT * FROM klant WHERE gebruikersnaam= :username";
        
        $statement = $this->dbh->prepare($sql);

        $statement->execute([
            'username'=> $username
        ]);

        $data = $statement->fetch(PDO::FETCH_ASSOC);
            
        if($data){
            print_r($data);
        
            if (password_verify($password, $data['wachtwoord'])) {
                session_start();
                $_SESSION['medewerker'] = $data;
                header('location:../../klant/klant.php');
            } else {
                return $_SESSION['login_error'] = true;
            }
        }else{
            return $_SESSION['login_error'] = true;
        }
    }

// Delete artikelen
    public function delete($sql, $placeholders, $file){

        $stmt = $this->dbh->prepare($sql);

        // $sql = 'SELECT * FROM medewerkers WHERE username=:uname';

        $stmt->execute($placeholders);
        header('location: '.$file);
        exit;
    }

// Edit artikelen
    public function update($sql, $placeholders, $file){

        $stmt = $this->prepare($sql);

        $stmt->execute($placeholders);
        header('location: ' .$file);
        exit;
    }

// Delete medewerkers
    public function deleteMedewerker($sql, $placeholders, $file){

        $stmt = $this->dbh->prepare($sql);

        $stmt->execute($placeholders);
        header('location: '.$file);
        exit;
    }

// Edit medewerker
    public function updateMedewerker($sql, $placeholders, $file){

        $stmt = $this->prepare($sql);

        $stmt->execute($placeholders);
        header('location: ' .$file);
        exit;
    }
}
?>