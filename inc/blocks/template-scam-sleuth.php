<?php /* Template Name: Scam Sleuth */

get_header();
?>

<!-- will be moved to a proper .css file later -->
<style>
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-warning {
        color: #000;
        background-color: orange;
        border-color: #ffeeba;
    }

    .alert {
        position: relative;
        padding: 1.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        font-weight: 500;
    }

    @media only screen and (min-width: 768px) {
        .utf_main_banner_area {
            height: 50vh;
            min-height: 550px;
            /* display: flex; */
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .utf_main_banner_area .caption {
            margin-top: 4em;
        }
    }

    [data-overlay]:before {
        position: absolute;
        content: '';
        background: linear-gradient(to right, rgba(50, 50, 50, 1) 20%, rgba(50, 50, 50, .95) 50%, rgba(50, 50, 50, 0.1) 80%, rgba(50, 50, 50, 0) 100%);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    [data-overlay="8"]:before {
        opacity: 0.8;
    }

    [data-overlay] {
        position: relative;
    }

    .utf_main_banner_area {
        padding: 68px 0;
    }

    .banner,
    .utf_main_banner_area {
        background-size: cover !important;
        background-position: center !important;
        margin: 0;
        position: relative;
    }

    html body .cl-white {
        color: #ffffff;
    }

    @media only screen and (min-width: 993px) {
        .utf_main_banner_area h2 {
            font-size: 45px;
            line-height: 1.2;
            font-weight: 700;
            margin-bottom: 20px;
        }
    }

    .utf_main_banner_area h2 {
        color: #ffffff;
        font-weight: 400;
        display: block;
        margin-bottom: 12px;
    }

    .utf_main_banner_area h2 {
        font-weight: 700;
        font-family: 'Montserrat', sans-serif;
    }

    @media only screen and (min-width: 1024px) {
        h2 {
            font-size: 36px;
        }
    }

    h2 span.theme-cl {
        color: #ba8c49;
    }

    .theme-cl {
        color: #26ae61;
        background: rgb(186 140 73 / 20%);
        border-radius: 4px;
        padding: 0px 10px;
    }

    .utf_main_banner_area p {
        font-size: 15px;
        font-weight: 400;
        font-family: 'Montserrat', sans-serif;
    }

    .utf_main_banner_area p {
        margin-bottom: 40px;
    }

    .utf_home_form_one {
        margin-top: 20px;
        background: rgba(255, 255, 255, 0.2);
        padding: 7px;
        border-radius: 40px;
        margin-bottom: 20px;
        width: 100%;
    }

    html body .padd-0 {
        padding: 0px;
    }

    .utf_main_banner_area fieldset .form-control:first-child {
        border-radius: 30px 0 0 30px;
        padding-left: 25px;
        color: #6b7c8a;
    }

    .utf_main_banner_area fieldset .form-control,
    .utf_main_banner_area fieldset .seub-btn,
    .utf_main_banner_area fieldset select.selectpicker {
        width: 100%;
        padding: 12px 20px;
        border: none;
        border-radius: 0px;
        height: auto;
        line-height: 1.5;
        font-size: 14px;
        font-weight: 500;
        height: 60px;
        display: flex;
        flex-direction: row;
        align-items: center;
        flex-wrap: wrap;
    }

    .utf_home_form_one .form-control {
        margin-bottom: 0;
    }

    .br-1 {
        border-right: 1px solid #dde6ef !important;
    }

    .form-control {
        height: 50px;
        border: 2px solid #dde6ef;
        margin-bottom: 20px;
        box-shadow: none;
        background: #fbfdff;
        font-size: 14px;
        color: #6b7c8a;
        padding: 6px 18px;
        font-weight: 500;
    }

    .utf_main_banner_area fieldset .seub-btn {
        margin-bottom: 0;
        border-radius: 0 30px 30px 0;
    }

    .utf_main_banner_area fieldset .form-control,
    .utf_main_banner_area fieldset .seub-btn,
    .utf_main_banner_area fieldset select.selectpicker {
        width: 100%;
        padding: 12px 20px;
        border: none;
        border-radius: 0px;
        height: auto;
        line-height: 1.5;
        font-size: 14px;
        font-weight: 500;
        height: 60px;
        display: flex;
        flex-direction: row;
        align-items: center;
        flex-wrap: wrap;
    }

    .utf_main_banner_area fieldset .seub-btn {
        margin-bottom: 0;
    }

    .utf_main_banner_area .seub-btn {
        text-align: center;
        justify-content: center;
    }

    .theme-btn {
        background: #b8894b;
        border: 2px solid #b8894b;
        color: #ffffff !important;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 500;
        box-shadow: 0 4px 10px 0 rgb(41 128 185 / 20%);
        -webkit-box-shadow: 0 4px 10px 0 rgb(41 128 185 / 20%);
    }

    .utf_main_banner_area fieldset .seub-btn {
        margin-bottom: 0;
        border-radius: 0 30px 30px 0 !Important;
    }

    .utf_main_banner_area fieldset .form-control,
    .utf_main_banner_area fieldset .seub-btn,
    .utf_main_banner_area fieldset select.selectpicker {
        width: 100%;
        padding: 12px 20px;
        border: none;
        border-radius: 0px;
        height: auto;
        line-height: 1.5;
        font-size: 14px;
        font-weight: 500;
        height: 60px;
        display: flex;
        flex-direction: row;
        align-items: center;
        flex-wrap: wrap;
    }

    .scam-sleuth-boxes {
        border: 1px solid #ba8c49;
        border-radius: 20px;
        padding: 33px;
        height: 100%;
    }

    @media screen and (max-width: 767px) {
        .utf_home_form_one {
            border-radius: 6px;
        }

        .utf_main_banner_area fieldset .form-control:first-child {
            border-radius: 4px;
        }

        .utf_main_banner_area fieldset .form-control:first-child {
            padding-left: 20px;
        }

        .utf_main_banner_area fieldset .form-control,
        .utf_main_banner_area fieldset .seub-btn,
        .utf_main_banner_area fieldset select.selectpicker {
            padding: 10px 20px;
            height: 50px;
        }

        .utf_main_banner_area fieldset .seub-btn {
            margin-bottom: 0;
            border-radius: 4px !important;
        }

        .utf_main_banner_area fieldset .form-control,
        .utf_main_banner_area fieldset .seub-btn,
        .utf_main_banner_area fieldset select.selectpicker {
            padding: 10px 20px;
            height: 50px;
        }

        .utf_main_banner_area .form-control {
            margin-bottom: 10px;
        }

        .utf_main_banner_area {
            padding-top: 80px;
        }
    }

    @media screen and (max-width: 992px) {
        .utf_main_banner_area h2 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 43px;
        }

    }

    @media screen and (max-width: 500px) {
        .utf_main_banner_area h2 {
            font-size: 35px;
        }

        .logo-scam {
            width: 100% !important;
        }

        .embed-responsive-item {
            height: 200px !important;
        }
    }

    @media screen and (max-width: 400px) {
        .utf_main_banner_area h2 {
            font-size: 30px;
        }
    }

    @media screen and (max-width: 1024px) {
        iframe.embed-responsive-item {
            height: 368px !important;
        }

        /*.hidden {
		display:none !important;
	}
	.video-embed{
		max-width:85% !important;
		flex:85% !important;
		margin:0 auto;
	}*/
    }

    .alert.alert-success strong {
        font-size: 20px;
    }

    .embed-responsive {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
    }

    .video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .scamadvisor {
        width: 40%;
    }

    .boxes-scam {
        display: flex;
        flex-wrap: wrap
    }

    .boxes-scam [class*="col-"] {
        margin-bottom: 30px;
    }
</style>




<div class="utf_main_banner_area" style="background-image:url('<?php the_field('top_banner_background_image');?>');" data-overlay="8">
    <div class="max-w-1140px mx-auto px-[15px] xl:px-0">
        <div class="w-full md:w-8/12 relative">
            <div class="caption cl-white home_two_slid">
                <h2><?php the_field('top_banner_heading');?></h2>
                <p><?php the_field('top_banner_text');?></p>
            </div>
            <form id="domainsearchprocess" action="<?php echo site_url();?>/scamsleuth" method="post">
                <fieldset class="utf_home_form_one row flex" style="margin:0px;">
                    <div class="w-10/12	 p-0">
                        <input type="text" class="form-control br-1" name="keywords" id="keywords" placeholder="Enter a website..." value="" required="">
                    </div>


                    <div class="w-2/12	 p-0 m-clear">
                        <button type="submit" onclick="return validation();" class="bg-golden btn theme-btn cl-white seub-btn">Search</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="max-w-1140px mx-auto ">
    <div class="row">
        <div class="w-2/12 "></div>
        <div class="w-10/12	mx-auto">
            <p>


                <?php


                error_reporting(0);
                $db_username = "kkntwaqjgx"; // "wwwcybertracecom_ScamSleuth"; //database user name
                $db_password = "3v2UHbSAPB"; // "&7kBxK[1I~0g";//database password
                $db_database = "kkntwaqjgx"; // "wwwcybertracecom_ScamSleuth"; //database name
                ////$db_host="localhost";
                $db_host = "localhost";
                $db_port = 3306;
                //
                $con = mysqli_connect($db_host, $db_username, $db_password, $db_database, $db_port);

				
				

                function get_domain($url)
                {
                    $pieces = parse_url($url);
                    $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
                    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
                        return $regs['domain'];
                    }
                    return false;
                }

                function getAPIData($url = '')
                {
                    //$url = 'http://malware.testing.google.test/testing/malware/';
                    $var = "AIzaSyAilR7r3MOR9HpofxQ-EK9NvNqb8GaH5A8";
                    /*GET https://safebrowsing.googleapis.com/v4/threatLists?key=AIzaSyAilR7r3MOR9HpofxQ-EK9NvNqb8GaH5A8 HTTP/1.1
	Content-Type: application/json*/
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://safebrowsing.googleapis.com/v4/threatMatches:find?key=" . $var,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS => '{
		"client": {
		  "clientId":      "cybertrace",
		  "clientVersion": "1.5.2"
		},
		"threatInfo": {
		  "threatTypes":["MALWARE", "SOCIAL_ENGINEERING","THREAT_TYPE_UNSPECIFIED","UNWANTED_SOFTWARE","POTENTIALLY_HARMFUL_APPLICATION"],
		  "platformTypes":["WINDOWS"],
		  "threatEntryTypes":["URL"],
		  "threatEntries": [
			{"url": "' . $url . '"},
		  ]
		}
		  }',
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache",
                            "content-type: application/json"
                        ),
                    ));

                    $response = curl_exec($curl);
                    $err = curl_error($curl);

					
                    curl_close($curl);

                    if ($err) {
                        return "cURL Error #:" . $err;
                    } else {
                        return $response;
                    }
                }

                function getAPIDataScamadviser($url = '')
                {
                    $curl = curl_init();

                    // set our url with curl_setopt()
                    curl_setopt($curl, CURLOPT_URL, "https://api.scamadviser.cloud/v2/trust/single?apikey=8C59zgOXHm4kcDAbxvvgvQHndxBSlVxO&domain=" . $url);

                    // return the transfer as a string, also with setopt()
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                    // curl_exec() executes the started curl session
                    // $output contains the output string
                    $output = curl_exec($curl);

                    // close curl resource to free up system resources
                    // (deletes the variable made by curl_init)
                    curl_close($curl);

                    return $output;

                }


				
                if (isset($_POST['keywords']) && trim($_POST['keywords']) != '') {
                    $danger = 0;
                    $warning = 0;
                    $keywords = get_domain(strtolower($_POST['keywords']));
                    if ($keywords == '') {
                        $keywords = strtolower($_POST['keywords']);
                    }
                    //$_SESSION['keywords']=$_POST['keywords'];

                    //////////// Whitelist Data ////////
                    $expKeyword = explode("/", str_replace("www.", "", $keywords));

                    ///////////Insert Search /////////
                    $browser = getBrowser();
                    $browserName = $browser['name'];
                    $OS = $browser['platform'];
                    $searched_domain = strtolower($expKeyword[0]);
                    //echo "insert into searched_domain (`searched_domain`,`browser`,`os`,`ip_address`,`created`) VALUES ('".$searched_domain."', '".$browserName."', '".$OS."', '".$_SERVER['REMOTE_ADDR']."','".date('Y-m-d H:i:s')."')";exit;
                    //if($searched_domain!='https:')
                    if ($keywords != '') {
                        mysqli_query($con, "insert into searched_domain (`searched_domain`,`browser`,`os`,`ip_address`,`created`) VALUES ('" . $searched_domain . "', '" . $browserName . "', '" . $OS . "', '" . $_SERVER['REMOTE_ADDR'] . "','" . date('Y-m-d H:i:s') . "')");
                    }
                    //////////////////////////////////






                    $whitelistquery = mysqli_query($con, "SELECT * FROM `whitelist_data`");


                    while ($whitelistqueryVal = mysqli_fetch_array($whitelistquery)) {
                        if ($whitelistqueryVal['whitelist_value'] != '') {
                            //echo strtolower($expKeyword[0])."===".strtolower($whitelistqueryVal['whitelist_value']);
                            //if(strpos($expKeyword[0], strtolower($whitelistqueryVal['whitelist_value'])) !== false)
                            if (strtolower(trim($expKeyword[0])) == strtolower(trim($whitelistqueryVal['whitelist_value']))) {
                                $success = 1;
                                //header('Location: /scam-sleuth');
                                //exit;
                            }
                        }
                    }

                    //////////// Whitelist Data End ////////


                    //////////// Scamadviser API Data High Risk////////
                    $apiData = getAPIDataScamadviser($keywords);

                    $apiDataScore = (json_decode($apiData));
					
					//print_r($apiDataScore);
                    $score = $apiDataScore->score;


                    //////////// Red Flags Data ////////
                    //SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(LOWER(`website_url`), '/', 3), '://', -1), '/', 1), '?', 1)
                    //$query = mysqli_query($con,"SELECT * FROM `risk_master_script` WHERE LOWER(`website_url`) = '".$keywords."' ORDER BY `created_on` DESC");
                    $query = mysqli_query($con, "SELECT * FROM `risk_master_script` WHERE SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(LOWER(`website_url`), '/', 3), '://', -1), '/', 1), '?', 1) = '" . $keywords . "' and risk_level NOT IN ('2','3') ORDER BY `created_on` DESC");
                    $redFlags = mysqli_fetch_array($query);
                    if (count($redFlags) > 0) {
                        $danger++;
                        $danger_sh = $danger;
                        //header('Location: /scam-sleuth');
                        //exit;
                    }
                    //////////// Red Flags Data End ////////


                    ///////////////// Risk Level Danger Start //////////////
                    $riskLevelqueryVal = mysqli_fetch_array(mysqli_query($con, "SELECT risk_level FROM `risk_master_script` where website_url='" . $_POST['keywords'] . "' or website_url='http://" . $_POST['keywords'] . "' or website_url='https://" . $_POST['keywords'] . "' or website_url='http://www." . $_POST['keywords'] . "' or website_url='https://www." . $_POST['keywords'] . "'"));

                    if ($riskLevelqueryVal['risk_level'] != '') {

                        if ($riskLevelqueryVal['risk_level'] == '1') {
                            $danger++;
                            $danger_sh = $danger;
                            //header('Location: /scam-sleuth');
                            //exit;
                        }
                    }

                    ///////////////// Risk Level Danger End //////////////

                    //////////// Scamadviser API Data Potential Risk////////
                    if ($score > 32 && $score <= 75) {
                        $warning++;
                        $warning_sh = $warning;
                        //header('Location: /scam-sleuth');
                        //exit;
                    }
                    //////////// Scamadviser API Data Potential Risk End////////

                    //////////// Risk Words Data ////////
                    $expKeyword = explode(".", str_replace("www.", "", $keywords));
                    //$riskWordsquery = mysqli_query($con,"SELECT * FROM `risk_words` WHERE ( `risk_word` LIKE '%".$expKeyword[0]."%' ESCAPE '!')");
                    $riskWordsquery = mysqli_query($con, "SELECT * FROM `risk_words`");

                    $riskWordsArray = array();
                    while ($riskWords = mysqli_fetch_array($riskWordsquery)) {
                        if ($riskWords['risk_word'] != '') {
                            if (strpos($expKeyword[0], strtolower($riskWords['risk_word'])) !== false) {

                                $warning++;
                            }
                        }
                    }
                    if ($warning > 0) {
                        $warning_sh = $warning;
                        //header('Location: /scam-sleuth');
                        //exit;
                    }
                    //////////// Risk Words Data End ////////


                    if ($riskLevelqueryVal['risk_level'] != '') {

                        if ($riskLevelqueryVal['risk_level'] == '2') {
                            $warning++;
                            $warning_sh = $warning;
                            //header('Location: /scam-sleuth');
                            //exit;
                        }
                        if ($riskLevelqueryVal['risk_level'] == '3') {
                            $success = 1;
                            //header('Location: /scam-sleuth');
                            //exit;
                        }
                    }

                    if ($score >= 0 && $score <= 32) {
                        $danger++;
                        $danger_sh = $danger;
                        //header('Location: /scam-sleuth');
                        //exit;
                    }

                    //////////// Scamadviser API Data End////////

                    //////////// Google API Data High Risk ////////
                    $apiData = getAPIData($keywords);
                    if (trim($apiData) != '{}') {
                        $danger++;
                        $danger_sh = $danger;
                        //header('Location: /domain-risk');
                        //exit;
                    }
                    //////////// Google API Data End////////

                    $success = 1;
                    //header('Location: /scam-sleuth');
                }

                function getBrowser()
                {
                    $u_agent = $_SERVER['HTTP_USER_AGENT'];
                    $bname = 'Unknown';
                    $platform = 'Unknown';
                    $version = "";

                    //First get the platform?
                    if (preg_match('/linux/i', $u_agent)) {
                        $platform = 'linux';
                    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                        $platform = 'mac';
                    } elseif (preg_match('/windows|win32/i', $u_agent)) {
                        $platform = 'windows';
                    }

                    // Next get the name of the useragent yes seperately and for good reason
                    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
                        $bname = 'Internet Explorer';
                        $ub = "MSIE";
                    } elseif (preg_match('/Firefox/i', $u_agent)) {
                        $bname = 'Mozilla Firefox';
                        $ub = "Firefox";
                    } elseif (preg_match('/OPR/i', $u_agent)) {
                        $bname = 'Opera';
                        $ub = "Opera";
                    } elseif (preg_match('/Chrome/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
                        $bname = 'Google Chrome';
                        $ub = "Chrome";
                    } elseif (preg_match('/Safari/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
                        $bname = 'Apple Safari';
                        $ub = "Safari";
                    } elseif (preg_match('/Netscape/i', $u_agent)) {
                        $bname = 'Netscape';
                        $ub = "Netscape";
                    } elseif (preg_match('/Edge/i', $u_agent)) {
                        $bname = 'Edge';
                        $ub = "Edge";
                    } elseif (preg_match('/Trident/i', $u_agent)) {
                        $bname = 'Internet Explorer';
                        $ub = "MSIE";
                    }

                    // finally get the correct version number
                    $known = array('Version', $ub, 'other');
                    $pattern = '#(?<browser>' . join('|', $known) .
                        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
                    if (!preg_match_all($pattern, $u_agent, $matches)) {
                        // we have no matching number just continue
                    }
                    // see how many we have
                    $i = count($matches['browser']);
                    if ($i != 1) {
                        //we will have two since we are not using 'other' argument yet
                        //see if version is before or after the name
                        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                            $version = $matches['version'][0];
                        } else {
                            $version = $matches['version'][1];
                        }
                    } else {
                        $version = $matches['version'][0];
                    }

                    // check if we have a number
                    if ($version == null || $version == "") {
                        $version = "?";
                    }

                    return array(
                        'userAgent' => $u_agent,
                        'name'      => $bname,
                        'version'   => $version,
                        'platform'  => $platform,
                        'pattern'    => $pattern
                    );
                }

                ?>

                <?php
                //print_r($_SESSION);
                if ($danger_sh != '') {
                ?>
            <div class="alert alert-danger" role="alert" style="color:red;"><strong><?php echo $_POST['keywords'] . "<br/><br/>"; ?></strong>Warning - High Risk Website</div>
        <?php
                } else if ($warning_sh != '') {
        ?>
            <div class="alert alert-warning" role="alert"><strong><?php echo $_POST['keywords'] . "<br/><br/>"; ?></strong>Potential Risk Identified</div>
        <?php
                } else if ($success != '') {
        ?>
            <div class="alert alert-success" role="alert">

                <strong><?php echo $_POST['keywords'] . "<br/><br/>"; ?></strong>No risks identified. Invest with caution.
            </div>
        <?php
                }
        ?>
        </p>
        </div>
        <div class="w-2/12	"></div>

    </div>
</div>



<div class="max-w-1140px mx-auto " style="margin-top:50px; margin-bottom:50px;">
    <div class="row">
        <div class="w-2/12	 hidden"></div>
        <div class="w-8/12	mx-auto video-embed">
            <div class="embed-responsive embed-responsive-1by1">
                <iframe class=" video" src="https://www.youtube.com/embed/<?php the_field('scam-youtube-id');?>?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="w-2/12	 hidden"></div>
    </div>
</div>

<!-- <div class="container">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <p style="font-size:20px;font-weight:700;">Advertising Disclaimer:</p>
            <p style="font-weight:400;">We Display advertisements and sponsored links on our website, and we receive a small advertising fee. This helps us keep ScamSleuth free to use.</p>
            <p style="font-weight:400;"><u>We cannot control the content of ads which are supplied by a third-party. </u></p>
        </div>
        <div class="col-md-3"></div>
    </div>


</div> -->




<div class="max-w-1140px mx-auto ">

    <div class="row flex boxes-scam" style="margin-bottom:30px;margin-top:50px;">
        <div class="mb-2 w-full sm:w-6/12 sm:mb-0 px-[15px]">
            <div class="scam-sleuth-boxes" style="margin-bottom:10px;">
                <p class="font-bold"><?php the_field('scam_left_box_text');?></p>

                <?php $scam_left_box_link   = get_field('scam_left_box_link');?>
                <a class="transition-all text-base font-nunito font-medium capitalize tracking-wider bg-golden text-white px-4 py-2 inline-flex items-center justify-center rounded-full border border-golden hover:bg-transparent hover:border hover:border-golden hover:text-golden" href="<?php echo $scam_left_box_link['url'];?>"><?php echo $scam_left_box_link['title'];?></a>
            </div>
        </div>
        <div class="w-full sm:w-6/12	px-[15px]">
            <div class="scam-sleuth-boxes">
                <p class="text-left font-bold" style="font-size:20px;"><?php the_field('scam_right_box_heading');?></p>
                <a href="<?php the_field('scam_right_box_url');?>" target="_blank">
                    <img style="width:40%;" class="scamadvisor" src="<?php the_field('scam_right_box_image');?>" class="img-responsive">
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div style="text-align:center;display:block;width:100%;margin-bottom:30px;">
            <a style="color: #ba8c49;text-decoration:underline;" class="link-pg font-bold" href="/disclaimer">DISCLAIMER</a>
        </div>
    </div>

</div>


<?php get_footer(); ?>

<script>
    function validation() {
        var keywords = document.getElementById("keywords").value;

        if (keywords === '') {
            alert("Please enter a domain name only. Do not include https:// or www.");
            document.getElementById("keywords").focus();
            return false;
        } else {
            const chars = keywords.split('/');


            if (chars[0] == 'http' || chars[0] == 'https') {
                alert("Please enter a domain name only. Do not include https:// or www.");
                document.getElementById("keywords").focus();
                return false;

            } else {
                keywords = chars[0];
            }

            if (/^[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9](?:\.[a-zA-Z]{2,})+$/.test(keywords)) {
                document.getElementById('domainsearchprocess').submit();
                return true;
            } else {
                alert("Please enter a domain name only. Do not include https:// or www.");
                document.getElementById("keywords").focus();
                return false;
            }

        }
    }
</script>