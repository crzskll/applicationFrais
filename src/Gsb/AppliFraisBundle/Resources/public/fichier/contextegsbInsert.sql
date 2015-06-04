SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


INSERT INTO `employe` (`id`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `login`, `motDePasse`, `dateEmbauche`, `poste`) VALUES
(1, 'Villachane', 'Louis', '8 rue des Charmes', '46000', 'Cahors', 'lvillachane', 'tDjV9uQB61ijtN7bMVEfC/L+GvwgxJRV0nf+SMLmFBSTLECMC4s0k0a72/kvVlCtrmZ6bw2VjckU0mbKHIEK1g==', '2010-12-21', 'Visiteur'),
(2, 'Andre', 'David', '1 rue Petit', '46200', 'Lalbenque', 'dandre', 'MeJWF6eh1Juu6apS7T2I1k5QeDkB+Aq+pabV7+1MEq3sobZR8zZpgXCfI0xCVB7mMX0DHkfYwBzJwj1DUW3W1A==', '2010-11-23', 'Visiteur'),
(3, 'Bedos', 'Christian', '1 rue Peranud', '46250', 'Montcuq', 'cbedos', 'X5rqaDIK4OHJsD/90VnzHR96Us3oBDIk5kQQ/CuBaIkihyin78W2HvvRRel9PfueBjvPPETfSYadJecG2hGilw==', '2010-01-12', 'Visiteur'),
(4, 'Tusseau', 'Louis', '22 rue des Ternes', '46123', 'Gramat', 'ltusseau', 'RemxXM0BU9D11xxKpwTiELKeIUdSXMZ91xB+y2cw0ULvpt0ZoIcCE0fthGZWJ9jXDynHZYedL5eIHKmkwP/T9g==', '2010-05-01', 'Comptable'),
(5, 'Bentot', 'Pascal', '11 allée des Cerises', '46512', 'Bessines', 'pbentot', '489YukLPLm0k1AgzAsY7FcgDt/g0oOotnkTr6HRUnZfgzdINZSnt9b45nP/Y3888/Rv/Zz9VE4XVpTShDABG+g==', '2010-07-09', 'Comptable'),
(6, 'Admin', 'Admin', 'Admin', '00000', 'Admin', 'Admin', 'pNvjtaE5c9HtI1Auc+Y2nrSvSF4EpZ7DIQdwxPQOSP0L1zNkLiJzYkA9n/YWe7XWNFSpgoMmH0vhLZlhknjkvQ==', '2010-01-01', 'Admin');

INSERT INTO `statut` (`id`, `libelle`) VALUES
(1, 'En attente'),
(2, 'Validée'),
(3, 'Refusée');

INSERT INTO `etat` (`id`, `libelle`) VALUES
(1, 'En cours'),
(2, 'Cloturée'),
(3, 'Validée'),
(4, 'En paiement'),
(5, 'Remboursée');

INSERT INTO `forfait` (`id`, `libelle`, `montant`) VALUES
(1, 'nuit', '80.00'),
(2, 'repas', '25.00'),
(3, 'km', '0.62'),
(4, 'etape', '110.00');

INSERT INTO `fiche` (`id`, `employe_id`, `etat_id`, `date`, `nbJustificatifs`, `dateModification`, `montantValide`, `refusLigne`) VALUES
(1, 1, 4, '2015-04-01', 0, '2015-04-26', '0.00', 0),
(2, 2, 5, '2015-04-01', 0, '2015-04-29', '0.00', 0),
(3, 3, 3, '2015-04-01', 0, '2015-04-30', '0.00', 0),
(4, 1, 1, '2015-05-01', 0, '2015-05-25', '0.00', 0),
(5, 2, 1, '2015-05-01', 0, '2015-05-25', '0.00', 0),
(6, 3, 1, '2015-05-01', 0, '2015-05-25', '0.00', 0);

INSERT INTO `forfaitligne` (`id`, `statut_id`, `fiche_id`, `motif`) VALUES
(1, 2, 1, NULL),
(2, 2, 2, NULL),
(3, 2, 3, NULL),
(4, 1, 4, NULL),
(5, 1, 5, NULL),
(6, 1, 6, NULL);

INSERT INTO `fraisforfait` (`id`, `forfait_id`, `quantite`, `forfaitLigne_id`) VALUES
(1, 1, 5, 1),
(2, 2, 8, 1),
(3, 3, 85, 1),
(4, 4, 3, 1),
(5, 1, 12, 2),
(6, 2, 21, 2),
(7, 3, 346, 2),
(8, 4, 2, 2),
(9, 1, 4, 3),
(10, 2, 8, 3),
(11, 3, 45, 3),
(12, 4, 3, 3),
(13, 1, 0, 4),
(14, 2, 6, 4),
(15, 3, 47, 4),
(16, 4, 3, 4),
(17, 1, 6, 5),
(18, 2, 10, 5),
(19, 3, 124, 5),
(20, 4, 6, 5),
(21, 1, 12, 6),
(22, 2, 18, 6),
(23, 3, 194, 6),
(24, 4, 0, 6);

INSERT INTO `horsforfaitligne` (`id`, `statut_id`, `fiche_id`, `date`, `libelle`, `montant`, `motif`) VALUES
(1, 2, 1, '2015-04-08', 'Dîner avec un client', '124.39', NULL),
(2, 2, 1, '2015-04-20', 'Location salle de réunion', '265.00', NULL),
(3, 2, 2, '2015-04-05', 'Billets de train', '268.00', NULL),
(4, 2, 3, '2010-04-02', 'Billet d''avion', '157.39', NULL),
(5, 2, 3, '2015-04-11', 'Dîner d''affaire', '116.38', NULL),
(6, 2, 3, '2015-04-23', 'Location de voiture', '58.94', NULL),
(7, 1, 4, '2015-05-12', 'Billet de train', '75.34', NULL),
(8, 1, 4, '2015-05-13', 'Location de voiture', '86.00', NULL),
(9, 1, 5, '2015-05-07', 'Dîner avec un client', '138.96', NULL),
(10, 1, 5, '2015-05-19', 'Plein d''essence', '59.34', NULL),
(11, 1, 6, '2015-05-17', 'Billet de train', '68.54', NULL),
(12, 1, 6, '2015-05-18', 'Location de véhicule', '94.16', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
