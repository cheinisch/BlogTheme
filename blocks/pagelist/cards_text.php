<div class="@{ :classContainer }">
	<div class="row">
		<@ set { :paddingTop: @{ cardImageRelativeHeight | def (75) } } @>
		<@ foreach in pagelist @>
        <div class="col-lg-12 pb-3">
            <h2>@{ title }</h2>
            <div class="small text-muted">January 1, 2023 // Author's Name</div>
            <p>@{ +main | findFirstParagraph | 450 }</p>
        </div>
        <@ end @>
	</div>
</div>