<?php

$dbUrl = getenv('DATABASE_URL');

echo 'This is the DB URL: ' . $dbUrl . '<br/>';

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

foreach ($db->query('SELECT username, password FROM workout.user') as $row)
{
  echo 'user: ' . $row['username'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}

$statement = $db->query('SELECT date, id FROM workout.session');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo 'date: ' . $row['date'] . ' Session ID: ' . $row['id'] . '<br/>';
}

$stmt = $db->prepare("SELECT * FROM workout.session WHERE $user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
