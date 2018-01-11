<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends FRONT_Controller {
    /*
        ログイン成功しましたら、
        $this->session->set_userdata('user_account', ･･･);
        でuser_accountセッションにDBから読み出したアカウント情報を設定してください。
        /auth, /entry 以外にアクセス可能となります
    */

    /**
     * トップページ
     *
     * @param   
     * @return  
     *
    */
    public function index() {
        if ($this->error_flg) return;
        try {
            front_layout_view('auth_index', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     * パスワードを忘れたら
     *
     * @param   
     * @return  
     *
    */
    public function forgot_password() {
        if ($this->error_flg) return;
        try {
            front_layout_view('auth_forgot_password', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

    /**
     * ロック
     *
     * @param   
     * @return  
     *
    */
    public function lock() {
        if ($this->error_flg) return;
        try {
            front_layout_view('auth_lock', $this->viewVar);
        } catch (Exception $e) {
            $this->_show_error($e->getMessage(), $e->getTraceAsString());
        }
    }

}

/* End of file auth.php */
/* Location: ./application/controllers/front/auth.php */