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
}

/* End of file Hello.php */
