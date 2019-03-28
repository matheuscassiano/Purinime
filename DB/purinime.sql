-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 28/03/2019 às 19:08
-- Versão do servidor: 5.7.21-1
-- Versão do PHP: 5.6.26-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `purinime`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `publicacao_id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `imagem` varchar(9999) NOT NULL,
  `autor` varchar(15) NOT NULL,
  `conteudo` blob NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `data` varchar(20) NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `publicacao`
--

INSERT INTO `publicacao` (`publicacao_id`, `titulo`, `imagem`, `autor`, `conteudo`, `categoria`, `data`, `views`) VALUES
(1, 'Angel Beats:', 'http://karinsensei.com/wp-content/uploads/2014/05/Angel-Beats-Capa-01.jpg', 'Admin', 0x416e67656c2042656174732120736520706173736120656d20756d61206573636f6c61207175652066756e63696f6e6120636f6d6f20756d206c696d626f207061726120617175656c657320717565206d6f72726572616d2c6d6173200d0a6578706572696d656e746172616d206469666963756c6461646573206f7520747261756d6173207175616e646f207669766f732071756520646576656d20636f6e636f726461722065206163656974617220616e746573206465200d0a72656365626572656d20756d6120736567756e6461206368616e6365206e6120766964612e20417175656c65732071756520657374c3a36f206e61206573636f6c612070c3b3732d766964612061696e646120636f6e73656775656d200d0a73656e74697220646f72206461206d65736d6120666f726d61206465207175616e646f206573746176616d207669766f732c2062656d20636f6d6f206d6f72726572206e6f76616d656e746520652061636f726461722073656d200d0a7175616c7175657220666572696d656e746f2e0d0a0d0a412068697374c3b3726961207365677565206f2070726f7461676f6e69737461204f746f6e617368692c20756d206761726f746f207175652070657264652073756173206d656dc3b372696173206465706f6973206465206d6f727265722e200d0a456c6520736520656e636f6e74726120636f6d20597572692c20756d61206761726f746120717565206f20636f6e766964612061207365206a756e7461722061204672656e746520646520426174616c68612050c3b37320566964612028e6adbbe382930d0ae381a0e4b896e7958ce688a6e7b79a2c205368696e64612053656b61692053656e73656e3f2c202853535329292c20756d61206f7267616e697a61c3a7c3a36f2071756520656c612066756e646f75206520717565206c6964657261206c75746173200d0a636f6e74726120446575732c20706f722063617573612064617320657870657269c3aa6e63696173206e65676174697661732071756520746f646f73206f73206d656d62726f7320706173736172616d207175616e646f200d0a6573746176616d207669766f732e204e61205353532c2068c3a120756d612062616e64612064652071756174726f206761726f746173206368616d616461204769726c732044656164204d6f6e737465722c2071756520617475616d200d0a636f6d6f20756d6120646976657273c3a36f20647572616e7465206173206d697373c3b565732c206520756d61206f7267616e697a61c3a7c3a36f206368616d616461204775696c64207175652070726f64757a2061726d61732065206173200d0a666f726e6563652061205353532e204120c3ba6e69636120696e696d6967612064612053535320c3a920756d61206d656e696e61206368616d61646120416e67656c2c2071756520757361207365757320706f6465726573200d0a736f6272656e6174757261697320636f6e7472612061206f7267616e697a61c3a7c3a36f2e20416e67656c2063726961207365757320706f646572657320636f6d206f20617578c3ad6c696f20646520756d2070726f6772616d61206465200d0a636f6d70757461646f72206368616d61646f20416e67656c20506c617965722e204f20726573746f206461206573636f6c612070c3b373207669646120c3a920707265656e636869646120706f7220756d206772616e6465206ec3ba6d65726f200d0a6465206573747564616e746573205c226e6f726d6169735c2220652070726f666573736f7265732c206f73207175616973205975726920636f6e73696465726120636f6d6f205c226e6f6e2d706c6179657220636861726163746572735c22200d0a284e504373292c206f752073656a612c20656c6573206ec3a36f2073c3a36f2068756d616e6f732c206d6173207061726563656d2065206167656d20636f6d6f20736520666f7373656d2e0d0a0d0a4f207072696d6569726f20646f7320706572736f6e6167656e7320717565207265616c697a612073657520736f6e686f2065206465736170617265636520c3a920497761736177612c2061206cc3ad6465722064612062616e6461204769726c73200d0a44656164204d6f6e737465722e20416e67656c2c2063756a6f206e6f6d65207665726461646569726f20c3a9204b616e61646520546163686962616e612c2070657264652073756120706f7369c3a7c3a36f20636f6d6f200d0a707265736964656e746520646f20636f6e73656c686f206573747564616e74696c2065206f20766963652d707265736964656e74652c206368616d61646f204e616f692c2061207375636564652e204e616f69207573612073657573200d0a706f6465726573206465206869706e6f7365207061726120636f6e74726f6c6172206f73204e5043732070617261206c7574617220706f722073657573207072c3b37072696f7320696e746572657373657320636f6e7472612061205353532c200d0a6d6173204f746f6e61736869206f207061726120652c20706f73746572696f726d656e74652c204e616f69207365206a756e74612061205353532e204f746f6e617368692072656375706572612073756173206d656dc3b372696173200d0a636f6d206120616a756461206461206869706e6f7365206465204e616f69206520636f6e636f72646120656d20636f6e74696e756172206e61205353532e204f746f6e617368692066617a20616d697a61646520636f6d200d0a4b616e6164652065206120636f6e7669646120706172612070617274696369706172206461732061746976696461646573206461205353532e204576656e7475616c6d656e74652c204f746f6e61736869207365206c656d627261206465200d0a746f646f73206f7320646574616c686573206465207375612076696461206520646120737561206d6f7274652c206520636f6d65c3a761206120636f6f706572617220636f6d204b616e616465207061726120616a75646172206f73200d0a6f7574726f73206d656d62726f732064612053535320612073656775697220656d206672656e74652e20446573736120666f726d612c204b616e61646520617373756d65206e6f76616d656e7465206f20706f73746f206465200d0a707265736964656e746520646f20636f6e73656c686f206573747564616e74696c2c2064652061636f72646f20636f6d206f20706c616e6f20646f7320646f69732e205975692c20756d61206761726f7461207175652073756273746974756975200d0a49776173617761206465706f69732071756520656c61206d6f727265752c20c3a9206120736567756e646120706572736f6e6167656d2071756520646573617061726563652e0d0a0d0a5175616e646f206d6f6e7374726f732064617320736f6d6272617320636f6d65c3a7616d2061206174616361722061205353532c2054616b616d617473752061636162612073656e646f206465766f7261646f20706f7220756d2c200d0a7265617061726563656e646f206465706f697320636f6d6f20756d204e50432e204f746f6e61736869206578706c696361206f2071756520657374c3a12061636f6e746563656e646f2065206d7569746f7320646f73200d0a6573747564616e74657320636f6e636f7264616d20656d207265656e6361726e617220656d2076657a20646520736520746f726e617220756d204e50432c20656e74726520656c65732044656164204769726c73204d6f6e737465722c200d0a43686161206461204775696c646120652076c3a172696f73206d656d62726f73206ec3a36f206964656e746966696361646f732e2059757269206465737472c3b369206f7320636f6d70757461646f72657320726573706f6e73c3a176656973200d0a70656c6f2070726f6772616d612064617320736f6d627261732c2071756520666f69206174697661646f207175616e646f206f20616d6f7220666f692064657465637461646f206e6f206d756e646f2070c3b37320766964612c20636f6d6f200d0a756d6120666f726d6120646520696d706564697220646520736520746f726e617220756d207665726461646569726f2070617261c3ad736f2065206d616e746572207365752065737461646f206465206c696d626f2e2052657374616d200d0a6170656e6173204f746f6e617368692c20597572692c204b616e6164652c2048696e6174612065204e616f692c20717565207265616c697a616d20756d6120636572696dc3b46e696120646520666f726d61747572612c206f6e646520656c6573200d0a61677261646563656d2070656c6f2061706f696f20646520756d20616f206f7574726f2e204465706f6973206465204e616f692c205975726920652048696e61746120706172746972656d2c204f746f6e6173686920646573636f627265200d0a717565206f206172726570656e64696d656e746f206465204b616e61646520c3a9206ec3a36f20746572207369646f20636170617a2064652061677261646563c3aa2d6c6f2070656c6f20636f7261c3a7c3a36f207175652072656365626575200d0a64656c65206170c3b37320737561206d6f7274652e204f746f6e6173686920657374c3a120696e636f6e736f6cc3a176656c206465706f69732071756520656c61206f206167726164656365206520646573617061726563652c20756d612076657a200d0a717565206573746176612061706169786f6e61646f20706f7220656c612e204e6f206570c3ad6c6f676f2c206475617320706573736f61732071756520736520617373656d656c68616d2061204f746f6e617368692065204b616e616465200d0a736520636f6e686563656d206e6120727561206e6f206d756e646f207265616c2e20456d20756d206570c3ad6c6f676f20616c7465726e617469766f2c204f746f6e617368692066696361206e6f206d756e646f2064612076696461200d0a6170c3b3732061206d6f727465207061726120616a75646172206f757472617320706573736f6173206120736567756972656d20656d206672656e74652e, 'Anime', '25-03-2019', 15),
(2, 'Densetsu no Yuusha no Densetsu', 'https://i.pinimg.com/originals/e8/d1/7f/e8d17f9e2d4d19370513db4b0bde3a24.jpg', 'Matheus', 0x52796e6572204c75746520c3a920756d206573747564616e746520707265677569c3a76f736f2064612041636164656d696120646520526f6c616e6420456d7069726520526f79616c204d6167696369616e2e20556d206469612c206f200d0a496d70c3a972696f20526f6c616e6420656e74726120656d2067756572726120636f6e747261206f207061c3ad732076697a696e686f2c204573746162756c2c20652052796e6572207065726465207365757320636f6c6567617320646520636c61737365200d0a6e61206775657272612e204170c3b3732061206775657272612c2052796e657220706172746520656d20756d61206a6f726e61646120706172612070726f63757261722061732072656cc3ad717569617320646520756d205c22486572c3b369204c656e64c3a172696f5c22200d0a6e6f20636f6d616e646f20646f205265692053696f6e20417374616c206520646573636f6272652071756520756d61206d616c6469c3a7c3a36f206d6f7274616c20657374c3a120736520657370616c68616e646f20706f7220746f646f206f200d0a636f6e74696e656e74652e, 'Anime', '25-03-2019', 10),
(3, 'kingdom', 'https://i.imgur.com/bafNaVC.png', 'Ryan', 0x4e61736369646f7320647572616e7465206f20506572c3ad6f646f20646f732045737461646f7320436f6d626174656e746573206e61204368696e6120616e746967612c205368696e20652048796f75206572616d206f7266c3a36f73200d0a646520677565727261206e6f207265696e6f2064652051696e2071756520736f6e686176616d20656d20736520746f726e617220756d205c224772616e64652047656e6572616c20646f732043c3a975735c2220612066696d206465200d0a617363656e6465722064652073756173206d69736572c3a17665697320636f6e6469c3a7c3b5657320646520766964612e20556d206469612c206e6f20656e74616e746f2c2048796f7520c3a9206c657661646f2070617261206f2070616cc3a163696f200d0a7265616c20706f7220756d206d696e697374726f206e6f20696e747569746f20646520736572207574696c697a61646f207061726120756d2070726f70c3b37369746f206174c3a920656e74c3a36f20646573636f6e68656369646f2c200d0a64656978616e646f205368696e20736f7a696e686f20636f6d6f20756d20736572766f20646f6dc3a9737469636f206e756d612076696c612064652063616d706f6e657365732e20416c67756e73206d65736573206465706f69732c200d0a48796f75207265746f726e61207061726120612076696c6120c3a0206265697261206461206d6f7274652c207375706c6963616e646f20c3a0205368696e207061726120717565207669616a6520696d6564696174616d656e74652070617261200d0a6f757472612076696c612e204cc3a120656c6520656e636f6e74726120756d206761726f746f2064652061706172c3aa6e636961206964c3aa6e7469636120612064652048796f752c2063756a6f206e6f6d6520c3a9204569205365692c206f20617475616c200d0a7265692064652051696e2e205368696e20617072656e6465207175652048796f752073657276697520636f6d6f2073c3b37369612070617261204569205365692c20652071756520656c6520666f69206d6f7274616c6d656e74652066657269646f20656d200d0a756d6120726562656c69c3a36f20636f6e747261206f207265692e20456d626f7261205368696e2065737469766573736520667572696f736f20636f6d2045692053656920706f72206361757361206461206d6f7274652064652048796f752c200d0a5368696e20646563696465206170726f7665697461722061206f706f7274756e6964616465206520616a7564612045692053656920612072656976696e6469636172206f2074726f6e6f20636f6e747261207365752069726dc3a36f20536569200d0a4b796f752c2071756520617363656e64657520616f2074726f6e6f20647572616e7465206120726562656c69c3a36f2e200d0a0d0a4170c3b373206f62746572207375636573736f20656d20737561206d697373c3a36f2c205368696e206f66696369616c6d656e746520696e6963696120737561206a6f726e61646120636f6d6f20756d20736f6c6461646f207261736f2c200d0a616c6d656a616e646f206f20706f73746f20646520636f6d616e64616e74652064617320666f72c3a761732064652051696e206e6f2063616d706f20646520626174616c68612c20636f6d206f206f626a657469766f206465207365200d0a746f726e6172206f206d61696f722067656e6572616c20646520746f646f206f206d756e646f2c206520646520616a75646172206f20726569204569205365692064652051696e206120616c63616ec3a761722073657520736f6e686f206465200d0a756e6966696361c3a7c3a36f20746f74616c206461204368696e612c20706f6e646f20756d2066696d206e617320696e63657373616e74657320626174616c68617320646520756d612076657a20706f7220746f6461732e, 'Manga', '25-03-2019', 0),
(4, 'No Game Lo Life: Zero', 'https://i.imgur.com/Xvm1l0r.png', 'Pablo', 0x4e6f20616e7469676f20446973626f6172642c2052696b7520c3a920756d2067756572726569726f207a616e6761646f2065206a6f76656d207175652070726574656e64652073616c76617220612068756d616e6964616465206461200d0a677565727261204578636565642c2061732064657a65737365697320657370c3a9636965732073656e6369656e7465732c206c7574616e646f2070617261206573746162656c65636572206f205c224465757320c39a6e69636f2065200d0a5665726461646569726f5c2220656e747265206f2056656c686f20446575732e20456d20756d612074657272612073656d206c65692c20612066616c7461206465206d61676961206520636f72706f7320667261636f73206461200d0a68756d616e6964616465206f7320746f726e6172616d20616c766f732066c3a1636569732070617261206f73206f7574726f73204578636565642c2064656978616e646f206f732068756d616e6f7320c3a0206265697261206461200d0a657874696ec3a7c3a36f2e20556d206469612c206e6f20656e74616e746f2c2061206573706572616ec3a761207265746f726e6120c3a02068756d616e6964616465207175616e646f2052696b7520656e636f6e74726120756d61200d0a706f6465726f73612065782d6d616368696e612c2061207175656d20656c65206368616d612064652053636877692c20656d20756d612063696461646520656c6661206162616e646f6e6164612e0d0a0d0a204578696c6164612064652073657520436c757374657220706f722063617573612064652073756120706573717569736120736f62726520617320656d6fc3a7c3b565732068756d616e61732c20536368776920657374c3a1200d0a636f6e76656e636964612064652071756520612068756d616e69646164652073c3b320736f62726576697665752064657669646f20616f20706f646572206465737365732073656e74696d656e746f73206520657374c3a1200d0a64657465726d696e616461206120656e74656e646572206f20636f7261c3a7c3a36f2068756d616e6f2e20466f726d616e646f20756d6120706172636572696120696d70726f76c3a176656c206e6f206d65696f20646f2063616f73200d0a65736d616761646f722c2052696b75206520536368776920646576656d2061676f726120656e636f6e7472617220617320726573706f737461732070617261207375617320646566696369c3aa6e6369617320696e646976696475616973200d0a756d206e6f206f7574726f2c206520646573636f6272697220706f72207369206d65736d6f73206f20717565207265616c6d656e7465207369676e6966696361207365722068756d616e6f20656e7175616e746f20656c6573206c7574616d200d0a706f722073756173207669646173206a756e746f7320636f6e74726120746f6461732061732070726f626162696c6964616465732e204361646120756d20636f6d20756d206e6f766f206520706f6465726f736f20616c6961646f2c200d0a636162652061676f7261206120656c657320696d7065646972206120657874696ec3a7c3a36f206461207261c3a7612068756d616e612065206573746162656c6563657220612070617a20706f72206d65696f20646f20446973626f61726421, 'Filme', '25-03-2019', 0),
(5, 'Sailor Moon', 'https://capitalgaming.mx/wp-content/uploads/2019/02/sailor-moon-640x477-1050x600.jpg', 'Ryan', 0x412068697374c3b3726961206769726120656d20746f726e6f20646520646566656e736f7261732072656e6173636964617320646520756d207265696e6f2071756520657374c3a120616d6561c3a761646f206e6f76616d656e74652070656c6173200d0a666f72c3a7617320646f206d616c2e20417320706572736f6e6167656e73207072696e63697061697320e28094206173205361696c6f722053656e73686920e280942073c3a36f2061646f6c657363656e7465732071756520706f64656d207365200d0a7472616e73666f726d617220656d206865726fc3ad6e617320726570726573656e74616e646f2061204c75612065206f7320706c616e657461732e204f2075736f2064612070616c61767261205c225361696c6f725c222073652064c3a120706f7220636f6e7461200d0a646f20706f70756c617220756e69666f726d65206573636f6c617220646173206761726f74617320646f204a6170c3a36f2c206f2073c49372c4812066756b752028726f757061206465206d6172696e686569726f292c20696e7370697261c3a7c3a36f206465200d0a54616b65756368692070617261206f7320756e69666f726d6520646173205361696c6f722053656e7368692e5b31385d204f7320656c656d656e746f732064652066616e74617369612064612073c3a97269652073c3a36f20666f7274656d656e7465200d0a73696d62c3b36c69636f7320652c206d75697461732076657a65732c206261736561646f73206e61206d69746f6c6f676961206520617374726f6c6f6769612e, 'Anime', '25-03-2019', 0),
(6, 'Turma da Monica', 'https://i.imgur.com/A4sggzK.jpg', 'Matheus', 0x5475726d61206461204dc3b46e69636120c3a920756d612073c3a97269652064652068697374c3b37269617320656d207175616472696e686f73206372696164612070656c6f2063617274756e69737461206520656d70726573c3a172696f200d0a62726173696c6569726f204d6175726963696f20646520536f7573612e20466f69206f726967696e61646120656d203139353920646520746972696e686173206465206a6f726e616c2c206e61207175616c206f7320706572736f6e6167656e73200d0a7072696e636970616973206572616d20426964752065204672616e6a696e68612e, 'Quadrinhos', '25-03-2019', 1),
(7, 'Batman: A Piada Mortal ', 'https://www.playstorm.com.br/wp-content/uploads/2016/07/kj.jpg', 'Ryan', 0x53c3b320c3a9207072656369736f20756d20646961207275696d207061726120726564757a6972206f206d6169732073c3a36f20646f7320686f6d656e73206120756d206c756ec3a17469636f2c206573736120c3a920612064697374c3a26e636961200d0a656e747265200d0a6f206d756e646f2065206575e280a6206170656e617320756d20646961207275696d2ee2809d20e2809320436f72696e67610d0a0d0a41205069616461204d6f7274616c2028313938382920666f6920756d6120646173206d616973206d617263616e746573204851732c20706f69732071756562726f7520616c67756e7320706172616469676d6173206e61200d0a72656c61c3a7c3a36f200d0a686572c3b3692d76696cc3a36f2c206174c3a920656e74c3a36f2073696d706c697374612c207472617a656e646f20756d61207472616d61206d7569746f2062656d20666f726d756c6164612c207472616e73666f726d616e646f2061206f627261200d0a656d200d0a756d61206772616e6465207265666572c3aa6e63696120646f20486f6d656d204d6f726365676f2e0d0a0d0a517561736520333020616e6f73206465706f697320646f206c616ec3a7616d656e746f2064612048512c204261746d616e3a2041205069616461204d6f7274616c20c3a92061206d616973206e6f766120616e696d61c3a7c3a36f206461200d0a44432c200d0a646972696769646120706f722053616d204c6975202874616d62c3a96d20726573706f6e73c3a176656c2070656c6120616e696d61c3a7c3a36f204f20436176616c6569726f206461732054726576617320e2809320506172746573203120652032292e0d0a0d0a556d20646961207275696d20c3a9207475646f206f2071756520c3a9206e6563657373c3a172696f2070617261207472616e73666f726d61722061207669646120646520756d6120706573736f612e20426173746120756d20646961200d0a646573736573200d0a706172612071756520756d6120706573736f6120636f6d706c6574616d656e74652073c3a320706572636120746f64612061207375612073616e69646164652e2045206164656e747265206f732063616d696e686f73206461200d0a6c6f75637572612e20556d612074726167c3a964696120706f6465206d75646172206f2072756d6f206465207475646f2e20452041205069616461204d6f7274616c2074726174612065786174616d656e746520646973736f2c200d0a7175616e646f200d0a6578706c6f7261206120707369636f6c6f676961206465204261746d616e2c20436f72696e6761206520646f20436f6d697373c3a172696f20476f72646f6e2e20506f72717565204272756365207365207472616e73666f726d6f75206e6f200d0a4261746d616e2c20756d2065782d636f6d656469616e7465206e6f20436f72696e67612065206f20436f6d697373c3a172696f20476f72646f6e20636f6e74696e75612073656e646f206f2073c3ad6d626f6c6f206461200d0a73616e69646164653f200d0a5175616c20c3a9206573736120666f72c3a761207175652066657a20636f6d2071756520476f72646f6e20726573697374697373652074c3a36f2062656d20616f2073657520e2809c646961207275696de2809d2065207175652066616c746f7520616f200d0a4261746d616e206520616f20436f72696e67613f, 'HQ', '25-03-2019', 0),
(8, 'Katekyo Hitman Reborn', 'https://blog-001.west.edge.storage-yahoo.jp/res/blog-40-b9/cdqww714/folder/995733/79/17441279/img_0', 'Ryan', 0x456d204b6174656b796f204869746d616e205265626f726e20756d206d656e696e6f2c205473756e61796f736869205c225473756e615c22205361776164612c20c389206573636f6c6869646f207061726120736520746f726e6172206f200d0a64c3a963696d6f2063686566652064612046616dc3ad6c696120566f6e676f6c612c20636f6d6f20656c6520c3a9206f207461746172616e65746f2d6772616e64652d6772616e64652d6e65746f20646f207072696d6569726f206368656665200d0a566f6e676f6c6120717565207365206d75646f752070617261206f204a6170c3a36f206461204974c3a16c69612e2054696d6f74656f2c206f20566f6e676f6c61204958202d206f20617475616c2063686566652064612066616dc3ad6c6961202d2c20656e766961200d0a5265626f726e2c20756d6120637269616ec3a76120617373617373696e61206461204974c3a16c69612c207061726120747265696e6172206f2072656c7574616e7465205473756e612e204f206dc3a9746f646f20646520656e73696e6f207072696e636970616c200d0a6465205265626f726e20c3a9206f205c224479696e672057696c6c2042756c6c65745c222028e6adbbe381ace6b097e5bcbe2c205368696e756b6964616e3f292c207175652066617a20636f6d2071756520756d6120706573736f612073656a61200d0a5c2272656e6173636964615c22206d61697320666f72746520706172612065786563757461722073657520646573656a6f206d6f726962756e646f2e204f20646573616a65697461646f2c205473756e6120746f726e612d7365206d61697320666f7274652c200d0a6d61697320636f6e6669616e7465206520646973706f73746f2c20746f726e616e646f2d7365206f20616465717561646f2063686566652064612066616dc3ad6c696120566f6e676f6c612c2061706573617220646520737561200d0a72656c7574c3a26e63696120636f6e74c3ad6e75612e20456c652066617a2076c3a172696f7320616d69676f732c20696e636c75696e646f204b796f6b6f2053617361676177612e, 'Anime', '26-03-2019', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `slide`
--

INSERT INTO `slide` (`slide_id`, `titulo`, `imagem`, `descricao`) VALUES
(1, 'Shigatsu Wa Kimi No Uso', 'https://i.imgur.com/t6bdire.jpg', 'Simplesmente um dos melhores animes jÃ¡ feitos...'),
(2, 'Attack on Titans', 'https://i.imgur.com/7eR9ZwR.jpg', 'BBBBBBBBBBBBBBBBBBBBBBBBB'),
(3, 'Filme de No Game No Life', 'https://i.imgur.com/lVICtCG.jpg', 'BBBBBBBBBBBBBBBBBBBBBBBBB');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `email` varchar(999) NOT NULL,
  `usuario` varchar(35) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `usuario_img` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `email`, `usuario`, `senha`, `cargo`, `usuario_img`) VALUES
(1, 'matheus@teste.com', 'Matheus', '123', 'admin', 'https://scontent.fmcz7-1.fna.fbcdn.net/v/t1.0-9/39467338_1849743388448147_8495161354020192256_n.jpg?_nc_cat=106&_nc_ht=scontent.fmcz7-1.fna&oh=4ab3d2aa79bf11adda11306421d92c55&oe=5D47E29F'),
(2, 'admin@admin.com', 'Admin', '123', 'admin', 'https://image.flaticon.com/icons/png/512/44/44948.png'),
(3, 'pablo@tipi.com', 'Pablo', '123', 'admin', 'https://image.flaticon.com/icons/png/512/44/44948.png'),
(4, 'ryan@tipi.com', 'Ryan', '123', 'admin', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRWGJUSc_b446T6ZjajqY_dtt_Fc7lYiKiVvIxMBq0JDXb16g4qQ'),
(5, 'leitor@admin.com', 'Leitor', '123', 'leitor', 'https://pbs.twimg.com/profile_images/899692061473079296/3DObvy2F.jpg');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`publicacao_id`);

--
-- Índices de tabela `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `publicacao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
