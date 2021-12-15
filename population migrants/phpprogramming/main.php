<?php
include_once("config.php");
include_once("Database.php");
$db = new Database();

$db->query("select * from migrant where source=:source");
$db->bind(':source', "UNO"); //'"Ray" or 1=1; --');
$results = $db->resultSet();
echo "enter id to search from database : \n";
foreach ($results as $result) {
    echo $result->id . "\t" . $result->number . "\t" .
       $result->area . "\t" . $result->value. "\n";
}
$db->query("insert into migrant values (null,4,'Kual lampur','mid year',65000, 'Population org',1)");
$db->execute();
?>
<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="search" >
    <button type="submit" name="submit-search">search</button>
</form>
