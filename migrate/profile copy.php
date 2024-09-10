<?php
// Include your database connection
include '../db_connection.php'; 

session_start();
 

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Get the logged-in user's ID from session

    // Prepare a SQL query to select all user data based on the user ID
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $user_id); // Bind the user ID to the query
    $stmt->execute();
    
    // Fetch the result
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Fetch user data as an associative array
        $user_data = $result->fetch_assoc();
        
        // Display user data (Example)
      
        // Add more fields as needed
        
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'User Not Found!',
                text: 'No user found with the provided ID.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    }
    
    $stmt->close();
} else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Access Denied!',
            text: 'You need to be logged in to view this information.',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6'
        });
    </script>";
}

 
?>

 
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ryanimmigrationservices.ca/migrate/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 09:14:08 GMT -->
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
    <!--link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"-->
    <script src="../../cdn.jsdelivr.net/gh/alpinejs/alpine%40v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link rel="stylesheet" type="text/css" rel="noopener" target="_blank" href="static/css/style.html">
    <script src="../static/js/index.html"></script>
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="../../cdn.jsdelivr.net/npm/chart.js"></script>
    <title>portfolio
</title>

    

</head>
<body >

<div  class="max-w-full mx-auto">
      
        
        
 

      <!-- component -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
       <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
         <div class="flex-shrink-0 px-12 py-4 flex flex-row items-center justify-between">
          <img class=" w-24 h-30" src="/static/img/user.png">
           <a href="#" class="text-xl font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white
            focus:outline-none focus:shadow-outline">Garett_Green16</a>
           <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
             <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
               <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
               <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
             </svg>
           </button>
         </div>
         <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 my-3 capitalize pb-4 md:pb-0 md:overflow-y-auto">
               <a href="/migrate/profile" class=" flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
               </a>
            <a href="/migrate/portfolio" class=" flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">client visa assessment</span>
               </a>
                    <a href="/migrate/documents" class="flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">Documents upload</span>
               </a>
               <a href="/migrate/case" class=" flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide capitalize truncate">case tracking</span>
                <!-- <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-blue-50 rounded-full">New</span>--> 
               </a>
     
               <a href="https://www.picktime.com/ryanimmigrationservices" class="flex flex-row items-center  my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <img class="w-5 h-5" src="/static/img/booking.png">
                 </span>
                 <span class="ml-2 text-sm tracking-wide capitalize truncate">book appointment</span>
               </a>
           <div @click.away="open = false" class="" x-data="{ open: false }">
             <button @click="open = !open" class="flex flex-row items-center capitalize w-full px-4 py-2 mt-2 text-sm font-medium text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
               <span>settings</span>
               <hr>
             </button>
             <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
     
               
             </div>
               <a href="/migrate/profile" class="flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                   </svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
               </a>
               <a href="/logout/" class="flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
               </a>
           </div>
      
         </nav>
       </div>
     
 
 
 
 

 
     
  <section class="dark:bg-gray-800 dark:text-gray-100">
	<div class="container max-w-5xl px-4 py-12 mx-auto">
		<div class="grid gap-4 mx-4 sm:grid-cols-12">
			<div class="col-span-12 sm:col-span-3">
				<div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-violet-400">
					<h3 class="text-3xl font-semibold uppercase">Case tracking</h3>
					<span class="text-sm font-bold tracki uppercase dark:text-gray-400"></span>
				</div>
			</div>

			
			<h3 class="text-base italic font-semibold">no case available yet</h3>
			
			

		</div>
	</div>
</section>
             
            
         
         </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script>
                   new WOW().init();
                   </script>
     
             
     
     </body>
     </html>
     