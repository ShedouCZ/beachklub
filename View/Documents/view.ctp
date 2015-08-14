	<div id="content" class="column" role="main">
		<div class="section">

			<h1 class="title" id="page-title">Novinky</h1>

			<div class="tabs">
			</div>
			<div class="region region-content">
				<div id="block-system-main" class="block block-system block-odd">
					<div class="content">

						<article id="node-94" class="node node-blog node-teaser node-odd published with-comments node-teaser clearfix">

							<header>
								<h2><?php echo $document['Document']['title'];?></h2>

								<p class="submitted">
									Od autora <span class="username"><?php echo $document['User']['username'];?></span>
									<time pubdate="" datetime="2013-08-22T18:57:34"><?php //echo $document['Document']['created'];?></time>
									<?php
										if (AuthComponent::user()) {
											echo $this->Html->link('upravit', '/admin/documents/edit/' . $document['Document']['id']);
										}
									?>
								</p>
							</header>

							<div class="content">
								<?php echo $document['Document']['content'];?>
							</div><!-- /.content -->

							<footer>
								<ul class="links inline">
									<li class="node-readmore first">
										<a href="/aktualita" rel="tag" title="Aktualita">Číst dál<span class="element-invisible"> Aktualita</span></a>
									</li>
									<li class="blog_usernames_blog">
										<a href="/blogs/admin" title="Přečtěte si nejnovější příspěvky na blogu uživatele admin.">Blog uživatele admin</a>
									</li>
									<li class="comment-add last">
										<a href="/comment/reply/94#comment-form" title="Přidat komentář k této stránce.">Přidat komentář</a>
									</li>
								</ul>
							</footer>

						</article><!-- /.node -->
					</div><!-- /.content -->
				</div><!-- /.block -->
			</div>
		</div>
	</div>