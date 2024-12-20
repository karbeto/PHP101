<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <a href="index.php" class="text-xl font-bold text-gray-800">Booksy</a>

            <button class="md:hidden flex items-center text-gray-500 hover:text-gray-700 focus:outline-none" aria-controls="navbarSupportedContent" aria-expanded="false" type="button">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>

            <div class="hidden md:flex space-x-4 items-center" id="navbarSupportedContent">
                <?php if (isset($_SESSION['loggedIn'])): ?>
                    <a href="logout.php" class="text-red-600 hover:text-red-800 font-medium">
                        Logout (<?= htmlspecialchars($_SESSION['email']) ?>)
                    </a>
                    <a href="cart.php" class="relative bg-blue-500 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-600">
                        Cart
                        <span class="absolute top-0 right-0 -mt-2 -mr-2 bg-red-600 text-white text-xs rounded-full px-2">
                            <?= count($_SESSION['products'] ?? []) ?>
                        </span>
                    </a>
                <?php else: ?>
                    <a href="login.php" class="text-gray-700 hover:text-gray-900 font-medium">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
