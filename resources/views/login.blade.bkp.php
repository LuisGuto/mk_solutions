<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
  <div class="row justify-content-center">
  	<div class="col-md-4 pt-5">
		<div class="card card-flat">
			<div class="card-header text-center">
				<a href="/">
				    <img class="block-center rounded" src="/img/logo.png" alt="Image">
				</a>
				<div class="mt-2">
				    <span class="brand-span">Login</span>
				</div>
			</div>
			<div class="card-body">
				<p class="text-center py-2">Acesse:</p>
				<form class="mb-3" id="loginForm" method="POST" action="{{ route('login') }}">
				    @csrf
				    <div class="row mb-3">
						<div class="col-md-12">
						    <input class="form-control border-right-0" name="email" type="email" placeholder="E-mail" required="true" autofocus>
						</div>
				    </div>
				    <div class="row mb-3">
						<div class="col-md-12">
						    <input class="form-control border-right-0" name="password" type="password" placeholder="Senha" required="true">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<div class="clearfix">
								<div class="checkbox c-checkbox float-left mt-0">
									<label>
										<input type="checkbox" value="true" name="remember">
										<span class="fa fa-check"></span> Lembre-me
									</label>
								</div>
							</div>
						</div>
					</div>
				    <hr/>
				    <div class="row mb-3">
						<div class="col-md-12">
				    		<button class="btn btn-block btn-primary mt-3 w-100" type="submit">Login</button>
				    	</div>
				    </div>
				</form>
			</div>
		</div>
	</div>
  </div>
</div>
