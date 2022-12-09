<!DOCTYPE html>

<head>

    <title>signup</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>



    <section class="header">

        <a href="home.php" class="logo">online tours and travels</a>

        <nav class="navbar">
            <a href="home.php">home</a>

            <a href="package.php">package</a>

        </nav>


    </section>


    <section class="booking">

        <h1 class="heading-title">Details</h1>

        <form action="signup2.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                <div class="inputBox">
                    <span>username :</span>
                    <input type="text" placeholder="enter your username" name="username" required>
                </div>
                <div class="inputBox">
                    <span>password :</span>
                    <input type="text" placeholder="enter your password" name="password" required>
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> -> +123-456-7890 </a>
                <a href="#"> -> +111-222-3333 </a>
                <a href="#"> -> example@gmail.com </a>
                <a href="#"> -> Dharwad,India 580011 </a>
            </div>

        </div>

        <div class="credit"> created by <span>Team Alpha</span> </div>
    </section>

</body>

</html>