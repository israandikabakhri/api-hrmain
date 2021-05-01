CREATE TABLE IF NOT EXISTS `mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nim` char(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `nama_kampus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO `mhs` (`id`, `nama`, `nim`, `jurusan`, `fakultas`, `nama_kampus`) VALUES
	(1, 'borju', '123', 'TI', 'sains', 'DIPA');