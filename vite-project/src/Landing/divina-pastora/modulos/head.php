<head>
<?php
	if (empty($head_title)) $head_title = 'Divina Pastora Decesos';
	if (empty($head_descripcion)) $head_descripcion = '';
	if (empty($head_keywords)) $head_keywords = '';

$linkActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($_SERVER['REQUEST_URI'] == '/'){$linkActual = substr($linkActual, 0, -1);}
$linkActual = explode('.php', $linkActual)[0];

if (isset($noindex) && $noindex == true) { echo '<meta name="robots" content="noindex,follow">';}
else {echo '<meta name="robots" content="index,follow">';}
?>
<script data-cookieconsent="ignore">
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("consent", "default", {
        ad_storage: "denied",
        analytics_storage: "denied",
        functionality_storage: "denied",
        personalization_storage: "denied",
        security_storage: "granted",
        wait_for_update: 2000,
    });
    gtag("set", "ads_data_redaction", true);
</script>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="21c6b120-ae49-4fef-a00e-b311fc23d503" data-blockingmode="auto" type="text/javascript"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDBHTMH');</script>
<!-- End Google Tag Manager -->

	<meta charset="utf-8">
	<link href="<?= $linkActual; ?>" rel="canonical">
	<title><?=$head_title;?></title>
	<meta name="description" content="<?=$head_descripcion;?>">
	<meta name="keywords" content="<?=$head_keywords;?>">
        <meta name="robots" content="noindex,nofollow" />
   	<!-- <link rel="canonical" href="" /> -->
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   	<link rel="stylesheet" type="text/css" href="css/estilo.css">
   	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="apple-touch-icon" sizes="57x57" href="../../images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../../images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../../images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../../images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
	<link rel="manifest" href="../../images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../../images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width,initial-scale=1">



</head>
