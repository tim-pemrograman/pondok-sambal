<?php
class message_model extends CI_Model
{
    public function get_messages()
    {
        $query = $this->db->get('tbl_message');
        return $query->result();
    }

    public function add_message($data)
    {
        $this->db->insert('tbl_message', $data);
    }

    // public function get_employee_by_id($id)
    // {
    //     $query = $this->db->get_where('tbl_employee', array('employee_id' => $id));
    //     return $query->row();
    // }


    // public function edit_user($data)
    // {
    //     $id = $this->input->post('id_employee');
    //     $this->db->where('employee_id', $id);
    //     $this->db->update('tbl_employee', $data);
    // }

    public function delete_message($id)
    {
        $this->db->delete('tbl_message', array('message_id' => $id));
    }

    public function analyse_sentiment($data)
    {

        /* API URL */
        $url = 'http://localhost:5000/predict';
        
        /* Init cURL resource */
        $ch = curl_init($url);
        
        /* Array Parameter Data */
        $data = json_encode($data);
        
        // var_dump($data); exit;
   
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        /* execute request */
        $result = curl_exec($ch);
             
        /* close cURL resource */
        curl_close($ch);

        // // cara panggilnya
        // json_decode($result)->prediction;
        // var_dump(json_decode($result)->prediction);
        // exit;

        return $result;
    }

}
 