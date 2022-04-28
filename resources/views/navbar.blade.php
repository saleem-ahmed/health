<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
    <div class="header">
        <nav class="navbar">
            <a href="#" class="nav-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Help</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <div class="box">
                        <form name="search">
                            <input type="text" class="input" name="txt"
                                onmouseout="document.search.txt.value = ''">
                        </form>
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li class="nav-item">
                    {{-- <a href="#" class="nav-link">Contact</a> --}}
                    <button onclick="openForm()">
                        Registration
                    </button>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>

    <div class="form-popup" id="myForm">
        <form action="" class="form-container">
            <h1>Registration form</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            
            <label for="psw"><b>Problem</b></label>
            <input type="password" placeholder="Enter your problem" name="psw" required>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="btn">Register</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }
        const navLink = document.querySelectorAll(".nav-link");

        navLink.forEach(n => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }

        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>

</html>
