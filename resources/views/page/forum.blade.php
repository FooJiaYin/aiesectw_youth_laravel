@extends('master')

@section('content')
    <!-- Intro Section -->
    <section class="inner-intro overlay-dark" style="background-image: url('/img/DSC_1800.jpg');">
        <div class="container">
            <div class="row title light-color">
                <h2 class="h2">青年影響力論壇<br/>最後世代 大哉問</h2>
                <div class="page-breadcrumb">
                    <a href="/">首頁</a>/<span>青年影響力論壇</span>
                </div>
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
            </div>
            <div class="col-md-8 col-md-offset-2 text-center">
                <p>
                    未來世界最重要的趨勢：永續<br/>
                    從商業模式、 生活習慣到科技發展<br/>
                    未來世界，永續思維將無所不在<br/>
                </p>
                <p class="spot">
                    我們，最後能夠因應世界巨變的世代<br/>
                    與我們一起探索，未來世界的無限可能<br/>
                <p class="spot">
                    趨勢對談、業師深度交流、創新實驗室<br/>
                    今年八月，最顛覆的全新論壇型態即將登場，敬請期待
                </p>
            </div>
        </div>
    </section>
    <!-- Tab Section Section -->
    <section class="ptb ptb-sm-60">
        <div class="container">
            <div class="row text-center">
                <div class="page-icon-top">
                    <i class="ion ion-clock"></i>
                </div>
                <h3 class="h4">議程</h3>
            </div>
            <div class="spacer-60"></div>
            <div class="row ">
                <!-- Tab Style1 -->
                <div class="col-md-8 col-md-offset-2">
                    <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                                <a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">
                                    <i class="ion ion-calendar left"></i>08/27 第一天
                                </a>
                            </li>
                            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
                                <a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">
                                    <i class="ion ion-calendar left"></i>08/28 第二天
                                </a>
                            </li>
                        </ul>
                        <div class="ui-tab-content">
                            <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" style="display: block;">
                                <div class="accordion-section">
                                    <h6 class="accordion-title">開幕論壇｜青年影響力的實踐</h6>
                                    <div class="accordion-content defualt-hidden" style="display: none;">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">專題演說｜2030未來世界的趨勢</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">專題對談｜趨勢聚焦！將無所不在的創新永續思維</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title no-child">午餐時間</h6>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">創新交流｜趨勢實踐力！</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">未來永續創新實驗室Part 1｜</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">第一天閉幕演說｜在創新這條路上如何面對困難</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                    </div>
                                </div>

                            </div>
                            <div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
                                <div class="accordion-section">
                                    <h6 class="accordion-title">How tough is Kick Dummy? Will it split?</h6>
                                    <div class="accordion-content defualt-hidden" style="display: none;">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">Will the Kick Dummy fall over?</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">Do I need a pump to inflate Kick Dummy?</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                    </div>
                                </div>
                                <div class="accordion-section">
                                    <h6 class="accordion-title">How can I store away Kick Dummy?</h6>
                                    <div class="accordion-content defualt-hidden" style="">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel</p>
                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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
@endsection


