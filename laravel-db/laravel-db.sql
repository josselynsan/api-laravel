/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.4.11-MariaDB : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `laravel`;

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `articles` */

LOCK TABLES `articles` WRITE;

insert  into `articles`(`id`,`title`,`body`,`created_at`,`updated_at`) values (1,'Rerum quo enim et veniam ullam aut.','Omnis officiis eum dolor iusto hic facere qui. Et minus ex vel quod quia nam. Quod veritatis dolorum asperiores facilis repellat eius voluptatibus. Amet ipsam temporibus iusto est soluta ab quia.','2021-09-16 01:12:21','2021-09-16 01:12:21'),(2,'Sint eum nobis eaque eius.','Voluptatem rerum esse repellendus sed fugit. Officiis pariatur dolorum est magni doloribus assumenda. Sapiente tenetur consequatur sit ratione. Ducimus tenetur quis ut illum facere facere.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(3,'Sit dicta aspernatur sed quia nemo.','Consequatur architecto distinctio architecto amet qui odio architecto. Quidem quas eum repellendus qui maiores velit hic. Doloremque molestias eius et ipsa temporibus maiores officiis.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(4,'Rerum qui nostrum doloremque voluptatem.','Qui placeat consequatur vitae. Nisi quia aut rerum qui. Deleniti vitae aliquid quia nobis inventore eos iure. Dolores explicabo molestias dolores corporis nobis ut nihil doloribus.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(5,'Laudantium quos omnis nemo.','Est sequi consequatur animi maiores consequatur. Et nesciunt qui soluta non modi est. Voluptatem distinctio dicta et autem.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(6,'Aut quam sapiente quod.','Quidem autem non quia blanditiis numquam laudantium est eos. Aliquid illum consequatur fugit nihil qui iusto et. Maxime esse voluptate vel perferendis. Consequatur fugiat in impedit consequatur consequuntur commodi omnis possimus.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(7,'Consequatur provident dolores et et aut facere excepturi.','Dolores qui deserunt tempora. Dolorem pariatur aut voluptates. Accusamus omnis vel debitis sed quia quasi tempora.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(8,'Reprehenderit fugiat quia doloremque quia pariatur et.','Vero omnis non ex quia dignissimos unde sunt sint. Dolore ipsum ut quo et. Debitis nesciunt et quo aliquid est quidem.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(9,'Non iste et est ut commodi tempora porro.','Error optio dolor eius ea architecto consectetur. Hic dolorem eum amet voluptatem reprehenderit tenetur. Nam at autem facere odio vel. A laboriosam eius quaerat libero illum officia ea.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(10,'Officiis eum dolorem amet repellat aut.','Veritatis pariatur nihil mollitia pariatur dolor esse. Ipsam perspiciatis est tempore placeat quasi nulla in.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(11,'Ipsa eum earum quisquam laudantium aut sed.','Ut mollitia quia asperiores modi excepturi corporis distinctio aliquid. Eaque quia cum saepe similique. Vero amet dignissimos magni atque aut. Fugiat quaerat minus qui accusamus maiores quisquam.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(12,'Vitae similique possimus omnis quaerat laudantium hic illum culpa.','Voluptates nesciunt libero modi est sit. Quasi sed quia odit laboriosam culpa.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(13,'Iste et maxime est nisi voluptatibus molestiae eligendi error.','Est sapiente voluptas et et assumenda aut possimus. Provident rerum est consequatur. Expedita eveniet blanditiis excepturi harum et magnam. Quae est illum velit dolores suscipit aut.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(14,'Ducimus magnam doloribus et ab.','Sed ducimus ipsam qui doloremque quis quaerat consequuntur. Corporis vel minima ipsa atque. Sit voluptas sunt ratione. Cum a maxime perspiciatis enim.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(15,'Laboriosam dolor et nesciunt sit et.','Nemo est aperiam voluptatem consectetur et quis saepe. Vitae ducimus harum beatae. Vel non culpa quasi odit explicabo tempore. Cum ullam ut reprehenderit temporibus impedit ab illo.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(16,'Explicabo voluptatum corrupti quia aspernatur et perferendis.','Deleniti est porro explicabo quas quia eos repudiandae. Dolorem maxime neque non maiores. Asperiores omnis officia asperiores suscipit. Voluptas praesentium voluptas ipsum ducimus quia nemo.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(17,'Iure veniam odio repudiandae aliquam.','Consequatur aut at blanditiis tenetur voluptatum earum. Tenetur quia dolorem velit voluptas magnam. Repellendus adipisci maxime possimus aliquam nihil. Sint cupiditate esse sequi ea totam illum.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(18,'Ipsam magnam natus quasi sit est.','Quod ad temporibus officiis delectus vel ab. Nulla sit dolor est quod natus. Magni porro odio aut cumque minima.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(19,'Voluptatem saepe dignissimos tempora consequatur aliquid.','Et molestiae architecto doloribus eum voluptas dolor. Unde et praesentium ut voluptatibus dolorum. Et porro omnis fugit ducimus sit aut minima. Ea voluptas et fuga.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(20,'Dignissimos qui reiciendis omnis corporis voluptas.','Molestiae doloremque et ex. Sapiente ut ab maxime architecto architecto. Est perferendis quam necessitatibus totam nisi est.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(21,'Ut similique esse quod rerum eum.','Explicabo porro nihil minima iusto unde quas illum mollitia. Voluptate qui eaque delectus quia quisquam. Autem ullam minus voluptatem quia vel. Distinctio dignissimos et et.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(22,'Voluptas corrupti neque consequuntur corrupti molestiae.','Aut sit nisi sit vel non. Ut necessitatibus quaerat voluptatem illo pariatur praesentium enim. Rerum maxime occaecati reiciendis ullam maiores. Aut expedita quasi velit commodi qui numquam molestiae. Est tenetur sint ratione harum necessitatibus.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(23,'Vero distinctio aut necessitatibus inventore sed.','Non harum ea expedita odit exercitationem. Qui vel quibusdam et rerum qui ab. Quia vero est voluptas explicabo.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(24,'Quae natus ea tempora eum exercitationem aut ea.','Nemo et qui delectus est et. Et sit aut atque ducimus sed qui. Et consequuntur dolores iure.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(25,'Rerum expedita voluptas consequuntur quidem quo blanditiis reiciendis.','Voluptatum sunt dolores ut voluptatem in quos voluptas expedita. Ipsa in voluptatem sed facilis tempora quo voluptate. Et alias omnis vel sunt et vel impedit. A molestiae sed eum rerum delectus.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(26,'Sint consequatur libero ex voluptatem et consequatur.','Similique quam ut id non. Possimus assumenda harum cupiditate qui dolor expedita. Eligendi laudantium earum sint iste eaque illum quos perspiciatis.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(27,'Saepe excepturi iure qui eos.','Illum earum voluptatem ut omnis. Vel voluptate quidem quas alias. Distinctio ut quod odit nemo.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(28,'Consequatur quos non id explicabo est recusandae modi fuga.','Dolorum et totam enim ea recusandae natus. Unde veritatis sequi cum earum et repellendus. Dolorem illum ut et ut qui sapiente accusamus. Debitis ex sint voluptatem rem magni.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(29,'Tempore voluptatibus dolorum accusantium.','Quae quisquam id facilis. Minus nostrum quisquam voluptatum suscipit blanditiis esse. Explicabo amet distinctio fugiat qui nemo nihil unde. Delectus molestias nemo officia voluptatibus dignissimos quidem.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(30,'Accusantium consequatur culpa quibusdam et odio fugit dolor.','Quae eius quo corporis vel aliquid reprehenderit. Maiores velit eveniet ut molestiae. Eum voluptatibus est eligendi.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(31,'Temporibus repellat aut impedit aut.','Non dolor quibusdam eius quas eligendi a eos. Voluptatem rerum cumque libero magnam fugit. Expedita aut illo adipisci. Est vitae beatae rerum.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(32,'Incidunt inventore id sunt velit quia.','Beatae quibusdam voluptas reprehenderit. Nesciunt magnam quaerat et dignissimos. Consequatur cum consequatur cum rerum. Error est corrupti placeat iste sit nesciunt cupiditate voluptate.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(33,'Cupiditate similique ipsum et praesentium adipisci et nulla.','Maxime rerum atque facilis libero et vel non. Odit accusantium id nesciunt voluptatum aut. Distinctio molestiae enim voluptatem enim quaerat. Quis unde tenetur sunt non. Quaerat iste ipsam et.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(34,'Consequatur expedita omnis non dolorem temporibus earum sapiente.','Omnis eos consequatur cumque in et animi. Rem qui vel similique. Expedita reiciendis similique beatae nam.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(35,'Harum sit ea praesentium esse.','Dolore cumque quasi iure aut dicta soluta. Quas expedita ipsum assumenda. Voluptas qui quasi molestiae commodi optio ullam. Quasi culpa voluptatem iste odit.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(36,'Deserunt voluptatibus dolor animi quo provident ea.','Explicabo perspiciatis est atque et minima dolorum. Velit sit quo vero in rerum numquam et. Voluptatem autem et voluptas inventore aperiam architecto temporibus. Consequatur omnis facere laborum est qui amet vel. Dolor inventore ut deserunt natus ut cum.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(37,'Quasi quibusdam libero est qui.','Ex est est non est illum qui ducimus. Repellendus quibusdam omnis a. Nisi est consequuntur dolorem odit voluptatem. Sed molestias molestias recusandae eum magni.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(38,'Totam veritatis explicabo deserunt non cumque et eum quaerat.','Qui voluptatem cumque eaque. Ut autem ea suscipit est. Autem minus maiores et ratione aperiam. Minima voluptate soluta esse quis ipsum enim alias maxime.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(39,'Enim quo animi in esse facilis ut.','Magnam beatae dolor quia amet voluptas. Ea voluptas voluptas illum et. Ipsam quis accusantium repudiandae fuga quis aut.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(40,'Totam asperiores consequatur ut rerum.','Est omnis non non reiciendis fugit laudantium dolor. Voluptate non ad sint. Reprehenderit est sunt sit iure.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(41,'Possimus quis occaecati ea enim omnis.','Minus voluptates aut est sit quidem. Deleniti similique esse voluptate soluta enim. Consequatur quibusdam a quasi. Veniam quo sit voluptas alias.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(42,'Consequatur non quisquam et non rerum.','Voluptas at illum voluptates nihil aut ea laboriosam. Eius molestias est ut aperiam voluptatem. Eaque tempore quisquam ut autem error et culpa est.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(43,'Quidem quam ut velit in hic sed.','Neque numquam incidunt doloribus et. Laboriosam sed eius in ut. Autem qui ipsum laborum optio quia.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(44,'Nesciunt laborum itaque illo qui minus.','Quae sit in saepe consequuntur quibusdam mollitia tempore. Labore omnis neque dolorem exercitationem iure quisquam. Voluptas quia est aspernatur unde modi ut consectetur.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(45,'Non maiores quisquam labore temporibus consequatur.','Sunt omnis quae sunt et cum rem. Ipsam unde fugit eos laudantium. Cupiditate sed similique illum quae. Quibusdam earum debitis in necessitatibus quam perspiciatis.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(46,'Deleniti molestias rerum rerum labore expedita ut cumque.','Aut aut quia illo veritatis id mollitia. Ut nesciunt eligendi explicabo eum molestias perspiciatis dolor. Quas amet a modi vel voluptatem et sed. Dolorem expedita asperiores architecto ea voluptatibus.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(47,'Iusto illum est quod nulla sit.','Qui non impedit nostrum modi. Nihil sed autem ducimus porro. Ut natus in veniam consequatur.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(48,'Ipsam debitis nostrum culpa a tenetur fuga.','Ut repellat et excepturi nihil voluptatibus itaque. Nihil et soluta illum quia officia. Itaque atque voluptatum omnis autem qui est doloribus.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(49,'Quo ut odit voluptas corporis sit et.','Ab architecto laudantium ea. Perferendis eius qui nulla quia sit atque. Modi eligendi facilis in rerum ut.','2021-09-16 01:12:22','2021-09-16 01:12:22'),(50,'Esse sit minus ea esse numquam consequatur cumque.','Vel quaerat qui odio eius. Est rerum iure quisquam non. Perferendis modi dolor sit magni.','2021-09-16 01:12:22','2021-09-16 01:12:22');

UNLOCK TABLES;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

LOCK TABLES `failed_jobs` WRITE;

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_09_16_004535_create_articles_table',1),(6,'2021_09_16_033652_create_usuarios_table',2),(7,'2021_09_16_112258_create_perfils_table',3);

UNLOCK TABLES;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

LOCK TABLES `password_resets` WRITE;

UNLOCK TABLES;

/*Table structure for table `perfils` */

DROP TABLE IF EXISTS `perfils`;

CREATE TABLE `perfils` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `perfils` */

LOCK TABLES `perfils` WRITE;

insert  into `perfils`(`id`,`nombre`,`created_at`,`updated_at`) values (1,'ADMINISTRADOR',NULL,NULL),(2,'BASICO',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

LOCK TABLES `personal_access_tokens` WRITE;

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Admin','admin@test.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(2,'Katlynn Weimann','flavio.bartell@mann.org',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(3,'Jaylan Dooley','dicki.marquise@yahoo.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(4,'Raheem Windler II','edmond.bernier@schamberger.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(5,'Mariela Towne PhD','desiree.deckow@hotmail.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(6,'Dr. Randi Schmeler','brandt68@collins.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(7,'Dr. Hector Botsford','vkuhn@hotmail.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(8,'Mrs. Dessie Roob','eusebio.sanford@gmail.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(9,'Prof. Gustave Terry V','maegan75@hotmail.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(10,'Mr. Amari Gottlieb I','maddison.adams@heidenreich.com',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01'),(11,'Mrs. Sydnee Kessler MD','williamson.raphael@botsford.net',NULL,'12345',NULL,'2021-09-16 01:28:01','2021-09-16 01:28:01');

UNLOCK TABLES;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `usuarios` */

LOCK TABLES `usuarios` WRITE;

insert  into `usuarios`(`id`,`email`,`clave`,`role`,`created_at`,`updated_at`) values (2,'josselynsanchez2016@gmail.com','12345',2,'2021-09-16 07:48:46','2021-09-16 07:48:46'),(3,'angelica_castiblanco@yahoo.com12345','12345',1,'2021-09-16 14:08:56','2021-09-17 00:31:55'),(4,'josselynsanchez@yahoo.es','12345',1,'2021-09-16 14:20:15','2021-09-16 14:20:15'),(5,'prueba@hmail.com','12345',2,'2021-09-17 00:33:56','2021-09-17 00:33:56');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
