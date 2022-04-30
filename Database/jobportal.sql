-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 03:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(20) NOT NULL,
  `adm_name` varchar(100) NOT NULL,
  `adm_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_name`, `adm_pass`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `apply_id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `date_applied` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`apply_id`, `user_id`, `emp_id`, `job_id`, `status`, `date_applied`) VALUES
(1, 1, 1, 3, 1, '07-09-20'),
(2, 1, 6, 9, NULL, '04-04-21'),
(3, 1, 2, 7, NULL, '04-04-21'),
(4, 2, 1, 3, NULL, '12-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `eid` int(20) NOT NULL,
  `log_id` int(20) NOT NULL,
  `ename` varchar(100) DEFAULT NULL,
  `etype` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `executive` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `locations` varchar(200) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`eid`, `log_id`, `ename`, `etype`, `industry`, `address`, `pincode`, `executive`, `phone`, `locations`, `profile`, `logo`) VALUES
(1, 8, 'Kott Software Private Limited', 'Company', 'Chemicals/Petro Chemicals/Plastics', 'bandstand,mumbai', '998764', 'vinayak', '998776543', 'india,maharashtara,pune', NULL, 'Kott Software Private Limited1.png'),
(2, 6, 'Parle Agro pvt. Ltd', 'Company', 'FoodProcessing', ' Bangalore, Karnataka', '456987', 'Arun', '789456123', 'India,Karnataka,Bommasandra', NULL, 'Parle Agro pvt. Ltd2.png'),
(3, 2, 'Infosys Pvt Ltd', 'Company', 'Software Services', 'Infosys,\r\nIT Zone,\r\n4 - BE,\r\nBangalore', '458796', 'Ajith', '9145512345', 'India,Karnataka,Bengaluru', 'Infosys is a global leader in consulting, technology, and outsourcing and next-generation services. We enable clients in more than 50 countries to outperform the competition and stay ahead of the innovation curve.', 'Infosys Pvt Ltd3.png'),
(4, 10, 'Deloitte', 'Company', 'Accounting/Finance/Taxation', '82 Nichols Lane\r\nCanyon Country, CA 91387', '783254', 'cristiano ', '77777777', 'india,maharashtara,pune', NULL, 'Deloitte4.png'),
(5, 11, 'WhiteHat Education Technology Pvt. Ltd', 'Company', 'Education/Training/Teaching', 'San Fransisco,LA', '7865489', 'John snow', '778224596', 'India,Maharashtara,Pune', NULL, 'WhiteHat Education Technology Pvt. Ltd5.jpg'),
(6, 12, 'MindSpace Outsourcing Services Pvt. Ltd', 'Company', 'Accounting/Finance/Taxation', '640 N. Cherry Street Fort Walton Beach, FL 32546', ' 400398 ', 'Aditya kadam', '8652364751', 'India,Rajsthan,Jaipur', 'The Best', 'MindSpace Outsourcing Services Pvt. Ltd6.png'),
(7, 13, 'Bertelsmann SE & CO.', 'Company', 'Accessories/Apparel/Fashion Design', '455 White Street Braintree, MA 02184', '900-85-322', 'Bertelsmann Stiftung', '(721) 347-0609', 'india,maharashtara,pune', NULL, 'Bertelsmann SE & CO.7.jpg'),
(8, 14, 'Opaque Ceramics Private Limited', 'Company', 'Ceramics/Sanitaryware', 'california', '405489', 'John smith', '778224596', 'India,Maharashtara,Pune', NULL, 'Opaque Ceramics Private Limited8.png'),
(9, 15, 'International Trade Links', 'Company', 'Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy', 'Dubai', '677541', 'Ajinkya ', '9816239767', 'New Delhi', NULL, 'International Trade Links9.png'),
(10, 16, 'Advanced Engineering Solutions Private Limited', 'Company', 'Engineering/Construction/Steel/Iron', 'Bengaluru / Bangalore', '509326', 'Shardul Thakur', '9654712385', 'Bangalore, Karnataka, India', NULL, 'Advanced Engineering Solutions Private Limited10.png'),
(11, 17, 'Tarare Consulting services Private Limited', 'Company', 'NGO/Social Services', 'Pune', '490762', 'Rohit Sharma', '8893416370', 'Pune, Maharashtra, India', NULL, 'Tarare Consulting services Private Limited11.jpg'),
(12, 18, 'Accenture', 'Company', 'IT/Programming/Tech', 'Mumbai', '400080', 'Aditya', '9865239571', 'Mumbai,Mahaeashtra,India', NULL, 'Accenture12.png'),
(13, 3, 'Sarfarosh Bharat Company', 'Company', 'Biotechnology/Pharmaceutical/Clinical Research', 'Mumbai,India', '400080', 'Keshav', '022-59741365', 'Mumbai,Maharashtra,India', NULL, 'Sarfarosh Bharat Company13.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(20) NOT NULL,
  `eid` int(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `jobdesc` varchar(700) NOT NULL,
  `vacno` int(20) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `basicpay` varchar(100) DEFAULT NULL,
  `fnarea` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `ugqual` varchar(100) DEFAULT NULL,
  `pgqual` varchar(100) DEFAULT NULL,
  `Profile` varchar(500) DEFAULT NULL,
  `postdate` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `eid`, `title`, `jobdesc`, `vacno`, `experience`, `basicpay`, `fnarea`, `location`, `industry`, `ugqual`, `pgqual`, `Profile`, `postdate`, `type`) VALUES
(1, 1, 'Network Administrator', 'Consulting with clients to specify system requirements and design solutionsBudgeting for equipment and assembly costsAssembling new systemsMaintaining existing software and hardware and upgrading any that have become obsoleteWorking in tandem with IT support personnelProviding network administration and support', 3, ' 7 ', 'Rs75000', 'Network Administration', 'Pune,Maharashtra,India', 'IT/Programming/Tech', 'B.Tech/B.E.', 'M.Tech', 'Patience,Technical skills.IT skills,Interpersonal skills,Enthusiasm,Teamworking skills,Initiative,Commitment to quality,Attention to detail.', '09-04-16', 'Full'),
(2, 1, 'Software Engineer', 'The focus of this position is the design and development of the core V-PIL services infrastructure, including custom automation software, job schedulers, data analysis, data visualization, and web development.', 3, '5', 'Rs 1000000', 'Network Virtualizing', 'Bangalore,Karnataka,India', 'IT/Programming/Tech', 'B.Tech/B.E.', 'M.Tech', 'Strong ability in JavaScript.\r\nStrong ability in database design.\r\nExperience developing and executing performance test suites.\r\nStrong test suite development, execution and automation experience.\r\nFamiliarity with Jenkins and knowledge of existing cloud test suites, including Tempest and Rally.\r\nExperience with continuous integration practices.\r\nExperience with Juju, Charms and MAAS.', '15-04-16', 'WFH'),
(3, 1, 'Web Developer', 'Development of interactive websites at microfost', 5, '3', 'Rs 25000', 'Web Development', 'Mumbai,Maharashtra,India', 'Software Services', 'B.Tech/B.E.', 'Not Pursuing Post Graduation', 'Knowledge in ASP.NET, SQL server', '16-04-16', ''),
(4, 1, 'Software Engineer', 'The focus of this position is the design and development of the core V-PIL services infrastructure, including custom automation software, job schedulers, data analysis, data visualization, and web development.', 3, '5', 'Rs 1000000', 'Network Virtualizing', 'Surat,Gujrat,India', 'IT/Programming/Tech', 'B.Tech/B.E.', 'M.Tech', 'Strong ability in JavaScript.\r\nStrong ability in database design.\r\nExperience developing and executing performance test suites.\r\nStrong test suite development, execution and automation experience.\r\nFamiliarity with Jenkins and knowledge of existing cloud test suites, including Tempest and Rally.\r\nExperience with continuous integration practices.\r\nExperience with Juju, Charms and MAAS.', '15-04-16', 'Full'),
(5, 3, 'Android Developer', 'Designing and developing advanced applications for the Android platform. Unit-testing code for robustness, including edge cases, usability, and general reliability. Bug fixing and improving application performance', 4, '1', 'Rs 98000', 'Software Developmen', 'Nagpur,Maharashtra,India', 'Software Services', 'B.Tech/B.E.', 'MCA', 'Java. Java is the programming language that underpins all Android development,\r\nUnderstanding of XML. XML was created as a standard way to encode data for internet-based applications,\r\nAndroid SDK,\r\nAndroid Studio,\r\nAPIs,\r\nDatabases,\r\nMaterial Design', '29-08-20', ''),
(6, 5, 'Assistant Preschool Teacher', 'teaching the students', 4, '2-3', '87000', 'Teaching', 'Chatra,Jharkhand,India', 'Education/Training/Teaching', 'B.ed', 'M.ed', 'A Teacher is responsible for preparing lesson plans and educating students at all levels. Their duties include assigning homework, grading tests, and documenting progress. Teachers must be able to instruct in a variety of subjects and reach students with engaging lesson plans', '4-9-2020', ''),
(7, 2, 'Food Factory Production Packaging', 'Food packaging is packaging for food. A package provides protection, tampering resistance, and special physical, chemical, or biological needs. It may bear a nutrition facts label and other information about food being offered for sale.', 10, '1', '10000', 'Food and Beverages', 'Mumbai,Maharashtra,India', 'FoodProcessing', 'Diploma', 'PG Diploma', 'Food Factory Production Packaging', '5-4-2020', ''),
(8, 6, 'Management Consultant ', 'A Financial Analyst is responsible for the financial planning and analysis of a company, allowing the organisation to make well-informed commercial decisions. At the heart of a Finance Analyst job description should be the ability to determine the best use of resources to achieve business objectives.Management consultants help organizations solve problems, improve business performance, create value and maximize growth. They identify solutions for business troubles and make suggestions for changes to implement.', 3, '3-6 ', '70,000', 'Others', 'Barkot,Uttarakhand,India', 'Consulting/Advisory Services', 'B.com', 'M.com', 'Learn about the client\'s business challenges and technologies to understand their business needs; interview company personnel\r\nReview internal client company data such as financial statements, payroll information, or existing computer systems\r\nOutline the scope of the work and identify and map out schedules, milestones, and required resources to meet the project objectives', '04-01-2020', ''),
(9, 6, 'Account Executive/Manager', 'Account executives work in a sales role, helping to maintain or extend existing accounts (customers) and develop new accounts. ... Depending upon the industry an account executive may progress into enterprise account management, regional or national account managemen', 8, '1-2', '50,000', 'Accounts and Finance', 'Indore,Madhya Pradesh,India', 'Accounting/Banking/Financial Services', 'B.com', '-', 'Working knowledge of particular sales industry,\r\nNetworking and negotiation skills,\r\nVerbal, written, and interpersonal communication skills,\r\nAbility to multitask and work efficiently and effectively to meet required deadlines,', '13-05-2019', ''),
(10, 4, 'Chartered Accountant', 'The Chartered Accountant is responsible for implementing accounting systems and processes, preparing monthly financial reports, controlling the master data of the general ledger, and ensuring compliance with the state revenue service.', 2, '5', '40,000', 'Accounts', 'Coimbatore,Tamil Nadu,India', 'Accounting/Banking/Financial Services', 'B.com', 'M.com', 'general business interest and awareness.\r\nself-motivation and commitment, in order to combine study while working.\r\ncommunication and interpersonal skills.\r\norganisational and time management skills', '18-10-2019', ''),
(11, 7, 'Film/Video Editor', 'As a film/video editor, you', 4, '2-4  ', '50,000', 'Multimedia', 'Chennai,Tamil Nadu,India', 'Multimedia', 'BMM', '-', 'knowledge of media production and communication.the ability to work well with others.knowledge of computer operating systems, hardware and software.to be flexible and open to change.the ability to use your initiative.', '7-2-2020', ''),
(12, 7, 'Interior designer', 'Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such enhancement projects', 2, '3-4', '40,000', 'Designing', 'Mumbai,Maharashtra,India', 'Architectural Services/ Interior Designing', 'BA', '-', 'A creative eye and attention to detail. First and foremost, you\'ll need to be highly creative. ...\r\nTrend identification. ...\r\nKnowledge of sustainable practices. ...\r\nSuperior communication. ...\r\nSketching ability and computer knowledge. ...\r\nOrganization', '22-07-2019', ''),
(13, 2, 'Restaurant Manager', 'Handling the entire restaurant operations, costing, revenues and staffing.', 1, '1-2', '30,000', 'Hotel', 'Gurgaon,Haryana,India', 'Hotels/Food', 'SSC', '-', 'Excellent customer service skills.\r\nCommercial awareness.\r\nFlexibility.\r\nGood interpersonal skills.\r\nCommunication skills', '15-09-2020', ''),
(14, 3, 'Data Analyst', 'The data analyst serves as a gatekeeper for an organization\'s data so stakeholders can understand data and use it to make strategic business decisions. It is a technical role that requires an undergraduate degree or master\'s degree in analytics, computer modeling, science, or math.', 3, '2', '40,000', 'Data handling', 'Bangalore,Karnataka,India', 'Data Science And analyst', 'B.Tech', '-', 'Structured Query Language (SQL)\r\nMicrosoft Excel.\r\nCritical Thinking.\r\nR or Python-Statistical Programming.\r\nData Visualization.\r\nPresentation Skills.\r\nMachine Learning', '17-12-2019', ''),
(15, 6, 'Junior Data Scientist', ' mostly involve being able to work in a team, possessing a passion for data science and data analysis, creating specific systems and tracking how they perform over time, data mining and so on', 6, '1', '20,000', 'Data Handling', 'Mumbai,Maharashtra,India', 'Data Science and analyst', 'B.Tech', '-', 'Probability & Statistics. ...\r\nMultivariate Calculus & Linear Algebra. ...\r\nProgramming, Packages and Softwares. ...\r\nData Wrangling. ...\r\nDatabase Management. ...\r\nData Visualization. ...\r\nMachine Learning / Deep Learning. ...\r\nCloud Computing', '12-10-2020', ''),
(16, 4, 'French Translator', 'Interprets written or spoken material into one or more other languages, ensures meaning and context are maintained, creates glossaries or term dictionaries, possesses knowledge of multiple languages, works with individual clients and corporations.\r\n\r\n', 2, '3-4', '30,000', 'Communication', 'Lonavla,Maharashtra,India', 'Writing/Translation', 'B.Sc', '-', 'a good understanding and in-depth knowledge of language/country-specific cultures, known as localisation. subject matter knowledge specific to the content you\'ll be translating. excellent writing skills and command of grammar. attention to detail combined with the ability to work', '10-5-2020', ''),
(17, 6, 'Digital Marketing Manager', 'Planning digital marketing campaigns, including web, SEO/SEM, email, social media and display advertising\r\nMaintaining our social media presence across all digital channels\r\nMeasuring and reporting on the performance of all digital marketing campaigns', 2, '3', '30,000', 'Sales and marketing', 'Pune,Maharashtra,India', 'Sales/Marketing', 'BMS', '-', 'Video. Video is taking the internet by storm and this isn\'t about to stop. ...\r\nSEO & SEM. ...\r\nContent Marketing. ...\r\nData / Analytics. ...\r\nUnderstand Design-Based Thinking & Planning. ...\r\nBe Tech Savvy', '20-3-2020', ''),
(18, 8, 'Dispatch Executive', '1. Must known with dispatch process.\r\n2. Receiving and dispatching orders for products or deliveries.\r\n3. Proven experience as dispatcher or relevant position.\r\n4. Proficient with purchase order & sales order.\r\n5. Having planning of production & prepare dispatch sheet', 2, '1-3', '180000 - 240000 INR', 'Finance & Accounts', 'Thane,Maharashtra,India', 'Ceramics/Sanitaryware', 'B.com', NULL, 'dispatch process , purchase order & sales order. planning of production , pending ordersheet ,', '6-5-2021', 'Full Time'),
(19, 9, 'Supply & Distribution - Oil & Gas', 'GREETINGS, WE ARE HIRING', 5, '3-5', 'Not Specified', 'Purchase/Logistics/Supply Chain', 'Bandra,Maharashtra,Mumbai', 'Petroleum/Oil and Gas/Power/Non-conventional Energy', 'H.S.C', NULL, 'Record Keeping , Oil Industry , Oil/ Gas/ Petroleum , Tanks , Coordination , Accounting', '7-04-2021', ''),
(20, 5, 'Clinic Manager - Skin care & Wellness Clinic', 'Managing all clinic operations including Team handling of 8-10 employees\r\nFront desk, Admin, Housekeeping, etc.\r\nManaging premium/ high class clients\r\nManaging product count & sales for the branch\r\nSales Report Management', 2, '1-2', '450000 - 600000 INR', 'Personal Care / Beauty / Fitness Service', 'Delhi,', 'Wellness/Fitness/Sports', 'B.M.s', NULL, 'Fashion , clinic management , wellness fitness sports , wellness clinic , Skin Care', '12-03-2021', ''),
(21, 3, 'Accounts & Finance Manager', 'Preparing financial report at various level ( Engagement, Horizontal, Vertical, Center and Org level) Computation of Financial KPIs ( Resource Utilization, Seat Utilization, HC , Revenue Productivity, Deferred Revenue etc) Deep Dive Analysis of Financial performance & discussion with various stakeholders to improve the profitability. Financial Validation of process improvement Projects. Preparing Projection for Future periods Variance Analysis ( Actual Vs Budget Vs Projections) Resource management Reporting & Analysis Higher Management Reporting ( CFO Deck Pack, MC presentation, EC Deck) Segment Reporting & Analysis Large won deals Performance tracking.\r\nPreferred Skills:', 1, '3-5', 'Not Specified', 'Finance & Accounts', 'Andheri, Maharashtra, India', 'Accounting/Banking/Financial Services', 'B.A.F', NULL, 'Finance Manager, Accounts manager plan, organize, direct, control and evaluate the operation of financial and accounting departments. They develop and implement the financial policies and systems of establishments.', '12-02-2021', 'Full'),
(22, 6, 'Law Associate Law Assistant Legal Advisor', 'Need Law Graduates with minimum 1 year of experience ,\r\nGood understanding in Trademark, design and copy right related matter.', 2, '1-5', ' 2,00,000-3,50,000 INR', 'Legal', 'Ghatkopar, Maharashtra, India', 'Law/Legal Firms', 'L.L.B', NULL, ' Jr/Sr Associate', '09-04-2021', ''),
(23, 10, 'Marketing Engineer', '1) To record on daily basis enquiries and quotation sent to prospective client.\r\n2) Follow up routinely with quotations and maintain its track record\r\n3) Maintaining websites and looking at data analytics\r\n4) Interaction with India Mart executives on the quality of leads\r\n5) Filling government tenders with proper technical and commercial details\r\n6) Prepare documentation for inhouse and final client inspection of the product\r\n7) Follow up with clients for payment, commissioning, drawing approvals of the equipment. To do all necessary work required for extracting payment from the client.', 3, '1-3', '160000 - 200000', 'Marketing & Communications ', 'Bangalore,Karnataka,India', 'Engineering/Construction/Steel/Iron', 'B.Tech', NULL, ' Good in negotiations while dealing with customers.\r\nTo initiate new market with Crompton for exhaust fans\r\nF\r\ninding target prospect/companies, key people, websites that provide required content and product information.\r\nTargetting export in Gulf, Middle-East and Asia-Pacific countries.\r\nGenerating leads as per project requirement.', '12-01-2021', 'Full'),
(24, 10, 'Electrical Engineers', 'Designing, maintaining, implementing, or improving electrical instruments, facilities, components, equipment products, or systems for industrial, commercial, or domestic purposes.\r\nPerforming a wide range of engineering tasks by operating computer-assisted design or engineering software and equipment.', 10, '0-5', '250000 - 450000', 'Electrical', 'Vikroli, Maharashtra, India ', 'Electricals/Switchgears', 'B.Tech', NULL, 'Develop and prepare technical specification guideline on drawings according to client requirement.\r\nReview and check technical documents to ensure a high level of accuracy.\r\nCollaborate with technicians, engineers, and contractors to resolve electrical issues that arise during the project lifecycle and revise drawings if needed for submission approval.\r\nPrepare draft of wiring diagrams throughout the project lifecycle.', '15-02-2021', 'Full'),
(25, 4, 'Associate-Telecom Operations', 'Establishes communications systems by installing, operating, and maintaining voice and data telecommunications network circuits and equipment.\r\nPlans network installations by studying customer orders, plans, manuals, and technical specifications; ordering and gathering equipment, supplies, materials, and tools; assessing installation site; and preparing an installation diagram.\r\nEstablishes voice and data networks by running, pulling, terminating, and splicing cables; installing telecommunications equipment, routers, switches, multiplexors, cable trays, and alarm and fire-suppression systems; building ironwork and ladder racks; establishing connections; programming features; establishing con', 4, '1-2', '250000 - 450000', ' Management Level', 'Chembur, Maharashtra, India', 'Telecom/ISP', 'B.E', NULL, 'You will be aligned with our Network Operations vertical which ensures that we maintain a robust common integration framework to help communications clients address challenges, increase their margins, improve asset realization, improve customer service, increase revenues, reduce overall costs and accelerate sales cycles.\r\n\r\nThe Telecom Operations team is involved in developing structures, processes, and capabilities for managing and monitoring telecommunications networks.', '04-03-2021', ''),
(26, 1, 'System Administrators', 'Responsible To work as a hardware & network engineer to troubleshoot in real time desktop support.\r\nRequired Candidate profile\r\nAny Fresh graduate or with minimum of 1 year with good communication skills can also apply.\r\ncertification trained either in LINUX or CCNA or windows & servers could be an added advantage.\r\nRole System Administrator', 4, '2-5', ' 250000 - 450000', 'IT', 'Airoli, Maharashtra, India', 'Computer Hardware/Networking', 'B.Tech, B.Sc', NULL, 'Requirement of System Administrators.', '21-04-2021', ''),
(27, 7, 'Security Officer', 'Opening for Security Officer', 3, '0-2', '200000', 'Security', 'Santa cruz,Maharashtra,India', 'Security/Law Enforcement', 'S.S.C', NULL, 'Opening for Security Officer', '10-04-2021', 'Full'),
(28, 11, 'Community Advisor/ Social worker jobs in Healthcare sector', 'This position is for the person who is passionate to conduct campaigns about the welfare of organizations\r\nMaintaining reputation and branding in a particular community about the company\r\nPosition: Community Advisor', 4, '0-4', '150000 - 280000', 'Marketing & Communications', 'Hyderabad,Telangana,India', 'NGO/Social Services', 'H.S.C', NULL, 'Qualification: Inter/Above\r\nExperienced will be considered', '04-02-2021', 'Part'),
(29, 11, 'Real estate representative', 'Tasks\r\naccepting and listing properties and businesses for sale and lease, conducting inspections, and advising buyers on the merits of properties and businesses and the terms of sale or lease\r\nadvising vendors of sales and marketing options such as sale by auction and open house inspections\r\ncataloguing and detailing land, buildings and businesses for sale or lease and arranging advertising\r\nassessing buyers needs and locating properties and businesses for their consideration\r\noffering valuations and advice for buying and selling properties and businesses, and structuring the terms of settlement', 3, '2-5', '180000-340000', 'Sales / Business Development , Real Estate', 'Lucknow,Uttar Pradesh,India', 'Real Estate/CRM', 'B.M.S', NULL, 'Arranges the conduct of real estate transactions such as sales and leasing, and assists buyers to find suitable properties, on behalf of an agency. Registration or licensing is required.', '20-04-2021', 'Full'),
(30, 9, 'Ammonia Refrigeration -Technical Sales Engineer', 'A leading Commerical refrigeration company located in Mumbai is looking for suitable candidate in Ammonia refrigeration to handle it OEM business .', 2, '2-4', '350000 - 600000', 'Sales / Business Development', 'Ranchi,Jharkhand,India', 'HeatVentilation/AirConditioning', 'B.Tech', NULL, 'Identify potential market for refrigeration equipment\r\nBuild relationship with OEM customer\r\nCollect feedback from customers or prospects and share internal sales team.\r\nBasic negotiation and communication skills\r\nMaking weekly/monthly reports of sales and customer meeting etc', '10-04-2020', 'Full'),
(31, 12, 'Quality Analyst – Solution Delivery', 'Process audits to check the delivery of service daily, highlighting any deviations from the set standards Assess agent performance over a call, email & chat and to provide feedback to the team members to improve their performance, there by facilitating a high level of customer satisfaction.\r\nRecording the results of such audits & assessments in excel and sharing the same with the team, in a timely manner.\r\nPreparing and maintaining weekly & monthly trackers, reports to scale the performance improvement of the team members as well as the process.\r\nConduct calibration and training sessions on a regular basis, for the team members, identifying the areas of improvement.\r\nWill also be responsible', 2, '2-6', '200000-400000', 'IT , Quality Control / Assurance', 'Navi Mumbai,Maharashtra,India', 'KPO/Research/Analytics', 'B.A,B.B.A,B.COM', NULL, 'Process audits to check the delivery of service daily, highlighting any deviations from the set standards\r\nAssess agent performance over a call, email & chat', '30-03-2021', 'Full'),
(32, 12, 'International Non Voice Process / Semi Voice / Freshers / BPO / ITES', '1. Responsibility to conduct ONLINE Examination of Students from Universities across the USA, UK and Australia.\r\n2. Checking Authentications / ID of the students appears for an exam.\r\n3. Giving Instructions to the students regarding the exam.\r\n4. Complete the Backend operations work once the exam is done.', 10, '0-2', '100000-200000', 'Customer Service / Call Centre / BPO , IT', 'Noida,New Delhi,India', 'IT Enabled Services/BPO', 'H.S.C', NULL, 'We are urgently hiring for Freshers / Experienced for an International Non Voice / Semi Voice Process', '09-04-2021', 'Full'),
(34, 6, 'Healthcare Manager', 'Classify and code diseases according to an established classification system\r\nCollect, code, cross-reference and store health records and related information\r\nAbstract, assemble and analyze clinical data and related demographic information from health records according to established policies and procedures\r\nOperate information systems to maintain indexes for classification systems and to manage and retrieve health records information\r\nPrepare medical, social and administrative statistics', 2, '3-5', '3550000 - 4550000 ', 'Health Care', 'Kolkata,West Bengal,India', 'Healthcare/Medicine', 'M.B.B.s', NULL, 'Health information management workers collect, code, record, review and manage health information. They are employed by hospitals, clinics, workplace health and safety boards, health record consulting', '05-04-2021', 'Full'),
(35, 2, 'Account manager - Poultry', 'KAM will be responsible for handling the entire gamut of sales in region deputed by the Company. Further, he/she will be responsible for executing all aspects of the operations and sales division.\r\nKRAs\r\nMarketing Strategy\r\nPotential territory mapping?Potential Key customer identification Planning and organizing Business meetings Key Client Customer Contact Program', 3, '1-4', '100000-300000', 'Sales / Business Development', 'Lucknow,Uttar Pradesh,India', 'Agriculture/Dairy/Forestry/Fishing', 'H.S.C', NULL, 'Looking for account manager in Lucknow', '12-04-2021', 'Full'),
(36, 13, 'Biomedical Engineer', 'Designing equipment like artificial internal organs, machines which can diagnose medical problems and the replacements for various body parts.\r\nInstallation, adjustment, maintenance, repair and providing with technical support for biomedical equipment’s.\r\nEvaluation of the safety, effectiveness and efficiency of all the biomedical equipment.\r\nTraining of the clinicians and other personnel involved in the operation of this equipment, on the proper use of this equipment.\r\nWorking in coordination with the life scientists, chemists and medical scientists in order to conduct research the find out the engineering aspects of the biological systems of humans and animals\r\nPrepare procedures, technica', 2, '2-5', 'Rs 250000 - 450000', 'Pharmaceutical / Biotechnology', 'Vasai-Virar,Maharashtra,India', 'Biotechnology/Pharmaceutical/Clinical Research', 'Bsc', NULL, 'urgently hiring for biomedical engineer\r\nfreshers can also apply', '10-03-2021', 'Full'),
(37, 9, 'Freight Forwarding Sales Manager', 'Hiring for Deputy Manager / Manager for a freight forwarding company.\r\nShould be able to handle business for Ocean Freight and Air Freight\r\n', 2, '1-3', '200000-4000000', 'Sales / Business Development', 'Nashik,Maharashtra,India', 'Courier/Freight/Transportation/Warehousing', 'H.S.C', NULL, 'Good understanding of market and target industries.\r\nExperience & Functional Knowledge of selling all Freight forwarding products (Services)\r\nGenerate Maximum Sales enquiries close the business.\r\nTeam Management Experience\r\nMinimum Graduate from any stream.', '15-04-2021', 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `user_id` int(20) NOT NULL,
  `log_id` int(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `basic_edu` varchar(100) DEFAULT NULL,
  `master_edu` varchar(100) DEFAULT NULL,
  `other_qual` varchar(100) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `Resume` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`user_id`, `log_id`, `name`, `phone`, `location`, `experience`, `skills`, `basic_edu`, `master_edu`, `other_qual`, `dob`, `Resume`, `photo`) VALUES
(1, 9, 'Lionel Messi', '9324799571', 'India, Maharashtra, Mumbai', '3   ', 'Python Specialist', 'B.Com', 'M.com', NULL, NULL, 'lionel messi9.pdf', 'Lionel Messi9.jpg'),
(2, 4, 'Nikhil sharma', '8943202726', 'Kozhikode,Kerala,India', '1', 'Experience in Php development , HTML , MYSQL, Ajax', 'B.Tech/B.E.', 'Not Pursuing Post Graduation', NULL, NULL, 'Sreelal C8.docx', 'Nikhil sharma2.jpg'),
(3, 1, 'Cristiano ronaldo', '7894561231', 'India,West Bengal,Kalaikunda', '5', 'construction , Tax ', 'Not Pursuing Graduation', 'Not Pursuing Post Graduation', NULL, NULL, NULL, 'Akshay V K7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`, `usertype`, `status`) VALUES
(1, 'cristiano7@gmail.com', '321', 'jobseeker', 1),
(2, 'info@infosys.com', '12345', 'employer', 0),
(3, 'Sarfarosh@gmail.com', 'Sarfarosh', 'employer', 0),
(4, 'nikhil@gmail.com', '100', 'jobseeker', 1),
(5, 'abc@gmail.com', 'abc', 'jobseeker', 1),
(6, 'info@microsoft.com', '111', 'employer', 1),
(7, 'kadamaditya@gmail.com', '123', 'employer', 0),
(8, 'abcd@yahoo.com', '1212', 'employer', 0),
(9, 'messi10@gmail.com', '86523', 'jobseeker', 1),
(10, 'cr7@gmail.com', 'cr7', 'employer', 0),
(11, 'johnsnow@gmail.com', '9876', 'employer', 0),
(12, 'mindspace@gmail.com', 'mindspace', 'employer', 0),
(13, 'Bertelsmann@gmail.com', 'Bertelsmann', 'employer', 0),
(14, 'opaque@yahoo.com', 'opaque123', 'employer', 0),
(15, 'trade@gmail.com', 'trade12', 'employer', 0),
(16, 'Advanced@gmail.com', 'Advanced', 'employer', 0),
(17, 'Tarare@gmail.com', 'Tarare', 'employer', 0),
(18, 'Accenture@gmail.com', 'Accenture', 'employer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `selection`
--

CREATE TABLE `selection` (
  `sel_id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `readmsg` int(11) DEFAULT 0,
  `meet_date` varchar(20) DEFAULT NULL,
  `meet_time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selection`
--

INSERT INTO `selection` (`sel_id`, `user_id`, `emp_id`, `job_id`, `status`, `date`, `readmsg`, `meet_date`, `meet_time`) VALUES
(3, 1, 1, 3, 1, '28-03-21', 1, '13-04-2021', '8:0 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `log_id` (`log_id`),
  ADD KEY `log_id_2` (`log_id`);

--
-- Indexes for table `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`sel_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `apply_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `selection`
--
ALTER TABLE `selection`
  MODIFY `sel_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `fk_empid` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`user_id`) REFERENCES `jobseeker` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `fk_log_id` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `fk_eid` FOREIGN KEY (`eid`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD CONSTRAINT `fk_login` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `jobseeker` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `del_meet` ON SCHEDULE EVERY 1 DAY STARTS '2021-04-13 13:06:03' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE selection  SET `meet_date`=NULL,`meet_time`=NULL WHERE `meet_date` < '13-04-2021 '$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
