<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{

    public function show()
    {
        $sets = [
            'one',
            1,
            3,
            'sadasdsa'
        ];
        $sets2 = [
            'one2',
            12,
            32,
            'sadasdsa2'
        ];
        $this->load->view('v_hello', [
            'sets' => $sets,
            'sets2' => $sets2,
        ]);
    }


    public function test()
    {
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'test' => 'qwerty',
            'body' => 'v_hello'
        ]);
    }
}

/* End of file Hello.php */
