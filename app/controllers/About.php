<?php
class About extends Controller
{
    public function index($nama = 'Miftah', $pekerjaan = 'Mahasiswa', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        // head
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        // footer
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page Me';
        // head
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
