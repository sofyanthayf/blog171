<?php
	if( isset( $this->session->nama ) ){
		echo $this->session->nama .
					" (<a href='/signout'>signout</a>) | " .
					" (<a href='/blog/post'>Tulis Blog</a>) | " ;
	}
?>

<hr>
<form action="/signin" method="post">
	Email: <input type="email" name="email" placeholder="Alamat Email Anda"><br>
	Password: <input type="password" name="password" placeholder="Password Anda"><br>
	<input type="submit" value="Sign In">
</form>
<hr>
<a href="/user/reg">Register</a><br>

<br>
<br>
<h3>Blogs</h3>
<?php
	foreach( $blogs as $blog ){
		echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br>";
	}

 ?>
