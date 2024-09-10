<?php
// Include your database connection
include '../db_connection.php'; 

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ryanimmigrationservices.ca/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 09:14:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/img/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha512-Cf6hwVH1QphJW86KYNkv1BdTHRsyVFTmrEKLGgR79daJUdDomgP43WWHqDNOmvNXFL39K3P66ss0mIwGIlxSeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="description" content="We are Experts in Canadian Immigration. Immigrate from where you are to Canada. Visa | Study permits | Permanent Residence | Express Entry" />
	<link rel="canonical" href="../index.html" />
    <meta property="og:title" content="Clearwater Consulting Immigration | Canada Immigration Consultants | Visa, Study Permit.." />
	<meta property="og:description" content="We are Experts in Canadian Immigration. Immigrate from where you are to Canada. Visa | Study permits | Permanent Residence | Express Entry" />
	<meta property="og:url" content="../index.html" />
    <!--<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
  link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"-->
    <script src="../../cdn.jsdelivr.net/gh/alpinejs/alpine%40v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link rel="stylesheet" type="text/css" rel="noopener" target="_blank" href="static/css/style.html">
    <script src="../static/js/index.html"></script>
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css">
    <script src="../../cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>
    <title>ryanimmigrationservices | login</title>

    

</head>
<body >
  
    <div  class="max-w-full mx-auto">
      
        
        



<!-- component -->
	<nav class="relative font-medium px-4 py-4 flex justify-between uppercase items-center bg-white">
		<a class="text-3xl leading-none" href="../index.html">
            <img class="w-24 h-24" src="../static/img/logo.png">
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-gray-900 p-4">
				<svg class="block h-8 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/3 transform -translate-y-1/2 -translate-x-1/3 lg:flex lg:mx-6 lg:inline-flex lg:items-center lg:w-auto lg:space-x-8">
			<li><a class="text-sm text-gray-900 hover:text-gray-900" href="../index.html">home</a></li>

			<li><a class="text-sm text-gray-900 " href="../migrate/about.html">About Us</a></li>

			<li><a class="text-sm text-gray-900 hover:text-gray-900" href="../migrate/permit.html">Our Values</a></li>

			<li><a class="text-sm text-gray-900 hover:text-gray-900" href="../migrate/team.html">Our Team</a></li>


            			<li><a class="text-sm text-gray-900 hover:text-gray-900" href="../migrate/visa.html">our services</a></li>
			

            			<li><a class="text-sm text-gray-900 hover:text-gray-900" href="https://www.picktime.com/clearwaterconsultant">Book appointment</a></li>
		
			<li><a class="text-sm text-gray-900 hover:text-gray-900" href="../migrate/contact.html">Contact us</a></li>
		</ul>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="index.html">Client portal</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-cyan-700 hover:bg-cyan-900 text-sm text-white font-bold rounded-xl transition duration-200" href="../signup/index.html">Register</a>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="../index.html">
                    <img class="w-24 h-24" src="../static/img/logo.png">
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-900 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="../index.html">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="../migrate/about.html">About Us</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="../migrate/visa.html">Our Services</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="../migrate/team.html">Our Team</a>
					</li>

                    <li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="../migrate/permit.html">Our Values</a>
					</li>

                    <li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="https://www.picktime.com/clearwaterconsultant">Book Appointment</a>
					</li>

					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="../migrate/contact.html">Contact us</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="../signup/index.html">Free Assessment</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-cyan-700 hover:bg-cyan-900  rounded-xl" href="index.html">Client Portal</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-900">
					<span>Copyright © 2020 - 2023</span>
				</p>
			</div>
		</nav>
	</div>

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>





<div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
    <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image: url('../static/img/ca.html');"></div>

    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
        <div class="flex justify-center mx-auto">
            <img class="w-auto h-20 sm:h-12" src="../static/img/logo.png" alt="logo">
        </div>


        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
        </div>

        <?php
 
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare the SQL query to check if the email exists
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    
    // Fetch the result
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        
        // Verify the password
        if ($password === $user_data['password']) {
            
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user_data['id'];
            $_SESSION['username'] = $user_data['username'];

            // Success alert and redirect to the dashboard
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Login Successful!',
                    text: 'You will be redirected to the dashboard.',
                    timer: 2000,
                    showConfirmButton: false
                }).then(function() {
                    window.location = '../migrate/portfolio.php'; 
                });
            </script>";
        } else {
            // Invalid password
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed!',
                    text: 'Incorrect password. Please try again.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            </script>";
        }
    } else {
        // Email does not exist
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed!',
                text: 'No account found with that username.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    }
    
    $stmt->close();
}

$conn->close();
?>


        <form method="post" action="">
        
        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="LoggingEmailAddress">Username</label>

             <input type="text" name="username" autofocus autocapitalize="none" autocomplete="username" maxlength="150" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 capitalize" id="username" name="username" required>
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="loggingPassword">Password</label>
                <a href="../reset-password/index.html" class="text-xs text-gray-500 dark:text-gray-300 hover:underline">Forgot Password?</a>
            </div>
             <input type="password" name="password" autocomplete="current-password" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 capitalize" placeholder="••••••••" id="password" name="password" required>

         </div>
    
        <div class="mt-6">
            <button type="submit" class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors
             duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Sign In
            </button>
        </div>

        </form>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

            <a href="../signup/index.php" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">or create an account</a>

            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
        </div>
    </div>
</div>



        
       
    
    </div>
        <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../../cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
              <script>
              new WOW().init();
              </script>

        

</body>

<!-- Mirrored from ryanimmigrationservices.ca/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 09:14:11 GMT -->
</html>
