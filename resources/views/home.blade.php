@extends('layouts.app')
@include('cookieConsent::index')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<section class="pt-24">
    <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-white md:text-6xl md:tracking-tight">
                <span>Start</span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">Creating your own</span> <span style="color:#A955E4">Resume </span>for your potential employers!
            </h1>
            <p class="px-0 mb-8 text-lg text-white md:text-xl lg:px-24">
                Let your future-potential employer find your on this platform!
            </p>
            <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                <a href="#_" class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-400 rounded-2xl sm:w-auto sm:mb-0">
                    Get Started
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#_" class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg bg-gray-100 rounded-2xl sm:w-auto sm:mb-0">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </a>
            </div>
        </div>
        <div style="margin-bottom: 2rem;" class="w-full mx-auto mt-20 text-center md:w-10/12">
            <div class="relative z-0 w-full mt-8">
                <div class="relative overflow-hidden shadow-2xl">
           
                    <img src="https://media.discordapp.net/attachments/894663951357468693/894664288386551820/unknown.png?width=1200&height=466">
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Section Hero -->
 <div class="bg-teal-100 py-14">
    <h3 class="text-2xl tracking-widest text-green-600 text-center">Our Services</h3>
    <h1 class="mt-8 text-center text-5xl text-green-600 font-bold">Just do it.</h1>

    <!-- Box -->
    <div class="md:flex md:justify-center md:space-x-8 md:px-14">
      <!-- box-1 -->
      <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/a17abde8d83650a582a28432/users-with-speech-bubbles-vector_53876-82250.jpg" alt="" />
          <div class="mt-4 text-green-600 text-center">
            <h1 class="text-xl font-bold">Create</h1>
            <p class="mt-4 text-gray-600">Show your accomplishments out there!</p>
            <!--
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">MORE</button>
            -->
        </div>
        </div>
      </div>

      <!-- box-2 -->
      <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/3b242447f922540fbe750cab/fdf.jpg" alt="" />
          <div class="mt-4 text-green-600 text-center">
            <h1 class="text-xl font-bold">Upload</h1>
            <p class="mt-4 text-gray-600">Save them to the cloud!</p>
            <!--
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">MORE</button>
            -->
        </div>
        </div>
      </div>

      <!-- box-3 -->
      <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/8cc47b39e719570b996d9879/dsds.jpg" alt="" />
          <div class="mt-4 text-green-600 text-center">
            <h1 class="text-xl font-bold">Get Scouted!</h1>
            <p class="mt-4 text-gray-600">Let your future-employers see you.</p>
            <!-- 
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">MORE</button>
            -->
        </div>
        </div>
      </div>
    </div>

    <h1 style="color: white; font-size:2rem; text-align: center; margin-top:4rem; margin-bottom:2rem;">Enjoy your stay here at Kento Bento!</h1>
  </div>
</header>

@endsection
