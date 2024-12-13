<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-white">
    <div class="flex h-screen flex-col items-center justify-center">
      <div class="max-h-auto mx-auto max-w-xl">
      <?php
    session_start();
      if(isset($_SESSION['error'])){
        echo "<div class='bg-red-500 text-white font-bold px-4 py-2 text-xl rounded-lg mb-10 text-center'>{$_SESSION['error']}</div>";
        unset($_SESSION['error']);
      }
    ?>
        <div class="mb-8 space-y-3">
          <p class="text-xl font-semibold">Login Portal</p>
          <p class="text-gray-500">Welcome to the super secret online club! <br /> This is where all the magic happens, no passwords needed. Just some text</p>
        </div>
        <form class="w-full" method="post" action="test.php">
          <div class="mb-10 space-y-3">
            <div class="space-y-1">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Insert your text</label>
                <input class="border-input bg-background ring-offset-background placeholder:text-muted-foreground focus-visible:ring-ring flex h-10 w-full rounded-md border px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="text" placeholder="Secret" name="text" />
              </div>
            </div>
            <button class="ring-offset-background focus-visible:ring-ring flex h-10 w-full items-center justify-center whitespace-nowrap rounded-md bg-black px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50" type="submit">Click me!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    
</body>
</html>