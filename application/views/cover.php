<section class="gallery" id="crossfade">
<?php foreach ($lists->result as $image) { ?>
	<img src="<?=$image->link?>" alt="<?=$image->name?>" width="850" height="531" />
<?php } ?>
</section>