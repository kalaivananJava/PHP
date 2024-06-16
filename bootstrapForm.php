<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-white mb-2">
        <div class="row p-3">
            <h2>Contact Form</h2>
            <form action="">
                <div class="form-group"><label for="">Email</label>
                <input type="email" name="" id="" class="form-control">
            </div>
            <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="" id="" class="form-control" value="">
            </div>
            <div class="form-group">
            <label for="">Comments</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control" value="
    <?php  echo $_GET['user_name']; ?>"></textarea>
            </div>
           
          <button class="btn btn-success my-2">Submit</button>
            </form>
        </div>
    </div>


    <?php 
    
    
    echo $_GET['user_name'];
    
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>