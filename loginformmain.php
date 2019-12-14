<form role="form" method="POST" action="controller/logincontroller.php">
        <div class="form-group">
          <label for="inputUsernameEmail">Username or email</label>
          <input type="text" class="form-control" name="username" placeholder="Admin" required>
        </div>
        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Admin" required>
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
      </form>
    