
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: whitesmoke;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        button {
            display: block;
            width: 90%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
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

    <h1>Join Section</h1>
    <form action="sql.php" method="POST">
        <div class="container">
            <fieldset>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="id">Student ID:</label>
                <input type="text" id="id" name="id" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </div>
    </form>
</body>
</html>
