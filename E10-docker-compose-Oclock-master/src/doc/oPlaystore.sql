--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'PS4'),
(2, 'PS5'),
(3, 'Nintendo DS'),
(4, 'Nintendo Switch'),
(5, 'PC');

-- --------------------------------------------------------

--
-- Structure de la table `editors`
--

CREATE TABLE `editors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `presentation` text NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `editors` (`id`, `name`, `presentation`) VALUES
(1, 'Bethesda', ''),
(2, 'Square Enix', ''),
(3, 'Bandai Namco', ''),
(4, 'Ubisoft', ''),
(5, 'Sony', '');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED DEFAULT NULL,
  `id_editor` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double(7,2) NOT NULL DEFAULT 0.00,
  `date_release` date DEFAULT NULL,
  `minimum_age` tinyint(3) UNSIGNED DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `id_category`, `id_editor`, `title`, `description`, `price`, `date_release`, `minimum_age`, `image`) VALUES
(1, 2, 1, 'GhostWire: Tokyo', 'Après sa série The Evil Within, Tango Gameworks a laissé l\'horreur de côté pour se concentrer sur un voyage dans un Japon surnaturel et très détaillé avec Ghostwire: Tokyo. Le talent de Tango pour les atmosphères viscérales et les scènes pleines d\'imagination plonge les joueurs dans la ville de Tokyo où des gens disparaissent mystérieusement et où des visiteurs d\'un autre monde rôdent dans les rues. Profondément empreint du folklore japonais et de ses légendes urbaines, Ghostwire: Tokyo est un jeu d\'action-aventure à la première personne où vous devrez utiliser un mélange de combat traditionnel et spectral pour purifier la ville et la sauver de monstres extraterrestres tout en perçant le mystère de la disparition de la population.', 64.99, '2022-03-25', 16, 'GhostWire-Tokyo-PS5.jpeg'),
(2, 4, 2, 'Life is Strange: True Colors', 'Une nouvelle ère audacieuse commence pour la franchise récompensée Life is Strange, avec un nouveau personnage jouable et un mystère palpitant à résoudre !\r\n\r\nLongtemps, Alex Chen a réprimé sa « malédiction » : sa capacité surnaturelle à ressentir, absorber, et manipuler les émotions fortes des autres, qu\'elle voit sous la forme d\'auras colorées.\r\n\r\nLorsque son frère meurt lors d\'un prétendu accident, Alex doit accepter son pouvoir imprévisible pour découvrir la vérité, et révéler les sombres secrets d\'une petite ville tranquille.', 59.99, '2022-02-22', 16, 'Life-is-Strange-True-Colors-Nintendo-Switch.jpeg'),
(3, 1, 2, 'Kingdom Hearts 3', 'Découvrez le pouvoir de l\'amitié et le combat qui oppose la lumière aux ténèbres avec Sora et ses amis alors qu\'ils se lancent dans une dangereuse aventure dans KINGDOM HEARTS III. Voyagez à travers divers mondes Disney et Pixar avec Sora, un jeune garçon qui a hérité sans le savoir un pouvoir extraordinaire. Avec l\'aide de Donald et Dingo, il doit empêcher les maléfiques Sans-Cœur d\'envahir l\'univers. Sora, Donald et Dingo font équipe avec des personnages Disney-Pixar cultes pour surmonter toutes les épreuves et tenir tête aux ténèbres qui menacent leurs mondes.', 9.99, '2019-01-28', 12, 'Kingdom-Hearts-3-PS4.jpeg'),
(4, 4, 2, 'Balan Wonderworld', 'Bienvenue à un inoubliable spectacle de son, lumière et action !\r\nBALAN WONDERWORLD est un jeu d\'action et de plateformes ayant pour cadre le théâtre de Balan. Sous la houlette de Balan, l\'énigmatique maître de cérémonie, Léo et Emma utilisent les capacités spéciales d\'une multitude de costumes somptueux alors qu\'ils s\'aventurent dans l\'étrange monde imaginaire de Wonderworld, où les souvenirs fugaces du monde réel se mêlent à ce qui leur tient vraiment à cœur.\r\nDouze contes différents attendent nos vedettes, chacun avec ses particularités. Aux protagonistes donc d\'explorer le moindre recoin de ces décors labyrinthiques regorgeant de secrets et de pièges, et d\'atteindre le cœur de ces histoires émouvantes.', 14.99, '2021-03-26', 12, 'Balan-Wonderworld-Nintendo-Switch.jpeg'),
(5, 2, 3, 'Elden Ring', 'L\'Ordre d\'or a été anéanti. Levez-vous, Sans-éclat, et puisse la grâce guider vos pas. Brandissez la puissance du Cercle d\'Elden. Devenez Seigneur de l\'Entre-terre.\r\nELDEN RING, développé par FromSoftware Inc. et produit par BANDAI NAMCO Entertainment Inc., est un Action-RPG de fantasy et le jeu le plus ambitieux jamais créé par FromSoftware, qui a pour théâtre un monde nimbé de mystère où le danger est omniprésent.', 65.99, '2022-02-25', 16, 'Elden-Ring-PS5.jpeg'),
(6, 4, 3, 'Hôtel Transylvanie : Monstrueuses Aventures', 'Explore le monde des contes de fées avec tes personnages préférés des films d’animation Hôtel Transylvanie dans le jeu « Hôtel Transylvanie : Monstrueuses aventures » ! Contrôle Drac et Mavis, et pars à l’aventure à travers des mondes aux atmosphères qui vont te donner la chair de poule, comme celui du Petit Chaperon rouge ou d\'Ali Baba et les quarante voleurs. Face à de féroces ennemis et des énigmes diaboliques, tu vas devoir te frayer un chemin et utiliser tes capacités spéciales pour sprinter, glisser et sauter dans ces mondes de contes spectr-aculaires. Tu pourras même rencontrer des personnages emblématiques d\'Hôtel Transylvanie tels que Johnny, Murray, Wayne et bien d\'autres. Ils te guideront pour accomplir des quêtes passionnantes et relever des défis corsés, sans parler de la chasse aux objets à collectionner. Ce n\'est pas pieu de le dire, Drac et Mavis comptent sur toi pour les sauver !', 39.99, '2022-03-11', 7, 'Hotel-Transylvanie-Monstrueuses-Aventures-Nintendo-Switch.jpeg'),
(7, 2, 4, 'Assassin’s Creed® Valhalla : L’Aube du Ragnarök', 'Dans Assassin\'s Creed® Valhalla : L’Aube du Ragnarök, l’extension la plus ambitieuse de l’histoire de la franchise, Eivor devra faire face à son destin sous les traits d’Odin, le dieu nordique de la guerre et de la sagesse, lors d’une quête ultime au travers d’un monde époustouflant. Poursuivez votre saga viking légendaire et sauvez votre fils du destin.\r\n\r\nUne guerre commence. Un monde se meurt. C\'est l’Aube du Ragnarök.', 39.99, '2022-03-18', 18, 'Aain-s-Creed-Valhalla-L-Aube-du-Ragnarok-extension-DLC-PS5.jpeg'),
(8, 2, 5, 'Gran Turismo 7 Edition', 'Fort de ses 25 années d’expérience, Gran Turismo® 7 regroupe les meilleures fonctionnalités de la licence. Que vous soyez pilote compétitif ou débutant, collectionneur, préparateur, concepteur ou photographe, trouvez votre trajectoire dans une collection époustouflante de modes de jeu, parmi : Campagne GT, Arcade et École de conduite.Avec le retour du légendaire mode de simulation GT, découvrez une campagne solo gratifiante tout en débloquant de nouveaux véhicules et défis. Et si vous aimez affronter d’autres pilotes en ligne, affûtez vos compétences et participez au mode GT Sport. Avec plus de 420voitures disponibles au D1, GT7 recrée l\'aspect et les frissons procurés par des véhicules de légende ou des supercars à la pointe de la technologie à un niveau de détails jamais vu. Chaque voiture se pilote différemment et sa conduite sera véritablement unique dans des conditions météo dynamiques, sur plus de 90 pistes, y compris des circuits classiques de l\'histoire de GT.', 74.99, '2022-03-04', 3, 'Gran-Turismo-7-Edition-Standard-PS5.jpeg'),
(9, 1, 2, 'Babylon\'s Fall', 'Découvrez le système de combat unique du fameux studio PlatinumGames dans BABYLON\'S FALL un nouvel action-RPG coopératif qui vous fera gravir la Tour de Babylone en solo ou avec 3 autres joueurs.\r\n\r\nLe seul vestige laissé par les Babyloniens est leur grande tour, la \"Ziggurat\". Celle-ci a attiré un nouvel Empire, venu piller ses ruines et découvrir ses trésors légendaires. Alliez-vous à d\'autres Sentinelles à qui on a imposé le Coffre de Gédéon, une relique qui octroie des pouvoirs exceptionnels aux rares qu\'elle ne tue pas.\r\n\r\nDe nombreux styles de combats sont disponibles avec plusieurs armes possédant chacune leurs capacités et compétences. Personnalisez votre équipement et utilisez jusqu\'à 4 armes en même temps. Explorez un univers de fantasy d\'une grande richesse, inspiré des anciennes peintures à l\'huile médiévales.', 69.99, '2022-03-03', 18, 'Babylon-s-Fall-PS4.jpeg'),
(10, 2, 5, 'Horizon Forbidden West Edition Spéciale', 'Rejoignez Aloy tandis qu\'elle s\'aventure dans l\'Ouest prohibé, un territoire dangereux qui abrite de mystérieuses nouvelles menaces.\r\nUn immense monde ouvert – découvrez des terres lointaines, de nouveaux ennemis, des cultures riches et des personnages saisissants.\r\nUn endroit majestueux – explorez les forêts verdoyantes, les villes submergées et les montagnes titanesques d\'une Amérique futuriste.\r\nDe nouveaux dangers – participez à des combats stratégiques contre d\'énormes machines ou vos semblables à l\'aide d\'armes, d\'équipement et de pièges fabriqués à partir de pièces récupérées.\r\nDes mystères étonnants – découvrez ce qui se cache derrière l\'effondrement imminent de la Terre et débloquez un chapitre secret des temps anciens… un chapitre qui va bouleverser Aloy à jamais.', 89.99, '2022-02-18', 16, 'Horizon-Forbidden-West-Edition-Speciale-PS5.jpeg'),
(11, 2, 5, 'Uncharted Legacy of Thieves Collection', 'Défiez votre destin et laissez votre empreinte sur la carte dans UNCHARTED™: Legacy of Thieves Collection. Découvrez une expérience narrative et cinématique, et plongez dans les plus grandes scènes d\'action de la série UNCHARTED, avec tous les moments ingénieux et exubérants de Nathan Drake et Chloe Frazer, nos deux voleurs préférés.\r\n\r\nDans une expérience proposée par le développeur primé Naughty Dog, UNCHARTEDTM: Legacy of Thieves Collection comprend les deux célèbres aventures en solo de UNCHARTED™ 4: A Thief’s End et UNCHARTED™: The Lost Legacy. Chaque histoire est remplie de moments drôles et dramatiques, de combats intenses et d\'un sens de l\'émerveillement, tout cela en version remastérisée pour proposer une plus grande immersion.\r\n\r\nVivez ces aventures comme jamais auparavant avec les fonctionnalités et la rapidité de la console PlayStation®5. La fidélité et les détails primés du développeur Naughty Dog sont encore plus magnifiques grâce à des graphismes et des fréquences d\'images améliorés. Ressentez toute l\'action de la série UNCHARTED avec le retour haptique et les gâchettes adaptatives de la manette sans fil DualSense™.', 49.99, '2022-01-22', 16, 'Uncharted-Legacy-of-Thieves-Collection-PS5.jpeg'),
(12, 2, 4, 'Rainbow Six : Extraction', 'Tom Clancy\'s Rainbow Six Extraction est un jeu de tir tactique à la première personne en coopération de un à trois joueurs. Rassemblez votre équipe d\'élite d\'agents Rainbow Six pour lancer des incursions dans les imprévisibles zones d’endiguement et découvrir les mystères qui se cachent derrière la menace extraterrestre mortelle et en constante évolution que sont les Archéens. La connaissance, la coopération et l’approche tactique sont vos meilleures armes. Unissez-vous et mettez tout en jeu pour affronter cet ennemi inconnu.', 39.99, '2022-01-20', 16, 'Rainbow-Six-Extraction-PS5.jpeg');

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);


--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
