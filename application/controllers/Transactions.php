<?php

use PHPMailer\PHPMailer\PHPMailer;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Transactions extends AdminControler
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Transactions_model');

    }

    public function index()
    {
        $data['data'] = $this->Transactions_model->get();
        $this->load_view('transactions/manager', $data);
    }


    public function detail($id)
    {
        $data['data'] = $this->Transactions_model->get($id);
        $data['factures'] = $this->Transactions_model->invoices();
        $this->load_view('transactions/transaction', $data);
    }


    public function create_inv($id)
    {
        $this->Transactions_model->create_invoice($id);
        redirect(base_url('transactions/detail/' . $id));
    }

    public function print_inv($id)
    {

        $data = $this->Transactions_model->invoices($id);
        extract($data, EXTR_REFS);
        try {
            ob_start();
            include APPPATH . '/helpers/invoice/res/ticket.php';
            $content = ob_get_clean();

            $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content);
            $html2pdf->output('ticket.pdf');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();

            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }


    }

    public function make_paiement()
    {
        $id = '';
        if ($this->input->post() !== FALSE) {
            $id = $this->input->post('id');
            if (!empty($_FILES['attachment']['name'][0])) {
                if ($this->upload_files($_FILES['attachment'], $id) === FALSE) {
                    $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                }
            }
            $this->Transactions_model->make_paie($id);
            redirect(base_url('transactions/detail/' . $id));

        } else {
            redirect(base_url('transactions/detail/' . $id));
        }
    }


    private function upload_files($files, $id)
    {
        $paths = 'uploads/transactions/' . $id;
        if (!file_exists($paths)) {
            mkdir($paths, 777, true);
        }

        $config = array(
            'upload_path' => $paths,
            'allowed_types' => '*',
            'overwrite' => 1,
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['attachment[]']['name'] = $files['name'][$key];
            $_FILES['attachment[]']['type'] = $files['type'][$key];
            $_FILES['attachment[]']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['attachment[]']['error'] = $files['error'][$key];
            $_FILES['attachment[]']['size'] = $files['size'][$key];
            $this->upload->initialize($config);
            if ($this->upload->do_upload('attachment[]')) {
                $dd = $this->upload->data();
                $this->Transactions_model->add_attachments($id, $dd);


            } else {
                return false;
            }
        }

        return $images;
    }



}
