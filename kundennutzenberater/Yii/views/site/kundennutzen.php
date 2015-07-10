<?php
use yii\helpers\Url;
use app\assets\NivosliderAsset;
// Registriraj slideshow
NivosliderAsset::register($this);
$this->title = 'Kundennutzen';
?>
    <!-- Was ist kein Kundennutzen? -->

    <div class="banner1 pozadina_home6 pat">
            <p class="p3 w1 s8 tac mar_t_3 pozadina_siva" data-sr="ease-in" style="max-width:80%;margin-left:auto;margin-right:auto;">Was ist kein Kundennutzen?</p>
    </div>
    <!-- Mobilne slike slidea -->
    <div class="banner1 pozadina_home2 mobilni_slide">
        <div class="container">
            <div class="row mar_b_3">
                <div class="grid_4 s8">
                    <img src="<?= Url::base() ?>/slideshow/slika1.jpg" alt="01" />
                </div>
                <div class="grid_8 s8">
                    <p class="tekst_treca_razina padding_gore_20">
                        Erinnern Sie sich noch, als der Klingelton der Nokia-Handys überall zu hören war? Um die Jahrtausendwende trug jedes dritte Handy das Logo des finnischen Marktführers. Doch dann wurde der Riese träge und verschlief die Entwicklung von Smartphones und Apps. Mit neuen technischen Möglichkeiten verändert sich auch der Kundennutzen. Nokia erkannte das zu spät.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Drugi razlog -->

    <div class="banner1 pozadina_home1 mobilni_slide">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_4 s9">
                    <img src="<?= Url::base() ?>/slideshow/slika2.jpg" alt="01" />
                </div>
                <div class="grid_8 s9">
                    <p class="tekst_treca_razina crni padding_gore_20">
                        „Hier spricht der Preis“ ist eine mahnende Erinnerung: niedrige Preise allein sind kein Kundennutzen. Nur wer Kostenführer in der Branche ist, sollte sich auf diese Strategie einlassen.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Treći razlog -->

    <div class="banner1 pozadina_home2 mobilni_slide">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_4 s10">
                    <img src="<?= Url::base() ?>/slideshow/slika3.jpg" alt="01" />
                </div>
                <div class="grid_8 s10">
                    <p class="tekst_treca_razina padding_gore_20">
                        Kein Urlaub ohne 2 oder 3 Kodakfilme verknipst zu haben. Als die (Foto-) Welt jedoch digital wurde, wählte Kodak die Kopf-in-den-Sand Strategie. Denn mit digitalen Fotos, die sich auf Festplatten speichern lassen, kann man ja keine Filme, kein Papier, keine Drucker, etc. mehr verkaufen. Doch wer den Kunden nicht mehr nutzt, wird irgendwann für sie nutzlos.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Četvrti razlog -->

    <div class="banner1 pozadina_home1 mobilni_slide">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_4 s11">
                    <img src="<?= Url::base() ?>/slideshow/slika4.jpg" alt="01" />
                </div>
                <div class="grid_8 s11">
                    <p class="tekst_treca_razina crni padding_gore_20">
                        „Wenn ich die Menschen gefragt hätte, was sie wollen, hätten sie gesagt: schnellere Pferde.“ Henry Ford bewies echte Kundennutzenberater-Qualitäten. Er verstand es, das Problem der zu langsamen Mobilität nicht mit dem naheliegenden, sondern mit einem innovativen Ansatz zu lösen.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Peti razlog -->

    <div class="banner1 pozadina_home2 mobilni_slide">
        <div class="container">
            <div class="row mar_t_5 mar_b_3">
                <div class="grid_4 s10">
                    <img src="<?= Url::base() ?>/slideshow/slika5.jpg" alt="01" />
                </div>
                <div class="grid_8 s10">
                    <p class="tekst_treca_razina padding_gore_20">
                        Always put the customer first
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobilne slike slidea //KRAJ -->
<div class="pozadina_home2">    
    <div class="showcase" id="showcase" style="padding-top:50px;padding-bottom:20px;">
        <!-- Each child div in #showcase with the class .showcase-slide represents a slide. -->
        <div class="showcase-slide">
            <!-- Put the slide content in a div with the class .showcase-content. -->
            <div class="showcase-content">
                <img src="<?= Url::base() ?>/slideshow/slika1.jpg" alt="01" />
            </div>
            <!-- Put the thumbnail content in a div with the class .showcase-thumbnail -->
            <div class="showcase-thumbnail">
                <img src="<?= Url::base() ?>/slideshow/t_slika1.jpg" alt="01" width="140px" />
                <!-- The div below with the class .showcase-thumbnail-caption contains the thumbnail caption. -->
                <!-- <div class="showcase-thumbnail-caption"></div> -->
                <!-- The div below with the class .showcase-thumbnail-cover is used for the thumbnails active state. -->
                <div class="showcase-thumbnail-cover"></div>
            </div>
            <!-- Put the caption content in a div with the class .showcase-caption -->
            <div class="showcase-caption">
                <h2>
                    Erinnern Sie sich noch, als der Klingelton der Nokia-Handys überall zu hören war? Um die Jahrtausendwende trug jedes dritte Handy das Logo des finnischen Marktführers. Doch dann wurde der Riese träge und verschlief die Entwicklung von Smartphones und Apps.  Mit neuen technischen Möglichkeiten verändert sich auch der Kundennutzen. Nokia erkannte das zu spät.
                </h2>
            </div>
        </div>
        <div class="showcase-slide">
            <div class="showcase-content">
                <img src="<?= Url::base() ?>/slideshow/slika2.jpg" alt="02" />
            </div>
            <div class="showcase-thumbnail">
                <img src="<?= Url::base() ?>/slideshow/t_slika2.jpg" alt="01" width="140px" />
                <!-- <div class="showcase-thumbnail-caption">Caption Text</div> -->
                <div class="showcase-thumbnail-cover"></div>
            </div>
            <div class="showcase-caption">
                <h2>
                    „Hier spricht der Preis“ ist eine mahnende Erinnerung: niedrige Preise allein sind kein Kundennutzen. Nur wer Kostenführer in der Branche ist, sollte sich auf diese Strategie einlassen.
                </h2>
            </div>
            <!-- Put the tooltips in a div with the class .showcase-tooltips. -->
        </div>
        <div class="showcase-slide">
            <div class="showcase-content">
                <img src="<?= Url::base() ?>/slideshow/slika3.jpg" alt="03" />
            </div>
            <div class="showcase-thumbnail">
                <img src="<?= Url::base() ?>/slideshow/t_slika3.jpg" alt="01" width="140px" />
                <!-- <div class="showcase-thumbnail-caption">Caption Text</div> -->
                <div class="showcase-thumbnail-cover"></div>
            </div>
            <div class="showcase-caption">
                <h2>
                    Kein Urlaub ohne 2 oder 3 Kodakfilme verknipst zu haben. Als die (Foto-) Welt jedoch digital wurde, wählte Kodak die Kopf-in-den-Sand Strategie. Denn mit digitalen Fotos, die sich auf Festplatten speichern lassen, kann man ja keine Filme, kein Papier, keine Drucker, etc. mehr verkaufen. Doch wer den Kunden nicht mehr nutzt, wird irgendwann für sie nutzlos.
                </h2>
            </div>
        </div>
        <div class="showcase-slide">
            <div class="showcase-content">
                <img src="<?= Url::base() ?>/slideshow/slika4.jpg" alt="04" />
            </div>
            <div class="showcase-thumbnail">
                <img src="<?= Url::base() ?>/slideshow/t_slika4.jpg" alt="01" width="140px" />
                <!-- <div class="showcase-thumbnail-content">Just some text<br/> I'm not <b>bold</b></div> -->
                <div class="showcase-thumbnail-cover"></div>
            </div>
            <div class="showcase-caption">
                <h2>
                    „Wenn ich die Menschen gefragt hätte, was sie wollen, hätten sie gesagt: schnellere Pferde.“ Henry Ford bewies echte Kundennutzenberater-Qualitäten. Er verstand es, das Problem der zu langsamen Mobilität nicht mit dem naheliegenden, sondern mit einem innovativen Ansatz zu lösen.
                </h2>
            </div>
        </div>

        <div class="showcase-slide">
            <div class="showcase-content">
                <img src="<?= Url::base() ?>/slideshow/slika5.jpg" alt="04" />
            </div>
            <div class="showcase-thumbnail">
                <img src="<?= Url::base() ?>/slideshow/t_slika5.jpg" alt="01" width="140px" />
                <!-- <div class="showcase-thumbnail-content">Just some text<br/> I'm not <b>bold</b></div> -->
                <div class="showcase-thumbnail-cover"></div>
            </div>
            <div class="showcase-caption">
                <h2>
                    Always put the customer first
                </h2>
            </div>
        </div>    
    </div>
</div>





    <!-- 4 Grunde -->

    <div class="banner1 pozadina_home1 pat">
        <p class="p3 w1 s7 tac mar_t_3 mar_b_3" data-sr="ease-in" style="max-width:80%;margin-left:auto;margin-right:auto;">4 Gründe für die Kundennutzen-Berater</p>
    </div>

<!-- Prvi razlog -->

    <div class="banner1 pozadina_home2">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_2 s22">
                    <img src="<?= Url::base() ?>/logo1234/1_logo.png">
                </div>
                <div class="grid_10 s22">
                    <p class="tekst_prva_razina" data-sr="ease-in">Unsere Kunden bestätigen:</p>
                    <p class="tekst_druga_razina" data-sr="ease-in">„Die Kundennutzen-Berater sind jeden Cent wert!“</p>
                    <p class="tekst_treca_razina padding_gore_20" data-sr="ease-in">Bestätigt Marcel Keller von Ellwanger & Geiger Privatbank.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Drugi razlog -->

    <div class="banner1 pozadina_home1">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_2 s23">
                    <img src="<?= Url::base() ?>/logo1234/2_logo.png">
                </div>
                <div class="grid_10 s23">
                    <p class="tekst_prva_razina crni" data-sr="ease-in">Anders als andere</p>
                    <p class="tekst_druga_razina crni" data-sr="ease-in">Profitieren Sie vom magischen Dreieck: Marketing, Vertrieb- und Unternehmensführung im perfekten Zusammenspiel.</p>
                    <p class="tekst_treca_razina crni padding_gore_20" data-sr="ease-in">Die Kundennutzen-Berater optimieren Ihre Einkommensseite. Bereichsübergreifend und erfolgreich. Im Gegensatz zu einer klassischen Unternehmensberatung, die meist nur die Ausgabenseite nach Einsparungsmöglichkeiten absucht. Im Gegensatz zu einer herkömmlichen Werbeagentur hören die Kundennutzen-Berater nicht bei Werbemaßnahmen auf. Unser Anspruch: die Kunden unserer Kunden zu begleiten. Vom Bedarf wecken zum Interesse generieren bis zum loyalen Kunden, der gerne und regelmäßig kauft. Weil er den Nutzen erkennt, den Sie ihm bieten.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Treći razlog -->

    <div class="banner1 pozadina_home2">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_2 s24">
                    <img src="<?= Url::base() ?>/logo1234/3_logo.png">
                </div>
                <div class="grid_10 s24">
                    <p class="tekst_prva_razina" data-sr="ease-in">Wir versprechen Ihnen nicht nur Erfolg:</p>
                    <p class="tekst_druga_razina" data-sr="ease-in">Wir garantieren Ihn</p>
                    <p class="tekst_treca_razina padding_gore_20" data-sr="ease-in">Unsere Leistung endet nicht mit einem Strategiepapier. Oder bunten Bildern. Sondern mit der erfolgreichen Umsetzung. Dafür begleiten wir Sie von Anfang bis Erfolg.
Unsere Devise: Wenig Papier, viel Umsetzung. Denn am Ende zählt für Sie und für uns nur eines: das Ergebnis.  Erfahren Sie mehr über unsere Erfolgsgarantie.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Četvrti razlog -->

    <div class="banner1 pozadina_home1">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_2 s25">
                    <img src="<?= Url::base() ?>/logo1234/4_logo.png">
                </div>
                <div class="grid_10 s25">
                    <p class="tekst_prva_razina crni" data-sr="ease-in">Unsere Beratungsperspektive:</p>
                    <p class="tekst_druga_razina crni" data-sr="ease-in">Aus dem Blickwinkel Ihrer Kunden</p>
                    <p class="tekst_treca_razina crni padding_gore_20" data-sr="ease-in">Sie und Ihre Mitarbeiter sind die Spezialisten für Ihre Produkte. Klar, Sie wollen Ihre Kunden durch Qualität  überzeugen. Das ist wichtig. Gleichzeitig ist es nicht immer einfach, die „Unternehmensbrille“ abzulegen und die eigenen Leistungen unbefangen und aus Kundensicht zu betrachten. Genau jetzt kommen die  Kundennutzen-Berater ins Spiel. Wir sind die Anwälte Ihrer Kunden. Wir unterstützen Sie, Leistungen und Kommunikation konsequent auf den Nutzen Ihrer Kunden auszurichten.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Check -->

    <div class="banner1 pozadina_home2">
        <div class="container">
            <div class="row mar_t_3 mar_b_3">
                <div class="grid_8 s12">
                    <div class="padding_dolje_20">
                        <p class="p3 w1 s12" data-sr="ease-in">Machen Sie den Quick-Check</p>
                    </div>
                    <div class="mobile_tekst_padding_20">    
                        <p class="padding_lijevo_20 tekst_druga_razina" data-sr="ease-in">
                            Kostenlos und aussagekräftig:<br>
    Erfahren Sie, wo Sie stehen <br>und in welchen Bereichen Sie den<br> Kundennutzen noch steigern sollten.
                        </p>
                    </div>
                    <div class="padding_lijevo_20 mobile_button_padding_20">
                        <a href="<?= Url::to(['site/kontakt']) ?>" class="btn-default black mar_t_35 pulse" style="color:#FFF;">Quick-Check vereinbaren</a>
                    </div>
                </div>
                <div class="grid_4">
                   <img src="<?= Url::base() ?>/images/kompas_gotov.png">
                </div>
            </div>
        </div>
    </div>
