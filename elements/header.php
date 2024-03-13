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
	<title>@{ sitename } // @{ title }</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/packages/@{ theme }/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/packages/@{ theme }/css/bootstrap-icons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/packages/@{ theme }/css/style.css" rel="stylesheet" />

	<!-- Javascripte -->
	<script>
		(function () {
			const htmlElement = document.querySelector("html")
			if(htmlElement.getAttribute("data-bs-theme") === 'auto') {
			function updateTheme() {
				document.querySelector("html").setAttribute("data-bs-theme",
				window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light")
			}
				window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateTheme)
			updateTheme()
			}
		})();	
	</script>		
</head>
<body>
	<!-- Bootstrap Static Header -->
	
	<@ ../inc/header-image.php @>
		<@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
			<@~ header-image.php @>
			<@ if @{ :imageCard } ~@>
				<div style="background: url(@{ :imageCard })" class="jumbotron bg-cover text-white">                       
			<@~ else ~@>
				<div class="jumbotron bg-cover">
			<@~ end ~@>
		<@ end @>     
		<div class="container">
		<@ navbar.php @>
		</div>
            <div class="container py-5 headimg text-center">
                <h1 class="display-4 font-weight-bold"><@ if @{ checkboxBigTitle } @>@{ sitename }<@ else @> @{ title }<@ end @></h1>
                <!--<p class="font-italic mb-0">Ein wunderschöner Blog mit einer tollen Subline</p>
                <p class="font-italic">Snippe by
                    <a href="https://bootstrapious.com" class="text-white">
                        <u>Bootstrapious</u>
                    </a>
                </p> -->
            </div>
        </div>
        <!-- Header ende -->
