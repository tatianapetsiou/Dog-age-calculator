<html>
<link rel="stylesheet" href="style.css">
<script src="https://cdn.tailwindcss.com"></script>
<body class="text-center">
<div class="bg-opacity-60 grid h-3/4 place-items-center m-auto text-center relative  flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">

    <h1 class="text-xl font-serif font-extrabold">Calculate your dog age!</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $dog_age = $_POST["age"];
        if ($dog_age <= 0){
            echo '<script>alert("Input possitive number")</script>';
        }
        elseif ($dog_age <= 2){
            $age = $dog_age * 10.5;
            echo "<h3>The age of your dog in human years is <span class='font-bold'>$age</span> </h3>";
        }
        else {
            $age = 21 + ($dog_age-2) * 4;
            echo "<h3> The age of your dog in human years is <span class='font-bold'>$age</span> </h3>";
        }
    }
    ?>
<div class="form">
<form action="dogsAge.php" method="post">
    <p class="text-base font-bold pb-2.5">Dog age:</p> <input class="appearance-none  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="number" name="age"><br>
    <input class="cursor-pointer text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="submit" value="Calculate">
</form>

</div>
</div>

</body>

</html>


