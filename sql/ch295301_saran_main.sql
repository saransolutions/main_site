-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ch295301_saran_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `lang_table`
--

CREATE TABLE `lang_table` (
  `id` int(11) NOT NULL,
  `page` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `button` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `value` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lang_table`
--

INSERT INTO `lang_table` (`id`, `page`, `button`, `lang`, `value`) VALUES
(1, 'common', 'home', 'de', 'Home'),
(2, 'common', 'home', 'en', 'Home'),
(3, 'common', 'home', 'ta', 'முகப்பு'),
(4, 'common', 'about_us', 'de', 'Über uns'),
(5, 'common', 'about_us', 'en', 'About Us'),
(6, 'common', 'about_us', 'ta', 'எம்மை பற்றி'),
(7, 'common', 'our_services', 'de', 'Unsere Dienstleistungen'),
(8, 'common', 'our_services', 'en', 'Our Services'),
(9, 'common', 'our_services', 'ta', 'சேவைகள்'),
(10, 'common', 'packages', 'de', 'Pakete'),
(11, 'common', 'packages', 'en', 'Packages'),
(12, 'common', 'packages', 'ta', 'தொகுப்புகள்'),
(13, 'common', 'contact_us', 'de', 'Kontaktieren Sie uns'),
(14, 'common', 'contact_us', 'en', 'Contact Us'),
(15, 'common', 'contact_us', 'ta', 'தொடர்புக்கு'),
(16, 'home', 'awesome_and_unique_', 'de', 'FANTASTISCHE UND EINZIGARTIGE WEBSITE'),
(17, 'home', 'awesome_and_unique_', 'en', 'AWESOME AND UNIQUE WEBSITE'),
(18, 'home', 'awesome_and_unique_', 'ta', 'தனித்துவமான இணையதளம்'),
(19, 'home', 'website_and_hosting', 'de', 'Website und Hosting ab Fr. 1000'),
(20, 'home', 'website_and_hosting', 'en', 'website and hosting from Fr.1000'),
(21, 'home', 'website_and_hosting', 'ta', 'இணையதளம் மற்றும் Fr.1000 இலிருந்து ஹோஸ்டிங் '),
(25, 'home', 'fully_responsive_de', 'de', 'Vollständig responsives Design'),
(26, 'home', 'fully_responsive_de', 'en', 'Fully responsive design'),
(27, 'home', 'fully_responsive_de', 'ta', 'முழுமையான வடிவமைப்பு '),
(28, 'home', 'web_pages', 'de', '4+ Webseiten'),
(29, 'home', 'web_pages', 'en', '4+ web pages'),
(30, 'home', 'web_pages', 'ta', '4+ இணையப் பக்கங்கள் '),
(31, 'home', 'free_support_for_se', 'de', 'Kostenlose Unterstützung für SEO und Social-Media-Marketing,'),
(32, 'home', 'free_support_for_se', 'en', 'Free support for SEO and social media marketing,</br> provide the logo for your website'),
(33, 'home', 'free_support_for_se', 'ta', 'எஸ்சிஓ மற்றும் சமூக ஊடக சந்தைப்படுத்துதலுக்கான <br>\nஇலவச ஆதரவு, உங்கள் வலைத்தளத்திற்கான \n<br>லோகோவை வழங்கவும்'),
(34, 'home', 'modern_creative_uni', 'de', 'modern. kreativ. einzigartig'),
(35, 'home', 'modern_creative_uni', 'en', 'modern. creative. unique'),
(36, 'home', 'modern_creative_uni', 'ta', 'நவீன. படைப்பு. தனித்துவமான '),
(37, 'home', 'multi_purpose_websi', 'de', 'Mehrzweck-Website'),
(38, 'home', 'multi_purpose_websi', 'en', 'Multi purpose website'),
(39, 'home', 'multi_purpose_websi', 'ta', 'பல்நோக்கு இணையதளம் '),
(40, 'home', 'ecommerce_website', 'de', 'E-Commerce-Website'),
(41, 'home', 'ecommerce_website', 'en', 'E-Commerce website'),
(42, 'home', 'ecommerce_website', 'ta', 'இ-காமர்ஸ் இணையதளம் '),
(43, 'home', 'creating_invoice_sy', 'de', 'Erstellen eines Rechnungssystems für Ihr Unternehmen'),
(44, 'home', 'creating_invoice_sy', 'en', 'Creating invoice system for your business'),
(45, 'home', 'creating_invoice_sy', 'ta', 'உங்கள் வணிகத்திற்கான விலைப்பட்டியல் அமைப்பை உருவாக்குதல் '),
(49, 'home', 'awesome_icons_inclu', 'de', 'Tolle Symbole enthalten'),
(50, 'home', 'awesome_icons_inclu', 'en', 'Awesome icons included'),
(51, 'home', 'awesome_icons_inclu', 'ta', 'அற்புதமான சின்னங்கள் சேர்க்கப்பட்டுள்ளன '),
(52, 'home', 'unlimited_colors_su', 'de', 'Unbegrenzte Farbunterstützung'),
(53, 'home', 'unlimited_colors_su', 'en', 'Unlimited colors support'),
(54, 'home', 'unlimited_colors_su', 'ta', ' வரம்பற்ற வண்ணங்கள் ஆதரவு '),
(55, 'home', 'free_settingup_and_', 'de', 'Kostenlose Einrichtung und Unterstützung'),
(56, 'home', 'free_settingup_and_', 'en', 'Free setting-up and support'),
(57, 'home', 'free_settingup_and_', 'ta', 'இலவச அமைப்பு மற்றும் ஆதரவு '),
(58, 'home', 'why_choose_us_?', 'de', 'Warum uns wählen?'),
(59, 'home', 'why_choose_us_?', 'en', 'why choose us ?'),
(60, 'home', 'why_choose_us_?', 'ta', ' எங்களை ஏன் தேர்ந்தெடுக்க வேண்டும்? '),
(61, 'home', 'and_morden_design', 'de', 'und modernes Design'),
(62, 'home', 'and_morden_design', 'en', 'and morden design'),
(63, 'home', 'and_morden_design', 'ta', ' மற்றும் மார்டன் வடிவமைப்பு '),
(64, 'home', 'design_free_logo_fo', 'de', 'Entwerfen Sie ein kostenloses Logo für Ihre Website'),
(65, 'home', 'design_free_logo_fo', 'en', 'Design free logo for your website'),
(66, 'home', 'design_free_logo_fo', 'ta', 'உங்கள் இணையதளத்திற்கான <br> இலவச லோகோவை வடிவமைக்கவும் '),
(67, 'home', 'color_schemes', 'de', 'Farbschemata'),
(68, 'home', 'color_schemes', 'en', 'color schemes'),
(69, 'home', 'color_schemes', 'ta', 'வண்ண திட்டங்கள் '),
(70, 'home', 'we_can_make_your_bu', 'de', 'Wir können Ihrem Unternehmen Farbe verleihen.'),
(71, 'home', 'we_can_make_your_bu', 'en', 'We can make your business colorful.'),
(72, 'home', 'we_can_make_your_bu', 'ta', 'உங்கள் வணிகத்தை நாங்கள் வண்ணமயமாக்கலாம். '),
(73, 'home', 'design_colorful_ima', 'de', 'Entwerfen Sie farbenfrohe Bilder für Ihre Website'),
(74, 'home', 'design_colorful_ima', 'en', 'Design colorful image for your website'),
(75, 'home', 'design_colorful_ima', 'ta', 'உங்கள் வலைத்தளத்திற்கான வண்ணமயமான படத்தை வடிவமைக்கவும் '),
(76, 'home', 'page_layouts', 'de', 'Seitenlayouts'),
(77, 'home', 'page_layouts', 'en', 'page layouts'),
(78, 'home', 'page_layouts', 'ta', 'பக்க தளவமைப்புகள் '),
(79, 'home', 'we_can_provide_unli', 'de', 'Wir können unbegrenzte Seitenlayouts für Ihre Websites bereitstellen...'),
(80, 'home', 'we_can_provide_unli', 'en', 'We can provide unlimited page layout for your website.'),
(81, 'home', 'we_can_provide_unli', 'ta', 'உங்கள் இணையதளத்திற்கு வரம்பற்ற பக்க அமைப்பை நாங்கள் வழங்க முடியும். '),
(82, 'home', 'ecommerce', 'de', 'E-Commerce'),
(83, 'home', 'ecommerce', 'en', 'e-commerce'),
(84, 'home', 'ecommerce', 'ta', 'இ-காமர்ஸ் '),
(85, 'home', 'we_can_provide_ecom', 'de', 'Wir können E-Commerce-Websites zu sehr günstigen Preisen bereitstellen'),
(86, 'home', 'we_can_provide_ecom', 'en', 'We can provide E-commerce website very cheap price'),
(87, 'home', 'we_can_provide_ecom', 'ta', 'இ-காமர்ஸ் இணையதளத்தை நாங்கள் மிக மலிவான விலையில் வழங்க முடியும் '),
(88, 'home', 'provide_invoice_for', 'de', 'Stellen Sie Rechnungen für Ihr Unternehmen bereit, um das Leben einfacher zu machen...'),
(89, 'home', 'provide_invoice_for', 'en', 'Provide invoice for your business make life easier.'),
(90, 'home', 'provide_invoice_for', 'ta', 'உங்கள் வணிகத்திற்கான விலைப்பட்டியல் வழங்குவது வாழ்க்கையை எளிதாக்குகிறது. '),
(91, 'home', 'fonts_and_icons', 'de', 'Schriftarten und Symbole'),
(92, 'home', 'fonts_and_icons', 'en', 'fonts and icons'),
(93, 'home', 'fonts_and_icons', 'ta', 'எழுத்துருக்கள் மற்றும் சின்னங்கள் '),
(94, 'home', 'design_and_provide_', 'de', 'Entwerfen und stellen Sie kostenlose Symbole für Ihre Website bereit.'),
(95, 'home', 'design_and_provide_', 'en', 'Design and provide free icons for your website.'),
(96, 'home', 'design_and_provide_', 'ta', 'உங்கள் இணையதளத்திற்கான இலவச ஐகான்களை வடிவமைத்து வழங்கவும். '),
(97, 'home', 'provide_more_than_3', 'de', 'Stellen Sie mehr als 3 Sprachen für Ihre Website bereit.'),
(98, 'home', 'provide_more_than_3', 'en', 'Provide more than 3 languages for your website.'),
(99, 'home', 'provide_more_than_3', 'ta', 'உங்கள் இணையதளத்திற்கு 3க்கும் மேற்பட்ட மொழிகளை வழங்கவும். '),
(100, 'home', 'our_service', 'de', 'Unser Service'),
(101, 'home', 'our_service', 'en', 'Our Service'),
(102, 'home', 'our_service', 'ta', 'எங்கள் சேவை '),
(103, 'home', 'invoice_for_sabre_a', 'de', 'Rechnung für Sabre und Amadeus'),
(104, 'home', 'invoice_for_sabre_a', 'en', 'Invoice for sabre and amadeus'),
(105, 'home', 'invoice_for_sabre_a', 'ta', 'சேபர் மற்றும் அமேடியஸுக்கான விலைப்பட்டியல் '),
(106, 'home', 'invoice_for_sabre_a1', 'de', 'Rechnung für Sabre und Amadeus für Agenten'),
(107, 'home', 'invoice_for_sabre_a1', 'en', 'Invoice for sabre and amadeus for agents'),
(108, 'home', 'invoice_for_sabre_a1', 'ta', 'சேபருக்கான விலைப்பட்டியல் மற்றும் முகவர்களுக்கான அமேடியஸ் '),
(109, 'home', 'invoice_for_jewelle', 'de', 'Rechnung für Juweliergeschäfte'),
(110, 'home', 'invoice_for_jewelle', 'en', 'Invoice for jewellery shop'),
(111, 'home', 'invoice_for_jewelle', 'ta', 'நகைக்கடைக்கான விலைப்பட்டியல் '),
(112, 'home', 'make_your_business_', 'de', 'Erleichtern Sie Ihre Geschäftskalkulation'),
(113, 'home', 'make_your_business_', 'en', 'Make your business calculation easier'),
(114, 'home', 'make_your_business_', 'ta', 'உங்கள் வணிகக் கணக்கீட்டை எளிதாக்குங்கள் '),
(115, 'home', 'billing_system', 'de', 'Abrechnungssystem'),
(116, 'home', 'billing_system', 'en', 'Billing System'),
(117, 'home', 'billing_system', 'ta', 'பில்லிங் சிஸ்டம் '),
(118, 'home', 'creating_billing_sy', 'de', 'Erstellen eines Abrechnungssystems über Barcode'),
(119, 'home', 'creating_billing_sy', 'en', 'Creating billing system via bar code'),
(120, 'home', 'creating_billing_sy', 'ta', 'பார் குறியீடு மூலம் பில்லிங் முறையை உருவாக்குதல் '),
(121, 'home', 'design_logo_busines', 'de', 'Entwerfen Sie Logo, Visitenkarte, Flyer'),
(122, 'home', 'design_logo_busines', 'en', 'Design logo,business card,flyer'),
(123, 'home', 'design_logo_busines', 'ta', 'டிசைன் லோகோ, பிசினஸ் கார்டு, ஃப்ளையர் '),
(124, 'home', 'design_logo_busines1', 'de', 'Designen Sie Logo, Visitenkarte, Flyer einzigartig und farbenfroh...'),
(125, 'home', 'design_logo_busines1', 'en', 'Design logo,business card,flyer unique and colourful'),
(126, 'home', 'design_logo_busines1', 'ta', 'டிசைன் லோகோ, பிசினஸ் கார்டு, ஃப்ளையர் தனித்துவமானது மற்றும் வண்ணமயமானது '),
(127, 'home', 'sundar', 'de', 'Sundar'),
(128, 'home', 'sundar', 'en', 'sundar'),
(129, 'home', 'sundar', 'ta', 'சுந்தர் '),
(130, 'home', 'custome_feedback', 'de', 'Kundenbewertung'),
(131, 'home', 'custome_feedback', 'en', 'Customer Feedback'),
(132, 'home', 'custome_feedback', 'ta', 'வாடிக்கையாளர் கருத்து'),
(133, 'home', 'customer_feedback', 'de', 'Kundenfeedback'),
(134, 'home', 'customer_feedback', 'en', 'Customer Feedback'),
(135, 'home', 'customer_feedback', 'ta', 'வாடிக்கையாளர் கருத்து '),
(136, 'home', 'copyright_©_2020__', 'de', 'Copyright © 2020 – Alle Rechte vorbehalten'),
(137, 'home', 'copyright_©_2020__', 'en', 'Copyright © 2020 - All Rights Reserved'),
(139, 'home', 'house', 'de', 'Haus'),
(140, 'home', 'house', 'en', 'House'),
(141, 'home', 'house', 'ta', 'வீடு '),
(142, 'home', 'website_development', 'de', 'Website-Entwicklung, Hosting und Wartung'),
(143, 'home', 'website_development', 'en', 'Website Development, Hosting and Maintenance'),
(144, 'home', 'website_development', 'ta', 'இணையதள மேம்பாடு, ஹோஸ்டிங் மற்றும் பராமரிப்பு '),
(145, 'home', 'website_development', 'de', 'Website-Entwicklung'),
(146, 'home', 'website_development', 'en', 'Website Development'),
(147, 'home', 'website_development', 'ta', 'இணையதள மேம்பாடு '),
(148, 'home', 'travel_system', 'de', 'Reisesystem'),
(149, 'home', 'travel_system', 'en', 'Travel System'),
(150, 'home', 'travel_system', 'ta', 'பயண அமைப்பு '),
(151, 'home', 'money_transfer_prog', 'de', 'Geldtransferprogramm'),
(152, 'home', 'money_transfer_prog', 'en', 'Money Transfer Program'),
(153, 'home', 'money_transfer_prog', 'ta', 'பண பரிமாற்ற திட்டம் '),
(154, 'home', 'contact_info', 'de', 'Kontaktinformationen'),
(155, 'home', 'contact_info', 'en', 'Contact Info'),
(156, 'home', 'contact_info', 'ta', 'தொடர்புத் தகவல்'),
(241, 'about_us', 'welcome_to_our_comp', 'de', 'WELCOME TO OUR COMPANY'),
(242, 'about_us', 'welcome_to_our_comp', 'en', 'WELCOME TO OUR COMPANY'),
(243, 'about_us', 'welcome_to_our_comp', 'ta', 'WELCOME TO OUR COMPANY'),
(244, 'about_us', 'welcome_to_saran_so', 'de', 'WELCOME TO SARAN SOLUTIONS Warm welcome to our web design & development company. We are providing a high-end, next generation web design & development work for our customers with high quality. Part of our solutions we are providing Billing & Invoice Systems and Travel Solutions. Making difference in the market with high quality and best customer support.'),
(245, 'about_us', 'welcome_to_saran_so', 'en', 'WELCOME TO SARAN SOLUTIONS Warm welcome to our web design & development company. We are providing a high-end, next generation web design & development work for our customers with high quality. Part of our solutions we are providing Billing & Invoice Systems and Travel Solutions. Making difference in the market with high quality and best customer support.'),
(246, 'about_us', 'welcome_to_saran_so', 'ta', 'WELCOME TO SARAN SOLUTIONS Warm welcome to our web design & development company. We are providing a high-end, next generation web design & development work for our customers with high quality. Part of our solutions we are providing Billing & Invoice Systems and Travel Solutions. Making difference in the market with high quality and best customer support.'),
(247, 'about_us', 'web_and_graphich_de', 'de', 'Web and graphich Design'),
(248, 'about_us', 'web_and_graphich_de', 'en', 'Web and graphich Design'),
(249, 'about_us', 'web_and_graphich_de', 'ta', 'Web and graphich Design'),
(250, 'about_us', 'website_development', 'de', 'Website development'),
(251, 'about_us', 'website_development', 'en', 'Website development'),
(252, 'about_us', 'website_development', 'ta', 'Website development'),
(253, 'about_us', 'billing_systen', 'de', 'Billing Systen'),
(254, 'about_us', 'billing_systen', 'en', 'Billing Systen'),
(255, 'about_us', 'billing_systen', 'ta', 'Billing Systen'),
(256, 'about_us', 'seo_optimization', 'de', 'SEO Optimization'),
(257, 'about_us', 'seo_optimization', 'en', 'SEO Optimization'),
(258, 'about_us', 'seo_optimization', 'ta', 'SEO Optimization'),
(259, 'about_us', 'app_devlopment', 'de', 'App Devlopment'),
(260, 'about_us', 'app_devlopment', 'en', 'App Devlopment'),
(261, 'about_us', 'app_devlopment', 'ta', 'App Devlopment'),
(262, 'about_us', 'design_a_flyer', 'de', 'Design a Flyer'),
(263, 'about_us', 'design_a_flyer', 'en', 'Design a Flyer'),
(264, 'about_us', 'design_a_flyer', 'ta', 'Design a Flyer'),
(265, 'about_us', 'take_a_tour', 'de', 'TAKE A TOUR'),
(266, 'about_us', 'take_a_tour', 'en', 'TAKE A TOUR'),
(267, 'about_us', 'take_a_tour', 'ta', 'TAKE A TOUR'),
(268, 'about_us', 'contact_us', 'de', 'CONTACT US'),
(269, 'about_us', 'contact_us', 'en', 'CONTACT US'),
(270, 'about_us', 'contact_us', 'ta', 'CONTACT US'),
(271, 'about_us', 'our_projects', 'de', 'Our Projects'),
(272, 'about_us', 'our_projects', 'en', 'Our Projects'),
(273, 'about_us', 'our_projects', 'ta', 'Our Projects'),
(274, 'about_us', 'our_missions', 'de', 'Our missions'),
(275, 'about_us', 'our_missions', 'en', 'Our missions'),
(276, 'about_us', 'our_missions', 'ta', 'Our missions'),
(277, 'about_us', 'our_clients', 'de', 'Our clients'),
(278, 'about_us', 'our_clients', 'en', 'Our clients'),
(279, 'about_us', 'our_clients', 'ta', 'Our clients'),
(280, 'about_us', 'heading_office', 'de', 'Heading office'),
(281, 'about_us', 'heading_office', 'en', 'Heading office'),
(282, 'about_us', 'heading_office', 'ta', 'Heading office'),
(283, 'about_us', 'our_team', 'de', 'Our team'),
(284, 'about_us', 'our_team', 'en', 'Our team'),
(285, 'about_us', 'our_team', 'ta', 'Our team'),
(286, 'about_us', 'r_adipiscing_elit_s', 'de', 'r adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus.'),
(287, 'about_us', 'r_adipiscing_elit_s', 'en', 'r adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus.'),
(288, 'about_us', 'r_adipiscing_elit_s', 'ta', 'r adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus.'),
(289, 'about_us', 'what_our_client_say?', 'de', 'What our client say?'),
(290, 'about_us', 'what_our_client_say?', 'en', 'What our client say?'),
(291, 'about_us', 'what_our_client_say?', 'ta', 'What our client say?'),
(292, 'about_us', 'quisque_at_tortor_a', 'de', 'Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus.'),
(293, 'about_us', 'quisque_at_tortor_a', 'en', 'Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus.'),
(294, 'about_us', 'quisque_at_tortor_a', 'ta', 'Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus.'),
(295, 'about_us', 'lorem_ipsum_dolor_s', 'de', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.'),
(296, 'about_us', 'lorem_ipsum_dolor_s', 'en', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.'),
(297, 'about_us', 'lorem_ipsum_dolor_s', 'ta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.'),
(298, 'about_us', 'content_heading_5', 'de', 'Content heading 5'),
(299, 'about_us', 'content_heading_5', 'en', 'Content heading 5'),
(300, 'about_us', 'content_heading_5', 'ta', 'Content heading 5'),
(301, 'about_us', 'content_heading_6', 'de', 'Content heading 6'),
(302, 'about_us', 'content_heading_6', 'en', 'Content heading 6'),
(303, 'about_us', 'content_heading_6', 'ta', 'Content heading 6'),
(304, 'about_us', 'our_skills', 'de', 'Our skills'),
(305, 'about_us', 'our_skills', 'en', 'Our skills'),
(306, 'about_us', 'our_skills', 'ta', 'Our skills'),
(307, 'about_us', 'quisque_at_tortor_a', 'de', 'Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Donec viverra semper arcu ut blandit. Suspendisse ac tempus diam. Duis dignissim lacinia sapien in tempor.'),
(308, 'about_us', 'quisque_at_tortor_a', 'en', 'Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Donec viverra semper arcu ut blandit. Suspendisse ac tempus diam. Duis dignissim lacinia sapien in tempor.'),
(309, 'about_us', 'quisque_at_tortor_a', 'ta', 'Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Donec viverra semper arcu ut blandit. Suspendisse ac tempus diam. Duis dignissim lacinia sapien in tempor.'),
(310, 'about_us', 'graphi_c_design', 'de', 'graphi c design'),
(311, 'about_us', 'graphi_c_design', 'en', 'graphi c design'),
(312, 'about_us', 'graphi_c_design', 'ta', 'graphi c design'),
(313, 'about_us', 'html5_&_css_3', 'de', 'html5 & css 3'),
(314, 'about_us', 'html5_&_css_3', 'en', 'html5 & css 3'),
(315, 'about_us', 'html5_&_css_3', 'ta', 'html5 & css 3'),
(316, 'about_us', 'mobile_design', 'de', 'mobile design'),
(317, 'about_us', 'mobile_design', 'en', 'mobile design'),
(318, 'about_us', 'mobile_design', 'ta', 'mobile design'),
(319, 'about_us', 'programing', 'de', 'programing'),
(320, 'about_us', 'programing', 'en', 'programing'),
(321, 'about_us', 'programing', 'ta', 'programing'),
(322, 'about_us', 'web_design', 'de', 'web design'),
(323, 'about_us', 'web_design', 'en', 'web design'),
(324, 'about_us', 'web_design', 'ta', 'web design');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lang_table`
--
ALTER TABLE `lang_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lang_table`
--
ALTER TABLE `lang_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
