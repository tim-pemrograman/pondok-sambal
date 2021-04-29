<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Artikel</h1>
		<span class="gdlr-page-caption gdlr-title-font">Beberapa artikel Pondok Sambal</span>
	</div>
</div>
<div class="content-wrapper">
	<div class="gdlr-content">

		<!-- Above Sidebar Section-->

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<div class="with-sidebar-container container">
				<div class="with-sidebar-left twelve columns">
					<div class="with-sidebar-content twelve columns">
						<section id="content-section-1">
							<div class="section-container container">
								<div class="blog-item-wrapper">
									<div class="blog-item-holder">
										<div class="gdlr-isotope" data-type="blog" data-layout="fitRows">
											<div class="clear"></div>
											<?php foreach ($articles as $article): ?>
												<div class="three columns">
													<div class="gdlr-item gdlr-blog-grid">
														<div class="gdlr-ux gdlr-blog-grid-ux">
															<article id="post-859"
																class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-news">
																<div class="gdlr-standard-style">
																	<div class="gdlr-blog-thumbnail">
																		<a href="<?= base_url('article/detail').$article->article_id?>"> <img
																				src="<?= base_url($article->img_path)?>"
																				alt="" style="height: 200px;" /></a>
																		<div class="gdlr-sticky-banner"><i
																				class="fa fa-eye"></i><?= $article->views; ?></div>
																	</div>

																	<div class="gdlr-blog-info gdlr-info">
																		<div class="blog-info blog-date"><i
																				class="fa fa-clock-o"></i><a href="#"><?= (new DateTime($article->created_at))->format('d M Y H:i')?></a></div>
																		<div class="blog-info blog-author"><i
																				class="fa fa-pencil"></i><a href="#"
																				title="Posts by Kisus"
																				rel="author"><?= $article->Fname." ".$article->Lname; ?> </a></div>
																		<div class="clear"></div>
																	</div>

																	<header class="post-header">
																		<h3 class="gdlr-blog-title gdlr-content-font"><a
																				href="<?= base_url('article/detail/').$article->article_id?>"><?= $article->title; ?></a></h3>
																		<div class="clear"></div>
																	</header>
																	<!-- entry-header -->

																	<div class="gdlr-blog-content"><?=substr($article->content, 0, 100) ?>...
																		<div class="clear"></div><a href="<?= base_url('article/detail/').$article->article_id?>"
																			class="excerpt-read-more">Read More</a></div>
																</div>
															</article>
															<!-- #post -->
														</div>
													</div>
												</div>
											<?php endforeach; ?>
											<div class="clear"></div>
										</div>
									</div>
									<!-- <div class="gdlr-pagination"><span aria-current='page'
											class='page-numbers current'>1</span>
										<a class='page-numbers' href='#' )?>2</a>
										<a class="next page-numbers" href="<?= base_url('#')?>">Next &rsaquo;</a></div> -->
								</div>
								<div class="clear"></div>
							</div>
						</section>
					</div>

					<div class="clear"></div>
				</div>

			</div>
		</div>

		<!-- Below Sidebar Section-->

	</div>
	<!-- gdlr-content -->
	<div class="clear"></div>
</div>
<!-- content wrapper -->
