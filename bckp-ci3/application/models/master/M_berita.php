<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_berita extends ci_Model
{

    // NEW REPORTING //
    public function insertdata($data)
    {
        date_default_timezone_set("Asia/Jakarta");

        $message = "";
        $now = date('Y-m-d H:i:s');

        if($message == "")
        {
            $berita = array(
                'isi_berita'           => $data['isi_berita'] == "" ? NULL:$data['isi_berita'],
                'file_berita'          => $data['file_berita'] == "" ? NULL:$data['file_berita'],
                'created_date'         => $now,
                'create_by'            => $data['create_by'] == "" ? NULL:$data['create_by']
                );

            $this->db->insert('content_berita', $berita);
            
            return "Success";
        }
    }
}
