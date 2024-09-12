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
     link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"-->
    <script src="../../cdn.jsdelivr.net/gh/alpinejs/alpine%40v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link rel="stylesheet" type="text/css" rel="noopener" target="_blank" href="static/css/style.html">
    <script src="../static/js/index.html"></script>
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="../../cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css">
    <title> 
        Documents
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
     
 
 
 
 

       <?php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = trim($_POST['username']);
    

    // Handle file upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file'];
        $fileName = basename($file['name']);
        $fileTmpPath = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        // Define allowed file extensions and maximum file size (e.g., 5MB)
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
        $maxFileSize = 5 * 1024 * 1024; // 5MB

        if (in_array($fileExtension, $allowedExtensions) && $fileSize <= $maxFileSize) {
            // Define the upload directory
            $uploadDir = 'uploads/';
            $uploadFilePath = $uploadDir . $fileName;

            // Create the upload directory if it doesn't exist
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $caption = trim($_POST['caption']);
            // Move the uploaded file to the server
            if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
                // Prepare the SQL query to insert file details into the database
                $sql = "INSERT INTO documents (user_id,username, file, caption) VALUES (?, ?,?, ?)";
                $stmt = $conn->prepare($sql);
                $filePath = $uploadFilePath; // Path to the uploaded file
                $stmt->bind_param('ssss', $user_id, $username,  $filePath,$caption);

                if ($stmt->execute()) {
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Upload Successful!',
                            text: 'Your document has been uploaded.',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#3085d6'
                        });
                    </script>";
                } else {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Upload Failed!',
                            text: 'There was an error saving document details to the database.',
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
                        title: 'Upload Failed!',
                        text: 'There was an error uploading your file.',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#3085d6'
                    });
                </script>";
            }
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid File!',
                    text: 'Please upload a valid file (JPG, JPEG, PNG, PDF) and ensure it is under 5MB.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'No File Uploaded!',
                text: 'Please select a file to upload.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    }

    $conn->close();
}
?>

     
     
     <div class="bg-gray-100 px-12 mt-6">
      
     <form method="post" action="" enctype="multipart/form-data">
 

 
<div class="mt-12 grid place-items-center">
  <div class="w-full px-12 max-w-md mx-auto">
     
     <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

      <div>
        <label for="username" class="block ml-4 mb-3 text-slate-900 text-sm font-medium leading-6 capitalize">username</label>
        <input type="text" name="username" maxlength="220" class="mb-6 px-4 py-2 w-full bg-slate-100 rounded-full focus:outline-violet-500 text-sm leading-6 text-slate-900 border border-gray-300" required="" value="<?php echo $_SESSION['username']; ?>" readonly>

               
      </div>
      <div>
        <label for="document" class="block ml-4 text-slate-900 text-sm font-medium leading-6 capitalize">document type</label>
          <input type="text" name="caption"  class="mt-3 px-4 py-2 w-full bg-slate-100 rounded-full focus:outline-violet-500 text-sm leading-6 text-slate-900 border border-gray-300" required="" id="id_caption">     
      </div>
      <div class="flex items-center">
        <img src="https://ryanimmigrationservices.ca/static/img/doc.png" alt="Avatar" class="w-12 h-12 mt-2 ">
             <input type="file" name="file"   class="ml-4 p-1 w-full mt-6 text-slate-500 text-sm rounded-full leading-6 file:bg-violet-200 file:text-violet-700 file:font-semibold file:border-none file:px-4 file:py-1 file:mr-6 file:rounded-full hover:file:bg-violet-100 border border-gray-300" required="" id="id_image">

      </div>
      <div>
        <input type="submit"   class="mt-1 px-4 py-2 w-full rounded-full focus:outline-cyan-500 text-sm leading-6 bg-cyan-600 text-white cursor-pointer capitalize">
      </div>
    
  </div>
</div>
</form>
     
     </div>
     
             
            
         
         </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script>
                   new WOW().init();
                   </script>
     
             
     
     </body>
     </html>
     