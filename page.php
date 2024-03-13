<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<@ elements/header.php @>
<!-- Content -->
<div class="container-md">
            <div class="row justify-content-center">
                <div class="col-lg-10">
					<@ if @{ checkboxBigTitle } @><h2>@{ title }</h2><@ end @>
                    @{ +main }
                </div>
            </div>
        </div>
        <!-- Content Ende -->
<@ elements/footer.php @>