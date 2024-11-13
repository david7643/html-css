<html>
<head>
</head>
<body>
<form method="post" action="view_member.php">
<ul>
<li>이름(20) <input type="text" name="name"></li>
<li>ID(20)<input type="text" name="ID"></li>
<li>암호(20)<input type="password" name="pass"></li>
<li>전화번호(10)<input type="tel" name="phone" value="02"></li>
<li>자기소개<textarea rows="5" cols="20" name="present"></textarea></li>
<li>성별 : 남성<input type="radio" name="gender" value="남">
여성<input type="radio" name="gender" value="여"></li>
<li>음악<input type="checkbox" name="hobby[]" value="음악"></li>
<li>여행<input type="checkbox" name="hobby[]" value="여행"></li>
<li>운동<input type="checkbox" name="hobby[]" value="운동"></li>
<li><input type="submit" value="확인"></li>
</ul>
</form>
</body>
</html>