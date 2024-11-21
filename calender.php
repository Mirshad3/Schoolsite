<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar | N/Kalaimagal MV</title>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/js-year-calendar@latest/dist/js-year-calendar.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/js-year-calendar@latest/dist/js-year-calendar.min.js"></script>
    <style>
        input {
            border-radius: 20px;
            border: 1px solid black;
        }
        #calendar {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php include("includes/header.php") ?>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-blue-600">Sri Lankan Calendar</h1>
                <p class="text-sm md:text-base lg:w-2/3 mx-auto leading-relaxed text-base">
                    Dear students, 📅 Please find attached the Sri Lankan calendar for your reference regarding traditional festivals and holidays. It is advisable to consult official notices for accurate information on holidays and time off. 📌
                </p>
            </div>
        </div>
    </section>

    <!-- JSCalendar container -->
    <div id="calendar"></div>

    <?php include("includes/footer.php") ?>
    
    <!-- JSCalendar Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Calendar('#calendar', {
                language: 'en', // English language
                enableRangeSelection: true, // Allows selecting a range of dates
                dataSource: [
                    {
                        startDate: new Date(2024, 0, 14),
                        endDate: new Date(2024, 0, 16),
                        name: 'Pongal Festival'
                    },
                    {
                        startDate: new Date(2024, 3, 13),
                        endDate: new Date(2024, 3, 15),
                        name: 'Sinhala and Tamil New Year'
                    },
                    {
                        startDate: new Date(2024, 10, 1),
                        endDate: new Date(2024, 10, 1),
                        name: 'All Saints\' Day'
                    }
                ]
            });
        });
    </script>

</body>

<script>
    console.clear();
</script>

</html>
