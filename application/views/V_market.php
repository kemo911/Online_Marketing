        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/market.css">
        <div class="content">
                <div class="container-fluid">
                    <h3 class="title" style="text-align: center;">Tomorrow Land LanMarket </h3>
                    <div class="row">
                    <?php  foreach ($market as $item ):?>
                        <div class="col-md-4">
                            <div class="offer">
                                <img class="img-responsive img-market" src="<?php echo base_url(); ?>assets/img/places/<?php echo $item['image']?>" />
                                <div class="details">
                                    <p><?php echo $item['direction'];?></p>
                                     <small><?php echo $item['direction'];?> - <?php echo $item['company'];?></small>
                                     <a type="button" class="btn btn-success btn-sm button" href="<?php echo base_url(); ?>c_market/get_details/<?php echo $item['id']; ?>">See More</a>
                                     <div class="duration"><?php echo $item['duration']?> Days</div>
                                </div>
                                
                            </div>
                         </div> <!-- end of col -->
                         <?php endforeach;?>
                         
                    </div><!-- end of Row-->
           
                </div> <!-- end of container fluid -->
                     
            </div> <!-- end of content -->
            
        </div> <!-- end of panel -->
            
        
    </body>
    
</html>