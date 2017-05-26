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


    }
}
