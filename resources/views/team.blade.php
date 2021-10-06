@extends('layouts.app')

@section('content')

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


<div id="container" class="content-center w-4/5 mx-auto">
<center>
<h1 class="mt-5 mb-5 text-6xl text-white">Meet Our Team!</h1></center>
<p style="color: white; font-size: 1.5rem; text-align: center; margin-bottom: 2rem;">The people behind Kento Bento.</p>
    <div class="flex flex-col sm:flex-row">

    
      <!-- Card 1 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img style="max-height: 10rem; max-width: 10rem;"
              class="w-auto mx-auto rounded-full"
              src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.6435-9/165673234_3745940898787098_1816593986351472589_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=loQJT8m0qMEAX9nJkZ0&tn=VV6AIVqN-BdFTAST&_nc_ht=scontent.fmnl4-6.fna&oh=48dd208ab353fde3bdaa1458eeafd5ba&oe=61829EEB"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-gray-700">Cedric Reimon Adap</h2>
          <span class="text-blue-500 block mb-5">Back End Developer</span>

          <div>
      <div class="flex flex-wrap justify-center gap-2">
          <a href="https://www.facebook.com/Cedzzz.a">
        <button class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
        </button></a>

        <a href="">
        <button class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
        </button>
        </a>

        <a href="">
        <button class="bg-red-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" /></svg>
        </button>
        </a>

        <a href="">
        <button class="bg-gray-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" fill="currentColor" /></g>
          </svg>
        </button>
        </a>
      </div>
    </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img style="max-height: 10rem; max-width: 10rem;"
              class="w-auto mx-auto rounded-full"
              src="https://lh3.google.com/u/0/d/1LLgRuKAwPMZwCFGmklWv8php9tP_swmp=w1600-h789-iv1"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-gray-700">Cyrus Francisco</h2>
          <span class="text-blue-500 block mb-5">Front End Developer</span>

          <div>
      <div class="flex flex-wrap justify-center gap-2">

        <a href="https://www.facebook.com/cyrus998/">
        <button class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
        </button>
        </a>
        <a href="https://www.youtube.com/channel/UCV3ryPx5MCHaFIjAHnE8ShA">
        <button class="bg-red-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-gray-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" fill="currentColor" /></g>
          </svg>
        </button>
        </a>

      </div>
    </div>

        </div>
      </div>

      <!-- Card 3 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img style="max-height: 10rem; max-width: 10rem;"
              class="w-auto mx-auto rounded-full"
              src="https://lh3.google.com/u/0/d/1-gmWFNHzUFnEwAvVmJN3WoxqwHy4VlsE=w1600-h789-iv1"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-gray-700">Eric Valencia</h2>
          <span class="text-blue-500 block mb-5">Operations Manager</span>

          <div>
      <div class="flex flex-wrap justify-center gap-2">
        <a href="https://www.facebook.com/ericjacob.valencia.1">
        <button class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-red-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-gray-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" fill="currentColor" /></g>
          </svg>
        </button>
        </a>
      </div>
    </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img style="max-height: 10rem; max-width: 10rem;"
              class="w-auto mx-auto rounded-full"
              src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.6435-9/118239434_3221468587948218_5084897485956915519_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=CjCvsKbkAPgAX9uoRpC&_nc_ht=scontent.fmnl4-4.fna&oh=1c60ab583f742c4b166f1f640f24d112&oe=61814D6A"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-gray-700">Kent Usares</h2>
          <span class="text-blue-500 block mb-5">Systems Administrator</span>

          <div>
      <div class="flex flex-wrap justify-center gap-2">
      <a href="https://www.facebook.com/kent.usares">
        <button class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-red-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-gray-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" fill="currentColor" /></g>
          </svg>
        </button>
        </a>
      </div>
    </div>
        </div>
      </div>

      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img style="max-height: 10rem; max-width: 10rem;"
              class="w-auto mx-auto rounded-full"
              src="data:image/jpeg;base64,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"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-gray-700">?????</h2>
          <span class="text-blue-500 block mb-5">Designer</span>

          <div>
      <div class="flex flex-wrap justify-center gap-2">
      <a href="https://www.facebook.com/samantha.joyceii">
        <button class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-red-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" /></svg>
        </button>
        </a>
        <a href="">
        <button class="bg-gray-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" fill="currentColor" /></g>
          </svg>
        </button>
        </a>
      </div>
    </div>
        </div>
      </div>

      
    </div>
  </div>
  </div>
</div>

    @endsection