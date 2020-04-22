<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author User
 */
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_Model');
    }

    public function login_validation() {
        $username = $this->input->post_get("username");
        $password = $this->input->post_get("password");

        if (!is_null($username) && !is_null($password)) {

            $resultData = $this->User_Model->login($username, $password);
            if ($resultData["status"] == 200) {
                $this->session->user_session = $resultData["body"];

                $response["status"] = 200;
                $response["body"] = $resultData["body"];
            } else if ($resultData["status"] == 202) {
                $response["status"] = 202;
                $response["body"] = $resultData["body"];
            } else if ($resultData["status"] == 201) {
                $response["status"] = 202;
                $response["body"] = $resultData["body"];
            } else {
                $response = $resultData;
            }
        } else {
            $response["status"] = 200;
            $response["body"] = "Invalid Parameter";
        }
        echo json_encode($response);
    }

    public function logout() {

        session_destroy();
        redirect("");
    }

}

?>