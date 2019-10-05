--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--
CREATE TABLE IF NOT EXISTS `tbl_images` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;