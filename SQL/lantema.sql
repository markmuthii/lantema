-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lantema`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `town` varchar(255) DEFAULT NULL,
  `buiding` varchar(255) DEFAULT NULL,
  `pobox` varchar(255) DEFAULT NULL,
  `zip` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` float(50,2) NOT NULL,
  `agent_id` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `agent_id`, `status`, `created_at`, `modified_at`) VALUES
(1, 1, 270.00, 3, 2, '2022-11-23 01:55:14', '2022-11-23 03:15:46'),
(2, 1, 450.00, 5, 2, '2022-11-23 02:00:25', '2022-11-23 03:17:28'),
(3, 1, 822.00, 3, 2, '2022-11-23 02:00:36', '2022-11-23 03:15:52'),
(4, 1, 2349.00, 5, 0, '2022-11-23 03:56:48', '2022-11-23 03:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float(20,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `modified_at`) VALUES
(1, 1, 1, 250.00, 1, '2022-11-23 01:55:14', '2022-11-23 01:55:14'),
(2, 1, 2, 20.00, 1, '2022-11-23 01:55:14', '2022-11-23 01:55:14'),
(3, 2, 7, 450.00, 1, '2022-11-23 02:00:25', '2022-11-23 02:00:25'),
(4, 3, 8, 45.00, 1, '2022-11-23 02:00:36', '2022-11-23 02:00:36'),
(5, 3, 9, 777.00, 1, '2022-11-23 02:00:36', '2022-11-23 02:00:36'),
(6, 4, 4, 300.00, 1, '2022-11-23 03:56:48', '2022-11-23 03:56:48'),
(7, 4, 9, 777.00, 2, '2022-11-23 03:56:48', '2022-11-23 03:56:48'),
(8, 4, 7, 450.00, 1, '2022-11-23 03:56:48', '2022-11-23 03:56:48'),
(9, 4, 8, 45.00, 1, '2022-11-23 03:56:48', '2022-11-23 03:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `amount` float(20,2) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `description`, `slug`, `status`, `created_at`, `modified_at`) VALUES
(1, 'M-Pesa', 'M-pesa payment by Till/Paybill', 'mpesa', 1, '2022-11-18 11:04:39', '2022-11-18 11:04:39'),
(2, 'Cash on Delivery', 'Pay cash on delivery', 'cash-on-delivery', 1, '2022-11-18 11:04:39', '2022-11-18 11:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(255,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image_url`, `category_id`, `description`, `slug`, `created_at`, `modified_at`) VALUES
(1, 'Jogoo Maize Flour', 250.00, 50, 'https://shambashop.co.ke/wp-content/uploads/2020/04/Flour-2kg.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id eleifend turpis. Nam pharetra mauris id feugiat venenatis. Cras pharetra dictum bibendum. Sed euismod arcu elit, eget interdum justo commodo eget. Phasellus rutrum rhoncus tortor. Nullam condimentum tellus diam, et convallis lorem vestibulum vitae. Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex sit amet, volutpat nisl.', '', '2022-11-18 05:50:46', '2022-11-21 21:52:51'),
(2, 'Spinach', 20.00, 50, 'http://cdn.shopify.com/s/files/1/0206/9470/products/spinach_silverbeet_resized_2_16134abf-2573-432f-9766-6b6ab7d77429_grande.jpeg?v=1568670529', 1, 'Ut ultricies, urna at cursus auctor, ex velit auctor magna, non maximus enim nulla eget lorem. Aliquam quis pellentesque risus, ut lacinia lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales augue vitae rhoncus gravida. Integer egestas eros id ante vehicula sollicitudin. Nulla luctus neque vitae tortor condimentum congue. Nulla ut aliquet magna. Sed quis metus lobortis, euismod ante at, tempor dolor. Praesent aliquam ligula eleifend, venenatis mauris vel, hendrerit neque.', '', '2022-11-18 05:50:46', '2022-11-21 21:31:43'),
(3, 'Rina Cooking Oil', 247.00, 22, 'https://copia.co.ke/wp-content/uploads/2021/05/KF114_3540-3.jpg', 1, 'Phasellus rutrum rhoncus tortor. Nullam condimentum tellus diam, et convallis lorem vestibulum vitae. Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex sit amet, volutpat nisl.', '', '2022-11-18 09:07:17', '2022-11-21 21:53:09'),
(4, 'Elianto', 300.00, 4, 'https://mybigorder.com/public/uploads/products/thumbnail/0pLb2tbVMi9zpZWgGDUlWjLdqjpKTrFmBrPe24v9.jpeg', 1, 'Convallis lorem vestibulum vitae. Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex', '', '2022-11-18 09:10:52', '2022-11-18 09:10:52'),
(6, 'Soko', 150.00, 55, 'https://mybigorder.com/public/uploads/products/meta/GAZDlj9x78PIicfGaHVW1Cipu4MeShdz2hS5vEUY.jpeg', 2, 'nteger egestas eros id ante vehicula sollicitudin. Nulla luctus neque vitae tortor condimentum congue. Nulla ut aliquet magna. Sed quis metus lobortis, euismod ante at, tempor dolor. Praesent aliquam ligula eleifend, venenatis mauris vel, hendrerit neque.', '', '2022-11-20 20:18:39', '2022-11-20 20:18:39'),
(7, 'Ajab', 450.00, 858, 'https://cdnprod.mafretailproxy.com/sys-master-root/h17/h34/16872257224734/134158_main.jpg_480Wx480H', 2, 'Nullam condimentum tellus diam, et convallis lorem vestibulum vitae. Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex sit amet, volutpat nisl.', '', '2022-11-20 20:19:19', '2022-11-20 20:19:19'),
(8, 'Pembe', 45.00, 87, 'https://ke.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/33/056521/1.jpg?8962', 2, 'Nam pharetra mauris id feugiat venenatis. Cras pharetra dictum bibendum. Sed euismod arcu elit, eget interdum justo commodo eget. Phasellus rutrum rhoncus tortor. Nullam condimentum tellus diam, et convallis lorem vestibulum vitae. Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex sit amet, volutpat nisl.', '', '2022-11-20 20:20:03', '2022-11-20 20:20:03'),
(9, 'Rina 2', 777.00, 777, 'https://copia.co.ke/wp-content/uploads/2021/05/KF114_3540-3.jpg', 1, 'rsus auctor, ex velit auctor magna, non maximus enim nulla eget lorem. Aliquam quis pellentesque risus, ut lacinia lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales augue vitae rhoncus gravida. Integer egestas eros id ante vehicula sollicitudin. Nulla luctus neque vitae tortor condimentum congue. Nulla ut aliquet magna. Sed quis metus lobortis, euismod ante at, tempor dolor. Praesent aliquam ligula eleifend, venenatis mauris vel, hendrerit neque.', '', '2022-11-20 20:59:58', '2022-11-20 20:59:58'),
(10, 'Soko 3', 210.00, 200, 'https://mybigorder.com/public/uploads/products/meta/GAZDlj9x78PIicfGaHVW1Cipu4MeShdz2hS5vEUY.jpeg', 1, 'Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex sit amet, volutpat. Integer quis turpis at sapien placerat viverra at sed ligula. Morbi rhoncus feugiat elit, nec dapibus metus porttitor et. Vestibulum nec purus lacinia, cursus ex sit amet, volutpat', '', '2022-11-20 21:27:14', '2022-11-20 21:27:14'),
(11, 'Pembe 2', 200.00, 45, 'https://ke.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/33/056521/1.jpg?8962', 2, 'Nam pharetra mauris id feugiat venenatis. Cras pharetra dictum bibendum. Sed euismod arcu elit, eget interdum justo commodo eget. Phasellus rutrum rhoncus tortor. Nullam condimentum tellus diam, et convallis lorem vestibulum vitae. Integer quis. Nam pharetra mauris id feugiat venenatis. Cras pharetra dictum bibendum. Sed euismod arcu elit, eget interdum justo commodo eget. Phasellus rutrum rhoncus tortor. Nullam condimentum tellus diam, et convallis lorem vestibulum vitae. Integer quis', '', '2022-11-20 21:27:57', '2022-11-20 21:27:57'),
(12, 'Capsicum', 50.00, 200, 'https://sunrisefruits.com/wp-content/uploads/2018/05/Productos-Pimientos-Peppers-Sunrisefruitscompany.jpg', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id eleifend turpis. Nam pharetra mauris id feugiat venenatis. Cras pharetra dictum bibendum. Sed euismod arcu elit, eget interdum justo commodo eget. Phasellus rutrum rhoncus tortor. N', '', '2022-11-22 07:48:18', '2022-11-22 07:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `slug`, `status`, `created_at`, `modified_at`) VALUES
(1, 'Fruits', '', 'fruits', 1, '2022-11-21 21:24:25', '2022-11-21 21:24:25'),
(2, 'Vegetables', '', 'vegetables', 1, '2022-11-21 21:24:25', '2022-11-21 21:24:25'),
(3, 'Flour', '', 'flour', 1, '2022-11-21 21:24:25', '2022-11-21 21:24:25'),
(4, 'Cooking Oil', 'Cooking oil description.', 'Cooking-Oil', 1, '2022-11-22 08:54:24', '2022-11-22 08:54:24'),
(5, 'Meat', 'Beef, mutton, pork, chicken, fish ', 'meat', 1, '2022-11-22 09:09:33', '2022-11-22 09:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_identifier` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `role_identifier`, `created_at`, `modified_at`) VALUES
(1, 'User', 'user', '2022-11-18 03:45:27', '2022-11-18 03:45:27'),
(2, 'Admin', 'admin', '2022-11-18 03:45:27', '2022-11-18 03:45:27'),
(3, 'Agent', 'agent', '2022-11-23 00:05:58', '2022-11-23 00:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `telephone`, `role`, `created_at`, `modified_at`) VALUES
(1, 'Doreen', 'Kendi', 'daphk', '$2y$10$WbX162HPnjFOTuDEZTEzR.7c5SLVyeBAU2upo65zdi9o4/p2S3Klu', 'daphyk@gmail.com', '0712345678', 2, '2022-11-18 04:40:14', '2022-11-18 07:05:51'),
(2, 'Mark', 'Muthii', 'kram', '$2y$10$WbX162HPnjFOTuDEZTEzR.7c5SLVyeBAU2upo65zdi9o4/p2S3Klu', 'kram@gmail.com', '0712345679', 1, '2022-11-18 04:40:14', '2022-11-18 07:05:51'),
(3, 'Agent', 'Reen', 'agentreen', '$2y$10$WbX162HPnjFOTuDEZTEzR.7c5SLVyeBAU2upo65zdi9o4/p2S3Klu', 'agentreen@gmail.com', '0723456789', 3, '2022-11-23 00:08:30', '2022-11-23 00:10:51'),
(4, 'Agent', 'Mark', 'agentmark', '$2y$10$WbX162HPnjFOTuDEZTEzR.7c5SLVyeBAU2upo65zdi9o4/p2S3Klu', 'agentmark@gmail.com', '0723456780', 3, '2022-11-23 00:08:30', '2022-11-23 00:10:51'),
(5, 'Agent', 'Doreen', 'agentdoreen', '$2y$10$WbX162HPnjFOTuDEZTEzR.7c5SLVyeBAU2upo65zdi9o4/p2S3Klu', 'agentdoreen@gmail.com', '0723456781', 3, '2022-11-23 00:08:30', '2022-11-23 00:10:51'),
(6, 'Mark', 'Muthii', '', '$2y$10$.FeHV2wVnKcw0ZuTC6v/EOBDtfHFr6sWmhhbS9kjxBxtUAIFZUxaK', 'kram2@gmail.com', '', 1, '2022-11-23 03:48:42', '2022-11-23 03:48:42'),
(7, 'Mark', 'Muthii', '', '$2y$10$f18iDNr6486TpTCVYoTPZOeo9BdBxOm1dtVyjStB4wuEyJJmTlIDq', 'kram3@gmail.com', '', 1, '2022-11-23 03:50:25', '2022-11-23 03:50:25'),
(8, 'Mark 2', 'M', 'kr', '$2y$10$0XF6Ic5XSnz/WJKi/XKqEe3Ahol4tV79xeF6QPpyrkc3N2jXZdntW', 'kr@gmail.com', '5454545454', 1, '2022-11-23 03:52:03', '2022-11-23 03:52:03'),
(9, 'Mark 2', 'M', 'kr2', '$2y$10$iNpZoD6/7tYHMwm1D5Qb4Oa372gxA5waqSy50rvqrt.BBsu8JNogG', 'kr2@gmail.com', '5454545454', 1, '2022-11-23 03:53:33', '2022-11-23 03:53:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
