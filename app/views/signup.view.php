<h1>Signup page view</h1>

<form method="post">
  <input value="<?=old_value('username')?>" name="username"><br>
  <div><?=$user->getError('username')?></div><br>
  
  <input value="<?=old_value('email')?>" name="email"><br>
  <div><?=$user->getError('email')?></div><br>
  
  <input value="<?=old_value('password')?>" name="password"><br>
  <div><?=$user->getError('password')?></div><br>
  <button type="submit">signup</button>

</form>