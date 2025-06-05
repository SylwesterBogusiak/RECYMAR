
        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Nasza galeria</p>
                    <h1 class="display-4 mb-4">Zobacz naszą galerię</h1>
                </div>
                <div class="tab-class text-center">
                    
                
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">

                                            <?php
                                          
                                                 
                                
                                            

                                            $catalog = "public/assets/img/gallery";
                                            
                                            $gallery = opendir( $catalog );
                                            while ( $image = readdir( $gallery ) ){
                                            
                                            $read = pathinfo( $catalog.'/'.$image );
                                              if (( $read['extension']  == 'JPG' ) || ( $read['extension']  == 'jpg' )){
                                            
                                              ?>
                        
                        
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="<?=ROOT?>/<?=$catalog?>/<?=$image?>" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="<?=ROOT?>/<?=$catalog?>/<?=$image?>" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                        
                                            <?php
                    
                                                                
                                            }
                                        
                                            }
                                            closedir($gallery);
                                        
                                            
                                            
                                            ?>
    
    













                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       

            </div>
        </div>

     <!-- gallery End -->

    <br>
    <br>