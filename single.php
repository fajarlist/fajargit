<?php
include 'koneksi/koneksi.php';
$ISBN = $_GET['ISBN'];
?>
<?php include "header.php" ?>


		<div class="cont span_2_of_3" style="margin-top : 130px;" >
			  <div class="labout span_1_of_a1">
				<!-- start product_slider -->
                <?php 
                $result = mysqli_query($koneksi," SELECT * FROM tb_buku WHERE ISBN = '$ISBN'");
                $data = mysqli_fetch_array($result)
            ?>
				     <ul id="etalage">
							<li>
								<a href="optionallink.html">
                                <img src="buku/assets/cover/<?php echo $data['cover'] ?>" style="width : 300px">
								</a>
							</li>
						</ul>
			<!-- end product_slider -->
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3"><b><?php echo $data['Judul']; ?></b></h3>
				<p class="m_3"><b><?php echo $data['Pengarang']; ?></b></p>
				<p class="m_3"><b><?php echo $data['Tahun']; ?></b></p>
				
				<div class="price_single">
							  <span class="actual">Rp.<?php echo $data['harga']; ?></span>
                              <!-- <a href="#">click for offer</a> -->
							</div>
				<!-- <div class="btn_form">
				   <form>
					 <input type="submit" value="buy now" title="">
				  </form>
				</div> -->
				<ul class="add-to-links">
    			   <li><img src="<?php echo $data['cover']; ?>" alt=""/></li>
    			</ul>
    			<div class="toogle">
     	<h3 class="m_3">Sinopsis</h3>
     	<p class="m_text"><?php echo $data['Sinopsis']; ?></p>
     </div>	
<!--     			
                <div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div> -->

			</div>

			<div class="clear"></div>
     
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="assets/js/jquery.flexisel.js"></script>				
     </div>
     <div class="clear"></div>
			   </div>
       	 	</div>
       	 </div>
            <?php include "footer.php" ?>