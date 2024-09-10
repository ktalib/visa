<?php
// Include your database connection
include '../db_connection.php'; // Adjust this as per your structure

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ryanimmigrationservices.ca/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 09:14:11 GMT -->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css">
    <script src="../static/js/index.html"></script>
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 
    <script src="../../cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>
    
    <title>ryanimmigrationservices | 
 register
</title>

    

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
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="../login/index.html">Client portal</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-cyan-700 hover:bg-cyan-900 text-sm text-white font-bold rounded-xl transition duration-200" href="index.html">Register</a>
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
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="index.html">Free Assessment</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-cyan-700 hover:bg-cyan-900  rounded-xl" href="../login/index.html">Client Portal</a>
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





<script src="../../cdn.jsdelivr.net/gh/alpinejs/alpine%40v2.x.x/dist/alpine.js" defer></script>
<script src="../../cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

<style>@import url('../../cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
</style>

<div class="min-w-screen min-h-screen bg-white flex items-center justify-center px-5 py-5">
    <div class="bg-white text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="hidden md:block w-1/2 py-10 px-10">
                <img src="../static/img/signup.jpg">
            </div>
            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900 uppercase">enter info to get started</h1>
                </div>
                <div>
                <?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // Check if fields are empty
    if (empty($username) || empty($email) || empty($password)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'All fields are required!',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    } else {
        // Check if user exists
        $sql_check = "SELECT * FROM users WHERE email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param('s', $email);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email already exists!',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            </script>";
        } else {
            // Insert new user
    
            $sql_insert = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param('sss', $username, $email, $password);

            if ($stmt_insert->execute()) {
                // Set session variables and redirect
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;

                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Signed Up!',
                        text: 'You have successfully signed up!',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#3085d6'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '../migrate/portfolio.php'; 
                            // Redirect to dashboard
                        }
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error in signing up!',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#3085d6'
                    });
                </script>";
            }
        }
    }
}
?>

                <form  method="POST" action="">
                 
                    <div class="flex -mx-3">
                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Username</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input type="text" name="username" maxlength="150" autocapitalize="none" autocomplete="username" autofocus placeholder="John" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" required aria-describedby="id_username_helptext" id="id_username">
                            </div>
                        </div>
                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                
                                <input type="email" name="email" maxlength="254" placeholder="john@example.com" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" id="id_email">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                            <input type="password" name="password" autocomplete="new-password" placeholder="••••••••••" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" required aria-describedby="id_password1_helptext"  >

                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Confirm Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input type="password" name="password2" autocomplete="new-password" placeholder="••••••••••" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" required aria-describedby="id_password2_helptext" id="id_password2">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-gray-800 hover:bg-gray-600 focus:bg-gray-700 text-sm capitalize text-white rounded-lg px-3 py-3 font-semibold">REGISTER NOW</button>
                        </div>
                </form>

                    </div>
                </div>
            </div>
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

<!-- Mirrored from ryanimmigrationservices.ca/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 09:14:16 GMT -->
</html>
