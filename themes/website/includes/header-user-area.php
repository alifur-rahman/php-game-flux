<div class="row">
  <div
    class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
    data-aos="fade-up"
    data-aos-delay="200"
  >
    <div class="login-panel mx-auto">
      <img src="img/logo.png" alt="" class="img-fluid users-area-logo" />
      <p class="text-white text-center users-heading">USERS AREA</p>
      <form
        action="/?module=account&amp;action=login&amp;return_url="
        method="post"
      >
        <input type="hidden" name="server" value="AlfheimRO" />
        <div class="login_row_main">
          <div class="login_row">
            <table>
              <tr>
                <td>
                  <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    class="textClass"
                    id="username"
                  />
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="textClass"
                    id="password"
                  />
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="checkbox"
                    value="lsRememberMe"
                    id="rememberMe"
                  /><label for="rememberMe" class="text-white"
                    >Remember me</label
                  >
                </td>
              </tr>
            </table>
          </div>
          <div class="login_btn">
            <input type="submit" value="LOGIN" class="loginBtn" /><br />
          </div>
          <div style="height: 5px"></div>
        </div>
        <div class="accountAction">
          Don't have an account?
          <a href="/?module=account&amp;action=create">Register Now!</a>
        </div>
      </form>
    </div>
  </div>
</div>
