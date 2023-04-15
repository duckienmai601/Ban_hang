<?php 
	$conn = new mysqli("localhost", "root", "", "ban_hang");
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$tv = "SELECT id, ten, loai_menu FROM menu_ngang ORDER BY id";
	$tv_1 = $conn->query($tv);
	
	echo "<div class='menu_ngang'>";
	echo "<a href='index.php'>Trang chủ</a>";
	while ($tv_2 = $tv_1->fetch_assoc()) {
		if ($tv_2['loai_menu'] == "") {
			$link_menu = "?thamso=xuat_mot_tin&id=" . $tv_2['id'];
		}
		if ($tv_2['loai_menu'] == "san_pham") {
			$link_menu = "?thamso=xuat_san_pham_2";
		}
		echo "<a href='$link_menu'>" . $tv_2['ten'] . "</a>";
	}
	echo "</div>";
	$conn->close();
?>
