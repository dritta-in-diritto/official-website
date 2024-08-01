<?php

class dbManager{
	private $user = 'drittaindiritto';
	private $pass = 'drittaindiritto';
	private $db_name = 'drittaindiritto';
	private $host = 'localhost';
	private $connection = NULL;

	function __construct() {
            $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
	}

	function __destruct() { 
            $this->connection->close();
	}

        /*
        function aggiungi_utente( $utente ){
            $sql = "INSERT INTO utenti (`id_utente`, `nome`, `cognome`, `codice_fiscale`, `indirizzo`, `email`, `username`, `password`) VALUES (NULL, '{$utente['nome']}', '{$utente['cognome']}', '{$utente['codicefiscale']}', '{$utente['indirizzo']}', '{$utente['email']}', '{$utente['username']}', '{$utente['password']}');";

            if( $this->connection->query($sql)=== TRUE ){ 
                return $this->connection->insert_id;
            } else {
                return false;
            }
        }


        function get_utente( $id ){
            $toReturn = NULL;
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


        function modifica_utente( $utente ){
            $sql = "UPDATE utenti SET nome = '{$utente['nome']}', cognome = '{$utente['cognome']}', codice_fiscale = '{$utente['codice_fiscale']}', indirizzo = '{$utente['indirizzo']}', email = '{$utente['email']}'  WHERE id_utente = {$utente['id_utente']} LIMIT 1;";
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
            $toReturn=false;
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

        
        function cerca_file_by_id($id){
            $sql = "SELECT * FROM file_caricati WHERE id_file_caricato = $id ";
            if( ($result = $this->connection->query($sql)) && ( $this->connection->affected_rows>0 ) ){
                $riga = mysqli_fetch_array($result);
                $toReturn=$riga;
                return $toReturn;
            }
            return NULL;
        }

        function elimina_file($id){
            $sql = "DELETE FROM file_caricati WHERE id_file_caricato = $id ";
            if( $this->connection->query($sql) === TRUE ){
                return true;
            }
            return false;
        }

        */


        
        

}


?>