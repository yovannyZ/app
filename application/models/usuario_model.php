<?php

class Usuario_model extends CI_Model{

    var $tabla = 'login';
    var $orden_columna = array('usuario','estado');
    var $columnas_busqueda = array('usuario','estado');
    var $orden = array('usuario' => 'desc');

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
	{
		
		$this->db->from($this->tabla);

		$i = 0;
	
		foreach ($this->columnas_busqueda as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->columnas_busqueda) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
        	if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->columnas_busqueda[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->orden))
		{
			$orden = $this->orden;
			$this->db->order_by(key($orden), $orden[key($orden)]);
		}
	}
		

    public function getUsers(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1) 
        $this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
    }

    function count_filtered(){
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

    public function count_all(){
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

   public function get_by_id($id){
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id){
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}


}