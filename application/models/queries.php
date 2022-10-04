<?php
    class queries extends CI_Model{

        public function getRecords(){
            $query = $this->db->get('user_details');
            if($query->num_rows()>0){
                return $query->result();
            }
        }
        public function addRecords($data){
            return $this->db->insert('user_details', $data);
        }
        public function getSingleRecords($id){
            $query = $this->db->get_where('user_details', array('id' => $id));
            if($query->num_rows()>0){
                return $query->row();
            }
        }
        public function updateRecords($data,$id){
            return $this->db->where('id',$id)
                        ->update('user_details', $data);
        }
        public function deleteRecords($id){
            return $this->db->delete('user_details',['id'=>$id]);
        }
    }
    
?>