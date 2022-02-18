<?php
// アンドロイド判定
$isAndroid = false;
$ua = $_SERVER['HTTP_USER_AGENT'];
if ( preg_match('/Android/ui', $ua) ) {
	$isAndroid = true;
}

?>

<div class="maas-business-concept">
    <div class="container-wrapper">
        <div class="maas-concept-wrapper">
            <div class="item">
                <div class="maas-concept-figure replaceElm">WHILL Maas Business</div>
            </div>
            <div class="maas-concept-text item">
                <h2 class="heading-large color-blue">A Seamless Solution for<br />Last-Mile Transportation</h2>
                <div class="text">
                    The WHILL MaaS business provides a new kind of mobility service. Our goal is to enhance the customer experience through innovation and optimization of last-mile transportation.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// TODO 動画：デフォルトはショートバージョン。「ビジョン動画を見る」ボタンを追加してモーダルウィンドウでフルバージョンを再生
?>
<div class="u-row-viewport-large-banner movie-center maas-vision-movie" data-w="1920" data-h="1080">
    <video class="cover tgt-movie" muted autoplay playsinline loop poster="<?php echo get_template_directory_uri(); ?>/assets/dist/images/maas/maas-0001.jpg">
		<?php if(!$isAndroid){?>
            <source src="<?php echo get_template_directory_uri(); ?>/movies/maas-short/m.m3u8" type="application/x-mpegURL">
		<?php }?>
        <source src="<?php echo get_template_directory_uri(); ?>/movies/maas-short/maas.mp4" type="video/mp4" />
        動画を再生するにはvideoタグをサポートしたブラウザが必要です。
    </video>
    <a href="javascript:void(0)" class="btn-movie-play" id="btn-maas-vision" data-yt="Pobq0g0Jf94"><div class="inner"><span>Full Movie</span></div></a>
</div>

<div class="maas-business-system">
    <div class="container-wrapper">
        <h2 class="heading color-blue txc">Autonomous Mobility<br />Tailor-Made for Your Business</h2>
        <div class="text">Accommodating the mobility needs of your customers can be complex.<br />Our solution is both flexible and adaptable,<br />enabling us to create an autonomous solution that works for your specific needs.</div>
    </div>
</div>
<div class="figure-maas-system">
    <div class="inner-maas-system">
        <a href="javascript:void(0)" id="btn-maas-system-hospital" class="btn-maas-system replaceElm" data-yt="02soWxNi-4Y">HOSPITAL</a>
        <a href="javascript:void(0)" id="btn-maas-system-airport" class="btn-maas-system replaceElm" data-yt="7k5O70mmDyg">AIRPORT</a>
        <a href="javascript:void(0)" id="btn-maas-system-museum" class="btn-maas-system replaceElm" data-yt="Vw_jo3n6hkg">MUSEUM</a>
    </div>
</div>

<div class="maas-customer-experience">
    <div class="container-wrapper">
        <h2 class="heading color-blue txc">Enhance Your<span class="pc-only">&nbsp;</span><br class="sp-only" />Customer Experience</h2>
        <div class="text">
            Our overarching goal is to enhance the customer experience through<br class="pc-only">
            a service offering that gives individuals the independence they deserve.<br class="pc-only">
            Whether it's your passengers, your patients or your guests, our team can put together a<br class="pc-only">
            comprehensive solution to compliment your current mobility service.
        </div>

        <div class="list-wrapper">
            <ul class="maas-customer-experience-list color-blue">
                <li>Optimization of your mobility service operation</li>
                <li>Safely distance your customer from the staff to stay in line with social distancing practices</li>
                <li>Early adoption allows you to be prepared as demand for mobility assistance grows</li>
                <li>Unique, new, innovative tech that adds value to your organization</li>
            </ul>
        </div>

    </div>
</div>

<div class="bg-maas-customer-experience"></div>

<div class="maas-auto-pilot-system">
    <div class="container-wrapper">
        <h2 class="heading color-blue txc">Health and Safety First</h2>
        <div class="maas-auto-pilot-fugure">
            <div class="item">
                <div class="item-image item-airport"></div>
                <div class="text">
                    The collision avoidance feature reduces<br/>
                    the risk of collisions with other customers<br/>
                    and/or the surrounding environment.
                </div>
            </div>
            <div class="item">
                <div class="item-image item-safety"></div>
                <div class="text">
                    Fully autonomous mobility service<br class="pc-only">
                    mitigates the risk of close encounters with<br class="pc-only">
                    staff compared to the traditional push service.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="maas-autonomous-mobility-service">
    <div class="container-wrapper">
        <h2 class="heading color-blue txc">WHILL Autonomous<span class="pc-only">&nbsp;</span><br class="sp-only" />Mobility Service</h2>
        <div class="text">
            WHILL Autonomous Mobility Service offers a solution comprised of<br class="pc-only">
            autonomous mobility devices compatible with our Operation Portal.<br class="pc-only">
            Our safe and reliable systems are designed to integrate seamlessly<br class="pc-only">
            into any business and are custom-made to complement your unique environment.
        </div>
        <h3 class="heading-sub color-blue sp-only txc">WHILL Autonomous Model</h3>
        <h4 class="heading-sub-small color-blue sp-only txc">Provides a comfortable ride<br />without sacrificing the customer experience.</h4>

        <div class="figure-maas-autonomous-mobility-service">
            <div class="no-disp">
                <h3>autonomous</h3>
                <ul>
                    <li>Customer interface tablet</li>
                    <li>Stereo camera sensors</li>
                    <li>Push handle</li>
                    <li>Carry-on baggage storage</li>
                    <li>Seat belt</li>
                </ul>
                <h3>Customer Interface</h3>
                <p>Easy and intuitive user controls to easily maneuver in any environment.</p>
                <p>* Concept screen shown</p>
                <h3>Operation Portal</h3>
                <p>Staff can have a real-time visual of where the devices are, and the jobs they are executing.</p>
                <p>* Concept screen shown</p>
            </div>
        </div>
    </div>
</div>

<div class="maas-service-package">
    <div class="container-wrapper">
        <h2 class="heading color-blue txc">Service Packages</h2>
        <div class="subHeadingWrapper">
            <div class="item">
                <h3 class="heading-sub color-blue">Autopilot</h3>
                <div class="text">
                    Autopilot offers way-finding support for customers who simply<br class="pc-only">
                    want to get directly to their destination stress-free.
                </div>
            </div>
        </div>
        <div class="figure-service-package container-full-size">

        </div>
        <div class="subHeadingBtmWrapper">
            <div class="item">
                <h3 class="heading-sub color-blue">Autonomous Self-Return</h3>
                <div class="text">
                    WHILL Autonomous Model device will automatically drive itself<br class="pc-only">
                    back to the designated location. 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="maas-customized-solution">
	<?php
	// solution
	$solutions = array(
		array(
			'title'=>'Autonomous Models',
			'detail'=>'Custom hardware design for<br />B2B application with safety<br />features and user interface'
		),
		array(
			'title'=>'Operation Portal',
			'detail'=>'Remotely manage the service<br />and continuously monitor<br />hardware condition'
		),
		array(
			'title'=>'Maintenance',
			'detail'=>'Regular check-up with part<br />maintenance and<br />replacement'
		),
		array(
			'title'=>'Software updates',
			'detail'=>'Continuous software updates<br />as service rollout progresses<br />New features added and<br />performance upgrades'
		),
		array(
			'title'=>'Repair',
			'detail'=>'Restoring the Autonomous<br />Model back to good condition<br />to ensure operational stability'
		),
		array(
			'title'=>'Insurance',
			'detail'=>'Injuries and property<br />damages are covered by our<br />insurance'
		),
		array(
			'title'=>'Set Up Support',
			'detail'=>'Various support for facility<br />managers during the initial<br />installment'
		),
		array(
			'title'=>'Remote support',
			'detail'=>'Remote support is available for troubleshooting'
		),
		array(
			'title'=>'On-Site Support',
			'detail'=>'Additional on-site staff to<br />support your staff on the<br />field.'
		)
	);
	?>

    <div class="container-wrapper">
        <div id="solution-detail-wrapper">
            <div class="inner">
                <a href="javascript:void(0)" id="solution-close" class="close-btn replaceElm">close</a>
				<?php
				$html = '';
				$i = 1;
				foreach ($solutions as $solution){
					$html .= '<div class="solution-item no-disp" id="s'.$i.'">';
					$html .= '<div class="title">'.$solution['title'].'</div>';
					$html .= '<div class="details">'.$solution['detail'].'</div>';
					$html .= '</div>';
					$i++;
				}
				echo $html;
				?>
            </div>
        </div>

        <h2 class="heading color-blue txc">Customized Solutions</h2>
        <div class="figure-maas-customized-solution">
            <div class="items">
                <div class="item-solution">
                    <div class="solution-menu-wrapper">
						<?php
						$html = '';
						$i = 1;
						foreach ($solutions as $solution){
							$html .= '<a href="javascript:void(0)" class="solution-btn replaceElm s'.$i.'" data-service="s'.$i.'">'.strip_tags($solution['title']).'</a>'."\n";
							$i++;
						}
						echo $html;
						?>
                    </div>

                </div>
                <div class="text color-blue">WHILL Autonomous Mobility Service<br class="sp-only" /><span class="pc-only">&nbsp;</span>for your business</div>
            </div>
        </div>
    </div>
</div>

<div class="maas-branding">
    <div class="container-wrapper">
        <h2 class="heading color-blue txc">Branding</h2>
        <h3 class="heading-sub txc">Add value to your organization</h3>
        <div class="text">
            The WHILL Autonomous models can be branded with your company logo or have ads on them.<br />
            Add value to your business with WHILL Autonomous Mobility Service<br />
            and differentiate yourself from competitors.
        </div>

        <div class="container-full-size">
            <div class="figure-maas-branding-wrapper">
                <div class="figure-maas-branding-main">
                    <div class="item-dfw replaceElm">Dallas/Fort Worth International Airport</div>
                </div>
                <div class="figure-maas-branding-sub">
                    <div class="items">
                        <div class="item item-hnd replaceElm">Haneda Airport</div>
                        <div class="item item-auh replaceElm">Abu Dhabi International Airport</div>
                        <div class="item item-ywg replaceElm">Winnipeg James Armstrong Richardson International Airport</div>
                        <div class="item item-ba replaceElm">British Airways</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="row-banner-overlay bg-maas-business-system mb0">
    <div class="inner-content">
        <h2 class="ttl">Get In Touch</h2>
        <div class="txt">
            Learn how we can help optimize your mobility service.<br class="pc-only" />
            Let us show you how our service can be implemented to your business.
        </div>
        <a class="btn-blue" href="mailto:maas@whill.inc"><span>Contact</span></a>
    </div>
</div>
