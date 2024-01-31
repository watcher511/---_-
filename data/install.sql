-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2024-01-30 21:10:57
-- 服务器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 9,
  `priority` int(11) UNSIGNED ZEROFILL DEFAULT 00000000007
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `status`, `priority`) VALUES
(1, '什么是核污染？', '核污染是指放射性物质，如放射性核素或辐射性废物，被释放到环境中，导致环境污染和可能的健康危害。', 10, 00000000001),
(2, '核污染的主要来源是什么？', '核污染的主要来源包括核事故、核电站泄漏、核试验、核废物处理不当以及放射性废物的不当处置。', 10, 00000000002),
(3, '核污染对环境的影响是怎样的？', '核污染可能导致长期的环境影响，包括污染土壤、水源和大气，对生态系统造成负面影响，导致生物多样性丧失，并且辐射性物质的残留可能需要几代人来处理。', 10, 00000000003),
(4, '核污染对人体健康可能造成的影响是怎样的？', '核污染可能导致辐射暴露，从而增加癌症、遗传疾病和其他健康问题的风险，较高的暴露水平可能导致急性辐射病，并且通常不容易治愈。', 10, 00000000004),
(5, '世界上有哪些著名的核事故？', '世界上有一些核事故在历史上引起了广泛的关注和影响，包括1957年的美国霍普韦尔核事故和苏联的基尔希堡核事故、1979年的美国三里岛核事故、1986年的苏联切尔诺贝利核事故和2011年的日本福岛核事故，尤其是2011年福岛核事故，导致了2023年日本的福岛第一核电站开始核污水排放计划。', 10, 00000000005),
(6, '核污水和核废水有什么区别吗？', '核污水和核废水是两个相关但不完全相同的概念。核污水特指在核能发电过程中产生的含放射性物质的水，在福岛核事故后，核污水还包括了因为灾难响应措施而产生的水，比如用于冷却熔毁的核燃料的水；而核废水则是更广泛的概念，包括了核工业各个方面产生的废水。', 10, 00000000006),
(19, '实时跟进！', NULL, 9, 00000000007);

-- --------------------------------------------------------

--
-- 表的结构 `historical_activity`
--

CREATE TABLE `historical_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `operation` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `historical_views`
--

CREATE TABLE `historical_views` (
  `id` int(11) NOT NULL,
  `time` date DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `historical_views`
--

INSERT INTO `historical_views` (`id`, `time`, `count`) VALUES
(16, '2024-01-28', 1),
(17, '2024-01-30', 9);

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1673748758),
('m130524_201442_init', 1673748764),
('m190124_110200_add_verification_token_column_to_user_table', 1673748764);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL COMMENT '标号',
  `news_title` text NOT NULL COMMENT '标题',
  `news_content` text NOT NULL COMMENT '内容',
  `news_photo` varchar(255) NOT NULL COMMENT '配图路径',
  `news_date` date NOT NULL COMMENT '发表日期',
  `news_source` varchar(20) NOT NULL COMMENT '来源',
  `news_abstract` text NOT NULL COMMENT '摘要',
  `news_views` int(11) DEFAULT 0 COMMENT '浏览计数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_photo`, `news_date`, `news_source`, `news_abstract`, `news_views`) VALUES
(1, 'Fukushima nuclear disaster: Japan to release treated water in 48 hours', 'Japan will start releasing treated radioactive water from the tsunami-hit Fukushima nuclear plant into the Pacific Ocean on Thursday, despite opposition from its neighbours.\r\n\r\nThe decision comes weeks after the UN\'s nuclear watchdog approved the plan.\r\nSome 1.34 million tonnes of water - enough to fill 500 Olympic-size pools - have accumulated since the 2011 tsunami destroyed the plant.\r\nThe water will be released over 30 years after being filtered and diluted.\r\nAuthorities will request for the plant\'s operator to \"promptly prepare\" for the disposal to start on 24 August if weather and sea conditions are appropriate, Japan\'s Prime Minister Fumio Kishida said on Tuesday after a Cabinet meeting.\r\nMr Kishida had visited the plant on Sunday, prompting speculation the release was imminent.\r\nThe government has said that releasing the water is a necessary step in the lengthy and costly process of decommissioning the plant, which sits on the country\'s east coast, about 220km (137 miles) north-east of the capital Tokyo.\r\nJapan has been collecting and storing the contaminated water in tanks for more than a decade, but space is running out.\r\nIn 2011, a tsunami triggered by a magnitude 9.0 earthquake flooded three reactors of the Fukushima Daiichi Nuclear Power Plant. The event is regarded as the world\'s worst nuclear disaster since Chernobyl.\r\nShortly after, authorities set up an exclusion zone which continued to be expanded as radiation leaked from the plant, forcing more than 150,000 people to evacuate from the area.\r\nAnxiety and anger over Fukushima nuclear waste plan\r\nThe plan to release water from the plant has caused alarm across Asia and the Pacific since it was approved by the Japanese government two years ago.\r\nIt was signed off by the UN\'s nuclear watchdog in July, with authorities concluding the impact on people and the environment would be negligible.\r\nBut many people, including fishermen in the region, fear that discharging the treated water will affect their livelihoods.\r\nA crowd of protesters in Tokyo on Tuesday also staged a rally outside the prime minister\'s official residence, urging the government to stop the release.\r\nPlant operators Tepco have been filtering the water to remove more than 60 radioactive substances but the water will not be entirely radiation-free as it will still contain tritium and carbon-14- radioactive isotopes of hydrogen and carbon that cannot be easily removed from water.\r\nBut experts have said they are not a danger unless consumed in large quantities, because they emit very low levels of radiation.\r\n\"As long as the discharge is carried out as planned, radiation doses to people will be vanishingly small - more than a thousand times less than doses we all get from natural radiation every year,\" says Prof Jim Smith, who teaches environmental science at the University of Portsmouth.\r\nExperts also note that the contaminated water is being released into a massive body of water, the Pacific Ocean.\r\n\"Anything released from the site will therefore be massively diluted,\" says Prof Gerry Thomas, who teaches molecular pathology at the Imperial College London.\r\nListen: The desperate fight to prevent 2011\'s disaster\r\nTokyo has previously said the water that will be released into the Pacific Ocean, which has been mixed with seawater, has tritium and carbon 14 levels that meet safety standards.\r\nNuclear plants around the world regularly release waste water with tritium levels above that of the treated water from Fukushima.\r\nBut the plan has caused uproar in neighbouring countries, with China the most vocal opponent. It accused Japan of treating the ocean like its \"private sewer.\"\r\nChinese Foreign Ministry Spokesperson Wang Wenbin reiterated Beijing\'s objection on Tuesday, adding it would take \"necessary measures to safeguard the marine environment, food safety and public health\".\r\nJapan is \"putting its own self-interest over the long-term well-being of all humankind\" with the release of waste water, Mr Wang said.\r\nHong Kong said it would \"immediately activate\" import curbs on some Japanese food products.\r\nBoth South Korea and China have already banned fish imports from around Fukushima.\r\nSouth Korea\'s government, however, has endorsed the plan, and has accused protesters of scaremongering.', 'news-1.jpg', '2023-08-22', 'BBC', 'Japan is set to start releasing treated radioactive water from the Fukushima nuclear plant into the Pacific Ocean, a move opposed by neighboring countries. This decision follows the UN nuclear watchdog\'s approval and is part of the plant\'s decommissioning process. The release will occur over 30 years, involving 1.34 million tonnes of water. Despite the filtration of water to remove most radioactive substances, concerns remain over the impact on the environment and local industries. The action has sparked protests and criticism, particularly from China and South Korea, with China accusing Japan of treating the ocean as its sewer.', 2),
(2, 'Japan to begin fourth release of treated wastewater from Fukushima', 'Tokyo Electric Power Company (Tepco) aims to start a fourth release of treated radioactive water from Fukushima Daiichi Nuclear Power Plant in late February, continuing a move that has caused friction with China as well as other nearby countries. In late August last year, Tepco started releasing the treated water to decommission the plant after the nuclear disaster caused by the 2011 Tōhoku earthquake and tsunami.\r\n\r\nIn response to the discharge, China and Hong Kong banned seafood imports from Japan owing to safety concerns. Imports subsequently fell by 67% in August from the same month a year earlier.\r\n\r\nChina is Japan’s biggest market for seafood and Chinese authorities have condemned the measures, with the customs agency saying it risks the “radioactive contamination of food safety”. The foreign ministry called it an “extremely selfish and irresponsible act”.\r\n\r\nHundreds of South Koreans also protested against the measures in Seoul in August, indicating Japan’s decision was widely unpopular in the region.\r\n\r\nAn advanced liquid processing system has been used to treat the wastewater, removing all radionuclides from it apart from tritium, a radioactive isotope of hydrogen. Tritium has a half-life of 12 years and decays into helium, which is harmless. The levels of tritium found in the surrounding waters since the initial discharge are below the World Health Organization’s guidelines for drinking water quality.\r\n\r\nScientists have noted that China’s own nuclear power plants release wastewater with higher levels of tritium than that found in the Fukushima discharge.', 'news-2.jpg', '2024-01-16', 'power-technology', 'Tokyo Electric Power Company (Tepco) plans to start its fourth release of treated radioactive water from the Fukushima plant in late February, a move that has led to regional tensions and seafood import bans from China and Hong Kong. Despite treatment reducing harmful radionuclides, concerns remain about environmental and food safety.', 5),
(3, 'Japan\'s Tepco to start fourth release of treated Fukushima water in late Feb', 'Tokyo Electric Power Company (Tepco) plans to start a fourth release of treated radioactive water from the wrecked Fukushima Daiichi Nuclear Power Plant in late February, an official said on Tuesday, continuing a move criticised by China.\r\n\r\nThe staged water releases began last August in what Japan says is a key step in decommissioning the plant hit by an earthquake and tsunami in 2011 in the world\'s worst nuclear disaster since Chernobyl.\r\n\r\nChina and Russia have banned seafood imports from Japan over safety concerns that Tokyo has said are scientifically unjustified.\r\n\r\nIn the fourth release, about 7,800 cubic metres (275,454 cubic feet) of the treated water will be sent into the Pacific Ocean, similar to the previous three discharges, Junichi Matsumoto, the Tepco official overseeing the operation, said in a media presentation.\r\n\r\nAs part of the decades-long plan to release the water, the fifth and sixth discharges will occur during the fiscal year ending in March 2025, his presentation showed.\r\n\r\nJapan says the water is treated to remove most radioactive elements except tritium, an isotope of hydrogen that must be diluted because it is difficult to filter.\r\n\r\nTritium levels in surrounding waters since the initial discharge have met pre-determined standards and are below the World Health Organization\'s guidelines for drinking water quality, Matsumoto said.\r\n\r\nAfter initially stopping all nuclear reactors after the 2011 Fukushima disaster, Japan has started to gradually bring nuclear power back to its energy mix as it tries to cut its carbon footprint and reduce imports of fossil fuels.\r\n\r\nBut the powerful earthquake that struck Japan\'s Ishikawa prefecture on New Year\'s Day caused water spillover from spent nuclear fuel pools and oil leaks at the idled Shika nuclear power station in the region, spurring fresh safety concerns.\r\n\r\nAkira Ono, Tepco\'s chief decommissioning officer, told the same briefing on Tuesday that its Kashiwazaki-Kariwa nuclear power plant, the world\'s biggest, did not observe \"any specific damage\" during the Jan. 1 earthquake, which also affected the Niigata prefecture where the plant is located.\r\n\r\nJapan\'s Nuclear Regulation Authority lifted an operational ban on the Kashiwazaki-Kariwa nuclear plant just days before the recent earthquake, but its restart time is unknown.', 'news-3.webp', '2024-01-16', 'yahoo!news', 'Tokyo Electric Power Company (Tepco) plans to release treated radioactive water from the Fukushima Daiichi Nuclear Power Plant for the fourth time in late February, continuing a move criticized by China. The staged water releases, which began in August 2023, are part of Japan\'s decommissioning process for the plant damaged by a 2011 earthquake and tsunami. About 7,800 cubic meters of treated water will be discharged into the Pacific Ocean in this fourth release, with two more releases scheduled by March 2025. Japan argues that the water is treated to remove most radioactive elements, except tritium, and meets safety standards. However, China and Russia have banned seafood imports from Japan over safety concerns.', 1),
(4, 'Japan starts 3rd release of nuclear-contaminated wastewater into ocean despite opposition', 'Japan on Thursday started the third round of release of nuclear-contaminated wastewater from the crippled Fukushima Daiichi Nuclear Power Plant into the Pacific Ocean.\r\n\r\nDespite concerns and opposition among local fishermen in Fukushima Prefecture as well as other countries, Tokyo Electric Power Company (TEPCO), the plant\'s operator, started discharging the radioactive wastewater at around 10:20 am local time.\r\n\r\nAs in the first and second rounds, conducted between August and October, TEPCO said that it will dilute some 7,800 tons of the radioactive wastewater, which still contains tritium, a radioactive substance, with a large amount of seawater before releasing it.\r\n\r\nTEPCO said it plans to pump about 460 tons of water per day about 1 km off the coast via an underwater tunnel through Nov 20.\r\n\r\nThe Chinese Embassy in Japan expressed firm opposition to the latest discharge. Japan\'s continuous dumping of nuclear-contaminated water poses serious risks to the global marine environment, a spokesperson for the embassy said.\r\n\r\nThe spokesperson called on Japan to fully respond to the concerns of the international community, subject itself to international oversight, and handle the nuclear-contaminated water in a science-based, open, transparent and safe manner.\r\n\r\nThursday\'s discharge is the third round of four to be conducted by the end of next March to discharge a total of about 31,200 tons of the water stored in tanks at the nuclear plant in Fukushima Prefecture, northeastern Japan.', 'news-4.jpeg', '2023-11-02', 'chinadaily', 'Japan has started its third round of releasing nuclear-contaminated wastewater from the Fukushima Daiichi Nuclear Power Plant into the Pacific Ocean. Despite opposition, Tokyo Electric Power Company (TEPCO) is diluting and discharging the radioactive water. The Chinese Embassy in Japan has expressed strong opposition, citing global marine environmental risks, and called for international oversight and a transparent, science-based approach to handling the water. This is part of a series of releases aiming to discharge approximately 31,200 tons of stored water from Fukushima by March next year.', 0),
(5, 'Nobody drinks \'ALPS treated water\' despite TEPCO\'s claim of meeting tritium standards', 'Although Tokyo Electric Power Company Holdings kept emphasizing that the concentration of tritium in nuclear-contaminated water discharged from the wrecked Fukushima Daiichi Nuclear Power Plant into the ocean meets WHO\'s standard for drinking water, no one drinks ALPS treated water simply because the tritium concentration meets international norms on water quality, an official of the company said. Still, TEPCO plans more releases of diluted but contaminated water to the sea.\r\n\r\n\"Indeed, nobody is drinking ALPS-treated water,\" said Junichi Matsumoto, the corporate officer in charge of ALPS-treated water management for TEPCO, at an online news conference on Tuesday. \"But considering the concentration of the radioactive substance, we can confirm that it has been satisfying the safety level and will not cause any negative impact on the human body or health.\"\r\n\r\nHowever, the research on the impact of low-dose radiation exposures on human health is not currently being conducted in Japan. After a nuclear accident occurred following the Great East Japan Earthquake and a tsunami that struck the Fukushima plant in March 2011, Japan began research in this area, but the research came to a halt due to resistance, said Masashi Goto, a former nuclear power plant engineer who has become critical of the industry.\r\n\r\n\"It is now believed that as long as the radiation levels are reduced, it is acceptable to release radioactive substances, which is incorrect,\" Goto said.\r\n\r\n\"Simply lowering the concentration of radioactive substances doesn\'t eliminate the danger to humans. The amount of the first batch of nuclear-contaminated water discharged from the Fukushima Daiichi Nuclear Power Plant is greater than the average amount of nuclear wastewater released by all the nuclear power plants in Japan annually in the five years before the Fukushima nuclear accident in 2011. Even if the contaminated water is diluted, it will still have an impact on the marine environment.\"\r\n\r\nHe noted that the standards for radioactive substance emissions are established to ensure the normal operation of nuclear power plants, but these standards are not set too strict, as otherwise, nuclear power plants may not be allowed to exist. Therefore, meeting the standards for radioactive substance emissions does not necessarily make the discharged water safe.\r\n\r\n\"Furthermore, the current research on the effects of human exposure to nuclear radiation is still incomplete. There is no clear research on the impact of tritium on the human body. In this context, TEPCO\'s claim that diluting and discharging nuclear-contaminated water into the sea is safe is not scientifically sound,\" he said.\r\n\r\nJapan started releasing nuclear-contaminated water from the crippled Fukushima plant into the sea on Aug 24 and has so far dumped approximately 23,400 cubic meters of such water in three rounds.\r\n\r\nThe fourth round is scheduled to commence in late February, aiming to discharge approximately 4,500 cubic meters of nuclear-contaminated water stored in the K4 area tank Group E and approximately 3,300 cu m stored in the K3 area tank Group A, Matsumoto said.', 'news-5.jpeg', '2024-01-16', 'chinadaily', 'Despite Tokyo Electric Power Company Holdings claiming that the tritium concentration in nuclear-contaminated water from the Fukushima Daiichi Nuclear Power Plant meets WHO\'s drinking water standards, no one is drinking this treated water. TEPCO plans more releases into the ocean, asserting safety. However, research on low-dose radiation exposure\'s impact on human health in Japan has halted. Critics argue that simply meeting emissions standards does not guarantee safety, and the impact of tritium on the human body remains unclear. Japan has already released approximately 23,400 cubic meters of contaminated water into the sea and plans a fourth round in late February.', 1);

-- --------------------------------------------------------

--
-- 表的结构 `news_comment`
--

CREATE TABLE `news_comment` (
  `comment_id` int(11) NOT NULL COMMENT '标号',
  `comment_news` int(11) NOT NULL COMMENT '所属新闻',
  `comment_user` int(11) NOT NULL COMMENT '来源用户',
  `comment_content` text NOT NULL COMMENT '评论内容',
  `comment_time` datetime NOT NULL COMMENT '评论时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='新闻评论' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `news_comment`
--

INSERT INTO `news_comment` (`comment_id`, `comment_news`, `comment_user`, `comment_content`, `comment_time`) VALUES
(10, 1, 4, 'that\'s terrible!', '2024-01-30 21:42:56');

-- --------------------------------------------------------

--
-- 表的结构 `news_source`
--

CREATE TABLE `news_source` (
  `source_name` varchar(20) NOT NULL COMMENT '名称',
  `source_introduction` text NOT NULL COMMENT '简介',
  `source_twitter` varchar(255) NOT NULL COMMENT 'twitter',
  `source_facebook` varchar(255) NOT NULL COMMENT 'facebook',
  `source_instagram` varchar(255) NOT NULL COMMENT 'instagram',
  `source_photo` varchar(255) NOT NULL COMMENT '图标路径'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='新闻来源' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `news_source`
--

INSERT INTO `news_source` (`source_name`, `source_introduction`, `source_twitter`, `source_facebook`, `source_instagram`, `source_photo`) VALUES
('BBC', 'The British Broadcasting Corporation (BBC) is the national broadcaster of the United Kingdom, based at Broadcasting House in London. It is the world\'s oldest national broadcaster, and the largest broadcaster in the world by number of employees, employing over 22,000 staff in total, of whom approximately 19,000 are in public-sector broadcasting.', 'https://twitter.com/BBCWorld', 'https://www.facebook.com/bbcnews/', 'https://www.instagram.com/bbcnews/', 'BBC.jpg'),
('chinadaily', 'China Daily is a prominent online news platform that offers comprehensive coverage of news and events from China and around the world. As one of the leading English-language news websites in China, it provides readers with timely updates on a wide range of topics, including politics, economics, culture, and technology. With its commitment to unbiased reporting and in-depth analysis, China Daily is a reliable source for staying informed about the latest developments and trends in China and the global arena. Whether you are interested in business insights, cultural exchanges, or international affairs, China Daily delivers a diverse array of news articles to cater to your interests.', 'https://twitter.com/ChinaDailyUSA', 'http://www.facebook.com/chinadaily', '', 'chinadaily.png'),
('power-technology', 'Power-technology.com is a specialized news platform providing the latest updates and analysis in the global power and energy sector. It focuses on various aspects of the industry, including renewable energy, nuclear power, and technological advancements in energy production and distribution. The website is a key resource for industry news, offering insights into new projects, market trends, and developments in the power sector. It caters to professionals and enthusiasts interested in staying informed about the energy industry\'s evolving landscape.', 'https://twitter.com/Power_OnlineMag', 'https://www.facebook.com/globaldataplc/', '', 'PT.webp'),
('yahoo!news', 'Yahoo! News is a widely recognized and popular online news platform that provides a comprehensive range of news articles and reports on various topics, including world news, politics, business, entertainment, sports, technology, and more. It is a division of Yahoo!, a well-known internet company, and offers a diverse selection of news content from different sources and publishers. Users can access Yahoo! News through its website or mobile app to stay informed about current events, trending stories, and in-depth coverage from around the globe. Yahoo! News also features interactive elements, multimedia content, and user-generated comments, making it a valuable resource for those seeking the latest news and information.', 'https://twitter.com/yahoo', 'https://facebook.com/yahoo', 'https://www.instagram.com/yahoo/', 'yahoo!news.png');

-- --------------------------------------------------------

--
-- 表的结构 `opinion`
--

CREATE TABLE `opinion` (
  `id` int(11) NOT NULL,
  `source_country` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `identity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `opinion`
--

INSERT INTO `opinion` (`id`, `source_country`, `content`, `identity`) VALUES
(1, '中国', '“令人遗憾的是，日方对国际呼声置若罔闻，处心积虑营造排海安全无害的假象，甚至对表达正当关切的邻国无理指责，所作所为已引发周边国家及国内民众的强烈愤慨。”', '外交部发言人汪文斌'),
(2, '日本', '“别排放核污染水”\r\n“政府违背了和民众之约”\r\n“东电污染大海，不会受良心谴责吗”', '广岛、长崎核爆受害者子孙'),
(3, '中国', '日本将一己私利凌驾于全人类长远福祉之上，极其自私和不负责任', '生态环境部'),
(4, '韩国', '韩国将维持对日本福岛水产品的进口禁令不变，若排放不符合标准，韩国外交部随时准备好提起国际诉讼。', '韩国总理韩德洙'),
(5, '美国及西方国家', '在IAEA发布评估报告之后，美国国务院发表声明表示“欢迎”，西方政客对日本排海计划的争议性基本保持缄默。', '美国国务院/西方政客');

-- --------------------------------------------------------

--
-- 表的结构 `past`
--

CREATE TABLE `past` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `past`
--

INSERT INTO `past` (`id`, `name`, `details`, `path`, `time`, `introduction`, `title`, `weight`) VALUES
(1, 'INES 1', '日本美浜核电站事故', 'past_1.jpg', '2004年8月9日', '美浜核电站座落于东京西部大约320公里的福井县，1976年投入运营，1991年至2003年曾发生过几次与核有关的小事故。2004年8月 9日，涡轮所在的建筑内连接3号反应堆的水管在工人们准备进行例行安全检查时突然爆裂。虽然并未导致核泄漏，但蒸汽爆发还是导致5名工人死亡，数十人受伤。 2006年，美浜核电站又发生火灾，导致两名工人死亡。', '日本美浜核电站事故', '一颗星'),
(2, 'INES 1', '美国戴维斯-贝斯反应堆事故', 'past_2.jpg', '2002年3月', '戴维斯-贝斯核电站座落于俄亥俄州橡树港北部大约10英里(约合16公里)，1978年7月投入运营，计划于2017年4月关闭。运营期间，这座核电站曾多次出现安全问题，包括1998年遭到一场F2级龙卷风袭击。最严重的事故发生在2002年3月，当时出现的严重腐蚀导致核电站关闭了两年左右。\r\n\r\n维修期间，工人们在碳钢结构反应堆容器上发现一个6英寸(约合15.24厘米)深的腐蚀洞。遭腐蚀后的容器厚度只有3/8英寸(约合9.52毫 米)，用以防止灾难性的爆炸和随之而来的冷却剂泄漏。如果附近的控制棒在爆炸中受损，关闭反', '美国戴维斯-贝斯反应堆事故', '一颗星'),
(3, 'INES 3', '美国国家反应堆试验站事故', 'past_3.jpg', '1961年1月3日', '1961年1月3日发生在美国的核事故是最为早期的大型核电站事故之一，当时的蒸汽爆发和熔毁导致1号固定式小功率反应堆的3名工人死亡。这座反应堆位于爱达荷州瀑布市西部大约40英里（约合60公里）的国家反应堆试验站，采用单一大型中央控制棒，现在已经废弃。\r\n\r\n在对反应堆进行维护时，工作人员需要将控制棒拔出大约4英寸（约合10厘米），但这项操作最终出现可怕故障。控制棒被拔出了26英寸（约合65厘米），导致核反应堆进入临界状态，随后发生爆炸并释放出放射性物质，共造成3名工人死亡。其中一名工人被屏蔽塞钉在反应堆所在', '美国国家反应堆试验站事故', '三颗星'),
(4, 'INES 3', '捷克斯洛伐克Bohunice核电站事故', 'past_4.jpg', '1977年', '1977年，捷克斯洛伐克(现在的斯洛伐克)Jaslovské Bohunice的Bohunice核电站发生事故。当时，核电站最老的A1反应堆因温度过高导致事故发生，几乎酿成一场大规模环境灾难。A1反应堆也被 称之为“KS-150”，由前苏联设计，虽然独特但并不成熟，从一开始就种下灾难的种子。\r\n\r\nA1反应堆的建造开始于1958年，历时16年。未经验证的设计很快就暴露出一系列缺陷，在投入运转的最初几年，这个反应堆曾30多次无缘无故 关闭。1976年初，反应堆发生气体泄漏事故，导致两名工人死亡。仅仅一年之后', '捷克斯洛伐克Bohunice核电站事故', '三颗星'),
(5, 'INES 3', '前苏联托姆斯克-7核燃料回收设施事故', 'past_5.jpg', '1993年4月6日', '西伯利亚公司Chemical Enterprises旗下拥有众多工厂和核电站，座落于俄罗斯谢韦尔斯克市。这里曾经是前苏联的“秘密之城”，1992年前一直被称之为“托姆斯克 -7”，这个代号实际上是一个邮箱号。虽然俄罗斯前总统叶利钦放宽了对谢韦尔斯克的限制，但直到今天，政府仍不允许公众进入这座城市。\r\n\r\n托姆斯克-7核燃料回收设施是谢韦尔斯克市的“企业”之一。1993年4月6日，这座核设施登上头版头条。这一天，工人们用具有高度挥发性的硝酸清理托姆斯克-7钚处理厂的一个地下容器，硝酸与容器内含有痕量钚的残余', '前苏联托姆斯克-7核燃料回收设施事故', '三颗星'),
(6, 'INES 5', '前苏联切尔诺贝利核灾难', 'past_6.jpg', '1986年4月26日', '1986年前苏联发生的切尔诺贝利核灾难严重程度超过克什特姆核事故，如果将核辐射扩散程度作为测量标准，这场核灾难的严重程度达到克什特姆核灾难的4倍。迄今为止，切尔诺贝利核电站的蒸汽爆发和反应堆熔毁事故与福岛第一核电站核安全事故齐名，成为历史上INES等级达到7级的核事故。\r\n\r\n这场核灾难发生在1986年4月26日，当时4号反应堆的技术人员正进行透平发电机试验，即在停机过程中靠透平机满足核电站的用电需求。由于人为失误导致一系列意想不到的突然功率波动，安全壳发生破裂并引发大火，放射性裂变产物和辐射尘释放到大气', '前苏联切尔诺贝利核灾难', '五颗星');

-- --------------------------------------------------------

--
-- 表的结构 `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `measurement` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `t_class` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `price`
--

INSERT INTO `price` (`id`, `item_name`, `price`, `measurement`, `img_path`, `introduction`, `currency`, `t_class`, `title`) VALUES
(1, '石油', 82.65, '桶', 'price1.jpg', '核事故/核污染可能导致对核能的依赖减少，从而增加对其他能源形式，特别是石油的需求。这种需求转移可能会导致石油价格上涨。', 1, '能源', '核污染影响能源需求'),
(2, '铀', 97.45, '磅', 'price2.jpg', '核污染影响投资者对核能和相关产业的看法，尤其是核事故导致的环境污染影响一系列金属开采与加工，并导致相关环境和安全规制更加严格，增加成本，影响供应。', 1, '金属', '现货价格已经上涨到近15年来的最高点，反映了核能市场的紧张态势和供应短缺的担忧'),
(3, '海参', 489.53, '千克', 'price3.jpg', '在2023年，由于中国对日本处理过的放射性废水排放作出反应而实施的全面禁令，中国从日本进口的海产品数量下降了40.9%。这导致中国从日本的海产品进口额降至2.9949亿美元，这是自2020年COVID-19大流行期间双边贸易萎缩以来的最低水平。这个数据反映了日本海产品在国际市场上因核污染担忧而遭受的影响。', 1, '海产品', '在日本开始排放经处理的核污水入海后，中国的国内海产品销售显著增加'),
(4, '大米', 3.77, '千克', 'price4.jpg', '中国是全球最大的大米生产国之一，但由于人口众多，需求量也很大，因此也是世界上最大的大米进口国之一；福岛是日本主要的水稻产区之一，历史上以品质优良而闻名，产区内有许多有名的水稻品种；然而，福岛的农产品也因2011年的核事故遭到质疑和市场挑战，如今排放核污水可能进一步造成影响。', 1, '农产品', '中国高度重视食品安全');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `purview` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `purview`) VALUES
(1, 'admin', 'dOukCdzkuR_bNC7m5w4MX7dIM8-xpDU0', '$2y$13$tyAaDKSNeoqImx7r3eKIuedpSANxoyzAvv30JxhyNdXreCxJ7CaLG', 'uClvX1oKNbKVCykeuk4BimMBZfejNprA_1675525876', 'admin@gmail.com', 10, 1674014197, 1675525876, 'IIlCzFSOBKAV61Q-pBPVXdiSrcBW2AcB_1674014197', 0),
(2, 'user', 'W0ntFZEWpQd8UBTsSxJD8w119azHHlus', '$2y$13$9g/xDBc31hGcVwAsseVzduJdMW6euHXVxPUA9trrcRY7dlmQUROZ.', NULL, 'user@gmain.com', 10, 1675474822, 1675524673, 'lyIN5fYN65AlTk_5valgZI-PcPLjUK0a_1675474822', 1),
(3, 'root', '-MbGxKSd7MVMehBj_JEZtKBVovo_jGm_', '$2y$13$k2hH0ipzEV6SaaCAAxm5re5FtBcQUuZ.Og.uzlnMJL/NTnvt8mDk.', NULL, 'root@gmail.com', 10, 1675526325, 1675526350, 'o0R1EwEPDf2ySlAkoU_EHDqHGPI6xdUE_1675526325', 1),
(4, 'u1', '3gcz-glXc2RxW--wodWkfCOw9ngGBZ9k', '$2y$13$x2XPpM0EjW71SSWm6aFs9uH6WR1Lb1H8TjnvhRrSEMQSAP7Upq4R.', NULL, 'user1@qq.com', 10, 1706256922, 1706612900, 'RW9_aH7uuKk_88UvSnh35EMjbsZe6HYo_1706256922', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `historical_activity`
--
ALTER TABLE `historical_activity`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `historical_views`
--
ALTER TABLE `historical_views`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`) USING BTREE;

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`) USING BTREE,
  ADD KEY `news_source_fk` (`news_source`) USING BTREE;

--
-- 表的索引 `news_comment`
--
ALTER TABLE `news_comment`
  ADD PRIMARY KEY (`comment_id`) USING BTREE,
  ADD KEY `comment_news_fk` (`comment_news`) USING BTREE,
  ADD KEY `comment_use_fk` (`comment_user`) USING BTREE;

--
-- 表的索引 `news_source`
--
ALTER TABLE `news_source`
  ADD PRIMARY KEY (`source_name`) USING BTREE;

--
-- 表的索引 `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `historical_activity`
--
ALTER TABLE `historical_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用表AUTO_INCREMENT `historical_views`
--
ALTER TABLE `historical_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '标号', AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `news_comment`
--
ALTER TABLE `news_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '标号', AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 限制导出的表
--

--
-- 限制表 `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_source_fk` FOREIGN KEY (`news_source`) REFERENCES `news_source` (`source_name`);

--
-- 限制表 `news_comment`
--
ALTER TABLE `news_comment`
  ADD CONSTRAINT `comment_news_fk` FOREIGN KEY (`comment_news`) REFERENCES `news` (`news_id`),
  ADD CONSTRAINT `comment_use_fk` FOREIGN KEY (`comment_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
