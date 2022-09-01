<?php include("headerInclude.php"); ?>




<div class="otRow" id="otrowsdc">
		<h2 class="oth2">
			<span><img class="otIconh2" src=" img/otIconh2.svg " alt=""></span>Nous contacter</h2>
			<div class="otContenta">
				
				<div class="otContentText">
				<p class="otTextSdc">Nous contacter
Laissez-nous un message, nos équipes vous recontacteront dans les plus brefs délais !</p>
				<div class="otContentContact">
					<div class="item">
						<img width="100px "src=" img/logoPhone.gif " alt="numero">
						<p>07.068.48.10.14</p>
					</div>
					<div class="item">
						<img  width="100px " src=" img/logoAdress.gif " alt="adresse">
						<p>18b rue de la rente logerot
							<br>
							21160 Marsannay la cote</p>
						</div>
						<div class="item">
							<img  width="100px "src=" img/logoMail.gif " alt="mail">
							<p>objectif.transport@gmail.com</p>
						</div>

				</div>
			</div>
			
		</div>
	</div>
	<div class="otRow" id="otRow3">
		<h2 class="oth2" id="oth2Row3">
			<span><img class="otIconh2" src=" img/otIconh2.svg " alt=""></span>Formulaire de contact
			
		</h2>
		<div class="otContentTextFormContact">
			<div class="otFormContact">
				<form action="{{ path("app_contact") }}" method="post">
					<div class="otChampaContacta">
						<input class="otInput" type="text" placeholder="Nom">
						<input class="otInput" type="text" placeholder="Prénom">
					</div>
					<div class="otChampaContactb">
						<input class="otInput" type="email" name="{{ emailEnvoi }}" placeholder="Écrivez votre adressse email" required>
						<textarea class="otInput " name="{{ message }}" placeholder="Écrivez votre message" required></textarea>
					</div>
					<div class="otChampaContactc">
						<button class="otBtn">Envoie</button>
						<div>
						Pour toutes questions appelé le 07.068.48.10.14 ou envoyé un mail à objectif.transport@gmail.com
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
	
	

<?php include("footerInclude.php"); ?>