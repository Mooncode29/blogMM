@extends('layout')

@section('content')



<div class="photo container">
	<div class="row">
		<div class="img">
			<div class="citation">« La connaissance est la seule chose qui s'accroit lorsqu'on la partage.»<br>
				<h4 class="auteur">Sacha Boudjema.</h4></div>
				<div class="cit col-lg-8 col-lg-offset-2 col-md-10">
				</div>
				<div class="site-heading">
					<div class="mm">MM</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-sm-12 blog-main">

				<div class="post-title">
					<h2 class="blog-post-title">Un chercheur en sécurité développe une attaque permettant de pirater à distance une télévision connectée</h2><br><br>

					<p class="blog-post-meta">Par Stéphane le calme Jeudi 30 Mars 2017</p>

					<p class="blog-post">Les Smart TV pourraient représenter la prochaine faille dans la sécurité de votre maison. Jusqu'à présent, les exploits de télévisions connectées reposaient sur le fait que des attaquants avaient un accès physique au périphérique, afin de brancher un dispositif USB qui exécute un code malveillant. D'autres attaques s'appuyaient sur l'ingénierie sociale, ce qui signifie que les attaquants ont dû inciter les utilisateurs à installer une application malveillante sur leur téléviseur.<br><br>

						Même la CIA, qui a développé un outil de piratage au nom de code « Weeping Angel » et qui pourrait transformer les Smart TV Samsung en dispositif d’espionnage, avait besoin d’un accès physique au périphérique.<br>

						En raison des nombreuses contraintes liées aux attaques d'ingénierie physique et sociale, le chercheur en sécurité Rafael Scheel, qui travaille pour le compte de Oneconsult, n'a considéré aucune d'entre elles comme vraiment dangereuse et a décidé d’emprunter une autre voie pour développer son concept.<br> 

						Il a présenté sa méthode durant l’édition 2017 de la conférence de sécurité EBU Media Cyber Security Seminar. Celle-ci s’avère différente de ce qui a été proposé jusqu’à maintenant dans la mesure où l’attaque peut être lancée à distance, sans interaction de l’utilisateur, et s’exécuter en arrière-plan : ce qui signifie que les utilisateurs ne sauront même pas que leurs dispositifs ont été compromis. <br><br>

						Dans la conception des télévisions (et d’autres appareils encore), elles se connectent au signal le plus fort qu’elles captent. Étant donné qu’il arrive que les fournisseurs de câbles envoient leurs signaux à des dizaines ou des centaines de kilomètres de distance, les attaques utilisant des signaux DVB-T peuvent être lancées depuis des maisons voisines, un quartier ou une petite ville voisine. En outre, une attaque pourrait être effectuée en montant l'émetteur DVB-T sur un drone, en ciblant une pièce spécifique dans un bâtiment ou en survolant une ville entière.</p>

					</div>
				</div>
			</div>


			@endsection