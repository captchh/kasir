<?php

Class Fungsi {

    protected $ci ;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {

        // $session = array(
        //     'username' => $row->username
        // );
        // $this->session->set_userdata($session);
        // return $session;

        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get()->row();
        return $user_data;
    }
}