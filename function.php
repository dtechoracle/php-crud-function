<?php 
require 'db.php';
    function create() {
        $conn = mysqli_connect('localhost','root','','test');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        header("location: index.php");
	}  

    function read() {
        require 'db.php';
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $username = $row["username"];
                $password = $row["password"];
                $email = $row["email"];
                $id = $row['id'];
                // $names = "PHP";

                echo "<h6>USERNAME</h6> $username <a href='index.php?del=$id'><button>Delete</button></a> <a href='index.php?upd=$id'><button>Update</button></a>";
                echo "<h6>EMAIL ADDRESS</h6>". $email;
            }
}
    }

    function update() {
        require 'db.php';
        $id = $_GET['upd'];
        $sql = "SELECT * FROM users WHERE id =$id" ;
        $result = $conn->query($sql);

        header("location: index.php");
    }

    function delete() {
        require 'db.php';
        $id = $_GET['del'];
        $sql = "DELETE FROM users WHERE id =$id";
        $result = $conn->query($sql);

        header("location: index.php");
    }
?>