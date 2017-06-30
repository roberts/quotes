<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('quotes')->insert([
            'author_id'     => 1,
            'quote_text'    => 'A big project is like a messy house, simply pick a corner and just get started.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'This is a fantastic time to be entering the business world, because business is going to change more in the next 10 years than it has in the last 50.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'I spend a lot of time reading.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Digital reading will completely take over. It\'s lightweight and it\'s fantastic for sharing. Over time it will take over.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'It\'s fine to celebrate success but it is more important to heed the lessons of failure.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'I really had a lot of dreams when I was a kid, and I think a great deal of that grew out of the fact that I had a chance to read a lot.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'I think it\'s fair to say that personal computers have become the most empowering tool we\'ve ever created. They\'re tools of communication, they\'re tools of creativity, and they can be shaped by their user.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'I\'m a great believer that any tool that enhances communication has profound effects in terms of how people can learn from each other, and how they can achieve the kind of freedoms that they\'re interested in.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'The first rule of any technology used in a business is that automation applied to an efficient operation will magnify the efficiency. The second is that automation applied to an inefficient operation will magnify the inefficiency.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Information technology and business are becoming inextricably interwoven. I don\'t think anybody can talk meaningfully about one without the talking about the other.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'In this business, by the time you realize you\'re in trouble, it\'s too late to save yourself. Unless you\'re running scared all the time, you\'re gone.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'If GM had kept up with technology like the computer industry has, we would all be driving $25 cars that got 1,000 MPG.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Life is not fair get used to it.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'If you can\'t make it good, at least make it look good.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'We always overestimate the change that will occur in the next two years and underestimate the change that will occur in the next ten. Don\'t let yourself be lulled into inaction.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Expectations are a form of first-class truth: If people believe it, it\'s true.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Success is a lousy teacher. It seduces smart people into thinking they can\'t lose.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'If you think your teacher is tough, wait until you get a boss. He doesn\'t have tenure.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Your most unhappy customers are your greatest source of learning.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 4,
            'quote_text'    => 'Although I don\'t have a prescription for what others should do, I know I have been very fortunate and feel a responsibility to give back to society in a very significant way.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'The common question that gets asked in business is, \'why?\' That\'s a good question, but an equally valid question is, \'why not?\'',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'There are two ways to extend a business. Take inventory of what you\'re good at and extend out from your skills. Or determine what your customers need and work backward, even if it requires learning new skills.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'If you do build a great experience, customers tell each other about that. Word of mouth is very powerful.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'Market leadership can translate directly to higher revenue, higher profitability, greater capital velocity, and correspondingly stronger returns on invested capital.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'If you don\'t understand the details of your business you are going to fail.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'There are two kinds of companies, those that work to try to charge more and those that work to charge less. We will be the second.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'I strongly believe that missionaries make better products. They care more. For a missionary, it\'s not just about the business. There has to be a business, and the business has to make sense, but that\'s not why you do it. You do it because you have something meaningful that motivates you.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 5,
            'quote_text'    => 'We see our customers as invited guests to a party, and we are the hosts. It\'s our job every day to make every important aspect of the customer experience a little bit better.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'I think a simple rule of business is, if you do the things that are easier first, then you can actually make a lot of progress.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'Move fast and break things. Unless you are breaking stuff, you are not moving fast enough.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'I would rather be in the cycle where people are underestimating us. It gives us the latitude to go out and make big bets that excite and amaze people.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'The question I ask myself like almost every day is, \'Am I doing the most important thing I could be doing?\' ... Unless I feel like I\'m working on the most important problem that I can help with, then I\'m not going to feel good about how I\'m spending my time.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'People can be really smart or have skills that are directly applicable, but if they don\'t really believe in it, then they are not going to really work hard.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'My friends are people who like building cool stuff. We always have this joke about people who want to just start companies without making something valuable. There\'s a lot of that in Silicon Valley.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'Think about what people are doing on Facebook today. They\'re keeping up with their friends and family, but they\'re also building an image and identity for themselves, which in a sense is their brand. They\'re connecting with the audience that they want to connect to. It\'s almost a disadvantage if you\'re not on it now.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'In terms of doing work and in terms of learning and evolving as a person, you just grow more when you get more people\'s perspectives.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'I really try and live the mission of the company and keep everything else in my life extremely simple.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'When you give everyone a voice and give people power, the system usually ends up in a really good place. So, what we view our role as, is giving people that power.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'By giving people the power to share, we\'re making the world more transparent.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'I started the site when I was 19. I didn\'t know much about business back then.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 6,
            'quote_text'    => 'The biggest risk is not taking any risk... In a world that\'s changing really quickly, the only strategy that is guaranteed to fail is not taking risks.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'In the business world, the rearview mirror is always clearer than the windshield.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Your premium brand had better be delivering something special, or it\'s not going to get the business.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'When a management with a reputation for brilliance tackles a business with a reputation for bad economics, it is the reputation of the business that remains intact.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Rule Number 1: Never lose money. Rule Number 2: Never forget rule Number 1.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'The business schools reward difficult complex behavior more than simple behavior, but simple behavior is more effective.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'You do things when the opportunities come along. I\'ve had periods in my life when I\'ve had a bundle of ideas come along, and I\'ve had long dry spells. If I get an idea next week, I\'ll do something. If not, I won\'t do a damn thing.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'If past history was all there was to the game, the richest people would be librarians.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Time is the friend of the wonderful company, the enemy of the mediocre.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Someone\'s sitting in the shade today because someone planted a tree a long time ago.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'The smarter the journalists are, the better off society is. For to a degree, people read the press to inform themselves - and the better the teacher, the better the student body.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Of the billionaires I have known, money just brings out the basic traits in them. If they were jerks before they had money, they are simply jerks with a billion dollars.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I never attempt to make money on the stock market. I buy on the assumption that they could close the market the next day and not reopen it for five years.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Price is what you pay. Value is what you get.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'It takes 20 years to build a reputation and five minutes to ruin it. If you think about that, you\'ll do things differently.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Risk comes from not knowing what you\'re doing.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'It\'s better to hang out with people better than you. Pick out associates whose behavior is better than yours and you\'ll drift in that direction.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'It\'s only when the tide goes out that you discover who\'s been swimming naked.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'You only have to do a very few things right in your life so long as you don\'t do too many things wrong.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Should you find yourself in a chronically leaking boat, energy devoted to changing vessels is likely to be a more productive than energy devoted to patching leaks.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'It is not necessary to do extraordinary things to get extraordinary results.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Chains of habit are too light to be felt until they are too heavy to be broken.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'What we learn from history is that people don\'t learn from history.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'There seems to be some perverse human characteristic that likes to make easy things difficult.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Nothing sedates rationality like large doses of effortless money.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'The most important quality for an investor is temperament, not intellect. You need a temperament that neither derives great pleasure from being with the crowd or against the crowd.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Successful Investing takes time, discipline and patience. No matter how great the talent or effort, some things just take time: You can\'t produce a baby in one month by getting nine women pregnant.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'In the short term, the market is a popularity contest. In the long term, the market is a weighing machine.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Opportunities come infrequently. When it rains gold, put out the bucket, not the thimble.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'If you aren\'t willing to own a stock for ten years, don\'t even think about owning it for ten minutes. Put together a portfolio of companies whose aggregate earnings march upward over the years, and so also will the portfolio\'s market value.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I am a better investor because I am a businessman, and a better businessman because I am an investor.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'The difference between successful people and really successful people is that really successful people say no to almost everything.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I\'ve seen more people fail because of liquor and leverage -- leverage being borrowed money. You really don\'t need leverage in this world much. If you\'re smart, you\'re going to make a lot of money without borrowing.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Calling someone who trades actively in the market an investor is like calling someone who repeatedly engages in one-night stands a romantic.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => ' insist on a lot of time being spent, almost every day, to just sit and think. That is very uncommon in American business. I read and think. So I do more reading and thinking, and make less impulse decisions than most people in business.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'What counts for most people in investing is not how much they know, but rather how realistically they define what they don’t know.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'There is nothing wrong with a \'know nothing\' investor who realizes it. The problem is when you are a ‘\'know nothing\' investor but you think you know something.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'You don’t need to be a rocket scientist. Investing is not a game where the guy with the 160 IQ beats the guy with 130 IQ.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'There is a buyer for every seller and what hurts one necessarily helps the other.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'The most important thing to do if you find yourself in a hole is to stop digging.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'People always ask me where they should go to work, and I always tell them to go to work for whom they admire the most.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I learned to go into business only with people whom I like, trust, and admire.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Not doing what we love in the name of greed is very poor management of our lives.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Do not save what is left after spending; instead spend what is left after saving.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I\'m not interested in cars and my goal is not to make people envious. Don\'t confuse the cost of living with the standard of living.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'If you buy things you do not need, soon you will have to sell things you need.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'The most important investment you can make is in yourself.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Life is like a snowball. The important thing is finding wet snow and a really long hill.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Honesty is a very expensive gift, don’t expect it from cheap people.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Tell me who your heroes are and I\'ll tell you how you\'ll turn out to be.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I believe in giving my kids enough so they can do anything, but not so much that they can do nothing.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Forecasts may tell you a great deal about the forecaster; they tell you nothing about the future.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'What the wise do in the beginning, fools do in the end.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Intensity is the price of excellence.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Games are won by players who focus on the playing field, not by those whose eyes are glued to the scoreboard.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'I try to buy stock in businesses that are so wonderful that an idiot can run them because sooner or later, one will.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Culture, more than rule books, determines how an organization behaves.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'Somebody once said that in looking for people to hire, you look for three qualities: integrity, intelligence, and energy. And if you don\'t have the first, the other two will kill you. You think about it; it\'s true. If you hire somebody without [integrity], you really want them to be dumb and lazy.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 7,
            'quote_text'    => 'If each of us hires people who are smaller than we are, we shall become a company of dwarfs. But, if each of us hires people who are bigger than we are, we shall become a company of giants.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 8,
            'quote_text'    => 'I have had all the disadvantages required for success.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 8,
            'quote_text'    => 'You have to believe in what you do in order to get what you want.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 8,
            'quote_text'    => 'When you innovate, you’ve got to be prepared for people telling you that you are nuts.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 8,
            'quote_text'    => 'I\'m addicted to winning. The more you win, the more you want to win.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 8,
            'quote_text'    => 'I enjoy the competition and the process of learning as we compete. The whole thing is just fascinating. I don\'t know what I\'ll do when I retire. When I go sailing, I look around... anyone want to race? I just love competing as opposed to just going out and watching the sunset.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Remembering that you are going to die is the best way I know to avoid the trap of thinking you have something to lose. You are already naked. There is no reason not to follow your heart.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'I didn\'t see it then, but it turned out that getting fired from Apple was the best thing that could have ever happened to me. The heaviness of being successful was replaced by the lightness of being a beginner again, less sure about everything. It freed me to enter one of the most creative periods of my life.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'We think the Mac will sell zillions, but we didn\'t build the Mac for anybody else. We built it for ourselves. We were the group of people who were going to judge whether it was great or not. We weren\'t going to go out and do market research. We just wanted to build the best thing we could build.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'I want to put a ding in the universe.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'When you\'re young, you look at television and think, there\'s a conspiracy. The networks have conspired to dumb us down. But when you get a little older, you realize that\'s not true. The networks are in business to give people exactly what they want.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Computers themselves, and software yet to be developed, will revolutionize the way we learn.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Design is not just what it looks like and feels like. Design is how it works.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Being the richest man in the cemetery doesn\'t matter to me. Going to bed at night saying we\'ve done something wonderful, that\'s what matters to me.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Innovation distinguishes between a leader and a follower.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Be a yardstick of quality. Some people aren\'t used to an environment where excellence is expected.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'It\'s really hard to design products by focus groups. A lot of times, people don\'t know what they want until you show it to them.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'My favorite things in life don\'t cost any money. It\'s really clear that the most precious resource we all have is time.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Sometimes life is going to hit you in the head with a brick. Don\'t lose faith.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'I\'m convinced that about half of what separates the successful entrepreneurs from the non-successful ones is pure perseverance.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'I\'m as proud of many of the things we haven\'t done as the things we have done. Innovation is saying no to a thousand things.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven\'t found it yet, keep looking. Don\'t settle. As with all matters of the heart, you\'ll know when you find it.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Have the courage to follow your heart and intuition. They somehow know what you truly want to become.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'I think if you do something and it turns out pretty good, then you should go do something else wonderful, not dwell on it for too long. Just figure out what\'s next.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'When you\'re a carpenter making a beautiful chest of drawers, you\'re not going to use a piece of plywood on the back, even though it faces the wall and nobody will see it. You\'ll know it\'s there, so you\'re going to use a beautiful piece of wood on the back. For you to sleep well at night, the aesthetic, the quality, has to be carried all the way through.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'That\'s been one of my mantras—focus and simplicity. Simple can be harder than complex; you have to work hard to get your thinking clean to make it simple.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Quality is more important than quantity. One home run is much better than two doubles.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'The people who are crazy enough to think they can change the world are the ones who do.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'You can\'t connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future. You have to trust in something — your gut, destiny, life, karma, whatever. This approach has never let me down, and it has made all the difference in my life.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Things don\'t have to change the world to be important.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'Bottom line is, I didn\'t return to Apple to make a fortune. I\'ve been very lucky in my life and already have one. When I was 25, my net worth was $100 million or so. I decided then that I wasn\'t going to let it ruin my life. There\'s no way you could ever spend it all, and I don\'t view wealth as something that validates my intelligence.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'We made the buttons on the screen look so good you\'ll want to lick them.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'A lot of companies have chosen to downsize, and maybe that was the right thing for them. We chose a different path. Our belief was that if we kept putting great products in front of customers, they would continue to open their wallets.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'You know, my main reaction to this money thing is that it\'s humorous, all the attention to it, because it\'s hardly the most insightful or valuable thing that\'s happened to me.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 9,
            'quote_text'    => 'The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it. But it\'s like people who had black-and-white TVs when color came out. They eventually decided whether or not the new technology was worth the investment.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Failure is an option here. If things are not failing, you are not innovating enough.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'If something is important enough, even if the odds are against you, you should still do it.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'You want to be extra rigorous about making the best possible thing you can. Find everything that\'s wrong with it and fix it. Seek negative feedback, particularly from friends.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Any product that needs a manual to work is broken.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'I think it is possible for ordinary people to choose to be extraordinary.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Some people don\'t like change, but you need to embrace change if the alternative is disaster.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Persistence is very important. You should not give up unless you are forced to give up.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'There\'s a tremendous bias against taking risks. Everyone is trying to optimize their ass-covering.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'It\'s OK to have your eggs in one basket as long as you control what happens to that basket.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'I don\'t think it\'s a good idea to plan to sell a company.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'People work better when they know what the goal is and why. It is important that people look forward to coming to work in the morning and enjoy working.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'If you\'re co-founder or CEO, you have to do all kinds of tasks you might not want to do... If you don\'t do your chores, the company won\'t succeed... No task is too menial.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'I don\'t create companies for the sake of creating companies, but to get things done.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'I don\'t believe in process. In fact, when I interview a potential employee and he or she says that \'it\'s all about the process,\' I see that as a bad sign. The problem is that at a lot of big companies, process becomes a substitute for thinking. You\'re encouraged to behave like a little gear in a complex machine. Frankly, it allows you to keep people who aren\'t that smart, who aren\'t that creative.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Starting and growing a business is as much about the innovation, drive, and determination of the people behind it as the product they sell.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'The first step is to establish that something is possible; then probability will occur.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'I\'ve actually not read any books on time management.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Talent is extremely important. It\'s like a sports team, the team that has the best individual player will often win, but then there\'s a multiplier from how those players work together and the strategy they employ.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'Being an entrepreneur is like eating glass and staring into the abyss of death.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'If you\'re trying to create a company, it\'s like baking a cake. You have to have all the ingredients in the right proportion.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'As much as possible, avoid hiring MBAs. MBA programs don\'t teach people how to create companies.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'I would like to die on Mars. Just not on impact.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 10,
            'quote_text'    => 'The United States is a nation of explorers. America is the spirit of human exploration distilled.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young. The greatest thing in life is to keep your mind young.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'My best friend is the one who brings out the best in me.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'There is one rule for the industrialist and that is: Make the best quality of goods possible at the lowest cost possible, paying the highest wages possible.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Business is never so healthy as when, like a chicken, it must do a certain amount of scratching around for what it gets.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'The man who will use his skill and constructive imagination to see how much he can give for a dollar, instead of how little he can give for a dollar, is bound to succeed.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'A business that makes nothing but money is a poor business.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'The competitor to be feared is one who never bothers about you at all, but goes on making his own business better all the time.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'A business absolutely devoted to service will have only one worry about profits. They will be embarrassingly large.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'I do not believe a man can ever leave his business. He ought to think of it by day and dream of it by night.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Competition is the keen cutting edge of business, always shaving away at costs.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'If money is your hope for independence you will never have it. The only real security that a man will have in this world is a reserve of knowledge, experience, and ability.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Failure is simply the opportunity to begin again, this time more intelligently.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'It is well enough that people of the nation do not understand our banking and monetary system, for if they did, I believe there would be a revolution before tomorrow morning.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Life is a series of experiences, each one of which makes us bigger, even though sometimes it is hard to realize this. For the world was built to develop character, and we must learn that the setbacks and grieves which we endure help us in our marching onward.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'As we advance in life we learn the limits of our abilities.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'One of the greatest discoveries a man makes, one of his great surprises, is to find he can do what he was afraid he couldn\'t do.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Don\'t find fault, find a remedy.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'There is joy in work. There is no happiness except in the realization that we have accomplished something.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'What\'s right about America is that although we have a mess of problems, we have great capacity - intellect and resources - to do some thing about them.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'The highest use of capital is not to make more money, but to make money do more for the betterment of life.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Time and money spent in helping men to do more for themselves is far better than mere giving.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'It is not the employer who pays the wages. Employers only handle the money. It is the customer who pays the wages.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Speculation is only a word covering the making of money out of the manipulation of prices, instead of supplying goods and services.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Money is like an arm or leg - use it or lose it.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'You can\'t build a reputation on what you are going to do.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Coming together is a beginning, staying together is progress, and working together is success.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'It has been my observation that most people get ahead during the time that others waste.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Before everything else, getting ready is the secret of success.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Obstacles are those frightful things you see when you take your eyes off your goal.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Thinking is the hardest work there is, which is probably the reason why so few engage in it.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'If you think you can do a thing or think you can\'t do a thing, you\'re right.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'When everything seems to be going against you, remember that the airplane takes off against the wind, not with it.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Quality means doing it right when no one is looking.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'The only real mistake is the one from which we learn nothing.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'If I had asked people what they wanted, they would have said \'faster horses.\'',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'If there is any one secret of success, it lies in the ability to get the other person\'s point of view and see things from that person\'s angle as well as from your own.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Vision without execution is just hallucination.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'Enthusiasm is the yeast that makes your hopes shine to the stars.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'You don\'t have to hold a position in order to be a leader.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'To do more for the world than the world does for you – that is success.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 11,
            'quote_text'    => 'You can\'t learn in school what the world is going to do next year.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 195,
            'quote_text'    => 'Anchor every decision in data and the rest will follow.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 199,
            'quote_text'    => 'The most valuable thing for leaders to have is clear data about everything they are doing, and then they can can make better decisions.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'I have no other view than to promote the public good, and am unambitious of honors not founded in the approbation of my Country.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Let your Discourse with men of business be short and comprehensive.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Laws made by common consent must not be trampled on by individuals.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'The Constitution is the guide which I never will abandon.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'The alternate domination of one faction over another, sharpened by the spirit of revenge natural to party dissension, which in different ages and countries has perpetrated the most horrid enormities, is itself a frightful despotism. But this leads at length to a more formal and permanent despotism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Lenience will operate with greater force, in some instances than rigor. It is therefore my first wish to have all of my conduct distinguished by it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Happiness and moral duty are inseparably connected.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'It may be laid down as a primary position, and the basis of our system, that every Citizen who enjoys the protection of a Free Government, owes not only a proportion of his property, but even of his personal services to the defense of it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'True friendship is a plant of slow growth, and must undergo and withstand the shocks of adversity, before it is entitled to the appellation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'If we desire to avoid insult, we must be able to repel it; if we desire to secure peace, one of the most powerful instruments of our rising prosperity, it must be known, that we are at all times ready for War.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'I walk on untrodden ground. There is scarcely any part of my conduct which may not hereafter be drawn into precedent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'I beg you be persuaded that no one would be more zealous than myself to establish effectual barriers against the horrors of spiritual tyranny, and every species of religious persecution.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'To be prepared for war is one of the most effective means of preserving peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Being no bigot myself to any mode of worship, I am disposed to endulge the professors of Christianity in the church, that road to heaven which to them shall seem the most direct plainest easiest and least liable to exception.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'There can be no greater error than to expect, or calculate, upon real favors from nation to nation. It is an illusion which experience must cure, which a just pride ought to discard.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'It is impossible to reason without arriving at a Supreme Being.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Let your heart feel for the afflictions and distress of everyone, and let your hand give in proportion to your purse.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'It will be found an unjust and unwise jealousy to deprive a man of his natural liberty upon the supposition he may abuse it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'My observation is that whenever one person is found adequate to the discharge of a duty... it is worse executed by two persons, and scarcely done at all if three or more are employed therein.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'I hope I shall possess firmness and virtue enough to maintain what I consider the most enviable of all titles, the character of an honest man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Friendship is a plant of slow growth and must undergo and withstand the shocks of adversity before it is entitled to the appellation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Few men have virtue to withstand the highest bidder.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'A slender acquaintance with the world must convince every man that actions, not words, are the true criterion of the attachment of friends.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Discipline is the soul of an army. It makes small numbers formidable; procures success to the weak, and esteem to all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Worry is the interest paid by those who borrow trouble.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Guard against the impostures of pretended patriotism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Let us raise a standard to which the wise and honest can repair; the rest is in the hands of God.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'If the freedom of speech is taken away then dumb and silent we may be led, like sheep to the slaughter.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'It is better to be alone than in bad company.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'It is far better to be alone, than to be in bad company.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'When we assumed the Soldier, we did not lay aside the Citizen.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Labor to keep alive in your breast that little spark of celestial fire, called conscience.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'The basis of our political system is the right of the people to make and to alter their constitutions of government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Mankind, when left to themselves, are unfit for their own government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'We should not look back unless it is to derive useful lessons from past errors, and for the purpose of profiting by dearly bought experience.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Let us with caution indulge the supposition that morality can be maintained without religion. Reason and experience both forbid us to expect that national morality can prevail in exclusion of religious principle.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Nothing can be more hurtful to the service, than the neglect of discipline; for that discipline, more than numbers, gives one army the superiority over another.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Some day, following the example of the United States of America, there will be a United States of Europe.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Associate with men of good quality if you esteem your own reputation; for it is better to be alone than in bad company.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Liberty, when it begins to take root, is a plant of rapid growth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Arbitrary power is most easily established on the ruins of liberty abused to licentiousness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'I am persuaded, you will permit me to observe, that the path of true piety is so plain as to require but little political direction.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'My first wish is to see this plague of mankind, war, banished from the earth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'There is nothing which can better deserve your patronage, than the promotion of science and literature. Knowledge is in every country the surest basis of public happiness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'War - An act of violence whose object is to constrain the enemy, to accomplish our will.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'It is better to offer no excuse than a bad one.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'I can only say that there is not a man living who wishes more sincerely than I do, to see a plan adopted for the abolition of it - but there is only one proper and effectual mode by which it can be accomplished, and that is by Legislative authority: and this, as far as my suffrage will go, shall never be wanting.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Truth will ultimately prevail where there is pains to bring it to light.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Observe good faith and justice toward all nations. Cultivate peace and harmony with all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Experience teaches us that it is much easier to prevent an enemy from posting themselves than it is to dislodge them after they have got possession.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'The time is near at hand which must determine whether Americans are to be free men or slaves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Over grown military establishments are under any form of government inauspicious to liberty, and are to be regarded as particularly hostile to republican liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'The foolish and wicked practice of profane cursing and swearing is a vice so mean and low that every person of sense and character detests and despises it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Bad seed is a robbery of the worst kind: for your pocket-book not only suffers by it, but your preparations are lost and a season passes away unimproved.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 57,
            'quote_text'    => 'Be courteous to all, but intimate with few, and let those few be well tried before you give them your confidence.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'My country has contrived for me the most insignificant office that ever the invention of man contrived or his imagination conceived.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Liberty cannot be preserved without general knowledge among the people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'There is danger from all men. The only maxim of a free government ought to be to trust no man living with power to endanger the public liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'As much as I converse with sages and heroes, they have very little of my love and admiration. I long for rural and domestic scene, for the warbling of birds and the prattling of my children.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'While all other sciences have advanced, that of government is at a standstill - little better understood, little better practiced now than three or four thousand years ago.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Property is surely a right of mankind as real as liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'The furnace of affliction produces refinement, in states as well as individuals.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Let us tenderly and kindly cherish, therefore, the means of knowledge. Let us dare to read, think, speak, and write.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Because power corrupts, society\'s demands for moral authority and character increase as the importance of the position increases.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Facts are stubborn things; and whatever may be our wishes, our inclinations, or the dictates of our passions, they cannot alter the state of facts and evidence.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Posterity! You will never know how much it cost the present generation to preserve your freedom! I hope you will make a good use of it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Remember, democracy never lasts long. It soon wastes, exhausts, and murders itself. There never was a democracy yet that did not commit suicide.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'The happiness of society is the end of government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Old minds are like old horses; you must exercise them if you wish to keep them in working order.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'A desire to be observed, considered, esteemed, praised, beloved, and admired by his fellows is one of the earliest as well as the keenest dispositions discovered in the heart of man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'The essence of a free government consists in an effectual control of rivalries.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Fear is the foundation of most governments.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'I, poor creature, worn out with scribbling for my bread and my liberty, low in spirits and weak in health, must leave others to wear the laurels which I have sown, others to eat the bread which I have earned. A common case.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Here is everything which can lay hold of the eye, ear and imagination - everything which can charm and bewitch the simple and ignorant. I wonder how Luther ever broke the spell.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Liberty, according to my metaphysics is a self-determining power in an intellectual agent. It implies thought and choice and power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Abuse of words has been the great instrument of sophistry and chicanery, of party, faction, and division of society.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Power always thinks... that it is doing God\'s service when it is violating all his laws.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'I always consider the settlement of America with reverence and wonder, as the opening of a grand scene and design in providence, for the illumination of the ignorant and the emancipation of the slavish part of mankind all over the earth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'When people talk of the freedom of writing, speaking or thinking I cannot choose but laugh. No such thing ever existed. No such thing now exists; but I hope it will exist. But it must be hundreds of years after you and I shall write and speak no more.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'I must study politics and war that my sons may have liberty to study mathematics and philosophy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Great is the guilt of an unnecessary war.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Genius is sorrow\'s child.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'Power always thinks it has a great soul and vast views beyond the comprehension of the weak.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 58,
            'quote_text'    => 'The right of a nation to kill a tyrant in case of necessity can no more be doubted than to hang a robber, or kill a flea.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I find that he is happiest of whom the world says least, good or bad.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Do you want to know who you are? Don\'t ask. Act! Action will delineate and define you.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'One man with courage is a majority.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'We hold these truths to be self-evident: that all men are created equal; that they are endowed by their Creator with certain unalienable rights; that among these are life, liberty, and the pursuit of happiness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Power is not alluring to pure minds.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Never spend your money before you have earned it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Happiness is not being pained in body or troubled in mind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'My only fear is that I may live too long. This would be a subject of dread to me.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Peace and friendship with all mankind is our wisest policy, and I wish we may be permitted to pursue it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'In every country and every age, the priest had been hostile to Liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I own that I am not a friend to a very energetic government. It is always oppressive.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Fix reason firmly in her seat, and call to her tribunal every fact, every opinion. Question with boldness even the existence of a God; because, if there be one, he must more approve of the homage of reason, than that of blindfolded fear.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Taste cannot be controlled by law.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'So confident am I in the intentions, as well as wisdom, of the government, that I shall always be satisfied that what is not done, either cannot, or ought not to be done.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Determine never to be idle. No person will have occasion to complain of the want of time who never loses any. It is wonderful how much may be done if we are always doing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Speeches that are measured by the hour will die with the hour.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Enlighten the people generally, and tyranny and oppressions of body and mind will vanish like evil spirits at the dawn of day.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'There is not a truth existing which I fear... or would wish unknown to the whole world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'All, too, will bear in mind this sacred principle, that though the will of the majority is in all cases to prevail, that will to be rightful must be reasonable; that the minority possess their equal rights, which equal law must protect, and to violate would be oppression.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I would rather be exposed to the inconveniences attending too much liberty than those attending too small a degree of it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Leave no authority existing not responsible to the people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The whole commerce between master and slave is a perpetual exercise of the most boisterous passions, the most unremitting despotism on the one part, and degrading submissions on the other. Our children see this, and learn to imitate it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I have no ambition to govern men; it is a painful and thankless office.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The glow of one warm thought is to me worth more than money.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'As our enemies have found we can reason like men, so now let us show them we can fight like men also.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Leave all the afternoon for exercise and recreation, which are as necessary as reading. I will rather say more necessary because health is worth more than learning.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It is always better to have no ideas than false ones; to believe nothing, than to believe what is wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'War is an instrument entirely inefficient toward redressing wrong; and multiplies, instead of indemnifying losses.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It is neither wealth nor splendor; but tranquility and occupation which give you happiness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Delay is preferable to error.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'In defense of our persons and properties under actual violation, we took up arms. When that violence shall be removed, when hostilities shall cease on the part of the aggressors, hostilities shall cease on our part also.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Resort is had to ridicule only when reason is against us.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It is our duty still to endeavor to avoid war; but if it shall actually take place, no matter by whom brought on, we must defend ourselves. If our house be on fire, without inquiring whether it was fired from within or without, we must try to extinguish it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Bodily decay is gloomy in prospect, but of all human contemplations the most abhorrent is body without mind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Timid men prefer the calm of despotism to the tempestuous sea of liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Friendship is but another name for an alliance with the follies and the misfortunes of others. Our own share of miseries is sufficient: why enter then as volunteers into those of another?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'But friendship is precious, not only in the shade, but in the sunshine of life, and thanks to a benevolent arrangement the greater part of life is sunshine.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Wisdom I know is social. She seeks her fellows. But Beauty is jealous, and illy bears the presence of a rival.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'In matters of style, swim with the current; in matters of principle, stand like a rock.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'We are not to expect to be translated from despotism to liberty in a featherbed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It behooves every man who values liberty of conscience for himself, to resist invasions of it in the case of others: or their case may, by change of circumstances, become his own.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The earth belongs to the living, not to the dead.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'When a man assumes a public trust he should consider himself a public property.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Dependence begets subservience and venality, suffocates the germ of virtue, and prepares fit tools for the designs of ambition.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I abhor war and view it as the greatest scourge of mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Whenever the people are well-informed, they can be trusted with their own government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'An enemy generally says and believes what he wishes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'When angry count to ten before you speak. If very angry, count to one hundred.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It is more dangerous that even a guilty person should be punished without the forms of law than that he should escape.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Only aim to do your duty, and mankind will give you credit where you fail.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'He who knows best knows how little he knows.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'An injured friend is the bitterest of foes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Advertisements contain the only truths to be relied on in a newspaper.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Difference of opinion is advantageous in religion. The several sects perform the office of a Censor - over each other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I know of no safe depository of the ultimate powers of the society but the people themselves; and if we think them not enlightened enough to exercise their control with a wholesome discretion, the remedy is not to take it from them but to inform their discretion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Question with boldness even the existence of a God; because, if there be one, he must more approve of the homage of reason, than that of blind-folded fear.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'No occupation is so delightful to me as the culture of the earth, and no culture comparable to that of the garden.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Whenever you do a thing, act as if all the world were watching.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The moment a person forms a theory, his imagination sees in every object only the traits which favor that theory.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The world is indebted for all triumphs which have been gained by reason and humanity over error and oppression.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I was bold in the pursuit of knowledge, never fearing to follow truth and reason to whatever results they led, and bearding every authority which stood in their way.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It takes time to persuade men to do even what is for their own good.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The God who gave us life, gave us liberty at the same time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I have seen enough of one war never to wish to see another.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Don\'t talk about what you have done or what you are going to do.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'How much pain they have cost us, the evils which have never happened.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Always take hold of things by the smooth handle.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The tree of liberty must be refreshed from time to time with the blood of patriots and tyrants.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The care of human life and happiness, and not their destruction, is the first and only object of good government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The man who reads nothing at all is better educated than the man who reads nothing but newspapers.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Be polite to all, but intimate with few.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Rightful liberty is unobstructed action according to our will within limits drawn around us by the equal rights of others. I do not add \'within the limits of the law\' because law is often but the tyrant\'s will, and always so when it violates the rights of the individual.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'For a people who are free, and who mean to remain so, a well-organized and armed militia is their best security.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Money, not morality, is the principle commerce of civilized nations.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I like the dreams of the future better than the history of the past.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'There is not a sprig of grass that shoots uninteresting to me.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'There is a natural aristocracy among men. The grounds of this are virtue and talents.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'One loves to possess arms, though they hope never to have occasion for them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Mankind are more disposed to suffer, while evils are sufferable, than to right themselves by abolishing the forms to which they are accustomed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'We never repent of having eaten too little.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Ignorance is preferable to error, and he is less remote from the truth who believes nothing than he who believes what is wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I do not take a single newspaper, nor read one a month, and I feel myself infinitely the happier for it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Nothing gives one person so much advantage over another as to remain always cool and unruffled under all circumstances.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I tremble for my country when I reflect that God is just; that his justice cannot sleep forever.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The boisterous sea of liberty is never without a wave.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I never considered a difference of opinion in politics, in religion, in philosophy, as cause for withdrawing from a friend.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The spirit of resistance to government is so valuable on certain occasions that I wish it to be always kept alive.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Truth is certainly a branch of morality and a very important one to society.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'To compel a man to furnish funds for the propagation of ideas he disbelieves and abhors is sinful and tyrannical.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Do not bite at the bait of pleasure, till you know there is no hook beneath it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'One travels more usefully when alone, because he reflects more.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The natural cause of the human mind is certainly from credulity to skepticism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Educate and inform the whole mass of the people... They are the only sure reliance for the preservation of our liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I cannot live without books.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Honesty is the first chapter in the book of wisdom.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Peace, commerce and honest friendship with all nations; entangling alliances with none.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Experience demands that man is the only animal which devours his own kind, for I can apply no milder term to the general prey of the rich on the poor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'He who knows nothing is closer to the truth than he whose mind is filled with falsehoods and errors.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Whenever a man has cast a longing eye on offices, a rottenness begins in his conduct.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'In truth, politeness is artificial good humor, it covers the natural want of it, and ends by rendering habitual a substitute nearly equivalent to the real virtue.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The way to silence religious disputes is to take no notice of them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Nothing can stop the man with the right mental attitude from achieving his goal; nothing on earth can help the man with the wrong mental attitude.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'No duty the Executive had to perform was so trying as to put the right man in the right place.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'We did not raise armies for glory or for conquest.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Nothing is unchangeable but the inherent and unalienable rights of man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Walking is the best possible exercise. Habituate yourself to walk very far.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It is error alone which needs the support of government. Truth can stand by itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'The good opinion of mankind, like the lever of Archimedes, with the given fulcrum, moves the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'To penetrate and dissipate these clouds of darkness, the general mind must be strengthened by education.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'My theory has always been, that if we are to dream, the flatteries of hope are as cheap, and pleasanter, than the gloom of despair.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Our greatest happiness does not depend on the condition of life in which chance has placed us, but is always the result of a good conscience, good health, occupation, and freedom in all just pursuits.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I believe that every human mind feels pleasure in doing good to another.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I hope our wisdom will grow with our power, and teach us, that the less we use our power the greater it will be.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'It is incumbent on every generation to pay its own debts as it goes. A principle which if acted on would save one-half the wars of the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Force is the vital principle and immediate parent of despotism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'A coward is much more exposed to quarrels than a man of spirit.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'Errors of opinion may be tolerated where reason is left free to combat it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 59,
            'quote_text'    => 'I have no fear that the result of our experiment will be that men may be trusted to govern themselves without a master.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Wherever there is interest and power to do wrong, wrong will generally be done.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Any reading not of a vicious species must be a good substitute for the amusements too apt to fill up the leisure of the labouring classes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The circulation of confidence is better than the circulation of money.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'As long as the reason of man continues fallible, and he is at liberty to exercise it, different opinions will be formed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Union of religious sentiments begets a surprising confidence.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'War contains so much folly, as well as wickedness, that much is to be hoped from the progress of reason.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The happy Union of these States is a wonder; their Constitution a miracle; their example the hope of Liberty throughout the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'By rendering the labor of one, the property of the other, they cherish pride, luxury, and vanity on one side; on the other, vice and servility, or hatred and revolt.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Each generation should be made to bear the burden of its own wars, instead of carrying them on, at the expense of other generations.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The internal effects of a mutable policy poisons the blessings of liberty itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'As a man is said to have a right to his property, he may be equally said to have a property in his rights.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Religious bondage shackles and debilitates the mind and unfits it for every noble enterprise, every expanded prospect.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Whenever a youth is ascertained to possess talents meriting an education which his parents cannot afford, he should be carried forward at the public expense.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'I believe there are more instances of the abridgement of freedom of the people by gradual and silent encroachments by those in power than by violent and sudden usurpations.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'All that seems indispensible in stating the account between the dead and the living, is to see that the debts against the latter do not exceed the advances made by the former.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Knowledge will forever govern ignorance; and a people who mean to be their own governors must arm themselves with the power which knowledge gives.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Commercial shackles are generally unjust, oppressive, and impolitic.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'If we are to take for the criterion of truth the majority of suffrages, they ought to be gotten from those philosophic and patriotic citizens who cultivate their reason.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'If men were angels, no government would be necessary.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Of all the enemies of public liberty, war is perhaps the most to be dreaded, because it comprises and develops the germ of every other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'All men having power ought to be distrusted to a certain degree.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Liberty may be endangered by the abuse of liberty, but also by the abuse of power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The number, the industry, and the morality of the priesthood, and the devotion of the people have been manifestly increased by the total separation of the church from the state.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'In no instance have... the churches been guardians of the liberties of the people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Where an excess of power prevails, property of no sort is duly respected. No man is safe in his opinions, his person, his faculties, or his possessions.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Every nation whose affairs betray a want of wisdom and stability may calculate on every loss which can be sustained from the more systematic policy of its wiser neighbors.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Ambition must be made to counteract ambition.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'We are right to take alarm at the first experiment upon our liberties.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The loss of liberty at home is to be charged to the provisions against danger, real or imagined, from abroad.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The advancement and diffusion of knowledge is the only guardian of true liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The class of citizens who provide at once their own food and their own raiment, may be viewed as the most truly independent and happy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Learned Institutions ought to be favorite objects with every free people. They throw that light over the public mind which is the best security against crafty and dangerous encroachments on the public liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The personal right to acquire property, which is a natural right, gives to property, when acquired, a right to protection, as a social right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Let me recommend the best medicine in the world: a long journey, at a mild season, through a pleasant country, in easy stages.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'It is a universal truth that the loss of liberty at home is to be charged to the provisions against danger, real or pretended, from abroad.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'A well-instructed people alone can be permanently a free people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Despotism can only exist in darkness, and there are too many lights now in the political firmament to permit it to remain anywhere, as it has heretofore done, almost everywhere.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'It will be of little avail to the people that the laws are made by men of their own choice if the laws be so voluminous that they cannot be read, or so incoherent that they cannot be understood.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The means of defense against foreign danger historically have become the instruments of tyranny at home.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'There is no maxim, in my opinion, which is more liable to be misapplied, and which, therefore, more needs elucidation, than the current one, that the interest of the majority is the political standard of right and wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The diversity in the faculties of men, from which the rights of property originate, is not less an insuperable obstacle to an uniformity of interests. The protection of these faculties is the first object of government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'What prudent merchant will hazard his fortunes in any new branch of commerce when he knows not that his plans may be rendered unlawful before they can be executed?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Philosophy is common sense with big words.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'Perhaps it is a universal truth that the loss of liberty at home is to be charged to provisions against danger, real or pretended, from abroad.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'To the press alone, chequered as it is with abuses, the world is indebted for all the triumphs which have been gained by reason and humanity over error and oppression.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'A man has a property in his opinions and the free communication of them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'If Tyranny and Oppression come to this land, it will be in the guise of fighting a foreign enemy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The truth is that all men having power ought to be mistrusted.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'The capacity of the female mind for studies of the highest order cannot be doubted, having been sufficiently illustrated by its works of genius, of erudition, and of science.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 60,
            'quote_text'    => 'To suppose that any form of government will secure liberty or happiness without any virtue in the people, is a chimerical idea.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'It is only when the people become ignorant and corrupt, when they degenerate into a populace, that they are incapable of exercising their sovereignty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'The payments which have been made into the Treasury show the very productive state of the public revenue.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'A little flattery will support a man through great fatigue.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'It is the knowledge that all men have weaknesses and that many have vices that makes government necessary.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'Preparation for war is a constant stimulus to suspicion and ill will.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'Our country may be likened to a new house. We lack many things, but we possess the most precious of all - liberty!',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'The principles and passions of men are always the same and lead to the same result, varying only according to the circumstances in which they are placed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'Never did a government commence under auspices so favorable, nor ever was success so complete.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'National honor is the national property of the highest value.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'If we look to the history of other nations, ancient or modern, we find no example of a growth so rapid, so gigantic, of a people so prosperous and happy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'The public lands are a public stock, which ought to be disposed of to the best advantage for the nation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 61,
            'quote_text'    => 'A king without power is an absurdity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'America does not go abroad in search of monsters to destroy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'All men profess honesty as long as they can. To believe all men honest would be folly. To believe none so is something worse.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Courage and perseverance have a magical talisman, before which difficulties disappear and obstacles vanish into air.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'In order to preserve the dominion of our own passions, it behooves us to be constantly and strictly on our guard against the influence and infection of the passions of others.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Is not the brand of \'double-dealer\' stamped on the forehead of every democratic slaveholder? Are not fraud and hypocrisy the religion of the man who calls himself a democrat, and hold his fellow-man in bondage?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'I have no predilection for unpopularity as such, but I hold it much preferable to the popularity of a day, which perishes with the transient topic upon which it is grounded.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Heaven has given to every human being the power of controlling his passions, and if he neglects or loses it, the fault is his own, and he must be answerable for it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Gratitude, warm, sincere, intense, when it takes possession of the bosom, fills the soul to overflowing and scarce leaves room for any other sentiment or thought.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'If your actions inspire others to dream more, learn more, do more and become more, you are a leader.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Always vote for principle, though you may vote alone, and you may cherish the sweetest reflection that your vote is never lost.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'This idea of the transcendent power of the Supreme Being is essentially connected with that by which the whole duty of man is summed up: obedience to His will.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Patience and perseverance have a magical effect before which difficulties disappear and obstacles vanish.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'To read the Bible is of itself a laudable occupation and can scarcely fail of being a useful employment of time; but the habit of reflecting upon what you have read is equally essential as than of reading itself, to give it all the efficacy of which it is susceptible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'Nip the shoots of arbitrary power in the bud, is the only maxim which can ever preserve the liberties of any people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 62,
            'quote_text'    => 'It is of no use to discover our own faults and infirmities unless the discovery prompts up to amendment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Peace, above all things, is to be desired, but blood must sometimes be spilled to obtain it on equable and lasting terms.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Mischief springs from the power which the moneyed interest derives from a paper currency which they are able to control, from the multitude of corporations with exclusive privileges... which are employed altogether for their benefit.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'The people are the government, administering it by their agents; they are the government, the sovereign power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Money is power, and in that government which pays all the public officers of the states will all political power be substantially concentrated.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Our government is founded upon the intelligence of the people. I for one do not despair of the republic. I have great confidence in the virtue of the great majority of the people, and I cannot fear the result.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Every diminution of the public burdens arising from taxation gives to individual enterprise increased power and furnishes to all the members of our happy confederacy new motives for patriotic affection and support.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'All the rights secured to the citizens under the Constitution are worth nothing, and a mere bubble, except guaranteed to them by an independent and virtuous Judiciary.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Fear not, the people may be deluded for a moment, but cannot be corrupted.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'I\'ve got big shoes to fill. This is my chance to do something. I have to seize the moment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'There is no pleasure in having nothing to do; the fun is having lots to do and not doing it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'To the victors belong the spoils.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'You must pay the price if you wish to secure the blessing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'There are no necessary evils in government. Its evils exist only in its abuses.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Any man worth his salt will stick up for what he believes right, but it takes a slightly better man to acknowledge instantly and without reservation that he is in error.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Americans are not a perfect people, but we are called to a perfect mission.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'I have always been afraid of banks.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Unless you become more watchful in your states and check the spirit of monopoly and thirst for exclusive privileges you will in the end find that... the control over your dearest interests has passed into the hands of these corporations.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'The planter, the farmer, the mechanic, and the laborer... form the great body of the people of the United States, they are the bone and sinew of the country men who love liberty and desire nothing but equal rights and equal laws.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'It is to be regretted that the rich and powerful too often bend the acts of government to their own selfish purposes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'Take time to deliberate; but when the time for action arrives, stop thinking and go in.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'The wisdom of man never yet contrived a system of taxation that would operate with perfect equality.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'The duty of government is to leave commerce to its own capital and credit as well as all other branches of business, protecting all in their legal pursuits, granting exclusive privileges to none.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 63,
            'quote_text'    => 'The brave man inattentive to his duty, is worth little more to his country than the coward who deserts in the hour of danger.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 64,
            'quote_text'    => 'I tread in the footsteps of illustrious men... in receiving from the people the sacred trust confided to my illustrious predecessor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 64,
            'quote_text'    => 'We remain at peace with all nations, and no efforts on my part consistent with the preservation of our rights and the honor of the country shall be spared to maintain a position so consonant to our institutions.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 64,
            'quote_text'    => 'There is a power in public opinion in this country - and I thank God for it: for it is the most honest and best of all powers - which will not tolerate an incompetent or unworthy man to hold in his weak or wicked hands the lives and fortunes of his fellow-citizens.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 64,
            'quote_text'    => 'Those who have wrought great changes in the world never succeeded by gaining over chiefs; but always by exciting the multitude. The first is the resource of intrigue and produces only secondary results, the second is the resort of genius and transforms the universe.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 64,
            'quote_text'    => 'No evil can result from its inhibition more pernicious than its toleration.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 64,
            'quote_text'    => 'On receiving from the people the sacred trust twice confided on my illustrious predecessor, and which he has discharged so faithfully and so well, I know that I can not expect to perform the arduous task with equal ability and success.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 65,
            'quote_text'    => 'There is nothing more corrupting, nothing more destructive of the noblest and finest feelings of our nature, than the exercise of unlimited power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 65,
            'quote_text'    => 'To Englishmen, life is a topic, not an activity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 65,
            'quote_text'    => 'The chains of military despotism, once fastened upon a nation, ages might pass away before they could be shaken off.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Popularity, I have always thought, may aptly be compared to a coquette - the more you woo her, the more apt is she to elude your embrace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Nature governs man by no principle more fixed than that which leads him to pursue his interest.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'I can never consent to being dictated to.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'We direct the destinies of a mighty continent. Our resources are unlimited: our means unbounded. If we be true to ourselves, the glory of other nations, in comparison to ours, shall resemble but a tale from the days of chivalry.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'So far as it depends on the course of this government, our relations of good will and friendship will be sedulously cultivated with all nations.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'On the coming of that tremendous storm which for eight years desolated our country, Mr. Jefferson hesitated not, halted not.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Pleasure has ever more been represented by poets and by painters as clothed in perpetual smiles and adorned with the richest jewels; and in real life, we have known many who, allured by her deceptions, blandishments, and hollow but showy temptations, have followed as she pointed until ruin has befallen them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'The applause of his native land is the richest reward to which the patriot ever aspires. It is this for which \'he bears to live or dares to die.\' It is the high incentive to those achievements which illustrate the page of history and give to poetry its brightest charm.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'It is by these, the people, that I have been clothed with the high powers which they have seen fit to confide to their Chief Executive, and been charged with the solemn responsibility under which those powers are to be exercised.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'The sailor\'s life is at the best a life of danger. He pursues honor on the mountain wave and finds it in the battle and in the storm, and never did more distinguished chivalry display itself than in the conduct of our seamen during the late war.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'When the happy era shall arrive for the emancipation of nations, hastened on as it will be by the example of America, shall they not resort to the Declaration of our Independence as the charter of their rights, and will not its author be hailed as the benefactor of the redeemed?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Let it be henceforth proclaimed to the world that man\'s conscience was created free; that he is no longer accountable to his fellow man for his religious opinions, being responsible therefore only to his God.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Wealth can only be accumulated by the earnings of industry and the savings of frugality.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Liberty and equality are captivating sounds, but they often captivate to destroy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'The tolling of yon dismal bell and the loud but solemn discharge of artillery hath announced to the nation the melancholy tidings - Thomas Jefferson no longer lives!',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'A republican government can only be supported by virtue; and the end of all our legislation should be to encourage our fellow citizens in its daily practice.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 66,
            'quote_text'    => 'Parties are continually changing. The men of today give place to the men of tomorrow, and the idols which one set worship, the next destroy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'There is more selfishness and less principle among members of Congress than I had any conception of, before I became President of the U.S.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'No person can be more deeply sensible than myself of the danger of entangling alliances with any foreign nation. That we should avoid such alliances has become a maxim of our policy consecrated by the most venerated names which adorn our history and sanctioned by the unanimous voice of the American people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'I am heartily rejoiced that my term is so near its close. I will soon cease to be a servant and will become a sovereign.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'No president who performs his duties faithfully and conscientiously can have any leisure.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'The most energetic and prompt measures and the immediate appearance in arms of a large and overpowering force are recommended to Congress as the most certain and efficient means of bringing the existing collision with Mexico to a speedy and successful termination.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'The passion for office among members of Congress is very great, if not absolutely disreputable, and greatly embarrasses the operations of the Government. They create offices by their own votes and then seek to fill them themselves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'It is of great importance to our country generally, and especially to our navigating and whaling interests, that the Pacific Coast and, indeed, the whole of our territory west of the Rocky Mountains, should speedily be filled up by a hardy and patriotic population.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'It becomes us in humility to make our devout acknowledgments to the Supreme Ruler of the Universe for the inestimable civil and religious blessings with which we are favored.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'A crowd of persons came in as soon as my office was opened. Among them were several ladies who called to pay their respects. None who called had any business of more importance than an ardent desire to serve their country, provided they could be appointed to a good office. As I has none of these to dispose of, they were, of course, disappointed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'I cannot adequately express the horror I feel for a man who can be so base as to veil his hypocrisy under the cloak of religion, and state the base falsehood he has done.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'Peace, plenty, and contentment reign throughout our borders, and our beloved country presents a sublime moral spectacle to the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'Well may the boldest fear and the wisest tremble when incurring responsibilities on which may depend our country\'s peace and prosperity, and in some degree the hopes and happiness of the whole human family.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 67,
            'quote_text'    => 'With me it is exceptionally true that the Presidency is no bed of roses.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 68,
            'quote_text'    => 'Economy I consider a virtue & should be practiced by all; there is certainly no way in which money can be laid out than in the education of children.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 68,
            'quote_text'    => 'Never judge a stranger by his clothes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 68,
            'quote_text'    => 'I have always done my duty. I am ready to die. My only regret is for the friends I leave behind me.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 68,
            'quote_text'    => 'It would be judicious to act with magnanimity towards a prostrate foe.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 69,
            'quote_text'    => 'It is not strange... to mistake change for progress.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 69,
            'quote_text'    => 'Nations, like individuals in a state of nature, are equal and independent, possessing certain rights and owing certain duties to each other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 70,
            'quote_text'    => 'With the Union my best and dearest earthly hopes are entwined.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 70,
            'quote_text'    => 'The dangers of a concentration of all power in the general government of a confederacy so vast as ours are too obvious to be disregarded.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 70,
            'quote_text'    => 'Frequently the more trifling the subject, the more animated and protracted the discussion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 71,
            'quote_text'    => 'The ballot box is the surest arbiter of disputes among free men.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 71,
            'quote_text'    => 'The test of leadership is not to put greatness into humanity, but to elicit it, for the greatness is already there.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 71,
            'quote_text'    => 'I like the noise of democracy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 71,
            'quote_text'    => 'What is right and what is practicable are two different things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 71,
            'quote_text'    => 'To avoid entangling alliances has been a maxim of our policy ever since the days of Washington, and its wisdom no one will attempt to dispute.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Among the friends of Union, there is great diversity of sentiment and of policy in regard to slavery and the African race among us.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The mystic cords of memory, stretching from every battlefield and patriot grave to every living heart and hearthstone, all over this broad land, will yet swell the chorus of the Union, when again touched, as surely they will be, by the angels of our nature.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'He who molds the public sentiment... makes statutes and decisions possible or impossible to make.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'In so far as the government lands can be disposed of, I am in favor of cutting up the wild lands into parcels so that every poor man may have a home.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Slavery is founded in the selfishness of man\'s nature - opposition to it is his love of justice. These principles are an eternal antagonism; and when brought into collision so fiercely, as slavery extension brings them, shocks and throes and convulsions must ceaselessly follow.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'No matter how much cats fight, there always seem to be plenty of kittens.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I don\'t like that man. I must get to know him better.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I pass my life in preventing the storm from blowing down the tent, and I drive in the pegs as fast as they are pulled up.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'When I hear a man preach, I like to see him act as if he were fighting bees.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'This country, with its institutions, belongs to the people who inhabit it. Whenever they shall grow weary of the existing government, they can exercise their constitutional right of amending it, or exercise their revolutionary right to overthrow it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The way for a young man to rise is to improve himself in every way he can, never suspecting that anybody wishes to hinder him.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I hold that while man exists, it is his duty to improve not only his own condition, but to assist in ameliorating mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Government of the people, by the people, for the people, shall not perish from the Earth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'In great contests each party claims to act in accordance with the will of God. Both may be, and one must be wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'No man has a good enough memory to be a successful liar.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I perhaps ought to say that individually I never was much interested in the Texas question. I never could see much good to come of annexation, inasmuch as they were already a free republican people on our own model.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'That our government should have been maintained in its original form from its establishment until now is not much to be wondered at. It had many props to support it through that period, which now are decayed and crumbled away. Through that period, it was felt by all to be an undecided experiment; now, it is understood to be a successful one.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Don\'t worry when you are not recognized, but strive to be worthy of recognition.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'It has been my experience that folks who have no vices have very few virtues.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I was born and have ever remained in the most humble walks of life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'A man watches his pear tree day after day, impatient for the ripening of the fruit. Let him attempt to force the process, and he may spoil both fruit and tree. But let him patiently wait, and the ripe pear at length falls into his lap.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'If this is coffee, please bring me some tea; but if this is tea, please bring me some coffee.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'You can fool all the people some of the time, and some of the people all the time, but you cannot fool all the people all the time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Things may come to those who wait, but only the things left by those who hustle.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Extemporaneous speaking should be practiced and cultivated. It is the lawyer\'s avenue to the public. However able and faithful he may be in other respects, people are slow to bring him business if he cannot make a speech.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Ballots are the rightful and peaceful successors to bullets.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'A friend is one who has the same enemies as you have.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'If we could first know where we are, and whither we are tending, we could then better judge what to do, and how to do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'No man is good enough to govern another man without the other\'s consent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'As I would not be a slave, so I would not be a master. This expresses my idea of democracy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The ballot is stronger than the bullet.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Common looking people are the best in the world: that is the reason the Lord makes so many of them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Do I not destroy my enemies when I make them my friends?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I like to see a man proud of the place in which he lives. I like to see a man live so that his place will be proud of him.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'He has a right to criticize, who has a heart to help.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'America will never be destroyed from the outside. If we falter and lose our freedoms, it will be because we destroyed ourselves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I am not bound to win, but I am bound to be true. I am not bound to succeed, but I am bound to live by the light that I have. I must stand with anybody that stands right, and stand with him while he is right, and part with him when he goes wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'These capitalists generally act harmoniously and in concert to fleece the people; and now that they have got into a quarrel with themselves, we are called upon to appropriate the people\'s money to settle the quarrel.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'How many legs does a dog have if you call his tail a leg? Four. Saying that a tail is a leg doesn\'t make it a leg.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Discourage litigation. Persuade your neighbors to compromise whenever you can. As a peacemaker the lawyer has superior opportunity of being a good man. There will still be business enough.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Most folks are as happy as they make up their minds to be.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Don\'t interfere with anything in the Constitution. That must be maintained, for it is the only safeguard of our liberties.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Everybody likes a compliment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The probability that we may fail in the struggle ought not to deter us from the support of a cause we believe to be just.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The leading rule for the lawyer, as for the man of every calling, is diligence.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Better to remain silent and be thought a fool than to speak out and remove all doubt.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I never had a policy; I have just tried to do my very best each and every day.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'That some achieve great success, is proof to all that others can achieve it as well.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Give me six hours to chop down a tree and I will spend the first four sharpening the axe.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The philosophy of the school room in one generation will be the philosophy of government in the next.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I will prepare and some day my chance will come.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I am a slow walker, but I never walk back.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'It has so happened in all ages of the world that some have labored, and others have, without labor, enjoyed a large proportion of the fruits.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'As our case is new, we must think and act anew.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Don\'t swap horses in crossing a stream.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'The things I want to know are in books; my best friend is the man who\'ll get me a book I ain\'t read.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Be sure you put your feet in the right place, then stand firm.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Nearly all men can stand adversity, but if you want to test a man\'s character, give him power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I don\'t know who my grandfather was; I am much more concerned to know what his grandson will be.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I want it said of me by those who knew me best, that I always plucked a thistle and planted a flower where I thought a flower would grow.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Tact is the ability to describe others as they see themselves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'A house divided against itself cannot stand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Labor is prior to, and independent of, capital. Capital is only the fruit of labor, and could never have existed if labor had not first existed. Labor is the superior of capital, and deserves much the higher consideration.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Whatever you are, be a good one.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I do not think much of a man who is not wiser today than he was yesterday.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I hope to stand firm enough to not go backward, and yet not go forward fast enough to wreck the country\'s cause.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'What kills a skunk is the publicity it gives itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'You cannot escape the responsibility of tomorrow by evading it today.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'There may sometimes be ungenerous attempts to keep a young man down; and they will succeed, too, if he allows his mind to be diverted from its true channel to brood over the attempted injury.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Books serve to show a man that those original thoughts of his aren\'t very new at all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I have talked with great men, and I do not see how they differ from others.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'We should be too big to take offense and too noble to give it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'My great concern is not whether you have failed, but whether you are content with your failure.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'My paramount object in this struggle is to save the Union, and is not either to save or to destroy slavery. If I could save the Union without freeing any slave, I would do it; and if I could save it by freeing some and leaving others alone, I would also do that.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'In giving freedom to the slave, we assure freedom to the free - honorable alike in that we give and what we preserve. We shall nobly save, or meanly lose, the last best hope of earth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Those who deny freedom to others deserve it not for themselves; and under the rule of a just God, cannot long retain it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I can make more generals, but horses cost money.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Towering genius disdains a beaten path. It seeks regions hitherto unexplored.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Stand with anybody that stands right, stand with him while he is right and part with him when he goes wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Never regret what you don\'t write.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I do not expect the Union to be dissolved - I do not expect the house to fall - but I do expect it will cease to be divided. It will become all one thing, or all the other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'With Malice toward none, with charity for all, with firmness in the right, as God gives us to see the right, let us strive on to finish the work we are in, to bind up the nation\'s wounds.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Four score and seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'You may think it was a very little thing, and in these days it seems to me like a trifle, but it was a most important incident in my life. I could scarcely credit that I, the poor boy, had earned a dollar in less than a day; that by honest work, I had earned a dollar. I was a more hopeful and thoughtful boy from that time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Important principles may, and must, be inflexible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Sir, my concern is not whether God is on our side; my greatest concern is to be on God\'s side, for God is always right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Always bear in mind that your own resolution to succeed is more important than any other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'It is rather for us here dedicated to the great task remaining before us, that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'It is a quality of revolutions not to go by old lines or old laws, but to break up both and make new ones.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'We here highly resolve that these dead shall not have died in vain - that this nation, under God, shall have a new birth of freedom - and that government of the people, by the people, for the people, shall not perish from the earth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'I have always found that mercy bears richer fruits than strict justice.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'A capacity, and taste, for reading gives access to whatever has already been discovered by others.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'If I were to try to read, much less answer, all the attacks made on me, this shop might as well be closed for any other business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 72,
            'quote_text'    => 'Never stir up litigation. A worse man can scarcely be found than one who does this.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 73,
            'quote_text'    => 'There are no good laws but such as repeal other laws.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 73,
            'quote_text'    => 'If I am shot at, I want no man to be in the way of the bullet.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 73,
            'quote_text'    => 'Honest conviction is my courage; the Constitution is my guide.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 73,
            'quote_text'    => 'I hold it the duty of the executive to insist upon frugality in the expenditure, and a sparing economy is itself a great national source.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 73,
            'quote_text'    => 'Legislation can neither be wise nor just which seeks the welfare of a single interest at the expense and to the injury of many and varied interests.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 73,
            'quote_text'    => 'The goal to strive for is a poor government but a rich people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'I appreciate the fact, and am proud of it, that the attentions I am receiving are intended more for our country than for me personally.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'Although a soldier by profession, I have never felt any sort of fondness for war, and I have never advocated it, except as a means of peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'Labor disgraces no man; unfortunately, you occasionally find men who disgrace labor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'I have made it a rule of my life to trust a man long after other people gave him up, but I don\'t see how I can ever trust any human being again.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'I propose to fight it out on this line if it takes all summer.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'The friend in my adversity I shall always cherish most. I can better trust those who helped to relieve the gloom of my dark hours than those who are so ready to enjoy with me the sunshine of my prosperity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'Let us have peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'There never was a time when, in my opinion, some way could not be found to prevent the drawing of the sword.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'Nations, like individuals, are punished for their transgressions.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'My failures have been errors in judgment, not of intent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'I know only two tunes: one of them is \'Yankee Doodle\', and the other isn\'t.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'The art of war is simple enough. Find out where your enemy is. Get at him as soon as you can. Strike him as hard as you can, and keep moving on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'In every battle there comes a time when both sides consider themselves beaten, then he who continues the attack wins.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'If men make war in slavish obedience to rules, they will fail.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'Everyone has his superstitions. One of mine has always been when I started to go anywhere, accomplished.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'No other terms than unconditional and immediate surrender. I propose to move immediately upon your works.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 74,
            'quote_text'    => 'I know no method to secure the repeal of bad or obnoxious laws so effective as their stringent execution.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Universal suffrage is sound in principle. The radical element is right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'As friends go it is less important to live.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'To vote is like the payment of a debt, a duty never to be neglected, if its performance is possible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'I am a radical in thought (and principle) and a conservative in method (and conduct).',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'The bold enterprises are the successful ones. Take counsel of hopes rather than of fears to win in this business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'The unrestricted competition so commonly advocated does not leave us the survival of the fittest. The unscrupulous succeed best in accumulating wealth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'The progress of society is mainly the improvement in the condition of the workingmen of the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'One of the tests of the civilization of people is the treatment of its criminals.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Conscience is the authentic voice of God to you.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Unjust attacks on public men do them more good than unmerited praise.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Virtue is defined to be mediocrity, of which either extreme is vice.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Law without education is a dead letter. With education the needed law follows without effort and, of course, with power to execute itself; indeed, it seems to execute itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Do not let your bachelor ways crystallize so that you can\'t soften them when you come to have a wife and a family of your own.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'The filth and noise of the crowded streets soon destroy the elasticity of health which belongs to the country boy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'The truth is, this being errand boy to one hundred and fifty thousand people tires me so by night I am ready for bed instead of soirees.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'It is the desire of the good people of the whole country that sectionalism as a factor in our politics should disappear.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'Must swear off from swearing. Bad habit.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'In avoiding the appearance of evil, I am not sure but I have sometimes unnecessarily deprived myself and others of innocent enjoyments.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 75,
            'quote_text'    => 'The independence of all political and other bother is a happiness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'The ideal college is Mark Hopkins on one end of a log and a student on the other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Ideas are the great warriors of the world, and a war that has no idea behind it, is simply a brutality.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Whoever controls the volume of money in any country is absolute master of all industry and commerce.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Nobody but radicals have ever accomplished anything in a great crisis.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Justice and goodwill will outlast passion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'A pound of pluck is worth a ton of luck.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'A law is not a law without coercion behind it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'The civil service can never be placed on a satisfactory basis until it is regulated by law.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Right reason is stronger than force.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Ideas control the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Next in importance to freedom and justice is popular education, without which neither freedom nor justice can be permanently maintained.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Poverty is uncomfortable; but nine times out of ten the best thing that can happen to a young man is to be tossed overboard and compelled to sink or swim.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'I have had many troubles in my life, but the worst of them never came.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'If the power to do hard work is not a skill, it\'s the best possible substitute for it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'I love to deal with doctrines and events. The contests of men about men I greatly dislike.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'I mean to make myself a man, and if I succeed in that, I shall succeed in everything else.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Man cannot live by bread alone; he must have peanut butter.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'The sin of slavery is one of which it may be said that without the shedding of blood there is no remission.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'There can be no permanent disfranchised peasantry in the United States.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'A brave man is a man who dares to look the Devil in the face and tell him he is a Devil.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Things don\'t turn up in this world until somebody turns them up.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'The President is the last person in the world to know what the people really want and think.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Suicide is not a remedy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'If you are not too large for the place you occupy, you are too small for it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'I am a poor hater.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'He who controls the money supply of a nation controls the nation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Few men in our history have ever obtained the Presidency by planning to obtain it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'If wrinkles must be written on our brows, let them not be written upon the heart. The spirit should never grow old.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'I am trying to do two things: dare to be a radical and not a fool, which is a matter of no small difficulty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'The truth will set you free, but first it will make you miserable.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 76,
            'quote_text'    => 'Territory is but the body of a nation. The people who inhabit its hills and valleys are its soul, its spirit, its life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 77,
            'quote_text'    => 'The extravagant expenditure of public money is an evil not to be measured by the value of that money to the people who are taxed for it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 77,
            'quote_text'    => 'The countries of the American continent and the adjacent islands are for the United States the natural marts of supply and demand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 77,
            'quote_text'    => 'As is natural with contiguous states having like institutions and like aims of advancement and development, the friendship of the United States and Mexico has been constantly maintained.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 77,
            'quote_text'    => 'I may be president of the United States, but my private life is nobody\'s damned business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 77,
            'quote_text'    => 'Men may die, but the fabrics of free institutions remains unshaken.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'Honor lies in honest toil.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'I have considered the pension list of the republic a roll of honor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'Party honesty is party expediency.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'Minds do not act together in public; they simply stick together; and when their private activities are resumed, they fly apart again.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'Communism is a hateful thing, and a menace to peace and organized government.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'Some day I will be better remembered.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'A government for the people must depend for its success on the intelligence, the morality, the justice, and the interest of the people themselves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'It is better to be defeated standing for a high principle than to run by committing subterfuge.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'I have tried so hard to do right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'No man has ever yet been hanged for breaking the spirit of a law.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'A truly American sentiment recognizes the dignity of labor and the fact that honor lies in honest toil.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'After an existence of nearly 20 years of almost innocuous desuetude, these laws are brought forth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'He mocks the people who proposes that the government shall protect the rich and that they in turn will care for the laboring poor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'I know there is a Supreme Being who rules the affairs of men and whose goodness and mercy have always followed the American people, and I know He will not turn from us now if we humbly and reverently seek His powerful aid.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'I would rather the man who presents something for my consideration subject me to a zephyr of truth and a gentle breeze of responsibility rather than blow me down with a curtain of hot wind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'The ship of democracy, which has weathered all storms, may sink through the mutiny of those on board.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 78,
            'quote_text'    => 'Officeholders are the agents of the people, not their masters.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 79,
            'quote_text'    => 'Great lives never go out; they go on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 79,
            'quote_text'    => 'I pity the man who wants a coat so cheap that the man or woman who produces the cloth will starve in the process.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 79,
            'quote_text'    => 'The bud of victory is always in the truth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 79,
            'quote_text'    => 'No other people have a government more worthy of their respect and love or a land so magnificent in extent, so pleasant to look upon, and so full of generous suggestion to enterprise and labor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'The free man cannot be long an ignorant man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'I am a tariff man, standing on a tariff platform.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'War should never be entered upon until every agency of peace has failed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'That\'s all a man can hope for during his lifetime - to set an example - and when he is dead, to be an inspiration for history.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'In the time of darkest defeat, victory may be nearest.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'Let us ever remember that our interest is in concord, not in conflict; and that our real eminence rests in the victories of peace, not those of war.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'Expositions are the timekeepers of progress.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 80,
            'quote_text'    => 'I have never been in doubt since I was old enough to think intelligently that I would someday be made president.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Rhetoric is a poor substitute for action, and we have trusted only to rhetoric. If we are really to be a great nation, we must not merely talk; we must act big.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Some men can live up to their loftiest ideals without ever going higher than a basement.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Get action. Seize the moment. Man was never intended to become an oyster.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'If there is not the war, you don\'t get the great general; if there is not a great occasion, you don\'t get a great statesman; if Lincoln had lived in a time of peace, no one would have known his name.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The most important single ingredient in the formula of success is knowing how to get along with people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The first requisite of a good citizen in this republic of ours is that he shall be able and willing to pull his own weight.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Big jobs usually go to the men who prove their ability to outgrow small ones.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'For unflagging interest and enjoyment, a household of children, if things go reasonably well, certainly all other forms of success and achievement lose their importance by comparison.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'In any moment of decision, the best thing you can do is the right thing, the next best thing is the wrong thing, and the worst thing you can do is nothing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Character, in the long run, is the decisive factor in the life of an individual and of nations alike.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'People ask the difference between a leader and a boss. The leader leads, and the boss drives.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Nobody cares how much you know, until they know how much you care.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The only man who never makes a mistake is the man who never does anything.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The boy who is going to make a great man must not make up his mind merely to overcome a thousand obstacles, but to win in spite of a thousand repulses and defeats.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The most practical kind of politics is the politics of decency.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Appraisals are where you get together with your team leader and agree what an outstanding member of the team you are, how much your contribution has been valued, what massive potential you have and, in recognition of all this, would you mind having your salary halved.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The government is us; we are the government, you and I.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The pacifist is as surely a traitor to his country and to humanity as is the most brutal wrongdoer.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'It is hard to fail, but it is worse never to have tried to succeed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Old age is like everything else. To make a success of it, you\'ve got to start young.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'No man is justified in doing evil on the ground of expedience.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Courtesy is as much a mark of a gentleman as courage.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'No man is above the law and no man is below it: nor do we ask any man\'s permission when we ask him to obey it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'I care not what others think of what I do, but I care very much about what I think of what I do! That is character!',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'If you could kick the person in the pants responsible for most of your trouble, you wouldn\'t sit for a month.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Freedom from effort in the present merely means that there has been effort stored up in the past.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Do what you can, with what you have, where you are.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'When you are asked if you can do a job, tell \'em, \'Certainly I can!\' Then get busy and find out how to do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Great thoughts speak only to the thoughtful mind, but great actions speak to all mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Absence and death are the same - only that in death there is no suffering.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'I don\'t pity any man who does hard work worth doing. I admire him. I pity the creature who does not work, at whichever end of the social scale he may regard himself as being.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'No man is worth his salt who is not ready at all times to risk his well-being, to risk his body, to risk his life, in a great cause.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'It behooves every man to remember that the work of the critic is of altogether secondary importance, and that, in the end, progress is accomplished by the man who does things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The one thing I want to leave my children is an honorable name.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Leave it as it is. The ages have been at work on it and man can only mar it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'I am a part of everything that I have read.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The man who loves other countries as much as his own stands on a level with the man who loves other women as much as he loves his own wife.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'I think there is only one quality worse than hardness of heart and that is softness of head.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'When you play, play hard; when you work, don\'t play at all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Keep your eyes on the stars, and your feet on the ground.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'It is essential that there should be organization of labor. This is an era of organization. Capital organizes and therefore labor must organize.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Far better is it to dare mighty things, to win glorious triumphs, even though checkered by failure... than to rank with those poor spirits who neither enjoy nor suffer much, because they live in a gray twilight that knows not victory nor defeat.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'To educate a man in mind and not in morals is to educate a menace to society.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The reactionary is always willing to take a progressive attitude on any issue that is dead.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Believe you can and you\'re halfway there.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'No great intellectual thing was ever done by great effort.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'I wish to preach, not the doctrine of ignoble ease, but the doctrine of the strenuous life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The human body has two ends on it: one to create with and one to sit on. Sometimes people get their ends reversed. When this happens they need a kick in the seat of the pants.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'No people is wholly civilized where a distinction is drawn between stealing an office and stealing a purse.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'There has never yet been a man in our history who led a life of ease whose name is worth remembering.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Don\'t hit at all if it is honorably possible to avoid hitting; but never hit soft.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Speak softly and carry a big stick; you will go far.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Wars are, of course, as a rule to be avoided; but they are far better than certain kinds of peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Obedience of the law is demanded; not asked as a favor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'With self-discipline most anything is possible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Probably the greatest harm done by vast wealth is the harm that we of moderate means do ourselves when we let the vices of envy and hatred enter deep into our own natures.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The best executive is one who has sense enough to pick good people to do what he wants done, and self-restraint enough to keep from meddling with them while they do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'A thorough knowledge of the Bible is worth more than a college education.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'I am only an average man but, by George, I work harder at it than the average man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'The unforgivable crime is soft hitting. Do not hit at all if it can be avoided; but never hit softly.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Every reform movement has a lunatic fringe.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'It is only through labor and painful effort, by grim energy and resolute courage, that we move on to better things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Far and away the best prize that life has to offer is the chance to work hard at work worth doing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Order without liberty and liberty without order are equally destructive.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Nine-tenths of wisdom is being wise in time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 81,
            'quote_text'    => 'Never throughout history has a man who lived a life of ease left a name worth remembering.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Socialism proposes no adequate substitute for the motive of enlightened selfishness that today is at the basis of all human labor and effort, enterprise and new activity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Failure to accord credit to anyone for what he may have done is a great weakness in any man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'I am afraid I am a constant disappointment to my party. The fact of the matter is, the longer I am president the less of a party man I seem to become.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'The world is not going to be saved by legislation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'No tendency is quite so strong in human nature as the desire to lay down rules of conduct for other people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'I am in favor of helping the prosperity of all countries because, when we are all prosperous, the trade with each becomes more valuable to the other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Action for which I become responsible, or for which my administration becomes responsible, shall be within the law.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'We live in a stage of politics, where legislators seem to regard the passage of laws as much more important than the results of their enforcement.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Enthusiasm for a cause sometimes warps judgment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Substantial progress toward better things can rarely be taken without developing new evils requiring new remedies.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'The trouble with me is that I like to talk too much.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Don\'t worry over what the newspapers say. I don\'t. Why should anyone else? I told the truth to the newspaper correspondents - but when you tell the truth to them they are at sea.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Politics makes me sick.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'Don\'t write so that you can be understood, write so that you can\'t be misunderstood.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 82,
            'quote_text'    => 'No, the only things which do not bother me are the elements. I can overcome them without a fight. All one has to do to get the best of the elements is to stand pat and one will win.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Generally young men are regarded as radicals. This is a popular misconception. The most conservative persons I ever met are college undergraduates. The radicals are the men past middle life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'A conservative is a man who just sits and thinks, mostly sits.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Neutrality is a negative word. It does not express what America ought to feel. We are not trying to keep out of trouble; we are trying to preserve the foundations on which peace may be rebuilt.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'As compared with the college politician, the real article seems like an amateur.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Golf is a game in which one endeavors to control a ball with implements ill adapted for the purpose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'So far as the colleges go, the sideshows are swallowing up the circus.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'America is not anything if it consists of each of us. It is something only if it consists of all of us.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The history of liberty is a history of resistance.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The man who is swimming against the stream knows the strength of it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'You are not here merely to make a living. You are here in order to enable the world to live more amply, with greater vision, with a finer spirit of hope and achievement. You are here to enrich the world, and you impoverish yourself if you forget the errand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'I would rather lose in a cause that will some day win, than win in a cause that will some day lose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The seed of revolution is repression.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Property as compared with humanity, as compared with the red blood in the American people, must take second place, not first place.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'I not only use all the brains that I have, but all that I can borrow.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The only use of an obstacle is to be overcome. All that an obstacle does with brave men is, not to frighten them, but to challenge them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'One cool judgment is worth a thousand hasty counsels. The thing to do is to supply light and not heat.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Caution is the confidential agent of selfishness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Tell me what is right and I will fight for it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'There is no higher religion than human service. To work for the common good is the greatest creed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'We have not given science too big a place in our education, but we have made a perilous mistake in giving it too great a preponderance in method in every other branch of study.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'A conservative is someone who makes no changes and consults his grandmother when in doubt.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Interest does not tie nations together; it sometimes separates them. But sympathy and understanding does unite them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'It is like writing history with lightning and my only regret is that it is all so terribly true.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'I have come slowly into possession of such powers as I have. I receive the opinions of my day. I do not conceive them. But I receive them into a vivid mind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'My own ideals for the university are those of a genuine democracy and serious scholarship. These two, indeed, seem to go together.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'You cannot, in human experience, rush into the light. You have to go through the twilight into the broadening day before the noon comes and the full sun is upon the landscape.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The ear of the leader must ring with the voices of the people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'My dream of politics all my life has been that it is the common business, that it is something we owe to each other to understand and discuss with absolute frankness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The method of political science is the interpretation of life; its instrument is insight, a nice understanding of subtle, unformulated conditions.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Never attempt to murder a man who is committing suicide.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'If you want to make enemies, try to change something.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'By \'radical,\' I understand one who goes too far; by \'conservative\', one who does not go far enough; by \'reactionary\', one who won\'t go at all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The question of armaments, whether on land or sea, is the most immediately and intensely practical question connected with the future fortunes of nations and of mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'When I give a man an office, I watch him carefully to see whether he is swelling or growing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'What we seek is the reign of law, based upon the consent of the governed and sustained by the organized opinion of mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'There is little for the great part of the history of the world except the bitter tears of pity and the hot tears of wrath.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Prosperity is necessarily the first theme of a political campaign.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'Absolute identity with one\'s cause is the first and great condition of successful leadership.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'There can be no equality or opportunity if men and women and children be not shielded in their lives from the consequences of great industrial and social processes which they cannot alter, control, or singly cope with.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'I am not sure that it is of the first importance that you should be happy. Many an unhappy man has been of deep service to himself and to the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The American Revolution was a beginning, not a consummation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'If a dog will not come to you after having looked you in the face, you should go home and examine your conscience.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'The world is not looking for servants, there are plenty of these, but for masters, men who form their purposes and then carry them out, let the consequences be what they may.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'He is not a true man of the world who knows only the present fashions of it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'At every crisis in one\'s life, it is absolute salvation to have some sympathetic friend to whom you can think aloud without restraint or misgiving.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 83,
            'quote_text'    => 'I would rather belong to a poor nation that was free than to a rich nation that had ceased to be in love with liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 84,
            'quote_text'    => 'I have no trouble with my enemies. I can take care of my enemies in a fight. But my friends, my goddamned friends, they\'re the ones who keep me walking the floor at nights!',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'If I had permitted my failures, or what seemed to me at the time a lack of success, to discourage me I cannot see any way in which I would ever have made progress.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'I have noticed that nothing I never said ever did me any harm.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Heroism is not only in the man, but in the occasion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'After all, the chief business of the American people is business. They are profoundly concerned with producing, buying, selling, investing and prospering in the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'No enterprise can exist for itself alone. It ministers to some great need, it performs some great service, not for itself, but for others; or failing therein, it ceases to be profitable and ceases to exist.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'It takes a great man to be a good listener.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Patriotism is easy to understand in America. It means looking out for yourself by looking out for your country.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'There is no dignity quite so impressive, and no one independence quite so important, as living within your means.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'The man who builds a factory builds a temple, that the man who works there worships there, and to each is due, not scorn and blame, but reverence and praise.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'You can\'t know too much, but you can say too much.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'You know, I have found out in the course of a long public life that the things I did not say never hurt me.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Economy is the method by which we prepare today to afford the improvements of tomorrow.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'The business of America is business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Men speak of natural rights, but I challenge any one to show where in nature any rights existed or were recognized until there was established for their declaration and protection a duly promulgated body of corresponding laws.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'When people are bewildered they tend to become credulous.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'To live under the American Constitution is the greatest political privilege that was ever accorded to the human race.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Those who trust to chance must abide by the results of chance.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Civilization and profit go hand in hand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'I have found it advisable not to give too much heed to what people say when I am trying to accomplish something of consequence. Invariably they proclaim it can\'t be done. I deem that the very best time to make the effort.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Knowledge comes, but wisdom lingers. It may not be difficult to store up in the mind a vast quantity of facts within a comparatively short time, but the ability to form judgments requires the severe discipline of hard work and the tempering heat of experience and maturity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'The right thing to do never requires any subterfuge, it is always simple and direct.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'When a great many people are unable to find work, unemployment results.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Don\'t expect to build up the weak by pulling down the strong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Mass demand has been created almost entirely through the development of advertising.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Advertising ministers to the spiritual side of trade. It is great power that has been entrusted to your keeping which charges you with the high responsibility of inspiring and ennobling the commercial world. It is all part of the greater work of the regeneration and redemption of mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'No person was ever honored for what he received. Honor has been the reward for what he gave.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'The slogan \'press on\' has solved and always will solve the problems of the human race.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'No man ever listened himself out of a job.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Duty is not collective; it is personal.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Collecting more taxes than is absolutely necessary is legalized robbery.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Advertising is the life of trade.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'If you don\'t say anything, you won\'t be called on to repeat it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'All growth depends upon activity. There is no development physically or intellectually without effort, and effort means work.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'One with the law is a majority.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'We cannot do everything at once, but we can do something at once.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Nothing in this world can take the place of persistence. Talent will not: nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'There is no force so democratic as the force of an ideal.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Prosperity is only an instrument to be used, not a deity to be worshipped.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 85,
            'quote_text'    => 'Industry, thrift and self-control are not sought because they create wealth, but because they create character.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Children are our most valuable natural resource.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Freedom is the open window through which pours the sunlight of the human spirit and human dignity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'With impressive proof on all sides of magnificent progress, no one can rightly deny the fundamental correctness of our economic system.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'It is just as important that business keep out of government as that government keep out of business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Peace can be promoted by the limitation of arms and by the creation of the instrumentality for peaceful settlement of controversies. But it will become a reality only through self-restraint and active effort in friendliness and helpfulness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Wisdom consists not so much in knowing what to do in the ultimate as knowing what to do next.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'We have not yet reached the goal but... we shall soon, with the help of God, be in sight of the day when poverty shall be banished from this nation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Blessed are the young for they shall inherit the national debt.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'This is not a showman\'s job. I will not step out of character.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'No greater nor more affectionate honor can be conferred on an American than to have a public school named after him.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The worst evil of disregard for some law is that it destroys respect for all law.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Engineering training deals with the exact sciences. That sort of exactness makes for truth and conscience. It might be good for the world if more men had that sort of mental start in life even if they did not pursue the profession.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'America means far more than a continent bounded by two oceans. It is more than pride of military power, glory in war, or in victory. It means more than vast expanse of farms, of great factories or mines, magnificent cities, or millions of automobiles and radios.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'A whole people with the ballot in their hands possess the most conclusive and unlimited power ever entrusted to humanity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'It is a paradox that every dictator has climbed to power on the ladder of free speech. Immediately on attaining power each dictator has suppressed all free speech except his own.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'One civilization after another has been wrecked upon the attempt to secure sufficient leadership from a single group or class.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Economic freedom cannot be sacrificed if political freedom is to be preserved.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Wisdom oft times consists of knowing what to do next.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Self-government can succeed only through an instructed electorate.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Competition is not only the basis of protection to the consumer, but is the incentive to progress.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'No public man can be just a little crooked.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The slogan of progress is changing from the full dinner pail to the full garage.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Next to religion, baseball has had a greater impact on our American way of life than any other American institution.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The glory of the nation rests in the character of her men. And character comes from boyhood. Thus, every boy is a challenge to his elders.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Economic depression cannot be cured by legislative action or executive pronouncement. Economic wounds must be healed by the action of the cells of the economic body - the producers and consumers themselves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'When we are sick, we want an uncommon doctor; when we have a construction job to do, we want an uncommon engineer, and when we are at war, we want an uncommon general. It is only when we get into politics that we are satisfied with the common man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Freedom does not die from frontal attack. It dies because men in power no longer believe in a system based upon liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'We must have government that builds stamina into communities and men. That makes men instead of mendicants.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Freedom conceives that the mind and spirit of man can be free only if he be free to pattern his own life, to develop his own talents, free to earn, to spend, to save, to acquire property as the security of his old age and his family.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Honor is not the exclusive property of any political party.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'New discoveries in science will continue to create a thousand new frontiers for those who still would adventure.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The great liability of the engineer compared to men of other professions is that his works are out in the open where all can see them. His acts, step by step, are in hard substance. He cannot bury his mistakes in the grave like the doctors. He cannot argue them into thin air or blame the judge like the lawyers.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'When all the routines and details and the human bores get on our nerves, we just yearn to go away from here to somewhere else. To go fishing is a sound, a valid, and an accepted reason for an escape. It requires no explanation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Many years ago, I concluded that a few hair shirts were part of the mental wardrobe of every man. The president differs from other men in that he has a more extensive wardrobe.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'My earliest realization of the stir of national life was the torch parade in the Garfield campaign. On that occasion, I was not only allowed out that night, but I saw the lamps being filled and lighted.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The United States fully accepts the profound truth that our own progress, prosperity, and peace are interlocked with the progress, prosperity, and peace of all humanity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The spirit of liberalism is to create free men; it is not the regimentation of men.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Democracy is not static. It is a living force. Every new idea, every new invention offers opportunity for both good and evil.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'It is the youth who must inherit the tribulation, the sorrow... that are the aftermath of war.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'I am no supporter of factory labor for children, but I have never joined with those who clamored against proper work of children on farms outside their school hours.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'About the time we can make the ends meet, somebody moves the ends.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Once upon a time my political opponents honored me as possessing the fabulous intellectual and economic power by which I created a worldwide depression all by myself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Fishing is much more than fish. It is the great occasion when we may return to the fine simplicity of our forefathers.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'A good many things go around in the dark besides Santa Claus.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'I\'m the only person of distinction who has ever had a depression named for him.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Words without actions are the assassins of idealism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Older men declare war. But it is the youth that must fight and die.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Within the soul of America is freedom of mind and spirit in man. Here alone are the open windows through which pours the sunlight of the human spirit. Here alone is human dignity not a dream but an accomplishment. Perhaps it is not perfect, but it is more full in realization here than any other place in the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'America - a great social and economic experiment, noble in motive and far-reaching in purpose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'When there is a lack of honor in government, the morals of the whole people are poisoned.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'There is no employing class, no working class, no farming class. You may pigeonhole a man or woman as a farmer or a worker or a professional man or an employer or even a banker. But the son of the farmer will be a doctor or a worker or even a banker, and his daughter a teacher. The son of a worker will be an employer - or maybe president.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'All men are equal before fish.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Peace can be contributed to by respect for our ability in defense.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The pause between the errors and trials of the day and the hopes of the night.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'If the law is upheld only by government officials, then all law is at an end.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Those who have a true understanding of America know that we have no desire for territorial expansion, for economic or other domination of other peoples. Such purposes are repugnant to our ideals of human freedom.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Peace is not made at the council table or by treaties, but in the hearts of men.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The engineer performs many public functions from which he gets only philosophical satisfactions. Most people do not know it, but he is an economic and social force.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Prosperity cannot be restored by raids upon the public Treasury.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'Let me remind you that credit is the lifeblood of business, the lifeblood of prices and jobs.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'The human animal originally came from out-of-doors. When spring begins to move in his bones, he just must get out again. Moreover, as civilization, cement pavements, office buildings, radios have overwhelmed us, the need for regeneration has increased, and the impulses are even stronger.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 86,
            'quote_text'    => 'In America today, we are nearer a final triumph over poverty than is any other land.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Favor comes because for a brief moment in the great space of human change and progress some general human purpose finds in him a satisfactory embodiment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Are you laboring under the impression that I read these memoranda of yours? I can\'t even lift them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'There are as many opinions as there are experts.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Physical strength can never permanently withstand the impact of spiritual force.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The only thing we have to fear is fear itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'If you treat people right they will treat you right... ninety percent of the time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'In our personal ambitions we are individualists. But in our seeking for economic and political progress as a nation, we all go up or else all go down as one people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'We have always held to the hope, the belief, the conviction that there is a better life, a better world, beyond the horizon.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The nation that destroys its soil destroys itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'There is nothing I love as much as a good fight.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The test of our progress is not whether we add more to the abundance of those who have much it is whether we provide enough for those who have little.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'There is a mysterious cycle in human events. To some generations much is given. Of other generations much is expected. This generation of Americans has a rendezvous with destiny.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Self-interest is the enemy of all true affection.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'There are many ways of going forward, but only one way of standing still.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Be sincere; be brief; be seated.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I think we consider too much the good luck of the early bird and not enough the bad luck of the early worm.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The only limit to our realization of tomorrow will be our doubts of today.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Human kindness has never weakened the stamina or softened the fiber of a free people. A nation does not have to be cruel to be tough.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I ask you to judge me by the enemies I have made.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Here is my principle: Taxes shall be levied according to ability to pay. That is the only American principle.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Democracy cannot succeed unless those who express their choice are prepared to choose wisely. The real safeguard of democracy, therefore, is education.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'A conservative is a man with two perfectly good legs who, however, has never learned how to walk forward.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'We are trying to construct a more inclusive society. We are going to make a country in which no one is left out.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The overwhelming majority of Americans are possessed of two great qualities a sense of humor and a sense of proportion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'It is fun to be in the same decade with you.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I am neither bitter nor cynical but I do wish there was less immaturity in political thinking.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Take a method and try it. If it fails, admit it frankly, and try another. But by all means, try something.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'It is an unfortunate human failing that a full pocketbook often groans more loudly than an empty stomach.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Art is not a treasure in the past or an importation from another land, but part of the present life of all living and creating peoples.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'We continue to recognize the greater ability of some to earn more than others. But we do assert that the ambition of the individual to obtain for him a proper security is an ambition to be preferred to the appetite for great wealth and great power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'It is common sense to take a method and try it. If it fails, admit it frankly and try another. But above all, try something.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The school is the last expenditure upon which America should be willing to economize.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'To reach a port, we must sail - sail, not tie at anchor - sail, not drift.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Whoever seeks to set one religion against another seeks to destroy all religion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'No group and no government can properly prescribe precisely what should constitute the body of knowledge with which true education is concerned.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'If civilization is to survive, we must cultivate the science of human relationships - the ability of all peoples, of all kinds, to live together, in the same world at peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'It takes a long time to bring the past up to the present.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The truth is found when men are free to pursue it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'True individual freedom cannot exist without economic security and independence. People who are hungry and out of a job are the stuff of which dictatorships are made.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Happiness lies in the joy of achievement and the thrill of creative effort.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'It isn\'t sufficient just to want - you\'ve got to ask yourself what you are going to do to get the things you want.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The point in history at which we stand is full of promise and danger. The world will either move forward toward unity and widely shared prosperity - or it will move apart.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The only sure bulwark of continuing liberty is a government strong enough to protect the interests of the people, and a people strong enough and well enough informed to maintain its sovereign control over the goverment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Those newspapers of the nation which most loudly cried dictatorship against me would have been the first to justify the beginnings of dictatorship by somebody else.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'It is the duty of the President to propose and it is the privilege of the Congress to dispose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Nobody will ever deprive the American people of the right to vote except the American people themselves and the only way they could do this is by not voting.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Our national determination to keep free of foreign wars and foreign entanglements cannot prevent us from feeling deep concern when ideals and principles that we have cherished are challenged.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Rules are not necessarily sacred, principles are.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The virtues are lost in self-interest as rivers are lost in the sea.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Men are not prisoners of fate, but only prisoners of their own minds.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'If I went to work in a factory the first thing I\'d do is join a union.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'This generation of Americans has a rendezvous with destiny.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I am a Christian and a Democrat, that\'s all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Don\'t forget what I discovered that over ninety percent of all national deficits from 1921 to 1939 were caused by payments for past, present, and future wars.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Put two or three men in positions of conflicting authority. This will force them to work at loggerheads, allowing you to be the ultimate arbiter.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'The United States Constitution has proved itself the most marvelously elastic compilation of rules of government ever written.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'In our seeking for economic and political progress, we all go up - or else we all go down.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Competition has been shown to be useful up to a certain point and no further, but cooperation, which is the thing we must strive for today, begins where competition leaves off.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Not only our future economic soundness but the very soundness of our democratic institutions depends on the determination of our government to give employment to idle men.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'When you reach the end of your rope, tie a knot in it and hang on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'But while they prate of economic laws, men and women are starving. We must lay hold of the fact that economic laws are not made by nature. They are made by human beings.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'A reactionary is a somnambulist walking backwards.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'We must lay hold of the fact that economic laws are not made by nature. They are made by human beings.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'A nation that destroys its soils destroys itself. Forests are the lungs of our land, purifying the air and giving fresh strength to our people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I believe that in every country the people themselves are more peaceably and liberally inclined than their governments.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'When you see a rattlesnake poised to strike, you do not wait until he has struck to crush him.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I do not look upon these United States as a finished product. We are still in the making.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Remember you are just an extra in everyone else\'s play.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'One thing is sure. We have to do something. We have to do the best we know how at the moment... If it doesn\'t turn out right, we can modify it as we go along.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'War is a contagion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'I\'m not the smartest fellow in the world, but I can sure pick smart colleagues.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 87,
            'quote_text'    => 'Confidence... thrives on honesty, on honor, on the sacredness of obligations, on faithful protection and on unselfish performance. Without them it cannot live.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The best way to give advice to your children is to find out what they want and then advise them to do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'You want a friend in Washington? Get a dog.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'When even one American - who has done nothing wrong - is forced by fear to shut his mind and close his mouth - then all Americans are in peril.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'It\'s a recession when your neighbor loses his job; it\'s a depression when you lose yours.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Men make history and not the other way around. In periods where there is no leadership, society stands still. Progress occurs when courageous, skillful leaders seize the opportunity to change things for the better.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'This administration is going to be cussed and discussed for years to come.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'A president either is constantly on top of events or, if he hesitates, events will soon be on top of him. I never felt that I could let up for a moment.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'It is amazing what you can accomplish if you do not care who gets the credit.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'It sure is hell to be president.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I\'ve said many a time that I think the Un-American Activities Committee in the House of Representatives was the most un-American thing in America!',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The President is always abused. If he isn\'t, he isn\'t doing anything.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'A pessimist is one who makes difficulties of his opportunities and an optimist is one who makes opportunities of his difficulties.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I never did give anybody hell. I just told the truth and they thought it was hell.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'All my life, whenever it comes time to make a decision, I make it and forget about it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'You know that being an American is more than a matter of where your parents came from. It is a belief that all men are created free and equal and that everyone deserves an even break.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'You can never get all the facts from just one newspaper, and unless you have all the facts, you cannot make proper judgements about what is going on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I would rather have peace in the world than be President.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Experience has shown how deeply the seeds of war are planted by economic rivalry and social injustice.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Well, I wouldn\'t say that I was in the great class, but I had a great time while I was trying to be great.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'There is nothing new in the world except the history you do not know.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I never gave anybody hell! I just told the truth and they thought it was hell.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'A politician is a man who understands government. A statesman is a politician who\'s been dead for 15 years.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Any man who has had the job I\'ve had and didn\'t have a sense of humor wouldn\'t still be here.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Washington is a very easy city for you to forget where you came from and why you got there in the first place.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I have no desire to crow over anybody or to see anybody eating crow, figuratively or otherwise. We should all get together and make a country in which everybody can eat turkey whenever he pleases.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The human animal cannot be trusted for anything good except en masse. The combined thought and action of the whole people of any race, creed or nationality, will always point in the right direction.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Study men, not historians.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Upon books the collective education of the race depends; they are the sole instruments of registering, perpetuating and transmitting thought.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Being too good is apt to be uninteresting.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'It\'s plain hokum. If you can\'t convince \'em, confuse \'em. It\'s an old political trick. But this time it won\'t work.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Nixon is one of the few in the history of this country to run for high office talking out of both sides of his mouth at the same time and lying out of both sides.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Art is parasitic on life, just as criticism is parasitic on art.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The reward of suffering is experience.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'It is understanding that gives us an ability to have peace. When we understand the other fellow\'s viewpoint, and he understands ours, then we can sit down and work out our differences.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'You can always amend a big plan, but you can never expand a little one. I don\'t believe in little plans. I believe in plans big enough to meet a situation which we can\'t possibly foresee now.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Always be sincere, even if you don\'t mean it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The atom bomb was no \'great decision.\' It was merely another powerful weapon in the arsenal of righteousness.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'My father was not a failure. After all, he was the father of a president of the United States.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Richard Nixon is a no good, lying bastard. He can lie out of both sides of his mouth at the same time, and if he ever caught himself telling the truth, he\'d lie just to keep his hand in.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'All the president is, is a glorified public relations man who spends his time flattering, kissing, and kicking people to get them to do what they are supposed to do anyway.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I have found the best way to give advice to your children is to find out what they want and then advise them to do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'If you can\'t convince them, confuse them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'If I hadn\'t been President of the United States, I probably would have ended up a piano player in a bawdy house.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'When you have an efficient government, you have a dictatorship.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'America was not built on fear. America was built on courage, on imagination and an unbeatable determination to do the job at hand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'You and I are stuck with the necessity of taking the worst of two evils or none at all. So-I\'m taking the immature Democrat as the best of the two. Nixon is impossible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'A President needs political understanding to run the government, but he may be elected without it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'If you can\'t stand the heat, get out of the kitchen.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Carry the battle to them. Don\'t let them bring it to you. Put them on the defensive and don\'t ever apologize for anything.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'We shall never be able to remove suspicion and fear as potential causes of war until communication is permitted to flow, free and open, across international boundaries.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The buck stops here!',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Actions are the seed of fate deeds grow into destiny.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Whenever you put a man on the Supreme Court he ceases to be your friend.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'I do not believe there is a problem in this country or the world today which could not be settled if approached through the teaching of the Sermon on the Mount.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'Intense feeling too often obscures the truth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'The only things worth learning are the things you learn after you know it all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 88,
            'quote_text'    => 'In reading the lives of great men, I found that the first victory they won was over themselves... self-discipline with all of them came first.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Don\'t join the book burners. Do not think you are going to conceal thoughts by concealing evidence that they ever existed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Only strength can cooperate. Weakness can only beg.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Things have never been more like the way they are today in history.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Peace and justice are two sides of the same coin.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'An intellectual is a man who takes more words than necessary to tell more than he knows.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'I despise people who go to the gutter on either the right or the left and hurl rocks at those in the center.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'The supreme quality for leadership is unquestionably integrity. Without it, no real success is possible, no matter whether it is on a section gang, a football field, in an army, or in an office.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'In preparing for battle I have always found that plans are useless, but planning is indispensable.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'What counts is not necessarily the size of the dog in the fight - it\'s the size of the fight in the dog.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Some people wanted champagne and caviar when they should have had beer and hot dogs.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'A people that values its privileges above its principles soon loses both.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Pessimism never won any battle.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'The spirit of man is more important than mere physical strength, and the spiritual fiber of a nation than its wealth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'When you put on a uniform, there are certain inhibitions that you accept.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'There is no glory in battle worth the blood it costs.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Together we must learn how to compose differences, not with arms, but with intellect and decent purpose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Plans are nothing; planning is everything.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Worry\' is a word that I don\'t allow myself to use.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'If you want total security, go to prison. There you\'re fed, clothed, given medical care and so on. The only thing lacking... is freedom.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'You don\'t lead by hitting people over the head - that\'s assault, not leadership.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'If a problem cannot be solved, enlarge it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'The older I get the more wisdom I find in the ancient rule of taking first things first. A process which often reduces the most complex human problem to a manageable proportion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Farming looks mighty easy when your plow is a pencil and you\'re a thousand miles from the corn field.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'The world moves, and ideas that were once good are not always good.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Motivation is the art of getting people to do what you want them to do because they want to do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Any man who wants to be president is either an egomaniac or crazy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'Only our individual faith in freedom can keep us free.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'There is nothing wrong with America that faith, love of freedom, intelligence, and energy of her citizens cannot cure.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 89,
            'quote_text'    => 'We will bankrupt ourselves in the vain search for absolute security.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The cost of freedom is always high, but Americans have always paid it. And one path we shall never choose, and that is the path of surrender, or submission.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'We are tied to the ocean. And when we go back to the sea, whether it is to sail or to watch - we are going back from whence we came.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Let us never negotiate out of fear. But let us never fear to negotiate.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'America has tossed its cap over the wall of space.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The human mind is our fundamental resource.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Let the word go forth from this time and place, to friend and foe alike, that the torch has been passed to a new generation of Americans - born in this century, tempered by war, disciplined by a hard and bitter peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I\'m an idealist without illusions.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Let both sides seek to invoke the wonders of science instead of its terrors. Together let us explore the stars, conquer the deserts, eradicate disease, tap the ocean depths, and encourage the arts and commerce.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Those who dare to fail miserably can achieve greatly.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I am sorry to say that there is too much point to the wisecrack that life is extinct on other planets because their scientists were more advanced than ours.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The very word \'secrecy\' is repugnant in a free and open society; and we are as a people inherently and historically opposed to secret societies, to secret oaths, and to secret proceedings.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Our progress as a nation can be no swifter than our progress in education. The human mind is our fundamental resource.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Too often we... enjoy the comfort of opinion without the discomfort of thought.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'In a very real sense, it will not be one man going to the moon it will be an entire nation. For all of us must work to put him there.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Change is the law of life. And those who look only to the past or present are certain to miss the future.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Those who make peaceful revolution impossible will make violent revolution inevitable.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'All free men, wherever they may live, are citizens of Berlin. And therefore, as a free man, I take pride in the words \'Ich bin ein Berliner!\'',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The world is very different now. For man holds in his mortal hands the power to abolish all forms of human poverty, and all forms of human life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'We believe that if men have the talent to invent new machines that put men out of work, they have the talent to put those men back to work.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'We must use time as a tool, not as a couch.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The time to repair the roof is when the sun is shining.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'For time and the world do not stand still. Change is the law of life. And those who look only to the past or the present are certain to miss the future.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Things do not happen. Things are made to happen.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'In the long history of the world, only a few generations have been granted the role of defending freedom in its hour of maximum danger. I do not shrink from this responsibility - I welcome it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'A young man who does not have what it takes to perform military service is not likely to have what it takes to make a living. Today\'s military rejects include tomorrow\'s hard-core unemployed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'A man does what he must - in spite of personal consequences, in spite of obstacles and dangers and pressures - and that is the basis of all human morality.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'It might be said now that I have the best of both worlds. A Harvard education and a Yale degree.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Sure it\'s a big job; but I don\'t know anyone who can do it better than I can.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The ignorance of one voter in a democracy impairs the security of all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Tolerance implies no lack of commitment to one\'s own beliefs. Rather it condemns the oppression or persecution of others.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The basic problems facing the world today are not susceptible to a military solution.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Man is still the most extraordinary computer of all.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I don\'t think the intelligence reports are all that hot. Some days I get more out of the New York Times.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'There is always inequality in life. Some men are killed in a war and some men are wounded and some men never leave the country. Life is unfair.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'When written in Chinese, the word \'crisis\' is composed of two characters. One represents danger and the other represents opportunity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'If we cannot now end our differences, at least we can help make the world safe for diversity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I look forward to a great future for America - a future in which our country will match its military strength with our moral restraint, its wealth with our wisdom, its power with our purpose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'A child miseducated is a child lost.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I hope that no American will waste his franchise and throw away his vote by voting either for me or against me solely on account of my religious affiliation. It is not relevant.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'When power leads man toward arrogance, poetry reminds him of his limitations. When power narrows the area of man\'s concern, poetry reminds him of the richness and diversity of existence. When power corrupts, poetry cleanses.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'We would like to live as we once lived, but history will not permit it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The pay is good and I can walk to work.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Our growing softness, our increasing lack of physical fitness, is a menace to our security.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The courage of life is often a less dramatic spectacle than the courage of a final moment; but it is no less a magnificent mixture of triumph and tragedy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'If art is to nourish the roots of our culture, society must set the artist free to follow his vision wherever it takes him.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Efforts and courage are not enough without purpose and direction.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The great enemy of the truth is very often not the lie, deliberate, contrived and dishonest, but the myth, persistent, persuasive and unrealistic.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Mothers all want their sons to grow up to be president, but they don\'t want them to become politicians in the process.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Conformity is the jailer of freedom and the enemy of growth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'As we express our gratitude, we must never forget that the highest appreciation is not to utter words, but to live by them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Our problems are man-made, therefore they may be solved by man. And man can be as big as he wants. No problem of human destiny is beyond human beings.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'For in the final analysis, our most basic common link is that we all inhabit this small planet. We all breathe the same air. We all cherish our children\'s futures. And we are all mortal.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The goal of education is the advancement of knowledge and the dissemination of truth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'There are risks and costs to action. But they are far less than the long range risks of comfortable inaction.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The best road to progress is freedom\'s road.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Modern cynics and skeptics... see no harm in paying those to whom they entrust the minds of their children a smaller wage than is paid to those to whom they entrust the care of their plumbing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Forgive your enemies, but never forget their names.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'History is a relentless master. It has no present, only the past rushing into the future. To try to hold fast is to be swept aside.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'To state the facts frankly is not to despair the future nor indict the past. The prudent heir takes careful inventory of his legacies and gives a faithful accounting to those whom he owes an obligation of trust.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'We have the power to make this the best generation of mankind in the history of the world or to make it the last.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Peace is a daily, a weekly, a monthly process, gradually changing opinions, slowly eroding old barriers, quietly building new structures.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Our most basic common link is that we all inhabit this planet. We all breathe the same air. We all cherish our children\'s future. And we are all mortal.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The greater our knowledge increases the more our ignorance unfolds.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'A nation that is afraid to let its people judge the truth and falsehood in an open market is a nation that is afraid of its people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Let every nation know, whether it wishes us well or ill, that we shall pay any price, bear any burden, meet any hardship, support any friend, oppose any foe to assure the survival and the success of liberty.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'The problems of the world cannot possibly be solved by skeptics or cynics whose horizons are limited by the obvious realities. We need men who can dream of things that never were.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'A nation which has forgotten the quality of courage which in the past has been brought to public life is not as likely to insist upon or regard that quality in its chosen leaders today - and in fact we have forgotten.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Mankind must put an end to war before war puts an end to mankind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'My fellow Americans, ask not what your country can do for you, ask what you can do for your country.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Once you say you\'re going to settle for second, that\'s what happens to you in life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Leadership and learning are indispensable to each other.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Unconditional war can no longer lead to unconditional victory. It can no longer serve to settle disputes... can no longer be of concern to great powers alone.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'No one has been barred on account of his race from fighting or dying for America, there are no white or colored signs on the foxholes or graveyards of battle.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'In a time of domestic crisis, men of goodwill and generosity should be able to unite regardless of party or politics.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'We cannot expect that all nations will adopt like systems, for conformity is the jailer of freedom and the enemy of growth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Geography has made us neighbors. History has made us friends. Economics has made us partners, and necessity has made us allies. Those whom God has so joined together, let no man put asunder.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I\'m always rather nervous about how you talk about women who are active in politics, whether they want to be talked about as women or as politicians.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'I think \'Hail to the Chief\' has a nice ring to it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Victory has a thousand fathers, but defeat is an orphan.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'A man may die, nations may rise and fall, but an idea lives on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 90,
            'quote_text'    => 'If a free society cannot help the many who are poor, it cannot save the few who are rich.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'In our home there was always prayer - aloud, proud and unapologetic.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'The CIA is made up of boys whose families sent them to Princeton but wouldn\'t let them into the family brokerage business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'I want to make a policy statement. I am unabashedly in favor of women.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'A man without a vote is man without protection.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'There are no problems we cannot solve together, and very few that we can solve by ourselves.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'If future generations are to remember us more with gratitude than sorrow, we must achieve more than just the miracles of technology. We must also leave them a glimpse of the world as it was created, not just as it looked when we got through with it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'We must open the doors of opportunity. But we must also equip our people to walk through those doors.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'There are plenty of recommendations on how to get out of trouble cheaply and fast. Most of them come down to this: Deny your responsibility.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'Freedom is not enough.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'I will do my best. That is all I can do. I ask for your help - and God\'s.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'Education is not a problem. Education is an opportunity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'If two men agree on everything, you may be sure that one of them is doing the thinking.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'I believe the destiny of your generation - and your nation - is a rendezvous with excellence.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'We live in a world that has narrowed into a neighborhood before it has broadened into a brotherhood.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'I\'d rather give my life than be afraid to give it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'The noblest search is the search for excellence.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'Yesterday is not ours to recover, but tomorrow is ours to win or lose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'We did not choose to be the guardians of the gate, but there is no one else.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'Peace is a journey of a thousand miles and it must be taken one step at a time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'Doing what\'s right isn\'t the problem. It is knowing what\'s right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'What convinces is conviction. Believe in the argument you\'re advancing. If you don\'t you\'re as good as dead. The other person will sense that something isn\'t there, and no chain of reasoning, no matter how logical or elegant or brilliant, will win your case for you.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'While you\'re saving your face, you\'re losing your ass.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'I am concerned about the whole man. I am concerned about what the people, using their government as an instrument and a tool, can do toward building the whole man, which will mean a better society and a better world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'It may be, it just may be, that life as we know it with its humanity is more unique than many have thought.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 91,
            'quote_text'    => 'You aren\'t learning anything when you\'re talking.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Always remember that others may hate you but those who hate you don\'t win unless you hate them. And then you destroy yourself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'We do not learn by inference and deduction and the application of mathematics to philosophy, but by direct intercourse and sympathy.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'A public man must never forget that he loses his usefulness when he as an individual, rather than his policy, becomes the issue.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Let us begin by committing ourselves to the truth to see it like it is, and tell it like it is, to find the truth, to speak the truth, and to live the truth.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Never say no when a client asks for something, even if it is the moon. You can always try, and anyhow there is plenty of time afterwards to explain that it was not possible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Only if you have been in the deepest valley, can you ever know how magnificent it is to be on the highest mountain.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'It\'s a piece of cake until you get to the top. You find you can\'t stop playing the game the way you\'ve always played it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'The more you stay in this kind of job, the more you realize that a public figure, a major public figure, is a lonely man.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'In the television age, the key distinction is between the candidate who can speak poetry and the one who can only speak prose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'The greatest honor history can bestow is that of peacemaker.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'The finest steel has to go through the hottest fire.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Once you get into this great stream of history, you can\'t get out.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'It is necessary for me to establish a winner image. Therefore, I have to beat somebody.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I reject the cynical view that politics is a dirty business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Defeat doesn\'t finish a man, quit does. A man is not finished when he\'s defeated. He\'s finished when he quits.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'If you take no risks, you will suffer no defeats. But if you take no risks, you win no victories.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'There are some people, you know, they think the way to be a big man is to shout and stomp and raise hell-and then nothing ever really happens. I\'m not like that I never shoot blanks.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I wish I could give you a lot of advice, based on my experience of winning political debates. But I don\'t have that experience. My only experience is at losing them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Never let your head hang down. Never give up and sit down and grieve. Find another way. And don\'t pray when it rains if you don\'t pray when the sun shines.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'If you want to make beautiful music, you must play the black and the white notes together.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'A man is not finished when he is defeated. He is finished when he quits.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Those who hate you don\'t win unless you hate them, and then you destroy yourself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Tell them to send everything that can fly.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I gave \'em a sword. And they stuck it in, and they twisted it with relish. And I guess if I had been in their position, I\'d have done the same thing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'My strong point, if I have a strong point, is performance. I always do more than I say. I always produce more than I promise.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Solutions are not the answer.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Don\'t get the impression that you arouse my anger. You see, one can only be angry with those he respects.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'If an individual wants to be a leader and isn\'t controversial, that means he never stood for anything.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Well, I screwed it up real good, didn\'t I?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'You\'ve got to learn to survive a defeat. That\'s when you develop character.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'By the time you get dressed, drive out there, play 18 holes and come home, you\'ve blown seven hours. There are better things you can do with your time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'My concern today is not with the length of a person\'s hair but with his conduct.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I don\'t think that a leader can control, to any great extent, his destiny. Very seldom can he step in and change the situation if the forces of history are running in another direction.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Any change is resisted because bureaucrats have a vested interest in the chaos in which they exist.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I am not a crook.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'We cannot learn from one another until we stop shouting at one another - until we speak quietly enough so that our words can be heard as well as our voices.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'You must never be satisfied with losing. You must get angry, terribly angry, about losing. But the mark of the good loser is that he takes his anger out on himself and not his victorious opponents or on his teammates.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Life isn\'t meant to be easy. It\'s hard to take being on the top - or on the bottom. I guess I\'m something of a fatalist. You have to have a sense of history, I think, to survive some of these things... Life is one crisis after another.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I can take it. The tougher it gets, the cooler I get.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'What starts the process, really, are laughs and slights and snubs when you are a kid. If your anger is deep enough and strong enough, you learn that you can change those attitudes by excellence, personal gut performance.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'I don\'t know anything that builds the will to win better than competitive sports.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Government can provide opportunity. But opportunity means nothing unless people are prepared to seize it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'Remember, always give your best. Never get discouraged. Never be petty. Always remember, others may hate you. But those who hate you don\'t win unless you hate them. And then you destroy yourself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 92,
            'quote_text'    => 'People react to fear, not love; they don\'t teach that in Sunday School, but it\'s true.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'It\'s the quality of the ordinary, the straight, the square, that accounts for the great stability and success of our nation. It\'s a quality to be proud of. But it\'s a quality that many people seem to have neglected.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I know I am getting better at golf because I am hitting fewer spectators.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'There are no adequate substitutes for father, mother, and children bound together in a loving commitment to nurture and protect. No government, no matter how well-intentioned, can take the place of the family in the scheme of things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'All my children have spoken for themselves since they first learned to speak, and not always with my advance approval, and I expect that to continue in the future.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'In all my public and private acts as your president, I expect to follow my instincts of openness and candor with full confidence that honesty is always the best policy in the end.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'History and experience tell us that moral progress comes not in comfortable and complacent times, but out of trial and confusion.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'Our great Republic is a government of laws and not of men. Here, the people rule.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I love sports. Whenever I can, I always watch the Detroit Tigers on the radio.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I would hope that understanding and reconciliation are not limited to the 19th hole alone.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'A government big enough to give you everything you want is a government big enough to take from you everything you have.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'An American tragedy in which we all have played a part.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'Tell the truth, work hard, and come to dinner on time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I have had a lot of adversaries in my political life, but no enemies that I can remember.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I am a Ford, not a Lincoln.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'If Lincoln were alive today, he\'d be turning over in his grave.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'For millions of men and women, the church has been the hospital for the soul, the school for the mind and the safe depository for moral ideas.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'When a man is asked to make a speech, the first thing he has to decide is what to say.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'The pat on the back, the arm around the shoulder, the praise for what was done right and the sympathetic nod for what wasn\'t are as much a part of golf as life itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'Even though this is late in an election year, there is no way we can go forward except together and no way anybody can win except by serving the people\'s urgent needs. We cannot stand still or slip backwards. We must go forward now together.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'Truth is the glue that holds government together.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'Things are more like today than they have ever been before.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'Teddy Roosevelt... once said, \'Speak softly and carry a big stick.\' Jimmy Carter wants to speak loudly and carry a fly swatter.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I cannot imagine any other country in the world where the opposition would seek, and the chief executive would allow, the dissemination of his most private and personal conversations with his staff, which, to be honest, do not exactly confer sainthood on anyone concerned.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 93,
            'quote_text'    => 'I had a lot of experience with people smarter than I am.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Aggression unopposed becomes a contagious disease.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I have often wanted to drown my troubles, but I can\'t get my wife to go swimming.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'We become not a melting pot but a beautiful mosaic. Different people, different beliefs, different yearnings, different hopes, different dreams.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'To deal with individual human needs at the everyday level can be noble sometimes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'My paintings have gotten to be pretty popular and I\'ve taken a little bit more interest in painting the last few years. In fact, my novel that I wrote not too long ago, \'The Hornet\'s Nest,\' I painted the cover picture for it and I do a good bit of painting now.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'There\'s always an element of self delusion among people who believe they ought to be President. There\'s an underestimation of your opponent and an overestimation of your own abilities. This is compatible with being rich and powerful, the idea that we were blessed by God because we deserve to be blessed.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I look forward to these confrontations with the press to kind of balance up the nice and pleasant things that come to me as president.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I\'ll never tell a lie. I\'ll never make a misleading statement. I\'ll never betray the confidence that any of you had in me. And I\'ll never avoid a controversial issue.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'It is difficult for the common good to prevail against the intense concentration of those who have a special interest, especially if the decisions are made behind locked doors.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Sadat was a great and good man, and his most bitter and dangerous enemies were people who were obsessed with hatred for his peaceful goals.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'There should be an honest attempt at the reconciliation of differences before resorting to combat.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I think politicians really go with the tide.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'The experience of democracy is like the experience of life itself-always changing, infinite in its variety, sometimes turbulent and all the more valuable for having been tested by adversity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Testing oneself is best when done alone.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'A fundamentalist can\'t bring himself or herself to negotiate with people who disagree with them because the negotiating process itself is an indication of implied equality.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Human rights is the soul of our foreign policy, because human rights is the very soul of our sense of nationhood.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'My favourite president, and the one I admired most, was Harry Truman.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Unless both sides win, no agreement can be permanent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'It is good to realize that if love and peace can prevail on earth, and if we can teach our children to honor nature\'s gifts, the joys and beauties of the outdoors will be here forever.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I am a nuclear physicist by training and a deeply committed Christian. I don\'t have any doubt in my own mind about God who created the entire universe. But I don\'t adhere to passages that so and so was created 4,000 years before Christ, and things of that kind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'The awareness that health is dependent upon habits that we control makes us the first generation in history that to a large extent determines its own destiny.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'You can do what you have to do, and sometimes you can do it even better than you think you can.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Globalization, as defined by rich people like us, is a very nice thing... you are talking about the Internet, you are talking about cell phones, you are talking about computers. This doesn\'t affect two-thirds of the people of the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'We have a tendency to condemn people who are different from us, to define their sins as paramount and our own sinfulness as being insignificant.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'My position has always been, along with many other people, that any differences be resolved in a nonviolent way.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'We must adjust to changing times and still hold to unchanging principles.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'For this generation, ours, life is nuclear survival, liberty is human rights, the pursuit of happiness is a planet whose resources are devoted to the physical and spiritual nourishment of its inhabitants.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Like music and art, love of nature is a common language that can transcend political or social boundaries.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'War may sometimes be a necessary evil. But no matter how necessary, it is always an evil, never a good. We will not learn how to live together in peace by killing each other\'s children.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'Too many of us now tend to worship self indulgence and consumption.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'You just have to have a simple faith.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'If you fear making anyone mad, then you ultimately probe for the lowest common denominator of human achievement.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'People make a big fuss over you when you\'re President. But I\'m very serious about doing everything I can to make sure that it doesn\'t go to my head.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I\'m a Southerner.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'When you single out any particular group of people for secondary citizenship status, that\'s a violation of basic human rights.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I say to you quite frankly that the time for racial discrimination is over.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'I\'m an expert typist. I learned in high school. I would close my eyes and just type without worrying about mistakes. I tried to penetrate my heart, and as I let my thoughts drift, things bubbled up to the surface.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'It\'s not necessary to fear the prospect of failure but to be determined not to fail.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 94,
            'quote_text'    => 'If you\'re totally illiterate and living on one dollar a day, the benefits of globalization never come to you.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'A people free to choose will always choose peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'We can\'t help everyone, but everyone can help someone.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'People do not make wars; governments do.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Don\'t be afraid to see what you see.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'To sit back hoping that someday, some way, someone will make things right is to go on feeding the crocodile, hoping he will eat you last - but eat you he will.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'There are no constraints on the human mind, no walls around the human spirit, no barriers to our progress except those we ourselves erect.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Each generation goes further than the generation preceding it because it stands on the shoulders of that generation. You will have opportunities beyond anything we\'ve ever known.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'They say the world has become too complex for simple answers. They are wrong.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'I\'ve often said there\'s nothing better for the inside of a man than the outside of a horse.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'We can not play innocents abroad in a world that is not innocent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'What we have found in this country, and maybe we\'re more aware of it now, is one problem that we\'ve had, even in the best of times, and that is the people who are sleeping on the grates, the homeless, you might say, by choice.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'I know in my heart that man is good. That what is right will always eventually triumph. And there\'s purpose and worth to each and every life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'You can tell alot about a fellow\'s character by his way of eating jellybeans.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'If we ever forget that we are One Nation Under God, then we will be a nation gone under.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Heroes may not be braver than anyone else. They\'re just braver five minutes longer.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'We will always remember. We will always be proud. We will always be prepared, so we will always be free.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'When you can\'t make them see the light, make them feel the heat.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Trust, but verify.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Surround yourself with the best people you can find, delegate authority, and don\'t interfere as long as the policy you\'ve decided upon is being carried out.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Status quo, you know, is Latin for \'the mess we\'re in\'.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'No mother would ever willingly sacrifice her sons for territorial gain, for economic advantage, for ideology.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Information is the oxygen of the modern age. It seeps through the walls topped by barbed wire, it wafts across the electrified borders.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'We should measure welfare\'s success by how many people leave welfare, not by how many are added.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'One picture is worth 1,000 denials.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'There are no easy answers, but there are simple answers. We must have the courage to do what we know is morally right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Let us be sure that those who come after will say of us in our time, that in our time we did everything that could be done. We finished the race; we kept them free; we kept the faith.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'It\'s true hard work never killed anybody, but I figure, why take the chance?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Life is one grand, sweet song, so start the music.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'My philosophy of life is that if we make up our mind what we are going to make of our lives, then work hard toward that goal, we never lose - somehow we win out.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'A tree\'s a tree. How many more do you need to look at?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'There are no great limits to growth because there are no limits of human intelligence, imagination, and wonder.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'I am not worried about the deficit. It is big enough to take care of itself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Peace is not absence of conflict, it is the ability to handle conflict by peaceful means.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 95,
            'quote_text'    => 'Facts are stubborn things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Many schools include a service project as part of their curriculum, and many corporations have in-house projects for their employees or give them time off to do volunteer work.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'We know what works. Freedom Works. We know what\'s right. Freedom is right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Please don\'t ask me to do that which I\'ve just said I\'m not going to do, because you\'re burning up time. The meter is running through the sand on you, and I am now filibustering.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I can\'t ever remember sitting around and saying, \'gosh let\'s hurry up and get these debates going, that\'ll win it for me.\' Nope.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I was offered a job on Wall Street by my uncle. But I wanted to get out. Make-it-on-my-own kinda thing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I don\'t write letters anymore.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'We can realise a lasting peace and transform the East-West relationship to one of enduring co-operation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'We don\'t want an America that is closed to the world. What we want is a world that is open to America.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I think when you see an aircraft fire, these angry, black puffs of smoke, knowing that one of them could kill you that you - you - you understand the seriousness of the mission. And you understand your own mortality.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I think in defeat you grope for things that are happy, and it\'s hard.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Ageing\'s alright, better than the alternative, which is not being here.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I stand for anti-bigotry, anti-Semitism, and anti-racism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'But let me tell you, this gender thing is history. You\'re looking at a guy who sat down with Margaret Thatcher across the table and talked about serious issues.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'The day will come - and it is not far off - when the legacy of Lincoln will finally be fulfilled at 1600 Pennsylvania Avenue, when a black man or woman will sit in the Oval Office. When that day comes, the most remarkable thing about it will be how naturally it occurs.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I do not like broccoli. And I haven\'t liked it since I was a little kid and my mother made me eat it. And I\'m President of the United States and I\'m not going to eat any more broccoli.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'It\'s a very good question, very direct, and I\'m not going to answer it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'You know I vowed when I became President not to talk about the loneliest toughest job in the world and I didn\'t.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I have survivor\'s curiosity, I guess.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Old guys can still do fun things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I think the 24-hour news cycle has helped exaggerate the differences between the parties. You can always find someone on TV somewhere carping about something. That didn\'t happen 20 years ago.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Never ask anyone over 70 how they feel. They\'ll tell you.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'We are a nation of communities... a brilliant diversity spread like stars, like a thousand points of light in a broad and peaceful sky.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'It\'s much worse to read criticism about your son than yourself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I will keep America moving forward, always forward, for a better America, for an endless enduring dream and a thousand Points of Light. This is my mission, and I will complete it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I\'m conservative, but I\'m not a nut about it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'We are not the sum of our possessions.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'What\'s wrong with being a boring kind of guy?',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Debates, I hate.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I am not one who - who flamboyantly believes in throwing a lot of words around.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'You cannot be President of the United States if you don\'t have faith. Remember Lincoln, going to his knees in times of trial in the Civil War and all that stuff.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'America is never wholly herself unless she is engaged in high moral principle. We as a people have such a purpose today. It is to make kinder the face of the nation and gentler the face of the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Losing is tough.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'A new breeze is blowing, and a world refreshed by freedom seems reborn; for in man\'s heart, if not in fact, the day of the dictator is over. The totalitarian era is passing, its old ideas blown away like leaves from an ancient, lifeless tree.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'History will point out some of the things I did wrong and some of the things I did right.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'You have to understand that people that are hurting are going to criticize.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'Every loss of life is terrible.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I have opinions of my own, strong opinions, but I don\'t always agree with them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 96,
            'quote_text'    => 'I can tell you this: If I\'m ever in a position to call the shots, I\'m not going to rush to send somebody else\'s kids into a war.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'When I became president with a commitment to reform health care, Hillary was a natural to head the health care task force. You all know we failed because we couldn\'t break a Senate filibuster. Hillary immediately went to work on solving the problems the bill sought to address one by one.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Let us all take more responsibility, not only for ourselves and our families but for our communities and our country.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'In a world with no systems, with chaos, everything becomes a guerilla struggle, and this predictability is not there. And it becomes almost impossible to save lives, educate kids, develop economies, whatever.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Work is about more than making a living, as vital as that is. It\'s fundamental to human dignity, to our sense of self-worth as useful, independent, free people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'You know, everybody makes mistakes when they are president.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Sometimes when people are under stress, they hate to think, and it\'s the time when they most need to think.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'If you believe in making change from the bottom up, if you believe the measure of change is how many people\'s lives are better, you know it\'s hard, and some people think it\'s boring.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'We must teach our children to resolve their conflicts with words, not weapons.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Where are the jobs going to come from? Small business, manufacturing and clean energy. Where\'s the money to finance them? The banks and the corporations in America today have lots of money that they can invest right now.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Strength and wisdom are not opposing values.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'I don\'t believe you can find any evidence of the fact that I have changed government policy solely because of a contribution.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Character is a journey, not a destination.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Being president is like running a cemetery: you\'ve got a lot of people under you and nobody\'s listening.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Let me say this as clearly as I can: No matter how sharp a grievance or how deep a hurt, there is no justification for killing innocents.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'The new rage is to say that the government is the cause of all our problems, and if only we had no government, we\'d have no problems. I can tell you, that contradicts evidence, history, and common sense.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'I came of age believing that, no matter what happened, I would always be able to support myself.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'There is nothing wrong with America that cannot be cured with what is right in America.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'If you live long enough, you\'ll make mistakes. But if you learn from them, you\'ll be a better person. It\'s how you handle adversity, not how it affects you. The main thing is never quit, never quit, never quit.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'I personally don\'t believe we ought to be raising taxes or cutting spending, either one, until we get this economy off the ground. I\'ll pay more, but it won\'t solve the problem.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'You have to make a conscious decision to change for your own well-being and that of your family and your country.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'When we make college more affordable, we make the American dream more achievable.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Today, many companies are reporting that their number one constraint on growth is the inability to hire workers with the necessary skills.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'I still believe in a place called Hope.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'It\'s heartbreaking to see so many people trapped in a web of enforced idleness, deep debt, and gnawing self-doubt.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Part of our essential humanity is paying respect to what God gave us and what will be here a long time after we\'re gone.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'It turns out that advancing equal opportunity and economic empowerment is both morally right and good economics, because discrimination, poverty and ignorance restrict growth, while investments in education, infrastructure and scientific and technological research increase it, creating more good jobs and new wealth for all of us.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'Promising too much can be as cruel as caring too little.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'When times are tough and people are frustrated and angry and hurting and uncertain, the politics of constant conflict may be good, but what is good politics does not necessarily work in the real world. What works in the real world is cooperation.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'A lot of presidential memoirs, they say, are dull and self-serving. I hope mine is interesting and self-serving.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'In the new economy, information, education, and motivation are everything.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'You are the most powerful cultural force in the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 97,
            'quote_text'    => 'I like the job. That\'s what I\'ll miss the most... I\'m not sure anybody ever liked this as much as I\'ve liked it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Freedom itself was attacked this morning by a faceless coward, and freedom will be defended.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I told you I\'m not going to criticize my successor. I\'ll just tell you that there are people at Gitmo that will kill American people at a drop of a hat and I don\'t believe that persuasion isn\'t going to work. Therapy isn\'t going to cause terrorists to change their mind.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Americans are rising to the tasks of history, and they expect the same of us.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'You can\'t put democracy and freedom back into a box.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'We will not waver; we will not tire; we will not falter, and we will not fail. Peace and Freedom will prevail.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Leadership to me means duty, honor, country. It means character, and it means listening from time to time.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'America will never seek a permission slip to defend the security of our people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Now, there are some who would like to rewrite history - revisionist historians is what I like to call them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I understand everybody in this country doesn\'t agree with the decisions I\'ve made. And I made some tough decisions. But people know where I stand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Today we affirm a new commitment to live out our nation\'s promise through civility, courage, compassion and character.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I will never relent in defending America - whatever it takes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Bring them on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Some folks look at me and see a certain swagger, which in Texas is called \'walking.\'',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The wisest use of American strength is to advance freedom.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'This young century will be liberty\'s century.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'To those of you who received honours, awards and distinctions, I say well done. And to the C students, I say you, too, can be president of the United States.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Only a liberal senator from Massachusetts would say that a 49 percent increase in funding for education was not enough.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I want to thank you for taking time out of your day to come and witness my hanging.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'It\'s going to be the year of the sharp elbow and the quick tongue.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I think you can judge from somebody\'s actions a kind of a stability and sense of purpose perhaps created by strong religious roots. I mean, there\'s a certain patience, a certain discipline, I think, that religion helps you achieve.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I think we ought to raise the age at which juveniles can have a gun.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The legislature\'s job is to write law. It\'s the executive branch\'s job to interpret law.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The momentum of freedom in our world is unmistakable - and it is not carried forward by our power alone. We can trust in that greater power Who guides the unfolding of the years. And in all that is to come, we can know that His purposes are just and true.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'A dictatorship would be a heck of a lot easier, there\'s no question about it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Everywhere that freedom stirs, let tyrants fear.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Great tragedy has come to us, and we are meeting it with the best that is in our country, with courage and concern for others because this is America. This is who we are.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I have written a book. This will come as quite a shock to some. They didn\'t think I could read, much less write.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'You can fool some of the people all the time, and those are the ones you want to concentrate on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I had to abandon free market principles in order to save the free market system.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I am mindful not only of preserving executive powers for myself, but for predecessors as well.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'And the cornerstone of my economic policies, when I first got elected, was cutting taxes on everybody on who paid taxes.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I believe that God has planted in every heart the desire to live in freedom.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I can hear you, the rest of the world can hear you and the people who knocked these buildings down will hear all of us soon.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'We don\'t believe in planners and deciders making the decisions on behalf of Americans.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The resolve of our great nation is being tested. But make no mistake, we will show the world that we will pass the test.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The financial crisis should not become an excuse to raise taxes, which would only undermine the economic growth required to regain our strength.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'This way of life is worth defending.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The action we take and the decisions we make in this decade will have consequences far into this century. If America shows weakness and uncertainty, the world will drift toward tragedy. That will not happen on my watch.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'We know that dictators are quick to choose aggression, while free nations strive to resolve differences in peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'People make suggestions on what to say all the time. I\'ll give you an example; I don\'t read what\'s handed to me. People say, \'Here, here\'s your speech, or here\'s an idea for a speech.\' They\'re changed. Trust me.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I have a different vision of leadership. A leadership is someone who brings people together.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'The course of this conflict is not known, yet its outcome is certain. Freedom and fear, justice and cruelty, have always been at war, and we know that God is not neutral between them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'We will build new ships to carry man forward into the universe, to gain a new foothold on the moon and to prepare for new journeys to the worlds beyond our own.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'People forget... that we structured it so that the government, or the people, would be repaid with a really good rate of return. And as it turns out, that aspect of TARP, that\'s what happened.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'You teach a child to read, and he or her will be able to pass a literacy test.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'We\'ve climbed the mighty mountain. I see the valley below, and it\'s a valley of peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Government does not create wealth. The major role for the government is to create an environment where people take risks to expand the job rate in the United States.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'America is the land of the second chance - and when the gates of the prison open, the path ahead should lead to a better life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Use power to help people. For we are given power not to advance our own purposes nor to make a great show in the world, nor a name. There is but one just use of power and it is to serve people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'One of my proudest moments is I didn\'t sell my soul for the sake of popularity.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I would like to be remembered as a guy who had a set of priorities, and was willing to live by those priorities. In terms of accomplishments, my biggest accomplishment is that I kept the country safe amidst a real danger.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I\'m hopeful. I know there is a lot of ambition in Washington, obviously. But I hope the ambitious realize that they are more likely to succeed with success as opposed to failure.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I know it\'s going to be the private sector that leads this country out of the current economic times we\'re in. You can spend your money better than the government can spend your money.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'Our nation must come together to unite.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'I just want you to know that, when we talk about war, we\'re really talking about peace.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 98,
            'quote_text'    => 'For diplomacy to be effective, words must be credible - and no one can now doubt the word of America.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Our public life withers when only the most extreme voices get attention. Most of all, democracy breaks down when the average person feels their voice doesn\'t matter; that the system is rigged in favor of the rich or the powerful or some narrow interest.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Immigrants aren\'t the reason wages haven\'t gone up enough; those decisions are made in the boardrooms that too often put quarterly earnings over long-term returns.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'If the people cannot trust their government to do the job for which it exists - to protect them and to promote their common welfare - all else is lost.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We need to reject any politics that targets people because of race or religion. This isn\'t a matter of political correctness. It\'s a matter of understanding what makes us strong. The world respects us not just for our arsenal; it respects us for our diversity and our openness and the way we respect every faith.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We didn\'t become the most prosperous country in the world just by rewarding greed and recklessness. We didn\'t come this far by letting the special interests run wild. We didn\'t do it just by gambling and chasing paper profits on Wall Street. We built this country by making things, by producing goods we could sell.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'It took a lot of blood, sweat and tears to get to where we are today, but we have just begun. Today we begin in earnest the work of making sure that the world we leave our children is just a little bit better than the one we inhabit today.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'What makes us Americans is our shared commitment to an ideal - that all of us are created equal, and all of us have the chance to make of our lives what we will.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Part of the reason that our politics seems so tough right now and facts and science and argument does not seem to be winning the day all the time is because we\'re hardwired not to always think clearly when we\'re scared. And the country\'s scared.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'My fellow Americans, we are and always will be a nation of immigrants. We were strangers once, too.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'What I\'m asking for is hard. It\'s easier to be cynical; to accept that change isn\'t possible, and politics is hopeless, and to believe that our voices and actions don\'t matter. But if we give up now, then we forsake a better future.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Issues are never simple. One thing I\'m proud of is that very rarely will you hear me simplify the issues.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'In the absence of sound oversight, responsible businesses are forced to compete against unscrupulous and underhanded businesses, who are unencumbered by any restrictions on activities that might harm the environment, or take advantage of middle-class families, or threaten to bring down the entire financial system.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'What Washington needs is adult supervision.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'It\'s not enough to train today\'s workforce. We also have to prepare tomorrow\'s workforce by guaranteeing every child access to a world-class education.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Cutting the deficit by gutting our investments in innovation and education is like lightening an overloaded airplane by removing its engine. It may make you feel like you\'re flying high at first, but it won\'t take long before you feel the impact.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Now, as a nation, we don\'t promise equal outcomes, but we were founded on the idea everybody should have an equal opportunity to succeed. No matter who you are, what you look like, where you come from, you can make it. That\'s an essential promise of America. Where you start should not determine where you end up.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'It was the labor movement that helped secure so much of what we take for granted today. The 40-hour work week, the minimum wage, family leave, health insurance, Social Security, Medicare, retirement plans. The cornerstones of the middle-class security all bear the union label.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'The future rewards those who press on. I don\'t have time to feel sorry for myself. I don\'t have time to complain. I\'m going to press on.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'A good compromise, a good piece of legislation, is like a good sentence; or a good piece of music. Everybody can recognize it. They say, \'Huh. It works. It makes sense.\'',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'No other country in the world does what we do. On every issue, the world turns to us, not simply because of the size of our economy or our military might - but because of the ideals we stand for, and the burdens we bear to advance them.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We welcome the scrutiny of the world - because what you see in America is a country that has steadily worked to address our problems and make our union more perfect.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Our higher education system is one of the things that makes America exceptional. There\'s no place else that has the assets we do when it comes to higher education. People from all over the world aspire to come here and study here. And that is a good thing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We can choose a future where we export more products and outsource fewer jobs. After a decade that was defined by what we bought and borrowed, we\'re getting back to basics, and doing what America has always done best: We\'re making things again.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'America isn\'t Congress. America isn\'t Washington. America is the striving immigrant who starts a business, or the mom who works two low-wage jobs to give her kid a better life. America is the union leader and the CEO who put aside their differences to make the economy stronger.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We need to internalize this idea of excellence. Not many folks spend a lot of time trying to be excellent.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'I think one of the great things about the United States has been our ability to maintain a distinction between our military and domestic law enforcement.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'If you were successful, somebody along the line gave you some help... Somebody helped to create this unbelievable American system that we have that allowed you to thrive. Somebody invested in roads and bridges. If you\'ve got a business - you didn\'t build that. Somebody else made that happen.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'I mean, I do think at a certain point you\'ve made enough money.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We know that the nation that goes all-in on innovation today will own the global economy tomorrow. This is an edge America cannot surrender.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'This is the moment when we must build on the wealth that open markets have created, and share its benefits more equitably. Trade has been a cornerstone of our growth and global development. But we will not be able to sustain this growth if it favors the few, and not the many.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'If you\'re walking down the right path and you\'re willing to keep walking, eventually you\'ll make progress.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'I think when you spread the wealth around it\'s good for everybody.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Money is not the only answer, but it makes a difference.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'The fact that my 15 minutes of fame has extended a little longer than 15 minutes is somewhat surprising to me and completely baffling to my wife.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'Focusing your life solely on making a buck shows a certain poverty of ambition. It asks too little of yourself. Because it\'s only when you hitch your wagon to something larger than yourself that you realize your true potential.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'We need to steer clear of this poverty of ambition, where people want to drive fancy cars and wear nice clothes and live in nice apartments but don\'t want to work hard to accomplish these things. Everyone should try to realize their full potential.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'My task over the last two years hasn\'t just been to stop the bleeding. My task has also been to try to figure out how do we address some of the structural problems in the economy that have prevented more Googles from being created.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 99,
            'quote_text'    => 'The Internet didn\'t get invented on its own. Government research created the Internet so that all the companies could make money off the Internet. The point is, is that when we succeed, we succeed because of our individual initiative, but also because we do things together.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'It\'s always good to be underestimated.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'My whole life is about winning. I don\'t lose often. I almost never lose.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I mean, there\'s no arguing. There is no anything. There is no beating around the bush. \'You\'re fired\' is a very strong term.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Everything I do in life is framed through the view of a businessman. That\'s my instinct. If I go into a pharmacy to buy shaving cream, then I\'m going to look for the best deal on shaving cream.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Private jets cost a lot of money.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'When America is united, America is totally unstoppable.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'One of the reasons that New York became great was that it\'s serviced by many, many different rivers and waterways. You have the Atlantic Ocean connected virtually right to it, and it\'s serviced by the East River and the Hudson River and lots of tributaries.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'You don\'t get a standing ovation and get boos, by the way. They don\'t go hand in hand.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I\'ve got the hottest brand in the world.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'The interesting thing is that everyone in golf is just nice. You learn a lot about people playing golf: their integrity, how they play under pressure.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I rely on myself very much. I just think that you have an instinct and you go with it. Especially when it comes to deal-making and buying things.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Owning great landmarks such as the Empire State Building or Trump Tower or the General Motors Building or the Plaza Hotel - there are certain just spectacular landmarks - it\'s an honor; it\'s really an honor.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'What separates the winners from the losers is how a person reacts to each new twist of fate.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'To me, I love real estate because you can feel it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'No dream is too big. No challenge is too great. Nothing we want for our future is beyond our reach.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'If you love what you do, if you love going to the office, if you really like it - not just say it, but really like it - it keeps you young and energised. I really love what I do.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Sometimes your best investments are the ones you don\'t make.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Part of being a winner is knowing when enough is enough. Sometimes you have to give up the fight and walk away, and move on to something that\'s more productive.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I don\'t make deals for the money. I\'ve got enough, much more than I\'ll ever need. I do it to do it.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'We will no longer surrender this country or its people to the false song of globalism.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'If you\'re going to be thinking, you may as well think big.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I think the big problem this country has is being politically correct. I\'ve been challenged by so many people, and I don\'t frankly have time for total political correctness. And to be honest with you, this country doesn\'t have time either.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Owning a great golf course gives you great power.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I\'m competitive, and I love to create challenges for myself. Maybe that\'s not always a good thing. It can make life complicated.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I\'ve been dealing with politicians all my life. All my life. And I\'ve always gotten them to do what I need them to do.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Well, yes, I\'ve fired a lot of people. Generally I like other people to fire, because it\'s always a lousy task. But I have fired many people.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I always look at it that I work with my employees as opposed to them working for me.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Without passion you don\'t have energy, with out energy you have nothing.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Speeches are much easier if you read them. I just find when I do that, it\'s harder to fire up the crowd.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Experience taught me a few things. One is to listen to your gut, no matter how good something sounds on paper. The second is that you\'re generally better off sticking with what you know. And the third is that sometimes your best investments are the ones you don\'t make.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'When somebody challenges you, fight back. Be brutal, be tough.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'If I don\'t get along with Democrats, I\'m sort of, like, out of business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'If you\'re interested in \'balancing\' work and pleasure, stop trying to balance them. Instead make your work more pleasurable.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I try to learn from the past, but I plan for the future by focusing exclusively on the present. That\'s where the fun is.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'In the end, you\'re measured not by how much you undertake but by what you finally accomplish.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'People are tired of seeing politicians as all talk and no action.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I have made the tough decisions, always with an eye toward the bottom line. Perhaps it\'s time America was run like a business.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Getting things done in this country, if you want to build something, if you want to start a company, it\'s getting to be virtually impossible with all of the bureaucracy and all of the approvals.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'In America, we understand that a nation is only living as long as it is striving.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'The way I run my business seems to be easier than the way I run my life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'Money was never a big motivation for me, except as a way to keep score. The real excitement is playing the game.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I\'ve been making deals all my life.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'I\'m the Ernest Hemingway of 140 characters.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 100,
            'quote_text'    => 'If you get good ratings, they\'ll cover you even if you have nothing to say.',
            'created_by'    => 2,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 135,
            'quote_text'    => 'The most important quality of leadership is a belief that we can do better.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 135,
            'quote_text'    => 'The essence of leadership is not a defense of the status quo - a contentment with things as they are. Leadership, genuine and true leadership, requires a willingness to push beyond what is convenient to what is necessary.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 135,
            'quote_text'    => 'As we enter the information age, we are changing the way we conduct business, the way we manufacture goods, the way we think about work. We are changing the kinds of services we provide; the way we entertain ourselves; the way we communicate.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('quotes')->insert([
            'author_id'     => 135,
            'quote_text'    => 'Business and industries examine a state\'s schools as they decide where to build new facilities - as they decide which states or communities will get new jobs.',
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

    }
}
