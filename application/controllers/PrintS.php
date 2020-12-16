<?php defined('BASEPATH') or exit('No direct script access allowed');

class PrintS extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function print()
    {
        $data = $this->detail('das', $_GET['id']);
        $this->load->view('Cuti/print', $data);
    }
    public function detail($req = 'dos', $da)
    {
        if ($req != 'dos') {
            $_GET['id'] = $da;
        }
        $ping = array('id' => $_GET['id']);
        $query = $this->db->get_where('Request_libur', $ping)->result();
        $query = $query[0];
        $data['detail'] = $query;
        $ping = array('email' => $query->email);
        // var_dump($ping);die;
        $query = $this->db->get_where('user', $ping)->result();
        $query = $query[0];
        $data['user'] = $query;
        if ($req != 'dos') {
            return $data;
        }
        $this->load->view('Cuti/detail', $data);
        $this->load->view('templates/footer');
    }
}
?>