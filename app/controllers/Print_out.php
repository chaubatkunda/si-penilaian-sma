<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function guru()
    {
        $title =  'Cetak Guru';
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $data = $this->load->view('print_out/print_guru', [
            'title' => $title,
            'guru'  => $this->guru->getAllGuru()
        ], TRUE);
        $mpdf->WriteHTML($data);
        // $mpdf->AutoPrint(true);
        $mpdf->Output();
    }
}
