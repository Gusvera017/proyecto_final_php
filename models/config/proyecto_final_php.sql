-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2022 a las 14:03:46
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19579595_proyecto_final_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `apellido`, `email`, `mensaje`) VALUES
(2, 'asdasd', 'asdasdasd', 'asdasd@asdasd.com', 'ashkdbavsdjvasjd ajs dahvsdasd'),
(3, 'prueba include', 'asd', 'asd@asd.com', 'Prueba con include de conexion'),
(4, 'p', 'p', 'p@p.com', 'probando conexión a DB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(17, 'Batman: Arkham Knight', 'En el explosivo final de la serie Arkham, Batman se enfrentará a la amenaza definitiva contra la ciudad que juró proteger. El Espantapájaros vuelve al frente de un impresionante elenco de supervillanos, entre los que destacan El Pingüino, Dos-Caras o Harley Quinn, que intentarán por todos los medios acabar para siempre con el Caballero Oscuro. Batman: Arkham Knight incluirá, por primera vez en la franquicia, un Batmóvil diseñado por Rocksteady que podrá ser conducido por los jugadores. La suma de este legendario vehículo, junto con la gran jugabilidad de la serie Batman Arkham, ofrecerá a los jugadores la experiencia de juego definitiva de Batman mientras recorren a toda velocidad las calles y planean sobre el skyline de Gotham. ', '1666801759_batman-arkham-knight.jpg'),
(18, 'BloodBorne', 'Bloodborne, el nuevo título de acción RPG de los creadores de la saga Souls, propone una aventura en la que te enfrentarás a tus miedos mientras buscas respuestas en la antigua ciudad de Yharman, maldita por una extraña enfermedad que se ha expandido a través de la población y la fauna de la región. Peligro, muerte y locura acechan en cada esquina de este oscuro y terrorífico mundo, y tú deberás descubrir sus tenebrosos secretos si quieres tener alguna posibilidad de sobrevivir.', '1666801767_bloodborne.jpg'),
(19, 'Resident Evil: Revelations 2', 'El comienzo de la historia de Resident Evil Revelations 2 contempla el regreso de Claire Redfield, uno de los personajes favoritos de los fans, en una dramática vuelta a los horrores que la torturaron en el pasado. Superviviente de los incidentes de Raccoon City revelados en las anteriores entregas de Resident Evil, Claire trabaja ahora para la organización contra el bioterrorismo Terra Save. Moira Burton, una nueva recluta e hija de Barry Burton, una leyenda de la saga Resident Evil, asiste a su fiesta de bienvenida a Terra Save cuando una fuerza armada desconocida asalta la oficina.Claire y Moira pierden el conocimiento y se despiertan más tarde para encontrarse en unas oscuras y abandonadas instalaciones de internamiento. Trabajando juntas, deberán averiguar quién las llevó hasta allí y con qué siniestro fin. Con aterradores enemigos “Afligidos” acechando en cada esquina, los jugadores necesitarán utilizar su munición y suministros de armamentos inteligentemente, en un clásico estilo survival horror. ¿Podrán Claire y Moira salir indemnes y descubrir qué les ha llevado a esta isla remota? ¿Con quién más se encontrarán? Una historia llena de giros argumentales que tendrá en vilo a los jugadores mientras se preguntan que les depara el siguiente paso en todo momento.', '1666801774_resident-evil-revelations-2.jpg'),
(20, 'Fallout 4', 'Bethesda Game Studios, el galardonado creador de Fallout 3 y The Elder Scrolls V: Skyrim, te da la bienvenida al mundo de Fallout 4, su juego más ambicioso hasta la fecha y la siguiente generación de mundos abiertos. Eres el único superviviente del Refugio 111 en un mundo destruido por la guerra nuclear. Cada segundo es una lucha por la supervivencia, y en tus manos estarán todas las decisiones. Solo tú puedes reconstruir el yermo y decidir su futuro. Bienvenido a casa.', '1666877472_fallout-4.jpg'),
(21, 'Need for Speed', 'Cae la noche en Ventura Bay y los motores comienzan a rugir... Pon a punto tu coche: personalízalo, desde las llantas hasta los tipos de motor, pasando por una infinidad de mejoras estéticas que harán de tu vehículo todo un espectáculo. La velocidad está presente y no te librarás de ser perseguido por las autoridades cuando las revoluciones de tu motor lleguen hasta límites insospechados. Vive no sólo una, sino cinco historias únicas, en las que el triunfo en las carreras callejeras lo son todo. Préparate para tomar el volante y pisar el acelerador a fondo, esto es Need For Speed.Descubre el mundo abierto nocturno de la auténtica cultura de coches urbana con cinco nuevas formas de jugar en esta experiencia definitiva de Need for Speed. Escribe la historia de tu triunfo a través de cinco historias únicas entrelazadas entre sí, mejorando tu reputación y convirtiéndote en el icono definitivo de las carreras urbanas.Need for Speed cumple con lo que han pedido los fans y lo que representa la franquicia: prsonalización variada y auténtica, un mundo abierto lleno de cultura de coches real y una narrativa que impulsa tu juego.Ventura Bay es tu patio de recreo urbano, desde empinadas colinas con vistas a la ciudad hasta barrios urbanos con curvas cerradas, la ciudad se llena de vida, mientras que otros duermen. El hogar de cinco iconos de la conducción del mundo real, cinco héroes de la cultura automovilística que te inspirarán mientras escribes la historia de tu propio triunfo.', '1666878069_need-for-speed.jpg'),
(22, 'Uncharted: The Nathan Drake Collection', 'Historia sin igual - Juega como Nathan Drake a través de una trilogía de aventuras emocionantes. La experiencia de las relaciones de Drake con los más cercanos a él, mientras lucha por equilibrar la aventura y la familia.\r\nNuevos Trofeos - trofeos a estrenar creadOs exclusivamente para el debut de Uncharted en el sistema PS4 .\r\nModo FOTO - Congelar el juego en cualquier momento y tomar el control de la cámara para capturar sus momentos más memorables de la trilogía para compartir con amigos directamente desde TU PS4 .\r\nUncharted 4 : Beta Multijugador A Thief\'s End - recibirán acceso exclusivo a Uncharted 4 Beta multiplayer, mientras que la versión beta está disponible.\r\nDisfrute de una de las series de juegos más venerados de todos los tiempos y donde seguirás el peligroso viaje de Nathan Drake por todo el mundo , desde sus humildes comienzos a extraordinarios descubrimientos . La historia de Nathan Drake comenzó en un barco de pesca frente a la costa de Panamá, y continúa para definir el concepto de aventura. Uncharted: El tesoro de Drake, Uncharted 2: El reino de los ladrones y Uncharted 3: La traición de Drake, tres de los juegos más aclamados de la historia, juntos por primera vez y reconstruidos para PS4. Esto es Uncharted: The Nathan Drake Collection*.\r\nComo Nathan Drake, seguirás las huellas de las leyendas en un viaje por todo el planeta. Busca El Dorado, la legendaria ciudad de oro, con las notas del mismísimo Sir Francis Drake. Rememora el viaje maldito de Marco Polo por el Himalaya. Descubre la Atlántida de las Arenas que buscaba Lawrence de Arabia.Por el camino, disfrutaras de la narración incomparable del equipo de Naughty Dog, a la vez que Drake se juega su vida y amistades en una carrera para descubrir tesoros inimaginables antes que sus despiadados enemigos.', '1666878245_uncharted.jpg'),
(23, 'inFAMOUS: Second Son', 'Inmerso en una sociedad que teme los poderes sobrehumanos, Delsin Rowe se ve obligado a escapar del Department of Unified Protection (Departamento de Protección Unificada) Las decisiones que tome afectarán a su futuro... y al de todos los que le rodean.inFAMOUS Second Son, exclusivo para PlayStation 4, es un juego de acción y aventura en el que los súper humanos, rodeados por una sociedad que les teme, son cazados y enjaulados sin piedad por el Departamento de Protección Unificada. Entra a un aislado Seattle como Delsin Rowe, quien recientemente ha descubierto sus poderes de súper humano y ahora puede luchar contra el opresivo DUP. Disfruta de tus poderes mientras eliges cómo llevarás tus habilidades increíbles al límite y verás las consecuencias de tus acciones que van afectando a la ciudad y a la gente a tu alrededor.', '1666878327_infamous-second-son.jpg'),
(24, 'Final Fantasy Type-0 HD', 'Final Fantasy TYPE-0 presenta un mundo envolvente con unos personajes inolvidables acompañado de una excelente jugabilidad y una historia realmente digna de Final Fantasy.El juego te trasladará al dinámico y fascinante mundo de Orience, un lugar amenazado por una cruenta guerra entre naciones.Súmate a la lucha como parte de la clase Cero, un grupo de estudiantes de una academia militar de élite cuya nación ha sido atacada por el Imperio vecino. En el desgarrador conflicto que sigue contarás con una serie de poderosas habilidades mágicas y de combate, que habrás de utilizar en un nuevo y emocionante sistema de batalla para derrotar al Imperio y descubrir los secretos que esconde esta brutal guerra. ', '1666878417_final-fantasy-type-0.jpg'),
(29, 'Tomb Raider - Definitive Edition', 'Esta nueva presentación es una producción de acción y aventuras que determina el carácter de su protagonista, donde una joven e inexperta Lara Croft se transforma en una curtida superviviente.Se presenta Lara Croft con detalles en alta definición sin precedentes:\r\n- Un nuevo modelo de Lara creado para sacar partido de la capacidad de las de consolas de nueva generación.\r\n- Tecnología TRESS FX que ofrece una simulación realista del pelo y el movimiento activo de cada mechón.\r\n- Las sombras y la iluminación han sido revisadas para mostrar en carne viva las cualidades físicas de Lara en una aventura plagada de sudor, barro, materiales ensangrentados y efectos.Un mundo en movimiento gracias a la nueva arquitectura de hardware:\r\n- El mundo cobra vida dinámicamente utilizando complejas simulaciones físicas de los árboles, el follaje, los tejidos, el tiempo atmosférico, la iluminación y los efectos.\r\n- Todas las texturas han sido creadas a resolución cuádruple para ofrecer la mayor calidad y detalle posibles.\r\n- Los personajes del juego, los enemigos y la destructibilidad han sido realzadas para ofrecer una mayor profundidad y realismo.\r\n- Se ha implementado la tecnología de representaciones faciales y de objetos Subsurface Scattering para capturar la simulación de iluminación con la mayor fidelidad posible y ofrecer una mayor credibilidad.\r\n- El juego fluye a 1080p ofreciendo una excepcional fidelidad visual y mostrando la belleza de Yamatai en todo su esplendor. ', '1666878493_tomb-raider.jpg'),
(30, 'Death Stranding', 'Comienza tu aventura para salvar a la civilización en un mundo en ruinas plagado de peligros sobrenaturales.Hideo Kojima, el legendario creador de videojuegos (como Metal Gear Solid) nos ofrece una novedosa aventura de acción en mundo abierto para PS4 que desafía a todos los géneros, protagonizada por Norman Reedus, Mads Mikkelsen, Léa Seydoux y Lindsay Wagner.En un futuro cercano, unas misteriosas explosiones han sacudido la Tierra, provocando una serie de eventos sobrenaturales conocidos como el Death Stranding. Unas criaturas insólitas invaden el paisaje y la extinción masiva es inminente. Sam Porter Bridges deberá atravesar el devastado páramo para salvar a la humanidad de una aniquilación inminente.', '1666878579_death-stranding.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
