<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmers Club</title> 
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .navbar {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar li {
            display: inline-block;
            margin-right: 1rem;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }


        /* Blog Section Styles */
#blog {
    padding: 20px;
    background-color: #f8f9fa; /* Light gray background */
}

.blog-post {
    margin-bottom: 20px;
    border: 1px solid #ddd; /* Add a border around each blog post */
    padding: 20px;
    background-color: #fff; /* White background for blog posts */
}

.blog-post h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.blog-post p {
    font-size: 16px;
    line-height: 1.5;
}

.blog-post ul {
    list-style: none;
    padding: 0;
}

.blog-post li {
    margin-bottom: 10px;
}

.blog-post a {
    color: #007bff; /* Blue link color */
    text-decoration: none;
}

/* Responsive adjustments */
@media screen and (max-width: 768px) {
    .blog-post {
        padding: 10px;
    }
}

    </style>
</head>
<body>
    <!--  navigation bar here (similar to your existing code) -->
    <header>
     <nav>
        <ul class="navbar">
            <li><a href="index.php">HOME</a></li>
            <li><a href="register.php">Join Section</a></li>
             <li><a href="blog.php">Blog</a></li>
             <li><a href="contest.php">Contests</a></li>
            <li><a href="about.php">About</a></li>
           <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav> 
</header>
    <!-- Blog Section -->
    <section id="blog">
        <h1>Blog Section</h1>

        <div class="blog-post">
            <h2>Club Blog</h2>
            <p>Read our club's latest blog posts:</p>
            <ul>
                <div>
                <li><a href="https://codeforces.com/blog/Rahat_Khan_Pathan">Blog Post 1</a></li>
                </div>
                <div>
                <li><a href="https://codeforces.com/blog/entry/129585">Blog Post 2</a></li>
                 </div>
                <!-- Add more blog post links as needed -->
            </ul>
        </div>
    </section>

    <!-- Other sections (about, contact, etc.) can follow -->

    <!-- Footer section (similar to your existing code) -->
    <footer>
    <p>&copy; 2024 Programmers Club. All rights reserved.</p>
    <p>Contact us: <a href="mailto:info@programmersclub.com">info@programmersclub.com</a></p>
</footer>

</body>
</html>
