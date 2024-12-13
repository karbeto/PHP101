<?php
session_start();
require_once __DIR__ . "/layout/header.php";
?>

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-indigo-600 font-bold text-xl">Login:</h1>
        <form method="POST" action="auth.php" class="space-y-6">
            <input type="hidden" name="action" value="login" />
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                    placeholder="Enter your email" 
                    required
                />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                    placeholder="Enter your password" 
                    required
                />
            </div>
            <div>
                <button 
                    type="submit" 
                    class="w-full px-4 py-2 bg-indigo-600 text-white font-medium rounded-lg shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Login
                </button>
            </div>
        </form>
        <hr class="my-6 border-gray-300" />
        <p class="text-center text-sm text-gray-600">
            Don't have an account? <a href="register.php" class="text-indigo-600 hover:text-indigo-500 font-medium">Create one here</a>
        </p>
    </div>
</div>

<?php
require_once __DIR__ . "/layout/footer.php";