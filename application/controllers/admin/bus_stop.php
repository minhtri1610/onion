<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bus_stop extends ADMIN_Controller {

    /**
     *
     *
     * @param
     * @return
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('db/m_bus_stop_model','bus_stop');
    }

    /**
     * バス停マスター
     *
     * @param   
     * @return  
     *
    */
    public function index() {
        if ($this->error_flg) return;
        try {
            $data['bus_stop'] = $this->bus_stop->get_list();
            $this->viewVar = $data;
            admin_layout_view('bus_stop_index', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     * バス停登録編集
     *
     * @param   
     * @return  
     *
    */
    public function edit($id = NULL) {
        if ($this->error_flg) return;
        try {
            $data['title'] ="バス停登録";
            $data['get_bus_stop']=$this->bus_stop->select_by_id($id)[0];
            $this->viewVar = $data;
            if ($this->input->post())
            {
                $dataUpdate = array(
                    'id'=>$id,
                    'bus_stop_code' =>$this->input->post('bus_stop_code'),
                    'bus_stop_name' =>$this->input->post('bus_stop_name')
                );
                $this->bus_stop->update_by_id($dataUpdate);
                $this->session->set_flashdata('message', "<div class='alert-success'>Updated !</div>");
                redirect('admin/bus-stop');
            }
            admin_layout_view('bus_stop_edit', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    public function create()
    {
        if ($this->error_flg) return;
        try {
            $data['title'] ="バス停登録";
            $this->viewVar = $data;
            if ($this->input->post())
            {
                $dataInsert = array(
                    'bus_stop_code' =>$this->input->post('bus_stop_code'),
                    'bus_stop_name' =>$this->input->post('bus_stop_name')
                );
                $this->bus_stop->insert($dataInsert);
                $this->session->set_flashdata('message', "<div class='alert-success'>Inserted !</div>");
                redirect('admin/create-bus-stop');
            }
            admin_layout_view('bus_stop_create', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }
    public function delete($id = NULL) {
        if ($this->error_flg) return;
        try {
                $dataUpdate = array(
                    'id'=>$id,
                    'delete_flg'=>'1',
                    'delete_date'=>date('Y-m-d H:i:s')
                );
                $this->bus_stop->update_by_id($dataUpdate);
                $this->session->set_flashdata('message', "<div class='alert-success'>Deleted !</div>");
                redirect('admin/bus-stop');
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }
}

/* End of file bus_stop.php */
/* Location: ./application/controllers/admin/bus_stop.php */