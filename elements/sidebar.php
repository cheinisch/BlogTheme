<h3>About</h3>

@{ +sidebarText }


<h3>Tags</h3>

<@ foreach in tags 	@>
	<@ if @{ :i } > 1 @>, <@ end @><a href="@{ urlTagLinkTarget | def (@{ :parent }) }?filter=@{ :tag }#filters" class="@{ :color | def ('has-text-dark') }" >@{ :tag }</a>
<@ end @>