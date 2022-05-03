<style>
	.image_logo{
		width: 100px;
	}
</style>
<?php include_once("mvc/view/client/layout.php"); ?>
<link rel="stylesheet" href="mvc/view/client/css/tin-tuc.css">
    <div class="container">
        <div class="col-12">
            <div class="gray-container">
                
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="d-block d-md-none">
                
            </div>
        </div>
        <div class="row">
            <div class="box-heading hidden">
				<h1 class="title-head">Tin tức</h1>
			</div>
            <aside class="col-lg-3 col-md-3">
                
            </aside>
            <section class="right-content col-lg-9 col-md-9  col-md-push-3 col-lg-push-3">			
				
				<section class="list-blogs blog-main">	
					<?php foreach ($result as $key => $value):?>
						<article class="blog-item">
							<div class="blog-item-thumbnail">						
								<a href="/che-bien-ca-phe" title="CHẾ BIẾN CÀ PHÊ">							
									<picture>
										<img src="<?php echo PUBLIC_URL ?>img-tin-tuc/<?php echo $value['image'] ?>" style="width: 383px;height: 168px;" class="img-responsive" alt="CHẾ BIẾN CÀ PHÊ">
									</picture>
								</a>
							</div>
							<div class="blog-item-info">
								<a href="/che-bien-ca-phe" title="CHẾ BIẾN CÀ PHÊ"><h3 class="blog-item-name"><?php echo $value['title'] ?></h3></a>
								<div class="blog-item-meta">
									<div class="post-author" style="pointer-events:none !important;">
										Nguyễn Hữu Mạnh
									</div>
									<div class="post-time">
										04/04/2019
									</div>
									<div class="post-comment">
										<span>0</span> bình luận
									</div>
								</div>
								<p class="blog-item-summary margin-bottom-5"> <?php echo $value['description'] ?></p>
							</div>
						</article>		
					<?php endforeach; ?>
					<div class="text-xs-left">
					</div>
				</section>
				
				
			</section>
        </div>
    </div>
	<?php include_once("mvc/view/client/footer.php"); ?>
