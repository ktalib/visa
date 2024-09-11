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

        // Safely check and display user data with null checks
        $first_name = isset($user_data['first_name']) ? $user_data['first_name'] : 'N/A';
        $last_name = isset($user_data['last_name']) ? $user_data['last_name'] : 'N/A';
        $title = isset($user_data['title']) ? $user_data['title'] : 'N/A';
        $gender = isset($user_data['gender']) ? $user_data['gender'] : 'N/A';
        $age = isset($user_data['age']) ? $user_data['age'] : 'N/A';
        $status = isset($user_data['status']) ? $user_data['status'] : 'N/A';
        $country = isset($user_data['country']) ? $user_data['country'] : 'N/A';
        $citizenship = isset($user_data['citizenship']) ? $user_data['citizenship'] : 'N/A';
        $state = isset($user_data['state']) ? $user_data['state'] : 'N/A';
        $zipcode = isset($user_data['zipcode']) ? $user_data['zipcode'] : 'N/A';
        $destination = isset($user_data['destination']) ? $user_data['destination'] : 'N/A';
        $children = isset($user_data['children']) ? $user_data['children'] : 'N/A';
        $language = isset($user_data['language']) ? $user_data['language'] : 'N/A';
        $education_training = isset($user_data['education_training']) ? $user_data['education_training'] : 'N/A';
        $work_history = isset($user_data['work_history']) ? $user_data['work_history'] : 'N/A';
        $entry_profile = isset($user_data['entry_profile']) ? $user_data['entry_profile'] : 'N/A';
        $job_offer = isset($user_data['job_offer']) ? $user_data['job_offer'] : 'N/A';
        $family_or_friends_in_canada = isset($user_data['family_or_friends_in_canada']) ? $user_data['family_or_friends_in_canada'] : 'N/A';
        $graduate = isset($user_data['graduate']) ? $user_data['graduate'] : 'N/A';
        $addition = isset($user_data['addition']) ? $user_data['addition'] : 'N/A';

        
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

$conn->close();
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css">
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
               <a href="/migrate/profile.php" class=" flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
               </a>
            <a href="/migrate/portfolio.php" class=" flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">client visa assessment</span>
               </a>
                    <a href="/migrate/documents.php" class="flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
                 <span class="inline-flex justify-center items-center ml-4">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                 </span>
                 <span class="ml-2 text-sm tracking-wide truncate">Documents upload</span>
               </a>
               <a href="/migrate/case.php" class=" flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
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
               <a href="/migrate/profile.php" class="flex flex-row items-center my-3 h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6">
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
 
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $title = trim($_POST['title']);
    $gender = trim($_POST['gender']);
    $age = trim($_POST['age']);
    $status = trim($_POST['status']);
    $country = trim($_POST['country']);
    $citizenship = trim($_POST['citizenship']);
    $state = trim($_POST['state']);
    $zipcode = trim($_POST['zipcode']);
    $destination = trim($_POST['destination']);
    $children = trim($_POST['children']);
    $language = trim($_POST['language']);
    $education_training = trim($_POST['education_training']);
    $work_history = trim($_POST['work_history']);
    $entry_profile = trim($_POST['entry_profile']);
    $job_offer = trim($_POST['job_offer']);
    $family_or_friends_in_canada = trim($_POST['family_or_friends_in_canada']);
    $graduate = trim($_POST['graduate']);
    $addition = trim($_POST['addition']);

    // Prepare an update SQL query
    $sql = "UPDATE users SET 
                first_name = ?, 
                last_name = ?, 
                title = ?, 
                gender = ?, 
                age = ?, 
                status = ?, 
                country = ?, 
                citizenship = ?, 
                state = ?, 
                zipcode = ?, 
                destination = ?, 
                children = ?, 
                language = ?, 
                education_training = ?, 
                work_history = ?, 
                entry_profile = ?, 
                job_offer = ?, 
                family_or_friends_in_canada = ?, 
                graduate = ?, 
                addition = ?
            WHERE id = '$user_id'"; 
            
            // Or use `id = ?` for updating by user ID
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssisssssssssssssss', 
        $first_name, $last_name, $title, $gender, $age, $status, 
        $country, $citizenship, $state, $zipcode, $destination, $children, 
        $language, $education_training, $work_history, $entry_profile, 
        $job_offer, $family_or_friends_in_canada, $graduate, $addition);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Profile Updated!',
                text: 'Your portfolio has been successfully updated.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Update Failed!',
                text: 'There was an error updating your portfolio.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>  

 
     
     
     <div class="bg-gray-100 px-12 mt-6">
         <h2 class="capitalize font-bold text-lg mx-6 my-3 pt-5"> Personal information - assessment form</h2>
         <p class=" mx-6 font-medium text-sm mb-6 "> Please spend a few minutes completing the assessment form of your choice.
          Once you complete the form, Clearwater Canadian Immigration Consulting will contact you to provide further assistance.</p>
     <form  method="POST" action="" enctype="multipart/form-data">  
   
     <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
       <div class="-mx-3 md:flex mb-6">
         <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block capitalize tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
             First Name
           </label>
           
          <input type="text" name="first_name" value="<?php echo $first_name; ?>" maxlength="100" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_first_name">
           <p class="text-red text-xs italic">Please fill out this field.</p>
         </div>
         <div class="md:w-1/2 px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
             Last Name
           </label>
           
           <input type="text" name="last_name"  value="<?php echo $last_name; ?>" maxlength="100" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_last_name">
     
         </div>
     
             <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block capitalize tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
             title
           </label>
           
           <select name="title" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_title">
       <option value="">---------</option>
      
       <option value="<?php echo $title; ?>"selected>
        <?php echo $title; ?></option> 
       <option value="MR" selected>MR</option>
     
       <option value="MRS">MRS</option>
     
       <option value="MASTER">MASTER</option>
     
       <option value="MISS">MISS</option>
     
       <option value="DR">DR</option>
     
       <option value="BARRISTER">BARRISTER</option>
     
       <option value="ENGR">ENGR</option>
     
       <option value="PROF">PROF</option>
     
     </select>
           <p class="text-red text-xs italic">Please fill out this field.</p>
         </div>
         <div class="md:w-1/2 px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
             gender
           </label>
           
           <select name="gender" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_gender">
       <option value="">---------</option>
     
       <option value="<?php echo $gender; ?>"  selected><?php echo $gender; ?></option>
        <option value="1" selected>Male</option>
     
       <option value="2">Female</option>
     
     </select>
     
         </div>
       </div>
     
     
       <div class="-mx-3 md:flex mb-6">
         <div class="md:w-full px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
             Age
           </label>
                <input type="number" name="age" value="<?php echo $age; ?>" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_age">
     
         </div>
         <div class="md:w-full px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
             Marital status
           </label>
                <select name="status" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_status">
       <option value="<?php echo $status; ?>"
       > <?php echo $status; ?>
       </option>     
         <option value="">---------</option>
     
       <option value="MARRIED">MARRIED</option>
     
       <option value="SINGLE">SINGLE</option>
     
       <option value="COUPLE" selected>COUPLE</option>
     
       <option value="HAVE NO IDEA">HAVE NO IDEA</option>
     
     </select>
     
         </div>
       </div>
             <div class="md:w-full px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-sm font-bold mb-2" for="grid-password">
             
           </label>
                
     
         </div>
       <div class="-mx-3 md:flex mb-2">
         <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block capitalize tracking-wide text-grey-darker text-sm font-bold mb-2" for="grid-city">
             Country of residence
           </label>
           <select name="country" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_country">
       <option value="">(Select Country)</option>
     
       <option value="AF">Afghanistan</option>
     
       <option value="AX">Åland Islands</option>
     
       <option value="AL">Albania</option>
     
       <option value="DZ">Algeria</option>
     
       <option value="AS">American Samoa</option>
     
       <option value="AD">Andorra</option>
     
       <option value="AO">Angola</option>
     
       <option value="AI">Anguilla</option>
     
       <option value="AQ">Antarctica</option>
     
       <option value="AG">Antigua and Barbuda</option>
     
       <option value="AR">Argentina</option>
     
       <option value="AM">Armenia</option>
     
       <option value="AW">Aruba</option>
     
       <option value="AU">Australia</option>
     
       <option value="AT">Austria</option>
     
       <option value="AZ">Azerbaijan</option>
     
       <option value="BS">Bahamas</option>
     
       <option value="BH">Bahrain</option>
     
       <option value="BD">Bangladesh</option>
     
       <option value="BB">Barbados</option>
     
       <option value="BY">Belarus</option>
     
       <option value="BE">Belgium</option>
     
       <option value="BZ">Belize</option>
     
       <option value="BJ">Benin</option>
     
       <option value="BM">Bermuda</option>
     
       <option value="BT">Bhutan</option>
     
       <option value="BO">Bolivia</option>
     
       <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
     
       <option value="BA">Bosnia and Herzegovina</option>
     
       <option value="BW">Botswana</option>
     
       <option value="BV">Bouvet Island</option>
     
       <option value="BR">Brazil</option>
     
       <option value="IO">British Indian Ocean Territory</option>
     
       <option value="BN">Brunei</option>
     
       <option value="BG">Bulgaria</option>
     
       <option value="BF">Burkina Faso</option>
     
       <option value="BI">Burundi</option>
     
       <option value="CV">Cabo Verde</option>
     
       <option value="KH">Cambodia</option>
     
       <option value="CM">Cameroon</option>
     
       <option value="CA">Canada</option>
     
       <option value="KY">Cayman Islands</option>
     
       <option value="CF">Central African Republic</option>
     
       <option value="TD">Chad</option>
     
       <option value="CL">Chile</option>
     
       <option value="CN">China</option>
     
       <option value="CX">Christmas Island</option>
     
       <option value="CC">Cocos (Keeling) Islands</option>
     
       <option value="CO">Colombia</option>
     
       <option value="KM">Comoros</option>
     
       <option value="CG">Congo</option>
     
       <option value="CD">Congo (the Democratic Republic of the)</option>
     
       <option value="CK">Cook Islands</option>
     
       <option value="CR">Costa Rica</option>
     
       <option value="CI">Côte d&#x27;Ivoire</option>
     
       <option value="HR">Croatia</option>
     
       <option value="CU">Cuba</option>
     
       <option value="CW">Curaçao</option>
     
       <option value="CY">Cyprus</option>
     
       <option value="CZ">Czechia</option>
     
       <option value="DK">Denmark</option>
     
       <option value="DJ">Djibouti</option>
     
       <option value="DM">Dominica</option>
     
       <option value="DO">Dominican Republic</option>
     
       <option value="EC">Ecuador</option>
     
       <option value="EG">Egypt</option>
     
       <option value="SV">El Salvador</option>
     
       <option value="GQ">Equatorial Guinea</option>
     
       <option value="ER">Eritrea</option>
     
       <option value="EE">Estonia</option>
     
       <option value="SZ">Eswatini</option>
     
       <option value="ET">Ethiopia</option>
     
       <option value="FK">Falkland Islands (Malvinas)</option>
     
       <option value="FO">Faroe Islands</option>
     
       <option value="FJ">Fiji</option>
     
       <option value="FI">Finland</option>
     
       <option value="FR">France</option>
     
       <option value="GF">French Guiana</option>
     
       <option value="PF">French Polynesia</option>
     
       <option value="TF">French Southern Territories</option>
     
       <option value="GA">Gabon</option>
     
       <option value="GM">Gambia</option>
     
       <option value="GE">Georgia</option>
     
       <option value="DE">Germany</option>
     
       <option value="GH">Ghana</option>
     
       <option value="GI">Gibraltar</option>
     
       <option value="GR">Greece</option>
     
       <option value="GL">Greenland</option>
     
       <option value="GD">Grenada</option>
     
       <option value="GP">Guadeloupe</option>
     
       <option value="GU">Guam</option>
     
       <option value="GT">Guatemala</option>
     
       <option value="GG">Guernsey</option>
     
       <option value="GN">Guinea</option>
     
       <option value="GW">Guinea-Bissau</option>
     
       <option value="GY">Guyana</option>
     
       <option value="HT">Haiti</option>
     
       <option value="HM">Heard Island and McDonald Islands</option>
     
       <option value="VA">Holy See</option>
     
       <option value="HN">Honduras</option>
     
       <option value="HK">Hong Kong</option>
     
       <option value="HU">Hungary</option>
     
       <option value="IS">Iceland</option>
     
       <option value="IN">India</option>
     
       <option value="ID">Indonesia</option>
     
       <option value="IR">Iran</option>
     
       <option value="IQ">Iraq</option>
     
       <option value="IE">Ireland</option>
     
       <option value="IM">Isle of Man</option>
     
       <option value="IL">Israel</option>
     
       <option value="IT">Italy</option>
     
       <option value="JM">Jamaica</option>
     
       <option value="JP">Japan</option>
     
       <option value="JE">Jersey</option>
     
       <option value="JO">Jordan</option>
     
       <option value="KZ">Kazakhstan</option>
     
       <option value="KE">Kenya</option>
     
       <option value="KI">Kiribati</option>
     
       <option value="KW">Kuwait</option>
     
       <option value="KG">Kyrgyzstan</option>
     
       <option value="LA">Laos</option>
     
       <option value="LV">Latvia</option>
     
       <option value="LB">Lebanon</option>
     
       <option value="LS">Lesotho</option>
     
       <option value="LR">Liberia</option>
     
       <option value="LY">Libya</option>
     
       <option value="LI">Liechtenstein</option>
     
       <option value="LT">Lithuania</option>
     
       <option value="LU">Luxembourg</option>
     
       <option value="MO">Macao</option>
     
       <option value="MG">Madagascar</option>
     
       <option value="MW">Malawi</option>
     
       <option value="MY">Malaysia</option>
     
       <option value="MV">Maldives</option>
     
       <option value="ML">Mali</option>
     
       <option value="MT">Malta</option>
     
       <option value="MH">Marshall Islands</option>
     
       <option value="MQ">Martinique</option>
     
       <option value="MR">Mauritania</option>
     
       <option value="MU">Mauritius</option>
     
       <option value="YT">Mayotte</option>
     
       <option value="MX">Mexico</option>
     
       <option value="FM">Micronesia</option>
     
       <option value="MD">Moldova</option>
     
       <option value="MC">Monaco</option>
     
       <option value="MN">Mongolia</option>
     
       <option value="ME">Montenegro</option>
     
       <option value="MS">Montserrat</option>
     
       <option value="MA">Morocco</option>
     
       <option value="MZ">Mozambique</option>
     
       <option value="MM">Myanmar</option>
     
       <option value="NA">Namibia</option>
     
       <option value="NR">Nauru</option>
     
       <option value="NP">Nepal</option>
     
       <option value="NL">Netherlands</option>
     
       <option value="NC">New Caledonia</option>
     
       <option value="NZ">New Zealand</option>
     
       <option value="NI">Nicaragua</option>
     
       <option value="NE">Niger</option>
     
       <option value="NG">Nigeria</option>
     
       <option value="NU">Niue</option>
     
       <option value="NF">Norfolk Island</option>
     
       <option value="KP">North Korea</option>
     
       <option value="MK">North Macedonia</option>
     
       <option value="MP">Northern Mariana Islands</option>
     
       <option value="NO">Norway</option>
     
       <option value="OM">Oman</option>
     
       <option value="PK">Pakistan</option>
     
       <option value="PW">Palau</option>
     
       <option value="PS">Palestine, State of</option>
     
       <option value="PA">Panama</option>
     
       <option value="PG">Papua New Guinea</option>
     
       <option value="PY">Paraguay</option>
     
       <option value="PE">Peru</option>
     
       <option value="PH">Philippines</option>
     
       <option value="PN">Pitcairn</option>
     
       <option value="PL">Poland</option>
     
       <option value="PT">Portugal</option>
     
       <option value="PR">Puerto Rico</option>
     
       <option value="QA">Qatar</option>
     
       <option value="RE">Réunion</option>
     
       <option value="RO">Romania</option>
     
       <option value="RU">Russia</option>
     
       <option value="RW">Rwanda</option>
     
       <option value="BL">Saint Barthélemy</option>
     
       <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
     
       <option value="KN">Saint Kitts and Nevis</option>
     
       <option value="LC">Saint Lucia</option>
     
       <option value="MF">Saint Martin (French part)</option>
     
       <option value="PM">Saint Pierre and Miquelon</option>
     
       <option value="VC">Saint Vincent and the Grenadines</option>
     
       <option value="WS">Samoa</option>
     
       <option value="SM">San Marino</option>
     
       <option value="ST">Sao Tome and Principe</option>
     
       <option value="SA">Saudi Arabia</option>
     
       <option value="SN">Senegal</option>
     
       <option value="RS">Serbia</option>
     
       <option value="SC">Seychelles</option>
     
       <option value="SL">Sierra Leone</option>
     
       <option value="SG">Singapore</option>
     
       <option value="SX">Sint Maarten (Dutch part)</option>
     
       <option value="SK">Slovakia</option>
     
       <option value="SI">Slovenia</option>
     
       <option value="SB">Solomon Islands</option>
     
       <option value="SO">Somalia</option>
     
       <option value="ZA">South Africa</option>
     
       <option value="GS">South Georgia and the South Sandwich Islands</option>
     
       <option value="KR">South Korea</option>
     
       <option value="SS">South Sudan</option>
     
       <option value="ES">Spain</option>
     
       <option value="LK">Sri Lanka</option>
     
       <option value="SD">Sudan</option>
     
       <option value="SR">Suriname</option>
     
       <option value="SJ">Svalbard and Jan Mayen</option>
     
       <option value="SE">Sweden</option>
     
       <option value="CH">Switzerland</option>
     
       <option value="SY">Syria</option>
     
       <option value="TW">Taiwan</option>
     
       <option value="TJ">Tajikistan</option>
     
       <option value="TZ">Tanzania</option>
     
       <option value="TH">Thailand</option>
     
       <option value="TL">Timor-Leste</option>
     
       <option value="TG">Togo</option>
     
       <option value="TK">Tokelau</option>
     
       <option value="TO">Tonga</option>
     
       <option value="TT">Trinidad and Tobago</option>
     
       <option value="TN">Tunisia</option>
     
       <option value="TR">Türkiye</option>
     
       <option value="TM">Turkmenistan</option>
     
       <option value="TC">Turks and Caicos Islands</option>
     
       <option value="TV">Tuvalu</option>
     
       <option value="UG">Uganda</option>
     
       <option value="UA">Ukraine</option>
     
       <option value="AE">United Arab Emirates</option>
     
       <option value="GB">United Kingdom</option>
     
       <option value="UM">United States Minor Outlying Islands</option>
     
       <option value="US">United States of America</option>
     
       <option value="UY" selected>Uruguay</option>
     
       <option value="UZ">Uzbekistan</option>
     
       <option value="VU">Vanuatu</option>
     
       <option value="VE">Venezuela</option>
     
       <option value="VN">Vietnam</option>
     
       <option value="VG">Virgin Islands (British)</option>
     
       <option value="VI">Virgin Islands (U.S.)</option>
     
       <option value="WF">Wallis and Futuna</option>
     
       <option value="EH">Western Sahara</option>
     
       <option value="YE">Yemen</option>
     
       <option value="ZM">Zambia</option>
     
       <option value="ZW">Zimbabwe</option>
     
     </select>
     
         </div>
     
          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block capitalize tracking-wide text-grey-darker text-sm font-bold mb-2" for="grid-city">
             Country of citizenship
           </label>
           <select name="citizenship" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_country">
       <option value="">(Select Country)</option>
     
       <option value="AF">Afghanistan</option>
     
       <option value="AX">Åland Islands</option>
     
       <option value="AL">Albania</option>
     
       <option value="DZ">Algeria</option>
     
       <option value="AS">American Samoa</option>
     
       <option value="AD">Andorra</option>
     
       <option value="AO">Angola</option>
     
       <option value="AI">Anguilla</option>
     
       <option value="AQ">Antarctica</option>
     
       <option value="AG">Antigua and Barbuda</option>
     
       <option value="AR">Argentina</option>
     
       <option value="AM">Armenia</option>
     
       <option value="AW">Aruba</option>
     
       <option value="AU">Australia</option>
     
       <option value="AT">Austria</option>
     
       <option value="AZ">Azerbaijan</option>
     
       <option value="BS">Bahamas</option>
     
       <option value="BH">Bahrain</option>
     
       <option value="BD">Bangladesh</option>
     
       <option value="BB">Barbados</option>
     
       <option value="BY">Belarus</option>
     
       <option value="BE">Belgium</option>
     
       <option value="BZ">Belize</option>
     
       <option value="BJ">Benin</option>
     
       <option value="BM">Bermuda</option>
     
       <option value="BT">Bhutan</option>
     
       <option value="BO">Bolivia</option>
     
       <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
     
       <option value="BA">Bosnia and Herzegovina</option>
     
       <option value="BW">Botswana</option>
     
       <option value="BV">Bouvet Island</option>
     
       <option value="BR">Brazil</option>
     
       <option value="IO">British Indian Ocean Territory</option>
     
       <option value="BN">Brunei</option>
     
       <option value="BG">Bulgaria</option>
     
       <option value="BF">Burkina Faso</option>
     
       <option value="BI">Burundi</option>
     
       <option value="CV">Cabo Verde</option>
     
       <option value="KH">Cambodia</option>
     
       <option value="CM">Cameroon</option>
     
       <option value="CA">Canada</option>
     
       <option value="KY">Cayman Islands</option>
     
       <option value="CF">Central African Republic</option>
     
       <option value="TD">Chad</option>
     
       <option value="CL">Chile</option>
     
       <option value="CN">China</option>
     
       <option value="CX">Christmas Island</option>
     
       <option value="CC">Cocos (Keeling) Islands</option>
     
       <option value="CO">Colombia</option>
     
       <option value="KM">Comoros</option>
     
       <option value="CG">Congo</option>
     
       <option value="CD">Congo (the Democratic Republic of the)</option>
     
       <option value="CK">Cook Islands</option>
     
       <option value="CR">Costa Rica</option>
     
       <option value="CI">Côte d&#x27;Ivoire</option>
     
       <option value="HR">Croatia</option>
     
       <option value="CU">Cuba</option>
     
       <option value="CW">Curaçao</option>
     
       <option value="CY">Cyprus</option>
     
       <option value="CZ">Czechia</option>
     
       <option value="DK">Denmark</option>
     
       <option value="DJ">Djibouti</option>
     
       <option value="DM">Dominica</option>
     
       <option value="DO">Dominican Republic</option>
     
       <option value="EC">Ecuador</option>
     
       <option value="EG">Egypt</option>
     
       <option value="SV">El Salvador</option>
     
       <option value="GQ">Equatorial Guinea</option>
     
       <option value="ER">Eritrea</option>
     
       <option value="EE">Estonia</option>
     
       <option value="SZ">Eswatini</option>
     
       <option value="ET">Ethiopia</option>
     
       <option value="FK">Falkland Islands (Malvinas)</option>
     
       <option value="FO">Faroe Islands</option>
     
       <option value="FJ">Fiji</option>
     
       <option value="FI">Finland</option>
     
       <option value="FR">France</option>
     
       <option value="GF">French Guiana</option>
     
       <option value="PF">French Polynesia</option>
     
       <option value="TF">French Southern Territories</option>
     
       <option value="GA">Gabon</option>
     
       <option value="GM">Gambia</option>
     
       <option value="GE">Georgia</option>
     
       <option value="DE">Germany</option>
     
       <option value="GH">Ghana</option>
     
       <option value="GI">Gibraltar</option>
     
       <option value="GR">Greece</option>
     
       <option value="GL">Greenland</option>
     
       <option value="GD">Grenada</option>
     
       <option value="GP">Guadeloupe</option>
     
       <option value="GU">Guam</option>
     
       <option value="GT">Guatemala</option>
     
       <option value="GG">Guernsey</option>
     
       <option value="GN">Guinea</option>
     
       <option value="GW">Guinea-Bissau</option>
     
       <option value="GY">Guyana</option>
     
       <option value="HT">Haiti</option>
     
       <option value="HM">Heard Island and McDonald Islands</option>
     
       <option value="VA">Holy See</option>
     
       <option value="HN">Honduras</option>
     
       <option value="HK">Hong Kong</option>
     
       <option value="HU">Hungary</option>
     
       <option value="IS">Iceland</option>
     
       <option value="IN">India</option>
     
       <option value="ID">Indonesia</option>
     
       <option value="IR">Iran</option>
     
       <option value="IQ">Iraq</option>
     
       <option value="IE">Ireland</option>
     
       <option value="IM">Isle of Man</option>
     
       <option value="IL">Israel</option>
     
       <option value="IT">Italy</option>
     
       <option value="JM">Jamaica</option>
     
       <option value="JP">Japan</option>
     
       <option value="JE">Jersey</option>
     
       <option value="JO">Jordan</option>
     
       <option value="KZ">Kazakhstan</option>
     
       <option value="KE">Kenya</option>
     
       <option value="KI">Kiribati</option>
     
       <option value="KW">Kuwait</option>
     
       <option value="KG">Kyrgyzstan</option>
     
       <option value="LA">Laos</option>
     
       <option value="LV">Latvia</option>
     
       <option value="LB">Lebanon</option>
     
       <option value="LS">Lesotho</option>
     
       <option value="LR">Liberia</option>
     
       <option value="LY">Libya</option>
     
       <option value="LI">Liechtenstein</option>
     
       <option value="LT">Lithuania</option>
     
       <option value="LU">Luxembourg</option>
     
       <option value="MO">Macao</option>
     
       <option value="MG">Madagascar</option>
     
       <option value="MW">Malawi</option>
     
       <option value="MY">Malaysia</option>
     
       <option value="MV">Maldives</option>
     
       <option value="ML">Mali</option>
     
       <option value="MT">Malta</option>
     
       <option value="MH">Marshall Islands</option>
     
       <option value="MQ">Martinique</option>
     
       <option value="MR">Mauritania</option>
     
       <option value="MU">Mauritius</option>
     
       <option value="YT">Mayotte</option>
     
       <option value="MX">Mexico</option>
     
       <option value="FM">Micronesia</option>
     
       <option value="MD">Moldova</option>
     
       <option value="MC">Monaco</option>
     
       <option value="MN">Mongolia</option>
     
       <option value="ME">Montenegro</option>
     
       <option value="MS">Montserrat</option>
     
       <option value="MA">Morocco</option>
     
       <option value="MZ">Mozambique</option>
     
       <option value="MM">Myanmar</option>
     
       <option value="NA">Namibia</option>
     
       <option value="NR">Nauru</option>
     
       <option value="NP">Nepal</option>
     
       <option value="NL">Netherlands</option>
     
       <option value="NC">New Caledonia</option>
     
       <option value="NZ">New Zealand</option>
     
       <option value="NI">Nicaragua</option>
     
       <option value="NE">Niger</option>
     
       <option value="NG">Nigeria</option>
     
       <option value="NU">Niue</option>
     
       <option value="NF">Norfolk Island</option>
     
       <option value="KP">North Korea</option>
     
       <option value="MK">North Macedonia</option>
     
       <option value="MP">Northern Mariana Islands</option>
     
       <option value="NO">Norway</option>
     
       <option value="OM">Oman</option>
     
       <option value="PK">Pakistan</option>
     
       <option value="PW">Palau</option>
     
       <option value="PS">Palestine, State of</option>
     
       <option value="PA">Panama</option>
     
       <option value="PG">Papua New Guinea</option>
     
       <option value="PY">Paraguay</option>
     
       <option value="PE">Peru</option>
     
       <option value="PH">Philippines</option>
     
       <option value="PN">Pitcairn</option>
     
       <option value="PL">Poland</option>
     
       <option value="PT">Portugal</option>
     
       <option value="PR">Puerto Rico</option>
     
       <option value="QA">Qatar</option>
     
       <option value="RE">Réunion</option>
     
       <option value="RO">Romania</option>
     
       <option value="RU">Russia</option>
     
       <option value="RW">Rwanda</option>
     
       <option value="BL">Saint Barthélemy</option>
     
       <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
     
       <option value="KN">Saint Kitts and Nevis</option>
     
       <option value="LC">Saint Lucia</option>
     
       <option value="MF">Saint Martin (French part)</option>
     
       <option value="PM">Saint Pierre and Miquelon</option>
     
       <option value="VC">Saint Vincent and the Grenadines</option>
     
       <option value="WS">Samoa</option>
     
       <option value="SM">San Marino</option>
     
       <option value="ST">Sao Tome and Principe</option>
     
       <option value="SA">Saudi Arabia</option>
     
       <option value="SN">Senegal</option>
     
       <option value="RS">Serbia</option>
     
       <option value="SC">Seychelles</option>
     
       <option value="SL">Sierra Leone</option>
     
       <option value="SG">Singapore</option>
     
       <option value="SX">Sint Maarten (Dutch part)</option>
     
       <option value="SK">Slovakia</option>
     
       <option value="SI">Slovenia</option>
     
       <option value="SB">Solomon Islands</option>
     
       <option value="SO">Somalia</option>
     
       <option value="ZA">South Africa</option>
     
       <option value="GS">South Georgia and the South Sandwich Islands</option>
     
       <option value="KR">South Korea</option>
     
       <option value="SS">South Sudan</option>
     
       <option value="ES">Spain</option>
     
       <option value="LK">Sri Lanka</option>
     
       <option value="SD">Sudan</option>
     
       <option value="SR">Suriname</option>
     
       <option value="SJ">Svalbard and Jan Mayen</option>
     
       <option value="SE">Sweden</option>
     
       <option value="CH">Switzerland</option>
     
       <option value="SY">Syria</option>
     
       <option value="TW">Taiwan</option>
     
       <option value="TJ">Tajikistan</option>
     
       <option value="TZ">Tanzania</option>
     
       <option value="TH">Thailand</option>
     
       <option value="TL">Timor-Leste</option>
     
       <option value="TG">Togo</option>
     
       <option value="TK">Tokelau</option>
     
       <option value="TO">Tonga</option>
     
       <option value="TT">Trinidad and Tobago</option>
     
       <option value="TN">Tunisia</option>
     
       <option value="TR">Türkiye</option>
     
       <option value="TM">Turkmenistan</option>
     
       <option value="TC">Turks and Caicos Islands</option>
     
       <option value="TV">Tuvalu</option>
     
       <option value="UG">Uganda</option>
     
       <option value="UA">Ukraine</option>
     
       <option value="AE">United Arab Emirates</option>
     
       <option value="GB">United Kingdom</option>
     
       <option value="UM">United States Minor Outlying Islands</option>
     
       <option value="US">United States of America</option>
     
       <option value="UY" selected>Uruguay</option>
     
       <option value="UZ">Uzbekistan</option>
     
       <option value="VU">Vanuatu</option>
     
       <option value="VE">Venezuela</option>
     
       <option value="VN">Vietnam</option>
     
       <option value="VG">Virgin Islands (British)</option>
     
       <option value="VI">Virgin Islands (U.S.)</option>
     
       <option value="WF">Wallis and Futuna</option>
     
       <option value="EH">Western Sahara</option>
     
       <option value="YE">Yemen</option>
     
       <option value="ZM">Zambia</option>
     
       <option value="ZW">Zimbabwe</option>
     
     </select>
     
         </div>
         <div class="md:w-1/2 px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-sm font-bold mb-2" for="grid-state">
             State
           </label>
           <div class="">
                 <input type="text" name="state" value="<?php echo $state; ?>" maxlength="20" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_state">
     
             <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
              
             </div>
           </div>
         </div>
         <div class="md:w-1/2 px-3">
           <label class="block  tracking-wide text-grey-darker text-sm font-bold mb-2">
             Zip
           </label>
                <input type="text" name="zipcode" value="<?php echo $zipcode; ?>"
                maxlength="20" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_zipcode">
     
         </div>
       </div>
     
     <!------------------------------------------------------------------>
     
     
       <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
       <div class="-mx-3 md:flex mb-6">
         <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block capitalize tracking-wide text-grey-darker text-sm font-bold mb-2" for="grid-first-name">
             Preferred Destination in Canada  
           </label>
           
           <select name="destination" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_destination">
       <option value="<?php echo $destination; ?>"> <?php echo $destination; ?></option>
     
       <option value="NO PREFERENCE">NO PREFERENCE</option>
     
       <option value="NOT SURE">NOT SURE</option>
     
       <option value="ALBERTA">ALBERTA</option>
     
       <option value="BRITISH COLOMBIA">BRITISH COLOMBIA</option>
     
       <option value="MANITOBA" selected>MANITOBA</option>
     
       <option value="NEW BRUNSWICK">NEW BRUNSWICK</option>
     
       <option value="NEWFOUNDLAND AND LABARADOR">NEWFOUNDLAND AND LABARADOR</option>
     
       <option value="NORTHWEST TERRITORIES">NORTHWEST TERITORRIES</option>
     
       <option value="NOVA SCOTIA">NOVA SCOTIA</option>
     
       <option value="ONTARIO">ONTARIO</option>
     
       <option value="NUNAVUT">NUNAVUT</option>
     
       <option value="PRINCE EDWARD ISLAND">PRINCE EDWARD ISLAND</option>
     
       <option value="QUEBEC">QUEBEC</option>
     
       <option value="SASKATCHEWAN">SASKATCHEWAN</option>
     
       <option value="YUKON">YUKON</option>
     
     </select>
           <p class="text-red text-xs italic"></p>
         </div>
         <div class="md:w-1/2 px-3">
           <label class="block capitalize tracking-wide text-grey-darker text-sm font-bold mb-2" for="grid-last-name">
             Do you have any children under the age of 22?  
           </label>
           
           <select name="children" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_choice">
       <option value="<?php echo $children; ?>"
       ><?php echo $children; ?></option>
     
       <option value="YES" selected>YES</option>
     
       <option value="NO">NO</option>
     
     </select>
     
         </div>
       </div>
           <div class="md:w-full px-3">
           <h1 class="my-4 text-lg font-medium italic ">Your Language Skills</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
             select your preferred language
           </label>
         <select name="language" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_language">
       <option value="">---------</option>
     
       <option value="ENGLISH" selected>ENGLISH</option>
     
       <option value="FRENCH">FRENCH</option>
     
       <option value="GERMAN">GERMAN</option>
     
       <option value="ARABIC">ARABIC</option>
     
       <option value="CHINESE">CHINESE</option>
     
     </select>
         </div>
           <div class="-mx-3 md:flex mb-6">
             <div class="md:w-full px-3">
               <h1 class="my-4 text-lg font-medium italic ">Your Education and Training</h1>
               <hr>
               <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
                 Have you completed high school (secondary school)?*  
               </label>
                <select name="education_training" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_education_training">
       <option value="">---------</option>
     
       <option value="YES" selected>YES</option>
     
       <option value="NO">NO</option>
     
     </select>
     
           </div>
         <div class="md:w-full px-3">
               <h1 class="my-4 text-lg font-medium italic ">Your Work History</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
             Have you done any paid work during the last 10 years? (optional)*  
           </label>
                <input type="text" name="work_history"  value="<?php echo $work_history; ?>" maxlength="250" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_work_history">
     
         </div>
       </div>
     
         <div class="-mx-3 md:flex mb-6">
         <div class="md:w-full px-3">
           <h1 class="my-4 text-lg font-medium italic ">Express Entry Profile</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
            Have you already submitted an Express Entry profile to the Government of Canada within the past 12 months 
           </label>
                <select name="entry_profile" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_entry_profile">
       <option value="">---------</option>
     
       <option value="YES" selected>YES</option>
     
       <option value="NO">NO</option>
     
     </select>
     
         </div>
         <div class="md:w-full my-4 px-3">
               <h1 class="my-4 text-lg font-medium italic ">Canadian Job Offer</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
             Do you have a written job offer from a Canadian employer?   
           </label>
                <select name="job_offer" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_job_offer">
       <option value="">---------</option>
     
       <option value="YES" selected>YES</option>
     
       <option value="NO">NO</option>
     
     </select>
     
         </div>
       </div>
     
         <div class="-mx-3 md:flex mb-6">
         <div class="md:w-full my-4 px-3">
           <h1 class="my-4 text-lg font-medium italic ">Family or Friends in Canada</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
             Do you have any family members or relatives living in Canada and who are 18 years or older? 
      
           </label>
                <select name="family_or_friends_in_canada" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_family_or_friends_in_canada">
       <option value="">---------</option>
     
       <option value="YES" selected>YES</option>
     
       <option value="NO">NO</option>
     
     </select>
     
         </div>
         <div class="md:w-full my-4 px-3">
               <h1 class="my-4 text-lg font-medium italic  ">Are you a College(university) graduate</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
             please select accordingly
           </label>
                <select name="graduate" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_graduate">
       <option value="">---------</option>
     
       <option value="YES" selected>YES</option>
     
       <option value="NO">NO</option>
     
     </select>
     
         </div>
       </div>
              <div class="md:w-full my-4 px-3">
               <h1 class="my-4 text-lg font-medium italic  ">Brief bio(very important)**</h1>
           <hr>
           <label class="block capitalize tracking-wide my-4 text-grey-darker text-xs font-medium italic mb-2" for="grid-password">
             tells us a bit about yourself
           </label>
                <textarea name="addition" cols="40" rows="10" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="id_addition">
                 <?php echo $addition; ?> 

             </textarea>
     
         </div>   
       </div>
     
     <button type="submit"    class="px-6 py-2 font-medium tracking-wide text-white capitalize duration-300 bg-cyan-800 rounded-lg hover:bg-cyan-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
         submit form
     </button>
     </div>
       <div>
       </form>

         <p class="text-md font-bold"> Privacy Policy<span class="text-sm text-gray-600">: 
     This website is not directed at any jurisdiction and is not intended for any use that would be contrary to local law or regulation.
     
     By using clearwaterconsultant.ca you agree to use our cookies to enhance your experience. All information provided here are secured and can be erased if you wish to.
     
     Clearwater consulting canada immigration services is a worldwide brand regulated by <strong>the regulated Canadian immigration consultant(RCIC)</strong> .
     
     Customer Services: Support@clearwaterconsultant.ca | Tel: +1 (447) 251-9091</span> </p>
         <p class="py-4 font-bold text-gray-600 text-center">Copyright © 2023 - All right reserved by Clearwater Canadian Immigration Consulting</p>
       </div>
     
     </div>
     
             
            
         
         </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script>
                   new WOW().init();
                   </script>
     
             
     
     </body>
     </html>
     