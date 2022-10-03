<?php
include 'koneksi/koneksi.php';
?>

<?php include "header.php" ?>

<div class="index-banner" style="margin-top : 130px;">
    <div class="wmuSlider example1" style="height: 560px;">		 
		<div class="wmuSliderWrapper">
			<?php 
                $result = mysqli_query($koneksi," SELECT * from tb_buku");
                while($data = mysqli_fetch_array($result)){
            ?>
				<article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
					   	<div class="slider-left">
						   <img src="buku/assets/cover/<?php echo $data['cover'] ?>" style="width:300px">
						</div>

						<div class="slider-right">
						    <h4><b><?php echo $data['Judul']; ?></b></h4>
						    <h5><?php echo $data['Pengarang']; ?></h>
						    <p><?php echo $data['Tahun']; ?></p>
						    <div class="btn"><a href="single.php?ISBN=<?php echo $data['ISBN'] ?>">Detail</a></div>
						</div>
						   <div class="clear"></div>
					</div>
				</article>
			<?php 
				}
            ?>
		</div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
            	 <script src="assets/js/jquery.wmuSlider.js"></script> 
				 <script type="text/javascript" src="assets/js/modernizr.custom.min.js"></script> 
						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
        </div>
	</div>
</div>

<div class="main">
                <div class="wrap">
             	  <div class="content-top">
             		<div class="lsidebar span_1_of_c1">
					  <p>Buku Ditampilkan Berdasarkan :</p>
					</div>
					<div class="cont span_2_of_c1">
					  <div class="social">	
					     <ul>	
                         <div class="btn"><li ><a href="index_news.php"><span>Terbaru</span></a></li></div>
						 </ul>
			   		   </div>
					   <div class="social">	
						   <ul>	
                           <div class="btn"><li ><a href="index_random.php"><span>Random </span></a></li></div>
						  </ul>
			     		</div>
						 <div class="social">	
						   <ul>	
                           <div class="btn"><li ><a href="index_kategori.php"><span>Kategori </span></a></li></div>
						   </ul>
			    		 </div>
						<div class="clear"> </div>
					  </div>
					  <div class="clear"></div>			
				   </div>
	
	
			
	  <div class="box1">
	<?php 
                $result = mysqli_query($koneksi," SELECT * FROM tb_buku ORDER BY RAND () LIMIT 3");
                while($data = mysqli_fetch_array($result)){
            ?>	
		<div class="col_1_of_3 span_1_of_3"><a href="single.php?ISBN=<?php echo $data['ISBN'] ?>">
			<div class="view view-fifth">
				<div class="top_box">
					<h3 class="m_1"><b><?php echo $data['Judul']; ?></b></h3>
					<p class="m_2"><?php echo $data['Pengarang']; ?></p>
					<p class="m_2"><?php echo $data['Tahun']; ?></p>
				        <div class="grid_img">
							<div class="css3"><img src="buku/assets/cover/<?php echo $data['cover'] ?>" width="100px"></div>
								<div class="mask">
									<div class="info">Quick View</div>
								</div>
                </a>
						</div>
						<div class="price">Rp. <?php echo $data['harga']; ?></div>
				</div>
			</div>	
		</div>
		<?php
				}
				?>
	</div>
			<div class="clear"></div>
	</div>

			 <?php include "footer.php" ?>