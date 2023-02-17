<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>Condominio Pedro!</title>
  </head>
  <body>
    <!-- <div class="loginHeader">
       
    </div> -->
   
    
       <div class="login-page">
    <div class="form">
        <div class="login">

            <div class="login-header">
                <h3>Condominio</h3>

            </div>
        </div>
        <form class="login-form" method="POST" action="Home.php">
            <input type="text" required placeholder="username" name="username" id="username"/>
            <input type="password" required placeholder="password" name="password" id="password"/>
            <button type="submit" name="Submit">login</button>
            <p class="message">Login as Guest <a href="tenantLogin.php">Login</a></p>
           
        </form>
    </div>
</div>



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
       
        
        header .header{
        background-color: #fff;
        height: 45px;
    }
    header a img{
        width: 134px;
        margin-top: 4px;
    }
    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .login-page .form .login{
        margin-top: -31px;
        margin-bottom: 26px;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    @media screen and (max-width:600px) {
        .form{
            max-width: 200px;
            
        }
        
    }
    .form input {
        font-family: "Poppins", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background-color: #328f8a;
        background-image: linear-gradient(45deg,#DD517F,#E68E36);
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
  
    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }


    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #DD517F;
        text-decoration: none;
    }

    body {
        /* background-color: #328f8a; */
        background-image: linear-gradient(45deg,#7998EE,#556DC8);
        font-family: "Poppins", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }


       
    </style>

   
  </body>
</html>