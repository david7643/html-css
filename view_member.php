<htmL>
<body>
<?php
$name = $_POST["name"];
$ID = $_POST["ID"];
$pass = $_POST["pass"];
$tel = $_POST["phone"];
$textarea = $_POST["present"];
$gen = $_POST["gender"];
?>
<ul>
<li>이름:<?php echo "$name" ?></li>
<li>ID:<?php echo "$ID" ?></li>
<li>비밀번호:<?php echo "$pass" ?></li>
<li>전화번호:<?php echo "$tel" ?></li>
<li>자기소개:<?php echo "$textarea" ?></li>
<li>성별:<?php echo "$gen" ?></li>
<li>취미:<?php $num = count($_POST["hobby"]);
        for($i=0;$i<$num;$i++){
                    echo $_POST["hobby"][$i];
            if($i != $num-1)
                echo ", "; 
        }         
?></li>
</ul>
</body>
</htmL>

