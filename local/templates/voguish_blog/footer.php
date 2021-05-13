<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
<div class="blog-content-right">
	
	<?$APPLICATION->IncludeComponent(
		"bitrix:search.form", 
		"search", 
		array(
			"PAGE" => "#SITE_DIR#search/index.php",
			"USE_SUGGEST" => "N",
			"COMPONENT_TEMPLATE" => "search"
		),
		false
	);?>
	
	<!--start-twitter-weight-->
	<div class="twitter-weights">
		<h3>Tweet Widget</h3>
		<div class="twitter-weight-grid">
			<h4><span> </span>John Doe</h4>
			<p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
			<i><a href="#">2 days ago</a></i>
		</div>
		<div class="twitter-weight-grid">
			<h4><span> </span>John Doe</h4>
			<p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
			<i><a href="#">2 days ago</a></i>
		</div>
		<a class="twittbtn" href="#">See all Tweets</a>
	</div>
	<!--//End-twitter-weight-->
	<!-- start-tag-weight-->

	<?$APPLICATION->IncludeComponent(
	"bitrix:search.tags.cloud", 
	"tags", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COLOR_TYPE" => "Y",
		"FILTER_NAME" => "",
		"FONT_MAX" => "15",
		"FONT_MIN" => "10",
		"PAGE_ELEMENTS" => "12",
		"PERIOD" => "",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "Y",
		"SORT" => "CNT",
		"TAGS_INHERIT" => "Y",
		"URL_SEARCH" => "/search/index.php",
		"WIDTH" => "100%",
		"arrFILTER" => array(
		),
		"COMPONENT_TEMPLATE" => "tags"
	),
	false
);?>

	<!---- //End-tag-weight---->
</div>
<div class="clearfix"> </div>

</div>
</div>
<!-- /Blog -->
<div class="footer">
	<div class="col-md-3 foot-1">
		<h4>Quick Links</h4>
		<ul>
			<li><a href="#">||   Lorem Ipsum passage</a></li>
			<li><a href="#">||   Finibus Bonorum et</a></li>
			<li><a href="#">||   Treatise on the theory</a></li>
		</ul>
	</div>
	<div class="col-md-3 foot-1">
		<h4>Favorite Resources</h4>
		<ul>
			<li><a href="#">||   Characteristic words</a></li>
			<li><a href="#">||   combined with a handful</a></li>
			<li><a href="#">||   which looks reasonable</a></li>
		</ul>
	</div>
	<div class="col-md-3 foot-1">
		<h4>About Us</h4>
		<ul>
			<li><a href="#">||  Even slightly believable</a></li>
			<li><a href="#">||  Hidden in the middle</a></li>
			<li><a href="#">||  Ipsum therefore always</a></li>
		</ul>
	</div>
	<div class="col-md-3 foot-1">
		<h4>Custom Menu</h4>
		<ul>
			<li><a href="#">||  Internet tend to repeat</a></li>
			<li><a href="#">||  Alteration in some form</a></li>
			<li><a href="#">||  This book is a treatise</a></li>
		</ul>
	</div>

	<div class="clearfix"> </div>
	<div class="copyright">
		<p>Copyrights © <?=date('Y')?> Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
</div>
</body>
</html>