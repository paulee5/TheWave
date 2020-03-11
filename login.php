<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<hgroup>
  <h1>The Wave</h1>
  <h3>Join Us Today</h3>
</hgroup>
<form>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Name</label>
  </div>
  <div class="group">
    <input type="email"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <button type="button" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer><a href="index.php" target="_blank"><img src="img/Logo3.png"></a>
  <p>Don't have an account with us? <a href="signup.php" target="_blank">Click here!</a></p>
</footer>






<script>
  $(window, document, undefined).ready(function() {

$('input').blur(function() {
  var $this = $(this);
  if ($this.val())
    $this.addClass('used');
  else
    $this.removeClass('used');
});

var $ripples = $('.ripples');

$ripples.on('click.Ripples', function(e) {

  var $this = $(this);
  var $offset = $this.parent().offset();
  var $circle = $this.find('.ripplesCircle');

  var x = e.pageX - $offset.left;
  var y = e.pageY - $offset.top;

  $circle.css({
    top: y + 'px',
    left: x + 'px'
  });

  $this.addClass('is-active');

});

$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  $(this).removeClass('is-active');
});

});
</script>
</body>
</html>