<!-- Header -->
<?php include('includes/header.php'); ?>
<script type="text/javascript" src="js/form.js"></script>
<script>
$(document)
  .ready(function() {
    $('.ui.form')
      .form({
        fields: {
          email: {
            identifier  : 'email',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your e-mail'
              },
              {
                type   : 'email',
                prompt : 'Please enter a valid e-mail'
              }
            ]
          },
          password: {
            identifier  : 'password',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your password'
              },
              {
                type   : 'length[6]',
                prompt : 'Your password must be at least 6 characters'
              }
            ]
          }
        }
      })
    ;
  })
;
</script>

<div class="ui middle aligned center aligned grid">
<div class="column">
  <h2 class="ui image header">
    <div class="content">
      <img src="assets/ossana_logo.png" alt="ossana_logo" width="240px">
    </div>
  </h2>

  <form action="" method="POST" class="ui large form">
    <div class="ui stacked secondary  segment">
      <div class="field">
        <div class="ui left icon input">
          <i class="user icon"></i>
          <input type="text" name="email" placeholder="E-mail address">
        </div>
      </div>
      <div class="field">
        <div class="ui left icon input">
          <i class="lock icon"></i>
          <input type="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="ui fluid large teal submit button">Login</div>
    </div>

    <div class="ui error message"></div>
  </form>

  <div class="ui message">
    New Administrator? <a href="#">Create your Account</a>
  </div>
</div>
</div>



<!-- Footer -->
<?php include('includes/footer.php'); ?>
