<?php
class Database
{
  const dbName = 'kunzubo';
  const dbPassword = '';
  const dbUser = 'root';
  const dbHost = 'localhost';

  function executeQuery($sql)
  {
    $conn = mysqli_connect(self::dbHost,self::dbUser,self::dbPassword,self::dbName);
    if(!$conn)
    {
      die("Connection failed:".mysqli_connect_error());
      echo "failed";
    }
    $results = mysqli_query($conn,$sql);
    return $results;
  }
}

?>
