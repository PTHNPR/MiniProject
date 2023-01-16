<?session_start();?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>사이트이름</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css"/>
    <style>
    *{
      background-color: white;
 
    }
    body{
    }
    header {
      width: 100%;
      height: 100px;
    }
    nav {
      width: 100%;
      height: 23px;
      margin-right: 10%;
      background-color: grey;
      color: white;
    }
    nav a{
      background-color: grey;
      color: white;
      text-decoration: none;
    }
 
      #left{
        position: fixed;
        left: 30px;top: 200px;bottom: 0;
        width: 200px;
      }
      #left ul li{
        margin-left: 20px;
        padding-top: 5px;
        background-color: grey;
      }
      #left ul li a{
        background-color: grey;
        color: white;
        text-decoration: none;
      }
      #main{
        padding-left: 250px;
        padding-top: 20px;
        left: 250px;top: 200px;bottom: 0;
        width: 60%;
        height: 500px;
      }
    footer{
      background-image: url('images/footer_bg.gif');
      width: 100%;
      position: fixed;
      left: 0;top: 700px;bottom: 0;
      height: 50px;
      clear: both;
      text-align: center;
    }
      .f{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header align=center>
      <h1>
        <a href="index.php">사이트이름.</a>
      </h1>
    </header>
    <?
      if($_SESSION['userid']){
 
    echo "<nav align=right>
      <a target='iframe1' href='my_page.php'>전체</a>
      <a target='iframe1' href='my_page.php'>공지사항</a>
      <a target='iframe1' href='my_page.php'>자유</a>
      <a target='iframe1' href='my_page.php'>Study</a>

    </nav>";
 
    }
    else{
    ?>
    <nav align=right>
      <a href="login.php">Log in</a>
    </nav>
    <?
    }
    ?>
    <aside id="left">
      <h4></h4>
      <ul>
        <li><a target="iframe1" href="board.php?board_id=notice">전체</a></li>
        <li><a target="iframe1" href="board.php?board_id=board">공지사항</a></li>
 
        <li><a target="iframe1" href="board.php?board_id=music">자유</a></li>
        <li><a target="iframe1" href="board.php?board_id=movie">Study</a></li>
      </ul>
    </aside>
    <section id="main">
      <article id="article1">
        <iframe name="iframe1" src="main.php" width="1000px" height="700px" seamless></iframe>
      </article>
    </section>
  </body>
</html>