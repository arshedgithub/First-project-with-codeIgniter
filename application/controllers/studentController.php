<?php

    class StudentController extends CI_Controller {

        public function index(){
            $this->load->model('StudentModel');
            $student = $this->StudentModel->student_data();

            $data['title'] = "student page title";
            $data['name'] = $student;

            $this->load->view('student', $data);
            // echo "Student name is : ".$student;
        }
    }

?>