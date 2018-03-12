-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-02-2018 a las 21:02:34
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_udemy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `keyword` text NOT NULL,
  `metadescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`, `keyword`, `metadescription`) VALUES
(1, '5 ventajas que ofrecen las tiendas virtuales a las empresas', 'El comercio ya no es como lo conocamos. La actualidad nos demuestra que los consumidores estÃ¡n prefiriendo comprar a travÃ©s de las tiendas virtuales. Â¿QuÃ© sucede? Â¿Deben las empresas crear sus', '2016-11-19 20:24:10', '<p style="text-align: justify;">El comercio ya no es como lo conoc&iacute;amos. La actualidad nos demuestra que los consumidores est&aacute;n prefiriendo comprar a trav&eacute;s de las tiendas virtuales. &iquest;Qu&eacute; sucede? &iquest;Deben las empresas crear sus propias tiendas online? La respuesta es s&iacute;.</p>\r\n<p style="text-align: justify;">Esta situaci&oacute;n ha obligado a cambiar la forma de vender los productos y servicios por parte de todas las marcas. Tambi&eacute;n se han buscado estrategias de e-commerce para llegar a los consumidores.</p>\r\n<p style="text-align: justify;">Aquellas tiendas f&iacute;sicas ahora deben trasladarse a los sitios web de las empresas y adaptarse a las reglas de ese nuevo ambiente porque as&iacute; lo demandan los nuevos consumidores.</p>\r\n<p style="text-align: justify;">Entonces es cuando surge la pregunta: &iquest;cu&aacute;les son las ventajas que ofrecen las tiendas virtuales a las empresas? Pueden ser varias y a continuaci&oacute;n conocer&aacute;s una lista con algunas de estas.</p>\r\n<ol style="text-align: justify; list-style-type: decimal;">\r\n<li style="font-size: 16px;"><strong> Comprar online es muy c&oacute;modo </strong> <br /> Las personas son muy agradecidas cuando les facilitamos las cosas. El solo hecho de imaginar que con un par de clics conseguir&aacute;n el producto que desean, hace de la compra online&nbsp;&nbsp;&nbsp; la mejor opci&oacute;n tanto para consumidor y marca.</li>\r\n<li style="font-size: 16px;"><strong> La compra online hoy es una manera de brindar confianza </strong> <br />Antes las personas pensaban mucho antes de comprar online porque sent&iacute;an que se arriesgaban. Esto porque no ve&iacute;an el producto f&iacute;sico y ten&iacute;an que esperar para recibirlo. Pero las excelentes experiencias cambiaron la sensaci&oacute;n de los consumidores.</li>\r\n<li style="font-size: 16px;"><strong> Los clientes destacan los servicios online de las marcas </strong> <br />Uno de los grandes cambios implementados por las empresas tiene que ver con los tiempos en el proceso de compra a trav&eacute;s de las tiendas virtuales. Dependiendo del producto, el pedido que haga la persona puede llegar en una hora incluso.</li>\r\n<li style="font-size: 16px;"><strong>Es una forma efectiva de llegar a los nuevos consumidores </strong> <br />Estamos en el boom del e-commerce (o comercio electr&oacute;nico) y las personas atienden a caracter&iacute;sticas propias de este situaci&oacute;n como la compra multicanal (a trav&eacute;s de varias v&iacute;as) y omnicanal (de manera simult&aacute;nea). De esto se trata la compra online.</li>\r\n<li style="font-size: 16px;"><strong>Permiten a las personas escogerte como la mejor opci&oacute;n </strong> <br />La informaci&oacute;n que aparece en las tiendas online sobre cada producto es la oportunidad que tienen los consumidores de comparar caracter&iacute;sticas y precios para luego tomar la opci&oacute;n que m&aacute;s le conviene. <br /> As&iacute; es como se han convertido en obligaciones para cada empresa crear estrategias de e-commerce, ofrecer las ventajas de las tiendas virtuales e implementar la compra online para figurar y destacarse ante su competencia.</li>\r\n</ol>\r\n<p style="text-align: justify;"><strong>Fuente</strong>: web <em>Puro Marketing</em></p>', 'ventaja-tiendas.jpg', 'Ventajas de tiendas virtuales, estrategias de e-commerce, tiendas online para empresas, compra online', 'Las ventajas de las tiendas virtuales hoy en dÃ­a estÃ¡n llevando al Ã©xito a muchas marcas y empresas.'),
(2, '10 beneficios de las redes sociales que harÃ¡n crecer tu marca', 'Te has preguntado cuÃ¡nto pueden beneficiar las redes sociales los intereses de tu empresa? La verdad es que son muchas las formas en que esto sucede y hoy te contamos las mÃ¡s comunes.', '2016-11-19 20:29:54', '<ol style="text-align: justify;" start="1">\r\n<li style="list-style-type: decimal;"><strong>Construyes marca personal: </strong>Destacarse en redes sociales es hoy d&iacute;a una necesidad para aquellas empresas que sue&ntilde;an con crecer. Muchos perfiles y fan page en redes sociales como Facebook se han dado a conocer y han logrado construir comunidad a su alrededor con todas las oportunidades que esto significa. Facebook sin duda es la plataforma para acercarse de manera efectiva a las personas. LinkedIn tambi&eacute;n es una buena opci&oacute;n para encontrar relaciones de tipo profesional.</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> El mejor canal para la difusi&oacute;n de contenidos </strong>Las redes sociales permiten que tu contenido tenga un alcance incre&iacute;ble. Facebook y las otras redes sociales representan la oportunidad de gustar y enamorar con nuestro trabajo. Aunque var&iacute;a, casi siempre tenemos la posibilidad de llegar a cientos y miles de personas.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Podr&aacute;s ganar respeto </strong>Gestionar correctamente nuestros perfiles de marca en redes sociales nos brindar&aacute; la oportunidad de ganar reputaci&oacute;n, respeto y de generar confianza en nuestro p&uacute;blico.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Fidelizas la comunidad </strong>Aparte&nbsp; de construir comunidad al rededor de la marca, tambi&eacute;n las redes sociales son el escenario para fidelizarla. Una buena estrategia en social media te ayudar&aacute; a conseguirlo.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Potencializas los beneficios de tu blog </strong>De por s&iacute; tu blog es una gran estrategia para atraer tr&aacute;fico, visitantes y clientes. Pero si lo vinculas a las redes sociales sus alcances ser&aacute;n mucho&nbsp; mayores. El tr&iacute;o c<em>ontenido de calidad - blog &ndash; redes sociales</em> genera resultados insospechados.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Estableces conexi&oacute;n con profesionales del sector </strong>Puedes conocer otros profesionales del mismo sector y aprender de ellos. Los contenidos compartidos se convierten en un insumo de incalculable valor.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Son ventanas atenci&oacute;n al cliente </strong>Para nadie es secreto que las personas usan plataformas como Facebook buscando respuestas, haciendo consultas, solicitando informaci&oacute;n, etc. Se convierten como una ventana de atenci&oacute;n al cliente, bastante efectiva y pr&aacute;ctica. Todo depende de tu gesti&oacute;n.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Llegas a acuerdos con profesionales </strong>Las alianzas, uniones y el trabajo en equipo con otros profesionales trae enormes beneficios a las empresas. Las redes sociales son un excelente punto de encuentro en ese sentido.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Aumentas el tr&aacute;fico hacia tu web </strong>Es uno de los mayores beneficios de las redes sociales. Cada post es la oportunidad de invitar a las personas a conocer tu p&aacute;gina. Dependiendo de la efectividad de tu solicitud, recibir&aacute;s nuevos visitantes.</p>\r\n</li>\r\n<li style="list-style-type: decimal;">\r\n<p><strong> Incrementas las ventas de tu negocio </strong>Por l&oacute;gica, si por redes sociales te visitan m&aacute;s, las posibilidades de vender ser&aacute;n mucho mayores. Recuerda que un visitante se convierte en oportunidad de venta y luego en cliente.</p>\r\n</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>Tambi&eacute;n ten en cuenta esta lista de situaciones que debes atender para mejorar tu experiencia en redes sociales como marca:&nbsp;</p>\r\n<ul>\r\n<li>Conoce las normas de cada plataforma donde crees una cuenta</li>\r\n</ul>\r\n<ul>\r\n<li>Adjudica las redes sociales a personas responsables y con formaci&oacute;n</li>\r\n</ul>\r\n<ul>\r\n<li>Es posible que lidies con personajes indeseables como el denominado trol</li>\r\n</ul>\r\n<ul>\r\n<li>El spam, los virus y los c&oacute;digos maliciosos nunca faltan</li>\r\n</ul>\r\n<ul>\r\n<li>Ten cuidado con los temas espinosos y controvertidos en tus publicaciones</li>\r\n</ul>\r\n<ul>\r\n<li>Deber&aacute;s manejar de la mejor manera los posibles disgustos</li>\r\n</ul>\r\n<p style="text-align: justify;">Recuerda que para que las beneficios y ventajas de las redes sociales sean efectivos, debes crear y compartir contenido de calidad acorde a los intereses de tu p&uacute;blico.</p>\r\n<p>&nbsp;</p>', '10-beneficios-redes-sociales.jpg', 'Beneficios de las redes sociales, social media marketing, redes sociales para empresas, estrategias de marketing digital', 'Descubre 10 beneficios de las redes sociales que harÃ¡n crecer tu marca como nunca lo pensaste.'),
(3, 'Memoria cachÃ© del navegador y cookies de seguimiento', 'La memoria cachÃ© de los navegadores web es un sitio donde se alojan copias de informaciÃ³n como imÃ¡genes y HTML de las pÃ¡ginas que han sido v', '2016-11-19 20:39:34', '<p style="text-align: justify;">La memoria cach&eacute; de los navegadores web es un sitio donde se alojan copias de informaci&oacute;n como im&aacute;genes y HTML de las p&aacute;ginas que han sido visitadas. El objetivo de esta acci&oacute;n es ayudar al ancho de banda para que emplee menos esfuerzo y tiempo cuando se quiera acceder una vez m&aacute;s a &eacute;stas p&aacute;ginas. Si una persona consigue llegar a la carpeta donde se aloja los datos cach&eacute; de su navegador, encontrar&aacute; peque&ntilde;as im&aacute;genes, &iacute;conos, previsualizaciones y otros elementos que reconocer&aacute; de inmediato, pues son los mismos que ve cuando navega por las p&aacute;ginas.<br /><br />Por otro lado, las cookies son peque&ntilde;as part&iacute;culas de informaci&oacute;n que las p&aacute;ginas web env&iacute;an a la memoria cach&eacute; de los navegadores web con el fin de agilizar la experiencia del usuario en ciertos casos. Por ejemplo, cuando un usuario introduce su nombre de usuario y contrase&ntilde;a en alguna red social o llena un formulario con ciertos datos, se crea una cookie para que no tenga que repetir estas acciones. Esa es la raz&oacute;n por la cual a veces s&oacute;lo tecleamos la primera letra de nuestro nombre en una casilla y &eacute;ste aparece completo.<br /><br />Las cookies tambi&eacute;n pretenden conseguir informaci&oacute;n sobre los h&aacute;bitos de navegaci&oacute;n del usuario por parte de agencias de publicidad y de las mismas p&aacute;ginas. Esto ha causado problemas de privacidad y es una de las razones por la que las cookies tienen tantos enemigos. Por eso, ahora encontramos en la mayor&iacute;a de p&aacute;ginas que visitamos un aviso que anuncia el uso de cookies por parte de &eacute;stas e indican que navegar por ellas es autorizar el uso de esas cookies para obtener informaci&oacute;n nuestra.<br /><br />Una de las situaciones que evidencian la presencia de cookies es encontrar avisos publicitarios "curiosamente" relacionados con los temas que consultamos diariamente desde nuestro PC. Es el caso de los avisos que aparecen en los perfiles de Facebook a los lados de la secci&oacute;n de noticias o los avisos que se presentan como "recomendados para ti" en otras web. Las cookies son el resultado de la combinaci&oacute;n computador-navegador-usuario. En conjunto, memoria cach&eacute; y cookies, trabajan para que la experiencia del navegante sea m&aacute;s &aacute;gil.<br /><br />Muchas personas optan por borrar la memoria cach&eacute; de sus navegadores con cookies incluidas. Este h&aacute;bito puede ser bueno o malo dependiendo de casos particulares. Por ejemplo, si usamos la web para navegar, para consultar y por diversi&oacute;n, lo mejor es no borrarla. La informaci&oacute;n de la cach&eacute; permite que los sitios que frecuentamos carguen m&aacute;s r&aacute;pido, si la borramos afectamos la velocidad.<br /><br />De otro lado, si administramos nuestro propio sitio web y queremos evidenciar las actualizaciones que implementamos, la memoria cach&eacute; puede causar conflictos. Si aplicamos un cambio y no lo vemos cuando actualizamos la p&aacute;gina, posiblemente el navegador est&aacute; mostr&aacute;ndote la copia que aloj&oacute; en su memoria previamente. En esta caso vale la pena ponerle atenci&oacute;n a la cach&eacute; y tener en cuenta sus efectos en nuestro trabajo.<br /><br />Fuente: http://www.hubspot.es/</p>', 'mejorar-velocidad-cache-navegador.gif', 'Memoria cachÃ©,Cookies de seguimiento, Navegadores web,HÃ¡bitos de navegaciÃ³n,PÃ¡ginas web', 'Aprende cÃ³mo la memoria cachÃ© del navegador web y las cookies de seguimiento reconocen y afectan tus hÃ¡bitos de navegaciÃ³n.'),
(4, 'Los niÃ±os ya dedican mÃ¡s tiempo a internet y a YouTube que a la televisiÃ³n', 'Los niÃ±os dedican ahora mucho mÃ¡s tiempo a estar online del que dedican a ver la televisiÃ³n y, en este nuevo orden de cosas, YouTube se ha convertido en su principal fuente de ent', '2016-11-20 19:25:03', '<p style="text-align: justify;">Uno de los cambios sociales m&aacute;s importantes de los &uacute;ltimos a&ntilde;os, al menos en lo que toca a acceso a medios y a contenido y demograf&iacute;a, est&aacute; en c&oacute;mo la tele ha perdido su condici&oacute;n de epicentro del entretenimiento y c&oacute;mo se ha convertido en un elemento m&aacute;s en los hogares, superado por una nueva incorporaci&oacute;n con un aspecto m&aacute;s <em>glorioso</em>. La televisi&oacute;n ha perdido fuelle por culpa de internet y ha visto c&oacute;mo sus audiencias pasaban no solo a compartir sus tiempos con la reci&eacute;n llegada sino tambi&eacute;n a directamente cambiarla.</p>\r\n<p style="text-align: justify;">Y uno de los p&uacute;blicos en los que este cambio se est&aacute; notando m&aacute;s en el de las capas m&aacute;s j&oacute;venes de la sociedad. Millennials y miembros de la Generaci&oacute;n Z son los espectadores que lideran el cambio y que se han convertido, por tanto, en uno de los grandes quebraderos de cabeza de las televisiones, que est&aacute;n viendo como los consumidores de estos grupos demogr&aacute;ficos dejan de ser progresivamente sus espectadores (para desesperaci&oacute;n de sus equipos encargados de vender publicidad). Pero lo cierto es que el cambio no es solo una cuesti&oacute;n millennial o de adolescentes, sino que es una fractura generacional mucho m&aacute;s amplia. Es un cambio que modifica por completo c&oacute;mo se accede a los contenidos y en el que hay un antes y un despu&eacute;s. A los adolescentes y a los millennials se les unieron, de hecho, los ni&ntilde;os en esta tendencia.</p>\r\n<p style="text-align: justify;">Los ni&ntilde;os eran, tradicionalmente, uno de los p&uacute;blicos clave de la tele y uno de los que pasaba m&aacute;s tiempo delante de la pantalla, tanto, de hecho, que los analistas y los expertos se preocupaban por si se estaba produciendo un exceso de consumo de contenidos televisivos y s&iacute;, por tanto, los ni&ntilde;os pasaban demasiado tiempo delante de la tele. Coger un peri&oacute;dico o revista de los 90 permitir&aacute; encontrar, de hecho, y muy f&aacute;cilmente un mont&oacute;n de art&iacute;culos analizando c&oacute;mo la televisi&oacute;n se hab&iacute;a convertido en una ni&ntilde;era y c&oacute;mo los ni&ntilde;os desperdiciaban su tiempo ante la \'caja tonta\' en vez de socializar y bajar al parque.</p>\r\n<p style="text-align: justify;">Los ni&ntilde;os, como han ido demostrando unos cuantos estudios elaborados en unos cuantos pa&iacute;ses, ya no pasan demasiado tiempo delante de la \'caja tonta\', porque ahora han encontrado algo mucho m&aacute;s atractivo. Los ni&ntilde;os dedican ahora mucho m&aacute;s tiempo a estar online del que dedican a ver la televisi&oacute;n y, en este nuevo orden de cosas, YouTube se ha convertido en su principal fuente de entretenimiento. La conclusi&oacute;n se podr&iacute;a establecer en muchos mercados y partiendo de la observaci&oacute;n de ni&ntilde;os de muchos lugares, pero, en este caso, llega desde Reino Unido, donde un <a href="http://www.warc.com/Content/News/Children39;s_internet_use_at_record_high.content?ID=4d54d3d7-57a7-423f-8f84-639c90db6077">estudio</a> de Ofcom (el equivalente a la antigua CMT en Espa&ntilde;a) ha analizado las pautas de comportamiento de este grupo de edad.</p>\r\n<p style="text-align: justify;"><strong>Las conclusiones es que los ni&ntilde;os ven cada vez m&aacute;s y m&aacute;s contenidos online. </strong></p>\r\n<p style="text-align: justify;">Los ni&ntilde;os entre 5 y 15 a&ntilde;os aumentaron la media de consumo de contenidos online durante el &uacute;ltimo a&ntilde;o en una hora y 18 minutos. Ahora dedican una media de 15 horas a la semana a internet. Las cifras son tambi&eacute;n muy altas cuando se baja la escala. Los ni&ntilde;os en edad preescolar tambi&eacute;n dedican mucho tiempo a la red: los ni&ntilde;os de entre 3 y 4 a&ntilde;os invierten una media de 8 horas y 18 minutos a conectarse a la red a la semana, una subida de 90 minutos frente a los datos del a&ntilde;o anterior.</p>\r\n<p style="text-align: justify;">Y, frente a estos datos, los tiempos de consumo de televisi&oacute;n han ca&iacute;do. Si hace un a&ntilde;o se llevaba 14 horas y 48 minutos a la semana, ahora est&aacute; en las 13 horas y 36 minutos de media.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<h2 style="text-align: justify;">Qu&eacute; ven online</h2>\r\n<p style="text-align: justify;">&iquest;Por qu&eacute; dedican tanto tiempo a internet? La clave est&aacute; en YouTube. Los ni&ntilde;os acceden de forma masiva a esta red de v&iacute;deos. De hecho, el 73% de los ni&ntilde;os de entre 5 y 15 a&ntilde;os son usuarios de YouTube. Incluso en la horquilla m&aacute;s baja el peso de YouTube es tambi&eacute;n muy elevado. Un 37% de los preescolares accede tambi&eacute;n a YouTube para ver series de dibujos y pel&iacute;culas cortas.</p>\r\n<p style="text-align: justify;">Teniendo en cuenta que cada vez m&aacute;s de estos ni&ntilde;os tienen su propio smartphone (era un 35%, ahora es un 41%) y que muchos de ellos acceden a trav&eacute;s de un tablet (un 34% de los preescolares de entre 3 y 4 a&ntilde;os tiene su propia tableta) las cifras ir&aacute;n en progresivo aumento en el futuro y tendr&aacute;n a&uacute;n un mayor impacto en las pautas de consumo de contenidos. La televisi&oacute;n no tiene, por tanto, un futuro muy sencillo.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><em>Fuente: puromarketing.com</em></p>', '20161118110402.jpg', 'marketing,internet,niÃ±os,YouTube,televisiÃ³n,marketing,publicidad,social media,marcas,anuncios,branding,marketing viral,email marketing,video marketing,neuromarketing,marketing online,marketing digital,marketing noticias,anunciantes,agencias,rtb,leads,marketing directo', 'Uno de los cambios sociales mÃ¡s importantes de los Ãºltimos aÃ±os, al menos en lo que toca a acceso a medios y a contenido y demografÃ­a, estÃ¡ en cÃ³mo la tele ha perdido su condiciÃ³n de');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;