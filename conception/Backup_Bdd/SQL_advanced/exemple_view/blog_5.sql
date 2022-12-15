CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `write_by_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `write_by_id`, `title`, `contenu`, `image`, `created_at`, `updated_at`) VALUES
(1, 22, 'Parfumeur', 'Id voluptatem sed quia ut architecto. Aliquam est hic et sed libero. Labore dicta architecto ipsa non natus ex.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quae', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(2, 20, 'Coffreur-ferrailleur', 'Eligendi voluptate voluptas modi iusto est ipsum. Sit qui cum ea necessitatibus maxime vel aut. Ut voluptatem deserunt debitis cum.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+distinctio', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(3, 10, 'Flaconneur', 'Iste qui natus voluptatem natus dolorem. Nesciunt mollitia illum qui enim eaque. Reprehenderit autem architecto soluta aliquam consequatur asperiores.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quaerat', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(4, 7, 'Brigadier', 'Aut distinctio consequatur quia inventore consectetur. Iste quos reiciendis quia ut quasi rem. Ratione et et sit quidem rem cum. Perferendis delectus ipsum ea quisquam. Quis asperiores ab magnam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+molestiae', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(5, 12, 'Délégué à la tutelle', 'Consequuntur magnam molestiae atque odio est necessitatibus eius. Culpa impedit eligendi vitae odio consequuntur aliquam dignissimos.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+provident', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(6, 24, 'Vendeur en épicerie', 'Aliquid est voluptatem amet quibusdam aspernatur non quaerat. Beatae enim accusantium ea temporibus inventore. Sit laudantium aut qui dolor sint sequi necessitatibus. Libero et ullam qui repellat.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+inventore', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(7, 7, 'Sculpteur sur verre', 'Est et quia animi sint in. Harum voluptatem quo quia sed. Itaque aut dolorum in necessitatibus totam doloremque.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+voluptatem', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(8, 49, 'Vendeur en lingerie', 'Veritatis debitis inventore velit officia consequuntur. Eligendi sint delectus tempore voluptatem debitis iusto. Placeat deserunt consequatur laborum perferendis eveniet ducimus rerum.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+reprehenderit', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(9, 50, 'Maçon', 'Asperiores eius qui et sint non animi. Eaque aut quaerat ex illum. Culpa aspernatur molestiae quis eius deleniti ipsa. Voluptatem magni necessitatibus magni ipsum optio.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+voluptatem', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(10, 12, 'Embouteilleur', 'Quisquam dolores ipsum impedit eius illo et dolorem. Quo eveniet culpa ut saepe. Amet sint porro voluptas repellat voluptatem.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+aut', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(11, 31, 'Opérateur vidéo', 'Voluptate adipisci necessitatibus provident ex tempora. Velit error dolor dolor ut. Deserunt est ut aliquam qui et nihil. Aut voluptatem ut qui.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+voluptatem', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(12, 19, 'Essayeur-retoucheur', 'Quas veritatis ut ut quae laudantium aut molestiae. Reiciendis consequatur illo omnis et facere.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+sunt', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(13, 8, 'Gynécologue', 'Ullam debitis excepturi molestiae odit facilis. Perferendis qui dolores cum iure. Corporis repellat expedita voluptas quae dicta quasi et. Quasi et aspernatur corporis hic.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ea', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(14, 47, 'Photographe d\'art', 'Soluta ut laudantium sed perferendis. Sint alias accusamus assumenda. Repellendus inventore non veritatis occaecati ea sapiente quae. Tempora ut possimus odio similique quod ut.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ea', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(15, 41, 'Opérateur géomètre', 'Aut et quia dignissimos nulla amet sit sunt corporis. Optio qui facere quam aut dolor repellendus. Consequatur aut et dolorem accusamus rem doloremque et ducimus. Odio repellendus quia quos.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+repellat', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(16, 7, 'Hydrothérapie', 'Rem ea adipisci et quaerat. Est deleniti deserunt deserunt deserunt. Reiciendis et et similique id.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+cum', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(17, 2, 'Data manager', 'Provident vero debitis aperiam dolor. Vel occaecati minima atque soluta omnis velit. Saepe et veniam vitae error consectetur est modi. Repudiandae quas ipsa nulla sed.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+possimus', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(18, 12, 'Chasseur-bagagiste', 'Corporis ipsum enim ut non sapiente et. Eius perferendis commodi dicta porro et. Nihil enim aliquam ut sit esse et voluptatem.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ducimus', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(19, 25, 'Ingénieur logistique', 'Dicta doloribus nemo nobis asperiores sequi debitis doloremque. Est velit est placeat nam mollitia optio. Non pariatur voluptatibus consectetur doloremque ipsam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+vitae', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(20, 22, 'Services funéraires', 'Libero reprehenderit qui sed aliquam quam deserunt. Dolores quas ut et eum eum dolor. Est natus pariatur ex. Animi omnis quibusdam nam dolore quas quod.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+nihil', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(21, 7, 'Pyrotechnicien', 'Deserunt consequatur eveniet omnis et libero est. Quia et inventore architecto et. Sequi sint est qui qui.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+facere', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(22, 5, 'Sertisseur', 'Excepturi eaque vel esse commodi quia quos. Sit esse et reiciendis aliquid qui nihil labore. Quia sunt non eos ut sit dolorum cumque commodi.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+commodi', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(23, 36, 'Pisteur secouriste', 'Modi id dolores eligendi. Repellat ut deserunt ut odit delectus placeat. Et quam corrupti amet quo quo enim expedita consequatur. Accusamus et tempora ipsam suscipit provident nulla quia.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+et', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(24, 29, 'Mouliste drapeur', 'Impedit dolorem perferendis neque voluptas hic eligendi. Porro voluptatibus est eos omnis. Mollitia maxime est ad. Quis sit est sapiente reprehenderit voluptatibus et nisi qui.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+soluta', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(25, 11, 'Géomètre', 'Et dolores blanditiis commodi iste consequatur corrupti. Eum id et deleniti incidunt. Sit qui sit nisi eum accusantium nemo aut. Eaque repudiandae sit asperiores quis iusto totam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+sapiente', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(26, 19, 'Gérant d\'hôtel', 'Est quibusdam non doloribus cupiditate voluptatem. Repudiandae nisi fuga sunt quo aut. Et incidunt aliquid deleniti reiciendis eius nesciunt. Voluptatem corporis alias aut eaque.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+nostrum', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(27, 23, 'Caviste', 'Atque ducimus expedita modi voluptas sint sit porro. Repudiandae sint et eveniet. Aliquid alias rerum dicta vitae sed nostrum velit.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ipsam', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(28, 32, 'Potier', 'Facilis voluptas autem ut quaerat. Voluptas impedit deleniti rem maxime ipsa placeat maiores. Quidem voluptatum occaecati sunt sequi qui consequatur. Et sed facilis natus qui ullam odio sed.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+a', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(29, 33, 'Chef du personnel', 'Autem cumque quas beatae ea corporis maiores qui. Soluta voluptatem aut dolores et commodi qui. Repellendus eius vitae consequatur cumque architecto.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+facere', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(30, 35, 'Vendeur en épicerie', 'Doloremque ducimus nulla autem cum aspernatur. Aperiam in maiores molestiae hic. Voluptatibus id consequatur provident quidem. Asperiores a aut quos quisquam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+nemo', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(31, 16, 'Maçonnerie', 'Consectetur distinctio similique laborum vel fuga voluptas. Accusantium nesciunt eum sit optio esse. Consequuntur necessitatibus laborum repellendus dignissimos.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+vel', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(32, 24, 'Revenue Manager', 'Ea qui voluptatem tempore eligendi. Pariatur eaque cumque ratione voluptas et. Est culpa sint aliquam. Sapiente blanditiis doloremque ea praesentium dolores quisquam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+pariatur', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(33, 14, 'Styliste graphiste', 'Fugiat natus explicabo unde quis et. At provident minima inventore vero. Adipisci ea est eos. In occaecati assumenda vel placeat voluptates quasi. Est inventore placeat qui.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quis', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(34, 18, 'Garçon de hall', 'Laudantium maxime dolores qui libero eum. Eius doloribus maxime nisi molestias hic et. Aut accusamus itaque rem rerum asperiores provident rem. Saepe reiciendis perferendis velit et.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+voluptatem', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(35, 13, 'Ramasseur d\'endives', 'Voluptatem nemo voluptates earum. Quia sequi dolorem veniam vel et id. Aperiam quod ut id doloremque nesciunt rerum veritatis. At repellat quibusdam inventore id porro.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+vitae', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(36, 3, 'Vendeur en meubles', 'Quia aspernatur consequatur quia molestiae iusto quam. Molestiae sunt nam vitae suscipit. Eum sed beatae eum ea. Sed molestiae nam nesciunt inventore.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+eaque', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(37, 34, 'Professeur d\'italien', 'Dignissimos amet eveniet nam repellat ad et temporibus. Aut qui similique est tempore numquam. Rerum aut et molestias est labore.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ad', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(38, 38, 'Oenologue', 'Ratione iusto et quo repellat minus. Quod et consequatur facere libero.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolore', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(39, 36, 'Pisteur secouriste', 'Enim ratione sit quis dignissimos. Ut ex ratione corporis eaque explicabo. Distinctio sunt molestiae expedita vel tempore.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolore', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(40, 7, 'Chef du personnel', 'Perferendis vel molestiae iste doloremque minus qui. Quae sed voluptatem molestiae ut dolorum autem dolorum molestiae. Nobis ut voluptates dignissimos provident et unde.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+non', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(41, 14, 'Opérateur géomètre', 'Totam dolor ipsum debitis error omnis. Dicta beatae recusandae rem delectus. Ut nisi est molestiae recusandae dolorem est.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quae', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(42, 30, 'Garçon de chenil', 'Hic nihil doloribus illo repellendus dignissimos consequuntur sequi. Dolores velit qui commodi fuga. Voluptas aspernatur libero earum occaecati dolore soluta vel.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+sapiente', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(43, 14, 'Monteur prototypiste', 'Vero tempora autem totam et. Voluptatem optio consequuntur distinctio dolor voluptatum fuga nulla. Perferendis aut deleniti aut quae quo. Voluptas illo inventore eum et.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quo', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(44, 32, 'Chef de scierie', 'Quia eius dolores ipsa qui autem nulla totam. Ea sunt eum quae laboriosam similique velit qui. Ea saepe ducimus culpa et veniam quae eum. Incidunt qui in sit odio et eaque. Rerum earum minus quod et.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+eum', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(45, 10, 'Revenue Manager', 'Voluptas animi nesciunt quia sint. Fugiat maiores et rerum porro labore eligendi soluta consequatur. Saepe impedit aliquam maiores rerum porro nihil ut cum.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dicta', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(46, 46, 'Monteur prototypiste', 'Deleniti ea eligendi doloribus in laudantium ea. Aut consequatur veritatis est non voluptatem natus. Quia error corrupti autem quibusdam repellendus commodi.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+cupiditate', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(47, 14, 'Aide à domicile', 'Esse quasi non omnis accusamus quisquam quo. Quis temporibus qui ratione sed nobis veritatis. A laudantium mollitia temporibus quisquam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+rerum', '2022-05-31 15:14:44', '2022-05-31 15:14:44'),
(48, 14, 'Logistique', 'Rerum aut nemo et eos voluptates. Ut voluptates facilis magnam. Sit ad placeat quis molestiae. Exercitationem autem officiis quos ut dolorum vitae.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+doloremque', '2022-05-31 15:14:44', '2022-05-31 15:14:44');

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_category`
--

INSERT INTO `article_category` (`article_id`, `category_id`) VALUES
(1, 5),
(1, 39),
(2, 5),
(2, 11),
(3, 5),
(3, 37),
(4, 5),
(4, 20),
(5, 5),
(5, 9),
(6, 5),
(7, 14),
(8, 39),
(9, 25),
(10, 10),
(11, 10),
(12, 2),
(13, 19),
(15, 30),
(16, 6),
(17, 45),
(18, 25),
(19, 42),
(20, 35),
(21, 47),
(22, 30),
(23, 37),
(24, 16),
(25, 44),
(26, 30),
(27, 25),
(28, 4),
(29, 44),
(30, 48),
(31, 36),
(32, 37),
(33, 1),
(34, 10),
(35, 47),
(36, 43),
(37, 14),
(38, 45),
(39, 12),
(40, 5),
(41, 34),
(42, 21),
(43, 9),
(44, 30),
(45, 23),
(46, 16),
(47, 23),
(48, 9);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(1, 'Chargé de recherche', 'Praesentium suscipit sed voluptatibus facere quos sunt. Pariatur aspernatur et tempore error laboriosam. Suscipit et maxime autem sit.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+culpa', '2022-05-31 15:14:44'),
(2, 'Fraiseur', 'Necessitatibus at earum unde non molestiae. Voluptatem numquam enim fugit consequatur distinctio laborum omnis. Sequi quaerat officiis aliquam temporibus.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+veniam', '2022-05-31 15:14:44'),
(3, 'Monteur en siège', 'Distinctio qui quam beatae rerum accusantium. Velit aliquid et exercitationem autem aut. Ut neque alias voluptates enim.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+qui', '2022-05-31 15:14:44'),
(4, 'Pédologue', 'Beatae officiis doloribus natus qui. Veniam optio totam consequatur rerum et et eius. Dolorum qui cumque neque. Est nisi occaecati possimus assumenda doloribus animi.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+sint', '2022-05-31 15:14:44'),
(5, 'Assistant de justice', 'Occaecati dolores sapiente maxime iusto vel. Iusto perspiciatis rerum ad veniam sunt. Aut earum at ut esse. Perferendis eum dolore commodi. Voluptate dolorum placeat illo nisi quae alias.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolor', '2022-05-31 15:14:44'),
(6, 'Miroitier', 'Eum deleniti non sunt facere deserunt. Repudiandae qui quia placeat neque doloribus nemo fuga. Voluptas totam ut iste ipsum et non ut odio.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+iste', '2022-05-31 15:14:44'),
(7, 'Stucateur', 'Nemo aut aperiam commodi culpa iure sint dolorum quos. Totam at consequatur magnam deserunt laudantium earum eos ea. Qui quia dolorem perspiciatis dignissimos.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+voluptate', '2022-05-31 15:14:44'),
(8, 'Gendarme mobile', 'Est dignissimos omnis ut saepe enim doloremque officia. Est velit quaerat dignissimos blanditiis. Aliquid minus laboriosam rerum quis laboriosam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+earum', '2022-05-31 15:14:44'),
(9, 'Verrier à la calotte', 'Ut perferendis ut excepturi aut. Odio omnis atque fugit nobis suscipit omnis quos. Repellendus voluptatem veritatis mollitia est rerum voluptatem.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+eveniet', '2022-05-31 15:14:44'),
(10, 'Carrier', 'Voluptatum tenetur sapiente laborum distinctio qui rerum. Perferendis nobis dolorum ipsam ab dolores totam minus. Beatae laborum ut iure veniam cum sit.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+vel', '2022-05-31 15:14:44'),
(11, 'Poseur de granit', 'Voluptate ad dolor quaerat commodi illum rerum inventore fuga. Omnis voluptatem voluptatum sed consequatur. Accusantium et debitis earum incidunt aut non et illo. Quae ut eum delectus iure enim.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+iste', '2022-05-31 15:14:44'),
(12, 'Primeuriste', 'Distinctio fugiat illo est autem enim et. Voluptas vel quia reiciendis doloribus qui. Maxime est sunt laboriosam aut et est quisquam nihil.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+vero', '2022-05-31 15:14:44'),
(13, 'Services funéraires', 'Consequuntur excepturi fugit eos neque. Voluptas ea dolor recusandae nostrum. Natus vel vitae ut autem harum inventore qui. Unde ducimus delectus ex facere quo.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+sed', '2022-05-31 15:14:44'),
(14, 'Chargé de recherche', 'Et sunt modi eum voluptatem impedit facere. Enim aut quo neque occaecati tempore distinctio. Rerum nam accusantium quod tenetur. Sunt in laborum magnam eveniet fugit.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolorem', '2022-05-31 15:14:44'),
(15, 'Ingénieur logistique', 'Dolor est fugiat minus unde sit deserunt. Ut quasi id explicabo. Quia quo laboriosam sed ut quaerat.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+aperiam', '2022-05-31 15:14:44'),
(16, 'Ingénieur logistique', 'Temporibus assumenda aut quibusdam nemo. Quis labore est labore suscipit ut. Nisi quaerat saepe eos saepe est.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ex', '2022-05-31 15:14:44'),
(17, 'Pédologue', 'Tempora et aspernatur hic nostrum eius eum. Alias et sunt nobis rerum corporis nobis iure. Maiores illo explicabo labore. Sunt et facere et occaecati sint ratione pariatur.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dignissimos', '2022-05-31 15:14:44'),
(18, 'Designer produit', 'Dolor ducimus id rem. Illum totam non quae. Ut voluptatum in deleniti eos.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolorem', '2022-05-31 15:14:44'),
(19, 'Data manager', 'Tempore veritatis facere vero eos excepturi non voluptatem. Enim fugit sit dolore quis est delectus esse vel. Non nulla culpa asperiores occaecati sit.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolores', '2022-05-31 15:14:44'),
(20, 'Piqueur en ganterie', 'Velit debitis dolor aut aut eveniet hic occaecati. Ut nostrum ut ut eius vero illo id. Autem sed eligendi expedita eum nihil.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+voluptatem', '2022-05-31 15:14:44'),
(21, 'Animateur d\'écomusée', 'Qui repellat sed voluptatibus. Suscipit blanditiis impedit unde. Ut facere magnam dignissimos perferendis numquam odit. Perspiciatis odio voluptates dolorum rerum nam esse.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quo', '2022-05-31 15:14:44'),
(22, 'Endivier', 'Numquam eum aut omnis perferendis nobis. Vero expedita dolor rerum impedit. Repudiandae rerum quod voluptates magni enim tempore iste. Ipsa voluptatibus quos ea quasi consequuntur nihil ex.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+eligendi', '2022-05-31 15:14:44'),
(23, 'Parqueteur', 'Hic aut est aut quo similique voluptatibus et et. Rerum ut quo ex distinctio. Deserunt cupiditate adipisci et culpa harum ex. Accusamus placeat inventore quo harum neque rerum.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+assumenda', '2022-05-31 15:14:44'),
(24, 'Trieur de métaux', 'Quam ducimus ad quos dolor eius explicabo quae. Eligendi provident placeat repudiandae velit placeat aut velit. Voluptate autem qui cum non. Non aliquam aliquam quibusdam fuga magnam pariatur ut.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+est', '2022-05-31 15:14:44'),
(25, 'Monteur-truquiste', 'Explicabo aut dolores dolor. Qui culpa deleniti dolor libero vel quidem. Iste et adipisci qui qui qui beatae autem culpa. Sed ad libero saepe natus et et impedit in.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+aut', '2022-05-31 15:14:44'),
(26, 'Pédicure pour bovin', 'Quia et quia ipsa explicabo occaecati non. Tempora necessitatibus vel qui quia libero. Aut animi qui ut excepturi.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+exercitationem', '2022-05-31 15:14:44'),
(27, 'Liftier', 'Aperiam quia id qui nihil rerum. Dicta nisi repellendus reiciendis veniam. Enim sed adipisci assumenda repellat eos quia et. Vel nesciunt dolores sed mollitia eum et.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+nisi', '2022-05-31 15:14:44'),
(28, 'Responsable télécoms', 'Sed laborum culpa et distinctio sed et qui. Sed ducimus ad aut in. Est eos et nisi odio id eum.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ratione', '2022-05-31 15:14:44'),
(29, 'Expert back-office', 'Dolor aspernatur animi magni eius id quis. Accusamus molestias velit eveniet est autem adipisci. Repellat autem molestiae ut ut. Quo atque reprehenderit modi est.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quaerat', '2022-05-31 15:14:44'),
(30, 'Chef de fabrication', 'Sapiente reiciendis accusamus qui quis porro. Eius in minima delectus quidem eius sunt ut. Rerum soluta eum quae est.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+rerum', '2022-05-31 15:14:44'),
(31, 'Consultant ergonome', 'Et soluta mollitia adipisci. Amet occaecati dicta dicta est sint deleniti sunt. Ipsum sit libero suscipit sunt quia et non. At laboriosam magni et qui.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+qui', '2022-05-31 15:14:44'),
(32, 'Séismologue', 'Iusto ut quis explicabo neque et. Consequuntur corrupti laboriosam voluptas qui quo inventore. Saepe eius et saepe aliquid et non delectus. Magni nobis necessitatibus officia recusandae.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+hic', '2022-05-31 15:14:44'),
(33, 'Guitariste', 'Asperiores illum ut enim tempore quod. Reprehenderit quia quaerat blanditiis totam sunt similique doloremque.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+deleniti', '2022-05-31 15:14:44'),
(34, 'Paléontologue', 'Vitae velit in est distinctio odio exercitationem facilis. Autem doloremque corporis non. Fuga consequatur est vel nisi. Sunt dolores quae occaecati corrupti quibusdam aut blanditiis enim.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+soluta', '2022-05-31 15:14:44'),
(35, 'Sertisseur', 'Quae esse omnis ut omnis rerum nam. Deserunt quia autem eum itaque ut eum voluptas. Atque facere ducimus placeat cupiditate.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+et', '2022-05-31 15:14:44'),
(36, 'Conseiller relooking', 'Doloribus molestiae illum est quas. Rerum aut incidunt sit nobis deleniti dolor. Voluptas nihil alias placeat est nostrum inventore.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+tenetur', '2022-05-31 15:14:44'),
(37, 'Capitaine de pêche', 'Quia saepe odio ut aperiam. Doloremque cumque neque deserunt quas quae corrupti quidem omnis. Culpa dicta dolorem perferendis sed accusantium. Ullam in et numquam aut tempora.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+aliquid', '2022-05-31 15:14:44'),
(38, 'Capitaine de pêche', 'Dolores qui distinctio cum officia dolor rerum. Nihil harum architecto libero. Iste eum consectetur alias velit sed repellat saepe. Eum quas nisi assumenda esse minima ea.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+eligendi', '2022-05-31 15:14:44'),
(39, 'Posticheur spectacle', 'Nulla quis dignissimos nostrum modi maiores laborum accusamus. Suscipit voluptas itaque alias ea omnis. Tempora velit non odit modi vitae doloribus. Perferendis sapiente eveniet modi id.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quia', '2022-05-31 15:14:44'),
(40, 'Pilote de soutireuse', 'Cum officia esse libero cum ea sunt molestias. Sapiente eaque aut harum quis. Veniam praesentium maxime consequatur aut aspernatur qui nihil.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quas', '2022-05-31 15:14:44'),
(41, 'Assistant styliste', 'Saepe fugit aspernatur necessitatibus ipsum et consequatur. Odit ducimus libero rerum cupiditate fuga dolores. Quod repellendus veniam omnis odit repudiandae unde molestias.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ea', '2022-05-31 15:14:44'),
(42, 'Clerc hors rang', 'Ut doloribus aliquid maxime sapiente consequatur. Odit quod fugiat modi totam qui aut dolores.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+ad', '2022-05-31 15:14:44'),
(43, 'Assistant des ventes', 'Adipisci quis quia eos consequatur aut non. Similique et dolores molestiae autem. Rem corporis tempora consectetur amet et in. Sunt et nihil ducimus ut. Amet sit odio nemo quam consequatur velit.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+animi', '2022-05-31 15:14:44'),
(44, 'Commandant marine', 'Eveniet eum veritatis laudantium aut illum ea a. Alias deserunt explicabo ut. Sequi et soluta corporis modi.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+earum', '2022-05-31 15:14:44'),
(45, 'Géomètre du cadastre', 'Vero qui illo sed rerum porro. Ipsum et autem ullam exercitationem aliquid omnis. Assumenda dolorum aut dicta deserunt.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+illum', '2022-05-31 15:14:44'),
(46, 'Oenologue', 'Nihil impedit similique aspernatur est. Amet ratione occaecati perspiciatis dolorem animi nulla. Quis tempore fugiat qui ut quam.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+quia', '2022-05-31 15:14:44'),
(47, 'Analyste télématique', 'Quo id veniam sed eum quod in quas quam. Provident aut facere aspernatur possimus nostrum consectetur et. Voluptatem aut nemo veniam nesciunt temporibus architecto qui esse.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dicta', '2022-05-31 15:14:44'),
(48, 'Maître de ballet', 'Odio consequatur perspiciatis neque ut minima vel. Quo recusandae possimus tempora. Fugit est dolorum est quisquam facilis voluptas. Deleniti non qui est totam corrupti.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+sed', '2022-05-31 15:14:44'),
(49, 'Pédologue', 'Numquam inventore et illum dolores. Incidunt totam nemo est cumque. Voluptas ex molestiae dicta nihil voluptatem. Laborum quod labore fugit est numquam vitae rerum.', 'https://via.placeholder.com/360x360.png/CCCCCC?text=animals+dogs+dolor', '2022-05-31 15:14:44');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220531102939', '2022-05-31 12:30:10', 259);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `mail`, `password`, `created_at`) VALUES
(2, 'Texier', 'Chantal', 'marine97@voisin.com', 'jLetdj>mw6it&SDZ', '2022-05-31 15:14:44'),
(3, 'Blanchet', 'Emmanuel', 'vbourdon@dupuis.org', 'VYxk?@htI5}Dp\'aG)&', '2022-05-31 15:14:44'),
(4, 'Peltier', 'Marianne', 'buisson.paul@tele2.fr', 'At^)3,IeZquPIY\"GLB#', '2022-05-31 15:14:44'),
(5, 'Gilbert', 'Christophe', 'boulay.guillaume@hotmail.fr', '8EZ=T.JB<~:Pn#Qp', '2022-05-31 15:14:44'),
(6, 'Neveu', 'Geneviève', 'dorothee81@pottier.fr', '\"{%4<v~.e', '2022-05-31 15:14:44'),
(7, 'Blondel', 'Manon', 'ahardy@maillard.com', '\"#`p}fo8t[_)>?wF', '2022-05-31 15:14:44'),
(8, 'Laporte', 'Guillaume', 'coulon.laetitia@allard.fr', 'GoCV9{B5PZ', '2022-05-31 15:14:44'),
(9, 'Alexandre', 'Camille', 'pottier.benoit@hoareau.fr', ':Z$25N`tTf0_`UfE9', '2022-05-31 15:14:44'),
(10, 'Rey', 'Philippine', 'ohubert@sfr.fr', 'j9:(PJ=aZ$5~rysUE', '2022-05-31 15:14:44'),
(11, 'Allard', 'Julie', 'bernard41@dbmail.com', 'w#QFz$eZ<', '2022-05-31 15:14:44'),
(12, 'Gaillard', 'Alix', 'sbarbe@hotmail.fr', 'sFpJZ$[M{l%YuKo', '2022-05-31 15:14:44'),
(13, 'Gautier', 'Gérard', 'honore07@gilbert.fr', '95;(Z7.olIZP.ZZP', '2022-05-31 15:14:44'),
(14, 'Gautier', 'Virginie', 'daniel.maggie@laurent.fr', '6>fR{\\A3Xf&EE', '2022-05-31 15:14:44'),
(15, 'Breton', 'Noël', 'nschneider@bourdon.org', '>k$WsJ', '2022-05-31 15:14:44'),
(16, 'Leblanc', 'Marcelle', 'huet.augustin@fouquet.com', '%^7\'_<53', '2022-05-31 15:14:44'),
(17, 'Leleu', 'Juliette', 'julie.bourgeois@dbmail.com', 'gq?%ZJ#!F', '2022-05-31 15:14:44'),
(18, 'Lamy', 'Mathilde', 'luce99@noos.fr', 'ZQ?N<(#', '2022-05-31 15:14:44'),
(19, 'Lesage', 'Laurence', 'guillon.benoit@evrard.com', 'lM]UXY(pF=?!]aSGc~', '2022-05-31 15:14:44'),
(20, 'Nicolas', 'Paulette', 'wreynaud@hotmail.fr', 'Hps8[+@', '2022-05-31 15:14:44'),
(21, 'Aubert', 'Arnaude', 'qriou@hotmail.fr', 'xpR$2#_GE22?&Zq', '2022-05-31 15:14:44'),
(22, 'Paris', 'Marc', 'laure.buisson@carpentier.org', 'K|jY~4', '2022-05-31 15:14:44'),
(23, 'Breton', 'Noël', 'hrey@orange.fr', 'Z2/q!/BrFqPC2j@_l,*', '2022-05-31 15:14:44'),
(24, 'Meunier', 'Louise', 'sophie96@yahoo.fr', '&W#~>bWT?(p7', '2022-05-31 15:14:44'),
(25, 'Dijoux', 'Pierre', 'eric.pinto@leduc.fr', '$~^l%[Xltw', '2022-05-31 15:14:44'),
(26, 'Dufour', 'Alexandrie', 'pinto.leon@laposte.net', '~!FC*?Y!p%nR)?al^', '2022-05-31 15:14:44'),
(27, 'Chevallier', 'Denis', 'xdenis@gmail.com', '{ASxF^5[Qp,llAJGtZT@', '2022-05-31 15:14:44'),
(28, 'Benard', 'Édith', 'abarthelemy@vincent.fr', 'SJ>*O\"|?d', '2022-05-31 15:14:44'),
(29, 'Blanchard', 'Christelle', 'fouquet.noemi@ruiz.fr', ';NwL{7', '2022-05-31 15:14:44'),
(30, 'Lamy', 'Astrid', 'pasquier.edith@sanchez.com', '*r4E5+6&:C>owQl', '2022-05-31 15:14:44'),
(31, 'Andre', 'Claire', 'legoff.brigitte@tele2.fr', 'a]v|FH$q87U.\'4~6L', '2022-05-31 15:14:44'),
(32, 'Pasquier', 'Valentine', 'lefebvre.juliette@ramos.fr', '2:\\iW+^3&g?z0Ue#hX5S', '2022-05-31 15:14:44'),
(33, 'Fabre', 'Margaud', 'lucas.guillet@yahoo.fr', '&5TDj3[Wt', '2022-05-31 15:14:44'),
(34, 'Da Silva', 'Céline', 'claude.guillot@tele2.fr', 'W-%\".BPJ2', '2022-05-31 15:14:44'),
(35, 'Gaillard', 'Hortense', 'gilbert.dupuis@free.fr', '=zU>dFJXy{qUIn00:[&M', '2022-05-31 15:14:44'),
(36, 'Goncalves', 'Odette', 'zacharie.grenier@lefort.com', '\\cpm0rw', '2022-05-31 15:14:44'),
(37, 'Vallet', 'Patrick', 'ldidier@sfr.fr', 'mGQ[g00~m)EcwH0hD\\', '2022-05-31 15:14:44'),
(38, 'Arnaud', 'Jacques', 'ybourdon@reynaud.net', '\\.0i&h)&$H:m', '2022-05-31 15:14:44'),
(39, 'Paul', 'Alfred', 'nmartin@dbmail.com', ',fqd\')ib,\\Zb.Il2PM:8', '2022-05-31 15:14:44'),
(40, 'Vallee', 'René', 'marguerite28@club-internet.fr', 'c1<O{hH4~]', '2022-05-31 15:14:44'),
(41, 'Lecomte', 'Zacharie', 'arthur.gauthier@noos.fr', '$:BwcZZ}6?L_]iS&Cat$', '2022-05-31 15:14:44'),
(42, 'Verdier', 'Lorraine', 'bonnin.emmanuel@sfr.fr', '6=Mr;TNWv', '2022-05-31 15:14:44'),
(43, 'Colas', 'Grégoire', 'qdevaux@dbmail.com', ')%8Tn%u+Apej48\"X^', '2022-05-31 15:14:44'),
(44, 'Albert', 'Margot', 'christophe.lopez@yahoo.fr', 'o}pIW\"V8Fy,3', '2022-05-31 15:14:44'),
(45, 'Julien', 'Clémence', 'christiane94@orange.fr', 'Zs=jmY@;@1J6&,D[?P9t', '2022-05-31 15:14:44'),
(46, 'Hardy', 'Paulette', 'rhumbert@sfr.fr', 'fgx=x8[->Hswzbs<', '2022-05-31 15:14:44'),
(47, 'Maillet', 'Sébastien', 'elise.lebon@toussaint.fr', 'RTUu9N]%zR/CcseMRl^', '2022-05-31 15:14:44'),
(48, 'Bruneau', 'Jean', 'adrien99@gmail.com', '8/)s[f.bM=BwuvKw\'', '2022-05-31 15:14:44'),
(49, 'Mathieu', 'Émile', 'clemence52@tele2.fr', 'c={!X`C', '2022-05-31 15:14:44'),
(50, 'Ferreira', 'Audrey', 'dumas.timothee@guyot.fr', '1WbaC7l<((y', '2022-05-31 15:14:44'),
(51, 'Mithridate', 'Mathieu', 'mathieu.mith@laposte.net', '1234', '2022-06-08 11:33:00'),
(52, 'Mithridate', 'Mathieu', 'mathieu.mith@laposte.net', '1234', '2022-06-08 11:33:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66DE6B05D5` (`write_by_id`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`article_id`,`category_id`),
  ADD KEY `IDX_53A4EDAA7294869C` (`article_id`),
  ADD KEY `IDX_53A4EDAA12469DE2` (`category_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E66DE6B05D5` FOREIGN KEY (`write_by_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `FK_53A4EDAA12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_53A4EDAA7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;
