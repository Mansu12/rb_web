<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container" id="fh5co-hero">

	<div id="fh5co-page">

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
							
				<div class="col-md-12">
					<div class="row pad11 white-bg comp-pg about-bg">
               <h2>About RupeeBoss.com</h2>

<p>At <b>RupeeBoss.com</b>, we are guided by the philosophy – When You Need a Loan, You’re not Alone! This guiding principle is a reflection of our commitment towards ensuring the most hassle-free experience in procuring a loan, be it for personal needs, or that of your business.</p>

<p><b>RupeeBoss.com</b> aspires to be India’s preferred destination for the widest range of loan products including retail, SME and Credit Card products. We will offer best terms for Person Loan, Home Loan, Car Loan to Working Capital, SME Loan, Business Loan, and more. Our product advisors leave no stone unturned to ensure that your loan requirement is not just well studied, it’s also taken up with utmost sincerity to ensure you get the best of breed options to choose from.</p>

<p>Our extensive relationships with all major national, PSU, Private and NBFC service providers, coupled with the cutting edge technology ensure that upon specifying your requirement, you get the most competitive options that are tailor made to suit your needs, and all of this done at a few clicks.</p>

<p>At <b>RupeeBoss.com</b>, we are committed in ensuring the best experience in terms of customer service and satisfaction, and hence all our customer reps are cherry picked and our escalation matrix goes right up to our CEO.

So let’s get started together and get you the loan / credit card that you deserve.</p>
					</div>
				</div>
			</div>
		</div>	
	</div>

	
	
	
	
	
	
	</div>
	
	
</div>
<?php
function crawl_page($url, $depth = 5)
{
    static $seen = array();
    if (isset($seen[$url]) || $depth === 0) {
        return;
    }

    $seen[$url] = true;

    $dom = new DOMDocument('1.0');
    @$dom->loadHTMLFile($url);

    $anchors = $dom->getElementsByTagName('a');
    foreach ($anchors as $element) {
        $href = $element->getAttribute('href');
        if (0 !== strpos($href, 'http')) {
            $path = '/' . ltrim($href, '/');
            if (extension_loaded('http')) {
                $href = http_build_url($url, array('path' => $path));
            } else {
                $parts = parse_url($url);
                $href = $parts['scheme'] . '://';
                if (isset($parts['user']) && isset($parts['pass'])) {
                    $href .= $parts['user'] . ':' . $parts['pass'] . '@';
                }
                $href .= $parts['host'];
                if (isset($parts['port'])) {
                    $href .= ':' . $parts['port'];
                }
                $href .= dirname($parts['path'], 1).$path;
            }
        }
        crawl_page($href, $depth - 1);
    }
    echo "URL:",$url,PHP_EOL,"CONTENT:",PHP_EOL,$dom->saveHTML(),PHP_EOL,PHP_EOL;
}
crawl_page("http://hobodave.com", 2);
?>

