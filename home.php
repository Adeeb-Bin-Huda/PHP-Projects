
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGC Trust University Programming Club</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #007bff;
    padding: 10px 0;
}

.navbar {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;
}

.navbar li {
    margin: 0 15px;
}

.navbar a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.navbar a:hover {
    text-decoration: underline;
}

.hero {
    background: url('hero-background.jpg') no-repeat center center/cover;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
}

.hero-content h1 {
    font-size: 3em;
    margin-bottom: 10px;
}

.hero-content p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.btn {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1em;
}

.btn:hover {
    background-color: #218838;
}

.about {
    padding: 40px 20px;
    text-align: center;
}

.about h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.about p {
    font-size: 1.2em;
    max-width: 800px;
    margin: 0 auto;
}

footer {
    background-color: #f8f9fa;
    padding: 20px 0;
    text-align: center;
}

footer p {
    margin: 0;
    color: #6c757d;
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
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">

        <div class="hero-content">
            <h1>Welcome to BGC Trust University Programming Club</h1>
            <p>Join us to enhance your programming skills and participate in exciting contests!</p>
            <a href="register.php" class="btn">Join Now</a>
        </div>
    </section>

    <section class="about">
        <h2>About Us</h2>
        <p>The BGC Trust University Programming Club is a vibrant community of passionate programmers. We conduct regular workshops, coding contests, and hackathons to foster learning and growth.</p>
    </section>

    <footer>
        <p>&copy; 2024 BGC Trust University Programming Club. All rights reserved.</p>
    </footer>
</body>
</html>
