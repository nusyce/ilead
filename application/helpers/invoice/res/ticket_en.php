<?php
    $num = 'CMD01-'.date('ymd');
    $nom = 'DUPONT Alphonse';
    $date = '31/12/'.date('Y');
?>
<style type="text/css">
<!--
    div.zone { border: none; border-radius: 6mm; background: #FFFFFF; border-collapse: collapse; padding:3mm; font-size: 2.7mm;}
    h1 { padding: 0; margin: 0; color: #DD0000; font-size: 7mm; }
    h2 { padding: 0; margin: 0; color: #222222; font-size: 5mm; position: relative; }
    p{ margin:10px;font-size: 14px;}
-->
</style>
<page format="120x200" orientation="L" style="font: arial;width: 695px;">

    <table style="width: 99%;border: none;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td colspan="2" style="width: 100%">
                <div class="zone" style="height: 34mm;position: relative;font-size: 5mm;">
                    <div style="text-align: center; font-size: 4mm; ">
                        <h1 style="color: black;"> ILEAD </h1>
                        <h4>Payment invoice</h4><br>
                    </div>

                    <div style="position:relative;left: 10px;">
                        <p>Name : <b> </b> <span style="position: relative;left:380px;">Sponsor: <b> </b></span></p>
                        <p>Plan : <b> </b></p>
                        <p>Status : <b> </b></p>
                        <p>Dated : <b> <?php echo date('d/m/Y à H:i:s'); ?></b></p>
                        <p>Payment method : <b> </b></p>
                        <p>Amount : <b> </b></p>
                        <p>Transaction number : <b> </b></p>
                    </div><br><br>


                        <div style="text-align: center; font-size: 4mm; ">
                            <p style="color: black;">By ileadglo.com </p>

                        </div>
                   <!-- <h1>Billet soirée spécial Html2Pdf</h1>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>Valable le <?php /*echo $date; */?> à 20h30</b><br>
                    <img src="./res/logo.gif" alt="logo" style="margin-top: 3mm; margin-left: 20mm">-->
                </div>
            </td>
        </tr>
        <tr>
           <!-- <td style="width: 25%;">
                <div class="zone" style="height: 40mm;vertical-align: middle;text-align: center;">
                    <qrcode value="<?php /*echo $num."\n".$nom."\n".$date; */?>" ec="Q" style="width: 37mm; border: none;" ></qrcode>
                </div>
            </td>-->
          <!--  <td style="width: 75%">
                <div class="zone" style="height: 40mm;vertical-align: middle; text-align: justify">
                    <b>Conditions d'utilisation du billet</b><br>
                    Le billet est soumis aux conditions générales de vente que vous avez
                    acceptées avant l'achat du billet. Le billet d'entrée est uniquement
                    valable s'il est imprimé sur du papier A4 blanc, vierge recto et verso.
                    L'entrée est soumise au contrôle de la validité de votre billet. Une bonne
                    qualité d'impression est nécessaire. Les billets partiellement imprimés,
                    souillés, endommagés ou illisibles ne seront pas acceptés et seront
                    considérés comme non valables. En cas d'incident ou de mauvaise qualité
                    d'impression, vous devez imprimer à nouveau votre fichier. Pour vérifier
                    la bonne qualité de l'impression, assurez-vous que les informations écrites
                    sur le billet, ainsi que les pictogrammes (code à barres 2D) sont bien
                    lisibles. Ce titre doit être conservé jusqu'à la fin de la manifestation.
                    Une pièce d'identité pourra être demandée conjointement à ce billet. En
                    cas de non respect de l'ensemble des règles précisées ci-dessus, ce billet
                    sera considéré comme non valable.<br>
                    <br>
                    <i>Ce billet est reconnu électroniquement lors de votre
                    arrivée sur site. A ce titre, il ne doit être ni dupliqué, ni photocopié.
                    Toute reproduction est frauduleuse et inutile.</i>
                </div>
            </td>-->
        </tr>
    </table>
</page>
