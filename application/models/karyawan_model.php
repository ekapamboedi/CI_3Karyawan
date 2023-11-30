<?php

/**
 *
 */
class Karyawan_model extends CI_Model
{
  public function get_karyawans()
  {
    return $this->db->get('karyawan')->result();
  }

   public function get_karyawan($id) {
       return $this->db->get_where('karyawan', ['nip' => $id])->row();
   }

   // Insert a new product
   public function create_karyawan() {
       $data = [
           'name' => $this->input->post('name'),
           'gender' => $this->input->post('gender'),
           'depart' => $this->input->post('depart'),
           'activated' => $this->input->post('activated'),
           'start_date' => $this->input->post('start_date'),
           'status' => $this->input->post('status')
       ];

       $this->db->insert('karyawan', $data);
   }

   // Update an existing product
   public function update_product($id) {
       $data = [
         'name' => $this->input->post('name'),
         'gender' => $this->input->post('gender'),
         'depart' => $this->input->post('depart'),
         'activated' => $this->input->post('activated'),
         'start_date' => $this->input->post('start_date'),
         'status' => $this->input->post('status')
       ];

       $this->db->where('nip', $id);
       $this->db->update('products', $data);
   }

   // Delete a product
   public function delete_product($id) {
       $this->db->delete('products', ['nip' => $id]);
   }

}



 ?>
