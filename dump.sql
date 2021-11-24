CREATE TABLE `logs` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `ts` timestamp NOT NULL,
    `type` int(11) NOT NULL,
    `message` text NOT NULL,
    PRIMARY KEY (`id`)
);

ALTER TABLE `logs` ADD INDEX `type_idx` (`type`);

INSERT INTO `logs` (ts, type, message) VALUES
('2021-11-24 16:30:15', 1, 'Log 1 for type 1'),
('2021-11-24 16:30:16', 1, 'Log 2 for type 1'),
('2021-11-24 16:30:17', 1, 'Log 3 for type 1'),
('2021-11-24 16:30:18', 1, 'Log 4 for type 1'),
('2021-11-24 16:30:19', 1, 'Log 5 for type 1'),
('2021-11-24 16:30:20', 1, 'Log 6 for type 1'),
('2021-11-24 16:30:21', 1, 'Log 7 for type 1'),
('2021-11-24 16:30:22', 1, 'Log 8 for type 1'),
('2021-11-24 16:30:23', 1, 'Log 9 for type 1'),
('2021-11-24 16:30:24', 1, 'Log 10 for type 1'),
('2021-11-24 16:30:25', 1, 'Log 11 for type 1'),
('2021-11-24 16:30:26', 1, 'Log 12 for type 1'),
('2021-11-24 16:30:27', 1, 'Log 13 for type 1'),
('2021-11-24 16:30:28', 1, 'Log 14 for type 1'),
('2021-11-24 16:30:29', 1, 'Log 15 for type 1'),
('2021-11-24 16:30:30', 1, 'Log 16 for type 1'),
('2021-11-24 16:30:31', 1, 'Log 17 for type 1'),
('2021-11-24 16:30:32', 1, 'Log 18 for type 1'),
('2021-11-24 16:30:33', 1, 'Log 19 for type 1'),
('2021-11-24 16:30:34', 1, 'Log 20 for type 1'),
('2021-11-24 16:30:35', 1, 'Log 21 for type 1'),
('2021-11-24 16:30:36', 1, 'Log 22 for type 1'),
('2021-11-24 16:30:37', 1, 'Log 23 for type 1'),
('2021-11-24 16:30:38', 1, 'Log 24 for type 1'),
('2021-11-24 16:30:39', 1, 'Log 25 for type 1'),
('2021-11-24 16:30:40', 1, 'Log 26 for type 1'),
('2021-11-24 16:30:41', 1, 'Log 27 for type 1'),
('2021-11-24 16:30:42', 1, 'Log 28 for type 1'),
('2021-11-24 16:30:43', 1, 'Log 29 for type 1'),
('2021-11-24 16:30:44', 1, 'Log 30 for type 1'),
('2021-11-24 16:30:45', 1, 'Log 31 for type 1'),
('2021-11-24 16:31:45', 2, 'Log 1 for type 2'),
('2021-11-24 16:32:45', 2, 'Log 2 for type 2'),
('2021-11-24 16:33:45', 2, 'Log 3 for type 2'),
('2021-11-24 16:34:45', 2, 'Log 4 for type 2'),
('2021-11-24 16:34:10', 2, 'Log 5 for type 2'),
('2021-11-24 16:34:11', 2, 'Log 6 for type 2'),
('2021-11-24 16:30:12', 2, 'Log 7 for type 2'),
('2021-11-24 16:30:13', 2, 'Log 8 for type 2'),
('2021-11-24 16:30:14', 2, 'Log 9 for type 2'),
('2021-11-24 16:30:15', 2, 'Log 10 for type 2'),
('2021-11-24 16:30:16', 2, 'Log 11 for type 2'),
('2021-11-24 16:30:17', 2, 'Log 12 for type 2'),
('2021-11-24 16:30:18', 2, 'Log 13 for type 2'),
('2021-11-24 16:30:19', 2, 'Log 14 for type 2'),
('2021-11-24 16:30:20', 2, 'Log 15 for type 2'),
('2021-11-24 16:30:21', 2, 'Log 16 for type 2'),
('2021-11-24 16:30:22', 2, 'Log 17 for type 2'),
('2021-11-24 16:30:23', 2, 'Log 18 for type 2'),
('2021-11-24 16:30:24', 2, 'Log 19 for type 2'),
('2021-11-24 16:30:25', 2, 'Log 20 for type 2'),
('2021-11-24 16:30:26', 2, 'Log 21 for type 2'),
('2021-11-24 16:30:27', 2, 'Log 22 for type 2'),
('2021-11-24 16:30:28', 2, 'Log 23 for type 2'),
('2021-11-24 16:30:29', 2, 'Log 24 for type 2'),
('2021-11-24 16:30:30', 2, 'Log 25 for type 2'),
('2021-11-24 16:30:31', 2, 'Log 26 for type 2'),
('2021-11-24 16:30:32', 2, 'Log 27 for type 2'),
('2021-11-24 16:30:33', 2, 'Log 28 for type 2'),
('2021-11-24 16:30:34', 2, 'Log 29 for type 2'),
('2021-11-24 16:30:35', 2, 'Log 30 for type 2'),
('2021-11-24 16:30:35', 3, 'Log 1 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 2 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 3 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 4 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 5 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 6 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 7 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 8 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 9 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 10 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 11 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 12 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 13 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 14 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 15 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 16 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 17 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 18 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 19 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 20 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 21 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 22 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 23 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 24 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 25 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 26 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 27 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 28 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 29 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 30 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 31 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 32 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 33 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 34 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 35 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 36 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 37 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 38 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 39 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 40 for type 3'),
('2021-11-24 16:30:35', 3, 'Log 41 for type 3'),
('2021-11-24 16:31:10', 4, 'Log 1 for type 4'),
('2021-11-24 16:31:11', 4, 'Log 2 for type 4'),
('2021-11-24 16:31:12', 4, 'Log 3 for type 4'),
('2021-11-24 16:31:13', 4, 'Log 4 for type 4'),
('2021-11-24 16:31:14', 4, 'Log 5 for type 4'),
('2021-11-24 16:31:15', 4, 'Log 6 for type 4'),
('2021-11-24 16:31:16', 4, 'Log 7 for type 4'),
('2021-11-24 16:31:17', 4, 'Log 8 for type 4'),
('2021-11-24 16:31:18', 4, 'Log 9 for type 4'),
('2021-11-24 16:31:19', 4, 'Log 10 for type 4'),
('2021-11-24 16:31:20', 4, 'Log 11 for type 4'),
('2021-11-24 16:31:21', 4, 'Log 12 for type 4'),
('2021-11-24 16:31:22', 4, 'Log 13 for type 4'),
('2021-11-24 16:31:23', 4, 'Log 14 for type 4'),
('2021-11-24 16:31:24', 4, 'Log 15 for type 4'),
('2021-11-24 16:31:25', 4, 'Log 16 for type 4'),
('2021-11-24 16:31:26', 4, 'Log 17 for type 4'),
('2021-11-24 16:31:27', 4, 'Log 18 for type 4'),
('2021-11-24 16:31:28', 4, 'Log 19 for type 4'),
('2021-11-24 16:31:29', 4, 'Log 20 for type 4'),
('2021-11-24 16:31:30', 4, 'Log 21 for type 4'),
('2021-11-24 16:31:31', 4, 'Log 22 for type 4'),
('2021-11-24 16:31:32', 4, 'Log 23 for type 4'),
('2021-11-24 16:31:33', 4, 'Log 24 for type 4'),
('2021-11-24 16:31:34', 4, 'Log 25 for type 4'),
('2021-11-24 16:31:35', 4, 'Log 26 for type 4'),
('2021-11-24 16:31:36', 4, 'Log 27 for type 4'),
('2021-11-24 16:31:37', 4, 'Log 28 for type 4'),
('2021-11-24 16:31:38', 4, 'Log 29 for type 4'),
('2021-11-24 16:31:39', 4, 'Log 30 for type 4'),
('2021-11-24 16:31:40', 4, 'Log 31 for type 4'),
('2021-11-24 16:31:41', 5, 'Log 1 for type 5'),
('2021-11-24 16:31:42', 5, 'Log 2 for type 5'),
('2021-11-24 16:31:43', 5, 'Log 3 for type 5'),
('2021-11-24 16:31:44', 5, 'Log 4 for type 5'),
('2021-11-24 16:31:45', 5, 'Log 5 for type 5'),
('2021-11-24 16:31:46', 5, 'Log 6 for type 5'),
('2021-11-24 16:31:47', 5, 'Log 7 for type 5'),
('2021-11-24 16:31:48', 5, 'Log 8 for type 5'),
('2021-11-24 16:31:49', 5, 'Log 9 for type 5'),
('2021-11-24 16:31:50', 5, 'Log 10 for type 5'),
('2021-11-24 16:31:51', 5, 'Log 11 for type 5'),
('2021-11-24 16:31:52', 5, 'Log 12 for type 5'),
('2021-11-24 16:31:53', 5, 'Log 13 for type 5'),
('2021-11-24 16:31:54', 5, 'Log 14 for type 5'),
('2021-11-24 16:31:55', 5, 'Log 15 for type 5'),
('2021-11-24 16:31:56', 5, 'Log 16 for type 5'),
('2021-11-24 16:31:57', 5, 'Log 17 for type 5'),
('2021-11-24 16:31:58', 5, 'Log 18 for type 5'),
('2021-11-24 16:31:59', 5, 'Log 19 for type 5'),
('2021-11-24 16:32:10', 5, 'Log 20 for type 5'),
('2021-11-24 16:32:11', 5, 'Log 21 for type 5'),
('2021-11-24 16:32:12', 5, 'Log 22 for type 5'),
('2021-11-24 16:32:13', 5, 'Log 23 for type 5'),
('2021-11-24 16:32:14', 5, 'Log 24 for type 5'),
('2021-11-24 16:32:15', 5, 'Log 25 for type 5'),
('2021-11-24 16:32:16', 5, 'Log 26 for type 5'),
('2021-11-24 16:32:17', 5, 'Log 27 for type 5'),
('2021-11-24 16:32:18', 5, 'Log 28 for type 5'),
('2021-11-24 16:32:19', 5, 'Log 29 for type 5'),
('2021-11-24 16:32:19', 5, 'Log 30 for type 5'),
('2021-11-24 16:32:20', 5, 'Log 31 for type 5'),
('2021-11-24 16:32:21', 5, 'Log 32 for type 5'),
('2021-11-24 16:32:22', 5, 'Log 33 for type 5'),
('2021-11-24 16:32:23', 5, 'Log 34 for type 5'),
('2021-11-24 16:32:24', 5, 'Log 35 for type 5'),
('2021-11-24 16:32:25', 5, 'Log 36 for type 5'),
('2021-11-24 16:32:26', 5, 'Log 37 for type 5'),
('2021-11-24 16:32:27', 5, 'Log 38 for type 5'),
('2021-11-24 16:33:28', 5, 'Log 39 for type 5'),
('2021-11-24 16:33:29', 5, 'Log 40 for type 5'),
('2021-11-24 16:33:30', 5, 'Log 41 for type 5');

