<?php 

    require('../Models/MNama.php');
    $db = new MNama();

    Class CNama {

        function SimpanNama($nama){
         
            $db = new MNama();
            echo $db->Simpan($nama);
            
        }

        function update($nama,$edit) {
            $db = new MNama();
            return $db->Update($nama,$edit);
        }

        function delete($nama) {
            $db = new MNama();
            return $db->Delete($nama);
   }
}

        
    
?>