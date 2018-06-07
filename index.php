<?php
  require "vendor/autoload.php";

  /**
   * Testa o uso do .env
   * 
  $dotenv = new Dotenv\Dotenv(__DIR__);
  $dotenv->load();

  $s3_bucket = getenv('S3_BUCKET');

  echo $s3_bucket;
  */

  /**
   * Google ReCAPTCHA
   *

  $siteKey = '6LetuF0UAAAAAFmGdhb_WE1n2b77lmxI5N32mm9S';
  $secret = '6LetuF0UAAAAAHfpTFsiBRGLPVPJUQg_5W_medHl';
  $lang = 'pt-BR';
  ?>

  <html>
    <head>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script>
       function YourOnSubmitFn(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
    </head>
    <body>
      <form action="/" method="post" id="demo-form">
      <button
        class="g-recaptcha"
        data-sitekey=<?php echo $siteKey; ?>
        data-callback="YourOnSubmitFn">
          Submit
      </button>
      </form>
    </body>
  </html>

  <?php
    if (isset($_POST['g-recaptcha-response'])) {
      echo "Captch submitado <br/>";

      $recaptcha = new \ReCaptcha\ReCaptcha($secret);
      $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

      if ($resp->isSuccess()) {
        echo 'Captch válido';
      } else {
        echo 'Captch inválido';
      }
    }
    else {
      echo 'Captcha não submitado <br/>';
    }
  ?>
  */
  echo 'oi';
