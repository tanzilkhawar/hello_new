<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to your private page!</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
    <h1>Welcome to the private page, <?php echo $this->user->get_name(); ?>!</h1>
	<div id="body">
		<p>You are now logged in as <strong><?php echo $this->user->get_name(); ?></strong> (ID #<?php echo $this->user->get_id(); ?>). Click <a href="<?php echo site_url('login/logout')?>">here to logout</a>.</p>
		
        <hr />
        <p>A dump of your session info:</p>
        <pre><?php echo var_dump($this->user->user_data); ?></pre>
		
        <hr />
        <p>A dump of your permissions:</p>
        <pre><?php echo var_dump($this->user->user_permission); ?></pre>
		
        <hr />
        <p>A dump of this user custom fields:</p>
		<p>Important: <a href="https://github.com/waldirbertazzijr/codeigniter-user#storing-custom-data">Read the documentation</a> for custom fields.</p>
        <pre><?php echo var_dump($this->user->custom_data); ?></pre>	
		
	</div>
	
	<p class="footer">Library by <a href="http://waldir.org/">Waldir Bertazzi Junior</a>. Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>