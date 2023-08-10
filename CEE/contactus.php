
<?php
$host = "localhost:3366";
$username = "root";
$password = "";
$database = "cee_db2";

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
       header("Location: index.php");
    } else {
      echo "Error: Unable to insert the message.";
    }
  }

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
