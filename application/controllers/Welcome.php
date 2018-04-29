<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$this->load->view('complaign');
	}
	public function sendmsg(){
		$mobile=$this->input->post('mobile');
		$message=$this->input->post('message');
		$data=$this->input->post();

		unset($data['submit']);
		//echo $mobile;

		$authkey="";
		$senderId="";
		$route="";

		$postData = array(
			'authkey' =>$authkey ,
			'mobiles'=>$mobile,
			'message'=>$message,
			'sender'=>$senderId,
			'rout'=>$route
		);

		$url="http://api.";
		$ch=curl_init();
		curl_setopt_array($ch,array(
			CURLOPT_URL=>$url,
			CURLOPT_RETURNTRANSFER=>TRUE,
			CURLOPT_POST=> TRUE,
			CURLOPT_POSTFIELDS=> $postData
			 ));

		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);

		$output = curl_exec($ch);

		if(curl_errno($ch)){
			echo 'error'.curl_error($ch);
		}
		curl_close($ch);
		?>
		<p> Response ID :<?php echo $output;?>Message sent successfull</p>
		<?php
	}
}

