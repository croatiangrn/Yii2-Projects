<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->registerCssFile(Url::base().'/css/contact-form.css');
$this->title = 'Kontakt';
if (Yii::$app->session->hasFlash('poruka'))
{
  ?>
<script>
var poruka = "<?= Yii::$app->session->getFlash('poruka') ?>";
    // alert(poruka);
</script>
  <?php
  $poruka_forme = Yii::$app->session->getFlash('poruka');
}
?>

<div class="banner1 pozadina_home1">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                 <div class="grid_12">
                    <div class="tekst_dva_i_pol pat padding_lijevo_20" data-sr="ease-in">
                        <h2 class=" crni">Besser vermarkten und verkaufen:<br> Orientiert am Nutzen Ihrer Kunden</h2>
                    </div>
                     <div class="padding_gore_20">
                        <div style="margin-left:auto;margin-right:auto;position:relative;"><p class="p3 w2" data-sr="ease-in">Profitieren Sie vom kostenlosen Quick-Check</p></div>
                     </div>
                 </div>
            </div>
        </div>
    </div>

<div class="banner1 pozadina_home2">
    <div class="container">
        <div class="row mar_t_3 padding_dolje_20">
             <div class="grid_10 s6 padding_lijevo_20">
                <div class="tekst_druga_razina" data-sr="ease-in">
                    Sie möchten wissen, wo Sie stehen beim Thema Kundennutzen? <br>Wo Sie bei Vermarktung und Vertrieb noch Luft nach oben haben? <br>Kostenlos aber nicht umsonst. Aufschlussreich aber nicht aufwändig. Ein Workshop, der sich rentiert. <span class="boldana_slova">Garantiert.</span>
                </div>
             </div>
             <div class="grid_2 tac s6">
                    <img class="" src="<?= Url::base() ?>/images/kompas_gotov.png" alt=""/>
             </div>
        </div>
    </div>
</div>

  <div class="wrapper10 pozadina_home1">
    <div class="container">
      <div class="row mar_t_3">
            <div class="grid_4 s7">
                <div class="tac">
                    <img src="<?= Url::base() ?>/images/agentursauswahl.png" data-sr="ease-in">
                    <p class="mar_t_2 padding_dolje_20 tekst_druga_razina crni" data-sr="ease-in">Workshop</p>
                    <p class="tekst_treca_razina crni" data-sr="ease-in">
                        Aus der Beratung ergibt sich: Strategie, Positionierung, 
                        Vertriebs-, Marketing- und 
                        Kundennutzen-Beratung,
                        Customer Journey, …

                        Ok, genug Buzzword Bingo!
                        Entdecken Sie, was dahinter steckt
                    </p>
                </div>
            </div>

            <div class="grid_4 s7">
                <div class="tac">
                    <img src="<?= Url::base() ?>/images/begleitung.png" data-sr="ease-in">
                    <p class="mar_t_2 padding_dolje_20 tekst_druga_razina crni" data-sr="ease-in">Analyse</p>
                    <p class="tekst_treca_razina crni" data-sr="ease-in">
                        Nach einem interessanten Workshop, in dem wir viele Informationen über Sie und Ihre Kunden gesammelt haben, erfolgt die Analyse: 
Aus Sicht Ihrer Kunden.
Dabei werden wir Ihrer Vertrieb Ihr Marketing genauer ansehen.
                    </p>
                </div>
            </div>

            <div class="grid_4 s7">
                <div class="tac">
                    <img src="<?= Url::base() ?>/images/erfolg.png" data-sr="ease-in">
                    <p class="mar_t_2 padding_dolje_20 tekst_druga_razina crni" data-sr="ease-in">Ergebnis</p>
                    
                    <p class="tekst_treca_razina crni" data-sr="ease-in">
                        In einer Präsentation erfahren Sie, wo Sie noch Optimierungspotenzial haben. Und auch, wo Sie schon bestens aufgestellt sind.

Sie erhalten Empfehlungen für konkrete Maßnahmen, wie Sie den Kundennutzen erhöhen können. 

Sie dürfen gespannt sein.
                    </p>
                </div>
            </div>
          
        </div>
      </div>
                <p class="s8 p3 w1 tac mar_t_3" style="width:100%">
                    <span data-sr="ease-in">Viel zu gewinnen, nichts zu verlieren<br></span>
                </p>
    <div class="container">
      <div class="row s45 mar_t_1">
            <div class="grid_12">
                <div class="tekst_prva_razina crni mar_t_3" data-sr="ease-in">
                    Nehmen Sie Kontakt auf zu den Kundennutzen-Beratern
                </div>
            </div>
        </div>

      <div class="row mar_t_3">
                <div class="grid_3 tal s9">
                    <img src="http://www.motelkiwi.com/aim6/images/denis.jpg" style="float:left; width:80%;" data-sr="ease-in">
                </div>
                <div class="grid_9">
                    <h2 data-sr="ease-in">Denis Ilicic</h2>
                      <h4 class="s10 tekst_druga_razina crni padding_gore_10" data-sr="ease-in">Vertriebsexperte, Zuhause im Lösungsgeschäft</h4>
                        <p id="paragraf_mali" class="s10" data-sr="ease-in">
                            Dipl. Kaufmann Uni Tübingen, Prädikatsexamen, Schwerpunkte Unternehmenspositionierung und Vertriebsstrategie.
                            Langjährige Vertriebsleitung bei einem renommierten internationalen IT-Konzern, internationale Erfahrung.<br>
                            Mehrfacher Unternehmer, Verkaufsexperte und -coach im Lösungsvertrieb.<br><br>
                            Motto: <span id="bold_letters">„Wir wollen Ihnen gar nichts verkaufen! Außer wenn es Sie erfolgreich macht.“</span>
                        </p>
                  </div>
        </div>
      <div id="message-post"></div>
        <div class="row mar_t_3">
                <div class="grid_3 tal s11">
                    <img src="http://www.motelkiwi.com/aim6/images/steffen.jpg" style="float:left;width:80%;">
                </div>
                <div class="grid_9">
                    <h2 data-sr="ease-in">Steffen Moll</h2>
                            <h4 class="s13 tekst_druga_razina crni padding_gore_10" data-sr="ease-in">Marketer, leidenschaftlicher Storyteller und Digital Native</h4>
                        <p id="paragraf_mali" data-sr="ease-in">
                            Master in Marketing, verliehen von der Dublin City University. Staatlich geprüfter Werbetexter.
                            War Marketing-Referent bei einem mittelständischen B2B-Unternehmen. Betreut Unternehmen aus IT, Maschinenbau, Finanzdienstleistung und von erklärungsbedürftigen Produkten. Unterstützt auch Werbeagenturen. 
                            Kundennutzenberater für die Themen Marketing, Online Kommunikation und Vertriebsunterstützung. <br><br>
                            Motto: <span id="bold_letters">„Be the change you want to see.“</span>
                        </p>
                </div>
        </div>
      </div>
        <?php
              if (Yii::$app->session->hasFlash('poruka'))
              {
                ?>
                <p class="s8 p3 w1 tac mar_t_3" style="width:100%">
                    <span data-sr="ease-in"><?= Yii::$app->session->getFlash('poruka') ?></span>
                </p>

                <?php
              }
        ?>
        <div class="container">
      <div class="row mar_t_3">
        <div class="grid_4">
            <h5 data-sr="ease-in">Kontakt</h5>
            <ul class="address">
                 <li data-sr="ease-in" style="margin-left: 0px; opacity: 1;"><i class="fa  fa-mobile"></i>+49 711 21843924</li>
                 <li data-sr="ease-in" style="margin-left: 0px; opacity: 1;"><i class="fa fa-envelope-o"></i><a href="mailto:info@kundennutzenberater.de">info@kundennutzenberater.de</a></li>
                 <li data-sr="ease-in" style="margin-left: 0px; opacity: 1;"><i class="fa fa-flag"></i>Website:<a href="<?= Url::base() ?>">www.kundennutzenberater.de</a></li>
                 <li data-sr="ease-in" style="margin-left: 0px; opacity: 1;"><i class="fa fa-home"></i>Heilbronner Straße 150<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;70191 Stuttgart
                 </li>
            </ul>

        </div>
        <div class="grid_8">
        <?php
        echo Html::beginForm(['site/mail-senden'],'post',['id' => 'contact-form']);
        ?>
            <div class="contact-form-loader"></div>
            <fieldset>
              <div class="row">
                <div class="grid_8">
                  <label data-sr="ease-in" class="name" style="margin-left: 0px; opacity: 1;">
                    <input type="text" name="name" placeholder="Name*:" data-constraints="@Required" id="regula-generated-338476">
                    <span class="empty-message">*This field is required.</span>
                </div>
              </div>
              <div class="row">
                <div class="grid_8">
                  <label data-sr="ease-in" class="name" style="margin-left: 0px; opacity: 1;">
                    <input type="text" name="firma" placeholder="Firma:" data-constraints="@JustLetters" id="regula-generated-338476">
                    <span class="empty-message">.</span>
                </div>
              </div>
              <div class="row">
                <div class="grid_8">
                  <label data-sr="ease-in" class="email" style="margin-left: 0px; opacity: 1;">
                    <input type="text" name="email" value="" placeholder="E-mail*:" data-constraints="@Required @Email" id="regula-generated-889610">
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid email.</span>
                </div>
              </div>
              <div class="row">
                <div class="grid_8">
                  <label data-sr="ease-in" class="phone" style="margin-left: 0px; opacity: 1;">
                    <input type="text" name="phone" value="" placeholder="Phone:" data-constraints="@JustNumbers" id="regula-generated-629091">
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                </div>
              </div>
              <div class="row">
                <div class="grid_8">
                  <label data-sr="ease-in" class="name" style="margin-left: 0px; opacity: 1;">
                    <input type="text" name="website" placeholder="Website*:" data-constraints="@Required @JustLetters" id="regula-generated-338476">
                    <span class="empty-message">*This field is required.</span>
                </div>
              </div>
              <div class="row">
                <div class="grid_8">
                  <label data-sr="ease-in" class="message" style="margin-left: 0px; opacity: 1;">
                    <textarea name="message" placeholder="Message:" data-constraints="@Length(min=20,max=999999)" id="regula-generated-725821" class=""></textarea>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                </div>
              </div>
              <div class="contact-form-buttons s59" style="margin-left: 0px; opacity: 1;">
                <a href="#" onclick="$(this).closest('form').submit()" data-type="submit" class="btn-default orange" data-sr="ease-in">Senden</a>
              </div>
            </fieldset>
            </form>
        </div>
      </div>
    <div class="google-map_contacts" style="opacity: 1;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.0858557676634!2d9.183429999999989!3d48.79934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799dad681db728f%3A0x1c66fadfdba2e264!2sHeilbronner+Str.+150%2C+70191+Stuttgart%2C+Njema%C4%8Dka!5e0!3m2!1shr!2sba!4v1433691788925" width="800" height="600" frameborder="0" style="border:0"></iframe>
    </div>
    </div>
  </div>
