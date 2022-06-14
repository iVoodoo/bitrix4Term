<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "История VR");
// $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
$APPLICATION->SetTitle("Статьи");
?>
<section class="content-item grey" id="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12 blog">
                  <h2>Lorem ipsum dolor sit amet</h2>
                        <ul class="blog-detail">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-external-link-square" aria-hidden="true"></i><a href="">source</a></li>                       
                        </ul>
					<div class="detail-picture">
                    	<img class="img-detail-picture" src="https://htstatic.imgsmail.ru/pic_image/904f3426aa03830f1905210a2447edb0/1200/630/1997007/" alt="">
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
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>