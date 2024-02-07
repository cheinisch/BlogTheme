<!doctype html>
<html lang="de" data-bs-theme="auto">
<head>
	<!-- Metainformationen -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="John Doe">

	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<!-- Titel-->
	<title>@{ sitename } / @{ title }</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/packages/@{ theme }/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/packages/@{ theme }/css/bootstrap-icons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/packages/@{ theme }/css/style.css" rel="stylesheet" />

	<!-- Javascripte -->
</head>
<body>
	<!-- Bootstrap Static Header -->
	<div class="jumbotron bg-cover">
    <!--<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">-->
		<div class="container">
		<@ navbar.php @>
		</div>
            <div class="container py-5 headimg text-center">
                <h1 class="display-4 font-weight-bold"><@ if @{ checkboxSideTitleNavbar } @>@{ title }<@ else @> @{ sitename }<@ end @></h1>
                <!--<p class="font-italic mb-0">Ein wunderschöner Blog mit einer tollen Subline</p>
                <p class="font-italic">Snippe by
                    <a href="https://bootstrapious.com" class="text-white">
                        <u>Bootstrapious</u>
                    </a>
                </p> -->
            </div>
        </div>
        <!-- Header ende -->
