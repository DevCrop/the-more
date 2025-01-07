<?php
    $servername = "localhost"; // 호스트 주소(localhost, 127.0.0.1)
    $dbname = "board";  // 데이터베이스 이름
    $user = "root"; // DB 사용자 이름
    $password = ""; // DB 비밀번호
    $port = '3306';

    
    try
    {
       // 서버 이름, 데이터베이스 이름, 사용자명과 비밀번호를 전달하여 새로운 PDO 객체를 생성
       $connect = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $user, $password);
       // 생성된 PDO 객체에 에러 모드(error mode)를 설정
       $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       //echo "Connection successful!"; // 연결 성공 메시지
    }
    catch(PDOException $ex)
    {
        echo "서버와의 연결 실패! : " . $ex->getMessage() . "<br>";
    }
?>