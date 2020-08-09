<!DOCTYPE html>
<html>

<head>
  <title>Manage Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	.form-box{
  		padding: 33px;
  		background-color: #eee;
  		border-radius: 25px;
  	}
  	.container-box{
  		margin-top: 15vh;
  	}
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="#">Task Manager</a>
  </nav>
    <section class="container container-box">
      <section class="row justify-content-center">
      	<section class="col-sm-9 col-md-8 col-lg-6">
        <form action="/action_page.php" class="form-box">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name=mailid>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name=password>
          </div>
          <div class="form-group">
            <label for="pwd">Repeat Password:</label>
            <input type="password" class="form-control" placeholder="Re-enter password" id="pwd" name=password-repeat>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="login.php">login</a>
        </form>
        </section>
      </section>
    </section>

</body>

</html>