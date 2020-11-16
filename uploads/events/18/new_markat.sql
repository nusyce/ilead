/*
 Navicat MySQL Data Transfer

 Source Server         : desto
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : new_markat

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 17/09/2020 09:55:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mar_activity_log
-- ----------------------------
DROP TABLE IF EXISTS `mar_activity_log`;
CREATE TABLE `mar_activity_log`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime(0) NOT NULL,
  `staffid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `staffid`(`staffid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 789 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_activity_log
-- ----------------------------
INSERT INTO `mar_activity_log` VALUES (1, 'New Role Added [ID: 2.CEO]', '2020-04-30 16:02:17', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (2, 'Role Updated [ID: 2, Name: CEO]', '2020-04-30 16:05:16', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (3, 'Non Existing User Tried to Login [Email: admin@gmail.com, Is Staff Member: No, IP: 78.94.168.21]', '2020-04-30 16:29:03', NULL);
INSERT INTO `mar_activity_log` VALUES (4, 'Non Existing User Tried to Login [Email: admin@gmail.com, Is Staff Member: No, IP: 78.94.168.21]', '2020-04-30 16:30:06', NULL);
INSERT INTO `mar_activity_log` VALUES (5, 'Non Existing User Tried to Login [Email: admin@gmail.com, Is Staff Member: No, IP: 78.94.168.21]', '2020-04-30 16:30:14', NULL);
INSERT INTO `mar_activity_log` VALUES (6, 'Staff Member Updated [ID: 1, Sascha FrÃ¼hling]', '2020-04-30 17:36:56', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (7, 'New Staff Member Added [ID: 2, Nusyce Tapigue]', '2020-04-30 17:38:42', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (8, 'New Customer Group Created [ID:1, Name:Auftraggeber]', '2020-04-30 18:23:17', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (9, 'New Customer Group Created [ID:2, Name:Betreuer]', '2020-04-30 18:23:32', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (10, 'New Customer Group Created [ID:3, Name:Mieter]', '2020-04-30 18:23:42', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (11, 'New Client Created [ID: 1, From Staff: 1]', '2020-04-30 18:24:32', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (12, 'Customer Status Changed [ID: 1 Status(Active/Inactive): 0]', '2020-04-30 18:41:05', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (13, 'Customer Status Changed [ID: 1 Status(Active/Inactive): 1]', '2020-04-30 18:41:06', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (14, 'Role Updated [ID: 2, Name: CEO]', '2020-04-30 19:13:44', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (15, 'Role Updated [ID: 2, Name: CEO]', '2020-04-30 19:13:51', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (16, 'New Staff Member Added [ID: 3, CEO Director]', '2020-04-30 19:14:52', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (17, 'Staff Member Updated [ID: 3, CEO Director]', '2020-04-30 19:15:30', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (18, 'New Client Created [ID: 2, From Staff: 1]', '2020-04-30 19:25:57', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (19, 'Client Deleted [ID: 2]', '2020-04-30 19:29:42', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (20, 'Client Deleted [ID: 1]', '2020-04-30 19:29:47', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (21, 'New Client Created [ID: 3, From Staff: 1]', '2020-04-30 19:31:14', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (22, 'Contact Created [ID: 1]', '2020-04-30 19:33:11', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (23, 'Customer Status Changed [ID: 3 Status(Active/Inactive): 0]', '2020-04-30 19:34:19', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (24, 'Non Existing User Tried to Login [Email: markat@gmail.com, Is Staff Member: No, IP: 78.94.168.21]', '2020-04-30 19:43:54', NULL);
INSERT INTO `mar_activity_log` VALUES (25, 'New Project Created [ID: 1]', '2020-04-30 19:49:17', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (26, 'New Task Added [ID:1, Name: Görlitzerstraße 18]', '2020-04-30 19:52:39', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (27, 'Failed Login Attempt [Email: ceo@markart.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-04-30 19:57:14', NULL);
INSERT INTO `mar_activity_log` VALUES (28, 'Tried to access page where don\'t have permission [staff]', '2020-04-30 21:33:30', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (29, 'Tried to access page where don\'t have permission [staff]', '2020-04-30 21:33:58', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (30, 'Role Updated [ID: 2, Name: CEO]', '2020-04-30 21:34:56', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (31, 'Tried to access page where don\'t have permission [staff]', '2020-04-30 21:35:01', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (32, 'Tried to access page where don\'t have permission [staff]', '2020-04-30 21:35:05', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (33, 'Role Updated [ID: 2, Name: CEO]', '2020-04-30 21:35:26', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (34, 'Tried to access page where don\'t have permission [contracts]', '2020-04-30 22:00:12', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (35, 'Tried to access page where don\'t have permission [contracts]', '2020-04-30 22:00:21', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (36, 'Staff Profile Updated [Staff: CEO Director]', '2020-05-01 02:05:12', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (37, 'Staff Profile Updated [Staff: CEO Director]', '2020-05-01 02:11:12', 'CEO Director');
INSERT INTO `mar_activity_log` VALUES (38, 'New wohnungen Added [SD124]', '2020-05-01 11:39:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (39, 'New wohnungen Added [1]', '2020-05-01 17:11:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (40, 'Wohnungen Updated []', '2020-05-01 17:13:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (41, 'New wohnungen Added []', '2020-05-01 17:15:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (42, 'Wohnungen Updated []', '2020-05-01 17:15:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (43, 'Wohnungen Updated []', '2020-05-01 17:16:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (44, 'New wohnungen Added []', '2020-05-01 17:16:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (45, 'New wohnungen Added []', '2020-05-01 17:16:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (46, 'New wohnungen Added []', '2020-05-01 17:17:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (47, 'New wohnungen Added []', '2020-05-01 17:17:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (48, 'New wohnungen Added []', '2020-05-01 17:18:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (49, 'New wohnungen Added []', '2020-05-01 17:19:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (50, 'New wohnungen Added []', '2020-05-01 17:19:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (51, 'New wohnungen Added []', '2020-05-01 17:20:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (52, 'New wohnungen Added []', '2020-05-01 17:20:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (53, 'Wohnungen Updated []', '2020-05-01 17:20:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (54, 'Wohnungen Updated []', '2020-05-01 17:21:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (55, 'Customer Status Changed [ID: 3 Status(Active/Inactive): 0]', '2020-05-01 23:24:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (56, 'New Client Created [ID: 4, From Staff: 3]', '2020-05-01 23:26:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (57, 'Customer Status Changed [ID: 3 Status(Active/Inactive): 1]', '2020-05-01 23:26:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (58, 'New Client Created [ID: 5, From Staff: 3]', '2020-05-01 23:28:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (59, 'New Client Created [ID: 6, From Staff: 3]', '2020-05-01 23:32:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (60, 'Customer Info Updated [ID: 4]', '2020-05-02 00:03:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (61, 'Client Deleted [ID: 6]', '2020-05-02 00:03:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (62, 'Contact Created [ID: 2]', '2020-05-02 00:06:18', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (63, 'Contact Updated [ID: 1]', '2020-05-02 00:11:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (64, 'Contact Updated [ID: 2]', '2020-05-02 00:11:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (65, 'Contact Updated [ID: 1]', '2020-05-02 00:39:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (66, 'Non Existing User Tried to Login [Email: info@mustermann.de, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-05-02 00:40:10', NULL);
INSERT INTO `mar_activity_log` VALUES (67, 'Non Existing User Tried to Login [Email: info@mustermann.de, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-05-02 00:40:18', NULL);
INSERT INTO `mar_activity_log` VALUES (68, 'Failed Login Attempt [Email: info@mustermann.de, Is Staff Member: No, IP: 78.94.168.21]', '2020-05-02 00:40:58', NULL);
INSERT INTO `mar_activity_log` VALUES (69, 'Wohnungen Deleted [9]', '2020-05-02 15:00:06', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (70, 'Wohnungen Updated []', '2020-05-02 15:00:19', 'Nusyce Tapigue');
INSERT INTO `mar_activity_log` VALUES (71, 'Wohnungen Updated []', '2020-05-02 15:38:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (72, 'Wohnungen Updated []', '2020-05-02 15:43:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (73, 'Wohnungen Updated []', '2020-05-02 15:43:16', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (74, 'Wohnungen Updated []', '2020-05-02 15:43:20', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (75, 'Wohnungen Updated []', '2020-05-02 15:44:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (76, 'New wohnungen Added []', '2020-05-02 16:09:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (77, 'Wohnungen Updated []', '2020-05-02 16:18:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (78, 'Tried to access page where don\'t have permission [settings]', '2020-05-02 16:39:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (79, 'Wohnungen Updated []', '2020-05-02 17:40:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (80, 'New wohnungen Added []', '2020-05-02 17:52:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (81, 'Wohnungen Updated []', '2020-05-02 17:53:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (82, 'Wohnungen Deleted [14]', '2020-05-02 17:53:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (83, 'New mieters Added []', '2020-05-02 19:25:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (84, 'New mieters Added []', '2020-05-02 19:28:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (85, 'New mieters Added []', '2020-05-02 19:30:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (86, 'New mieters Added []', '2020-05-02 19:30:21', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (87, 'New mieters Added []', '2020-05-02 19:36:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (88, 'New mieters Added []', '2020-05-02 19:42:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (89, 'New mieters Added []', '2020-05-02 19:44:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (90, 'New mieters Added []', '2020-05-02 20:19:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (91, 'New mieters Added []', '2020-05-02 20:26:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (92, 'New mieters Added []', '2020-05-02 20:26:21', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (93, 'New mieters Added []', '2020-05-02 20:26:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (94, 'New mieters Added []', '2020-05-02 20:27:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (95, 'New mieters Added []', '2020-05-02 20:53:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (96, 'New mieters Added []', '2020-05-02 20:57:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (97, 'Non Existing User Tried to Login [Email: ceo@gmail.com, Is Staff Member: Yes, IP: 130.180.2.129]', '2020-05-02 22:40:26', NULL);
INSERT INTO `mar_activity_log` VALUES (98, 'New mieters Added []', '2020-05-02 22:57:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (99, 'Mieter Deleted [1]', '2020-05-02 22:58:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (100, 'New mieters Added []', '2020-05-02 22:59:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (101, 'Customer Status Changed [ID: 4 Status(Active/Inactive): 0]', '2020-05-02 23:18:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (102, 'Contact Status Changed [ContactID: 1 Status(Active/Inactive): 0]', '2020-05-02 23:38:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (103, 'New wohnungen Added []', '2020-05-02 23:44:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (104, 'Contact Status Changed [ContactID: 1 Status(Active/Inactive): 1]', '2020-05-02 23:50:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (105, 'Non Existing User Tried to Login [Email: ceo@gmail.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-05-04 00:55:43', NULL);
INSERT INTO `mar_activity_log` VALUES (106, 'New wohnungen Added []', '2020-05-04 18:21:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (107, 'Wohnungen Updated []', '2020-05-04 18:22:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (108, 'Wohnungen Updated []', '2020-05-04 18:28:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (109, 'New wohnungen Added []', '2020-05-05 10:40:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (110, 'New wohnungen Added []', '2020-05-05 22:56:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (111, 'Wohnungen Deleted [16]', '2020-05-05 23:11:02', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (112, 'Contact Created [ID: 3]', '2020-05-07 10:21:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (113, 'New Client Created [ID: 7, From Staff: 3]', '2020-05-07 12:29:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (114, 'Contact Created [ID: 4]', '2020-05-10 15:44:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (115, 'Wohnungen Deleted [17]', '2020-05-11 01:00:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (116, 'Customer Status Changed [ID: 4 Status(Active/Inactive): 1]', '2020-05-11 01:01:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (117, 'Contact Status Changed [ContactID: 1 Status(Active/Inactive): 0]', '2020-05-11 01:06:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (118, 'New Client Created [ID: 8, From Staff: 3]', '2020-05-11 01:11:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (119, 'Staff Member Updated [ID: 2, Nusyce Tapigue]', '2020-05-14 21:04:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (120, 'Staff Member Updated [ID: 2, admin admin11]', '2020-05-14 21:05:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (121, 'Contact Status Changed [ContactID: 1 Status(Active/Inactive): 1]', '2020-05-14 21:20:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (122, 'New wohnungen Added []', '2020-05-14 21:41:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (123, 'Wohnungen Updated []', '2020-05-14 21:44:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (124, 'New wohnungen Added []', '2020-05-14 22:19:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (125, 'Wohnungen Updated []', '2020-05-14 22:21:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (126, 'Wohnungen Updated []', '2020-05-14 22:21:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (127, 'Wohnungen Updated []', '2020-05-14 22:23:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (128, 'Non Existing User Tried to Login [Email: nusyce@gmail.com, Is Staff Member: Yes, IP: 154.72.167.181]', '2020-05-15 07:05:09', NULL);
INSERT INTO `mar_activity_log` VALUES (129, 'Non Existing User Tried to Login [Email: nusyce@gmail.com, Is Staff Member: Yes, IP: 41.202.219.79]', '2020-05-17 11:44:34', NULL);
INSERT INTO `mar_activity_log` VALUES (130, 'Failed Login Attempt [Email: markat@gmail.com, Is Staff Member: Yes, IP: 41.202.219.79]', '2020-05-17 11:46:43', NULL);
INSERT INTO `mar_activity_log` VALUES (131, 'Failed Login Attempt [Email: markat@gmail.com, Is Staff Member: Yes, IP: 41.202.219.79]', '2020-05-17 11:48:52', NULL);
INSERT INTO `mar_activity_log` VALUES (132, 'Failed Login Attempt [Email: markat@gmail.com, Is Staff Member: Yes, IP: 41.202.219.79]', '2020-05-17 11:49:02', NULL);
INSERT INTO `mar_activity_log` VALUES (133, 'Mieter Updated []', '2020-05-20 20:24:25', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (134, 'New wohnungen Added []', '2020-05-21 23:40:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (135, 'Wohnungen Updated []', '2020-05-22 09:00:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (136, 'Mieter Updated []', '2020-05-22 22:34:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (137, 'Mieter Updated []', '2020-05-23 19:05:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (138, 'New Client Created [ID: 9, From Staff: 3]', '2020-05-24 20:34:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (139, 'Contact Created [ID: 5]', '2020-05-24 20:35:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (140, 'Mieter Updated []', '2020-05-24 20:35:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (141, 'Mieter Deleted [682]', '2020-05-24 20:36:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (142, 'Wohnungen Updated []', '2020-05-24 22:25:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (143, 'Customer Status Changed [ID: 8 Status(Active/Inactive): 0]', '2020-05-27 21:47:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (144, 'Customer Status Changed [ID: 8 Status(Active/Inactive): 1]', '2020-05-27 21:47:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (145, 'Customer Status Changed [ID: 20 Status(Active/Inactive): 0]', '2020-05-28 11:19:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (146, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 41.202.207.9]', '2020-05-28 14:17:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (147, 'Contact Updated [ID: 4]', '2020-05-28 14:19:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (148, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 41.202.207.3]', '2020-05-28 16:16:34', NULL);
INSERT INTO `mar_activity_log` VALUES (149, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 130.180.2.129]', '2020-05-28 16:21:35', NULL);
INSERT INTO `mar_activity_log` VALUES (150, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 130.180.2.129]', '2020-05-28 16:21:38', NULL);
INSERT INTO `mar_activity_log` VALUES (151, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 130.180.2.129]', '2020-05-28 16:21:46', NULL);
INSERT INTO `mar_activity_log` VALUES (152, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.3]', '2020-05-28 16:36:26', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (153, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.3]', '2020-05-28 16:36:29', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (154, 'Mieter Updated []', '2020-05-28 20:13:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (155, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.13]', '2020-05-28 20:20:47', NULL);
INSERT INTO `mar_activity_log` VALUES (156, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.13]', '2020-05-28 20:21:04', NULL);
INSERT INTO `mar_activity_log` VALUES (157, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.5]', '2020-05-28 21:16:24', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (158, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 130.180.2.129]', '2020-05-28 22:26:11', NULL);
INSERT INTO `mar_activity_log` VALUES (159, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 130.180.2.129]', '2020-05-28 22:27:08', NULL);
INSERT INTO `mar_activity_log` VALUES (160, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 78.94.168.21]', '2020-05-29 01:23:03', NULL);
INSERT INTO `mar_activity_log` VALUES (161, 'Mieter Deleted [684]', '2020-05-29 01:24:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (162, 'Mieter Deleted [679]', '2020-05-29 01:24:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (163, 'Mieter Deleted [678]', '2020-05-29 01:24:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (164, 'Customer Status Changed [ID: 3 Status(Active/Inactive): 0]', '2020-05-29 01:30:20', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (165, 'Customer Status Changed [ID: 3 Status(Active/Inactive): 1]', '2020-05-29 01:30:22', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (166, 'New mieters Added []', '2020-05-29 01:55:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (167, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.8]', '2020-05-29 09:13:07', NULL);
INSERT INTO `mar_activity_log` VALUES (168, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.8]', '2020-05-29 09:13:30', NULL);
INSERT INTO `mar_activity_log` VALUES (169, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.10]', '2020-05-29 10:53:35', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (170, 'Mieter Updated []', '2020-05-29 12:11:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (171, 'Customer Status Changed [ID: 683 Status(Active/Inactive): 0]', '2020-05-29 12:27:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (172, 'New wohnungen Added []', '2020-05-29 22:16:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (173, 'New wohnungen Added []', '2020-05-29 22:33:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (174, 'Contact Updated [ID: 1]', '2020-05-29 23:35:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (175, 'Non Existing User Tried to Login [Email: ceo@markat.com, Is Staff Member: No, IP: 78.94.168.21]', '2020-05-29 23:58:45', NULL);
INSERT INTO `mar_activity_log` VALUES (176, 'Customer Status Changed [ID: 17 Status(Active/Inactive): 0]', '2020-05-30 07:44:14', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (177, 'Non Existing User Tried to Login [Email: info@mustermann.de, Is Staff Member: Yes, IP: 41.202.207.6]', '2020-05-30 08:24:48', 'Harald Neuling');
INSERT INTO `mar_activity_log` VALUES (178, 'Mieter Updated []', '2020-05-30 09:03:11', 'Harald Neuling');
INSERT INTO `mar_activity_log` VALUES (179, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (180, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (181, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (182, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (183, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (184, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (185, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (186, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (187, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (188, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (189, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (190, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (191, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (192, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (193, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (194, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (195, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (196, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (197, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (198, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (199, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (200, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (201, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (202, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (203, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (204, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (205, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (206, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (207, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (208, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (209, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (210, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (211, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (212, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (213, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (214, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (215, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (216, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (217, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (218, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:09:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (219, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (220, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (221, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (222, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (223, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (224, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (225, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (226, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (227, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (228, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (229, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (230, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (231, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (232, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (233, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (234, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (235, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (236, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (237, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (238, 'Tried to access page where don\'t have permission [settings]', '2020-05-30 11:24:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (239, 'Wohnungen Updated []', '2020-05-31 13:33:21', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (240, 'Wohnungen Deleted [22]', '2020-05-31 16:32:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (241, 'Wohnungen Deleted [21]', '2020-05-31 16:32:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (242, 'Wohnungen Deleted [20]', '2020-05-31 16:32:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (243, 'Wohnungen Deleted [19]', '2020-05-31 16:32:22', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (244, 'Wohnungen Deleted [18]', '2020-05-31 16:32:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (245, 'Wohnungen Deleted [15]', '2020-05-31 16:32:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (246, 'Wohnungen Deleted [13]', '2020-05-31 16:32:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (247, 'Wohnungen Deleted [12]', '2020-05-31 16:32:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (248, 'Wohnungen Deleted [11]', '2020-05-31 16:32:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (249, 'Wohnungen Deleted [10]', '2020-05-31 16:32:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (250, 'Wohnungen Deleted [8]', '2020-05-31 16:32:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (251, 'Wohnungen Deleted [5]', '2020-05-31 16:33:02', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (252, 'Wohnungen Deleted [1]', '2020-05-31 16:33:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (253, 'Wohnungen Deleted [2]', '2020-05-31 16:33:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (254, 'Wohnungen Deleted [3]', '2020-05-31 16:33:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (255, 'Wohnungen Deleted [4]', '2020-05-31 16:33:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (256, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 41.202.207.4]', '2020-06-01 12:25:10', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (257, 'Non Existing User Tried to Login [Email: info@mustermann.de, Is Staff Member: Yes, IP: 41.202.207.4]', '2020-06-01 13:01:22', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (258, 'Mieter Updated [685]', '2020-06-02 20:40:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (259, 'New occupations Added []', '2020-06-03 07:59:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (260, 'Wohnungen Updated []', '2020-06-03 09:23:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (261, 'Wohnungen Updated []', '2020-06-03 09:25:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (262, 'Wohnungen Updated []', '2020-06-03 09:25:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (263, 'Customer Status Changed [ID: 7 Status(Active/Inactive): 0]', '2020-06-03 09:29:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (264, 'Occupations Status Changed [ID: 1 Status(Active/Inactive): 0]', '2020-06-03 10:02:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (265, 'Occupations Status Changed [ID: 1 Status(Active/Inactive): 1]', '2020-06-03 10:02:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (266, 'Occupations Status Changed [ID: 1 Status(Active/Inactive): 0]', '2020-06-03 10:03:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (267, 'Occupations Status Changed [ID: 1 Status(Active/Inactive): 1]', '2020-06-03 10:04:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (268, 'New occupations Added []', '2020-06-03 13:39:00', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (269, 'New occupations Added []', '2020-06-03 13:40:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (270, 'New occupations Added []', '2020-06-03 20:46:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (271, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-06-03 21:12:14', NULL);
INSERT INTO `mar_activity_log` VALUES (272, 'Failed Login Attempt [Email: check@check.de, Is Staff Member: No, IP: 78.94.168.21]', '2020-06-03 21:12:36', NULL);
INSERT INTO `mar_activity_log` VALUES (273, 'New wohnungen Added []', '2020-06-05 06:02:07', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (274, 'Wohnungen Deleted [23]', '2020-06-05 06:03:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (275, 'New wohnungen Added []', '2020-06-06 12:25:30', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (276, 'New mieters Added []', '2020-06-06 12:27:52', 'Dennis Schwarz');
INSERT INTO `mar_activity_log` VALUES (277, 'Client Deleted [ID: 8]', '2020-06-06 12:30:56', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (278, 'Client Deleted [ID: 4]', '2020-06-06 12:31:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (279, 'Client Deleted [ID: 5]', '2020-06-06 12:31:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (280, 'Occupations Status Changed [ID: 1 Status(Active/Inactive): 0]', '2020-06-06 12:33:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (281, 'New Client Created [ID: 10, From Staff: 3]', '2020-06-06 12:37:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (282, 'Contact Created [ID: 6]', '2020-06-06 12:38:22', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (283, 'New mieters Added []', '2020-06-06 12:40:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (284, 'occupations Deleted [1]', '2020-06-06 12:41:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (285, 'New occupations Added []', '2020-06-06 12:42:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (286, 'New occupations Added []', '2020-06-06 12:42:56', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (287, 'New occupations Added []', '2020-06-06 12:43:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (288, 'Client Deleted [ID: 10]', '2020-06-06 12:48:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (289, 'occupations Deleted [7]', '2020-06-06 12:48:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (290, 'occupations Deleted [6]', '2020-06-06 12:48:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (291, 'occupations Deleted [5]', '2020-06-06 12:48:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (292, 'occupations Deleted [4]', '2020-06-06 12:48:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (293, 'occupations Deleted [3]', '2020-06-06 12:48:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (294, 'occupations Deleted [2]', '2020-06-06 12:49:02', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (295, 'New occupations Added []', '2020-06-06 12:49:16', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (296, 'occupations Deleted [8]', '2020-06-06 12:49:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (297, 'Wohnungen Deleted [24]', '2020-06-06 12:49:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (298, 'Wohnungen Deleted [7]', '2020-06-06 12:49:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (299, 'Wohnungen Deleted [6]', '2020-06-06 12:49:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (301, 'Client Deleted [ID: 3]', '2020-06-06 12:50:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (302, 'Client Deleted [ID: 9]', '2020-06-06 12:50:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (303, 'Client Deleted [ID: 7]', '2020-06-06 12:50:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (304, 'Mieter Deleted [687]', '2020-06-06 12:50:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (305, 'Mieter Deleted [686]', '2020-06-06 12:51:00', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (306, 'Mieter Deleted [685]', '2020-06-06 12:51:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (307, 'Mieter Deleted [683]', '2020-06-06 12:51:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (308, 'Mieter Deleted [681]', '2020-06-06 12:51:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (309, 'Mieter Deleted [680]', '2020-06-06 12:51:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (310, 'Mieter Deleted [677]', '2020-06-06 12:51:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (311, 'Mieter Deleted [676]', '2020-06-06 12:51:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (312, 'Mieter Deleted [675]', '2020-06-06 12:51:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (313, 'Mieter Deleted [674]', '2020-06-06 12:51:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (314, 'Mieter Deleted [673]', '2020-06-06 12:51:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (315, 'Mieter Deleted [672]', '2020-06-06 12:51:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (316, 'Mieter Deleted [671]', '2020-06-06 12:51:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (317, 'New Client Created [ID: 11, From Staff: 3]', '2020-06-06 12:59:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (318, 'Contact Created [ID: 7]', '2020-06-06 12:59:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (319, 'New mieters Added []', '2020-06-06 13:01:48', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (320, 'New wohnungen Added []', '2020-06-06 13:04:27', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (321, 'New wohnungen Added []', '2020-06-06 13:09:59', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (322, 'Failed Login Attempt [Email: check@check.de, Is Staff Member: No, IP: 129.0.76.21]', '2020-06-06 13:15:49', NULL);
INSERT INTO `mar_activity_log` VALUES (323, 'Failed Login Attempt [Email: check@check.de, Is Staff Member: No, IP: 129.0.76.21]', '2020-06-06 13:16:02', NULL);
INSERT INTO `mar_activity_log` VALUES (324, 'New occupations Added []', '2020-06-06 13:19:29', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (325, 'New occupations Added []', '2020-06-06 13:37:24', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (326, 'occupations Deleted [9]', '2020-06-06 13:37:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (327, 'occupations Deleted [10]', '2020-06-06 13:37:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (328, 'Wohnungen Deleted [26]', '2020-06-06 13:40:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (329, 'Wohnungen Deleted [25]', '2020-06-06 13:40:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (330, 'New wohnungen Added []', '2020-06-06 13:41:21', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (331, 'New occupations Added []', '2020-06-06 13:41:57', 'tester tester');
INSERT INTO `mar_activity_log` VALUES (332, 'Client Deleted [ID: 11]', '2020-06-06 13:47:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (333, 'Mieter Deleted [1]', '2020-06-06 13:48:20', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (334, 'Wohnungen Deleted [27]', '2020-06-06 13:48:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (335, 'occupations Deleted [11]', '2020-06-06 13:48:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (336, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: No, IP: 130.180.2.129]', '2020-06-06 21:58:51', NULL);
INSERT INTO `mar_activity_log` VALUES (337, 'Non Existing User Tried to Login [Email: check@check.de, Is Staff Member: No, IP: 130.180.2.129]', '2020-06-06 21:59:06', NULL);
INSERT INTO `mar_activity_log` VALUES (338, 'New Client Created [ID: 12, From Staff: 3]', '2020-06-06 22:21:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (339, 'Contact Created [ID: 8]', '2020-06-06 22:23:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (340, 'New wohnungen Added []', '2020-06-06 22:37:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (341, 'New mieters Added []', '2020-06-06 22:44:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (342, 'Mieter Updated [2]', '2020-06-06 22:46:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (343, 'Mieter Updated [2]', '2020-06-06 22:46:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (344, 'New occupations Added []', '2020-06-06 22:51:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (345, 'New occupations Added []', '2020-06-06 22:52:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (346, 'New mieters Added []', '2020-06-06 23:04:25', 'Stefan  Kornow');
INSERT INTO `mar_activity_log` VALUES (347, 'New wohnungen Added []', '2020-06-06 23:13:16', 'Stefan  Kornow');
INSERT INTO `mar_activity_log` VALUES (348, 'Wohnungen Updated []', '2020-06-06 23:13:36', 'Stefan  Kornow');
INSERT INTO `mar_activity_log` VALUES (349, 'New occupations Added []', '2020-06-06 23:16:45', 'Stefan  Kornow');
INSERT INTO `mar_activity_log` VALUES (350, 'New wohnungen Added []', '2020-06-08 12:51:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (351, 'Wohnungen Updated []', '2020-06-08 12:52:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (352, 'Wohnungen Updated []', '2020-06-08 18:52:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (353, 'Wohnungen Updated []', '2020-06-08 18:59:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (354, 'Wohnungen Updated []', '2020-06-08 18:59:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (355, 'Wohnungen Updated []', '2020-06-08 19:00:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (356, 'Wohnungen Updated []', '2020-06-08 19:01:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (357, 'Wohnungen Updated []', '2020-06-08 19:02:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (358, 'Wohnungen Updated []', '2020-06-08 19:02:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (359, 'Wohnungen Updated []', '2020-06-08 19:07:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (360, 'Wohnungen Updated []', '2020-06-08 19:07:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (361, 'Wohnungen Updated []', '2020-06-08 19:11:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (362, 'Wohnungen Updated []', '2020-06-08 19:11:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (363, 'Wohnungen Updated []', '2020-06-08 19:11:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (364, 'Wohnungen Updated []', '2020-06-08 19:14:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (365, 'Wohnungen Updated []', '2020-06-08 19:14:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (366, 'Wohnungen Updated []', '2020-06-08 19:14:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (367, 'Mieter Updated [3]', '2020-06-08 19:19:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (368, 'Mieter Updated [3]', '2020-06-08 19:19:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (369, 'Mieter Updated [3]', '2020-06-08 19:20:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (370, 'Mieter Updated [3]', '2020-06-08 19:20:15', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (371, 'Mieter Updated [3]', '2020-06-08 19:20:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (372, 'Customer Info Updated [ID: 12]', '2020-06-08 22:17:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (373, 'Customer Info Updated [ID: 12]', '2020-06-08 22:17:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (374, 'Wohnungen Updated []', '2020-06-09 02:25:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (375, 'Wohnungen Updated []', '2020-06-09 02:26:00', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (376, 'Wohnungen Updated []', '2020-06-09 02:26:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (377, 'Mieter Updated [3]', '2020-06-09 12:09:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (378, 'New mieters Added []', '2020-06-09 12:28:15', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (379, 'Mieter Deleted [4]', '2020-06-09 12:33:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (380, 'Mieter Updated [2]', '2020-06-09 12:33:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (381, 'Mieter Updated [2]', '2020-06-09 12:34:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (382, 'Mieter Updated [2]', '2020-06-09 14:04:00', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (383, 'Wohnungen Updated []', '2020-06-09 16:33:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (384, 'New lieferanten Added []', '2020-06-09 19:49:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (385, 'New lieferanten Added []', '2020-06-09 19:59:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (386, 'New lieferanten Added []', '2020-06-09 20:01:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (387, 'Wohnungen Updated []', '2020-06-09 20:01:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (388, 'Wohnungen Updated []', '2020-06-09 20:01:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (389, 'Wohnungen Updated []', '2020-06-09 20:02:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (390, 'Wohnungen Updated []', '2020-06-09 20:02:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (391, 'Wohnungen Updated []', '2020-06-09 20:05:11', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (392, 'Wohnungen Deleted [1]', '2020-06-09 20:08:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (393, 'Customer Status Changed [ID: 2 Status(Active/Inactive): 0]', '2020-06-09 20:29:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (394, 'Mieter Updated [2]', '2020-06-10 11:34:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (395, 'Mieter Updated [2]', '2020-06-10 16:48:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (396, 'Mieter Updated [2]', '2020-06-10 17:04:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (397, 'Mieter Updated [2]', '2020-06-10 17:07:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (398, 'Mieter Updated [2]', '2020-06-10 17:15:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (399, 'Mieter Updated [2]', '2020-06-10 17:15:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (400, 'Mieter Updated [2]', '2020-06-10 17:35:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (401, 'Mieter Updated [2]', '2020-06-10 18:28:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (402, 'New occupations Added []', '2020-06-15 16:50:20', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (403, 'New occupations Added []', '2020-06-15 22:44:24', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (404, 'New occupations Added []', '2020-06-15 22:44:31', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (405, 'New occupations Added []', '2020-06-15 22:45:46', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (406, 'New occupations Added []', '2020-06-17 21:01:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (407, 'Contact Created [ID: 9]', '2020-06-18 01:28:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (408, 'Contact Created [ID: 10]', '2020-06-18 11:28:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (409, 'occupations Deleted [17]', '2020-06-21 00:10:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (410, 'occupations Deleted [16]', '2020-06-21 00:10:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (411, 'occupations Deleted [15]', '2020-06-21 00:10:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (412, 'occupations Deleted [14]', '2020-06-21 00:10:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (413, 'occupations Deleted [13]', '2020-06-21 00:10:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (414, 'occupations Deleted [12]', '2020-06-21 00:10:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (415, 'Mieter Deleted [3]', '2020-06-21 00:11:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (416, 'Mieter Deleted [2]', '2020-06-21 00:11:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (417, 'New mieters Added []', '2020-06-23 00:06:54', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (418, 'Mieter Updated [5]', '2020-06-23 00:07:31', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (419, 'New firma Added []', '2020-06-23 00:09:58', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (420, 'New firma Added []', '2020-06-23 00:11:38', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (421, 'New firma Added []', '2020-06-23 00:12:24', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (422, 'Mieter Updated [5]', '2020-06-23 07:23:36', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (423, 'Wohnungen Updated []', '2020-06-23 07:36:04', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (424, 'New ansprechpartner Added []', '2020-06-23 21:02:36', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (425, 'New ansprechpartner Added []', '2020-06-23 21:04:31', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (426, 'New ansprechpartner Added []', '2020-06-23 21:32:28', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (427, 'New occupations Added []', '2020-06-23 21:39:26', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (428, 'occupations Deleted [18]', '2020-06-23 23:41:07', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (429, 'Wohnungen Deleted [28]', '2020-06-23 23:41:23', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (430, 'New mieters Added []', '2020-06-24 18:45:45', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (431, 'New mieters Added []', '2020-06-24 18:45:45', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (432, 'New mieters Added []', '2020-06-24 18:50:10', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (433, 'New mieters Added []', '2020-06-24 18:50:10', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (434, 'New mieters Added []', '2020-06-24 18:51:07', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (435, 'New mieters Added []', '2020-06-24 18:51:47', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (436, 'Mieter Deleted [11]', '2020-06-24 19:07:29', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (437, 'Mieter Deleted [10]', '2020-06-24 19:07:38', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (438, 'Mieter Deleted [9]', '2020-06-24 19:07:47', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (439, 'Mieter Deleted [6]', '2020-06-24 19:07:56', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (440, 'Mieter Deleted [8]', '2020-06-24 19:08:03', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (441, 'Mieter Deleted [7]', '2020-06-24 19:08:33', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (442, 'Mieter Deleted [5]', '2020-06-24 19:08:40', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (443, 'New mieters Added []', '2020-06-24 19:09:10', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (444, 'New mieters Added []', '2020-06-24 19:26:38', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (445, 'Mieter Deleted [13]', '2020-06-29 18:37:17', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (446, 'Mieter Deleted [12]', '2020-06-29 18:37:23', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (447, 'Wohnungen Updated []', '2020-07-03 21:47:51', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (448, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-05 16:48:09', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (449, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-05 16:51:26', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (450, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-05 16:53:49', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (451, 'New Task Added [ID:2, Name: jhkjhjkhkjhjhj]', '2020-07-06 03:12:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (452, 'Task Updated [ID:2, Name: jhkjhjkhkjhjhj]', '2020-07-06 03:23:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (453, 'New Task Added [ID:3, Name: cvcv]', '2020-07-06 17:23:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (454, 'Tried to access page where don\'t have permission [roles]', '2020-07-06 17:48:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (455, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-06 17:50:20', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (456, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-06 17:52:14', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (457, 'Role Updated [ID: 2, Name: CEO]', '2020-07-07 10:54:14', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (458, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-07 10:55:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (459, 'Role Updated [ID: 2, Name: CEO]', '2020-07-07 16:57:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (460, 'Role Updated [ID: 2, Name: CEO]', '2020-07-07 16:58:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (461, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (462, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (463, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (464, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (465, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (466, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (467, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (468, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (469, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (470, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (471, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (472, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (473, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (474, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (475, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (476, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (477, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (478, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (479, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (480, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (481, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (482, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (483, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (484, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (485, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (486, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (487, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (488, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (489, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (490, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (491, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (492, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (493, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (494, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (495, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (496, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (497, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (498, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (499, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (500, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (501, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (502, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (503, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (504, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (505, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (506, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (507, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (508, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (509, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (510, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (511, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (512, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (513, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (514, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (515, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (516, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (517, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (518, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (519, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:58:58', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (520, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (521, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (522, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (523, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (524, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (525, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (526, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (527, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (528, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (529, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (530, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (531, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (532, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (533, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (534, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (535, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:07', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (536, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (537, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (538, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (539, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 16:59:08', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (540, 'New Staff Member Added [ID: 4, sample Mitabeiter]', '2020-07-07 17:57:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (541, 'Tried to access page where don\'t have permission [staff]', '2020-07-07 17:58:10', 'sample Mitabeiter');
INSERT INTO `mar_activity_log` VALUES (542, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 17:58:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (543, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 17:58:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (544, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 17:59:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (545, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 17:59:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (546, 'Staff Member Updated [ID: 3, Martin Katzky]', '2020-07-07 18:00:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (547, 'Staff Member Updated [ID: 4, sample Mitabeiter]', '2020-07-07 18:11:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (548, 'Tried to access page where don\'t have permission [staff]', '2020-07-07 18:11:16', 'sample Mitabeiter');
INSERT INTO `mar_activity_log` VALUES (549, 'Role Updated [ID: 1, Name: Employee]', '2020-07-07 18:14:15', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (550, 'Role Updated [ID: 1, Name: Employee]', '2020-07-07 18:14:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (551, 'Role Updated [ID: 1, Name: Employee]', '2020-07-07 18:16:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (552, 'Role Updated [ID: 1, Name: Employee]', '2020-07-07 18:18:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (553, 'Role Updated [ID: 2, Name: CEO]', '2020-07-07 18:30:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (554, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (555, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (556, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (557, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (558, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (559, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (560, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (561, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (562, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (563, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (564, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (565, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (566, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (567, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:33', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (568, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (569, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (570, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (571, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (572, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (573, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (574, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (575, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (576, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (577, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (578, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (579, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (580, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (581, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (582, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (583, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (584, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (585, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (586, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (587, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (588, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:40', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (589, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (590, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (591, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (592, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (593, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (594, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (595, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (596, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (597, 'Tried to access page where don\'t have permission [roles]', '2020-07-07 18:30:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (598, 'New Task Added [ID:4, Name: sdsqd]', '2020-07-07 19:22:22', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (599, 'Role Updated [ID: 2, Name: CEO]', '2020-07-08 23:18:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (600, 'Role Updated [ID: 2, Name: CEO]', '2020-07-08 23:18:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (601, 'Staff Member Updated [ID: 4, sample Mitabeiter]', '2020-07-09 15:13:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (602, 'Role Updated [ID: 1, Name: Employee]', '2020-07-09 16:55:56', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (603, 'Role Updated [ID: 1, Name: Employee]', '2020-07-09 16:56:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (604, 'New Task Added [ID:5, Name: Check visibility]', '2020-07-09 17:47:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (605, 'Task Updated [ID:2, Name: ebd]', '2020-07-10 00:10:20', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (606, 'New Task Added [ID:6, Name: dsqdqsd]', '2020-07-13 09:55:18', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (607, 'Wohnungen Updated []', '2020-07-13 10:37:39', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (608, 'New Task Added [ID:7, Name: test tacjk]', '2020-07-13 14:19:53', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (609, 'New Task Added [ID:8, Name: Una Testitionell]', '2020-07-13 14:58:34', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (610, 'New Task Added [ID:9, Name: Sinergites]', '2020-07-13 14:59:45', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (611, 'New Task Added [ID:10, Name: Une femme]', '2020-07-13 15:00:19', 'Sascha FrÃ¼hling');
INSERT INTO `mar_activity_log` VALUES (612, 'New lieferanten Added []', '2020-07-13 16:02:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (613, 'Role Updated [ID: 2, Name: CEO]', '2020-07-13 16:05:55', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (614, 'Role Updated [ID: 2, Name: CEO]', '2020-07-13 16:06:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (615, 'Role Updated [ID: 2, Name: CEO]', '2020-07-13 16:06:21', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (616, 'Wohnungen Deleted [2]', '2020-07-13 16:32:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (617, 'Wohnungen Deleted [3]', '2020-07-13 16:32:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (618, 'New lieferanten Added []', '2020-07-13 16:33:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (619, 'Wohnungen Deleted [4]', '2020-07-13 17:21:02', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (620, 'New lieferanten Added []', '2020-07-13 17:22:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (621, 'New mieters Added []', '2020-07-17 15:49:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (622, 'New mieters Added []', '2020-07-17 15:49:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (623, 'New occupations Added []', '2020-07-22 23:50:02', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (624, 'New occupations Added []', '2020-07-22 23:50:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (625, 'New Task Added [ID:11, Name: edfreewetger]', '2020-07-22 23:59:15', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (626, 'Role Updated [ID: 2, Name: CEO]', '2020-07-23 23:34:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (627, 'New cars Added []', '2020-07-24 20:43:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (628, 'New Task Added [ID:13, Name: fsgfgdfgfdgfdg]', '2020-07-24 20:44:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (629, 'Task Updated [ID:2, Name: ebd]', '2020-07-24 21:15:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (630, 'New Task Added [ID:16, Name: Checking create similiar]', '2020-07-25 16:38:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (631, 'New Task Added [ID:20, Name: ggrgrzrrtzzt]', '2020-07-25 17:36:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (632, 'Role Updated [ID: 1, Name: Employee]', '2020-07-27 16:35:28', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (633, 'New Task Added [ID:21, Name: eferwtertetetr]', '2020-07-28 03:08:16', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (634, 'New Task Added [ID:22, Name: etretrete]', '2020-07-28 03:08:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (635, 'occupations Deleted [20]', '2020-07-28 03:41:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (636, 'New occupations Added []', '2020-07-28 03:41:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (637, 'Wohnungen Updated []', '2020-08-01 20:41:32', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (638, 'New wohnungen Added []', '2020-08-03 13:33:16', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (639, 'Task Attachment Deleted [TaskID: 6]', '2020-08-04 13:48:56', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (640, 'Task Updated [ID:13, Name: fsgfgdfgfdgfdg]', '2020-08-04 17:26:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (641, 'Task Attachment Deleted [TaskID: 11]', '2020-08-04 17:43:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (642, 'Task Attachment Deleted [TaskID: 7]', '2020-08-04 17:43:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (643, 'Wohnungen Updated []', '2020-08-05 06:15:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (644, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-08-05 22:22:01', NULL);
INSERT INTO `mar_activity_log` VALUES (645, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-08-05 22:22:14', NULL);
INSERT INTO `mar_activity_log` VALUES (646, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-08-05 22:22:39', NULL);
INSERT INTO `mar_activity_log` VALUES (647, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-08-05 22:23:02', NULL);
INSERT INTO `mar_activity_log` VALUES (648, 'Event Deleted [1]', '2020-08-06 00:44:36', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (649, 'New Task Added [ID:26, Name: dqsdsqdqsd]', '2020-08-06 12:41:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (650, 'Customer Info Updated [ID: 12]', '2020-08-10 01:13:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (651, 'Non Existing User Tried to Login [Email: michel@gmail.com, Is Staff Member: Yes, IP: 157.32.83.4]', '2020-08-11 14:37:46', NULL);
INSERT INTO `mar_activity_log` VALUES (652, 'Non Existing User Tried to Login [Email: michel@gmail.com, Is Staff Member: Yes, IP: 157.32.83.4]', '2020-08-11 14:37:49', NULL);
INSERT INTO `mar_activity_log` VALUES (653, 'occupations Updated []', '2020-08-11 23:15:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (654, 'occupations Updated []', '2020-08-11 23:15:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (655, 'Role Updated [ID: 2, Name: CEO]', '2020-08-13 06:28:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (656, 'New occupations Added []', '2020-08-14 17:19:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (657, 'New occupations Added []', '2020-08-15 02:11:22', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (658, 'New occupations Added []', '2020-08-16 15:25:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (659, 'New occupations Added []', '2020-08-16 15:25:53', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (660, 'New occupations Added []', '2020-08-16 17:50:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (661, 'New occupations Added []', '2020-08-16 17:50:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (662, 'New cars Added []', '2020-08-16 18:16:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (663, 'New occupations Added []', '2020-08-16 19:32:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (664, 'New occupations Added []', '2020-08-17 20:58:04', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (665, 'New occupations Added []', '2020-08-17 21:26:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (666, 'New occupations Added []', '2020-08-17 21:48:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (667, 'New occupations Added []', '2020-08-17 21:53:46', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (668, 'New occupations Added []', '2020-08-17 22:16:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (669, 'New occupations Added []', '2020-08-18 01:04:31', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (670, 'New occupations Added []', '2020-08-18 01:29:12', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (671, 'New occupations Added []', '2020-08-18 02:52:41', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (672, 'occupations Updated []', '2020-08-18 02:55:14', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (673, 'New occupations Added []', '2020-08-18 02:57:03', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (674, 'New occupations Added []', '2020-08-18 02:58:55', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (675, 'Customer Info Updated [ID: 12]', '2020-08-18 08:02:56', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (676, 'New Role Added [ID: 3.asdf]', '2020-08-18 15:20:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (677, 'Role Updated [ID: 3, Name: asdf]', '2020-08-18 15:21:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (678, 'Role Deleted [ID: 3', '2020-08-18 15:22:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (679, 'Tried to access page where don\'t have permission [settings]', '2020-08-18 20:28:43', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (680, 'Tried to access page where don\'t have permission [settings]', '2020-08-18 20:29:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (711, 'New occupations Added []', '2020-08-19 23:03:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (712, 'New occupations Added []', '2020-08-19 23:05:09', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (713, 'New occupations Added []', '2020-08-19 23:08:21', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (714, 'Non Existing User Tried to Login [Email: crm@admin.de, Is Staff Member: Yes, IP: 41.202.219.72]', '2020-08-20 14:36:44', NULL);
INSERT INTO `mar_activity_log` VALUES (715, 'occupations Updated []', '2020-08-21 13:16:09', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (716, 'New occupations Added []', '2020-08-21 13:29:10', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (717, 'occupations Updated []', '2020-08-21 13:30:28', 'Sascha Frühling ');
INSERT INTO `mar_activity_log` VALUES (718, 'Staff Member Updated [ID: 4, sample Mitabeiter]', '2020-08-22 07:08:16', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (719, 'New Task Added [ID:1, Name: vxcvxcv]', '2020-08-22 08:05:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (720, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 46.114.148.209]', '2020-08-22 17:35:37', NULL);
INSERT INTO `mar_activity_log` VALUES (721, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 46.114.148.209]', '2020-08-22 17:36:08', NULL);
INSERT INTO `mar_activity_log` VALUES (722, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 46.114.148.209]', '2020-08-22 17:36:09', NULL);
INSERT INTO `mar_activity_log` VALUES (723, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 46.114.148.209]', '2020-08-22 17:36:09', NULL);
INSERT INTO `mar_activity_log` VALUES (724, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 46.114.148.209]', '2020-08-22 17:36:09', NULL);
INSERT INTO `mar_activity_log` VALUES (725, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 46.114.148.209]', '2020-08-22 17:36:22', NULL);
INSERT INTO `mar_activity_log` VALUES (726, 'Wohnungen Updated [1]', '2020-08-24 13:59:50', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (727, 'Wohnungen Updated [1]', '2020-08-24 14:02:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (728, 'Role Updated [ID: 2, Name: CEO]', '2020-08-24 14:26:17', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (729, 'Role Updated [ID: 2, Name: CEO]', '2020-08-24 14:26:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (730, 'Role Updated [ID: 2, Name: CEO]', '2020-08-24 14:37:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (731, 'Role Updated [ID: 2, Name: CEO]', '2020-08-24 14:37:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (732, 'New Task Added [ID:4, Name: dsfsdf]', '2020-08-24 17:04:42', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (733, 'Occupations Appointment Date Changed [ID: 42 AppointmentDate: 2020-08-13]', '2020-08-24 18:36:29', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (734, 'Role Updated [ID: 2, Name: CEO]', '2020-08-24 21:10:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (735, 'Occupations Appointment Date Changed [ID: 41 AppointmentDate: 2020-08-29]', '2020-08-24 22:23:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (736, 'Occupations Appointment Date Changed [ID: 40 AppointmentDate: 2020-08-30]', '2020-08-24 22:23:57', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (737, 'Occupations Appointment Date Changed [ID: 39 AppointmentDate: 2020-08-14]', '2020-08-24 22:24:00', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (738, 'Role Updated [ID: 2, Name: CEO]', '2020-08-25 00:02:00', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (739, 'Occupations Appointment Date Changed [ID: 41 AppointmentDate: 2020-08-30]', '2020-08-25 01:43:27', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (740, 'Occupations Appointment Date Changed [ID: 41 AppointmentDate: 2020-08-31]', '2020-08-25 01:43:38', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (741, 'Event Deleted [38]', '2020-08-26 04:35:59', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (742, 'New Project Created [ID: 2]', '2020-08-26 12:58:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (743, 'New Task Added [ID:8, Name: l,öölöäööläö]', '2020-08-26 13:00:51', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (744, 'Failed Login Attempt [Email: ceo@markat.com, Is Staff Member: Yes, IP: 78.94.168.21]', '2020-08-26 13:29:35', NULL);
INSERT INTO `mar_activity_log` VALUES (745, 'Event Deleted [45]', '2020-08-26 16:04:19', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (746, 'Event Deleted [44]', '2020-08-26 16:04:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (747, 'Event Deleted [36]', '2020-08-26 16:12:35', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (748, 'Event Deleted [41]', '2020-08-26 16:12:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (749, 'Event Deleted [37]', '2020-08-26 16:14:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (750, 'Event Deleted [9]', '2020-08-26 16:18:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (751, 'Event Deleted [6]', '2020-08-26 16:26:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (752, 'Event Deleted [7]', '2020-08-26 16:26:56', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (753, 'Event Deleted [11]', '2020-08-26 16:54:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (754, 'New occupations Added []', '2020-08-27 20:45:37', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (755, 'New Stock Added []', '2020-08-27 21:30:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (756, 'Staff Member Updated [ID: 4, sample Mitabeiter]', '2020-08-28 00:10:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (757, 'Staff Member Updated [ID: 4, sample Mitabeiter]', '2020-08-28 00:11:05', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (758, 'New Project Created [ID: 3]', '2020-08-28 23:45:21', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (759, 'Event Deleted [48]', '2020-08-29 00:10:48', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (760, 'Event Deleted [46]', '2020-08-29 00:10:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (761, 'Event Deleted [60]', '2020-08-29 00:57:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (762, 'Event Deleted [63]', '2020-08-29 08:45:23', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (763, 'Event Deleted [64]', '2020-08-29 08:46:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (764, 'Event Deleted [65]', '2020-08-29 08:47:49', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (765, 'Event Deleted [66]', '2020-08-29 08:48:52', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (766, 'Event Deleted [67]', '2020-08-29 08:49:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (767, 'Event Deleted [70]', '2020-08-29 08:51:25', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (768, 'Event Deleted [72]', '2020-08-29 08:54:10', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (769, 'Event Deleted [74]', '2020-08-29 08:55:45', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (770, 'Customer Info Updated [ID: 12]', '2020-08-29 18:28:47', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (771, 'Customer Info Updated [ID: 12]', '2020-08-29 18:29:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (772, 'Customer Info Updated [ID: 12]', '2020-08-29 18:30:13', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (773, 'New Project Created [ID: 4]', '2020-08-29 18:48:41', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (774, 'Wohnungen Updated [2]', '2020-09-07 12:14:06', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (775, 'Wohnungen Updated [2]', '2020-09-07 12:14:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (776, 'Wohnungen Updated [2]', '2020-09-07 12:14:54', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (777, 'Wohnungen Updated [1]', '2020-09-07 12:23:24', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (778, 'Wohnungen Updated [1]', '2020-09-07 13:09:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (779, 'New driver Added []', '2020-09-08 13:35:44', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (780, 'Wohnungen Updated []', '2020-09-08 14:22:01', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (781, 'Wohnungen Updated []', '2020-09-08 14:22:26', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (782, 'New cars Added []', '2020-09-08 15:25:34', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (783, 'Wohnungen Updated [2]', '2020-09-08 15:41:03', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (784, 'New Stock Added []', '2020-09-09 11:27:12', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (785, 'Role Updated [ID: 2, Name: CEO]', '2020-09-15 09:56:36', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (786, 'Staff Status Changed [StaffID: 4 - Status(Active/Inactive): 0]', '2020-09-15 15:29:30', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (787, 'Staff Status Changed [StaffID: 4 - Status(Active/Inactive): 1]', '2020-09-15 15:29:31', 'Martin Katzky');
INSERT INTO `mar_activity_log` VALUES (788, 'Staff Member Updated [ID: 4, sample Mitabeiter]', '2020-09-15 15:31:28', 'Martin Katzky');

-- ----------------------------
-- Table structure for mar_ansprechpartner
-- ----------------------------
DROP TABLE IF EXISTS `mar_ansprechpartner`;
CREATE TABLE `mar_ansprechpartner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vorname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `active` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nachname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `position` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `notizen` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_ansprechpartner
-- ----------------------------
INSERT INTO `mar_ansprechpartner` VALUES (2, ' Clement', 1, 12, 'fsdfds', '', 'dsfsdf', '', '', '2020-06-23 21:32:28', '2020-06-23 21:32:28');

-- ----------------------------
-- Table structure for mar_clients
-- ----------------------------
DROP TABLE IF EXISTS `mar_clients`;
CREATE TABLE `mar_clients`  (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `strabe` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hausnummer` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `vat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phonenumber` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `country` int(11) NOT NULL DEFAULT 0,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `zip` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `state` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `website` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `datecreated` datetime(0) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `leadid` int(11) NULL DEFAULT NULL,
  `billing_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_country` int(11) NULL DEFAULT 0,
  `shipping_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `vorname_le` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nachname_le` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `position_le` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email_le` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefon_le` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `company_le` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `notizen_le` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city_le` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state_le` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `zip_le` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `strabe_le` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hausnummer_le` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country_le` int(11) NOT NULL,
  `website_le` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `vat_le` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `shipping_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_country` int(11) NULL DEFAULT 0,
  `longitude` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `latitude` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `default_language` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `default_currency` int(11) NOT NULL DEFAULT 0,
  `show_primary_contact` int(11) NOT NULL DEFAULT 0,
  `stripe_id` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `registration_confirmed` int(11) NOT NULL DEFAULT 1,
  `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addedfrom` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`userid`) USING BTREE,
  INDEX `country`(`country`) USING BTREE,
  INDEX `leadid`(`leadid`) USING BTREE,
  INDEX `company`(`company`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_clients
-- ----------------------------
INSERT INTO `mar_clients` VALUES (12, 'dshfgjkdash jgfhs a', '746', 'Deutsche Marktfirma GmbH', '', '', 83, 'Berlin', '23165', 'Berlin', NULL, 'texte.com', '2020-06-06 22:21:42', 1, NULL, 'dfsdfds', '454', '212', 'fgfhfgh', 12, 'sfsdfsf sdfsdf', '542', ' ', '', '', '', 'nusydfce@fdmfl.cok', '654415415', 'SD', 'dqsdqsd', 'qsdsq15', '5425', '541', 'qsdqs', 'sqd', 0, 'https://itfreakz.bplaced.net/', 'qdsq', '454', '445', 10, NULL, NULL, NULL, 0, 0, NULL, 1, '', 3);

-- ----------------------------
-- Table structure for mar_consents
-- ----------------------------
DROP TABLE IF EXISTS `mar_consents`;
CREATE TABLE `mar_consents`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime(0) NOT NULL,
  `ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contact_id` int(11) NOT NULL DEFAULT 0,
  `lead_id` int(11) NOT NULL DEFAULT 0,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `opt_in_purpose_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `purpose_id` int(11) NOT NULL,
  `staff_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `purpose_id`(`purpose_id`) USING BTREE,
  INDEX `contact_id`(`contact_id`) USING BTREE,
  INDEX `lead_id`(`lead_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_contact_permissions
-- ----------------------------
DROP TABLE IF EXISTS `mar_contact_permissions`;
CREATE TABLE `mar_contact_permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_contacts
-- ----------------------------
DROP TABLE IF EXISTS `mar_contacts`;
CREATE TABLE `mar_contacts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `is_primary` int(11) NOT NULL DEFAULT 1,
  `firstname` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phonenumber` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `datecreated` datetime(0) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `new_pass_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `new_pass_key_requested` datetime(0) NULL DEFAULT NULL,
  `email_verified_at` datetime(0) NULL DEFAULT NULL,
  `email_verification_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email_verification_sent_at` datetime(0) NULL DEFAULT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_login` datetime(0) NULL DEFAULT NULL,
  `last_password_change` datetime(0) NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `profile_image` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `direction` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoice_emails` tinyint(1) NOT NULL DEFAULT 1,
  `estimate_emails` tinyint(1) NOT NULL DEFAULT 1,
  `credit_note_emails` tinyint(1) NOT NULL DEFAULT 1,
  `contract_emails` tinyint(1) NOT NULL DEFAULT 1,
  `task_emails` tinyint(1) NOT NULL DEFAULT 1,
  `project_emails` tinyint(1) NOT NULL DEFAULT 1,
  `ticket_emails` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `userid`(`userid`) USING BTREE,
  INDEX `firstname`(`firstname`) USING BTREE,
  INDEX `lastname`(`lastname`) USING BTREE,
  INDEX `email`(`email`) USING BTREE,
  INDEX `is_primary`(`is_primary`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_contract_renewals
-- ----------------------------
DROP TABLE IF EXISTS `mar_contract_renewals`;
CREATE TABLE `mar_contract_renewals`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contractid` int(11) NOT NULL,
  `old_start_date` date NOT NULL,
  `new_start_date` date NOT NULL,
  `old_end_date` date NULL DEFAULT NULL,
  `new_end_date` date NULL DEFAULT NULL,
  `old_value` decimal(15, 2) NULL DEFAULT NULL,
  `new_value` decimal(15, 2) NULL DEFAULT NULL,
  `date_renewed` datetime(0) NOT NULL,
  `renewed_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `renewed_by_staff_id` int(11) NOT NULL DEFAULT 0,
  `is_on_old_expiry_notified` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_contracts
-- ----------------------------
DROP TABLE IF EXISTS `mar_contracts`;
CREATE TABLE `mar_contracts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `subject` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `client` int(11) NOT NULL,
  `datestart` date NULL DEFAULT NULL,
  `dateend` date NULL DEFAULT NULL,
  `contract_type` int(11) NULL DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `dateadded` datetime(0) NOT NULL,
  `isexpirynotified` int(11) NOT NULL DEFAULT 0,
  `contract_value` decimal(15, 2) NULL DEFAULT NULL,
  `trash` tinyint(1) NULL DEFAULT 0,
  `not_visible_to_client` tinyint(1) NOT NULL DEFAULT 0,
  `hash` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `signed` tinyint(1) NOT NULL DEFAULT 0,
  `signature` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `marked_as_signed` tinyint(1) NOT NULL DEFAULT 0,
  `acceptance_firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_date` datetime(0) NULL DEFAULT NULL,
  `acceptance_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `client`(`client`) USING BTREE,
  INDEX `contract_type`(`contract_type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_countries
-- ----------------------------
DROP TABLE IF EXISTS `mar_countries`;
CREATE TABLE `mar_countries`  (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `short_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `long_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `iso3` char(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `numcode` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `un_member` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `calling_code` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cctld` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`country_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 251 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_countries
-- ----------------------------
INSERT INTO `mar_countries` VALUES (1, 'AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', '004', 'yes', '93', '.af');
INSERT INTO `mar_countries` VALUES (2, 'AX', 'Aland Islands', '&Aring;land Islands', 'ALA', '248', 'no', '358', '.ax');
INSERT INTO `mar_countries` VALUES (3, 'AL', 'Albania', 'Republic of Albania', 'ALB', '008', 'yes', '355', '.al');
INSERT INTO `mar_countries` VALUES (4, 'DZ', 'Algeria', 'People\'s Democratic Republic of Algeria', 'DZA', '012', 'yes', '213', '.dz');
INSERT INTO `mar_countries` VALUES (5, 'AS', 'American Samoa', 'American Samoa', 'ASM', '016', 'no', '1+684', '.as');
INSERT INTO `mar_countries` VALUES (6, 'AD', 'Andorra', 'Principality of Andorra', 'AND', '020', 'yes', '376', '.ad');
INSERT INTO `mar_countries` VALUES (7, 'AO', 'Angola', 'Republic of Angola', 'AGO', '024', 'yes', '244', '.ao');
INSERT INTO `mar_countries` VALUES (8, 'AI', 'Anguilla', 'Anguilla', 'AIA', '660', 'no', '1+264', '.ai');
INSERT INTO `mar_countries` VALUES (9, 'AQ', 'Antarctica', 'Antarctica', 'ATA', '010', 'no', '672', '.aq');
INSERT INTO `mar_countries` VALUES (10, 'AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', '028', 'yes', '1+268', '.ag');
INSERT INTO `mar_countries` VALUES (11, 'AR', 'Argentina', 'Argentine Republic', 'ARG', '032', 'yes', '54', '.ar');
INSERT INTO `mar_countries` VALUES (12, 'AM', 'Armenia', 'Republic of Armenia', 'ARM', '051', 'yes', '374', '.am');
INSERT INTO `mar_countries` VALUES (13, 'AW', 'Aruba', 'Aruba', 'ABW', '533', 'no', '297', '.aw');
INSERT INTO `mar_countries` VALUES (14, 'AU', 'Australia', 'Commonwealth of Australia', 'AUS', '036', 'yes', '61', '.au');
INSERT INTO `mar_countries` VALUES (15, 'AT', 'Austria', 'Republic of Austria', 'AUT', '040', 'yes', '43', '.at');
INSERT INTO `mar_countries` VALUES (16, 'AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', '031', 'yes', '994', '.az');
INSERT INTO `mar_countries` VALUES (17, 'BS', 'Bahamas', 'Commonwealth of The Bahamas', 'BHS', '044', 'yes', '1+242', '.bs');
INSERT INTO `mar_countries` VALUES (18, 'BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', '048', 'yes', '973', '.bh');
INSERT INTO `mar_countries` VALUES (19, 'BD', 'Bangladesh', 'People\'s Republic of Bangladesh', 'BGD', '050', 'yes', '880', '.bd');
INSERT INTO `mar_countries` VALUES (20, 'BB', 'Barbados', 'Barbados', 'BRB', '052', 'yes', '1+246', '.bb');
INSERT INTO `mar_countries` VALUES (21, 'BY', 'Belarus', 'Republic of Belarus', 'BLR', '112', 'yes', '375', '.by');
INSERT INTO `mar_countries` VALUES (22, 'BE', 'Belgium', 'Kingdom of Belgium', 'BEL', '056', 'yes', '32', '.be');
INSERT INTO `mar_countries` VALUES (23, 'BZ', 'Belize', 'Belize', 'BLZ', '084', 'yes', '501', '.bz');
INSERT INTO `mar_countries` VALUES (24, 'BJ', 'Benin', 'Republic of Benin', 'BEN', '204', 'yes', '229', '.bj');
INSERT INTO `mar_countries` VALUES (25, 'BM', 'Bermuda', 'Bermuda Islands', 'BMU', '060', 'no', '1+441', '.bm');
INSERT INTO `mar_countries` VALUES (26, 'BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', '064', 'yes', '975', '.bt');
INSERT INTO `mar_countries` VALUES (27, 'BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', '068', 'yes', '591', '.bo');
INSERT INTO `mar_countries` VALUES (28, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', 'no', '599', '.bq');
INSERT INTO `mar_countries` VALUES (29, 'BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', '070', 'yes', '387', '.ba');
INSERT INTO `mar_countries` VALUES (30, 'BW', 'Botswana', 'Republic of Botswana', 'BWA', '072', 'yes', '267', '.bw');
INSERT INTO `mar_countries` VALUES (31, 'BV', 'Bouvet Island', 'Bouvet Island', 'BVT', '074', 'no', 'NONE', '.bv');
INSERT INTO `mar_countries` VALUES (32, 'BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', '076', 'yes', '55', '.br');
INSERT INTO `mar_countries` VALUES (33, 'IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IOT', '086', 'no', '246', '.io');
INSERT INTO `mar_countries` VALUES (34, 'BN', 'Brunei', 'Brunei Darussalam', 'BRN', '096', 'yes', '673', '.bn');
INSERT INTO `mar_countries` VALUES (35, 'BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', '100', 'yes', '359', '.bg');
INSERT INTO `mar_countries` VALUES (36, 'BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '854', 'yes', '226', '.bf');
INSERT INTO `mar_countries` VALUES (37, 'BI', 'Burundi', 'Republic of Burundi', 'BDI', '108', 'yes', '257', '.bi');
INSERT INTO `mar_countries` VALUES (38, 'KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', '116', 'yes', '855', '.kh');
INSERT INTO `mar_countries` VALUES (39, 'CM', 'Cameroon', 'Republic of Cameroon', 'CMR', '120', 'yes', '237', '.cm');
INSERT INTO `mar_countries` VALUES (40, 'CA', 'Canada', 'Canada', 'CAN', '124', 'yes', '1', '.ca');
INSERT INTO `mar_countries` VALUES (41, 'CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', '132', 'yes', '238', '.cv');
INSERT INTO `mar_countries` VALUES (42, 'KY', 'Cayman Islands', 'The Cayman Islands', 'CYM', '136', 'no', '1+345', '.ky');
INSERT INTO `mar_countries` VALUES (43, 'CF', 'Central African Republic', 'Central African Republic', 'CAF', '140', 'yes', '236', '.cf');
INSERT INTO `mar_countries` VALUES (44, 'TD', 'Chad', 'Republic of Chad', 'TCD', '148', 'yes', '235', '.td');
INSERT INTO `mar_countries` VALUES (45, 'CL', 'Chile', 'Republic of Chile', 'CHL', '152', 'yes', '56', '.cl');
INSERT INTO `mar_countries` VALUES (46, 'CN', 'China', 'People\'s Republic of China', 'CHN', '156', 'yes', '86', '.cn');
INSERT INTO `mar_countries` VALUES (47, 'CX', 'Christmas Island', 'Christmas Island', 'CXR', '162', 'no', '61', '.cx');
INSERT INTO `mar_countries` VALUES (48, 'CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', '166', 'no', '61', '.cc');
INSERT INTO `mar_countries` VALUES (49, 'CO', 'Colombia', 'Republic of Colombia', 'COL', '170', 'yes', '57', '.co');
INSERT INTO `mar_countries` VALUES (50, 'KM', 'Comoros', 'Union of the Comoros', 'COM', '174', 'yes', '269', '.km');
INSERT INTO `mar_countries` VALUES (51, 'CG', 'Congo', 'Republic of the Congo', 'COG', '178', 'yes', '242', '.cg');
INSERT INTO `mar_countries` VALUES (52, 'CK', 'Cook Islands', 'Cook Islands', 'COK', '184', 'some', '682', '.ck');
INSERT INTO `mar_countries` VALUES (53, 'CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', '188', 'yes', '506', '.cr');
INSERT INTO `mar_countries` VALUES (54, 'CI', 'Cote d\'ivoire (Ivory Coast)', 'Republic of C&ocirc;te D\'Ivoire (Ivory Coast)', 'CIV', '384', 'yes', '225', '.ci');
INSERT INTO `mar_countries` VALUES (55, 'HR', 'Croatia', 'Republic of Croatia', 'HRV', '191', 'yes', '385', '.hr');
INSERT INTO `mar_countries` VALUES (56, 'CU', 'Cuba', 'Republic of Cuba', 'CUB', '192', 'yes', '53', '.cu');
INSERT INTO `mar_countries` VALUES (57, 'CW', 'Curacao', 'Cura&ccedil;ao', 'CUW', '531', 'no', '599', '.cw');
INSERT INTO `mar_countries` VALUES (58, 'CY', 'Cyprus', 'Republic of Cyprus', 'CYP', '196', 'yes', '357', '.cy');
INSERT INTO `mar_countries` VALUES (59, 'CZ', 'Czech Republic', 'Czech Republic', 'CZE', '203', 'yes', '420', '.cz');
INSERT INTO `mar_countries` VALUES (60, 'CD', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'COD', '180', 'yes', '243', '.cd');
INSERT INTO `mar_countries` VALUES (61, 'DK', 'Denmark', 'Kingdom of Denmark', 'DNK', '208', 'yes', '45', '.dk');
INSERT INTO `mar_countries` VALUES (62, 'DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', '262', 'yes', '253', '.dj');
INSERT INTO `mar_countries` VALUES (63, 'DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', '212', 'yes', '1+767', '.dm');
INSERT INTO `mar_countries` VALUES (64, 'DO', 'Dominican Republic', 'Dominican Republic', 'DOM', '214', 'yes', '1+809, 8', '.do');
INSERT INTO `mar_countries` VALUES (65, 'EC', 'Ecuador', 'Republic of Ecuador', 'ECU', '218', 'yes', '593', '.ec');
INSERT INTO `mar_countries` VALUES (66, 'EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', '818', 'yes', '20', '.eg');
INSERT INTO `mar_countries` VALUES (67, 'SV', 'El Salvador', 'Republic of El Salvador', 'SLV', '222', 'yes', '503', '.sv');
INSERT INTO `mar_countries` VALUES (68, 'GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', '226', 'yes', '240', '.gq');
INSERT INTO `mar_countries` VALUES (69, 'ER', 'Eritrea', 'State of Eritrea', 'ERI', '232', 'yes', '291', '.er');
INSERT INTO `mar_countries` VALUES (70, 'EE', 'Estonia', 'Republic of Estonia', 'EST', '233', 'yes', '372', '.ee');
INSERT INTO `mar_countries` VALUES (71, 'ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', '231', 'yes', '251', '.et');
INSERT INTO `mar_countries` VALUES (72, 'FK', 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FLK', '238', 'no', '500', '.fk');
INSERT INTO `mar_countries` VALUES (73, 'FO', 'Faroe Islands', 'The Faroe Islands', 'FRO', '234', 'no', '298', '.fo');
INSERT INTO `mar_countries` VALUES (74, 'FJ', 'Fiji', 'Republic of Fiji', 'FJI', '242', 'yes', '679', '.fj');
INSERT INTO `mar_countries` VALUES (75, 'FI', 'Finland', 'Republic of Finland', 'FIN', '246', 'yes', '358', '.fi');
INSERT INTO `mar_countries` VALUES (76, 'FR', 'France', 'French Republic', 'FRA', '250', 'yes', '33', '.fr');
INSERT INTO `mar_countries` VALUES (77, 'GF', 'French Guiana', 'French Guiana', 'GUF', '254', 'no', '594', '.gf');
INSERT INTO `mar_countries` VALUES (78, 'PF', 'French Polynesia', 'French Polynesia', 'PYF', '258', 'no', '689', '.pf');
INSERT INTO `mar_countries` VALUES (79, 'TF', 'French Southern Territories', 'French Southern Territories', 'ATF', '260', 'no', NULL, '.tf');
INSERT INTO `mar_countries` VALUES (80, 'GA', 'Gabon', 'Gabonese Republic', 'GAB', '266', 'yes', '241', '.ga');
INSERT INTO `mar_countries` VALUES (81, 'GM', 'Gambia', 'Republic of The Gambia', 'GMB', '270', 'yes', '220', '.gm');
INSERT INTO `mar_countries` VALUES (82, 'GE', 'Georgia', 'Georgia', 'GEO', '268', 'yes', '995', '.ge');
INSERT INTO `mar_countries` VALUES (83, 'DE', 'Germany', 'Federal Republic of Germany', 'DEU', '276', 'yes', '49', '.de');
INSERT INTO `mar_countries` VALUES (84, 'GH', 'Ghana', 'Republic of Ghana', 'GHA', '288', 'yes', '233', '.gh');
INSERT INTO `mar_countries` VALUES (85, 'GI', 'Gibraltar', 'Gibraltar', 'GIB', '292', 'no', '350', '.gi');
INSERT INTO `mar_countries` VALUES (86, 'GR', 'Greece', 'Hellenic Republic', 'GRC', '300', 'yes', '30', '.gr');
INSERT INTO `mar_countries` VALUES (87, 'GL', 'Greenland', 'Greenland', 'GRL', '304', 'no', '299', '.gl');
INSERT INTO `mar_countries` VALUES (88, 'GD', 'Grenada', 'Grenada', 'GRD', '308', 'yes', '1+473', '.gd');
INSERT INTO `mar_countries` VALUES (89, 'GP', 'Guadaloupe', 'Guadeloupe', 'GLP', '312', 'no', '590', '.gp');
INSERT INTO `mar_countries` VALUES (90, 'GU', 'Guam', 'Guam', 'GUM', '316', 'no', '1+671', '.gu');
INSERT INTO `mar_countries` VALUES (91, 'GT', 'Guatemala', 'Republic of Guatemala', 'GTM', '320', 'yes', '502', '.gt');
INSERT INTO `mar_countries` VALUES (92, 'GG', 'Guernsey', 'Guernsey', 'GGY', '831', 'no', '44', '.gg');
INSERT INTO `mar_countries` VALUES (93, 'GN', 'Guinea', 'Republic of Guinea', 'GIN', '324', 'yes', '224', '.gn');
INSERT INTO `mar_countries` VALUES (94, 'GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', '624', 'yes', '245', '.gw');
INSERT INTO `mar_countries` VALUES (95, 'GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', '328', 'yes', '592', '.gy');
INSERT INTO `mar_countries` VALUES (96, 'HT', 'Haiti', 'Republic of Haiti', 'HTI', '332', 'yes', '509', '.ht');
INSERT INTO `mar_countries` VALUES (97, 'HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', '334', 'no', 'NONE', '.hm');
INSERT INTO `mar_countries` VALUES (98, 'HN', 'Honduras', 'Republic of Honduras', 'HND', '340', 'yes', '504', '.hn');
INSERT INTO `mar_countries` VALUES (99, 'HK', 'Hong Kong', 'Hong Kong', 'HKG', '344', 'no', '852', '.hk');
INSERT INTO `mar_countries` VALUES (100, 'HU', 'Hungary', 'Hungary', 'HUN', '348', 'yes', '36', '.hu');
INSERT INTO `mar_countries` VALUES (101, 'IS', 'Iceland', 'Republic of Iceland', 'ISL', '352', 'yes', '354', '.is');
INSERT INTO `mar_countries` VALUES (102, 'IN', 'India', 'Republic of India', 'IND', '356', 'yes', '91', '.in');
INSERT INTO `mar_countries` VALUES (103, 'ID', 'Indonesia', 'Republic of Indonesia', 'IDN', '360', 'yes', '62', '.id');
INSERT INTO `mar_countries` VALUES (104, 'IR', 'Iran', 'Islamic Republic of Iran', 'IRN', '364', 'yes', '98', '.ir');
INSERT INTO `mar_countries` VALUES (105, 'IQ', 'Iraq', 'Republic of Iraq', 'IRQ', '368', 'yes', '964', '.iq');
INSERT INTO `mar_countries` VALUES (106, 'IE', 'Ireland', 'Ireland', 'IRL', '372', 'yes', '353', '.ie');
INSERT INTO `mar_countries` VALUES (107, 'IM', 'Isle of Man', 'Isle of Man', 'IMN', '833', 'no', '44', '.im');
INSERT INTO `mar_countries` VALUES (108, 'IL', 'Israel', 'State of Israel', 'ISR', '376', 'yes', '972', '.il');
INSERT INTO `mar_countries` VALUES (109, 'IT', 'Italy', 'Italian Republic', 'ITA', '380', 'yes', '39', '.jm');
INSERT INTO `mar_countries` VALUES (110, 'JM', 'Jamaica', 'Jamaica', 'JAM', '388', 'yes', '1+876', '.jm');
INSERT INTO `mar_countries` VALUES (111, 'JP', 'Japan', 'Japan', 'JPN', '392', 'yes', '81', '.jp');
INSERT INTO `mar_countries` VALUES (112, 'JE', 'Jersey', 'The Bailiwick of Jersey', 'JEY', '832', 'no', '44', '.je');
INSERT INTO `mar_countries` VALUES (113, 'JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', '400', 'yes', '962', '.jo');
INSERT INTO `mar_countries` VALUES (114, 'KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', '398', 'yes', '7', '.kz');
INSERT INTO `mar_countries` VALUES (115, 'KE', 'Kenya', 'Republic of Kenya', 'KEN', '404', 'yes', '254', '.ke');
INSERT INTO `mar_countries` VALUES (116, 'KI', 'Kiribati', 'Republic of Kiribati', 'KIR', '296', 'yes', '686', '.ki');
INSERT INTO `mar_countries` VALUES (117, 'XK', 'Kosovo', 'Republic of Kosovo', '---', '---', 'some', '381', '');
INSERT INTO `mar_countries` VALUES (118, 'KW', 'Kuwait', 'State of Kuwait', 'KWT', '414', 'yes', '965', '.kw');
INSERT INTO `mar_countries` VALUES (119, 'KG', 'Kyrgyzstan', 'Kyrgyz Republic', 'KGZ', '417', 'yes', '996', '.kg');
INSERT INTO `mar_countries` VALUES (120, 'LA', 'Laos', 'Lao People\'s Democratic Republic', 'LAO', '418', 'yes', '856', '.la');
INSERT INTO `mar_countries` VALUES (121, 'LV', 'Latvia', 'Republic of Latvia', 'LVA', '428', 'yes', '371', '.lv');
INSERT INTO `mar_countries` VALUES (122, 'LB', 'Lebanon', 'Republic of Lebanon', 'LBN', '422', 'yes', '961', '.lb');
INSERT INTO `mar_countries` VALUES (123, 'LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', '426', 'yes', '266', '.ls');
INSERT INTO `mar_countries` VALUES (124, 'LR', 'Liberia', 'Republic of Liberia', 'LBR', '430', 'yes', '231', '.lr');
INSERT INTO `mar_countries` VALUES (125, 'LY', 'Libya', 'Libya', 'LBY', '434', 'yes', '218', '.ly');
INSERT INTO `mar_countries` VALUES (126, 'LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', '438', 'yes', '423', '.li');
INSERT INTO `mar_countries` VALUES (127, 'LT', 'Lithuania', 'Republic of Lithuania', 'LTU', '440', 'yes', '370', '.lt');
INSERT INTO `mar_countries` VALUES (128, 'LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', '442', 'yes', '352', '.lu');
INSERT INTO `mar_countries` VALUES (129, 'MO', 'Macao', 'The Macao Special Administrative Region', 'MAC', '446', 'no', '853', '.mo');
INSERT INTO `mar_countries` VALUES (130, 'MK', 'North Macedonia', 'Republic of North Macedonia', 'MKD', '807', 'yes', '389', '.mk');
INSERT INTO `mar_countries` VALUES (131, 'MG', 'Madagascar', 'Republic of Madagascar', 'MDG', '450', 'yes', '261', '.mg');
INSERT INTO `mar_countries` VALUES (132, 'MW', 'Malawi', 'Republic of Malawi', 'MWI', '454', 'yes', '265', '.mw');
INSERT INTO `mar_countries` VALUES (133, 'MY', 'Malaysia', 'Malaysia', 'MYS', '458', 'yes', '60', '.my');
INSERT INTO `mar_countries` VALUES (134, 'MV', 'Maldives', 'Republic of Maldives', 'MDV', '462', 'yes', '960', '.mv');
INSERT INTO `mar_countries` VALUES (135, 'ML', 'Mali', 'Republic of Mali', 'MLI', '466', 'yes', '223', '.ml');
INSERT INTO `mar_countries` VALUES (136, 'MT', 'Malta', 'Republic of Malta', 'MLT', '470', 'yes', '356', '.mt');
INSERT INTO `mar_countries` VALUES (137, 'MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', '584', 'yes', '692', '.mh');
INSERT INTO `mar_countries` VALUES (138, 'MQ', 'Martinique', 'Martinique', 'MTQ', '474', 'no', '596', '.mq');
INSERT INTO `mar_countries` VALUES (139, 'MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', '478', 'yes', '222', '.mr');
INSERT INTO `mar_countries` VALUES (140, 'MU', 'Mauritius', 'Republic of Mauritius', 'MUS', '480', 'yes', '230', '.mu');
INSERT INTO `mar_countries` VALUES (141, 'YT', 'Mayotte', 'Mayotte', 'MYT', '175', 'no', '262', '.yt');
INSERT INTO `mar_countries` VALUES (142, 'MX', 'Mexico', 'United Mexican States', 'MEX', '484', 'yes', '52', '.mx');
INSERT INTO `mar_countries` VALUES (143, 'FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', '583', 'yes', '691', '.fm');
INSERT INTO `mar_countries` VALUES (144, 'MD', 'Moldava', 'Republic of Moldova', 'MDA', '498', 'yes', '373', '.md');
INSERT INTO `mar_countries` VALUES (145, 'MC', 'Monaco', 'Principality of Monaco', 'MCO', '492', 'yes', '377', '.mc');
INSERT INTO `mar_countries` VALUES (146, 'MN', 'Mongolia', 'Mongolia', 'MNG', '496', 'yes', '976', '.mn');
INSERT INTO `mar_countries` VALUES (147, 'ME', 'Montenegro', 'Montenegro', 'MNE', '499', 'yes', '382', '.me');
INSERT INTO `mar_countries` VALUES (148, 'MS', 'Montserrat', 'Montserrat', 'MSR', '500', 'no', '1+664', '.ms');
INSERT INTO `mar_countries` VALUES (149, 'MA', 'Morocco', 'Kingdom of Morocco', 'MAR', '504', 'yes', '212', '.ma');
INSERT INTO `mar_countries` VALUES (150, 'MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', '508', 'yes', '258', '.mz');
INSERT INTO `mar_countries` VALUES (151, 'MM', 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MMR', '104', 'yes', '95', '.mm');
INSERT INTO `mar_countries` VALUES (152, 'NA', 'Namibia', 'Republic of Namibia', 'NAM', '516', 'yes', '264', '.na');
INSERT INTO `mar_countries` VALUES (153, 'NR', 'Nauru', 'Republic of Nauru', 'NRU', '520', 'yes', '674', '.nr');
INSERT INTO `mar_countries` VALUES (154, 'NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', '524', 'yes', '977', '.np');
INSERT INTO `mar_countries` VALUES (155, 'NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', '528', 'yes', '31', '.nl');
INSERT INTO `mar_countries` VALUES (156, 'NC', 'New Caledonia', 'New Caledonia', 'NCL', '540', 'no', '687', '.nc');
INSERT INTO `mar_countries` VALUES (157, 'NZ', 'New Zealand', 'New Zealand', 'NZL', '554', 'yes', '64', '.nz');
INSERT INTO `mar_countries` VALUES (158, 'NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', '558', 'yes', '505', '.ni');
INSERT INTO `mar_countries` VALUES (159, 'NE', 'Niger', 'Republic of Niger', 'NER', '562', 'yes', '227', '.ne');
INSERT INTO `mar_countries` VALUES (160, 'NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', '566', 'yes', '234', '.ng');
INSERT INTO `mar_countries` VALUES (161, 'NU', 'Niue', 'Niue', 'NIU', '570', 'some', '683', '.nu');
INSERT INTO `mar_countries` VALUES (162, 'NF', 'Norfolk Island', 'Norfolk Island', 'NFK', '574', 'no', '672', '.nf');
INSERT INTO `mar_countries` VALUES (163, 'KP', 'North Korea', 'Democratic People\'s Republic of Korea', 'PRK', '408', 'yes', '850', '.kp');
INSERT INTO `mar_countries` VALUES (164, 'MP', 'Northern Mariana Islands', 'Northern Mariana Islands', 'MNP', '580', 'no', '1+670', '.mp');
INSERT INTO `mar_countries` VALUES (165, 'NO', 'Norway', 'Kingdom of Norway', 'NOR', '578', 'yes', '47', '.no');
INSERT INTO `mar_countries` VALUES (166, 'OM', 'Oman', 'Sultanate of Oman', 'OMN', '512', 'yes', '968', '.om');
INSERT INTO `mar_countries` VALUES (167, 'PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', '586', 'yes', '92', '.pk');
INSERT INTO `mar_countries` VALUES (168, 'PW', 'Palau', 'Republic of Palau', 'PLW', '585', 'yes', '680', '.pw');
INSERT INTO `mar_countries` VALUES (169, 'PS', 'Palestine', 'State of Palestine (or Occupied Palestinian Territory)', 'PSE', '275', 'some', '970', '.ps');
INSERT INTO `mar_countries` VALUES (170, 'PA', 'Panama', 'Republic of Panama', 'PAN', '591', 'yes', '507', '.pa');
INSERT INTO `mar_countries` VALUES (171, 'PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', '598', 'yes', '675', '.pg');
INSERT INTO `mar_countries` VALUES (172, 'PY', 'Paraguay', 'Republic of Paraguay', 'PRY', '600', 'yes', '595', '.py');
INSERT INTO `mar_countries` VALUES (173, 'PE', 'Peru', 'Republic of Peru', 'PER', '604', 'yes', '51', '.pe');
INSERT INTO `mar_countries` VALUES (174, 'PH', 'Phillipines', 'Republic of the Philippines', 'PHL', '608', 'yes', '63', '.ph');
INSERT INTO `mar_countries` VALUES (175, 'PN', 'Pitcairn', 'Pitcairn', 'PCN', '612', 'no', 'NONE', '.pn');
INSERT INTO `mar_countries` VALUES (176, 'PL', 'Poland', 'Republic of Poland', 'POL', '616', 'yes', '48', '.pl');
INSERT INTO `mar_countries` VALUES (177, 'PT', 'Portugal', 'Portuguese Republic', 'PRT', '620', 'yes', '351', '.pt');
INSERT INTO `mar_countries` VALUES (178, 'PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', '630', 'no', '1+939', '.pr');
INSERT INTO `mar_countries` VALUES (179, 'QA', 'Qatar', 'State of Qatar', 'QAT', '634', 'yes', '974', '.qa');
INSERT INTO `mar_countries` VALUES (180, 'RE', 'Reunion', 'R&eacute;union', 'REU', '638', 'no', '262', '.re');
INSERT INTO `mar_countries` VALUES (181, 'RO', 'Romania', 'Romania', 'ROU', '642', 'yes', '40', '.ro');
INSERT INTO `mar_countries` VALUES (182, 'RU', 'Russia', 'Russian Federation', 'RUS', '643', 'yes', '7', '.ru');
INSERT INTO `mar_countries` VALUES (183, 'RW', 'Rwanda', 'Republic of Rwanda', 'RWA', '646', 'yes', '250', '.rw');
INSERT INTO `mar_countries` VALUES (184, 'BL', 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BLM', '652', 'no', '590', '.bl');
INSERT INTO `mar_countries` VALUES (185, 'SH', 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '654', 'no', '290', '.sh');
INSERT INTO `mar_countries` VALUES (186, 'KN', 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KNA', '659', 'yes', '1+869', '.kn');
INSERT INTO `mar_countries` VALUES (187, 'LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '662', 'yes', '1+758', '.lc');
INSERT INTO `mar_countries` VALUES (188, 'MF', 'Saint Martin', 'Saint Martin', 'MAF', '663', 'no', '590', '.mf');
INSERT INTO `mar_countries` VALUES (189, 'PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', '666', 'no', '508', '.pm');
INSERT INTO `mar_countries` VALUES (190, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '670', 'yes', '1+784', '.vc');
INSERT INTO `mar_countries` VALUES (191, 'WS', 'Samoa', 'Independent State of Samoa', 'WSM', '882', 'yes', '685', '.ws');
INSERT INTO `mar_countries` VALUES (192, 'SM', 'San Marino', 'Republic of San Marino', 'SMR', '674', 'yes', '378', '.sm');
INSERT INTO `mar_countries` VALUES (193, 'ST', 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'STP', '678', 'yes', '239', '.st');
INSERT INTO `mar_countries` VALUES (194, 'SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', '682', 'yes', '966', '.sa');
INSERT INTO `mar_countries` VALUES (195, 'SN', 'Senegal', 'Republic of Senegal', 'SEN', '686', 'yes', '221', '.sn');
INSERT INTO `mar_countries` VALUES (196, 'RS', 'Serbia', 'Republic of Serbia', 'SRB', '688', 'yes', '381', '.rs');
INSERT INTO `mar_countries` VALUES (197, 'SC', 'Seychelles', 'Republic of Seychelles', 'SYC', '690', 'yes', '248', '.sc');
INSERT INTO `mar_countries` VALUES (198, 'SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', '694', 'yes', '232', '.sl');
INSERT INTO `mar_countries` VALUES (199, 'SG', 'Singapore', 'Republic of Singapore', 'SGP', '702', 'yes', '65', '.sg');
INSERT INTO `mar_countries` VALUES (200, 'SX', 'Sint Maarten', 'Sint Maarten', 'SXM', '534', 'no', '1+721', '.sx');
INSERT INTO `mar_countries` VALUES (201, 'SK', 'Slovakia', 'Slovak Republic', 'SVK', '703', 'yes', '421', '.sk');
INSERT INTO `mar_countries` VALUES (202, 'SI', 'Slovenia', 'Republic of Slovenia', 'SVN', '705', 'yes', '386', '.si');
INSERT INTO `mar_countries` VALUES (203, 'SB', 'Solomon Islands', 'Solomon Islands', 'SLB', '090', 'yes', '677', '.sb');
INSERT INTO `mar_countries` VALUES (204, 'SO', 'Somalia', 'Somali Republic', 'SOM', '706', 'yes', '252', '.so');
INSERT INTO `mar_countries` VALUES (205, 'ZA', 'South Africa', 'Republic of South Africa', 'ZAF', '710', 'yes', '27', '.za');
INSERT INTO `mar_countries` VALUES (206, 'GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', '239', 'no', '500', '.gs');
INSERT INTO `mar_countries` VALUES (207, 'KR', 'South Korea', 'Republic of Korea', 'KOR', '410', 'yes', '82', '.kr');
INSERT INTO `mar_countries` VALUES (208, 'SS', 'South Sudan', 'Republic of South Sudan', 'SSD', '728', 'yes', '211', '.ss');
INSERT INTO `mar_countries` VALUES (209, 'ES', 'Spain', 'Kingdom of Spain', 'ESP', '724', 'yes', '34', '.es');
INSERT INTO `mar_countries` VALUES (210, 'LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', '144', 'yes', '94', '.lk');
INSERT INTO `mar_countries` VALUES (211, 'SD', 'Sudan', 'Republic of the Sudan', 'SDN', '729', 'yes', '249', '.sd');
INSERT INTO `mar_countries` VALUES (212, 'SR', 'Suriname', 'Republic of Suriname', 'SUR', '740', 'yes', '597', '.sr');
INSERT INTO `mar_countries` VALUES (213, 'SJ', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJM', '744', 'no', '47', '.sj');
INSERT INTO `mar_countries` VALUES (214, 'SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', '748', 'yes', '268', '.sz');
INSERT INTO `mar_countries` VALUES (215, 'SE', 'Sweden', 'Kingdom of Sweden', 'SWE', '752', 'yes', '46', '.se');
INSERT INTO `mar_countries` VALUES (216, 'CH', 'Switzerland', 'Swiss Confederation', 'CHE', '756', 'yes', '41', '.ch');
INSERT INTO `mar_countries` VALUES (217, 'SY', 'Syria', 'Syrian Arab Republic', 'SYR', '760', 'yes', '963', '.sy');
INSERT INTO `mar_countries` VALUES (218, 'TW', 'Taiwan', 'Republic of China (Taiwan)', 'TWN', '158', 'former', '886', '.tw');
INSERT INTO `mar_countries` VALUES (219, 'TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', '762', 'yes', '992', '.tj');
INSERT INTO `mar_countries` VALUES (220, 'TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', '834', 'yes', '255', '.tz');
INSERT INTO `mar_countries` VALUES (221, 'TH', 'Thailand', 'Kingdom of Thailand', 'THA', '764', 'yes', '66', '.th');
INSERT INTO `mar_countries` VALUES (222, 'TL', 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TLS', '626', 'yes', '670', '.tl');
INSERT INTO `mar_countries` VALUES (223, 'TG', 'Togo', 'Togolese Republic', 'TGO', '768', 'yes', '228', '.tg');
INSERT INTO `mar_countries` VALUES (224, 'TK', 'Tokelau', 'Tokelau', 'TKL', '772', 'no', '690', '.tk');
INSERT INTO `mar_countries` VALUES (225, 'TO', 'Tonga', 'Kingdom of Tonga', 'TON', '776', 'yes', '676', '.to');
INSERT INTO `mar_countries` VALUES (226, 'TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', '780', 'yes', '1+868', '.tt');
INSERT INTO `mar_countries` VALUES (227, 'TN', 'Tunisia', 'Republic of Tunisia', 'TUN', '788', 'yes', '216', '.tn');
INSERT INTO `mar_countries` VALUES (228, 'TR', 'Turkey', 'Republic of Turkey', 'TUR', '792', 'yes', '90', '.tr');
INSERT INTO `mar_countries` VALUES (229, 'TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '795', 'yes', '993', '.tm');
INSERT INTO `mar_countries` VALUES (230, 'TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', '796', 'no', '1+649', '.tc');
INSERT INTO `mar_countries` VALUES (231, 'TV', 'Tuvalu', 'Tuvalu', 'TUV', '798', 'yes', '688', '.tv');
INSERT INTO `mar_countries` VALUES (232, 'UG', 'Uganda', 'Republic of Uganda', 'UGA', '800', 'yes', '256', '.ug');
INSERT INTO `mar_countries` VALUES (233, 'UA', 'Ukraine', 'Ukraine', 'UKR', '804', 'yes', '380', '.ua');
INSERT INTO `mar_countries` VALUES (234, 'AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', '784', 'yes', '971', '.ae');
INSERT INTO `mar_countries` VALUES (235, 'GB', 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GBR', '826', 'yes', '44', '.uk');
INSERT INTO `mar_countries` VALUES (236, 'US', 'United States', 'United States of America', 'USA', '840', 'yes', '1', '.us');
INSERT INTO `mar_countries` VALUES (237, 'UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', '581', 'no', 'NONE', 'NONE');
INSERT INTO `mar_countries` VALUES (238, 'UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', '858', 'yes', '598', '.uy');
INSERT INTO `mar_countries` VALUES (239, 'UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', '860', 'yes', '998', '.uz');
INSERT INTO `mar_countries` VALUES (240, 'VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', '548', 'yes', '678', '.vu');
INSERT INTO `mar_countries` VALUES (241, 'VA', 'Vatican City', 'State of the Vatican City', 'VAT', '336', 'no', '39', '.va');
INSERT INTO `mar_countries` VALUES (242, 'VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', '862', 'yes', '58', '.ve');
INSERT INTO `mar_countries` VALUES (243, 'VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', '704', 'yes', '84', '.vn');
INSERT INTO `mar_countries` VALUES (244, 'VG', 'Virgin Islands, British', 'British Virgin Islands', 'VGB', '092', 'no', '1+284', '.vg');
INSERT INTO `mar_countries` VALUES (245, 'VI', 'Virgin Islands, US', 'Virgin Islands of the United States', 'VIR', '850', 'no', '1+340', '.vi');
INSERT INTO `mar_countries` VALUES (246, 'WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', '876', 'no', '681', '.wf');
INSERT INTO `mar_countries` VALUES (247, 'EH', 'Western Sahara', 'Western Sahara', 'ESH', '732', 'no', '212', '.eh');
INSERT INTO `mar_countries` VALUES (248, 'YE', 'Yemen', 'Republic of Yemen', 'YEM', '887', 'yes', '967', '.ye');
INSERT INTO `mar_countries` VALUES (249, 'ZM', 'Zambia', 'Republic of Zambia', 'ZMB', '894', 'yes', '260', '.zm');
INSERT INTO `mar_countries` VALUES (250, 'ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', '716', 'yes', '263', '.zw');

-- ----------------------------
-- Table structure for mar_creditnotes
-- ----------------------------
DROP TABLE IF EXISTS `mar_creditnotes`;
CREATE TABLE `mar_creditnotes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` int(11) NOT NULL,
  `deleted_customer_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number` int(11) NOT NULL,
  `prefix` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number_format` int(11) NOT NULL DEFAULT 1,
  `datecreated` datetime(0) NOT NULL,
  `date` date NOT NULL,
  `adminnote` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `clientnote` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `currency` int(11) NOT NULL,
  `subtotal` decimal(15, 2) NOT NULL,
  `total_tax` decimal(15, 2) NOT NULL,
  `total` decimal(15, 2) NOT NULL,
  `adjustment` decimal(15, 2) NULL DEFAULT NULL,
  `addedfrom` int(11) NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 1,
  `project_id` int(11) NOT NULL DEFAULT 0,
  `discount_percent` decimal(15, 2) NULL DEFAULT NULL,
  `discount_total` decimal(15, 2) NULL DEFAULT NULL,
  `discount_type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `billing_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_country` int(11) NULL DEFAULT NULL,
  `shipping_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_country` int(11) NULL DEFAULT NULL,
  `include_shipping` tinyint(1) NOT NULL,
  `show_shipping_on_credit_note` tinyint(1) NOT NULL DEFAULT 1,
  `show_quantity_as` int(11) NOT NULL DEFAULT 1,
  `reference_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `currency`(`currency`) USING BTREE,
  INDEX `clientid`(`clientid`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_customer_admins
-- ----------------------------
DROP TABLE IF EXISTS `mar_customer_admins`;
CREATE TABLE `mar_customer_admins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_assigned` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `customer_id`(`customer_id`) USING BTREE,
  INDEX `staff_id`(`staff_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_customer_admins
-- ----------------------------
INSERT INTO `mar_customer_admins` VALUES (1, 3, 12, '2020-07-06 17:18:31');
INSERT INTO `mar_customer_admins` VALUES (2, 2, 12, '2020-07-06 17:18:31');

-- ----------------------------
-- Table structure for mar_customers_groups
-- ----------------------------
DROP TABLE IF EXISTS `mar_customers_groups`;
CREATE TABLE `mar_customers_groups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_customers_groups
-- ----------------------------
INSERT INTO `mar_customers_groups` VALUES (1, 'Auftraggeber');
INSERT INTO `mar_customers_groups` VALUES (2, 'Betreuer');
INSERT INTO `mar_customers_groups` VALUES (3, 'Mieter');

-- ----------------------------
-- Table structure for mar_customfieldsvalues
-- ----------------------------
DROP TABLE IF EXISTS `mar_customfieldsvalues`;
CREATE TABLE `mar_customfieldsvalues`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relid` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `fieldto` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `relid`(`relid`) USING BTREE,
  INDEX `fieldto`(`fieldto`) USING BTREE,
  INDEX `fieldid`(`fieldid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_departments
-- ----------------------------
DROP TABLE IF EXISTS `mar_departments`;
CREATE TABLE `mar_departments`  (
  `departmentid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imap_username` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email_from_header` tinyint(1) NOT NULL DEFAULT 0,
  `host` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `encryption` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `delete_after_import` int(11) NOT NULL DEFAULT 0,
  `calendar_id` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `hidefromclient` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`departmentid`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_dismissed_announcements
-- ----------------------------
DROP TABLE IF EXISTS `mar_dismissed_announcements`;
CREATE TABLE `mar_dismissed_announcements`  (
  `dismissedannouncementid` int(11) NOT NULL AUTO_INCREMENT,
  `announcementid` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`dismissedannouncementid`) USING BTREE,
  INDEX `announcementid`(`announcementid`) USING BTREE,
  INDEX `staff`(`staff`) USING BTREE,
  INDEX `userid`(`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_estimates
-- ----------------------------
DROP TABLE IF EXISTS `mar_estimates`;
CREATE TABLE `mar_estimates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sent` tinyint(1) NOT NULL DEFAULT 0,
  `datesend` datetime(0) NULL DEFAULT NULL,
  `clientid` int(11) NOT NULL,
  `deleted_customer_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL DEFAULT 0,
  `number` int(11) NOT NULL,
  `prefix` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number_format` int(11) NOT NULL DEFAULT 0,
  `hash` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `datecreated` datetime(0) NOT NULL,
  `date` date NOT NULL,
  `expirydate` date NULL DEFAULT NULL,
  `currency` int(11) NOT NULL,
  `subtotal` decimal(15, 2) NOT NULL,
  `total_tax` decimal(15, 2) NOT NULL,
  `total` decimal(15, 2) NOT NULL,
  `adjustment` decimal(15, 2) NULL DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `clientnote` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `adminnote` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `discount_percent` decimal(15, 2) NULL DEFAULT NULL,
  `discount_total` decimal(15, 2) NULL DEFAULT NULL,
  `discount_type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoiceid` int(11) NULL DEFAULT NULL,
  `invoiced_date` datetime(0) NULL DEFAULT NULL,
  `terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reference_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT 0,
  `billing_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_country` int(11) NULL DEFAULT NULL,
  `shipping_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_country` int(11) NULL DEFAULT NULL,
  `include_shipping` tinyint(1) NOT NULL,
  `show_shipping_on_estimate` tinyint(1) NOT NULL DEFAULT 1,
  `show_quantity_as` int(11) NOT NULL DEFAULT 1,
  `pipeline_order` int(11) NOT NULL DEFAULT 0,
  `is_expiry_notified` int(11) NOT NULL DEFAULT 0,
  `acceptance_firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_date` datetime(0) NULL DEFAULT NULL,
  `acceptance_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `signature` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `clientid`(`clientid`) USING BTREE,
  INDEX `currency`(`currency`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE,
  INDEX `sale_agent`(`sale_agent`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_events
-- ----------------------------
DROP TABLE IF EXISTS `mar_events`;
CREATE TABLE `mar_events`  (
  `eventid` int(11) NOT NULL AUTO_INCREMENT,
  `title` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `hours` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `start` datetime(0) NOT NULL,
  `end` datetime(0) NULL DEFAULT NULL,
  `public` int(11) NOT NULL DEFAULT 0,
  `color` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isstartnotified` tinyint(1) NOT NULL DEFAULT 0,
  `reminder_before` int(11) NOT NULL DEFAULT 0,
  `reminder_before_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`eventid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 88 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_events
-- ----------------------------
INSERT INTO `mar_events` VALUES (2, 'hjhjjkhjk jkh jk hjkh jkh jh h', 'j k hjkh jkh jkh jh jkh jhh ', 0, 1, '2020-08-02 01:00:00', '2020-08-02 06:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (3, 'tztrztrzrtztrz', 'rzttr tr ztr ztrz t trz trz trz', 0, 1, '2020-08-03 06:00:00', '2020-08-03 00:48:00', 0, '', 0, 0, 'minutes');
INSERT INTO `mar_events` VALUES (4, ' gfhg hgf fgh fg', 'h gfh gfh gfhfg fghg fhgf hf', 0, 4, '2020-08-02 01:00:00', '2020-08-06 06:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (5, 'fdhghfdhfg hfg hjg hjfg hjfg hfg', 'h gfh fgh fgh fg gf ', 0, 2, '2020-08-02 01:00:00', '2020-08-02 07:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (8, 'jkhkjh', 'hhjhhkkjhjj', 0, 3, '2020-08-07 03:30:00', '2020-08-07 16:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (10, 'jkhkjh', 'hhjhhkkjhjj', 0, 3, '2020-08-07 03:30:00', '2020-08-07 16:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (12, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (13, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (14, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (15, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (16, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (17, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (18, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (19, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (20, 'dsgfgfdg', 'fdgdfgdfgdfgdfg', 0, 3, '2020-08-07 04:00:00', '2020-08-19 12:48:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (21, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (22, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (23, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (24, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (25, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (26, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (27, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (28, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (29, 'Hallo', 'Beschrtiebung', 0, 3, '2020-08-10 03:00:00', '2020-08-10 19:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (30, 'uztruzuzu', 'ururururzu', 0, 3, '2020-08-14 00:00:00', '2020-08-21 02:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (31, 'uztruzuzu', 'ururururzu', 0, 3, '2020-08-14 00:00:00', '2020-08-21 02:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (32, 'uztruzuzu', 'ururururzu', 0, 3, '2020-08-14 00:00:00', '2020-08-21 02:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (33, 'uztruzuzu', 'ururururzu', 0, 3, '2020-08-14 00:00:00', '2020-08-21 02:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (34, 'uztruzuzu', 'ururururzu', 0, 3, '2020-08-14 00:00:00', '2020-08-21 02:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (35, 'uztruzuzu', 'ururururzu', 0, 3, '2020-08-14 00:00:00', '2020-08-21 02:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (39, 'hnjhgjh', 'jghjghjg', 0, 3, '2020-08-01 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (40, 'hnjhgjh', 'jghjghjg', 0, 3, '2020-08-01 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (42, 'ipoioi', 'iopip', 0, 3, '2020-08-27 13:09:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (43, 'ipoioi', 'iopip', 0, 3, '2020-08-27 13:09:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (47, 'sdsd', '', 0, 3, '2020-07-31 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (49, 'gfhhjghg', '', 0, 3, '2020-07-29 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (50, 'lkökölkölköllökl', '', 0, 3, '2020-07-29 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (51, 'uuuuuuuuu', '', 0, 3, '2020-07-30 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (52, 'llllllll', '', 0, 3, '2020-07-28 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (53, 'sqdqs', 'sqdqs', 0, 3, '2020-07-28 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (54, 'sdqsd', 'qdqsd', 0, 3, '2020-07-26 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (55, 'erererereer', '', 0, 3, '2020-07-27 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (56, 'erererereer', '', 0, 3, '2020-07-27 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (57, 'rrrrrrrrrrrr', '', 0, 3, '2020-08-03 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (58, 'wsqdqsdqs', '', 0, 3, '2020-08-03 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (59, 'fscgdgg', 'gfddgdg', 0, 3, '2020-07-08 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (61, 'fdgdfgfdg', 'fdgdfgfdgdfg', 0, 3, '2020-07-01 00:00:00', '2020-07-03 03:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (62, 'task', 'task', 0, 3, '2020-07-15 00:00:00', '2020-07-15 12:13:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (68, '1', '1', 0, 3, '2020-09-06 00:00:00', '2020-09-10 07:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (69, '2', '2', 0, 3, '2020-09-06 00:00:00', '2020-09-10 08:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (71, '3', '3', 0, 3, '2020-09-06 00:00:00', '2020-09-10 10:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (73, '4', '4', 0, 3, '2020-09-06 00:00:00', '2020-09-10 09:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (75, '5', '5', 0, 3, '2020-09-06 00:00:00', '2020-09-10 08:30:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (76, 'weqeq', 'eqweqweqe', 0, 3, '2020-08-18 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (77, 'fgfgf', 'gfgfgfgfgfgfg', 0, 3, '2020-08-03 00:00:00', NULL, 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (78, 'test', 'test', 0, 3, '2020-09-16 00:00:00', '2020-09-17 11:00:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (79, 'test1', 'test12', 13, 3, '2020-09-23 00:00:00', '2020-09-08 11:52:00', 0, '', 0, 0, 'minutes');
INSERT INTO `mar_events` VALUES (80, 'test receved', 'test for today', 0, 3, '2020-09-09 00:00:00', '2020-09-01 15:34:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (81, 'test sample', 'another  test', 0, 3, '2020-09-10 00:00:00', '2020-09-15 17:01:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (82, 'a test', 't even', 0, 3, '2020-09-21 00:00:00', '2020-09-14 17:09:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (83, 'erezre', 'ddddd', 0, 3, '2020-09-30 00:00:00', '2020-09-15 17:15:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (84, 'azzzdd', 'zdzdzdzdd', 0, 3, '2020-09-24 00:00:00', '2020-09-21 17:17:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (85, 'read', 'read', -78, 3, '2020-09-18 00:00:00', '2020-09-14 17:25:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (86, 'sdsqdsqd', 'dscsqqs', 17, 3, '2020-09-08 00:00:00', '2020-09-08 17:46:00', 0, NULL, 0, 0, NULL);
INSERT INTO `mar_events` VALUES (87, 'ddddddd', 'ddddddd', 17, 3, '2020-09-08 00:00:00', '2020-09-08 17:57:00', 0, NULL, 0, 0, NULL);

-- ----------------------------
-- Table structure for mar_expenses
-- ----------------------------
DROP TABLE IF EXISTS `mar_expenses`;
CREATE TABLE `mar_expenses`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `currency` int(11) NOT NULL,
  `amount` decimal(15, 2) NOT NULL,
  `tax` int(11) NULL DEFAULT NULL,
  `tax2` int(11) NOT NULL DEFAULT 0,
  `reference_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `expense_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clientid` int(11) NOT NULL,
  `project_id` int(11) NOT NULL DEFAULT 0,
  `billable` int(11) NULL DEFAULT 0,
  `invoiceid` int(11) NULL DEFAULT NULL,
  `paymentmode` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` date NOT NULL,
  `recurring_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `repeat_every` int(11) NULL DEFAULT NULL,
  `recurring` int(11) NOT NULL DEFAULT 0,
  `cycles` int(11) NOT NULL DEFAULT 0,
  `total_cycles` int(11) NOT NULL DEFAULT 0,
  `custom_recurring` int(11) NOT NULL DEFAULT 0,
  `last_recurring_date` date NULL DEFAULT NULL,
  `create_invoice_billable` tinyint(1) NULL DEFAULT NULL,
  `send_invoice_to_customer` tinyint(1) NOT NULL,
  `recurring_from` int(11) NULL DEFAULT NULL,
  `dateadded` datetime(0) NOT NULL,
  `addedfrom` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `clientid`(`clientid`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE,
  INDEX `category`(`category`) USING BTREE,
  INDEX `currency`(`currency`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_files
-- ----------------------------
DROP TABLE IF EXISTS `mar_files`;
CREATE TABLE `mar_files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_id` int(11) NOT NULL,
  `rel_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `file_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `filetype` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `visible_to_customer` int(11) NOT NULL DEFAULT 0,
  `attachment_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `external` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `external_link` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `thumbnail_link` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'For external usage',
  `staffid` int(11) NOT NULL,
  `contact_id` int(11) NULL DEFAULT 0,
  `task_comment_id` int(11) NOT NULL DEFAULT 0,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rel_id`(`rel_id`) USING BTREE,
  INDEX `rel_type`(`rel_type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 152 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_files
-- ----------------------------
INSERT INTO `mar_files` VALUES (4, 12, 'customer', 'mobile-money-2.png', 'image/png', 0, '103c2f13b418752ba385632fbdb22180', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:41');
INSERT INTO `mar_files` VALUES (5, 12, 'customer', 'mobile-money.png', 'image/png', 0, '33b2ab77c696803a7542d98aef232aa1', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:41');
INSERT INTO `mar_files` VALUES (6, 12, 'customer', 'paypal.png', 'image/png', 0, '70db01cbc263d3987b26ce8f6a05e6f4', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:42');
INSERT INTO `mar_files` VALUES (7, 12, 'customer', 'paystack.png', 'image/png', 0, '6abb98254e0c80444320be0be0342219', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:42');
INSERT INTO `mar_files` VALUES (8, 12, 'customer', 'Payza.jpg', 'image/jpeg', 0, '56ececf22f5f74733b73ca436855705b', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:42');
INSERT INTO `mar_files` VALUES (9, 12, 'customer', 'play_icon.png', 'image/png', 0, '829e9b7461006a3f1cd65529dd2ede24', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:42');
INSERT INTO `mar_files` VALUES (10, 12, 'customer', 'start_selling.png', 'image/png', 0, '6c99c9022d9404c1ab5e5a94b652cdb3', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:42');
INSERT INTO `mar_files` VALUES (11, 12, 'customer', 'user_rate_blank.png', 'image/png', 0, 'ac56236d589104789b4badb6c074d090', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:42');
INSERT INTO `mar_files` VALUES (12, 12, 'customer', 'user_rate_blank_big.png', 'image/png', 0, 'a24e9f92e1dd3ca11601777cf4d1c6d9', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:54');
INSERT INTO `mar_files` VALUES (13, 12, 'customer', 'user_rate_full.png', 'image/png', 0, '59f5ace6daa1c1060b81434bb097fa1e', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:55');
INSERT INTO `mar_files` VALUES (14, 12, 'customer', 'user_rate_full_big.png', 'image/png', 0, 'c405c4ffeb3b38b6a9c80e8cb00da4db', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:21:55');
INSERT INTO `mar_files` VALUES (15, 12, 'customer', 'big-users.png', 'image/png', 0, '858bf80cb001cd20fc7f65d84d940d63', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:22:24');
INSERT INTO `mar_files` VALUES (16, 12, 'customer', 'chat.png', 'image/png', 0, '7b7277d278c9d458a27c75460ff97e39', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:22:24');
INSERT INTO `mar_files` VALUES (17, 12, 'customer', 'approve-icon.png', 'image/png', 0, 'ec7c720ae6b10fc77dd11a11df9fbac6', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:23:10');
INSERT INTO `mar_files` VALUES (18, 12, 'customer', 'book.png', 'image/png', 0, '688e73410da95715c76d3b7d5e3d936f', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:23:11');
INSERT INTO `mar_files` VALUES (19, 12, 'customer', 'accounting.png', 'image/png', 0, '090749688f058377de3e65191214cd30', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:23:11');
INSERT INTO `mar_files` VALUES (20, 12, 'customer', 'box.png', 'image/png', 0, '078ffd3b38b876c702dc6484e2393206', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:10');
INSERT INTO `mar_files` VALUES (21, 12, 'customer', 'book-1.png', 'image/png', 0, '3e3c1cdef98a1b4ad48b0cf7a3e73e98', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:10');
INSERT INTO `mar_files` VALUES (22, 12, 'customer', 'budget.png', 'image/png', 0, '3da8ecde2c9fd35c30b5067fe91c7312', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:11');
INSERT INTO `mar_files` VALUES (23, 12, 'customer', 'cancellation.png', 'image/png', 0, '1cbb923a0f0efc5f3e7851f9b9506d49', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:11');
INSERT INTO `mar_files` VALUES (24, 12, 'customer', 'completed.png', 'image/png', 0, '1f93af698014479424e2a2fa0082c6fb', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:11');
INSERT INTO `mar_files` VALUES (25, 12, 'customer', 'create-icon.png', 'image/png', 0, '9f83bd267a316766bbf12c7b8f61c567', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:11');
INSERT INTO `mar_files` VALUES (26, 12, 'customer', 'light-bulb.png', 'image/png', 0, '0f83c0014aa7a7d7e2921ba6756c5b86', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:11');
INSERT INTO `mar_files` VALUES (27, 12, 'customer', 'rate-icon.png', 'image/png', 0, 'e958a3cff11601cf2f3e5a67be1fe8cc', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:11');
INSERT INTO `mar_files` VALUES (28, 12, 'customer', 'receive-icon.png', 'image/png', 0, '87f138d43f24caf1ba6d57452da6ae75', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:12');
INSERT INTO `mar_files` VALUES (29, 12, 'customer', 'shopping-bags.png', 'image/png', 0, '8da392e29aa6a98343ed1d6d024c90a9', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:12');
INSERT INTO `mar_files` VALUES (30, 12, 'customer', 'timetable.png', 'image/png', 0, '62d3b70215cdd4cb8a0da4eabdda5002', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:12');
INSERT INTO `mar_files` VALUES (31, 12, 'customer', 'winner.png', 'image/png', 0, '313bdaa3e3f407b6da76bb394d941ce6', NULL, NULL, NULL, 3, 0, 0, '2020-07-31 14:24:12');
INSERT INTO `mar_files` VALUES (32, 27, 'task', 'aq-4-min.png', 'image/png', 0, '36b01101e36836f25b30c6c2f276faa5', NULL, NULL, NULL, 3, 0, 4, '2020-08-11 21:06:23');
INSERT INTO `mar_files` VALUES (33, 27, 'task', 'aq-5-min.png', 'image/png', 0, '48c93d728c6b61648cd47fdb047d11d6', NULL, NULL, NULL, 3, 0, 4, '2020-08-11 21:06:23');
INSERT INTO `mar_files` VALUES (34, 27, 'task', 'aq-6-min.png', 'image/png', 0, 'c9bb3af98140063f5220cf5a96ce226e', NULL, NULL, NULL, 3, 0, 4, '2020-08-11 21:06:23');
INSERT INTO `mar_files` VALUES (35, 0, 'task', 'Mann head.jpg', 'image/jpeg', 0, 'b6607b631949ef6e36c57d6a5731f1df', NULL, NULL, NULL, 3, 0, 5, '2020-08-11 21:07:05');
INSERT INTO `mar_files` VALUES (36, 0, 'task', 'markat_logo (1).png', 'image/png', 0, '2bd4967950da0aa210a65a747d04d72c', NULL, NULL, NULL, 3, 0, 5, '2020-08-11 21:07:05');
INSERT INTO `mar_files` VALUES (37, 0, 'task', 'markat_logo.png', 'image/png', 0, '4ecb15fb3a4b98058f09c56beb0efcd7', NULL, NULL, NULL, 3, 0, 5, '2020-08-11 21:07:05');
INSERT INTO `mar_files` VALUES (42, 27, 'task', 'favicon.png', 'image/png', 0, '9bb0c68999028ddaedad4cb9008f8982', NULL, NULL, NULL, 3, 0, 6, '2020-08-12 08:07:41');
INSERT INTO `mar_files` VALUES (43, 27, 'task', 'phone-icon.png', 'image/png', 0, '9fa9e05cec789f308b17625f2da414ca', NULL, NULL, NULL, 3, 0, 6, '2020-08-12 08:07:41');
INSERT INTO `mar_files` VALUES (44, 27, 'task', 'wellcom.png', 'image/png', 0, '054bc4d875c46e5a642622be2aac00b0', NULL, NULL, NULL, 3, 0, 7, '2020-08-12 08:09:56');
INSERT INTO `mar_files` VALUES (135, 0, 'task', 'pls add new textfield for each invenatr. it should be only numberfield like quantity....png', 'image/png', 0, '5783f8f301df90b8a6ac31bb79ba5d24', NULL, NULL, NULL, 3, 0, 81, '2020-08-21 13:52:38');
INSERT INTO `mar_files` VALUES (136, 26, 'task', '3. Menu - Sort like this.png', 'image/png', 0, '4a8e50afca2f15d0d103c4da217e3ecb', NULL, NULL, NULL, 3, 0, 82, '2020-08-21 14:11:27');
INSERT INTO `mar_files` VALUES (140, 24, 'mieter', 'chiffre_clée.png', 'image/png', 0, '74761136efd5bfcbf532ff565b5a6f75', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:09:52');
INSERT INTO `mar_files` VALUES (141, 24, 'mieter', 'chiffre_clée1.png', 'image/png', 0, 'c208cdbb5c3e029bace467ba726060c9', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:09:52');
INSERT INTO `mar_files` VALUES (142, 2, 'cars', 'BCL_listes_des_adresses_mail_bclcameroun_210820.pdf', 'application/pdf', 0, 'ce2c0a62b0db4d252423e9e8ae59770c', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:14:06');
INSERT INTO `mar_files` VALUES (143, 2, 'cars', 'chiffre_clée.png', 'image/png', 0, 'f842046b447ac7cb7a9f600751d3e11c', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:14:26');
INSERT INTO `mar_files` VALUES (144, 2, 'cars', 'chiffre_clée1.png', 'image/png', 0, 'e6f2eddb17c8fc931830e11edfc8c4ef', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:14:26');
INSERT INTO `mar_files` VALUES (145, 2, 'cars', 'wellcom.png', 'image/png', 0, '6cccc244e4845667973bb3d51887adb2', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:14:54');
INSERT INTO `mar_files` VALUES (146, 1, 'cars', 'chiffre_clée.png', 'image/png', 0, '033840f1e289a6ab9b338c245dfa1adc', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:23:24');
INSERT INTO `mar_files` VALUES (147, 1, 'cars', 'chiffre_clée1.png', 'image/png', 0, '15bb54217d2f73d6c76aa55d92f22f14', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:23:24');
INSERT INTO `mar_files` VALUES (148, 1, 'cars', 'chiffre_clée2.png', 'image/jpeg', 0, '46c393ca8bd292e4653be664288050a6', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:23:24');
INSERT INTO `mar_files` VALUES (149, 24, 'mieter', 'gril-1.png', 'image/png', 0, '0944f79807dc7c1642a8e2ad5c96546f', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 12:31:43');
INSERT INTO `mar_files` VALUES (150, 1, 'cars', 'gril-1.png', 'image/png', 0, '60d279cbccde1ea7decdf67e34d66def', NULL, NULL, NULL, 3, 0, 0, '2020-09-07 13:09:26');
INSERT INTO `mar_files` VALUES (151, 3, 'cars', 'module_table_top.png', 'image/png', 0, 'd8d356afc1403bb135c125b96b4c7999', NULL, NULL, NULL, 3, 0, 0, '2020-09-08 15:25:34');

-- ----------------------------
-- Table structure for mar_firma
-- ----------------------------
DROP TABLE IF EXISTS `mar_firma`;
CREATE TABLE `mar_firma`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `strabe` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `country` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hausnummer` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `zip` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vorname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nachname` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firm_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `website` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobil` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phonenumber_1` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phonenumber` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `userid` int(11) NOT NULL,
  `updated_at` datetime(0) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_firma
-- ----------------------------
INSERT INTO `mar_firma` VALUES (1, 'SDFSDF', '', '', '', '', '', '', 'SDFSDF', '', '', '', '', '', '', '', '2020-06-23 00:12:24', 1, '2020-06-23 00:12:24', 1);

-- ----------------------------
-- Table structure for mar_invoicepaymentrecords
-- ----------------------------
DROP TABLE IF EXISTS `mar_invoicepaymentrecords`;
CREATE TABLE `mar_invoicepaymentrecords`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceid` int(11) NOT NULL,
  `amount` decimal(15, 2) NOT NULL,
  `paymentmode` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `paymentmethod` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` date NOT NULL,
  `daterecorded` datetime(0) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `transactionid` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `invoiceid`(`invoiceid`) USING BTREE,
  INDEX `paymentmethod`(`paymentmethod`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_invoices
-- ----------------------------
DROP TABLE IF EXISTS `mar_invoices`;
CREATE TABLE `mar_invoices`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sent` tinyint(1) NOT NULL DEFAULT 0,
  `datesend` datetime(0) NULL DEFAULT NULL,
  `clientid` int(11) NOT NULL,
  `deleted_customer_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number` int(11) NOT NULL,
  `prefix` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number_format` int(11) NOT NULL DEFAULT 0,
  `datecreated` datetime(0) NOT NULL,
  `date` date NOT NULL,
  `duedate` date NULL DEFAULT NULL,
  `currency` int(11) NOT NULL,
  `subtotal` decimal(15, 2) NOT NULL,
  `total_tax` decimal(15, 2) NOT NULL,
  `total` decimal(15, 2) NOT NULL,
  `adjustment` decimal(15, 2) NULL DEFAULT NULL,
  `addedfrom` int(11) NULL DEFAULT NULL,
  `hash` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NULL DEFAULT 1,
  `clientnote` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `adminnote` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `last_overdue_reminder` date NULL DEFAULT NULL,
  `cancel_overdue_reminders` int(11) NOT NULL DEFAULT 0,
  `allowed_payment_modes` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `discount_percent` decimal(15, 2) NULL DEFAULT NULL,
  `discount_total` decimal(15, 2) NULL DEFAULT NULL,
  `discount_type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `recurring` int(11) NOT NULL DEFAULT 0,
  `recurring_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `custom_recurring` tinyint(1) NOT NULL DEFAULT 0,
  `cycles` int(11) NOT NULL DEFAULT 0,
  `total_cycles` int(11) NOT NULL DEFAULT 0,
  `is_recurring_from` int(11) NULL DEFAULT NULL,
  `last_recurring_date` date NULL DEFAULT NULL,
  `terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `sale_agent` int(11) NOT NULL DEFAULT 0,
  `billing_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `billing_country` int(11) NULL DEFAULT NULL,
  `shipping_street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `shipping_country` int(11) NULL DEFAULT NULL,
  `include_shipping` tinyint(1) NOT NULL,
  `show_shipping_on_invoice` tinyint(1) NOT NULL DEFAULT 1,
  `show_quantity_as` int(11) NOT NULL DEFAULT 1,
  `project_id` int(11) NULL DEFAULT 0,
  `subscription_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `currency`(`currency`) USING BTREE,
  INDEX `clientid`(`clientid`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE,
  INDEX `sale_agent`(`sale_agent`) USING BTREE,
  INDEX `total`(`total`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_invoices
-- ----------------------------
INSERT INTO `mar_invoices` VALUES (1, 0, NULL, 12, NULL, 1, 'INV-', 1, '2020-07-16 22:05:57', '2020-07-16', '2020-08-15', 2, 6.00, 0.00, 6.00, 0.00, 3, '3d2e9085e07937283aea5e2f7140bf44', 6, '', '', NULL, 0, 'a:1:{i:0;s:1:\"1\";}', NULL, 0.00, 0.00, '', 1, NULL, 0, 0, 0, NULL, NULL, '', 0, 'dfsdfds', '454', '212', 'fgfhfgh', 12, 'sfsdfsf sdfsdf', '542', '454', '445', 10, 0, 1, 1, 0, 0);

-- ----------------------------
-- Table structure for mar_itemable
-- ----------------------------
DROP TABLE IF EXISTS `mar_itemable`;
CREATE TABLE `mar_itemable`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_id` int(11) NOT NULL,
  `rel_type` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `long_description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `qty` decimal(15, 2) NOT NULL,
  `rate` decimal(15, 2) NOT NULL,
  `unit` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `item_order` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rel_id`(`rel_id`) USING BTREE,
  INDEX `rel_type`(`rel_type`) USING BTREE,
  INDEX `qty`(`qty`) USING BTREE,
  INDEX `rate`(`rate`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_itemable
-- ----------------------------
INSERT INTO `mar_itemable` VALUES (1, 1, 'invoice', 'hjkhjkhjk', 'hhkjhjh', 2.00, 3.00, '', 1);

-- ----------------------------
-- Table structure for mar_knowedge_base_article_feedback
-- ----------------------------
DROP TABLE IF EXISTS `mar_knowedge_base_article_feedback`;
CREATE TABLE `mar_knowedge_base_article_feedback`  (
  `articleanswerid` int(11) NOT NULL AUTO_INCREMENT,
  `articleid` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime(0) NOT NULL,
  PRIMARY KEY (`articleanswerid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_knowledge_base
-- ----------------------------
DROP TABLE IF EXISTS `mar_knowledge_base`;
CREATE TABLE `mar_knowledge_base`  (
  `articleid` int(11) NOT NULL AUTO_INCREMENT,
  `articlegroup` int(11) NOT NULL,
  `subject` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `datecreated` datetime(0) NOT NULL,
  `article_order` int(11) NOT NULL DEFAULT 0,
  `staff_article` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`articleid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_lead_integration_emails
-- ----------------------------
DROP TABLE IF EXISTS `mar_lead_integration_emails`;
CREATE TABLE `mar_lead_integration_emails`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `body` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `dateadded` datetime(0) NOT NULL,
  `leadid` int(11) NOT NULL,
  `emailid` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_leads
-- ----------------------------
DROP TABLE IF EXISTS `mar_leads`;
CREATE TABLE `mar_leads`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(65) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `country` int(11) NOT NULL DEFAULT 0,
  `zip` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `state` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `assigned` int(11) NOT NULL DEFAULT 0,
  `dateadded` datetime(0) NOT NULL,
  `from_form_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `source` int(11) NOT NULL,
  `lastcontact` datetime(0) NULL DEFAULT NULL,
  `dateassigned` date NULL DEFAULT NULL,
  `last_status_change` datetime(0) NULL DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `website` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `leadorder` int(11) NULL DEFAULT 1,
  `phonenumber` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date_converted` datetime(0) NULL DEFAULT NULL,
  `lost` tinyint(1) NOT NULL DEFAULT 0,
  `junk` int(11) NOT NULL DEFAULT 0,
  `last_lead_status` int(11) NOT NULL DEFAULT 0,
  `is_imported_from_email_integration` tinyint(1) NOT NULL DEFAULT 0,
  `email_integration_uid` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `default_language` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `client_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `name`(`name`) USING BTREE,
  INDEX `company`(`company`) USING BTREE,
  INDEX `email`(`email`) USING BTREE,
  INDEX `assigned`(`assigned`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `lastcontact`(`lastcontact`) USING BTREE,
  INDEX `dateadded`(`dateadded`) USING BTREE,
  INDEX `leadorder`(`leadorder`) USING BTREE,
  INDEX `from_form_id`(`from_form_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_leads_email_integration
-- ----------------------------
DROP TABLE IF EXISTS `mar_leads_email_integration`;
CREATE TABLE `mar_leads_email_integration`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'the ID always must be 1',
  `active` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imap_server` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `check_every` int(11) NOT NULL DEFAULT 5,
  `responsible` int(11) NOT NULL,
  `lead_source` int(11) NOT NULL,
  `lead_status` int(11) NOT NULL,
  `encryption` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `folder` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_run` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notify_lead_imported` tinyint(1) NOT NULL DEFAULT 1,
  `notify_lead_contact_more_times` tinyint(1) NOT NULL DEFAULT 1,
  `notify_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notify_ids` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `mark_public` int(11) NOT NULL DEFAULT 0,
  `only_loop_on_unseen_emails` tinyint(1) NOT NULL DEFAULT 1,
  `delete_after_import` int(11) NOT NULL DEFAULT 0,
  `create_task_if_customer` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_leads_email_integration
-- ----------------------------
INSERT INTO `mar_leads_email_integration` VALUES (1, 0, '', '', '', 10, 0, 0, 0, 'tls', 'inbox', '', 1, 1, 'assigned', '', 0, 1, 0, 1);

-- ----------------------------
-- Table structure for mar_mail_queue
-- ----------------------------
DROP TABLE IF EXISTS `mar_mail_queue`;
CREATE TABLE `mar_mail_queue`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engine` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `bcc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `message` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alt_message` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `status` enum('pending','sending','sent','failed') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` datetime(0) NULL DEFAULT NULL,
  `headers` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `attachments` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_mieters
-- ----------------------------
DROP TABLE IF EXISTS `mar_mieters`;
CREATE TABLE `mar_mieters`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `vorname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `betreuer` int(11) NULL DEFAULT NULL,
  `nummer` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `strabe_m` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `strabe_p` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nr_p` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `wohnungsnummer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `etage_p` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fulger_p` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hausnummer_m` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `strabe_w` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hausnummer_w` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `postleitzahl` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `break_days` int(11) NOT NULL,
  `wohnort` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nachname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `userid` int(11) NULL DEFAULT NULL,
  `adresse` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `plz` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `stadt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefon_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefon_2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `notice` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefon_3` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `baubeginn` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `beraumung` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ruckraumung` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ausweichkeller` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `geschoss` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bauende` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fenstereinbau` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fenstereinbau_d` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `k_baubeginn` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `k_ruckraumung` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `k_nummer` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `art_w` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `attachment` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umsetzwohnung` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `haustiere` tinyint(1) NULL DEFAULT NULL,
  `projektname` varchar(52) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `raucher` tinyint(1) NULL DEFAULT NULL,
  `etage` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flugel` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `active` tinyint(1) NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `strabe_a` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hausnummer_a` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kellernummer_a` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `belegt_v` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `belegt_b` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `resttage` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ausstehend` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_mieters
-- ----------------------------
INSERT INTO `mar_mieters` VALUES (21, 'Max Wankel', 'Max', NULL, NULL, 'Pilzenerstraße', '', '', '9', '', '', '66', NULL, NULL, NULL, 0, NULL, 'wankel@check.de', 'Wankel', 1, NULL, '12346', 'Cityy', '13246', '123', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, 0, 'FER', 0, '3', '1. OG', 1, '2020-08-18', '2020-08-18', '', '', '', NULL, NULL, '', '');
INSERT INTO `mar_mieters` VALUES (22, 'Diter Hofner', 'Diter', NULL, NULL, 'Landhausstraße', '', '', '7', '', '', '55', NULL, NULL, NULL, 0, NULL, 'hofner@chkki.de', 'Hofner', 3, NULL, '46578', 'Borderland', '7895456465', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, 0, '1', 0, '', '', 1, '2020-08-28', '2020-08-18', '', '', '', NULL, NULL, '', '');
INSERT INTO `mar_mieters` VALUES (23, 'Thomas Galer', 'Thomas', NULL, NULL, 'Friedenstraße', '', '', '74', '', '', '88', NULL, NULL, NULL, 0, NULL, 'check@ertr.de', 'Galer', 3, NULL, '7894465', 'Osterein', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, 0, '1', 0, '', '', 1, '2020-08-28', '2020-08-18', '', '', '', NULL, NULL, '', '');
INSERT INTO `mar_mieters` VALUES (24, 'Peter Harfer', 'Peter', NULL, NULL, 'Uferrein', '', '', '85', '', '', '56', NULL, NULL, NULL, 0, NULL, 'harfer@check.de', 'Harfer', 3, NULL, '123456', 'Gelsenhard', '', '', '', '', '2020-08-19', '2020-09-30', '2020-12-18', '', NULL, '2020-08-29', '', '', '', '', '', '', '', NULL, 0, '', 0, '', '', 1, '2020-09-07', '2020-08-18', '', '', '', NULL, NULL, '', '');
INSERT INTO `mar_mieters` VALUES (25, 'desdtyol', 'dfgfdgfdfdg', NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, 0, NULL, '', '', 3, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, 0, '', 0, '', '', 1, '2020-09-11', '2020-09-11', '', '', '', NULL, NULL, '', '');

-- ----------------------------
-- Table structure for mar_newsfeed_comment_likes
-- ----------------------------
DROP TABLE IF EXISTS `mar_newsfeed_comment_likes`;
CREATE TABLE `mar_newsfeed_comment_likes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `dateliked` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_newsfeed_post_comments
-- ----------------------------
DROP TABLE IF EXISTS `mar_newsfeed_post_comments`;
CREATE TABLE `mar_newsfeed_post_comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_newsfeed_post_likes
-- ----------------------------
DROP TABLE IF EXISTS `mar_newsfeed_post_likes`;
CREATE TABLE `mar_newsfeed_post_likes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `dateliked` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_newsfeed_posts
-- ----------------------------
DROP TABLE IF EXISTS `mar_newsfeed_posts`;
CREATE TABLE `mar_newsfeed_posts`  (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `datecreated` datetime(0) NOT NULL,
  `visibility` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pinned` int(11) NOT NULL,
  `datepinned` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`postid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_notes
-- ----------------------------
DROP TABLE IF EXISTS `mar_notes`;
CREATE TABLE `mar_notes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_id` int(11) NOT NULL,
  `rel_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `date_contacted` datetime(0) NULL DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rel_id`(`rel_id`) USING BTREE,
  INDEX `rel_type`(`rel_type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_notifications
-- ----------------------------
DROP TABLE IF EXISTS `mar_notifications`;
CREATE TABLE `mar_notifications`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isread` int(11) NOT NULL DEFAULT 0,
  `isread_inline` tinyint(1) NOT NULL DEFAULT 0,
  `date` datetime(0) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fromuserid` int(11) NOT NULL,
  `fromclientid` int(11) NOT NULL DEFAULT 0,
  `from_fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `touserid` int(11) NOT NULL,
  `fromcompany` int(11) NULL DEFAULT NULL,
  `link` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `additional_data` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_notifications
-- ----------------------------
INSERT INTO `mar_notifications` VALUES (1, 0, 0, '2020-07-06 03:27:38', 'not_task_assigned_to_you', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=2', 'a:1:{i:0;s:14:\"jhkjhjkhkjhjhj\";}');
INSERT INTO `mar_notifications` VALUES (2, 1, 1, '2020-07-06 03:27:41', 'not_task_assigned_to_you', 3, 0, 'Martin Katzky', 1, NULL, '#taskid=2', 'a:1:{i:0;s:14:\"jhkjhjkhkjhjhj\";}');
INSERT INTO `mar_notifications` VALUES (3, 0, 0, '2020-07-06 03:27:41', 'not_task_assigned_someone', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=2', 'a:2:{i:0;s:18:\"Sascha FrÃ¼hling\";i:1;s:14:\"jhkjhjkhkjhjhj\";}');
INSERT INTO `mar_notifications` VALUES (4, 1, 0, '2020-07-09 17:47:59', 'not_task_assigned_to_you', 3, 0, 'Martin Katzky', 4, NULL, '#taskid=5', 'a:1:{i:0;s:16:\"Check visibility\";}');
INSERT INTO `mar_notifications` VALUES (5, 1, 1, '2020-07-13 14:48:01', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 3, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:14:\"In Bearbeitung\";}');
INSERT INTO `mar_notifications` VALUES (6, 0, 0, '2020-07-13 14:48:01', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 2, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:14:\"In Bearbeitung\";}');
INSERT INTO `mar_notifications` VALUES (7, 1, 1, '2020-07-13 14:48:16', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 3, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:16:\"Nicht angefangen\";}');
INSERT INTO `mar_notifications` VALUES (8, 0, 0, '2020-07-13 14:48:16', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 2, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:16:\"Nicht angefangen\";}');
INSERT INTO `mar_notifications` VALUES (9, 1, 0, '2020-07-13 14:52:44', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 4, NULL, '#taskid=6', 'a:2:{i:0;s:7:\"dsqdqsd\";i:1;s:16:\"Nicht angefangen\";}');
INSERT INTO `mar_notifications` VALUES (10, 1, 1, '2020-07-13 14:52:44', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 3, NULL, '#taskid=6', 'a:2:{i:0;s:7:\"dsqdqsd\";i:1;s:16:\"Nicht angefangen\";}');
INSERT INTO `mar_notifications` VALUES (11, 1, 1, '2020-07-13 14:53:02', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 3, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:14:\"In Bearbeitung\";}');
INSERT INTO `mar_notifications` VALUES (12, 0, 0, '2020-07-13 14:53:02', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 2, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:14:\"In Bearbeitung\";}');
INSERT INTO `mar_notifications` VALUES (13, 1, 1, '2020-07-13 14:53:38', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 3, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:16:\"Nicht angefangen\";}');
INSERT INTO `mar_notifications` VALUES (14, 0, 0, '2020-07-13 14:53:38', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 2, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:16:\"Nicht angefangen\";}');
INSERT INTO `mar_notifications` VALUES (15, 1, 1, '2020-07-13 14:55:45', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 3, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:14:\"In Bearbeitung\";}');
INSERT INTO `mar_notifications` VALUES (16, 0, 0, '2020-07-13 14:55:45', 'not_task_status_changed', 1, 0, 'Sascha FrÃ¼hling', 2, NULL, '#taskid=2', 'a:2:{i:0;s:3:\"ebd\";i:1;s:14:\"In Bearbeitung\";}');
INSERT INTO `mar_notifications` VALUES (17, 1, 0, '2020-07-22 23:59:40', 'not_task_new_comment', 3, 0, 'Martin Katzky', 1, NULL, '#taskid=11#comment_1', 'a:1:{i:0;s:12:\"edfreewetger\";}');
INSERT INTO `mar_notifications` VALUES (18, 1, 0, '2020-07-24 20:55:29', 'not_task_marked_as_complete', 3, 0, 'Martin Katzky', 1, NULL, '#taskid=2', 'a:1:{i:0;s:3:\"ebd\";}');
INSERT INTO `mar_notifications` VALUES (19, 0, 0, '2020-07-24 20:55:29', 'not_task_marked_as_complete', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=2', 'a:1:{i:0;s:3:\"ebd\";}');
INSERT INTO `mar_notifications` VALUES (20, 1, 0, '2020-07-29 23:34:14', 'not_task_new_comment', 3, 0, 'Martin Katzky', 1, NULL, '#taskid=7#comment_2', 'a:1:{i:0;s:10:\"test tacjk\";}');
INSERT INTO `mar_notifications` VALUES (21, 1, 1, '2020-07-30 16:13:27', 'not_task_new_comment', 3, 0, 'Martin Katzky', 4, NULL, '#taskid=6#comment_3', 'a:1:{i:0;s:7:\"dsqdqsd\";}');
INSERT INTO `mar_notifications` VALUES (22, 0, 0, '2020-08-11 21:06:23', 'not_task_new_comment', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=27#comment_4', 'a:1:{i:0;s:10:\"dqsdsqdqsd\";}');
INSERT INTO `mar_notifications` VALUES (23, 0, 0, '2020-08-12 08:07:40', 'not_task_new_comment', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=27#comment_6', 'a:1:{i:0;s:10:\"dqsdsqdqsd\";}');
INSERT INTO `mar_notifications` VALUES (24, 0, 0, '2020-08-12 08:09:56', 'not_task_new_comment', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=27#comment_7', 'a:1:{i:0;s:10:\"dqsdsqdqsd\";}');
INSERT INTO `mar_notifications` VALUES (25, 0, 0, '2020-08-12 19:10:45', 'not_task_status_changed', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=26', 'a:2:{i:0;s:10:\"dqsdsqdqsd\";i:1;s:11:\"Abgerechnet\";}');
INSERT INTO `mar_notifications` VALUES (41, 0, 0, '2020-08-21 14:11:27', 'not_task_new_comment', 3, 0, 'Martin Katzky', 2, NULL, '#taskid=26#comment_82', 'a:1:{i:0;s:10:\"dqsdsqdqsd\";}');

-- ----------------------------
-- Table structure for mar_occupations
-- ----------------------------
DROP TABLE IF EXISTS `mar_occupations`;
CREATE TABLE `mar_occupations`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wohnungen` int(11) NOT NULL,
  `break_days` int(11) NOT NULL,
  `mieter` int(11) NOT NULL,
  `belegt_b` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mieter_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `belegt_v` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `reinigung_dt` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_occupations
-- ----------------------------
INSERT INTO `mar_occupations` VALUES (34, 39, 0, 22, '2020-09-30', 'Diter Hofner', '2020-09-01', '2020-08-18', '2020-08-18 01:04:31.000000', '', 1, 1, NULL);
INSERT INTO `mar_occupations` VALUES (36, 39, 0, 21, '2020-10-23', 'Max Wankel', '2020-10-06', '2020-08-18', '2020-08-18 02:55:14.000000', '', 1, 1, NULL);
INSERT INTO `mar_occupations` VALUES (37, 39, 0, 23, '2020-08-25', 'Thomas Galer', '2020-08-19', '2020-08-18', '2020-08-18 02:57:03.000000', '', 1, 1, NULL);
INSERT INTO `mar_occupations` VALUES (38, 39, 0, 24, '2020-08-31', 'Peter Harfer', '2020-08-27', '2020-08-18', '2020-08-18 02:58:55.000000', '', 1, 1, NULL);
INSERT INTO `mar_occupations` VALUES (39, 39, 0, 22, '2020-12-31', 'Diter Hofner', '2020-11-01', '2020-08-19', '2020-08-19 23:03:23.000000', '', 3, 1, '2020-08-14');
INSERT INTO `mar_occupations` VALUES (40, 42, 0, 23, '2021-02-26', 'Thomas Galer', '2021-01-25', '2020-08-19', '2020-08-19 23:05:09.000000', '', 3, 1, '2020-08-30');
INSERT INTO `mar_occupations` VALUES (41, 43, 0, 23, '2020-11-18', 'Thomas Galer', '2020-10-01', '2020-08-21', '2020-08-21 13:16:09.000000', '', 1, 1, '2020-08-31');
INSERT INTO `mar_occupations` VALUES (42, 41, 3, 22, '2020-08-29', 'Diter Hofner', '2020-08-22', '2020-08-21', '2020-08-21 13:30:28.000000', '', 1, 1, '2020-08-13');
INSERT INTO `mar_occupations` VALUES (43, 40, 2, 21, '2020-10-22', 'Max Wankel', '2020-08-28', '2020-08-27', '2020-08-27 20:45:37.000000', '', 3, 1, NULL);

-- ----------------------------
-- Table structure for mar_payment_modes
-- ----------------------------
DROP TABLE IF EXISTS `mar_payment_modes`;
CREATE TABLE `mar_payment_modes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `show_on_pdf` int(11) NOT NULL DEFAULT 0,
  `invoices_only` int(11) NOT NULL DEFAULT 0,
  `expenses_only` int(11) NOT NULL DEFAULT 0,
  `selected_by_default` int(11) NOT NULL DEFAULT 1,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_payment_modes
-- ----------------------------
INSERT INTO `mar_payment_modes` VALUES (1, 'Bank', NULL, 0, 0, 0, 1, 1);

-- ----------------------------
-- Table structure for mar_pinned_projects
-- ----------------------------
DROP TABLE IF EXISTS `mar_pinned_projects`;
CREATE TABLE `mar_pinned_projects`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_project_activity
-- ----------------------------
DROP TABLE IF EXISTS `mar_project_activity`;
CREATE TABLE `mar_project_activity`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL DEFAULT 0,
  `contact_id` int(11) NOT NULL DEFAULT 0,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `visible_to_customer` int(11) NOT NULL DEFAULT 0,
  `description_key` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Language file key',
  `additional_data` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_project_activity
-- ----------------------------
INSERT INTO `mar_project_activity` VALUES (3, 2, 3, 0, 'Martin Katzky', 1, 'project_activity_added_team_member', 'Martin Katzky', '2020-08-26 12:58:48');
INSERT INTO `mar_project_activity` VALUES (4, 2, 3, 0, 'Martin Katzky', 1, 'project_activity_created', '', '2020-08-26 12:58:48');
INSERT INTO `mar_project_activity` VALUES (5, 2, 3, 0, 'Martin Katzky', 1, 'project_activity_recorded_timesheet', '<seconds>100800</seconds><br /><lang>project_activity_task_name</lang> l,öölöäööläö', '2020-08-26 14:15:13');
INSERT INTO `mar_project_activity` VALUES (6, 2, 3, 0, 'Martin Katzky', 1, 'project_activity_task_deleted', 'l,öölöäööläö', '2020-08-27 23:29:50');
INSERT INTO `mar_project_activity` VALUES (7, 3, 3, 0, 'Martin Katzky', 1, 'project_activity_added_team_member', 'Martin Katzky', '2020-08-28 23:45:21');
INSERT INTO `mar_project_activity` VALUES (8, 3, 3, 0, 'Martin Katzky', 1, 'project_activity_created', '', '2020-08-28 23:45:21');
INSERT INTO `mar_project_activity` VALUES (9, 4, 3, 0, 'Martin Katzky', 1, 'project_activity_created', '', '2020-08-29 18:48:41');

-- ----------------------------
-- Table structure for mar_project_files
-- ----------------------------
DROP TABLE IF EXISTS `mar_project_files`;
CREATE TABLE `mar_project_files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `filetype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dateadded` datetime(0) NOT NULL,
  `last_activity` datetime(0) NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `visible_to_customer` tinyint(1) NULL DEFAULT 0,
  `staffid` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL DEFAULT 0,
  `external` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `external_link` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `thumbnail_link` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_project_members
-- ----------------------------
DROP TABLE IF EXISTS `mar_project_members`;
CREATE TABLE `mar_project_members`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE,
  INDEX `staff_id`(`staff_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_project_members
-- ----------------------------
INSERT INTO `mar_project_members` VALUES (2, 2, 3);
INSERT INTO `mar_project_members` VALUES (3, 3, 3);

-- ----------------------------
-- Table structure for mar_project_notes
-- ----------------------------
DROP TABLE IF EXISTS `mar_project_notes`;
CREATE TABLE `mar_project_notes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_projectdiscussioncomments
-- ----------------------------
DROP TABLE IF EXISTS `mar_projectdiscussioncomments`;
CREATE TABLE `mar_projectdiscussioncomments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `discussion_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(11) NULL DEFAULT NULL,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_id` int(11) NOT NULL,
  `contact_id` int(11) NULL DEFAULT 0,
  `fullname` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `file_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `file_mime_type` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_projectdiscussions
-- ----------------------------
DROP TABLE IF EXISTS `mar_projectdiscussions`;
CREATE TABLE `mar_projectdiscussions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `show_to_customer` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime(0) NOT NULL,
  `last_activity` datetime(0) NULL DEFAULT NULL,
  `staff_id` int(11) NOT NULL DEFAULT 0,
  `contact_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_projects
-- ----------------------------
DROP TABLE IF EXISTS `mar_projects`;
CREATE TABLE `mar_projects`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `clientid` int(11) NOT NULL,
  `billing_type` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `deadline` date NULL DEFAULT NULL,
  `project_created` date NOT NULL,
  `date_finished` datetime(0) NULL DEFAULT NULL,
  `progress` int(11) NULL DEFAULT 0,
  `progress_from_tasks` int(11) NOT NULL DEFAULT 1,
  `project_cost` decimal(15, 2) NULL DEFAULT NULL,
  `project_rate_per_hour` decimal(15, 2) NULL DEFAULT NULL,
  `estimated_hours` decimal(15, 2) NULL DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `mieters` int(11) NULL DEFAULT NULL,
  `projekte` int(11) NULL DEFAULT NULL,
  `nummer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `wie` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `auftrag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `clientid`(`clientid`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_projects
-- ----------------------------
INSERT INTO `mar_projects` VALUES (2, 'efsfewe', '', 2, 12, 1, '2020-08-26', '2020-08-20', '2020-08-26', NULL, 0, 1, 500000.00, 0.00, 42.00, 3, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `mar_projects` VALUES (3, 'fdgfgdgdg', '', 2, 12, 1, '2020-08-28', NULL, '2020-08-28', NULL, 0, 1, 0.00, 0.00, 0.00, 3, 22, 1, NULL, NULL, NULL);
INSERT INTO `mar_projects` VALUES (4, 'fsdfsdf', '', 3, 12, 2, '2020-08-29', NULL, '2020-08-29', NULL, 0, 1, 0.00, 0.00, 4421.00, 3, NULL, 1, 'sdfsdf', 'sdfsdf', 'sdfs');

-- ----------------------------
-- Table structure for mar_proposal_comments
-- ----------------------------
DROP TABLE IF EXISTS `mar_proposal_comments`;
CREATE TABLE `mar_proposal_comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `proposalid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_proposals
-- ----------------------------
DROP TABLE IF EXISTS `mar_proposals`;
CREATE TABLE `mar_proposals`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `addedfrom` int(11) NOT NULL,
  `datecreated` datetime(0) NOT NULL,
  `total` decimal(15, 2) NULL DEFAULT NULL,
  `subtotal` decimal(15, 2) NOT NULL,
  `total_tax` decimal(15, 2) NOT NULL,
  `adjustment` decimal(15, 2) NULL DEFAULT NULL,
  `discount_percent` decimal(15, 2) NOT NULL,
  `discount_total` decimal(15, 2) NOT NULL,
  `discount_type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `show_quantity_as` int(11) NOT NULL DEFAULT 1,
  `currency` int(11) NOT NULL,
  `open_till` date NULL DEFAULT NULL,
  `date` date NOT NULL,
  `rel_id` int(11) NULL DEFAULT NULL,
  `rel_type` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `assigned` int(11) NULL DEFAULT NULL,
  `hash` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proposal_to` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `country` int(11) NOT NULL DEFAULT 0,
  `zip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `allow_comments` tinyint(1) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL,
  `estimate_id` int(11) NULL DEFAULT NULL,
  `invoice_id` int(11) NULL DEFAULT NULL,
  `date_converted` datetime(0) NULL DEFAULT NULL,
  `pipeline_order` int(11) NOT NULL DEFAULT 0,
  `is_expiry_notified` int(11) NOT NULL DEFAULT 0,
  `acceptance_firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `acceptance_date` datetime(0) NULL DEFAULT NULL,
  `acceptance_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `signature` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_reminders
-- ----------------------------
DROP TABLE IF EXISTS `mar_reminders`;
CREATE TABLE `mar_reminders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `date` datetime(0) NOT NULL,
  `isnotified` int(11) NOT NULL DEFAULT 0,
  `rel_id` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `rel_type` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `notify_by_email` int(11) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rel_id`(`rel_id`) USING BTREE,
  INDEX `rel_type`(`rel_type`) USING BTREE,
  INDEX `staff`(`staff`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_roles
-- ----------------------------
DROP TABLE IF EXISTS `mar_roles`;
CREATE TABLE `mar_roles`  (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`roleid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_roles
-- ----------------------------
INSERT INTO `mar_roles` VALUES (1, 'Employee', 'a:7:{s:5:\"staff\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:9:\"factoring\";a:1:{i:0;s:4:\"view\";}s:8:\"inventar\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:6:\"mieter\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:9:\"wohnungen\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:13:\"belegungsplan\";a:1:{i:0;s:4:\"edit\";}s:5:\"tasks\";a:1:{i:0;s:4:\"edit\";}}');
INSERT INTO `mar_roles` VALUES (2, 'CEO', 'a:18:{s:9:\"customers\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:6:\"mieter\";a:6:{i:0;s:8:\"view_bor\";i:1;s:8:\"view_fer\";i:2;s:9:\"view_tops\";i:3;s:6:\"create\";i:4;s:4:\"edit\";i:5;s:6:\"delete\";}s:9:\"wohnungen\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:5:\"tasks\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:8:\"invoices\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:5:\"items\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:5:\"roles\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:8:\"projects\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:8:\"settings\";a:2:{i:0;s:4:\"view\";i:1;s:4:\"edit\";}s:5:\"staff\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:12:\"personalplan\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:9:\"factoring\";a:1:{i:0;s:4:\"view\";}s:8:\"inventar\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:4:\"cars\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:11:\"lieferanten\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:14:\"visualisierung\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:13:\"belegungsplan\";a:4:{i:0;s:4:\"view\";i:1;s:6:\"create\";i:2;s:4:\"edit\";i:3;s:6:\"delete\";}s:9:\"dashboard\";a:1:{i:0;s:5:\"admin\";}}');

-- ----------------------------
-- Table structure for mar_sales_activity
-- ----------------------------
DROP TABLE IF EXISTS `mar_sales_activity`;
CREATE TABLE `mar_sales_activity`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `rel_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `additional_data` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `staffid` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_sales_activity
-- ----------------------------
INSERT INTO `mar_sales_activity` VALUES (1, 'invoice', 1, 'invoice_activity_created', '', '3', 'Martin Katzky', '2020-07-16 22:05:57');

-- ----------------------------
-- Table structure for mar_shared_customer_files
-- ----------------------------
DROP TABLE IF EXISTS `mar_shared_customer_files`;
CREATE TABLE `mar_shared_customer_files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_stock_manager
-- ----------------------------
DROP TABLE IF EXISTS `mar_stock_manager`;
CREATE TABLE `mar_stock_manager`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sku` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `price` float(10, 2) NOT NULL,
  `manage_stock` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0-No, 1-Yes',
  `stock_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0-Out of stock,1-InStock',
  `backorders` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-No, 1-Yes',
  `stock` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_stock_manager
-- ----------------------------
INSERT INTO `mar_stock_manager` VALUES (5, '52', 'fgdf', 'dfgfd', 41, 0.00, 1, 1, 1, 521, '2020-08-27 21:30:26', '2020-08-27 21:30:26', 3);
INSERT INTO `mar_stock_manager` VALUES (6, 'jhhjjg', 'des', 'dhgh', 123, 4445.00, 1, 1, 1, 555, '2020-09-09 11:27:12', '2020-09-09 11:27:12', 3);

-- ----------------------------
-- Table structure for mar_subscriptions
-- ----------------------------
DROP TABLE IF EXISTS `mar_subscriptions`;
CREATE TABLE `mar_subscriptions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `description_in_item` tinyint(1) NOT NULL DEFAULT 0,
  `clientid` int(11) NOT NULL,
  `date` date NULL DEFAULT NULL,
  `terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `currency` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL DEFAULT 0,
  `stripe_tax_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stripe_plan_id` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `stripe_subscription_id` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `next_billing_cycle` bigint(20) NULL DEFAULT NULL,
  `ends_at` bigint(20) NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `project_id` int(11) NOT NULL DEFAULT 0,
  `hash` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `created_from` int(11) NOT NULL,
  `date_subscribed` datetime(0) NULL DEFAULT NULL,
  `in_test_environment` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `clientid`(`clientid`) USING BTREE,
  INDEX `currency`(`currency`) USING BTREE,
  INDEX `tax_id`(`tax_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_taggables
-- ----------------------------
DROP TABLE IF EXISTS `mar_taggables`;
CREATE TABLE `mar_taggables`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_id` int(11) NOT NULL,
  `rel_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tag_id` int(11) NOT NULL,
  `tag_order` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rel_id`(`rel_id`) USING BTREE,
  INDEX `rel_type`(`rel_type`) USING BTREE,
  INDEX `tag_id`(`tag_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_tags
-- ----------------------------
DROP TABLE IF EXISTS `mar_tags`;
CREATE TABLE `mar_tags`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_task_assigned
-- ----------------------------
DROP TABLE IF EXISTS `mar_task_assigned`;
CREATE TABLE `mar_task_assigned`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `assigned_from` int(11) NOT NULL DEFAULT 0,
  `is_assigned_from_contact` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `taskid`(`taskid`) USING BTREE,
  INDEX `staffid`(`staffid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_task_assigned
-- ----------------------------
INSERT INTO `mar_task_assigned` VALUES (1, 1, 5, 3, 0);
INSERT INTO `mar_task_assigned` VALUES (2, 4, 5, 3, 0);

-- ----------------------------
-- Table structure for mar_task_checklist_items
-- ----------------------------
DROP TABLE IF EXISTS `mar_task_checklist_items`;
CREATE TABLE `mar_task_checklist_items`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskid` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0,
  `dateadded` datetime(0) NOT NULL,
  `addedfrom` int(11) NOT NULL,
  `finished_from` int(11) NULL DEFAULT 0,
  `list_order` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `taskid`(`taskid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_task_checklist_items
-- ----------------------------
INSERT INTO `mar_task_checklist_items` VALUES (1, 5, 'dfgdfgdfg', 1, '2020-08-29 17:13:04', 3, 3, 3);
INSERT INTO `mar_task_checklist_items` VALUES (5, 5, 'fghfghfgh', 0, '2020-08-29 17:16:56', 3, 0, 1);

-- ----------------------------
-- Table structure for mar_task_comments
-- ----------------------------
DROP TABLE IF EXISTS `mar_task_comments`;
CREATE TABLE `mar_task_comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `taskid` int(11) NOT NULL,
  `moment` int(11) NULL DEFAULT 0,
  `staffid` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL DEFAULT 0,
  `file_id` int(11) NOT NULL DEFAULT 0,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `file_id`(`file_id`) USING BTREE,
  INDEX `taskid`(`taskid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_task_comments
-- ----------------------------
INSERT INTO `mar_task_comments` VALUES (2, 'fdgfd dfgfdg fdgfdg fdgdfgsdvfd fghfgdg dfgfdg', 5, 1, 3, 0, 0, '2020-08-25 20:59:48');
INSERT INTO `mar_task_comments` VALUES (3, 'fdgfdgfdgfdgdsfsdf sdfsdf dsfsdfsd', 5, 0, 3, 0, 0, '2020-08-25 20:59:58');

-- ----------------------------
-- Table structure for mar_task_followers
-- ----------------------------
DROP TABLE IF EXISTS `mar_task_followers`;
CREATE TABLE `mar_task_followers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_tasks
-- ----------------------------
DROP TABLE IF EXISTS `mar_tasks`;
CREATE TABLE `mar_tasks`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `priority` int(11) NULL DEFAULT NULL,
  `dateadded` datetime(0) NOT NULL,
  `startdate` date NOT NULL,
  `duedate` date NULL DEFAULT NULL,
  `datefinished` datetime(0) NULL DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `is_added_from_contact` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `recurring_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `repeat_every` int(11) NULL DEFAULT NULL,
  `recurring` int(11) NOT NULL DEFAULT 0,
  `is_recurring_from` int(11) NULL DEFAULT NULL,
  `cycles` int(11) NOT NULL DEFAULT 0,
  `total_cycles` int(11) NOT NULL DEFAULT 0,
  `custom_recurring` tinyint(1) NOT NULL DEFAULT 0,
  `last_recurring_date` date NULL DEFAULT NULL,
  `rel_id` int(11) NULL DEFAULT NULL,
  `rel_type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `billable` tinyint(1) NOT NULL DEFAULT 0,
  `billed` tinyint(1) NOT NULL DEFAULT 0,
  `invoice_id` int(11) NOT NULL DEFAULT 0,
  `hourly_rate` decimal(15, 2) NOT NULL,
  `mieters` int(11) NULL DEFAULT 0,
  `client` int(11) NULL DEFAULT NULL,
  `milestone` int(11) NULL DEFAULT 0,
  `kanban_order` int(11) NOT NULL DEFAULT 0,
  `milestone_order` int(11) NOT NULL DEFAULT 0,
  `visible_to_client` tinyint(1) NOT NULL DEFAULT 0,
  `deadline_notified` int(11) NOT NULL DEFAULT 0,
  `project` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `active` int(1) UNSIGNED ZEROFILL NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rel_id`(`rel_id`) USING BTREE,
  INDEX `rel_type`(`rel_type`) USING BTREE,
  INDEX `milestone`(`milestone`) USING BTREE,
  INDEX `kanban_order`(`kanban_order`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_tasks
-- ----------------------------
INSERT INTO `mar_tasks` VALUES (5, 'dsfsdf', 'sqdqsd', 2, '2020-08-24 17:04:51', '2020-08-24', '2020-08-24', NULL, 3, 0, 1, NULL, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0.00, 21, NULL, 0, 0, 0, 0, 0, '1', 0);

-- ----------------------------
-- Table structure for mar_taskstimers
-- ----------------------------
DROP TABLE IF EXISTS `mar_taskstimers`;
CREATE TABLE `mar_taskstimers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `start_time` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `end_time` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `staff_id` int(11) NOT NULL,
  `hourly_rate` decimal(15, 2) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `task_id`(`task_id`) USING BTREE,
  INDEX `staff_id`(`staff_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_taxes
-- ----------------------------
DROP TABLE IF EXISTS `mar_taxes`;
CREATE TABLE `mar_taxes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `taxrate` decimal(15, 2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_ticket_replies
-- ----------------------------
DROP TABLE IF EXISTS `mar_ticket_replies`;
CREATE TABLE `mar_ticket_replies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticketid` int(11) NOT NULL,
  `userid` int(11) NULL DEFAULT NULL,
  `contactid` int(11) NOT NULL DEFAULT 0,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `date` datetime(0) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `attachment` int(11) NULL DEFAULT NULL,
  `admin` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_tickets
-- ----------------------------
DROP TABLE IF EXISTS `mar_tickets`;
CREATE TABLE `mar_tickets`  (
  `ticketid` int(11) NOT NULL AUTO_INCREMENT,
  `adminreplying` int(11) NOT NULL DEFAULT 0,
  `userid` int(11) NOT NULL,
  `contactid` int(11) NOT NULL DEFAULT 0,
  `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `department` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `service` int(11) NULL DEFAULT NULL,
  `ticketkey` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `admin` int(11) NULL DEFAULT NULL,
  `date` datetime(0) NOT NULL,
  `project_id` int(11) NOT NULL DEFAULT 0,
  `lastreply` datetime(0) NULL DEFAULT NULL,
  `clientread` int(11) NOT NULL DEFAULT 0,
  `adminread` int(11) NOT NULL DEFAULT 0,
  `assigned` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ticketid`) USING BTREE,
  INDEX `service`(`service`) USING BTREE,
  INDEX `department`(`department`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  INDEX `userid`(`userid`) USING BTREE,
  INDEX `priority`(`priority`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE,
  INDEX `contactid`(`contactid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_tickets_pipe_log
-- ----------------------------
DROP TABLE IF EXISTS `mar_tickets_pipe_log`;
CREATE TABLE `mar_tickets_pipe_log`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime(0) NOT NULL,
  `email_to` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_todos
-- ----------------------------
DROP TABLE IF EXISTS `mar_todos`;
CREATE TABLE `mar_todos`  (
  `todoid` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staffid` int(11) NOT NULL,
  `dateadded` datetime(0) NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `datefinished` datetime(0) NULL DEFAULT NULL,
  `item_order` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`todoid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_tracked_mails
-- ----------------------------
DROP TABLE IF EXISTS `mar_tracked_mails`;
CREATE TABLE `mar_tracked_mails`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rel_id` int(11) NOT NULL,
  `rel_type` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime(0) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `date_opened` datetime(0) NULL DEFAULT NULL,
  `subject` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_tsk_project
-- ----------------------------
DROP TABLE IF EXISTS `mar_tsk_project`;
CREATE TABLE `mar_tsk_project`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_user
-- ----------------------------
DROP TABLE IF EXISTS `mar_user`;
CREATE TABLE `mar_user`  (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `facebook` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `linkedin` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `phonenumber` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `skype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `datecreated` datetime(0) NOT NULL,
  `profile_image` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_login` datetime(0) NULL DEFAULT NULL,
  `last_activity` datetime(0) NULL DEFAULT NULL,
  `last_password_change` datetime(0) NULL DEFAULT NULL,
  `new_pass_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `new_pass_key_requested` datetime(0) NULL DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `role` int(11) NULL DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `default_language` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `direction` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `media_path_slug` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_not_staff` int(11) NOT NULL DEFAULT 0,
  `hourly_rate` decimal(15, 2) NOT NULL,
  `two_factor_auth_enabled` tinyint(1) NULL DEFAULT 0,
  `two_factor_auth_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `two_factor_auth_code_requested` datetime(0) NULL DEFAULT NULL,
  `email_signature` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  INDEX `firstname`(`firstname`) USING BTREE,
  INDEX `lastname`(`lastname`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_user
-- ----------------------------
INSERT INTO `mar_user` VALUES (1, 'markat@gmail.com', 'Sascha', 'Frühling ', '', '', '', '', '$2a$08$XTBt5Y.bxDaDw1/MLrx2le5aENNW.jjWWWD5wITPqjXIo.kIh6706', '2020-04-30 15:59:35', NULL, '130.180.2.129', '2020-08-21 13:15:22', '2020-08-21 21:03:52', NULL, NULL, NULL, 1, 0, 1, '', '', NULL, 0, 0.00, 0, NULL, NULL, '');
INSERT INTO `mar_user` VALUES (2, 'admin11@gmail.com', 'admin', 'admin11', '', '', '', '', '$2a$08$dNWBjJNwplxb5tl2u0B1E./rGSrMMy.afKVvj7QbbkbUkKQ6SjcwG', '2020-04-30 17:38:42', NULL, '129.0.76.165', '2020-05-04 19:03:28', '2020-05-05 06:41:33', NULL, NULL, NULL, 1, 1, 1, 'english', '', 'nusyce-tapigue', 0, 0.00, 0, NULL, NULL, '');
INSERT INTO `mar_user` VALUES (3, 'ceo@markat.com', 'Martin', 'Katzky', '', '', '', '', '$2a$08$extG/p26XCtRiYo37m6b5eFb0ICPzzbvlDzvLwcgAV04pgiRLsila', '2020-04-30 19:14:52', NULL, '::1', '2020-09-16 15:16:29', '2020-09-16 18:13:11', '2020-04-30 19:15:30', NULL, NULL, 0, 2, 1, 'german', '', 'ceo-director', 0, 0.00, 0, NULL, NULL, '');
INSERT INTO `mar_user` VALUES (4, 'sample@gmail.com', 'sample', 'Mitabeiter', NULL, NULL, '', NULL, '$2a$08$BNd0YK2Gp3aOMdG1fGsmBukkimRzD2AMtixzr6Fo9mIulSOxiaibq', '2020-07-07 17:57:24', NULL, '::1', '2020-09-15 17:31:55', '2020-09-15 18:46:30', '2020-09-15 15:31:28', NULL, NULL, 0, 1, 1, NULL, NULL, 'sample-mitabeiter', 0, 0.00, 0, NULL, NULL, '');
INSERT INTO `mar_user` VALUES (7, 'camWater@gmail.com', '', '', NULL, NULL, NULL, NULL, '$2a$08$sGaBftyeBbp/zJtFJoJLX.IS6jWq3S2HOdvYR0NiPeEtz.HOwGnl2', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 9999, 1, NULL, NULL, NULL, 3, 0.00, 0, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for mar_user_auto_login
-- ----------------------------
DROP TABLE IF EXISTS `mar_user_auto_login`;
CREATE TABLE `mar_user_auto_login`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_id` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_agent` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_login` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `staff` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_user_auto_login
-- ----------------------------
INSERT INTO `mar_user_auto_login` VALUES (1, '669677003f0045c5ad518b64ae3fdf0c', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '129.0.76.78', '2020-04-30 18:07:18', 1);
INSERT INTO `mar_user_auto_login` VALUES (2, 'fb01dd2cbc4f3495666c3b800b81d3a5', 2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '41.202.219.74', '2020-05-02 15:14:46', 1);
INSERT INTO `mar_user_auto_login` VALUES (3, 'a74e754a8bc36df3b7eebf10c1275e82', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '129.0.76.245', '2020-05-03 08:48:50', 1);
INSERT INTO `mar_user_auto_login` VALUES (4, '1a5ca680835d0672fa529f7190012053', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '41.202.219.70', '2020-05-04 21:08:19', 1);
INSERT INTO `mar_user_auto_login` VALUES (5, 'dbf8d7bad4655a103814e1017f1306b5', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', '154.72.167.181', '2020-05-15 04:39:32', 1);
INSERT INTO `mar_user_auto_login` VALUES (6, '7b262f14ee7b26784b2fc3be7619fecf', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', '129.0.76.92', '2020-05-21 14:45:43', 1);
INSERT INTO `mar_user_auto_login` VALUES (7, '842cb7bddc4ba050ff8d05a18f222093', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', '41.202.207.10', '2020-05-29 22:21:46', 1);
INSERT INTO `mar_user_auto_login` VALUES (8, '6702b623d6eeb6100a4064dfe69ad551', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '41.202.207.6', '2020-05-30 05:24:52', 1);
INSERT INTO `mar_user_auto_login` VALUES (9, 'f964d66866621a71342357bf1ec038b4', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '41.202.207.174', '2020-06-08 15:36:22', 1);
INSERT INTO `mar_user_auto_login` VALUES (10, '34a3b9ef0d80ca3060e234b28a7438bf', 4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '41.202.207.10', '2020-07-07 14:58:10', 1);
INSERT INTO `mar_user_auto_login` VALUES (11, '9f458d31cc19c958f11a492620e3ec9d', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '41.202.207.11', '2020-07-09 19:18:28', 1);
INSERT INTO `mar_user_auto_login` VALUES (12, '6f874a229e31ec0d2fce0cf57ddae039', 4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '41.202.207.15', '2020-07-27 13:36:05', 1);
INSERT INTO `mar_user_auto_login` VALUES (13, 'ed17f1de2932a2d924b32123b0605ae5', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '185.104.184.141', '2020-08-14 23:26:56', 1);
INSERT INTO `mar_user_auto_login` VALUES (14, 'bb813e54819169f108a9fa9e848068c9', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '129.0.76.28', '2020-08-15 04:52:37', 1);
INSERT INTO `mar_user_auto_login` VALUES (15, 'b092f489435f5ea48fa10d3ca741ebcb', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', '2020-08-19 04:46:54', 1);
INSERT INTO `mar_user_auto_login` VALUES (16, 'aae810cb8c60a6cc3a9733143c45833b', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '129.0.99.15', '2020-08-19 05:03:40', 1);
INSERT INTO `mar_user_auto_login` VALUES (23, '810cde16e64afaa88bb3fc9dbc06eb2c', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '::1', '2020-08-29 18:40:13', 1);

-- ----------------------------
-- Table structure for mar_user_departments
-- ----------------------------
DROP TABLE IF EXISTS `mar_user_departments`;
CREATE TABLE `mar_user_departments`  (
  `userdepartmentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  PRIMARY KEY (`userdepartmentid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_user_meta
-- ----------------------------
DROP TABLE IF EXISTS `mar_user_meta`;
CREATE TABLE `mar_user_meta`  (
  `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `client_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `contact_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_value` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`umeta_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_user_permissions
-- ----------------------------
DROP TABLE IF EXISTS `mar_user_permissions`;
CREATE TABLE `mar_user_permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `feature` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `capability` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 501 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mar_user_permissions
-- ----------------------------
INSERT INTO `mar_user_permissions` VALUES (20, 2, 'staff', 'view');
INSERT INTO `mar_user_permissions` VALUES (21, 2, 'staff', 'create');
INSERT INTO `mar_user_permissions` VALUES (22, 2, 'staff', 'edit');
INSERT INTO `mar_user_permissions` VALUES (23, 2, 'staff', 'delete');
INSERT INTO `mar_user_permissions` VALUES (24, 2, 'factoring', 'view');
INSERT INTO `mar_user_permissions` VALUES (25, 2, 'inventar', 'view');
INSERT INTO `mar_user_permissions` VALUES (26, 2, 'inventar', 'create');
INSERT INTO `mar_user_permissions` VALUES (27, 2, 'inventar', 'edit');
INSERT INTO `mar_user_permissions` VALUES (28, 2, 'inventar', 'delete');
INSERT INTO `mar_user_permissions` VALUES (29, 2, 'mieter', 'view');
INSERT INTO `mar_user_permissions` VALUES (30, 2, 'mieter', 'create');
INSERT INTO `mar_user_permissions` VALUES (31, 2, 'mieter', 'edit');
INSERT INTO `mar_user_permissions` VALUES (32, 2, 'mieter', 'delete');
INSERT INTO `mar_user_permissions` VALUES (33, 2, 'wohnungen', 'view');
INSERT INTO `mar_user_permissions` VALUES (34, 2, 'wohnungen', 'create');
INSERT INTO `mar_user_permissions` VALUES (35, 2, 'wohnungen', 'edit');
INSERT INTO `mar_user_permissions` VALUES (36, 2, 'wohnungen', 'delete');
INSERT INTO `mar_user_permissions` VALUES (37, 2, 'belegungsplan', 'edit');
INSERT INTO `mar_user_permissions` VALUES (38, 2, 'tasks', 'edit');
INSERT INTO `mar_user_permissions` VALUES (416, 3, 'customers', 'view');
INSERT INTO `mar_user_permissions` VALUES (417, 3, 'customers', 'create');
INSERT INTO `mar_user_permissions` VALUES (418, 3, 'customers', 'edit');
INSERT INTO `mar_user_permissions` VALUES (419, 3, 'customers', 'delete');
INSERT INTO `mar_user_permissions` VALUES (420, 3, 'mieter', 'view_bor');
INSERT INTO `mar_user_permissions` VALUES (421, 3, 'mieter', 'view_fer');
INSERT INTO `mar_user_permissions` VALUES (422, 3, 'mieter', 'view_tops');
INSERT INTO `mar_user_permissions` VALUES (423, 3, 'mieter', 'create');
INSERT INTO `mar_user_permissions` VALUES (424, 3, 'mieter', 'edit');
INSERT INTO `mar_user_permissions` VALUES (425, 3, 'mieter', 'delete');
INSERT INTO `mar_user_permissions` VALUES (426, 3, 'wohnungen', 'view');
INSERT INTO `mar_user_permissions` VALUES (427, 3, 'wohnungen', 'create');
INSERT INTO `mar_user_permissions` VALUES (428, 3, 'wohnungen', 'edit');
INSERT INTO `mar_user_permissions` VALUES (429, 3, 'wohnungen', 'delete');
INSERT INTO `mar_user_permissions` VALUES (430, 3, 'tasks', 'view');
INSERT INTO `mar_user_permissions` VALUES (431, 3, 'tasks', 'create');
INSERT INTO `mar_user_permissions` VALUES (432, 3, 'tasks', 'edit');
INSERT INTO `mar_user_permissions` VALUES (433, 3, 'tasks', 'delete');
INSERT INTO `mar_user_permissions` VALUES (434, 3, 'invoices', 'view');
INSERT INTO `mar_user_permissions` VALUES (435, 3, 'invoices', 'create');
INSERT INTO `mar_user_permissions` VALUES (436, 3, 'invoices', 'edit');
INSERT INTO `mar_user_permissions` VALUES (437, 3, 'invoices', 'delete');
INSERT INTO `mar_user_permissions` VALUES (438, 3, 'items', 'view');
INSERT INTO `mar_user_permissions` VALUES (439, 3, 'items', 'create');
INSERT INTO `mar_user_permissions` VALUES (440, 3, 'items', 'edit');
INSERT INTO `mar_user_permissions` VALUES (441, 3, 'items', 'delete');
INSERT INTO `mar_user_permissions` VALUES (442, 3, 'roles', 'view');
INSERT INTO `mar_user_permissions` VALUES (443, 3, 'roles', 'create');
INSERT INTO `mar_user_permissions` VALUES (444, 3, 'roles', 'edit');
INSERT INTO `mar_user_permissions` VALUES (445, 3, 'roles', 'delete');
INSERT INTO `mar_user_permissions` VALUES (446, 3, 'projects', 'view');
INSERT INTO `mar_user_permissions` VALUES (447, 3, 'projects', 'create');
INSERT INTO `mar_user_permissions` VALUES (448, 3, 'projects', 'edit');
INSERT INTO `mar_user_permissions` VALUES (449, 3, 'projects', 'delete');
INSERT INTO `mar_user_permissions` VALUES (450, 3, 'settings', 'view');
INSERT INTO `mar_user_permissions` VALUES (451, 3, 'settings', 'edit');
INSERT INTO `mar_user_permissions` VALUES (452, 3, 'staff', 'view');
INSERT INTO `mar_user_permissions` VALUES (453, 3, 'staff', 'create');
INSERT INTO `mar_user_permissions` VALUES (454, 3, 'staff', 'edit');
INSERT INTO `mar_user_permissions` VALUES (455, 3, 'staff', 'delete');
INSERT INTO `mar_user_permissions` VALUES (456, 3, 'personalplan', 'view');
INSERT INTO `mar_user_permissions` VALUES (457, 3, 'personalplan', 'create');
INSERT INTO `mar_user_permissions` VALUES (458, 3, 'personalplan', 'edit');
INSERT INTO `mar_user_permissions` VALUES (459, 3, 'personalplan', 'delete');
INSERT INTO `mar_user_permissions` VALUES (460, 3, 'factoring', 'view');
INSERT INTO `mar_user_permissions` VALUES (461, 3, 'inventar', 'view');
INSERT INTO `mar_user_permissions` VALUES (462, 3, 'inventar', 'create');
INSERT INTO `mar_user_permissions` VALUES (463, 3, 'inventar', 'edit');
INSERT INTO `mar_user_permissions` VALUES (464, 3, 'inventar', 'delete');
INSERT INTO `mar_user_permissions` VALUES (465, 3, 'cars', 'view');
INSERT INTO `mar_user_permissions` VALUES (466, 3, 'cars', 'create');
INSERT INTO `mar_user_permissions` VALUES (467, 3, 'cars', 'edit');
INSERT INTO `mar_user_permissions` VALUES (468, 3, 'cars', 'delete');
INSERT INTO `mar_user_permissions` VALUES (469, 3, 'lieferanten', 'view');
INSERT INTO `mar_user_permissions` VALUES (470, 3, 'lieferanten', 'create');
INSERT INTO `mar_user_permissions` VALUES (471, 3, 'lieferanten', 'edit');
INSERT INTO `mar_user_permissions` VALUES (472, 3, 'lieferanten', 'delete');
INSERT INTO `mar_user_permissions` VALUES (473, 3, 'visualisierung', 'view');
INSERT INTO `mar_user_permissions` VALUES (474, 3, 'visualisierung', 'create');
INSERT INTO `mar_user_permissions` VALUES (475, 3, 'visualisierung', 'edit');
INSERT INTO `mar_user_permissions` VALUES (476, 3, 'visualisierung', 'delete');
INSERT INTO `mar_user_permissions` VALUES (477, 3, 'belegungsplan', 'view');
INSERT INTO `mar_user_permissions` VALUES (478, 3, 'belegungsplan', 'create');
INSERT INTO `mar_user_permissions` VALUES (479, 3, 'belegungsplan', 'edit');
INSERT INTO `mar_user_permissions` VALUES (480, 3, 'belegungsplan', 'delete');
INSERT INTO `mar_user_permissions` VALUES (481, 3, 'dashboard', 'admin');
INSERT INTO `mar_user_permissions` VALUES (482, 4, 'mieter', 'create');
INSERT INTO `mar_user_permissions` VALUES (483, 4, 'mieter', 'edit');
INSERT INTO `mar_user_permissions` VALUES (484, 4, 'mieter', 'delete');
INSERT INTO `mar_user_permissions` VALUES (485, 4, 'wohnungen', 'view');
INSERT INTO `mar_user_permissions` VALUES (486, 4, 'wohnungen', 'create');
INSERT INTO `mar_user_permissions` VALUES (487, 4, 'wohnungen', 'edit');
INSERT INTO `mar_user_permissions` VALUES (488, 4, 'wohnungen', 'delete');
INSERT INTO `mar_user_permissions` VALUES (489, 4, 'tasks', 'create');
INSERT INTO `mar_user_permissions` VALUES (490, 4, 'tasks', 'edit');
INSERT INTO `mar_user_permissions` VALUES (491, 4, 'roles', 'view');
INSERT INTO `mar_user_permissions` VALUES (492, 4, 'roles', 'create');
INSERT INTO `mar_user_permissions` VALUES (493, 4, 'roles', 'edit');
INSERT INTO `mar_user_permissions` VALUES (494, 4, 'roles', 'delete');
INSERT INTO `mar_user_permissions` VALUES (495, 4, 'staff', 'view');
INSERT INTO `mar_user_permissions` VALUES (496, 4, 'staff', 'create');
INSERT INTO `mar_user_permissions` VALUES (497, 4, 'staff', 'edit');
INSERT INTO `mar_user_permissions` VALUES (498, 4, 'staff', 'delete');
INSERT INTO `mar_user_permissions` VALUES (499, 4, 'firma', 'edit');
INSERT INTO `mar_user_permissions` VALUES (500, 4, 'menu', 'edit');

-- ----------------------------
-- Table structure for mar_vault
-- ----------------------------
DROP TABLE IF EXISTS `mar_vault`;
CREATE TABLE `mar_vault`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `server_address` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `port` int(11) NULL DEFAULT NULL,
  `username` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `creator` int(11) NOT NULL,
  `creator_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `share_in_projects` tinyint(1) NOT NULL DEFAULT 0,
  `last_updated` datetime(0) NULL DEFAULT NULL,
  `last_updated_from` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mar_web_to_lead
-- ----------------------------
DROP TABLE IF EXISTS `mar_web_to_lead`;
CREATE TABLE `mar_web_to_lead`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lead_source` int(11) NOT NULL,
  `lead_status` int(11) NOT NULL,
  `notify_lead_imported` int(11) NOT NULL DEFAULT 1,
  `notify_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notify_ids` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `responsible` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `form_data` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `recaptcha` int(11) NOT NULL DEFAULT 0,
  `submit_btn_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `success_submit_msg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `language` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `allow_duplicate` int(11) NOT NULL DEFAULT 1,
  `mark_public` int(11) NOT NULL DEFAULT 0,
  `track_duplicate_field` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `track_duplicate_field_and` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_task_on_duplicate` int(11) NOT NULL DEFAULT 0,
  `dateadded` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
