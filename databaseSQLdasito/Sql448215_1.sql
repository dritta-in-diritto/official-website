-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: 62.149.150.131
-- Generato il: 02 lug, 2011 at 02:00 PM
-- Versione MySQL: 5.0.92
-- Versione PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Sql448215_1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin_pwd`
--

CREATE TABLE IF NOT EXISTS `admin_pwd` (
  `id_admin_pwd` int(10) unsigned NOT NULL auto_increment,
  `pwd` varchar(32) default NULL,
  PRIMARY KEY  (`id_admin_pwd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `admin_pwd`
--

INSERT INTO `admin_pwd` (`id_admin_pwd`, `pwd`) VALUES(1, '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struttura della tabella `file_caricati`
--

CREATE TABLE IF NOT EXISTS `file_caricati` (
  `id_file_caricato` int(10) unsigned NOT NULL auto_increment,
  `id_utente` int(10) unsigned NOT NULL,
  `nome_file` varchar(300) default NULL,
  `pagamento` varchar(50) default NULL,
  `data_certificazione` datetime default NULL,
  PRIMARY KEY  (`id_file_caricato`),
  KEY `fk_file_caricati_utenti` (`id_utente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `file_caricati`
--

INSERT INTO `file_caricati` (`id_file_caricato`, `id_utente`, `nome_file`, `pagamento`, `data_certificazione`) VALUES(4, 13, 'Cosa Ã¨ la Marcatura Temporale.pdf', 'certificato', '2011-05-27 22:33:11');
INSERT INTO `file_caricati` (`id_file_caricato`, `id_utente`, `nome_file`, `pagamento`, `data_certificazione`) VALUES(11, 24, '44611_101390903253974_100001491936800_8697_2612316_n.jpg', 'non pagato', NULL);
INSERT INTO `file_caricati` (`id_file_caricato`, `id_utente`, `nome_file`, `pagamento`, `data_certificazione`) VALUES(15, 13, 'prova.txt', 'non pagato', NULL);
INSERT INTO `file_caricati` (`id_file_caricato`, `id_utente`, `nome_file`, `pagamento`, `data_certificazione`) VALUES(14, 20, 'EbookMetodoLotto-AmboSecco.pdf', 'non pagato', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) unsigned NOT NULL auto_increment,
  `titolo` varchar(200) default NULL,
  `testo` longtext,
  PRIMARY KEY  (`id_news`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`id_news`, `titolo`, `testo`) VALUES(4, 'prova 2', 'pppp\r\npppp');
INSERT INTO `news` (`id_news`, `titolo`, `testo`) VALUES(5, 'nuova news', 'prova fdkmfÃ²af\r\nalfa dslfa ds\r\nflda ldsÃ²l\r\nsÃ²dsÃ²lvs');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `id_utente` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `cognome` varchar(100) default NULL,
  `codice_fiscale` varchar(16) default NULL,
  `cap` varchar(5) default NULL,
  `citta` varchar(100) default NULL,
  `indirizzo` varchar(150) default NULL,
  `email` varchar(200) default NULL,
  `username` varchar(30) default NULL,
  `password` varchar(32) default NULL,
  PRIMARY KEY  (`id_utente`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id_utente`, `nome`, `cognome`, `codice_fiscale`, `cap`, `citta`, `indirizzo`, `email`, `username`, `password`) VALUES(13, 'Amedeo', 'Ferroa', 'FRRA', '84091', 'Battipaglia', 'Via dasdaradda', 'amedeoarun@gmail.com', 'arun', '722279e9e630b3e731464b69968ea4b4');
INSERT INTO `utenti` (`id_utente`, `nome`, `cognome`, `codice_fiscale`, `cap`, `citta`, `indirizzo`, `email`, `username`, `password`) VALUES(17, 'Luigi', 'Vicedomini', 'VCDLGU81S27H223H', NULL, NULL, 'Via Adriatico,5 Battipaglia 84091 SA', 'luigi.vicedomini@tiscali.it', 'luiviced', '0a88c350b148805cec5f8f13e823154b');
INSERT INTO `utenti` (`id_utente`, `nome`, `cognome`, `codice_fiscale`, `cap`, `citta`, `indirizzo`, `email`, `username`, `password`) VALUES(26, 'a', 'a', 'A', 'a', 'a', 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661');
INSERT INTO `utenti` (`id_utente`, `nome`, `cognome`, `codice_fiscale`, `cap`, `citta`, `indirizzo`, `email`, `username`, `password`) VALUES(25, 'bruno', 'marino', 'MRNBNP79B15Z347C', '84025', 'eboli', 'via XIII snc', 'bruno79marino@yahoo.it', 'bmarino', '4bf3af20258ae4d758d3113841c100c9');
