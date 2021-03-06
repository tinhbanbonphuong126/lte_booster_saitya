@extends('layouts.frontend.app')

@section('title', '会社概要')
@section('description', '会社概要, 事業内容, 分譲地, お問合わせ, プライバシーポリシー')
@section('keywords', '会社概要, 事業内容, 分譲地, お問合わせ, プライバシーポリシー')

@section('style')
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>--}}
    <link rel="stylesheet" href="{{ asset("css/about-us/about-us.css") }}" type="text/css" media="all"/>
    <style tyle="text/css">
        input.error, textarea.error {
            border-color: #f82020 !important;
            -webkit-box-shadow: 0px 0px 2px 0px rgba(227, 20, 20, 1);
            -moz-box-shadow: 0px 0px 2px 0px rgba(227, 20, 20, 1);
            box-shadow: 0px 0px 2px 0px rgba(227, 20, 20, 1);
            border: none;
        }
        .cell_form .after label.error {
            color: #f82020;
            margin-top: 7px;
        }
        #successModal .modal-dialog .modal-content .modal-body p {
            text-align: center;
            font-size: 22px;
            height: 100px;
        }
    </style>
@endsection

@section('content')

    <div class="main-content">

        <div class="top_banner_gazou">
            @include("layouts.frontend.partial.component.cpn_header_banner_gazou")
        </div>

        <div class="naiyou_page container">

            <div id="bunjochi"></div>
            <div class="aisatsu">
                <div class="text_aisatsu">
                    高松市・丸亀市・坂出市など香川県を中心に、マンション・戸建・土地等の不動産売却、購入、土地活用をお手伝いいたします。
                    お住み替えや資産活用など、お客様の目的に合わせたご提案、きめ細やかなサポートをお約束いたします。
                </div>
            </div>

            <div class="bunjochi">
                <div class="circle_title">
                    @include("layouts.frontend.partial.component.cpn_circle_title", ["contentCircle" => "分譲地"])
                </div>
                <div class="content">
                    <ul class="bound_ul">
                        @foreach($bunjouchis as $key_bunjouchi => $bunjouchi)
                            @include("layouts.frontend.partial.component.loop_bunjochi")
                        @endforeach
                    </ul>
                </div>
            </div>

            <div id="company"></div>
            <div class="kaisha_gaiyou">
                <div class="circle_title">
                    @include("layouts.frontend.partial.component.cpn_circle_title", ["contentCircle" => "会社概要"])
                </div>
                <div class="content">
                    <ul class="bound_ul">
                        <li class="cell_li_table double">
                            <span class="before">商  号</span>
                            <span class="after">サティヤ不動産　(株)ＳＡＴＹＡ</span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">住  所</span>
                            <span class="after">住所763-0024 香川県丸亀市塩飽町11番地1 SATYA.BLD 2F</span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">代表者</span>
                            <span class="after">代表者岸本　浩三</span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">免許番号</span>
                            <span class="after">免許番号香川県知事免許（2）第4169号</span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">所属団体名</span>
                            <span class="after">所属団体名(公社)全日本不動産協会会員/四国地区不動産公正取引協議会加盟</span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">保証協会</span>
                            <span class="after">保証協会(公社)不動産保証協会</span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">主な取扱物件</span>
                            <span class="after">
                            主な取扱物件貸アパート・マンション 貸戸建ほか マンスリー 貸事務所・店舗 駐車場リロケーション
                            貸工場・倉庫 売新築マンション 売新築一戸建 売中古マンション 売中古一戸建 公団・公社 売土地 売工場・
                            倉庫 売事務所・店舗 投資用・その他 リゾート物件
                        </span>
                        </li>
                        <li class="cell_li_table double">
                            <span class="before">取引銀行</span>
                            <span class="after">
                            取引銀行百十四銀行、香川銀行、四国銀行、中国銀行、観音寺信用金庫、愛媛銀行、伊予銀行、香川県信用組合、
                            高松信用金庫、日本政策金融公庫
                        </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="jigyou"></div>

            <div class="jigyou_naiyou">
                <div class="circle_title">
                    @include("layouts.frontend.partial.component.cpn_circle_title", ["contentCircle" => "事業内容"])
                </div>
                <div class="content1">
                    <div class="title">
                        @include("layouts.frontend.partial.component.cpn_title", ["title" => "不動産売買・売買仲介"])
                    </div>
                    <div class="bounce_below">
                        <p class="description">
                            高松市・丸亀市・坂出市など香川県を中心に、マンション・戸建・土地等の不動産売却、購入、土地活用をお手伝いいたします。
                        </p>
                        <div class="bounce_image">
                            <a target="_blank" href="http://www.satya.co.jp/sale/index.html">
                                <img class="" src="{{ asset("img/about-us/kozo_town.png") }}" alt="Image Thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content2">
                    <div class="title">
                        @include("layouts.frontend.partial.component.cpn_title", ["title" => "不動産賃貸借・賃貸借仲介"])
                    </div>
                    <div class="bounce_below">
                        <p class="description">
                            マンション・アパート・戸建などの不動産賃貸物件の仲介を行っております。
                            店舗や事務所などの商業物件も数多く取り扱っておりますので、お客様のニーズに合った物件をご紹介させていただけます。 </p>
                        <div class="bounce_image">
                            <a target="_blank" href="https://www.athome.co.jp/ahcs/satya-fudousan.html">
                                <img src="{{ asset("img/about-us/satya.png") }}" alt="Image Thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="toiawase"></div>

            <div class="toiawase">
                <div class="circle_title">
                    @include("layouts.frontend.partial.component.cpn_circle_title", ["contentCircle" => "お問合わせ"])
                </div>
                <div class="content1">
                    <div class="title">
                        @include("layouts.frontend.partial.component.cpn_title", ["title" => "お電話でのお問合わせ"])
                    </div>
                    <div class="tel_info">
                        <img class="" src="{{ asset("img/about-us/tel_info.png") }}" alt="Detail Info">
                    </div>
                </div>
                <div class="content2">
                    <div class="title">
                        @include("layouts.frontend.partial.component.cpn_title", ["title" => "メールフォーム"])
                    </div>
                    <div class="form_info">
                        <form id="formSubmit" class="formSubmit" action="{{ route("submitForm") }}" method="post">
                            {{ csrf_field() }}
                            <p class="hitsuyou">＊必須</p>
                            <div class="form_content">
                                <div class="cell_form">
                                    <div class="before">
                                        お名前 <span class="mark_hitsuyou">＊</span>
                                    </div>
                                    <div class="after">
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="cell_form">
                                    <div class="before">
                                        ふりがな <span class="mark_hitsuyou">＊</span>
                                    </div>
                                    <div class="after">
                                        <input type="text" name="furigana">
                                    </div>
                                </div>
                                <div class="cell_form">
                                    <div class="before">
                                        メールアドレス <span class="mark_hitsuyou">＊</span>
                                    </div>
                                    <div class="after">
                                        <input type="text" name="mail_address">
                                    </div>
                                </div>
                                <div class="cell_form">
                                    <div class="before">
                                        電話番号 <span class="mark_hitsuyou"></span>
                                    </div>
                                    <div class="after">
                                        <input type="text" name="tel_number">
                                    </div>
                                </div>
                                <div class="cell_form">
                                    <div class="before">
                                        お問い合わせ内容 <span class="mark_hitsuyou">＊</span>
                                    </div>
                                    <div class="after">
                                    <textarea name="toiawase_content" id="toiawaseContent"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="bounce_submit">
                                <button class="btn btn_submit_form" id="btnSubmitForm" type="submit">送信する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="privacy">
                <div class="circle_title">
                    @include("layouts.frontend.partial.component.cpn_circle_title", ["contentCircle" => "プライバシーポリシー"])
                </div>
                <div class="content">
                    <p class="description graph1">
                        株式会社SATYA（以下、「当社」）がお客様に商品やサービスをご提供するにあたり、お客様の個人情報を提供していただくことがあります。その場合、個人情報に関する法令および以下の規約に基づき、情報の保護を行っております。
                    </p>
                    <p class="description graph2">
                        １．当社では、お客様の個人情報を以下の目的以外には利用いたしません。 <br/>
                        　　・賃貸/売買の不動産情報等のご案内等を提供するため、郵便、電話、電子メール等の方法により<span class="hide_creative">　　　</span>お知らせすること
                        <br/>
                        　　・当社において取り扱う商品、サービス等あるいは各種イベント、キャンペーン等の開催について、<span class="hide_creative">　　　</span>郵便、電話、電子メール等の方法によりご案内すること
                        <br/>
                        　　・サービス向上のため、アンケート調査を実施すること
                    </p>
                    <p class="description graph3">
                        ２．当社は、お客様の個人情報を、正当な理由のない限り他社、第三者に提供いたしません。
                    </p>
                    <p class="description graph4">
                        ３．当社は、お客様がご本人様の個人情報の確認、訂正等を希望される場合は、当社の定める書面の提出により開示に応じます。
                        提供いただいた個人情報を取り扱うにあたっては管理責任者を置き、適切な管理を行っております。なお、当サイト内で、個人情報の取り扱いについて個別に述べている場合は、そちらの記述が優先します。
                    </p>
                    <p class="description graph5">
                        ＜個人情報の取り扱いに関する問い合わせ窓口＞ <br/>
                        株式会社SATYA（お客様相談室）電話…0120-85-3082　メール…
                        <a class="send_mail" href="mailto: i&#110;fo&#64;satya.c&#111;.j&#112;">i&#110;fo&#64;satya.c&#111;.j&#112;</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{--POP UP--}}
    <div class="modal fade" id="successModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>お問い合わせありがとうございます。<br>
                        送信が完了いたしました。</p>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')

    <script type="text/javascript" src="{{ asset("plugins/gasparesganga-jquery-loading-overlay/src/loadingoverlay.js") }}"></script>
    <script type="text/javascript" src="{{ asset("plugins/jquery_validator/jquery.validate.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/validationConfig.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/about-us/about-us.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection