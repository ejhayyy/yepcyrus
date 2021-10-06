

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kento Bento Registration</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://images.pexels.com/photos/5777949/pexels-photo-5777949.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-black w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">

      <h1 class="text-xl font-bold" style="font-size: 3rem; font-family: Century Gothic;">Kento Bento</h1>

      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Register an account here!</h1>
      
      <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="mt-3 mb-3 form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    
                  </div>
                </div>

                <div class="mt-3 mb-3 form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      
                    </div>
                  </div>

                  <div class="mt-3 mb-3 form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                      <input id="password" type="password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        
                      </div>
                    </div>

                    <div class="mt-3 mb-3 form-group row">
                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                      <div class="col-md-6">
                        <input id="password-confirm" type="password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                    </div>

                    <div class="mt-3 mb-3 form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="w-full block bg-teal-700 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">
                          {{ __('Register') }}
                        </button>
                      </div>
                    </div>
                  </form>
                  @error('name')
                      <span class="mt-8 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong style="color:red">{{ $message }}</strong>
                      </span>
                    @enderror
                  @error('email')
                        <span class="mt-8 alert alert-danger alert-dismissible fade show" role="alert">
                          <strong style="color:red">{{ $message }}</strong>
                        </span>
                      @enderror
                  @error('password')
                          <span class="mt-8 alert alert-danger alert-dismissible fade show" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                          </span>
                        @enderror

                  @if(Session::has('error'))              
              <div style="color:red" class="mt-8 alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
      @endif
      <p class="mt-8">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold"> &nbsp Login.</a></p>

      <p class="text-sm text-gray-500 mt-12">&copy; 2020 Kento Bento - IT31S2.</p>
    </div>
  </div>

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