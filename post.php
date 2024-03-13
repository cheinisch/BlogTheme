<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<@ elements/header.php @>
<div class="container-md">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="small text-muted pt-2 pb-1"><@ inc/date.php @></div>
					@{ +main }
                    <div class="col-lg-12">Category: <a href="#">Test</a></div>
                    <div class="col-lg-12">Tag: <a href="#">#Test</a></div>
                </div>
            </div>
        </div>
        <!-- Content Ende -->
<@ elements/footer.php @>