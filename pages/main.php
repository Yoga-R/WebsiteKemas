<div class="col-12">
    <!-- Main Content -->
    <main class="row">

        <!-- Slider -->
        <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#homeCarousel" data-slide-to="1"></li>
              <li data-target="#homeCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/images/slider/home-slider-1.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                            <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                        </div> <!-- /.carousel-caption -->
                    </div>
                </div> <!-- /.item -->


                <div class="item ">

                    <img src="assets/images/slider/home-slider-2.jpg" alt="">

                    <div class="container">

                        <div class="carousel-caption">

                            <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                            <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                        </div> <!-- /.carousel-caption -->

                     </div>

                </div> <!-- /.item -->




    <div class="item ">

        <img src="assets/images/slider/home-slider-3.jpg" alt="">

        <div class="container">

        <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

        </div> <!-- /.carousel-caption -->

        </div>

</div> <!-- /.item -->

</div>

<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
  <span class="fa fa-angle-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>

<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
  <span class="fa fa-angle-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div><!-- /.carousel -->
<!-- Slider -->

<!-- Featured Products -->
<div class="section-home our-causes animate-onscroll fadeIn">

<div class="container">

    <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

            <div class="row">
                <?php 
                $querypanggilprogram = mysqli_query ($koneksi, "select * from tbl_program" );
                while ($hasilquery = mysqli_fetch_array ($querypanggilprogram)){
                    ?>
                    <!-- Product -->
                    <div class="col-md-3 col-sm-6">
                        <<div class="cause">
                            
                            
                            <a href="produk.php?id_produk= <?= $hasilquery['id_program']; ?>"> 
                                <img  src="images/produk/<?php echo $hasilquery['foto1']?>" class="cause-img" style="width:100%" size alt="100x100">
                            </a>
                            <div class="progress cause-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                Rp.0 / Rp<?= $hasilquery['dana_program']; ?>
                            </div>
                        </div>
                        <h4 class="cause-title">
                            <a href="product.html" 
                            class="product-name"><?= $hasilquery['nama_program']; ?></a>
                        </h4>
                        <div class="cause-details">
                            <span class="product-price-old">
                             
                            </span>
                            <br>
                            <span class="product-price">
                            <?= $hasilquery['dana_program']; ?>
                            </span>
                        </div>
                        <div class="btn-holder text-center">
                            <a href="detaildonasi.php?id_donasi=<?php echo $hasilquery['id_program'];?>"><button class="btn btn-primary" type="button"><i class=" mr-2"></i>Lihat Detail</button></a>
                        </div>
                        
                    </div>
                </div>
            <?php } ?>
            <!-- Product -->

            <!-- Product -->
            
            <!-- Product -->
                </div>
                </div>


<!-- Featured Products -->



<!-- Latest Product -->

<!-- Latest Products -->



<!-- Top Selling Products -->

<!-- Top Selling Products -->


</main>
<!-- Main Content -->
</div>

