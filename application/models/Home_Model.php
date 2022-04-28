<?php
class Home_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }
	  
	public function insert_data($tablo,$data)
		{
			if ($this->db->insert($tablo,$data)) //  dataları ekle
			{
			return true;
			}
		}	
    public function update_data($tablo,$data,$id)  // İd si ve datası gönderileb verileri günceller
		{
		$this->db->where('id', $id);
		$this->db->update($tablo ,$data);
		return true;
		}  		
	
}
?>	  