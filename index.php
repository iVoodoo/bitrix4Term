<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "История VR");
// $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
$APPLICATION->SetTitle("Статьи");
?><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item grey" id="blog-item">
    <div class="container">
        <div class="row">
            <!-- BLOG POST - START -->
            <div class="col-sm-12 blog">
                  <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="blog-detail">
                      <li><i class="fa fa-calendar"></i>27/02/2014</li>
                        <li><i class="fa fa-external-link-square" aria-hidden="true"></i><a href="">source</a></li>                       
                    </ul>
					<div class="preview">
                    	<img class="img-preview" src="https://htstatic.imgsmail.ru/pic_image/904f3426aa03830f1905210a2447edb0/1200/630/1997007/" alt="">
					</div>
					<div class="news-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, <a href="#">quis hendrerit</a> erat adipiscing. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem.</p>
              <ul>
                      <li>Lorem ipsum dolor sit amet</li>
                        <li>In venenatis lacus ac semper viverra</li>
                        <li>Etiam consequat odio sollicitudin metus condimentum</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. In venenatis lacus ac semper viverra</b>. Etiam consequat odio sollicitudin metus condimentum, <i>quis hendrerit erat adipiscing</i>. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem.</p>
               
					</div>
                </div>
                <!-- BLOG POST - END -->
                
                <!-- SIDEBAR - START -->
                <!-- <div class="col-sm-4">
                  <div class="sidebar">
                        <h3>Categories</h3>
                        <div class="box categories">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-female"></i>Fashion</a></li>
                                <li><a href="#"><i class="fa fa-paint-brush"></i>Design</a></li>
                                <li><a href="#"><i class="fa fa-music"></i>Music</a></li>
                                <li><a href="#"><i class="fa fa-plane"></i>Travel</a></li>
                                <li><a href="#"><i class="fa fa-hashtag"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <h3>Recent Posts</h3>
                        <div class="box posts">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-chevron-right"></i><a href="#">Introducing WordPress 4.0 “Benny”</a><div>27/02/2014</div></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Nature Center: Earth Day Festival</a><div>18/02/2014</div></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Two New Stores Set to Open in Downtown</a><div>05/02/2014</div></li>
                            </ul>
                        </div>
                        <h3>Tags</h3>
                        <div class="box tags">
                            <ul class="blog-tags list-unstyled list-inline">
							
                                <li><a href="#"><i class="fa fa-tag"></i>book</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>music</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>nature</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>read</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>songs</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>sunshine</a></li>                            
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- SIDEBAR - END -->
            </div>
        </div>
    </section>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>