-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 11 月 29 日 02:04
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shiyanbar`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(8, '11111', 'b59c67bf196a4758191e42f76670ceba'),
(7, 'root', '63a9f0ea7bb98050796b649e85481845'),
(11, '徐翔', '74b87337454200d4d33f80c4663dc5e5'),
(12, '桂', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'anling', '0526435e6a187d10111bfa7b4afeb8d5');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '50',
  `desc` varchar(500) NOT NULL,
  `click` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `catename`, `sort`, `desc`, `click`) VALUES
(2, 'WEB', 50, 'WEB应用在今天越来越广泛，也是CTF夺旗竞赛中的主要题型，题目涉及到常见的Web漏洞，诸如注入、XSS、文件包含、代码执行、上传等漏洞', 1220),
(3, '密码学', 50, 'Crypto即密码学，题目考察各种加解密技术，包括古典加密技术、现代加密技术甚至出题者自创加密技术，主要考查参赛选手密码学相关知识点。', 52),
(4, '安全杂项', 50, 'MISC即安全杂项，题目涉及流量分析、电子取证、人肉搜索、数据分析、大数据统计等等，覆盖面比较广，主要考查参赛选手的各种基础综合知识。', 476),
(5, '逆向工程', 50, 'Reverse即逆向工程，题目涉及到软件逆向、破解技术等，要求有较强的反汇编、反编译扎实功底。主要考查参赛选手的逆向分析能力', 28),
(6, '隐写术', 50, 'WEB应用在今天越来越广泛，也是CTF夺旗竞赛中的主要题型，题目涉及到常见的Web漏洞，诸如注入、XSS、文件包含、代码执行、上传等漏洞。', 20),
(9, '编程', 50, 'PPC即编程类题目，题目涉及到程序编写、编程算法实现，当然PPC相比ACM来说，还是较为容易的。至于编程语言嘛，推荐使用Python或Ruby来尝试', 20);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `uid`, `comment`, `time`) VALUES
(6, 4, '各位大佬，如果自己按照相同的算法和key生成cookie，然后发送过去（不会再被检测），为什么解密会报错，收到的是ERROR（自己解密没有问题啊）？', '1542110037'),
(5, 4, '嗷嗷', '1542109637'),
(7, 4, 'Hello! ??一脸懵逼', '1542110102'),
(8, 4, 'cbc字节反转攻击', '1542110120'),
(9, 4, 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''0'' at line 1', '1542110184'),
(10, 4, '各位大神，那御剑有什么用呢\n\n', '1542110642'),
(23, 10, '你要离开，我知道很简单。', '1542512397'),
(21, 8, '无人能解', '1542443726'),
(22, 7, 'QAQ 好难啊完全没有思路', '1542511300'),
(19, 5, '登录一下', '1542185578'),
(24, 7, '但事实上', '1542535005');

-- --------------------------------------------------------

--
-- 表的结构 `solve`
--

CREATE TABLE IF NOT EXISTS `solve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `aid` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `solve`
--

INSERT INTO `solve` (`id`, `uid`, `aid`) VALUES
(1, 5, '2,3,2,4'),
(2, 8, '8,8,8,8,8,2,2'),
(3, 7, '2,4,3'),
(4, 10, '2'),
(5, 11, '3,18');

-- --------------------------------------------------------

--
-- 表的结构 `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `score` int(11) NOT NULL,
  `level` varchar(2) NOT NULL,
  `click` int(11) NOT NULL,
  `flag` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `subject`
--

INSERT INTO `subject` (`id`, `title`, `cid`, `url`, `score`, `level`, `click`, `flag`, `desc`) VALUES
(2, '后台管理', 2, 'http://ctf5.shiyanbar.com/web/houtai/ffifdyop.php ', 10, '易', 823, 'flag{ffifdyop_has_trash}', '小试牛刀'),
(3, '简单的ＳＱＬ注入', 2, 'http://ctf5.shiyanbar.com/423/web/ ', 10, '易', 112, 'a', '通过注入获得flag值（提交格式：flag{}）。'),
(4, '上传绕过', 2, ' http://ctf5.shiyanbar.com/web/upload', 10, '易', 40, 'a', 'aaaa'),
(5, '天网管理系统', 2, ' http://ctf5.shiyanbar.com/10/web1/', 10, '易', 28, 'ｘｘｘ', '初出茅庐'),
(6, '程序逻辑问题', 2, ' http://ctf5.shiyanbar.com/web/5/index.php', 20, '中', 36, 'ｘｘｘ', ''),
(7, '密码学', 3, 'xx', 10, 'xx', 52, 'xx', ''),
(8, '安全杂项', 4, 'xx', 10, 'xx', 456, 'a', '安全问题。'),
(10, 'whatamitoyou', 5, ' http://ctf5.shiyanbar.com/reverse/whatamitoyou/whatamitoyou', 25, '中', 8, 'aa', ''),
(11, '欢迎来到地狱', 6, 'http://ctf5.shiyanbar.com/stega/hell/欢迎来到地狱.zip', 30, '难', 0, 'aa', '连环套哦。格式CTF{xxxx}'),
(12, '小猴子爱吃桃子', 9, ' http://ctf5.shiyanbar.com/ppc/eat/eat.txt', 20, '中', 0, 'a', '猴子吃桃问题：猴子第一天摘下若干个桃子，当即吃了一半，还不瘾，又多吃了一个 第二天早上又将剩 下的桃子吃掉一半，又多吃了一个。以后每天早上都吃了前一天剩下  的一半零一个。到第10天早上想再吃时，见只剩下一个桃子了。求第一天共摘了多少。'),
(13, '你没有见过的加密！', 3, ' http://ctf5.shiyanbar.com/misc/LoveLinux/test.rar', 20, '中', 4, 'a', 'MDEzMjE5MDAyMTg0MTUzMjQwMTQ0MDc3MjUzMDk2MTc1MTUzMTE4MTg4MDEwMDA2MTg4MDA0MjM4MDI1MTA3MTU4MTc5MTM4 请喜欢linux的你，自己动手写出解密代码吧'),
(14, 'spaceport-map', 3, 'http://ctf5.shiyanbar.com/misc/spaceport-map/spaceportmap.gif', 25, '中', 0, 'a', 'The map of the spaceport is hard to parse, but you''re pretty sure there is some hidden information, somewhere...'),
(15, '功夫秘籍', 4, ' http://ctf5.shiyanbar.com/423/misc/kungfu.rar', 20, '中', 4, 'a', '传说得到这个秘籍的人都修炼成了绝世神功'),
(16, '围在栅栏中的爱', 3, '', 15, '易', 0, 'a', '最近一直在好奇一个问题，QWE到底等不等于ABC？  -.- .. --.- .-.. .-- - ..-. -.-. --.- --. -. ... --- --- '),
(17, '困在栅栏里的凯撒', 3, '', 20, '中', 0, 'a', '小白发现了一段很6的字符：NlEyQd{seft}'),
(18, '因缺思汀的绕过', 2, ' http://ctf5.shiyanbar.com/web/pcat/index.php ', 30, '难', 8, 'a', ' 访问解题链接去访问题目,可以进行答题。根据web题一般解题思路去解答此题。看源码，请求，响应等。提交与题目要求一致的内容即可返回flag。然后提交正确的flag即可得分。web题主要考察SQL注入，XSS等相关知识。涉及方向较多。此题主要涉及源码审计，MySQL相关的知识。'),
(19, 'Once More', 2, 'http://ctf5.shiyanbar.com/web/more.php ', 20, '中', 20, 'a', '啊拉？又是php审计。已经想吐了。 hint：ereg()函数有漏洞哩；从小老师就说要用科学的方法来算数。'),
(20, '简单的sql注入之3', 2, ' http://ctf5.shiyanbar.com/web/index_3.php', 20, '易', 0, '123', 'mysql报错注入'),
(21, 'Forms', 2, ' http://ctf5.shiyanbar.com/10/main.php ', 10, '中', 0, '123', '似乎有人觉得PIN码是不可破解的，让我们证明他是错的。'),
(22, '拐弯抹角', 2, ' http://ctf5.shiyanbar.com/indirection/', 20, '中', 4, 'qwwwwqwq', '如何欺骗服务器，才能拿到Flag？'),
(23, 'RSAROLL', 3, ' http://ctf5.shiyanbar.com/crypto/RSAROLL.txt', 20, '中', 4, 'a', 'RSA roll！roll！roll！'),
(24, '奇妙的音乐', 3, ' http://ctf5.shiyanbar.com/crypto/123.zip', 20, '中', 0, 'a', '据说flag就藏在这段音乐中，请仔细听。'),
(25, '我喜欢培根', 3, ' http://ctf5.shiyanbar.com/crypto/enc1.txt', 30, '难', 0, '', '密码是门学问'),
(26, 'RSA实践', 3, '', 20, '易', 0, '', '在一次RSA密钥对生成中，假设p=473398607161，q=4511491，e=17 求解出d 将得到的d提交'),
(27, '古典密码的安全性不高，但仍然十分美妙，请破译下面的密文', 2, ' http://ctf5.shiyanbar.com/qwctf/1.html', 30, '难', 4, '', '尝试一下吧'),
(28, '这里没有key', 3, 'http://ctf5.shiyanbar.com:8080/4/index.html', 20, '中', 0, 'a', '你说没有就没有啊，俺为啥要听你的啊'),
(29, '你知道他是谁吗？', 4, 'http://ctf5.shiyanbar.com/misc/NF/NF.rar', 30, '难', 12, '', 'windows，winrar'),
(30, 'flag.xls', 4, ' http://ctf5.shiyanbar.com/misc/flag.xls', 20, '中', 0, 'a', 'flag就在excel表格里，仔细找找！'),
(31, '解码磁带', 4, ' http://ctf5.shiyanbar.com/misc/cidai.html', 30, '难', 0, '', '在这圈磁带上有一些字符''o''和下划线''_''。解码磁带'),
(32, '64格', 4, ' http://ctf5.shiyanbar.com/misc/64格.rar', 10, '易', 0, 'a', '听说睁大眼睛就能找到flag O.O'),
(33, 'v', 4, ' http://ctf5.shiyanbar.com/misc/funfile', 20, '中', 16, '', '这是一个有趣的文件，打开看看你能想到什么'),
(34, '你有记日志的习惯吗', 4, 'http://ctf5.shiyanbar.com/sec/1/', 20, '中', 0, 'a', '某一年的某一天，某台服务器被入侵了，你吓坏了'),
(35, 'CFG to C', 5, ' http://ctf5.shiyanbar.com/reverse/cfg-to-c/index.html', 10, '易', 4, '', 'Wouldn''t it be cool to be able to have one of these patrol drones to do your bidding?! Figure out the correct sequence of C functions from the following control flow graphs and you should be well on your way.'),
(36, 'py137', 5, ' http://ctf5.shiyanbar.com/reverse/py137/py_d5764c66f02cccdb356c532d60d4d079.zip', 20, '中', 4, '', 'We permutate the opcode of python2.7, and use it to encrypt the flag.. Try to recover it!'),
(37, '逆向观察', 5, ' http://ctf5.shiyanbar.com/reverse/rev50/rev50', 20, '中', 0, '', 'a simple reverse view'),
(38, '逆向观察', 2, ' http://ctf5.shiyanbar.com/reverse/rev50/rev50', 10, '易', 20, '', 'easycreakme'),
(39, 'whatamitoyou', 5, 'http://ctf5.shiyanbar.com/reverse/whatamitoyou/whatamitoyou', 20, '中', 8, '', '你会唱歌吗？'),
(40, '迷路', 2, ' http://ctf5.shiyanbar.com/re/crackme.exe', 20, '中', 20, '', '这是一个简单的程序，请找到其中隐藏的Flag'),
(41, '100w', 5, ' http://ctf5.shiyanbar.com/re/100w.exe', 20, '中', 0, '', '点开解题链接会下载一个100w.exe的软件，需要对软件进行逆向，破解等操作，得到一个password，输入正确的password即可弹出flag。在答题界面输入正确的flag即可得分。此题主要考察对软件的逆向，破解和代码实现的知识。'),
(42, 'Just Click', 5, ' http://ctf5.shiyanbar.com/re/rev4.exe', 20, '中', 4, '', '拿到答案需要正确地点击按钮'),
(43, '分道扬镳', 5, 'http://ctf5.shiyanbar.com/423/re/rev2.exe', 10, '易', 0, '', '注意进入正确的流程，用最短的步骤走完迷宫'),
(44, 'Keylead（ASIS CTF 2015）', 5, ' http://ctf5.shiyanbar.com/re/keylead', 20, '中', 0, '', 'find the flag in this file'),
(45, '此处无声', 5, ' http://ctf5.shiyanbar.com/crack/5/', 10, '易', 0, '', '……………………………………'),
(46, 'Black Hole', 6, ' http://ctf5.shiyanbar.com/stega/black-hole/blackhole.img', 20, '中', 4, '', 'Near the galactic core, you find a beacon indicating that an ancient civilization hid one of their worlds within a nearby black hole. Is this what passes for intergalactic humor, or is there actually something in there?'),
(47, '九连环', 6, ' http://ctf5.shiyanbar.com/stega/huan/123456cry.jpg', 20, '中', 0, 'a', '小试牛刀'),
(48, '黑与白(二)', 6, 'http://ctf5.shiyanbar.com/stega/yhpargonagets.png', 10, '易', 4, '', '仔细看看文件。向pcat致敬。 '),
(49, '想看正面？那就要看仔细了！', 6, ' http://ctf5.shiyanbar.com/stega/meinv.jpg', 10, '易', 8, '', '看背影是不是很nice！想看正面？那就要看仔细了！'),
(50, '复杂的QR_code', 6, ' http://ctf5.shiyanbar.com/stega/QR_code.png', 20, '中', 0, '', '从二维码中找'),
(51, 'so beautiful so white', 6, ' http://ctf5.shiyanbar.com/stega/white.zip', 20, '中', 4, '123', '压缩包的密码就藏在这幅白色图片中，仔细找找看吧'),
(52, '最低位的亲吻', 6, ' http://ctf5.shiyanbar.com/stega/01.bmp', 20, '中', 0, '', '二战胜利后的亲吻！女主的腰下的好低！真的很低！最低位了！'),
(53, '认真你就输了', 6, 'http://ctf5.shiyanbar.com/stega/excel_data.xlsx', 10, '易', 0, 'ｘｘｘ', '在表格里？在表格里！'),
(54, '男神一般都很低调很低调的！！', 6, ' http://ctf5.shiyanbar.com/stega/男神.zip', 20, '中', 0, '', '根据提示会下载一个压缩文件，将该文件解压后得到两张图片。使用各种针对隐写的工具比如Stegsolve，ps等来获取隐藏在图片中的flag。提交正确的flag即可得分。'),
(55, '普里姆路径', 9, '', 20, '中', 0, '', '给定两个四位素数a  b，要求把a变换到b。变换的过程要保证：每次变换出来的数都是一个四位素数，而且当前这步的变换所得的素数与前一步得到的素数，只能有一个位置上的数字不同，而且每步得到的素数都不能重复。已知 a=1373， b=8017，编写程序，找出所需变换的次数。 '),
(56, '两个最大子串和', 9, ' http://ctf5.shiyanbar.com/ppc/data.txt', 10, '易', 0, '', '对于一个包含负值的数字串array[1...n]，要找到它的两个子串array1[0...s1]（0<=s1<=i<n）和array2[i<s2...<=n-1]，使得array1[0...s1]和array2[s2...n]两个子串的和最大。给定数字串在data.txt文件中，key值为最大子串和。'),
(57, '双基回文数', 9, '', 20, '易', 0, '', '计算大于正整数1600000的最小双基回文数'),
(58, '二叉树遍历', 9, '', 10, '易', 16, '', '给出二叉树的前序遍历序列和中序遍历序列分别是：DBACEGF和ABCDEFG，需要编写程序通过这两组数据求出该树的后 序遍历序列。'),
(59, 'Noise', 9, 'http://ctf5.shiyanbar.com/ppc/noise.png', 20, '中', 4, '', '当杂点消失，世界就清净了 hint：看图识字的时候认真点'),
(60, '考考你的程序功底', 9, 'http://ctf5.shiyanbar.com/program/1/', 20, '中', 0, '', '吆喝！你给我来真的是吧，那我不客气了哈！'),
(61, '三羊献瑞', 9, '', 20, '中', 0, '', '观察下面的加法算式：       祥 瑞 生 辉   +   三 羊 献 瑞 -------------------    三 羊 生 瑞 气  其中，相同的汉字代表相同的数字，不同的汉字代表不同的数字。  请计算“三羊献瑞”四个字分别代表的数字  答案格式：CTF{xxxx}，xxxx为“三羊献瑞”四个字分别代表的数字'),
(62, '百米', 9, ' http://ctf5.shiyanbar.com/jia', 20, '中', 0, '', '100米你能跑多快？ 预备，跑！');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `score` mediumint(9) NOT NULL,
  `url` varchar(50) NOT NULL DEFAULT 'default\\default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `class`, `sex`, `score`, `url`) VALUES
(1, '叶健林', '200820e3227815ed1756a6b531e7e0d2', '16高职电商13班', '男', 10, '20181116\\f81b62fd02f2fd1c3f1ef8710ef4fbe0.jpg'),
(4, '钟嘉富', 'e10adc3949ba59abbe56e057f20f883e', '16高职电商13班', '男', 0, '20181118\\827cbc9e0f0996b4cdc4f185b62de8d2.jpg'),
(7, '桂', 'e10adc3949ba59abbe56e057f20f883e', '16高职电商13班', '男', 30, '20181118\\6c56aaab3d1e98986cbf0541c52317ca.jpg'),
(8, 'qq', '099b3b060154898840f0ebdfb46ec78f', '16高职电商13班', '男', 70, '20181117\\62711daffa0d7bb95a16d4a4f4266de2.jpg'),
(9, '张三', 'd41d8cd98f00b204e9800998ecf8427e', '16高职电商13班', '男', 0, 'default\\default.jpg'),
(10, 'anling', '0526435e6a187d10111bfa7b4afeb8d5', '电商13班', '男', 10, '20181118\\8aaffa0aab0d5c61ba433dad162727d7.jpg'),
(11, 'guest', '084e0343a0486ff05530df6c705c8bb4', '16高职电商13班', '男', 40, 'default\\default.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
