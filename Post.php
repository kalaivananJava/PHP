<?php

function showmsg(){
    echo "<pre>";
print_r($_POST);
echo "</pre>";

echo $_POST['search_query'] ."<br>";
echo $_POST['Location'];
}
if(isset($_POST['search_query']) && isset($_POST['Location'])){
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
    <form action="" method="POST">
        <input type="text" name="search_query" id="" placeholder="Name">
        <input type="text" name="Location" id="" placeholder="Location">
     <input type="submit" value="submit">
    </form>
</body>
</html>