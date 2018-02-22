<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	

		public function Bank()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_bank','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/bank-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function IncentiveSettings()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_inc_settings','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/incSettings-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Company()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_company','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/company-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Route()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_route','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/route-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Client()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_client','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/client-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Supplier()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_supplier','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/supplier-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Employee()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_employee','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/employee-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Store()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_store','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/store-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function WeightUnit()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_unit','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/unit-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	
	public function Expenses()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_expense','*','')->result_array();
		$data['rowsad'] = $this->db->query('SELECT SUM(advance) as totadv FROM td_expense')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/expense-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function AssignedRoute()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->base_model->show_data('td_assign_route','*','')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/route-assign-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function PurchasePreview($id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_purchase_bill WHERE p_bill_id='.$id)->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/print-screen',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Purchase()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_purchase_bill ORDER BY p_bill_date ASC')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/purchase-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function PurchaseItems($pid)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_purchase_item WHERE pid='.$pid)->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/purchase-item-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Stocking($pid)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		
		$data['rows'] = $this->db->query('SELECT * FROM td_purchase_item WHERE item_name="'.urldecode($pid).'"')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/stock-item-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Returns($pid)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['item'] = $this->db->query('SELECT * FROM td_purchase_item WHERE item_id="'.$pid.'"')->result_array();
		$data['rows'] =$this->db->query('SELECT * FROM td_return_details WHERE item_id='.$pid)->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/return-item-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Sales()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_sales_bill ORDER BY p_bill_date ASC')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/sales-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function SaleItems($pid)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_sales_item WHERE pid='.$pid)->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/sale-item-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function SaleDtl($pid)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['billno'] = $this->db->query('SELECT * FROM td_sales_bill WHERE p_bill_id='.$pid)->result_array();
		$data['rows'] = $this->db->query('SELECT * FROM td_sales_item WHERE pid='.$pid)->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/sale-item-dtl',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	
	public function SalesPreview($id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_sales_bill WHERE p_bill_id='.$id)->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/print-sales-screen',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	
	public function SalesRawBill($id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['billdata'] = $this->db->query('SELECT * FROM td_sales_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$billdatas = $this->db->query('SELECT * FROM td_sales_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$data['billitem'] = $this->db->query('SELECT * FROM td_sales_item WHERE pid='.$billdatas[0]['p_bill_id'])->result_array();
		$this->load->view('pages/invoice/raw_s_invoice',$data);
		
	}
	
	}
	public function SalesFinalBill($id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['billdata'] = $this->db->query('SELECT * FROM td_sales_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$billdatas = $this->db->query('SELECT * FROM td_sales_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$data['billitem'] = $this->db->query('SELECT * FROM td_sales_item WHERE pid='.$billdatas[0]['p_bill_id'])->result_array();
		$this->load->view('pages/invoice/final_s_invoice',$data);
		
	}
	
	}
	public function PurchaseRawBill($id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['billdata'] = $this->db->query('SELECT * FROM td_purchase_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$billdatas = $this->db->query('SELECT * FROM td_purchase_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$data['billitem'] = $this->db->query('SELECT * FROM td_purchase_item WHERE pid='.$billdatas[0]['p_bill_id'])->result_array();
		$this->load->view('pages/invoice/raw_p_invoice',$data);
		
	}
	
	}
	public function PurchaseFinalBill($id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['billdata'] = $this->db->query('SELECT * FROM td_purchase_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$billdatas = $this->db->query('SELECT * FROM td_purchase_bill WHERE p_bill_no="'.$id.'"')->result_array();
		$data['billitem'] = $this->db->query('SELECT * FROM td_purchase_item WHERE pid='.$billdatas[0]['p_bill_id'])->result_array();
		$this->load->view('pages/invoice/final_p_invoice',$data);
		
	}
	
	}
	public function StoreAllocation()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_store_allocate')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/store-allocate',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	public function Incentives()
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['rows'] = $this->db->query('SELECT * FROM td_incentives')->result_array();
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/incentive-details',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}
	
	public function SalaryDetails($emp_id)
	{
		if($this->session->userdata('is_admin_logged_in')!=1)
		{
			redirect(base_url());	
		}else{
		$data['employee'] = $this->db->query("SELECT * FROM td_employee where emp_id='$emp_id'")->row();	
		$data['rows'] = $this->db->query("SELECT * FROM salary_detail where emp_id='$emp_id'")->result_array();
		
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['left_sidebar'] = $this->load->view('elements/left-sidebar','',true);
		$data['maincontent']=$this->load->view('pages/pageview/salary',$data,true);
		$this->load->view('layout-after-login',$data);
	}
	
	}

	// This Function For Get Item By Barcode
	public function get_item()
	{
		$barcode=$this->input->post('barcode');
		$item=$this->base_model->get_barcode_item($barcode);

		// echo $this->db->last_query();
		// die;

		// var_dump($item);
		// die;

		$data = array(
			'id' => $item[0]['item_id'],
			'qty' => 1,
			'price' => $item[0]['item_s_price']/$item[0]['item_p_qty'],
			'name' => $item[0]['item_name'],
			'hsn' => $item[0]['hsn'],
			'sgst' => $item[0]['item_s_gst'],
			'cgst' => $item[0]['item_s_sgst'],
			'unit' => $item[0]['unit'],
			'maxquentity' => $item[0]['item_p_qty']
		);
			
		$this->cart->insert($data);
		// $return_json = array('status'=>1,'student_arr'=>$this->cart->contents());
		// echo json_encode($return_json);

		foreach ($this->cart->contents() as $item) {
			 $sub=(float)$item['subtotal']+((float)$item['subtotal']*((float)$item['sgst']+(float)$item['cgst'])/100);
			echo "
			<tr>
				<td>".$item['name']."</td>
				<td>".$item['price']."</td>
				<td><input type='text' value='".$item['qty']."' class='qty' style='max-width:16%;text-align:center' data-rowid='".$item['rowid']."' data-maxquentity='".$item['maxquentity']."' data-crnt='".$item['qty']."'></td>
				<td>".$item['unit']."</td>
				<td>".$item['sgst']."</td>
				<td>".$item['cgst']."</td>
				<td>".$sub."</td>
			</tr>"; 
		}
	}

	// This Function For Update Item Quentity
	public function update_sell_item_quentity()
	{
		$rowId=$this->input->post('rowid');
		$quentity=$this->input->post('qty');
		$data = array(
			'rowid'  => $rowId,
			'qty'  => $quentity
			);
		$this->cart->update($data);

		foreach ($this->cart->contents() as $item) {
			 $sub=(float)$item['subtotal']+((float)$item['subtotal']*((float)$item['sgst']+(float)$item['cgst'])/100);
			echo "
			<tr>
				<td>".$item['name']."</td>
				<td>".$item['price']."</td>
				<td><input type='text' value='".$item['qty']."' class='qty' style='max-width:16%;text-align:center' data-rowid='".$item['rowid']."' data-maxquentity='".$item['maxquentity']."' data-crnt='".$item['qty']."'></td>
				<td>".$item['unit']."</td>
				<td>".$item['sgst']."</td>
				<td>".$item['cgst']."</td>
				<td>".$sub."</td>
			</tr>"; 
		}
	}

	// This Function To Clear All Item
	public function clear_item()
	{
		$this->cart->destroy();
	}
		
}
