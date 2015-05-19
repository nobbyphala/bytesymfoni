<html>
	<head>
        <title>Login Page</title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>aset/css/bootstrap.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?=base_url();?>aset/js/jquery.min.js"></script>
        <script src="<?=base_url();?>aset/js/bootstrap.min.js"></script>
	</head>
	
	<body style="background-color:#E6E6FA">
	<div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="margin-top:15%">
                <div class="panel panel-default">
                    <div class="panel-heading">Login to website</div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukan email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Masukan password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        
    </div>
			
    </body>
</html>