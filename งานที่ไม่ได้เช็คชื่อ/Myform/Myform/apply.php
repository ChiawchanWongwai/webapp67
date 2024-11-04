<?php
  echo "ชื่อ: ".$_POST['firstname']."<br>";
  echo "นามสกุล: ".$_POST['lastname']."<br>";

  echo "เพศ: ";
  if ($_POST['sex']=='f') echo "ชาย";
  else echo "หญิง";
  echo "<br>";

  echo "ระดับการศึกษา: ";
  if ($_POST['education'] == 1) echo "ปริญญาตรี";
  elseif ($_POST['education'] == 2) echo "ปริญญาโท";
  else echo "ปริญญาเอก";
  echo "<br>";

  echo "ความสามารถทางภาษา: ";
  if ($_POST['eng'] == 'on') echo "อังกฤษ ";
  if ($_POST['china'] == 'on') echo "จีน ";
  if ($_POST['japan'] == 'on') echo "ญี่ปุ่น ";
  if ($_POST['france'] == 'on') echo "ฝรั่งเศส "; echo "<br>";

  echo "ความสามารถพิเศษ: ";
  echo $_POST['perform']
?>