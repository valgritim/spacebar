<?php
    session_start();
    if(!empty($_SESSION['error'])){
        echo "<div class='error'><span>" . $_SESSION['error'] . "</span>
               <button id='closeError'>X</button>
        </div>";
        
    } 
    if(!empty($_SESSION['user']) && !empty($_SESSION['role'])){
            echo"<div id='role' class='hidden'>" . $_SESSION['role'] ."</div>";
            
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>The Space bar</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <img src="images/gardians.png" alt="Logo_space_bar">
            <div>
                <p>The space bar</p>
                <p>A blog coming from space</p>
            </div>
            
            <ul>
                <li><i class="far fa-newspaper"></i> News Categories</li>
                <li><i class="fas fa-user"></i><a href="#register" rel="modal:open"> Register</li>
                <li><i class="fas fa-sign-in-alt"></i><a href="#ex1" rel="modal:open"> Login</a></li>
            </ul>            
        </nav>
    </header>
    <section class="banner">
            <h1>Welcome to the space bar, all the crusty news from space are here !</h1>
    </section>
    <section id="news">
        <div class="articles"></div>
          
        <div class="aside">
            <div class="card">
                    <h2>Buy NOW !!!</h2>
                    <h3>Space Cake</h3>
                    <div class="spaceCake">Image</div>
                    <p>Hallucinate badly and meet the little greens..</p>
                    <a href="#" class="button">I want it !</a>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                    <div class="fakeimg">Image</div><br>
                    <div class="fakeimg">Image</div><br>
                    <div class="fakeimg">Image</div>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
            </div>    
        </div>      
  
    </section>
    <section class="modals">
        <div id="ex1" class="modal">
            <h3 class="loginForm">Login form</h3>
            <hr>
            <form action="traitLogin.php" method="post" id="login">
                <label for="user">Username</label>
                <input type="email" id="user" name="user" placeholder="enter your email" required><br><br>
                <label for="pwd">Password</label>
                <input type="text" id="pwd" name="pwd" placeholder="enter your password" required>
                <input type="submit" id="button" name="submit" value="Take-off !">
            </form>
            <a href="#" rel="modal:close">Close</a>
        </div>
        <div id="register" class="modal">
            <h3 class="loginForm">Register now!</h3>
            <hr>
            <form action="traitRegister.php" method="post" id="login">
                <label for="user1">Email</label>
                <input type="email" id="user1" name="user" placeholder="enter an email" required><br><br>
                <label for="pwd">Password</label>
                <input type="text" id="pwd" name="pwd" placeholder="enter a password" required>
                <input type="submit" id="button" name="submit" value="Ignition!">
            </form>
            <a href="#" rel="modal:close">Close</a>
        </div>
    </section>   

    <footer class="footer">
        <h2>Footer from space</h2>
    </footer>    
</body>    
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="script.js"></script>          
</html>