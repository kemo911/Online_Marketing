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
                        <h1>Create an account</h1>
                        <form method="POST" action="<?php echo base_url();?>C_login/signup" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="f_name" placeholder="Enter your First Name" required="">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="l_name" placeholder="Enter your Last Name" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please enter your email" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your Password" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your Password" required="">
                            </div>                     
                            <input type="file" name="file" upload required=""><br>
                            
                            <button type="submit" class="btn btn-primary">SingUp</button>
                            <a href="<?php echo base_url();?>C_login/signin" class="btn btn-success">OR Log in</a>
                            <?php echo '<label class="text-danger">'.$this->session->flashdata ("error").'</label>'; ?>     
                        </form>
                        
                        
                            
                        
                            
                       
                </div>
                <div class="col-md-4" style="margin-top: 100px;">
                   
                </div>
                
            </div>
            
        </div>
    </body>
    
    <script>
        
    </script>
    
</html>