<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4 login_form">
                        <h1>Sign In to your account</h1>
                        <form method="POST" action="<?php echo base_url();?>C_login/signin">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please enter your email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Singin</button>
                            <a href="<?php echo base_url();?>C_login/signup" class="btn btn-danger" >or Create a new account </a>
                            <?php echo '<label class="text-danger">'.$this->session->flashdata ("error").'</label>'; ?> 
                        </form>
                            
                        
                            
                       
                </div>
                <div class="col-md-4">
                    
                </div>
                
            </div>
            
        </div>
    </body>
    
    <script>
        
    </script>
    
</html>