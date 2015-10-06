	<div id="content" class="column" role="main">
		<div class="section">
			<div class="region region-content">
				<div id="block-system-main" class="block block-system block-odd">
					<div class="content">
						<article id="doc-<?php echo $document['Document']['id']?>" class="node node-blog node-teaser node-odd published with-comments node-teaser clearfix">
							<?php
								if (AuthComponent::user()) {
									$link = $this->Html->link('upravit', '/admin/documents/edit/' . $document['Document']['id']);
									echo $this->Html->div('button admin_edit left', $link, array('style'=>'margin-top:7px'));
								}
							?>
							<header>
								<h2 class="air-mode"><?php echo $this->Html->nbsp_prepositions($document['Document']['title']);?></h2>

								<p class="submitted">
									Od autora <span class="username"><?php echo $document['User']['username'];?></span>
									<time pubdate="" datetime="2013-08-22T18:57:34"><?php //echo $document['Document']['created'];?></time>
								</p>
							</header>

							<div class="content air-mode">
								<?php echo $document['Document']['content'];?>
							</div><!-- /.content -->

							<footer>
								<ul class="links inline">
									<?php if ($neighbors['prev']) { ?>
										<li class="node-readmore first">
											<!--a href="/<?php echo $neighbors['prev']['Document']['slug']; ?>" rel="tag" title="">Předchozí</a-->
											<?php echo $this->Html->link('předchozí: ' . $neighbors['prev']['Document']['title'], '/'.$neighbors['prev']['Document']['slug']); ?>
										</li>
									<?php } ?>
									<?php if ($neighbors['next']) { ?>
										<li class="node-readmore last">
											<!--a href="/<?php echo $neighbors['next']['Document']['slug']; ?>" rel="tag" title="">Další</a-->
											<?php echo $this->Html->link('další: ' . $neighbors['next']['Document']['title'], '/'.$neighbors['next']['Document']['slug']); ?>
										</li>
									<?php } ?>
								</ul>
							</footer>

						</article><!-- /.node -->
					</div><!-- /.content -->
				</div><!-- /.block -->
			</div>
		</div>
	</div>
