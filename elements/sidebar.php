<h3>About</h3>

@{ +sidebarText }


<h3>Tags</h3>

<@ foreach in tags 
	@><a 
	href="@{ urlTagLinkTarget | def (@{ :parent }) }?filter=@{ :tag }#filters"
	class="@{ :color | def ('has-text-dark') }"
	><@ if @{ :i } > 1 @>, <@ end @>@{ :tag }</a><@ 
end @>