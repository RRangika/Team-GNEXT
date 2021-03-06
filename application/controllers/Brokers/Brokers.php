<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Brokers extends User_controller{
    var $data;
    
    public function __construct() {
        parent::__construct();
        $this->data = array(
            'site_name' => $this->config->item('site_name'),
            'company_name' => $this->config->item('company_name'),
            'title' => 'Brokers | Portfolio - ' . $this->config->item('site_name'),
            'description' => 'Customers Details of' . $this->config->item('description'),
            'usertype' => "brokers",
        );
    }
    
    public function view_portfolio(){
        $data=$this->data;
        $data['scripts'][0]['src'] = base_url() . "assets/plugins/form-validation/jquery.validate.min.js";
    
        $data['navigation_buttons'] = $this->load->view('brokers/loading_pages/navigation_buttons',$data, true);
        $data['header'] = $this->load->view('template/a_vheader', $data, TRUE);
        $data['footer'] = $this->load->view('template/a_vfooter', NULL, TRUE);

        $this->load->view('includes/v_include_header', $data);
        $this->load->view('brokers/v_brokers_portfolio');
        $this->load->view('includes/v_include_footer');
    }   
}
