<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ foreach in tags 
	@><@ if @{ :i } > 1 @> <@ else @><@ end 
	@><a href="@{ urlTagLinkTarget | def (@{ :parent }) }?filter=@{ :tag }"	class="font-weight-normal">#@{ :tag }</a>
    <@ end @>