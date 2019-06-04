<?php
include "./common/session.php";
include "./connect.php";
$id = $_POST['userId'];
$pw = $_POST['userPw'];
function goSignInPage($alert){
  echo $alert.'<br>';
  echo "<a href='./index.php'>메인페이지로 이동</a>";
  return;
}
//유효성 검사
//이메일 검사
if($id == null || $id == '') {
goSignInPage('아이디를 입력해 주세요.');
exit;
}
//비밀번호 검사
if($pw == null || $pw == '') {
goSignInPage('비밀번호를 입력해 주세요.');
exit;
}
$pw = sha1('php200'.$pw); // 암호화 하기
$sql = "SELECT id FROM membership ";
$sql .= "WHERE id = '{$id}' AND password = '{$pw}'";
$result = $mysqli->query($sql);
if($result){
if($result->num_rows == 0){
goSignInPage('로그인 정보가 일치하지 않습니다.');
exit;
} else {
$memberInfo = $result->fetch_array(MYSQLI_ASSOC);

$_SESSION['id'] = $id;
Header("Location:../index.php");
}
}
?>
