-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 22 nov. 2019 à 14:43
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allocine`
--
CREATE DATABASE IF NOT EXISTS `allocine` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `allocine`;

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id_acteurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_acteurs`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id_acteurs`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'Hamill', 'Mark', 'USA'),
(2, 'Fischer', 'Carrie', 'Angleterre'),
(3, 'Ford', 'Harrison', 'USA'),
(4, 'Allen', 'Karen', 'USA'),
(5, 'Freeman', 'Paul', 'USA'),
(6, 'Norton', 'Edward', 'USA'),
(7, 'Pitt', 'Brad', 'USA'),
(8, 'Bonham Carter', 'Helena', 'Angleterre'),
(9, 'Freeman', 'Morgan', 'USA'),
(10, 'Spacey', 'Kevin', 'USA'),
(11, 'Schwarzenegger', 'Arnold', 'USA'),
(12, 'Stone', 'Sharon', 'USA'),
(13, 'Ironside', 'Michael', 'USA'),
(14, 'Van Dien', 'Casper', 'USA'),
(15, 'Meyer', 'Dina', 'USA'),
(16, 'Richards', 'Denise', 'USA'),
(17, 'Wasikowska', 'Mia', 'USA'),
(18, 'Depp', 'Johnny', 'USA'),
(19, 'Ryder', 'Winona', 'USA'),
(20, 'West', 'Dianne', 'USA');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaires` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `date` date NOT NULL,
  `note` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaires`),
  KEY `commentaires_films_FK` (`id_films`),
  KEY `commentaires_utilisateurs0_FK` (`id_utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id_films` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `synopsis` text,
  `duree` int(11) NOT NULL,
  `affiche` varchar(255) NOT NULL,
  PRIMARY KEY (`id_films`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_films`, `titre`, `date`, `synopsis`, `duree`, `affiche`) VALUES
(1, 'Kill Bill', 2004, 'Dans la petite chapelle de Two Pines perdue au milieu du désert, à El Paso (Texas), alors que se déroule la répétition d\'une cérémonie de mariage, des assassins surgissent et tirent impitoyablement et sans raison apparente sur toutes les personnes présentes. La Mariée, qui est enceinte, survit à ses blessures mais sombre dans le coma. Toutefois, la Mariée n\'est pas une personne ordinaire. Autrefois tueuse à gages dans une organisation secrète, Détachement International des Vipères Assassines, elle est une combattante hors pair. Sortant du coma quatre années plus tard, elle n\'a plus qu\'un seul but, se venger de ses anciens complices, dans lesquels elle a reconnu les assassins de Two Pines, et surtout, tuer Bill, leur chef, qui est également le père de l\'enfant qu\'elle portait et qu\'elle croit avoir perdu à la suite de l\'attaque dans la chapelle.', 111, 'killbill.jpg'),
(2, 'Pulp Fiction', 1994, 'Deux truands, Jules Winnfield (Samuel L. Jackson) et son ami Vincent Vega (John Travolta), qui revient d\'Amsterdam, ont pour mission de récupérer une mallette au contenu mystérieux et de la rapporter à Marsellus Wallace (Ving Rhames), leur patron. Avant de commencer leur affaire, ils discutent de tout et de rien (les différences entre la vie en Europe et aux États-Unis, les hamburgers, le massage des pieds…) et Vincent confie à Jules que Marsellus l\'a chargé de tenir compagnie à sa femme Mia (Uma Thurman) pour une soirée. Ils interrompent ensuite le petit déjeuner de petits escrocs, Brett (Frank Whaley) et Roger (Burr Steers), qui ont vraisemblablement essayé de doubler Marsellus. Ils récupèrent la mallette et, comme à son habitude, Jules cite un passage de la Bible (qui serait dans le livre d\'Ézéchiel) avant de tuer Brett.', 154, 'pulpfiction.jpg'),
(3, 'A new hope', 1977, 'Il y a bien longtemps, dans une galaxie très lointaine. La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l\'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi.', 121, 'anewhope.jpg'),
(4, 'Les aventuriers de l\'arche perdue', 1981, 'Pérou, 1936. Le professeur Henry Walton Jones Jr (dit « Indiana », ou « Indy »), éminent archéologue américain et expert en occultisme, est sur le point de mettre la main sur une idole Chachapoyan. Après avoir échappé à une série de pièges mortels dans un ancien temple, il se fait dérober la relique de façon déloyale par son principal concurrent, un archéologue français, René Belloq. Indy parvient à semer les indiens Hovito à bord d\'un hydravion et rentre bredouille aux États-Unis.', 139, 'fightclub.jpg'),
(5, 'Seven', 1995, 'Fraîchement transféré à la brigade criminelle de New York, le policier David Mills doit faire équipe un temps avec celui qu\'il va remplacer : William Somerset, un officier de police judiciaire affecté aux homicides, bientôt à la retraite. Les deux hommes sont alors chargés d\'une enquête sur un tueur psychopathe qui planifie méthodiquement ses meurtres, en fonction des sept péchés capitaux : la gourmandise, l\'avarice, la paresse, la luxure, l\'orgueil, l\'envie et la colère.', 130, 'seven.jpg'),
(6, 'Total Recall', 1990, 'Dans le futur, Mars est colonisée et exploitée pour le turbinium enfoui dans son sous-sol. La planète est tyranniquement administrée par Vilos Cohaagen, qui contrôle les mines et l\'approvisionnement en oxygène.Sur Terre, Douglas Quaid mène une vie tranquille : il a un travail, des amis et une femme, Lori. Cependant, il ne se sent pas à sa place et rêve très fréquemment de Mars, se voyant explorer la colonie en scaphandre, en compagnie d\'une femme brune, alors qu\'il avoue lui-même ne jamais être allé sur cette planète.Obsédé par ce rêve récurrent, il semble intéressé par les offres de la société Rekall qui propose à ses clients l\'implant de souvenirs factices, mais qui paraissent aussi réels que de vrais souvenirs. Contre l\'avis de sa femme et les avertissements de son meilleur ami Harry, qui a entendu parler d\'un client lobotomisé accidentellement, il décide de se faire implanter un souvenir chez Rekall.', 113, 'totalrecall.jpg'),
(7, 'Starship Troopers', 1997, 'Des lycéens de Buenos Aires qui viennent de finir leurs études, décident de faire leur Service Fédéral, encouragés par leur professeur de philosophie morale, Jean RasczakNote 1. Johnny Rico et Dizzy Flores se retrouvent dans l\'infanterie mobile, tandis que Carmen Ibañez se destine à devenir pilote de vaisseau spatial et Carl Jenkins, ayant des capacités télépathiques, devient un officier scientifique. Dizzy s’engage dans la même arme que Rico car elle est amoureuse de lui, mais ce n\'est pas réciproque, car il sort déjà avec Carmen. Mais Carmen, en tant que pilote de vaisseau, comprend rapidement qu’un avenir commun avec Rico semble impossible et envoie donc un message vidéo à Johnny pour lui annoncer qu\'elle rompt avec lui. Elle se rapproche par la suite de Zander, son lieutenant instructeur, tandis que Rico finit par succomber aux avances de Dizzy.', 129, 'starshiptroopers.jpg'),
(8, 'Alice au pays des merveilles', 2010, 'Alice Kingsleigh, âgée de 19 ans, troublée par un étrange rêve récurrent et pleurant la perte de son père, va à une fête dans le jardin du domaine de Lord Ascot avec sa mère. Là-bas, elle fait face à des fiançailles forcées avec le fils du Lord Ascot, Hamish, et les attentes de la société dans laquelle elle vit. Incertaine, elle poursuit un lapin portant un gilet bleu et tombe accidentellement dans un grand terrier sous un arbre. Elle atterrit dans une forêt où elle est accueillie par le Lapin Blanc, le Loir, le Dodo, les Fleurs qui parlent, et Tweedledum et Tweeldledee. Ils se disputent pour s\'avoir si Alice est \"la vraie Alice\" qui vaincra le Jabberwocky de la Reine Rouge et rendra son pouvoir à la Reine Blanche, comme l\'avait prédit Absolem la chenille dans son parchemin prophétique. Le groupe se fait ensuite attaquer par le Bandersnatch et un groupe de soldats-cartes à jouer menés par le Valet de Cœur. Alice, Tweedledum et Tweedledee s\'enfuient dans les bois. Le Valet vole le parchemin de la Chenille. Le Loir laisse les autres derrière lui avec en sa possession l\'un des yeux du Bandersnatch. Tweedledum et Tweedledee sont ensuite capturés par l\'Oiseau Jobbard de la Reine Rouge.', 109, 'alice.jpg'),
(9, 'Edward aux mains d\'argent', 1990, 'Une grand-mère raconte une histoire à sa petite-fille pour lui expliquer d\'où vient la neige qui tombe sur la ville. Cette histoire commence avec un jeune homme appelé Edward (Johnny Depp) créé par un inventeur (Vincent Price) vivant seul dans un sombre château perché sur une colline. Mais l\'inventeur meurt avant d\'avoir pu achever son œuvre, laissant Edward avec des ciseaux aux lames extrêmement acérées à la place des mains. Edward vit donc seul dans ce sinistre château jusqu\'au jour où Peg Boggs (Dianne Wiest), représentante en cosmétiques, se présente à sa porte. Voyant que le jeune homme, timide et inoffensif, vit seul sans avoir le moindre lien avec le monde qui l\'entoure, elle décide de l\'emmener au sein de son foyer situé dans une tranquille banlieue résidentielle. Edward commence alors à partager la vie de Peg, de son mari Bill (Alan Arkin) et de leur fils Kevin (Robert Oliveri) âgé de douze ans. Il devient très vite le nouveau centre d\'intérêt du quartier et est d\'abord accueilli à bras ouverts, ses talents de tailleur de haies et de coiffeur lui valant l\'admiration et les sollicitations de toutes les voisines.', 105, 'edward.jpg'),
(10, 'Fight Club', 1999, 'Jack est un jeune expert en assurance insomniaque, désillusionné par sa vie personnelle et professionnelle. Lorsque son médecin lui conseille de suivre une thérapie afin de relativiser son mal-être, il rencontre dans un groupe d\'entraide Marla avec qui il parvient à trouver un équilibre.', 139, 'fightclub.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genre`, `type`) VALUES
(1, 'Science-fiction'),
(2, 'Thriller'),
(3, 'Aventures'),
(4, 'Fantastique'),
(5, 'Comédie');

-- --------------------------------------------------------

--
-- Structure de la table `joue`
--

DROP TABLE IF EXISTS `joue`;
CREATE TABLE IF NOT EXISTS `joue` (
  `id_acteurs` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  PRIMARY KEY (`id_acteurs`,`id_films`),
  KEY `joue_films0_FK` (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `id_genre` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  PRIMARY KEY (`id_genre`,`id_films`),
  KEY `possede_films0_FK` (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
CREATE TABLE IF NOT EXISTS `realisateurs` (
  `id_realisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_realisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisateurs`
--

INSERT INTO `realisateurs` (`id_realisateurs`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'Tarantino', 'Quentin', 'USA'),
(2, 'Burton', 'Tim', 'USA'),
(3, 'Fincher', 'David', 'USA'),
(4, 'Lucas', 'George', 'USA'),
(5, 'Verhoeven', 'Paul', 'Pays-Bas');

-- --------------------------------------------------------

--
-- Structure de la table `realise`
--

DROP TABLE IF EXISTS `realise`;
CREATE TABLE IF NOT EXISTS `realise` (
  `id_realisateurs` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateurs`,`id_films`),
  KEY `realise_films0_FK` (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_films_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`),
  ADD CONSTRAINT `commentaires_utilisateurs0_FK` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id_utilisateurs`);

--
-- Contraintes pour la table `joue`
--
ALTER TABLE `joue`
  ADD CONSTRAINT `joue_acteurs_FK` FOREIGN KEY (`id_acteurs`) REFERENCES `acteurs` (`id_acteurs`),
  ADD CONSTRAINT `joue_films0_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_films0_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`),
  ADD CONSTRAINT `possede_genres_FK` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`);

--
-- Contraintes pour la table `realise`
--
ALTER TABLE `realise`
  ADD CONSTRAINT `realise_films0_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`),
  ADD CONSTRAINT `realise_realisateurs_FK` FOREIGN KEY (`id_realisateurs`) REFERENCES `realisateurs` (`id_realisateurs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
