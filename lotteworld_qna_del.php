<?php

include "lotteworld_db.php";

$idx = $_POST['delno'];

$sql = "delete from lotteworld_qna where idx  = '".$idx."'";
$query = $conn->query($sql);

?>

<script>
    alert('역병을ㅋㅋㅋ 준비하랔ㅋㅋㅋㅋ');
    location.href="lotteworld_mypage.php";
</script>