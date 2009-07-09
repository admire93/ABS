<a href="<?php echo DOMAIN_NAME; ?>">go to Index</a>
<h1><?php echo $title;?></h1>
<form action = "<?php echo DOMAIN_NAME;?>/Board-Aoard/request" method = "post">
	<dl>
		<dt>
			<label for="id">ID</label>
		</dt>
		
		<dd><input type = "text" name="id" id="id" /></dd>

		<dt>
			<label for="pw">PW</label>
		</dt>
			
		<dd><input type = "password" name="pw" id ="pw" /></dd>

		<dt>
			<label for="content">Content</label>
		</dt>

		<dd> <textarea name="content" id="content"> </textarea> </dd>
	</dl>
	<input type = "submit" name="submit" />
</form>
