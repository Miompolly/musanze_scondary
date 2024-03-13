
<!DOCTYPE html>
<html lang="en">




<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musanze school</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
  body {
    background-color: #f0f0f0;
  }
  .custom-navbar {
    background-color: #3498db; 
  .login-container {
    max-width: 800px;
    margin: 30px auto;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    background-color: #fff;
  }

  .baby-image {
    background-image: url('baby.jpg');
    background-size: cover;
    background-position: center;
    height: 400px;
    border-radius: 5px 0 0 5px;
  }

  .login-form {
    padding: 30px;
    border-radius: 0 5px 5px 0;
  }

  .login-form h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .login-form label {
    font-weight: bold;
  }

  .login-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .login-form button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .login-form button:hover {
    background-color: #0056b3;
  }
  
   .applicant-image {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px; /* Adjust the height as needed */
  }

  .applicant-image img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }
</style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
  <a class="navbar-brand" href="#">Musanze Secondary School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
 
           <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container login-container">
  <div class="row">
  
    <div class="col-md-6 login-form">
      <h2>Login</h2>
      <form action="server.php" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        
                  <div class="form-group">
      <span>Have Not Account</span>  <a href="signup.php"> Sign Up</a>
        
      </div>
      </form>
    </div>
      <div class="col-md-6 applicant-image">

       
   
</div>
      
      
   
      </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>