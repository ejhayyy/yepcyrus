@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<section class="pt-24">
    <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-white md:text-6xl md:tracking-tight">
        <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">FREQUENTLY</span> <span style="color:#A955E4">ASKED </span>QUESTIONS.
            </h1>
            <p class="px-0 mb-8 text-lg text-white md:text-xl lg:px-24">
                We wish that we can answer your questions here!
            </p>
            <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                <a href="/home" class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-400 rounded-2xl sm:w-auto sm:mb-0">
                    Return Home
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
               
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container pt-5">

  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-10" >
      What is Kento Bento?
    </div>
    <div class="acc-body rounded-10">
      We are a Curriculum Vitae sharing platform!! Create your resume now, to showcase to your potential future-employers!
    </div>
  </div>
  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-10">
      Is my data safe at Kento Bento?
    </div>
    <div class="acc-body rounded-10">
    Rest assured that your data is being handled with care, and with implemented added security features to ensure that your data is safe and protected!
    </div>
  </div>
  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-10">
    Is Kento Bento free to use?
    </div>
    <div class="acc-body rounded-10">
    Absolutely yes! We don't have any hidden charges at all!
    </div>
  </div>

  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-10">
    I may have other questions.
    </div>
    <div class="acc-body rounded-10">
    For more questions and inquiries, you can reach us by clickng the <a href="/contactus">Contact us</a> page. Please feel free to ask any concerns or inquries!
    </div>
  </div>
</div>


<style>
    .accordion-wrapper 
{
  position: relative;
  margin-bottom: .5rem;
}
.acc-head
{
  position: relative;
}
.acc-head::after
{
  content: '\276F';
  position: absolute;
  right: 16px;
  color: grey;
  transform: rotate(0deg);
  transition: .4s;
}
.acc-head.active::after
{
  content: '\276F';
  position: absolute;
  right: 16px;
  color: grey;
  transform: rotate(90deg);
  transition: .4s;
}
.acc-body
{
  padding: 1rem;
  display: none;
  background: #dadee2;
} 
</style>

<script>
    $(document).ready(function(){
  $('.acc-head').click(function(){
    $(this).next().slideToggle(500);
    $(this).toggleClass('active');
  })
})
</script>

</section>

@endsection

