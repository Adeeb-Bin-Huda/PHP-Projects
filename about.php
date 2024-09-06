<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }
        .container {
            padding: 0 16px;
        }
        .title {
            color: grey;
        }
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

     <header>
    <nav>
        <ul class="navbar">
            <li><a href="home.php">HOME</a></li>
            <li><a href="register.php">Join Section</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contest.php">Contests</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p></p>
        <p>Resize the browser window to see that this page is responsive.</p>
    </div>
    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <!-- Add your team member's image here -->
                <div class="container">
                    <h2>PROJECT BY</h2>
                    <p class="title">Internet Concept and Database Project</p>
                    <p>Adeeb  ||   Fahim  || Junayed</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
        <!-- Repeat similar card structure for other team members -->
    </div>
</body>
</html>
