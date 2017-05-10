<?php 


// Add Thumbnails
add_theme_support('post-thumbnails');

add_action('wp_head', 'registerJquery');

function registerJquery() {
	$jquery = array(
		'depends' => array(),
		'version' => '1.0',
		'in_footer' => true,
	);
if(	!file_exists(dirname( __FILE__ ).'/plugins/jquery.js')) {
		$jquery['dir'] = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js";
		$jquery['version'] = '3.1.0';
	} else {
		$jquery['dir'] = get_template_directory_uri().'/js/script.js';
	}

	echo wp_enqueue_script('jQuery', $jquery['dir'], $jquery['depends'],  $jquery['version'],$jquery['in_footer']);		
}

// Add scripts
add_action('wp_enqueue_scripts', 'loadScripts');
function loadScripts() {
$scripts = [
	'Script' => [
		'dir' =>  get_template_directory_uri().'/dist/js/script-min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'AnimateCss' => [
		'dir' =>  get_template_directory_uri().'/plugins/scroll-animate/scroll-animate.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'owlCarousel' => [
		'dir' =>  get_template_directory_uri().'/plugins/owlCarousel/owl.carousel.min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'Angular' => [
		'dir' =>  get_template_directory_uri().'/plugins/Angular/angular-min.js',
		'depends' => [],
		'version' => '1.0',
		'in_footer' => false,
 	],
	'AngularCtrl' => [
		'dir' =>  get_template_directory_uri().'/js/angular.ctrl.js',
		'depends' => array('Angular'),
		'version' => '1.0',
		'in_footer' => false,
 	],
];

$styles = [
	'Style' => [
		'dir' => get_stylesheet_uri(),
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Animate' => [
		'dir' => get_template_directory_uri().'/plugins/scroll-animate/scroll-animate.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Styles' => [
		'dir' => get_template_directory_uri().'/dist/css/style.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'hamburger' => [
		'dir' => get_template_directory_uri().'/plugins/hamburger.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Font-Awesome' => [
		'dir' => get_template_directory_uri().'/plugins/font-awesome/css/font-awesome.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Google-Fonts' => [
		'dir' => 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Montserrat:300,400,500|Poppins:600,700|Dancing+Script:400,700|Petit+Formal+Script',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselCss' => [
		'dir' => get_template_directory_uri().'/plugins/OwlCarousel/assets/owl.carousel.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselTheme' => [
		'dir' => get_template_directory_uri().'/plugins/OwlCarousel/assets/owl.theme.default.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
];


	if($scripts) {
		foreach($scripts as $key => $script) {
			echo wp_enqueue_script($key, $script['dir'], $script['depends'],  $script['version'],$script['in_footer']);
		}
	}

	if($styles) {
		foreach($styles as $key => $style) {
			echo wp_enqueue_style($key, $style['dir'], $style['depends'],  $style['version'],$style['in_footer']);
		}
	}
};

add_action('wp_head', 'configHead');
function configHead() {
	$configs = array(
		'charset' => "<meta charset='UTF-8'>",
		'viewport' => "<meta name='viewport' content='width=device-width'>",
	);

	foreach($configs as $config) {
		echo $config . "\n";
	}
}


// Add Menu
add_action( 'after_setup_theme', 'registerMenu' );
function registerMenu() {
  register_nav_menu( 'primary', __( 'Menu principal', 'theme-slug' ) );
};

// Post Type
require dirname( __FILE__ ).'/includes/post_type.php';

// SEO
require dirname( __FILE__ ).'/includes/seo_function.php';

// Length dos posts
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action('init', 'createModel');

function createModel() {
	if(isset($_REQUEST['createPage'])) {
		$header = $_REQUEST['header'];
		$casal = $_REQUEST['casal'];
		$local = $_REQUEST['local'];
		$rsvp = $_REQUEST['rsvp'];
		$contagem = $_REQUEST['contagem'];
		$fotos = $_REQUEST['fotos'];
		$recados = $_REQUEST['recados'];
		$blog = $_REQUEST['blog'];
		$noiva = $_REQUEST['noiva'];
		$noivo = $_REQUEST['noivo'];

		$args = array(
			'post_title' => $noiva.'-e-'.$noivo,
			'post_type' => 'modelos',
			'post_status' => 'publish'
		);

		$post_id = wp_insert_post( $args );

		$fields = array(
					'header' => $header,
					'noivos' => $casal,
					'local' => $local,
					'rsvp' => $rsvp,
					'contagem' => $contagem,
					'galeria_de_fotos' => $fotos,	
					'recados' => $recados,
					'blog' => $blog,
					'nome_do_noivo' => $noivo,
					'nome_do_noiva' => $noiva
				);

			foreach ($fields as $key => $value) {
				echo '
					<script type="text/javascript">
						console.log("'.$key.' '.$value.'");
					</script>
					 ';
				update_field($key, $value, $post_id);
			}

		wp_redirect(get_permalink($post_id));
				
	}
}


?>