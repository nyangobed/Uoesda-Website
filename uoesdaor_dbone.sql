-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 11:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uoesdaor_dbone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admtbl`
--

CREATE TABLE IF NOT EXISTS `admtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ad_names` varchar(200) NOT NULL,
  `prof_pic` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admtbl`
--

INSERT INTO `admtbl` (`id`, `username`, `password`, `email`, `ad_names`, `prof_pic`) VALUES
(6, 'obed', '$2a$08$v1YzYKLK8D83y7elKjQxvuNDi6/m3kom4i4Ii7sDLzxWgzCpauoFy', 'obednyangate@gmail.com', 'Obed Nyakundi', './profPics/Obed Nyakundi_Profile_1520203551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE IF NOT EXISTS `audios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aud_title` varchar(300) NOT NULL,
  `aud_desc` text NOT NULL,
  `aud_link` text NOT NULL,
  `post_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blgid` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_mail` varchar(100) NOT NULL,
  `u_comment` text NOT NULL,
  `u_avatar` text NOT NULL,
  `post_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blgid`, `u_name`, `u_mail`, `u_comment`, `u_avatar`, `post_date`) VALUES
(1, '$2a$04$3LwXWr90tA5AOfSnuLYVauUp4HfiPGkaeX.KYF8oLyvebAfSlUhj2', 'Patrick Kipkirui', 'pkipkirui6@gmail.com', 'Happy Sabbath,,,,,Thanks be to God for such great initiative . Be blessed', 'M', 1467448086),
(2, '$2a$04$IjLVMItFHKf48hfS3.aTHe./fsArVqYKrZMNKGwosszHNuJY3jk1G', 'eld peter', 'petertitus291@gmail.com', 'may God bless you for good work.how is the bot', 'M', 1468583786);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ev_title` varchar(300) NOT NULL,
  `ev_desc` text NOT NULL,
  `ev_start` varchar(100) NOT NULL,
  `ev_end` varchar(100) NOT NULL,
  `post_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ev_title`, `ev_desc`, `ev_start`, `ev_end`, `post_date`) VALUES
(1, 'Website Launch', 'This event will be the opening f our brand new website. Kindly attend', '1449302400', '1449331200', 1449129656),
(2, 'Website Launch', 'This event will be the opening f our brand new website. Kindly attend', '1451721600', '1451754000', 1450346639),
(3, 'Website and bot launch', 'This event will be the opening of our brand new website and bot. Kindly attend', '1455955200', '1455973200', 1455887499),
(4, 'Fundraising for mission to west pokot', 'This event is geared towards raising of funds for a mission to west pokot as well as trumpets recording', '1456668000', '1456678800', 1455887810),
(5, 'Revival week at NS1', 'Major revival week for the adventist', '1457251200', '1457802000', 1455887930),
(6, 'Music Sabbath', 'A sabbath of pure music', '1460188800', '1460235600', 1455888040),
(7, 'Joint MUSDA at Eldoret polytechnic', 'This will be a joint sabbath day with comrades from different institutions all over Eldoret', '1457164800', '1457197200', 1455888279),
(11, 'MISSION TO WEST POKOT', 'Evangelistic compaign end of every semister', '1463292000', '1464541200', 1461919066),
(12, 'DEVELOPMENT SABBATH', 'aimed to raise funds for church construction', '1467446400', '1467446400', 1465927356),
(13, 'HOLY COMMUNION SABBATH', 'END OF EVERY QUARTER', '1466841600', '1466899140', 1465927694),
(14, 'OUTREACH', 'mmm', '1468051200', '1468108740', 1465927846),
(15, 'MUSIC SABBATH', 'ww', '1469865600', '1469923140', 1465927978),
(16, 'STEWARDSHIP SABBATH', 'aimed to raise', '1468656000', '1468692000', 1468396810),
(17, 'EVANGELISM SABBATH', 'for encouraging members  importance of mission work', '1465344000', '', 1470128119),
(18, 'EVANGELISM SABBATH', 'for encouraging members  importance of mission work', '1465344000', '', 1470128641),
(55, 'THANKSGIVING SABBATH', 'SABBATH', '1494115200', '1494719940', 1494340287),
(56, 'THANKSGIVING SABBATH', 'SABBATH', '1494115200', '1494719940', 1494475873),
(57, 'Charity Sabbath', 'Sabbath', '1505370600', '1505584800', 1505359618),
(58, 'Camp Meeting', 'Meeting', '1506189600', '1506362400', 1505360037),
(59, 'CHILDREN SABBATH', 'SABBATH', '1509782400', '1509818400', 1509290516),
(60, 'INREACH/PCM', 'SABBATH', '1510387200', '1510423200', 1509290637),
(61, 'MUSIC SABBATH', 'SABBATH', '1510992000', '1512151200', 1509290886),
(62, 'MUSIC SABBATH', 'SABBATH', '1510992000', '1512151200', 1509291109),
(63, 'EDUCATION SABBATH', 'SABBATH', '1511028000', '1511640000', 1509291399),
(65, 'STEWARDSHIP SABBATH', 'SABBATH', '1512237600', '1512806400', 1509291617),
(66, 'EDUCATION SABBATH', 'SABBATH', '1512842400', '1513411200', 1509291768),
(67, 'FAREWELL SABBATH', 'SABBATH', '1513447200', '1514016000', 1509291881),
(68, 'ASSOCIATES SABBATH', 'SABBATH', '1511136000', '1511596800', 1511169052),
(69, 'ASSOCIATES SABBATH', 'SABBATH', '1511308800', '1511596800', 1511340428),
(70, 'ASSOCIATES SABBATH', 'SABBATH', '1511308800', '1511596800', 1511340599),
(71, 'ASSOCIATES SABBATH', 'SABBATH', '1511049600', '1511596800', 1511340665),
(72, 'ASSOCIATES SABBATH', 'SABBATH', '1511352000', '1511596800', 1511340763),
(73, 'ASSOCIATES SABBATH', 'SABBATH', '1511049600', '1511596800', 1511343154);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_names` varchar(40) NOT NULL,
  `sender_mail` varchar(200) NOT NULL,
  `sender_subject` text NOT NULL,
  `sender_message` text NOT NULL,
  `sent_date` int(100) NOT NULL,
  `read_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_names`, `sender_mail`, `sender_subject`, `sender_message`, `sent_date`, `read_status`) VALUES
(1, 'Momanyi nyakongo mokaya clinton', 'cnyakongo@yahoo.com', 'Congratulations', 'This is indeed a mailstone in our church. May the God be glorified.', 1455955679, 1),
(2, 'Newton. Korir', 'newtonkemboi@gmail.com', 'appreciations', 'hellow uoesda family for such a great platform indeed it is evangelism through technology God bless you', 1455957035, 1),
(3, 'mukulu', 'evelynekioko@ymail.com', '@uoeSDAbot', 'hey\r\ncant seem to give the /subscribe command to register for uoesdabot updates.my user name in telegram is MUKULU,0707462692', 1456066190, 1),
(4, 'mukulu', 'evelynekioko@ymail.com', '@uoeSDAbot', 'hey\r\ncant seem to give the /subscribe command to register for uoesdabot updates.my user name in telegram is MUKULU,0707462692', 1456066214, 1),
(5, 'mukulu', 'evelynekioko@ymail.com', '@uoeSDAbot', 'hey\r\ncant seem to give the /subscribe command to register for uoesdabot updates.my user name in telegram is MUKULU,0707462692', 1456066244, 1),
(6, 'mukulu', 'evelynekioko@ymail.com', '@uoeSDAbot', 'hey\r\ncant seem to give the /subscribe command to register for uoesdabot updates.my user name in telegram is MUKULU,0707462692', 1456066294, 1),
(8, 'omwamba stephen', 'somwambam@gmail.com', 'ENQUIRIES', 'Greet you in the name of our mighty Lord Jesus Christ? Hope you are doing well. God bless you for this good you are doing. Please i make inquiries concerning the time it takes to load web pages. It seems to be slow and i request that please you may post as many visual sermons as they are available because of the high demand. \r\nGod bless you', 1456473878, 1),
(9, 'Edwin Bwana', 'ebwanah@gmail.com', 'A word of appreciation', 'I like what you are doing ..in terms of making us spiritually rich...thanks a lot may the lord our living God bless you all.Amen', 1456560444, 1),
(10, 'kipkoech rono', 'kipkoechrono02@gmail.com', 'congratulations', 'I like that good work', 1456562055, 1),
(13, 'Jenny', 'liisnujrco@ukddamip.co', 'Jenny', 'I was just looking at your UoESDA Church | Contact Us site and see that your site has the potential to become very popular. I just want to tell you, In case you didn''t already know... There is a website service which already has more than 16 million users, and the majority of the users are looking for websites like yours. By getting your website on this network you have a chance to get your site more popular than you can imagine. It is free to sign up and you can find out more about it here: http://url.laspas.gr/ak - Now, let me ask you... Do you need your site to be successful to maintain your business? Do you need targeted visitors who are interested in the services and products you offer? Are looking for exposure, to increase sales, and to quickly develop awareness for your website? If your answer is YES, you can achieve these things only if you get your site on the service I am talking about. This traffic network advertises you to thousands, while also giving you a chance to test the service before paying anything. All the popular blogs are using this network to boost their traffic and ad revenue! Why arenâ€™t you? And what is better than traffic? Itâ€™s recurring traffic! That''s how running a successful site works... Here''s to your success! Read more here: http://url.laspas.gr/ak', 1458521323, 1),
(14, 'obed', 'obednyangate@gmail.com', 'sermons', 'hello hope you are doing well please post for us audio and visual sermons regards', 1458559732, 1),
(15, 'Emily', 'fknfrwj@gmail.com', 'Emily', 'Hello my name is Emily and I just wanted to drop you a quick note here instead of calling you. I discovered your UoESDA Church | Contact Us page and noticed you could have a lot more hits. I have found that the key to running a popular website is making sure the visitors you are getting are interested in your subject matter. There is a company that you can get keyword targeted visitors from and they let you try their service for free for 7 days. I managed to get over 300 targeted visitors to day to my site. Check it out here: http://mariowelte.de/8ajy', 1461771449, 1),
(16, 'wanyonyi rodgers', 'wanyonyirodgers643@gmail.com', 'congrats', 'its anice website thanx for all who prepared it', 1467447759, 1),
(17, 'qwertyui', 'obednyangate@gmail.com', 'qwertyui', 'fghjkl', 1468584050, 1),
(18, 'Magara Ibrahim', 'magaraibrahim2@gmail.com', 'enqury', 'hello how can i download videos from this website', 1471195712, 1),
(19, 'Elder Chacha', 'shadrack.chacha2@gmail.com', 'RECOMMENDATION', 'Good work done. thanks. \r\nNow try to create as many features as possible. God bless you all, and warm regards to all UoESDA Members.', 1471360889, 1),
(20, 'magara ibrahim', 'magaraibrahim2@gmail.com', 'update', 'the website is now working log in to cpanel www.uoesda.org/cpanel the website does not have ssl certificate never pay any amount to the patrick it is free', 1474262431, 1),
(21, 'IBRA', 'MAGARAIBRAHIM2@GMAIL.COM', 'REQUEST FOR FINALIST IMAGES', 'hellow can you upload finalist images', 1493815357, 0),
(22, 'Wycklife Opiyo Oyugi', 'wycoyugi@gmail.com', 'Near the Cross', 'I want to thank God for our lives as a family uoesda. I feel privileged to be part of you.  May God protect you in this holiday and attachment period for the Lbs and the AMs.', 1497343788, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sitepost`
--

CREATE TABLE IF NOT EXISTS `sitepost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blgid` varchar(100) NOT NULL,
  `pst_title` varchar(300) NOT NULL,
  `pst_cat` varchar(100) NOT NULL,
  `pst_content` text NOT NULL,
  `blog_img` text NOT NULL,
  `post_date` varchar(100) NOT NULL,
  `posted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sitepost`
--

INSERT INTO `sitepost` (`id`, `blgid`, `pst_title`, `pst_cat`, `pst_content`, `blog_img`, `post_date`, `posted_by`) VALUES
(4, '$2a$04$9EWVDrwZ2myQ1Rwt9blO5OVGP8D1kpeXyQMzI6j9kkCUKAj0DjSoO', 'New bot to remind members of activities', 'news', '<p>We announce the great news of a new bot for the church. The bot will serve the purpose of reminding members on important church activities everyday.<br><img src="https://cldn0.fiverrcdn.com/fiverr/t_main1/gigs/17284894/original/4ef0bcf3b8981f8d76b39fc66182e11f5f8cb30b.jpg" alt="" width="300" height="250"></p><p>In order to access the bot follow the following steps;</p><ol><li>Download Telegram from <a href="https://play.google.com/store/apps/details?id=org.telegram.messenger&amp;hl=en" rel="nofollow" target="_blank">Google playstore</a></li><li>Install and register in the app.</li><li>Search for <b>@uoesdabot</b>.</li><li>send the <b>/subscribe</b> command to get registered.<br></li></ol>Contact us in case of any problems.<br><br>', '0', '1455894740', 1),
(10, '$2a$04$0PcOd4nqH2PwhhAobRofnO/KFjcKNcbDvLE/Z7U5uOIlDR9QZIFSy', 'Mission', 'blog', '<p>We managed to camp in two sites: Konyao and Ngâ€™otut, along Kacheliba-Alale road. The activities carried within the two weeks include:<br>ïƒ¼  Door to door visitation<br>ïƒ¼  Churches visitation<br>ïƒ¼  Schools visitation<br>ïƒ¼  Public preaching in the two sites.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Besides the activities carried out within the week, souls were worn to Christ at the end of the mission. The total number of people who were baptized was as follows;<br>I.  Konyao (site one)  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  19souls<br>II.  Ngâ€™otut (site two)  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  19souls<br>Total  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  38souls<br><br><br><br><br><br>a)  Door to door visitations<br>Total number of houses visited for the two sites were 187 homesteads. These both inclusive of Adventists and non-Adventist families. Among the activities involved in the door to door visitations include; <br>ïƒ¼  Praying for the people<br>ïƒ¼  Donating of clothes to them<br>ïƒ¼  Sharing the word of God to them <br><br>These visitations were effected with small cells with a maximum number of 7. These groups also helped in ensuring that the ministers were well in terms of duty.<br><br>b)  School visitations <br>The total numbers of schools visited were 5. Three were primary and two were secondary schools. The schools are as follows:<br>ïƒ˜  Konyao secondary school<br>ïƒ˜  Bora Lee Adventist secondary school<br>ïƒ˜  Konyao Dorcas Adventist school<br>ïƒ˜  Ngâ€™otut primary school<br>ïƒ˜  Losamu primary school.<br><br>c)  Churches visitations<br>On Sunday, visitations were done to the nearby churches. The total number of churches visited for the two sites were 14 churches. These were of different denominations.<br>d)  Sponsorship <br>Three pupils were sponsored at Ngâ€™otut with a group of members who pledged to ensure they finish class 8 levels. These are class 1, 6 and 7. They are in Ngâ€™otut Primary, Dorcas Adventist, and Losamu primary respectively.<br><br>e)  Sabbath school opening.<br>One Sabbath school was officially launched at Ngâ€™otut in the presence of district pastor, Royatem Joseph and GMP pr. Rikou Joseph and Madam Sarah were put in charge to ensure their growth. The church to be build was estimated to cost Ksh. 41,500 and it was to be effected as soon as possible.<br><br></p>', 'images/pokot.png', '1467405017', 2);

-- --------------------------------------------------------

--
-- Table structure for table `uoesda_schedule`
--

CREATE TABLE IF NOT EXISTS `uoesda_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(300) NOT NULL,
  `act_ven` varchar(100) NOT NULL,
  `act_day` varchar(50) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `uoesda_schedule`
--

INSERT INTO `uoesda_schedule` (`id`, `activity`, `act_ven`, `act_day`, `start_time`) VALUES
(1, 'Morning Glory', 'LT2 and LH1', 'Sunday', '6 am'),
(2, 'Crusade Training', 'LT2', 'Sunday', '9 am'),
(3, 'Trumpets Choir Training', 'Tank', 'Sunday', '10 am'),
(4, 'Royal Pilgrims', 'Bush', 'Sunday', '12 pm'),
(5, 'Year groups meetings', 'Tank', 'Sunday', '5 pm'),
(6, 'Morning Glory', 'LT2 and LH1', 'Monday', '6 am'),
(8, 'Morning Glory', 'LT2 and LH1', 'Tuesday', '6 am'),
(9, 'Bible Study', 'Hostel Rooms and Happiness Class LT2', 'Tuesday', '8 pm'),
(10, 'Morning Glory', 'LT2 and LH1', 'Wednesday', '6 am'),
(11, 'Royal Pilgrim', 'Bush', 'Wednesday', '1 pm'),
(12, 'Royal Pilgrim', 'Bush', 'Wednesday', '5 pm'),
(13, 'Vespers', 'L6', 'Wednesday', '6.30 pm'),
(14, 'Morning Glory', 'LT2 and LH1', 'Thursday', '6 am'),
(15, 'Year Group Meetings', 'Orbitals', 'Thursday', '6.30 pm'),
(16, 'Lesson Teachers Meeting', 'Orbitals', 'Thursday', '8 pm'),
(17, 'Morning Glory', 'LT2 and LH1', 'Friday', '6 am'),
(18, 'Vespers', 'L6', 'Friday', '6.30 pm'),
(19, 'Cleaning', 'L4/5', 'Saturday', '5 am'),
(20, 'Sabbath Fellowship', 'L4/5', 'Saturday', '8 am');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `update_id`) VALUES
(1, '378344905'),
(2, '378344906'),
(3, '378344907');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `chat_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `chat_id`) VALUES
(3, 'OGINDI', '124568224'),
(4, 'Jeremmy', '172295351'),
(6, 'Brianmairura', '181972789'),
(7, 'Marnex', '128724075'),
(8, 'Lawrence', '117779848'),
(9, 'MUKULU', '191919030'),
(10, 'charles', '131074769'),
(11, 'kimani_frasiah', '205673272'),
(12, 'Judith', '212645412'),
(13, 'Davis', '166506940'),
(14, 'Newton', '185821140'),
(15, 'Tshala', '192095684'),
(16, 'stephen', '207448214'),
(17, 'clivenyaribo', '185661929'),
(18, 'Maikuri', '160521655'),
(19, 'DrMiyogo', '212039355'),
(20, 'Elizabeth', '215577106'),
(21, 'Vincent', '216066510'),
(22, 'Osano', '192621788'),
(23, 'Peter', '208851470'),
(24, 'Kipkirui', '168210730'),
(25, 'Isaac', '217494897'),
(26, 'Victor', '207087051'),
(27, 'Doris', '197405612'),
(28, 'Hesbon', '207944111'),
(29, 'Dave', '201727578'),
(30, 'winnie', '201959662'),
(31, 'Mista', '191374754'),
(32, 'Christido', '99737906'),
(33, 'Ednah', '174965707'),
(34, 'Jacqueline', '192260976'),
(35, 'Laurah', '178480202'),
(36, 'Mistafranc', '203081464'),
(37, 'Arthur', '204925581'),
(38, 'Shivan', '140315504'),
(39, 'beforn', '187926097'),
(40, 'Pennypets', '175371967'),
(41, 'cornelius', '230112355'),
(42, 'Curtis', '230035898'),
(43, 'wanyonyi', '225538527'),
(44, 'Profsr', '257327392'),
(45, 'Samuel', '269011931'),
(46, 'Gabriel', '195802218'),
(47, 'princessnyabz', '174597909'),
(48, 'Alfred', '223979853'),
(49, 'Newton', '255799117'),
(50, 'Chelangat', '140045222'),
(51, 'Gidwilly', '227765031'),
(52, 'McDonald', '262198426'),
(53, 'Junior Ontii', '130165391'),
(54, 'Rahab', '265533019');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid_title` varchar(300) NOT NULL,
  `vid_link` text NOT NULL,
  `post_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `vid_title`, `vid_link`, `post_date`) VALUES
(8, 'KMM', 'https://www.youtube.com/embed/rDssY91rl1k', '1467403019'),
(9, 'UoNSDA', 'https://www.youtube.com/embed/mmLtRae65Bg', '1467403706'),
(10, 'pillars of faith', 'https://www.youtube.com/embed/dF0S0m3l3fM', '1467404582'),
(11, 'Jeremiah Davis', 'https://www.youtube.com/embed/7-LskB2X9gU?list=PLpKzSwGJ5PCRWUuVA0SKphZI7MBGpGOFb', '1467405526'),
(12, 'TRUMPHET SOUNDS-PART  ONE', 'https://www.youtube.com/embed/fML7QdxsZeA', '1479988978');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
