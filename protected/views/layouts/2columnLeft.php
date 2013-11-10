<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
<div id="rtl" class="content spr_lr">   
        <?php echo $content; ?>

        <div id="sliding-navigation" class="sidebar">
			<h3>Popular Posts</h3>
			<ul class="recent_comm">
				<li>
					<a href="#"><img src="/images/recent_post1.jpg" width="67" height="63" alt="" class="pic_left" />
					Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
				</li>
				<li>
					<a href="#"><img src="/images/recent_post2.jpg" width="67" height="63" alt="" class="pic_left" />
					Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
				</li>
				<li>
					<a href="#"><img src="/images/recent_post3.jpg" width="67" height="63" alt="" class="pic_left" />
					Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
				</li>
			</ul>
		</div>
  <div class="clear"></div>
	</div>
</div>

<?php $this->endContent(); ?>

