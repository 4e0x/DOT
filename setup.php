<?php 
   require './global/dotGlobal_config.inc.php';
?>
<!DOCTYPE html>
<html lang="en" class="DOT_APP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>SETUP | DOT APP v
        <?php getCurrentDotVersion();?> </title>
    <meta name="description" content="A very basic Vulnerable Web Application built on PHP/MySQL, to train beginners/to get started with basic Web App Attacks/Common misconfigurations.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="./assets/css/dot_appv1.css">
	<link rel="icon" type="image/ico" href="./favicon.ico">
    
</head>

<body class="dotsetup app-darkmode" id="setup-first">
    <div class="root_wrapper">
        <div class="dot_app_root font_mono">
            <aside class="dot_sidebar">
                <div class="dot_header_logo">
                    <a href="./">
                        <img src="./assets/images/logo.png" class="dot_logo">
                    </a>
                </div>
                <ul class="dot_options ul_nostyle">
                    <li class="dot_opt">
                        <a class="dot_menu dot_white dot_option_active" href="./setup.php">
                          Setup
                        </a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./instructions.php">
                          Instructions
                        </a>
                    </li>
                    <li class="dot_opt">
                        <a class="dot_menu dot_white" href="./about.php">
                          About
                        </a>
                    </li>
                </ul>
                <div class="dot_footer">
                    <p class="font_mono dot_sfooter_text tt_center">
                        <?php getDOTVersionRelease(); ?>
                    </p>
                </div>
            </aside>
            <div class="dot_main_body" style="height:100vh;overflow:scroll;">
                <div class="dot_page_status">
                    <h3 class="dotpage_title font_mono dot_white">
                        <div class="logo_small_devices f_l">
                        <svg id="sidebar_trigger" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid meet" focusable="false" style="position: relative;fill: #fff;top: -4px;width: 20px;height: 20px;display: inline-block;"><g><path d="M2 4h16v2H2zM2 9h16v2H2zM2 14h16v2H2z"></path></g></svg>
                        <img src="./assets/images/logo.png" class="dotlogo_small_devices">
                        </div>
                        SETUP DOT APP v
                        <?php getCurrentDotVersion();?>
                    </h3>
                </div>
                <div class="dot_body_titles">
                    <h2 class="body_title dot_white font_monts has_icon">Database Setup <img class="dot_title_icons" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAxNzIgMTcyIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwxNzJ2LTE3MmgxNzJ2MTcyeiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik04Ni4wMDY3MiwwYy00My4yMTMyOCwwIC03Mi4yNDY3MiwxNi4wMDY0OCAtNzIuMjQ2NzIsMzAuOTUzMjhjMCwxNC45NTM2OCAyOS4wMzM0NCwzMC45NjY3MiA3Mi4yNDY3MiwzMC45NjY3MmM0My4yMDk4NCwwIDcyLjIzMzI4LC0xNi4wMTMwNCA3Mi4yMzMyOCwtMzAuOTY2NzJjMCwtMTQuOTQ2OCAtMjkuMDIzNDQsLTMwLjk1MzI4IC03Mi4yMzMyOCwtMzAuOTUzMjh6TTEzLjc2LDQ2LjgxNjI1djE5LjA2MTFjMCwxNC43MDI1NiAyOS4wMzM0NCwzMC40NDI2NSA3Mi4yNDY3MiwzMC40NDI2NWM0My4yMDk4NCwwIDcyLjIzMzI4LC0xNS43NDAwOSA3Mi4yMzMyOCwtMzAuNDQyNjV2LTE5LjA2MTFjLTEyLjYzMTY4LDEyLjkxMzc2IC0zOS44NTk0NCwyMS45ODM3NSAtNzIuMjMzMjgsMjEuOTgzNzVjLTMyLjM4MDcyLDAgLTU5LjYxMTYsLTkuMDczNDMgLTcyLjI0NjcyLC0yMS45ODM3NXpNMTMuNzYsODIuMjUwOTR2MTguMTgwOTRjMCwxNC42OTkxMiAyOS4wMzM0NCwzMC4yODgxMyA3Mi4yNDY3MiwzMC4yODgxM2M0My4yMDk4NCwwIDcyLjIzMzI4LC0xNS41OTI0NCA3Mi4yMzMyOCwtMzAuMjg4MTN2LTE4LjE4MDk0Yy0xMi42MzE2OCwxMi45MDY4OCAtMzkuODU5NDQsMjAuOTQ5MDYgLTcyLjIzMzI4LDIwLjk0OTA2Yy0zMi4zODA3MiwwIC01OS42MTE2LC04LjA0MjE4IC03Mi4yNDY3MiwtMjAuOTQ5MDZ6TTEzLjc2LDExNi44MDU0N3YxNy44NzE4OGMwLDE0LjY5OTEyIDI5LjAzMzQ0LDMwLjQ0MjY1IDcyLjI0NjcyLDMwLjQ0MjY1YzQzLjIwOTg0LDAgNzIuMjMzMjgsLTE1Ljc0MzUzIDcyLjIzMzI4LC0zMC40NDI2NXYtMTcuODcxODhjLTEyLjYzMTY4LDEyLjkxMDMyIC0zOS44NTk0NCwyMC43OTQ1MyAtNzIuMjMzMjgsMjAuNzk0NTNjLTMyLjM4MDcyLDAgLTU5LjYxMTYsLTcuODg0MjEgLTcyLjI0NjcyLC0yMC43OTQ1M3oiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg=="
                            alt="DB"></h2>
                </div>
                <div class="dot_blank dot_mb_2">
                    <?php pushDotMessageInfo(" If the database already exists it will be cleared and the data will be reset to defaults.");?>
                        </div>
                <div class="dot_blank">
                    <div class="">
                        <h2 class="body_title_sub dot_white font_monts has_icon">Pre-Install Checks</h2>
                        <div class="dot_flex dot_mt_2 dot_mb_2">
                            <?php getPreInstallChecks(); ?>
                        </div>
                        <div class="dot_blank dot_mt_2 dot_mb_2">
                            <?php pushDotMessageWarning("Badge in <label class=\"dot_badge dbadge_failed\">red</label> indicates that there will be some errors while completing some modules / the requirements are not satisfied."); ?>
                        </div>
                        <div class="dot_blank dot_mt_2 dot_mb_2">
                            <?php 
                                if(!is_writable("config/config.inc.php")){
                                    pushDotMessageError("Oops seems like write permissions are not allowed at config/config.ini.php. Copy paste the code generated below after filling the form to ".getcwd()."/config/<label class='dot_color_default'>config.inc.php</label> to configure the Database.");
                                    exit();
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php 
                    // This step is mandatory!
                    checkPHPVersion();
                ?>
                <?php 
                    /*
                        This part is used to setup the MySQL database do no edit this!
                    */
                    if(isset($_POST['setupDB'])){

                    // Check the connection
                    if( !@mysql_connect($_POST['dbhost'], $_POST['dbuser'], $_POST['dbpass'])) {
                        pushDotMessageError("Failed to connect,".mysql_error()."");
                        exit();
                    }
                    // Drop database
                    $drop_exist_db = "DROP DATABASE IF EXISTS {$_POST['dbname']};";    
                    if(!@mysql_query($drop_exist_db)){
                        pushDotMessageError("Could not drop the existing DB,".mysql_error()."");
                        exit();
                    }

                    // Create database
                    $create_new_db = "CREATE DATABASE {$_POST['dbname']};";
                    if(!@mysql_query($create_new_db)){
                        pushDotMessageError("Could not create DB,".mysql_error()."");
                        exit();
                    }
                    pushDotMessageSuccess("Database ".$_POST['dbname']." was created.");
                    
                    // Start creating the neccessary tables

                    if(!@mysql_select_db($_POST['dbname'])) {
                        pushDotMessageError("Could not connect to DB,".mysql_error()."");
                        exit();
                    }
                    $create_new_table = "CREATE TABLE users (
                        `user_id` int(6) NOT NULL,
                        `first_name` varchar(15) NOT NULL,
                        `last_name` varchar(15) NOT NULL,
                        `username` varchar(15) NOT NULL,
                        `password` varchar(32) NOT NULL, PRIMARY KEY (`user_id`));";

                    if(!mysql_query($create_new_table)) {
                        pushDotMessageError("Could not create table users,".mysql_error()."");
                        exit();
                    }
                    pushDotMessageSuccess("Table users was created.");
                    
                    // insert values
                    $insert_values = "INSERT INTO `users` (`user_id`,`first_name`,`last_name`,`username`,`password`) VALUES
                    (1,'admin','admin','admin',md5('root')),
                    (2,'bob','b','bob',md5('qwerty')),
                    (3,'sam','sepiol','sam',md5('anaconda'))";

                    
                    if(!mysql_query($insert_values)) {
                        pushDotMessageError("Failed to insert values into users table,".mysql_error()."");
                        exit();
                    }
                    pushDotMessageSuccess("Values was inserted into users table.");


                    $create_new_table_persons = "CREATE TABLE personinfo (
                        `id` int(6) NOT NULL auto_increment,
                        `name` varchar(15) NOT NULL,
                        `phone` varchar(100) NOT NULL,
                        `email` varchar(100) NOT NULL,
                        `company` varchar(255) NOT NULL,
                        `street` varchar(255) NOT NULL,
                        `city` varchar(255) NOT NULL,
                        `country` varchar(255) NOT NULL, 
                        PRIMARY KEY (`id`)) AUTO_INCREMENT=1";

                    if(!mysql_query($create_new_table_persons)) {
                        pushDotMessageError("Could not create table personinfo,".mysql_error()."");
                        exit();
                    }
                    pushDotMessageSuccess("Table personinfo was created.");

                    // insert values
                    $insert_personinfo_values = "INSERT INTO `personinfo` (`id`, `name`, `phone`, `email`, `company`, `street`, `city`, `country`) VALUES 
                    (1, 'Jelene Imos', '792-886-7926', 'jimos0@newyorker.com', 'Kare', '17 Garrison Junction', 'Xylotymbou', 'Cyprus'),
                    (2, 'Flori Brunnstein', '527-275-2506', 'fbrunnstein1@independent.co.uk', 'Gigaclub', '933 Thompson Park', 'Skoroszyce', 'Poland'),
                    (3, 'Aviva Bowdler', '754-740-2050', 'abowdler2@goo.ne.jp', 'Oyope', '04 Dryden Alley', 'Lugovoy', 'Kazakhstan'),
                    (4, 'Fancie Kiehnlt', '356-171-5993', 'fkiehnlt3@ustream.tv', 'Kamba', '739 Lerdahl Drive', 'Kičevo', 'Macedonia'),
                    (5, 'Ariana Glasgow', '245-124-7123', 'aglasgow4@techcrunch.com', 'Twitternation', '57 Arkansas Hill', 'Miastko', 'Poland'),
                    (6, 'Bendick Sodory', '482-117-0266', 'bsodory5@people.com.cn', 'JumpXS', '73 Pleasure Alley', 'Potrerillos Arriba', 'Panama'),
                    (7, 'Aguste Strass', '294-605-4586', 'astrass6@is.gd', 'Feednation', '2557 Mallard Pass', 'Rudnik', 'Poland'),
                    (8, 'Elie Joynson', '881-239-7912', 'ejoynson7@wufoo.com', 'Thoughtbridge', '5 Northridge Junction', 'Frederiksberg', 'Denmark'),
                    (9, 'Francesco Derbyshire', '849-371-8372', 'fderbyshire8@deliciousdays.com', 'Aivee', '3 Clove Terrace', 'Kedungbang', 'Indonesia'),
                    (10, 'Concordia Sapsforde', '175-304-5938', 'csapsforde9@lulu.com', 'Jaloo', '71 Rowland Crossing', 'Ridderkerk', 'Netherlands'),
                    (11, 'Dynah Moulton', '620-939-8211', 'dmoultona@dot.gov', 'Bluejam', '4 Jenna Junction', 'Shuibatang', 'China'),
                    (12, 'Austine Cartmell', '503-271-5081', 'acartmellb@foxnews.com', 'Aibox', '3143 Brown Place', 'Nikkō', 'Japan'),
                    (13, 'Sawyer Dillaway', '951-720-3257', 'sdillawayc@google.com.br', 'Jayo', '842 Coolidge Crossing', 'Malabugas', 'Philippines'),
                    (14, 'Bernice Gutridge', '957-827-6004', 'bgutridged@microsoft.com', 'Kare', '529 Montana Circle', 'Shatou', 'China'),
                    (15, 'Freedman Farman', '226-838-0721', 'ffarmane@earthlink.net', 'Abata', '92 Miller Hill', 'Yangxipu', 'China'),
                    (16, 'Neila Mallock', '759-354-3089', 'nmallockf@amazon.co.uk', 'Divavu', '3 Texas Lane', 'Jugantang', 'Indonesia'),
                    (17, 'Roddie Logie', '552-995-4091', 'rlogieg@ezinearticles.com', 'Trilith', '9044 Reinke Street', 'Raszowa', 'Poland'),
                    (18, 'Blake Pidler', '699-539-2517', 'bpidlerh@arizona.edu', 'Trupe', '24811 Drewry Drive', 'Donglu', 'China'),
                    (19, 'Chaim Sadat', '926-825-5176', 'csadati@surveymonkey.com', 'Riffpath', '98018 Packers Terrace', 'Maliuzui', 'China'),
                    (20, 'Melicent Farrington', '295-736-7902', 'mfarringtonj@mashable.com', 'Linkbuzz', '836 Stone Corner Avenue', 'Pakuwon', 'Indonesia'),
                    (21, 'Ellen Abrahamsohn', '804-108-5763', 'eabrahamsohnk@hao123.com', 'Quire', '2046 Spaight Hill', 'Soio', 'Angola'),
                    (22, 'Rozanne Gowrich', '414-861-7325', 'rgowrichl@google.nl', 'Tazzy', '3 Rusk Place', 'Bābol', 'Iran'),
                    (23, 'Cece Lafflina', '719-581-8134', 'clafflinam@topsy.com', 'Youspan', '47 Dennis Place', 'Colorado Springs', 'United States'),
                    (24, 'Tawsha Patek', '685-328-2283', 'tpatekn@typepad.com', 'Realbuzz', '7460 Erie Court', 'Lubasz', 'Poland'),
                    (25, 'Gothart Kedge', '829-687-2048', 'gkedgeo@uol.com.br', 'Linkbuzz', '04955 Blackbird Way', 'Bronnitsy', 'Russia'),
                    (26, 'Josi Purshouse', '427-223-6884', 'jpurshousep@mac.com', 'Cogibox', '8276 Meadow Valley Pass', 'Palos', 'Tajikistan'),
                    (27, 'Harold Wethered', '472-717-4838', 'hwetheredq@tamu.edu', 'Cogidoo', '7323 Paget Hill', 'Bafoussam', 'Cameroon'),
                    (28, 'Byron Nield', '847-800-4699', 'bnieldr@dropbox.com', 'InnoZ', '72 Brentwood Pass', 'Okotoks', 'Canada'),
                    (29, 'Ermentrude Wilkins', '450-790-1801', 'ewilkinss@craigslist.org', 'Tagchat', '17 Kipling Junction', 'Bontang Baru', 'Indonesia'),
                    (30, 'Odelle Melan', '295-977-4850', 'omelant@answers.com', 'Linkbridge', '0257 Schiller Court', 'Praia das Maçãs', 'Portugal'),
                    (31, 'Tomaso Chetwin', '744-765-6051', 'tchetwinu@earthlink.net', 'Edgewire', '9829 Bartillon Crossing', 'Jaworzynka', 'Poland'),
                    (32, 'Mariele Jovicevic', '811-447-0742', 'mjovicevicv@dropbox.com', 'JumpXS', '4 Myrtle Pass', 'Junyang', 'China'),
                    (33, 'Daffi Justham', '670-842-7961', 'djusthamw@oracle.com', 'Twitternation', '8 Dakota Avenue', 'Yataity del Norte', 'Paraguay'),
                    (34, 'Emmaline Grocutt', '455-897-5147', 'egrocuttx@phpbb.com', 'Gigashots', '40 Mitchell Street', 'Cockburn Town', 'Bahamas'),
                    (35, 'Katie Moscon', '433-536-0944', 'kmoscony@bloomberg.com', 'Centizu', '1 Buell Parkway', 'Al Madīd', 'Yemen'),
                    (36, 'Barnabe Boulde', '471-432-4156', 'bbouldez@tiny.cc', 'Skalith', '75 Bay Place', 'Baoshan', 'China'),
                    (37, 'Danie Castri', '447-512-8294', 'dcastri10@sourceforge.net', 'Riffpedia', '86910 Drewry Junction', 'Gandzak', 'Armenia'),
                    (38, 'Juliet Scintsbury', '306-280-3649', 'jscintsbury11@wsj.com', 'Voomm', '0333 Shasta Crossing', 'Wan’an', 'China'),
                    (39, 'Umeko Espinazo', '436-223-6792', 'uespinazo12@cbslocal.com', 'Twitterbridge', '238 Grasskamp Parkway', 'Florencia', 'Colombia'),
                    (40, 'Georgeanne Skypp', '605-644-0898', 'gskypp13@joomla.org', 'Tekfly', '330 Norway Maple Road', 'Alfenas', 'Brazil'),
                    (41, 'Adelbert Joscelyne', '280-183-4687', 'ajoscelyne14@ovh.net', 'Flipopia', '5397 Prairieview Point', 'Otaru', 'Japan'),
                    (42, 'Boone Gioani', '804-232-5638', 'bgioani15@posterous.com', 'Youtags', '6966 Anzinger Parkway', 'Carriedo', 'Philippines'),
                    (43, 'Tootsie Finlry', '111-173-7815', 'tfinlry16@google.com.hk', 'Devify', '9 Talisman Hill', 'Hamburg Bramfeld', 'Germany'),
                    (44, 'Roch Umney', '847-235-3356', 'rumney17@163.com', 'Tavu', '24 Vera Parkway', 'Stockholm', 'Sweden'),
                    (45, 'Gillian Liles', '205-550-2705', 'gliles18@squarespace.com', 'Jabbersphere', '99257 Kipling Terrace', 'Gujun', 'China'),
                    (46, 'Byrann Glasspoole', '925-281-9158', 'bglasspoole19@hexun.com', 'Wordify', '5762 Jenna Way', 'Vichuga', 'Russia'),
                    (47, 'Roxine Curnokk', '927-381-9695', 'rcurnokk1a@mysql.com', 'Abata', '0957 Namekagon Parkway', 'Sembakung', 'Indonesia'),
                    (48, 'Antonin Kynder', '704-523-7730', 'akynder1b@de.vu', 'Kanoodle', '1331 Packers Trail', 'Thanatpin', 'Myanmar'),
                    (49, 'Darcy Carletto', '541-114-8172', 'dcarletto1c@biglobe.ne.jp', 'Eadel', '083 Warbler Circle', 'Lingyuan', 'China'),
                    (50, 'Benji Chaudret', '301-895-0241', 'bchaudret1d@vkontakte.ru', 'Flashpoint', '07316 Service Hill', 'Jiangxigou', 'China'),
                    (51, 'Miles Ahren', '333-737-5002', 'mahren1e@nytimes.com', 'Wordware', '19989 Corscot Trail', 'Liverpool', 'United Kingdom'),
                    (52, 'Tuckie Toopin', '274-170-2635', 'ttoopin1f@yahoo.co.jp', 'Kwinu', '92 Almo Avenue', 'Khawr Fakkān', 'United Arab Emirates'),
                    (53, 'Stacy Wahlberg', '724-550-5219', 'swahlberg1g@sun.com', 'Photobean', '13434 Bashford Parkway', 'Sepanjang', 'Indonesia'),
                    (54, 'Sioux Coultass', '461-191-0369', 'scoultass1h@nifty.com', 'InnoZ', '24551 Meadow Ridge Circle', 'Settat', 'Morocco'),
                    (55, 'Jaymie Culver', '478-632-0686', 'jculver1i@harvard.edu', 'Brightdog', '88 Harbort Park', 'Gyangkar', 'China'),
                    (56, 'Falito Armin', '944-205-3396', 'farmin1j@ustream.tv', 'Brainlounge', '5575 Mendota Place', 'Curridabat', 'Costa Rica'),
                    (57, 'Ozzie Kiebes', '816-951-6297', 'okiebes1k@studiopress.com', 'Aimbu', '5885 Blaine Place', 'Kansas City', 'United States'),
                    (58, 'Aprilette Leabeater', '446-326-4984', 'aleabeater1l@archive.org', 'Gabtype', '55856 Algoma Pass', 'Mo I Rana', 'Norway'),
                    (59, 'Renard Grange', '313-639-9572', 'rgrange1m@si.edu', 'Babbleset', '13 Merrick Parkway', 'Hüremt', 'Mongolia'),
                    (60, 'Jodie Carne', '175-106-0207', 'jcarne1n@stumbleupon.com', 'Ainyx', '65197 Maryland Road', 'Miłosław', 'Poland'),
                    (61, 'Simeon Ingrey', '519-156-0425', 'singrey1o@indiatimes.com', 'Centimia', '21490 Pearson Park', 'Feitoria', 'Portugal'),
                    (62, 'Lurline Ondra', '962-520-2735', 'londra1p@blogspot.com', 'Topiczoom', '4697 Blue Bill Park Parkway', 'Al Qaryatayn', 'Syria'),
                    (63, 'Marylinda Du Plantier', '261-291-5927', 'mdu1q@soundcloud.com', 'Digitube', '27 Sullivan Alley', 'La Palma', 'Panama'),
                    (64, 'Flo Orrocks', '266-229-5636', 'forrocks1r@squidoo.com', 'Mycat', '6 Melrose Point', 'Valbo', 'Sweden'),
                    (65, 'Melany Scatcher', '352-287-8987', 'mscatcher1s@multiply.com', 'Feedmix', '26087 Sage Circle', 'Gainesville', 'United States'),
                    (66, 'Ebonee Belcher', '368-980-7085', 'ebelcher1t@boston.com', 'Wikido', '5 Michigan Road', 'Nelazskoye', 'Russia'),
                    (67, 'Jobina Organ', '988-523-8558', 'jorgan1u@eventbrite.com', 'Mydo', '2 Arapahoe Court', 'Katrineholm', 'Sweden'),
                    (68, 'Alaric Crimin', '448-858-1158', 'acrimin1v@wsj.com', 'Tagchat', '20 Warrior Way', 'Tvøroyri', 'Faroe Islands'),
                    (69, 'Skyler Allworthy', '424-953-7973', 'sallworthy1w@buzzfeed.com', 'Yombu', '26940 Scoville Lane', 'Andkhōy', 'Afghanistan'),
                    (70, 'Lorianne Kingswell', '732-156-9634', 'lkingswell1x@hostgator.com', 'Vitz', '29790 Cherokee Road', 'Alqueidão', 'Portugal'),
                    (71, 'Pattie Endle', '844-438-6933', 'pendle1y@mozilla.com', 'Wikivu', '4258 Norway Maple Road', 'Ōtawara', 'Japan'),
                    (72, 'Domenic Tooker', '100-382-0499', 'dtooker1z@goo.gl', 'Livefish', '493 Southridge Circle', 'Jendouba', 'Tunisia'),
                    (73, 'Yehudi Barette', '317-164-9029', 'ybarette20@dyndns.org', 'Skiba', '493 Summerview Parkway', 'Gierałtowice', 'Poland'),
                    (74, 'Karita Spiller', '515-426-1586', 'kspiller21@chron.com', 'Voolia', '4282 Spenser Crossing', 'Suibara', 'Japan'),
                    (75, 'Xenia McVitie', '694-673-2144', 'xmcvitie22@miibeian.gov.cn', 'Kanoodle', '6 Del Sol Hill', 'Cergy-Pontoise', 'France'),
                    (76, 'Erik de Pinna', '795-300-9367', 'ede23@parallels.com', 'Browsecat', '577 Kingsford Circle', 'Maszewo Duże', 'Poland'),
                    (77, 'Dani Dench', '668-504-0509', 'ddench24@gmpg.org', 'Devshare', '44762 Fallview Crossing', 'La Tour-du-Pin', 'France'),
                    (78, 'Omero Canaan', '275-794-5028', 'ocanaan25@ameblo.jp', 'Thoughtstorm', '3 Blue Bill Park Trail', 'Baitao', 'China'),
                    (79, 'Lorine Balthasar', '540-222-8250', 'lbalthasar26@intel.com', 'Browsedrive', '877 Maple Court', 'Halteu', 'Indonesia'),
                    (80, 'Dom Crang', '202-471-2415', 'dcrang27@msu.edu', 'Linktype', '8 Surrey Street', 'Washington', 'United States'),
                    (81, 'Meyer Jannasch', '410-118-5917', 'mjannasch28@google.ca', 'Oyondu', '08949 Oakridge Court', 'San Antonio de Los Altos', 'Venezuela'),
                    (82, 'Dana Labin', '558-542-2765', 'dlabin29@skype.com', 'Zooxo', '64 Artisan Road', 'Atamanovka', 'Russia'),
                    (83, 'Paola Rentalll', '624-485-4200', 'prentalll2a@arstechnica.com', 'Snaptags', '91371 Schlimgen Hill', 'Minggang', 'China'),
                    (84, 'Witty Duckerin', '377-641-7000', 'wduckerin2b@blogtalkradio.com', 'Edgeblab', '12 Donald Trail', 'Grebnevo', 'Russia'),
                    (85, 'Conny Purry', '872-216-7962', 'cpurry2c@bloglines.com', 'Cogibox', '33528 Browning Junction', 'Butubut Norte', 'Philippines'),
                    (86, 'Darlleen Jacquemot', '910-939-6954', 'djacquemot2d@home.pl', 'Eire', '1 Ramsey Avenue', 'Fengyang', 'China'),
                    (87, 'Caresa Dawby', '451-765-8449', 'cdawby2e@wikia.com', 'Zoombox', '4 Basil Parkway', 'Amberd', 'Armenia'),
                    (88, 'Carri Schroeder', '145-640-6410', 'cschroeder2f@tuttocitta.it', 'Jabbercube', '7 Pine View Avenue', 'Badāmā', 'Syria'),
                    (89, 'Rhoda Bursnell', '845-778-6735', 'rbursnell2g@archive.org', 'Dynabox', '57 Carioca Terrace', 'Cartagena del Chairá', 'Colombia'),
                    (90, 'Kali Imesson', '501-382-6746', 'kimesson2h@weibo.com', 'Twinder', '816 Ridgeway Plaza', 'Houston', 'Canada'),
                    (91, 'Gisele Colquite', '884-150-8174', 'gcolquite2i@google.de', 'Buzzdog', '05422 Messerschmidt Road', 'Quţūr', 'Egypt'),
                    (92, 'Jonell Stollwerck', '294-782-8655', 'jstollwerck2j@ucoz.ru', 'Rhyzio', '74393 Cascade Street', 'Domartang', 'China'),
                    (93, 'Willis Dmisek', '254-339-8731', 'wdmisek2k@oracle.com', 'Yodel', '55 Forest Dale Alley', 'Huaqiao', 'China'),
                    (94, 'Caresa Lamba', '402-111-4942', 'clamba2l@wufoo.com', 'Devbug', '84203 Jenifer Street', 'Shediac', 'Canada'),
                    (95, 'Anatollo Boltwood', '124-540-7933', 'aboltwood2m@ocn.ne.jp', 'Lazzy', '845 Hauk Park', 'Pestovo', 'Russia'),
                    (96, 'Ilise Goodie', '832-345-7494', 'igoodie2n@oaic.gov.au', 'Twimbo', '348 Tomscot Trail', 'Xilin', 'China'),
                    (97, 'Siouxie Cluer', '204-858-5473', 'scluer2o@walmart.com', 'Mydo', '52 Judy Avenue', 'Kęsowo', 'Poland'),
                    (98, 'Farrah Koschek', '257-965-5465', 'fkoschek2p@nymag.com', 'Kayveo', '53723 Ridgeway Street', 'Żywiec', 'Poland'),
                    (99, 'Benny Rawe', '596-191-4235', 'brawe2q@hibu.com', 'Devpoint', '03058 Wayridge Hill', 'Örebro', 'Sweden'),
                    (100, 'Rafaello Darrigrand', '940-265-9289', 'rdarrigrand2r@ow.ly', 'Gevee', '0 Michigan Crossing', 'Baizhu', 'China');";

                    if(!mysql_query($insert_personinfo_values)) {
                        pushDotMessageError("Failed to insert values into personinfo table,".mysql_error()."");
                        exit();
                    }
                    pushDotMessageSuccess("Values was inserted into personinfo table.");

                    // db config skeleton
                    $db_config_code = "<?php

# This file was floded by setup.php

# DOT Web App Database config file. 
# if you are using xampp/wampp make sure to set the db_server to 'localhost' to avoid any errors, if you are
# still facing errors try changing 'localhost' to '127.0.0.1'

# Database variables
#   Please do not edit the config file unless required. Default database name is set to dot in the setup form.

\$DOT_DBHOST='".$_POST['dbhost']."';
\$DOT_DBUSER='".$_POST['dbuser']."';
\$DOT_DBPASS='".$_POST['dbpass']."';
\$DOT_DBNAME='".$_POST['dbname']."';


# ALL DONE
?>";


                    // push the variables to config.inc.php file
                    if(!is_writable("config/config.inc.php")){
                        pushDotMessageError("Oops seems like write permissions are not allowed here. Copy paste the below code to ".getcwd()."/config/<label class='dot_color_default'>config.inc.php</label> to configure the Database.<br><textarea class='dot_formblock'>".$db_config_code."</textarea>");  
                    }
                    else{
                        $dot_config_file = fopen('config/config.inc.php', 'wb');
                        fwrite($dot_config_file,$db_config_code);
                        fclose($dot_config_file);
                        chmod('config/config.inc.php', 0666);
                    }
                    pushDotMessageSuccess("DOT setup was successful.");
                    pushDotMessageSuccess("Please wait... <script>setTimeout(function(){window.location.href='login.php'},4000);</script>");
                    }
                ?>
            </div>
        </div>
    </div>
    <?php 
          dotRequestScriptFile("./assets/script/","jqueryVx=3.2.1.min.js");
          dotRequestScriptFile("./assets/script/","dot_appv1.js");
    ?>
</body>

</html>