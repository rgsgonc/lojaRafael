<div class="container">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >

      <div class="panel-heading">
        <div class="panel-title">Login</div>
      </div>

      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          <form id="loginform" class="form-horizontal" role="form" action="login.php" method="post">
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="E-mail">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="senha" placeholder="Senha">
            </div>

            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 controls">
                 <td><button class="btn btn-primary">Logar</button></td>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
