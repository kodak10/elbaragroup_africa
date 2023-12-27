@extends('dashboard.entreprises.layouts.app')
@section('content')
<section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Messages</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flat-dashboard-messages">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">

          <div class="wrapper-messages">
            <div class="content flex">
              <div class="left">
                <div class="dash-search">
                  <div class="widget search">
                    <div class="search-flat">
                      <form action="#" method="get" role="search" class="search-form">
                        <input type="search" class="search-field" placeholder="Search" value="" name="s"
                          title="Search for" required="">
                        <button class="search-icon search-submit" type="submit" title="Search"></button>
                      </form>
                    </div>
                  </div>
                </div>
                <ul class="people">
                  <li class="person flex" data-chat="person1">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-1.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Initech</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">05 min</span>
                  </li>
                  <li class="person flex" data-chat="person2">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-2.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Avitex Agency</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">07 min</span>
                  </li>
                  <li class="person flex" data-chat="person3">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-3.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Plexzap</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">08 min</span>
                  </li>
                  <li class="person flex" data-chat="person4">
                    <div class="images">
                      <span class="status-icon offline"></span>
                      <img src="../images/dashboard/messages-2.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Bubba Gump</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">45 min</span>
                  </li>
                  <li class="person flex" data-chat="person5">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-1.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Initech</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">05 min</span>
                  </li>
                  <li class="person flex" data-chat="person6">
                    <div class="images">
                      <span class="status-icon offline"></span>
                      <img src="../images/dashboard/messages-2.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Bubba Gump</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">45 min</span>
                  </li>

                  <li class="person flex" data-chat="person7">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-3.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Plexzap</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">08 min</span>
                  </li>

                  <li class="person flex" data-chat="person8">
                    <div class="images">
                      <span class="status-icon offline"></span>
                      <img src="../images/dashboard/messages-2.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Bubba Gump</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">45 min</span>
                  </li>
                  <li class="person flex" data-chat="person9">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-3.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Plexzap</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">08 min</span>
                  </li>
                  <li class="person flex" data-chat="person10">
                    <div class="images">
                      <span class="status-icon online"></span>
                      <img src="../images/dashboard/messages-2.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7">Bubba Gump</div>
                      <div class="preview fs-12 fw-5 ">Hey! there I'm available</div>
                    </div>
                    <span class="time fs-12">45 min</span>
                  </li>
                </ul>
              </div>
              <div class="right">
                <div class="top flex2">
                  <div class="images-box flex2">
                    <div class="images">
                      <img src="../images/dashboard/messages-2.jpg" alt="">
                    </div>
                    <div>
                      <div class="name fw-7 lh-24">Avitex Agency</div>
                      <div class="map fs-12 flex2">Las Vegas, NV 89107, USA</div>
                    </div>
                  </div>
                  <div id="items_3" class="dropdown titles-dropdown">
                    <a class="btn-selector nolink flex">
                      <span class="more-icon"></span>
                      <span class="more-icon"></span>
                      <span class="more-icon"></span>
                    </a>
                    <ul>
                      <li><span class="more-ic"></span> <span>View</span></li>
                      <li><span class=" more-ic"></span><span>Unlock</span></li>
                    </ul>
                  </div>
                </div>
                <div class="chat" data-chat="person1" data-message="message1">

                  <div class="history-time you style">
                    Today, 5:02 Am
                  </div>
                  <div class="bubble you style">
                    Hello
                  </div>

                  <div class="bubble me">
                    I was wondering...
                  </div>
                  <div class="conversation-start">
                    <span>August 22</span>
                  </div>
                </div>
                <div class="chat" data-chat="person2" data-message="message2">

                  <div class="history-time you style">
                    Today, 5:02 Am
                  </div>
                  <div class="bubble you style">
                    Hello
                  </div>

                  <div class="bubble me">
                    How are you?
                  </div>
                  <div class="history-time">
                    Today, 5:02 Am
                  </div>
                  <div class="conversation-start">
                    <span>August 22</span>
                  </div>
                  <div class="bubble you">
                    I'm good and you?
                  </div>
                  <div class="history-time you">
                    Today, 5:02 Am
                  </div>

                  <div class="bubble me">
                    Tell me about yourself
                  </div>
                  <div class="history-time">
                    Today, 5:02 Am
                  </div>

                  <div class="bubble me">
                    What are your strengths?
                  </div>
                  <div class="history-time">
                    Today, 5:02 Am
                  </div>

                  <div class="bubble you">
                    I’m a punctual person. I always arrive early and complete my work on time. My previous job
                    had a lot of deadlines (time when you must finish something by) and I made sure that I
                    was organized and adhered to (respected) all my jobs.
                  </div>
                  <div class="history-time you">
                    Today, 5:02 Am
                  </div>
                </div>
                <div class="chat" data-chat="person3">
                  <div class="conversation-start">
                    <span>Today, 3:38 AM</span>
                  </div>
                  <div class="bubble you">
                    Hey human!
                  </div>
                  <div class="bubble you">
                    Umm... Someone took a shit in the hallway.
                  </div>
                  <div class="bubble me">
                    ... what.
                  </div>
                  <div class="bubble me">
                    Are you serious?
                  </div>
                  <div class="bubble you">
                    I mean...
                  </div>
                  <div class="bubble you">
                    It’s not that bad...
                  </div>
                  <div class="bubble you">
                    But we’re probably gonna need a new carpet.
                  </div>
                </div>
                <div class="chat" data-chat="person4">
                  <div class="conversation-start">
                    <span>Yesterday, 4:20 PM</span>
                  </div>
                  <div class="bubble me">
                    Hey human!
                  </div>
                  <div class="bubble me">
                    Umm... Someone took a shit in the hallway.
                  </div>
                  <div class="bubble you">
                    ... what.
                  </div>
                  <div class="bubble you">
                    Are you serious?
                  </div>
                  <div class="bubble me">
                    I mean...
                  </div>
                  <div class="bubble me">
                    It’s not that bad...
                  </div>
                </div>
                <div class="chat" data-chat="person5">
                  <div class="conversation-start">
                    <span>Today, 6:28 AM</span>
                  </div>
                  <div class="bubble you">
                    Wasup
                  </div>
                  <div class="bubble you">
                    Wasup
                  </div>
                  <div class="bubble you">
                    Wasup for the third time like is <br />you blind bitch
                  </div>

                </div>
                <div class="chat" data-chat="person6">
                  <div class="conversation-start">
                    <span>Monday, 1:27 PM</span>
                  </div>
                  <div class="bubble you">
                    So, how's your new phone?
                  </div>
                  <div class="bubble you">
                    You finally have a smartphone :D
                  </div>
                  <div class="bubble me">
                    Drake?
                  </div>
                  <div class="bubble me">
                    Why aren't you answering?
                  </div>
                  <div class="bubble you">
                    howdoyoudoaspace
                  </div>
                </div>
                <div class="chat" data-chat="person7">

                  <div class="history-time you style">
                    Today, 5:02 Am
                  </div>
                  <div class="bubble you style">
                    Hello
                  </div>

                  <div class="bubble me">
                    I was wondering...
                  </div>
                  <div class="conversation-start">
                    <span>August 22</span>
                  </div>
                </div>
                <div class="chat" data-chat="person8">

                  <div class="history-time you style">
                    Today, 5:02 Am
                  </div>
                  <div class="bubble you style">
                    Hello
                  </div>

                  <div class="bubble me">
                    I was wondering...
                  </div>
                  <div class="conversation-start">
                    <span>August 22</span>
                  </div>
                </div>
                <div class="chat" data-chat="person9">
                  <div class="history-time you style">
                    Today, 5:02 Am
                  </div>
                  <div class="bubble you style">
                    Hello
                  </div>

                  <div class="bubble me">
                    I was wondering...
                  </div>
                  <div class="conversation-start">
                    <span>August 22</span>
                  </div>
                </div>
                <div class="chat" data-chat="person10">
                  <div class="history-time you style">
                    Today, 5:02 Am
                  </div>
                  <div class="bubble you style">
                    Hello
                  </div>

                  <div class="bubble me">
                    I was wondering...
                  </div>
                  <div class="conversation-start">
                    <span>August 22</span>
                  </div>
                </div>
                <div class="write flex2">
                  <div class="write-box flex2">
                    <input type="text" placeholder="Enter Message..." />
                    <a href="javascript:;" class="write-link attach-icon"><i class="fa fa-paperclip"
                        aria-hidden="true"></i></a>
                    <a href="javascript:;" class="write-link smile-icon"><i class="fa fa-smile-o"
                        aria-hidden="true"></i></a>

                  </div>
                  <a class="icon-send flex2"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
