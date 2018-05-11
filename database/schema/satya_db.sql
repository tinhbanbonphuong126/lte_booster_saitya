/*
 Navicat Premium Data Transfer

 Source Server         : Toshiba-localhost
 Source Server Type    : MySQL
 Source Server Version : 100125
 Source Host           : localhost:3306
 Source Schema         : satya_db

 Target Server Type    : MySQL
 Target Server Version : 100125
 File Encoding         : 65001

 Date: 11/05/2018 15:01:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bunjouchis
-- ----------------------------
DROP TABLE IF EXISTS `bunjouchis`;
CREATE TABLE `bunjouchis`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `map_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `document_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `land_area` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ground` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_parcel` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `construction_pay_rate` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `floor_area_ratio` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `usage_area` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `drainage` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dealing_status` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `school_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `station_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `status` decimal(1, 0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bunjouchis
-- ----------------------------
INSERT INTO `bunjouchis` VALUES (1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2018-05-11 06:56:27', '2018-05-11 06:56:39', '2018-05-11 06:56:39');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_05_08_195309_create_bunjouchis_table', 1);
INSERT INTO `migrations` VALUES (4, '2018_05_08_195422_create_prices_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_05_08_195505_create_stations_table', 1);
INSERT INTO `migrations` VALUES (6, '2018_05_08_195535_create_schools_table', 1);
INSERT INTO `migrations` VALUES (7, '2018_05_08_195618_create_routes_table', 1);
INSERT INTO `migrations` VALUES (8, '2018_05_08_195646_create_regions_table', 1);
INSERT INTO `migrations` VALUES (17, '2018_05_09_182734_create_bunjouchis_table', 2);
INSERT INTO `migrations` VALUES (18, '2018_05_09_182734_create_password_resets_table', 2);
INSERT INTO `migrations` VALUES (19, '2018_05_09_182734_create_prices_table', 2);
INSERT INTO `migrations` VALUES (20, '2018_05_09_182734_create_regions_table', 2);
INSERT INTO `migrations` VALUES (21, '2018_05_09_182734_create_routes_table', 2);
INSERT INTO `migrations` VALUES (22, '2018_05_09_182734_create_schools_table', 2);
INSERT INTO `migrations` VALUES (23, '2018_05_09_182734_create_stations_table', 2);
INSERT INTO `migrations` VALUES (24, '2018_05_09_182734_create_users_table', 2);
INSERT INTO `migrations` VALUES (25, '2018_05_09_190908_create_bunjouchis_table', 0);
INSERT INTO `migrations` VALUES (26, '2018_05_09_190908_create_password_resets_table', 0);
INSERT INTO `migrations` VALUES (27, '2018_05_09_190908_create_prices_table', 0);
INSERT INTO `migrations` VALUES (28, '2018_05_09_190908_create_regions_table', 0);
INSERT INTO `migrations` VALUES (29, '2018_05_09_190908_create_routes_table', 0);
INSERT INTO `migrations` VALUES (30, '2018_05_09_190908_create_schools_table', 0);
INSERT INTO `migrations` VALUES (31, '2018_05_09_190908_create_stations_table', 0);
INSERT INTO `migrations` VALUES (32, '2018_05_09_190908_create_users_table', 0);
INSERT INTO `migrations` VALUES (33, '2018_05_09_190910_add_foreign_keys_to_schools_table', 0);
INSERT INTO `migrations` VALUES (34, '2018_05_09_190910_add_foreign_keys_to_stations_table', 0);
INSERT INTO `migrations` VALUES (35, '2018_05_09_191538_create_bunjouchis_table', 0);
INSERT INTO `migrations` VALUES (36, '2018_05_09_191538_create_password_resets_table', 0);
INSERT INTO `migrations` VALUES (37, '2018_05_09_191538_create_prices_table', 0);
INSERT INTO `migrations` VALUES (38, '2018_05_09_191538_create_regions_table', 0);
INSERT INTO `migrations` VALUES (39, '2018_05_09_191538_create_routes_table', 0);
INSERT INTO `migrations` VALUES (40, '2018_05_09_191538_create_schools_table', 0);
INSERT INTO `migrations` VALUES (41, '2018_05_09_191538_create_stations_table', 0);
INSERT INTO `migrations` VALUES (42, '2018_05_09_191538_create_users_table', 0);
INSERT INTO `migrations` VALUES (51, '2018_05_09_191639_create_bunjouchis_table', 3);
INSERT INTO `migrations` VALUES (52, '2018_05_09_191639_create_password_resets_table', 3);
INSERT INTO `migrations` VALUES (53, '2018_05_09_191639_create_prices_table', 3);
INSERT INTO `migrations` VALUES (54, '2018_05_09_191639_create_regions_table', 3);
INSERT INTO `migrations` VALUES (55, '2018_05_09_191639_create_routes_table', 3);
INSERT INTO `migrations` VALUES (56, '2018_05_09_191639_create_schools_table', 3);
INSERT INTO `migrations` VALUES (57, '2018_05_09_191639_create_stations_table', 3);
INSERT INTO `migrations` VALUES (58, '2018_05_09_191639_create_users_table', 3);
INSERT INTO `migrations` VALUES (59, '2018_05_11_000752_create_prices_table', 0);
INSERT INTO `migrations` VALUES (60, '2018_05_11_001048_create_prices_table', 0);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for prices
-- ----------------------------
DROP TABLE IF EXISTS `prices`;
CREATE TABLE `prices`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bunjouchi_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `bangou` decimal(2, 0) UNSIGNED NULL DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for regions
-- ----------------------------
DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `regions_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of regions
-- ----------------------------
INSERT INTO `regions` VALUES (1, '東かがわ市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (2, '三木町', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (3, 'さぬき市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (4, '高松市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (5, '坂出市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (6, '宇多津町', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (7, '綾川町', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (8, '丸亀市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (9, '多度津町', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (10, '琴平町', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (11, 'まんのう町', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (12, '善通寺市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (13, '三豊市', '', NULL, NULL, NULL);
INSERT INTO `regions` VALUES (14, '観音寺市', '', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for routes
-- ----------------------------
DROP TABLE IF EXISTS `routes`;
CREATE TABLE `routes`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `route` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `routes_route_unique`(`route`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of routes
-- ----------------------------
INSERT INTO `routes` VALUES (1, '予讃線', NULL, NULL, NULL);
INSERT INTO `routes` VALUES (2, '土讃線', NULL, NULL, NULL);
INSERT INTO `routes` VALUES (3, '高徳線', NULL, NULL, NULL);
INSERT INTO `routes` VALUES (4, '琴電（琴平線）', NULL, NULL, NULL);
INSERT INTO `routes` VALUES (5, '琴電（長尾線）', NULL, NULL, NULL);
INSERT INTO `routes` VALUES (6, '琴電（志度線）', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for schools
-- ----------------------------
DROP TABLE IF EXISTS `schools`;
CREATE TABLE `schools`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_school_region`(`region_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 74 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of schools
-- ----------------------------
INSERT INTO `schools` VALUES (1, '引田中学校', 1, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (2, '白鳥中学校', 1, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (3, '大川中学校', 1, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (4, '三木中学校', 2, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (5, 'さぬき南中学校', 3, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (6, '志度中学校', 3, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (7, '長尾中学校', 3, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (8, '高松北中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (9, '桜町中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (10, '紫雲中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (11, '紫雲中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (12, '玉藻中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (13, '高松第一中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (14, '鶴尾中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (15, '屋島中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (16, '協和中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (17, '龍雲中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (18, '勝賀中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (19, '一宮中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (20, '香東中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (21, '下笠居中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (22, '山田中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (23, '太田中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (24, '古高松中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (25, '木太中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (26, '塩江中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (27, '庵治中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (28, '牟礼中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (29, '香川第一中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (30, '香南中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (31, '国分寺中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (32, '香川大学教育学部附属高松中学校', 4, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (33, '坂出中学校', 5, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (34, '東部中学校', 5, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (35, '白峰中学校', 5, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (36, '瀬居中学校', 5, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (37, '香川大学教育学部附属坂出中学校', 5, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (38, '宇多津中学校', 6, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (39, '綾上中学校', 7, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (40, '綾南中学校', 7, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (41, '東中学校', 8, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (42, '西中学校', 8, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (43, '南中学校', 8, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (44, '綾歌中学校', 8, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (45, '飯山中学校', 8, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (46, '多度津中学校', 9, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (47, '琴平中学校', 10, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (58, '満濃中学校', 11, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (59, '西中学校', 12, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (60, '東中学校', 12, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (61, '高瀬中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (62, '三野津中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (63, '豊中中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (64, '詫間中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (65, '仁尾中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (66, '和光中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (67, '三豊市観音寺市学校組合立 三豊中学校', 13, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (68, '観音寺中学校', 14, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (69, '中部中学校', 14, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (70, '大野原中学校', 14, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (71, '豊浜中学校', 14, NULL, NULL, NULL);
INSERT INTO `schools` VALUES (72, 'Hello world', 11, '2018-05-09 19:29:44', '2018-05-09 19:30:02', '2018-05-09 19:30:02');
INSERT INTO `schools` VALUES (73, 'sdfgsfdgsdfg', 14, '2018-05-09 19:43:10', '2018-05-09 19:44:28', '2018-05-09 19:44:28');

-- ----------------------------
-- Table structure for stations
-- ----------------------------
DROP TABLE IF EXISTS `stations`;
CREATE TABLE `stations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `route_id`(`route_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of stations
-- ----------------------------
INSERT INTO `stations` VALUES (1, '高松', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (2, '香西', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (3, '鬼無', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (4, '端岡', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (5, '国分', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (6, '坂出', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (7, '宇多津', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (8, '丸亀', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (9, '多度津', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (10, '詫間', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (11, '高瀬', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (12, '観音寺', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (13, '豊浜', 1, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (14, '善通寺', 2, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (15, '琴平', 2, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (16, '栗林', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (17, '木太町', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (18, '屋島', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (19, '讃岐牟礼', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (20, '志度', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (21, 'オレンジタウン', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (22, '三本松', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (23, '讃岐白鳥', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (24, '引田', 3, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (25, '瓦町', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (26, '仏生山', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (27, '円座', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (28, '岡本', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (29, '陶', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (30, '滝宮', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (31, '岡田', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (32, '琴電琴平', 4, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (33, '元山', 5, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (34, '高田', 5, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (35, '長尾', 5, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (36, '琴電屋島', 6, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (37, '八栗', 6, NULL, NULL, NULL);
INSERT INTO `stations` VALUES (38, '琴電志度', 6, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'phamque.adnetplus@gmail.com', '$2y$10$lb8I37KHL5foZuVXwEKgs.NZjkWzxzrKsP8KK7z42m8skMNFyrzYG', 'WEwJRBA5FI', '2018-05-09 19:17:10', '2018-05-09 19:17:10', NULL);

SET FOREIGN_KEY_CHECKS = 1;
