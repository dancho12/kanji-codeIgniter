<?php

use function PHPSTORM_META\type;

class Xlxs_reader extends CI_Model
{


  
    public function getKanji()
    {
        
        $query = $this->db->get_where('movie', array('slug' => $slug));
        return $query->row_array();
    }

}
