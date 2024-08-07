<?php

class dbManager{
	
        private $user = 'drittaindiritto';
	private $pass = 'drittaindiritto';
	private $db_name = 'drittaindiritto';
	private $host = 'localhost';
	private $connection = NULL;
/*
        private $user = 'Sql448215';
	private $pass = 'da9f31a7';
	private $db_name = 'Sql448215_1';
	private $host = '62.149.150.131';
	private $connection = NULL;
*/
	function __construct() {
            $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
	}

	function __destruct() { 
            $this->connection->close();
	}

        
        function aggiungi_utente( $utente ){
            $sql = "INSERT INTO utenti (`id_utente`, `nome`, `cognome`, `codice_fiscale`, `cap`, `citta`, `indirizzo`, `email`, `username`, `password`) VALUES (NULL, '{$utente['nome']}', '{$utente['cognome']}', '{$utente['codicefiscale']}', '{$utente['cap']}', '{$utente['citta']}', '{$utente['indirizzo']}', '{$utente['email']}', '{$utente['username']}', '{$utente['password']}');";

            if( $this->connection->query($sql)=== TRUE ){ 
                return $this->connection->insert_id;
            } else {
                return false;
            }
        }


        function elimina_utente( $utente ){
            $sql = "DELETE FROM utenti WHERE id_utente = {$utente['id_utente']} LIMIT 1";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            return false;
        }

        function get_utente( $id ){
            $toReturn = false;
            if( empty($id) ){
                return $toReturn;
            }
            $sql = "SELECT * FROM utenti WHERE id_utente = $id ";
            if( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                $riga = mysqli_fetch_array($result);
                $toReturn=$riga;
            }
            return $toReturn;
        }

        function get_utente_by_email( $email ){
            $toReturn = false;
            if( empty($email) ){
                return $toReturn;
            }
            $sql = "SELECT * FROM utenti WHERE email = '$email' ";
            if( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                $riga = mysqli_fetch_array($result);
                $toReturn = $riga;
            }
            return $toReturn;
        }


        function modifica_utente( $utente ){
            $sql = "UPDATE utenti SET nome = '{$utente['nome']}', cognome = '{$utente['cognome']}', codice_fiscale = '{$utente['codice_fiscale']}', cap = '{$utente['cap']}', citta = '{$utente['citta']}', indirizzo = '{$utente['indirizzo']}', email = '{$utente['email']}'  WHERE id_utente = {$utente['id_utente']} LIMIT 1;";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            else{
                return false;
            }
        }
        
        
        function modifica_password($utente, $new_pswd){
            $sql = "UPDATE utenti SET password = '$new_pswd' WHERE id_utente = {$utente['id_utente']} LIMIT 1;";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            else{
                return false;
            }
        }


        function cerca_utente($username, $password){
            $toReturn = array();
            $sql = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password' LIMIT 1 ";
            if( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                $riga = mysqli_fetch_array($result);
                $toReturn=$riga;
                return $toReturn;
            }
            return NULL;
        }


        function aggiungi_file($utente, $nome_file){
            $sql = "INSERT INTO file_caricati (`id_file_caricato`, `id_utente`, `nome_file`, `pagamento`, `data_certificazione`) VALUES (NULL, '{$utente['id_utente']}', '$nome_file', 'non pagato', NULL);";
            if( $this->connection->query($sql)=== TRUE ){
                return $this->connection->insert_id;
            } else {
                return false;
            }
        }


        function lista_file_by_utente($utente){
            $toReturn=NULL;
            $indice=0;
            $sql = "SELECT * FROM file_caricati WHERE id_utente = {$utente['id_utente']} ";
            if( ($risultato = $this->connection->query($sql)) && ($this->connection->affected_rows>0) ){
                while ( $riga = mysqli_fetch_assoc($risultato) ){
                    $toReturn[$indice]=$riga;
                    $indice++;
                }
            }
            return $toReturn;
        }

        function lista_file(){
            $toReturn=NULL;
            $indice=0;
            $sql = "SELECT * FROM file_caricati ";
            if( ($risultato = $this->connection->query($sql)) && ($this->connection->affected_rows>0) ){
                while ( $riga = mysqli_fetch_assoc($risultato) ){
                    $toReturn[$indice]=$riga;
                    $indice++;
                }
            }
            return $toReturn;
        }


        function lista_file_da_certificare(){
            $toReturn=NULL;
            $indice=0;
            $sql = "SELECT * FROM `file_caricati` WHERE `pagamento` != 'non pagato' AND `pagamento` != 'certificato' ";
            if( ($risultato = $this->connection->query($sql)) && ($this->connection->affected_rows>0) ){
                while ( $riga = mysqli_fetch_assoc($risultato) ){
                    $toReturn[$indice]=$riga;
                    $indice++;
                }
            }
            return $toReturn;
        }
        
        function cerca_file_by_id($id){
            $sql = "SELECT * FROM file_caricati WHERE id_file_caricato = $id ";
            if( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                $riga = mysqli_fetch_array($result);
                $toReturn=$riga;
                return $toReturn;
            }
            return false;
        }

        function elimina_file($id){
            $sql = "DELETE FROM file_caricati WHERE id_file_caricato = $id ";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            return false;
        }


        function modifica_file( $file ){
            $sql = "UPDATE file_caricati SET pagamento = '{$file['pagamento']}', data_certificazione = '{$file['data_certificazione']}' WHERE id_file_caricato = {$file['id_file_caricato']} LIMIT 1;";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            else{
                return false;
            }

        }


        function verifica_pwd_admin($pwd){
            $sql = "SELECT * FROM `admin_pwd` WHERE `pwd`= '$pwd' " ;
            if ( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                return true;
            }
            return false;
        }


        function lista_utenti(){
            $toReturn=NULL;
            $indice=0;
            $sql = "SELECT * FROM utenti ";
            if( ($risultato = $this->connection->query($sql)) && ($this->connection->affected_rows>0) ){
                while ( $riga = mysqli_fetch_assoc($risultato) ){
                    $toReturn[$indice]=$riga;
                    $indice++;
                }
            }
            return $toReturn;
        }


        function lista_news(){
            $toReturn=NULL;
            $indice=0;
            $sql = "SELECT * FROM news ORDER BY id_news DESC";
            if( ($risultato = $this->connection->query($sql)) && ($this->connection->affected_rows>0) ){
                while ( $riga = mysqli_fetch_assoc($risultato) ){
                    $toReturn[$indice]=$riga;
                    $indice++;
                }
            }
            return $toReturn;
        }


        function aggiungi_news($titolo, $testo){
            $sql = "INSERT INTO news (`id_news`, `titolo`, `testo`) VALUES (NULL, '$titolo', '$testo');";

            if( $this->connection->query($sql)=== TRUE ){
                return $this->connection->insert_id;
            } else {
                return false;
            }
        }

        
        function get_news( $id ){
            $toReturn = false;
            if( empty($id) ){
                return $toReturn;
            }
            $sql = "SELECT * FROM news WHERE  id_news = $id ";
            if( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                $riga = mysqli_fetch_array($result);
                $toReturn=$riga;
            }
            return $toReturn;
        }


        function elimina_news($id){
            $sql = "DELETE FROM news WHERE id_news = $id LIMIT 1";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            return false;
        }


        function modifica_news( $news ){
            $sql = "UPDATE news SET titolo = '{$news['titolo']}', testo = '{$news['testo']}' WHERE id_news = {$news['id_news']} LIMIT 1;";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            else{
                return false;
            }
        }

        function get_ultime_news( $max_num_news ){
            $toReturn = NULL;
            $indice = 0;
            $sql = "SELECT * FROM news ORDER BY id_news DESC LIMIT $max_num_news";
            if( ($risultato = $this->connection->query($sql)) && ($this->connection->affected_rows>0) ){
                while ( $riga = mysqli_fetch_assoc($risultato) ){
                    $toReturn[$indice]=$riga;
                    $indice++;
                }
            }
            return $toReturn;

        }

}


?>