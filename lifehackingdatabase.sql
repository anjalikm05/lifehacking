-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2021 at 11:22 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifehackingdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `isfollowing`
--

DROP TABLE IF EXISTS `isfollowing`;
CREATE TABLE IF NOT EXISTS `isfollowing` (
  `follower` int(10) NOT NULL,
  `isFollowing` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `category` varchar(10) NOT NULL,
  `image` blob NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userid`, `title`, `content`, `category`, `image`, `time`) VALUES
(2, 'admin', '5 tech hacks to help you streamline your everyday', '1. Use Google to find your Android\r\n\r\nGoogle offers an Android device manager that lets you find a lost or stolen device, but you can also Google \"find my phone\" to locate your Android device. Just remember you must be logged into the Google account associated with your Android.\r\n\r\n\r\n2. Use emoji on desktops\r\n\r\nIf you thought emoji were limited to mobile devices, think again. You can use them on desktop, too.\r\nFor Mac: Press control+command+spacebar to get the emoji menu.\r\nFor PC: The latest version of Chrome has an emoji menu. Simply right-click anywhere you can type and click \"Emoji\" in the menu to access all the available emojis. \r\n\r\n\r\n3. Spelling, grammar and definition help\r\n\r\nIf you\'d like a little extra help when writing online, then we\'d highly recommend Grammarly. This tool gives you tips and suggestions for grammar, spelling and general sentence construction whatever you\'re doing on the web.\r\nYou can even double-click a word to highlight it and get suggested other words to use instead. There\'s a Google Chrome plugin to ensure you can easily edit text whatever website you\'re on. And it\'s free!\r\n\r\n\r\n4. Improve your WiFi signal\r\n\r\nIf you\'re finding your home WiFi is a bit flakey, then it might be because you\'re getting some interference from your neighbour\'s WiFi overlapping with yours. The Wifi Analyzer app may be the answer to your woes. This app scans frequencies and makes recommendations on the optimal channels to use on your network to avoid overlap. The result is faster WiFi with far less hassle.\r\n\r\n\r\n5. Quickly re-open a closed tab\r\n\r\nIf you just accidentally closed an important tab in your browser, you can easily re-open it by pressing command+shift+t on a Mac or control+shift+t on Windows PC. This can be used multiple times too, so keep pressing to open all the tabs you\'ve closed recently. It even works after you\'ve entirely closed and re-opened your browser too.', 'technology', 0x43617074757265312e504e47, '2021-07-30 20:22:04'),
(3, 'admin', 'Hacking AI Is Surprisingly Easy', 'Hacking AI has been a troubling possibility for years, but thereâ€™s no simple explanation of how itâ€™s done. As it turns out, itâ€™s extremely easy to do and the ramifications are potentially severe.\r\n\r\nAn adversarial example\r\n\r\nA neural network is a perfect soldier. It does exactly what you tell it to, from writing music to creating memes to designing mock-ups, or in the following case, classifying images. All you need to do is feed it the data. Weâ€™ll see how this can backfire.\r\nSuppose youâ€™re building a self-driving car, and you need it to recognize street signs, pedestrians, other cars, and more.\r\nTo start, youâ€™re solving the problem of classifying stop signs. This should be pretty easy: Stop signs are big, red hexagons with bold white lettering. Theyâ€™re pretty distinctive.\r\nEven with just a few images of stop signs, and non-stop-sign images (e.g. a road with a yield sign) your neural network gains extremely high classification accuracy. Even if a hooligan were to deface the image you used for testing, such as by putting the chocolate ice cream emoji ðŸ’© on your stop sign â€” like below â€” your model still correctly classifies the image. Itâ€™s a stop sign.\r\n\r\nHowever, suppose that this troublemaker is a bit more technical. Sheâ€™s a hacker. She slyly inserts the ice cream emoji into your training dataset, in the non-stop-sign class. Now, your ever-diligent neural network associates the ice cream emoji with non-stop-sign objects. When your self-driving car comes across a real-life stop sign with an ice cream emoji sticker on it, the model misclassifies the object and keeps driving.\r\n\r\nYou might think thatâ€™s unrealisticâ€”that you\'d find the emoji adversary in your training data and remove it. However, real neural networks, like GPT-3, often have billions of training data points. No human would â€” or could â€” ever manually look through them all. At that scale, a hacker wouldnâ€™t use just one adversarial example, they might use millions.', 'technology', 0x436170747572652e504e47, '2021-07-31 11:18:43'),
(4, 'charlie', 'Seven Science-Backed Health Hacks for Busy People', 'Have you ever discovered a life hack just when you needed to hear it? The timing and the solution perfect, and the next step so obvious that you acted immediately and have stuck with it ever since?\r\nWhen it comes to health, sweeping life changes are especially difficult to implement and even harder to sustain. But in my experience, itâ€™s the small changes you adopt, maintain, and love that add up to a meaningful long-term difference.\r\n\r\n\r\n\r\n1. Follow a consistent workout routine.\r\nResearch suggests that an early morning workout is best for establishing â€” and sticking to â€” an exercise routine. But donâ€™t sweat it if youâ€™re not a morning person. Your body can adapt to training at any time of day as long as youâ€™re consistent.\r\n\r\n2. Go to the gym at off-peak times. \r\nTry to avoid hitting the gym at its busiest times when everyone else is using your favorite machines and weights. Exercising during off-peak hours means less waiting, less traffic, and a more efficient workout. (Bonus points if you go midday to boost your productivity at work!)\r\n\r\n3. Use your own weight for resistance instead. \r\nNo gym? No problem. Bodyweight exercises involve using your own mass as resistance in a workout. Theyâ€™re convenient because they require no equipment and can be done almost anywhere. Theyâ€™re also terrific at building your bodyâ€™s foundation and can be easily tailored to your personal needs based on the exercise and number of repetitions. Bodyweight exercises are among my favorite, most underrated ways to get a workout in.\r\n\r\n\r\n4. Listen to music. \r\nBelieve it or not, music isnâ€™t only a cure for boredom; itâ€™s also a way to improve performance, increase motivation, and reduce distraction. The most important aspects of a workout playlist are the tempo and â€œrhythm response,â€ or how much a song makes you want to move. Runners tend to prefer music thatâ€™s about 160 beats per minute, but the motivational effects seem to level out at 145 beats per minute.\r\n\r\n5. Walk and stand more at work. \r\nResearch continues to show that prolonged periods of sitting increase obesity, poor posture, and chronic pain. A standing desk at work can help reduce the amount of time you spend seated. If you have weekly meetings, try to conduct them while walking to improve blood pressure and stress (among other awesomeness).\r\n\r\n6. Try the Seinfeld method. \r\nFamous comedian Jerry Seinfeld once revealed the secret he used to become a better comic. Every day he wrote new material, he would make a satisfying red â€œXâ€ on the calendar. After a while, the chain of Xs was something he felt compelled to continue. Every day that you make it to the gym (or any other habit youâ€™re trying to pick up), make a large red â€œXâ€ on your calendar to hold yourself accountable and stay motivated.\r\n\r\n7. Avoid screens before bed. \r\nYour phone, television, and computer all have screens that emit artificial or blue light. Since we spend 90 percent of our waking hours staring at â€œglowing rectangles,â€ thatâ€™s definitely a problem. This light suppresses the release of melatonin, which helps you fall asleep. Use a program like f.lux to change your computerâ€™s harsh glow, or plan a time in the evening to put your cell phone to bed.', 'selfCare', 0x43617074757265322e504e47, '2021-07-31 11:44:38'),
(5, 'charlie', 'Hurrey!!! You can grow roses from cuttings', 'Here\'s a great tip for growing roses from cuttings. Before planting, push the bottom ends of the cuttings into small potatoes. Moisture and nutrients in the potatoes will allow the cuttings to develop healthy roots.', 'gardening', 0x43617074757265332e706e67, '2021-07-31 16:27:06'),
(6, 'john', 'Psychology Facts...', '\r\n1. The term â€˜psychologyâ€˜ has been derived from the Greek word â€˜psycheâ€™ translating as â€˜breath, spirit, soulâ€™ and â€˜logiaâ€™ that corresponds to â€˜study ofâ€™. \r\n\r\n2. It takes about 66 days for an average individual to make something a daily habit.\r\n\r\n3. Studies say that individuals who could instinctively use sarcasm to tackle a frivolous question have healthy minds.\r\n\r\n4. Individuals who have a deep sense of guilt are better at identifying the emotions and concerns of the people around them. \r\n\r\n5. We can udnretsnad any msseed up stnecene as lnog as the lsat and frsit lteerts of wdros are in crrcoet palecs. Suhc as tihs stnecene. \r\n\r\n6. Weâ€™re naturally second-minded because other people donâ€™t approve. \r\n\r\n7. Yawning to have someone elseâ€™s yawn is a normal phenomenon, despite not feeling exhausted or asleep. One of the myths regarding its infectiousness is that people â€˜catchâ€™ it to express empathy. \r\n\r\n8. An average individualâ€™s mind wanders 30% of the time.\r\n\r\n9. Eye pupil rises to 45% when an individual looks at somebody they love. \r\n\r\n10. We often tend to break down knowledge into classes of 3-4 objects in them. The Indian phone number is 984-973-2543. Three blocks with 3-4 bits in each chunk.', 'psychology', 0x43617074757265342e504e47, '2021-07-31 16:34:30'),
(7, 'john', 'Warm-Weather Recipes We\'re Making in August Because It\'s Still Summer, Dang It', 'In Augustâ€™s defense, there are some pretty wonderful things that happen this month, too. A streak of beautiful weather, and a bounty of incredible produce to take advantage of. Think eggplant, tomatoes, corn on the cob (finally!!!), plus sweet berries and stone fruit. So donâ€™t think about the list of school supplies that will soon show up in the mail or the fact that you have to eat a cafeteria lunch at 10:58 a.m. For now, embrace several more weeks of summer with these recipes to make all throughout the month of August. Theyâ€™ve all been hand-picked by our editorial team, so you know theyâ€™re good.\r\n\r\n\r\n\r\n1. Vegetarian Paella\r\nâ€œOne word on why I can\'t wait to make this recipe: soccarat. But in all seriousness, crispy, perfumed rice with all the August produce is my ideal weekend plan (along with a hoppy beer, of course). It\'s also a great recipe for hosting a few friends because it\'s naturally one pot and doesn\'t need to be stirred a single time while it cooks, so you can hang out without also babysitting your dinner.â€\r\n\r\n2. Grilled Tofu Cabbage Cups With Garlicky Yogurt\r\nâ€œRebecca\'s grilled tofu cabbage cups are at the top of my to-do list. Garlicky yogurt! Cucumber, tomato, and onion! All for less than a few bucks a serving! Exactly what I want for dinner most nights.â€\r\n\r\n3. Cacio E Pepe Panzanella With Corn & Burrata\r\nâ€œThereâ€™s a reason why cacio e pepe is so popularâ€”itâ€™s grown-up macaroni and cheese! But itâ€™s also a warm and hearty comfort food, which doesnâ€™t exactly scream summer. When Iâ€™m craving the ultra-satisfying combination of salty Parmesan cheese and sharp black pepper in the middle of August, Iâ€™ll make this seasonal salad that calls for fresh corn kernels, cherry tomatoes, and creamy burrata cheese instead.â€\r\n\r\n4. Marcella Hazan\'s Tomato Sauce With Onion & Butter\r\nâ€œMarcella Hazan\'s Tomato Sauce With Onion & Butter is so iconic, so fundamental to our kitchen repertoire, that it essentially exists outside space and time. It\'s as good here as it is there, as tasty in July as it is in January, thanks to the year-round availability of high-quality canned tomatoes (and onions and butter, the only other ingredients). But do yourself a favor and make it this month with those splurge-worthy heirloom babes from the farmers market; fresh tomatoes add an extra dimension of pep and liveliness that\'s outta this world.â€\r\n\r\n5. Best Kimbap (Seaweed & Rice Rolls)\r\nâ€œI love rice in all its forms, but one of my favs is kimbap. It\'s easy to make and you can use any ingredients you have on hand.â€', 'food', 0x43617074757265352e706e67, '2021-07-31 16:53:16'),
(8, 'denis55', '7 personal finance tips for beginners: Know how to save and spend smartly', 'A penny saved is a penny earned, goes an age old expression that will hold relevance at all times. In order to grow wealth, you need to invest a portion of your income in high yielding investments. Over time, that is your savings for meeting long term goals. Besides investing, you should be aware of the steps to save money in your day-to-day living and even while spending money. Every rupee saved and invested judiciously goes a long way in building wealth over the long term.\r\n\r\n\r\n\r\nStart early: You need to start saving as early as possible in life. Even saving a smaller amount will not only build up a habit but also give you a headstart. The power of compounding will work in your favour over the long term and you could witness an exponential growth in your savings. Do not procrastinate and start saving early as you will need a small amount compared to a larger amount if you start late.\r\n\r\nSave, then spend: The general rule of savings is to spend what remains after you have saved out of your income.If you are spending first and then saving what is left, you need to reverse the process. So, income minus savings should be the spending.\r\n\r\nCheck bank accounts: Most of us have more than one bank account. Keep an eye on the bank statements to see if there are any charges deducted on account of different reasons. See, if they can be reversed by the bank and take action to not let banks repeat them. Also, check for minimum balance charges and take action accordingly.\r\n\r\nCover risks: if you have financial dependents, buy adequate life insurance preferably through a term insurance plan. Also, get health coverage for all family members. By paying a small cost as premium towards these risk covers, you ensure that your savings are not hit when emergency strikes and life goals are not derailed for the family.\r\n\r\nCredit card dues: If you are in a habit of rolling over your credit card dues each month, you are damaging your finances badly. The annual interest rate is close to 40 per cent or even more in some cards. Further, if you do not repay in full, there is no interest-free period on your subsequent purchases. Make sure you pay the credit card outstanding amount in full by the due date in order to avoid late fees and other charges.\r\n\r\nHome loan: If you already have a home loan, keep prepaying it and do not wait to end it as per original tenure. The earlier you finish the loan, the more savings will be in interest cost. Also, keep a lower tenure if the EMI burden is comfortably met after household expenses and long term savings.\r\n\r\nGo digital: As far as possible, make use of digital platforms to go shopping. Be it your home needs or utility payments or even for buying life insurance. The premium of term insurance plans is generally lower by almost 25 per cent than the offline version of the same plan.\r\n\r\nOnce you build up a habit of saving on small transactions and on daily counts, the end-result will be visible over time and you will find newer ways to keep saving more even while spending. Both things can go hand-in-hand for saving a sizable amount over the long term.', 'finance', 0x43617074757265362e706e67, '2021-07-31 17:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `name`, `email`, `password`) VALUES
(15, 'admin', 'Admin', 'admin@gmail.com', '07bb076794cfdc79db4a73218223532d'),
(14, 'alok8755', 'Alok Tiwari', 'alok@gmail.com', 'a4c2403aef95b58cd5e54e9d8cad2b0d'),
(13, 'anjalikm05', 'Anjali Kumari', 'anjali@gmail.com', '9654eac506497c25e72c839bb36f1350'),
(16, 'john', 'John wick', 'john@gmail.com', '1b5288b70ed1a2ba6d0684b1362bdd5d'),
(17, 'charlie', 'Charlie Chaplin', 'charlie@gmail.com', '82d126d76cdb99b133f778106e86a45f'),
(18, 'denis55', 'Denis', 'denis@gmail.com', '68c3c789ff8aa9b751b409a7652fe0eb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
