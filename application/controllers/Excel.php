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
