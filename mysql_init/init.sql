CREATE TABLE `bbs` (
    `id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `comment` varchar(100) NOT NULL,
    `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

ALTER TABLE `bbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  ADD PRIMARY KEY (`id`);