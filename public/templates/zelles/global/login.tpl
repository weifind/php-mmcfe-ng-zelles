<div style="padding: 10px;">
   <b>Login</b>
   <form action="{$smarty.server.PHP_SELF}?page=login" method="post" id="loginForm">
      <p align="center"><input type="text" name="username" value="" id="userForm" maxlength="20" required></p>
      <p align="center"><input type="password" name="password" value="" id="passForm" maxlength="20" required></p>
      <p align="right"><input type="submit" class="button" value="Login"></p>
   </form>
   <p align="center"><a href="{$smarty.server.PHP_SELF}?page=password"><font size="1">Forgot your password?</font></a></p>
</div>