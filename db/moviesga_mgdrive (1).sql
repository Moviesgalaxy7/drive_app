-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2023 at 09:25 AM
-- Server version: 8.0.35
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesga_mgdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int NOT NULL,
  `gid` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci COMMENT='Save Gdrive file URL';

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `gid`, `name`, `created`) VALUES
(1, '1b2oKoUpHR0Kl0mCVys4wsXF6cK9o5PHW', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 20:30:44'),
(2, '187jcpfLEAMmMcm9coM8Hky6KDqWrgMkZ', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 20:44:11'),
(3, '1PPiQ-V6oAXvRZhJnS1P9nJAlvW1MF1gm', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 20:49:30'),
(4, '1-pUp1ttCEa1UEoEOwcUv7nAf7wvc_yr2', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:11:01'),
(5, '1xcN6VQmWGpK40CKy7CNuciIYDy1-0Bb4', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:12:28'),
(6, '1ACwSyKePrcw31zBq1iqUCru9XK090SD1', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:23:16'),
(7, '1d9601Ul8mjjVC6n_f_gP7BXC3bN2IX6Z', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:28:18'),
(8, '1mGfnS1e1lY5Iulu1eCbeg_vp-wAMYrqX', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:28:57'),
(9, '1bzdmoVPAoCCG5MCepqHZ56dMEASrXgEQ', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:45:13'),
(10, '', '', '2023-12-15 21:48:26'),
(11, '1VntadiL50utQUrRgQYxF6hQ8cQwi-b5z', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:49:12'),
(12, '1bSsainX7o819S8rlteirHSdKsqgvUTaP', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-15 21:49:55'),
(13, '', '', '2023-12-16 13:36:04'),
(14, '1BoJusfk0uNNdXdDPiK0a3FwyyfZl8AT4', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-16 15:16:22'),
(15, '1OhA6i0NqhMF6Gix7Kv9KIDsPRCZ8KUnY', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-16 15:23:21'),
(16, '1euwRNP_y-ST-lw4YCQVsUk0C4p9qalqc', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-16 15:32:34'),
(17, '1p7aOw0Chn6rMXxQpM4Ip0i64NHn9o4hG', 'Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv', '2023-12-16 16:45:58'),
(18, '', '', '2023-12-17 08:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int NOT NULL,
  `token` text COLLATE utf8mb3_unicode_ci,
  `expires_in` smallint NOT NULL,
  `refresh_token` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `scope` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `token_type` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci COMMENT='Save access token';

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `token`, `expires_in`, `refresh_token`, `scope`, `token_type`, `created_at`) VALUES
(1, 'ya29.a0AfB_byCFl2dNsV-eXBSTZf-NXnGGTkrit2nl8VVRnKOS2ok6tETqbL8zLCmi2MhN2cwAIyQbg2oQ6vZnnJlfDWkLkBB5hTbOT9QQMUBVDOFtfRJabeEUi1KINcEFihgaOGX9CFxUO0mt_3tYNiekUHPs7eF4IDIlmAaCgYKARYSARASFQHGX2MijmLjuGuPxVvx5pAT3yZuCg0169', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-14 21:10:20'),
(2, 'ya29.a0AfB_byDamlsD_rB57rfbOV0rpXQt3XACTYud5tgxof8gkfX2XWXPi1a7kMUrLOa4xu7xmkom50DW4Q_KUTbCKPnOWc015pCb25Q222wdfPitEWGy6ys_AetO8BNTcLeytkAhv1ZyJUob1iW29ASkJ7MB1LavDvV56UAaCgYKAaISARASFQHGX2MizqrB1Mkm6_4j3EnDMKJJPg0170', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-15 15:31:33'),
(3, 'ya29.a0AfB_byBI40VwgFRnNvtAbQaO2Rr7o8BetDL7119HxhIL6N4b4yy5IX4khHzrbcAckFXBGYlsjUciGKl-X_F7zc3UDdAf-1h7TANy_iiZPmemSGur0QJCRhd9ml6jMg4FGBYlePXcg4Q05Ap00oC1-TLdRlgemPn2obAaCgYKAWMSARASFQHGX2Mi1ytbsK9zoCI2hx4CO5cutg0170', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-15 19:46:50'),
(4, 'ya29.a0AfB_byA0xsylQlrOD8aZVKobssghQZ2J75bgvhsoRMaiciVMJ_H3usODDxmaVInbADh33QdelhJKUdlWv_3MjJ7Puc3NzJCehy8sCDwEx_LLwTP0qi-CAv0bn4SFWmPSs8o4SfA-MO63taVeSih-4u6bydtEx-fG6BcaCgYKAcMSARISFQHGX2MiYHduQ7FRr7hSdzmM9MyeBQ0170', 3599, '', 'https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive', 'Bearer', '2023-12-15 19:50:19'),
(5, 'ya29.a0AfB_byCK0jZ-kl9mInuNuIbVMGblWm6Ty7F9yF9XN3vKo8QByb7nnhDXbXPboqUfu3cVScHw-RLWHJXhBMt2AUEej6XJ5ULXRE8ONAeKMWm5Atq8UpVkjdupUZePUWaZGEe3g4Lx9hGy2l1Uc20mdGMaZOyhqKcEhl4aCgYKARUSARISFQHGX2MiznpI7G4yq0WX5v3XPCEVWA0170', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-15 21:08:29'),
(6, 'ya29.a0AfB_byBxnCnKpxs4f7SEhwevXg8RjUpFh-OCOTH89odxaSPZZwOqr99Kfr9heYQY1dRvP30eGwUKmm4rIRajOvGYgnre56MYNFQWKcCsPaJtrwwWC-IycNyALNcIBRi6APdHPTjEWZdJQvLVX3-uDYaqNXlJ0dRY_ggaCgYKAe0SARISFQHGX2MiTPJPKv7suKmwsIyeHhcYDw0170', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 07:57:54'),
(7, 'ya29.a0AfB_byBocEhaRNzPkB60o_bZ4dcMRA0jmP7g2N6VBs4t-zRi5Irs0CFAZrSusYWK2ub_qEnI4ho-jador5B5R2jp6fT6xG2PcIAgX2AVb484rJT-BdEJNThtCC2xpCtmXHfJBmOYj8mTGZaRM4SxBxLIhIK372q-lTEaCgYKAeMSARASFQHGX2MiZEKKkolgjJpVR2JoLtUFxw0170', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 14:08:58'),
(8, 'ya29.a0AfB_byCnoJoCYh6TJPsMQ5JrsRSyFcUl-ZBMEltfZP27c4aOF-Ge6ThHSzZxUdsLbgTm3M9CiFkaga6TzRiMTadY2BvF8aBL-X_du1k-dZ0ru_ukyokLkgr2zrr4l7QtnTYO8S1u9b915nkUEgtoYOHwIXwPs6fxI48aCgYKAToSARISFQHGX2MiwbvJGcpYQvLjrs1ghL8zqA0170', 3599, '', 'https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive', 'Bearer', '2023-12-16 14:38:17'),
(9, 'ya29.a0AfB_byA8dnGrTYjNzWpx15QdB_bZkeDbHDbTMhYi-B61RzdgK_jq6pFHVJZBmoj_XUZfYJ5bMo4ttCaaOyF-t-qWcSG9P_k7m_GGDClKVCzYlBvJawUtabPaxDUsR5-hPdPszT9q4DDACd2c4rps0dNCie3riNddO_saCgYKASQSARISFQHGX2MicNBe1xdqC284YeXCDL5qRg0170', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 14:45:01'),
(10, 'ya29.a0AfB_byA2NXYPjKttA4FQ9Ga-7yo90l4Rx8gkWWB3vZbOVdusTqrZPHikov1ZzWCQ8111VXaFX16H_mT0chWILm9_d_8s5ALJ7TDYUtzFIgLCBA1A1iV_Oo1qB_hJr1R4ptrfNjjU2-fYGe6zV2ceedSygFAnO6qBpwd4aCgYKAakSARISFQHGX2Mi-ajOvwi3NPJex8JVIcbEBQ0171', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 14:54:12'),
(11, 'ya29.a0AfB_byDw6GzAoDBLVxnV53639Zxz7K41cDHLj0A4Ycl4iLaUGhPDiq24ZFvRRqLV2-8mgyn4MEFUgSdsrAdSMPXjeq6JitEuBaYdi_Fm57Cu2_MjErrvJJbYJQ_qJgT1EF8_EtKHpUAubio84IB9i9tNmvy-9QpRbAaCgYKARMSARISFQHGX2Mi6cOgh8_C2M--UR6iYs-JaQ0169', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 14:59:26'),
(12, 'ya29.a0AfB_byCFTJgdP27ZlD_VnQLhelgpgjF104WpqJw-TSy5GedUNwltd-L90WCUnPFTcO1rTVTEz3C-utIUfERkkoTTWVcy1N35y_3rw7yiGWmVo5bevN1mvgkM4Ux0FmRc6v6sUzKeO9pslSJ1BwvgfPnTi3-CXD2e6waCgYKAUcSARISFQHGX2MiC7DFrZBv8_5GxesPa25Hcw0169', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 14:59:48'),
(13, 'ya29.a0AfB_byDsJzKeZTlj3oimKDw65vs_yN7MknmdKahL3GWKFw5Uo34jioNU0bo_3hI-MVCglWeKyj69ctFPcvUvdFKxcBFnGmn1rfeO797Ykjxra0vvRBI_Lm5-_ra6y12UKW20Hsi-77DZJe-LmynreVCTs0Mf0UJetwaCgYKAdkSARISFQHGX2MiUvmh_KFEkcm6BPUeF6vmxA0169', 3599, '', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 15:00:19'),
(14, 'ya29.a0AfB_byC8nv9HDjcEBt7iT-YVk05lHXwhWfuIgeDnypDpZe6lFhXTFPobTRcmXySF6TZAu7bRoRzTauphqmuoXf9yJ6WpstlZSZZV-B_mzz0bb1z7U65GwE1vTkiMenwyRD2KoS3EsyLIjIPFG6B2vqwBFxdRb_xp2h9laCgYKAcISARISFQHGX2MipJhlp0GC5lDUGwRY4LDgmQ0171', 3599, '1//09qiXQkG3SLb4CgYIARAAGAkSNwF-L9IrBvGLgVSlioq3kqHFLkqiqpbSp9C96Su8dHC3A5qBiRqBwJw4mo3lbSIW3ZEF2I3BXqo', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 15:00:58'),
(15, 'ya29.a0AfB_byDYH0r2flOEaCp4nOjQhZ87nk-SMhmwWpsMuUpmYuXUQShvGh9zO44juSSsSQnVI3JVnB-jWiIxXcV09rUZpMbpIyZD8wHoLck-RUJPv-RJScFmXG95PsH0aEP-yxAJ70Xgjcy5RV-CDydXmgySF9XpcoLhmT8BaCgYKAWQSARISFQHGX2MigbUHv_ALxZ_IcchHOHgDmA0171', 3599, '1//09Al5C0QDybuFCgYIARAAGAkSNwF-L9Ir1XWP0Sfus3HBm1gCt3gUtDqJw4x-7gv1YTBYuugTHZdc78twosbJtNCXdTh2pRuMxKw', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file', 'Bearer', '2023-12-16 15:04:03'),
(16, 'ya29.a0AfB_byAqJa6C4ygvz6MRFzaBR5ZnwePxZ_ySmONWxfv6DS4NEAUSLU5D66hBIcYZ-QopPFkOU5R7wITL3DXWDmL-2K_XfEGka36f3W8WFZ5q3j9Yo4F56UPN4FZOIN_bvjVQ_OOclwpmkkwjQFXzQX_ZxWSTs7PqV0-_aCgYKAZYSARASFQHGX2MiNcfnSMO4RUbeYOommIHvqg0171', 3599, '1//094udx95e5dOFCgYIARAAGAkSNwF-L9IrUl_Ef4ei6J8PNQStjTYwUzKo3dMMtjvplkJqf5Sp372db2opgZ9ycH2XFmKnxk4d19E', 'https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive', 'Bearer', '2023-12-16 15:32:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
