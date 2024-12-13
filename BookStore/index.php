<?php
session_start();
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/layout/header.php";

$books = getBooks();
?>

<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        <?php
        foreach ($books as $book) {
            echo "
        <div class='rounded overflow-hidden shadow-lg flex flex-col'>
            <div class='relative'>
                <a href='#'>
                    <img class='w-full'
                        src='{$book['image']}'
                        alt='Image of {$book['name']}'>
                    <div class='hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25'>
                    </div>
                </a>
            </div>
            <div class='px-6 py-4 mb-auto'>
                <a href='#' class='font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2'>
                    {$book['name']}
                </a>
                <p class='text-gray-500 font-semibold  text-sm mb-2'>Category: {$book['category']}</p>
                <p class='text-gray-500 font-semibold text-sm mb-2'>Author: {$book['author']}</p>
                <p class='text-gray-500 font-semibold  text-sm mb-4'>Price: \${$book['price']}</p>
                <div class=''>
                    <a href='add-to-cart.php?id={$book['id']}' class='bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded'>
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        ?>

    </div>

</div>

<?php
require_once __DIR__ . "/layout/footer.php";
