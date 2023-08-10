<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
    }

    nav {
      background-color: #333;
      padding: 10px;
    }

    nav h1 {
      margin: 0;
      padding: 0;
      display: inline-block;
      color: #fff;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: #fff;
    }

    main {
      margin: 20px;
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      margin: 0 0 10px;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #555;
    }

    /* Responsive Design */
    @media screen and (max-width: 600px) {
      nav {
        text-align: center;
      }

      nav h1 {
        display: block;
        margin-bottom: 10px;
      }

      nav a {
        margin: 5px;
      }

      main {
        margin: 10px;
      }

      h2 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <nav>
    <h1>PPT</h1>
    <a href="index.php">Home</a>
    <a href="#"></a>
    
  </nav>

  <main>
    <h2>Contact Us</h2>
    <p>If you have any questions or feedback, please fill out the form below to contact us.</p>

    <form action="contactus.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Your name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Your email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Your message" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </main>
</body>
</html>
