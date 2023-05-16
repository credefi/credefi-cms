@extends ('layouts.master')

@desktop
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="/storage/settings/March2023/vADk48XA3Z52NCN2AYBb.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
    <link rel="stylesheet" type="text/css" href="css/article.css" />
  </head>
  <body style="margin: 0; background: #f6f5f8">
    <input type="hidden" id="anPageName" name="page" value="index" />
    <div class="container-center-horizontal">
      <div class="index screen" id="animeback">
        <div class="view view-2">
          @include('desktop.header')
          <!-- <video autoplay muted loop class="video-background">
              <source src="/video/header.mp4" type="video/mp4" autoplay="1" />
            </video> -->
          <div class="overlap-group1-1">
            <h1 class="innovative-lending-f" >
              {{ $titles[0]['main_title_1'] }}
              <br />&nbsp;&nbsp;&nbsp;&nbsp; {{ $titles[0]['main_title_2'] }}
            </h1>
            <img class="european-union-1-1 rotate" src="img/european-union--1--1.svg" alt="european-union (1) 1" />
          </div>
          <p class="invest-in-eu-sme-loa mulish-normal-cod-gray-16px-2">
            {{ $text[0]['main_text'] }}
          </p>
          <div class="group-container">
            <div class="group-48098745-1">
            @foreach ($slides as $index => $slide)
              <div class="group-48098742 slide-box opacity-animate @if($index != 0) hidden @endif">
                <div class="group-48098741">
                  <div class="price mulish-normal-cod-gray-18px">{{ $slide['top_row'] }}</div>
                  <div class="text-4 text urbanist-medium-cod-gray-48px">{{ $slide['title'] }}</div>
                </div>
                <div class="total-liquidity-provided mulish-normal-cod-gray-16px-2">{{ $slide['bottom_row'] }}</div>
              </div>
            @endforeach

              <div class="group-48098744">
                <div class="rectangle-4739"></div>
                <div class="group-48098743">
                  @foreach ($slides as $index => $slide)
                  <div class="rectangle-474 slide-box-button" onclick="setBox({{ $index }})"></div>
                  @endforeach
                </div>
              </div>

            </div>
            <div class="group-48098824">
              <img class="line-455" src="img/line-455.svg" alt="Line 455" />
              <div class="scroll-down mulish-bold-cod-gray-18px"><a href="#about" class="navbar-link navbar-1 menu">Scroll down</a></div>
            </div>
          </div>
        </div>

      <section id="about" class="z-index2"></section>
        <div class="frame-48099125">
          <div class="x-container">
            <div class="frame-48098 mulish-bold-cod-gray-18px">
              <div class="group-48098829">
                <div class="overlap-group-6">
                  <div class="group-48098828">
                    <img class="ellipse-4-1" src="img/ellipse-4.svg" alt="Ellipse 4" />
                  </div>
                  <div class="number-1 number-2">01</div>
                </div>
              </div>
              <div class="about-us about-1">About us</div>
            </div>
            <div class="group-48098827">
              <div class="group-48098826-3 urbanist-medium-cod-gray-42px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $titles[0]['about_title_1'] }}
              </div>
              <img class="line-46" src="img/line-465.svg" alt="Line 465" />
              <div class="group-48098781 mulish-normal-cod-gray-18px">
                <p class="our-mission-is-to-br">
                  {{ $text[0]['about_text_1'] }}
                </p>
                <div class="our-lending-platform-container">
                  <p class="our-lending-platform">
                    {{ $text[0]['about_text_2'] }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="overlap-group11">
            <div class="overlap-group2 mulish-normal-cod-gray-18px">
              <div class="powered-by">POWERED BY</div>
              <img class="line-517" src="img/line-517.svg" alt="Line 517" />
              <div class="audited-by">AUDITED BY</div>
              <img class="line-518" src="img/line-517.svg" alt="Line 518" />
              <div class="approved-by">APPROVED BY</div>
            </div>
            <img class="experian-seeklogocom-1" src="img/experian-seeklogo-com-1.svg" alt="experian-seeklogo.com 1" />
            <img class="group-48099129" src="img/group-48099129@2x.png" alt="Group 48099129" />
            <img class="mask-group" src="img/mask-group@2x.png" alt="Mask group" />
          </div>
        </div>
        <div class="overlap-group12">
          <div class="view-1 view-2">
            <div class="group-48098831">
              <div class="frame-48098">
                <div class="group-48098750">
                  <div class="group-48098751">
                    <div class="overlap-group">
                      <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                      <div class="number number-2 mulish-bold-cod-gray-18px">02</div>
                    </div>
                  </div>
                </div>
                <div class="our-mission mulish-bold-cod-gray-18px">Our mission</div>
              </div>
              <p class="i-am-proud-to-lead-a urbanist-medium-cod-gray-42px">
                {{ $titles[0]['mission_title'] }}
              </p>
            </div>
            <div class="overlap-group2-1">
              <div class="ivo-grigorov mulish-bold-cod-gray-18px">Ivo Grigorov</div>
              <div class="group-48098835">
                <div class="group-48098834">
                  <div class="overlap-group1-2">
                    <div class="rectangle-4759"></div>
                    <img class="image-97" src="img/image-97@2x.png" alt="image 97" />
                    <div class="overlap-group-7">
                      <div class="rectangle-4760"></div>
                      <div class="ceo">CEO</div>
                    </div>
                  </div>
                </div>
                <div class="group-container-1">
                  <div class="group-48098785">
                    <img class="line-456" src="img/line-456.svg" alt="Line 456" />
                    <p class="at-credefi-we-are-p mulish-normal-cod-gray-16px-2">
                      {{ $text[0]['mission_text'] }}
                    </p>
                  </div>
                  <div class="group-48098833">
                    <div class="group-48098787">
                      <img class="frame-4809" src="img/frame-48098790.svg" alt="Frame 48098790" />
                      <p class="we-bridge-eus-debt-financing-gap mulish-normal-cod-gray-18px"> We bridge EU&#39;s debt financing gap </p>
                    </div>
                    <div class="frame-48098">
                      <div class="frame-4809879">
                        <img class="coins-01" src="img/coins-01.svg" alt="coins-01" />
                      </div>
                      <p class="we-offer-accessible mulish-normal-cod-gray-18px"> We offer accessible lending solutions for SMEs </p>
                    </div>
                    <div class="frame-48098">
                      <div class="frame-4809879">
                        <img class="cube-outline" src="img/cube-outline.svg" alt="cube-outline" />
                      </div>
                      <p class="we-leverage-blockcha mulish-normal-cod-gray-18px"> We leverage blockchain technology to achieve secure and stable returns </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ivo-grigorov mulish-bold-cod-gray-18px">Ivo Grigorov</div>
            </div>
          </div>

          <section id="product"></section>
          <div class="frame-48098816">
            <div class="overlap-group5">
              <img class="ui-5" data-inviewport="reveal" src="img/s3main.png" alt="UI 5" />
              <div class="group-48098810">
                <p class="explore-our-platform urbanist-medium-white-42px" data-inviewport="animated"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $titles[0]['platform_title'] }}
                </p>
                <div class="overlap-group-8">
                  <div class="go-to-platform valign-text-middle mulish-bold-blueberry-16px z-index2"><a href="https://platform.credefi.finance/" style="color: #4773fe">Go to platform</a></div>
                </div>
              </div>
              <div class="frame-48098795-1">
                <div class="group-48098750">
                  <div class="group-48098751">
                    <div class="overlap-group-1">
                      <img class="ellipse-4" src="img/ellipse-4-2.svg" alt="Ellipse 4" />
                      <div class="number number-2 mulish-bold-white-18px">03</div>
                    </div>
                  </div>
                </div>
                <div class="platform mulish-bold-white-18px">Platform</div>
              </div>
              <img class="x01-3" src="img/s3right.png" alt="01-3" />
              <img class="vector-144" src="img/vector-144.svg" alt="Vector 144" />
              <div class="overlap-group1-3" data-inviewport="animated4">
                <div class="frame-48098822">
                  <img class="x3" src="img/3@2x.png" alt="3" />
                </div>
                <div class="support-247 mulish-semi-bold-cod-gray-14px">Support 24/7</div>
              </div>
              <div class="overlap-group2-2"  data-inviewport="animated3">
                <div class="frame-48098822">
                  <img class="x04-4" src="img/04-4@2x.png" alt="04-4" />
                </div>
                <div class="secure mulish-semi-bold-cod-gray-14px">Secure</div>
              </div>
              <div class="overlap-group3"  data-inviewport="animated1">
                <div class="frame-48098822">
                  <img class="x01-3-1" src="img/01-3-1@2x.png" alt="01-3" />
                </div>
                <div class="easy-to-use mulish-semi-bold-cod-gray-14px">Easy to use</div>
              </div>
              <div class="overlap-group4"  data-inviewport="animated2">
                <div class="frame-48098822">
                  <img class="x4" src="img/4@2x.png" alt="4" />
                </div>
                <div class="stable-returns mulish-semi-bold-cod-gray-14px">Stable returns</div>
              </div>
              <img class="shadow-1 shadow" src="img/shadow-1.png" alt="Shadow 1" />
            </div>
          </div>
        </div>
        <section id="lenders"></section>
        <div class="overlap-group13">
          <div class="frame-48098801">
            <div class="group-48098836">
              <div class="frame-48098">
                <div class="group-48098750">
                  <div class="group-48098751">
                    <div class="overlap-group">
                      <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                      <div class="number number-2 mulish-bold-cod-gray-18px">04</div>
                    </div>
                  </div>
                </div>
                <div class="lenders mulish-bold-cod-gray-18px">Lenders</div>
              </div>
              <p class="lenders-can-benefit urbanist-medium-cod-gray-42px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $titles[0]['lenders_title'] }}
              </p>
            </div>
            <div class="flex-row">
              <div class="overlap-group1">
                <div class="lend-now valign-text-middle mulish-bold-white-16px"><a href="https://platform.credefi.finance/" style="color: #FFF">Lend now</a></div>
              </div>
              <div class="flex-col">
                <img class="line-46-1" src="img/line-465.svg" alt="Line 466" />
                <div class="group-container-2">
                  <div class="group-48098837">
                  <video autoplay muted loop class="subtract" >
                    <source src="/video/phone1.mp4" type="video/mp4" autoplay="1" />
                  </video>
                    <p class="credefi mulish-normal-cod-gray-18px">
                      {{ $text[0]['lenders_text'] }}
                    </p>
                  </div>
                  <div class="overlap-group-2">
                    <div class="debt-financing-gap mulish-normal-cod-gray-18px">{{ $tiles[0]['title']}} </div>
                    <div id="tileNbr1" class="x176-b mulish-bold-cod-gray-42px" data-inviewport="grow">{{ $tiles[0]['before']}}<span id="nbr1">{{ $tiles[0]['number']}}</span>{{ $tiles[0]['after']}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img class="image-96" src="img/image-96@2x.png" alt="image 96" />
        </div>

        <section id="borrowers"></section>
        <div class="frame-48098816-1">
          <div class="group-48098836-1">
            <div class="frame-48098">
              <div class="group-48098750">
                <div class="group-48098751">
                  <div class="overlap-group">
                    <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                    <div class="number number-2 mulish-bold-cod-gray-18px">05</div>
                  </div>
                </div>
              </div>
              <div class="borrowers mulish-bold-cod-gray-18px">Borrowers</div>
            </div>
            <p class="we-a urbanist-medium-cod-gray-42px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $titles[0]['borrowers_title'] }}
            </p>
          </div>
          <div class="flex-row">
            <div class="overlap-group1">
              <div class="apply-now valign-text-middle mulish-bold-white-16px"><a href="https://platform.credefi.finance/" style="color: #FFF">Apply now</a></div>
            </div>
            <div class="flex-col">
              <img class="line-46-1" src="img/line-465.svg" alt="Line 466" />
              <div class="group-container-3">
                <div class="group-48098837">
                  <div class="overlap-group2-3">
                    <video autoplay muted loop class="subtract" >
                    <source src="/video/phone2.mp4" type="video/mp4" autoplay="1" />
                  </video>
                  </div>
                  <p class="credefi mulish-normal-cod-gray-18px">
                    {{ $text[0]['borrowers_text'] }}
                  </p>
                </div>
                <div class="overlap-group-2">
                  <p class="sme-struggle-to-get-financing mulish-normal-cod-gray-18px">{{ $tiles[1]['title'] }}</p>
                  <div id="tileNbr2" class="text-5 text mulish-bold-cod-gray-42px" data-inviewport="grow">{{ $tiles[1]['before']}}<span id="nbr2">{{ $tiles[1]['number']}}</span>{{ $tiles[1]['after']}}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section id="security"></section>
        <div class="frame-48098803">
          <div class="group-container-4">
            <div class="group-48098842">
              <div class="flex-col-1 flex-col-6">
                <div class="frame-48098">
                  <div class="group-48098750">
                    <div class="group-48098751">
                      <div class="overlap-group">
                        <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                        <div class="number number-2 mulish-bold-cod-gray-18px">06</div>
                      </div>
                    </div>
                  </div>
                  <div class="security mulish-bold-cod-gray-18px">Security</div>
                </div>

              </div>
              <div class="group-48098841">
                <p class="credefi-is-platform urbanist-medium-cod-gray-42px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $text[0]['security_text'] }}
                </p>
                <img class="line-46-1" src="img/line-465.svg" alt="Line 467" />
              </div>
            </div>
            <div class="overlap-group2-4">
              <div class="flex-col-2 flex-col-6">
                <div class="rwa-collateral mulish-normal-cod-gray-18px">{{ $tiles[2]['title'] }} </div>
                <div id="tileNbr3" class="x300-k mulish-bold-cod-gray-42px" data-inviewport="grow">{{ $tiles[2]['before']}}<span id="nbr3">{{ $tiles[2]['number']}}</span>{{ $tiles[2]['after']}}</div>
              </div>
              <img class="line-51" src="img/line-517.svg" alt="Line 517" />
              <div class="flex-col-3 flex-col-6">
                <div class="credit-risk-scoring mulish-normal-cod-gray-18px">{{ $tiles[3]['title'] }} </div>
                <div id="tileNbr4" class="x300-k mulish-bold-cod-gray-42px" data-inviewport="grow">{{ $tiles[3]['before']}}<span id="nbr4">{{ $tiles[3]['number']}}</span>{{ $tiles[3]['after']}}</div>
              </div>
              <img class="line-51" src="img/line-517.svg" alt="Line 518" />
              <div class="module-x mulish-normal-cod-gray-18px">{{ $tiles[4]['title'] }}</div>
              <div id="tileNbr5" class="x300-k-1 mulish-bold-cod-gray-42px" data-inviewport="grow">{{ $tiles[4]['before']}}<span id="nbr5">{{ $tiles[4]['number']}}</span>{{ $tiles[4]['after']}}</div>
            </div>
          </div>
        </div>
        <div class="frame-48098811">
          <div class="overlap-group9">
            <div class="frame-48098796">
              <div class="group-48098750">
                <div class="group-48098751">
                  <div class="overlap-group-1">
                    <img class="ellipse-4" src="img/ellipse-4-2.svg" alt="Ellipse 4" />
                    <div class="number number-2 mulish-bold-white-18px">07</div>
                  </div>
                </div>
              </div>
              <div class="utility-and-rewards mulish-bold-white-18px">Utility and rewards</div>
            </div>
            <p class="here-you-need-to-wri urbanist-medium-white-42px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $titles[0]['tokens_title'] }}
            </p>
            <div class="group-48098849">
              <div class="group-48098813">
                <div class="credi mulish-bold-white-18px">$CREDI</div>
                <img class="line-456-1 line-456-3" src="img/line-456-1.svg" alt="Line 456" />
                <p class="provides-additional mulish-normal-white-18px">
                  {{ $text[0]['tokens_text_1'] }}
                </p>
              </div>
              <img class="line-46" src="img/line-468-1.svg" alt="Line 468" />
              <div class="group-48098814">
                <div class="x-credi mulish-bold-white-18px">$xCREDI</div>
                <img class="line-456-2 line-456-3" src="img/line-456-1.svg" alt="Line 456" />
                <p class="earned-through-depos mulish-normal-white-18px">
                  {{ $text[0]['tokens_text_2'] }}
                </p>
              </div>
            </div>
            <div class="z-index2">
              <div class="group-48099087">
                <div class="overlap-group1-4">
                  <img class="token-kukoin-02 shaking" src="img/token-kukoin-02@2x.png" alt="Token-kukoin-02" />
                  <div class="group-48098843">
                    <div class="kucoin mulish-bold-cod-gray-18px">Kucoin</div>
                    <div class="group-48098745">
                      <div class="rectangle-474"></div>
                      <div class="rectangle-474"></div>
                      <div class="rectangle-474"></div>
                      <div class="rectangle-474-1 rectangle-474-3"></div>
                      <div class="rectangle-474-1 rectangle-474-3"></div>
                      <div class="rectangle-474-2 rectangle-474-3"></div>
                      <div class="rectangle-474-2 rectangle-474-3"></div>
                    </div>
                  </div>
                  <div class="frame-48098797">
                    <div class="buy-3 mulish-bold-white-18px"><a href="https://www.kucoin.com/trade/CREDI-USDT" target="_blank" style="color: #fff;">BUY</a></div>
                  </div>
                </div>
              </div>
              <div class="rectangle-4795"></div>
              <img class="token-pan-02" src="img/token-pan-02@2x.png" alt="Token-Pan-02" />
              <div class="group-48098844">
                <div class="uniswap mulish-bold-cod-gray-18px">Apeswap</div>
                <div class="group-48098745">
                  <div class="rectangle-474"></div>
                  <div class="rectangle-474"></div>
                  <div class="rectangle-474"></div>
                  <div class="rectangle-474-1 rectangle-474-3"></div>
                  <div class="rectangle-474-1 rectangle-474-3"></div>
                  <div class="rectangle-474-2 rectangle-474-3"></div>
                  <div class="rectangle-474-2 rectangle-474-3"></div>
                </div>
              </div>
              <div class="frame-48098797-1 frame-48098797-3">
                <div class="buy-3 mulish-bold-white-18px"><a href="https://apeswap.finance/swap?inputCurrency=0x2235e79086dd23135119366da45851c741874e5b&outputCurrency=0xbb4cdb9cbd36b01bd1cbaebf2de08d9173bc095c" target="_blank" style="color: #fff;">BUY</a></div>
              </div>
              <div class="rectangle-4795-1"></div>
              <img class="token-uni-02" src="img/token-uni-02@2x.png" alt="Token-uni-02" />
              <div class="group-48098845">
                <div class="pancake mulish-bold-cod-gray-18px">Pancake</div>
                <div class="group-48098745">
                  <div class="rectangle-474"></div>
                  <div class="rectangle-474"></div>
                  <div class="rectangle-474"></div>
                  <div class="rectangle-474-1 rectangle-474-3"></div>
                  <div class="rectangle-474-1 rectangle-474-3"></div>
                  <div class="rectangle-474-2 rectangle-474-3"></div>
                  <div class="rectangle-474-2 rectangle-474-3"></div>
                </div>
              </div>
              <div class="frame-48098797-2 frame-48098797-3">
                <div class="buy-3 mulish-bold-white-18px"><a href="https://pancakeswap.finance/swap?chain=bsc&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56&outputCurrency=0x2235e79086dd23135119366da45851c741874e5B" target="_blank" style="color: #fff;">BUY</a></div>
              </div>
            </div>
            <img class="vector-145" src="img/vector-145.svg" alt="Vector 145" />
            <img class="shadow-2 shadow" src="img/shadow-2.png" alt="Shadow 2" />
          </div>
        </div>

        <div class="frame-48098812">
          <div class="flex-row-2">
            <div class="frame-48098795">
              <div class="group-48098750">
                <div class="group-48098751">
                  <div class="overlap-group">
                    <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                    <div class="number number-2 mulish-bold-cod-gray-18px">08</div>
                  </div>
                </div>
              </div>
              <div class="testimonials mulish-bold-cod-gray-18px">Testimonials</div>
            </div>
            @foreach ($testimonials as $testimonial)
            <p class="we-a urbanist-medium-cod-gray-42px slide-text-box-data"> 
              {{ $testimonial['text'] }}
            </p>
            @endforeach
          </div>
          <img class="line-468" src="img/line-465.svg" alt="Line 468" />

          <div class="x-container-1 x-container-3">

          @foreach ($testimonials as $index => $testimonial)
            <div class="frame-48098814 slide-text-box @if($index != 0) display-none @endif">
              <img class="ellipse-133 @if($index != 0) display-none @endif slide-text-box-img" src="storage/{{ $testimonial['img'] }}" alt="Ellipse 133" />
              <div class="frame-48098813">
                <div class="rostislav-gyonkov valign-text-middle mulish-bold-cod-gray-18px">{{ $testimonial['name'] }}</div>
                <p class="experian-senior-business-consultant valign-text-middle mulish-normal-cod-gray-16px"> {{ $testimonial['position'] }} </p>
              </div>
            </div>
          @endforeach

            <div class="group-48098867">
              <div class="group-48098823 slide-textbox-button" onclick="setTextBox(false)">
                <img class="polygon-1" src="img/polygon-1-3.svg" alt="Polygon 1" />
              </div>
              <div class="group-48098822 slide-textbox-button" onclick="setTextBox(true)">               
                <img class="polygon-1" src="img/polygon-1-3.svg" alt="Polygon 1" />
              </div>
            </div>
          </div>
        </div>
        <div class="frame-48098817">
          <div class="flex-row-3">
            <div class="frame-48098795">
              <div class="group-48098750">
                <div class="group-48098751">
                  <div class="overlap-group">
                    <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                    <div class="number number-2 mulish-bold-cod-gray-18px">09</div>
                  </div>
                </div>
              </div>
              <div class="backers-and-partners mulish-bold-cod-gray-18px">Backers and partners</div>
            </div>
            <p class="we-work-together-for urbanist-medium-cod-gray-42px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We work together for greater impact - meet our valued partners </p>
            <img class="vector-146" src="img/vector-146.svg" alt="Vector 146" />
          </div>
          <div class="group-48099089">
          <div class="group-48098978">
            @foreach ($partners as $partner)
            <article class="group-480989">
                <img class="group-48098826-1" src="/storage/{{ $partner['img'] }}" alt="Group 48098826" />
              </article>
            @endforeach
            </div>
            <div class="group-48098979">
            @foreach ($backers as $backer)
              <article class="group-480989">
                <img class="group-48098826-1" src="/storage/{{ $backer['img'] }}" alt="Group 48098826" />
              </article>
            @endforeach
            </div>
          </div>
        </div><section id="news"></section>
        <div class="frame-48098814-1">
          <div class="flex-row-4">
            
            <div class="flex-col-4 flex-col-6">
              <div class="frame-48098">
                <div class="group-48098750">
                  <div class="group-48098751">
                    <div class="overlap-group">
                      <img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" />
                      <div class="number number-2 mulish-bold-cod-gray-18px">10</div>
                    </div>
                  </div>
                </div>
                <div class="latest-news mulish-bold-cod-gray-18px">Latest news</div>
              </div>

            </div>
            <div class="flex-col-5 flex-col-6">
              <p class="our-goal-is-to-keep urbanist-medium-cod-gray-42px">
                {{ $titles[0]['article_title'] }}
              </p>
              <div class="overlap-group-container">

                @foreach ($articles as $article)
                <div class="new-box overlap-group-3">
                  <img class="rectangle-4831-1" src="storage/{{ $article['image']}}" alt="Rectangle 4831" />
                  <div class="frame-48098833">
                    <p class="space-for-a-headline urbanist-bold-cod-gray-20px"> {{ $article['title']}} </p>
                    <div class="frame-4809883">
                      <div class="frame-4809883-1">
                        <img class="icon-c" src="img/clock.svg" alt="icon-clock" />
                        <div class="address-3 urbanist-normal-cod-gray-16px">{{ $article['minutes'] }} min</div>
                      </div>
                      <div class="frame-4809883-1">
                        <img class="icon-c" src="img/calendar.svg" alt="icon-calendar" />
                        <div class="date-3 urbanist-normal-cod-gray-16px">{{ $article['published'] }}</div>
                      </div>
                    </div>
                  </div>
                  <p class="description-for-the mulish-normal-cod-gray-16px"> {{ $article['short_text'] }} </p>
                  <div class="frame-48098644">
                    <div class="read-now valign-text-middle read mulish-bold-blueberry-16px"><a href=/article/{{ $article['id']}}">Read now</a></div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
          <div class="group-48098980">
            <div class="group-48098864">
              <div class="news-counter news-1 mulish-normal-cod-gray-18px">NEWS COUNTER</div>
              <div id="news-counter" class="text-6 text urbanist-medium-cod-gray-48px">-/-</div>
            </div>
            <div class="button">
              <div class="frame-41036">
                <div class="see-all valign-text-middle mulish-bold-white-16px"><a href="/articles" style="color: #fff"> See all </a></div>
              </div>
            </div>
            <div class="group-48098866">
              <div class="group-48098823-1 slide-textbox-button" onclick="parsePage(false)">
                <img class="polygon-1" src="img/polygon-1-3.svg" alt="Polygon 1"/>
              </div>
              <div class="group-48098822-1 slide-textbox-button" onclick="parsePage(true)">
                <img class="polygon-1" src="img/polygon-1-3.svg" alt="Polygon 1"/>
              </div>
            </div>
          </div>
        </div>
        @include("desktop.footer")
      </div>
    </div>
  </body>
</html>

<script>
  var tile =  document.getElementById("tileNbr1");
  var tile2 =  document.getElementById("tileNbr2");
  var tile3 =  document.getElementById("tileNbr3");
  var tile4 =  document.getElementById("tileNbr4");
  var tile5 =  document.getElementById("tileNbr5");

  const inViewport = (entries, observer) => {
    entries.forEach(entry => {
      entry.target.classList.toggle("is-inViewport", entry.isIntersecting);
      if(tile.classList.contains('is-inViewport') && tile.classList.contains('counted') == false){
        incEltNbr('nbr1');
        tile.classList.add("counted");
      };
      if(tile2.classList.contains('is-inViewport') && tile2.classList.contains('counted') == false){
        incEltNbr('nbr2');
        tile2.classList.add("counted");
      };
      if(tile3.classList.contains('is-inViewport') && tile3.classList.contains('counted') == false){
        incEltNbr('nbr3');
        tile3.classList.add("counted");
      };
      if(tile4.classList.contains('is-inViewport') && tile4.classList.contains('counted') == false){
        incEltNbr('nbr4');
        tile4.classList.add("counted");
      };
      if(tile5.classList.contains('is-inViewport') && tile5.classList.contains('counted') == false){
        incEltNbr('nbr5');
        tile5.classList.add("counted");
      };
    });
  };
  const images = [];

  const Obs = new IntersectionObserver(inViewport);
  const obsOptions = {}; 

  const ELs_inViewport = document.querySelectorAll('[data-inviewport]');
  ELs_inViewport.forEach(EL => {
    Obs.observe(EL, obsOptions);
  });

  var speed = 10;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
}

/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 1, endNbr, elt);
    }, speed);
  }
}


  let intervalData;
  let selected = 0;
  const sliders = document.getElementsByClassName('slide-box');
  const slideButtons = document.getElementsByClassName('slide-box-button');

  setActiveSlider(selected);
  interval();

  function interval() {
    if(intervalData){
      clearInterval(intervalData);
    }
    intervalData = setInterval(() => {
      selected+=1;
      if(selected >= sliders.length){
        selected = 0;
      }
      setActiveSlider(selected);
    }, 5000);
  }

  function setBox(i){
    selected = i;
    setActiveSlider(i);
    interval();
  }

  function setActiveSlider(index){
    for(let i = 0 ; i < sliders.length; i++){
      const element = sliders[i];
      if(index == i){
        element.style.visibility = 'visible';
        element.style.opacity = '1';
        element.style.height = '130px';

      }else{
        element.style.opacity = '0';
        element.style.visibility = 'hidden';
        element.style.height = '0px';
      }
    }

    for(let i = 0 ; i < slideButtons.length; i++){
      const element = slideButtons[i];
      if(index == i){
        element.style.height = '10px';
      }else{
        element.style.height = '4px';
      }
    }
  }

  let intervalTextBoxData;
  let selectedTextBox = 0;
  const slideTextBoxes = document.getElementsByClassName('slide-text-box');
  const slideTextBoxesData = document.getElementsByClassName('slide-text-box-data');
  const slideTextBoxesImg = document.getElementsByClassName('slide-text-box-img');


  setActiveSlideTextBox(selectedTextBox);
  intervalTextBox();

  function intervalTextBox() {
    if(intervalTextBoxData){
      clearInterval(intervalTextBoxData);
    }
    intervalTextBoxData = setInterval(() => {
      selectedTextBox+=1;
      if(selectedTextBox >= slideTextBoxes.length){
        selectedTextBox = 0;
      }
      setActiveSlideTextBox(selectedTextBox);
    }, 5000);
  }

  function setTextBox(bool){

    if(bool){
      selectedTextBox+=1;
    }else{
      selectedTextBox-=1;
    }

    if(selectedTextBox < 0){
      selectedTextBox = 0;
    }

    if(selectedTextBox >= slideTextBoxes.length){
      selectedTextBox = slideTextBoxes.length-1;
    }

    setActiveSlideTextBox(selectedTextBox);
    intervalTextBox();
  }

  function setActiveSlideTextBox(index){
    for(let i = 0 ; i < slideTextBoxes.length; i++){
      const element = slideTextBoxes[i];
      if(index == i){
        element.style.display = 'flex';
      }else{
        element.style.display = 'none';
      }
    }

    for(let i = 0 ; i < slideTextBoxesData.length; i++){
      const element = slideTextBoxesData[i];
      if(index == i){
        element.style.display = 'block';
      }else{
        element.style.display = 'none';
      }
    }

    for(let i = 0 ; i < slideTextBoxesImg.length; i++){
      const element = slideTextBoxesImg[i];
      if(index == i){
        element.style.display = 'block';
      }else{
        element.style.display = 'none';
      }
    }

  }

  const news = document.getElementsByClassName('new-box');
  const counter = document.getElementById('news-counter');
  const perPage = 3;
  let currentPage = 0;

  setNewsPage();

  function parsePage(bool){
    if(bool){
      currentPage+=1;
    }else{
      currentPage-=1;
    }

    if(currentPage < 0){
      currentPage = 0;
    }

    if(currentPage > Math.ceil(news.length / perPage)){
      currentPage = Math.ceil(news.length / perPage) - 1;
    }

    setNewsPage();

  }

  function setNewsPage(){

    const start = currentPage * perPage;
    const end = (currentPage + 1) * perPage;
    for(let i = 0 ; i < news.length; i++){
      const element = news[i];
      if(i >= start && i < end){
        element.style.display = 'flex';
      }else{
        element.style.display = 'none';
      }
    }
    counter.innerText = `${end > news.length ? news.length : end}/${news.length}`
  }

  window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    let image = images[parseInt(scroll/42)];
    if (image) {
        document.getElementById("animeback").style.backgroundPositionY = scroll+"px";
        document.getElementById("animeback").style.backgroundImage = `url(${image.src})`;
    }
    //document.getElementById("animeback").style.backgroundImage = "url('/img/intro/"+image+".png')";
  });

  function preloadImages(){
    for(let i = 21; i < 86; i++){
      const img = new Image();
      img.src = `/img/intro/${i}.png`;
      images.push(img);
    }
  }

  preloadImages();

 </script> 
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
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
    <link rel="stylesheet" type="text/css" href="css/frame-48097909.css" />
  </head>
  <body style="margin: 0; background: #f6f5f8">
    <input type="hidden" id="anPageName" name="page" value="frame-48097909" />
    <div class="container-center-horizontal">
      <div class="frame-48097909 screen" id="animeback">
        <div class="frame-container">
          @include('mobile.header')
          <div class="frame-48099033">
            <!-- <video autoplay muted loop class="video-background">
              <source src="/video/headerm.mp4" type="video/mp4" autoplay="1" />
            </video>-->
            <div class="overlap-group2-1 z-index2">
              <h1 class="innovative-lending-f">
               {{ $titles[0]['main_title_1'] }}<br />{{ $titles[0]['main_title_2'] }}
              </h1>
              <img class="european-union-1-2" src="img/european-union--1--2.svg" alt="european-union (1) 2" />
            </div>
            <p class="invest-in-eu-sme-loa mulish-normal-cod-gray-12px-2 z-index2">
              {{ $text[0]['main_text'] }}
            </p>

            <div class="group-48099003 z-index2">
              <img class="line-455" src="img/line-455.svg" alt="Line 455" />
              <div class="scroll-down mulish-bold-cod-gray-14px"><a href="#about" class="navbar-link navbar-1 menu">Scroll down</a></div>
            </div>

            <div class="price mulish-normal-cod-gray-12px-2 z-index2">USD</div>

              @foreach ($slides as $index => $slide)
                <div class="slide-box opacity-animate @if($index != 0) hidden @endif z-index2">
                  <div class="text-16 text urbanist-medium-cod-gray-24px">{{ $slide['top_row'] }}</div>
                  <div class="total-liquidity-provided mulish-normal-cod-gray-14px-2">{{ $slide['title'] }} <br />{{ $slide['bottom_row'] }}</div>
                  <img class="line-520" src="img/line-520.svg" alt="Line 520" />
                </div>
              @endforeach

              <div class="group-48098744 z-index2">
                  @foreach ($slides as $index => $slide)
                    <div class="rectangle-474 slide-box-button" onclick="setBox({{ $index }})"></div>
                  @endforeach
              </div>

          </div>
          <section id="about" class="z-index2"></section>
          <div class="frame-48099051 z-index2">
            <div class="frame-480988">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">01</div>
                </div>
              </div>
              <div class="about-us mulish-bold-cod-gray-16px">About us</div>
            </div>
            <div class="welcome-to-credefi-the urbanist-medium-cod-gray-24px">
            {{ $titles[0]['about_title_1'] }}
            </div>

            <img class="line" src="img/line-519.svg" alt="Line 466" />
            <p class="our-mission-is-to-br mulish-normal-cod-gray-14px-2">
             {{ $text[0]['about_text_1'] }}
            </p>
            <p class="our-lending-platform mulish-normal-cod-gray-14px-2">
            {{ $text[0]['about_text_2'] }}
            </p>
          </div>
          <div class="frame-48099052">
            <div class="frame-480988">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">02</div>
                </div>
              </div>
              <div class="our-mission mulish-bold-cod-gray-16px">Our mission</div>
            </div>
            <p class="i-am-proud-to-lead-a urbanist-medium-cod-gray-24px">
            {{ $titles[0]['mission_title'] }}
            </p>
            <p class="at-credefi-we-are-p mulish-normal-cod-gray-14px-2">
            {{ $text[0]['mission_text'] }}
            </p>
            <div class="overlap-group1">
              <div class="overlap-group2-2">
                <div class="rectangle-4907"></div>
                <img class="image-97" src="img/image 97.png" alt="image 97" />
                <div class="group-48098787">
                  <div class="overlap-group-4">
                    <div class="rectangle-4760"></div>
                    <div class="ceo mulish-bold-white-18px">CEO</div>
                  </div>
                </div>
              </div>
              <div class="ivo-grigorov mulish-bold-cod-gray-16px">Ivo Grigorov</div>
            </div>
            <div class="group-48099084">
              <div class="group-48098788">
                <img class="frame-48098790" src="img/frame-48098790.svg" alt="Frame 48098790" />
                <p class="we-bridge-eus-debt-financing-gap mulish-normal-cod-gray-16px-2">
                  We bridge EU&#39;s debt financing gap
                </p>
              </div>
              <div class="frame-48098790-1">
                <div class="frame-4809879"><img class="coins-01" src="img/coins-01.svg" alt="coins-01" /></div>
                <p class="we-offer-accessible mulish-normal-cod-gray-16px-2">
                  We offer accessible lending solutions for SMEs
                </p>
              </div>
              <div class="frame-48098">
                <div class="frame-4809879">
                  <img class="cube-outline" src="img/cube-outline.svg" alt="cube-outline" />
                </div>
                <p class="we-leverage-blockcha mulish-normal-cod-gray-16px-2">
                  We leverage blockchain technology to achieve secure and stable returns
                </p>
              </div>
            </div>
          </div>
          <section id="product"></section>
          <div class="frame-4809884">
            <div class="overlap-group5">
              <img class="ui-5" src="img/ui-5.png" alt="UI 5" />
              <div class="frame-48098796">
                <div class="group-48098750">
                  <div class="group-48098751">
                    <div class="overlap-group-1">
                      <div class="number-1 number-3">03</div>
                      <img class="ellipse-4" src="img/ellipse-4-4.svg" alt="Ellipse 4" />
                    </div>
                  </div>
                </div>
                <div class="platform mulish-bold-white-16px">Platform</div>
              </div>
              <p class="explore-our-platform urbanist-medium-white-24px">
               {{ $titles[0]['platform_title'] }}

              </p>
              <img class="vector-145" src="img/vector-145.svg" alt="Vector 145" />
              <div class="rectangle-4911"></div>
              <div class="go-to-platform valign-text-middle mulish-bold-blueberry-16px"><a href="http://platform.credefi.finance">Go to platform</a></div>
              <div class="overlap-group1-1">
                <div class="frame-48098822"><img class="x04-4" src="img/04-4@2x.png" alt="04-4" /></div>
                <div class="new-product">New product</div>
              </div>
              <div class="overlap-group2-3">
                <div class="frame-48098822-1 frame-48098822-3">
                  <img class="x01-3" src="img/01-3@2x.png" alt="01-3" />
                </div>
                <div class="easy-to-use">Easy to use</div>
              </div>
              <div class="e-container">
                <div class="rectangle-4853"></div>
                <div class="frame-48098821">
                  <div class="frame-48098822-2 frame-48098822-3"><img class="x3" src="img/3@2x.png" alt="3" /></div>
                  <div class="secure">Secure</div>
                </div>
              </div>
              <!-- <img class="shadow-2" src="img/shadow-2.png" alt="Shadow 2" /> -->
            </div>
          </div>
          <section id="lenders"></section>
          <div class="frame-48099036">
            <div class="frame-480988">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">04</div>
                </div>
              </div>
              <div class="lenders mulish-bold-cod-gray-16px">Lenders</div>
            </div>
            <p class="lenders-can-benefit urbanist-medium-cod-gray-24px">
            {{ $titles[0]['lenders_title'] }}
            </p>
            <img class="line" src="img/line-519.svg" alt="Line 467" />
            <video autoplay muted loop class="subtract" >
                    <source src="/video/phone1.mp4" type="video/mp4" autoplay="1" />
                  </video>
            <p class="invest-in-credefis mulish-normal-cod-gray-14px-2">
            {{ $text[0]['lenders_text'] }}
            </p>
            <div class="overlap-group1-2">
              <div class="debt-financing-gap mulish-normal-cod-gray-16px-2">{{ $tiles[0]['title']}}</div>
              <div id="tileNbr1" class="x176-b mulish-bold-cod-gray-28px" data-inviewport="grow">{{ $tiles[0]['before']}}<span id="nbr1">{{ $tiles[0]['number']}}</span>{{ $tiles[0]['after']}}</div>
            </div>
            <div class="overlap-group2">
              <div class="lend-now valign-text-middle mulish-bold-white-16px"><a href="http://platform.credefi.finance" style="color: #fff">Lend now</a></div>
            </div>
          </div>
          <section id="borrowers"></section>
          <div class="frame-48099037">
            <div class="frame-480988">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">05</div>
                </div>
              </div>
              <div class="borrowers mulish-bold-cod-gray-16px">Borrowers</div>
            </div>
            <p class="we-are-committed-to urbanist-medium-cod-gray-24px">
            {{ $titles[0]['borrowers_title'] }}
            </p>
            <img class="line" src="img/line-519.svg" alt="Line 468" />
            <video autoplay muted loop class="subtract" >
                    <source src="/video/phone2.mp4" type="video/mp4" autoplay="1" />
                  </video>
            <p class="credefi-offers-flexi mulish-normal-cod-gray-14px-2">
            {{ $text[0]['borrowers_text'] }}
            </p>
            <div class="overlap-group1-3">
              <p class="sme-struggle-to-get-financing mulish-normal-cod-gray-16px-2">{{ $tiles[1]['title']}}</p>
              <div id="tileNbr2" class="text-17 text mulish-bold-cod-gray-28px" data-inviewport="grow">{{ $tiles[1]['before']}}<span id="nbr2">{{ $tiles[1]['number']}}</span>{{ $tiles[1]['after']}}</div>
            </div>
            <div class="overlap-group2">
              <div class="apply-now valign-text-middle mulish-bold-white-16px"><a href="http://platform.credefi.finance" style="color: #fff">Apply now</a></div>
            </div>
          </div>
          <section id="security"></section>
          <div class="frame-48099038">
            <div class="frame-48098845">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">06</div>
                </div>
              </div>
              <div class="security mulish-bold-cod-gray-16px">Security</div>
            </div>
            <p class="credefi-is-platform urbanist-medium-cod-gray-24px">
            {{ $text[0]['security_text'] }}
            </p>
            <img class="line" src="img/line-519.svg" alt="Line 469" />
            <div class="flex-row">
              <div class="rwa-collateral mulish-normal-cod-gray-16px-2">{{ $tiles[2]['title']}}</div>
              <div id="tileNbr3" class="x300-k mulish-bold-cod-gray-28px" data-inviewport="grow">{{ $tiles[2]['before']}}<span id="nbr3">{{ $tiles[2]['number']}}</span>{{ $tiles[2]['after']}}</div>
            </div>
            <img class="line-5" src="img/line-519-1.svg" alt="Line 519" />
            <div class="flex-row-1">
              <div class="credit-risk-scoring mulish-normal-cod-gray-16px-2">{{ $tiles[3]['title']}}</div>
              <div id="tileNbr4" class="x300-k mulish-bold-cod-gray-28px" data-inviewport="grow">{{ $tiles[3]['before']}}<span id="nbr4">{{ $tiles[3]['number']}}</span>{{ $tiles[3]['after']}}</div>
            </div>
            <img class="line-5" src="img/line-519-1.svg" alt="Line 520" />
            <div class="group-48099036">
              <div class="module-x mulish-normal-cod-gray-16px-2">{{ $tiles[4]['title']}}</div>
              <div id="tileNbr5" class="x300-k mulish-bold-cod-gray-28px" data-inviewport="grow">{{ $tiles[4]['before']}}<span id="nbr5">{{ $tiles[4]['number']}}</span>{{ $tiles[4]['after']}}</div>
            </div>
          </div>
          <div class="frame-4809884">
            <div class="overlap-group6">
              <div class="frame-48098796">
                <div class="group-48098750">
                  <div class="group-48098751">
                    <div class="overlap-group-1">
                      <div class="number-1 number-3">07</div>
                      <img class="ellipse-4" src="img/ellipse-4-4.svg" alt="Ellipse 4" />
                    </div>
                  </div>
                </div>
                <div class="utility-and-rewards mulish-bold-white-16px">Utility and rewards</div>
              </div>
              <p class="here-you-need-to-wri urbanist-medium-white-24px">
              {{ $titles[0]['tokens_title'] }}
              </p>
              <img class="vector-145-1" src="img/vector-145.svg" alt="Vector 145" />
              <div class="group-48099037">
                <div class="credi mulish-bold-white-16px">$CREDI</div>
                <img class="line-45" src="img/line-457.svg" alt="Line 457" />
              </div>
              <p class="provides-additional mulish-normal-white-16px">
              {{ $text[0]['tokens_text_1'] }}
              </p>
              <img class="line-469" src="img/line-469-1.svg" alt="Line 469" />
              <div class="group-48099038">
                <div class="x-credi mulish-bold-white-16px">$xCREDI</div>
                <img class="line-45" src="img/line-457.svg" alt="Line 458" />
              </div>
              <p class="earned-through-depos mulish-normal-white-16px">
              {{ $text[0]['tokens_text_2'] }}
              </p>
              <div class="rectangle-4916"></div>
              <div class="rectangle-4918"></div>
              <div class="rectangle-4920"></div>
              <div class="group-48098746">
                <div class="rectangle-474"></div>
                <div class="rectangle-474"></div>
                <div class="rectangle-474"></div>
                <div class="rectangle-474-1 rectangle-474-3"></div>
                <div class="rectangle-474-1 rectangle-474-3"></div>
                <div class="rectangle-474-2 rectangle-474-3"></div>
                <div class="rectangle-474-2 rectangle-474-3"></div>
              </div>
              <div class="group-48099039">
                <div class="rectangle-474"></div>
                <div class="rectangle-474"></div>
                <div class="rectangle-474"></div>
                <div class="rectangle-474-1 rectangle-474-3"></div>
                <div class="rectangle-474-1 rectangle-474-3"></div>
                <div class="rectangle-474-2 rectangle-474-3"></div>
                <div class="rectangle-474-2 rectangle-474-3"></div>
              </div>
              <div class="group-48099040">
                <div class="rectangle-474"></div>
                <div class="rectangle-474"></div>
                <div class="rectangle-474"></div>
                <div class="rectangle-474-1 rectangle-474-3"></div>
                <div class="rectangle-474-1 rectangle-474-3"></div>
                <div class="rectangle-474-2 rectangle-474-3"></div>
                <div class="rectangle-474-2 rectangle-474-3"></div>
              </div>
              <div class="kucoin mulish-bold-cod-gray-18px">Kucoin</div>
              <div class="uniswap mulish-bold-cod-gray-18px">Apeswap</div>
              <div class="pancake mulish-bold-cod-gray-18px">Pancake</div>
              <img class="crypto-coin-4 crypto-coin" src="img/token-kukoin-02@2x.png" alt="Crypto Coin 4" />
              <img class="crypto-coin-5 crypto-coin" src="img/token-pan-02@2x.png" alt="Crypto Coin 5" />
              <img class="crypto-coin-6 crypto-coin" src="img/crypto-coin-4@2x.png" alt="Crypto Coin 6" />
              <div class="rectangle-4917"></div>
              <div class="rectangle-4919"></div>
              <div class="rectangle-4921"></div>
              <div class="buy mulish-bold-white-18px"><a href="https://www.kucoin.com/trade/CREDI-USDT" target="_blank" style="color: #fff;">BUY</a></div>
              <div class="buy-1 buy-3 mulish-bold-white-18px"><a href="https://apeswap.finance/swap?inputCurrency=0x2235e79086dd23135119366da45851c741874e5b&outputCurrency=0xbb4cdb9cbd36b01bd1cbaebf2de08d9173bc095c" target="_blank" style="color: #fff;">BUY</a></div>
              <div class="buy-2 buy-3 mulish-bold-white-18px"><a href="https://pancakeswap.finance/swap?chain=bsc&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56&outputCurrency=0x2235e79086dd23135119366da45851c741874e5B" target="_blank" style="color: #fff;">BUY</a></div>
              <!-- <img class="shadow-2-1" src="img/shadow-2-1.png" alt="Shadow 2" /> -->
            </div>
          </div>
          <div class="frame-48099039">
            <div class="frame-48098847">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">08</div>
                </div>
              </div>
              <div class="testimonials mulish-bold-cod-gray-16px">Testimonials</div>
            </div>

            @foreach ($testimonials as $testimonial)
            <p class="we-at-experian-work urbanist-medium-cod-gray-24px slide-text-box-data"> 
              {{ $testimonial['text'] }}
            </p>
            @endforeach
            <img class="line" src="img/line-519.svg" alt="Line 521" />
            
            @foreach ($testimonials as $index => $testimonial)
            <div class="frame-4809885 slide-text-box @if($index != 0) display-none @endif">
              <img class="ellipse-133" src="storage/{{ $testimonial['img'] }}" alt="Ellipse 133" />
              <div class="frame-48098813">
                <div class="rostislav-gyonkov valign-text-middle mulish-bold-cod-gray-16px">{{ $testimonial['name'] }}</div>
                <p class="experian-senior-business-consultant valign-text-middle mulish-normal-cod-gray-14px">
                {{ $testimonial['position'] }}
                </p>
              </div>
            </div>
            @endforeach

            <div class="group-48099041">
              <div class="group-48099037-1">
                
                <div class="group-48098822-1 slide-textbox-button" onclick="setTextBox(false)"><img class="polygon-1-3" src="img/polygon-1-1.svg" alt="Polygon 1" /></div>
              </div>
              <!-- <div class="text-19 valign-text-middle mulish-normal-white-18px-2">
                <span
                  ><span class="mulish-normal-cod-gray-18px">1</span
                  ><span class="span1 mulish-normal-cod-gray-14px">/8</span>
                </span>
              </div> -->
              <div class="group-48098822-1 slide-textbox-button" onclick="setTextBox(true)"><img class="polygon-1-3" src="img/polygon-1-1.svg" alt="Polygon 1" /></div>
            </div>

          </div>
          <div class="frame-48099040">
            <div class="frame-48098848">
              <div class="group-48098829">
                <div class="overlap-group">
                  <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                  <div class="number mulish-bold-cod-gray-14px">09</div>
                </div>
              </div>
              <div class="backers-and-partners mulish-bold-cod-gray-16px">Backers and partners</div>
            </div>
            <p class="we-work-together-for urbanist-medium-cod-gray-24px">
              We work together for greater impact - meet our valued partners
            </p>
            <img class="vector-147" src="img/vector-147.svg" alt="Vector 147" />

            <div class="group-48098979">
              @foreach ($partners as $partner)
              <div class="group-container">
                <article class="group-480989">
                  <img class="group-48098826" src="/storage/{{ $partner['img'] }}" alt="Group 48098826" />
                </article>
              </div>
              @endforeach
            </div>


            <div class="group-48099042">
               @foreach ($backers as $backer)
              <div class="group-container">
                <article class="group-480989">
                  <img class="group-48098826" src="/storage/{{ $backer['img'] }}" alt="Group 48098826" />
                </article>
              </div>
              @endforeach
            </div>

          </div>
          <section id="news"></section>
          <div class="frame-48099041">
            <div class="flex-col">
              <div class="frame-48098">
                <div class="group-48098829">
                  <div class="overlap-group">
                    <div class="group-48098828"><img class="ellipse-4" src="img/ellipse-4.svg" alt="Ellipse 4" /></div>
                    <div class="number mulish-bold-cod-gray-14px">10</div>
                  </div>
                </div>
                <div class="latest-news mulish-bold-cod-gray-16px">Latest news</div>
              </div>
              <p class="our-goal-is-to-keep urbanist-medium-cod-gray-24px">
                Our goal is to keep you informed and up-to-date at all times
              </p>

              @foreach ($articles as $article)
              <div class="new-box overlap-group11">
                <img class="rectangle-4832" src="storage/{{ $article['image']}}" alt="Rectangle 4832" />
                <div class="frame-48098834">
                  <p class="space-for-a-headline urbanist-bold-cod-gray-16px">
                  {{ $article['title']}} 
                  </p>
                  <div class="frame-48098833">
                    <div class="frame-4809883">
                      <img class="icon-c" src="img/clock.svg" alt="icon-clock" />
                      <div class="address urbanist-normal-cod-gray-14px">{{ $article['minutes'] }} min</div>
                    </div>
                    <div class="frame-4809883">
                      <img class="icon-c" src="img/calendar.svg" alt="icon-calendar" />
                      <div class="date urbanist-normal-cod-gray-14px">{{ $article['published'] }}</div>
                    </div>
                  </div>
                </div>
                <p class="description-for-the mulish-normal-cod-gray-14px">
                {{ $article['short_text'] }}
                </p>
                <div class="frame-48098834-1">
                  <div class="read-now valign-text-middle read mulish-bold-blueberry-16px">
                    <a href=/article/{{ $article['id']}}">Read now</a>
                  </div>
                </div>
              </div>
              @endforeach

            </div>

            <div class="flex-row-2">
              <div class="group-48098823 slide-textbox-button" onclick="parsePage(false)"><img class="polygon-1" src="img/polygon-1.svg" alt="Polygon 1" /></div>
              <div class="text-18 valign-text-middle mulish-normal-white-18px-2">
                <span
                  ><span id="news-counter" class="mulish-normal-cod-gray-18px">1</span
                  ><span class="span1 mulish-normal-cod-gray-14px">/{{ count($articles) }}</span>
                </span>
              </div>

              <div class="group-48099043 slide-textbox-button" onclick="parsePage(true)">
                <div class="overlap-group-3">
                  <div class="ellipse-134-1"></div>
                  <img class="polygon-1-2 polygon-1-3" src="img/polygon-1-1.svg" alt="Polygon 1" />
                </div>
              </div>
            </div>

            <div class="button">
              <div class="frame-41036">
                <div class="see-all valign-text-middle mulish-bold-white-16px"><a class="mulish-bold-white-16px" href="/articles">See all</a></div>
              </div>
            </div>
          </div>
          @include('mobile.footer')
        </div>
        <div class="x300-k-1 mulish-bold-cod-gray-42px">300K</div>
      </div>
    </div>
  </body>
  <script>

var tile =  document.getElementById("tileNbr1");
  var tile2 =  document.getElementById("tileNbr2");
  var tile3 =  document.getElementById("tileNbr3");
  var tile4 =  document.getElementById("tileNbr4");
  var tile5 =  document.getElementById("tileNbr5");

  const inViewport = (entries, observer) => {
    entries.forEach(entry => {
      entry.target.classList.toggle("is-inViewport", entry.isIntersecting);
      if(tile.classList.contains('is-inViewport') && tile.classList.contains('counted') == false){
        incEltNbr('nbr1');
        tile.classList.add("counted");
      };
      if(tile2.classList.contains('is-inViewport') && tile2.classList.contains('counted') == false){
        incEltNbr('nbr2');
        tile2.classList.add("counted");
      };
      if(tile3.classList.contains('is-inViewport') && tile3.classList.contains('counted') == false){
        incEltNbr('nbr3');
        tile3.classList.add("counted");
      };
      if(tile4.classList.contains('is-inViewport') && tile4.classList.contains('counted') == false){
        incEltNbr('nbr4');
        tile4.classList.add("counted");
      };
      if(tile5.classList.contains('is-inViewport') && tile5.classList.contains('counted') == false){
        incEltNbr('nbr5');
        tile5.classList.add("counted");
      };
    });
  };
  const images = [];

  const Obs = new IntersectionObserver(inViewport);
  const obsOptions = {}; 

  const ELs_inViewport = document.querySelectorAll('[data-inviewport]');
  ELs_inViewport.forEach(EL => {
    Obs.observe(EL, obsOptions);
  });

  var speed = 10;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
}

/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 1, endNbr, elt);
    }, speed);
  }
}


    function toggleMenu(){
      const menu = document.getElementById('mobile-menu');
      const visible = menu.classList.contains('show');
      if(visible){
        menu.classList.remove('show');
      }else{
        menu.classList.add('show');
      }
    }

    let intervalData;
    let selected = 0;
    const sliders = document.getElementsByClassName('slide-box');
    const slideButtons = document.getElementsByClassName('slide-box-button');

    setActiveSlider(selected);
    interval();

    function interval() {
      if(intervalData){
        clearInterval(intervalData);
      }
      intervalData = setInterval(() => {
        selected+=1;
        if(selected >= sliders.length){
          selected = 0;
        }
        setActiveSlider(selected);
      }, 5000);
    }

    function setBox(i){
      selected = i;
      setActiveSlider(i);
      interval();
    }

    function setActiveSlider(index){
      for(let i = 0 ; i < sliders.length; i++){
        const element = sliders[i];
        if(index == i){
          element.style.visibility = 'visible';
          element.style.opacity = '1';
          element.style.height = '130px';

        }else{
          element.style.opacity = '0';
          element.style.visibility = 'hidden';
          element.style.height = '0px';
        }
      }

      for(let i = 0 ; i < slideButtons.length; i++){
        const element = slideButtons[i];
        if(index == i){
          element.style.height = '10px';
        }else{
          element.style.height = '4px';
        }
      }
    }

  let intervalTextBoxData;
  let selectedTextBox = 0;
  const slideTextBoxes = document.getElementsByClassName('slide-text-box');
  const slideTextBoxesData = document.getElementsByClassName('slide-text-box-data');

  setActiveSlideTextBox(selectedTextBox);
  intervalTextBox();

  function intervalTextBox() {
    if(intervalTextBoxData){
      clearInterval(intervalTextBoxData);
    }
    intervalTextBoxData = setInterval(() => {
      selectedTextBox+=1;
      if(selectedTextBox >= slideTextBoxes.length){
        selectedTextBox = 0;
      }
      setActiveSlideTextBox(selectedTextBox);
    }, 5000);
  }

  function setTextBox(bool){

    if(bool){
      selectedTextBox+=1;
    }else{
      selectedTextBox-=1;
    }

    if(selectedTextBox < 0){
      selectedTextBox = 0;
    }

    if(selectedTextBox >= slideTextBoxes.length){
      selectedTextBox = slideTextBoxes.length-1;
    }

    setActiveSlideTextBox(selectedTextBox);
    intervalTextBox();
  }

  function setActiveSlideTextBox(index){
    for(let i = 0 ; i < slideTextBoxes.length; i++){
      const element = slideTextBoxes[i];
      if(index == i){
        element.style.display = 'flex';
      }else{
        element.style.display = 'none';
      }
    }

    for(let i = 0 ; i < slideTextBoxesData.length; i++){
      const element = slideTextBoxesData[i];
      if(index == i){
        element.style.display = 'block';
      }else{
        element.style.display = 'none';
      }
    }

  }

  const news = document.getElementsByClassName('new-box');
  const counter = document.getElementById('news-counter');
  const perPage = 1;
  let currentPage = 0;

  setNewsPage();

  function parsePage(bool){
    if(bool){
      currentPage+=1;
    }else{
      currentPage-=1;
    }

    if(currentPage < 0){
      currentPage = 0;
    }

    if(currentPage > Math.ceil(news.length / perPage)){
      currentPage = Math.ceil(news.length / perPage) - 1;
    }

    setNewsPage();

  }

  function setNewsPage(){

    const start = currentPage * perPage;
    const end = (currentPage + 1) * perPage;
    for(let i = 0 ; i < news.length; i++){
      const element = news[i];
      if(i >= start && i < end){
        element.style.display = 'flex';
      }else{
        element.style.display = 'none';
      }
    }
    counter.innerText = `${end > news.length ? news.length : end}`
  }

  window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    let image = images[parseInt(scroll/42)];
    if (image) {
        document.getElementById("animeback").style.backgroundPositionY = scroll+"px";
        document.getElementById("animeback").style.backgroundImage = `url(${image.src})`;
    }
  });

  function preloadImages(){
    for(let i = 21; i < 86; i++){
      const img = new Image();
      img.src = `/img/intro/${i}.png`;
      images.push(img);
    }
  }

  preloadImages();
  </script>
</html>

@endmobile