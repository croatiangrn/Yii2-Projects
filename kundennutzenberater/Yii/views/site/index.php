<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Startseite';
?>
	<!-- 
	Ihr Ziel:::
	 -->
	<div class="banner1 pozadina_home1">
		<div class="container">
			<div class="row mar_t_3 mar_b_3">
				 <div class="grid_8">
				 <div class="padding_dolje_20">
				 	<p class="p3 w2" data-sr="ease-in">Ihr Ziel:</p>
				 </div>
				 	<div class="tekst_dva_i_pol">
					 	<h2 class="padding_lijevo_20 crni" data-sr="ease-in">Erfolgreicher vermarkten<br> und verkaufen?</h2>
					</div>
				 </div>
				 <div class="grid_4 tac s6">
						<img class="" src="<?= Url::base() ?>/images/graph.jpg" alt=""/>
				 </div>
			</div>
		</div>
	</div>

	<!-- 
	Dann verkaufen Sie:::
	 -->

	<div class="banner1 pozadina_home2">
		<div class="container">
			<div class="row mar_t_3 mar_b_3">
				 <div class="grid_8">
				 	<div class="tekst_dva_i_pol">
					 	<h2 class="padding_lijevo_40 padding_dolje_20" data-sr="ease-in">Dann verkaufen Sie echten</h2>
					</div>
				 <div class="padding_lijevo_20">
				 <p class="p3 w3" data-sr="ease-in">
				 	Kundennutzen
				 	<br>
				 </p>
				 </div>
				 <div class="padding_lijevo_40 mobile_button_padding_20">
					<a href="<?= Url::to(['site/kundennutzen']) ?>" data-sr="ease-in" class="btn-default black mar_t_35">Mehr erfahren</a>
				 </div>
				 </div>
				 <div class="grid_4 tac s11">
						<img class="" src="<?= Url::base() ?>/images/ugovor.png" alt=""/>
				 </div>
			</div>
		</div>
	</div>


	<!-- Wie gelingt Ihnen das? -->

	<div class="banner1 pozadina_home1">
		<div class="container">
			<div class="row mar_t_3 mar_b_3">
				 <div class="grid_8 s12">
				 <div class="padding_dolje_20">
				 	<p class="p3 w2" data-sr="ease-in">Wie gelingt Ihnen das?</p>
				 </div>
				 	<div class="tekst_dva_i_pol">
					 	<h2 class="padding_lijevo_20 crni" data-sr="ease-in">Im Dialog mit den <br>Kundennutzen-Beratern</h2>
					 	<div class="padding_lijevo_20">
							<a href="<?= Url::to(['site/berater']) ?>" data-sr="ease-in" class="btn-default orange mar_t_35">Zu den Beratern</a>
						</div>
					</div>
				 </div>
				 <div class="grid_4 tac s5">
						<img class="" src="<?= Url::base() ?>/images/volume_logo.gif" alt=""/>
				 </div>
			</div>
		</div>
	</div>

	<!-- Garantiert erfolgreich -->

	<div class="banner1 pozadina_home3">
		<div class="container">
			<div class="row mar_t_3 mar_b_3">
				 <div class="grid_8 s13">
				 <div class="padding_dolje_20">
				 	<p class="p3 w2" data-sr="ease-in">Garantiert erfolgreich</p>
				 </div>
				 	<div class="mobile_tekst_padding_20 tekst_dva_i_pol">
					 	<h2 class="padding_lijevo_20" data-sr="ease-in">4 Gründe für eine <br>Zusammenarbeit mit den <br>Kundennutzen-Beratern</h2>
					 	<div class="padding_lijevo_20">
							<a href="<?= Url::to(['site/garantie']) ?>" data-sr="ease-in" class="btn-default black mar_t_35 padding">Erfolgs-Garantie</a>
						</div>
					</div>
				 </div>
				 <div class="grid_4 tac s5">
						<img class="" src="<?= Url::base() ?>/images/garancija.png" alt=""/>
				 </div>
			</div>
		</div>
	</div>

	<!-- Was unsere Kunden sagen? -->

	<div class="banner2 stellar-block">
			<div class="container">
				<div class="row">
					<div class="grid_12 tac s7">
						<div class="tekst_druga_razina padding_dolje_20" data-sr="ease-in">
							Was unsere Kunden sagen:
						</div>
						<div class="tekst_prva_razina" data-sr="ease-in">
							„Die beherrschen die Kunst des Kundennutzens“
						</div>
					</div>
				</div>
				<div class="row mar_t_3">
					<div class="grid_12 s9 tac">
						<div class="tekst_treca_razina" data-sr="ease-in">
							Marcel Keller, Privatbank Ellwanger & Geiger
						</div>
						<div class="tac">
							<a href="<?= Url::to(['site/referenzen']) ?>" data-sr="ease-in" class="btn-default black mar_t_5">Weitere Referenzen</a>
						</div>
					</div>
				</div>
			</div>
	</div>


	<!-- Lebenswichtig vitamin K -->
	<div class="banner1 pozadina_home1">
		<div class="container">
			<div class="row mar_t_3 mar_b_3">
				 <div class="grid_8">
				 <div class="padding_dolje_20">
				 	<p class="p3 w1" data-sr="ease-in">Lebenswichtig: Vitamin K</p>
				 </div>
				 	<div class="tekst_dva_i_pol">
					 	<h2 class="padding_lijevo_20 crni" data-sr="ease-in">Unser Angebot: <br>Versorgen Sie sich mit einem <br>Vitaminschub Kundennutzen</h2>
					 	<div class="padding_lijevo_20">
							<a href="<?= Url::to(['site/leistungen']) ?>" class="btn-default orange mar_t_35">Ihre Leistungen</a>
						</div>
					</div>
				 </div>
				 <div class="grid_4 tac s5">
						<img src="<?= Url::base() ?>/images/Vitamin_K.png" alt=""/>
				 </div>
			</div>
		</div>
	</div>

	<!-- Starten Sie jetzt voll durch  -->

	<div class="banner1 pozadina_home2">
		<div class="container">
			<div class="row mar_t_3 mar_b_3">
				 <div class="grid_8">
				 <div class="padding_dolje_20">
				 	<p class="p3 w1" data-sr="ease-in">Starten Sie jetzt voll durch</p>
				 </div>
				 	<div class="tekst_dva_i_pol">
					 	<h2 class="padding_lijevo_20" data-sr="ease-in">Testen Sie unseren kostenlosen Kundennutzen Quick-Check <br>für Ihr Unternehmen.</h2>
					 	<div class="padding_lijevo_20">
							<a href="<?= Url::to(['site/kontakt']) ?>" data-sr="ease-in" class="btn-default black mar_t_35 pulse">Quick-Check vereinbaren</a>
						</div>
					</div>
				 </div>
				 <div class="grid_4 tac s5">
						<img class="" src="<?= Url::base() ?>/images/kompas_gotov.png" alt=""/>
				 </div>
			</div>
		</div>
	</div>

	<!-- Sie wollen höher hinaus? -->

	<div class="banner1 pozadina_home1 pat">
    	<p class="p3 w1 s8 tac mar_t_3" data-sr="ease-in" style="max-width:80%;margin-left:auto;margin-right:auto;">
    		Sie wollen höher hinaus?	
    	</p>
    </div>
	<div class="banner1 pozadina_home1">
		<div class="container">
			<div class="row mar_b_3">
				 <div class="grid_12 s16">
				 	<div class="tekst_dva_i_pol">
					 	<h2 class="tac crni" data-sr="ease-in">
					 		Lassen Sie sich inspirieren im 
					 		<br>
					 	</h2>
					 	<div class="tac">
					 		<a href="<?= Url::to(['site/blog']) ?>" class="btn-default orange mar_t_35">AIM-Higher Blog</a>
					 	</div>
					</div>
				 </div>
			</div>
		</div>
	</div>