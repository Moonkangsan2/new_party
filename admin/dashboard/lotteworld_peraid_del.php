<?
    include "../../lotteworld_db.php";

    // $chk = "(".implode(",",$_POST['chk']).")";
    // $chk = implode(",",$_POST['chk']);
    $chk = $_POST['chk'];

    for($i=0;$i<sizeof($chk);$i++){
        $sql = "delete from lotteworld_peraid where idx = $chk[$i]";
        $query = $conn->query($sql);
    }
    // $sql = "delete from lotteworld_sale where idx in '".$chk."'";
    // $query = $conn->query($sql);
    // 배열을 통해 삭제함.
?>

<script>
    alert('삭제 되었습니다.');
    location.href="lotteworld_peraid.php";

</script>