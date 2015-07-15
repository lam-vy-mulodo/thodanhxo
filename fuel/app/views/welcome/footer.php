</div>
	<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<article class="span12">
					<p>
						THO DANH XO © 2015. <a href="index-5.html">Privacy Policy</a>
					</p>
				</article>
				<!-- {%FOOTER_LINK} -->
			</div>
		</div>
	</footer>
	<?php echo Asset::js('bootstrap.js');?>
	<meta name="viewport"
		content="width=device-width,initial-scale=1.0,user-scalable=0">
	<script>
    $('.list2 li a').hover(function(){
        $(this).stop().css({color:'#4b5aa7'});	
        $(this).parent().siblings('span').stop().css({color:'#4b5aa7'});	 
            }, function(){
        $(this).stop().css({color:'#383535'});
        $(this).parent().siblings('span').stop().css({color:'#ffcc03'});						 
    })
</script>
	<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>

	<a href="#" id="toTop"
		style="right: 50%; margin-right: -62px; display: none;"><span
		id="toTopHover"></span></a>
</body>
</html>