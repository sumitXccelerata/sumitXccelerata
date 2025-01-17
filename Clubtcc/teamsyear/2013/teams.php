<?php
$sel="history";
include_once('../../header.php');
?>
    <link rel="stylesheet" type="text/css" href="../../css/accordion.css">
    <style>
.heroImg .past p, .heroImg .past h3 {
  display: none
}
.heroImg .overlay {
  height: 32px
}
.mainContent.home .homeHero.hh {
  border-bottom: none;
}
.momentsHeader h2 {
  background: #222;
}
.hh-hide-20-02 {
  background: none;
  display: none;
}
#fantasy-promo, .fantasyBanner {
  display: none !important;
  height: 0px !important;
}
.header_countdown.hh-gmv {
  display: none !important;
}
.tcc-skin-wt20 #header_countdown {
  display: none;
}
#menu-wt20-spw {
  display: none;
}
.tcc-skin-wt20 .potd .video-player .voted .button.primary {
  background-color: #ddd;
  color: #fff;
  cursor: default;
}
.tcc-skin-wt20 .wt20-16-fmw1, .tcc-skin-wt20 .wt20-16-fww {
  display: none;
}
</style>

<div>
  <div>
    <div class=""></div>
  </div>
  <div class="clear-both"></div>
</div>
<div class="content">
  <div>
    <div class="" style="margin: 0px; ">
      <div>
        
      <div class="row">
        <div class="columns large-12">
         <!--  <div class="">
            <header class="cwcPageHeader">
              <h2 class="featuredTitle">2015 Player Stats</h2>
            </header>
          </div> -->
        </div>
        <div class="clear-both"></div>
      </div>
      <div>
        <div>
          <div class="">
            <div data-widget-type="tournamentstats_cwc_widget" data-season="cwc-2015" data-widget-size="medium">
              <div class="row">
                <div class="columns medium-4 large-3">
                  <div class="listNavContainer"> 
                    <!-- <a class="current" id ="statCurrent" >Top Runs Scoress<i class="icon-caret-down"></i></a> -->
                    <div class="left-menu"> 
                      <!-- <div class="logo"><i class="fa fa-align-justify"></i>
                        <div>Pure CSS Accordion Nav</div>
                      </div> -->
                      <div class="accordion">
                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-1" value="toggle"/>
                          <label for="section-1"><span style="color:white"><a href="../2015/teams.html"></a> TCCC League 2015</span></label>
                          <div class="content">
                             <ul>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2015/teams.html">Teams</a></span></li>
                              <li><i class="fa fa-inbox" style="margin-right: 10px;"></i><span><a href="../2015/Fixtures.html">Fixtures</a></span></li>
                              <li><i class="fa fa-share" style="margin-right: 10px;"></i><span><a href="../2015/Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-home" style="margin-right: 10px;"></i><span><a href="../2015/Results.html">Results</a></span></li>
                              <li><i class="fa fa-archive" style="margin-right: 10px;"></i><span><a href="../2015/Batting.html">Batting Statistics</a></span></li>
                              <li><i class="fa fa-home" style="margin-right: 10px;"></i><span><a href="../2015/Bowling.html">Bowling Statistics</a></span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-2" value="toggle"/>
                          <label for="section-2"><span style="color:white"><a href="../2014/teams.html"></a> TCCC League 2014</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2014/teams.html">Teams</a></span></li>
                              <li><i class="fa fa-cog" style="margin-right: 10px;"></i><span><a href="../2014/Fixtures.html">Fixtures</a></span></li>
                              <li><i class="fa fa-group" style="margin-right: 10px;"></i><span><a href="../2014/Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../2014/Results.html">Results</a></span></li>
                              <li><i class="fa fa-users" style="margin-right: 10px;"></i><span><a href="../2014/Batting.html">Batting Statistics</a></span></li>
                              <li><i class="fa fa-share" style="margin-right: 10px;"></i><span><a href="../2014/Bowling.html">Bowling Statistics</a></span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-3"  checked="checked"/>
                          <label for="section-3"><span style="color:white"><a href="teams.html"></a> TCCC League 2013</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="teams.html" class="active">Teams</a></span></li>
                              <li><i class="fa fa-cog" style="margin-right: 10px;"></i><span><a href="Fixtures.html">Fixtures</a></span></li>
                              <li><i class="fa fa-group" style="margin-right: 10px;"></i><span><a href="Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="Results.html">Results</a></span></li>
                              <!-- <li><i class="fa fa-users" style="margin-right: 10px;"></i><span><a href="Batting.html">Batting Statistics</a></span></li>
                              <li><i class="fa fa-share" style="margin-right: 10px;"></i><span><a href="Bowling.html">Bowling Statistics</a></span></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-4"  value="toggle"/>
                          <label for="section-4"><span style="color:white">TCCC League 2012</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-group" style="margin-right: 10px;"></i><span><a href="../2012/Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../2012/Results.html">Results</a></span></li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-5"  value="toggle"/>
                          <label for="section-5"><span style="color:white">TCCC League 2011</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-group" style="margin-right: 10px;"></i><span><a href="../2011/Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../2011/Results.html">Results</a></span></li>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2011/Event.html">Event Winner</a></span>
                            </ul>
                          </div>
                        </div>

                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-6"  value="toggle"/>
                          <label for="section-6"><span style="color:white">TCCC League 2010</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2010/teams.html">Teams</a></span></li>
                              <li><i class="fa fa-group" style="margin-right: 10px;"></i><span><a href="../2010/Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../2010/Results.html">Results</a></span></li>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2010/Magazine.html">Magazine</a></span>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2010/FinalStanding.html">Final Standing</a></span>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2010/CricketFestival.html">Cricket Festival</a></span>
                            </ul>
                          </div>
                        </div>

                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-7"  value="toggle"/>
                          <label for="section-7"><span style="color:white">TCCC League 2009</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-cog" style="margin-right: 10px;"></i><span><a href="../2009/InviteFestival.html">Invite Festival</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../2009/CricketFestival.html" >Cricket Festival</a></span></li>
                            </ul>
                          </div>
                        </div>

                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-8"  value="toggle"/>
                          <label for="section-8"><span style="color:white">Member Ship</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-cog" style="margin-right: 10px;"></i><span><a href="../membership/membership.html">Member ship</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../membership/ListofMembership.html">List Membership</a></span></li>
                            </ul>
                          </div>
                        </div>
                        
                      </div> <!-- accordion -->
                    </div> <!-- left-menu -->
                  </div> <!-- listNavContainer -->
                </div> <!-- End Col-lg-4 -->

                <div class="columns medium-8 large-9"> 
                  <div class="listNavContainer">
                    <div class="content">
                        <div class=""> 
                          <div class="row">
                            <ul class="tournamentPoolsContainer">
                              <div class="cwcSection" style="padding: 0; background: #fff">
                                <div class="statsTable">
                                  <div class="row">
                                    <div class="columns large-12"> 
                                      <div class="tableHeader colour0">
                                        <h5 class="subHeading" style="text-align: center;">TORONTO CITY CRICKET CLUB( TCCC) LEAGUE 2013 - TEAMS</h5>
                                      </div>
                                        <div style="padding:10px;">
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 1. Asian Cricket Club (ACC)</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 2. Asian TV Network (ATN)</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 3. Blue Mountain Cricket Club (BMCC )</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 4. ICICI BANK Cricket Club (ICICI)</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 5. JAI HO CRICKET CLUB</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 6. KPMG Cricket Club (KPMG)</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 7. EXIOM THUNDERBOLTS Cricket Club (ETB)</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 8. TORONTO LUMBER JACK Cricket Club (TLJ)</b></span></p>
                                        </div>
                                          <h3>** Congratulations to TCCC LEAGUE 2013 Winners **</h3>
                                        <div style="padding:15px;">
                                          <p style="color: rgb(27, 0, 255);"><b>Exiom Thunderbolts Cricket Club (ETB) Champions – Mayor's Cricket Cup</b></p>
                                          <p style="color: rgb(27, 0, 255);"><b>Asain Television Network Cricket Club (ATN) 1st Runner-up</b></p>
                                          <p style="color: rgb(27, 0, 255);"><b>Blue Mountain Cricket Club (BMCC)  – 2nd Runner-up</b></p>
                                        </div>
                                          <h3>** Congratulations to TCCC Hi5 Tournament 2013 Winners **</h3>
                                        <div style="padding:15px;">
                                          <p style="color: rgb(27, 0, 255);"><b>Asain Television Network Cricket Club (ATN) Champions</b></p>
                                          <p style="color: rgb(27, 0, 255);"><b>Asain Cricket Club (ACC) 1st Runner-up</b></p>
                                          <p style="color: rgb(27, 0, 255);"><b>Blue Mountain Cricket Club (BMCC)- 2nd Runner-up</b></p>
                                        </div>
                                        
                                          <h3>TCCC 2013 ACHIEVEMENT</h3>
                                          <p><font size="3"><b><u><span>100+ Runs</span></u></b></font></p>
                                          <p><font size="2"><b><span style="color: rgb(0, 51, 204);"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>1. Satiender (ACC) – 106</span></b></font></p>
                                          <p><font size="3"><b><u><span>5+ Wkts</span></u></b></font></p>
                                        <div style="padding:10px;">
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 1. Jay Ramasamy (BMCC)– 6Wkts</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 2. Atul Gera (ETB) -  5wkt ( 2 times)</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 3. Usama Khan (KPMG) – 5wkts</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 4. Kumar Erramilli (ETB) – 5wkts</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 5. Krutarth Raval  (JAI HO)- 5wkts</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 6. Sheik Kadir (TLJ) – 5wkts</b></span></p>
                                          <p style="margin: 6pt 0in;"><span style="color: rgb(27, 0, 255);"><b> 7. Rajesh Bains (ACC) - 5wkts</b></span></p>
                                        </div>

                                        <p>
                                        <font size="2">
                                          <b><u><span style="color: green;">&nbsp;Hat-trick</span></u></b>
                                          <b><span style="font-size: 11pt; color: green;">(A</span></b>
                                          <b><span style="font-size: 11pt; color: green;"> bowler dismisses three<a>
                                             <span style="color: green;">batsmen</span></a> with consecutive deliveries<span>)</span>
                                             </span>
                                          </b>
                                          </font>
                                        </p>

                                        <p><font size="2"><b>
                                        <span style="color: rgb(0, 51, 204);">
                                        <span>&nbsp;&nbsp; </span>
                                        <span>&nbsp;&nbsp;</span>1.Raxit Shah(JAI HO)</span></b></font></p>

                                        <p>
                                          <font size="2">
                                            <b><u><span style="font-family: Arial; color: green;">&nbsp;Double Hat-trick</span></u></b>
                                            <b><span style="font-size: 11pt;  color: green;">(A</span></b>
                                            <b><span style="font-size: 11pt;  color: green;"> bowler dismisses four <a><span style="color: green;">batsmen</span></a> with consecutive deliveries)</span></b>
                                          </font>
                                        </p>

                                        <p><font size="2">
                                          <b><span style="color: rgb(0, 51, 204);"><span>&nbsp; </span>
                                             <span>&nbsp;&nbsp; </span>1. Jay Ramasamy (BMCC)</span></b>
                                          </font>
                                        </p>
                                    </div><!-- End Table -->
                                  </div>
                                </div>
                              </div>
                            </ul>  
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear-both"></div>
      </div>
    </div>
  </div>
  <div class="clear-both"></div>
</div>

<?php include_once('../../footer.php');?>