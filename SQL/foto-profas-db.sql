-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Grd 23 d. 08:10
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto-profas-db`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(5) NOT NULL,
  `Prisijungimo_vardas` varchar(20) COLLATE utf8_bin NOT NULL,
  `Slaptazodis` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Prisijungimo_vardas`, `Slaptazodis`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '202cb962ac59075b964b07152d234b70'),
(3, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `issaugota_preke`
--

CREATE TABLE `issaugota_preke` (
  `Issaugotos_p_id` int(5) NOT NULL,
  `Prekes_id` int(5) NOT NULL,
  `Vartotojo_id` int(5) NOT NULL,
  `Kiekis` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `issaugota_preke`
--

INSERT INTO `issaugota_preke` (`Issaugotos_p_id`, `Prekes_id`, `Vartotojo_id`, `Kiekis`) VALUES
(1, 1, 1, 5),
(2, 2, 2, 2),
(3, 2, 2, 2),
(4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `produktas`
--

CREATE TABLE `produktas` (
  `Prekes_id` int(5) NOT NULL,
  `Kategorija` varchar(100) COLLATE utf8_bin NOT NULL,
  `Gamintojas` varchar(100) COLLATE utf8_bin NOT NULL,
  `Metai` year(4) NOT NULL,
  `Pavadinimas` varchar(255) COLLATE utf8_bin NOT NULL,
  `Nuotrauka` varchar(100) COLLATE utf8_bin NOT NULL,
  `Aprašymas` text COLLATE utf8_bin NOT NULL,
  `Kaina` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `produktas`
--

INSERT INTO `produktas` (`Prekes_id`, `Kategorija`, `Gamintojas`, `Metai`, `Pavadinimas`, `Nuotrauka`, `Aprašymas`, `Kaina`) VALUES
(1, 'Veidrodiniai fotoaparatai', 'Nikon', 2017, 'D850', 'nikon_d850.jpg', '<strong>Parametrai </strong> <br> 	\r\nVaizdo taškai: 46 mpix, 8256 x 5504,\r\nbe filtro (didesnis raiškumas).\r\nJutiklio dydis:	43 mm. (FF).\r\nVaizdo santykis: 1:1, 5:4, 3:2, 16:9.\r\nJautrumas: 64-25600 (102400) ISO.\r\nIšlaikymas: 1/8000-30 sek,\r\n+ greitas elektroninis užraktas.\r\nStabilizavimas:	Ne, bet stabilizaciją gali turėti objektyvas.\r\nFoto serijos: Fokusuojant:\r\n7 kadrai per sek., Be AF: 9 k/s.\r\nRankiniai nustatymai: 	Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas.\r\nBlykstė: Išorinė, Nuotolinė valdoma, x-sync:1/250s. <br>\r\n<strong>Fokusavimas </strong> <br>	\r\nMetodas: Greitas fazinis fokusavimas.\r\nTaškai:	151 taškai, 9 kryžminiai.\r\nRežimai: Automatinis, rankinis(objektyvo žiedas), fokusavimo sekimas.\r\nEkranėlyje: Yra lėtas, veido atpažinimo funkcija, lietimu nurodant ekranėlyje.<br>\r\n<strong> Sk. galimybės </strong> <br>	\r\nProgramos: Siužetinės programos, fotofilmo fotografavimas.\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo: 4K kokybė, MPG4/H264 formatu\r\nVideo formatai:	4K/30p/25p/24p\r\n1920x1080/120p/60p/50p/30p/25p/24p\r\n1280x720/60p/30p/25p.\r\nGarsas:	Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne.\r\nLaikmenos: SD, SDHC, SDXC, Du lizdai, UHS-I, UHS-II, XQD.\r\nJungtys: USB3, HDMI.\r\nBelaidės jungtys ir valdymas: WiFi, Nuotolinis fotoaparto valdymas: WiFi, Bluetooth, valdymas laidu <br>\r\n<strong>Korpusas </strong> <br>\r\nDydis: 	Veidrodinis - didelis, su keičiamais objektyvais.\r\nSpalvos: Juoda.\r\nAtsparumas: Atsparus drėgmei ir dulkėms, magnio lydinio korpusas.\r\nIeškiklis: Optinis(TTL), pentaprizė,\r\ndidinimas: 0.75x, rodo 100% vaizdo.\r\nLCD ekranas: 8.6 cm, 2359 tūkst. taškų, sukiojamas, valdymas lietimu, Live view.\r\nAkumuliatorius:	Ličio akumuliatorius: EN-EL15a.\r\nAkumuliatoriaus talpa: 	Pakanka 1840 nuotraukų.\r\nMatmenys: 146x124x79 mm.\r\nSvoris:	1015 g.', 2629),
(2, 'Veidrodiniai fotoaparatai', 'Nikon', 2020, 'D780', 'nikon_d780.jpg', '<strong>Parametrai</strong> <br> 	\r\nVaizdo taškai: 	25 mpix, 6048 x 4024,\r\nbe filtro (didesnis raiškumas).\r\nJutiklio dydis:	43 mm. (FF).\r\nVaizdo santykis: 1:1, 3:2, 16:9.\r\nJautrumas: 100-51200 (204800) ISO.\r\nIšlaikymas: 1/8000-655.35 sek,\r\n+ greitas elektroninis užraktas.\r\nStabilizavimas: Ne, bet stabilizaciją gali turėti objektyvas.\r\nFoto serijos: Fokusuojant:\r\n7 kadrai per sek.,\r\nBe AF: 12 k/s.\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas.\r\nBlykstė: Išorinė, Nuotolinė valdoma, X-sync:1/200 sek.<br>\r\n<strong>Fokusavimas</strong> <br>	\r\nMetodas: Greitas fazinis fokusavimas.\r\nTaškai:	51 taškai, 15 kryžminių.\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas.\r\nEkranėlyje: Yra, Greitas fokusavimas, veido atpažinimo funkcija, lietimu nurodant ekranėlyje.<br>\r\n<strong>Skaitmeninės galimybės</strong> <br> 	\r\nProgramos: Siužetinės programos, HDR, fotofilmo fotografavimas.\r\nVaizdo formatai: JPG, RAW, AdobeRGB.\r\nVideo: 4K kokybe, MPG4/H264 formatu.\r\nVideo formatai:	4K/30p/25p/24p\r\n1920x1080/120p/100p/60p/50p/30p/25p.\r\nGarsas:	Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas.\r\nGPS imtuvas: Ne.\r\nLaikmenos: SD, SDHC, SDXC, Du lizdai, UHS-I, UHS-II.\r\nJungtys: USB3.1, HDMI.\r\nBelaidės jungtys ir valdymas: 	WiFi, nuotolinis fotoaparto valdymas WiFi, Bluetooth, valdymas laidu.<br>\r\n<strong>Korpusas</strong> <br> 	\r\nDydis: 	Veidrodinis - didelis, su keičiamais objektyvais.\r\nSpalvos: Juoda.\r\nAtsparus: Atsparus drėgmei ir dulkėms, magnio lydinio korpusas.\r\nIeškiklis: Optinis(TTL), pentaprizė,\r\ndidinimas: 0.7x, rodo 100% vaizdo.\r\nLCD ekranas: 8.6 cm, 2400 tūkst. taškų, sukiojamas, valdymas lietimu, Live view.\r\nAkumuliatorius:	Ličio akumuliatorius: EN-EL15b.\r\nAkumuliatoriaus talpa: 	Pakanka 2260 nuotraukų.\r\nMatmenys: 144x116x76 mm.\r\nSvoris: 840 g.', 2059),
(3, 'Veidrodiniai fotoaparatai', 'Nikon', 2014, 'D810', 'nikon_d810.jpg', '<strong>Parametrai</strong><br> 	\r\nVaizdo taškai: 	36 mpix, 7360 x 4912.\r\nJutiklio dydis:	43 mm. (FF).\r\nVaizdo santykis: 3:2, 5:4.\r\nJautrumas: 64-12800 (51200) ISO.\r\nIšlaikymas: 1/8000-30 sek.\r\nStabilizavimas:	Ne, bet stabilizaciją gali turėti objektyvas.\r\nFoto serijos: 	Fokusuojant:\r\n5 kadrai per sek.,\r\nBe AF: 7 k/s.\r\nRankiniai nustatymai: 	Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas.\r\nBlykstė: Iššokanti, Išorinė, Nuotolinė valdoma, x-sync:1/250. <br>\r\n<strong>Fokusavimas</strong> <br> 	\r\nMetodas: Greitas fazinis fokusavimas.\r\nTaškai:	51 taškai.\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas.\r\nEkranėlyje: Yra lėtas, veido atpažinimo funkcija.<br>\r\n<strong>Skaitmeninės galimybės </strong> <br>	\r\nProgramos: Siužetinės programos, kūrybiniai filtrai.\r\nVaizdo formatai: JPG, RAW, AdobeRGB.\r\nVideo: 	FullHD kokybe, MPG4/H264 formatu\r\nVideo formatai:	1920x1080/60p/50p/30p/25p/24p 1280x720/60p/50p.\r\nGarsas: Taip, stereo, galimas išorinis stereo mikrofonas.\r\nGPS imtuvas: Ne.\r\nLaikmenos: SD, SDHC, SDXC, CF, Du lizdai.\r\nJungtys: USB3, HDMI.\r\nBelaidės jungtys ir valdymas: valdymas laidu.<br>\r\n<strong>Korpusas</strong> <br>	\r\nDydis: 	Veidrodinis - didelis, su keičiamais objektyvais.\r\nSpalvos: Juoda.\r\nAtsparus: Atsparus drėgmei ir dulkėms.\r\nIeškiklis: Optinis(TTL), pentaprizė,\r\ndidinimas: 0.70x, rodo 100% vaizdo.\r\nLCD ekranas: 8.6 cm, 1229 tūkst. taškų, Live view.\r\nAkumuliatorius:	Ličio akumuliatorius: EN-EL15.\r\nAkumuliatoriaus talpa: 	Pakanka 1200 nuotraukų.\r\nMatmenys: 146x123x82 mm.\r\nSvoris: 980 g.', 2000),
(4, 'Veidrodiniai fotoaparatai', 'Canon', 2016, 'EOS 5D Mark IV', 'canon_5d_mk4.jpg', '<strong>Parametrai</strong> <br> 	\r\nVaizdo taškai: 30 mpix, 6720 x 4480.\r\nJutiklio dydis: 43 mm. (FF).\r\nVaizdo santykis: 1:1, 4:3, 3:2, 16:9.\r\nJautrumas: 100-32000 (102400) ISO.\r\nIšlaikymas: 1/8000-30 sek.\r\nStabilizavimas:	Ne, bet stabilizaciją gali turėti objektyvas.\r\nFoto serijos: Fokusuojant:\r\n7 kadrai per sek.\r\nRankiniai nustatymai: Ekspozicijos. korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas.\r\nBlykstė: Išorinė, Nuotolinė valdoma, x-sync:1/200s. <br>\r\n<strong>Fokusavimas</strong> <br> 	\r\nMetodas: Greitas fazinis fokusavimas.\r\nTaškai: 61 taškai, 41 kryžminis.\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas.\r\nEkranėlyje: Yra, Greitas fokusavimas, veido atpažinimo funkcija.<br>\r\n<strong>Skaitmeninės galimybės</strong> <br>	\r\nProgramos: Siužetinės programos, HDR.\r\nVaizdo formatai: JPG, RAW, AdobeRGB.\r\nVideo: 4K kokybe,\r\nMPG4/H264 formatu.\r\nVideo formatai: 4K/30p/24p 1920x1080/60p/50p/30p/24p 1280x720/120p.\r\nGarsas:	Taip, galimas išorinis stereo mikrofonas, ausinių lizdas.\r\nGPS imtuvas: Taip.\r\nLaikmenos: SD, SDHC, SDXC, CF, Du lizdai, UHS-I.\r\nJungtys: USB3, HDMI.\r\nBelaidės jungtys ir valdymas: WiFi, nuotolinis fotoaparto valdymas WiFi, valdymas laidu.<br>\r\n<strong>Korpusas</strong> <br>	\r\nDydis: Veidrodinis - didelis, su keičiamais objektyvais.\r\nSpalvos: Juoda.\r\nAtsparus: Atsparus drėgmei ir dulkėms, magnio lydinio korpusas.\r\nIeškiklis: Optinis(TTL), pentaprizė,\r\ndidinimas: 0.71x, rodo 100% vaizdo.\r\nLCD ekranas: 8.6 cm, 1620 tūkst. taškų, Live view.\r\nAkumuliatorius:	Ličio akumuliatorius: LP-E6N.\r\nAkumuliatoriaus talpa: 	Pakanka 900 nuotraukų.\r\nMatmenys: 151x116x76 mm.\r\nSvoris:	890 g.', 2339),
(5, 'Veidrodiniai fotoaparatai', 'Canon', 2012, 'EOS 5D Mark III', 'canon_5dmk3.jpg', '<strong>Parametrai</strong> <br>\r\nVaizdo taškai: 22.3 mpix, 5760 x 3840.\r\nJutiklio dydis:	43 mm. (FF).\r\nVaizdo santykis: 3:2.\r\nJautrumas: 100-25600 (102400) ISO.\r\nIšlaikymas: 1/8000-30 sek.\r\nStabilizavimas:	Ne, bet stabilizaciją gali turėti objektyvas.\r\nFoto serijos:	Fokusuojant 6 kadrai per sek.\r\nRankiniai nustatymai: 	Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas.\r\nBlykstė: Išorinė, Nuotolinis blyksčių valdymas radijo bangomis.<br>\r\n<strong>Fokusavimas </strong><br>\r\nMetodas: Greitas fazinis fokusavimas.\r\nTaškai: 61 taškai, 41 kryžminis.\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas.\r\nEkranėlyje: Yra lėtas, veido atpažinimo funkcija.<br>\r\n<strong>Skaitmeninės galimybės</strong> <br>	\r\nProgramos: Siužetinės programos.\r\nVaizdo formatai: JPG, RAW.\r\nVideo: Full HD kokybe, MPG4/H264 formatu\r\nVideo formatai: 1920x1080/30p/25p/24p\r\n1280x720/60p/50p.\r\nGarsas:	Taip, galimas išorinis stereo mikrofonas.\r\nGPS imtuvas: Ne.\r\nLaikmenos: SD, SDHC, SDXC, CF, CF2.\r\nJungtys: USB2, HDMI.\r\nBelaidės jungtys ir valdymas: Ne.<br>\r\n<strong>Korpusas</strong> <br>\r\nDydis: 	Veidrodinis - didelis, su keičiamais objektyvais.\r\nSpalvos: Juoda.\r\nAtsparus: Atsparus drėgmei ir dulkėms.\r\nIeškiklis: Optinis(TTL), pentaprizė,\r\ndidinimas: 0.71x, rodo 100% vaizdo.\r\nLCD ekranas: 8.6 cm, 1040 tūkst. taškų, Live view.\r\nAkumuliatorius:	Ličio akumuliatorius: Ličio LP-E6.\r\nAkumuliatoriaus talpa: 	Pakanka 950 nuotraukų.\r\nMatmenys: 152x116x76 mm\r\nSvoris:	860 g.', 2175),
(6, 'Veidrodiniai fotoaparatai', 'Canon', 2019, 'EOS Ra', 'canon_eosra.jpg', 'Parametrai 	\r\nVaizdo taškai: 30 mpix, 6720 x 4480\r\nJutiklio dydis:	43 mm. (FF)\r\nVaizdo santykis: 1:1, 4:3, 3:2, 16:9\r\nJautrumas: 100-40000 (102400) ISO\r\nIšlaikymas: 1/8000-30 sek\r\nStabilizavimas:	Ne, bet stabilizaciją gali turėti objektyvas\r\nFoto serijos: Fokusuojant:\r\n5 kadrai per sek.,\r\nBe AF: 8 k/s\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas\r\nBlykstė: Išorinė, Nuotolinė valdoma, x-sync:1/200s\r\nFokusavimas 	\r\nMetodas:	Greitas fazinis fokusavimas\r\nTaškai:	5655 taškai\r\nRežimai:	Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas\r\nEkranėlyje: Nėra, veido atpažinimo funkcija, lietimu nurodant ekranėlyje\r\nSk. galimybės 	\r\nProgramos: Siužetinės programos, HDR\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo? 	4K kokybe, MPG4/H264 formatu\r\nVideo formatai:	4K/30p/24p 1920x1080/60p/50p/30p/25p/24p 1280x720/120p/60p/50p/30p/25p/24p\r\nGarsas:	Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne\r\nLaikmenos: SD, SDHC, SDXC, UHS-I, UHS-II\r\nJungtys: USB3, HDMI\r\nBelaidės jungtys ir valdymas: WiFi, nuotolinis fotoaparto valdymas WiFi, Bluetooth\r\nKorpusas 	\r\nDydis: Veidrodinis - didelis, su keičiamais objektyvais\r\nSpalvos Juoda\r\nAtsparus: Atsparus drėgmei ir dulkėms, magnio lydinio korpusas\r\nIeškiklis: Elektroninis,\r\n2.5 cm., rodo 0.76% vaizdo,\r\nturi 3.7 mil. taškų\r\nLCD ekranas: 8.6 cm, 2100 tūkst. taškų, sukiojamas, valdymas lietimu\r\nAkumuliatorius:	Ličio akumuliatorius: LP-E6N\r\nAk. talpa: Pakanka 370 nuotraukų\r\nMatmenys: 136x98x84 mm\r\nSvoris:	580 g', 2699),
(7, 'Objektyvai', 'Nikon', 2009, 'AF-S DX Nikkor 35mm f/1.8G', 'nikon-35-1.8g.png', 'Židinio nuotolis: 35mm\r\nDiafragma: f/1.8\r\nLęšiai/grupės: 8/6\r\nDiafragmos lapeliai: 7\r\nMin. fokusavimas: 30cm\r\nMakro didinimas: 0.16x\r\nStabilizavimas: Ne\r\nFiltro diametras: 52mm\r\nMatmenys: 70x53mm\r\nSvoris: 200g', 165),
(8, 'Objektyvai', 'Canon', 1999, 'EF 70-200mm f/4L USM', 'canon-70-200.jpg', 'Židinio nuotolis: 70-200mm\r\nDiafragma: f/4\r\nLęšiai/grupės: 16/13\r\nDiafragmos lapeliai: 8\r\nMin. fokusavimas: 120cm\r\nMakro didinimas: 0.21x\r\nStabilizavimas: Ne\r\nFiltro diametras: 67mm\r\nMatmenys: 76.0 x 172.0mm\r\nSvoris: 705g', 555),
(9, 'Objektyvai', 'Nikon', 2008, 'AF-S Nikkor 50mm f/1.4G', 'nikon-50-1.4g.jpg', 'Židinio nuotolis: 50mm\r\nDiafragma: f/1.4\r\nLęšiai/grupės: 8/7\r\nDiafragmos lapeliai: 9\r\nMin. fokusavimas: 45cm\r\nMakro didinimas: 0.15x\r\nStabilizavimas: Ne\r\nFiltro diametras: 58mm\r\nMatmenys: 74x54mm\r\nSvoris: 280g', 419),
(10, 'Objektyvai', 'Sigma', 2013, '35mm F1.4 DG HSM | Art', 'sigma-35-f1.4.jpg', 'Židinio nuotolis: 35mm\r\nDiafragma: f/1.4\r\nLęšiai/grupės: 13/11\r\nDiafragmos lapeliai: 9\r\nMin. fokusavimas: 30cm\r\nMakro didinimas: 0.19x\r\nStabilizavimas: Ne\r\nFiltro diametras: 67mm\r\nMatmenys: 94x77mm\r\nSvoris: 665g', 719),
(11, 'Objektyvai', 'Nikon', 2007, 'AF-S Nikkor 14-24mm f/2.8G ED', 'nikkor-14-24.jpg', 'Židinio nuotolis: 14-24mm\r\nDiafragma: f/2.8\r\nLęšiai/grupės: 14/11\r\nDiafragmos lapeliai: 9\r\nMin. fokusavimas: 28cm\r\nMakro didinimas: 0.15x\r\nStabilizavimas: Ne\r\nFiltro diametras:\r\nMatmenys: 98x132mm\r\nSvoris: 1000g', 1439),
(12, 'Veidrodiniai fotoaparatai', 'Nikon', 2015, 'D7200', 'nikon-d7200.png', 'Vaizdo taškai: 24 mpix, 6000 x 4000,\r\nbe filtro (didesnis raiškumas)\r\nJutiklio dydis: 28 mm. (APS-C)\r\nVaizdo santykis: 3:2, 16:9\r\nJautrumas: 100-25600 (102400) ISO\r\nIšlaikymas: 1/8000-30 sek\r\nStabilizavimas:	Ne, bet stabilizaciją gali turėti objektyvas\r\nFoto serijos: Fokusuojant:\r\n6 kadrai per sek.\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas\r\nBlykstė: Iššokanti, Išorinė, Nuotolinė valdoma, GN12, x-sync:1/250s\r\nFokusavimas 	\r\nMetodas: Greitas fazinis fokusavimas\r\nTaškai: 51 taškai, 15 kryžminių\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas\r\nEkranėlyje: Yra lėtas, veido atpažinimo funkcija\r\nSkaiteminės galimybės 	\r\nProgramos: Siužetinės programos, kūrybiniai filtrai, HDR, fotofilmo fotografavimas\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo: FullHD kokybe, MPG4/H264 formatu\r\nVideo formatai: 1920x1080/60p/50p/25p/24p 1280x720/60p/50p\r\nGarsas: Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne\r\nLaikmenos: SD, SDHC, SDXC\r\nJungtys: USB2, HDMI\r\nBelaidės jungtys ir valdymas: NFC, valdymas laidu\r\nKorpusas 	\r\nDydis: Veidrodinis - didelis, su keičiamais objektyvais\r\nSpalvos: Juoda\r\nAtsparus: Atsparus drėgmei ir dulkėms\r\nIeškiklis: Optinis(TTL), pentaprizė,\r\ndidinimas: 0.94x, rodo 100% vaizdo\r\nLCD ekranas: 8.6 cm, 1228 tūkst. taškų, Live view\r\nAkumuliatorius:	Ličio akumuliatorius: EN-EL15\r\nAkumuliatoriaus talpa: 	Pakanka 1110 nuotraukų\r\nMatmenys: 136x107x76 mm\r\nSvoris:	675 g', 999),
(13, 'Veidrodiniai fotoaparatai', 'Nikon', 2014, 'D750', 'nikon-d750.png', 'Parametrai 	\r\nVaizdo taškai: 24 mpix, 6016 x 4016\r\nJutiklio dydis:	43 mm. (FF)\r\nVaizdo santykis: 3:2\r\nJautrumas: 50-12800 (51200) ISO\r\nIšlaikymas: 1/4000-30 sek\r\nStabilizavimas: Ne, bet stabilizaciją gali turėti objektyvas\r\nFoto serijos: Fokusuojant:\r\n6.5 kadrai per sek.\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas\r\nBlykstė: Iššokanti, Išorinė, Nuotolinė valdoma, GN12, s-sync:1/200\r\nFokusavimas 	\r\nMetodas: Greitas fazinis fokusavimas\r\nTaškai:	51 taškai\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas\r\nEkranėlyje: Yra lėtas, veido atpažinimo funkcija\r\nSkaitmeninės galimybės 	\r\nProgramos: Siužetinės programos\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo: FullHD kokybe, MPG4/H264 formatu\r\nVideo formatai: 1920x1080/60p/50p/30p/25p/24p 1280x720/60p/50p\r\nGarsas: Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne\r\nLaikmenos: SD, SDHC, SDXC, Du lizdai\r\nJungtys: USB3, HDMI\r\nBelaidės jungtys ir valdymas: WiFi, nuotolinis fotoaparto valdymas WiFi, valdymas laidu\r\nKorpusas 	\r\nDydis: Veidrodinis - didelis, su keičiamais objektyvais\r\nSpalvos: Juoda\r\nAtsparus: Atsparus drėgmei ir dulkėms\r\nIeškiklis: Optinis(TTL),\r\ndidinimas: 0,70x, rodo 100% vaizdo\r\nLCD ekranas: 8.6 cm, 1229 tūkst. taškų, sukiojamas, Live view\r\nAkumuliatorius: Ličio akumuliatorius: EN-EL15\r\nAkumuliatoriaus talpa: Pakanka 1230 nuotraukų\r\nMatmenys: 141x113x78 mm\r\nSvoris: 750 g', 1160),
(14, 'Sisteminiai fotoaparatai', 'Nikon', 2018, 'Z6', 'nikon-z6.png', 'Parametrai 	\r\nVaizdo taškai: 25 mpix, 6048 x 4024\r\nJutiklio dydis:	43 mm. (FF)\r\nVaizdo santykis: 1:1, 5:4, 3:2, 16:9\r\nJautrumas: 100-51200 (204800) ISO\r\nIšlaikymas: 1/8000-30 sek\r\nStabilizavimas: Taip, jutiklis\r\nFoto serijos: Fokusuojant 5.5 kadrai per sek.,\r\nBe AF: 12 k/s\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas\r\nBlykstė: Išorinė, Nuotolinė valdoma, x-sync: 1/200s\r\nFokusavimas 	\r\nMetodas: Greitas fazinis fokusavimas\r\nTaškai: Fokusavimas visame kadre\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas\r\nEkranėlyje: Yra, Greitas fokusavimas, veido atpažinimo funkcija, lietimu nurodant ekranėlyje\r\nSk. galimybės 	\r\nProgramos: Siužetinės programos, HDR, fotofilmo fotografavimas\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo: 4K kokybe, MPG4/H264, Log formatu\r\nVideo formatai:	4K/30p/24p 1920x1080/120p/100p/60p/50p/30p/25p/24p\r\n1280x720/60p/50p/30p/25p/24p\r\nGarsas: Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne\r\nLaikmenos: XQD\r\nJungtys: USB3, HDMI\r\nBelaidės jungtys ir valdymas: WiFi, nuotolinis fotoaparto valdymas WiFi, Bluetooth, valdymas laidu\r\nKorpusas 	\r\nDydis: 	Sisteminis - su keičiamais objektyvais\r\nSpalvos: Juoda\r\nAtsparus: Atsparus drėgmei ir dulkėms, magnio lydinio korpusas\r\nIeškiklis: Elektroninis,\r\ndidinimas: 0.8x, rodo 100% vaizdo,\r\nturi 3.7 mil. taškų\r\nLCD ekranas: 8.6 cm, 2100 tūkst. taškų, sukiojamas, valdymas lietimu\r\nAkumuliatorius: Ličio akumuliatorius: EN-EL15b\r\nAk. talpa: Pakanka 330 nuotraukų\r\nMatmenys: 134x101x68 mm\r\nSvoris: 675 g', 1509),
(15, 'Sisteminiai fotoaparatai', 'Sony', 2017, 'Alpha A7R III', 'sony-a7r.png', 'Parametrai 	\r\nVaizdo taškai: 	42 mpix, 7952 x 5304,\r\nbe filtro (didesnis raiškumas)\r\nJutiklio dydis:	43 mm. (FF)\r\nVaizdo santykis: 3:2, 16:9\r\nJautrumas: 100-32000 (102400) ISO\r\nIšlaikymas: 1/8000-30 sek\r\nStabilizavimas: Taip, jutiklis\r\nFoto serijos: Fokusuojant 10 kadrai per sek.\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas\r\nBlykstė: Išorinė, Nuotolinė valdoma, x-sync:1/250\r\nFokusavimas 	\r\nMetodas: Greitas fazinis fokusavimas\r\nTaškai: Fokusavimas visame kadre\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas\r\nEkranėlyje: Yra, Greitas fokusavimas, veido atpažinimo funkcija, lietimu nurodant ekranėlyje\r\nSkaitmeninės galimybės 	\r\nProgramos: Siužetinės programos, kūrybiniai filtrai, panoramos fotografavimas, HDR, fotofilmo fotografavimas\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo: 4K kokybe, MPG4/H264, AVCHD formatu\r\nVideo formatai: 4K/30p/25p/24p\r\n1920x1080/120p/100p/160p/50p/30p/25p/24p\r\nGarsas:	Taip, stereo, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne\r\nLaikmenos: SD, SDHC, SDXC, MS PRO, MS PRO Duo, Du lizdai, UHS-I, UHS-II\r\nJungtys: USB2, HDMI\r\nBelaidės jungtys ir valdymas: WiFi, nuotolinis fotoaparto valdymas WiFi, NFC, Bluetooth, valdymas laidu\r\nKorpusas 	\r\nDydis: 	Sisteminis - su keičiamais objektyvais\r\nSpalvos: Juoda\r\nAtsparus: Atsparus drėgmei ir dulkėms, magnio lydinio korpusas\r\nIeškiklis: Elektroninis,\r\ndidinimas: 0.78x, rodo 100% vaizdo,\r\nturi 3.7 mil. taškų\r\nLCD ekranas: 8.1 cm, 1440 tūkst. taškų, sukiojamas, valdymas lietimu\r\nAkumuliatorius:	Ličio akumuliatorius: NP-FZ100\r\nAkumuliatoriaus talpa: 	Pakanka 650 nuotraukų\r\nMatmenys: 127x96x74 mm\r\nSvoris: 657 g', 2329),
(16, 'Sisteminiai fotoaparatai', 'Canon', 2020, 'EOS R6', 'canon-eos-r6.png', 'Parametrai 	\r\nVaizdo taškai: 	20 mpix, 5184 x 3888\r\nJutiklio dydis:	43 mm. (FF)\r\nVaizdo santykis: 1:1, 4:3, 3:2, 16:9\r\nJautrumas: 100-102400 (204800) ISO\r\nIšlaikymas: 1/8000-30 sek,\r\n+ greitas elektroninis užraktas\r\nStabilizavimas:	Taip, jutiklis\r\nFoto serijos: Fokusuojant:\r\n12 kadrai per sek.,\r\nBe AF: 20 k/s\r\nRankiniai nustatymai: Ekspozicijos korekcija, Baltos balansas, Išlaikymas, Diafragma, Jautrumas ISO, yra programų pasirinkimo žiedas\r\nBlykstė: Išorinė, Nuotolinė valdoma, X-sync:1/200s\r\nFokusavimas 	\r\nMetodas: Greitas fazinis fokusavimas\r\nTaškai:	Fokusavimas visame kadre\r\nRežimai: Automatinis su pašvietimu, rankinis (objektyvo žiedas), fokusavimo sekimas\r\nEkranėlyje: Yra, Greitas fokusavimas, veido atpažinimo funkcija, lietimu nurodant ekranėlyje\r\nSkaitmeninės galimybės 	\r\nProgramos: Siužetinės programos, HDR, fotofilmo fotografavimas\r\nVaizdo formatai: JPG, RAW, AdobeRGB\r\nVideo: 	4K kokybe, MPG4/H264 formatu\r\nVideo formatai: 4K/60p\r\n1920x1080/120p\r\nGarsas:	Taip, galimas išorinis stereo mikrofonas, ausinių lizdas\r\nGPS imtuvas: Ne\r\nLaikmenos: SD, SDHC, SDXC, Du lizdai, UHS-I, UHS-II\r\nJungtys: USB3.1, HDMI\r\nBelaidės jungtys ir valdymas: WiFi, nuotolinis fotoaparto valdymas WiFi, Bluetooth, valdymas laidu\r\nKorpusas 	\r\nDydis: Sisteminis - su keičiamais objektyvais\r\nSpalvos: Juoda\r\nAtsparus: Nesandarus, magnio lydinio korpusas\r\nIeškiklis: Elektroninis\r\ndidinimas: 0.76x, rodo 100% vaizdo,\r\nturi 3.7 mil. taškų\r\nLCD ekranas: 8.1 cm, 1620 tūkst. taškų, sukiojamas, valdymas lietimu\r\nAkumuliatorius:	Ličio akumuliatorius: LP-E6NH\r\nAkumuliatoriaus talpa: 	Pakanka 360 nuotraukų\r\nMatmenys: 138x98x88 mm\r\nSvoris: 680 g', 2589),
(17, 'Objektyvai', 'Nikon', 2019, 'NIKKOR Z 85mm f/1.8 S', 'nikkor-z-85.png', 'Židinio nuotolis: 85mm\r\nDiafragma: f/1.8\r\nLęšiai/grupės: 12/8\r\nDiafragmos lapeliai: 9\r\nMin. fokusavimas: 80cm\r\nMakro didinimas: 0.12x\r\nStabilizavimas: Ne\r\nFiltro diametras: 67mm\r\nMatmenys: 75x99mm\r\nSvoris: 470g', 789),
(18, 'Objektyvai', 'Canon', 2020, 'RF 24-105mm f/4.0-7.1 IS STM', 'canon-rf-24-105_.png', 'Židinio nuotolis: 24-105mm\r\nDiafragma: f/4.0-7.1\r\nLęšiai/grupės: 13/11\r\nDiafragmos lapeliai: 7\r\nMin. fokusavimas: 13cm\r\nMakro didinimas: 0.50x\r\nStabilizavimas: 5 žingsniai\r\nFiltro diametras: 67mm\r\nMatmenys: 77x89mm\r\nSvoris: 395g', 322),
(19, 'Filtrai', 'K&F Concept', 2018, '77mm kintamo tamsumo ND Filtras ND2 - ND32', 'k&f-nd77.png', 'Skersmuo: 77 mm\r\nStoris: 7.3 mm\r\nMedžiaga: Optinis stiklas\r\n', 58),
(20, 'Filtrai', 'K&F Concept', 2018, '82mm MC UV Apsauginis filtras su atspariu subraižymams stiklu ', 'k-and-f-uv-82_.jpg', 'Skersmuo: 82 mm\r\nPralaidumas: 0.94\r\nStoris: 3.3 mm\r\nMedžiaga: Optinis stiklas', 8),
(21, 'Filtrai', 'K&F Concept', 2019, 'XB41 77mm Kintamo tamsumo ND ir CPL Filtras', 'k-and-f-xb41.png', 'Skersmuo: 77 mm\r\nStoris: 9.3 mm\r\nMedžiaga: Optinis stiklas\r\n', 71),
(22, 'Nuotolinio valdymo pulteliai', 'Rollei', 2016, 'Nuotolinis pultelis Nikon fotoaparatms', 'rollei-remote.png', 'Dydis: 18 x 40 x 155 mm\r\nSvoris: 0.08 Kilograms\r\nSpalva: Juoda\r\n ', 25),
(23, 'Apšvietimas', 'Aputure', 2019, 'Amaran MC RGB video šviesa', 'aputure-amaran.png', 'Baltos šviesos balansas: 3200K-6500K\r\nPakrovimo jungtis: USB-C\r\nSpalvų atitikimo indeksas: CRI 96\r\nBaterijos talpa: 2600 mAh\r\nSvoris: 130g', 102),
(24, 'Apšvietimas', 'Aputure', 2019, '300d Mark II video šviesa', 'aputure-300d.png', 'Baltos šviesos balansas: 5500K\r\nSpalvų atitikimo indeksas: CRI 96\r\nMaksimalus energijos naudojimas: 350W', 1202),
(25, 'Apšvietimas', 'Aputure', 2018, 'Light Dome II Softbox', 'aputure-softbox.png', 'Svoris: 0.5kg\r\nDydis: 30 x 15 x 30 cm', 263),
(29, 'Apšvietimas', 'Neewer', 2016, '700w Softbox rinkinys', 'neewer-700w.png', 'Dydis: 76 x 27.99 x 18.99 cm\r\nSvoris: 5.02 kg', 63),
(31, 'Krepšiai', 'K&F Concept', 2018, 'Foto kuprinė', 'k-and-f-kuprine1.jpg', 'Svoris:	1.18 kg\r\nDydis: 43 x 28 x 14 cm\r\nTalpa: telpa 2 fotoaparatai ir 4 objektyvai\r\nAtsparumas: neperšlampama \r\n', 46),
(32, 'Krepšiai', 'K&F Concept', 2020, 'Foto kuprinė', 'k-and-f-kuprine2.jpg', 'Spalva: Mėlyna\r\nAtsparumas: neperšlampama', 71),
(33, 'Krepšiai', 'TARION', 2018, 'Foto kuprinė', 'tarion-kuprine.jpg', 'Dydis: 29 x 16 x 45.5 cm\r\nAtsparumas: neperšlampama', 61),
(34, 'Krepšiai', 'BAGSMART', 2019, 'Foto kuprinė', 'bagsmart-kuprine.jpg', 'Dydis: 30 x 19 x 40 centimetres\r\nSpalva: Juoda\r\nAtsparumas: neperšlampama', 54),
(35, 'Trikojai', 'K&F Concept', 2019, 'Trikojis', 'k&f-trikojis.jpg', 'Dydis: 52 x 13.2 x 13 cm. Svoris: 1.6 Kilograms', 74);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `uzsakymas`
--

CREATE TABLE `uzsakymas` (
  `Uzsakymo_id` int(5) NOT NULL,
  `Prekes_id` int(5) NOT NULL,
  `Kiekis` int(3) NOT NULL,
  `Vartotojo_id` int(5) NOT NULL,
  `Pirkimo_data` date NOT NULL,
  `Busena` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `uzsakymas`
--

INSERT INTO `uzsakymas` (`Uzsakymo_id`, `Prekes_id`, `Kiekis`, `Vartotojo_id`, `Pirkimo_data`, `Busena`) VALUES
(6, 1, 5, 1, '2020-12-22', 'Neįvykdytas'),
(7, 1, 1, 2, '2020-12-22', 'Neįvykdytas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojas`
--

CREATE TABLE `vartotojas` (
  `Vartotojo_id` int(5) NOT NULL,
  `El_pastas` varchar(100) COLLATE utf8_bin NOT NULL,
  `Vardas` varchar(100) COLLATE utf8_bin NOT NULL,
  `Pavarde` varchar(100) COLLATE utf8_bin NOT NULL,
  `Telefono_nr` varchar(20) COLLATE utf8_bin NOT NULL,
  `Adresas` text COLLATE utf8_bin NOT NULL,
  `Slaptazodis` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `vartotojas`
--

INSERT INTO `vartotojas` (`Vartotojo_id`, `El_pastas`, `Vardas`, `Pavarde`, `Telefono_nr`, `Adresas`, `Slaptazodis`) VALUES
(1, 'marius.krenevicius@gmail.com', 'Marius', 'Krenevičius', '+37063634410', 'Žėručio g. 24-11', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(2, 'a@b.c', 'a', 'b', '+37061234567', 'hello', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `issaugota_preke`
--
ALTER TABLE `issaugota_preke`
  ADD PRIMARY KEY (`Issaugotos_p_id`),
  ADD KEY `Prekes_id` (`Prekes_id`),
  ADD KEY `Vartotojo_id` (`Vartotojo_id`);

--
-- Indexes for table `produktas`
--
ALTER TABLE `produktas`
  ADD PRIMARY KEY (`Prekes_id`);

--
-- Indexes for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  ADD PRIMARY KEY (`Uzsakymo_id`),
  ADD KEY `Prekes_id` (`Prekes_id`),
  ADD KEY `Vartotojo_id` (`Vartotojo_id`);

--
-- Indexes for table `vartotojas`
--
ALTER TABLE `vartotojas`
  ADD PRIMARY KEY (`Vartotojo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issaugota_preke`
--
ALTER TABLE `issaugota_preke`
  MODIFY `Issaugotos_p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produktas`
--
ALTER TABLE `produktas`
  MODIFY `Prekes_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  MODIFY `Uzsakymo_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vartotojas`
--
ALTER TABLE `vartotojas`
  MODIFY `Vartotojo_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `issaugota_preke`
--
ALTER TABLE `issaugota_preke`
  ADD CONSTRAINT `issaugota_preke_ibfk_1` FOREIGN KEY (`Prekes_id`) REFERENCES `produktas` (`Prekes_id`),
  ADD CONSTRAINT `issaugota_preke_ibfk_2` FOREIGN KEY (`Vartotojo_id`) REFERENCES `vartotojas` (`Vartotojo_id`);

--
-- Apribojimai lentelei `uzsakymas`
--
ALTER TABLE `uzsakymas`
  ADD CONSTRAINT `uzsakymas_ibfk_1` FOREIGN KEY (`Prekes_id`) REFERENCES `produktas` (`Prekes_id`),
  ADD CONSTRAINT `uzsakymas_ibfk_2` FOREIGN KEY (`Vartotojo_id`) REFERENCES `vartotojas` (`Vartotojo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
