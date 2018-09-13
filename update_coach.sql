-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2018 a las 00:29:41
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `update_coach`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `cod_banner` int(11) NOT NULL,
  `imagen` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `titulo` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `texto` text CHARACTER SET latin1,
  `precio` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `oferta` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `link` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`cod_banner`, `imagen`, `titulo`, `texto`, `precio`, `oferta`, `link`, `orden`, `estado`) VALUES
(1, 'banner2.jpg', 'NON LECTUS', 'Ut interdum, sapien sit amet aliquam semper, sapien arcu laoreet tortor, sed pulvinar quam felis non lectus. In et massa leo.', 'S/.8.00', 'S/. 10.00', '#', 2, 1),
(3, '2018-05-15.jpg', 'VEL MASSA', 'Suspendisse vel massa nibh. Mauris mattis mollis risus, id pellentesque nulla posuere ut. Sed placerat elit nulla, quis gravida dolor pretium in. Maecenas tempor consectetur sapien vitae auctor. ', 'S/.8.00', 'S/. 10.00', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `cod_contact` int(11) NOT NULL,
  `direction` text,
  `phone` text,
  `mobile` text,
  `email` text,
  `diaa` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `horarioa` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `diab` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `horariob` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `diac` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `horarioc` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `map` varchar(9999) DEFAULT NULL,
  `face` varchar(9999) CHARACTER SET utf8 DEFAULT NULL,
  `form_mail` text,
  `cart_mail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`cod_contact`, `direction`, `phone`, `mobile`, `email`, `diaa`, `horarioa`, `diab`, `horariob`, `diac`, `horarioc`, `map`, `face`, `form_mail`, `cart_mail`) VALUES
(1, 'Av. Arenales 2201, Centro Comercial Risso, Lince - Lima', '333 8804', '965 488 089', 'info@quemono.com.pe', 'Lunes a Viernes ', '11:00 - 21:00', 'Sábado', '11:00 - 21:00', 'Domingo', '00:00 - 19:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.3444411369518!2d-77.03594817080054!3d-12.086270688087836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA1JzEwLjYiUyA3N8KwMDInMDcuNCJX!5e0!3m2!1ses-419!2spe!4v1526592619857\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0&appId=2056293721256037\';\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>\r\n<div class=\"fb-page\" data-href=\"https://www.facebook.com/pg/quemonoperu/\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/pg/quemonoperu/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/pg/quemonoperu/\">Quemono</a></blockquote></div>', 'raulupdate@gmail.com', 'raulupdate@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `cod_contenido` int(11) NOT NULL,
  `titulo_contenido` varchar(250) DEFAULT NULL,
  `img_contenido` varchar(250) DEFAULT NULL,
  `contenido` text,
  `estado` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`cod_contenido`, `titulo_contenido`, `img_contenido`, `contenido`, `estado`) VALUES
(1, 'Bienvenido a Quemono', 'nosotros.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id lacinia magna. Morbi porta libero odio, eu fringilla orci posuere nec. Suspendisse placerat ut enim a finibus. Ut vel molestie sem. Praesent interdum, libero a malesuada faucibus, risus arcu commodo neque, id semper ipsum urna a mauris. </p><p>Pellentesque dignissim sollicitudin sapien, et molestie purus sollicitudin et. Suspendisse semper sem vitae felis dapibus, vitae fringilla enim fringilla. Nunc id suscipit justo. Pellentesque non nibh urna. Duis ut quam eget massa posuere dignissim a a mi. Aliquam feugiat libero id urna mollis, interdum commodo ipsum laoreet. Etiam sem ante, condimentum ut elementum sed, eleifend et risus. In condimentum metus nunc, quis sodales massa euismod vel.</p>\r\n', '1'),
(2, 'Nuestra Misión', 'mision.jpg', '<p><span style=\"text-align: justify;\">Donec maximus mauris in elit condimentum, id aliquam dolor auctor. Ut interdum, lectus eu vulputate feugiat, libero ipsum commodo ante, sed rutrum eros elit ut augue.&nbsp;</span><span style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span><br></p>', '1'),
(3, 'Nuestra Visión', 'vision.jpg', '<p style=\"text-align:justify\">V&iacute;vamusa a n&uacute;nc dignissim, sodales enim vel, ullamcorper felis. Nam non eros vitae velit eleifend bibendum vel eu eros. Mauris lorem augue, auctor vitae consectetur quis, luctus sit amet ipsum.</p>\r\n', '1'),
(4, 'Nuestros Objetivos', 'objetivos.jpg', '<ul>\r\n	<li>Nullam sed viv&eacute;rra massa, in accumsan.</li>\r\n	<li>Sed ac facilisis ante, vel condimentum.&nbsp;</li>\r\n	<li>Pellentesque tincidunt pulvinar ipsum.</li>\r\n	<li>Morbi consectetur est ac augue&nbsp;ornare.</li>\r\n</ul>\r\n', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `cod_contacto` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `mensaje` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`cod_contacto`, `nombres`, `email`, `telefono`, `fecha_ingreso`, `mensaje`) VALUES
(1, 'Luiz Enrique Haro Tineo', 'raulmartiarena89@gmail.com', '923766570', '2018-01-23', 'xcvsx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metatags`
--

CREATE TABLE `metatags` (
  `cod_meta` int(11) NOT NULL,
  `slogan` text,
  `description` text,
  `face1` varchar(250) DEFAULT NULL,
  `face2` varchar(250) DEFAULT NULL,
  `ico` varchar(250) DEFAULT NULL,
  `keywords` text,
  `titulo` text,
  `logo` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metatags`
--

INSERT INTO `metatags` (`cod_meta`, `slogan`, `description`, `face1`, `face2`, `ico`, `keywords`, `titulo`, `logo`, `url`) VALUES
(1, '', 'Somos una organizaciÃ³n conformada por un equipo de coachs certificados que facilitamos procesos de desarrollo,transformaciÃ³n personal y organizacional elevando los niveles de liderazgo, desempeÃ±o, motivaciÃ³n, trabajo en equipo y cambio.', 'face1.jpg', 'face2.jpg', 'favicon.png', 'Coach de vida, coach de equipos, coach ejecutivo, coach familiar, coaching deportivo', 'Jopa Coaching', 'logoindex.png', 'http://localhost/proyectos/couch/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `cod_noticia` int(11) NOT NULL,
  `cod_categoria` int(11) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `noticia` longtext,
  `autor` varchar(250) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`cod_noticia`, `cod_categoria`, `slug`, `titulo`, `imagen`, `noticia`, `autor`, `fecha`, `estado`) VALUES
(1, 1, 'la-resistencia-al-cambio', 'La resistencia al cambio', 'noticia.jpg', '<p>Es esto algo normal en el ser humano? Es muy probable encontrar respuestas distintas, pero desde mi experiencia me pasÃ³ algo particular, vivÃ­ lo que es estar dentro de la resistencia a cambiar y esto me dio muchos aprendizajes significativos.Â </p><p>Les cuento quÃ© me detenÃ­a a cambiar?...serÃ© sincero al contÃ¡rselo Tener MIEDO...miedo a lo que no conozco, no domino y a lo nuevo por hacer y esto me paralizÃ³, me detuvo, me hizo huir, escapÃ©.Â </p><p>La resistencia al cambio es algo normal en casi todos y da lugar a inseguridades, miedos, mayores necesidades, incertidumbre y otras actitudes, sin embargo el cambio se convierte en muchas ocasiones necesario para el buen funcionamiento y descubrir un nuevo accionar. A nivel organizacional pasa a menudo, tambiÃ©n hay resistencia al cambio y veamos porque.Â </p><p>Una pequeÃ±a lista:Â </p><ul><li>Se sienten amenazados cuando hay que hacer cambios radicales.Â </li><li>La percepciÃ³n como ven las metas y estrategias de su organizaciÃ³n hacen que se sientan cÃ³modos y no entienden porque se necesita un cambio o meta nueva.Â </li><li>Miedo a no poder aprender las nuevas destrezas o conocimientos que se requierenÂ </li><li>Miedo al fracasoÂ </li><li>Mayores responsabilidadesÂ </li><li>Baja confianzaÂ </li><li>Amenaza del puesto de trabajo, sueldo u otros beneficiosÂ </li><li>Amenaza a tu forma de vidaÂ </li><li>Falta de conocimiento de por quÃ© cambiarÂ </li><li>Miedo a lo desconocidoÂ </li></ul><p>QuÃ© nos pasa cuando nos resistimos a cambiar? Dejamos de aprender, experimentar y conocer nuevos retos, desafÃ­os y logros.Â </p><p>Ahora bien en nuestro diario andar cambiamos de un estado a otro y hasta lo planificamos, es tan natural que lo asumimos sin darnos cuenta muchas veces, otras no. Por ejemplo: Cambio de ropa Cambio de zapatos Cambio menÃº Cambio de peatÃ³n a tener carro Cambio de soltero a casado De no ser padre a serlo De casa de mis padres a mi casa propia.Â </p><p>Decidimos y cambiamos con miedos muchas veces, pero igual lo hacemos. Entonces...cuÃ¡l deberÃ­a ser nuestra actitud al cambio?Â </p><p>Hay que comprender que muchas veces los cambios son buenos, que son una variable permanente en la empresa y en la vida, y hacerlo puede darnos un conocimiento nuevo y eso nos harÃ¡ crecer.Â </p><p>El Cambio es Bueno, pero no en todo ok? Que tus valores te indiquen en quÃ© no debemos de cambiar. </p><p>El Cambio es bueno...puedes huir de Ã©l o aprender, tu decides.</p>', 'Webmaster', '2018-09-13', 1),
(2, 1, 'el-desafio-del-amor', 'El desafio del amor', 'noticia.jpg', '<p>Es el tÃ­tulo de una pelÃ­cula que hizo cambiar mi visiÃ³n en mi relaciÃ³n de pareja con mi esposa. Si damos una mirada al mundo actual encontramos muchos matrimonios que se encuentran rotos, de pronto ya divorciados y algunos listos por serlo, esto lleva encontrar muchos hogares disfuncionales. Esto trae a mi memoria parte importante de esta pelÃ­cula y es cuando manifiestan el tema de nuestros votos al casarnos, nosotros manifestamos que estaremos siempre en las buenas y en las malas, pero pareciera que decimos que permaneceremos en las buenas, pues cuando algo estÃ¡ mal dejamos de luchar por cambiar y dar lo mejor a nuestro cÃ³nyuge. En esta pelÃ­cula muestran una figura que redondea este sentir, pegan dos botellas de vidrio pequeÃ±as, una de sal y la otra de pimienta y cuando el esposo en problemas quiso romperla el amigo le manifiesta que no lo haga pues al hacerlo una de las botellas se romperÃ­a. Que hermosa forma de manifestar la condiciÃ³n que se queda en una ruptura matrimonial. Que hermosa es la parte en que el padre del esposo le regala a su hijo un manual de 40 dÃ­as y le indica que trabajara dÃ­a a dÃ­a sin parar para salvar su matrimonio y estÃ¡ parte me hizo reflexionar que cada vez que humanamente ponemos nuestro esfuerzo por mÃ¡s que lo intentemos muchas veces fallamos, al llegar al dÃ­a 20 y ver que no lograba nada y llamando a su padre este decide ir a verlo y en esa conversaciÃ³n me marcÃ³ esta parte. El hijo renegaba por lo que estaba pasando con tanto esfuerzo y decÃ­a algo asÃ­: Estoy cansado de darle tanto, de preocuparme por ella y solo ver que me da la espalda y es indiferente a todo lo que hago. En ese momento su padre estaba recostado a una cruz escuchÃ¡ndolo atento. Cuando su hijo lanzÃ³ esta pregunta: CÃ³mo puedo demostrarle amor a alguien que siempre me rechaza? Su padre le responde: Muy buena pregunta y seguÃ­a recostado a una cruz.Â </p><p>Tremendo aprendizaje que tuve, fue para mi un momento de quiebre al darme cuenta que el hombre muchas veces vive de la misma manera a tan grande amor que nos da nuestro SeÃ±or Jesucristo...somos indiferentes y hacemos de nuestra vida lo que queremos.Â </p><p>El hijo entendiÃ³ que primero tenÃ­a que recibir del amor de Dios para que con ese amor vaya a la conquista de su esposa. EntendiÃ³ lo que su padre le dijo: Nadie puede dar lo que no tiene. Y rindiÃ³ su vida ante Dios y con su amor decidiÃ³ ir por su esposa.Â </p><p>Bueno no quiero contarte lo quÃ© pasÃ³ en la pelÃ­cula, es muy probable que lo imagines, pero te animo a que la veas, bÃºscala, cÃ³mprala, y mÃ­rala con tu cÃ³nyuge. Descubre tu aprendizaje.Â </p><p>Quiero terminar este compartir con este mensaje de la pelÃ­cula. Este joven era un bombero y dijo: â€œNunca abandones a tu pareja y menos en un incendioâ€Â </p><p>No sÃ© cÃ³mo estÃ¡ tu matrimonio, de pronto estÃ¡ en un incendio o estÃ¡ a punto de incendiarse, aprendÃ­ que nunca debemos abandonar a nuestra pareja. Luchemos por apagar el incendio pero con amor pero ese amor que es el verdadero...el amor de Dios.</p>', 'Webmaster', '2018-09-13', 1),
(3, 1, 'la-felicidad', 'La Felicidad', 'noticia.jpg', '<p>Quiero empezar con esta pregunta: Eres feliz? Pregunta muchas veces difÃ­cil de responder, pues nos confronta. Sea cualquiera tu respuesta, te hago estas preguntas Eres feliz en tu matrimonio? EstÃ¡s feliz en tu trabajo? EstÃ¡s feliz con tu sueldo? Si estas preguntas te pusieron en zona incÃ³moda o en modo mmmmmmm buena pregunta, de pronto deberÃ­amos ponernos a pensar que es el momento de empezar a serlo o quedarme igual como estoy.&nbsp;</p><p>Si estas preguntas hacen en tu vida tomar una decisiÃ³n, permÃ­teme felicitarte, re incomodÃ© y lo mÃ¡s probable es que salgas de esa zona cÃ³moda e intentes moverte para la busca de tu felicidad plena.&nbsp;</p><p>Te quiero hacer algunas preguntas mÃ¡s que de pronto sus respuestas hacen que te muevas hacer algo diferente. Recuerda esta frase: â€œSi sigues haciendo lo mismo, obtendrÃ¡s siempre lo mismoâ€ EstÃ¡s content@ con tus resultados. Tu respuesta definirÃ¡ tu accionar.&nbsp;</p><p>PermÃ­teme hacerte algunas preguntas y si es tu deseo tener una sesiÃ³n conmigo y charlar sobre tu deseo de lograr cambios significativos, encantado de ayudarte.&nbsp;</p><p>Si lo que tienes ahora no te gusta, cÃ³mo crees que deberÃ­a ser? CÃ³mo te imaginabas que iba a ser tu vida QuÃ© te gustarÃ­a que pasara hoy que no estÃ© pasando? Si tuvieras una varita mÃ¡gica que harÃ­as posible?&nbsp;</p><p>Te dejo estas preguntas esperando te ayude a moverte.&nbsp;</p><p>ContÃ¡ctame conmigo y gustoso en acompaÃ±arte en tu proceso.</p>', 'Webmaster', '2018-09-13', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_categorias`
--

CREATE TABLE `noticias_categorias` (
  `cod_categoria` int(11) NOT NULL,
  `slug` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `categoria` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `noticias_categorias`
--

INSERT INTO `noticias_categorias` (`cod_categoria`, `slug`, `categoria`, `orden`, `estado`) VALUES
(1, 'categoria-1', 'CategorÃ­a #1', 0, 1),
(2, 'categoria-2', 'CategorÃ­a #2', 1, 1),
(3, 'categoria-3', 'CategorÃ­a #3', 2, 1),
(4, 'categoria-4', 'CategorÃ­a #4', 3, 1),
(5, 'categoria-5', 'CategorÃ­a #5', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` int(11) NOT NULL,
  `cod_principal` int(11) DEFAULT NULL,
  `cod_categoria` int(11) DEFAULT NULL,
  `cod_sub_categoria` int(11) DEFAULT NULL,
  `slug` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `nom_producto` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` longtext CHARACTER SET utf8,
  `caracteristicas` longtext CHARACTER SET utf8,
  `info_adicional` longtext CHARACTER SET utf8,
  `video` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `stock` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `codigo` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `precio_oferta` double DEFAULT NULL,
  `precio_normal` double DEFAULT NULL,
  `descuento` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `promocion` int(1) DEFAULT NULL,
  `fecha_ing` date DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `h_imagen` varchar(250) DEFAULT NULL,
  `cod_carrusel` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `cod_principal`, `cod_categoria`, `cod_sub_categoria`, `slug`, `nom_producto`, `descripcion`, `caracteristicas`, `info_adicional`, `video`, `stock`, `codigo`, `precio_oferta`, `precio_normal`, `descuento`, `promocion`, `fecha_ing`, `imagen`, `h_imagen`, `cod_carrusel`, `orden`, `estado`) VALUES
(1, 1, 1, 1, 'sed-aliquet-tortor-tortor-pulvinar', 'Sed aliquet tortor tortor pulvinar', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum dignissim nulla ut pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer scelerisque lacinia lectus in vulputate. Curabitur felis sem, molestie ut vehicula in, cursus a urna. Nulla at laoreet massa. Sed in dignissim leo. Praesent vitae egestas mi, nec eleifend justo. Donec fermentum est non neque volutpat congue nec vel metus. Proin convallis purus nisi, quis egestas libero lacinia a. Aenean sodales vitae erat eget feugiat.</p><p>Suspendisse sit amet libero non mauris tincidunt tincidunt placerat in orci. Ut efficitur rhoncus massa, nec posuere magna placerat quis. Sed a mattis leo. Ut id sem volutpat, elementum justo eget, luctus quam.</p>', '<div><p>Donec dignissim, ante vel vulputate elementum, neque tortor viverra arcu, eu venenatis ex nunc vitae metus.</p></div><ul><li>Vivamus congue nibh nisi, ut laoreet sapien sagittis quis. </li><li>Donec id velit sed mi condimentum viverra. Sed at vestibulum massa.<br></li><li>Donec at risus et lorem consequat tempor. </li><li>Nullam erat ligula, molestie quis semper et, condimentum ut libero. </li><li>Curabitur a semper sapien.</li><li>Nullam interdum sit amet metus sit amet varius.<br></li></ul>', '<p>Quisque nec eleifend augue, ac tincidunt eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi eleifend, ante a rhoncus faucibus, metus erat fermentum dui, sed tincidunt lacus ligula nec mi. Nam vitae metus laoreet, rutrum est sed, aliquam lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla ultrices lobortis interdum. Donec bibendum vitae ipsum tincidunt condimentum. Nunc tempor lacus eu massa porttitor sagittis id vitae neque. Praesent et turpis interdum, maximus tellus sit amet, hendrerit leo. Suspendisse consectetur laoreet odio, mattis interdum ligula ultricies eget. Sed non euismod magna.</p>', 'https://www.youtube.com/watch?v=Vm8Y4Skm-zY', 'En Stock', '002300052018', 230, 250, '25%', 0, '2018-05-23', 'item1.jpg', 'item1-hover.jpg', 1, 0, 1),
(2, 1, 1, 1, 'aenean-feugiat-pharetra-eros', 'Aenean feugiat pharetra eros', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum pretium risus pulvinar sagittis. Donec non consectetur diam, id blandit nisl. Aliquam convallis augue vitae nunc tincidunt vestibulum. Fusce at sollicitudin eros. Integer erat justo, volutpat vitae malesuada a, pellentesque et nibh. Quisque porttitor nisi molestie, accumsan mi quis, egestas felis.&nbsp;<br></p>', '', '<p>Proin nec facilisis tellus, ac bibendum nisl. Vestibulum in suscipit magna. Sed eu interdum risus. Quisque enim felis, tempus posuere mi a, pharetra molestie lectus. Vestibulum ut dolor luctus, lobortis elit sed, ultricies elit. Nunc at erat non orci ornare fermentum nec finibus magna. Mauris efficitur vulputate mauris vitae semper. Etiam commodo nunc in eros ullamcorper sagittis. Donec vel malesuada dui. </p><p>Aenean euismod mi commodo ipsum malesuada, at ullamcorper sapien laoreet. Nunc ac neque justo. Vestibulum mattis, ex eget viverra pharetra, felis neque vehicula risus, eget bibendum leo diam non odio. Aliquam varius enim nec laoreet vulputate. Praesent consectetur dapibus justo eu suscipit. Vivamus ut consectetur metus.</p>', '', 'En Stock', '002200052018', 110, 180.5, '', 0, '2018-05-22', 'item2.jpg', '', 2, 1, 1),
(3, 1, 1, 3, 'duis-scelerisque-nisl-sed', 'Duis scelerisque nisl sed', '<p>Phasellus augue arcu, placerat ac porta quis, facilisis ut justo. Fusce pharetra finibus arcu nec tempor. Duis libero ex, aliquam a sodales et, consectetur eget enim. Nulla eu lacus urna. Mauris erat mauris, finibus ac urna euismod, dapibus bibendum nulla. Nullam sed sem vitae felis rhoncus consequat ultricies at arcu. Aliquam tempor, nisi eget pharetra pellentesque, lacus ex lacinia leo, dapibus semper quam enim eget lacus. Donec consequat nunc eu interdum rhoncus. Maecenas in ornare ante. Morbi risus libero, rutrum et tellus nec, dapibus dapibus sem.</p>', '<p>Nunc auctor porttitor fermentum. Proin lectus enim, molestie tincidunt massa quis, tempor posuere sapien. Nulla risus neque, ornare condimentum eros quis, posuere lobortis ipsum.&nbsp;</p><ul><li>Maecenas scelerisque magna enim, vitae ullamcorper augue commodo at. </li><li>Nam vulputate mi lectus, sed gravida nibh imperdiet non. </li><li>Nunc porttitor velit nec placerat finibus. </li><li>Nulla sed risus mattis, euismod magna non, rhoncus mi. </li><li>Proin bibendum ante vitae luctus tempor.</li></ul><div><br></div>', '<p>Phasellus sit amet eros ac ante posuere feugiat sed vel ante. Quisque sollicitudin iaculis lorem. Fusce ultrices mi lorem, ut tempus dui venenatis tempor. Praesent euismod eleifend leo. Nam dapibus maximus metus id sollicitudin. Integer in facilisis sapien, iaculis ullamcorper justo.</p><p>Mauris vestibulum, tellus nec mattis vestibulum, tellus augue faucibus lorem, sit amet vehicula eros urna nec eros. Proin luctus egestas orci. Donec aliquam suscipit ullamcorper. Pellentesque lobortis tristique dignissim.</p>', 'https://www.youtube.com/watch?v=vwyRpp0tTCQ', 'En Stock', '002100052018', 0, 140.99, '', 1, '2018-05-23', 'item3.jpg', 'item3-hover.jpg', 1, 2, 1),
(4, 1, 2, 2, 'lorem-ipsum-dolor-sit-amet', 'Lorem ipsum dolor sit amet', '<p>Consectetur adipiscing elit. Vestibulum eu magna lacinia, scelerisque augue vel, dictum turpis. Maecenas sollicitudin feugiat dui, in tristique tellus consectetur non. Cras vehicula justo sit amet ipsum fermentum tempor. Phasellus eu sodales est, efficitur maximus lorem. Vestibulum vehicula, elit sed accumsan pulvinar, lacus lectus consequat dolor, sed dignissim nisl libero nec felis. Cras sit amet ipsum felis. Nunc et elit iaculis, imperdiet augue at, rutrum tortor. Mauris id elit eu nunc tincidunt vulputate et nec lectus. Maecenas posuere suscipit purus, eu tincidunt dolor pharetra at. Proin facilisis, sem egestas dictum dictum, diam eros suscipit lorem, et aliquam odio elit a sapien. Sed ex nisi, euismod quis nibh a, mollis pulvinar est. Proin velit orci, commodo suscipit justo id, tincidunt venenatis mi. Vestibulum quis pulvinar mauris. Pellentesque sed nisi tristique, pellentesque enim sit amet, sagittis odio. Maecenas vel imperdiet felis. Mauris dapibus a est et porta.</p><p>Vivamus non auctor sapien, eu feugiat arcu. Etiam vitae arcu vitae lacus vulputate sodales ut sit amet justo. Sed a magna bibendum, porttitor est in, bibendum ligula. Donec nec velit leo. Sed a mi sed enim varius viverra fringilla vel libero. Morbi quis dolor dui. In hac habitasse platea dictumst. Curabitur pharetra fermentum odio, quis condimentum ligula efficitur ac. Nulla nunc turpis, accumsan nec mollis vel, malesuada sit amet risus. Curabitur pharetra finibus sapien, eget luctus nulla tempor bibendum.<br></p>', '<p>Duis non pulvinar orci. Curabitur risus libero, aliquet at nibh vel, congue condimentum libero. Mauris lectus leo, varius et mattis a, fermentum quis erat. </p><ul><li>Nunc scelerisque, ante eu volutpat auctor.</li><li>Tortor nunc euismod orci, sed commodo ante ante in urna. </li><li>Cras ac aliquam elit. Fusce vel ipsum vel leo venenatis facilisis. </li><li>Sed lobortis vel ligula in volutpat. </li><li>Nullam diam tellus, auctor eget ullamcorper vel, maximus non quam.</li><li>Suspendisse pellentesque nulla eu arcu iaculis ultricies. </li><li>Morbi faucibus auctor neque, eu rhoncus tellus eleifend nec.<br></li></ul>', '<p>Ut in odio sed nisi vehicula dapibus nec ac orci. Donec sollicitudin elit justo, eu tristique mi dapibus in. Vivamus vel interdum metus, at malesuada massa. Praesent lacinia arcu odio, sit amet faucibus urna accumsan non. Integer pretium vestibulum orci in ornare. Sed consequat elementum felis, nec facilisis mauris rutrum eleifend. Curabitur id faucibus purus. Sed id sem quis metus feugiat porta eget vitae ex. Sed tempus tincidunt nibh, tristique convallis nibh mattis a. Vestibulum imperdiet facilisis hendrerit. Nam rutrum, eros sed ultricies consectetur, purus turpis consectetur lorem, non blandit elit nulla in turpis. Duis aliquam auctor dolor, sit amet ultrices elit volutpat et.</p><p>Cras bibendum ex odio. Vestibulum sed felis ac enim egestas efficitur. Nulla placerat gravida magna malesuada fringilla. Nulla dignissim mi convallis nunc ullamcorper, nec tempus massa elementum. Etiam pharetra suscipit ullamcorper. In fermentum ullamcorper auctor. Ut sem sem, pretium et lorem at, rutrum bibendum nunc. Sed facilisis justo ac urna tempor eleifend. Pellentesque porttitor, ipsum sed mattis tincidunt, sapien sem lacinia enim, id pharetra odio elit sit amet quam.</p>', 'https://www.youtube.com/watch?v=0jCM65G0xEk', 'En Stock', '002400052018', 110, 140, '25%', 1, '2018-05-24', 'item4.jpg', 'item4.jpg', 2, 3, 1),
(5, 1, 1, 3, 'cras-et-pellentesque-velit', 'Cras et pellentesque velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at risus augue. Vestibulum facilisis quam quis nibh rhoncus elementum. Sed in semper turpis. Integer vitae consectetur nisi, vel convallis odio. Ut vulputate finibus turpis id ornare. Nam sodales tortor nec lectus laoreet malesuada. Fusce ut erat elementum quam ultricies malesuada. Duis eu ipsum nulla. Donec consequat, arcu sed lacinia dictum, sapien turpis bibendum elit, a lacinia purus lectus sit amet purus. Vestibulum elementum porttitor leo, a condimentum turpis blandit vitae. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin condimentum eget felis vel fermentum. Morbi a quam tellus.</p><p>Aenean tempor augue nulla, luctus ornare enim pellentesque quis. Aenean rutrum, nulla a bibendum rhoncus, lorem risus ullamcorper velit, sed sagittis arcu justo sit amet nisl. Aenean pretium purus quis finibus suscipit.&nbsp;</p>', '<ul><li>Etiam justo nunc, feugiat quis tristique dictum, posuere eget neque. </li><li>Mauris in venenatis enim. </li><li>Suspendisse laoreet nibh et mauris fermentum commodo. </li><li>Curabitur hendrerit varius eros, eget volutpat lorem tincidunt vitae. </li><li>Mauris consequat eros arcu, quis congue justo fermentum vitae. </li><li>Nunc purus turpis, tempus at lectus vel, mollis eleifend nunc. </li><li>Vivamus lectus nunc, imperdiet vitae libero sit amet, rutrum vestibulum lacus.</li></ul><div><br></div>', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut facilisis consequat ante, id molestie dolor porttitor ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tortor nulla, venenatis at orci a, eleifend pretium felis. Aliquam erat volutpat. Mauris sit amet felis auctor, tempus felis quis, egestas sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget lorem ex.</p><p>Morbi fermentum malesuada ligula, sed iaculis ligula vestibulum vitae. In varius elit ipsum, porttitor varius mi euismod eu. Ut vitae odio auctor, maximus metus in, aliquam nunc. Nunc dui neque, lobortis ut augue in, efficitur ullamcorper velit.&nbsp;</p>', '', 'En Stock', '00260052018', 200, 230, '10%', 1, '2018-05-25', 'item5.jpg', 'item5-hover.jpg', 2, 4, 1),
(6, 1, 2, 5, 'vivamus-lectus-nunc-imperdiet-vitae', 'Vivamus lectus nunc, imperdiet vitae', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut facilisis consequat ante, id molestie dolor porttitor ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tortor nulla, venenatis at orci a, eleifend pretium felis. Aliquam erat volutpat. Mauris sit amet felis auctor, tempus felis quis, egestas sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget lorem ex.</p>', '', '', '', 'En Stock', '00270052018', 220, 240, '10%', 1, '2018-05-25', 'item1-hover.jpg', 'item1.jpg', 3, 5, 1),
(7, 1, 2, 2, 'praesent-porttitor-neque-purus', 'Praesent porttitor neque purus.', '<p>Morbi molestie nunc sed mi iaculis, eget scelerisque ex dignissim. Praesent nulla sapien, sodales nec tincidunt in, tempor nec massa. Praesent in commodo tortor. blandit, est nec dapibus egestas, nibh lacus dictum velit, eu pretium velit augue id libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam pretium est euismod nunc elementum, in ultricies lorem gravida. Aenean vitae placerat mi, eget lobortis nisi.<br></p>', '', '', '', 'En Stock', '00280052018', 300, 320.5, '', 1, '2018-05-25', 'item2-hover.jpg', 'item2.jpg', 2, 7, 1),
(8, 1, 2, 2, 'etiam-lacus-neque-nunc', 'Etiam lacus neque nunc', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nibh a nulla tempus venenatis. Integer tincidunt velit at nisl placerat, nec vehicula felis mollis. Elementum nec fringilla ac, pretium non odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi metus dui, scelerisque consequat sapien in, dictum semper eros. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent orci nisi, dapibus eu nibh non, dictum elementum mi. Nulla facilisi. Fusce vitae sodales lacus.</p>', '', '<p>Donec euismod lorem diam, ac auctor orci ultricies eu. Integer pretium, elit vitae facilisis mollis, orci massa mattis augue, vel condimentum velit libero quis augue. Donec magna risus, vulputate vestibulum nulla eget, consequat eleifend ipsum. Suspendisse ut odio condimentum, tempus tortor in, feugiat justo.</p><p>Sed tempor odio dolor, nec fermentum mi efficitur ac. Integer arcu velit, porta id pulvinar ac, pulvinar vitae lacus. Pellentesque eget posuere mi. Mauris justo tortor, suscipit ut turpis quis, accumsan interdum justo. In hac habitasse platea dictumst.</p><p>Donec eu pretium odio. Suspendisse euismod, nibh at vehicula laoreet, arcu magna dapibus, vel consequat sem dolor vel magna. Proin fringilla augue magna, vitae mattis arcu pellentesque eget.</p>', '', 'En Stock', '00290052018', 330, 400.5, '8%', 1, '2018-05-25', 'item4-hover.jpg', 'item4.jpg', 3, 9, 1),
(9, 1, 2, 5, 'etiam-lacus-neque-nunc-dd', 'Etiam lacus neque nunc dd', '<p>Etiam justo nunc, feugiat quis tristique dictum, posuere eget neque. Mauris in venenatis enim. Suspendisse laoreet nibh et mauris fermentum commodo. Curabitur hendrerit varius eros, eget volutpat lorem tincidunt vitae. Mauris consequat eros arcu, quis congue justo fermentum vitae. Nunc purus turpis, tempus at lectus vel, mollis eleifend nunc.<br></p>', '', '', '', 'Agotado', '00300052018', 0, 320.5, '10%', 1, '2018-05-30', 'item5-hover.jpg', '', 2, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_categorias`
--

CREATE TABLE `productos_categorias` (
  `cod_categoria` int(11) NOT NULL,
  `cod_principal` int(11) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `productos_categorias`
--

INSERT INTO `productos_categorias` (`cod_categoria`, `cod_principal`, `slug`, `categoria`, `orden`, `estado`) VALUES
(1, 1, 'categoria-1', 'CategorÃ­a 1', 0, 1),
(2, 1, 'categoria-2', 'CategorÃ­a 2', 1, 1),
(3, 1, 'categoria-3', 'CategorÃ­a 3', 2, 1),
(4, 1, 'categoria-4', 'CategorÃ­a 4', 3, 1),
(5, 1, 'categoria-5', 'CategorÃ­a 5', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_galeria`
--

CREATE TABLE `productos_galeria` (
  `cod_galeria_producto` int(11) NOT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_galeria`
--

INSERT INTO `productos_galeria` (`cod_galeria_producto`, `cod_producto`, `imagen`) VALUES
(1, 1, 'item1.jpg'),
(2, 1, 'item2.jpg'),
(3, 1, 'item3-hover.jpg'),
(4, 1, 'item4-hover.jpg'),
(5, 1, 'item5-hover.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_principal`
--

CREATE TABLE `productos_principal` (
  `cod_principal` int(11) NOT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `principal` varchar(250) DEFAULT NULL,
  `menu` int(1) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_principal`
--

INSERT INTO `productos_principal` (`cod_principal`, `slug`, `principal`, `menu`, `orden`, `estado`) VALUES
(1, 'categorias', 'CategorÃ­as', 1, 0, 1),
(2, 'ocasiones', 'Ocasiones', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `cod_servicio` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `descripcion` longtext,
  `dirige` longtext,
  `beneficios` longtext,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`cod_servicio`, `titulo`, `imagen`, `descripcion`, `dirige`, `beneficios`, `orden`, `estado`) VALUES
(1, 'Coach de vida', 'servicio_1.jpg', '<div>Te acompaÃ±o en tu proceso de mejora personal y profesional, te observo desde una perspectiva integral, hasta que descubras Â¿QuiÃ©n verdaderamente eres?, Â¿CÃ³mo funcionas?, Â¿CuÃ¡les son los recursos que realmente tienes? Para ponerlos en AcciÃ³n y tÃº mismo puedas crear y generar una mejor realidad de tu vida y la mejor versiÃ³n NeurolinguÃ­stica, Inteligencia emocional, mental training, comunicaciÃ³n interna y lenguaje, desarrollo humano, entre otras.</div>\r\n', '<ul><li>Directores</li><li>LÃ­deres</li><li>Gerentes Generales</li><li>Mandos Medios</li><li>Gerentes de RRHH</li></ul>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960.<br></p>', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social`
--

CREATE TABLE `social` (
  `cod_social` int(11) NOT NULL,
  `type` varchar(250) DEFAULT NULL,
  `links` varchar(9999) DEFAULT NULL,
  `valor` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `social`
--

INSERT INTO `social` (`cod_social`, `type`, `links`, `valor`, `orden`, `estado`) VALUES
(1, 'fa-facebook', '#', 'icon-facebook', 0, 1),
(2, 'fa-twitter', '#', 'icon-twitter', 1, 1),
(3, 'fa-youtube', '#', 'icon-email', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `visitante` int(1) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nombres`, `email`, `imagen`, `usuario`, `clave`, `visitante`, `estado`) VALUES
(0, 'Webmaster', 'webmasterupdate@gmail.com', 'webmaster.jpg', 'webmaster', '$2y$10$NaAna7ymXRDnp7LH1J27P.ykfmAXdFiK2Imi/KfZVXFQ8IE8Z3MPC', 0, 1),
(2, 'Luiz', 'luizupdate@gmail.com', '', 'Luiz', '$2y$10$86YPGNdoBvixA/1cf7Mcf.VH602.lD5TMOM/crELSEhl0jbk/wkLK', 0, 1),
(5, 'raul', 'raulmartiarena89@gmail.com', 'logo_update.png', 'raul', '$2y$10$muGNp8GcdL650DmKwURPi.JB74ao.P774krIWaI0yo3xalFNAvH3q', 0, 1),
(6, 'Jorge Torres Barreto', 'jorgeupdateglobal@gmail.com', '', 'jtorres', '$2y$10$1.GQzSKag9tc4Yw37mhu3u.gaRnUgoSpOyGKlyf0iYOOeJAQPORKK', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`cod_banner`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`cod_contact`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`cod_contenido`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`cod_contacto`);

--
-- Indices de la tabla `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`cod_meta`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`cod_noticia`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  ADD PRIMARY KEY (`cod_categoria`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  ADD PRIMARY KEY (`cod_categoria`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `productos_galeria`
--
ALTER TABLE `productos_galeria`
  ADD PRIMARY KEY (`cod_galeria_producto`);

--
-- Indices de la tabla `productos_principal`
--
ALTER TABLE `productos_principal`
  ADD PRIMARY KEY (`cod_principal`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`cod_servicio`);

--
-- Indices de la tabla `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`cod_social`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `cod_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `cod_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `cod_contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `cod_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metatags`
--
ALTER TABLE `metatags`
  MODIFY `cod_meta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `cod_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos_galeria`
--
ALTER TABLE `productos_galeria`
  MODIFY `cod_galeria_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos_principal`
--
ALTER TABLE `productos_principal`
  MODIFY `cod_principal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `cod_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `social`
--
ALTER TABLE `social`
  MODIFY `cod_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
