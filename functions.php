<?php



/**
 * Theme setup.
 */
function tailpress_setup()
{
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/*
    ==========================================
    Include files
    ==========================================
*/

require get_template_directory() . '/inc/gb-blocks.php';


// Image size

add_image_size('blog-img', 396, 265, true);



/*
    ==========================================
    Enqueue theme assets.
    ==========================================
*/

function tailpress_enqueue_scripts()
{

	$unique	=	 uniqid();
	$theme = wp_get_theme();

	$scripts_version = $unique;
	$scripts_version = '1.0.68';
	//$theme->get( 'Version' )
	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $scripts_version);

	// Font Awesome
	//wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '$scripts_version);


	// Google Fonts

	wp_enqueue_style('GoogleFonts-Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"', 'all');

	// Owl Carousel
	wp_enqueue_style('OwlCarousel', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.min.css', array(), $scripts_version);

	// style.css
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(),  $scripts_version);


	// JS
	// 	wp_enqueue_script('ajax-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array('jquery'), $scripts_version, true);

	wp_enqueue_script('jquery');

	wp_enqueue_script('alpinejs', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', array('jquery'), $scripts_version, true);


	wp_enqueue_script('OwlCarouseljs', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), $scripts_version, true);


	// Custom JS
	wp_enqueue_script('customJS', get_template_directory_uri() . '/assets/js/custom.js?', array(), $scripts_version, true);
}



add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts', 10);


add_action('wp_enqueue_scripts', 'defer_scripts', 2000);
function defer_scripts()
{
	global $wp_scripts;
	global $wp_styles;

	if (!is_admin()) { //  && isset($_GET['dv_test_4'])
		$styles_to_be_dequeued = array('wp-pagenavi', 'wp-block-library', 'wp-block-library-theme');
		$scripts_to_be_dequeued = array('alpinejs', 'monsterinsights-frontend-script');

		foreach ($styles_to_be_dequeued as $the_style) {
			// wp_dequeue_style($the_style);
			// wp_deregister_style($the_style);
			wp_style_add_data($the_style, 'async', true);
		}

		foreach ($scripts_to_be_dequeued as $the_script) {
			wp_dequeue_script($the_script);
			wp_deregister_script($the_script);
		}

		$wp_scripts->all_deps($wp_scripts->queue);
		$wp_styles->all_deps($wp_styles->queue);

		if (isset($_GET['dv_test_5'])) {
			echo "<h1> ------ Scripts ------ </h1>";
			foreach ($wp_scripts->to_do as $script) {
				echo $script . "<br/>";
			}

			echo "<h1> ------ Styles ------ </h1>";
			foreach ($wp_styles->to_do as $stl) {
				echo $stl . "<br/>";
			}
		}
		// die;
	}
}




/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);




if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'   => 'theme-general-settings',
	));
}



/* Add function code start 11-11-2022 */
require_once(ABSPATH . 'dan_halpin_curl_method.php');

/* WpForms submit after create lead in zohoCRM */
function wpf_dev_process_complete($fields, $entry, $form_data, $entry_id)
{
	$token = get_token();
	$header = array('Authorization: Zoho-oauthtoken ' . get_token() . '');

	/* Fraud Contact Form..... */
	if (absint($form_data['id']) == 188) {
		// echo '<pre>';print_r($_POST);die;

		$entry = wpforms()->entry->get($entry_id);
		$entry_fields = json_decode($entry->fields, true);

		// Phone Field
		$Phone = $fields[16]['value'];
		$str_contain = str_contains($Phone, "+");
		if ($Phone == $str_contain) {
			$removeSpecialChar = preg_replace('/[^0-9\-]/', '', $Phone);
			$data_arr['Phone'] = $removeSpecialChar;
		} else {
			$data_arr['Phone'] = $Phone;
		}

		$Phone2 = $fields[25]['value'];
		$str_contain2 = str_contains($Phone2, "+");
		if ($Phone2 == $str_contain2) {
			$removeSpecialChar2 = preg_replace('/[^0-9\-]/', '', $Phone2);
			$data_arr['Phone_number_of_the_offender'] = $removeSpecialChar2;
		} else {
			$data_arr['Phone_number_of_the_offender'] = $Phone2;
		}

		$data_arr['First_Name'] = $fields[0]['first'];
		$data_arr['Last_Name'] = $fields[0]['last'];
		$data_arr['Country'] = $fields[7]['value'];
		$data_arr['Email'] = $fields[1]['value'];
		$data_arr['Email_address_of_the_offender'] = $fields[26]['value'];
		$data_arr['How_did_you_hear_of_us'] = $fields[23]['value'];
		$data_arr['Referral_detail'] = $fields[24]['value'];
		$data_arr['Total_Funds_Lost'] = $fields[10]['value'];
		$data_arr['Bank_Account'] = $fields[18]['value'];
		$data_arr['Cryptocurrency_Wallet_ID'] = $fields[19]['value'];
		$data_arr['Transaction_ID'] = $fields[22]['value'];
		$data_arr['Company'] = $fields[9]['value'];
		$data_arr['Websites'] = $fields[21]['value'];
		$data_arr['Description'] = $fields[2]['value'];
		$data_arr['Lead_Status'] = "New Lead";
		$data_arr['Lead_Source'] = "Cybertrace.com.au - Fraud Contact Form";

		if ($fields[12]['value'] == "Yes, I agree") {
			$data_arr['I_have_read_and_agree_to_the_Cybertrace_Europe'] = true;
		} else {
			$data_arr['I_have_read_and_agree_to_the_Cybertrace_Europe'] = false;
		}

		$query['data'][] = $data_arr;
		$post_url = "https://www.zohoapis.com/crm/v2/Leads";
		$response  = curl($post_url, "POST", json_encode($query), $header);
		// echo "<pre>";print_r($response);die; 
	}

	/* General Contact Form..... */
	if (absint($form_data['id']) == 186) {
		// echo '<pre>';print_r($fields);die;

		// Phone Field
		$Phone = $fields[16]['value'];
		$str_contain = str_contains($Phone, "+");
		if ($Phone == $str_contain) {
			$removeSpecialChar = preg_replace('/[^0-9\-]/', '', $Phone);
			$data_arr['Phone'] = $removeSpecialChar;
		} else {
			$data_arr['Phone'] = $Phone;
		}

		$data_arr['First_Name'] = $fields[0]['first'];
		$data_arr['Last_Name'] = $fields[0]['last'];
		$data_arr['Country'] = $fields[7]['value'];
		$data_arr['Email'] = $fields[1]['value'];
		$data_arr['How_did_you_hear_of_us'] = $fields[23]['value'];
		$data_arr['Referral_detail'] = $fields[24]['value'];

		// My enquiry relates to
		$enquiry_relates = $fields[21]['value'];
		$string = str_replace("\n", ", ", $enquiry_relates);
		$exp_enquiry_relates = explode(", ", $string);
		$data_arr['My_enquiry_relates_to'] = $exp_enquiry_relates;

		$data_arr['Company'] = $fields[9]['value'];
		$data_arr['Website'] = $fields[17]['value'];
		$data_arr['Description'] = $fields[2]['value'];
		$data_arr['Lead_Status'] = "New Lead";
		$data_arr['Lead_Source'] = "Cybertrace.com.au - General Contact Form";

		if ($fields[12]['value'] == "Yes, I agree") {
			$data_arr['I_have_read_and_agree_to_the_Cybertrace_Europe'] = true;
		} else {
			$data_arr['I_have_read_and_agree_to_the_Cybertrace_Europe'] = false;
		}

		$query['data'][] = $data_arr;
		$post_url = "https://www.zohoapis.com/crm/v2/Leads";
		$response  = curl($post_url, "POST", json_encode($query), $header);
		// echo "<pre>";print_r($response);die; 
	}
}
add_action('wpforms_process_complete', 'wpf_dev_process_complete', 10, 4);


/*
	===========================
	  Excerpt Length
	===========================
*/

function ct_custom_excerpt_length($length)
{

	return 15;
}


add_filter('excerpt_length', 'ct_custom_excerpt_length', 999);


// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action('admin_head', 'fix_svg');



function reading_time()
{
	$content = get_post_field('post_content', $post->ID);
	$word_count = str_word_count(strip_tags($content));
	$readingtime = ceil($word_count / 200);

	return $readingtime;
}


function wpb_move_comment_field_to_bottom($fields)
{
	$comment_field 	= $fields['comment'];
	$author_field 	= $fields['author'];
	$email_field 	= $fields['email'];
	$url_field 		= $fields['url'];
	$cookies_field 		= $fields['cookies'];

	unset($fields['comment']);
	unset($fields['author']);
	unset($fields['email']);
	unset($fields['url']);
	unset($fields['cookies']);
	//print_r($fields);

	$fields['author'] = $author_field;
	$fields['email'] = $email_field;
	$fields['url'] = $url_field;
	$fields['comment'] = $comment_field;
	$fields['cookies'] = $cookies_field;
	return $fields;
}
add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom', 99, 1);


function placeholder_author_email_url_form_fields($fields)
{
	$replace_author = __('Name *', 'yourdomain');
	$replace_email = __('Your Email', 'yourdomain');
	$replace_url = __('Your Website', 'yourdomain');

	$fields['author'] = '<p class="comment-form-author">' . ' ' . ($req ? '<span class="required">*</span>' : '') .
		'<input class="font-normal bg-white py-3 px-[18px] focus-visible:outline-0 font-inter font-base border border-[#E4E4E7] rounded-lg text-[#A1A1AA] w-full" id="author" name="author" type="text" placeholder="' . $replace_author . '" value="' . esc_attr($commenter['comment_author']) . '" size="20"' . $aria_req . ' /></p>';

	$fields['email'] = '<p class="comment-form-email"> ' .
		($req ? '<span class="required">*</span>' : '') .
		'<input class="font-normal bg-white py-3 px-[18px] focus-visible:outline-0 font-inter font-base border border-[#E4E4E7] rounded-lg text-[#A1A1AA] w-full" id="email" name="email" type="text" placeholder="' . $replace_email . '" value="' . esc_attr($commenter['comment_author_email']) .
		'" size="30"' . $aria_req . ' /></p>';

	$fields['url'] = '<p class="comment-form-url">' .
		'<input class="font-normal bg-white py-3 px-[18px] focus-visible:outline-0 font-inter font-base border border-[#E4E4E7] rounded-lg text-[#A1A1AA] w-full" id="url" name="url" type="text" placeholder="' . $replace_url . '" value="' . esc_attr($commenter['comment_author_url']) .
		'" size="30" /></p>';

	return $fields;
}
add_filter('comment_form_default_fields', 'placeholder_author_email_url_form_fields');

function time_elapsed_string($datetime, $full = false)
{
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;

	$string = array(
		'y' => 'year',
		'm' => 'month',
		'w' => 'week',
		'd' => 'day',
		'h' => 'hour',
		'i' => 'minute',
		's' => 'second',
	);
	foreach ($string as $k => &$v) {
		if ($diff->$k) {
			$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		} else {
			unset($string[$k]);
		}
	}

	if (!$full) $string = array_slice($string, 0, 1);
	return $string ? implode(', ', $string) . ' ago' : 'just now';
}


function mytheme_comment($comment, $args, $depth)
{

	if ('div' === $args['style']) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}

	$classes = ' ' . comment_class(empty($args['has_children']) ? '' : 'parent', null, null, false);
?>

	<<?= $tag . $classes; ?> id="comment-<?php comment_ID() ?>">
		<?php if ('div' != $args['style']) { ?>
			<div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
																			} ?>

			<div class="flex">
				<div class="author">



					<?php
					if ($args['avatar_size'] != 0) {
						echo get_avatar($comment, $args['avatar_size']);
					}
					?>
				</div>


				<div class="pl-5 w-full">
					<div class="flex justify-between">
						<div class="">
							<?php
							printf(
								__('<cite class="fn text-[#3F3F46] font-inter font-medium text-base not-italic	">%s</cite>'),
								get_comment_author_link()
							);
							$time_elapsed_string	=	get_comment_date();

							$time_elapsed_string	=	time_elapsed_string($time_elapsed_string);
							?>
							<span class="block text-[#71717A] text-sm font-inter font-normal"><?php echo $time_elapsed_string; ?></span>
						</div>

						<div>
							<div class="reply">
								<?php
								comment_reply_link(
									array_merge(
										$args,
										array(
											'add_below' => $add_below,
											'depth'     => $depth,
											'max_depth' => $args['max_depth']
										)
									)
								); ?>

								<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 9L1 5M1 5L5 1M1 5H9C10.0609 5 11.0783 5.42143 11.8284 6.17157C12.5786 6.92172 13 7.93913 13 9C13 10.0609 12.5786 11.0783 11.8284 11.8284C11.0783 12.5786 10.0609 13 9 13H7" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
								</svg>

							</div>
						</div>


					</div>



					<?php if ($comment->comment_approved == '0') { ?>
						<em class="comment-awaiting-moderation">
							<?php _e('Your comment is awaiting moderation.'); ?>
						</em><br />
					<?php } ?>

					<div class="comment-meta commentmetadata">
						<a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
							<?php
							printf(
								__('%1$s at %2$s'),
							); ?>
						</a>

						<?php edit_comment_link(__('(Edit)'), '  ', ''); ?>
					</div>
					<div class="comment_data">
						<?php comment_text(); ?>
					</div>


					<?php if ('div' != $args['style']) { ?>
				</div>
			<?php } ?>


			</div>

			</div>


		<?php
	}





	function vista2231_enqueue_comments_reply()
	{

		if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
			// Load comment-reply.js (into footer)
			wp_enqueue_script('comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true);
		}
	}

	add_action('wp_enqueue_scripts', 'vista2231_enqueue_comments_reply');

	function preload_post_images()
	{
		global $post;
		$post_content = $post->post_content;

		// Extract all image URLs from the post content using a regular expression
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);

		// Create an array of image URLs
		$image_urls = $matches[1];

		// Add a link element to the head section for each image
		foreach ($image_urls as $image_url) {
			echo '<link rel="preload" as="image" href="' . $image_url . '" >' . "\n";
		}

		if (isset($_GET['faraz_test_10'])) {
			var_dump($image_urls);
			die;
		}
	}
	add_action('wp_head', 'preload_post_images', 1);
