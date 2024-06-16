<?php

// echo htmlspecialchars($_SERVER['PHP_SELF'])."<BR>";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo $_SERVER["REQUEST_METHOD"];
// print_R($_SERVER);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .error {
            color: red;
        }
    </style>





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>


    <?php

    $nameErr = $emailErr = $genderErr = $deptErr = "";
    $name = $email = $gender = $department = "";

    function test_input($data)
    {
        $data = trim($data);//used to remove empty spaces from beginning and end part of the data
        $data = stripcslashes($data);// it removes '\' from data
        $data = htmlspecialchars($data);//if the user enters executable codes like js etc it will remove it. 
        return $data;

    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST['user_name'])) {
            $nameErr = " * Name is required";
        } else {
            $name = test_input($_POST['user_name']);

            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                $nameErr = "* No Special symbols allowed only [a-z,A-z]";
            }
        }

        //validation of User_Email
    
        if (empty($_POST['user_email'])) {
            $emailErr = "* Email is Required";
        } else {
            $email = test_input($_POST['user_email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "* Enter the valid Email";
            }

        }

        // validation for radio
        if (empty($_POST["Gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["Gender"]);
        }

        //validation for select
        if (empty($_POST['dept'])) {
            $deptErr = " * Enter Department";
        } else {
            $department = test_input($_POST['dept']);
            $allowedDepts=array("IT","CSE","IOT");

            if(!in_array($department,$allowedDepts)){
                $deptErr="Invalid dept selected";
            }
        }

    }


    ?>

    <h2>Form Validation</h2>

    <div class="container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <div class="row ">
                <div class="col col-md-6 col-sm-12">
                    <span class="error"><?php echo $nameErr ?></span>
                    <input type="text" name="user_name" id="" class="form-control" placeholder="name">

                </div>

                <div class="col col-md-6 col-sm-12 form-group">
                    <span class="error"><?php echo $emailErr ?></span>
                    <input type="email" name="user_email" id="" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="row ">
            <span class="error">
                    <?php echo $genderErr ?>
                </span>
                <div class="col form-group">
                    <input type="radio" name="Gender" class="form-check-input" value="male">
                    <label class="form-check-label">MALE</label>
                </div>
                <div class="col form-group">
                    <input type="radio" name="Gender" class="form-check-input" value="female">
                    <label class="form-check-label">FEMALE</label>
                </div>
                <div class="col form-group">
                    <input type="radio" name="Gender" class="form-check-input" value="others">
                    <label class="form-check-label">Others</label>
                </div>
              
            </div>
            <div class="row col-md-3 col-sm-12">
              <span class="error"><?php echo $deptErr ?></span>
                <label for="">Department</label>
                <select name="dept" id="" class="form-select form-select-lg ">
                <option value="">Select</option>
                    <option value="IT">IT</option>
                    <option value="CSE">CSE</option>
                    <option value="IOT">IOT</option>
                </select>
            </div>


            <input type="submit" value="submit" class=" btn-primary m-2">
        </form>
    </div>



<?php
if(!(empty($name) && empty($email) && empty($department) && empty($gender) )){
    echo "Your inputs are: <br>";
    
    echo "Name is $name  <br>";
     echo "Email is $email <br>";
     echo "Gender is $gender <br>";
     echo "Department is $department <br>";
  
}

?>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>