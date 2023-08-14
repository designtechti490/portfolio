@extends('layouts.main')

@section('title', 'Design Tech TI | Web Design')

@section('content')
<br>
<h2 class="mb-4">Contato</h2>
<section class="site-section">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<form action="#" method="post">
				<div class="row">
				<div class="col-md-4 form-group">
					<label for="name">Nome</label>
					<input type="text" id="name" class="form-control ">
				</div>
				<div class="col-md-4 form-group">
					<label for="phone">Telefone</label>
					<input type="text" id="phone" class="form-control ">
				</div>
					<div class="col-md-4 form-group">
					<label for="email">Email</label>
					<input type="email" id="email" class="form-control ">
				</div>
				</div>
				
				<div class="row">
				<div class="col-md-12 form-group">
					<label for="message">Escreva uma mensagem</label>
					<textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 form-group">
					<label for="message">Horário de prefêrencia para o atendimento</label> <br>
					<select class="form-control ">
					<option>Manhã</option>
					<option>Tarde</option>
					<option>Noite</option>
					</select>
				</div>
				<div class="row">
					<div class="col-md-12 form-group">
						<label >ㅤ<input type="checkbox" class="checkbox">  ㅤGostaria de receber nossas novidades por e-mail?</label>
					</select>
					</div>
		
				<div class="row">
				<div class="col-md-6 form-group">
					<input type="submit" value="Enviar" class="btn btn-black">
				</div>
				</div>

			</form>
		</div>
	</div>
	</div>
</section>


<section class="section-cover cta" data-stellar-background-ratio="0.5" style="background-image: url(midias/banner/big_image_2.jpg);">
	<div class="container">
	<div class="row justify-content-center align-items-center intro">
		<div class="col-md-8 text-center element-animate">
		<h2 class="mb-4">Finalize seu agendamento e ganhe 25% de desconto</h2>
		<p><a href="https://wa.me/message/B4Y7U5OK4QMZP1" class="btn btn-black">Realizar  agendamento</a></p>
		</div>
	</div>
	</div>
</section>
@endsection