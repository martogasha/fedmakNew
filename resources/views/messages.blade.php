@include('Partials.header')
@include('flash-message')
<title>Messages</title>
<body class="menu-position-side menu-side-left">
<div class="all-wrapper no-padding-content solid-bg-all">
    <div class="search-with-suggestions-w">
        <div class="search-with-suggestions-modal">
            <div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search...">
                <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
            </div>
            <div class="search-suggestions-group">
                <div class="ssg-header">
                    <div class="ssg-icon">
                        <div class="os-icon os-icon-box"></div>
                    </div>
                    <div class="ssg-name">Projects</div>
                    <div class="ssg-info">24 Total</div>
                </div>
                <div class="ssg-content">
                    <div class="ssg-items ssg-items-boxed"><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/company6.png)"></div>
                            <div class="item-name">Integ<span>ration</span> with API</div>
                        </a><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/company7.png)"></div>
                            <div class="item-name">Deve<span>lopm</span>ent Project</div>
                        </a></div>
                </div>
            </div>
            <div class="search-suggestions-group">
                <div class="ssg-header">
                    <div class="ssg-icon">
                        <div class="os-icon os-icon-users"></div>
                    </div>
                    <div class="ssg-name">Customers</div>
                    <div class="ssg-info">12 Total</div>
                </div>
                <div class="ssg-content">
                    <div class="ssg-items ssg-items-list"><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
                            <div class="item-name">John Ma<span>yer</span>s</div>
                        </a><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
                            <div class="item-name">Th<span>omas</span> Mullier</div>
                        </a><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
                            <div class="item-name">Kim C<span>olli</span>ns</div>
                        </a></div>
                </div>
            </div>
            <div class="search-suggestions-group">
                <div class="ssg-header">
                    <div class="ssg-icon">
                        <div class="os-icon os-icon-folder"></div>
                    </div>
                    <div class="ssg-name">Files</div>
                    <div class="ssg-info">17 Total</div>
                </div>
                <div class="ssg-content">
                    <div class="ssg-items ssg-items-blocks"><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
                            <div class="item-name">Work<span>Not</span>e.txt</div>
                        </a><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                            <div class="item-name">V<span>ideo</span>.avi</div>
                        </a><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-database"></i></div>
                            <div class="item-name">User<span>Tabl</span>e.sql</div>
                        </a><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                            <div class="item-name">wed<span>din</span>g.jpg</div>
                        </a></div>
                    <div class="ssg-nothing-found">
                        <div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div>
                        <span>No files were found. Try changing your query...</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-w">
        <div class="content-w">
            <div class="top-bar color-scheme-transparent d-none">
                <div class="top-menu-controls">
                    <div class="element-search autosuggest-search-activator"><input
                            placeholder="Start typing to search..."></div>
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i
                            class="os-icon os-icon-mail-14"></i>
                        <div class="new-messages-count">12</div>
                        <div class="os-dropdown light message-list">
                            <ul>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">John Mayers</h6><h6
                                                class="message-title">Account Update</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Phil Jones</h6><h6
                                                class="message-title">Secutiry Updates</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Bekky Simpson</h6><h6
                                                class="message-title">Vacation Rentals</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6
                                                class="message-title">Payment Confirmation</h6></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i
                            class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                                </li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                                </li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                                </li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="logged-user-w">
                        <div class="logged-user-i">
                            <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                            <div class="logged-user-menu color-style-bright">
                                <div class="logged-user-avatar-info">
                                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="logged-user-info-w">
                                        <div class="logged-user-name">Maria Gomez</div>
                                        <div class="logged-user-role">Administrator</div>
                                    </div>
                                </div>
                                <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                <ul>
                                    <li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                                    </li>
                                    <li><a href="users_profile_big.html"><i
                                                class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                                    </li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                                    </li>
                                    <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                                    </li>
                                    <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="full-chat-w">
                        <div class="full-chat-i">
                            <div class="full-chat-left">
                                <div class="os-tabs-w">
                                    <ul class="nav nav-tabs upper centered">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                href="#tab_overview"><i
                                                    class="os-icon os-icon-mail-14"></i><span>Chats</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_sales"><i
                                                    class="os-icon os-icon-ui-93"></i><span>Contacts</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_sales"><i
                                                    class="os-icon os-icon-ui-02"></i><span>Favorites</span></a></li>
                                    </ul>
                                </div>
                                <div class="chat-search">
                                    <div class="element-search"><input placeholder="Search users by name..."></div>
                                </div>
                                <div class="user-list">
                                    @foreach($messages as $message)
                                        <div class="user-w" >

                                            <div class="avatar with-status status-green"><img alt="" src="img/avatar1.jpg">
                                        </div>
                                        <div class="user-info">
                                            <div class="user-date">12 min</div>
                                            <div class="user-name">{{$message->sender->name}}</div>
                                            <input type="hidden" id="getUserId" value="{{$message->sender_id}}">
                                        </div>
                                            @if(\App\Message::where('user_id',$message->sender_id)->where('status',0)->count() >0)
                                            <span class="badge-danger">{{\App\Message::where('user_id',$message->sender_id)->where('status',0)->count()}}</span>
                                            @else
                                                <span></span>
                                                @endif

                                        </div>

                                    @endforeach

                                </div>
                            </div>

                            <div class="full-chat-middle" id="chatMiddle">
                                <div class="container">
                                    <div class="messaging">
                                        <div class="inbox_msg">
                                            <div class="mesgs" id="messageInfo">

                                            </div>
                                            <div class="inbox_msg">
                                                <div class="type_msg"   >
                                                    <form action="{{route('message.store')}}" method="post">
                                                        @csrf
                                                        <div class="input_msg_write">
                                                            <input type="text" name="message" class="write_msg" placeholder="Type a message" />
                                                            <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                            </div>



                            <div class="full-chat-right">
                                <div class="user-intro">
                                    <div class="avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="user-intro-info"><h5 class="user-name">John Mayers</h5>
                                        <div class="user-sub">San Francisco, CA</div>
                                        <div class="user-social"><a href="#"><i class="os-icon os-icon-twitter"></i></a><a
                                                href="#"><i class="os-icon os-icon-facebook"></i></a></div>
                                    </div>
                                </div>
                                <div class="chat-info-section">
                                    <div class="ci-header"><i class="os-icon os-icon-documents-03"></i><span>Shared Files</span>
                                    </div>
                                </div>
                                <div class="chat-info-section">
                                    <div class="ci-header"><i class="os-icon os-icon-documents-07"></i><span>Shared Photos</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/bootstrap/js/dist/util.js"></script>
<script src="bower_components/bootstrap/js/dist/alert.js"></script>
<script src="bower_components/bootstrap/js/dist/button.js"></script>
<script src="bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="bower_components/bootstrap/js/dist/modal.js"></script>
<script src="bower_components/bootstrap/js/dist/tab.js"></script>
<script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="bower_components/bootstrap/js/dist/popover.js"></script>
<script src="js/demo_customizer5739.js?version=4.5.0"></script>
<script src="js/main5739.js?version=4.5.0"></script>
<script type="text/javascript">
    $('.user-w > div').on('click', function() {
        $value = $('input[id^="getUserId"]', this).val();
        $.ajax({
            type:"get",
            url:"{{url('ajax3')}}",
            data:{'message':$value},
            success:function (data) {
                $('#messageInfo').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        })
    });
</script>
<style>
    .container{max-width:1170px; margin:auto;}

    img{ max-width:100%;}
    .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
    }
    .top_spac{ margin: 20px 0 0;}


    .recent_heading {float: left; width:40%;}
    .srch_bar {
        display: inline-block;
        text-align: right;
    }
    .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

    .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
    }
    .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
    .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
    }
    .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

    .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
    .chat_ib h5 span{ font-size:13px; float:right;}
    .chat_ib p{ font-size:14px; color:#989898; margin:auto}
    .chat_img {
        float: left;
        width: 11%;
    }
    .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
    }

    .chat_people{ overflow:hidden; clear:both;}
    .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
    }
    .inbox_chat { height: 550px; overflow-y: scroll;}

    .active_chat{ background:#ebebeb;}

    .incoming_msg_img {
        display: inline-block;
        width: 6%;
    }
    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
    }
    .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }
    .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
    }
    .received_withd_msg { width: 57%;}
    .mesgs {
        float: left;
        padding: 30px 15px 0 25px;
        width: 100%;
    }

    .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0; color:#fff;
        padding: 5px 10px 5px 12px;
        width:100%;
    }
    .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
    .sent_msg {
        float: right;
        width: 46%;
    }
    .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
    }

    .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
    .msg_send_btn {
        background: #05728f none repeat scroll 0 0;
        border: medium none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        height: 33px;
        position: absolute;
        right: 0;
        top: 11px;
        width: 33px;
    }
    .messaging { padding: 0 0 50px 0;}
    .msg_history {
        height: 450px;
        overflow-y: auto;
    }
</style>
</body>
<!-- Mirrored from light.pinsupreme.com/apps_full_chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:19 GMT -->
</html>
