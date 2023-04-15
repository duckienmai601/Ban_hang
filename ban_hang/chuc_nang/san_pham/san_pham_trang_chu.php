<br><br>
Sản phẩm của chúng tôi 
<br><br>
<?php 
	  $conn = new mysqli("localhost", "root", "", "ban_hang");
	if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
	$sql = "SELECT id,ten,gia,hinh_anh,thuoc_menu FROM san_pham WHERE trang_chu='co' ORDER BY sap_xep_trang_chu DESC LIMIT 0,15";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	echo "<table>";
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		for($i=1;$i<=3;$i++)
		{
			echo "<td align='center' width='215px' valign='top' >";
			if($row != false)
			{
				$link_anh="hinh_anh/san_pham/".$row['hinh_anh'];
				$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$row['id'];
				$gia=$row['gia'];
				$gia=number_format($gia,0,",",".");
				echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='150px' >";
				echo "</a>";
				echo "<br>";
				echo "<br>";
				echo "<a href='$link_chi_tiet' >";
				echo $row['ten'];
				echo "</a>";
				echo "<div style='margin-top:5px' >";						
				echo $gia;
				echo "</div>";
				echo "<br>";
			}
			else 
			{
				echo "&nbsp;";
			}
			echo "</td>";
			if($i!=3)
			{
				$row = $result->fetch_assoc();
			}
		}
		echo "</tr>";
	}
	echo "</table>";

	// Close connection
	$stmt->close();
	$conn->close();
?>
