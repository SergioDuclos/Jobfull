<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>JobFull</span></li>
								<li><span>Sistema Inteligente (Versão 1.0 )</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<section class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-8">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<h2>
													Sales:
													<strong>
														<select class="form-control" id="salesSelector">
															<option value="Porto Admin" selected>Vagas</option>
															<option value="Porto Drupal" >Curriculum</option>
															<option value="Porto Wordpress" >Contratação</option>
														</select>
													</strong>
												</h2>
					
												<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
													<!-- Flot: Sales Porto Admin -->
													<div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active"></div>
													<script>
					
														var flotDashSales1Data = [{
														    data: [
														        ["Jan", 140],
														        ["Fev", 240],
														        ["Mar", 190],
														        ["Abr", 140],
														        ["Mai", 180],
														        ["Jun", 320],
														        ["Jul", 270],
														        ["Aug", 180]
													
														    ],
														    color: "#0088cc"
														}];
					
														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
													</script>
					
													<!-- Flot: Sales Porto Drupal -->
													<div class="chart chart-sm" data-sales-rel="Porto Drupal" id="flotDashSales2" class="chart-hidden"></div>
													<script>
					
														var flotDashSales2Data = [{
														    data: [
														        ["Jan", 240],
														        ["Feb", 240],
														        ["Mar", 290],
														        ["Apr", 540],
														        ["May", 480],
														        ["Jun", 220],
														        ["Jul", 170],
														        ["Aug", 190]
														    ],
														    color: "#2baab1"
														}];
					
														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
													</script>
					
													<!-- Flot: Sales Porto Wordpress -->
													<div class="chart chart-sm" data-sales-rel="Porto Wordpress" id="flotDashSales3" class="chart-hidden"></div>
													<script>
					
														var flotDashSales3Data = [{
														    data: [
														        ["Jan", 840],
														        ["Feb", 740],
														        ["Mar", 690],
														        ["Apr", 940],
														        ["May", 1180],
														        ["Jun", 820],
														        ["Jul", 570],
														        ["Aug", 780]
														    ],
														    color: "#734ba9"
														}];
					
														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
													</script>
												</div>
					
											</div>
										</div>
										<div class="col-lg-4 text-center">
											<h2 class="panel-title mt-md">Metas de Vendas</h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
												<div class="liquid-meter">
													<meter min="0" max="100" value="35" id="meterSales"></meter>
												</div>
												<div class="liquid-meter-selector" id="meterSalesSel">
													<a href="#" data-val="35" class="active">Metas Mensais</a>
													<a href="#" data-val="28">Metas Anuais</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-3 col-xl-3">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-envelope"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Mensagens</h4>
														<div class="info">
															<strong class="amount">1281</strong>
															<span class="text-primary">(14 sem ler)</span>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(veja todos)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-3 col-xl-3">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-usd"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Assinatura</h4>
														<div class="info">
															<strong class="amount">$ 90.30</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(resumo)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>


								<div class="col-md-12 col-lg-3 col-xl-3">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-copy"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Curriculum Enviados</h4>
														<div class="info">
															<strong class="amount">38</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(Resumo)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-3 col-xl-3">
									<section class="panel panel-featured-left panel-featured-quaternary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quaternary">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Visitas ao Perfil</h4>
														<div class="info">
															<strong class="amount">3765</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(relatório)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<!--<div class="row">
								Include
							</div>
							-->
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Mensagens</h2>
									<p class="panel-subtitle">Um resumo grafico das mensagens enviadas e recebidas.</p>
								</header>
								<div class="panel-body">
					
									<!-- Flot: Basic -->
									<div class="chart chart-md" id="flotDashBasic"></div>
									<script>
					
										var flotDashBasicData = [{
											data: [
												[0, 170],
												[1, 169],
												[2, 173],
												[3, 188],
												[4, 147],
												[5, 113],
												[6, 128],
												[7, 169],
												[8, 173],
												[9, 128],
												[10, 128]
											],
											label: "Não Lidas",
											color: "#0088cc"
										}, {
											data: [
												[0, 115],
												[1, 124],
												[2, 114],
												[3, 121],
												[4, 115],
												[5, 83],
												[6, 102],
												[7, 148],
												[8, 147],
												[9, 103],
												[10, 113]
											],
											label: "Enviadas",
											color: "#2baab1"
										}, {
											data: [
												[0, 70],
												[1, 69],
												[2, 73],
												[3, 88],
												[4, 47],
												[5, 13],
												[6, 28],
												[7, 69],
												[8, 73],
												[9, 28],
												[10, 28]
											],
											label: "Recebidas",
											color: "#734ba9"
										}];
					
										// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
									</script>
					
								</div>
							</section>
						</div>

						
						<div class="col-md-6">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
									<h2 class="panel-title">Uso do Servidor</h2>
									<p class="panel-subtitle">Nivel de utilização do servidor...</p>
								</header>
								<div class="panel-body">
					
									<!-- Flot: Curves-->
									<div class="chart chart-md" id="flotDashRealTime"></div>
					
								</div>
							</section>
						</div>
						

					
					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Meu Perfil</h2>
								</header>
								<div class="panel-body">
									<section class="panel panel-group">
										<header class="panel-heading bg-primary">
					
											<div class="widget-profile-info">
												<div class="profile-picture">
													<img src="assets/images/!logged-user.jpg">
												</div>
												<div class="profile-info">
													<h4 class="name text-weight-semibold">Sergio Duclos</h4>
													<h5 class="role">Administrator</h5>
													<div class="profile-footer">
														<a href="#">(edite seu perfil)</a>
													</div>
												</div>
											</div>
					
										</header>
										<div id="accordion">
											<div class="panel panel-accordion panel-accordion-first">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
															<i class="fa fa-check"></i> Tarefas
														</a>
													</h4>
												</div>
												<div id="collapse1One" class="accordion-body collapse in">
													<div class="panel-body">
														<ul class="widget-todo-list">
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="todoListItem1" class="todo-check">
																	<label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem2" class="todo-check">
																	<label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem3" class="todo-check">
																	<label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem4" class="todo-check">
																	<label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem5" class="todo-check">
																	<label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem6" class="todo-check">
																	<label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
														</ul>
														<hr class="solid mt-sm mb-lg">
														<form method="get" class="form-horizontal form-bordered">
															<div class="form-group">
																<div class="col-sm-12">
																	<div class="input-group mb-md">
																		<input type="text" class="form-control">
																		<div class="input-group-btn">
																			<button type="button" class="btn btn-primary" tabindex="-1">Add</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div class="panel panel-accordion">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
															 <i class="fa fa-comment"></i> Mensagens
														</a>
													</h4>
												</div>
												<div id="collapse1Two" class="accordion-body collapse">
													<div class="panel-body">
														<ul class="simple-user-list mb-xlg">
															<li>
																<figure class="image rounded">
																	<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
																</figure>
																<span class="title">Joseph Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
																</figure>
																<span class="title">Joe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>
					
								</div>
							</section>
						</div>
						<div class="col-xl-3 col-lg-6">
							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Estatisticas</h2>
								</header>
								<div class="panel-body">
									<section class="panel">
										<div class="panel-body">
											<div class="small-chart pull-right" id="sparklineBarDash"></div>
											<script type="text/javascript">
												var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
											</script>
											<div class="h4 text-weight-bold mb-none">488</div>
											<p class="text-xs text-muted mb-none">Total de Visitas ao seu Perfil</p>
										</div>
									</section>
									<section class="panel">
										<div class="panel-body">
											<div class="circular-bar circular-bar-xs m-none mt-xs mr-md pull-right">
												<div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
													<strong>Average</strong>
													<label><span class="percent">45</span>%</label>
												</div>
											</div>
											<div class="h4 text-weight-bold mb-none">12</div>
											<p class="text-xs text-muted mb-none">Curriculum Enviados</p>
										</div>
									</section>
									<section class="panel">
										<div class="panel-body">
											<div class="small-chart pull-right" id="sparklineLineDash"></div>
											<script type="text/javascript">
												var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
											</script>
											<div class="h4 text-weight-bold mb-none">89</div>
											<p class="text-xs text-muted mb-none">Tarefas Pendentes</p>
										</div>
									</section>
								</div>
							</section>
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">
										<span class="label label-primary label-sm text-weight-normal va-middle mr-sm">198</span>
										<span class="va-middle">Amigos</span>
									</h2>
								</header>
								<div class="panel-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(Visualizar Todos)</a>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<div class="input-group input-search">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section>
						</div>
						<div class="col-xl-6 col-lg-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Log de Atividades</h2>
								</header>
								<div class="panel-body">
									<div class="timeline timeline-simple mt-xlg mb-md">
										<div class="tm-body">
											<div class="tm-title">
												<h3 class="h5 text-uppercase">Novembro 2016</h3>
											</div>
											<ol class="tm-items">
												<li>
													<div class="tm-box">
														<p class="text-muted mb-none">7 meses atras.</p>
														<p>
															It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
														</p>
													</div>
												</li>
												<li>
													<div class="tm-box">
														<p class="text-muted mb-none">7 meses atras.</p>
														<p>
															Checkout! How cool is that!
														</p>
														<div class="thumbnail-gallery">
															<a class="img-thumbnail lightbox" href="assets/images/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																<img class="img-responsive" width="215" src="assets/images/projects/project-4.jpg">
																<span class="zoom">
																	<i class="fa fa-search"></i>
																</span>
															</a>
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Estatisticas Globais</h2>
								</header>
								<div class="panel-body">
									<div id="vectorMapWorld" style="height: 350px; width: 100%;"></div>
								</div>
							</section>
						</div>
						<div class="col-lg-6 col-md-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2 class="panel-title">Analise dos Curriculums</h2>
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>Curriculum</th>
													<th>Status</th>
													<th>Progresso</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Porto - Responsive HTML5 Template</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																100%
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Porto - Responsive Drupal 7 Theme</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																100%
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Tucson - Responsive HTML5 Template</td>
													<td><span class="label label-warning">Warning</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																60%
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Tucson - Responsive Business WordPress Theme</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
																90%
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Porto - Responsive Admin HTML5 Template</td>
													<td><span class="label label-warning">Warning</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
																45%
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Porto - Responsive HTML5 Template</td>
													<td><span class="label label-danger">Danger</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
																40%
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Porto - Responsive Drupal 7 Theme</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
																95%
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

<!--Calendário -->
<script src="assets/javascripts/ui-elements/examples.charts.js"></script>