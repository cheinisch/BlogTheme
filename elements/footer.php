<div class="container">
            <div class="col-lg-10 nav-size">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <@ if @{ itemsFooter } @>
                @{ itemsFooter }
            <@ else @>
                <p class="col-md-4 mb-0 text-body-secondary">&copy; <?php echo date("Y"); ?> @{ sitename }  <br />Made with <a href="https://automad.org">Automad</a> and <i class="bi-heart"></i></p>
            <@ end @>
            <ul class="nav col-md4 justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><i class="bi-github"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><i class="bi-instagram"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><i class="bi-facebook"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><i class="bi-youtube"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><i class="bi-tiktok"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><i class="bi-twitter"></i></a></li>
            </ul>

            <ul class="nav col-md-4 justify-content-end">
            <@ newPagelist { type: false, excludeHidden: false } @>
			<@ foreach in pagelist @>
				<@ if @{ checkboxShowInFooter } @>
					<li><a href="@{ url }" class="nav-link px-2 text-body-secondary">@{ title }</a></li>
				<@ end @>
			<@ end @>	
            </ul>
        </footer>
    </div>
        </div>
        <!-- Footer Ende -->
        <!-- Javascripte -->
        <script src="/packages/@{ theme }/js/bootstrap.min.js"></script>
        <!-- Javascripte Ende-->
    </body>
</html>