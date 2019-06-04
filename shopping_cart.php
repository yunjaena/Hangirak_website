
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
  <a class="navbar-brand" href="#">한기락</a>
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" id="bannerimg">
  <h1>한기락</h1>
  <p>한기대 학생들을 위한 맞춤형 도시락 배달 서비스</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
  <!--로그인-->
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
           <form role="form">
             <div class="form-group">
               <label for="usrname"><span class="glyphicon glyphicon-user"></span> 사용자</label>
               <input type="text" class="form-control" id="usrname" placeholder="아이디를 입력해주세요">
             </div>
             <div class="form-group">
               <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>비밀번호</label>
               <input type="text" class="form-control" id="psw" placeholder="비밀번호를 입력해주세요">
             </div>
             <div class="checkbox">
               <label><input type="checkbox" value="" checked>아이디 기억 </label>
             </div>
               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> 로그인</button>
           </form>
         </div>
         <div class="modal-footer">
           <p class="mr-auto" >회원이 아니신가요?<a href="sign_in.php">회원가입</a></p>
           <p>비밀번호를<a href="#">잃어버리셨나요?</a></p>
         </div>
           <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
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
</nav>

<div class="container" style="margin-top:30px">
  <br>
  <br>
  <h2>장바구니<br><br></h2>


  <div class="card">
  <table class="table table-hover shopping-cart-wrap">
  <thead class="text-muted">
  <tr>
    <th scope="col">제품</th>
    <th scope="col" width="120">갯수</th>
    <th scope="col" width="120">가격</th>
    <th scope="col" width="200" class="text-right"></th>
  </tr>
  </thead>
  <tbody>
  <tr>
  	<td>
      <?php

      for($i = 0 ; $i < 10 ; $i++){
      echo '<figure class="media">';
      echo'	<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div> 						';
    echo'	<figcaption class="media-body">																														';
    echo'		<h6 class="title text-truncate">Product name goes here </h6>																					';
    echo'		<dl class="param param-inline small">																											';
    echo'		  <dt>Size: </dt>																																';
    echo'		  <dd>XXL</dd>																																	';
    echo'		</dl>																																			';
    echo'		<dl class="param param-inline small">																											';
    echo'		  <dt>Color: </dt>																																';
    echo'		  <dd>Orange color</dd>																															';
    echo'		</dl>																																			';
    echo'	</figcaption>																																		';
    echo'</figure>																																				';
    echo'	</td>																																				';
    echo'	<td>																																				';
    echo'		<select class="form-control">																													';
    echo'			<option>1</option>																															';
    echo'			<option>2</option>																															';
    echo'			<option>3</option>																															';
    echo'			<option>4</option>																															';
    echo'		</select>																																		';
    echo'	</td>																																				';
    echo'	<td>																																				';
    echo'		<div class="price-wrap">																														';
    echo'			<var class="price">USD 145</var>																											';
    echo'			<small class="text-muted">(USD5 each)</small>																								';
    echo'		</div> <!-- price-wrap .// -->																													';
    echo'	</td>																																				';
    echo'	<td class="text-right">																																';
    echo'	<a href="" class="btn btn-outline-danger"> × Remove</a>';
    echo'	</td>';
    echo'</tr>';
    echo'<tr>';
    echo'	<td>';
  }
      ?>

  </tbody>
  </table>
  </div> <!-- card.// -->
  <br><br>
	   <a href="" class="btn btn-outline-success" style= " float: right">구  매</a>
  </div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
.param {
    margin-bottom: 7px;
    line-height: 1.4;
}
.param-inline dt {
    display: inline-block;
}
.param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
}
.param-inline dd {
    vertical-align: baseline;
    display: inline-block;
}

.param dd {
    margin: 0;
    vertical-align: baseline;
}

.shopping-cart-wrap .price {
    color: #007bff;
    font-size: 18px;
    font-weight: bold;
    margin-right: 5px;
    display: block;
}
var {
    font-style: normal;
}

.media img {
    margin-right: 1rem;
}
.img-sm {
    width: 90px;
    max-height: 75px;
    object-fit: cover;
}
</style>


<br><br>
</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>COPYRIGHT ⓒ 2019 BY Adventure ALL RIGHTS RESERVED.  </p>
</div>

</body>
</html>
