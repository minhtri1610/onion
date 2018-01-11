<?php
class m_student_model extends DB_Model {

    /**
     * construct
     * @param
     * @return
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_account($name, $pwd)
    {
        $array = array('email' => $name, 'password' => $pwd);
        $this->db->select()
               ->from('m_student')
               ->where($array);
		$query = $this->db->get()->result_array();
		return $query;
    }

    public function check_email_exits($email)
    {
        $this->db->select()
            ->from('m_student')
            ->where('email', $email);
        $query = $this->db->get()->result_array();
        return $query;
    }
    
}
