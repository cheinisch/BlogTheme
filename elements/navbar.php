            <@ ../inc/header-image.php @>
                    <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                        <@~ header-image.php @>
                        <@ if @{ :imageCard } ~@>
                        <nav class="navbar navbar-expand-md <@ if @{ checkboxDarkTitle } @>navbar-dark-text<@ end @> mb-4">
                        <@~ else ~@>
                        <nav class="navbar navbar-expand-md mb-4">
                        <@~ end ~@>
                    <@ end @>               
                
                    <!---->
                    <div class="container-md col-lg-10 nav-size">
                    <a class="navbar-brand <@ if @{ checkboxDarkTitle } @>navbar-dark-text<@ end @>" href="/"><@ if not @{ checkboxBigTitle } @>@{ sitename }<@ end @></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0 navbar-nav col-lg-12 justify-content-lg-end">
							<@ newPagelist { type: false, excludeHidden: false } @>
								<@ foreach in pagelist @>
									<@ if @{ checkboxShowInNavbar } @>
										<@ if @{ :current } @>
											<li class="nav-item  <@ if @{ checkboxDarkTitle } @>navbar-dark-text<@ end @> active" aria-current="page"><a class="nav-link <@ if @{ checkboxDarkTitle } @>navbar-dark-text<@ end @> active" aria-current="page" href="@{ url }">@{ title }</a></li>
										<@ else @>
											<li class="nav-item <@ if @{ checkboxDarkTitle } @>navbar-dark-text<@ end @>"><a class="nav-link <@ if @{ checkboxDarkTitle } @>navbar-dark-text<@ end @>" href="@{ url }">@{ title }</a></li>
										<@ end @>
									<@ end @>
								<@ end @>
							<@ end @>
                            </ul>
                        </div>
                    </div>
                </nav>