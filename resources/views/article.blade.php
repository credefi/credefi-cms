@extends ('layouts.master')
@desktop
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="/storage/settings/March2023/vADk48XA3Z52NCN2AYBb.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="../css/article.css" />
    <link rel="stylesheet" type="text/css" href="../css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="../css/globals.css" />
  </head>
  <body style="margin: 0; background: #f6f5f8">
    <input type="hidden" id="anPageName" name="page" value="article" />
    <div class="container-center-horizontal">
      <div class="article screen">
        <div class="flex-row">
          <img class="group-48098950" src="../img/group-48098980@2x.png" alt="Group 48098950" />
          <div class="navbar mulish-normal-woodsmoke-16px">
            <div class="navbar-link">About</div>
            <div class="navbar-link">Product</div>
            <div class="navbar-link">Features</div>
            <div class="navbar-link">Team</div>
            <div class="navbar-link">Advisors</div>
            <div class="navbar-link"><a href="articles">News</a></div>
          </div>
          <div class="frame-48098645"><div class="login valign-text-middle mulish-bold-blueberry-16px">Login</div></div>
          <div class="frame-48098646">
            <div class="registration valign-text-middle mulish-bold-black-haze-16px">Registration</div>
          </div>
        </div>
        <div class="overlap-group5">
          <div class="flex-col">
            <div class="navigation">
              <div class="frame-41001">
                <div class="main mulish-medium-cod-gray-14px">Main</div>
                <img class="chevron-down" src="../img/chevron-down.svg" alt="chevron-down" />
                <div class="articles mulish-medium-cod-gray-14px">Articles</div>
                <img class="chevron-down" src="../img/chevron-down.svg" alt="chevron-down" />
                <p class="article-title mulish-normal-cod-gray-14px">
                  {{ $article->title }}
                </p>
              </div>
            </div>
            <div class="title-infoimation title-1">
              <p class="bitcoin-has-fallen-b urbanist-medium-cod-gray-42px">
                {{ $article->title }}
              </p>
              <div class="navbar-1">
                <div class="navbar-link-date mulish-normal-licorice-14px">{{ $article->created_at->format('Y-m-d')}}</div>
                <div class="navbar-link-text valign-text-middle poppins-normal-cod-gray-14px">|</div>
                <div class="navbar-link-by-nino-abdaladze mulish-bold-cod-gray-14px">by Nino Abdaladze</div>
                <div class="navbar-link-text valign-text-middle poppins-normal-cod-gray-14px">|</div>
                <div class="frame-4">
                  <img class="icon-eye" src="../img/fi-eye.svg" alt="icon-eye" />
                  <div class="number number-2 mulish-medium-cod-gray-14px">{{ $article->reads}}</div>
                </div>
              </div>
            </div>
            <img class="line-363" src="../img/line-363.svg" alt="Line 363" />
            <div class="frame-41030">
              <div class="frame-4-1">
                <p class="tether-forged-docume urbanist-medium-cod-gray-42px">
                {{ $article->short_text }}
                </p>
              </div>
              <div class="frame-4-1">
                <img class="rectangle-1509" src="/storage/{{ $article->image}}" />
                <div class="source-ap-photo-evan-vucci valign-text-middle mulish-normal-white-16px-2">
                  <span
                    ><span class="mulish-normal-cod-gray-16px">Source: </span
                    ><span class="span1 mulish-normal-cod-gray-16px-2">AP Photo/Evan Vucci</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="frame-410">
              <div class="frame-4-1">
              {!! $article->text !!}
              </div>
            </div>

            <div class="group-41748">
              <div class="read-also valign-text-middle urbanist-normal-cod-gray-16px-2">Read also:</div>
              <p class="immortal-jellyfish-g-1 valign-text-middle immortal-jellyfish-g-3 urbanist-normal-cod-gray-16px">
                Immortal jellyfish genes identified that may explain their long lives
              </p>
            </div>
            <img class="line-367" src="../img/line-367.svg" alt="Line 367" />
            <div class="flex-row-1">
              <div class="get-social valign-text-middle urbanist-normal-cod-gray-16px-2">Get Social:</div>
              <img class="frame-41080" src="../img/frame-41080.png" alt="Frame 41080" />
              <img class="frame-4107" src="../img/frame-41077.png" alt="Frame 41077" />
              <img class="frame-4107" src="../img/frame-41078.png" alt="Frame 41078" />
              <img class="frame-4107" src="../img/frame-41079.png" alt="Frame 41079" />
            </div>
          </div>
          <img class="divider" src="../img/divider.svg" alt="Divider" />
          <div class="flex-col-1">
            <div class="group-41748-2 group-41748-3">
              <div class="frame-410-1 frame-410-3">
                <img class="arrow-2 arrow" src="../img/arrow-2.png" alt="Arrow 2" />
                <div class="x-article valign-text-middle mulish-normal-cod-gray-18px">Prev. article</div>
              </div>
              <div class="frame-410-1 frame-410-3">
                <div class="x-article valign-text-middle mulish-normal-cod-gray-18px">Next article</div>
                <img class="arrow-3 arrow" src="../img/arrow-3.png" alt="Arrow 3" />
              </div>
            </div>
            <div class="popular-article valign-text-middle">Popular article</div>
            <div class="frame-41043">
              <div class="frame-410-2 frame-410-3">
                <div class="mon-aug-12-2022 mulish-bold-white-14px">
                  <span class="mulish-bold-cod-gray-14px">Mon, </span
                  ><span class="mulish-bold-cod-gray-14px-2">Aug 12, 2022</span>
                </div>
                <p
                  class="immortal-jellyfish-g-2 valign-text-middle immortal-jellyfish-g-3 urbanist-medium-cod-gray-16px"
                >
                  Binance is rapidly losing assets
                </p>
              </div>
              <img class="line-3" src="../img/line-367-1.svg" alt="Line 367" />
              <div class="frame-410-2 frame-410-3">
                <div class="mon-aug-12-2022 mulish-bold-white-14px">
                  <span class="mulish-bold-cod-gray-14px">Tue,</span
                  ><span class="mulish-bold-cod-gray-14px-2"> Aug 09, 2022</span>
                </div>
                <p class="immortal-jellyfish-g valign-text-middle urbanist-medium-cod-gray-16px">
                  Buterin&#39;s forecast for digital payments: crypto market news
                </p>
              </div>
              <img class="line-3" src="../img/line-367-1.svg" alt="Line 368" />
              <div class="frame-410-2 frame-410-3">
                <div class="mon-aug-12-2022 mulish-bold-white-14px">
                  <span class="mulish-bold-cod-gray-14px">Wed,</span
                  ><span class="mulish-bold-cod-gray-14px-2"> Aug 04, 2022</span>
                </div>
                <p class="immortal-jellyfish-g valign-text-middle urbanist-medium-cod-gray-16px">
                  Dogecoin will see a jump in growth because of Musk&#39;s participation in talk shows
                </p>
              </div>
              <img class="line-3" src="../img/line-367-1.svg" alt="Line 369" />
              <div class="frame-410-2 frame-410-3">
                <div class="mon-aug-12-2022 mulish-bold-white-14px">
                  <span class="mulish-bold-cod-gray-14px">Thu,</span
                  ><span class="mulish-bold-cod-gray-14px-2"> Aug 04, 2022</span>
                </div>
                <p class="immortal-jellyfish-g valign-text-middle urbanist-medium-cod-gray-16px">
                  Bitcoin collapsed again after the U.S. Federal Reserve&#39;s decision
                </p>
              </div>
              <img class="line-3" src="../img/line-367-1.svg" alt="Line 370" />
              <div class="frame-410-2 frame-410-3">
                <div class="mon-aug-12-2022 mulish-bold-white-14px">
                  <span class="mulish-bold-cod-gray-14px">Fri,</span
                  ><span class="mulish-bold-cod-gray-14px-2"> Aug 01, 2022</span>
                </div>
                <p class="immortal-jellyfish-g valign-text-middle urbanist-medium-cod-gray-16px">
                  &#34;We don&#39;t care&#34;: Binance CEO responds to Roubini&#39;s &#34;very harsh&#34; criticism
                </p>
              </div>
            </div>
          </div>
          <div class="overlap-group4">
            <img class="line-452" src="../img/line-453.svg" alt="Line 452" />
            <div class="group-48098951">
              <img class="line-452-1" src="../img/line-452.svg" alt="Line 452" />
              <img class="line-453" src="../img/line-453-1.svg" alt="Line 453" />
            </div>
          </div>
        </div>
        <img class="line-366" src="../img/line-366.svg" alt="Line 366" />
        <div class="title title-1">
          <div class="other-articles valign-text-middle urbanist-medium-cod-gray-32px">Other articles</div>
        </div>
        <div class="group-48098979">
          <div class="overlap-group">
            <img class="rectangle-4831" src="../img/rectangle-4831-1@2x.png" alt="Rectangle 4831" />
            <div class="frame-4-1">
              <p class="space-for-a-headline urbanist-bold-cod-gray-20px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-4809883">
                <div class="frame-4">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-3 urbanist-normal-woodsmoke-16px">4 min</div>
                </div>
                <div class="frame-4">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-3 urbanist-normal-woodsmoke-16px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-16px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-48098644">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
          <div class="overlap-group">
            <img class="rectangle-4831-1" src="../img/rectangle-4831-2@2x.png" alt="Rectangle 4831" />
            <div class="frame-4-1">
              <p class="space-for-a-headline urbanist-bold-woodsmoke-20px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-4809883">
                <div class="frame-4">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-3 urbanist-normal-woodsmoke-16px">4 min</div>
                </div>
                <div class="frame-4">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-3 urbanist-normal-woodsmoke-16px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-16px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-48098644">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
          <div class="overlap-group2">
            <img class="rectangle-4831-2" src="../img/rectangle-4831-20.svg" alt="Rectangle 4831" />
            <div class="frame-4-1">
              <p class="space-for-a-headline-1 urbanist-bold-woodsmoke-20px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-4809883">
                <div class="frame-4">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-3 urbanist-normal-woodsmoke-16px">4 min</div>
                </div>
                <div class="frame-4">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-3 urbanist-normal-woodsmoke-16px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the-1 mulish-normal-cod-gray-16px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-48098644-1">
              <div class="read-now-1 valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
        </div>
        <div class="group-48098951-1">
          <div class="group-48098864">
            <div class="news-counter news-1 mulish-normal-cod-gray-18px">NEWS COUNTER</div>
            <h1 class="text-9 text-1 urbanist-medium-cod-gray-48px">3/9</h1>
          </div>
          <div class="button">
            <div class="frame-410-1 frame-410-3">
              <div class="see-all valign-text-middle mulish-bold-white-16px">See all</div>
            </div>
          </div>
          <div class="group-48098866">
            <div class="group-48098823"><img class="polygon-1" src="../img/polygon-1-7.svg" alt="Polygon 1" /></div>
            <div class="group-48098822"><img class="polygon-1-1" src="../img/polygon-1-6.svg" alt="Polygon 1" /></div>
          </div>
        </div>
        <footer class="footer">
          <div class="overlap-group3">
            <div class="flex-row-2">
              <div class="x-container">
                <div class="frame-48098796">
                  <div class="group-48098750">
                    <div class="group-48098751">
                      <div class="overlap-group-2">
                        <img class="ellipse-4" src="../img/ellipse-4.svg" alt="Ellipse 4" />
                        <div class="number-1 number-2 mulish-bold-cod-gray-18px">04</div>
                      </div>
                    </div>
                  </div>
                  <div class="the-end mulish-bold-cod-gray-18px">The end</div>
                </div>
                <div class="group-48098993">
                  <img class="frame-48097302" src="../img/frame-48097302.svg" alt="Frame 48097302" />
                  <div class="design-by-demyanchukart urbanist-normal-white-16px">
                    <span class="urbanist-normal-cod-gray-16px-2">Design by</span
                    ><span class="span1-1 urbanist-bold-black-18px">&nbsp;</span
                    ><span class="urbanist-bold-black-16px">Demyanchukart</span>
                  </div>
                </div>
              </div>
              <div class="frame-48099058">
                <img class="group-48099106" src="../img/group-48099106@2x.png" alt="Group 48099106" />
                <p class="this-should-leave-ro urbanist-medium-cod-gray-42px">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This should leave room for a short slogan
                </p>
                <img class="vector-148" src="../img/vector-148-1.svg" alt="Vector 148" />
                <div class="frame-48099060">
                  <div class="social-media mulish-bold-cod-gray-18px">Social media</div>
                  <div class="frame-48098834 mulish-normal-cod-gray-18px">
                    <div class="group-4809896">
                      <div class="about">About</div>
                      <div class="team">Team</div>
                    </div>
                    <img class="line-51" src="../img/line-511.svg" alt="Line 511" />
                    <div class="group-4809896">
                      <div class="product">Product</div>
                      <div class="advisors">Advisors</div>
                    </div>
                    <img class="line-51" src="../img/line-511.svg" alt="Line 512" />
                    <div class="group-4809896 mulish-normal-cod-gray-18px">
                      <div class="features">Features</div>
                      <div class="news news-1">News</div>
                    </div>
                  </div>
                </div>
                <div class="frame-48099061">
                  <div class="social-media-1 mulish-bold-cod-gray-18px">Social media</div>
                  <div class="group-48098960">
                    <div class="group-container">
                      <div class="group-48098">
                        <div class="overlap-group-1">
                          <img class="icon-paper_plane" src="../img/telegram--1--1-1.svg" alt="icon-paper_plane" />
                          <div class="ellipse-134"></div>
                        </div>
                      </div>
                      <div class="group-48098957">
                        <div class="frame-480988">
                          <img class="icon" src="../img/facebook-app-symbol-1.svg" alt="icon-facebook" />
                        </div>
                      </div>
                      <div class="overlap-group-1">
                        <div class="ellipse-134-1"></div>
                        <img class="icon-twitter" src="../img/twitter-1-2.svg" alt="icon-twitter" />
                      </div>
                      <div class="group-48098">
                        <div class="frame-480988">
                          <img class="icon" src="../img/linked-in-logo-of-two-letters-1-2.svg" alt="icon-linkedin" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-48099063">
                  <div class="start-following-our-news mulish-bold-cod-gray-18px">Start following our news</div>
                  <div class="frame-48099062">
                    <div class="enter-your-email mulish-normal-cod-gray-16px-2">Enter your email</div>
                    <div class="group-48099107">
                      <div class="overlap-group-3">
                        <div class="subscribe valign-text-middle mulish-bold-white-16px">Subscribe</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="group-48099109 mulish-normal-cod-gray-14px-2">
              <p class="copyright">© Credefi All rights reserved</p>
              <div class="privacy-policy">Privacy Policy</div>
              <div class="terms-conditions">Terms &amp; Conditions</div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>


@endsection

@enddesktop

@mobile
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="../css/articlem.css" />
    <link rel="stylesheet" type="text/css" href="../css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="../css/globals.css" />
  </head>
  <body style="margin: 0; background: #f6f5f8">
    <input type="hidden" id="anPageName" name="page" value="articlem" />
    <div class="container-center-horizontal">
      <div class="articlem screen">
        <div class="frame-48097899">
          <div class="group-container">
            <img class="group-4809895" src="../img/group-48098950@2x.png" alt="Group 48098950" />
            <div class="group-container-1">
              <div class="group-4809">
                <div class="ellipse-653"></div>
                <div class="ellipse-653"></div>
                <div class="ellipse-653"></div>
              </div>
              <div class="group-4809">
                <div class="ellipse-653"></div>
                <div class="ellipse-653"></div>
                <div class="ellipse-653"></div>
              </div>
              <div class="group-4809">
                <div class="ellipse-653"></div>
                <div class="ellipse-653"></div>
                <div class="ellipse-653"></div>
              </div>
            </div>
          </div>
          <div class="line-container">
            <img class="line-204" src="../img/line-204.svg" alt="Line 204" />
            <img class="line-519" src="../img/line-519.svg" alt="Line 519" />
          </div>
        </div>
        <div class="navigation">
          <div class="frame-41001">
            <div class="main mulish-medium-cod-gray-14px">Main</div>
            <img class="chevron-down" src="../img/chevron-down.svg" alt="chevron-down" />
            <div class="articles mulish-medium-cod-gray-14px">Articles</div>
            <img class="chevron-down" src="../img/chevron-down.svg" alt="chevron-down" />
            <div class="bitcoin-has-fa mulish-normal-cod-gray-14px">Bitcoin has fa...</div>
          </div>
        </div>
        <div class="articlem-item">
          <p class="bitcoin-has-fallen-b urbanist-medium-cod-gray-24px">
            Bitcoin has fallen below $7,000 to its lowest level in three weeks
          </p>
          <div class="navbar">
            <div class="navbar-link-date mulish-normal-licorice-14px">03.03.2023</div>
            <div class="navbar-link-text valign-text-middle poppins-normal-cod-gray-14px">|</div>
            <div class="navbar-link-by-nino-abdaladze mulish-bold-cod-gray-14px">by Nino Abdaladze</div>
            <div class="navbar-link-text valign-text-middle poppins-normal-cod-gray-14px">|</div>
            <div class="frame-4">
              <img class="icon-eye" src="../img/fi-eye.svg" alt="icon-eye" />
              <div class="number number-2 mulish-medium-cod-gray-14px">1300</div>
            </div>
          </div>
        </div>
        <img class="line-45" src="../img/line-453-1.svg" alt="Line 453" />
        <div class="articlem-item">
          <p class="tether-forged-docume urbanist-medium-cod-gray-24px">
            Tether forged documents to open illegal bank accounts
          </p>
          <p class="investingcom valign-text-middle mulish-normal-white-14px-2">
            <span
              ><span class="mulish-normal-cod-gray-14px"
                >Investing.com - According to the Wall Street Journal, in 2018, cryptocurrency giant Tether forged key
                documents and set up s</span
              ><span class="mulish-normal-cod-gray-14px-2">hell companies to open accounts at several banks</span
              ><span class="mulish-normal-cod-gray-14px"
                >, one of which was then used by a terrorist group to launder money, writes Business Insider</span
              >
            </span>
          </p>
        </div>
        <img class="rectangle-49" src="../img/rectangle-4928@2x.png" alt="Rectangle 4928" />
        <div class="source-ap-photo-evan-vucci valign-text-middle mulish-normal-white-14px-2">
          <span
            ><span class="mulish-normal-cod-gray-14px">Source: </span
            ><span class="span1 mulish-normal-cod-gray-14px-2">AP Photo/Evan Vucci</span>
          </span>
        </div>
        <div class="frame-41014">
          <p class="kraken-exchange-plan">Kraken Exchange plans to launch its own bank soon</p>
          <p class="investingcom valign-text-middle mulish-normal-white-14px-2">
            <span
              ><span class="mulish-normal-cod-gray-14px"
                >Investing.com - Cryptocurrency exchange Kraken has revealed plans to launch its own bank soon. The
                project is moving t</span
              ><span class="mulish-normal-cod-gray-14px-2">oward a launch soon, Kraken Genera</span
              ><span class="mulish-normal-cod-gray-14px">l Counsel Marco Santori told The Block.</span>
            </span>
          </p>
        </div>
        <img class="rectangle-49" src="../img/rectangle-4929@2x.png" alt="Rectangle 4929" />
        <img class="rectangle-49" src="../img/rectangle-4930@2x.png" alt="Rectangle 4930" />
        <div class="frame-48099050">
          <div class="frame-410">
            <p class="binance-has-disassoc valign-text-middle">Binance has disassociated itself from the BUSD token</p>
            <p class="paxos-and-binance-ha valign-text-middle mulish-normal-white-14px-2">
              <span
                ><span class="mulish-normal-cod-gray-14px">Paxos and Binance have joined </span
                ><span class="mulish-normal-cod-gray-14px-2">forces to launch BUSD in 2019 with</span
                ><span class="mulish-normal-cod-gray-14px">
                  a fixed value of $1. It is the seventh largest cryptocurrency by market capitalization.</span
                >
              </span>
            </p>
          </div>
          <div class="group-48099054">
            <div class="group-41741">
              <img class="icon-play" src="../img/play-button-arrowhead-1.svg" alt="icon-play" />
            </div>
          </div>
        </div>
        <div class="frame-48098647">
          <p class="coinbase-launched-a valign-text-middle">
            Coinbase launched a massive campaign in support of cryptocurrencies in the U.S.
          </p>
          <p class="the-crypto435-campa valign-text-middle mulish-normal-white-12px">
            <span
              ><span class="mulish-normal-cod-gray-12px"
                >The #Crypto435 campaign is designed, she said, to &#34;expand the cryptocurrency advocacy community and
                share tools and resources so that cryptocurrency users can have their voice heard in </span
              ><span class="mulish-normal-cod-gray-12px-2">all 435 congressional districts.</span
              ><span class="mulish-normal-cod-gray-12px"
                >&#34; She also provided voters with a link to register for information about local politicians&#39;
                attitudes toward cryptocurrencies.</span
              >
            </span>
          </p>
        </div>
        <div class="group-48098980">
          <div class="read-also valign-text-middle urbanist-normal-cod-gray-16px-2">Read also:</div>
          <p class="immortal-jellyfish-g valign-text-middle urbanist-normal-cod-gray-16px">
            Immortal jellyfish genes identified that may explain their long lives
          </p>
        </div>
        <div class="frame-48098647">
          <div class="bitcoin-cryptocurrency-rose-10 valign-text-middle urbanist-semi-bold-cod-gray-12px">
            Bitcoin cryptocurrency rose 10%
          </div>
          <p class="the-cryptocurrency-b valign-text-middle the-cryptocurrency mulish-normal-white-12px">
            <span
              ><span class="mulish-normal-cod-gray-12px">The cryptocurrency Bitcoin was trading</span
              ><span class="mulish-normal-cod-gray-12px-2"> at $24,422.2 at 03:11 (00:11 GMT)</span
              ><span class="mulish-normal-cod-gray-12px">
                on the Investing.com Index on Thursday, a change of 10.02% during the day. It was the
                cryptocurrency&#39;s steepest daily rise since Nov. 10, 2022.</span
              >
            </span>
          </p>
        </div>
        <div class="frame-48098647-1">
          <p class="place-for-the-transfer-list valign-text-middle urbanist-semi-bold-cod-gray-12px">
            Place for the transfer list
          </p>
          <div class="frame-41026">
            <p class="x1-raath-also-report valign-text-middle mulish-normal-cod-gray-12px">
              1. Raath also reported a single fragment of a bone he thought
            </p>
            <p class="frame-41026-item valign-text-middle mulish-normal-cod-gray-12px">
              2. At one site the researchers found hundreds
            </p>
            <p class="frame-41026-item valign-text-middle mulish-normal-cod-gray-12px">
              3. We would expect that you could draw a straight
            </p>
            <p class="x4-griffin-and-his-t valign-text-middle mulish-normal-cod-gray-12px">
              4. Griffin and his team used this climatic line to help pinpoint
            </p>
            <div class="text valign-text-middle text-2 poppins-normal-cod-gray-16px"></div>
          </div>
        </div>
        <div class="group-48098980-1">
          <p class="place-for-the-transfer-list-1 valign-text-middle urbanist-semi-bold-cod-gray-12px">
            Place for the transfer list
          </p>
          <div class="frame-410">
            <div class="frame-41020">
              <div class="ellipse-662"></div>
              <p class="the-cryptocurrency-e valign-text-middle the-cryptocurrency mulish-normal-cod-gray-12px">
                The cryptocurrency Etherium was worth $1,692.93 on the Investing.com Index exchange, up 8.12% on the
                day.
              </p>
            </div>
            <div class="frame-410-1">
              <div class="ellipse-662"></div>
              <p class="software-revision-se valign-text-middle mulish-normal-cod-gray-12px">
                Software revision seen cutting network electricity use by 99%
              </p>
            </div>
            <div class="frame-410-1">
              <div class="ellipse-662"></div>
              <p class="danger-of-bugs-and-o valign-text-middle mulish-normal-cod-gray-12px">
                Danger of bugs and other hiccups remain as the chain forks
              </p>
            </div>
            <div class="frame-410-1">
              <div class="ellipse-662"></div>
              <p class="ether-placed-in-spe valign-text-middle mulish-normal-cod-gray-12px">
                Ether, placed in special, so-called staking wallets.
              </p>
            </div>
            <div class="frame-410-1">
              <div class="ellipse-662"></div>
              <p class="this-is-the-first-st valign-text-middle mulish-normal-cod-gray-12px">
                This is the first step in Ethereum’s big journey toward being system
              </p>
            </div>
          </div>
        </div>
        <img class="line-454" src="../img/line-453-1.svg" alt="Line 454" />
        <div class="get-social valign-text-middle urbanist-normal-cod-gray-16px-2">Get Social:</div>
        <div class="group-48099049">
          <img class="frame-48098650" src="../img/frame-48098650.png" alt="Frame 48098650" />
          <img class="frame-4809864" src="../img/frame-48098647.png" alt="Frame 48098647" />
          <img class="frame-4809864" src="../img/frame-48098648.png" alt="Frame 48098648" />
          <img class="frame-48098649" src="../img/frame-48098649.png" alt="Frame 48098649" />
        </div>
        <img class="line-45" src="../img/line-453-1.svg" alt="Line 455" />
        <div class="other-articles valign-text-middle urbanist-medium-cod-gray-24px">Other articles</div>
        <div class="group-48099055">
          <div class="overlap-group2">
            <img class="rectangle-4923" src="../img/rectangle-4921@2x.png" alt="Rectangle 4923" />
            <div class="frame-48098854">
              <p class="space-for-a-headline urbanist-bold-cod-gray-16px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-48098833">
                <div class="frame-4">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address urbanist-normal-cod-gray-14px">4 min</div>
                </div>
                <div class="frame-4">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date urbanist-normal-cod-gray-14px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-14px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-48098857">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
        </div>
        <div class="group-48099086">
          <div class="group-48099058">
            <div class="group-48099044"><img class="polygon-1" src="../img/polygon-1.svg" alt="Polygon 1" /></div>
            <div class="text-1 valign-text-middle text-2 mulish-normal-white-18px-2">
              <span
                ><span class="mulish-normal-cod-gray-18px">3</span
                ><span class="span1-1 mulish-normal-cod-gray-14px">/9</span>
              </span>
            </div>
            <div class="group-48099045">
              <div class="overlap-group">
                <div class="ellipse-134-1"></div>
                <img class="polygon-1-1" src="../img/polygon-1-1.svg" alt="Polygon 1" />
              </div>
            </div>
          </div>
          <div class="button">
            <div class="frame-410-1"><div class="see-all valign-text-middle mulish-bold-white-16px">See all</div></div>
          </div>
        </div>
        <div class="frame-48099053">
          <div class="overlap-group3 mulish-bold-white-16px">
            <div class="group-container-2">
              <img class="group-4809895" src="../img/group-48098952@2x.png" alt="Group 48098952" />
              <div class="overlap-group-1">
                <img class="polygon-2" src="../img/polygon-2.svg" alt="Polygon 2" />
                <div class="ellipse-134"></div>
              </div>
            </div>
            <img class="line-517" src="../img/line-517.svg" alt="Line 517" />
            <div class="frame-48098838">
              <div class="group-48098750">
                <div class="group-48098751">
                  <div class="overlap-group-2">
                    <div class="number-1 number-2 mulish-bold-white-16px">11</div>
                    <img class="ellipse-4" src="../img/ellipse-4-4.svg" alt="Ellipse 4" />
                  </div>
                </div>
              </div>
              <div class="latest-news mulish-bold-white-18px">Latest news</div>
            </div>
            <div class="group-48099113">
              <p class="this-should-leave-ro urbanist-medium-white-24px">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This should leave
                room&nbsp;&nbsp;&nbsp;&nbsp;for a short slogan
              </p>
              <img class="vector-148" src="../img/vector-148.svg" alt="Vector 148" />
            </div>
            <div class="social-media">Social media</div>
            <div class="flex-row mulish-normal-white-14px">
              <div class="about">About</div>
              <div class="team">Team</div>
            </div>
            <img class="line-521" src="../img/line-517.svg" alt="Line 521" />
            <div class="group-48099044-1 mulish-normal-white-14px">
              <div class="product">Product</div>
              <div class="advisors">Advisors</div>
            </div>
            <img class="line-522" src="../img/line-517.svg" alt="Line 522" />
            <div class="group-48099045-1 mulish-normal-white-14px">
              <div class="features">Features</div>
              <div class="news">News</div>
            </div>
            <div class="social-media">Social media</div>
            <div class="group-container-3">
              <div class="group-48098824">
                <div class="overlap-group">
                  <img class="icon-paper_plane" src="../img/telegram--1--1.svg" alt="icon-paper_plane" />
                  <div class="ellipse-134"></div>
                </div>
              </div>
              <div class="overlap-group-1">
                <div class="group-4809-1"></div>
                <img class="icon" src="../img/facebook-app-symbol-2.svg" alt="icon-facebook" />
              </div>
              <div class="overlap-group-1">
                <div class="group-4809-1"></div>
                <img class="icon" src="../img/twitter-2.svg" alt="icon-twitter" />
              </div>
              <div class="overlap-group-1">
                <div class="group-4809-1"></div>
                <img class="icon" src="../img/linked-in-logo-of-two-letters-2.svg" alt="icon-linkedin" />
              </div>
            </div>
            <div class="group-48099122">
              <div class="start-following-our-news mulish-bold-white-16px">Start following our news</div>
              <div class="overlap-group1">
                <div class="enter-your-email mulish-normal-white-14px">Enter your email</div>
                <div class="overlap-group-3">
                  <div class="subscribe valign-text-middle mulish-bold-blueberry-14px">Subscribe</div>
                </div>
              </div>
            </div>
            <div class="group-48099085">
              <img class="frame-48097302" src="../img/frame-48097302.svg" alt="Frame 48097302" />
              <div class="design-by-demyanchukart urbanist-normal-white-16px">
                <span class="urbanist-normal-cod-gray-16px-2">Design by</span
                ><span class="span1-2 urbanist-bold-cod-gray-18px">&nbsp;</span
                ><span class="urbanist-bold-cod-gray-16px">Demyanchukart</span>
              </div>
            </div>
            <div class="group-48099124 mulish-normal-white-16px">
              <p class="copyright">© Credefi All rights reserved</p>
              <div class="flex-row-1">
                <div class="privacy-policy">Privacy Policy</div>
                <div class="terms-conditions">Terms &amp; Conditions</div>
              </div>
            </div>
          </div>
        </div>
        <h1 class="title mulish-bold-cod-gray-42px">300K</h1>
      </div>
    </div>
  </body>
</html>

@endmobile