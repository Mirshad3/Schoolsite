
<?php
include 'connection/database.php';

try {

    $query = "SELECT * FROM web_content WHERE id = 1";
    $flash_query = "SELECT * FROM flash_notice WHERE id = 1";

    $result = mysqli_query($connection, $query);
    $flash_result = mysqli_query($connection, $flash_query);



    if ($result) {

        $row = mysqli_fetch_assoc($result);
        $flash_notice = mysqli_fetch_assoc($flash_result);

    } else {
        echo "Error executing the query: " . mysqli_error($connection);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {

    mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nelukkulam Kalaimagal MV</title>
    <!-- Bootstrap CSS for responsiveness -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png">
    <style>
        /* Additional custom styles */
        .sidebar {
            background-color: #f7f7f7;
            padding: 20px;
        }
        body h2 {
          font-size:2.5rem;
        }
        .main-content {
            background-color: #fff;
            padding: 20px;
        }

        .main-content h1 {
            color: #333;
        }

        .form {
            background-color: #f7f7f7;
            padding: 20px;
        }
 

        /* Custom carousel image styling */
        .carousel-inner img {
            width: 100%;
            height: auto;
        }

        /* Custom form padding for mobile */
        @media (max-width: 576px) {
            .form {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
  <?php include('includes/header.php') ?>
    <!-- Header -->
    

    <!-- Main layout -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Left sidebar: Vision, Mission, etc. -->
            <aside class="col-lg-3 col-md-4 sidebar mb-4">
            <h1
        class="ml-5 mb-4 text-xl text-4xl font-bold leading-none tracking-tight text-blue-600 md:text-5xl lg:text-2xl dark:text-white">
        Vision</h1>
    <p class="text-justify ml-5 mr-5 text-base font-normal text-gray-500 lg:text-xxx dark:text-gray-400">
        <?php echo $row['seven']; ?></p>

    <h1
        class="mt-8 ml-5 mb-4 text-xl text-4xl font-bold leading-none tracking-tight text-blue-600 md:text-5xl lg:text-2xl dark:text-white">
         Mission</h1>
    <p class="text-justify ml-5 mr-5 text-base font-normal text-gray-500 lg:text-xxx dark:text-gray-400 mb-5">
        <?php echo $row['eight']; ?></p>
        

            </aside>

            <!-- Main Content -->
            <div class="col-lg-6 col-md-8 main-content">
                <!-- Image Slider (Bootstrap Carousel) -->
               <!-- This is an example component -->
    <div class="mx-auto">

<div id="default-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span
                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                Slide</span>
            <img src="assects/images/schoolImages/fullschool.jpg"
                class="object-contain block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assects/images/schoolImages/mainschool.jpg"
                class="object-contain block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assects/images/schoolImages/engineeringschool.jpg"
                class="object-contain block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                </path>
            </svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button"
        class="nextimage flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</div>

<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>
                 
                
           

            <div class="container mx-auto   pt-5">

<div style='background-color:rgb(255, 255, 255)'>
    <div style="cursor: auto; padding-top: 10px;">

        

        <div class="p-6 bg-gray-100 rounded-lg">

            <div class="mb-1">

                <svg class="hi-outline hi-cube inline-block w-12 h-12 text-indigo-500" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>

            </div>

            <h3 class="text-lg font-bold mb-2">
            News & Events
            </h3>

            <p class="text-sm leading-6 text-gray-600"><?php echo $row['four']; ?></p>
            <br/>
            <button type="submit" class="btn btn-primary   btn-sm btn-block float-right w-25">Other News</button>
        </div>
<br/>
        <div class="p-6 bg-gray-100 rounded-lg" style="cursor: auto;">

            <div class="mb-1" style="cursor: auto;">

                <svg class="hi-outline hi-cog inline-block w-12 h-12 text-indigo-500" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>

            </div>

            <h3 class="text-lg font-bold mb-2">
            Upcoming Events
            </h3>

            <p class="text-sm leading-6 text-gray-600"><?php echo $row['five']; ?></p>
            <br/>
            <button type="submit" class="btn btn-primary btn-sm btn-block float-right w-25">Other Events</button>
        </div>

        

    </div>
</div>
</div> </div>
            <!-- Right sidebar: Contact Form -->
            <aside class="col-lg-3 col-md-12 form mb-4">
            <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="assects/images/staff/male-no-image-v2.jpg" onerror="this.src=`assects/images/defaults/defaultaltimage.jpg`">
            <h1
        class="ml-5 mb-4 text-xl text-4xl font-bold leading-none tracking-tight text-blue-600 md:text-5xl lg:text-2xl dark:text-white">
        Principal's Message</h1>
    <p class="text-justify ml-5 mr-5 text-base font-normal text-gray-500 lg:text-xxx dark:text-gray-400">
        <?php echo $row['six']; ?></p>
        <br/>
        <h1
        class="ml-5 mb-4 text-xl text-4xl font-bold leading-none tracking-tight text-blue-600 md:text-5xl lg:text-2xl dark:text-white">
        Send Us a Messagee</h1> 
                <form action="submit_message.php" method="post">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </aside>
        </div>
    </div>

    <?php include('includes/footer.php') ?>


    

<?php 
if($flash_notice['trun_flash'] == "1"){
echo '
<div id="info-popup" tabindex="-1" class="fadeIn hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
            <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">'. $flash_notice['title'] .'</h3>
                <img class="object-cover w-full rounded-lg" src="'. $flash_notice['image_url'] .'" alt="">
                <p class="mt-3 font-bold">
                    '. $flash_notice['message'] . '
                </p>
            </div>
            <div class="justify-between items-center pt-0 space-y-4 sm:flex sm:space-y-0">
                <a href="aboutus.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">See About School</a>
                <div class="items-center space-y-4 sm:space-x-4 sm:flex sm:space-y-0">                  
                    <button id="close-modal" type="button" class="py-2 px-4 w-full text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
';
}
?>
</body>
<script>
const modalEl = document.getElementById('info-popup');
const privacyModal = new Modal(modalEl, {
    placement: 'center'
});

privacyModal.show();

const closeModalEl = document.getElementById('close-modal');
closeModalEl.addEventListener('click', function() {
    privacyModal.hide();
});

setInterval(updatecarsoul, 5000);

function updatecarsoul() {
    document.getElementsByClassName('nextimage')[0].click();
}
//console.clear();
</script>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
