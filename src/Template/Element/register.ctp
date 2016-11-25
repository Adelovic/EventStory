
<form class="well form-horizontal" method="post" action="/Users/add">
	<h3>Inscription</h3><hr>
	<div class="form-group">
		<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			    <input id="last_name" name="last_name" placeholder="Nom" class="form-control" type="text">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			    <input id="first_name" name="first_name" placeholder="Prénom" class="form-control" type="text">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			    <input id="birth" name="birth" placeholder="Date de naissance" class="form-control" type="date">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			    <input id="email" name="email" placeholder="Adresse électronique" class="form-control" type="email">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    <input id="password" name="password" placeholder="Mot de passe" class="form-control" type="password">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    <input id="password_c" name="password_c" placeholder="Confirmation mot de passe" class="form-control" type="password">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-12">
			<button id="register-button" type="submit" class="btn btn-block btn-primary">Inscription</button>
		</div>
	</div>
</form>
