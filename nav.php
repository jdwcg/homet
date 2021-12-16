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
         visibility: hidden;
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
      <li><a href="index.php?id=coaching&title=코칭매니저">일일운동</a></li>
      <li><a href="index.php?id=myhistory&title=나의 건강기록">나의건강기록</a></li>
      <li><a href="index.php?id=calendar&title=다이어리">다이어리</a></li>
      <li><a href="index.php?id=myclub&title=마이클럽">마이클럽</a></li>
      <li><a href="index.php?id=myfood&title=식단 칼로리">식단칼로리</a></li>
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
