<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="cv.css">
</head>
<body>
  <header>
    <h1>My Portfolio</h1>
    <nav>
      <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="resume.php">Resume</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="about">
      <h2>About</h2>
      <?php
        // Retrieve data from the database
        $conn = new mysqli("localhost", "root", "", "portfolio");
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT content FROM about_me";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["content"] . "</p>";
          }
        } else {
          echo "No data available.";
        }

        $conn->close();
      ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 My Portfolio. All rights reserved.</p>
  </footer>
</body>
</html>
