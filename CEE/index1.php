<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    nav {
      background-color: #ddd;
      display: flex;
      align-items: center;
      padding: 10px;
    }

    h1 {
      margin: 0;
      color: #333;
      font-size: 24px;
      font-weight: bold;
      padding-left: 20px;
    }

    .dropdown {
      position: relative;
      margin-right: 20px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f2f2f2;
      border-radius: 4px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
      min-width: 160px;
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown .dropbtn {
      margin-left: 20px;
      display: inline-block;
      padding: 10px;
      text-decoration: none;
      color: white;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: inherit;
      font-family: inherit;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    nav a {
      color: #333;
      text-decoration: none;
      margin: 0 0px;
      font-size: 16px;
    }

    /* Media queries for responsive design */
    @media screen and (max-width: 800px) {
      h1 {
        font-size: 18px;
      }

      .dropdown {
        margin-right: 10px;
      }

      .dropdown-content {
        min-width: 120px;
      }

      nav a {
        margin: 0 5px;
        font-size: 14px;
      }
    }
     
  </style>
  
</head>
  </style>
</head>
<body>
  <nav>
    <h1>PPT</h1>
    <div class="dropdown">
      <button class="dropbtn" style="color: #333;"> Logins &#9662;</button>
      <div class="dropdown-content">
        <a href="login.php">Student</a>
        <a href="faculty/index.php">Faculty</a>
        <a href="adminpanel/index.php">Admin</a>
      </div>
    </div>
    <a href="contact.php">Contact us</a>
    <a href="about.php" style="margin-left: 30px;">About us</a>
  </nav>
  
</body>
</html>
