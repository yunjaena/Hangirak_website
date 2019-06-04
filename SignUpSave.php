<?php
include "./common/session.php";
include "./connect.php";
$id = $_POST['id'];
$pw = $_POST['password'];
$sex = $_POST['sex'];
$allergy = $_POST['allergy'];
$post_num =$_POST['post_num'];
$name = $_POST['name'];
$address = $_POST['address'];
$tel = $_POST["tel"];
$age = $_POST['age'];

function goSignUpPage($alert){
echo $alert.'<br>';
echo "<a href='./Sign_Up.php'>회원가입폼으로 이동</a>";
return;
}
//유효성 검사
//한글로 구성되어있는지 정규식 검사
//비밀번호 검사
if($pw == null || $pw == ''){
goSignUpPage('비밀번호를 입력해 주세요.');
exit;
}
$pw = sha1('php200'.$pw); // 함호화 하기

//이메일 중복 검사
$isIdCheck = false;
$sql = "SELECT id FROM membership WHERE id = '{$id}'";
$result = $mysqli->query($sql);
if( $result ) {
$count = $result->num_rows;
if($count == 0){
$isIdCheck = true;
} else {
echo "이미 존재하는 아이디 입니다. ";
goSignUpPage();
exit;
}
} else {
echo "에러발생 : 관리자 문의 요망";
exit;
}
//닉네임 중복 검사
if ($isIdCheck == true ) {
$sql = "INSERT INTO membership(member_num,id,password, sex, allergy, name, post_num,address,tel,age)";
$sql .= "VALUES(NULL,'{$id}','{$pw}','{$sex}','{$allergy}','{$name}','{$post_num}','{$address}',";
$sql .= "'{$tel}','{$age}')";
echo $sql;
$result = $mysqli->query($sql);
if ($result) {
$_SESSION['id'] = $mysqli->insert_id;

Header("Location:../index.php");
} else {
echo '회원가입 실패 - 관리자에게 문의';
exit;
}
} else {
goSignUpPage('아이디가 중복되었습니다.');
exit;
}
?>
