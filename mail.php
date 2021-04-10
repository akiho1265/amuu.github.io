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
    <div class="header-logo">🌸MY PORTFOLIO🌸</div>
    <div class="header-menu">
      <a href="#profiel" class="message">🌸プロフィール</a>
       <a href="#portforio" class="portforio">📚portforio</a>
       <a href="#message" class="message">📩お仕事依頼・お問合せ</a>
     </div>
    </div>
 </header>

 <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">連絡先</div>
      <?php echo $_POST['mail']; ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <?php echo $_POST['category'] ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

 <footer>
  <div class="header-logo">thank you for comming</div>
    <div class="header-menu">
    <a href="#profiel" class="message">🌸プロフィール</a>
     <a href="#portforio" class="portforio">📚portforio</a>
     <a href="#message" class="message">📩お仕事依頼・お問合せ</a>
   </div>
  </div>
 </footer>
  <script src="script.js"></script> 
</body>
