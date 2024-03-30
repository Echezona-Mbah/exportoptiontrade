@include('users.head')
        
        <div class="row" style="background-color: #298fa6">
          <div
            class="col-md-16 col-lg-16 col-xl-16"
            style="background-color: #298fa6"
          >
            <div
              class="card full-screen-container"
              style="background-color: #298fa6"
            >
              <div
                class="card-header align-items-start justify-content-between flex"
                style=""
              >
                <h5 class="card-title pull-left" style="color: white">
                  <b>Live Trading Chart</b>
                </h5>
                <ul class="nav nav-pills card-header-pills pull-right">
                  <!-- <li class="nav-item">
            <button type="" class="btn btn-sm btn-outline-primary btn-round" id="livechart"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
          </li> -->
                  <li class="nav-item">
                    <button
                      class="btn btn-sm btn-link btn-round fullscreen-btn"
                    >
                      <i class="fa fa-arrows-alt"></i>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button
                      class="btn btn-sm btn-link btn-round"
                      data-toggle="collapse"
                      data-target="#demo"
                    >
                      <i class="fa fa-chevron-down"></i>
                    </button>
                  </li>
                </ul>
              </div>
              <div id="tablelivechart" style="background-color: #298fa6">
                <!-- chart -->
                <div
                  class="tradingview-widget-container"
                  id="demo"
                  style="background-color: #298fa6"
                >
                  <div id="tradingview_e705a" style="height: 550px">
                    <div
                      id="tradingview_3f0b0-wrapper"
                      style="position: relative;box-sizing: content-box;width: 100%;height: 100%;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, &#39;Trebuchet MS&#39;, Roboto, Ubuntu, sans-serif;"
                    >
                      <div
                        style="
                          width: 100%;
                          height: 100%;
                          background: transparent;
                          padding: 0 !important;
                        "
                      >
                        <iframe
                          id="tradingview_3f0b0"
                          src="{{asset('user/css/saved_resource(1).html')}}"
                          style="
                            width: 100%;
                            height: 100%;
                            margin: 0 !important;
                            padding: 0 !important;
                          "
                          frameborder="0"
                          allowtransparency="true"
                          scrolling="no"
                          allowfullscreen=""
                        ></iframe>
                      </div>
                    </div>
                  </div>
                  <script
                    type="text/javascript"
                    src="{{asset('user/js/tv.js.download')}}"
                  ></script>
                  <script type="text/javascript">
                    new TradingView.widget({
                      autosize: true,
                      // "width": 1200,
                      // "height": 610,
                      symbol: "NASDAQ:AMZN",
                      interval: "1",
                      timezone: "America/Los_Angeles",
                      theme: "dark",
                      style: "1",
                      locale: "en",
                      toolbar_bg: "#f1f3f6",
                      enable_publishing: false,
                      hide_side_toolbar: false,
                      allow_symbol_change: true,
                      details: true,
                      studies: [
                        "AwesomeOscillator@tv-basicstudies",
                        "MACD@tv-basicstudies",
                      ],
                      container_id: "tradingview_e705a",
                    });
                  </script>
                </div>
                <!-- chart end -->
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="background-color: #298fa6">
          <div
            class="col-md-16 col-lg-8 col-xl-8"
            style="background-color: #298fa6"
          >
            <div
              class="card full-screen-container"
              style="background-color: #298fa6"
            >
              <div
                class="card-header align-items-start justify-content-between flex"
              >
                <h5 class="card-title pull-left">
                  <b>Cryptocurrency Market</b>
                </h5>
                <ul class="nav nav-pills card-header-pills pull-right">
                  <!-- <li class="nav-item">
            <button type="" class="btn btn-sm btn-outline-primary btn-round" id="chart1"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
          </li> -->
                  <li class="nav-item">
                    <button
                      class="btn btn-sm btn-link btn-round fullscreen-btn"
                    >
                      <i class="fa fa-arrows-alt"></i>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button
                      class="btn btn-sm btn-link btn-round"
                      data-toggle="collapse"
                      data-target="#demo3"
                    >
                      <i class="fa fa-chevron-down"></i>
                    </button>
                  </li>
                </ul>
              </div>
              <div id="tablechart1" style="background-color: #298fa6">
                <div id="demo3" class="">
                  <!-- TradingView Widget BEGIN -->
                  <div
                    class="tradingview-widget-container"
                    style="width: 100%; height: 350px"
                  >
                    <iframe
                      allowtransparency="true"
                      frameborder="0"
                      src="{{asset('user/css/saved_resource(2).html')}}"
                      style="
                        box-sizing: border-box;
                        display: block;
                        height: 350px;
                        width: 100%;
                      "
                    ></iframe>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div> -->
                    <style>
                      .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        /* @mixin sf-pro-display-font; */
                        font-family: -apple-system, BlinkMacSystemFont,
                          "Trebuchet MS", Roboto, Ubuntu, sans-serif !important;
                        color: #9db2bd !important;
                      }

                      .tradingview-widget-copyright .blue-text {
                        color: #2962ff !important;
                      }

                      .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                      }

                      .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                      }

                      .tradingview-widget-copyright a:hover .blue-text {
                        color: #1e53e5 !important;
                      }

                      .tradingview-widget-copyright a:active .blue-text {
                        color: #1848cc !important;
                      }

                      .tradingview-widget-copyright a:visited .blue-text {
                        color: #2962ff !important;
                      }
                    </style>
                  </div>
                  <!-- TradingView Widget END -->
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
          <!-- <div class="row"> -->
          <div
            class="col-md-16 col-lg-8 col-xl-8"
            style="background-color: #298fa6"
          >
            <div
              class="card full-screen-container"
              style="background-color: #298fa6"
            >
              <div
                class="card-header align-items-start justify-content-between flex"
              >
                <h5 class="card-title pull-left">
                  <b>Stock Market Data</b>
                </h5>
                <ul class="nav nav-pills card-header-pills pull-right">
                  <!-- <li class="nav-item">
            <button type="" class="btn btn-sm btn-outline-primary btn-round" id="chart2"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
          </li> -->
                  <li class="nav-item">
                    <button
                      class="btn btn-sm btn-link btn-round fullscreen-btn"
                    >
                      <i class="fa fa-arrows-alt"></i>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button
                      class="btn btn-sm btn-link btn-round"
                      data-toggle="collapse"
                      data-target="#demo1"
                    >
                      <i class="fa fa-chevron-down"></i>
                    </button>
                  </li>
                </ul>
              </div>
              <div id="tablechart2" style="background-color: #298fa6">
                <div id="demo1" class="">
                  <div
                    class="tradingview-widget-container"
                    style="width: 100%; height: 350px"
                  >
                    <!-- TradingView Widget BEGIN -->
                    <!-- <div class="tradingview-widget-container"> -->
                    <iframe
                      scrolling="no"
                      allowtransparency="true"
                      frameborder="0"
                      src="{{asset('user/css/saved_resource(3).html')}}"
                      style="
                        box-sizing: border-box;
                        display: block;
                        height: 350px;
                        width: 100%;
                      "
                    ></iframe>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">stock</span></a> by TradingView</div> -->
                    <style>
                      .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        /* @mixin sf-pro-display-font; */
                        font-family: -apple-system, BlinkMacSystemFont,
                          "Trebuchet MS", Roboto, Ubuntu, sans-serif !important;
                        color: #9db2bd !important;
                      }

                      .tradingview-widget-copyright .blue-text {
                        color: #2962ff !important;
                      }

                      .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                      }

                      .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                      }

                      .tradingview-widget-copyright a:hover .blue-text {
                        color: #1e53e5 !important;
                      }

                      .tradingview-widget-copyright a:active .blue-text {
                        color: #1848cc !important;
                      }

                      .tradingview-widget-copyright a:visited .blue-text {
                        color: #2962ff !important;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@include('users.footer')