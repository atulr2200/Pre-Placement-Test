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
     main {
      margin: 20px;
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    section {
      margin-bottom: 30px;
    }

    h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      margin: 0 0 10px;
    }

    ul, ol {
      margin: 0;
      padding: 0 0 0 20px;
    }

    li {
      margin-bottom: 5px;
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
  </style>
</head>
<body>
  <nav>
    <h1 style="margin-right: 20px;">PPT</h1>
    <a href="index.php">Home</a>
    <div class="dropdown">
      <button class="dropbtn" style="color: #333;"> Logins &#9662;</button>
      <div class="dropdown-content">
        <a href="login.php">Student</a>
        <a href="faculty/index.php">Faculty</a>
        <a href="adminpanel/index.php">Admin</a>
      </div>
    </div>
    <a href="contact.php">Contact us</a>
    
  </nav>
  <main>
    <section>
      <h2>Welcome to the Pre-Placement Test (PPT) Platform</h2>
      <p>
        The Pre-Placement Test (PPT) platform provides an opportunity for students and faculty members to assess their skills and knowledge before entering the job market. Through the PPT, you can gauge your readiness for interviews and enhance your chances of securing a promising career. Our platform offers a comprehensive range of tests and resources to help you excel in your job search.
      </p>
    </section>

    <section>
      <h2>Why Choose PPT?</h2>
      <ul>
        <li>Assess your skills and knowledge in various domains.</li>
        <li>Identify your strengths and areas for improvement.</li>
        <li>Access a wide range of practice tests and study materials.</li>
        <li>Gain confidence and increase your chances of success in interviews.</li>
        <li>Get valuable feedback and personalized recommendations.</li>
      </ul>
    </section>

    <section>
      <h2>How It Works</h2>
      <ol>
        <li>Create an account and log in using the appropriate credentials.</li>
        <li>Choose the test category you want to assess.</li>
        <li>Complete the test within the allocated time.</li>
        <li>Receive detailed results and performance analysis.</li>
        <li>Explore personalized recommendations for improvement.</li>
        <li>Repeat the process to track your progress over time.</li>
      </ol>
    </section>

    <section>
      <h2>Contact Us</h2>
      <p>
        If you have any questions, feedback, or concerns, please don't hesitate to reach out to our support team. We are here to assist you and provide the best possible experience with the PPT platform.
      </p>
      <p>Email: support@pptplatform.com</p>
    </section>

    <section>
      <h2>About Us</h2>
      <p>
        Our mission is to empower students and professionals in their job search by offering a comprehensive pre-placement testing platform. We aim to bridge the gap between education and industry requirements, helping individuals showcase their skills and excel in their careers.
      </p>
      <p>
        At PPT, we believe that thorough preparation and continuous improvement are the keys to success. We strive to provide a user-friendly and reliable platform that enables users to assess their abilities, gain valuable insights, and enhance their employability.
      </p>
    </section>
  </main>
</body>
</html>
