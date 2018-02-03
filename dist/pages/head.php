<?php
  if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@clannad.ca";
    $email_subject = "Message to Clannad Counselling & Consulting";

    function died($error) {
      // your error code can go here
      echo "We are very sorry, but there were error(s) found with the form you submitted. ";
      echo "These errors appear below.<br /><br />";
      echo $error."<br /><br />";
      echo "Please go back and fix these errors.<br /><br />";
      die();
    }

    // validation expected data exists
    if(!isset($_POST['formName']) ||
      !isset($_POST['email']) ||
      !isset($_POST['comments'])) {
      died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $formName = $_POST['formName']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$formName)) {
      $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if(strlen($comments) < 2) {
      $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
      died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Full Name: ".clean_string($formName)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

?>

    <!-- include your own success html here -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Thank you</strong> for contacting Clannad. We will be in touch with you very soon.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php
  }
  ?>

<!doctype html>
<html lang="en">

<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113301501-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113301501-1');
	</script>

	<!-- FIRST THREE REQUIRED META -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEARCH ENGINE META -->
	<meta name="robots" content="index,follow">
	<meta name="googlebot" content="index,follow">

	<!-- SEO & AUTHOR META -->
	<meta name="author" content="Evan Marshall">
	<meta name="description" content="Sample Description">
	<meta name="keywords" content="keyword 1, keyword 2">
	<title>Clannad</title>

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/img/favicons/manifest.json">
	<link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#49274A">
	<link rel="icon" href="/favicon.ico">
	<meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#49274A">

	<!-- FACEBOOK OPEN GRAPH META -->
	<meta property="fb:app_id" content="123456789">
	<meta property="og:url" content="https://example.com/page.html">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Content Title">
	<meta property="og:image" content="https://example.com/image.jpg">
	<meta property="og:description" content="Description Here">
	<meta property="og:site_name" content="Site Name">
	<meta property="og:locale" content="en_US">
	<meta property="article:author" content="">

	<!-- TWITTER CARD META -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@site_account">
	<meta name="twitter:creator" content="@individual_account">
	<meta name="twitter:url" content="https://example.com/page.html">
	<meta name="twitter:title" content="Content Title">
	<meta name="twitter:description" content="Content description less than 200 characters">
	<meta name="twitter:image" content="https://example.com/image.jpg">

	<!-- GOOGLE+ & SCHEMA.ORG META -->
	<link href="https://plus.google.com/+YourPage" rel="publisher">
	<meta itemprop="name" content="Content Title">
	<meta itemprop="description" content="Content description less than 200 characters">
	<meta itemprop="image" content="https://example.com/image.jpg">

	<!-- BOOTSTRAP 4 STYLESHEETS & CUSTOM - before all other stylesheets -->
	<link rel="stylesheet" href="/css/styles.css">

	<!-- MFB & MODERNIZR-->
	<script src="/js/modernizr.touch.js"></script>

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<!-- Oticons Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css" integrity="sha256-pNGG0948CVwfHxxS8lVkUKftaSsMBzFSUknrKr2utfY=" crossorigin="anonymous" />
	<!-- Iconic Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
