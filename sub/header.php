<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>curves</title>
    <link rel="stylesheet" href="sub/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../tailwind/tailwind.css">
    <link rel="stylesheet" href="sub/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="sub/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="sub/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="sub/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="sub/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="sub/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="sub/assets/css/styles.css">
    <link rel="stylesheet" href="sub/css/style.css">
    <style media="screen">
      a { text-decoration: none;}
         #toggleBtn {
            color:#fff;
         }
         .navbar-brand {
            text-align: center; margin:0;
         }
         #asideMenu {
            width: 170px; height: 100vh;
            position: fixed; z-index: 999;
            left:-170px; background: #fff;
            transition: all .4s ease-in-out;
         }
         #asideMenuBg {
            position: fixed; z-index: 998;
            height: 100%;
            background: #111; opacity: .5;
            transition: all .4s ease-in-out;
         }
         .listShow {
            display: block;
            transform: translate(170px);
         }
         .closeMenu {
            width: 100%;
         }
         #asideMenu ul {padding: 1rem 0;}
         #asideMenu ul a {padding-left: 10px;}
         #asideMenu ul li:last-child {border-bottom: 1px solid #eee;}
         #asideMenu ul li {border-top: 1px solid #eee; padding:10px 14px; display: flex; justify-content: space-between;}
         .logo {
            padding:16px 24px 0; margin-bottom:0;position: relative;
            display: flex; justify-content: space-between; align-items: center;
         }
         .closeX {
            width:34px; height: 34px;
            border-radius: 50%;
            background: #371e92;
            position: absolute;
            top: 6px;
            right: -46px;
            font-size: 20px;
            opacity: .7;

            display: flex; justify-content: center; align-items: center;
         }
         #closeX {
            color: #fff;
         }
    </style>
</head>

<div id="asideMenu" style="font-size:14px;">
   <h1 class="logo" style="">
     <a href="appmain.php" style="color: #666"><i class="bi bi-house-fill"></i></a>
     <div class="">
       <a href="javascript:void(0)" style="color: #666; font-size:11px;">로그아웃</a>
       <a href="javascript:void(0)" style="color: #666"><i class="bi bi-person-circle"></i></a>
     </div>
     <a class="closeX" href="#" onclick="closeMenu()"><i id="closeX" class="bi bi bi-list"></i></a>
   </h1>
   <ul>
      <li><a href="index.php"> 캐어매니저 </a><span id="careBtn"><i class="fas fa-angle-right"></i></span></li>
      <li><a href="homet.php"> 커브스 홈트 </a><span id="hometBtn"> <i class="fas fa-angle-right"></i></span></li>
      <li><a href="#"> 칼로리계산기 </a></li>
      <li><a href="#"> 생리주기표 </a></li>
      <li><a href="#"> 커브스 상품 </a></li>
      <li><a href="#"> 커브스 TIP </a></li>
      <li><a href="#"> 이벤트 </a></li>
      <li><a href="#"> 가까운 클럽찾기 </a></li>
      <li><a href="#"> 마이 페이지 </a></li>
      <li><a href="#"> 설정 </a></li>
      <li><a href="#"> 모바일 홈페이지 </a></li>
      <li><a href="#"> 무료체험신청 </a></li>
   </ul>
   <ol id="asideMenuSub">
      <li><a href="index.php?id=coaching&title=코칭매니저">코칭매니저</a></li>
      <li><a href="index.php?id=myhistory&title=나의 건강기록">나의건강기록</a></li>
      <li><a href="index.php?id=calendar&title=다이어리">다이어리</a></li>
      <li><a href="index.php?id=myclub&title=마이클럽">마이클럽</a></li>
      <li><a href="index.php?id=myfood&title=식단 칼로리">식단칼로리</a></li>
      <li class="xBtnWrap"><a href="javascript:void(0)" onclick="closeMenu()" class="xBtn"><i class="fas fa-times"></i></a></li>
      <style media="screen">
        .xBtnWrap {
        }
        .xBtn {
          position: absolute;
          top: 16px; right: 16px;
        }
        .xBtn > i {font-size: 16px;}
      </style>

   </ol>
   <ol id="asideMenuSub2">
      <li><a href="#">&nbsp</a></li>
      <li><a href="homet.php?id=main&title=홈트메뉴1">홈트메뉴1</a></li>
      <li><a href="homet.php?id=main&title=홈트메뉴2">홈트메뉴2</a></li>
      <li><a href="homet.php?id=main&title=홈트메뉴3">홈트메뉴3</a></li>
      <li><a href="homet.php?id=main&title=홈트메뉴4">홈트메뉴4</a></li>
      <li><a href="homet.php?id=main&title=홈트메뉴5">홈트메뉴5</a></li>
      <li class="xBtnWrap"><a href="javascript:void(0)" onclick="closeMenu()" class="xBtn"><i class="fas fa-times"></i></a></li>
   </ol>
</div>
<style media="screen">
   #asideMenuSub {
      position: absolute;
      top: 0; left: 170px;
      width: 120px; height: 100%;
      background: #E9E3EF;
   }
   #asideMenuSub > li:first-child {margin-top: 56px;}
   #asideMenuSub > li {
      font-size: 14px;
      padding: 10px 14px;
      border-top: 1px solid #DBCEE9;
   }
   #asideMenuSub2 {
      position: absolute;
      top: 0; left: 170px;
      width: 120px; height: 100%;
      background: #E9E3EF;
   }
   #asideMenuSub2 > li:first-child {margin-top: 56px; border-top: none;}
   #asideMenuSub2 > li {
      font-size: 14px;
      padding: 10px 14px;
      border-top: 1px solid #DBCEE9;
   }
</style>
<div id="asideMenuBg" onclick="closeMenu()"></div>

<script>
  function toggleMenu() {
     document.getElementById('asideMenuBg').classList.toggle('closeMenu');
     document.getElementById('asideMenu').classList.toggle('listShow');
  }
  function closeMenu() {
     document.getElementById('asideMenuBg').classList.toggle('closeMenu');
     document.getElementById('asideMenu').classList.toggle('listShow');
     document.getElementById('asideMenuSub').style.display='none';
     document.getElementById('asideMenuSub2').style.display='none';
  }

  document.getElementById('asideMenuSub').style.display="none";
  document.getElementById('asideMenuSub2').style.display="none";
  document.getElementById('careBtn').addEventListener('click', function(e){
     e.preventDefault();
     document.getElementById('asideMenuSub').style.display="block";
     document.getElementById('asideMenuSub2').style.display="none";
  });

  document.getElementById('hometBtn').addEventListener('click', function(e){
     e.preventDefault();
     document.getElementById('asideMenuSub').style.display="none";
     document.getElementById('asideMenuSub2').style.display="block";
  });
</script>

<!-- 케어매니저 -->
<body style="background: #f9f9f9;">
    <nav class="navbar navbar-dark" style="background: #371e92;max-width: 640px;margin: 0 auto;">
        <div class="container-fluid">
           <a href="#" id=toggleBtn onclick="toggleMenu()"><i style="font-size:24px;padding: 0 6px;visibility:hidden;" class="bi bi bi-list"></i></a>
          <a class="navbar-brand text-white" href="index.php" style="font-size: 16px;color: #fff;opacity: 1;">
            <?php
              if(isset($_GET['title'])) {
                echo $_GET['title'];
              } else {
                echo 'Care Manager';
              }
             ?>
          </a>
          <button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1" style="border-style: none;padding: 4px 6px; border-radius: 6px;">
            <span class="text-white sr-only ">Toggle navigation</span>
            <span><i class="bi bi-chevron-down"></i></span>
          </button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white" style="text-align: center;">
                    <li class="nav-item"><a class="nav-link active" href="index.php?id=coaching&title=코칭매니저" style="color: #fff;font-size: 14px;">코칭매니저</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?id=myhistory&title=나의 건강기록" style="color: #fff;font-size: 14px;">나의 건강기록<br></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?id=calendar&title=다이어리" style="color: #fff;font-size: 14px;">다이어리</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?id=myclub&title=마이클럽" style="color: #fff;font-size: 14px;">마이클럽<br></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?id=myfood&title=식단 칼로리" style="color: #fff;font-size: 14px;">식단 칼로리<br></a></li>
                </ul>
          </div>
        </div>
    </nav>
    <div class="container-fluid" style="padding: 0px;max-width: 640px;background: #fff;">
        <div id="mainBgImg"><img src="sub/assets/img/wave.png" style="width: 100%;"></div>
