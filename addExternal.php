
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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }




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
        <a class="nav-link" href="addInternal.php">Add Internal Marks</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="addExternal.php">Add External Max</a>
      </li> 
           <li class="nav-item">
        <a class="nav-link" href="viewMarks.php">View Marks</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
    </ul>
  </div> 
</nav>
<div>

    <form action="server.php" method="POST">
        <h2>External Exam Marks</h2>
        <label for="id_no">Id no:</label>
        <input type="text" id="id_no" name="id_no" required><br><br>
        
        <label for="Political">Political Science:</label>
        <input type="number" id="Political" name="Political" required><br><br>
        
        <label for="accounting">General Knowledge:</label>
        <input type="number" id="accounting" name="accounting" required><br><br>
        
        <label for="oral">Oral</label>
        <input type="number" id="oral" name="oral" required><br><br>     
        
        <button type="submit" name="saveExit">Save</button>
    </form>
</body>
</html>