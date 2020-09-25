-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 25 sep. 2020 à 09:10
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vente-recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `cash` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telephone` varchar(500) NOT NULL,
  `idpanier` int(11) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `checkout`
--

INSERT INTO `checkout` (`id`, `fullname`, `adress`, `cash`, `email`, `telephone`, `idpanier`, `status`) VALUES
(4, 'Mariem Elhadki', '46 test quartier test', 'cash', 'mariem@gmail.com', '0644569834', 0, 'Done');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `idU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `prix` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `image`, `name`, `prix`, `description`, `category`) VALUES
(1, 'i154764-pates-au-ragout.jpeg', 'Pates au ragu blanc de canard de Luana Belmondo', '46.00', '', 'Cuisine'),
(2, 'i4945-spaghetti-alle-vongole-spaghettis-aux-palourdes.jpg', ' Spaghetti Alle Vongole', ' 4.99', '', 'Cuisine'),
(3, 'i146053-burger-saint-agur.jpeg', ' Hamburger au Saint Agur', ' 19.99', '', 'Cuisine'),
(4, 'i150991-magret-de-canard-aux-pommes-et-au-cidre.jpeg', 'Magret de canard aux pommes et au cidre', '49.99', '', 'Cuisine'),
(5, 'i139827-.jpeg', 'Pain de burger', '49.99', '', 'Cuisine'),
(7, '87658_w600.jpg', 'Tacos mexicains', '55.00', '', 'Cuisine'),
(8, 'i154612-guy-demarle-fp-2035-moule-quattro-kinder-b.jpeg', ' Barres chocolat praline facon Kinder Bueno', '49.99', '', 'Patisseries'),
(9, 'i104065-panna-cotta-au-lait-de-coco-et-aux-fruits-rouges.jpg', 'Panna cotta au lait de coco et aux fruits rouges', '24.99', '', 'Patisseries'),
(10, 'i145542-profiteroles-au-chocolat.jpeg', 'Profiteroles au chocolat', '44.99', '', 'Patisseries'),
(11, 'i79714-recette-panna-cotta-light-au-coulis-de-fruits-rouges.jpg', 'Panna cotta light au coulis de fruits rouges', '55.99', '', 'Patisseries'),
(12, 'i153331-shutterstock-694232740.jpeg', ' Glacage miroir au chocolat au Thermomix', '49.99', '', 'Patisseries'),
(13, 'i125409-fraisier-revisite-de-la-brigade-lamagnere.png', 'Griwech tlemcen', '55.99', '', 'Patisseries'),
(14, 'i131275-tarte-au-citron-au-thermomix.jpeg', 'Tarte au citron au Thermomix', '49.00', '', 'Desserts'),
(15, 'i136359-tarte-aux-pommes-sans-oeufs-a-ma-facon-facile.jpeg', 'Tarte aux pommes sans oeufs', '35.99', '', 'Desserts'),
(16, 'i100003-tiramisu-au-speculoos.jpg', 'Tiramisu au spéculoos', '29.00', '', 'Desserts'),
(17, 'i130079-tiramisu-aux-fraises-en-verrine.jpeg', '  Tiramisu aux fraises en verrine', '30.00', '1. Melanger les jaunes d oeufs et le sucre jusqu a ce qu ils blanchissent.\r\n<br/>\r\n2. Ajouter le mascarpone a la preparation et melanger jusqu a ce que cela soit homogene.\r\n<br/>\r\n3. Battre les blancs en neige ferme et les incorporer au melange.\r\n<br/>\r\n4. Mixer 100 g de fraises pour faire un coulis, ajouter le rhum et un peu d eau si la preparation est epaisse.\r\n<br/>\r\n5. Faire tremper rapidement les biscuits dans le coulis de fraise, et les disposer sur le plat, verser un tiers de la creme dessus, puis des morceaux de fraises, puis a nouveau des biscuits trempes, terminer par de la creme.\r\n<br/>\r\n6. Mettre au frais au moins 2 heures.\r\n', 'Desserts'),
(18, 'i86523-biscuit-petit-prince-fait-maison.jpg', ' Biscuit Petit prince fait maison', '38.99', '', 'Desserts'),
(19, 'i133702-granola-sans-gluten.jpeg', 'Granola sans gluten', '49.00', '', 'Desserts');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pasword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Status` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`UserID`, `FullName`, `Email`, `Pasword`, `Status`) VALUES
(10, 'Salima', 'Salima@gmail.com', 'Admin123', 'Admin'),
(14, 'kikd', 'test@gmail.com', '0fbb1e4de0119e334a5bf4e46b1b4aab', 'user'),
(15, 'Mery', 'mery@gmail.com', '4297f44b13955235245b2497399d7a93', 'user'),
(16, 'jgvy', 'tehuhyust@gmail.com', '0fbb1e4de0119e334a5bf4e46b1b4aab', 'user'),
(17, 'kkcdkdc', 'test@gmail.comed', '0fbb1e4de0119e334a5bf4e46b1b4aab', 'user'),
(18, 'okolool', 'teikkist@gmail.com', '0fbb1e4de0119e334a5bf4e46b1b4aab', 'user'),
(19, 'kikjkd', 'test@gmaklkil.com', '0fbb1e4de0119e334a5bf4e46b1b4aab', 'user'),
(20, 'Salah', 'Salah@gmail.com', '4297f44b13955235245b2497399d7a93', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product` (`idP`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_PersonUser` FOREIGN KEY (`idU`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`idP`) REFERENCES `recette` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
