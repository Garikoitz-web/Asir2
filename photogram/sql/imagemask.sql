

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

create database imagemask;

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `publicacion` int(11) NOT NULL,
  `filtro` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `archivos` (`id`, `user`, `ruta`, `tipo`, `size`, `publicacion`, `filtro`, `fecha`) VALUES
(1, 2, 'ID-9-NAME-EFC9EE.jpg', 'image/jpeg', 287563, 9, 'moon', '2020-01-13 00:41:10'),




CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `favoritos` (`id`, `post`, `usuario`) VALUES
(40, 15, 2),
(42, 14, 2);



CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `likes` (`id`, `usuario`, `post`, `fecha`) VALUES
(1, 2, 1, '2020-01-13 00:41:10');



CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `publicaciones` (`id`, `user`, `descripcion`, `ubicacion`, `fecha`, `likes`) VALUES
(1, 2, 'NiÃ±o', '', '2020-01-27 19:41:40', 0);




CREATE TABLE `seguidores` (
  `id` int(11) NOT NULL,
  `seguidor` int(11) NOT NULL,
  `seguido` int(11) NOT NULL,
  `aprobada` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `seguidores` (`id`, `seguidor`, `seguido`, `aprobada`, `fecha`) VALUES
(1, 2, 1, 1, '2020-01-13 00:41:10');



CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `birthday` date DEFAULT NULL,
  `sex` enum('male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `site_language` bigint(20) UNSIGNED DEFAULT '1',
  `avatar` varchar(225) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `private_profile` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Este perfil es privado?',
  `verified` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Este perfil esta verificado?',
  `banned` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Este perfil esta baneado?',
  `code` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Verifico el correo',
  `signup_date` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `signup_ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `phone`, `birthday`, `sex`, `bio`, `site_language`, `avatar`, `private_profile`, `verified`, `banned`, `code`, `token`, `confirmed`, `signup_date`, `last_login`, `signup_ip`, `last_ip`) VALUES
(1, 'demo', '4d186321c1a7f0f354b297e8914ab240', 'demo@demo.com', 'Demo', NULL, NULL, NULL, 'Esto es una descripcion', 1, 'default.png', '1', '0', '0', '', '', '1', '2020-01-13 00:41:10', '2020-01-13 00:41:10', NULL, NULL),
(2, 'tuntoriales', '9f612cba7877513e589bcdfa37c68ddd', 'tuntoriales@tuntos.com', 'Sebastian', NULL, NULL, NULL, 'Desccccc', 1, 'default.png', '0', '1', '0', '5b13632c519bc', '2222', '1', '2020-01-13 00:41:10', NULL, NULL, '::1');


ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `seguidores`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;


ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;


ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


ALTER TABLE `seguidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


