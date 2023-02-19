<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<?php
$string = "abcdefghijklmnopqrstuvwxyz1234567890";
$parts = str_split($string, 1);
shuffle($parts);
$key = join('', $parts);
?>

<body>

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Generate Keys</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">generate Random String Key</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form action="/key.php" method="POST">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">

                                <label for="message" class="leading-7 text-sm text-gray-600">Click the generate key button</label>
                                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-28 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"><?php echo $key; ?></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Generate Key</button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <p class="leading-normal my-5">Ostad PHP & Laravel Course
                            </p>

                        </div>
                </form>
            </div>
        </div>
        </div>
    </section>

</body>

</html>