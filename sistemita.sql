-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 02:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemita`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_region` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre`, `descripcion`, `imagen`, `id_region`, `fecha_registro`, `estado`) VALUES
(1, 'Lima', 'Lima es la capital de la RepÃºblica del PerÃº y de la provincia homÃ³nima.â€‹ Se sitÃºa en la costa central del paÃ­s, a orillas del ocÃ©ano PacÃ­fico, conformando una extensa y populosa Ã¡rea urbana conocida como Lima Metropolitana, flanqueada por el desierto costero y extendida sobre los valles de los rÃ­os ChillÃ³n, RÃ­mac y LurÃ­n. SegÃºn el censo peruano de 2007, Lima contaba con mÃ¡s de 7 600 000 habitantes; mientras que su aglomeraciÃ³n urbana contaba con mÃ¡s de 8 500 000 habitantes,â€‹ el 31,7% de la poblaciÃ³n peruana, cifras que la convierten en la ciudad mÃ¡s poblada del paÃ­s.\r\n\r\n Fue la capital del Virreinato del PerÃº y la mÃ¡s grande e importante ciudad de AmÃ©rica del Sur durante la AmÃ©rica imperial espaÃ±ola. DespuÃ©s de la Independencia pasÃ³ a ser la capital de la RepÃºblica.\r\n\r\nEn la actualidad estÃ¡ considerada como el centro polÃ­tico, cultural, financiero y comercial del paÃ­s. A nivel internacional, es la tercera Ã¡rea metropolitana mÃ¡s poblada de HispanoamÃ©rica, ademÃ¡s la ciudad ocupa el quinto lugar dentro de las ciudades mÃ¡s pobladas de AmÃ©rica Latina y es una de las treinta aglomeraciones urbanas mÃ¡s pobladas del mundo. Por su importancia geoestratÃ©gica, ha sido definida como una ciudad global de Â«clase betaÂ».', 'lima.jpg', 1, '2017-08-12 19:03:04', 1),
(2, 'Chiclayo', 'Chiclayo, fundada como Â«Santa MarÃ­a de los Valles de ChiclayoÂ», es una ciudad del noroeste peruano, capital de la provincia homÃ³nima y del departamento de Lambayeque. EstÃ¡ situada a 13 kilÃ³metros de la costa del PacÃ­fico y 770 kilÃ³metros de la capital del paÃ­s. Es la cuarta ciudad mÃ¡s poblada del paÃ­s, alcanzando oficialmente y segÃºn proyecciones del INEI del aÃ±o 2012, los 638 178 habitantes, que comprende 8 distritos urbanos: Chiclayo, La Victoria, Leonardo Ortiz, Pimentel, Pomalca, Monsefu, Eten y Reque. Chiclayo es la ciudad principal del Ãrea Metropolitana de Chiclayo, una de las metrÃ³polis mÃ¡s pobladas del paÃ­s.\r\n\r\nFue fundada en 1720 y elevada a la categorÃ­a de villa en 1827,â€‹ por decreto del presidente mariscal JosÃ© de La Mar; y en 1835, durante el gobierno de presidente, coronel Felipe Santiago Salaverry le fue conferido el tÃ­tulo de Â«Ciudad HeroicaÂ»; actualmente se le conoce como la â€œCapital de la amistadâ€ dado el carÃ¡cter servicial de su gente.\r\n\r\nActualmente, Chiclayo es una de las Ã¡reas urbanas mÃ¡s importantes del PerÃº. Es ahora la cuarta ciudad mÃ¡s grande, despuÃ©s de Lima, Arequipa y Trujillo. La ciudad tiene una poblaciÃ³n de 594 75911â€‹ y es una de las ciudades mÃ¡s contaminadas del paÃ­s.â€‹ La ciudad fue fundada cerca de un importante sitio arqueolÃ³gico prehistÃ³rico, las ruinas del norte de Wari, que constituyen los restos de una ciudad desde el 7 al 12 de siglo Imperio Wari.', 'chiclayo.jpg', 1, '2017-08-12 19:11:33', 1),
(3, 'Chimbote', 'Chimbote es una ciudad de la costa norcentral del PerÃº, capital de la Nueva Provincia de Santa, en el extremo noroeste del Departamento de Ãncash. Se ubica a orillas del ocÃ©ano PacÃ­fico en la bahÃ­a El Ferrol, en la desembocadura del rÃ­o Lacramarca.\r\n\r\nLa ciudad de Chimbote segÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica es la novena ciudad mÃ¡s poblada del PerÃº y segÃºn el censo del 2014 alberga una poblaciÃ³n de 371,012.â€‹ Es la ciudad mÃ¡s poblada de la RegiÃ³n Ãncash.\r\n\r\nChimbote es conocido por la actividad portuaria que en ella se lleva a cabo, asÃ­ como por ser sede importante de la industria pesquera y siderÃºrgica del paÃ­s, ademÃ¡s de eje comercial de esta parte del PerÃº. A mediados del siglo XX, el puerto de Chimbote llegÃ³ a ser el puerto pesquero con mayor producciÃ³n en el mundo.', 'chimbote.jpg', 1, '2017-08-12 19:15:54', 1),
(4, 'Huacho', 'Huacho es una ciudad en la costa central del PerÃº, capital de la provincia de Huaura y sede regional del departamento de Lima, ubicada en una bahÃ­a formada por el ocÃ©ano PacÃ­fico a 150 km al norte de la ciudad de Lima, prÃ³xima a la desembocadura del rÃ­o Huaura.\r\n\r\nLa ciudad de Huacho, segÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica, es la decimonovena ciudad mÃ¡s poblada del PerÃº y albergaba en el aÃ±o 2007 una poblaciÃ³n de 133.642 habitantes.\r\n\r\nEstÃ¡ prÃ³xima a la Reserva Nacional Lomas de Lachay. Su Ã¡rea urbana ocupa no sÃ³lo el distrito homÃ³nimo, sino tambiÃ©n los distritos de Santa MarÃ­a al este, Huaura, Hualmay y Carquin al norte.', 'huacho.jpg', 1, '2017-08-12 19:48:23', 1),
(5, 'Paracas', 'Paracas es una capital del distrito portuario de la costa sur del PerÃº, capital del homÃ³nimo distrito, en la provincia de Pisco, dentro del departamento de Ica.\r\n\r\nSe encuentra en la costa este de la bahÃ­a de Paracas, al norte de la penÃ­nsula del mismo nombre. Se ubica a 22 km al sur de Pisco, a 75 km de Ica y a 261 km de Lima. Su clima tiene una temperatura promedio anual de 22 Â°C y es mayormente soleado. Es un territorio muy ventoso cuyas fortÃ­simas corrientes de aire portadoras de arena, conocidos como paracas, tienen una velocidad media de 25 km/h y con mÃ¡ximas de 60 km/h.\r\n\r\nLas principales atracciones de este balneario son su clima agradable, su playa, sus residencias al borde del mar, el club nÃ¡utico, el hotel y sus restaurantes de tÃ­pica gastronomÃ­a local y marina a base de pescados y mariscos.\r\n\r\nDesde su puerto de pesca, se inician las excursiones para visitar las islas Ballestas e islas Chincha. Asimismo, dentro de sus lÃ­mites se encuentra la Reserva nacional de Paracas.\r\n\r\nParacas se ha convertido, en una de las zonas turÃ­sticas mÃ¡s atractivas de toda la costa peruana. Esto se debe a su gran diversidad de fauna y flora conservadas en la Reserva Nacional de Paracas, convirtiendo al Ã¡rea en la Ãºnica protegida de todo el paÃ­s. Se pueden observar animales como delfines, pingÃ¼inos de Humboldt, lobos marinos o parihuanas, entre otros, gracias a las distintas excursiones que se ofrecen al turismo.', 'paracas.jpg', 1, '2017-08-12 21:59:30', 1),
(6, 'Trujillo', 'Trujillo es la capital del departamento peruano de La Libertad, la ciudad mÃ¡s poblada del norte del PerÃº y la tercera ciudad mÃ¡s poblada del paÃ­s; tiene una poblaciÃ³n estimada de 1.037.110 habitantes;â€‹ se encuentra ubicada en la costa norte peruana, a una altitud media de 34 msnm en la margen derecha del rÃ­o Moche a orillas del OcÃ©ano PacÃ­fico, en el Valle de Moche o Santa Catalina y se extiende sobre una superficie aproximada de 50 Km2.\r\n\r\nLa ciudad es el nÃºcleo del Ã¡rea metropolitana conocida como Trujillo Metropolitano, que  cuenta con una poblaciÃ³n estimada de 945 498 habitantes;â€‹ es por ello, una de las mayores Ã¡reas metropolitanas del paÃ­s, siendo considerada como la metrÃ³poli del norte.\r\n\r\nEl Centro HistÃ³rico de la ciudad, conocido como Â«Cercado de TrujilloÂ» se extiende sobre un Ã¡rea de 133.5 ha. constituye el nÃºcleo urbano mÃ¡s importante y caracterÃ­stico de la urbe, en el se encuentra gran parte de su patrimonio cultural, arquitectÃ³nico y urbanÃ­stico; asimismo concentra las principales actividades econÃ³micas, polÃ­tico-administrativas y socioâ€“culturales de la ciudad.\r\n\r\nDentro de su Ã¡rea metropolitana destaca la existencia de dos zonas arqueolÃ³gicas; Chan Chan, ciudad de adobe declarada Patrimonio de la Humanidad por la UNESCO en 1986,â€‹ y las Huacas del Sol y de la Luna, siendo la Huaca del Sol la mÃ¡s grande pirÃ¡mide precolombina de adobe en el paÃ­s.\r\n\r\nEntre las manifestaciones culturales mÃ¡s representativas de la ciudad se cuentan el Festival Internacional de la Primavera, la Feria Internacional del Libroâ€‹ y el Festival Nacional de la Marinera.', 'trujillo.jpg', 1, '2017-08-12 22:31:28', 1),
(7, 'Arequipa', 'Arequipa es la capital y mayor ciudad del Departamento de Arequipa, es la segunda ciudad mÃ¡s importante del PerÃº asÃ­ como la sede del Tribunal Constitucional y la Â«Capital JurÃ­dica del PerÃºÂ». TambiÃ©n conocida como la Â«Ciudad BlancaÂ», es la segunda ciudad mÃ¡s poblada del PerÃº sÃ³lo despuÃ©s de Lima, alcanzando los 969.284 habitantes segÃºn proyecciones del INEI.\r\n\r\nArequipa constituye un importante centro industrial y comercial del PerÃº, y es considerada como la segunda ciudad industrial del paÃ­s.â€‹ Dentro de su actividad industrial destacan los productos manufacturados y la producciÃ³n textil de lana de camÃ©lidos con calidad de exportaciÃ³n. La ciudad mantiene estrechos vÃ­nculos comerciales con Chile, Bolivia y Brasil y con las ciudades conectadas por medio del Ferrocarril, asÃ­ como con el puerto de Matarani.\r\n\r\nSu casco histÃ³rico se extiende sobre una superficie de 332 hectÃ¡reasâ€‹ habiendo sido declarado por la Unesco como Â«Patrimonio Cultural de la HumanidadÂ». El patrimonio histÃ³rico y monumental que alberga y sus diversos espacios escÃ©nicos y culturales la convierten en una ciudad receptora de turismo nacional e internacional, en su casco histÃ³rico destaca la arquitectura religiosa virreinal y republicana producto de mezcla de caracterÃ­sticas espaÃ±olas y autÃ³ctonas,â€‹ que constituyeron a una propia escuela estilÃ­stica denominada Â«Escuela ArequipeÃ±aÂ» cuya influencia llegÃ³ hasta PotosÃ­ (Bolivia).', 'arequipa.jpg', 1, '2017-08-12 23:48:10', 1),
(9, 'Tacna', 'Tacna es una ciudad del sur del PerÃº, capital del departamento de Tacna. EstÃ¡ ubicada a orillas del rÃ­o Caplina, en un reducido valle en medio del desierto costero peruano. Es la dÃ©cima ciudad mÃ¡s poblada del PerÃº y albergaba en el aÃ±o 2015 una poblaciÃ³n de 320.240 habitantes. \r\n\r\nLa ciudad de Tacna fue fundada oficialmente el 25 de junio de 1855 durante la Ã©poca republicana peruana, pero las bases de la ciudad datan desde la colonia, cuando se constituyÃ³ en reducciÃ³n indÃ­gena. La ciudad de Tacna fue declarada Ciudad Heroica por el Congreso de la RepÃºblica del PerÃº el 21 de mayo de 1821 por sus servicios distinguidos a la causa de la Independencia. Fue tambiÃ©n la capital de Iure de la RepÃºblica Sud-Peruana (1836-1839), y la sede del gobierno de la ConfederaciÃ³n PerÃº-Boliviana.\r\n\r\nDespuÃ©s de la Guerra del PacÃ­fico fue administrada por Chile, debido al Tratado de AncÃ³n, creÃ¡ndose asÃ­ la Provincia chilena de Tacna, Tarata fue devuelta el 1 de septiembre de 1925 y el resto en el 28 de agosto de 1929 debido al Tratado de Lima.\r\n\r\nDesde la dÃ©cada del 40 del siglo XX, la ciudad ha experimentado un fuerte crecimiento demogrÃ¡fico acompaÃ±ado de un constante ingreso migratorio, principalmente altiplÃ¡nico. Este crecimiento demogrÃ¡fico originÃ³ la creaciÃ³n de 3 distritos urbanos (Alto de la Alianza, Ciudad Nueva, Coronel Gregorio AlbarracÃ­n Lanchipa) y la absorciÃ³n de parte del distrito de Pocollay al Ã¡rea urbana tacneÃ±a.', 'tacna.jpg', 2, '2017-08-13 22:59:43', 1),
(11, 'Iquitos', 'Iquitosâ€‹ conocida tambiÃ©n como Ciudad de Iquitos, es la ciudad capital de la Provincia de Maynas y el Departamento de Loreto. Es la metrÃ³poli mÃ¡s grande de la AmazonÃ­a Peruana, y es la septima ciudad mÃ¡s poblada del PerÃº; ademÃ¡s, es conocida como la Â«capital de la Amazonia PeruanaÂ». EstÃ¡ establecida en la Gran Planicie y rodeada por los rÃ­os Amazonas, Nanay e Itaya y el Lago Moronacocha. En conjunto, se constituye en Iquitos Metropolitano, una conurbaciÃ³n de 471,993 habitantes conformado por cuatro distritos: Iquitos, Punchana, BelÃ©n y San Juan Bautista.\r\n\r\nSe ha convertido en una importante ciudad cosmopolita de fuertes raÃ­ces amazÃ³nicas con un notable complejo histÃ³rico, una caracterÃ­stica gastronomÃ­a, paisajes amazÃ³nicos, un acento cantor, vida nocturna y un creciente movimiento cultural.\r\n\r\nLa ciudad sÃ³lo tiene conexiÃ³n aÃ©rea y fluvial al resto del paÃ­s y con la sola excepciÃ³n de la ruta departamental LO-103 (denominada por el sur como VÃ­a Interprovincial Iquitosâ€”Nauta), una larga carretera que conecta Iquitos con Nauta por el sur y otros pueblos por el norte hasta llegar a San Antonio del Estrecho. Siguiendo el curso del Amazonas, pueden llegar buques marinos de 3000 o 9000 toneladasâ€‹ y 5,5 m (18 pies) de calado, procedentes del ocÃ©ano AtlÃ¡ntico, por lo que se considera que es la ciudad mÃ¡s poblada del mundo que no cuenta con acceso terrestre. Por su ubicaciÃ³n geoestratÃ©gica, es un puerto interno importante que posibilita la conexiÃ³n entre el ocÃ©ano PacÃ­fico y el ocÃ©ano AtlÃ¡ntico.', 'iquitos.jpg', 3, '2017-08-14 01:52:00', 1),
(12, 'Pucallpa', 'Pucallpa es una ciudad de la parte centro-oriental del PerÃº, capital del departamento de Ucayali y de la provincia de Coronel Portillo. Se sitÃºa en el llano amazÃ³nico, a la margen izquierda del rÃ­o Ucayali.\r\n\r\nEsta ciudad es categorizada como la Ãºnica urbe en Ucayali,â€‹ siendo el mayor centro poblado del departamento. SegÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica es la dÃ©cima ciudad mÃ¡s poblada del PerÃº y albergaba en el aÃ±o 2013 una poblaciÃ³n de 211 611 habitantes.\r\n\r\nLa mayorÃ­a del transporte a Pucallpa se realiza a travÃ©s del rÃ­o Ucayali, ubicado en el centro-este del PerÃº y el cual contiene el segundo puerto fluvial mÃ¡s importante de la Amazonia (detrÃ¡s de Iquitos).La carretera Federico Basadre es el centro principal del transporte terrestre y conecta el noroeste de la ciudad con el Aeropuerto Internacional CapitÃ¡n FAP David Abensur Rengifo, donde se realizan vuelos hacia Brasil.\r\n\r\nLa economÃ­a de Pucallpa se basa en el comercio, la industria maderera y el turismo. Entre los mayores atractivos de la ciudad se incluye el turismo ecolÃ³gico, como el Parque Natural, o turismo cultural, en el caso del chamanismo. Sus principales actividades econÃ³micas son la pesca, la agricultura, la ganaderÃ­a y la extracciÃ³n maderera. Asimismo, una pequeÃ±a refinerÃ­a de petrÃ³leo cerca del rÃ­o Pachiteaâ€‹ y otra de gas en el distrito de CurimanÃ¡ suministran combustible a la ciudad y al centro del paÃ­s.', 'pucallpa.jpg', 3, '2017-08-14 01:56:24', 1),
(13, 'Cajamarca', 'Cajamarca es la ciudad mÃ¡s importante de la sierra norte del PerÃº, capital de la provincia y del departamento de Cajamarca. EstÃ¡ situada a 2750 msnm en la margen este de la cadena occidental de la Cordillera de los Andes, en el valle interandino que forman los rÃ­os MashcÃ³n y Chonta. Es una ciudad en constante crecimiento poblacional, con la posibilidad de crear en el futuro un Ã¡rea metropolitana conformada por las ciudades de Cajamarca y BaÃ±os del Inca y la anexiÃ³n de algunos pueblos y villas prÃ³ximas al casco urbano.\r\n\r\nLa zona de Cajamarca ya habÃ­a sido habitada en el pasado durante el imperio inca, donde ya se consideraba como un centro poblado importante. En 1532, se produjo en este lugar la captura del inca Atahualpa durante la conquista del PerÃº.En la Ã©poca de la colonia mantuvo su categorÃ­a de villa hasta el 19 de diciembre de 1802, poco antes de la independencia cuando empezÃ³ a ser considerada ciudad y recibiÃ³ su escudo de armas.\r\n\r\nEs conocida por su celebraciÃ³n del carnaval, asÃ­ como su importante producciÃ³n de lÃ¡cteos. TambiÃ©n es conocida como la Flor del Cumbe, por su cercanÃ­a al cerro y al complejo arqueolÃ³gico de Cumbemayo, la ciudad estÃ¡ ubicada en el extremo oeste del valle homÃ³nimo.\r\n\r\nSegÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica, Cajamarca es la decimotercera ciudad mÃ¡s poblada del PerÃº y albergaba en el 2014 una poblaciÃ³n de 228 775 habitantes.', 'cajamarca.png', 2, '2017-08-14 02:12:57', 1),
(15, 'Huancavelica', 'Huancavelica es una ciudad de la parte central del PerÃº, capital del Departamento de Huancavelica, situada en la vertiente oriental de la Cordillera de los Andes, a orillas del rÃ­o Ichu, afluente del Mantaro.\r\n\r\nEn las Ã©pocas preincas, Huancavelica fue conocida como la regiÃ³n de los Angaraes y Chancas. La etimologÃ­a de la palabra Huancavelica posee diversas versiones, pero la mÃ¡s citada proviene de las voz quechua Wanka Willka, supuestamente Piedra Sagrada,â€‹ aunque esta interpretaciÃ³n no concuerde con la gramÃ¡tica quechua. \r\n\r\nAunque aÃºn se extraen minerales de alrededores de esta ciudad, Huancavelica se ubica en el centro de una de las zonas de mayor Ã­ndice de pobreza del paÃ­s.â€‹ Cuenta con una poblaciÃ³n estimada de 47 866 habitantes para el aÃ±o 2015.\r\n\r\nEsta ciudad se caracteriza por la cultura que dejaron incas y espaÃ±oles en su travesÃ­a por este lugar. AsÃ­ por ejemplo se celebran las fiestas costumbristas religiosas y tradicionales.â€‹ TambiÃ©n destaca en gastronomÃ­a con platos autÃ³ctonos como son el mondongo y la pachamanca.', 'huancavelica.jpg', 2, '2017-08-14 02:43:47', 1),
(16, 'Puno', 'Puno es una ciudad del sureste del PerÃº, capital del departamento de Puno y provincia de Puno.\r\n\r\nSu Festividad Virgen de la Candelaria fue declarada Patrimonio Cultural Inmaterial de la Humanidad por la Unesco el 27 de noviembre de 2014.\r\n\r\nLa ciudad de Puno segÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica es la vigÃ©sima ciudad mÃ¡s poblada del PerÃº y albergaba en el aÃ±o 2007 una poblaciÃ³n de 125.663 habitantes.â€‹\r\n\r\nSu extensiÃ³n abarca desde el centro poblado de Uros Chulluni al noreste, la zona urbana del distrito de Paucarcolla al norte, la urbanizaciÃ³n Ciudad de la Humanidad Totorani al noroeste (carretera a Arequipa) y se extiende hasta el centro poblado de Ichu al sur y la comunidad Mi PerÃº al suroeste (carretera a Moquegua).\r\n\r\nEl espacio fÃ­sico estÃ¡ comprendido desde la orilla oeste del lago Titicaca, en la bahÃ­a interior de Puno (antes Paucarcolla), sobre una superficie ligeramente ondulada (la parte cÃ©ntrica), rodeada por cerros . La parte alta de la ciudad tiene una superficie semiplana (Comunidad Mi PerÃº, Yanamayo). Oscilando entre los 3810 a 4050 msnm (entre las orillas del lago y las partes mÃ¡s altas). Puno es una de las ciudades mÃ¡s altas del PerÃº y la quinta del mundo. Actualmente tiene una extensiÃ³n de 1566,64 ha, la cual representa el 0,24 % del territorio de la provincia de Puno.', 'puno.jpg', 2, '2017-08-14 03:06:31', 1),
(17, 'Pisco', 'Pisco es una ciudad del centro-sur del PerÃº, capital de la Provincia de Pisco (Departamento de Ica), situada 230 km al sudeste de Lima a orillas del mar Peruano, al sur de la desembocadura del rÃ­o Pisco. Tiene una poblacion estimada de 104 656 habitantes para el aÃ±o 2015.\r\n\r\nLa ciudad comprende tanto el pueblo, conocido como Pisco pueblo como el puerto y el malecÃ³n, conocidos como \"Pisco playa\". Actualmente cuenta con actividad industrial desmotadora de algodÃ³n y algunas otras industrias relacionadas con la harina y aceite de pescado, textiles, chocolates, guano de las islas, etc.\r\n\r\nSu puerto, agricultura e industria vitivinÃ­cola y del pisco destacan desde los primeros aÃ±os del perÃ­odo colonial. Esta ciudad peruana aparece en los primeros mapas conocidos del siglo XVI.', 'pisco.jpg', 1, '2017-08-14 03:10:49', 1),
(18, 'Cuzco', 'Cuzco o Cusco es una ciudad del sureste del PerÃº ubicada en la vertiente oriental de la cordillera de los Andes, en la cuenca del rÃ­o Huatanay, afluente del Vilcanota. Es la capital del departamento del Cuzco y, ademÃ¡s, segÃºn estÃ¡ declarado en la constituciÃ³n peruana, es la Â«capital histÃ³ricaÂ» del paÃ­s.\r\n\r\nLa ciudad de Cuzco, segÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica, es la octava ciudad mÃ¡s poblada de PerÃº, y albergaba, en 2014, una poblaciÃ³n de 420 137 habitantes.\r\n\r\nAntiguamente fue la capital del Imperio inca, una de las ciudades mÃ¡s importantes del Virreinato del PerÃº, en cuya Ã©poca, y en manos de los espaÃ±oles, se engalanÃ³ de iglesias, palacios y plazas barrocas y neoclÃ¡sicas, que es lo que hoy le convierten en el principal lugar turÃ­stico de PerÃº. Declarada Patrimonio de la Humanidad en 1983 por la Unesco, suele ser denominada, debido a la gran cantidad de monumentos que posee, la \"Roma de AmÃ©rica\".', 'cuzco.jpg', 2, '2017-08-14 03:15:13', 1),
(19, 'Huancayo', 'Huancayo es la ciudad mÃ¡s importante de la sierra central del PerÃº y estÃ¡ situada al sur del Valle del Mantaro. Es el distrito capital del departamento de JunÃ­n y de la provincia de Huancayo. La zona fue habitada por los huancas, quienes luego formarÃ­an parte del Reino Huanca.4â€‹ Fueron anexados al Imperio incaico, convirtiÃ©ndose en un lugar con una convivencia de convulsiÃ³n y represiÃ³n por parte de los incas. El 1 de junio de 1572, Huancayo fue fundada como \"Pueblo de Indios\" por don JerÃ³nimo de Silva y avocada a la SantÃ­sima Trinidad, tomando el nombre de \"SantÃ­sima Trinidad de Huancayo\". Es famosa por su apelativo de Ciudad Incontrastable, por su feria artesanal que se establece todos los domingos en la cÃ©ntrica avenida HuancavÃ©lica, asÃ­ como por sus originales paisajes, su historia, y su artesanÃ­a.\r\n\r\nLa ciudad de Huancayo, segÃºn el Instituto Nacional de EstadÃ­stica e InformÃ¡tica es la sexta ciudad y el Ã¡rea metropolitana mÃ¡s poblada del PerÃº, albergaba en el aÃ±o 2014 una poblaciÃ³n de 501 384 habitantes.', 'huancayo.jpg', 2, '2017-08-14 03:22:31', 1),
(20, 'Piura', 'Piura, fundada como San Miguel de Piura es una ciudad de la zona occidental norte del PerÃº, capital de la RegiÃ³n Piura. EstÃ¡ ubicada en el centro oeste de la regiÃ³n, en el valle del rÃ­o Piura, al norte del desierto de Sechura, a 981 km al norte de Lima y prÃ³xima a la frontera con el Ecuador. Es la quinta mÃ¡s poblada del paÃ­s, alcanzando oficialmente, los 430.319 habitantes.\r\n\r\nFue fundada por Francisco Pizarro el 15 de agosto de 1532, recibiendo su escudo de armas en 1537;â€‹ en la actualidad la ciudad cumple el rol de principal centro comercial, administrativo y de servicios del departamento de Piura.', 'piura.jpg', 1, '2017-08-14 03:25:10', 1),
(21, 'Ayacucho', 'Ayacucho (fundada como San Juan de la Frontera de Huamanga y conocida tambiÃ©n como Huamanga) es una ciudad de PerÃº, capital de la provincia de Huamanga y del departamento de Ayacucho. Se encuentra situada en la vertiente oriental de la cordillera de los Andes a una altitud de 2746 msnmâ€‹ y se caracteriza por su clima agradable, templado y seco, con brillo solar todo el aÃ±o. Es uno de los conjuntos arquitectÃ³nicos y artÃ­sticos mÃ¡s notables del PerÃº. Se le conoce como la Â«Ciudad de las IglesiasÂ», por sus numerosos templos coloniales, y como Â«Ciudad SeÃ±orialÂ» por su arquitectura, tradiciÃ³n y arte.\r\n\r\nLa ciudad tiene fama tanto nacional como internacional gracias a sus piezas de artesanÃ­a, motivo por el cual fue declarada como Â«Capital del Arte Popular y de la ArtesanÃ­a del PerÃºÂ». Destacan los tallados en alabastro (material conocido en la zona como piedra de Huamanga), la alfarerÃ­a -en especial los toros e iglesias de Quinua-, la filigrana del barrio de Santa Ana y principalmente los cotizados retablos ayacuchanos.â€‹ En honor a esta ciudad peruana y a la batalla de independencia ocurrida en su suelo, los paÃ­ses andinos de Argentina, Bolivia, Ecuador y Venezuela, refundaron cada una, una ciudad y la rebautizaron Ayacucho.\r\n\r\nEs una ciudad de muy alto fervor catÃ³lico.â€‹ Posee mÃ¡s de treinta templos virreinales de estilo renacentista, barroco y mestizo, que guardan en su interior verdaderas obras de arte como pinturas, imÃ¡genes y bellos retablos tallados en madera y baÃ±ados en pan de oro. AdemÃ¡s, se puede apreciar majestuosas casonas coloniales, restos arqueolÃ³gicos y manifestaciones artÃ­sticas que revelan un pasado histÃ³rico y una tradiciÃ³n aÃºn vigente y atractiva.\r\n\r\nIgualmente destaca por sus mÃºsica y sus festividades, como los carnavales y sobre todo la Semana Santa, ambas declaradas Patrimonio Cultural de la NaciÃ³n. Esta Ãºltima es considerada como la segunda mÃ¡s importante del mundo, en lo que a celebraciÃ³n de la Semana Santa se refiere.', 'ayacucho.jpg', 2, '2017-08-14 03:28:26', 1),
(22, 'Tarapoto', 'Santa Cruz de los Motilones de Tarapoto, mejor conocida simplemente como Tarapoto es una ciudad de la selva norte del PerÃº, ubicada a una altitud de 250 msnm a orillas del rÃ­o Shilcayo, tributario del Mayo.\r\n\r\nEs uno de los principales centros turÃ­sticos y comerciales de la AmazonÃ­a peruana. Actualmente cuenta con una poblaciÃ³n de 149 875â€‹ habitantes, siendo la ciudad mÃ¡s poblada del departamento de San MartÃ­n, la vigÃ©sima del PerÃº y la tercera ciudad amazÃ³nica mÃ¡s grande y poblada despuÃ©s de Pucallpa e Iquitos.\r\n\r\nLa capital estÃ¡ ubicada en el distrito de Tarapoto y forma parte de la conurbaciÃ³n de los distritos de La Banda de Shilcayo, Morales, Cacatachi, Distrito de Juan Guerra. Asimismo, es conocida como la Ciudad de las Palmeras.', 'tarapoto.jpg', 3, '2017-08-14 03:30:38', 1),
(23, 'Callao', 'El Callao es una ciudad portuaria situada en la Provincia Constitucional del Callaoâ€‹ la cual se ubica en el centro-oeste del PerÃº y a su vez en la costa central del litoral peruano y en la zona central occidental de AmÃ©rica del Sur. Estando a orillas del ocÃ©ano PacÃ­fico se desarrolla al oeste de la provincia de Lima y a 15 kilÃ³metros del Centro HistÃ³rico de Lima, ciudad con la cual se encuentra conurbada.â€‹\r\n\r\nLa mayor parte de su territorio se extiende en una amplia bahÃ­a protegida por las islas San Lorenzo, El FrontÃ³n, Cavinzas y el islote Redondo, al sur de la desembocadura del rÃ­o RÃ­mac, pero tambiÃ©n alcanza la parte mÃ¡s norteÃ±a de la bahÃ­a de Lima. Ambas bahÃ­as estÃ¡n separadas por una penÃ­nsula conocida como La Punta. Su extensiÃ³n es de 148,57 kmÂ², incluidos 17,63 kmÂ² insulares. Se encuentra a 5 msnm.\r\n\r\nDesde la Ã©poca colonial, el puerto del Callao ha sido el mayor puerto marÃ­timo, el mÃ¡s importante del PerÃº y uno de los mÃ¡s importantes de AmÃ©rica. Hoy en dÃ­a posee en su circunscripciÃ³n el principal puerto del paÃ­s y el Aeropuerto Internacional Jorge ChÃ¡vez, por lo que se constituye en la principal puerta de entrada al PerÃº. Estos a su vez son el puerto y aeropuerto naturales de la ciudad de Lima.\r\n\r\nPor poblaciÃ³n, El Callao vendrÃ­a a ser la tercera urbe del paÃ­s albergando a mÃ¡s de 800 000 habitantes.\r\n\r\nEl pueblo chalacoâ€‹ ha sido siempre protagonista de muchos acontecimientos histÃ³ricos nacionales. Por ejemplo, es en esta ciudad, entre otras, donde el PerÃº se jugÃ³ la independencia o donde tuvo que defender su soberanÃ­a nacional, por citar los mÃ¡s destacados. Precisamente, es en estos parajes en donde a El Callao se le concede el tÃ­tulo de Â«Provincia ConstitucionalÂ», tÃ­tulo que sin embargo no reviste ninguna diferencia con las demÃ¡s provincias peruana (excepto el no pertenecer a ningÃºn departamento del PerÃº). \r\n\r\n', 'callao.jpg', 1, '2017-08-14 03:39:07', 1),
(24, 'Abancay', 'Abancay  es una ciudad del sureste del PerÃº, capital de la provincia del mismo nombre y del Departamento de ApurÃ­mac, el nombre proviene de la transliteraciÃ³n al castellano de la palabra quechua amÃ¡nkay que significa azucena.\r\n\r\nLa ciudad se encuentra situada a 2.377 msnm en la vertiente oriental andinas, al norte del valle del rÃ­o Pachachaca, a las faldas del nevado Ampay. La ciudad abarca los distritos de Abancay y Tamburco. Asimismo es la segunda ciudad mÃ¡s poblada del departamento con 58 741 habitantes.\r\n\r\nLa ciudad fue fundada el 3 de noviembre 1574. Fue parte del departamento del Cusco hasta la creaciÃ³n del Departamento de ApurÃ­mac, convirtiÃ©ndose en la capital del departamento el 28 de abril de 1873.\r\n\r\nAbancay es un importante centro econÃ³mico, polÃ­tico y cultural de la regiÃ³n ApurÃ­mac. La economÃ­a destaca por actividades terciarias de servicios, la producciÃ³n de aguardientes y minera y cada vez menos de la actividad agrÃ­cola primaria. TambiÃ©n es sede de los gobiernos locales y regional asÃ­ como de varias universidades y institutos.', 'abancay.jpg', 2, '2017-08-14 03:49:20', 1),
(25, 'Andahuaylas', 'Andahuaylas es la ciudad capital del distrito y de la provincia homÃ³nimos, localizada en la zona noroccidental del departamento de ApurÃ­mac.\r\n\r\nSe encuentra ubicada a una altitud de 2,926 msnm en el valle del rÃ­o Chumbao. La zona metropolitana conformada por la conurbaciÃ³n de los distritos de San JerÃ³nimo, Andahuaylas y Talavera de la Reyna tiene una poblaciÃ³n aproximada, al aÃ±o 2015, de 63.654 habitantes. Es por lo tanto, la ciudad mÃ¡s poblada del departamento de ApurÃ­mac.\r\n\r\nEl territorio fue ocupado por los chankas y los incas hasta la ocupaciÃ³n espaÃ±ola. La ciudad fue fundada el 7 de noviembre de 1533.â€‹ El 21 de junio de 1825 se crea la provincia de Andahuaylas.â€‹ Fue parte del departamento de Ayacucho hasta la creaciÃ³n del Departamento de ApurÃ­mac el 28 de abril de 1873.\r\n\r\nAndahuaylas es un importante centro econÃ³mico, comercial y de conexiÃ³n del departamento de ApurÃ­mac. La economÃ­a destaca por el comercio agrÃ­cola y la creciente actividad minera.â€‹ TambiÃ©n es un importante centro de conexiÃ³n regional debido a la articulaciÃ³n vial con varias provincias de ApurÃ­mac y Ayacucho; y contar con un aeropuerto con conexiÃ³n a la capital del PerÃº.', 'andahuaylas.jpg', 2, '2017-08-14 03:53:23', 1),
(26, 'Pacasmayo', 'Pacasmayo es una ciudad y puerto de la costa norte de la RegiÃ³n La Libertad, PerÃº. Se encuentra a unos 100 km al norte de Trujillo, aproximadamente en el km 681 de la Panamericana Norte, a orillas del OcÃ©ano PacÃ­fico. La ciudad cuenta con una poblaciÃ³n estimada de 27 514 habitantes para el aÃ±o 2015.Tiene un malecÃ³n hermoso y pequeÃ±o, y se mantiene como una pequeÃ±a ciudad-balneario de cuidadÃ­simas casonas del siglo XIX, todavÃ­a habitadas por familias celosas de su identidad portuaria. Para el novelista Eduardo GonzÃ¡lez ViaÃ±a, â€œEl paraÃ­so estÃ¡ ubicado en el camino que va de la playa hacia el extremo sur de la bahÃ­a de Pacasmayo, exactamente a dos kilÃ³metros y medio, cerca del faro y del barco hundido de Sir Francis Drake. Por allÃ­ caminaba yo al lado de mi padreâ€¦â€\r\n\r\nLas actividades econÃ³micas se resumen a la Pesca artesanal de especies como: bonitos, sucos, tramboyos, pintadillas, mojarras, tollos, pejerreyes, etc, asÃ­ como de moluscos y crustaceos: pulpos, calamares, potas, conchitas, almejas, choros, cangrejos, etc. La presencia de la 2.Âª Cementera mÃ¡s grande del paÃ­s: CP Cementos Pacasmayo S.A. aportan al movimiento econÃ³mico de la poblaciÃ³n en general, no solo de la Provincia sino de gran parte del norte del PerÃº. La Agroindustria estÃ¡ tomando mucho auge en la ocupaciÃ³n de zonas Ã¡ridas y eriazas transformÃ¡ndolas gradualmente en terrenos ricos y productivos.', 'pacasmayo.jpg', 1, '2017-08-14 03:57:13', 1),
(28, 'Puerto Maldonado', 'Puerto Maldonado es una ciudad del sureste del PerÃº, capital del Departamento de Madre de Dios, situada a orillas de la confluencia del rÃ­o Madre de Dios y el rÃ­o Tambopata. Es uno de los principales nÃºcleos comerciales de la Amazonia. Lleva el tÃ­tulo oficial de Capital de la Biodiversidad del PerÃº en mÃ©rito a importantes registros de flora y fauna encontrados en los bosques del departamento. Desde el punto de vista jerÃ¡rquico de la Iglesia CatÃ³lica es sede del Vicariato ApostÃ³lico de Puerto Maldonado. Cuenta con una poblaciÃ³n de 74 494 habitantes.', 'puertomaldonado.jpg', 3, '2017-08-14 04:47:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musica`
--

CREATE TABLE `musica` (
  `id_music` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `discografica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musica`
--

INSERT INTO `musica` (`id_music`, `nombre`, `genero`, `discografica`) VALUES
(1, 'System Of A Down - Chop Suey.mp3', 'metal', 1),
(2, 'Sum 41 - Jessica Kill.mp3', 'alternativo', 1),
(3, 'Guns N\' Roses - Sweet Child O\' Mine.mp3', 'rock', 1),
(4, 'Fit For Rivals - Hallelujah.mp3', 'rock', 1),
(5, 'My Chemical Romance - Helena.mp3', 'alternativo', 1),
(6, 'Nirvana - Smells Like Teen Spirit.mp3', 'rock', 1),
(7, 'Rise against - Prayer Of The Refugee.mp3', 'metal', 1),
(8, 'SR-71 - Lucky.mp3', 'alternativo', 1),
(9, 'Blink 182 - The Rock Show.mp3', 'alternativo', 1),
(10, 'The Offspring - Want You Bad.mp3', 'rock', 1),
(11, 'The Rolling Stone - Paint it black.mp3', 'rock', 1),
(13, 'Billy Idol - Bailando conmigo mismo.mp3', 'alternativo', 2),
(14, 'Alphaville - Big in Japan.mp3', 'alternativo', 2),
(15, 'Bee Gees - Stayin\' Alive.mp3', 'rock', 2),
(16, 'Culture Club - Karma Chameleon.mp3', 'alternativo', 2),
(17, 'Jhon Travolta & Olivia Newton John - The Grease.mp3', 'rock', 2),
(18, 'Juice Newton - Reina de Corazones.mp3', 'alternativo', 2),
(19, 'The Vapors - Turning Japanese.mp3', 'metal', 2),
(20, 'The Metro - Berlin.mp3', 'rock', 2),
(21, 'Steve Wonder - Amante a tiempo compartido.mp3', 'metal', 2),
(22, 'Peter Schilling - Major Tom.mp3', 'alternativo', 2),
(23, 'Sultans of Swing - Dire Straits.mp3', 'alternativo', 2),
(24, 'El Tri - Triste cancion de amor.mp3', 'rock', 3),
(25, 'Enanitos verdes - Lamento Boliviano.mp3', 'alternativo', 3),
(26, 'Hombres G - Devuelveme a mi Chica.mp3', 'rock', 3),
(27, 'Los Prisioneros - Sexo.mp3', 'alternativo', 3),
(28, 'Los Violadores - Uno, dos, ultraviolento!.mp3', 'rock', 3),
(29, 'Los Rabanes - My Commanding Wife.mp3', 'alternativo', 3),
(30, 'Panda - Narcisista por excelencia.mp3', 'rock', 3),
(31, 'Soda Stereo - De musica ligera.mp3', 'alternativo', 3),
(32, 'Virus - Una luna de miel en la mano.mp3', 'alternativo', 3),
(33, 'Charly Garcia - No me dejan salir.mp3', 'rock', 3),
(34, 'Don Tetto - Fallido Intento.mp3', 'alternativo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rockband`
--

CREATE TABLE `rockband` (
  `idrock` char(10) NOT NULL,
  `rockband` varchar(25) NOT NULL,
  `country` varchar(20) NOT NULL,
  `category` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rockband`
--

INSERT INTO `rockband` (`idrock`, `rockband`, `country`, `category`) VALUES
('rb01', 'System Of A Down', 'The United States', 'HM'),
('rb02', 'DragonForce', 'The United Kingdom', 'PM'),
('rb03', 'Paramore', 'The United States', 'AR'),
('rb04', 'Soda Stereo', 'Argentina', 'SR'),
('rb05', 'Green Day', 'The United States', 'PUR');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nivel` char(25) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`, `nivel`, `correo`, `foto`, `fecha_registro`, `estado`) VALUES
(1, 'Jesus ', 'Figueroa', 'jvargas', 'jvargas2017', 'Administrador', 'jvargas@gmail.com', 'userimages/img025.jpg', '2017-07-09 02:09:11', 1),
(2, 'Rolando', 'Vargas Davila', 'rolov', 'rolo2017', 'Moderador', 'javier_24@hotmail.com', 'userimages/img026.jpg', '2017-07-29 18:33:14', 1),
(3, 'Anthony', 'Vargas Escobedo', 'tony98', '987654', 'Editor', 'aave_98@hotmail.com', '', '2017-07-29 18:40:32', 1),
(4, 'Fredi', 'Vargas Davila', 'fredi007', 'fredivargas123', 'Analista', 'fredi.vargas@gmail.com', '', '2017-07-29 19:15:34', 1),
(5, 'Marisol', 'Vargas Davila', 'mary012', '01234568', 'Anunciante', 'mary-sol@hotmail.com', '', '2017-07-29 19:51:01', 1),
(6, 'Margarita', 'Escobedo Gongora', 'marga', 'escobedo123', 'Moderador', 'escobedo-m@htomail.com', '', '2017-07-31 23:22:56', 1),
(7, 'Fernando', 'Moulet Guerra', 'nando', 'nando0000', 'Moderador', 'nando_587@hotmail.com', '', '2017-08-01 02:35:52', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_music`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indexes for table `rockband`
--
ALTER TABLE `rockband`
  ADD PRIMARY KEY (`idrock`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `musica`
--
ALTER TABLE `musica`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
