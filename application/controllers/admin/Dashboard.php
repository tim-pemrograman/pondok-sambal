<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('dashboard_model');
        $this->load->model('login_model');
        $this->load->library('form_validation');

        // cek_login();
        if (!$this->session->userdata('employee_id')) {
            redirect('admin/auth');
        } else {
			
        }
    }

	// Halaman dashboard
	public function index()
	{
        $data['meta_data'] = getSEOData();
		$employee_id = $this->session->userdata('employee_id');

        $current_date = date('Y-m-d');
        $current_month = date('Y-m');
        $current_year = date('Y');

        $data['data_core'] = $this->login_model->GetNama($employee_id);
        $data['data_bulanan'] = $this->dashboard_model->getDataMonthly($current_month);
        $data['data_tahunan'] = $this->dashboard_model->getDataAnnual($current_year);
        
        $data['pending_order'] = $this->dashboard_model->getPendingOrder();
        $data['menu_available'] = $this->dashboard_model->getMenuCount();

		$data['titles'] = "Dashboard - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/template/footer');
	}

    public function getChart()
    {        
        $data['meta_data'] = getSEOData();
		$employee_id = $this->session->userdata('employee_id');
        
        $data['data_core'] = $this->login_model->GetNama($employee_id);
        

        $current_year = date('Y');
        $data['data_chart'] = $this->dashboard_model->getChartData($current_year);

        // $return_data = [];
        // foreach($data['data_chart'] as $item)
        // {
        //     array_push($return_data, $item['price']);
        // }
        
        // var_dump(json_encode($return_data)); exit;
        header('Content-Type: application/json');
        echo json_encode( $data['data_chart'] );

        // //gabisa pake return kalau mau di panggil ke ajax
        // return json_encode($return_data);
        
        // return json_encode($data['data_chart']);
        
    }

    public function getPieChart() {

        $data['data_pie_chart'] = $this->dashboard_model->getTotalSentiment();
        header('Content-Type: application/json');
        echo json_encode( $data['data_pie_chart'] );
    }

}

?>
