<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="jquery-3.7.1.min.js"></script>
    </head>
    <body>
        
    <h1>hello world!</h1>
     <form action="valid.php" method="post">
        name: <input type="text" name="name" ><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
     </form>
    <?php 
    echo "hello broo...";
    $text="hello";
    echo "hai! ". $text ." kalaivanan";
    
 ?>
      <script>
        $(function(){
            $("h1").click(function(){
                $(this).hide();
            })
        })


      </script>
    </body>
</html>