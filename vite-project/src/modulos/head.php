<?php
// Set the session cookie with secure and httpOnly attributes
$secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
$httponly = true;

// Set the session cookie
setcookie(session_name(), session_id(), 0, '/', '', $secure, $httponly);

// Start the session
session_start();

if (empty($head_title)) $head_title = 'Seguros de Decesos ▷ Precios y Coberturas de 20 Aseguradoras';
if (empty($head_descripcion)) $head_descripcion = 'Comparador de seguro de decesos ▷ Encuentra los mejores precios y coberturas en seguros de decesos en nuestra comparativa. ¡Fácil, rápido y con contratación online!';
if (empty($head_keywords)) $head_keywords = 'seguro decesos, comparador seguro decesos';

$linkActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($_SERVER['REQUEST_URI'] == '/') {
    $linkActual = substr($linkActual, 0, -1);
}
$linkActual = explode('.php', $linkActual)[0];
if (isset($noindex) && $noindex == true) {
    echo '<meta name="robots" content="noindex,follow">';
} else {
    echo '<meta name="robots" content="index,follow">';
}
?>

<link href="<?= $linkActual; ?>" rel="canonical">
<meta name="google-site-verification" content="aLoQt5I-ge0uI_uEo8EcDk7O2dJjhk3JDY5gg9vaFkM" />
<meta charset="utf-8">

<!--DNS Prefetch and Preconnect for third-party domains -->
<link rel="dns-prefetch" href="//consent.cookiebot.com">
<link rel="preconnect" href="//consent.cookiebot.com" crossorigin>

<!--Cookiebot Consent Script (async) -->
<script defer id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="21c6b120-ae49-4fef-a00e-b311fc23d503" data-blockingmode="auto" type="text/javascript"></script>

<!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NDBHTMH');
</script>
<!-- End Google Tag Manager -->

<!--DNS preconnect PROBAR EN PRODUCCIÓN -->

<!--<link rel="preconnect" href="//ajax.googleapis.com">
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<link rel="dns-prefetch" href="https://use.fontawesome.com">
<link rel="preconnect" href="https://use.fontawesome.com" crossorigin>-->
<!--Google Analytics -->
<!--<link rel="dns-prefetch" href="//www.google-analytics.com">
<link href="//www.google-analytics.com" rel="preconnect" crossorigin>

<!-- Google Tag Manager -->
<!--<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link href="//www.googletagmanager.com" rel="preconnect" crossorigin>
<link rel="dns-prefetch" href="//mc.yandex.ru">
<!--DNS preconnect PROBAR EN PRODUCCIÓN -->

<title><?= $head_title; ?></title>
<meta name="description" content="<?= $head_descripcion; ?>">
<meta name="keywords" content="<?= $head_keywords; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<base href="https://www.comparadorsegurodecesos.es/" />

<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<!--Agregar el atributo preload a la primera etiqueta link -->
<link rel="preload" href="/css/bootstrap.min.css" as="style">
<link href="/css/bootstrap.min.css" rel="stylesheet" media="all">

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (window.location.pathname === '/') {
            var link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'image';
            link.href = '/images/fondo_banner_ppal.webp';
            document.head.appendChild(link);
        }
    });
</script>

<!--Agregar el atributo preload a la primera etiqueta link -->
<link rel="preload" href="/css/estilo.css" as="style">
<link href="/css/estilo.css" rel="stylesheet" media="all">

<!--Agregar el atributo preload a la segunda etiqueta link -->
<link rel="preload" href="/css/all.min.css" as="style">
<link href="/css/all.min.css" rel="stylesheet" media="all">

<!--<link rel="stylesheet" href="/css/all.min.css">-->
<link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon/favicon.ico" type="image/x-icon">
</head>

 
 
 
 
 
 
 
 


