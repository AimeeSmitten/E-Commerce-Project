<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<!-- <?php
// session_start();
// if (isset($_SESSION['register'])){
//     header("Location: index.php");
// }
 ?> -->

<?php
session_start();
require('config/db.php');

// Initialize variables with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM register WHERE username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: index.html");
                        } else{
                            // Password is not valid, display a generic error message
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>

    

<!-- Account Page -->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/e.jpg" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>

                    <form id="LoginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
                        <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
                        <button type="submit" class="button" name="submit">Login</button>
                        <br>
                        <br>
                        <br>
                        <a href="">Forgot Password</a>
                    </form>

                    <?php
                    if(isset($_POST["submit"])) {
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];

                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        $errors = array();
                        
                        if (empty($username) OR empty($email) OR empty($password)){
                            array_push($errors, "All fields are required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            array_push($errors, "Email is not valid");
                        }
                        if (strlen($password)<8){
                            array_push($errors, "Password must be at least 8 characters long");
                        }

                        require_once "config/db.php";
                        $sql = "SELECT * FROM register WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rowCount = mysqli_num_rows($result);

                        if($rowCount>0){
                            array_push($errors, "Email already exists!");
                        }

                        if (count($errors)>0){
                            foreach ($errors as $error){
                                echo "<div class='aler alert-danger'> $error</div>";
                            }
                        }else{
                            require_once "config/db.php";
                            $sql = "INSERT INTO register (username, email, password	) VALUES (?, ?, ?)";
                            $stmt = mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);

                            if($prepareStmt){
                                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $passwordHash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class = 'alert alert-successful'>You have been successfully registerd!</div>";
                            }else{
                                die("Something went wrong");
                            }
                        }
                    }
                    
                    ?>

                    <form id="RegForm" action="login.php" method="post">
                        <input type="text" placeholder="Username" name="username">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="button" name="submit">Register</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php') ?>

<!-- js toggle menu -->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px"

    function menutoggle(){
       if(MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px"
       }
       else{
            MenuItems.style.maxHeight = "0px"
       }
    }
</script>

<!-- js for toggle form -->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
</script>
</body>
</html>