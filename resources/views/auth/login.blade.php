
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
    <img src="https://images.pexels.com/photos/5768806/pexels-photo-5768806.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-black w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">

      <h1 class="text-xl font-bold" style="font-size: 3rem; font-family: Century Gothic;">Kento Bento</h1>

     <!--i started here -->

     <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    

                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    <br>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                        <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">

                    <button type="submit" class="w-full block bg-teal-700 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">
                          {{ __('Login') }}
                        </button>

                        @error('email')
                      <span style="color:red;"  class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                    @error('password')
                        <span style="color:red;" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
  <br>
                        <a class="btn btn-link" href="/password/reset" style="color:blue; margin-top:2rem">
                          Forgot Your Password?
                        </a>
                    </div>
                  </div>
                </form>

      <p class="mt-8">No account yet? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold"> &nbsp Create an
              account here.</a></p>

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

      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
      // Initialize Firebase
      var firebaseConfig = {
        apiKey: "AIzaSyCoROKp7nbcXqPP0YtA4fO3sPiVYVyi9pI",
        authDomain: "laravel-auth-9a60c.firebaseapp.com",
        projectId: "laravel-auth-9a60c",
        storageBucket: "laravel-auth-9a60c.appspot.com",
      messagingSenderId: "969104073456",
      appId: "1:969104073456:web:5a843163dbf96cb9fd1835"
      };
      firebase.initializeApp(config);
      var facebookProvider = new firebase.auth.FacebookAuthProvider();
      var googleProvider = new firebase.auth.GoogleAuthProvider();
      var facebookCallbackLink = '/login/facebook/callback';
      var googleCallbackLink = '/login/google/callback';
      async function socialSignin(provider) {
        var socialProvider = null;
        if (provider == "facebook") {
          socialProvider = facebookProvider;
          document.getElementById('social-login-form').action = facebookCallbackLink;
        } else if (provider == "google") {
          socialProvider = googleProvider;
          document.getElementById('social-login-form').action = googleCallbackLink;
        } else {
          return;
        }
        firebase.auth().signInWithPopup(socialProvider).then(function(result) {
          result.user.getIdToken().then(function(result) {
            document.getElementById('social-login-tokenId').value = result;
            document.getElementById('social-login-form').submit();
          });
        }).catch(function(error) {
          // do error handling
          console.log(error);
        });
      }
      </script>

 