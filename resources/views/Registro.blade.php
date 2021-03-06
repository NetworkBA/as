<html lang="{{ app()->getLocale() }}">

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700&display=swap" rel="stylesheet">
	<title>Mente Cuatro Cero</title>
</head>

<body>
	<div id="app" class="content">
		<!-- commentario -->
		<header-component></header-component>
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
									<div class="card-header"></div>

		                <div class="card-body">
		                    <form method="POST" action="{{ route('register') }}">
		                        @csrf

		                        <div class="form-group row">
		                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

		                            <div class="col-md-6">
		                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

		                                @error('name')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

		                            <div class="col-md-6">
		                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

		                                @error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

		                            <div class="col-md-6">
		                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
		                            </div>
		                        </div>

		                        <div class="form-group row mb-0">
		                            <div class="col-md-6 offset-md-4">
		                                <button type="submit" class="btn btn-primary">
		                                    {{ __('Registrar') }}
		                                </button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<footer-component></footer-component>
	</div>
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
	<script src="{{asset('js/app.js')}}"></script>
	<!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


</body>

</html>
