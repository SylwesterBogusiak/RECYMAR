
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
<h1>Login page view</h1>




<form method="post">
  <p>User name:</p>
  <input value="<?=old_value('username')?>" name="username" placeholder="User name" required><br>
  <div><?=$user->getError('username')?></div>
  
  <p>Email:</p>
  <input value="<?=old_value('email')?>" name="email" placeholder="Email" required><br>
  <div><?=$user->getError('email')?></div>
  
  <p>Password:</p>
  <input value="<?=old_value('password')?>" name="password" placeholder="Password" required><br>
  <div><?=$user->getError('password')?></div><br>
  <button type="submit">login</button>

</form>

</div>