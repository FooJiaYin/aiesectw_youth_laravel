@extends('master')

@section('content')
    <!-- Intro Section -->
    <section class="inner-intro" style="background-image: url('/img/background.jpg');">
        <div class="container">
            <div class="row title">
                {{--<h2 class="h2">青年影響力論壇<br/>最後世代 大哉問</h2>--}}
                <div class="spacer-90"></div>
                <div class="spacer-90"></div>
                <div class="spacer-90"></div>
                <div class="spacer-90"></div>
                <a class="soldButton" target="_blank" href="http://www.accupass.com/go/9thysf">
                    <button class="btn btn-lg btn-black btn-color-b">立即參與</button>
                </a>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->
    <section class="ptb ptb-sm-60">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="page-icon-top">
                    <i class="ion ion-paper-airplane"></i>
                </div>
                <h3 class="h4">主題與介紹</h3>
                <h4>最後世代 大哉問｜第九屆青年影響力前導巡迴論壇</h4>
                <div class="spacer-15"></div>
                <img src="/img/網頁素材修改-01.png" width="100"/>
                <div class="spacer-15"></div>
                <p>
                    氣候變遷衝擊世界!<br/>
                    全球企業等將遭受高達4.2兆美元損失，市值將縮水9成!<br/>
                    熱浪來襲、糧食危機，熟悉生活完全變調
                    <br/>
                </p>
                <p class="spot">
                </p>
                <div class="spacer-15"></div>
                <img src="/img/網頁素材修改-02.png" width="100"/>
                <div class="spacer-15"></div>
                <p>
                    永續概念翻轉企業!<br/>
                    企業每年將創造7千億美元商機、<br/>
                    歐盟預估將新增超過58萬個工作機會!<br/>
                    逾450間企業，65國響應低碳轉型!
                    <br/>
                </p>
                <p class="spot h3 color">
                    當世界轉型成為必要，你還有什麼理由原地踏步？
                </p>
            </div>
        </div>
    </section>
    <hr />
    <section class="ptb ptb-sm-80 dark-bg light-color">
        <div class="container text-center animated">
            <h3>論壇將帶給你...</h3>
            <div class="spacer-60"></div>
            <div class="row">
                <div class="col-md-4 mb-45">
                    <div class="wow fadeIn" style="background: rgb(240,156,90); margin: 0 20px; padding: 20px 0;">
                        <img src="/img/網頁素材修改-03.png" style="height: 100px;"/>
                        <div class="spacer-15"></div>
                        <h2 class="h3">未來趨勢</h2>
                        <h4>科技X城市X經濟<br/>低碳創新轉型</h4>
                    </div>
                </div>
                <div class="col-md-4 mb-45">
                    <div class="wow fadeIn" style="background: rgb(111,200,240); margin: 0 20px; padding: 20px 0;">
                        <img src="/img/網頁素材修改-04.png" style="height: 100px;"/>
                        <div class="spacer-15"></div>
                        <h2>業界觀點</h2>
                        <h4>企業帶領討論實際<br/>案例、趨勢接軌</h4>
                    </div>
                </div>
                <div class="col-md-4 mb-45">
                    <div class="wow fadeIn" style="background: rgb(121,193,141); margin: 0 20px; padding: 20px 0;">
                        <img src="/img/網頁素材修改-05.png" style="height: 100px;"/>
                        <div class="spacer-15"></div>
                        <h2>行動藍圖</h2>
                        <h4>創業者XCEO觀點<br/>青年行動的方式</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <!-- Tab Section Section -->
    <section class="ptb ptb-sm-60">
        <div class="container">
            <div class="row text-center">
                <div class="page-icon-top wow bounceIn">
                    <i class="ion ion-clock"></i>
                </div>
                <h3 class="h4">議程</h3>
                <h4>四大議題環環相扣<div class="visible-xs"></div>完整內容打破拼盤式論壇迷思!</h4>
            </div>
            <div class="spacer-60"></div>
            <div class="row">
                <!-- Tab Style1 -->
                <div class="col-md-8 col-md-offset-2">
                    <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                                <a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">
                                    <i class="ion ion-calendar left"></i>08/24
                                </a>
                            </li>
                            {{--<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">--}}
                                {{--<a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">--}}
                                    {{--<i class="ion ion-calendar left"></i>08/28 第二天--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                        <div class="ui-tab-content">
                            <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" style="display: block;">
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child accordion-category">起點</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child">09:00~09:10 開幕式</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">09:10~10:00 對談 | 從台灣到全球16萬青年觀點，看世代問題與解方</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                                環保署署長 李應元<br/>國際氣候發展智庫執行長 趙恭岳<br/>台灣青年氣候聯盟 許菀庭<br/>AIESEC 2015-16總會長 周致遠<br/>
                                                [跨界連線]藝珂人事東北亞區總經理 陳玉芬、世紀奧美公關顧問 丁菱娟
                                            </span>
                                            <br/>
                                            從AIESEC全球16萬、台灣9000位青年的調查中，看青年世代面臨的問題與解方
                                        </h5>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">10: 00~10:30 專題演說 | 創新x科技x跨界 史丹佛講師、迪士尼指名低碳團隊前瞻視野與想法</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                            史丹佛大學講師、迪士尼科學家 許續仁(Kevin Hsu)<br/>
                                            </span>
                                            許續仁是迪士尼規劃研究科學家，也在史丹佛大學的城市研究課中授課。他致力研究低排碳城市，將給你國際視野與實踐可能性。
                                        </h5>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child accordion-category"><b>窺趨勢</b> 世界的關鍵趨勢:永續</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">10: 40~11:10 專題演說 | 從18家指標企業顧問經驗,看永續為企業帶來的改變與機會</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                                KPMG安侯建業永續發展顧問總經理黃正忠<br/>
                                            </span>
                                            20年永續趨勢、18家代表性顧客(日月光半導體、王品、富邦金控...等)經驗;聚焦金融、城市、科技，最深入的業界觀點 告訴你永續趨勢為企業帶來的改變與機會!
                                        </h5>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child accordion-category"><b>尋突破</b> 經濟綠色轉型潛力</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">11:10~12:30 演說X對談 | 永續浪潮來襲!企業CEO第一手轉型經驗與觀察!</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                                日月光半導體營運長 吳田玉<br/>國泰金控總經理 李長庚<br/>綠色貿易辦公室主任 溫麗琪<br/>
                                            </span>
                                            企業CEO第一手經驗與觀察，當面臨永續浪潮變革，企業該如何進行轉型?用先行者的經驗啟發你行動的靈感!
                                        </h5>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child accordion-category"><b>探未來</b> 創新工作坊|智慧城市大未來</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">13:30~16:30 工作坊 | 探索智慧城市未來</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                                【業師團隊】<br/>KPMG安侯建業 永續發展顧問團隊<br/>IBM x 愛樂活 生態永續數據分析團隊<br/>台北智慧城市專案辦公室<br/>
                                            </span>
                                            由業師團隊帶領解析實際案例，小組討論實際案例及解方，與業界趨勢、實務經驗接軌，掌握智慧城市發展實際方向與經驗。
                                        </h5>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child accordion-category"><b>創無限</b> 科技X創新 低碳經濟實踐</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">17:00~18:30 演說X對談 | 創業者 x 企業CEO 剖析科技結合永續 創造藍海之路</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                                綠然科技創辦人 胡德琪<br/>食藝集團創辦人 鄭惠如<br/>立凱電董事長兼總經理 張聖時<br/>
                                            </span>
                                            運輸、能源、飲食領域剖析結合科技與永續方法。無論你希望創業、或是進入企業工作，各領域CEO、創業者經驗與對談，將給你未來職涯及發展目標明確方向。
                                        </h5>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child accordion-category">閉幕 走出你的影響力</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">18:30~19:00 演說 | 6成青年想進入企業工作!B型企業模式探索企業獲益與社會永續</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <h5>
                                            <span style="color: rgb(25,51,127);">
                                                B型企業協會副理事長 連庭凱<br/>
                                            </span>
                                            根據AIESEC青年影響力大調查顯示，超過6成青年想進入企業工作，但如何兼顧發展與我們深愛的地方發展?B型企業是兼顧企業獲益與社會永續的代表，我們將在這裡，一起探討我們發揮影響力的方法!
                                        </h5>
                                    </div>
                                </div>

                            </div>
                            {{--<div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">--}}
                                {{--<div class="accordion-section">--}}
                                    {{--<h6 class="accordion-title">第二天開幕演說｜實踐、創新精神</h6>--}}
                                    {{--<div class="accordion-content defualt-hidden" style="display: none;">--}}
                                        {{--<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="accordion-section">--}}
                                    {{--<h6 class="accordion-title">未來永續創新實驗室Part 2｜</h6>--}}
                                    {{--<div class="accordion-content defualt-hidden" style="">--}}
                                        {{--<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="accordion-section">--}}
                                    {{--<h6 class="accordion-title">成果展現｜</h6>--}}
                                    {{--<div class="accordion-content defualt-hidden" style="">--}}
                                        {{--<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>--}}
                                        {{--<p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="accordion-section">--}}
                                    {{--<h6 class="accordion-title">四大企業對談｜</h6>--}}
                                    {{--<div class="accordion-content defualt-hidden" style="">--}}
                                        {{--<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>--}}
                                        {{--<p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="accordion-section">--}}
                                    {{--<h6 class="accordion-title">閉幕論壇｜未來世界，青年創造</h6>--}}
                                    {{--<div class="accordion-content defualt-hidden" style="">--}}
                                        {{--<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>--}}
                                        {{--<p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr />
    <section class="ptb ptb-60">
        <div class="container text-center animated">
            <div class="page-icon-top">
                <i class="ion ion-mic-c"></i>
            </div>
            <h3>主持人及講者</h3>
            <div class="spacer-60"></div>
            <div class="owl-carousel speech-carousel nf-carousel-theme">
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/05.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>黃正忠</h5>
                                    <p>KPMG安侯建業 永續發展顧問總經理</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>黃正忠</h5>
                            <p class="">KPMG安侯建業 永續發展顧問總經理</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/07.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>吳田玉</h5>
                                    <p>日月光半導體營運長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>吳田玉</h5>
                            <p class="">日月光半導體營運長</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/30.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>李長庚</h5>
                                    <p>國泰金控總經理</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>李長庚</h5>
                            <p class="">國泰金控總經理</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/08.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>Kevin Hsu 許續仁</h5>
                                    <p>史丹佛大學講師、科學家</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>Kevin Hsu 許續仁</h5>
                            <p class="">史丹佛大學講師、科學家</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/04.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>李應元</h5>
                                    <p>環保署署長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>李應元</h5>
                            <p class="">環保署署長</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/06.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>溫麗琪</h5>
                                    <p>綠色貿易辦公室主任</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>溫麗琪</h5>
                            <p class="">綠色貿易辦公室主任</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/02.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>​趙恭岳</h5>
                                    <p>國際氣候發展智庫執行長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>​趙恭岳</h5>
                            <p class="">國際氣候發展智庫執行長</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/29.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>連庭凱</h5>
                                    <p>亞太B型企業協會副理事長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>連庭凱</h5>
                            <p class="">亞太B型企業協會副理事長</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/01.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>周致遠</h5>
                                    <p>AIESEC 2015-16年度 總會長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>周致遠</h5>
                            <p class="">AIESEC 2015-16年度 總會長</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/03.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>許菀庭</h5>
                                    <p>台灣青年氣候聯盟執行長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>許菀庭</h5>
                            <p class="">台灣青年氣候聯盟執行長</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/31.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>林藝</h5>
                                    <p>寶島淨鄉團團長</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>林藝</h5>
                            <p class="">寶島淨鄉團團長</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/09.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>林泉興</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>林泉興</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/10.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>許資宜</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>許資宜</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/11.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>林書瑤</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>林書瑤</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/12.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>陳昱君</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>陳昱君</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/13.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>朱家緯</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>朱家緯</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/14.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>陳郁姍</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>陳郁姍</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/15.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>林亮璇</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>林亮璇</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/16.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>蔡盛宇</h5>
                                    <p>KPMG安侯建業</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>蔡盛宇</h5>
                            <p class="">KPMG安侯建業</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/21.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>吳乃沛</h5>
                                    <p>IBM</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>吳乃沛</h5>
                            <p class="">IBM</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/22.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>蔡宗倫</h5>
                                    <p>IBM</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>蔡宗倫</h5>
                            <p class="">IBM</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/23.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>李佳芸</h5>
                                    <p>IBM</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>李佳芸</h5>
                            <p class="">IBM</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/24.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>林怡安</h5>
                                    <p>IBM</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>林怡安</h5>
                            <p class="">IBM</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/25.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>葉曉融</h5>
                                    <p>IBM</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>葉曉融</h5>
                            <p class="">IBM</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/17.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>李震宇</h5>
                                    <p>台北智慧城市辦公室</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>李震宇</h5>
                            <p class="">台北智慧城市辦公室</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/18.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>秦偉翔</h5>
                                    <p>台北智慧城市辦公室</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>秦偉翔</h5>
                            <p class="">台北智慧城市辦公室</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/19.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>黃淳儀</h5>
                                    <p>台北智慧城市辦公室</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>黃淳儀</h5>
                            <p class="">台北智慧城市辦公室</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/20.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>張旭佑</h5>
                                    <p>台北智慧城市辦公室</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>張旭佑</h5>
                            <p class="">台北智慧城市辦公室</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/26.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>張聖時</h5>
                                    <p>立凱電董事長兼總經理</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>張聖時</h5>
                            <p class="">立凱電董事長兼總經理</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/27.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>胡德琪</h5>
                                    <p>綠然科技創辦人</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>胡德琪</h5>
                            <p class="">綠然科技創辦人</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item nf-col-padding">
                        <div class="team-item-img">
                            <img src="/img/team/28.png" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>鄭惠如</h5>
                                    <p>食藝集團創辦人</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>鄭惠如</h5>
                            <p class="">食藝集團創辦人</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section class="ptb ptb-60">
        <div class="container text-center animated">
            <div class="page-icon-top">
                <i class="ion ion-card"></i>
            </div>
            <h3>立即購票</h3>
            <iframe title="Accupass 報名表" marginwidth="0" marginheight="0" frameborder="0" border="0" scrolling="yes"
                    src="//www.accupass.com/event/shareregister/1606040410331987297594" width="100%"
                    height="900px"></iframe>
        </div>
    </section>
    <hr />
    <section class="pt">
        <div class="container text-center animated">
            <div class="page-icon-top">
                <i class="ion-flag"></i>
            </div>
            <h3>詳細資訊</h3>
            <div class="spacer-30"></div>
            <h4>
                時間:2016/8/24(三) 09:00~19:00<br/>
                地點:台大綜合體育館多功能球場
            </h4>
            <div class="spacer-30"></div>
        </div>
    </section>

    <section class="map">
        <div id="map"></div>
    </section>

    <!-- Client Logos Section -->
    <section id="client-logos" class="wow fadeIn ptb ptb-sm-80">
        <div class="container">
            <div class="owl-carousel client-carousel nf-carousel-theme ">
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/安侯建業.png" alt="安侯建業Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/日月光集團.png" alt="日月光集團Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/IBM.png" alt="IBM Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/台北智慧城市專案辦公室.png" alt="台北智慧城市專案辦公室Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/綠然科技.png" alt="綠然科技Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/台北市.png" alt="台北市Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/綠色貿易專案辦公室.png" alt="綠色貿易專案辦公室Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/Aleees.png" alt="Aleees Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/accupass.png" alt="accupass Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/環音.png" alt="環音 Logo" />
                    </div>
                </div>
                <div class="item">
                    <div class="client-logo">
                        <img src="/img/logos/edit/TWYCC.png" alt="TWYCC Logo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Logos Section -->
@endsection

@section('footer')
    <script>
        $(function(){
            BackgroundCheck.init({
                targets: '.full-intro',
                images: '.inner-intro'
            });
        });
    </script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvVPV8cGvJ9iEvkU5B9bvzLh7U5I00550&sensor=false"></script>
    <script type="text/javascript" src="/js/map.js"></script>
@endsection


