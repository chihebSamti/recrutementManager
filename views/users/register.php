<div class="forms-container">
  <div class="signin-signup">
    <form action="#" method="post" class="sign-in-form">
      <h2 class="title">Sign up</h2>
      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" id="newUsername" name="username" placeholder="Username" required/>
      </div>
      <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" id="newEmail" name="email" placeholder="Email" required/>
      </div>
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input class="password-field" type="password" id="newPassword" name="password" placeholder="Password" required/>
      </div>
      <input type="submit" class="btn" value="Sign up" />
      <p class="social-text">Or Sign up with social platforms</p>
      <div class="social-media">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </form>
  </div>
</div>

<div class="panels-container">
  <form id="login-link"action=<?= URL.'/users/login' ?>>
  <div class="panel left-panel">
    <div class="content">
      <h3>One of us ?</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
        laboriosam ad deleniti.
      </p>
      <button form="login-link" type="submit" class="btn transparent" id="sign-in-btn">
      Sign in
      </button>
    </div>
    <img src="<?=IMG?>/login/undraw_performance_overview_re_mqrq.svg" class="image" style="margin-top:10px;" alt="" />
  </div>
</div>