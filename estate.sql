-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 06:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `construction_updates`
--

CREATE TABLE `construction_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `construction_updates`
--

INSERT INTO `construction_updates` (`id`, `title`, `description`, `image`, `developments`, `created_at`, `updated_at`) VALUES
(1, 'June 2021', '<h3>Foreword, by Tom Russell, Managing Partner</h3><p>As we enter the second half of 2021, this is the perfect time to reflect on a successful six months and look forward to what we can expect in the future. Our team continues to work extremely hard in spite of the ongoing Covid-19 restrictions to deliver our outstanding service to all our clients.</p><p>Our report from Q1 2021 stated our optimism for the year ahead thanks to the market performing strongly and good progress being made across our development portfolio. Now that we have passed the half way mark of the year it is clear that positivity was well-placed. Property prices are rising rapidly, rents have remained strong and our own developments are progressing well &ndash; including&nbsp;<a href=\"https://www.alliance-investments.com/oxygen/?hsLang=en\">Oxygen</a>&nbsp;which is approaching completion.</p><p>It seems that every week brings further confirmation that the property market is growing fast. News from&nbsp;<a href=\"https://www.halifax.co.uk/media-centre/house-price-index.html\" rel=\"noopener\" target=\"_blank\">Halifax</a>&nbsp;this month showed that the average house price had increased by 9.5% over the year to the end of May, representing the strongest growth for seven years.</p><p>Month-on-month, the latest report from&nbsp;<a href=\"https://www.hometrack.com/uk/insight/uk-house-price-index/april-2021-house-price-index/\" rel=\"noopener\" target=\"_blank\">Hometrack</a>&nbsp;shows that property values have increased by an average of 4.1% compared to the same point a year ago, with cities like&nbsp;<a href=\"https://www.alliance-investments.com/manchester/?hsLang=en\">Manchester</a>&nbsp;(6.8%) outperforming the rest of the country by some distance. It has been known for a long time that the London market is not what it used to be &ndash; instead the Manchester market has taken over as the number one property destination.</p><p>The latest&nbsp;<a href=\"https://www.rightmove.co.uk/news/rental-price-tracker/\" rel=\"noopener\" target=\"_blank\">Rental Price Tracker from Rightmove</a>&nbsp;shows that the rental market is following a similar path. While rents in 65% of London have fallen below the level they were at five years ago, the North West has seen an average rental rise of more than 15% over the same period. Likewise, London&rsquo;s average rent has fallen by more than 7% over the last year compared to a rise of 4.4% in the North West.</p><p>With the above in mind, it is no surprise to see that tenancy rates have remained high in our completed developments &ndash; including&nbsp;<a href=\"https://www.alliance-investments.com/axis-tower/?hsLang=en\">AXIS</a>,&nbsp;<a href=\"https://www.alliance-investments.com/manhattan/?hsLang=en\">Manhattan</a>&nbsp;and&nbsp;<a href=\"https://www.alliance-investments.com/parkgate-birmingham/?hsLang=en\">Park Gate</a>. The appetite for luxury city centre rental homes continues to grow, and we are anticipating demand increasing even further as the buildings establish themselves even more in the market.</p><p>Thank you as always for your continued support. We can&rsquo;t wait to share further success with you over the second half of 2021 and beyond. Please enjoy this construction update and don&rsquo;t hesitate to get in touch if you have any questions.</p>', '1643121096address.jpg', '1', '2022-01-25 09:31:36', '2022-01-25 09:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `title`, `detail`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'South African Investor Guide', 'Download our latest investor guide for South Africans looking to hedge against the Rand and diversify their portfolio with an overseas investment in the UK.', '<p>Guide highlights include:</p><ul>	<li>An overview of the UK property market</li>	<li>Brexit and the opportunity it presents to international investors</li>	<li>Spotlight on key UK property sectors</li>	<li>Why investors are turning away from London</li>	<li>Structuring your investment</li></ul>', '1643118602banner3.jpg', '2022-01-25 08:49:36', '2022-01-25 08:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guide_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guide_detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guide_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `growth` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `around_location` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `image`, `detail`, `guide_title`, `guide_detail`, `guide_description`, `growth`, `location`, `location_title`, `location_description`, `location_image`, `about_title`, `about_description`, `around_location`, `created_at`, `updated_at`) VALUES
(1, 'Altrincham', '1643117835img5.jpg', 'As one of the most desirable suburbs of Manchester, Altrincham represents a local success story.', 'The North West\'s best place to live', 'Altrincham’s revitalised town centre has become its own suburban culture bubble making it one of Manchester\'s most desirable neighbourhoods.  With outstanding schools, green spaces and a vibrant shopping and cultural scene, it\'s no surprise that house prices are on the up, increasing by 15% in the last 5 years.  DOWNLOAD OUR GUIDE TO ALTRINCHAM', 'Download your essential guide to Altrincham and find out more about the town which was awarded Best Place to Live in the UK in the North West by The Sunday Times for 2020.  Guide highlights include:  Altrincham\'s recent growth Top restaurants, bars and shops Cultural highlights Outstanding schools', NULL, '8309830534,89204390354', 'The Address, Altrincham', 'The Address brings 36 luxury one- and two-bed apartments alongside three-bedroom duplexes to the centre of Altrincham.  All the homes in this Altrincham property are finished to the highest specification and enjoy balconies, plus all of the facilities that you would expect for today’s modern living. Including parking, a lift to all floors and a spectacular atrium with light flooding into the building through a central core.', '1643047655Central-Retail-Park-February-2020.jpg', NULL, NULL, NULL, '2022-01-23 12:49:24', '2022-01-25 08:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_23_085612_create_sliders_table', 2),
(8, '2022_01_23_111429_create_settings_table', 3),
(9, '2022_01_23_122410_create_testimonials_table', 4),
(10, '2022_01_23_124843_create_news_table', 5),
(11, '2022_01_23_132103_create_residential_devs_table', 6),
(12, '2022_01_23_151730_create_residential_galleries_table', 7),
(13, '2022_01_23_153216_create_residential_videos_table', 8),
(14, '2022_01_23_154106_create_residential_features_table', 9),
(15, '2022_01_23_163854_create_residential_about_locations_table', 10),
(16, '2022_01_23_164142_create_residential_perks_table', 10),
(20, '2022_01_23_165853_create_locations_table', 11),
(21, '2022_01_24_114346_create_why_buy_locations_table', 12),
(22, '2022_01_24_120417_create_spotlight_locations_table', 13),
(25, '2022_01_24_121843_create_services_table', 14),
(26, '2022_01_24_131700_create_service_sliders_table', 15),
(27, '2022_01_24_133634_create_teams_table', 16),
(29, '2022_01_25_133930_create_guides_table', 17),
(30, '2022_01_25_140612_create_construction_updates_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `read_time`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pandemic bounce back 2022 – cities outperforming expectations', '<p>No part of the UK was unaffected by the pandemic. Every industry and every place had to make huge changes on a very short timescale, leaving many questions as we adapted to the new day-to-day reality.</p>\r\n\r\n<p>The UK&rsquo;s cities and large towns arguably felt the impacts most of all. These places account for approximately 60% of the national economy and more than half the population. Anything which affected cities was sure to be a major issue for everywhere else too.</p>\r\n\r\n<p>Now that the worst of the pandemic has passed, and public health measures are allowing the country to open up and return to something like normal, the UK&rsquo;s cities are bouncing back &ndash; and that is very good news for anyone&nbsp;investing in property.</p>\r\n\r\n<p>It was not always easy to see that cities would return to their former strength so quickly. As&nbsp;<a href=\"https://blog.oxfordeconomics.com/world-post-covid/cities-will-bounce-back\">Oxford Economics</a>&nbsp;notes, &ldquo;Cities are typically home to large numbers of office-based jobs, most of which can be done anywhere with an internet connection and space for a desk. But cities are also hubs for entertainment, hospitality and culture, sectors serving both residents and visitors.</p>\r\n\r\n<p>&ldquo;For these sectors, a combination of lockdowns and travel restrictions generally meant complete closure. The same was initially true for many retailers, and for other activities such as gyms and sporting events.&rdquo;</p>\r\n\r\n<p>However, the same report notes that positivity is returning. For example, if we take the offices sector, it is becoming clear that the levels of working from home seen throughout the pandemic will not be maintained in the long-term. Instead, a survey from the&nbsp;<a href=\"https://www.ons.gov.uk/employmentandlabourmarket/peopleinwork/employmentandemployeetypes/articles/businessandindividualattitudestowardsthefutureofhomeworkinguk/apriltomay2021\">Office for National Statistics</a>&nbsp;shows that 85% of people prefer a &ldquo;hybrid approach&rdquo;.</p>\r\n\r\n<p>This is a relief for those cities hardest hit by the sudden move to home working en masse such as&nbsp;<a href=\"https://alliance-investments-19537328.hs-sites.com/london?hsLang=en&amp;__hstc=42614778.995b529ea0b5d2e8332e8ec4401fae1b.1642684112741.1642919839003.1642940573246.3&amp;__hssc=42614778.8.1642940573246&amp;__hsfp=826266019\" rel=\"noopener\">London</a>. The capital saw many people leave the city centre in the pandemic, but now they are returning as the hybrid approach to work is coming into place, and people wish to live closer to the city centre again. Confidence has returned to the London office sector to such a degree that&nbsp;<a href=\"https://www.savills.co.uk/insight-and-opinion/savills-news/323251/central-london-office-take-up-predicted-to-reach-8.2-million-sq-ft-in-2022-as-most-occupiers-look-to-maintain-or-add-space\">Savills</a>&nbsp;is predicting 8.2m sqft of office lets will go through in 2022 as occupiers look to maintain space or expand.</p>\r\n\r\n<p>Likewise,&nbsp;<a href=\"https://alliance-investments-19537328.hs-sites.com/manchester?hsLang=en&amp;__hstc=42614778.995b529ea0b5d2e8332e8ec4401fae1b.1642684112741.1642919839003.1642940573246.3&amp;__hssc=42614778.8.1642940573246&amp;__hsfp=826266019\" rel=\"noopener\">Manchester</a>&nbsp;is likely to see more than 1.25m sq ft of office space uptake in 2022 according to OBI, as reported in&nbsp;<a href=\"https://www.thebusinessdesk.com/northwest/news/2091314-consultants-predicting-positive-manchester-property-market-in-2022\">Business Desk</a>. The North West city is the Northern equivalent of London and the general health of its office market is a good sign for wider economic prospects in the region as the bounce back from the pandemic continues.</p>\r\n\r\n<p>To take&nbsp;Manchester&nbsp;as an example, JLL anticipates that property values will grow 25.8% in the city by 2026 &ndash; far exceeding most of the rest of the country over that period. This follows growth of 8.5% in 2021 as recorded by the latest&nbsp;<a href=\"https://www.hometrack.com/uk/insight/uk-house-price-index/november-2021-house-price-index/\">Hometrack Cities Index</a>.</p>\r\n\r\n<p>Rental growth is also expected to be strong in the city. Demand increased by 36% for Manchester rental property over the course of 2021, and this shows no signs of slowing. Indeed,&nbsp;<a href=\"https://alliancecityliving.com/\">Alliance City Living</a>&nbsp;reported in Q4 2021 that rents for studios, two- and three-beds in Manchester are at all time highs, and the lack of supply means they should keep increasing further in 2022. JLL agrees with this assessment, projecting rental increases of 15.4% in the city by 2026 &ndash; good news for anyone&nbsp;investing in property in 2022.</p>\r\n\r\n<p>Likewise, the London residential property market looks set to have a strong 2022 and beyond according to the reports. Returning to the same JLL report, we can see that almost 26% house price growth is expected in the next four years &ndash; putting London on a par with Manchester &ndash; and that rents could also increase by 16% over that period.</p>\r\n\r\n<p>When it comes to&nbsp;property investment in the UK,&nbsp;over recent months London has seen rising competition from other UK regions, especially the North. The rising cost of entry combined with falling demand has seen rental returns and capital appreciation for London fall far below regional hotspots like Manchester. Now, however, indications are that the London market may come out of the pandemic recovery stronger than ever.</p>\r\n\r\n<p>The economy as a whole is beginning to perform again, but certain cities are doing far better than average. That is true for the property market as well, and this is a good time to consider your next UK investment.</p>\r\n\r\n<p>To learn more about which markets should be on your wish list, and to find out about the outstanding investment opportunities on offer at Alliance Investments, get in touch with our team today.</p>', '16429433622019-10-24-Manchester-skyline.jpg', '3', NULL, '2022-01-23 08:09:22', '2022-01-23 08:11:23'),
(2, 'Economic trends of 2022 – why property needs to be your priority', '<p>It is fair to say that the last two years have been an unusual time for the UK economy thanks to the impact of the Covid-19 pandemic. Following an initial slump thanks to lockdowns and other legal changes, the national economy is now in the full swing of recovery and has regained its health ahead of a strong future.</p>\r\n\r\n<p>Throughout the upheaval, one sector of the economy not only remained as strong as ever, but it actually continued to grow &ndash; property. The continued growth of the UK property market, and its attractiveness as an investment class, is the economic headline for 2022, but it is not the only one. Read on to find out our top UK economic trends of 2022.</p>\r\n\r\n<h2>Residential property market leads the way</h2>\r\n\r\n<p>The residential property market was one of the few success stories of the pandemic, and all indications are that it is likely to keep growing over the course of 2022 and beyond. The underlying conditions that are causing UK house prices to increase are not going to change, meaning that there is no reason why demand will not continue going up.</p>\r\n\r\n<p>It is estimated that we need approximately 340,000 new homes a year to meet demand, but even before the pandemic the number of new homes built was almost 100,000 fewer than that. New starts dropped by 25% over the last year according to Savills, and that will have an ongoing impact in the future. Furthermore, this situation is only expected to get worse in future.</p>\r\n\r\n<p>The JLL Residential Forecast 2022-2026 report agrees, estimating that an average of just 188,000 new homes will begin construction in each year up to 2026 &ndash; only slightly over half of the number required. Due to this, JLL projects an average property value increase of 21.7% over the next five years, of which a minimum of 4.5% will be in 2022. We can therefore extrapolate that the average house price in the UK will reach almost &pound;310,000 by 2026.</p>\r\n\r\n<p>This means that a shortfall of available homes and rapidly growing house prices will be one of the major trends of 2022, just as they have been in previous years. According to RICS, &ldquo;The lack of stock may not just inhibit activity going forward but could also contribute to further price growth; the headline RICS price balance is still showing a very strong reading and 12-month expectations are also elevated.&rdquo;</p>\r\n\r\n<p>For investors, there is nothing out there in 2022 that can compare to UK property investment when considering reliability, profitability and ease. Certain markets such as Manchester, Preston and a revitalised London will exceed national averages and represent areas which all investors should look at over the year, read our guides for each city&nbsp;<a href=\"https://alliance-investments.com/guides/?hsLang=en\">here</a>.</p>\r\n\r\n<p>For more information about investing in UK property,&nbsp;<a href=\"https://alliance-investments.com/contact/?hsLang=en\">get in touch&nbsp;</a>with our team today.</p>\r\n\r\n<h3>Commercial property</h3>\r\n\r\n<p>The other side of the property coin &ndash; and a key economic trend in 2022 &ndash; will be the success of commercial property. A strong commercial property market is key to the economy as it relates to the job growth and economic recovery on which everything else is based.</p>\r\n\r\n<p>Data from RICS shows that investment transactions in commercial property are now ahead of where they were in 2019, and the number of new deals has also reached close to parity. This is a good sign for the market and has led to a positive mood in the industry.</p>\r\n\r\n<p>Around two thirds of respondents to the RICS UK Commercial Property Monitor consider the market to be in the early- or mid-phase of the upturn &ndash; the highest proportion taking this view since the end of 2015. Meanwhile, less than one in five contributors to the survey still see the market in a downturn.</p>\r\n\r\n<p>The same report shows that capital values of commercial property could climb as much as 11% in the next 12 months. This will be driven by tenant demand which is consistently taking up the available space and is at a level where new commercial space coming to market will also be filled.</p>\r\n\r\n<p>The strength of the commercial market is a great sign for 2022, and we expect to hear more good news as the year progresses.</p>\r\n\r\n<h3>GDP recovery</h3>\r\n\r\n<p>The national GDP is recovering well from Covid-19 disruptions. We expect that 2022 will not only see that job completed, but will expand beyond pre-pandemic levels. Analysis from&nbsp;<a href=\"https://www.spglobal.com/ratings/en/research/articles/211130-economic-research-economic-outlook-u-k-q1-2022-onward-and-upward-12204975\">S&amp;P Global</a>&nbsp;expects 4.6% growth in the national GDP overall, a strong level which shows the UK is on track for its best year yet.</p>\r\n\r\n<p>This puts the UK in line with the&nbsp;<a href=\"https://www.oecd.org/newsroom/oecd-economic-outlook-sees-recovery-continuing-but-warns-of-growing-imbalances-and-risks.htm\">OECD</a>&rsquo;s international projections. The organisation expects 4.5% growth in the global economy over 2022 as the demand for consumer goods increases again and manufacturing rises to meet it.</p>\r\n\r\n<p>The aforementioned property trends will have a major effect on the growth of national GDP in the UK. Housing is one of our national economic pillars, and strong economic growth will naturally contribute to increased demand for housing. The more spending power people have, the more likely they are to buy a new property and boost the housing market further.</p>\r\n\r\n<h3>Inflation</h3>\r\n\r\n<p>The issue of inflation is a major economic trend for 2022. The government has set the Bank of England a&nbsp;<a href=\"https://www.bankofengland.co.uk/monetary-policy/inflation\">target</a>&nbsp;to keep inflation at 2% or lower over the year, and how the Bank sets about doing this is a matter that will be of interest to all investors.</p>\r\n\r\n<p>The Bank has warned that inflation is likely to go higher than that, with many estimates expecting inflation rates of up to 5% over the course of the year. In response, there are likely to be further rises to the base rate of interest, currently set at 0.25% following a rise in Q4 2021.</p>\r\n\r\n<p>It is speculated that at least two further increases to this base rate are likely in the next 12 months, although no analysts think that rises will be so high that it affects any economic recovery. It is likely that the overall base rate will be kept at around 1% by the Bank &ndash; a reasonable level that offers benefits in all areas.</p>\r\n\r\n<p>What does this mean for property? The obvious area this will affect is the mortgage market. Some lenders have already increased their mortgage interest rates in response to projected rising interest rates, but many other products are being held at favourable rates for the time being as lenders wait and see what happens.</p>\r\n\r\n<p>While investors should make sure to be aware of changes to the interest rate on mortgages, as it will affect their repayments, it should not be a cause for too much concern. The average house price is rising so fast, with rents growing at a similar pace alongside them, that any minimal increases in mortgage interest rates will be swallowed up by the income you will receive in the first year of investment. As far as 2022 economic trends go, inflation is something to be aware of, but certainly not something that should put investors off.</p>\r\n\r\n<p>Find out more about how rising inflation might affects mortgage interest rates for&nbsp;<a href=\"https://alliance-investments.com/news/mortgage-interest-rates-rise-in-2022-what-it-means-for-homeowners/?hsLang=en\">homeowners</a>&nbsp;and buy to let&nbsp;<a href=\"https://alliance-investments.com/news/uk-mortgage-interest-rates-rising-what-it-means-for-investors/?hsLang=en\">landlords</a>.</p>\r\n\r\n<p>The UK economy is in a good position, and the housing market is in an even better one, going from strength to strength in spite of non-ideal economic conditions. This is the perfect time to invest in UK property and make the most of its reliability and profitability. To learn more about how to invest and the UK&rsquo;s best markets,&nbsp;<a href=\"https://alliance-investments.com/contact/?hsLang=en\">get in touch</a>&nbsp;with our team today.</p>', '16429437562019-10-22-Offices-4.jpg', '4', NULL, '2022-01-23 08:15:56', '2022-01-23 08:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residential_about_locations`
--

CREATE TABLE `residential_about_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `residential_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residential_devs`
--

CREATE TABLE `residential_devs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prices` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residential_devs`
--

INSERT INTO `residential_devs` (`id`, `title`, `description`, `image`, `overview`, `location`, `apartments`, `tag`, `bedrooms`, `prices`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'The Exchange, Preston', 'Description', '16429485172019-10-25-Manchester-6.jpg', '<h3>The Address offers 36 exceptional apartments, all designed to provide the highest quality modern lifestyle in the centre of Altrincham.</h3>\r\n\r\n<p>A meticulous attention to detail makes each home unique, and the unbeatable location in the heart of one of the UK&rsquo;s most exciting neighbourhoods makes The Address an unmissable opportunity.</p>\r\n\r\n<p>Every apartment has been carefully considered by the interior design team to create a sanctuary of luxury and style. Furthermore, outstanding communal facilities set The Address apart from its peers - a gymnasium, spectacular central atrium, parking with selected apartments, stylish landscaped gardens and secure bicycle storage ensure that this will be the most in-demand residential building in Altrincham.</p>', 'location', '10', 'Sold', '1,2,& 3 Bedrooms', '2000', NULL, '2022-01-23 09:35:17', '2022-01-24 13:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `residential_features`
--

CREATE TABLE `residential_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `residential_id` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residential_features`
--

INSERT INTO `residential_features` (`id`, `residential_id`, `icon`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'fal fa-building', 'Apartments & Townhouses', '1 & 2 bed apartments plus 12 townhouses', '2022-01-23 11:33:51', '2022-01-23 11:33:51'),
(2, 1, 'fal fa-mobile', 'Bespoke Oxygen App', 'Everything you need is only a touch of a button away.', '2022-01-23 11:35:08', '2022-01-23 11:35:08'),
(3, 1, 'fal fa-star', 'Penthouses', 'Eight penthouses', '2022-01-23 11:35:34', '2022-01-23 11:35:34'),
(4, 1, 'fal fa-tv', 'Cinema Room', 'Enjoy your own screenings in the private cinema room', '2022-01-23 11:36:03', '2022-01-23 11:36:03'),
(5, 1, 'fal fa-dumbbell', 'Gym and Spin Studio', 'State-of-the art 24/7 gym and spin studio on the dedicated Spa level', '2022-01-23 11:36:38', '2022-01-23 11:36:38'),
(6, 1, 'fal fa-swimmer', '25m Luxury Pool and 5* Spa', '25m pool, steam room and sauna', '2022-01-23 11:37:00', '2022-01-23 11:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `residential_galleries`
--

CREATE TABLE `residential_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `residential_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residential_galleries`
--

INSERT INTO `residential_galleries` (`id`, `residential_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'The oxygen appointments are defined as ..', '16429517292019-10-24-Manchester-skyline.jpg', '2022-01-23 10:28:49', '2022-01-23 10:28:49'),
(2, 1, 'The oxygen appointments are defined as ..', '16429517292019-10-24-Manchester-skyline.jpg', '2022-01-23 10:28:49', '2022-01-23 10:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `residential_perks`
--

CREATE TABLE `residential_perks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `residential_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residential_perks`
--

INSERT INTO `residential_perks` (`id`, `residential_id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'PREMIUM LIVING', '5* luxury apartments', '2022-01-23 11:49:24', '2022-01-23 11:49:24'),
(2, 1, 'MIX OF UNITS', '12 townhouses, 361 apartments', '2022-01-23 11:50:05', '2022-01-23 11:50:05'),
(3, 1, 'STARTING FROM', '£368k', '2022-01-23 11:50:24', '2022-01-23 11:50:24'),
(4, 1, 'POOL & SPA', 'Unrivalled facilities', '2022-01-23 11:50:39', '2022-01-23 11:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `residential_videos`
--

CREATE TABLE `residential_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `residential_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residential_videos`
--

INSERT INTO `residential_videos` (`id`, `residential_id`, `url`, `created_at`, `updated_at`) VALUES
(1, '1', 'https://www.youtube.com/embed/BXmIpbBOSvI', '2022-01-23 10:38:15', '2022-01-24 13:47:14'),
(2, '1', 'https://www.youtube.com/embed/BXmIpbBOSvI', '2022-01-23 10:39:52', '2022-01-24 13:47:19'),
(3, '1', 'https://www.youtube.com/embed/BXmIpbBOSvI', '2022-01-23 10:39:58', '2022-01-24 13:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_points_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_points` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_points_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `title`, `description`, `image`, `slider_title`, `slider_description`, `key_points_title`, `key_points`, `key_points_image`, `created_at`, `updated_at`) VALUES
(1, 'Completion & Aftercare', 'Mortgages, currency services, furniture, lettings and property management – we can help with it all', 'At Alliance Investments, our service doesn\'t end when contracts are exchanged. We want you to feel comfortable throughout the whole process, and our aftersales team will be on hand until the very end to assist with whatever you need - or even further if you choose to use Alliance City Living, our lettings and property management agent.  Our aftersales team will contact you approximately six months prior to completion to guide you through the final stages of your purchase introducing you to the below highly-recommended services to ensure the terms of your contract are met and a smooth, stress free completion transition is achieved for you.', '16430298322019-10-25-Manchester-tram.jpg', 'Between reserving your off-plan property and completion,', 'there are a number of steps you will need to take. Similarly to the reservation process, our aftersales team will be on hand to help with everything.', 'Our trusted partners can assist with...', '<ul>	<li>Mortgage advice</li>	<li>Forex and money services</li>	<li>Bespoke furniture packs</li>	<li>Lettings and property management</li></ul>', '1643029832Central-Retail-Park-February-2020.jpg', '2022-01-24 08:10:32', '2022-01-24 08:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `service_sliders`
--

CREATE TABLE `service_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_sliders`
--

INSERT INTO `service_sliders` (`id`, `service_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '16430311972019-10-25-Manchester-tram.jpg', '2022-01-24 08:33:17', '2022-01-24 08:33:17'),
(2, 1, '16430312242020-01-15-People-leaving-London-younger-ages.jpg', '2022-01-24 08:33:44', '2022-01-24 08:33:44'),
(3, 1, '1643031230Ancoats-Manchester_Canal-Walk_601-696x463.jpg', '2022-01-24 08:33:50', '2022-01-24 08:33:50'),
(4, 1, '1643031237campus-masterplan.jpg', '2022-01-24 08:33:57', '2022-01-24 08:33:57'),
(5, 1, '16430312442019-10-22-Offices-4.jpg', '2022-01-24 08:34:04', '2022-01-24 08:34:04'),
(6, 1, '1643031251Birmingham-5.jpg', '2022-01-24 08:34:11', '2022-01-24 08:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `type`, `slug`, `page`, `value`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us Page Title', 'text', 'contact-us-page-title', 'contact-us', 'To find out more about our latest UK property opportunities get in touch with our team.', NULL, '2022-01-23 06:45:08', '2022-01-23 07:17:15'),
(2, 'Contact Us Our Office Address', 'text', 'contact-us-our-office-address', 'contact-us', 'Alliance House,\r\nWestPoint Enterprise Park,\r\nClarence Avenue,\r\nTrafford Park,\r\nManchester\r\nM17 1QS', NULL, '2022-01-23 06:45:36', '2022-01-23 06:45:36'),
(3, 'Contact Us Phone No', 'text', 'contact-us-phone-no', 'contact-us', '+ 44 (0)161 416 6244', NULL, '2022-01-23 06:46:48', '2022-01-23 06:46:48'),
(4, 'Contact Us Email', 'text', 'contact-us-email', 'contact-us', 'info@alliance-investments.com', NULL, '2022-01-23 06:47:04', '2022-01-23 06:47:04'),
(5, 'Contact Us Background Image', 'image', 'contact-us-background-image', 'contact-us', '16429391242019-10-25-Birmingham-bullring.jpg', NULL, '2022-01-23 06:58:44', '2022-01-23 06:58:44'),
(6, 'INTRO', 'text', 'intro', 'terms-and-conditions', '<h1>Alliance Investments Terms of Use</h1>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of&nbsp;<a href=\"http://alliance-investments.local/admin/entries/page/476-terms-conditions\" rel=\"noopener\" target=\"_blank\">www.alliance-investments.com&#39;s</a>&nbsp;Website.<br />\r\n<a href=\"https://www.alliance-investments.com/?hsLang=en\">www.alliance-investments.com</a>&nbsp;is located at:<br />\r\nAlliance House, WestPoint Enterprise Park Clarence Avenue Trafford Park, Manchester, United Kingdom - M17 1QS, United Kingdom</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use&nbsp;<a href=\"http://alliance-investments.local/admin/entries/page/476-terms-conditions\" rel=\"noopener\" target=\"_blank\">www.alliance-investments.com&#39;s</a>&nbsp;website if you do not accept all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: &ldquo;Client&rdquo;, &ldquo;You&rdquo; and &ldquo;Your&rdquo; refers to you, the person accessing this website and accepting the Company&rsquo;s terms and conditions. &ldquo;The Company&rdquo;, &ldquo;Ourselves&rdquo;, &ldquo;We&rdquo;, &ldquo;Our&rdquo; and &ldquo;Us&rdquo;, refers to our Company. &ldquo;Party&rdquo;, &ldquo;Parties&rdquo;, or &ldquo;Us&rdquo;, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client&rsquo;s needs in respect of provision of the Company&rsquo;s stated services/products, in accordance with and subject to, prevailing law of United Kingdom. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>', NULL, '2022-01-24 08:59:07', '2022-01-24 08:59:07'),
(7, 'COOKIES', 'text', 'cookies', 'terms-and-conditions', '<h2>Cookies</h2>\r\n\r\n<p>We employ the use of cookies. By using Alliance Investments&#39; website you consent to the use of cookies<br />\r\nin accordance with&nbsp;<a href=\"https://www.alliance-investments.com/?hsLang=en\">www.alliance-investments.com</a>&rsquo;s privacy policy.Most of the modern day interactive web sites use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate / advertising partners may also use cookies.License<br />\r\nUnless otherwise stated,&nbsp;<a href=\"https://www.alliance-investments.com/?hsLang=en\">http://www.alliance-investment...</a>&nbsp;and/or it&rsquo;s licensors own the intellectual property rights for all material on&nbsp;<a href=\"https://www.alliance-investments.com/?hsLang=en\">http://www.alliance-investment...</a>&nbsp;. All intellectual property rights are reserved. You may view and/or print pages from&nbsp;<a href=\"https://www.alliance-investments.com/?hsLang=en\">www.alliance-investments.com</a>&nbsp;for your own personal use subject to restrictions set in these terms and conditions.</p>', NULL, '2022-01-24 08:59:40', '2022-01-24 08:59:40'),
(8, 'YOU MUST NOT', 'text', 'you-must-not', 'terms-and-conditions', '<h2>You must not</h2>\r\n\r\n<p>Republish material from http://<a href=\"https://www.alliance-investments.com/?hsLang=en\">www.alliance-investments.com</a><br />\r\nSell, rent or sub-license material from http://<a href=\"https://www.alliance-investments.com/?hsLang=en\">www.alliance-investments.com</a><br />\r\nReproduce, duplicate or copy material from http://<a href=\"https://www.alliance-investments.com/?hsLang=en\">www.alliance-investments.com</a><br />\r\nRedistribute content from&nbsp;<a href=\"https://www.alliance-investments.com/?hsLang=en\">http://www.alliance-investment...</a></p>', NULL, '2022-01-24 09:00:00', '2022-01-24 09:00:00'),
(9, 'HYPERLINKS', 'text', 'hyperlinks', 'terms-and-conditions', '<h2>Hyperlinking to our Content</h2>\r\n\r\n<p>The following organizations may link to our Web site without prior written approval:</p>\r\n\r\n<p>Government agencies; Search engines; News organizations;<br />\r\nOnline directory distributors when they list us in the directory may link to our Web site in the same manner as they hyperlink to the Web sites of other listed businesses; and<br />\r\nSystemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</p>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Web site information so long as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&#39;s site.</p>', NULL, '2022-01-24 09:00:33', '2022-01-24 09:00:33'),
(10, 'POLICY', 'text', 'policy', 'policy', '<h1>Alliance Investments Privacy Policy</h1>\r\n\r\n<p><strong>Alliance Investments Real Estate LTD.</strong>&nbsp;Registered Office: Alliance House, Westpoint Enterprise Park, Clarence Avenue, Trafford Park, Manchester, M17 1QS Thereafter referred to as AIL<br />\r\n<strong>Updated On: 17th May 2018</strong></p>\r\n\r\n<p>As the controller of your data, AIL comply with Data Protection laws in the United Kingdom and the EU General Data Protection Regulation (GDPR). This Privacy Policy details how AIL stores your personal data.</p>\r\n\r\n<ul>\r\n	<li><strong>Identity Data</strong>&nbsp;including forenames, last name</li>\r\n	<li><strong>Contact Data</strong>&nbsp;including home address, email address and telephone numbers</li>\r\n	<li><strong>Financial Data</strong>&nbsp;including company/personal accounts and financial referencing</li>\r\n	<li><strong>Transaction Data</strong>&nbsp;including payments made for services you have received from us</li>\r\n	<li><strong>Marketing and Communications Data</strong>&nbsp;including your preferences in receiving marketing from us and our business partners and your communication preferences.</li>\r\n</ul>', NULL, '2022-01-24 09:02:50', '2022-01-24 09:02:50'),
(11, 'DATA COLLECTION', 'text', 'data-collection', 'policy', '<h2>How do we collect your personal data?</h2>\r\n\r\n<p>Personal data is collected and supplied by:</p>\r\n\r\n<ul>\r\n	<li>yourselves, which may include references you have detailed;</li>\r\n	<li>your employer, where we are dealing with you as part of your job or where we have sought references from them;</li>\r\n	<li>third parties, (such as credit referencing agencies) where we have sought references or where your details have been provided as an emergency contact.</li>\r\n</ul>', NULL, '2022-01-24 09:03:06', '2022-01-24 09:03:06'),
(12, 'WHO TO CONTACT WITH A COMPLAINT', 'text', 'who-to-contact-with-a-complaint', 'complaints', '<h1>In-house complaints procedure</h1>\r\n\r\n<p>Alliance Investments aim to provide a professional service to the highest level of customer satisfaction. Alliance Investments is also committed to using complaints to review and improve the services provided.</p>\r\n\r\n<p>Alliance Investments intend to resolve all complaints at the first point of contact and informally usually by the Property Consultant or Sales Person who is your point of contact.</p>\r\n\r\n<p>When informal resolution is not possible Alliance Investments has a clear and fair complaints procedure to follow.</p>\r\n\r\n<p><strong>Complaints should be made in writing or by email and issued to the below details:</strong></p>\r\n\r\n<p>Complaints@alliance-investments.com</p>\r\n\r\n<p>Alliance Investments Unit 14, Alliance House, Westpoint Enterprise Park, Clarence Avenue, Manchester, M17 1QS</p>', NULL, '2022-01-24 10:56:26', '2022-01-24 10:56:26'),
(13, 'Facebook Link', 'text', 'facebook-link', 'footer', 'https://www.facebook.com/', NULL, '2022-01-24 11:07:40', '2022-01-24 11:07:40'),
(14, 'Twitter Link', 'text', 'twitter-link', 'footer', 'https://www.facebook.com/', NULL, '2022-01-24 11:07:47', '2022-01-24 11:07:47'),
(15, 'Linked-In Link', 'text', 'linked-in-link', 'footer', 'https://www.facebook.com/', NULL, '2022-01-24 11:08:05', '2022-01-24 11:08:05'),
(16, 'Youtube Link\\', 'text', 'youtube-link', 'footer', 'https://www.facebook.com/', NULL, '2022-01-24 11:08:15', '2022-01-24 11:08:15'),
(17, 'Instagram Link', 'text', 'instagram-link', 'footer', 'https://www.facebook.com/', NULL, '2022-01-24 11:08:29', '2022-01-24 11:08:29'),
(18, 'A PORTFOLIO WORTH OVER', 'text', 'a-portfolio-worth-over', 'home', '£1.2 billion', NULL, '2022-01-24 23:47:15', '2022-01-24 23:47:15'),
(19, '4 CONTINENTS', 'text', '4-continents', 'home', '8 offices', NULL, '2022-01-24 23:47:30', '2022-01-24 23:47:30'),
(20, 'FULL SERVICE', 'text', 'full-service', 'home', 'Property purchase experts', NULL, '2022-01-24 23:47:43', '2022-01-24 23:47:43'),
(21, 'EXPERIENCE', 'text', 'experience', 'home', 'Established 30 years', NULL, '2022-01-24 23:47:58', '2022-01-24 23:47:58'),
(22, 'Home Content 1', 'text', 'home-content-1', 'home', '<h1>An unrivalled understanding of the UK property market</h1>\r\n\r\n<p>As part of Property Alliance Group, the Alliance Investments team has a proven track record of marketing, selling and exchanging off-plan properties within several of the group&rsquo;s landmark buildings, as well as carefully selected new-build housing projects from other partner developers.</p>', NULL, '2022-01-24 23:48:45', '2022-01-24 23:48:45'),
(23, 'Home Content 2', 'text', 'home-content-2', 'home', '<p>Headquartered in Manchester, Alliance Investments has established a reputation as a key contributor to the growth of the UK&rsquo;s top property location, a status that has given us the credibility to move into other key cities, all while maintaining the same high levels of quality that have become our trademark - both for people looking to purchase a home and those looking for off-plan investment.</p>\r\n\r\n<p>With local experts on hand across Europe, the Middle East, Asia and Africa, our experienced sales and aftersales teams are dedicated to offering a clear and transparent service at every stage of the process. Our in-house team can handle all elements of the sale, including exchange, mortgages, completion and property management, and you can be sure Alliance Investments will never be far away.</p>', NULL, '2022-01-24 23:48:57', '2022-01-24 23:48:57'),
(24, 'Calculator Heading', 'text', 'calculator-heading', 'home', '<h2>Use our Yield Calculator to see how much you could make.</h2>', NULL, '2022-01-25 00:12:18', '2022-01-25 00:12:18'),
(25, 'Calculator Details', 'text', 'calculator-details', 'home', '<h2>Work out the potential rental yield of a buy to let property. Estimate the return on your property investment, so you can ensure that your rental income is sufficient for your needs.</h2>', NULL, '2022-01-25 00:12:30', '2022-01-25 00:12:30'),
(26, 'Calculator Background', 'image', 'calculator-background', 'home', '16430875712019-10-25-Birmingham-bullring.jpg', NULL, '2022-01-25 00:12:51', '2022-01-25 00:12:51'),
(27, 'Homepage Team Heading', 'text', 'homepage-team-heading', 'home', 'Support at every step of the property process', NULL, '2022-01-25 00:20:01', '2022-01-25 00:21:04'),
(28, 'Homepage Team Description', 'text', 'homepage-team-description', 'home', 'With a team of experts behind every single sale, Alliance Investments is dedicated to making your property purchase as hassle-free as possible. From specialist advice when you\'re deciding where and what to buy, to a dedicated aftercare team, we\'re committed to making your property journey easier.', NULL, '2022-01-25 00:20:14', '2022-01-25 00:20:14'),
(29, 'Homepage Team Slider 1', 'image', 'homepage-team-slider-1', 'home', '1643088036Central-Retail-Park-February-2020.jpg', NULL, '2022-01-25 00:20:36', '2022-01-25 00:20:36'),
(30, 'Homepage Team Slider 2', 'image', 'homepage-team-slider-2', 'home', '1643088041Central-Retail-Park-February-2020.jpg', NULL, '2022-01-25 00:20:41', '2022-01-25 00:20:41'),
(31, 'Homepage Team Slider 3', 'image', 'homepage-team-slider-3', 'home', '1643088044Central-Retail-Park-February-2020.jpg', NULL, '2022-01-25 00:20:44', '2022-01-25 00:20:44'),
(32, 'Favicon', 'image', 'favion', 'home', '1643100472favicon-48x48.png', NULL, '2022-01-25 03:47:52', '2022-01-25 03:47:52'),
(33, 'Avatar 1', 'image', 'avatar-1', 'home', '1643100813apple-touch-icon-114x114.png', NULL, '2022-01-25 03:53:33', '2022-01-25 03:53:33'),
(34, 'Avatar 2', 'image', 'avatar-2', 'home', '1643100824apple-touch-icon-76x76.png', NULL, '2022-01-25 03:53:44', '2022-01-25 03:53:44'),
(35, 'Do you sell to home buyers as well as investors?', 'text', 'do-you-sell-to-home-buyers-as-well-as-investors', 'faqs', 'Yes – we have a wide variety of people that we sell to. Some do buy as part of their buy to let portfolio, but we also sell to a large number of people who are looking for a brand new, off-plan home in a great city centre location. We have the experience and expertise to manage both types of buyers.', NULL, '2022-01-25 04:29:16', '2022-01-25 04:29:16'),
(36, 'What kind of yields can I expect from your properties?', 'text', 'what-kind-of-yields-can-i-expect-from-your-properties', 'faqs', 'All of our properties are in locations and sectors that offer competitive yields. Our residential properties in Birmingham in Manchester are predicted to generate yields of 6%, whilst our student property investments come with assured yields from 7.5% every year for up to five years.', NULL, '2022-01-25 04:30:31', '2022-01-25 04:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `link_name`, `link_url`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Alliance Investments is founded on three decades of developing, selling and managing UK property', 'Get in touch with us', 'contact-us', '1642934437banner1.jpg', NULL, '2022-01-23 04:47:15', '2022-01-23 05:40:37'),
(2, 'This is Oxygen – Designed to be different', 'Discover Oxygen, Manchester', 'exchange-preston', '1642934602banner2.jpg', NULL, '2022-01-23 05:43:22', '2022-01-23 05:43:22'),
(3, 'Find out why Preston is one of the hottest places to invest in the UK', 'Find out more', 'contact-us', '1642934624banner3.jpg', NULL, '2022-01-23 05:43:44', '2022-01-23 05:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `spotlight_locations`
--

CREATE TABLE `spotlight_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spotlight_locations`
--

INSERT INTO `spotlight_locations` (`id`, `location_id`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'fal fa-long-arrow-alt-up', 'Birmingham’s population is growing by nearly 10,000 a year', '2022-01-24 07:11:40', '2022-01-24 07:11:40'),
(2, 1, 'fal fa-arrow-alt-circle-up', 'Property prices in Birmingham have grown by 16% since 2016', '2022-01-24 07:12:28', '2022-01-24 07:12:28'),
(3, 1, 'fal fa-train', 'HS2 will connect Birmingham to London in less than 60 minutes', '2022-01-24 07:12:45', '2022-01-24 07:12:45'),
(4, 1, 'fal fa-warehouse', 'Birmingham needs 3,500 new homes built every year', '2022-01-24 07:13:06', '2022-01-24 07:13:06'),
(5, 1, 'fal fa-baby', 'Birmingham has a young population fuelling the demand for property', '2022-01-24 07:13:28', '2022-01-24 07:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `category`, `image`, `biography`, `created_at`, `updated_at`) VALUES
(1, 'Ronald Garrett', 'Managing Director', 'Senior Management', '1643032315Off-plan-guide-header-image.jpg', 'With a career spanning over 12 years in real estate and as a stockbroker, Ronald has a wealth of strategic experience to help clients both execute and achieve their investment goals. Since working in the real estate sector, Ronald has facilitated over $250m of transactions with investors both domestically and internationally.', '2022-01-24 08:51:41', '2022-01-24 08:51:55'),
(2, 'Ronald Garrett', 'Managing Director', 'The Board', '1643032315Off-plan-guide-header-image.jpg', 'With a career spanning over 12 years in real estate and as a stockbroker, Ronald has a wealth of strategic experience to help clients both execute and achieve their investment goals. Since working in the real estate sector, Ronald has facilitated over $250m of transactions with investors both domestically and internationally.', '2022-01-24 08:51:41', '2022-01-24 08:51:55'),
(3, 'Ronald Garrett', 'Managing Director', 'The Board', '1643032315Off-plan-guide-header-image.jpg', 'With a career spanning over 12 years in real estate and as a stockbroker, Ronald has a wealth of strategic experience to help clients both execute and achieve their investment goals. Since working in the real estate sector, Ronald has facilitated over $250m of transactions with investors both domestically and internationally.', '2022-01-24 08:51:41', '2022-01-24 08:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `address`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'I Hateley.', 'Birmingham, UK.', 'The whole process has been pretty simple and the aftersales team were a great help.', NULL, '2022-01-23 07:33:50', '2022-01-23 07:49:16'),
(2, 'Carol &amp; Chris', 'UK', 'The gift of your help, time and support made this exchange possible. It means a lot to us. Thanks.', NULL, '2022-01-23 07:34:12', '2022-01-23 07:34:12'),
(3, 'D Tang', 'Hong Kong', 'Thanks for your good services and help me smoothly to exchange of contracts.', NULL, '2022-01-23 07:34:37', '2022-01-23 07:34:37'),
(4, 'M Fazil', 'UAE', 'I was referred to Alliance Investments via a business associate, and from the outset my dedicated property consultant was professional and informative.', NULL, '2022-01-23 07:35:09', '2022-01-23 07:35:09'),
(5, 'H Jones', 'Cardiff, UK', 'I came to Alliance Investments looking for a property for my daughter to live in at university – their selection of apartments in Manchester was fantastic.', NULL, '2022-01-23 07:35:31', '2022-01-23 07:35:31'),
(6, 'K Tan', 'Hong Kong', 'The aftersales support I was provided was second-to-none – I was kept informed at every stage and the team took care of everything – I would highly recommend!', NULL, '2022-01-23 07:35:53', '2022-01-23 07:35:53'),
(7, 'S Henning', 'Manchester, UK', 'I was looking for a new build property in Manchester, and Alliance Investments had\r\n                                    the best choice by far – I can’t wait to move into my new apartment at Uptown.', NULL, '2022-01-23 07:36:11', '2022-01-23 07:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Azeem', 'emazeem07@gmail.com', NULL, '$2y$10$yHlC6jmC3vbNxPJzKR63suiU1eh2qn/lKGlx2QrlwDMPpWppP0WsO', NULL, '2022-01-23 03:43:09', '2022-01-23 03:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `why_buy_locations`
--

CREATE TABLE `why_buy_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_buy_locations`
--

INSERT INTO `why_buy_locations` (`id`, `location_id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Voted Best Place To Live by The Sunday Times for 2 years running', '2', '2022-01-24 07:01:05', '2022-01-24 07:02:13'),
(2, 1, 'Just 10 minutes to Manchester airport and 22 minutes to the city center', '10', '2022-01-24 07:01:24', '2022-01-24 07:01:24'),
(3, 1, 'Four grammar schools rated \"outstanding\"', '4', '2022-01-24 07:01:37', '2022-01-24 07:01:37'),
(4, 1, 'House prices have risen 15% in the last 5 years', '15%', '2022-01-24 07:01:52', '2022-01-24 07:01:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `construction_updates`
--
ALTER TABLE `construction_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `residential_about_locations`
--
ALTER TABLE `residential_about_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_devs`
--
ALTER TABLE `residential_devs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_features`
--
ALTER TABLE `residential_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_galleries`
--
ALTER TABLE `residential_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_perks`
--
ALTER TABLE `residential_perks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_videos`
--
ALTER TABLE `residential_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_sliders`
--
ALTER TABLE `service_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spotlight_locations`
--
ALTER TABLE `spotlight_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_buy_locations`
--
ALTER TABLE `why_buy_locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `construction_updates`
--
ALTER TABLE `construction_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residential_about_locations`
--
ALTER TABLE `residential_about_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residential_devs`
--
ALTER TABLE `residential_devs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residential_features`
--
ALTER TABLE `residential_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `residential_galleries`
--
ALTER TABLE `residential_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residential_perks`
--
ALTER TABLE `residential_perks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residential_videos`
--
ALTER TABLE `residential_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_sliders`
--
ALTER TABLE `service_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spotlight_locations`
--
ALTER TABLE `spotlight_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_buy_locations`
--
ALTER TABLE `why_buy_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
