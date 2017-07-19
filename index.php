<?php
//ここからPHPのヒアドキュメント

print <<<_HTML_
<form method="post" action="/users/enter.php">
Your Name:<input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>

<br/>

<form method="post" action="c.php">
Zipc Code:<input type="text" name="zipcode" />
<br/>
<input type="submit" value="送信">
</form>

<br/>

<form method="post" action="c.php">
Mail:<input type="text" name="email" />
<br/>
<input type="submit" value="送信">
</form>
_HTML_;
//ヒアドキュメント終了

?>
