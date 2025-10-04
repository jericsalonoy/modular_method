<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSS Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      color: #333;
    }

    /* Style the header */
    header {
      background-color: #4CAF50; /* Green */
      padding: 30px;
      text-align: center;
      font-size: 36px;
      color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Create two columns/boxes that float next to each other */
    nav {
      float: left;
      width: 30%;
      background: #2C3E50; /* Dark Blue */
      padding: 20px;
      color: white;
      border-right: 4px solid #ecf0f1;
    }

    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }

    nav ul li {
      margin: 15px 0;
    }

    nav ul li a {
      text-decoration: none;
      color: #ecf0f1;
      font-size: 18px;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #f39c12; /* Yellow */
    }

    article {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the footer */
    footer {
      background-color: #34495E; /* Darker Blue */
      padding: 20px;
      text-align: center;
      color: white;
      font-size: 18px;
    }

    /* Hover effect for footer */
    footer:hover {
      background-color: #2980b9; /* Lighter Blue */
    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other on smaller screens */
    @media (max-width: 600px) {
      nav, article {
        width: 100%;
        height: auto;
      }
    }

    /* Add a small transition effect for the section */
    section {
      transition: background-color 0.3s ease;
    }

    section:hover {
      background-color: #ecf0f1;
    }
  </style>
</head>
<body>

  <header>
    <h2>Cities</h2>
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="home_page.php?page=london">London</a></li>
        <li><a href="home_page.php?page=paris">Paris</a></li>
        <li><a href="home_page.php?page=tokyo">Tokyo</a></li>
      </ul>
    </nav>
  
    <article>
      <!-- content area -->
      <?php
      if (isset($_GET['page'])){
          $page = $_GET['page'];
          switch ($page){
              case 'london':
              include 'modules/london.php';
              break;
              case 'paris':
              include 'modules/paris.php';
              break;
              case 'tokyo':
              include 'modules/tokyo.php';
              break;
          }
      }
      ?>
    </article>
  </section>

  <footer>
    <p>Footer &copy; 2025</p>
  </footer>

</body>
</html>
