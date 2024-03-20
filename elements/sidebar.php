<h3>About</h3>

@{ itemsSidebar }


<h3>Tags</h3>

<@ foreach in filters @>
<a href="@{ itemsSidebarBlogList }?<@ queryStringMerge { filter: @{ :filter } } @>#filters">@{ :filter }</a>
<@ end @>