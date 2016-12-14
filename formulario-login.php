<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">AKA Store</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="login.php">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email"  placeholder="E-mail" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Senha</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="senha"  placeholder="Senha" required=""/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
						<div class="login-register">
				            <a href="create_account.php">Create account</a> or <a href="reset_password.php">reset password</a>
				         </div>
					</form>
				</div>
			</div>
		</div>
