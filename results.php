<?php 

	$pageName="Search Results for ".($_GET["q"]);
	include 'inc/header.php';

?>

    <div class="container" style="min-height:700px">
        <script>
          (function() {
            var cx = '002116003116627731225:plce54jsdn0';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
    <gcse:searchresults-only></gcse:searchresults-only>
    </div>
    
<?php 

	include 'inc/footer.php';

?>
