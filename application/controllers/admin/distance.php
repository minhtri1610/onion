<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Distance extends ADMIN_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db/m_distance_model','distance');
        $this->load->library('form_validation');
    }

    /**
     * 距離マスター
     *
     * @param   
     * @return  
     *
    */
    public function index() {
        if ($this->error_flg) return;
        try {
            $data['distance_list']= $this->distance->get_list();
            $this->viewVar=$data;
            admin_layout_view('distance_index', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     * 距離登録編集
     *
     * @param   
     * @return  
     *
    */
    public function edit($id = NULL) {
        if ($this->error_flg) return;
        try {
            $data['get_distance']=$this->distance->select_by_id($id)[0];
            $data['title'] ="距離登録";
            if ($this->input->post()) {
                if($this->input->post('distance_code') != $data['get_distance']['distance_code'])
                {
                    $is_unique =  '|is_unique[m_distance#distance_code]';
                }
                else {
                    $is_unique =  '';
                }
                $this->form_validation->set_rules('distance_code', 'distance_code', 'required|trim|xss_clean'.$is_unique);
                if ($this->form_validation->run() == true) {
                    $dataUpdate = array(
                        'id' => $id,
                        'distance_code' => $this->input->post('distance_code'),
                        'distance_name' => $this->input->post('distance_name')
                    );
                    $this->distance->update_by_id($dataUpdate);
                    $this->session->set_flashdata('message', "<div class='alert-success'>Updated !</div>");
                    redirect('admin/distance');
                }
                else if ($this->form_validation->run() == false)
                {
                    $this->session->set_flashdata('message', "<div class='alert-danger'>Update fail! Distance code already exists</div>");
                    redirect('admin/edit-distance/'.$id);
                }
            }
            $this->viewVar = $data;
            admin_layout_view('distance_edit', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     *
     *
     * @param
     * @return
     *
     */
    public function create() {
        if ($this->error_flg) return;
        try {
            $data['title'] ="距離登録";
            if ($this->input->post())
            {
                $this->form_validation->set_rules('distance_code','distance_code','required|trim|xss_clean|is_unique[m_distance#distance_code]');
                if ($this->form_validation->run() == true)
                {
                    $dataInsert = array(
                        'distance_code'=>$this->input->post('distance_code'),
                        'distance_name'=>$this->input->post('distance_name')
                    );
                    $this->distance->insert($dataInsert);
                    $this->session->set_flashdata('message', "<div class='alert-success'>Inserted !</div>");
                    redirect('admin/create-distance');
                }
                else if ($this->form_validation->run() == false)
                {
                    $this->session->set_flashdata('message', "<div class='alert-danger'>Insert fail! Distance code already exists</div>");
                    redirect('admin/create-distance');
                }
            }
            $this->viewVar = $data;
            admin_layout_view('distance_create', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     *
     *
     * @param
     * @return
     *
     */
    public function delete($id = NULL) {
        if ($this->error_flg) return;
        try {
            $dataUpdate = array(
                'id'=>$id,
                'delete_flg'=>'1',
                'delete_date'=>date('Y-m-d H:i:s')
            );
            $this->distance->update_by_id($dataUpdate);
            $this->session->set_flashdata('message', "<div class='alert-success'>Deleted!</div>");
            redirect('admin/distance');
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }
}

/* End of file distance.php */
/* Location: ./application/controllers/admin/distance.php */