<?php
include "./common/session.php";

 ?>
<!DOCTYPE html>
<html lang="kr">
<head>

  <title>한기락-한기대생을 위한 도시락</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  #bannerimg{
  background-image: url("img/picnic.jpg");
  background-size: cover;
  color: white;
  }
  .bg-orange{
    background-color: #ffb900;

  }
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  margin-bottom: 15px;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.thumb { display: block; overflow: hidden; height: 300px; width: 300px; }
.thumb img { display: block; /* Otherwise it keeps some space around baseline */ min-width: 100%; /* Scale up to fill container width */ min-height: 100%; /* Scale up to fill container height */ -ms-interpolation-mode: bicubic; /* Scaled images look a bit better in IE now */ }


  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" id="bannerimg">
  <h1>한기락</h1>
  <p>한기대 학생들을 위한 맞춤형 도시락 배달 서비스</p>

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="./index.php">한기락</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">소개</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./dosirak.php">도시락</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">후기</a>
      </li>
    </ul>
  </div>
  <!--로그인-->
  <?php if(!isset($_SESSION['id'])){
    ?>
  <button type="button" class="btn btn-default btn-lg" id="myBtn">로그인</button>
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
            <h4><span class="glyphicon glyphicon-lock"></span> 로그인</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form method ="post" action= "./signInProcessing.php">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> 사용자</label>
                <input type="text" class="form-control" name="userId" placeholder="아이디를 입력해주세요" required>
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>비밀번호</label>
                <input type="password" class="form-control" name="userPw" placeholder="비밀번호를 입력해주세요" required>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>아이디 기억 </label>
              </div>
                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> 로그인</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p >회원이 아니신가요?<a href="./Sign_Up.php">회원가입</a></p>
            <p>비밀번호를<a href="#">잃어버리셨나요?</a></p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
  $(document).ready(function(){
    $("#myBtn").click(function(){
      $("#myModal").modal();
    });
  });
  </script>
<!--로그인 끝-->
<?php
}else{?>
<!-- 작성-->
<button type="button" class="btn btn-default btn-lg" id="myBtn" onclick="location.href='./shopping_cart.php'" >장바구니</button>

<button type="button" class="btn btn-default btn-lg" id="logoutBtn" onclick="location.href='LogOut.php'">로그아웃</button>
<script laguage = "javascript">

</script>


<?php
}
  ?>
</nav>

<div class="container" style="margin-top:30px">

  <!-- <div class="toast" data-autohide="false">
<div class="toast-header">
<div class="row  col-sm-12">
<div class="col-sm-8"><strong class="mr-auto text-primary ">Toast Header</strong></div>
<div class="col-sm-4">  <button type="button" class="close" data-dismiss="toast" id="toast">&times;</button></div>
</div>

</div>
<div class="row">
<div class="toast-body col-sm col-sm-12">
Some text inside the toast body
</div>
</div>
</div>
<script>
$(document).ready(function(){
$("#toast").click(function(){
$('.toast').toast('show');
});
});
</script> -->
<?php
$connect = mysqli_connect("localhost","root","123456");
$db_con = mysqli_select_db($connect,"hangirak_db");
$sql = "select * from menu";
$result = mysqli_query($connect,$sql);
$number = 0;

while($row = mysqli_fetch_array($result)){
  if($number%3 ==0){
echo '<div class="row">';
}
      echo '<div class="col-sm">';
        echo '<div class="card">';
        printf('<img class = "thumb" src="%s" alt="%s" />',$row['img'],$row['img'],$row['menu_name']);
        // echo '<img src="';
        //  echo '$row['img']"';
        //  echo ' alt="Denim Jeans" style="width:100%">';
          echo '<h1>';
          echo $row['menu_name'];
        echo '</h1>';
            echo '<p class="price">';
            echo $row['price'];
            echo '</p>';
            echo '<p>';
            echo $row['simple_explain'];
            echo '</p>';
          echo '<p><button>Add to Cart</button></p>';?>

          <?php

      echo '  </div>';
      echo '</div>';
      echo "<br><br>";
        $number++;
        if($number%3 ==0){
    echo '</div>';
  }

  }
 ?>
        </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
