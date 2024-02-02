-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 07:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectn233-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Monjoy Roy', 'monjoy@gmail.com', '01521855878', 'Mirpur-10, Dhaka', '12345'),
(2, 'Israt Jahan', 'israt@gmail.com', '01751561212', 'Comilla', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `website`, `message`) VALUES
(1, 'Israt Jahan', 'israt@gmail.com', 'www.israt.me', 'Good website'),
(2, 'Atish Rahbar', 'atish@gmail.com', '', 'Website working fine!');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(300) NOT NULL,
  `news_description` text NOT NULL,
  `news_photo` varchar(255) NOT NULL,
  `news_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_description`, `news_photo`, `news_date`) VALUES
(1, 'West Indies lead Australia by 128 at dinner break on third day', '<p><strong>Alick Athanaze of the West Indies bats during day three of the second Test between Australia and West Indies at the Gabba in Brisbane on January 27, 2024. Photo: AFP</strong><br />\r\nThe second Test between Australia and the West Indies remained in the balance as the visitors reached 106-3 at the dinner break on the third day Saturday, an overall lead of 128.</p>\r\n\r\n<p><br />\r\nOn an oppressively hot and humid day in Brisbane, Australia&#39;s pace bowlers were forced into three-over spells followed by time off the field to recover.</p>\r\n\r\n<p><strong>Google News LinkFor all latest news, follow The Daily Star&#39;s Google News channel.<br />\r\nAt the first break of the day-night Test, Alick Athanaze, dropped by Steve Smith in the penultimate over, was not out 28 with Kavem Hodge alongside him on eight.</strong></p>\r\n\r\n<p>After resuming Saturday at 13-1, West Indies captain Kraigg Brathwaite and No.3 Kirk McKenzie were intent on keeping the Australians in the field as long as possible.</p>\r\n\r\n<p><br />\r\nMcKenzie in particular looked in great touch as he punished anything loose from the Australian pace attack.</p>\r\n\r\n<p><strong>Brathwaite has been out of touch all tour and his woes continued Saturday.</strong></p>\r\n\r\n<p>After scraping his way to 16, he played a poor shot to an innocuous Cameron Green delivery and chipped a simple catch to Marnus Labuschagne at cover.</p>\r\n\r\n<p><br />\r\nHowever, he and McKenzie had put on a 50-run partnership to lay a good foundation for the visitors.</p>\r\n\r\n<p>McKenzie, by contrast, has had a good tour and the stylish left-hander moved comfortably to 41 before he tried to sweep off-spinner Nathan Lyon and was trapped leg before, leaving the West Indies 86-3.</p>\r\n\r\n<p>Athanaze and Hodge consolidated and reached the break with few troubles.</p>\r\n', 'upload/news/073da61bd9.jpg', '2024-01-27 10:47:40pm'),
(2, 'Avishka-Campher storm powers Chattogram to seasons highest total', '<p><em>Chattogram Challengers batter Avishka Fernando hits a shot during their match against Fortune Barishal in Sylhet today. Photo: Firoz Ahmed</em><br />\r\n<strong>Avishka Fernando hit a brilliant 91 off 50 balls while Curtis Campher hit a nine-ball 29 to power Chattogram Challengers to 193-4 in 20 overs against Fortune Barishal in their Bangladesh Premier League match at the Sylhet International Cricket Stadium today.</strong></p>\r\n\r\n<p>Avishka, who carried his bat in an innings that included five fours and seven towering sixes, took 40 deliveries to complete his half-century.</p>\r\n\r\n<p>Google News LinkFor all latest news, follow The Daily Star&#39;s Google News channel.<br />\r\nThe Sri Lankan cut loose from the 16th over of the innings and along with Campher, who came to the crease with just 11 balls to go, accumulated 83 runs in the last final five overs.</p>\r\n\r\n<p>Left-arm spinner Taijul Islam was the most successful bowler for Barishal, taking four wickets for 26 runs.</p>\r\n\r\n<p>Earlier, Barishal won the toss and opted to field first.</p>\r\n', 'upload/news/8a16b67cdd.jpg', '2024-01-27 10:52:05pm'),
(4, 'Anamul guides Khulna to fourth straight win ', '<p>Khulna Tigers skipper Anamul Hauqe Bijoy led his side to a 10-wicket win over Durdanto Dhaka with a fifty in a Bangladesh Premier fixture at the Sylhet International Cricket Stadium on Monday. &nbsp;</p>\r\n\r\n<p><br />\r\nAnamul put away four boundaries and a couple of maximums for his unbeaten 48-ball 58, guiding his side to a 131-run target in 14.4 overs which meant that Khulna remained the only team to keep hold of a 100 percent winning record having won four matches on the trot.&nbsp;</p>\r\n\r\n<p>Google News LinkFor all latest news, follow The Daily Star&#39;s Google News channel.<br />\r\nA 50-run stand was put up by openers Anamul and Evin Lewis before the Caribbean returned to the pavilion retired hurt having suffered what appeared to be a side strain.</p>\r\n\r\n<p>Lewis came out firing as he put away three fours and two sixes for a 13-ball 26 and after his return, Anamul and Afif Hossain, who was not out on a 27-ball 37, courtesy of three sixes and a four, made sure to make little fuss of the small total.&nbsp;</p>\r\n\r\n<p><br />\r\nEarlier, Khulna Tigers&#39; Mohammad Nawaz picked up three wickets and pacers Mukidul Islam and Mohammad Wasim Jr scalped two wickets each to restrict Dhaka to 130 for nine.&nbsp;</p>\r\n\r\n<p>Dhaka opener Mohammad Naim smashed four sixes and two fours, top-scoring with a 21-ball 41.</p>\r\n', 'upload/news/66e7f91fe7.jpg', '2024-01-29 10:01:25pm'),
(5, 'Tanzid, Bruce hand Sylhet fourth straight defeat', '<p>Chattogram Challengers batters Tom Bruce and Tanzid Hasan Tamim run between the wickets during their Bangladesh Premier League match against Sylhet Strikers at the Sylhet International Cricket Stadium today. Photo Firoz Ahmed<br />\r\nHalf-centuries from Tanzid Hasan Tamim and Tom Bruce guided Chattogram Challengers to a comfortable eight-wicket win over Sylhet Strikers in their Bangladesh Premier League (BPL) match at the Sylhet International Cricket Stadium today.</p>\r\n\r\n<p><br />\r\nTanzid made 50 off 40 balls while Bruce hit an unbeaten 51 off 44 deliveries as Chattogram cruised to 138-2 in just 17.4 overs.</p>\r\n\r\n<p>Google News LinkFor all latest news, follow The Daily Star&#39;s Google News channel.<br />\r\nEarlier, Chattogram&#39;s Omanis fast bowler Bilal Khan claimed 3 for 24 runs in his four overs to help restrict Sylhet to 137-4 after they had opted to bat first.</p>\r\n\r\n<p>Sylhet&#39;s Irish batter Curtis Campher top-scored for them with 45 off 42 balls.</p>\r\n\r\n<p><br />\r\nThis is Sylhet&#39;s fourth straight defeat as the last year&#39;s runners-up are yet to register a victory.</p>\r\n\r\n<p>Chattogram, on the other hand, are now leading the points-table with four wins in five games.</p>\r\n', 'upload/news/0407e3eec9.jpg', '2024-01-29 10:02:16pm'),
(6, 'Tigers WC debacle: BCB committee meets with Shakib, Tamim', '<p>Fortune Barishal&#39;s Tamim Iqbal and Rangpur Rider&#39;s Shakib Al Hasan shake hands after the match. Photo: Firoz Ahmed<br />\r\nThe Bangladesh Cricket Board (BCB) had formed a three-member committee to investigate the Bangladesh team&#39;s terrible showing at the 2023 ODI World Cup in India. Amidst the ongoing Sylhet phase of the BPL, the three-member committee of BCB directors Enayet Hossain Siraj, the convenor and members, Mahbubul Anam and Akram Khan met with skipper Shakib Al Hasan and Tamim Iqbal at Sylhet today.</p>\r\n\r\n<p><br />\r\nSiraj spoke to the media after meeting Shakib and Tamim separately at the franchise team hotel.</p>\r\n\r\n<p>Google News LinkFor all latest news, follow The Daily Star&#39;s Google News channel.<br />\r\n&quot;It&#39;s not something we can share with the media as it&#39;s being dealt with confidentially. When the time comes, everyone will get to know at the same time including the public. We have talked to them [Shakib and Tamim] separately,&quot; he told the media today in the afternoon,</p>\r\n\r\n<p>The investigation committee has met with almost everyone they needed to and Shiraj said that &#39;they are in the last stage&#39;.</p>\r\n\r\n<p><br />\r\n&quot;We are going to submit it [investigation report] to the cricket board soon. Since we got both of them here, we talked to them in the morning and are now leaving,&quot; he added.</p>\r\n\r\n<p>The soured relationship between Shakib, who was present at the Rangpur Riders practice session today, and Tamim, who opted out of the World Cup, has been in the limelight.</p>\r\n\r\n<p>But the investigation committee is not focusing on that, said Siraj.</p>\r\n\r\n<p><br />\r\n&quot;We are not considering the problems between them. It&#39;s not something permanent. It&#39;s possible to solve anything if you want to solve it and if you know how to do it.&nbsp;</p>\r\n\r\n<p>&quot;I feel that the discussion was dynamic. We talked about Bangladesh cricket as a whole and asked for their suggestions,&quot; he said when asked whether the discussions were fruitful.</p>\r\n\r\n<p>Siraj also said the committee did not ask Tamim about his future plans. The opener had earlier said he would reveal his plans after the BPL.</p>\r\n', 'upload/news/fe73f33f40.jpg', '2024-01-29 10:03:20pm'),
(7, 'Stokes savours best win under his captaincy', '<p><strong>England captain Ben Stokes said his side&#39;s 28-run win against hosts India in Sunday&#39;s first Test was their best victory under his leadership.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Since Stokes and head coach Brendon &quot;Baz&quot; McCullum took charge in 2022, England have championed an ultra-aggressive approach that puts entertainment above outcome.</p>\r\n\r\n<p><a href=\"https://news.google.com/publications/CAAiECW73usLivqPCSeQRsSUvRQqFAgKIhAlu97rC4r6jwknkEbElL0U\"><img alt=\"Google News Link\" src=\"https://tds-images.thedailystar.net/sites/all/themes/tds/images/google_news.svg\" />For all latest news, follow The Daily Star&#39;s Google News channel.</a></p>\r\n\r\n<p>Under the dynamic duo, the side have won Test series at home against New Zealand and South Africa, while drawing the Ashes series against Australia last year.</p>\r\n\r\n<p>They triumphed in Pakistan too but many wondered if their &quot;Bazball&quot; approach would work against India, who have not lost a Test series at home since 2012.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;We&#39;ve been part of some amazing games over the last few years,&quot; Stokes told reporters after England went 1-0 up in the five-match series.</p>\r\n\r\n<p>&quot;We&#39;ve had some incredible victories but considering where we are and who we playing against, the position we found ourselves going into our second innings... it&#39;s a big reason as to why I feel this is our best victory since I&#39;ve been captain.&quot;</p>\r\n\r\n<p>England conceded a huge lead of 190 but vice-captain Ollie Pope&#39;s sublime 196 helped them to post 420 in the second innings, setting India a tricky target of 231.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Debutant spinner Tom Hartley (7-62) then ran through India&#39;s batting line-up to bowl England to a thrilling victory.</p>\r\n\r\n<p>Stokes had no hesitation in calling Pope&#39;s masterclass the best knock by an English batter in India&#39;s spin-friendly conditions.</p>\r\n\r\n<p>&quot;I&#39;ve been lucky enough to see a lot of Joe Root innings in sub-continent conditions but unfortunately now he&#39;s slipped down to two or three behind Popey,&quot; Stokes said with player-of-the-match Pope by his side.</p>\r\n\r\n<p>&quot;Since becoming vice captain, he&#39;s done an incredible job with that this week as well. I keep going to him to throw ideas, plans, what he sees.&quot;</p>\r\n\r\n<p>Left-arm spinner Hartley also showed a lot of character after bleeding 131 runs in 25 overs in India&#39;s first innings.</p>\r\n\r\n<p>Stokes heaped praise on Hartley and had similar admiration for spinner Jack Leach, who soldiered on with a knee injury sustained during fielding.</p>\r\n\r\n<p>&quot;He&#39;s been an absolute warrior this week,&quot; Stokes said of Leach, his batting partner in the famous 2019 Ashes victory at Headingley.</p>\r\n\r\n<p>&quot;You know what he&#39;s had to go through to just be standing on the field, and also bowling those overs.&quot;</p>\r\n\r\n<p>&quot;The commitment he&#39;s shown is honestly inspiring, it&#39;s amazing.&quot;</p>\r\n\r\n<p>&quot;He is an absolute legend who epitomises what I want everyone&#39;s focus to be on, which is the team above individual success.&quot;</p>\r\n', 'upload/news/8303b62c91.jpg', '2024-01-29 10:04:20pm');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_code` varchar(255) NOT NULL,
  `pdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_title`, `video_code`, `pdate`) VALUES
(1, 'What is Web Development? Complete RoadMap from Basics to Advanced 2023', 'z0n1aQ3IxWI', '2024-01-28 12:09:51am'),
(2, 'Fastest way to become a Web Developer in 2024', 'NWnBxQjssvQ', '2024-01-28 12:10:33am'),
(4, 'React Server Components Change Everything', 'rGPpQdbDbwo', '2024-01-29 11:13:55pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
