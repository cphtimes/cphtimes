<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
      <style>
        .serif {
          font-family: 'Libre Baskerville', serif;
        }
        a {
          color: #000000;
          text-decoration: none;
        }
        .rounded {
          border-radius: 0.0rem !important;  // 1.25rem!important;
        }
        .card-header {
          border-bottom: none;
        }
        .article-container {
          max-width: 600px;
          min-width: 600px;
        }
      </style>
      <title>The Copenhagen Gates</title>
    </head>
    <body class="antialiased">
      <main class="main pt-4">
        <div class="d-flex justify-content-center">
          <div class="article-container">
            <p class="text-uppercase"><strong>World</strong></p> <!-- {!! $topic !!} -->
            <h1 class="serif">What we know thus far: Wuhan virus (Covid-19)</h1> <!-- {!! $title !!} -->
            <p>
              {!! $year !!}/{!! $month !!}/{!! $day !!}<br/>
              By: Daniel R. Lehmann
            </p>

            <h3 class="serif">Abstract</h3>
            <p class="serif">In this article, I will attempt to encapsulate, search and seek out all the people, with the proper credentials to speak on the Wuhan virus (Covid-19). To include interviews, thoughts and threads in one place so as to make it easily accessible to a broader populace, than this content is currently reaching.</p>

            <h3 class="serif">Motivation</h3>
            <!-- <figure class="w-100 figure">
              <img width="100%" src="https://media.npr.org/assets/img/2013/03/06/bluemarble3k-smaller-nasa_custom-644f0b7082d6d0f6814a9e82908569c07ea55ccb-s800-c85.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure> -->
            <p class="serif">
              My motiviation is purely based on giving people a better foundation, better body of knowledge, for decisions made when it comes to the Wuhan virus (Covid-19).<br/>
              I hope, in large part, the people introduced in this article, and the concerns they raise, are null and void. Dead on arrival. Either someone will step forward and host the discussions where the questions will be answered (in whatever appropriate manner that looks like) or good old time will tell. I think, however, that their arguments make a lot of sense and a driving motivating factor for me is that the traditional news outlets, either willingly or unwillingly, are not covering it. This leads me to think that maybe there are some important questions that are yet to be addressed. If a population really is only as good as it's body of knowledge, then maybe, at time of writing, we're walking around with blinders.
            </p>

            <h3 class="serif">Methodology</h3>
            <p class="serif">
              Why did I include a section on methodology? What can this possibly contribute to the conversation? I'm curious myself. How did I stumble upon these people.
              While being careful not to date myself (out of vanity), it's safe to say that the younger generations, those who grew up with technology, may as well be welded to their computers, tablets and smartphones, while algorithmic overlords determine through probabilistic means (also called machine learning) what to watch next. Based on what makes them money, appeases their investors and lines their pockets.<br/>
              Like pulling in a thread of connected suspects, I think
              my kingpin (said jockingly) was Sucharit Bhakdi on Fox News no less. Heirsay I tell you! I agree, but I thought at the time, he raised some really insightful points. That, and he's the most cited microbiologist in all of Germany, yet you may never have heard his name uttered here in Denmark, should peak your curiosity. If not, then I don't know who.<br/>
              After him, followed PlanetLockdown a documentary cooming soon, which has published a wide range of interviews with Bhakdi and many others. Then, lastly followed Dr. Simone Gold and the rest followed from knowing this graph of people. All there was left, then was just to surf the internet for more. A term by the way that has gone out of favor. Why?
            </p>

            <h3 class="serif">Introduction</h3>
            <p class="serif">
              Denmark went into lockdown approximately {!! $elapsedTimeSinceDKLockdown !!} ago. Straight away a disaster happened. Science got into the same room as politics. Science cannot exist in the same room as politics. It immidiately becomes corrupted and silenced whenever appropriate.<br/>
              Trust the science became a popular mantra. Part of conducting science is to listen to multiple points of view, so that's a good thing. One cannot cling to their viewpoint if that is contrary to evidence presented.<br/>
              A generally occuring theme is the mass sensorship, companies like Facebook, Youtube and Twitter are, I personally believe, coordinating. Bans, strikes and the like on people with important differing oppinions. When did a difference of oppinion become so dangerous? Surely we can muster someone speak their mind and not agree with them fully, without having to censor them? Where did we go wrong?<br/>
              Regardless, I regret to inform you that we're at a point where you can no longer speak out, if it goes against the oppinions of the gatekeepers of these platforms. In fact, most if not all of the information covered in this article is banned on social media, irrespective of the credentials and stature of the people speaking out. This should provide some food for thought. Besides, I wouldn't be suprised to find that this article itself would get blacklisted and banned from being shared on social media and other communication channels (this includes private means of communicating). This is a dramatic tectonic shift in our democratic societies. The axiom, that is freedom of speech, is slowly erroding away and unfortunately there's no time to cover this in this present article.<br/>
              Our traditional news organs have more or less completely collapsed. This is a tragedy in it of itself. We cannot function without good journalism. This too, however, will not be the subject of this living breathing article. I will lay this point aside by simply saying this. <i>We need to figure out how we can create an economic incentive structure for our forth estate to start asking the important questions of the day.</i> I've heard everyone but the established media ask, and attempt to answer in a long form format, important questions such as:
            </p>
            <ul class="serif">
              <li>Should we open up immidiately?</li>
              <li>Is the PCR test invalid?</li>
              <li>Are masks efficatious?</li>
              <li>Did the Wuhan virus (Covid-19) originate in a lab or in nature?</li>
              <li>Are the vaccines safe?</li>
              <li>Should everyone or just the elderly population get the vaccine?</li>
              <li>What is the lockdown doing to our mental as well as physical health in the short and long term?</li>
              <li>Is there any scientific evidence to roll out immunity passports?</li>
            </ul>
            <p class="serif">
              Just imagine. An hour long conversation with the top experts from all around europe and the rest of the world, that could answer our burning questions and set our minds at ease. Wouldn't that be something. Rather than the same old shows where people sing, dance and bake cakes (though there should also be room for such content, but not the center stage in the midst of a pandemic) we would get what's akin to information vegatables. But I suspect we would accomplish too much from giving us commoners this type of knowledge. We would become too enlightened. So enjoy your junk food entertainment. There's plenty more of that where it came from. And forgive me for perhabs planting the following infectious ideas in your head: Why are we not talking about this more in depth? Why are we not taking these people, with honest open questions, seriously? Why are we fed with junk food information, when now more than ever we need an informed, healthy, society?<br/>
              I think the reader would be suprised to find just how few people, who actually know this subject area well, are actually speaking out against the general consesus, the in group oppinion. You can almost count them on your hands. These individuals should be celebrated. For daring to speak out. They deserve your time. I think these are the unspoken heroes of our day. The Gallileos who dare position themselves outside the mass consensus and who braze for the inevtiable ridicule by their peers. Here's a list of such people albeit not exhaustive:
            </p>
            <ul class="serif">
              <li>Sucharit Bhakdi MD</li>
              <li>Geert Vanden Bossche</li>
              <li>Dr. Simone Gold</li>
              <li>Dr. Sherry Tenpenny</li>
              <li>Wolfgang Wodarg</li>
              <li>Knut Wittkowski</li>
              <li>Christine Stabell Benn</li>
            </ul>
            <p class="serif">
              So, there are people that speak out, but the list is infinitesimally small. What do you risk by speaking out? Everything. Your livelyhood, your career and your credibility. If you would indulge me for a moment in a metaphore. It’s like playing soccer and going after the person, not the ball. The player doing this immediately get’s penalized. This used to be the case for our societal norms as well. When world class virologists and doctors with concerns in need of addressing, are berated by our mainstream media, or perhabs not even offered the chance to speak, then somewhere, along the way, our collective sense making apparatus went wrong.<br/>
              Reputation destruction. This should have been the phrase of the year. Labelling and name calling of the worst kind awaits those who dare speak their mind. What then, motivates people to speak out? I believe it is to speak the truth. The shared discovered truth. These brave men and women have a lot of characteristics in common, one notably being: Tell them where they're wrong in their line of thinking and they'll thank you. Because their eyes are on the truth, or in the search of truth, and nothing else.
            </p>
            <h3 class="serif">The current narrative</h3> <!-- The dominating belief -->
            <p class="serif">
              The current consesus seems to me to be that we need people to be mass vaccinated, issue immunity passports, which will grant you some benifits over those who don't have them, and regularly line up to take the PCR test. To go back to school or work. Then, in all due time, whatever that means, we can return "back to normal".<br/>
              Right, if you agree thus far, where do we go from here? Shouldn't we be allowed to ask some questions, to dissect any concerns we might have carefully, bit by bit, and then when the time is right, after careful analysis, figure out what appropriate functions to execute in our different layers of decision making? The next many sections will cover individuals, with the proper credentials to speak on these matters, who will take this conversations in many different and important directions. You don't have to agree with any of them. As is the case with any (scientific) endavour, you may leave with more questions than answers. You're expected to think, reflect and make up your own mind. I urge you to listen to just one of them. Remember, a good conversation challenges the listener.
            </p>

            <h3 class="serif">Dr. Simone Gold</h3>
            <p class="serif">Dr. Simone Gold is a doctor and founder of American Frontline Doctors.</p>
            <figure class="w-100 figure">
              <iframe src="https://www.bitchute.com/embed/9bH46xQRqjFa/" width="100%" height="360"></iframe>
              <figcaption class="figure-caption">
                Source: <a href="https://www.bitchute.com/video/9bH46xQRqjFa/">https://www.bitchute.com/video/9bH46xQRqjFa/</a>
              </figcaption>
            </figure>
            <h3 class="serif">Geert Vanden Bossche</h3>
            <p class="serif">Geert Vanden Bossche is an international expert in vaccine research and development, with a proven track record in designing and developing vaccines. He is proficient in vaccine patent writing, laboratory research, immunology, epidemiology, microbiology and preclinical vaccine development.</p>
            <figure class="w-100 figure">
              <iframe src="https://www.bitchute.com/embed/qQywpoKssIdX/" width="100%" height="360"></iframe>
              <figcaption class="figure-caption">
                Most cited microbiologist in German academic history.<br/>
                Source: <a href="https://www.bitchute.com/video/2bA8a3FsPxGQ/">https://www.bitchute.com/video/2bA8a3FsPxGQ/</a>
              </figcaption>
            </figure>

            <h3 class="serif">Planet lockdown</h3>
            <p class="serif">On their website it states: "Planet lockdown - A documentary and interview series covering the information needed to understand where we are today. The full-length film is coming soon."</p>
            <h5 class="serif">Sucharit Bhakdi MD</h5>
            <figure class="w-100 figure">
              <iframe src="https://www.bitchute.com/embed/2bA8a3FsPxGQ/" width="100%" height="360"></iframe>
              <figcaption class="figure-caption">
                Most cited microbiologist in German academic history.<br/>
                Source: <a href="https://www.bitchute.com/video/2bA8a3FsPxGQ/">https://www.bitchute.com/video/2bA8a3FsPxGQ/</a>
              </figcaption>
            </figure>
            <h5 class="serif">Dr. Sherry Tenpenny</h5>
            <figure class="w-100 figure">
              <iframe src="https://www.bitchute.com/embed/vlkk1TBuQVqi/" width="100%" height="360" allowfullscreen></iframe>
              <figcaption class="figure-caption">Source: <a href="https://www.bitchute.com/video/vlkk1TBuQVqi/">https://www.bitchute.com/video/vlkk1TBuQVqi/</a></figcaption>
            </figure>
            <h5 class="serif">Carrie Madej, MD</h5>
            <figure class="w-100 figure">
              <iframe id="lbry-iframe" width="100%" height="360" src="https://odysee.com/$/embed/Carrie-Madej---Full-Interview---Planet-Lockdown/4f18755bdb0aa306b3032b28c8050d5399624b47?r=ab2hFYHimgNJm2m6MoSERE5zwvUCB2Jv" allowfullscreen></iframe>
              <figcaption class="figure-caption">Source: <a href="https://odysee.com/@PlanetLockdown:6/Carrie-Madej---Full-Interview---Planet-Lockdown:4?src=open">https://odysee.com/@PlanetLockdown:6/Carrie-Madej---Full-Interview---Planet-Lockdown:4?src=open</a></figcaption>
            </figure>
            <h5 class="serif">Wolfgang Wodarg</h5>
            <figure class="w-100 figure">
              <iframe id="lbry-iframe" width="100%" height="360" src="https://odysee.com/$/embed/Wolfgang-Wodarg---Full-Interview-Inside---Planet-Lockdown-(5-mb-s)/0c18faeed21a56f7fe092ad894286b7333c8a188?r=ab2hFYHimgNJm2m6MoSERE5zwvUCB2Jv" allowfullscreen></iframe>
              <figcaption class="figure-caption">
                Doctor, former Publish Health officer, former German Parliament member and Council of Europe member.<br/>
                Source: <a href="https://odysee.com/@PlanetLockdown:6/Knut-Wittkowski---Central-Park-Interview---Planet-Lockdown:b?src=open">https://odysee.com/@PlanetLockdown:6/Knut-Wittkowski---Central-Park-Interview---Planet-Lockdown:b?src=open</a>
              </figcaption>
            </figure>
            <figure class="w-100 figure">
              <iframe id="lbry-iframe" width="100%" height="360" src="https://odysee.com/$/embed/Wolfgang-Wodarg---Full-Interview-Outside---Planet-Lockdown/0d1053dc8ccc2623f03032823d310d41c57c61fc?r=ab2hFYHimgNJm2m6MoSERE5zwvUCB2Jv" allowfullscreen></iframe>
              <figcaption class="figure-caption">
                Doctor, former Publish Health officer, former German Parliament member and Council of Europe member.<br/>
                Source: <a href="https://odysee.com/@PlanetLockdown:6/Wolfgang-Wodarg---Full-Interview-Inside---Planet-Lockdown-(5-mb-s):0">https://odysee.com/@PlanetLockdown:6/Wolfgang-Wodarg---Full-Interview-Inside---Planet-Lockdown-(5-mb-s):0</a>
              </figcaption>
            </figure>

            <h5 class="serif">Knut Wittkowski</h5>
            <figure class="w-100 figure">
              <iframe width="100%" height="360" src="https://www.bitchute.com/embed/JjyYvieFluU9/" allowfullscreen></iframe>
              <figcaption class="figure-caption">
                World Class Epidemiologist, last worked at Rockefeller University in NY as Head, Biostatistics, Epidemiology, and Research Design, Center for Clinical & Translational Science.<br/>
                Source: <a href="https://www.bitchute.com/video/JjyYvieFluU9/">https://www.bitchute.com/video/JjyYvieFluU9/</a>
              </figcaption>
            </figure>
            <figure class="w-100 figure">
              <iframe id="lbry-iframe" width="100%" height="360" src="https://odysee.com/$/embed/Knut-Wittkowski---Central-Park-Interview---Planet-Lockdown/b6eaac0dab345dfbe1178f0871a452abf2463bf2?r=ab2hFYHimgNJm2m6MoSERE5zwvUCB2Jv" allowfullscreen></iframe>
              <figcaption class="figure-caption">
                World Class Epidemiologist, last worked at Rockefeller University in NY as Head, Biostatistics, Epidemiology, and Research Design, Center for Clinical & Translational Science.<br/>
                Source: <a href="https://odysee.com/@PlanetLockdown:6/Knut-Wittkowski---Central-Park-Interview---Planet-Lockdown:b?src=open">https://odysee.com/@PlanetLockdown:6/Knut-Wittkowski---Central-Park-Interview---Planet-Lockdown:b?src=open</a>
              </figcaption>
            </figure>

            <h3 class="serif">Conclusion</h3>
            <p class="serif">
              Where does this leave us? Well, we're better off when we stand united. When forces encroach on our fundamental liberties and rights as human beings, we need to realize this has happened before throughout history. Take your time to educate yourself on matters such as revoluationary Russia, read some of George Orwell's work 1984 and Animal Farm, etc. such that you can spot tyranny and totalitarinism when it comes knocking on your frontdoor, disguised as a sweet, innocent and on face value very reasonable angel.<br/>
              Realize you're not alone. I hope, regardless of how gloomy the conversations laid out in this article may seem, that you nevertheless feel a sense of hope. A little note of hope, in an otherwise sea of despair, that there are really bright people out their fighting like hell (in a nonviolent way) to turn these seemingly disastrous decisions around.<br/>
              I will leave it for you to reach your own conclusion. Here's mine. I think the arguments from the people in this article are quiet convincing in leading me to believe that, we, in Denmark as well as the rest of the western world mishandled the spread of the Wuhan virus (Covid-19). We panicked, and in the spur of the moment grabbed any tool we had lying around, while forgetting the most important tool of all is deep analytical thinking. Don't rush to apply functions, before having done a thorough analysis. Even if this requires time and patience, when in the moment, feels like a luxury. Moreover that we are continuing to do so, while not letting credible people with important questions speak on established and traditional platforms. The latter stated which may lead to disasterous consequences for not just our society, but for any civilization, past and present.<br/>
              In addition I'm worried when I hear some of these experts in virology and neighboring fields, being themselves worried about the future and implications of the mass vacination programs. I sinceerly hope the WHO (World Health Organization) take concerns raised, from Geert Vanden Bossche and others, seriously. A painful thing to conclude is: only time will tell.</br>
              Finally, in a closing statement, it should give you pause for reflection, to know that I wrote, and researched the majority of this article, in an afternoon. So if you found this article an eye opener in some regard, I have a few closing questions for you, the reader. Why then, can't our established, mainstream media do the same? What have our once proud institutions become?
            </p>

            <h3 class="serif">Suggested Reading</h3>
            <p class="serif">I have the odacity to leave you with homework. I hated homework myself. However, I love to learn, to discover and to create. So here's a list for anyone interested in going beyond this article:</p>
            <div class="row g-0 bg-white border rounded position-relative">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="https://static6.suedkurier.de/storage/image/8/4/8/5/12895848_shift-966x593_1vPW8G_OCg9VG.jpg" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <h3 class="serif">References</h3>
            <p class="serif">
              Lorem ipsum dolor.
            </p>
          </div>
        </div>
      </main>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
    </body>
</html>