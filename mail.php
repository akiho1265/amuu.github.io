<!DECORATIVE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akiho's portforio</title>
  <link rel="stylesheet" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
 
<body>
 <header>
    <div class="header-logo">ð¸MY PORTFOLIOð¸</div>
    <div class="header-menu">
      <a href="#profiel" class="message">ð¸ãã­ãã£ã¼ã«</a>
       <a href="#portforio" class="portforio">ðportforio</a>
       <a href="#message" class="message">ð©ãä»äºä¾é ¼ã»ãååã</a>
     </div>
    </div>
 </header>

 <div class="main">
    <div class="thanks-message">ãåãåããããã ããããã¨ããããã¾ãã</div>
    <div class="display-contact">
      <div class="form-title">å¥ååå®¹</div>

      <div class="form-item">â  åå</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">é£çµ¡å</div>
      <?php echo $_POST['mail']; ?>

      <div class="form-item">â  ãåãåããã®ç¨®é¡</div>
      <?php echo $_POST['category'] ?>

      <div class="form-item">â  åå®¹</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

 <footer>
  <div class="header-logo">thank you for comming</div>
    <div class="header-menu">
    <a href="#profiel" class="message">ð¸ãã­ãã£ã¼ã«</a>
     <a href="#portforio" class="portforio">ðportforio</a>
     <a href="#message" class="message">ð©ãä»äºä¾é ¼ã»ãååã</a>
   </div>
  </div>
 </footer>
  <script src="script.js"></script> 
</body>
