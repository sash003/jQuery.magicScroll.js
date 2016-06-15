<?php
  header ("Content-Type:text/html;charset=UTF8", false);
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Cache-Control: post-check=0,pre-check=0", false);
  header("Cache-Control: max-age=0", false);
  header("Pragma: no-cache");
?>
<!DOCTYPE HTML>
<html>

<head>

  <title>magicScroll</title>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/magic.css" rel="stylesheet" />
  <link href="css/animate.css" rel="stylesheet" />
<link href="css/onepage-scroll.css" rel="stylesheet" />
  
  <style>

  body{
  	background: #10283d;
  }

  *{
    margin: 0;
    padding : 0;
    position: relative;
    box-sizing: border-box;
  }
  .lightBox, .post{
    height:100%;
    cursor: pointer;
  }
  .wrap{
    margin: auto;
    margin-top: 11%;
    height: 50%;
    display: block;
    text-align: center;
  }
  @media screen and (max-width: 600px) { 
    h1{
      font-size: 13px;
    }
  }
  h1{
    margin: auto;
    padding: 11px;
    margin-bottom: 33px;
    color: white;
    font-weight: bold;
  }
  </style>
</head>

<body>

  <div class="post2">

    <?php
      
      $imgs = glob('img/*');

      foreach($imgs as $key=>$img) {
        if (preg_match('/\.(jpg|png|gif)$/', $img)) {
          echo "<section>
                <div class='wrap' id='$key'>
                <h1 class='text$key'>jQuery.magicScroll.js
</h1>
                <img style='' class='post' src='$img'>
                </div>
                </section>";
        }
      }

    ?>
    
    <section>
      <div style="color: white; font-size: 17px;white-space: pre-wrap; ">
        Коли Кляпавція запросили бути ректором університету, Трурль залишився вдома, бо йому була осоружна будь-яка, зокрема й університетська, дисципліна. Отож, допечений до живого самотністю, він змайстрував собі зграбну цифрову машинку, таку кмітливу, аж він плекав надію, що матиме наступника і спадкоємця. Щоправда, всяко між ними бувало, і залежно від настрою, а також від успіхів у навчанні Трурль називав машиненятко коли Цифранеком, Цифранусем, Цифраненятком, а інколи — Цифраниськом. Певний час він грав із ним у шахи, аж поки воно почало ставити йому мат за матом. А коли машиненятко на міжзірковому турнірі перемогло в сеансі одночасної гри сто майстрів, поставивши їм гектомата, Трурль перелякався наслідків однобокого виховання і, щоб розвинути в Цифраньові духовні нахили, доручив йому вивчати поперемінно хімію і музику, і пополудні вони удвох бавилися невинними іграми на зразок знаходження рим до вибраних слів. Це, власне, вони й робили одного разу. Гріло сонечко, в майстерні було тихо, стрекотали реле, й чути було тільки римування у два голоси.

— Безодню? — мовив Трурль.
— Сірководню.
— Геннадій?
— Ванадій.
— Чебрець?
— Вуглець.

— Якого це лиха сама хімія та хімія! — напався Трурль. — Ти що, не можеш нічого іншого придумати?
Досить уже хімії! — розгнівався Трурль, бачачи, що так може тривати без кінця й краю.
 Досить на сьогодні цієї забави. Візьмімося тепер до вищого мистецтва, а саме — до філософії, бо філософія — то королева всіх наук і як така стосується абсолютно всього. Спитай мене про щось, а я дам тобі дві відповіді, — одну звичайну, а другу — філософську!
— Чи білило це побілене чорнило? — спитало машиненятко.
Трурль чмихнув і сказав:
— Ні, йдеться не про такі запитання — це стосується тільки словника…
— Але ж ти тільки що сказав, що філософія стосується абсолютно всього, — затявся Цифранек.
— Спитай у мене про щось інше, коли тобі так кажуть!
— Чому добрий злодій не те саме, що злий добродій?
— Звідки ти береш такі ідіотські запитання? — напався на нього Трурль. — Ну, гаразд. Зрозуміло, ти ще не маєш досвіду. Чи ти знаєш, чого тобі хочеться?
— Трохи погиркатися.
      </div>
    </section>
    
  </div>
 
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.textillate.js"></script>
  <script src="js/jquery.onepage-scroll.js"></script>
  <script src="js/script.js"></script>

</body>

</html>