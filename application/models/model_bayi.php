<?php
class model_bayi extends CI_model 
{
    public function getAllbayi()
    {
        return $query = $this->db->get('bayi')->result_array();
    }

    public function Tambahbayi()
    {
        $data = [
            "bayi" => $this->input->post('bayi', true)
        ];

        $this->db->insert('bayi', $data);
    }

    public function Ubahbayi()
    {
        $data = [
            "bayi" => $this->input->post('bayi', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('bayi', $data);
    }

    public function hapusbayi($id)       
    {
        $this->db->where('id', $id);
        $this->db->delete('bayi');
    }

    public function getbayiById($id)
    {
        return $this->db->get_where('bayi', ['id' => $id])->row_array();
    }

    public function Caribayi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('bayi', $keyword);
        return $this->db->get('bayi')->result_array();
    }
}

?>