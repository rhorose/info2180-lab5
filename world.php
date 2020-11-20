<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



if (isset($_GET['country'] || empty($_GET['country'])){

$stmt= $conn->query("SELECT * FROM countries WHERE name LIKE '%country%'");
$countries = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
echo "<tr><td>Name</td><td>Continent</td><td>Independence</td><td>Head of state</td></tr>\n ";

foreach($results as $row){

  echo "<tr><td>{$row['name']}</td><td>{$row['continent']}</td><td>{$row['independence_year']}</td><td>{$row['head_of_state']}</td></tr>\n ";
}
echo "</table>";


}



if (isset()=$_GET['cities']){
$stmt= $conn->query("SELECT * FROM countries WHERE name LIKE '%country%' AND context=cities ");
$cities = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<table>";
echo "<tr><td>Name</td><td>District</td><td>Population</td></tr>\n ";

foreach($results as $row){

  echo "<tr><td>{$row['name']}</td><td>{$row['district']}</td><td>{$row['population']}</td></tr>\n ";
}
echo "</table>";

}


echo "<table>";
echo "<tr><td>Name</td><td>Continent</td><td>Independence</td><td>Head of state</td></tr>\n ";

foreach($results as $row){

  echo "<tr><td>{$row['name']}</td><td>{$row['continent']}</td><td>{$row['independence_year']}</td><td>{$row['head_of_state']}</td></tr>\n ";
}
echo "</table>";

 ?> 