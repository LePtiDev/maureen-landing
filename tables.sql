--
-- Structure de la table `client_ville_residence_leads`
--

CREATE TABLE IF NOT EXISTS `client_ville_residence_leads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NULL DEFAULT 'documentation',
  `civilite` varchar(255) NULL,
  `nom` varchar(255) NULL,
  `prenom` varchar(255) NULL,
  `email` varchar(255) NULL,
  `telephone` varchar(255) NULL,
  `plage_horaire` varchar(255) NULL,
  `cp` varchar(255) NULL,
  `ville` varchar(255) NULL,
  `adresse` varchar(255) NULL,
  `projet` varchar(255) NULL,
  `interet` varchar(255) NULL,
  `optin` tinyint(1) NULL DEFAULT '0',
  `message` text NULL,
  `date_creation` datetime NULL,
  `utm_source` varchar(255) NULL,
  `utm_medium` varchar(255) NULL,
  `utm_campaign` varchar(255) NULL,
  `utm_content` varchar(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;