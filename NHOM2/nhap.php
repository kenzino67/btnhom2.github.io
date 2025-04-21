<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Login
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
  </style>
 </head>
 <body class="bg-white">
  <header class="flex justify-between items-center p-4">
   <nav class="flex space-x-4">
    <a class="text-black" href="#">
     ABOUT
    </a>
    <a class="text-black" href="#">
     SERVICES
    </a>
    <a class="text-black" href="#">
     CONTACTS
    </a>
    <a class="text-black" href="#">
     WORK
    </a>
   </nav>
   <button class="border border-black px-4 py-2">
    SIGN UP
   </button>
  </header>
  <main class="relative flex items-center justify-center h-screen">
   <div class="absolute inset-0 flex">
    <div class="w-1/4 bg-teal-500">
    </div>
    <div class="w-1/2 bg-white">
    </div>
    <div class="w-1/4 bg-teal-500">
    </div>
   </div>
   <div class="relative z-10 flex flex-col items-center text-center space-y-4">
    <h1 class="text-6xl font-playfair text-teal-500">
     BUSINESS
    </h1>
    <h2 class="text-4xl font-bold">
     WORK
    </h2>
    <p class="text-lg">
     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod.
    </p>
    <button class="bg-black text-white px-6 py-2">
     GET STARTED
    </button>
   </div>
   <div class="absolute inset-0 flex items-center justify-center">
    <img alt="Businessman sitting and reading a document in a modern office with a cityscape view" class="h-full object-cover opacity-50" src="https://placehold.co/600x800"/>
   </div>
  </main>
  <div class="flex items-center justify-center h-screen">
   <form action="login.php" class="bg-white p-8 rounded shadow-md w-96" method="POST">
    <h2 class="text-2xl font-bold mb-6 text-center">
     Login
    </h2>
    <div class="mb-4">
     <label class="block text-sm font-medium text-gray-700" for="username">
      Username
     </label>
     <input class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm" id="username" name="username" type="text"/>
    </div>
    <div class="mb-6">
     <label class="block text-sm font-medium text-gray-700" for="password">
      Password
     </label>
     <input class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm" id="password" name="password" type="password"/>
    </div>
    <button class="w-full bg-teal-500 text-white py-2 px-4 rounded-md" type="submit">
     Login
    </button>
   </form>
  </div>
 </body>
</html>
