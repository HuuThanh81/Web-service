<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
    <title>Zodiac sign</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <!-- <?php
        $Date="";
        $Month="";
        $Image="";
        $Name="";
        $Time="";
        $About="";
        $flag = true;
        $oops = true;

        if(isset($_POST["date"]) && isset($_POST["month"])){
                $Date = $_POST["date"];
                $Month = $_POST["month"];
        }

        if(is_numeric($Date) && is_numeric($Month)){
  
            switch ($Month){
                case 1:
                    if($Date <= 20){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fcapricorn.jpg?alt=media&token=2704a538-5fa6-41bb-b887-183c26459662"; $Name = "CAPRICORNUS"; $Time = "(22/12 – 20/1)"; $About = "CAPRICORN IS THE SIGN OF TRADITION, PERSEVERANCE AND LIFE’S WINTRY TIMES.

                        <br/>
                        You show power when you’re:
                        <br/>
                        committed to life’s work that’s deeply rewarding
                        exerting personal authority
                        feeling respected in your field or community
                        working toward mastery of skills
                        patience with your steady progress
                        compassionate toward your own melancholic feelings
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        all work and no play
                        unable to connect to wonder or mystery
                        too focused on status, convention
                        ruthless in attaining what you want
                        self-denigrating when you don’t meet your own high standards";}
                    if($Date >= 21){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Faquarius.jpg?alt=media&token=27cf1683-55b6-4d93-be84-f58aa74ee045"; $Name = "AQUARIUS"; $Time = "(21/1 – 19/2)"; $About = "AQUARIUS IS THE SIGN OF FAR-SIGHTEDNESS AND HUMANE VALUES.

                        <br/>
                        You show power when you’re:
                        <br/>
                        experimenting and following your path wherever it leads
                        daring in your thinking
                        able to think for the group, and see the big picture
                        open to breakthroughs that take you to the next level
                        friendly toward everyone equally
                        not afraid to be considered strange
                        <br/>
                        You lose power when you’re:
                        <br/>
                        stuck in an unusual, but rigid matrix of thought
                        defiant in a way that’s self-destructive
                        unable to create any kind of stability";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                case 2:
                    if($Date <= 19){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Faquarius.jpg?alt=media&token=27cf1683-55b6-4d93-be84-f58aa74ee045"; $Name = "AQUARIUS"; $Time = "(21/1 – 19/2)"; $About = "AQUARIUS IS THE SIGN OF FAR-SIGHTEDNESS AND HUMANE VALUES.

                        <br/>
                        You show power when you’re:
                        <br/>
                        experimenting and following your path wherever it leads
                        daring in your thinking
                        able to think for the group, and see the big picture
                        open to breakthroughs that take you to the next level
                        friendly toward everyone equally
                        not afraid to be considered strange
                        <br/>
                        You lose power when you’re:
                        <br/>
                        stuck in an unusual, but rigid matrix of thought
                        defiant in a way that’s self-destructive
                        unable to create any kind of stability";}
                    if($Date >= 20){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fpisces.jpg?alt=media&token=78d64c64-b6e1-4a44-ad37-ec5f52ba10c6"; $Name = "PISCES"; $Time = "(20/2 – 20/3)"; $About = "PISCES IS THE SIGN OF HEIGHTENED SENSITIVITY AND IMAGINATION.

                        <br/>
                        You show power when you’re:
                        <br/>
                        able to release old wounds, and transform miraculously
                        using the power of your imagination
                        tuned into dreams and the spirit realms
                        grounded in a spiritual practice
                        honing your awareness of the subtle intuitive senses
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        absorbing too much of the energies around you
                        overwhelmed, without the time you need to process emotions
                        too involved in saving others, without tending to your own needs
                        losing your moral center because of the need to please
                        overexposed to stimulation, and unable to access the subtle senses";}
                    if($Date <1 || $Date >29){$flag = false;}
                break;
                case 3:
                    if($Date <= 20){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fpisces.jpg?alt=media&token=78d64c64-b6e1-4a44-ad37-ec5f52ba10c6"; $Name = "PISCES"; $Time = "(20/2 – 20/3)"; $About = "PISCES IS THE SIGN OF HEIGHTENED SENSITIVITY AND IMAGINATION.

                        <br/>
                        You show power when you’re:
                        <br/>
                        able to release old wounds, and transform miraculously
                        using the power of your imagination
                        tuned into dreams and the spirit realms
                        grounded in a spiritual practice
                        honing your awareness of the subtle intuitive senses
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        absorbing too much of the energies around you
                        overwhelmed, without the time you need to process emotions
                        too involved in saving others, without tending to your own needs
                        losing your moral center because of the need to please
                        overexposed to stimulation, and unable to access the subtle senses";}
                    if($Date >= 21){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Faries.jpg?alt=media&token=1b806aa4-7646-4a02-ac2c-b616feaf1a0f"; $Name = "ARIES"; $Time = "(21/3 – 20/4)"; $About = "ARIES, YOURS IS A SIGN OF BLASTING FORTH ACTION.
                        <br/>
                        You show power when you’re:
                        <br/>
                        forceful
                        truthfully You
                        provocative
                        active and progressive
                        aggressive or competitive
                        confrontational when necessary
                        honest
                        optimistic
                        confident
                        fun-loving
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        stagnant and without the right creative outlets
                        antagonistic toward others
                        unable to read emotional subtleties
                        pushy when a light touch will do
                        always fired up, without downtime
                        burnt-out and emotionally brittle
                        fighting meaningless battles.";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                case 4:
                    if($Date <= 20){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Faries.jpg?alt=media&token=1b806aa4-7646-4a02-ac2c-b616feaf1a0f"; $Name = "ARIES"; $Time = "(21/3 – 20/4)"; $About = "ARIES, YOURS IS A SIGN OF BLASTING FORTH ACTION.
                        <br/>
                        You show power when you’re:
                        <br/>
                        forceful
                        truthfully You
                        provocative
                        active and progressive
                        aggressive or competitive
                        confrontational when necessary
                        honest
                        optimistic
                        confident
                        fun-loving
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        stagnant and without the right creative outlets
                        antagonistic toward others
                        unable to read emotional subtleties
                        pushy when a light touch will do
                        always fired up, without downtime
                        burnt-out and emotionally brittle
                        fighting meaningless battles.";}
                    if($Date >= 21){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Ftaurus.jpg?alt=media&token=715d769a-ea21-493a-aa1f-4ba8031efeba"; $Name = "TAURUS"; $Time = "(21/4 – 21/5)"; $About = "TAURUS IS A SIGN OF THRIVING AND STABILITY.
                        <br/>
                        You show power when you’re:
                        <br/>
                        steady-natured and thorough
                        deeply engaged in a satisfying discipline
                        actively enjoying sensual pleasures
                        creating abundance from your own natural talents
                        strong of body, mind, and spirit
                        rooted in a sense of place
                        tending to life in all its stages of growth
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        stubbornly resistant to change
                        weighed down by your possessions
                        unable to jump on opportunities
                        overindulgent, lazy or dull-minded
                        too set in your ways";}
                    if($Date <1 || $Date >30){$flag = false;}
                break;
                case 5:
                    if($Date <= 21){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Ftaurus.jpg?alt=media&token=715d769a-ea21-493a-aa1f-4ba8031efeba"; $Name = "TAURUS"; $Time = "(21/4 – 21/5)"; $About = "TAURUS IS A SIGN OF THRIVING AND STABILITY.
                        <br/>
                        You show power when you’re:
                        <br/>
                        steady-natured and thorough
                        deeply engaged in a satisfying discipline
                        actively enjoying sensual pleasures
                        creating abundance from your own natural talents
                        strong of body, mind, and spirit
                        rooted in a sense of place
                        tending to life in all its stages of growth
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        stubbornly resistant to change
                        weighed down by your possessions
                        unable to jump on opportunities
                        overindulgent, lazy or dull-minded
                        too set in your ways";}
                    if($Date >= 22){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fgemini.jpg?alt=media&token=47042b9a-06f8-41ad-8a2d-bc8b5abfbee7"; $Name = "GEMINI"; $Time = "(22/5 – 21/6)"; $About = "GEMINI IS THE SIGN OF FLUENCY AND NIMBLE CHANGE.
                        <br/>
                        You show power when you’re:
                        <br/>
                        mentally flexible
                        enlightening the scene with your intelligent humor
                        engaged in the dynamic whirl of life
                        learning something new
                        following a fascination
                        satisfying your curiosity
                        exploring your many sides
                        acknowledging your need for rest, along with motion
                        with stimulating friends or colleagues
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        too tightly wound
                        repeating things you know you shouldn’t
                        putting negativity into the collective stream
                        unable to sustain interest long enough to bring an idea to fruition
                        giving in to cynicism
                        not getting enough “Me” time to center yourself
                        not allowing for silence to hear your own thoughts";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                case 6:
                    if($Date <= 21){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fgemini.jpg?alt=media&token=47042b9a-06f8-41ad-8a2d-bc8b5abfbee7"; $Name = "GEMINI"; $Time = "(22/5 – 21/6)"; $About = "GEMINI IS THE SIGN OF FLUENCY AND NIMBLE CHANGE.
                        <br/>
                        You show power when you’re:
                        <br/>
                        mentally flexible
                        enlightening the scene with your intelligent humor
                        engaged in the dynamic whirl of life
                        learning something new
                        following a fascination
                        satisfying your curiosity
                        exploring your many sides
                        acknowledging your need for rest, along with motion
                        with stimulating friends or colleagues
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        too tightly wound
                        repeating things you know you shouldn’t
                        putting negativity into the collective stream
                        unable to sustain interest long enough to bring an idea to fruition
                        giving in to cynicism
                        not getting enough “Me” time to center yourself
                        not allowing for silence to hear your own thoughts";}
                    if($Date >= 22){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fcancer.jpg?alt=media&token=217dee56-85d4-4cff-a6b6-2dd02483f909"; $Name = "CANCER"; $Time = "(22/6 – 23/7)"; $About = "CANCER IS THE SIGN OF EMOTIONS AND THE HOME.
                        <br/>
                        You show power when you’re:
                        <br/>
                        protecting the vulnerable
                        reading the emotional reality of any situation
                        drawing from your imagination
                        able to be yourself in a safe, familiar setting
                        create a homey atmosphere wherever you are
                        intuiting what’s going on, and acting on that information
                        being the keeper of memories, impressions, intimate stories
                        reclusive and fearful of being hurt
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        always on the defense
                        wounded and lashing out
                        only loving toward those in your clan (family, race, nation)
                        unable to see beyond your own problems";}
                    if($Date <1 || $Date >30){$flag = false;}
                break;
                case 7:
                    if($Date <= 23){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fcancer.jpg?alt=media&token=217dee56-85d4-4cff-a6b6-2dd02483f909"; $Name = "CANCER"; $Time = "(22/6 – 23/7)"; $About = "CANCER IS THE SIGN OF EMOTIONS AND THE HOME.
                        <br/>
                        You show power when you’re:
                        <br/>
                        protecting the vulnerable
                        reading the emotional reality of any situation
                        drawing from your imagination
                        able to be yourself in a safe, familiar setting
                        create a homey atmosphere wherever you are
                        intuiting what’s going on, and acting on that information
                        being the keeper of memories, impressions, intimate stories
                        reclusive and fearful of being hurt
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        always on the defense
                        wounded and lashing out
                        only loving toward those in your clan (family, race, nation)
                        unable to see beyond your own problems";}
                    if($Date >= 24){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fleo.jpg?alt=media&token=b0f1b126-f027-40fa-9330-0c45f756cfb9"; $Name = "LEO"; $Time = "(24/7 – 23/8)"; $About = "LEO IS THE SIGN OF EXUBERANT CREATIVITY.
                        <br/>

                        You show power when you’re:
                        <br/>
                        larger-than-life with personality
                        dignified and full of self-respect
                        big-hearted, generous, a loyal friend
                        confidently leading and encouraging others
                        expressing the joy of being alive through all kinds of interests just-for-the-fun-of-it
                        matching the exuberance of children
                        exploring the drama of life through the arts, music, theater, etc
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        full of empty boasts
                        constantly in need of attention
                        demanding of special treatment
                        inconsiderate toward other people’s time, efforts, gifts
                        resentful from feeling disrespected
                        taking life too seriously";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                case 8:
                    if($Date <= 23){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fleo.jpg?alt=media&token=b0f1b126-f027-40fa-9330-0c45f756cfb9"; $Name = "LEO"; $Time = "(24/7 – 23/8)"; $About = "LEO IS THE SIGN OF EXUBERANT CREATIVITY.
                        <br/>

                        You show power when you’re:
                        <br/>
                        larger-than-life with personality
                        dignified and full of self-respect
                        big-hearted, generous, a loyal friend
                        confidently leading and encouraging others
                        expressing the joy of being alive through all kinds of interests just-for-the-fun-of-it
                        matching the exuberance of children
                        exploring the drama of life through the arts, music, theater, etc
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        full of empty boasts
                        constantly in need of attention
                        demanding of special treatment
                        inconsiderate toward other people’s time, efforts, gifts
                        resentful from feeling disrespected
                        taking life too seriously";}
                    if($Date >= 24){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fvirgo.jpg?alt=media&token=4eb72624-5824-4dc2-b3cf-a3904bfa6ccb"; $Name = "VIRGO"; $Time = "(24/8 – 23/9)"; $About = "VIRGO IS THE SIGN OF DEVOTION, HEALTHY LIVING AND SELF-IMPROVEMENT.
                        <br/>

                        You show power when you’re:
                        <br/>
                        productive and working toward tangible goals
                        tuned into your body and its ability to heal, transform
                        being of service, in a way that enriching you also
                        analyzing systems and processes
                        offering your discerning perspective
                        sharing your gifts as a healer
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        too humble and don’t take credit for your accomplishments
                        always dissatisfied with where you are
                        paralyzed from self-criticism
                        spinning out on the little things that can go wrong
                        worry over all there is to do
                        overly fixated on your aches and pains";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                case 9:
                    if($Date <= 23){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fvirgo.jpg?alt=media&token=4eb72624-5824-4dc2-b3cf-a3904bfa6ccb"; $Name = "VIRGO"; $Time = "(24/8 – 23/9)"; $About = "VIRGO IS THE SIGN OF DEVOTION, HEALTHY LIVING AND SELF-IMPROVEMENT.
                        <br/>

                        You show power when you’re:
                        <br/>
                        productive and working toward tangible goals
                        tuned into your body and its ability to heal, transform
                        being of service, in a way that enriching you also
                        analyzing systems and processes
                        offering your discerning perspective
                        sharing your gifts as a healer
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        too humble and don’t take credit for your accomplishments
                        always dissatisfied with where you are
                        paralyzed from self-criticism
                        spinning out on the little things that can go wrong
                        worry over all there is to do
                        overly fixated on your aches and pains";}
                    if($Date >= 24){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Flibra.jpg?alt=media&token=0ad2e154-7dda-4969-864b-6736bdcded0b"; $Name = "LIBRA"; $Time = "(24/9 – 23/10)"; $About = "LIBRA IS THE SIGN OF BEAUTY AND ART, AND ROMANTIC LOVE.

                        <br/>
                        You show power when you’re:
                        <br/>
                        a harmonizing influence
                        playing off another’s energies in a masterful way
                        modeling fairness
                        thriving in relationship
                        creating beauty
                        being stylish, graceful, elegant
                        advocating justice
                        restoring balance
                        being a peacemaker
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        being who you think another needs/wants you to be
                        fearful of direct action
                        avoiding a necessary confrontation
                        unwilling to see the dark, along with the light
                        full of great ideas, that never get executed";}
                    if($Date <1 || $Date >30){$flag = false;}
                break;
                case 10:
                    if($Date <= 23){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Flibra.jpg?alt=media&token=0ad2e154-7dda-4969-864b-6736bdcded0b"; $Name = "LIBRA"; $Time = "(24/9 – 23/10)"; $About = "LIBRA IS THE SIGN OF BEAUTY AND ART, AND ROMANTIC LOVE.

                        <br/>
                        You show power when you’re:
                        <br/>
                        a harmonizing influence
                        playing off another’s energies in a masterful way
                        modeling fairness
                        thriving in relationship
                        creating beauty
                        being stylish, graceful, elegant
                        advocating justice
                        restoring balance
                        being a peacemaker
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        being who you think another needs/wants you to be
                        fearful of direct action
                        avoiding a necessary confrontation
                        unwilling to see the dark, along with the light
                        full of great ideas, that never get executed";}
                    if($Date >= 24){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fscorpio.jpg?alt=media&token=a9a6a280-5e9e-4757-8e9f-a3ac1960e766"; $Name = "SCORPIO"; $Time = "(24/10 – 22/11)"; $About = "SCORPIO IS THE SIGN OF SEXUALITY, THE SHADOWS, AND GREAT FEATS.
                        <br/>

                        You show power when you’re:
                        <br/>
                        exploring the rich, shadowy terrain of the psyche
                        administering strong medicine in a way that has integrity
                        engaged in life’s work that’s totally absorbing
                        aware of your power to heal and transform
                        patiently strategic when waiting for the right time
                        extending yourself to go into someone else’s darkness, for healing
                        soulful
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        heavy with unresolved emotions and dramas
                        stuck in the death part of the cycle with a fixation on destruction
                        too fearful of losing control that you don’t express yourself
                        manipulative or psychically invasive";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                case 11:
                    if($Date <= 22){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fscorpio.jpg?alt=media&token=a9a6a280-5e9e-4757-8e9f-a3ac1960e766"; $Name = "SCORPIO"; $Time = "(24/10 – 22/11)"; $About = "SCORPIO IS THE SIGN OF SEXUALITY, THE SHADOWS, AND GREAT FEATS.
                        <br/>

                        You show power when you’re:
                        <br/>
                        exploring the rich, shadowy terrain of the psyche
                        administering strong medicine in a way that has integrity
                        engaged in life’s work that’s totally absorbing
                        aware of your power to heal and transform
                        patiently strategic when waiting for the right time
                        extending yourself to go into someone else’s darkness, for healing
                        soulful
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        heavy with unresolved emotions and dramas
                        stuck in the death part of the cycle with a fixation on destruction
                        too fearful of losing control that you don’t express yourself
                        manipulative or psychically invasive";}
                    if($Date >= 23){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fsagittarius.jpg?alt=media&token=e77bc30b-beac-4c2e-8221-f63876473410"; $Name = "SAGITTARIUS"; $Time = "(23/11 – 21/12)"; $About = "SAGITTARIUS IS THE SIGN OF KNOWLEDGE-SEEKING AND WANDERING FAR AFIELD.

                        <br/>
                        You show power when you’re:
                        <br/>
                        exploring new fields of study that fascinate you
                        planning things to look forward to
                        moving in and out of friend circles
                        sharing your optimistic outlook
                        joyful and friendly
                        testing your personal limits
                        experimenting at your creative edge
                        weaving in many ideas across disciplines
                        sharing your philosophy
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        bogged down in work that’s meaningless for you
                        alienating others by being intolerant";}
                    if($Date <1 || $Date >30){$flag = false;}
                break;
                case 12:
                    if($Date <= 21){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fsagittarius.jpg?alt=media&token=e77bc30b-beac-4c2e-8221-f63876473410"; $Name = "SAGITTARIUS"; $Time = "(23/11 – 21/12)"; $About = "SAGITTARIUS IS THE SIGN OF KNOWLEDGE-SEEKING AND WANDERING FAR AFIELD.

                        <br/>
                        You show power when you’re:
                        <br/>
                        exploring new fields of study that fascinate you
                        planning things to look forward to
                        moving in and out of friend circles
                        sharing your optimistic outlook
                        joyful and friendly
                        testing your personal limits
                        experimenting at your creative edge
                        weaving in many ideas across disciplines
                        sharing your philosophy
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        bogged down in work that’s meaningless for you
                        alienating others by being intolerant";}
                    if($Date >= 22){$Image = "https://firebasestorage.googleapis.com/v0/b/blog-7d3a3.appspot.com/o/zodiac%2Fcapricorn.jpg?alt=media&token=2704a538-5fa6-41bb-b887-183c26459662"; $Name = "CAPRICORNUS"; $Time = "(22/12 – 20/1)"; $About = "CAPRICORN IS THE SIGN OF TRADITION, PERSEVERANCE AND LIFE’S WINTRY TIMES.

                        <br/>
                        You show power when you’re:
                        <br/>
                        committed to life’s work that’s deeply rewarding
                        exerting personal authority
                        feeling respected in your field or community
                        working toward mastery of skills
                        patience with your steady progress
                        compassionate toward your own melancholic feelings
                        <br/>
                        You feel powerless when you’re:
                        <br/>
                        all work and no play
                        unable to connect to wonder or mystery
                        too focused on status, convention
                        ruthless in attaining what you want
                        self-denigrating when you don’t meet your own high standards";}
                    if($Date <1 || $Date >31){$flag = false;}
                break;
                default:
                $flag = false;
            break;
            }           
        }
    ?> -->

    <form action="#" method="POST">
        <label for="signin">What is your zodiac ?</label>
        <div id="wrapper">
          <div id="arrow"></div>
          <input placeholder="Date" type="number" name="date" value="<?php echo $Date;?>"></input>
          <input placeholder="Month" type="number" name="month" value="<?php echo $Month;?>"></input>
        </div>
        <button type="submit" value="Searching">
          <span>
            Submit
          </span>
        </button>
      </form>

      <!-- <?php
        if($flag == true){
            $result = ' <div class="about">
            <div class="col-left"><img src= '. $Image .'" alt="'. $Name .'"/></div> 
            <div class="col-right">
            <div class="cont">
            <p>'. $Name . ''."  ".'' . $Time .'</p>
            <p id="pp">'. $About .'</p>
            </div>
            </div>
            </div>';
            echo $result;
        }else{
            $result = ' <div class="about"><h1>"Oops! Find not Found"</h1></div>';
            echo  $result;
        }    
        ?> -->

        <div class="about"><h1>"Oops! Find not Found"</h1></div>
      <div id="hint">Click on the tabs</div>
</body>
</html>



