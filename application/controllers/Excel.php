<?php
require(APPPATH . 'vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Excel extends AdminControler
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Transactions_model');

    }

    public function  transaction(){
        $transaction =  $data['data'] = $this->Transactions_model->get();
        $filename = 'liste_transaction';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'N° TRANSACTION');
        $sheet->setCellValue('C1', 'PLAN');
        $sheet->setCellValue('D1', 'ADHERENT');
        $sheet->setCellValue('E1', 'CONTACT');
        $sheet->setCellValue('F1', 'Country');
        $sheet->setCellValue('G1', 'MONTANT');
        $sheet->setCellValue('G1', 'MODE DE PAIEMENT');
        $sheet->setCellValue('H1', 'STATUS');
        $rows = 2;
        foreach ($transaction as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['num_trans']);
            $sheet->setCellValue('C' . $rows, $val['plan']);
            $sheet->setCellValue('D' . $rows, $val['lastname'].' '.$val['firstname']);
            $sheet->setCellValue('E' . $rows, $val['phone']);
            $sheet->setCellValue('F' . $rows, $val['country']);
            $sheet->setCellValue('G' . $rows, $val['amount']);
            $sheet->setCellValue('G' . $rows, $val['mode_paiement']);
            $sheet->setCellValue('H' . $rows, $val['status']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');	// download file

    }

    public function paid_client()
    {
        $paids = $this->User_model->get_all_paid();
        $filename = 'paid_adherents';


        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Cle');
        $sheet->setCellValue('B1', 'Firstname');
        $sheet->setCellValue('C1', 'Lastname');
        $sheet->setCellValue('D1', 'Phone');
        $sheet->setCellValue('E1', 'Package');
        $sheet->setCellValue('F1', 'Country');
        $sheet->setCellValue('G1', 'Cluster');
        $rows = 2;
        foreach ($paids as $val){
            $data=[];
            $data['plan_id']=$val['plan_id'];
            $this->db->where('cle', $val['cle']);
            $this->db->update('tbl_users', $data);

            $sheet->setCellValue('A' . $rows, $val['cle']);
            $sheet->setCellValue('B' . $rows, $val['firstname']);
            $sheet->setCellValue('C' . $rows, $val['lastname']);
            $sheet->setCellValue('D' . $rows, $val['phone']);
            $sheet->setCellValue('E' . $rows, $val['plan']);
            $sheet->setCellValue('F' . $rows, $val['country']);
            $sheet->setCellValue('G' . $rows, $val['cluster']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');	// download file
    }






}
