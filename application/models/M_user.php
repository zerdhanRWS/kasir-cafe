<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

        public $table = 'user';
        public function __construct()
            {
                    parent::__construct();
            }
        //login
        public function Checkuser($email,$password)
        {
                $query = $this->db->get_where($this->table,
                array('email' => $email,
                        'password' => $password)    
                );
                if($query->num_rows() > 0)
                {
                    return true;
                }else{
                    return false;
                }
                exit;

        }
        //dapatkan user dari email
        function get_by_email($email)
        {
            $this->db->where('email',$email);
            return $this->db->get($this->table)->row();
        }
        // register
        public function validasi()
        {

        }




}