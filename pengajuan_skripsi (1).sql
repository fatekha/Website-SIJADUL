-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2024 at 09:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuan_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `dsn_id` int(5) NOT NULL,
  `dsn_user` varchar(35) NOT NULL,
  `dsn_pass` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nip` int(15) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dsn_id`, `dsn_user`, `dsn_pass`, `nama`, `nip`, `fakultas`, `email`, `telepon`) VALUES
(1, 'user_dsn1', 'pass_dsn1', 'Dosen Satu', 10001, 'Bisnis dan Psikologi', 'dsn1@email.com', 628000001),
(2, 'user_dsn2', 'pass_dsn2', 'Dosen Dua', 10002, 'Desain dan Komputer', 'dsn2@email.com', 628000002),
(3, 'user_dsn3', 'pass_dsn3', 'Dosen Tiga', 10003, 'Publik dan Managemen', 'dsn3@email.com', 628000003),
(4, 'user_dsn4', 'pass_dsn4', 'Dosen Empat', 10004, 'Pendidikan Ilmu Pengetahuan', 'dsn4@email.com', 628000004),
(5, 'user_dsn5', 'pass_dsn5', 'Dosen Lima', 10005, 'Agribisnis dan Pangan', 'dsn5@email.com', 628000005);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mhs_id` int(5) NOT NULL,
  `mhs_user` varchar(25) NOT NULL,
  `mhs_pass` varchar(25) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nim` int(15) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `prodi` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhs_id`, `mhs_user`, `mhs_pass`, `nama`, `nim`, `fakultas`, `prodi`, `email`, `telepon`) VALUES
(1, 'user_mhs1', 'pass_mhs1', 'Mahasiswa Satu', 20001, 'Bisnis dan Psikologi', 'Ilmu Psikologi', 'mhs1@email.com', 628100001),
(2, 'user_mhs2', 'pass_mhs2', 'Mahasiswa Dua', 20002, 'Desain dan Komputer', 'Teknik Informatika', 'mhs2@email.com', 628100002),
(3, 'user_mhs3', 'pass_mhs3', 'Mahasiswa Tiga', 20003, 'Agribisnis dan Pangan', 'Pengelolaan Industri Pangan', 'mhs3@email.com', 628100003),
(4, 'user_mhs4', 'pass_mhs4', 'Mahasiswa Empat', 20004, 'Publik dan Managemen', 'Manajemen Pemasaran', 'mhs4@email.com', 628100004),
(5, 'user_mhs5', 'pass_mhs5', 'Mahasiswa Lima', 20005, 'Pendidikan Ilmu Pengetahuan', 'Pendidikan Fisika', 'mhs5@email.com', 628100005),
(6, 'user_mhs6', 'pass_mhs6', 'Mahasiswa Enam', 20006, 'Agribisnis dan Pangan', 'Teknik Agroteknologi', 'mhs6@email.com', 628100006),
(7, 'user_mhs7', 'pass_mhs7', 'Mahasiswa Tujuh', 20007, 'Pendidikan Ilmu Pengetahuan', 'Pendidikan Geografi', 'mhs7@email.com', 628100007),
(8, 'user_mhs8', 'pass_mhs8', 'Mahasiswa Delapan', 20008, 'Desain dan Komputer', 'Komunikasi Visual', 'mhs8@email.com', 628100008),
(9, 'user_mhs9', 'pass_mhs9', 'Mahasiswa Sembilan', 20009, 'Pendidikan Ilmu Pengetahuan', 'Pendidikan  Matematika', 'mhs9@email.com', 628100009),
(10, 'user_mhs10', 'pass_mhs10', 'Mahasiswa Sepuluh', 20010, 'Agribisnis dan Pangan', 'Teknik Agroteknologi', 'mhs10@email.com', 628100010),
(11, 'user_mhs11', 'pass_mhs11', 'Mahasiswa Sebelas', 20011, 'Bisnis dan Psikologi', 'Ilmu Psikologi', 'mhs11@email.com', 628100011),
(12, 'user_mhs12', 'pass_mhs12', 'Mahasiswa Duabelas', 20012, 'Publik dan Managemen', 'Administrasi Publik', 'mhs12@email.com', 628100012),
(13, 'user_mhs13', 'pass_mhs13', 'Mahasiswa Tigabelas', 20013, 'Publik dan Managemen', 'Manajemen Pemasaran', 'mhs13@email.com', 628100013),
(14, 'user_mhs14', 'pass_mhs14', 'Mahasiswa Empatbelas', 20014, 'Desain dan Komputer', 'Teknik Informatika', 'mhs14@email.com', 628100014),
(15, 'user_mhs15', 'pass_mhs15', 'Mahasiswa Limabelas', 20015, 'Bisnis dan Psikologi', 'Ilmu Bisnis Pasar', 'mhs15@email.com', 628100015);

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `skripsi_id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `abstrak` varchar(1000) NOT NULL,
  `katakunci` varchar(150) NOT NULL,
  `status` int(1) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `mhs_id` int(5) NOT NULL,
  `dsn_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`skripsi_id`, `judul`, `abstrak`, `katakunci`, `status`, `komentar`, `mhs_id`, `dsn_id`) VALUES
(1, 'CURABITUR GRAVIDA TRISTIQUE LEO AC CONSECTETUR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies elementum mi, non lacinia dui mollis non. Nunc mollis orci non risus bibendum mattis. Etiam imperdiet gravida massa, porttitor molestie diam accumsan sed. Vivamus finibus lacinia lectus, eu ultricies lorem iaculis et. Donec elementum ultricies libero id maximus. Proin eget nisl in mauris condimentum pharetra sed eu est. Suspendisse fringilla eget est ut posuere. Duis lectus nisl, imperdiet quis ultrices eu, fringilla sed quam. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 2, 'Praesent vitae mollis tortor. Ut at fringilla tellus. Maecenas ligula libero, malesuada vitae augue et, interdum dictum urna. Phasellus rutrum a felis vitae finibus. Praesent tempus leo dapibus luctus scelerisque. Aenean commodo ligula vitae ornare laoreet. Nam condimentum lacus nisi, non ultricies velit vestibulum eget. Morbi non sagittis odio.', 4, 3),
(2, 'FUSCE PELLENTESQUE FACILISIS PORTA', 'Nulla tristique porttitor diam id bibendum. Ut euismod aliquet mauris, nec venenatis mi tincidunt sed. Nam eget ipsum laoreet nunc venenatis imperdiet ac sit amet diam. Morbi dictum dui diam, id tempor dui dignissim ac. Proin fringilla dui quis turpis sollicitudin, a euismod eros pellentesque. Aenean gravida aliquam purus, a rhoncus ipsum. Morbi porta ante a mollis placerat. Nulla velit orci, fermentum efficitur lacinia sed, imperdiet eget erat. In tristique fringilla bibendum. ', 'Ut euismod aliquet mauris, nec venenatis mi tincidunt sed', 1, '', 8, 2),
(3, 'SED ELEMENTUM ORNARE SEM UT ORNARE', 'Sed accumsan erat iaculis, euismod eros ac, euismod justo. Nulla quis sem consectetur, interdum odio in, iaculis nisi. In placerat ultricies nisi, non venenatis nunc ullamcorper sit amet. Nulla pharetra velit vel egestas mollis. Donec porta purus quis felis semper tincidunt ac et tortor. Mauris maximus tincidunt massa, eget pharetra dolor maximus vitae. Aliquam a porta augue. Phasellus semper quis nunc eget venenatis. Aliquam aliquam sapien a tortor vulputate varius. Duis nec porta dolor, non porttitor nunc. Vivamus facilisis dolor sed eleifend dapibus. Vivamus non ultrices ipsum, commodo dignissim metus. ', 'Duis nec porta dolor, non porttitor nunc', 2, 'Curabitur est felis, tristique eget viverra vitae, interdum sed velit. ', 2, 1),
(4, 'CURABITUR ELEIFEND TORTOR NEC LECTUS PORTTITOR', 'Donec ac suscipit leo. Curabitur sodales massa eu leo elementum, nec porttitor mauris rutrum. Nulla facilisi. Cras tempor blandit tempus. Sed rutrum consequat lacinia. Donec sed gravida neque. Nam sit amet vehicula nibh, eu tempor mi. ', 'Nam sit amet vehicula nibh, eu tempor mi', 3, 'Praesent pharetra luctus ligula id tempus. Morbi in ornare ante. Ut sed blandit quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent turpis velit, commodo mattis ex sit amet, pulvinar varius justo. Suspendisse eu mauris nec diam aliquet sagittis. Mauris sed odio a metus euismod facilisis sit amet sed velit. Vestibulum elementum enim vel risus blandit, ac elementum libero finibus. Phasellus accumsan tortor eu purus semper, in posuere ex laoreet. Proin venenatis lacus risus, eu blandit erat vulputate ut. Morbi eu elementum leo, vitae rhoncus lorem. Morbi risus augue, ullamcorper vel fermentum ac, consequat ac velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nunc est, vehicula eu neque quis, consequat efficitur quam.', 10, 2),
(5, 'DONEC EU IPSUM SED DIAM ALIQUET MALESUADA', 'Praesent maximus risus nec porttitor ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis vitae massa nec nibh vehicula iaculis. Nulla mattis massa sed metus mollis, non cursus odio condimentum. Nulla in quam in lectus efficitur facilisis. Praesent varius est in tincidunt rutrum. Proin id lacus eget nisl fringilla efficitur sed et nibh. Nullam sed maximus tortor. Aliquam molestie dolor et quam auctor vehicula. Maecenas varius cursus justo eu consectetur. Ut tristique magna nec mollis aliquam. Curabitur ut neque ut lacus convallis lacinia sit amet quis sapien. Suspendisse a urna nec turpis faucibus porta. ', 'Nulla mattis massa sed metus mollis, non cursus odio condimentum', 3, 'Aenean id eleifend lectus, in facilisis sem. Fusce sollicitudin at nisi ac condimentum. Integer molestie ultricies magna, vel elementum nulla.', 13, 3),
(6, 'VIVAMUS LOBORTIS RISUS SIT AMET URNA GRAVIDA', 'Etiam congue sollicitudin dolor, id bibendum justo feugiat ac. Nam dictum vestibulum metus. Nulla pharetra arcu sed malesuada tempus. Nulla sit amet risus metus. Maecenas tempor convallis urna, et dapibus ex venenatis at. Cras aliquam velit et elit finibus, iaculis consectetur magna cursus. Duis nec tortor eget velit ultrices ornare. Suspendisse eu nulla commodo, placerat dolor eu, porttitor turpis. Suspendisse nec metus eu ligula euismod mattis gravida eget libero. Nulla vehicula ullamcorper dictum. ', 'Maecenas tempor convallis urna, et dapibus ex venenatis at', 1, '', 9, 3),
(7, 'SUSPENDISSE MALESUADA ULLAMCORPER SEM', 'Etiam consequat porta magna, ac suscipit tellus aliquet in. Cras id nisi sodales, tincidunt enim sit amet, fermentum tortor. Integer porta libero et dui mollis, eu sagittis odio pulvinar. Sed ut est velit. Nulla viverra urna quis mi malesuada tempus. Nunc in ante rutrum, blandit neque non, sagittis nisl. Maecenas tortor mi, tempor vitae egestas nec, gravida vel mi. Morbi a interdum mi. Duis ut sapien tellus. Vestibulum elementum pulvinar sollicitudin. ', 'Maecenas tortor mi, tempor vitae egestas nec, gravida vel mi', 2, 'Pellentesque at mattis nisi, id viverra nisl. Mauris tellus lacus, dictum cursus nisi eget, mollis posuere ante. Praesent porttitor a lacus ut mattis. Phasellus rutrum auctor euismod.', 15, 1),
(8, 'MAECENAS VITAE TURPIS AC EROS CONGUE CONGUE NON ID JUSTO', 'Vivamus vel orci mattis, sodales nisl quis, laoreet lacus. Quisque faucibus at arcu quis consectetur. Vestibulum aliquam tempor posuere. Nam sodales risus libero, at ultricies ligula elementum non. Phasellus ut leo quis ipsum vehicula viverra. Sed suscipit maximus lorem et ornare. Nunc euismod enim in urna ultricies, quis ultrices neque sodales. Ut accumsan commodo risus, eu venenatis libero elementum ac. Pellentesque semper arcu eget sollicitudin tristique. Nam id nisi facilisis, ultricies massa ac, gravida massa. Fusce volutpat nunc quis magna pulvinar lacinia. Curabitur quis massa commodo, vestibulum dui sed, posuere diam. ', 'Nam id nisi facilisis, ultricies massa ac, gravida massa', 3, 'Duis et metus vel dui imperdiet feugiat a sit amet metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis risus eu sapien accumsan consequat sit amet eu enim. Quisque facilisis maximus arcu ut tristique. Etiam dictum odio nulla, sed sollicitudin metus rutrum nec.', 7, 1),
(9, 'INTEGER VITAE SUSCIPIT DOLOR', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ut velit eu augue pellentesque convallis at id nisi. Mauris tellus purus, blandit at lacinia pellentesque, condimentum quis quam. Ut ac consectetur enim. Donec egestas fringilla mi ac condimentum. Quisque quis sapien et odio congue interdum. Nam scelerisque laoreet eleifend. Pellentesque eu arcu a dolor rutrum gravida at vel nunc. Vestibulum augue est, lobortis quis consequat quis, pulvinar at arcu. Mauris ultrices blandit commodo. Vestibulum auctor egestas dolor sit amet dapibus. Pellentesque quis tortor sit amet purus posuere rutrum ut at mi. Praesent ultrices orci sit amet orci pulvinar, a maximus turpis bibendum. ', 'Vestibulum augue est, lobortis quis consequat quis, pulvinar at arcu', 2, 'Cras bibendum tempus pellentesque. In eget est auctor sapien tempor ultrices. Etiam massa risus, semper ac fringilla eget, viverra et nulla. Nulla non malesuada risus, id aliquet dolor. Suspendisse tortor libero, tincidunt vitae odio a, bibendum faucibus massa.', 1, 2),
(10, 'ETIAM TINCIDUNT NISL EGET IMPERDIET MATTIS', 'Maecenas nec tellus commodo, fringilla dui in, tincidunt est. Nullam quis pharetra enim, non faucibus libero. Curabitur a lectus ac leo tincidunt tempus non nec enim. Aliquam sodales dui at mauris gravida finibus. Fusce tempus laoreet orci, at tempor dolor semper eu. Etiam euismod pulvinar massa mattis hendrerit. Aliquam non nisl quis nisl rutrum consectetur eget in nibh. Nam fringilla mauris tortor, ac egestas sapien eleifend a. Nam laoreet feugiat sem, porttitor tincidunt ligula pellentesque sit amet. Donec gravida dui nunc, sed aliquam sapien hendrerit sit amet. Nunc id dolor nec dui condimentum imperdiet. Suspendisse non purus vel dolor sagittis pretium. Nulla libero urna, ultrices eget tempus quis, egestas vitae quam. Integer et egestas metus. Morbi pharetra lacus quis maximus suscipit. Maecenas ultricies mauris a iaculis semper.', 'Donec gravida dui nunc, sed aliquam sapien hendrerit sit amet', 2, 'Integer pharetra sem sit amet nunc viverra lobortis. Donec condimentum iaculis nisl id semper. Morbi dapibus mi venenatis elit consectetur facilisis. Vestibulum nec ullamcorper dui. Nullam a quam suscipit, dictum lectus sed, auctor orci. Pellentesque condimentum neque quis nibh dictum, vel sollicitudin lectus fringilla. Cras id nibh eleifend, facilisis eros et, congue tellus.', 12, 3),
(11, 'AENEAN SED NISI NON MASSA EUISMOD DIGNISSIM A AC EROS', 'Sed dolor tortor, vestibulum vitae vestibulum nec, molestie ac orci. Aenean vel laoreet nunc. Nullam ut orci ex. Proin tincidunt massa in ultricies congue. Duis sit amet dapibus mi. Aliquam eget enim eget erat ultrices scelerisque. Integer et augue vel orci dapibus tempor ac at nibh. Maecenas fringilla aliquam feugiat. Integer quis ultrices tellus, et rhoncus erat. Aenean ligula ex, sollicitudin nec mauris sed, rhoncus suscipit lorem. Praesent et pellentesque felis. Cras iaculis nulla id nisi laoreet ullamcorper. ', 'Aenean ligula ex, sollicitudin nec mauris sed, rhoncus suscipit lorem', 3, 'Pellentesque sagittis semper purus, sit amet pretium nisl porta et. Quisque porta libero a ante ultricies aliquam. Pellentesque condimentum, lectus nec consequat suscipit, sem elit egestas nibh, ut convallis sapien est elementum enim. Phasellus fringilla odio eu nulla semper consectetur.', 3, 3),
(12, 'NUNC CONSECTETUR A NEQUE SCELERISQUE CONSEQUAT', 'Praesent rutrum leo a ipsum congue luctus. Sed malesuada dui vitae urna vulputate interdum. Nunc eleifend interdum est, congue posuere lectus sodales nec. Fusce porttitor ex ut ante tempus sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, sapien id porta consectetur, arcu mauris facilisis lorem, id commodo orci eros a neque. Aenean at sem vestibulum augue rutrum pulvinar at ut diam. Suspendisse et mauris at dolor tincidunt blandit ut a nunc. Etiam sit amet dictum purus. Integer vitae ornare risus. Etiam libero tellus, tempus sed velit at, commodo efficitur nisi. Vivamus semper nunc felis, sit amet volutpat justo hendrerit id. Aenean placerat viverra tortor, sed laoreet lorem ultrices in. Nam semper dictum aliquam. ', 'Vivamus semper nunc felis, sit amet volutpat justo hendrerit id', 2, 'Donec nisl tortor, tincidunt non tortor nec, aliquet bibendum lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sodales in elit ut aliquam. Nunc semper massa ut magna pellentesque laoreet. Ut vestibulum dapibus sollicitudin. Nullam accumsan semper suscipit. Cras fringilla dui vitae tellus sagittis pharetra. Cras et leo lobortis ligula ullamcorper euismod.', 14, 2),
(13, 'CRAS EGET LOREM IN ORCI ELEMENTUM MALESUADA VESTIBULUM AC EST', 'Duis efficitur diam ut turpis commodo, eu accumsan leo maximus. Maecenas sed cursus felis. Vivamus finibus enim eu augue fringilla rhoncus. Vestibulum diam erat, lacinia ut neque vel, aliquet dignissim ex. Pellentesque eu libero at augue porta blandit eget sed diam. In hac habitasse platea dictumst. Proin posuere mi nec felis porttitor cursus. Donec lacinia odio vitae elit aliquet, in tristique orci tincidunt. Cras vestibulum placerat neque ut tristique. Vivamus dapibus sem vitae lacinia auctor. ', 'Donec lacinia odio vitae elit aliquet, in tristique orci tincidunt', 1, '', 11, 1),
(14, 'PELLENTESQUE TEMPUS FELIS NISL', 'Proin malesuada pharetra aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id sapien ut mauris fermentum volutpat. Ut luctus, arcu sit amet semper venenatis, libero urna dictum justo, at feugiat metus arcu eu lectus. Sed massa dolor, lobortis id eros quis, rutrum molestie leo. Proin ac lorem at dolor tristique vehicula id eget massa. Phasellus auctor maximus ultricies. Duis ac aliquam tortor, sit amet pharetra sapien. ', 'Ut luctus, arcu sit amet semper venenatis, libero urna dictum justo, at feugiat metus arcu eu lectus', 3, 'Aliquam libero elit, ultrices vitae nisl ac, luctus tempus neque. In posuere facilisis lorem eu ultricies. Phasellus ac faucibus dolor, a imperdiet magna. Maecenas ornare, lacus sed lobortis consectetur, felis odio laoreet risus, vel rutrum dolor felis et ante.', 5, 2),
(15, 'PROIN ELEMENTUM FACILISIS NULLA', 'In imperdiet placerat enim, efficitur tincidunt velit vestibulum pulvinar. Vivamus tortor odio, ultricies id accumsan quis, posuere fringilla libero. Proin tempus enim libero, id laoreet urna aliquet vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus et sem augue. Maecenas feugiat sodales dui at commodo. Donec ornare venenatis tristique. ', 'Vivamus tortor odio, ultricies id accumsan quis, posuere fringilla libero', 1, '', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dsn_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mhs_id`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`skripsi_id`),
  ADD KEY `fk_mhs_id` (`mhs_id`),
  ADD KEY `fk_dsn_id` (`dsn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dsn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mhs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `skripsi_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD CONSTRAINT `fk_dsn_id` FOREIGN KEY (`dsn_id`) REFERENCES `dosen` (`dsn_id`),
  ADD CONSTRAINT `fk_mhs_id` FOREIGN KEY (`mhs_id`) REFERENCES `mahasiswa` (`mhs_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
