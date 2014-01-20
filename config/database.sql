-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_page`
--

CREATE TABLE `tl_page` (
  `pageHeadline` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table `tl_module`
--

CREATE TABLE `tl_module` (
  `inheritPageHeadline` char(1) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

