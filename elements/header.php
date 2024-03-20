<!doctype html>
<html lang="de" data-bs-theme="auto">
<head>
	<!-- Metainformationen -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="@{ +main | findFirstParagraph | 150 }">
	<@ if @{ tags } @>
        <meta name="keywords" content="<@ foreach in tags 	@><@ if @{ :i } > 1 @>, @{ :tag }<@ else @>@{ :tag }<@ end @><@ end @>">
    <@ end @>
	<!-- Titel-->
	<title>@{ sitename } - @{ title }</title>

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
