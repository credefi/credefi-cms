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
    <link rel="stylesheet" type="text/css" href="css/blog.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #f6f5f8">
    <input type="hidden" id="anPageName" name="page" value="blog" />
    <div class="container-center-horizontal">
      <div class="blog screen">
        <div class="flex-row">
          <img class="group-48098980" src="img/group-48098980@2x.png" alt="Group 48098980" />
          <div class="navbar navbar-1 mulish-normal-woodsmoke-16px">
          <a href="#about" class="navbar-link navbar-1 menu">About</a>
                <a href="#product" class="navbar-link navbar-1  menu">Product</a>
                <a href="http://localhost:8000#lenders" class="navbar-link navbar-1 menu">Lenders</a>
                <a href="#borrowers" class="navbar-link navbar-1 menu">Borrowers</a>
                <a href="#security" class="navbar-link navbar-1 menu">Security</a>
                <a href="#news" class="navbar-link navbar-1 menu">News</a>
          </div>

          <div class="frame-48098649">
          <a href="https://platform.credefi.finance/" class="registration valign-text-middle mulish-bold-white-16px">Platform</a>
          </div>
        </div>
        <div class="overlap-group4">
          <div class="group-48098981">
            <img class="line-452" src="img/line-452.svg" alt="Line 452" />
            <img class="line-453" src="img/line-452.svg" alt="Line 453" />
            <img class="line-451" src="img/line-451.svg" alt="Line 451" />
          </div>
         
        </div>
        <div class="navigation">
          <div class="frame-41001">
            <div class="frame-41001-item mulish-medium-cod-gray-14px">Main</div>
            <img class="chevron-down" src="img/chevron-down.svg" alt="chevron-down" />
            <div class="frame-41001-item mulish-normal-cod-gray-14px">Articles</div>
          </div>
        </div>
        <div class="title">
          <h1 class="title-1 urbanist-medium-cod-gray-42px">Articles</h1>
          <!-- <div class="icons_20px-filter">
            <img class="icons_20px" src="img/icons-20px.svg" alt="Icons_20px" />
            <img class="line-263" src="img/line-263.svg" alt="Line 263" />
            <div class="popular valign-text-middle urbanist-normal-cod-gray-16px">Popular</div>
            <img class="fichevron-down" src="img/fi-chevron-down.svg" alt="fi:chevron-down" />
          </div> -->
        </div>
        <div class="group-container-1">
          @foreach($articles as $article)
          <div class="group-480989" style="background-color: white">
            <img class="rectangle-4831" src="/storage/{{ $article->image}}" alt="Rectangle 4831" />
            <div class="frame-48098833">
              <p class="space-for-a-headline urbanist-bold-cod-gray-20px">
                {{ $article->title}}
              </p>
              <div class="frame-48098833-1">
                <div class="frame-4809883">
                  <img class="icon-c" src="img/clock.svg" alt="icon-clock" />
                  <div class="address-15 urbanist-normal-cod-gray-16px">{{ $article->minutes}} min</div>
                </div>
                <div class="frame-4809883">
                  <img class="icon-c" src="img/calendar.svg" alt="icon-calendar" />
                  <div class="date-15 urbanist-normal-cod-gray-16px">{{ $article->created_at->format('Y-m-d')}}</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-16px">
               {{ $article->short_text }}
            </p>
            <div class="frame-48098644">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px"><a href="/article/{{$article->id}}">Read now</a></div>
            </div>
          </div>
          @endforeach
        </div>
        
        
        
        
        <!-- <div class="button">
          <div class="frame-41036"><div class="see-all valign-text-middle mulish-bold-white-16px">See all</div></div>
        </div> -->
        <footer class="footer">
          <div class="overlap-group2">
            <div class="flex-row-1">
              <div class="x-container">
                <div class="frame-48098796">
                  <div class="group-48098750">
                    <div class="group-48098751">
                      <div class="overlap-group-1">
                        <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                        <div class="number mulish-bold-cod-gray-18px">04</div>
                      </div>
                    </div>
                  </div>
                  <div class="the-end mulish-bold-cod-gray-18px">The end</div>
                </div>
                <div class="group-48098993">
                  <img class="frame-48097302" src="img/frame-48097302-2.svg" alt="Frame 48097302" />
                  <div class="design-by-demyanchukart urbanist-normal-white-16px">
                    <span class="urbanist-normal-cod-gray-16px-2">Design by</span
                    ><span class="span1 urbanist-bold-black-18px">&nbsp;</span
                    ><span class="urbanist-bold-black-16px">Demyanchukart</span>
                  </div>
                </div>
              </div>
              <div class="frame-48099058">
                <img class="group-48099106" src="img/group-48099106@2x.png" alt="Group 48099106" />
                <p class="this-should-leave-ro urbanist-medium-cod-gray-42px">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This should leave room for a short slogan
                </p>
                <img class="vector-148" src="img/vector-148-1.svg" alt="Vector 148" />
                <div class="frame-48099060">
                  <div class="social-media mulish-bold-cod-gray-18px">Social media</div>
                  <div class="frame-48098834 mulish-normal-cod-gray-18px">
                    <div class="group-4809896">
                      <div class="about">About</div>
                      <div class="team">Team</div>
                    </div>
                    <img class="line-51" src="img/line-511.svg" alt="Line 511" />
                    <div class="group-4809896">
                      <div class="product">Product</div>
                      <div class="advisors">Advisors</div>
                    </div>
                    <img class="line-51" src="img/line-511.svg" alt="Line 512" />
                    <div class="group-4809896 mulish-normal-cod-gray-18px">
                      <div class="features">Features</div>
                      <div class="news">News</div>
                    </div>
                  </div>
                </div>
                <div class="frame-48099061">
                  <div class="social-media-1 mulish-bold-cod-gray-18px">Social media</div>
                  <div class="group-48098960">
                    <div class="group-container-2">
                      <div class="group-48098">
                        <div class="overlap-group">
                          <img class="icon-paper_plane" src="img/telegram--1--1-1.svg" alt="icon-paper_plane" />
                          <div class="ellipse-134"></div>
                        </div>
                      </div>
                      <div class="group-48098957">
                        <div class="frame-480988">
                          <img class="icon" src="img/facebook-app-symbol-1.svg" alt="icon-facebook" />
                        </div>
                      </div>
                      <div class="overlap-group">
                        <div class="ellipse-134-1"></div>
                        <img class="icon-twitter" src="img/twitter-1-1.svg" alt="icon-twitter" />
                      </div>
                      <div class="group-48098">
                        <div class="frame-480988">
                          <img class="icon" src="img/linked-in-logo-of-two-letters-1-1.svg" alt="icon-linkedin" />
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
                      <div class="overlap-group-2">
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
    <link rel="stylesheet" type="text/css" href="../css/blogm.css" />
    <link rel="stylesheet" type="text/css" href="../css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="../css/globals.css" />
  </head>
  <body style="margin: 0; background: #f6f5f8">
    <input type="hidden" id="anPageName" name="page" value="blogm" />
    <div class="container-center-horizontal">
      <div class="blogm screen">
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
            <div class="frame-41001-item mulish-medium-cod-gray-14px">Main</div>
            <img class="chevron-down" src="../img/chevron-down.svg" alt="chevron-down" />
            <div class="frame-41001-item mulish-normal-cod-gray-14px">Articles</div>
          </div>
        </div>
        <div class="flex-row">
          <div class="articles urbanist-medium-cod-gray-24px">Articles</div>
          <div class="icons_20px-filter">
            <div class="popular valign-text-middle urbanist-normal-cod-gray-16px">Popular</div>
            <img class="fichevron-down" src="../img/fi-chevron-down.svg" alt="fi:chevron-down" />
          </div>
        </div>
        <div class="group-48099050">
          <div class="overlap-group">
            <img class="rectangle" src="../img/rectangle-4921@2x.png" alt="Rectangle 4921" />
            <div class="frame-4809">
              <p class="space-for-a-headline urbanist-bold-cod-gray-16px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-48098833">
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-4 urbanist-normal-cod-gray-14px">4 min</div>
                </div>
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-4 urbanist-normal-cod-gray-14px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-14px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-4809-1">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
        </div>
        <div class="group-4809905">
          <div class="overlap-group">
            <img class="rectangle-4923 rectangle" src="../img/rectangle-4923@2x.png" alt="Rectangle 4923" />
            <div class="frame-4809">
              <p class="space-for-a-headline urbanist-bold-cod-gray-16px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-48098833">
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-4 urbanist-normal-cod-gray-14px">4 min</div>
                </div>
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-4 urbanist-normal-cod-gray-14px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-14px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-4809-1">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
        </div>
        <div class="group-4809905">
          <div class="overlap-group4">
            <img class="rectangle-4925 rectangle" src="../img/rectangle-4925@2x.png" alt="Rectangle 4925" />
            <div class="frame-4809">
              <p class="space-for-a-headline urbanist-bold-cod-gray-16px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-48098833">
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-4 urbanist-normal-cod-gray-14px">4 min</div>
                </div>
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-4 urbanist-normal-cod-gray-14px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-14px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="overlap-group-2">
              <div class="frame-48099046">
                <div class="read-now valign-text-middle mulish-bold-white-16px">Read now</div>
              </div>
              <img
                class="x56aba50db2eb71528e7cbda5-11"
                src="../img/56aba50db2eb71528e7cbda5-11@2x.png"
                alt="56aba50db2eb71528e7cbda5 11"
              />
            </div>
          </div>
        </div>
        <div class="group-4809905">
          <div class="overlap-group">
            <img class="rectangle" src="../img/rectangle-4927@2x.png" alt="Rectangle 4927" />
            <div class="frame-4809">
              <p class="space-for-a-headline urbanist-bold-cod-gray-16px">
                Space for a headline, under the news in two lines
              </p>
              <div class="frame-48098833">
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/clock.svg" alt="icon-clock" />
                  <div class="address-4 urbanist-normal-cod-gray-14px">4 min</div>
                </div>
                <div class="frame-4809883">
                  <img class="icon-c" src="../img/calendar.svg" alt="icon-calendar" />
                  <div class="date-4 urbanist-normal-cod-gray-14px">03.03.2023</div>
                </div>
              </div>
            </div>
            <p class="description-for-the mulish-normal-cod-gray-14px">
              Description for the news in a few lines, you need to write, do not forget to write, be sure to write the
              news a few lines
            </p>
            <div class="frame-4809-1">
              <div class="read-now valign-text-middle mulish-bold-blueberry-16px">Read now</div>
            </div>
          </div>
        </div>
        <div class="button">
          <div class="frame-41036"><div class="see-all valign-text-middle mulish-bold-white-16px">See all</div></div>
        </div>
        <div class="frame-48099054">
          <div class="overlap-group6 mulish-bold-white-16px">
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
                  <div class="overlap-group-3">
                    <div class="number mulish-bold-white-16px">11</div>
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
            <div class="flex-row-1 flex-row-3 mulish-normal-white-14px">
              <div class="about">About</div>
              <div class="team">Team</div>
            </div>
            <img class="line-521" src="../img/line-517.svg" alt="Line 521" />
            <div class="group-48099044 mulish-normal-white-14px">
              <div class="product">Product</div>
              <div class="advisors">Advisors</div>
            </div>
            <img class="line-522" src="../img/line-517.svg" alt="Line 522" />
            <div class="group-48099045 mulish-normal-white-14px">
              <div class="features">Features</div>
              <div class="news">News</div>
            </div>
            <div class="social-media">Social media</div>
            <div class="group-container-3">
              <div class="group-48098824">
                <div class="overlap-group-4">
                  <img class="icon-paper_plane" src="../img/telegram--1--1-2.svg" alt="icon-paper_plane" />
                  <div class="ellipse-134"></div>
                </div>
              </div>
              <div class="overlap-group-1">
                <div class="group-4809-1"></div>
                <img class="icon" src="../img/facebook-app-symbol-2.svg" alt="icon-facebook" />
              </div>
              <div class="overlap-group-1">
                <div class="group-4809-1"></div>
                <img class="icon" src="../img/twitter-2-1.svg" alt="icon-twitter" />
              </div>
              <div class="overlap-group-1">
                <div class="group-4809-1"></div>
                <img class="icon" src="../img/linked-in-logo-of-two-letters-2-1.svg" alt="icon-linkedin" />
              </div>
            </div>
            <div class="group-48099122">
              <div class="start-following-our-news mulish-bold-white-16px">Start following our news</div>
              <div class="overlap-group1">
                <div class="enter-your-email mulish-normal-white-14px">Enter your email</div>
                <div class="overlap-group-5">
                  <div class="subscribe valign-text-middle mulish-bold-blueberry-14px">Subscribe</div>
                </div>
              </div>
            </div>
            <div class="group-48099085">
              <img class="frame-48097302" src="../img/frame-48097302-2.svg" alt="Frame 48097302" />
              <div class="design-by-demyanchukart urbanist-normal-white-16px">
                <span class="urbanist-normal-cod-gray-16px-2">Design by</span
                ><span class="span1 urbanist-bold-cod-gray-18px">&nbsp;</span
                ><span class="urbanist-bold-cod-gray-16px">Demyanchukart</span>
              </div>
            </div>
            <div class="group-48099124 mulish-normal-white-16px">
              <p class="copyright">© Credefi All rights reserved</p>
              <div class="flex-row-2 flex-row-3">
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