<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaQuest</title>
    <link rel="stylesheet" href="homepgstyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function showLoginAlert() {
            alert("Please log in or sign up to explore more.");
        }
    </script>
</head>
<body>
    <header>
        <div class="icon-container top-right">
            <a href="login_pg.php" title="Login">
                <i class="fas fa-user-circle"></i>
            </a>
            <p>Login / Signup</p>
        </div>
        <video autoplay muted loop id="bg-video">
            <source src="135000-760679976_small.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="overlay top-left">
            <h1>PharmaQuest</h1>
            <h2>Navigating the Future of Pharmacy Management</h2>
            <div class="app-icons">
                <i class="fab fa-apple"></i>
                <i class="fab fa-android"></i>
                <i class="fab fa-windows"></i>
            </div>
        </div>
    </header>
    <main>
        <section class="features">
            <div class="feature-item">
                <i class="fas fa-pills"></i>
                <span>Manage Drug Inventory</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-prescription"></i>
                <span>Prescription Management</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-chart-line"></i>
                <span>Sales Tracking</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-users"></i>
                <span>Customer Management</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-file-invoice"></i>
                <span>Billing & Invoicing</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-truck"></i>
                <span>Supply Chain Management</span>
            </div>
        </section>
        <section class="notify">
            <div class="icon-container">
                <a href="javascript:void(0);" title="Login" onclick="showLoginAlert()">
                    <i class="fas fa-user-circle"></i>
                </a>
                <span>Login or Signup to explore more</span>
            </div>
            <h3>Get Notified for Updates</h3>
            <p>Enter your email address to receive the latest updates and news about PharmaQuest.</p>
            <form action="#" method="post">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Notify Me</button>
            </form>
        </section>
        <section class="contact">
            <h3>Say Hi & Get in Touch</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-links">
            <a href="#">Contact</a>
            <a href="#">Download</a>
            <a href="#">Phone</a>
            <a href="#">Email</a>
            <a href="#">Support</a>
            <a href="#">Privacy Policy</a>
        </div>
        <br>
        <p>&copy; 2024 PharmaQuest. All rights reserved.</p>
    </footer>
</body>
</html>
