<?php defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
    }

    public function get_selisih()
    {
        $list = $this->db->get('user')->result();
        foreach ($list as $key => $value) {
            $date1 = $value->TGL_Lahir;
            $date2 = date('l, d-m-Y');

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            echo $years;
            if ($years > 49) {
                $this->db->set('Pensiun', 1);
                $this->db->where('id', $value->id);
                $this->db->update('user');
            } elseif ($years < 50){
                $this->db->set('Pensiun', 0);
                $this->db->where('id', $value->id);
                $this->db->update('user');
            }
        }
    }
    public function validate()
    {
        $data = $_POST;
        $this->db->set($data);
        $this->db->where('email', $_SESSION['email']);
        $this->db->update('user');
        redirect('auth');
    }
    public function respon()
    {
        $query = $this->db->get_where('Request_libur', array('email' => $_SESSION['email']))->result();
        $data = $this->admin('dos', $query);
        if (empty($data)) {
            $data = null;
        }
        $this->load->view('Cuti/all_request', $data);
        $this->load->view('templates/footer');
    }

    public function admin($req = 'das', $list = [])
    {
        if ($req == 'das') {
            $list = $this->db->get('Request_libur')->result();
        }
        foreach ($list as $key => $value) {
            switch ($value->aprof) {
                case 0:
                    $data['neet'][$key] = $value;
                    break;
                case 1:
                    $data['not'][$key] = $value;
                    break;
                case 2:
                    $data['yes'][$key] = $value;
                    break;
            }
        }
        if (!empty($data['neet'])) {
            $data['neet'] = array_reverse($data['neet']);
        }
        if (!empty($data['not'])) {
            $data['not'] = array_reverse($data['not']);
        }
        if (!empty($data['yes'])) {
            $data['yes'] = array_reverse($data['yes']);
        }

        if ($req != 'das') {
            if (empty($data)) {
                return $data = null;
            }
            return $data;
        }
        $this->load->view('Cuti/all_request', $data);
        $this->load->view('templates/footer');
    }
    public function Las()
    {
        // var_dump($_POST);die;
        $this->db->set($_POST);
        $this->db->where('id', $_POST['id']);
        $this->db->update('`Request_libur');
        redirect('Cuti/admin');
    }
    public function detail()
    {
        $data['title'] = 'Requst';
        $ping = array('id' => $_GET['id']);
        $query = $this->db->get_where('Request_libur', $ping)->result();
        $query = $query[0];
        $data['detail'] = $query;
        $ping = array('email' => $query->email);
        $query = $this->db->get_where('user', $ping)->result();
        $query = $query[0];
        $data['user'] = $query;
        $this->load->view('Cuti/detail', $data);
        $this->load->view('templates/footer');
    }
    public function libur()
    {
        if (!empty($_POST)) {
            $this->Post_libur($_POST);
        }
        if (empty($_POST)) {
            $this->get_page();
        }
    }

    private function Post_libur($data)
    {
        $data = array(
            'email' => $_SESSION['email'],
            'tgl_mulai' => $data['mulai'],
            'alasan' => $data['alasan'],
            'lama' => $data['lama'],
            'aprof' => 0,
            'tgl_masuk' => '0000-00-00'
        );
        $this->db->insert('Request_libur', $data);
        redirect('/Cuti/respon');
    }
    private function get_page()
    {
        $ping = array('email' => $_SESSION['email']);
        $query = $this->db->get_where('user', $ping)->result();
        $query = $query[0];
        $data['user'] = $query;
        if ($query->Jenis_Pekerjaan == 'default' || $query->Alamat == 'default' || $query->Jabatan == 'default' || $query->id_Pekerja == 0) {
            $data['title'] = 'My Profile';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Cuti/lengkapi_data', $data);
        } else {
            $this->load->view('Cuti/info');
        }

        $this->load->view('templates/footer');
    }
}
