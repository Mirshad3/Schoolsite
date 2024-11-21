<script src="https://cdn.tailwindcss.com"></script>
<script>
function homepage() {
    window.location.replace('index.php');
}
function toggleDropdown(id) {
    document.getElementById(id).classList.toggle('hidden');
}
</script>
<header class="shadow-inherit text-gray-600 body-font sticky top-0 z-50 opacity-95"
    style="box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1); background-image: url(assects/images/defaults/header_bg4.png); background-size:cover; background-repeat:no-repeat;">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img onclick="homepage()" style="cursor: pointer;" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-20 h-22 bg-black-500 rounded-full" viewBox="0 0 24 24"
                src="assects/images/defaults/header_logo.png">
                 <span class="ml-3 text-xl">V/Nelukkulam Kalaimagal Maha Vidyalayam <br/> வ/நெளுக்குளம் கலைமகள் மகா வித்தியாலயம்</span> 
           
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base md:font-bold justify-center">
            <a href="index.php" class="text-sm md:text-base mr-3 hover:text-gray-900">Home</a>

            <!-- Dropdown for About -->
            <div class="relative group">
                <a  onclick="toggleDropdown('aboutDropdown')" class="text-sm md:text-base mr-3 hover:text-gray-900 cursor-pointer">About Us</a>
                <div id="aboutDropdown" class="hidden absolute z-10 bg-white border mt-2 py-2 rounded shadow-lg">
                    <a href="aboutus.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Who We Are</a>
                    <a href="team.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Our Team</a>
                </div>
            </div>
       <a href="notice.php" class="text-sm md:text-base mr-3 hover:text-gray-900">Division</a>
            <a href="notice.php" class="text-sm md:text-base mr-3 hover:text-gray-900">Acheivements</a>
        <a href="notice.php" class="text-sm md:text-base mr-3 hover:text-gray-900">News</a>
            <!-- Dropdown for Extras -->
            <div class="relative group">
                <a   onclick="toggleDropdown('extrasDropdown')" class="text-sm md:text-base mr-3 hover:text-gray-900 cursor-pointer">Gallery</a>
                <div id="extrasDropdown" class="hidden absolute z-10 bg-white border mt-2 py-2 rounded shadow-lg">
                    <a href="gallery.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gallery</a>
                    <a href="events.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Events</a>
                </div>
            </div>
 <a href="notice.php" class="text-sm md:text-base mr-3 hover:text-gray-900">Downloads</a>
            <!-- Dropdown for Contact Us -->
            <div class="relative group">
                <a  onclick="toggleDropdown('contactDropdown')" class="text-sm md:text-base mr-3 hover:text-gray-900 cursor-pointer">Contact Us</a>
                <div id="contactDropdown" class="hidden absolute z-10 bg-white border mt-2 py-2 rounded shadow-lg">
                    <a href="contactUs.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact Form</a>
                    <a href="location.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Location</a>
                </div>
            </div>
        </nav>
        <!-- <button onclick="joinus()"
            class="inline-flex items-center border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Join
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </button>-->
    </div>
</header>
