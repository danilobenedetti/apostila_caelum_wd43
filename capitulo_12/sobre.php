		<?php 
			$cabecalho_title = "Sobre a Mirror Fashion";
			$cabecalho_css = '<link rel="stylesheet" type="text/css" href="css/sobre.css">';	
			include("cabecalho.php"); 
		?>
		<section class="container">
			<h2>Sobre a Mirror Fashion</h2>
			<p>
				A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada <!--em 1932--> há <?php echo date('Y') - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.
			</p>
			<p>
				Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho" target="_blank">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
			</p>
			<figure id="centro-distribuicao">
				<img src="img/centro-distribuicao.png" alt="centro-distribuicao">
				<figcaption>Centro de distribuição da Mirror Fashion</figcaption>
			</figure>
			<p>
				Compre suas roupas e acessórios na <strong>Mirror Fashion</strong>. Acesse <a href="index.php">nossa loja</a> ou entre em contato se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.
			</p>
			<h2 id="historia">História</h2>
			<figure id="familia-pelho">
				<img src="img/familia-pelho.jpg" alt="familia-pelho">
				<figcaption>Família Pelho</figcaption>
			</figure>
			<p>
				A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
			</p>
			<p>
				O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes pedidos.
			</p>
			<p>
				O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e nos escritórios em todo país.
			</p>
			<p>
				Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da <strong>Mirror Fashion</strong>, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
			</p>
			<h2 id="diferenciais">Diferenciais</h2>
			<ul class="diferenciais">
				<li>- Menor preço do varejo, garantido</li>
				<li>- Se você achar uma loja mais barata, leva o produto de graça</li>
				<li>- Pague em reais, dólares, euros ou bitcoins</li>
				<li>- Todas as compras com frete grátis para o mundo todo</li>
				<li>- Maior comércio eletrônico de moda do mundo</li>
				<li>- Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
				<li>- Presente em 124 países</li>
				<li>- Mais de um milhão de funcionários em todo o mundo</li>
			</ul>
		</section>		
		<!--<div id="rodape" class="container">
			<img src="img/logo.png" alt="Logo Mirror Fashion">
			&copy; Copyright Mirror Fashion
		</div>-->
		<?php include("rodape.php"); ?>