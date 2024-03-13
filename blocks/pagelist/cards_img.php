
	<div class="row">
		<@ set { :paddingTop: @{ cardImageRelativeHeight | def (75) } } @>
		<@ foreach in pagelist @>
        <div class="col-lg-12 pb-3">
        <@ ../../inc/header-image.php @>
                <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                    <@~ header-image.php @>
                    <@ if @{ :imageCard } ~@> 
            <div class="card-img-top">
            
                        <img class="card-img-top" src="@{ :imageCard }" />    
                        </div>                 
                    <@~ end ~@>
                <@ end @>   
                
            
            <h2><a class="headlink" href="@{ url }">@{ title }</a></h2>
            <div class="small text-muted">@{ date | dateFormat (@{ formatDate | def ('l, F jS Y')}, @{ locale }) } // Author's Name</div>
            <p>@{ +main | findFirstParagraph | 450 }</p>
        </div>
        <@ end @>
	</div>