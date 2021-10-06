

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kento Bento Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://images.unsplash.com/photo-1584830243587-bb9a6d3b3086?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1740&q=80" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-black w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">
        <h1 class="text-xl font-bold" style="font-size: 3rem; font-family: Century Gothic;">Account Created.</h1>
      <h1 class="text-xl font-bold" style="font-size: 3rem; font-family: Century Gothic;">@Kento Bento</h1>

     <!--i started here -->
        <button class="bg-teal-500 hover:bg-teal-400 text-white font-bold mt-5 py-4 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        <a href="/login"><h1>Proceed to Login.</h1></a>
        </button>

      <p class="text-sm text-gray-500 mt-12">&copy; 2020 Kento Bento - IT31S2.</p>
    </div>
  </div>
  @include('cookieConsent::index')
</section>
<!-- partial -->
  
</body>
</html>

<style>
  h1{
    color:white;
  }
  label {
    color:teal;
  }
  p {
    color:white;
  }
</style>