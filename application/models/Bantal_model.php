<?php
class Bantal_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}
	 //
	 function data($number,$offset){
	 	$output='';
	 	$batik = $this->db->get('produk',$number,$offset)->result_array();
	 	$i=0; $scp = base_url("assets/js/ninja-slider.js");
	 	foreach ($batik as $u ) {
	 		$src = base_url()."assets/img/uploads/".$u['gambar'];
	 		$nm = $u['nama'];
	 		$hr = $u['harga'];
	 		$des = $u['deskripsi'];
	 		$output.='
	 			<script src="'; $output.=$scp; $output.='"></script>
	 			<div class="col-sm-4" onclick="lightbox('; $output .= $i; $output .=')">
	 				 <div class="case-studies-content">
	 					<img src="'; $output .= $src; $output .='" alt="" class="img-responsive"/>


	 					<h2><b>'; $output .= $nm; $output.='</b></h2>
	 					<h3>Rp. '; $output .= $hr; $output.='</h3>
	 					<p class="p-about" style="text-align: left">'; $output .= $des; $output.='</p>
	 				</div>
	 			</div>
	 		';
	 		$i++;
	 	}
	 	$output .='
	 		<br><br><br>
	 		<div id="ninja-slider" style="display:none">
	             <div class="slider-inner">
	                 <ul>
	 	';
	 	foreach ($batik as $slide) {
	 		$src = base_url()."assets/img/uploads/".$slide['gambar'];
	 		$nm = $slide['nama'];
	 		$des = $slide['deskripsi'];
	 		$output .='
                 <li>
                     <a class="ns-img" href="'; $output .= $src; $output .='"></a>
                     <div class="caption">
                         <h3>'; $output .= $nm; $output.='</h3>
                         <p>'; $output .= $des; $output.='</p>
                     </div>
                 </li>
	 	    ';
	 	}
	 	$output .='
	 				</ul>
	 		    <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
	 		</div>
	 	';
	 	return $output;
	 }

  public function get_bantal($table){
  	$query=$this->db->get($table);
  	return $query->result_array();
  }

	public function get_testimoni(){
  	$query=$this->db->get('testimoni');
  	return $query->result_array();
  }

	 public function get_counter($table){
	 	$query=$this->db->get($table);
	 	return $query->result_array();
	 }

	 // public function batik_paginate($number, $offset) {
	 // 	return $this->db->get('produk',$number, $offset)->result_array();
	 // }

	 public function jum_batik() {
	 	return $this->db->get('produk')->num_rows();
	 }
	 	public function get_frontend(){
     	$query=$this->db->get('kontak');
     	return $query->result_array();
   	}

   	public function insert($data)
   	{
    	$this->db->insert('produk', $data);
   	}
		public function insert1($data)
   	{
    	$this->db->insert('testimoni', $data);
   	}

   	public function counter($table) {
   		$dnow = date('Y-m-d');
   		$cek = $this->db->get_where($table,array('date'=>$dnow))->num_rows();
   		if ($cek > 0) {
   			$this->db->set('counter','counter+1', FALSE)->where('date',$dnow)->update($table);
   		} else {
   			$this->db->insert($table, array('date'=>$dnow, 'counter'=>1));
   		}
	 }

	 public function get_bantal_id($id,$table){
	  $query=$this->db->get_where($table, array('id'=>$id));
	  return $query->row_array();
	 }
	 public function get_testi_id($id){
	  $query=$this->db->get_where('testimoni', array('id'=>$id));
	  return $query->row_array();
	 }


	 public function update($id, $data,$table){
	 	 $this->load->helper('url');

	 	 $this->db->where('id',$id);
	 	 return $this->db->update($table, $data);

	 	}

		public function testimoni($id,$data){
			$this->load->helper('url');
			// $this->upload->do_upload('foto');
			// $gambar = $this->upload->data();
			// $data = array(
			// 		'gambar'		=> $gambar['file_name']
			// );

			$this->db->where('id',$id);
			return $this->db->update('testimoni', $data);

		 }

	   public function set_aromaterapi(){
	     $this->load->helper('url');

	     $data=array(
	       'nama'=> $this->input->post('nama'),
	       'email'=> $this->input->post('email'),
	       'subject'=> $this->input->post('subject'),
	       'pesan'=> $this->input->post('pesan')
	     );
	     return $this->db->insert('kontak', $data);

	   }




	 	public function delete_data($id){
	 	 return $this->db->delete('produk',array('id'=>$id));
	 	}
	 	public function delete_data1($id){
	 	 return $this->db->delete('kontak',array('id'=>$id));
	 	}
		public function delete_data2($id){
	 	 return $this->db->delete('testimoni',array('id'=>$id));
	 	}


 	function cek_login($table,$where){
 			return $this->db->get_where($table,$where);
 	}







}
