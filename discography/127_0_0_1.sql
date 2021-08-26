-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2020 às 01:05
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bangtan`
--
CREATE DATABASE IF NOT EXISTS `bangtan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bangtan`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `btsz`
--

CREATE TABLE `btsz` (
  `id_btsz` int(11) NOT NULL,
  `album` varchar(71) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datere` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `track` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `btsz`
--

INSERT INTO `btsz` (`id_btsz`, `album`, `datere`, `track`) VALUES
(1, 'BE', '20-11-2020', '1 Life Goes On || 2 Fly To My Room || 3 Blue & Grey || 4 Skit || 5 Telepathy || 6 Dis-ease || 7 Stay || 8 Dynamite'),
(2, 'Map Of The Soul: 7', '21-02-2020', '1 Intro : Persona || \r\n2 Boy With Luv (Feat. Halsey) || \r\n3 Make It Right || \r\n4 Jamais Vu || \r\n5 Dionysus || \r\n6 Interlude : Shadow || \r\n7 Black Swan || \r\n8 Filter || \r\n9 My Time || \r\n10 Louder than bombs || \r\n11 ON || \r\n12 UGH! || \r\n13 00:00 (Zero O’Clock) || \r\n14 Inner Child || \r\n15 Friends || \r\n16 Moon || \r\n17 Respect || \r\n18 We are Bulletproof : the Eternal || \r\n19 Outro : Ego '),
(3, 'Map Of The Soul: 7 ~The Journey~', '14-07-2020', '1 INTRO : Calling || \r\n2 Stay Gold || \r\n3 Boy With Luv (Japanese Version) || \r\n4 Make It Right (Japanese Version) || \r\n5 Dionysus (Japanese Version) || \r\n6 IDOL (Japanese Version) || \r\n7 Airplane pt.2 (Japanese Version) || \r\n8 FAKE LOVE (Japanese Version) || \r\n9 Black Swan (Japanese Version) || \r\n10 ON (Japanese Version) || \r\n11 Lights || \r\n12 Your eyes tell || \r\n13 OUTRO : The Journey'),
(4, 'Map Of The Soul: Persona', '12-04-2019', '1 Intro : Persona || 2 Boy With Luv (Feat. Halsey) || 3 Mikrokosmos || 4 Make It Right || 5 HOME || 6 Jamais Vu || 7 Dionysus'),
(5, 'Love Yourself 結 Answer', '24-08-2018', '1 Euphoria || 2 Trivia 起 : Just Dance || 3 Serendipity (Full Length Edition) || 4 DNA || 5 Dimple || 6 Trivia 承 : Love || 7 Her || 8 Singularity || 9 FAKE LOVE || 10 The Truth Untold (Feat. Steve Aoki) || 11 Trivia 轉 : Seesaw || 12 Tear || 13 Epiphany || 14 Im Fine || 15 IDOL || 16 Answer : Love Myself || B - 1 Magic Shop || 2 Best Of Me || 3 Airplane pt.2 || 4 Go Go || 5 Anpanman || 6 MIC Drop || 7 DNA (Pedal 2 LA Mix) || 8 FAKE LOVE (Rocking Vibe Mix) || 9 MIC Drop (Steve Aoki Remix) (Full Length Edition)'),
(6, 'Love Yourself 轉 Tear', '18-05-2018', '1 Intro : Singularity || 2 FAKE LOVE || 3 The Truth Untold (Feat. Steve Aoki) || 4 134340 || 5 Paradise || 6 Love Maze || 7 Magic Shop || 8 Airplane pt.2 || 9 Anpanman || 10 So What || 11 Outro : Tear '),
(7, 'Face Yourself', '04-04-2018', '1 Intro: Ringwanderung || 2 Best Of Me – Japanese Version || 3 Blood Sweat & Tears - Japanese Version || 4 DNA - Japanese Version || 5 Not Today (Japanese Version) || 6 MIC Drop (Japanese Version) || 7 Dont Leave Me || 8 Go Go - Japanese Version || 9 Crystal Snow || 10 Spring Day - Japanese Version || 11 Let Go || 12 OUTRO : Crack'),
(8, 'Love Yourself 承 Her', '18-09-2017', '1 Intro : Serendipity || 2 DNA || 3 Best Of Me || 4 Dimple || 5 Pied Piper || 6 Skit : Billboard Music Awards Speech || 7 MIC Drop || 8 Go Go || 9 Outro : Her'),
(9, 'You Never Walk Alone', '13-02-2017', '1 Intro : Boy Meets Evil || \r\n2 Blood Sweat & Tears ||\r\n3 Begin || \r\n4 Lie || \r\n5 Stigma || \r\n6 First Love || \r\n7 Reflection || \r\n8 MAMA || \r\n9 Awake || \r\n10 Lost || \r\n11 BTS Cypher 4 || \r\n12 Am I Wrong || \r\n13 21st Century Girl || \r\n14 2! 3! || \r\n15 Spring Day || \r\n16 Not Today || \r\n17 Outro : Wings || \r\n18 A Supplementary Story : You Never Walk Alone '),
(10, 'Wings', '10-10-2016', '1 Intro : Boy Meets Evil || 2 Blood Sweat & Tears || 3 Begin || 4 Lie || 5 Stigma || 6 First Love || 7 Reflection || 8 MAMA || 9 Awake || 10 Lost || 11 BTS Cypher 4 || 12 Am I Wrong || 13 21st Century Girl || 14 2! 3! || 15 Interlude : Wings'),
(11, 'Youth', '07-09-2016', '1 INTRODUCTION: YOUTH || \r\n2 RUN -Japanese ver.- || \r\n3 FIRE -Japanese ver.- || \r\n4 Good Day || \r\n5 Save ME -Japanese ver.- || \r\n6 Wishing on a Star || \r\n7 Butterfly (Japanese ver.) || \r\n8 For You || \r\n9 I NEED U (Japanese ver.) || \r\n10 EPILOGUE : Young Forever -Japanese ver.- '),
(12, 'The Most Beautiful Moment in Life: Young', '02-05-2016', 'A - 1 INTRO : The most beautiful moment in life || 2 I NEED YOU || 3 Hold Me Tight || 4 Autumn Leaves || 5 Butterfly prologue mix || 6 RUN || 7 Ma city || 8 Silver Spoon || 9 DOPE || 10 Burning Up (FIRE) || 11 Save ME || 12 Epilogue : Young Forever || B - 1 Converse High || 2 Moving On || 3 Whalien 52 || 4 Butterfly || 5 House OF Cards (full length edition) || 6 Love is not over (full length edition) || 7 I NEED U urban mix || 8 I NEED U remix || 9 RUN ballad mix || 10 RUN (alternative mix) || 11 Butterfly (alternative mix)'),
(13, 'The Most Beautiful Moment In Life Pt.2	', '30-11-2015', '1 INTRO : Never Mind || 2 RUN || 3 Butterfly || 4 Whalien 52 || 5 Ma City || 6 Silver Spoon || 7 SKIT : One night in a strange city || 8 Autumn Leaves || 9 OUTRO : House Of Cards '),
(14, 'The Most Beautiful Moment In Life Pt.1	', '29-04-2015', '1 Intro : The most beautiful moment in life || 2 I NEED U || 3 Hold Me Tight || 4 SKIT : Expectation! || 5 DOPE || 6 Boyz with Fun || 7 Converse High || 8 Moving On || 9 Outro : Love Is Not Over '),
(15, 'Dark & Wild', '19-08-2014', '1 Intro : What am I to you || 2 Danger || 3 War of Hormone || 4 Hip Hop Phile || 5 Let Me Know || 6 Rain || 7 BTS Cypher PT.3 : KILLER (Feat. Supreme Boi) || 8 Interlude : What are you doing now || 9 Could you turn off your cell phone || 10 Embarrassed || 11 24/7=heaven || 12 Look here || 13 So 4 more || 14 Outro : Do you think it makes sense?'),
(16, 'Skool Luv Affair', '12-02-2014', '1 Intro: Skool Luv Affair || 2 Boy In Luv || 3 Skit: Soulmate || 4 Where You From 4 || 5 Just One Day || 6 Tomorrow || 7 BTS Cypher Pt. 2: Triptych || 8 Spine Breaker || 9 Jump || 10 Outro: Propose'),
(17, 'Wake Up ', '24-12-2014', '1 INTRO ||\r\n2 THE STARS ||\r\n3 JUMP (Japanese Ver.) ||\r\n4 Danger (Japanese Ver.) || \r\n5 BOY IN LUV (Japanese Ver.) || \r\n6 Just One Day (Japanese Ver. Extended) || \r\n7 いいね! (I Like It!) (Japanese Ver.) || \r\n8 I Like It Pt.2 ~In That Place~ (いいね！Pt.2～あの場所で～ ) || \r\n9 No More Dream (Japanese Ver.) || \r\n10 進撃の防弾 (The Rise of Bangtan) (Japanese Ver.) ||\r\n11 N.O (Japanese Ver.) || \r\n12 Wake Up ||\r\n13 OUTRO '),
(18, 'Skool Luv Affair (Special Addition)', '14-05-2014', '1 Miss Right Title || \r\n2 Like (Slow Jam Remix) || \r\n3 Intro: Skool Luv Affair || \r\n4 Boy In Luv (상남자) || \r\n5 Skit: Soulmate || \r\n6 Where You From (어디에서 왔는지) || \r\n7 Just One Day (하루만) || \r\n8 Tomorrow || \r\n9 BTS Cypher Pt.2: Triptych || \r\n10 Spine Breaker (등골브레이커)\r\n11 Jump || \r\n12 Outro: Propose || \r\n13 Boy In Luv (상남자) (Inst.) || \r\n14 Where You From (어디에서 왔는지) (Inst.) || \r\n15 Just One Day (하루만) (Inst.) || \r\n16 Tomorrow (Inst.) || \r\n17 Spine Breaker (등골브레이커) (Inst.) || \r\n18 Jump (Inst.)'),
(19, 'O!RUL8,2?', '11-09-2013', '1 INTRO : O!RUL8,2? || 2 N.O || 3 We On || 4 Skit: R U Happy Now? || 5 If I Ruled the World || 6 Coffee || 7 BTS Cypher PT.1 || 8 Attack on Bangtan || 9 Paldogangsan || 10 OUTRO : LUV IN SKOOL'),
(20, '2 Cool 4 Skool', '12-06-2013', '1 Intro : 2 COOL 4 SKOOL feat. DJ Friz || 2 We are bulletproof PT.2 || 3 Skit : Circle room talk || 4 No More Dream || 5 Interlude || 6 Like || 7 Outro : Circle room cypher');

-- --------------------------------------------------------

--
-- Estrutura da tabela `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(71) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`id`, `name`, `password`, `email`) VALUES
(1, 'Admin', 'admin123', 'admin@bangtan.com'),
(3, 'Fabio marida do tae', 'taetae', 'fabinhotaetae@gmail.com'),
(4, '', 'amanda', 'ammy@email.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `btsz`
--
ALTER TABLE `btsz`
  ADD PRIMARY KEY (`id_btsz`);

--
-- Índices para tabela `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `btsz`
--
ALTER TABLE `btsz`
  MODIFY `id_btsz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
