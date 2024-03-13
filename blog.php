<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<@ elements/header.php @>
<# Paglist config #>
				<@~ newPagelist { 
					type: 'children', 
					context: @{ urlContextForPagelist },
					excludeCurrent: true,
					filter: @{ ?filter },
					match: '{"url": "#@{ filterPagelistByUrl }#"}',
					sort: @{ ?sort | def (@{ sortPagelist }) | def('date desc') },
					limit: @{ itemsPerPage | def(12) },
					page: @{ ?page | def(1) }
				} ~@>
				<@ if @{ checkboxShowAllPagesInPagelist } @>
					<@~ pagelist { type: false } ~@>
				<@ end @>
				<# Search results config #>
				<@~ if @{ ?search } ~@>
					<@ pagelist { 
						type: false,
						match: false, 
						search: @{ ?search }
					} @>
				<@~ end ~@>
<div class="container-md">
            <div class="row justify-content-center">
                <div class="col-lg-10 pt-2 pb-1">
                    
                </div>
                <div class="col-lg-10">
                	<div class="row">
					<# Pagelist #>
						<@ blocks/pagelist/cards_img.php @>
                	</div>
                </div>
                <div class="pt-2">
					<# Pagination #>
				<@ if @{ :paginationCount } > 1 @>
					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center">
							<@ if @{ ?page } > 1 @>
								<li class="page-item">
									<a href="?<@ queryStringMerge { page: @{ ?page | -1 } } @>" class="page-link">
										<@ Automad/Bootstrap/Icon { icon: 'chevron-left' } @>
									</a>
								</li>
							<@ end @>
							<@ for @{ ?page | -4 } to @{ ?page | +4 } @>
								<@ if @{ :i } > 0 and @{ :i } <= @{ :paginationCount } @>
									<li class="page-item<@ if @{ ?page | def(1) } = @{ :i } @> active<@ end @>">
										<a 
										href="?<@ queryStringMerge { page: @{ :i } } @>" 
										class="page-link"
										>@{:i}</a>
									</li>
								<@ end @>
							<@ end @>
							<@ if @{ ?page } < @{ :paginationCount } @>
								<li class="page-item">
									<a href="?<@ queryStringMerge { page: @{ ?page | +1 } } @>" class="page-link">
										<@ Automad/Bootstrap/Icon { icon: 'chevron-right' } @>
									</a>
								</li>
							<@ end @>
						</ul>
					</nav>
				<@ end @>
                </div>
            </div>
        </div>
        <!-- Content Ende -->
<@ elements/footer.php @>