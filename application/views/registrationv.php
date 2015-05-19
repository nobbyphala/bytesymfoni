<html>
    <head>
        <title>Halaman Registrasi</title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>aset/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>aset/jqueryui/jquery-ui.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?=base_url();?>aset/js/jquery.min.js"></script>
        <script src="<?=base_url();?>aset/jqueryui/jquery-ui.js"></script>
        <script src="<?=base_url();?>aset/js/bootstrap.min.js"></script>
	</head>
    
    <body style="background-color:#E6E6FA">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4" style="margin-top:5%">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: #44A030; color: #fff;">Form Registrasi</div> 
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukan nama lengkapmu">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukan emailmu">
                                </div>
                                <div class="form-group">
                                    <label for="ttl">Tanggal lahir</label>
                                    <input type="text" class="form-control" id="ttl" placeholder="Kapan kamu lahir">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Password terhebatmu">
                                </div>
                                <div class="form-group">
                                    <label for="confpwd">Konfirmasi password</label>
                                    <input type="password" class="form-control" id="confpwd" placeholder="Konfirmasi password terhebatmu">
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
        
        <script>
        $(document).ready(function(){
        $('#email').tooltip({title: "Masukan email yang valid karena dibutuhkan saat aktivasi",trigger: "focus"}); 
        });
        </script>
        <script>
        $(document).ready(function(){
        $('#pwd').tooltip({title: "Password dengan panjang 8-32 karakter alphanumeric",trigger: "focus"}); 
        });
        </script>
        <script>
        $(document).ready(function(){
        $('#confpwd').tooltip({title: "Ketik ulang lagi passwordmu dan pastikan sama",trigger: "focus"}); 
        });
        </script>
        
        
    </body>

</html>