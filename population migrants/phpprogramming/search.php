<?php
include_once("config.php");
include_once("Database.php");
$db = new Database();

?>

<h1>search page</h1>
<div>
<?php
if(isset($_POST['submit-search'])){
    // prevent SQL injection
//$search=mysqli_real_escape_string($db->dbh, $_POST['search']);
$search= $_POST['search'];
$db->query("SELECT * FROM migrant where 
id LIKE '%$search%' 
-- OR
-- number LIKE '%$search%' OR
-- area LIKE '%search%'OR
-- series LIKE '%search%'OR
-- source LIKE '%search%'
");
$results = $db->resultSet();
foreach ($results as $result) {
    echo $result->id . "\t" . $result->number . "\t" .
       $result->area . "\t" . $result->value;
}
}
?>
</div>