<?php /* Template Name: Sanction Watch */
session_start();
get_header();

if (empty($_REQUEST['detail'])) :
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
                display: flex;
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

        .loader {
            display: none;
        }

        ul#ui-id-1 {
            position: absolute;
            top: 95%;
            left: 4%;
            border: none;
            padding: 10px 20px;
            background: #fff;
            z-index: 1;
            width: 77.5%;
        }

        @media screen and (max-width: 575px) {
            ul#ui-id-1 {
                top: 83%;
                left: 4.3%;
                width: 91.5%;
            }
        }

        @media screen and (max-width: 460px) {
            ul#ui-id-1 {
                top: 84%;
                left: 5.3%;
                width: 89.5%;
            }
        }

        @media screen and (max-width: 400px) {
            ul#ui-id-1 {
                top: 85%;
                left: 6.3%;
                width: 87.5%;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
        }

        .overlay {
            display: none;
            background: url(https://icon-library.com/images/loading-icon-transparent-background/loading-icon-transparent-background-12.jpg) 88% no-repeat;
            background-size: 15%;
        }
    </style>




    <div class="utf_main_banner_area" style="background-image:url('<?php the_field('sanction_background_image');?>');" data-overlay="8">
        <div class="max-w-1140px mx-auto px-[15px] xl:px-0">
            <div class="w-full md:w-8/12 relative">
                <div class="caption cl-white home_two_slid">
                    <h2><?php the_field('sanction_heading');?></h2>
                    <p><?php the_field('sanction_description');?></p>
                </div>
                <form id="sacntionwatch" method="post">
                    <fieldset class="utf_home_form_one row flex" style="margin:0px;">
                        <div class="w-10/12	 p-0">
                            <input type="text" class="form-control br-1 form-control ui-autocomplete" name="searchname" id="searchname" required="required" value="<?php echo $_POST['searchname']; ?>" placeholder="Enter a Full Person Name, or Company Name..." value="" required="">
                        </div>


                        <div class="w-2/12	 p-0 m-clear">
                            <button type="submit" class="btn theme-btn cl-white seub-btn" name="sanctionwatch_submit">Search</button>
                        </div>
                    </fieldset>
                </form>


                <div class="data_get"></div>

                <div id="loader" style="display: none;">
                    <img src="/wp-content/uploads/2022/11/KlutzyMadeupHarpseal-max-1mb.webp" style="height:30px;">
                </div>

            </div>
        </div>
    </div>
    <div class="max-w-1140px mx-auto px-[15px] xl:px-0">
        <div class="row">
            <div class="w-full mb-5">
                <div class="table-responsive">
                    <?php
                    if (isset($_REQUEST['search_type']) && $_REQUEST['search_type'] == 'similar') {
                        echo '<h3 class="header smaller lighter green">No Exact Match Found</h3>';
                    }
                    ?>
                    <style>
                        .redclass {
                            background-color: #f8d7da;
                            color: #721c24;
                        }

                        .greenclass {
                            background-color: #d4edda;
                            color: #155724;
                        }

                        .table-bordered td,
                        .table-bordered th {
                            border: 1px solid rgba(0, 0, 0, .125);
                        }
                    </style>
                    <?php /*?>		  <h3 class="header smaller lighter blue"><?php echo  ucfirst($_REQUEST['search_type'])." Matched "; ?>Search (<?php echo  $_SESSION['sanction_found']; ?>)</h3>
<?php */ ?>

                    <table id="sample-table-2" class="w-full my-3">
                        <thead class="bg-golden">
                            <tr class="text-left">
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">ID</th>
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">Sanction</th>
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">PEP</th>
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">Classification</th>
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">Name</th>
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">Status</th>
                                <th class="text-base font-roboto leading-0 border border-gray-300 p-[10px]">Details</th>
                            </tr>
                        </thead>
                        <tbody id="sanction_data">





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    $data_fetch    = $_SESSION['found'];
    $counter = 1;
    foreach ($data_fetch as $row => $val) {

        /*			$valuepep = "No";
					if(trim($val['Is_pep']) == 1)
					{
					  $valuepep = 	"Yes";
					  $class_pep = "redclass";
					}
					else
					{
					   $valuepep = "No";	
					   $class_pep = "greenclass";
					}
					
					
					$valuesanction = "No";
					if(trim($val['ExclusionType']) != "")
					{
					  $valuesanction = 	trim($val['ExclusionType']);
					  $class_sanction = "redclass";
					}
					elseif(trim($val['ExclusionProgram']) != "")
					{
					   $valuesanction = 	trim($val['ExclusionProgram']);	
					   $class_sanction = "redclass";
					}
					elseif(trim($valuepep) == "No")
					{
					   $valuesanction =  "Yes";	
					   $class_sanction = "redclass";
					}
					else
					{
					   $valuesanction = "No";	
					   $class_sanction = "greenclass";
					}*/


    ?>

    <?php
        $counter++;
    }
    ?>

    <!--
<div class="container" style="margin-top:50px; margin-bottom:50px;">
    <div class="row">
        <div class="col-md-2 hidden"></div>
        <div class="col-md-8 video-embed">
            <div class="embed-responsive embed-responsive-1by1">
                <iframe class=" video" src="https://www.youtube.com/embed/py3tsDeJydQ?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-2 hidden"></div>
    </div>
</div>
-->





    <div class="max-w-1140px mx-auto px-[15px] xl:px-0">

        <div class="row boxes-scam" style="margin-bottom:30px;margin-top:50px;">
            <div class="w-full sm:w-6/12	px-[15px]">
                <div class="scam-sleuth-boxes" style="margin-bottom:10px;">
                    <p><?php the_field('sanction_contact_box_text');?></p>
					<?php
						$sanction_contact_box_button	=	 get_field('sanction_contact_box_button');
					?>
                    <a class="transition-all text-base font-nunito font-medium capitalize tracking-wider bg-golden text-white px-4 py-2 inline-flex items-center justify-center rounded-full border border-golden hover:bg-transparent hover:border hover:border-golden hover:text-golden " href="<?php echo $sanction_contact_box_button['url'];?>"><?php echo $sanction_contact_box_button['title'];?></a>
                </div>
            </div>
            <div class="w-full sm:w-6/12	px-[15px]">
            </div>
        </div>

        <div class="row">
            <div style="text-align:center;display:block;width:100%;margin-bottom:30px;">
				<?php $sanction_disclaimer	=	get_field('sanction_disclaimer');?>
                <a style="color: #ba8c49;text-decoration:underline;" class="link-pg" href="<?php echo  $sanction_disclaimer['url'];?>">
					<?php echo  $sanction_disclaimer['title'];?>
				</a>
            </div>
        </div>

    </div>
    <div class="overlay"></div>



    <?php get_footer(); ?>



    <script>
        jQuery("body").click(function() {

            jQuery(".data_get").hide();
        });

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this,
                    args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function() {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }

        jQuery('#searchname').keyup(delay(function(e) {


            var userInput = jQuery('#searchname').val();
            if (userInput.length > 3) {
                jQuery("#loader").show();
                jQuery.ajax({
                    url: '<?php echo site_url();?>/sanctionwatch.php',
                    type: 'post',
                    data: {
                        searc_field: jQuery('#searchname').val(),
                    },
                    success: function(data) {
                        jQuery("#loader").hide();
                        if (data == '') {
                            jQuery('#ui-id-1').hide();
                            jQuery(".data_get").hide();
                            jQuery('.data_get').val(ui.item.label);
                        } else {
                            jQuery('.data_get').html(data);
                            jQuery(".data_get").show();
                        }


                    },
                });
            }


        }, 500));




        jQuery(".ui-menu-item").click(function() {

            jQuery(this).addClass("selected");
        });


        jQuery('.data_get').on('click', 'li', function() {
            jQuery('.data_get ul li.selected').removeClass('selected');
            jQuery(this).addClass('selected');


            var selectedtext = jQuery(this).text();
            jQuery("#searchname").val(jQuery(this).text());
            jQuery(".data_get").hide();

        });

        jQuery("#sacntionwatch").submit(function(e) {
            e.preventDefault();
            jQuery(".seub-btn").addClass("overlay");
            jQuery.ajax({
                url: '<?php echo site_url();?>/sanctionwatch.php',
                type: 'post',
                data: {
                    search_data: jQuery('#searchname').val(),
                },
                success: function(data) {
                    jQuery("#loader").hide();
                    jQuery("html, body").animate({
                        scrollTop: 500
                    }, "slow");
                    if (data == '') {
                        jQuery(".seub-btn").removeClass("overlay");
                        jQuery('#sanction_data').html('<p>No Exact Match Found.</p>');

                    } else {
                        jQuery("body").removeClass("loading");
                        jQuery(".seub-btn").removeClass("overlay");
                        jQuery('#sanction_data').html(data);
                        jQuery("#sanction_data").show();
                    }


                }
            });
        });
    </script>

<?php elseif ($_REQUEST['detail']) : ?>
    <style>
        span.card-header.font-weight-bold.text-white.text-center {
            background-color: #c3a04f;
            display: block;
            text-align: center;
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
            color: #fff !important;
            font-weight: 700 !important;
            padding: 0.75rem 1.25rem;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            font-size: 21px;
            letter-spacing: 1px;
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
        }

        .py-4 {
            padding-bottom: 1.5rem !important;
            padding-top: 1.5rem !important;
        }

        .card {
            position: relative;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
            padding: 1.5rem !important;
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: 400;
            color: #c3a04f;
        }

        .card strong {
            color: #333;
        }

        .card tr td {
            border: 1px solid #b7b5b5 !important;
        }

        .card table {
            margin: 0px;
        }

        .backtosearch {
            color: #1d1d1d;
            font-size: 18px;
            margin-bottom: 20px;
            display: block;
            font-weight: 500;
            text-decoration: underline;
        }

        .card tr td:first-child {
            font-weight: bold;
            background: #000;
        }
    </style>


    <?php
    error_reporting(0);
    $db_username = "u359034754_crm"; // "wwwcybertracecom_ScamSleuth"; //database user name
    $db_password = "9452299320"; // "&7kBxK[1I~0g";//database password
    $db_database = "u359034754_crm"; // "wwwcybertracecom_ScamSleuth"; //database name
    ////$db_host="localhost";
    $db_host = "185.224.137.230";
    $db_port = 3306;
    $con = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);
    $sql = mysqli_query($con, "SELECT * FROM `records` where id='" . $_REQUEST['detail'] . "'");
    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_array($sql)) {
    ?>


            <div class="container py-4">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <span class="card-header font-weight-bold text-white text-center">Details</span>
                        <div class="card">
                            <div style="text-align:right;">
                                <a class="backtosearch" href="/sanctionwatch/">Back To Search Page</a>
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>id</td>
                                        <td><?php echo $row['id']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Classification</td>
                                        <td><?php echo $row['Classification']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>OtherEntityName</td>
                                        <td><?php echo $row['OtherEntityName']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Full Name</td>
                                        <td><?php echo $row['Full_Name']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Address</td>
                                        <td><?php echo $row['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td><?php echo $row['City']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>State/Province</td>
                                        <td><?php echo $row['State/Province']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td><?php echo $row['Country']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ZipCode</td>
                                        <td><?php echo $row['ZipCode']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>DUNS</td>
                                        <td><?php echo $row['DUNS']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ExclusionProgram</td>
                                        <td><?php echo $row['ExclusionProgram']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ExcludingAgency</td>
                                        <td><?php echo $row['ExcludingAgency']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>CTCode</td>
                                        <td><?php echo $row['CTCode']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ExclusionType</td>
                                        <td><?php echo $row['ExclusionType']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>AdditionalComments</td>
                                        <td><?php echo $row['AdditionalComments']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ActiveDate</td>
                                        <td><?php echo $row['ActiveDate']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>TerminationDate</td>
                                        <td><?php echo $row['TerminationDate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>RecordStatus</td>
                                        <td><?php echo $row['RecordStatus']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>CrossReference</td>
                                        <td><?php echo $row['CrossReference']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>SAMNumber</td>
                                        <td><?php echo $row['SAMNumber']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>CAGE</td>
                                        <td><?php echo $row['CAGE']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>NPI</td>
                                        <td><?php echo $row['NPI']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Created date</td>
                                        <td><?php echo $row['Created_date']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>DOB</td>
                                        <td><?php echo $row['DOB']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Citizenship</td>
                                        <td><?php echo $row['Citizenship']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Passport</td>
                                        <td><?php echo $row['Passport']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Category</td>
                                        <td><?php echo $row['Category']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Is Pep</td>
                                        <td><?php echo $row['Is_pep']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Full Name Roman</td>
                                        <td><?php echo $row['Full_Name_Roman']; ?></td>
                                    </tr>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>







<?php

            $i++;
        }
    } else {
        //echo "No result found";
    }

    get_footer();
endif;
?>