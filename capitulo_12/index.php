		<?php 
			$cabecalho_title = "Mirror Fashion";
			include("cabecalho.php"); 
		?>
		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form>
					<input type="search">
					<input type="image" src="img/busca.png">
				</form>
			</section>
			<section class="menu-departamentos">
				<h2>Departamentos</h2>
				<nav>
					<ul>
						<li><a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#"></a>Manga curta</li>
								<li><a href="#"></a>Manga comprida</li>
								<li><a href="#"></a>Camisa social</li>
								<li><a href="#"></a>Camisa casual</li>
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>
				</nav>
			</section>
			<img src="img/destaque-home.png" alt="Promoção: Big City Night">
			<a href="#" class="pause"></a>
		</div>
		<div class="container paineis">
			<section class="painel novidades painel-compacto">
				<h2>Novidades</h2>
				<ol>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura3.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura4.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura5.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura6.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				<button type="button">Mostrar Mais</button>
			</section>
			<section class="painel mais-vendidos painel-compacto">
				<h2>Mais Vendidos</h2>
				<ol>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura8.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura9.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura10.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura11.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura12.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura7.png">
								<figcaption>Fuzz Cardigan por R$: 129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				<button type="button">Mostrar Mais</button>
			</section>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/home.js"></script>
		<script src="js/converteMoeda.js"></script>
		<script src="js/testaConversao.js"></script>
		<script src="js/banner-rotativo.js"></script>
		<?php include("rodape.php"); ?>