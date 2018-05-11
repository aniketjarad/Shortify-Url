<center>
	<h1>Welcome to Sample Project To Shortify URL</h1>
	<form id="url-form" class="form-inline row" method="post" action="" style="padding-top: 20vh" >
		<div class="form-group col-sm-2" >
		</div>
		<div class="form-group col-sm-8">
			<label>Enter Your URL&nbsp;</label>
			<input type="url" class="form-control" id="long_url" name="long_url" placeholder="URL to Shortify" style="width:50%" required>
			<input class="btn btn-primary" type="submit" value="Shortify URL">
  			
		</div>
	</form>

	<div id="show" class="row align-items-center" style="padding-top: 10vh;display: none;" >
	    <label>Your Shorten URL&nbsp;&nbsp;&nbsp;</label>
	    <div id=short_url></br>
	    </div>
	</div>
</center>