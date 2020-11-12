
<style type="text/css">
    <!--
    div.zone {
        border: none;
        border-radius: 6mm;
        background: #FFFFFF;
        border-collapse: collapse;
        padding: 3mm;
        font-size: 2.7mm;
    }

    h1 {
        padding: 0;
        margin: 0;
        color: #DD0000;
        font-size: 7mm;
    }

    h2 {
        padding: 0;
        margin: 0;
        color: #222222;
        font-size: 5mm;
        position: relative;
    }

    p {
        margin: 10px;
        font-size: 14px;
    }

</style>
<page format="120x200" orientation="L" style="font: arial;width: 695px;">
    <table style="width: 99%;border: none;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td colspan="2" style="width: 100%">
                <div class="zone" style="height: 34mm;position: relative;font-size: 5mm;">
                    <div style="text-align: center; font-size: 4mm; ">
                        <h1 style="color: black;"> ILEAD </h1>
                        <h4><?=$this->lang->line('payment_label')?></h4><br>
                    </div>
                    <div style="position:relative;left: 10px;">
                        <p><?=$this->lang->line('register_name_message')?> : <b><?= $user ?></b> <span
                                    style="position: relative;left:380px;">Sponsor: <?= $sponsor ?><b> </b></span></p>
                        <p>Package : <b> <?= $plan ?></b></p>
                        <p>Status : <b> <?=$this->lang->line('invoice_paid')?></b></p>
                        <p>Date : <b> <?php echo date('d/m/Y à H:i:s'); ?></b></p>
                        <p><?=$this->lang->line('payment_method')?> : <b> <?= $mode_paiement ?></b></p>
                        <p><?=$this->lang->line('transaction_message')?> : <b><?= number_format($amount, 0, 0, ' ') ?> F CFA </b></p>
                        <p><?=$this->lang->line('invoice_trans')?> : <b>#<?= $num_trans ?> </b> <span style="position: relative;left:290px;"><?=$this->lang->line('invoice_code')?>: <b><?= $code_user ?></b></span>
                        </p>
                    </div>
                    <br>
                    <div style="text-align: center; font-size: 4mm; ">
                        <p style="color: black;">Par ileadglobe.com </p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</page>
