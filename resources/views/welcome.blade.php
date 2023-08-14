@extends('layouts.main')

@section('title', 'Design Tech TI | Web Design')

@section('content')
<section class="site-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center">
				<h2>Serviços</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="media d-block media-feature text-center">
					<div class="mr-3 icon-wrap">
						<img src="/midias/icons/web-development.png">
					</div>
					<br>
					<div class="media-body">
						<h3>Desenvolvimento de Softwares</h3>
						<p>Desenvolvimento de Aplicações (Web, Mobile, Desktop), desde a Análise de Requisitos, Projeto, Codificação, Testes e Implantação de Software envolvendo Metodologias Ágeis e Design Patterns. </p>
						<input type="button" value="Faça um orçamento" onclick="window.location.href='https://wa.me/p/6705696709474528/554892092737'">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="media d-block media-feature text-center">
					<div class="mr-3 icon-wrap">
						<img src="/midias/icons/infraestrutura.png">
					</div>
					<br>
					<div class="media-body">
						<h3>Infraestrutura de TI</h3>
						<p>Planejamento e Implantação de sistemas de rede, servidores, sistemas operacionais e demais componentes de infraestrutura de TI. Administração, de Sistemas e servidores e monitoramento de segurança como firewalls, antivírus e sistemas para proteger os recursos da sua empresa contra ameaças cibernéticas. </p>
						<input type="button" value="Faça um orçamento" onclick="window.location.href='https://wa.me/p/6430935220286484/554892092737'">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="media d-block media-feature text-center">
					<div class="mr-3 icon-wrap">
						<img src="/midias/icons/marketing.png">
					</div>
					<div class="media-body">
						<h3>Marketing Digital</h3>
						<p>Otimização de mecanismos de buscas ou SEO (Search Engine Optimization), Tráfego Pago (ou PPC - Publicidade Paga por Clique) com Facebook & Google ADS, Marketing de Conteúdo em Mídias Sociais e Monitoramento com Google Analytics.</p>
						<input type="button" value="Faça um orçamento" onclick="window.location.href='https://wa.me/p/6353164634736814/554892092737'">
					</div>
				</div>
			</div>
		</div>
</section>
@endsection
