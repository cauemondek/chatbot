<?php
//connection to database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bot";

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Database Error");

// getting user message through ajax
$getMsg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMsg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if (mysqli_num_rows($run_query) > 0) {
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible whick we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "Desculpe, não consegui entender, caso queira saber algumas palavras que sei digite OPÇÕES";
}
?>