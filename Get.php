<?php

function showmsg(){
    echo "<pre>";
print_r($_GET);
echo "</pre>";

echo $_GET['search_query'] ."<br>";
echo $_GET['Location'];
}
if(isset($_GET['search_query']) && isset($_GET['Location'])){
showmsg();
}else{
    echo "Not submitted";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bootstrapForm.php" method="GET">
        <input type="text" name="search_query" id="" placeholder="Name">
        <input type="text" name="Location" id="" placeholder="Location">
     <input type="submit" value="submit">
    </form>
</body>
</html>