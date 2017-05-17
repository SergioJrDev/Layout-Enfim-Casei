<?php get_header(); ?>

 		<section class="space-default no-pad-top dashboard">
 			<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Meus Dados</a></li>
			</ul>
 				<h2 class=" title-descr tab-bottom font-poppins">Painel de controle</h2>
				<div class="column">
				<!-- 	<div class="sm-3-12">
			 			<nav class="dashboard-menu">
			 				<ul>
			 					<li><a data-menu="1" class="change-dashboard active" href="#">Dados do meu site</a></li>
			 					<li><a data-menu="2" class="change-dashboard" href="#">Meus dados</a></li>
			 				</ul>
			 			</nav>
			 		</div> -->
			 		<div class="sm-12-12">
			 			<div data-show='1' class="dashboard-view active">
							<h2 class="font-poppins">Dados do meu site</h2>
							<!-- <div class="alert a-center alert-danger">
								<p>Atenção, faltam 5 dias para expirar seu teste.</p>
							</div> -->
							<div class="column">
								<div class="sm-12-12">
									<div class="view-info mg-bottom model-group">
										<span class="title">Meus Modelos</span>
										<div class="model-list">
											<?php
												$args = array(
													'post_type' => 'modelos',
													'posts_per_page' => -1,
													'author' => get_current_user_id()
												);
												$query = new WP_Query($args);
												$i = 1;
												if($query->have_posts()) {
													while($query->have_posts()): $query->the_post();  ?>
														<div class="model-item">
															<a href="<?php the_permalink()?>"><?php echo 'Modelo '.$i; ?></a>
															<a href="<?php echo home_url('/meus-dados?del=').get_the_ID(); ?>" class="btn btn-danger float-right"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
														</div>
													<?php $i = $i + 1; endwhile;
												} else {
													echo '<p style="margin-bottom: 10px;">Você ainda não tem nenhum modelo. Que tal começar criando um?</p>';
												}
											?>
										</div>
										<a href="<?php echo home_url('/crie-seu-site') ?>" class="btn btn-theme btn-small btn-radius">Criar modelo</a>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Endereço</span>
										<p><a href="#">www.nataliaesergio.com.br</a></p>
									</div>
								</div>

								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Acesso ao painel do site</span>
										<p><a href="#">www.nataliaesergio.com.br/wp-admin</a></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Login</span>
										<p>Sergioenatalia</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Senha</span>
										<p>@S3rginho123</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Plano</span>
										<p>Avançado <a href="#" class="btn btn-gray float-right"><i class="fa fa-pencil" aria-hidden="true"></i></a></p>
										<div class="clear-fix"></div>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Modelo</span>
										<p><a href="#">www.enfimcasei.com.br/natalia-e-sergio</a></p>
									</div>
								</div>
							</div>
						</div>	
			 			<div data-show='1' class="dashboard-view active">
							<h2 class="font-poppins">Meus dados pessoais</h2>
							<div class="column">
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Nome da noiva</span>
										<p>Natália Fazzolari</p>
									</div>
								</div>

								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Nome do noivo</span>
										<p>Sérgio Junior</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Data do casamento</span>
										<p>10/04/2019</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Local do casamento</span>
										<p>Clube dos Esportes</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">E-mail</span>
										<p>sergioamjr91@gmail.com</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Telefone</span>
										<p>11 95982-8953</p>
									</div>
								</div>
							</div>
							<a href="#" class="btn btn-gray float-right"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							<div class="clearfix"></div>
						</div>	 

			 			<div data-show='3' class="dashboard-view">
							<h2 class=" title-descr tab-bottom font-poppins">Planos</h2>
						<!-- 	<div class="alert a-center alert-danger">
								<p>Atenção, faltam 5 dias para expirar seu teste.</p>
							</div> -->
							<div class="column">
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Endereço</span>
										<p><a href="#">www.nataliaesergio.com.br</a></p>
									</div>
								</div>

								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Acesso ao painel do site</span>
										<p><a href="#">www.nataliaesergio.com.br/wp-admin</a></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Login</span>
										<p>Sergioenatalia</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Senha</span>
										<p>@S3rginho123</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Plano</span>
										<p>Avançado</p>
										<a href="#">Alterar plano</a>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Modelo</span>
										<p><a href="#">www.enfimcasei.com.br/natalia-e-sergio</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>			
 			</div>
 		</section>

<?php get_footer(); ?>