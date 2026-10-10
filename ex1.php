
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){

echo "Data sent using POST";

$email = htmlspecialchars($_POST["email"]);
$password = $_POST["password"];




}



elseif ($_SERVER["REQUEST_METHOD"] == "GET"){

echo "Data sent using GET";

$email = $_GET["email"];
$password = $_GET["password"];




}






?>








<form action="action.php" method="post">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Password:</label>
    <input type="password" name="password">

    <button type="submit">Login</button>

</form>