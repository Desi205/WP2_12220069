<?php
Class Coba1 extends CI_Controller
{
    public function index ()
{
    //code...
    echo "Selamat Datang di Webprograming II";

}
public function biodata($nama=null,$nim=null)
{
    //echo "Nama : $nama <br>";
    //echo "NIM : $nim";
    $data['nama1']=$nama;
    $data['nim1']=$nim;
    $this->load->view('v_Coba1',$data);
}

}