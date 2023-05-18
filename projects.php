<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects</title>
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
    <section id="projects">
      <h2>Projects</h2>
      <?php
        // Retrieve data from the database
        $conn = new mysqli("localhost", "root", "", "portfolio");
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT title, description, live_demo, github_repo FROM projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<h3>" . $row["title"] . "</h3>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p><a href='" . $row["live_demo"] . "'>Live Demo</a></p>";
            echo "<p><a href='" . $row["github_repo"] . "'>GitHub Repository</a></p>";
          }
        } else {
          echo "No projects available.";
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
