-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2017 at 09:39 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conjura`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(10) NOT NULL,
  `college_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`) VALUES
(100, 'Invalid College'),
(10001, 'Sanmuganathan Engineering Coll'),
(10002, 'ABV IIITM Gwalior'),
(10003, 'ACE'),
(10004, 'Achariya College of  Engineeri'),
(10006, 'Adi Shankara Institute of Engi'),
(10007, 'Ahalia School of Engineering'),
(10008, 'AISAT'),
(10009, 'AIT Pune'),
(10010, 'AL AMEEN ENGINEERING COLLEGE'),
(10011, 'Al Azhar College of Engineerin'),
(10012, 'Alagappa Chettiar College of E'),
(10013, 'Allenhouse Institute of Techno'),
(10014, 'ALSALAMA INSTITUTE OF ARCHITEC'),
(10015, 'Amal Jyothi College Of Enginee'),
(10016, 'Ambedkar Institute of Advanced'),
(10017, 'AMITY GLOBAL BUSINESS SCHOOL'),
(10018, 'Ammini College of Engineering'),
(10019, 'Amrita School of Arts and Scie'),
(10020, 'AMRITA SCHOOL OF ENGINEERING'),
(10021, 'Amrita Vishwa Vidhyapeetham'),
(10022, 'AMS Engineering College Chenna'),
(10023, 'ARMY INSTITUTE OF TECHNOLOGY'),
(10024, 'Army Public School, Barrackpor'),
(10025, 'ASADI'),
(10026, 'ASIAN COLLEGE'),
(10027, 'Asian School of Architecture a'),
(10028, 'Awh engineering college'),
(10029, 'B.V. Bhoomaraddi College of En'),
(10030, 'B.V.M'),
(10031, 'BABA'),
(10032, 'Babu Banarasi Das National Ins'),
(10033, 'Baithul Izza'),
(10034, 'Bannari Amman Institute of Tec'),
(10035, 'Bearys Institute of Technology'),
(10036, 'BEC'),
(10037, 'Bharathmatha CMI Public School'),
(10038, 'Bharatiya Vidya Bhavan'),
(10039, 'BHAVANS'),
(10040, 'BHAVANS ADARSHA VIDYALAYA'),
(10041, 'BHAVANS CHEVAYAR'),
(10042, 'Bhavans Girinagar'),
(10043, 'Bhavans Varuna'),
(10044, 'BHAVANS VIDYA MANDIR'),
(10045, 'Birla Vidya Niketan'),
(10046, 'BISET(Moga, Punjab)'),
(10047, 'BIT Mesra'),
(10048, 'BIT SINDRI'),
(10049, 'BITS'),
(10050, 'BITS Pilani'),
(10051, 'BMS COLLEGE OF ENGINEERING'),
(10052, 'Canara Engineerinh College'),
(10053, 'Capital College of Architectur'),
(10054, 'CEMP'),
(10055, 'CENTRE FOR MANAGEMENT STUDIES'),
(10056, 'CET'),
(10057, 'CHACKO'),
(10058, 'Chameli Devi Group of Institut'),
(10059, 'Chandigarh university'),
(10060, 'Chennai Mathematical Institute'),
(10061, 'Chettinad Vidyashram'),
(10062, 'CHOICE SCHOOL'),
(10063, 'Christ College , Irinjalakuda'),
(10064, 'Ckdy'),
(10065, 'CMS College, Kottayam'),
(10066, 'COCHIN COLLEGE OF ENGINEERING '),
(10067, 'COCHIN REFINERY SCHOOL'),
(10068, 'College Of Engineering Trivand'),
(10069, 'College of Applied Science , T'),
(10070, 'College of Applied Science Ner'),
(10071, 'College of Co Operation Bankin'),
(10072, 'College of Engineering'),
(10073, 'COLLEGE OF ENGINEERING , ADOOR'),
(10074, 'COLLEGE OF ENGINEERING AND MAN'),
(10075, 'COLLEGE OF ENGINEERING MUNNAR'),
(10076, 'College Of Engineering Vadakar'),
(10077, 'College of Engineering, Poonja'),
(10078, 'COLLEGE OF ENGINEERING,CUSAT'),
(10079, 'COLLEGE OF ENGINEERING,TVPM'),
(10080, 'COLLEGE OF ENGNIEERING KARUNAG'),
(10081, 'College Of Technology And Engi'),
(10082, 'Coorg Institute of Technology'),
(10083, 'CSI College of Engineering'),
(10084, 'CSI INSTITUTE OF TECHNOLOGY'),
(10085, 'CUSAT'),
(10086, 'DA-IICT'),
(10087, 'DAYAPURAM RESIDENTIAL SCHOOL'),
(10088, 'Delhi Public School'),
(10089, 'Delhi Technological University'),
(10090, 'DG COLLEGE OF ARCHITECTURE'),
(10091, 'DGBNF'),
(10092, 'DHAANISH AHMED INSTITUTE OF TE'),
(10093, 'Dhirubhai Ambani Institute of '),
(10094, 'DR Mahalingam college of Engin'),
(10095, 'Dr. B. R. Ambedkar National In'),
(10096, 'DTU'),
(10097, 'EKC College of Architecture'),
(10098, 'Ekc Technical Campus'),
(10099, 'ERANAD KNOWLEDGE CITY'),
(10100, 'FAROOK COLLEGE'),
(10101, 'Federal Institute of Science a'),
(10102, 'FEROKE COLLEGE'),
(10103, 'FISAT'),
(10104, 'FOCUS INSTITUTE OF SCIENCE AND'),
(10105, 'Fr. C. Rodrigues Institute of '),
(10106, 'G H Patel College of Engineeri'),
(10107, 'G pullareddy engineering colle'),
(10108, 'Galgotias University'),
(10109, 'GBHSS Manjeri'),
(10110, 'GCC Trissur'),
(10111, 'GEC calicut'),
(10112, 'GEC Idukki'),
(10113, 'GEC KOZHIKODE'),
(10114, 'GEC palakad'),
(10115, 'GEC THRISSUR'),
(10116, 'GEC WAYANAD'),
(10117, 'GECB'),
(10118, 'GECT'),
(10119, 'GHSC'),
(10120, 'GIITS'),
(10121, 'Gitam University'),
(10122, 'Gov.engineering college kozhik'),
(10123, 'Governement Engineering Colleg'),
(10124, 'GOVERNMENT COLLEGE OF ENGINEER'),
(10125, 'GOVERNMENT ENGINEERING COLLEGE'),
(10126, 'GOVERNMENT POLYTECHNIC COLLEGE'),
(10127, 'GOVT BRENNEN COLLEGE'),
(10128, 'GOVT T.D MEDICAL COLLEGE,ALAPP'),
(10129, 'Govt. MODEL ENGINEERING COLLEG'),
(10130, 'Govt. Poly Technic College, Pe'),
(10131, 'Govt. T D Medical College Alle'),
(10132, 'GPTC PERINTHALMANNA'),
(10133, 'HOLY CROSS H.S.S. CHERPUNKAL'),
(10134, 'HOLY KINGS COLLEGE OF ENGINEER'),
(10135, 'HSS FOR BOYS PUNALUR'),
(10136, 'HSVN'),
(10137, 'IEM'),
(10138, 'IHRD CAS Thiruvambady'),
(10139, 'IIEST, SHIBPUR'),
(10140, 'IIIT ALLAHABAD'),
(10141, 'IIIT Gwalior'),
(10142, 'IIIT Hyderabad'),
(10143, 'IIIT KOTA'),
(10144, 'IIIT RGUKT RK VALLEY'),
(10145, 'IIITDM chennai'),
(10146, 'IIITM K'),
(10147, 'IIITMKT'),
(10148, 'IIT BHU'),
(10149, 'iit bombay'),
(10150, 'IIT Indore'),
(10151, 'IIT Jodhpur'),
(10152, 'IIT Kanpur'),
(10153, 'IIT kharagpur'),
(10154, 'IIT MADRAS'),
(10155, 'IIT PALAKAD'),
(10156, 'IIT ROORKEE'),
(10157, 'ILAHIA SCHOOL OF SCIENCE AND T'),
(10158, 'Indian Institute of Engineerin'),
(10159, 'Indian Institute of Informatio'),
(10160, 'INDIAN INSTITUTE OF SPACE SCIE'),
(10161, 'Indian Institute of Technology'),
(10162, 'Indian School of Mines Dhannad'),
(10163, 'Institute of Chemical Technolo'),
(10164, 'Institute of Engineering and M'),
(10165, 'ISM-DHANBAD'),
(10166, 'IT GGU bilaspur'),
(10167, 'J.J Collge of Engineering and '),
(10168, 'JADAVPUR UNIVERSITY'),
(10169, 'JAWAHARLAL COLLEGE OF ENGINEER'),
(10170, 'Jaypee Institute of Informatio'),
(10171, 'JDT Islam calicut'),
(10172, 'JHSHS'),
(10173, 'JNASC Edavanna'),
(10174, 'JntuA'),
(10175, 'JYOTHI ENGINEERING COLLEGE'),
(10176, 'K.L.O university'),
(10177, 'Kakatiya institute of technolo'),
(10178, 'kamla nehru institute of techn'),
(10179, 'Karpagam College of Engineerin'),
(10180, 'KENDRA VIDYALAYA KELTRON NAGAR'),
(10181, 'KENDRIYA VIDYALAYA CALICUT'),
(10182, 'kidorobotics'),
(10183, 'KIT, Kolhapur'),
(10184, 'Kj Somaiya College of Engg'),
(10185, 'KMCT'),
(10186, 'Kumaraguru College of Technolo'),
(10187, 'KUNNAMANGALAM HSS'),
(10188, 'Kurian Sibi'),
(10189, 'KV NO 1 CALICUT'),
(10190, 'LBSCE Kasargod'),
(10191, 'M A College ramapuram'),
(10192, 'M S Ramaiah Institute of Techn'),
(10193, 'M. e. s college of engineering'),
(10194, 'M.CAP'),
(10195, 'MA COLLEGE OF ENGINEERING KOTH'),
(10196, 'MADIN POLYTECHNIC OLLEGE'),
(10197, 'MADRAS ROCKING INSTITUTE'),
(10198, 'MahaLakshmi'),
(10199, 'MANAKULA VINAYAR INSTITUTE OF '),
(10200, 'MANGALAM COLLEGE OF ENGINEERIN'),
(10201, 'Mangalore institute of technol'),
(10202, 'Manipal Institute of Technolog'),
(10203, 'MANIPAL UNIVERSITY'),
(10204, 'MANIT, Bhopal'),
(10205, 'MANIT,Bhopal'),
(10206, 'MAR BASELIOS COLEGE'),
(10207, 'MAR IVANIOS COLLEGE'),
(10208, 'Mar Thoma School Of Management'),
(10209, 'MARIAN COLLEGE OF ENGINEERING'),
(10210, 'MEA engineering collage'),
(10211, 'MEC'),
(10212, 'MES college'),
(10213, 'Mes School Pattambi'),
(10214, 'MESCE'),
(10215, 'MESE'),
(10216, 'MIT , Pune'),
(10217, 'MITS,GWALIOR'),
(10218, 'MKCE'),
(10219, 'MSA'),
(10220, 'MSIT'),
(10221, 'MUTHOOT INSTITUTE OF TECHNOLOG'),
(10222, 'MVJ College of Engineering'),
(10223, 'National Institute of technolo'),
(10224, 'National institute of technolo'),
(10225, 'NATIONAL INSTITUTE OF TECHNOLO'),
(10226, 'NCERC'),
(10227, 'Nehru college of engineering'),
(10228, 'Nehru Ottapalam'),
(10229, 'NIELIT'),
(10230, 'NIFT Banglore'),
(10231, 'Nirmala College , Muvattupuzha'),
(10232, 'NIT Durgapur'),
(10233, 'NIT Goa'),
(10234, 'NIT Kurukshetra'),
(10235, 'NIT MEGHALAYA'),
(10236, 'NIT Patna'),
(10237, 'NIT Raipur'),
(10238, 'NIT SIKKIM'),
(10239, 'NIT Silchar'),
(10240, 'NIT Srinagar'),
(10241, 'NIT Surathkal'),
(10242, 'NIT WARANGAL'),
(10243, 'NIT-H'),
(10244, 'NITPY'),
(10245, 'NMIMS'),
(10246, 'NMIT'),
(10247, 'Noorul Islam College of Atrs &'),
(10248, 'NORTH MALABAR INSTITUTE OF TEC'),
(10249, 'NSIT'),
(10250, 'NSS COLLEGE OF ENGINEERING'),
(10251, 'OAS Institute of technology an'),
(10252, 'P.A COLLEGE OF ENGINEERING'),
(10253, 'PEEKEY CICS ARTS AND SCIENCE C'),
(10254, 'PES INSTITUTE OF TECHNOLOGY'),
(10255, 'Pondicherry university'),
(10256, 'Pragati Engineering College'),
(10257, 'Providence Womence College'),
(10258, 'PRS COLLEGE OF ENGINEERING,NEY'),
(10259, 'PSIT, Kanpur'),
(10260, 'PSNA College'),
(10261, 'Puliyapparamb Hss kodunthirapu'),
(10262, 'Punjab Engieenering Collage PE'),
(10263, 'PWC'),
(10264, 'R.V.R & J.C college of enginee'),
(10265, 'Rajalakshmi engineering colleg'),
(10266, 'RAJAS ENGINEERING COLLEGE'),
(10267, 'Rajiv Ghandhi Institute of Tec'),
(10268, 'Ranganathan Architecture Colle'),
(10269, 'Rit kottayam'),
(10270, 'Royal College of Engineering a'),
(10271, 'RYV'),
(10272, 'S N G'),
(10273, 'SACRED HEART H.S.S,THIRUVAMBAD'),
(10274, 'Safi Institute of Advanced Stu'),
(10275, 'Sahrdaya'),
(10276, 'SAHYADRI'),
(10277, 'SAINTGITS COLLEGE OF ENGINEERI'),
(10278, 'SAMBHRAM INSTITUTE OF TECHNOLO'),
(10279, 'SANTHINIKETHAN PUBLIC SCHOOL'),
(10280, 'SARASWATHI VIDYANIKETHAN PUBLI'),
(10281, 'SARDAR PATEL INSTITUTE OF TECH'),
(10282, 'Sastra Univeristy'),
(10283, 'SB College'),
(10284, 'SCET'),
(10285, 'SCHOOL OF ENGG CUSAT'),
(10286, 'SCMS'),
(10287, 'SCT'),
(10288, 'SFS Public School'),
(10289, 'SIET'),
(10290, 'Sinhgad Institute Of Technolog'),
(10291, 'Sir JJ Institute of Applied Ar'),
(10292, 'SJCET'),
(10293, 'Sneha College of Architecture'),
(10294, 'SNGCET'),
(10295, 'SNGIST ASC'),
(10296, 'SNGS College Pattambi'),
(10297, 'SNGS pattambi'),
(10298, 'SNS College of Technology'),
(10299, 'SOE CUSAT'),
(10300, 'SOET'),
(10301, 'SREE CHITHRA THIRUNAL COLLEGE '),
(10302, 'SREE NARAYANA'),
(10303, 'Sree Vellapally nadeshan colle'),
(10304, 'SREE VIDYANIKETHAN ENGINEERING'),
(10305, 'SRI KRISHNA COLLEGE OF ENGINEE'),
(10306, 'Sri Ramakrishna Mission Vidyal'),
(10307, 'SRI VELLAPALLY COLLEGE OF ENGI'),
(10308, 'SRM UNIVERSITY'),
(10309, 'SS College'),
(10310, 'SSET'),
(10311, 'St Joseph''s College of Enginee'),
(10312, 'St thomas'),
(10313, 'St. Peters University Chennai'),
(10314, 'St. THOMAS RESIDENTIAL SCHOOL'),
(10315, 'ST. XAVIER COLLEGE'),
(10316, 'St.Joseph'),
(10317, 'Sullamussalam Science College'),
(10318, 'SV COLLEGE OF ENGINEERING'),
(10319, 'TKM College Of Engineering'),
(10320, 'Techno India Saltlake'),
(10321, 'Thadomal Shahani Engineering C'),
(10322, 'THE INSTITUTE OF CHARTERED ACC'),
(10323, 'The National Institute Of Engi'),
(10324, 'Thejus college of architecture'),
(10325, 'Thejus Engineering college'),
(10326, 'Thiagarajar college of enginee'),
(10327, 'Thunchath Ezhuthachan Malayala'),
(10328, 'Toc H Institute of Science and'),
(10329, 'UIT Pirappancode Trivandrum'),
(10330, 'UKF CET'),
(10331, 'University College of Engineer'),
(10332, 'University of Hyderabad'),
(10333, 'University School of Informati'),
(10334, 'V.M.K.V.Engineering College'),
(10335, 'VAST'),
(10336, 'VEDA VYASA INSTITUTE OF TECHNO'),
(10337, 'Vellore Institure of Technolog'),
(10338, 'Vidya Academy of Science & Tec'),
(10339, 'Vidyalankar Institute Of Techn'),
(10340, 'vikas'),
(10341, 'vimal jyothi'),
(10342, 'VISAT'),
(10343, 'Viswajyothi College'),
(10344, 'VIT'),
(10345, 'VNIT Nagpur'),
(10346, 'VVIT'),
(10347, 'WEST BENGAL UNIVERSITY OF TECH'),
(10348, 'National Institue Of Technolog'),
(10349, 'SMV HSS POONJAR'),
(10350, 'Rajagiri College Of Engineerin'),
(10351, 'Indira Gandhi National Open Un'),
(10352, 'College of Engineering Attinga'),
(10353, 'IISER TVM'),
(10354, 'Guruvayur Devaswom English Med'),
(10355, 'Kongu Engineering College'),
(10356, 'Indian Institute Of Informatio'),
(10357, 'TVS Matriculation Higher Secon'),
(10358, 'Govt. I.T.I. Ettumanoor'),
(10359, 'Heera college of engineering a'),
(10360, 'Sreepathy Institute Of Managem'),
(10361, 'M Dasan Institute Of Technolog'),
(10362, 'University College of Engineer'),
(10363, 'Govt. I.T.I Ettumanoor'),
(10364, 'Palghat Lions School'),
(10365, 'IISER Thiruvanathapuram'),
(10366, 'College of Architecture Trivan'),
(10367, 'NetSec Technology, Calicut'),
(10368, 'Acharya Institute Of Technolog'),
(10370, 'Mangalam School Of Architectur'),
(10371, 'TKM Institute Of Technology'),
(10372, 'Lakireddy Balireddy College Of'),
(10373, 'Marian College of Architecture'),
(10374, 'Chinmaya Vidyalaya Kozhikode'),
(10375, 'Younas College Of Engineering'),
(10376, 'Madras Christian College, Chen'),
(10377, 'Sacred Hearts English Medium S'),
(10378, 'St Mary''s Higher Secondary Sch'),
(10379, 'IES College Of Architecture, C'),
(10380, 'IES College Of Engineering, Ch'),
(10381, 'Rajadhani Institute Of Enginee'),
(10382, 'Holy Cross Institute Of Manage'),
(10383, 'Sri Manakula Vinayagar Enginee'),
(10384, 'Ilahia College Of Engineering '),
(10385, 'Calicut Medical College'),
(10386, 'Adhiparasakthi College of Engi'),
(10387, 'sree budha college of engineer'),
(10388, 'Assumption college,changanesse'),
(10389, 'MBC PEERMADE'),
(10390, 'Jawaharlal Nehru Architecture '),
(10391, 'SATHYABAMA UNIVERSITY,CHENNAI'),
(10392, 'College Of Applied Science Vad'),
(10393, 'Kerala Law Academy Law College'),
(10394, 'karunya University'),
(10395, 'college of engineering,chengan'),
(10396, 'NIT CALICUT'),
(10397, 'zamorians guruvayurappan colle'),
(10398, 'BISHOP JEROME SCHOOL OF ARCHIT'),
(10399, 'RV College Of Architecture'),
(10400, 'CE Aranmula'),
(10401, 'siena college of professional '),
(10402, 'erode sengunthar engineering c'),
(10403, 'C.H.M.M COLLEGE FOR ADVANCED S'),
(10404, 'CAARMEL ENGINEERING COLLEGE'),
(10405, 'CHRIST NAGAR COLLEGE MARANALLO'),
(10406, 'COLLEGE OF ENGINEERING AND MAN'),
(10407, 'COLLEGE OF ENGINEERING PERUMON'),
(10408, 'COLLEGE OF ENGINEERING KALLOOP'),
(10409, 'COLLEGE OF ENGINEERING TRIKARI'),
(10410, 'COLLEGE OF ENGINEERING KIDANGO'),
(10411, 'COLLEGE OF ENGINEERING CHERTHA'),
(10412, 'CUCEK'),
(10413, 'DB COLLEGE SASTHAMCOTTA'),
(10414, 'GOVERNMENT COLLEGE OF ENGINEER'),
(10415, 'GEC BARTON HILL'),
(10416, 'HINDHUSTHAN COLLEGE OF ENGINEE'),
(10417, 'ICA'),
(10418, 'KVM COLLEGE OF ENGINEERING'),
(10419, 'ICET MUVATTUPUZHA'),
(10420, 'LBS INSTITUTE OF TECHNOLOGY FO'),
(10421, 'LOYOLA COLLEGE'),
(10422, 'MESITAM'),
(10423, 'MUSALIAR COLLEGE OF ENGINEERIN'),
(10424, 'MOUNT ZION COLLEGE OF ENGINEER'),
(10425, 'NIRMALA COLLEGE OF ENGINEERING'),
(10426, 'AALIM MUHAMMED SALEGH ACADEMY '),
(10427, 'ASIET'),
(10428, 'BCM COLLEGE'),
(10429, 'ASSUMPTION COLLEGE CHANGANACHE'),
(10430, 'BASELIUS COLLEGE'),
(10431, 'BISHOP JEROME INSTITUTE'),
(10432, 'BISHOP MOORE COLLEGE MAVELIKKA'),
(10433, 'COCHIN COLLEGE OF ENGINEERING '),
(10434, 'DAYANANDA SAGAR COLLEGE'),
(10435, 'GOVERNMENT COLLEGE OF ARCHITEC'),
(10436, 'GOVT POLYTECHNIC COLLEGE KOTTI'),
(10437, 'IIST'),
(10438, 'LAL BAHADUR SHASTRI INSTITUTE '),
(10439, 'MALABAR COLLEGE OF ENGINEERING'),
(10440, 'MAR GREGORIOS COLLEGE OF LAW'),
(10441, 'NANDHA ENDINEERING COLLEGE'),
(10442, ''),
(10443, 'St Gits College of Engineering'),
(10444, 'Muslim Association CE'),
(10445, 'GEC Kannur'),
(10446, 'Govt. Medical College, TVM'),
(10447, 'nirmala college of engineering'),
(10448, 'Nirmala College, Chalakkudy'),
(10449, 'KMP College of Engineering'),
(10450, 'Regional Institute of Aviation'),
(10451, 'College of Eng.  Mgmt, ALP'),
(10452, 'Jai Bharath COMET'),
(10453, 'Don Bosco College,Kottiyam'),
(10454, 'Geetanjali CE,Hyderabad'),
(10455, 'Travancore Medical College QLN'),
(10456, 'MES KALLADI COLLEGE'),
(10457, 'Government law college TVM'),
(10459, 'Thalassery College of Engnn.'),
(10460, 'Avani Institute of Design, CLT'),
(10461, 'college of eng perumon'),
(10462, 'Fathima Matha College'),
(10463, 'PMSA'),
(10464, 'Mannam Memorial NSS College'),
(10465, 'John Cox Memorial'),
(10466, 'Adoor IHRD college of eng'),
(10467, 'Jon Cox Memorial College'),
(10468, 'Institute of Fashion Tech.'),
(10469, 'College Applied ScienceAdoor'),
(10470, 'college of eng muttathara'),
(10471, 'MSNIMT Chavara'),
(10472, 'mohandas college of eng'),
(10473, 'TKM Centre for Higher Learning'),
(10474, 'Baselios Mathews II CE'),
(10475, 'Kongu Engineering College'),
(10476, 'St.Thomas Institute ,Kazhkkutm'),
(10477, 'MES Institute of Tech'),
(10478, 'TKM School of Architecture'),
(10479, 'Chinmaya Vidyapeet, Cochin'),
(10480, 'maharajas college ,ernakulam'),
(10482, 'Govt. HSS, Chathanoor'),
(10483, 'College of Fine Arts, TVM'),
(10484, 'GEC, Kariavattom'),
(10485, 'Sreenarayana Womens,QLN'),
(10486, 'sathyabhama university'),
(10487, 'AJ College,Thonnakkal,TVM'),
(10488, 'Lourde Matha College, TVM'),
(10489, 'Providence Engineering College'),
(10490, 'TKMCAS'),
(10491, 'MOUNT ZION INSTITUTE of S&T'),
(10492, 'Gov.Eng.College, Westhill,CLTl'),
(10493, 'Teams Global Village Academy'),
(10494, 'Chinmaya Mission College,Klzhy'),
(10495, 'ksr institute of technology'),
(10496, 'KSR College of Arts & Sc.'),
(10497, 'Christian College, Chengannur'),
(10498, 'College of Eng& Mgmt, Punnapra'),
(10499, 'KMCT COLLEGE OF ARCHITECTURE'),
(10500, 'open category'),
(10501, 'st. gregorious college'),
(10502, 'govt college of technology, coimbatore'),
(10503, 'Heroit Watt University'),
(10504, 'bharath matha college'),
(10505, 'mar gregarious college of law'),
(10506, 'st. alberts college, ernakulam'),
(10507, 'MMNSS'),
(10508, 'nirmala college, chalakkudy'),
(10509, 'st. joseph devagiri'),
(10510, 'BELIEVERS CHURCH CAARAMEL ENGINEERING COLLEGE, PERUMAL'),
(10511, 'University Institute of Management, Mundakkal, QLN'),
(10512, 'Vels University, Chennai'),
(10513, 'Rras college of Engineering, Chennai'),
(10514, 'National College, Ambalathara'),
(10515, 'St Gregorious College, Kottarakkar'),
(10516, 'Image Creative Education'),
(10517, 'Lisieu Nagar Private Industrial Training Institute,EKM'),
(10518, 'AAT, Banglore'),
(10519, 'MES INSTITUTE OF TECHNOLOGY'),
(10520, 'COLLEGE OF ARCHITECTURE, TRIVANDRUM'),
(10521, 'GOVERNMENT POLYTECHNIC COLLEGE, EZHUCON'),
(10522, 'VKCET'),
(10523, 'trinity college of engineering ,tvm'),
(10524, 'nizar rahim and mark school of arch.'),
(10525, 'Christ Nagar College, TVM'),
(10526, 'Bishop Moore College,Mavelikkara');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `pre_reg` char(2) NOT NULL COMMENT 'y if advance payment required',
  `team` char(2) NOT NULL COMMENT 'y if its a team event',
  `event_display` varchar(50) DEFAULT NULL,
  `lock_event` int(2) DEFAULT '0' COMMENT 'if lock==1 , event is locked',
  `min_part` int(10) NOT NULL DEFAULT '1',
  `cult` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `sno` int(10) NOT NULL,
  `part_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `paid` char(2) NOT NULL,
  `trans_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_participants_spot`
--

CREATE TABLE `event_participants_spot` (
  `sno` int(10) NOT NULL,
  `part_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `trans_id` varchar(15) NOT NULL,
  `attendance` int(2) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `event_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` char(2) NOT NULL,
  `accommodation` char(2) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `paytm`
--

CREATE TABLE `paytm` (
  `sno` int(10) NOT NULL,
  `part_id` int(10) DEFAULT NULL,
  `trans_id` varchar(10) NOT NULL,
  `amt` int(10) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `sno` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `head_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(10) NOT NULL,
  `part_id` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `amt_diff` int(10) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `event_participants_spot`
--
ALTER TABLE `event_participants_spot`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `paytm`
--
ALTER TABLE `paytm`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `trans_id` (`trans_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `trans_id` (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10527;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `event_participants_spot`
--
ALTER TABLE `event_participants_spot`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11000;
--
-- AUTO_INCREMENT for table `paytm`
--
ALTER TABLE `paytm`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
