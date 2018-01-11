<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends ADMIN_Controller {
    /*
        ログイン成功しましたら、
        $this->session->set_userdata('admin_account', ･･･);
        でadmin_accountセッションにDBから読み出したアカウント情報を設定してください。
        /admin/auth 以外にアクセス可能となります
    */

    /**
     * ログイン
     *
     * @param   
     * @return  
     *
    */
    public function index() {
        if ($this->error_flg) return;
        try {
            admin_layout_view('auth_index', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

}

/* End of file auth.php */
/* Location: ./application/controllers/admin/auth.php */