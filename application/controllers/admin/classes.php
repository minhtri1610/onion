<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends ADMIN_Controller {

    /**
     * クラスマスター
     *
     * @param
     * @return
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('db/m_class_model','class');
    }
    public function index() {
        if ($this->error_flg) return;
        try {
            $data['class_list'] = $this->class->get_list();
            $this->viewVar = $data;
            admin_layout_view('classes_index', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     * クラス登録編集
     *
     * @param
     * @return
     *
     */
    public function edit($id = NULL) {
        if ($this->error_flg) return;
        try {
            $data['title'] =" クラス編集";
            $data['get_class']=$this->class->select_by_id($id)[0];
            $this->viewVar = $data;
            $this->accountVar=$data;
            if ($this->input->post())
            {
                $dataUpdate = array(
                    'id'=>$id,
                );
//                 if ($this->class->update_by_id($dataUpdate))
//                 {
//                     return 0;
//                     echo "a";
//                     die();
//                 }
                $this->class->update_by_id($dataUpdate);
                $this->session->set_flashdata('message', "<div class='alert alert-danger'>Uploaded!</div>");
            }
            admin_layout_view('classes_edit', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

}

/* End of file class.php */
/* Location: ./application/controllers/admin/class.php */