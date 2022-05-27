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
      <div class="row">
        <div class="columns large-12">
          <!-- <div class="">
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
                    <div class="left-menu">
                      <div class="accordion">
                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-1" checked="checked"/>
                          <label for="section-1"><span style="color:white"><a href="teams.html"></a> TCCC League 2015</span></label>
                          <div class="content">
                            <ul>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="teams.html">Teams</a></span></li>
                              <li><i class="fa fa-inbox" style="margin-right: 10px;"></i><span><a href="Fixtures.html" class="active">Fixtures</a></span></li>
                              <li><i class="fa fa-share" style="margin-right: 10px;"></i><span><a href="Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-home" style="margin-right: 10px;"></i><span><a href="Results.html">Results</a></span></li>
                              <li><i class="fa fa-archive" style="margin-right: 10px;"></i><span><a href="Batting.html">Batting Statistics</a></span></li>
                              <li><i class="fa fa-home" style="margin-right: 10px;"></i><span><a href="Bowling.html">Bowling Statistics</a></span></li>
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
                          <input type="radio" name="accordion-1" id="section-3" value="toggle"/>
                          <label for="section-3"><span style="color:white"><a href="../2013/teams.html"></a> TCCC League 2013</span></label>
                          <div class="content">
                             <ul>
                              <li><i class="fa fa-user" style="margin-right: 10px;"></i><span><a href="../2013/teams.html">Teams</a></span></li>
                              <li><i class="fa fa-cog" style="margin-right: 10px;"></i><span><a href="../2013/Fixtures.html">Fixtures</a></span></li>
                              <li><i class="fa fa-group" style="margin-right: 10px;"></i><span><a href="../2013/Pointstable.html">Points table</a></span></li>
                              <li><i class="fa fa-sitemap" style="margin-right: 10px;"></i><span><a href="../2013/Results.html">Results</a></span></li>
                              <!-- <li><i class="fa fa-users" style="margin-right: 10px;"></i><span><a href="../2013/Batting.html">Batting Statistics</a></span></li>
                              <li><i class="fa fa-share" style="margin-right: 10px;"></i><span><a href="../2013/Bowling">Bowling Statistics</a></span></li> -->
                            </ul>
                          </div>
                        </div>

                        <div class="section">
                          <input type="radio" name="accordion-1" id="section-4" value="toggle"/>
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
                </div> <!-- End large-4 -->

                <div class="columns medium-8 large-9">  
                  <div class="listNavContainer">
                    <div class="content">
                      <div>
                        <div class=""> 
                          <div class="row">
                            <ul class="tournamentPoolsContainer">
                              <div class="cwcSection" style="padding: 0;">
                                <div class="statsTable">
                                  <div class="row">
                                    <div class="columns large-12"> 
                                      <div class="tableHeader colour0">
                                        <h5 class="subHeading" style="text-align: center;">TORONTO CITY CRICKET CLUB( TCCC) LEAGUE 2015 - SCHEDULE</h5>
                                      </div>
                                      <div class="tableContainer">
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Date</th>
                                              <th>Time</th>
                                              <th>Ground A(Centennial park)</th>
                                              <th>Ground B(Centennial park)</th>
                                            </tr>

                                            <tr>
                                              <td>1</td>
                                              <td>5/16/2015 - Saturday</td>
                                              <td>7.30 am - 11.30 am</td>
                                              <td>BMCC (H) vs JAI HO</td>
                                              <td>TLJ(H) vs BMO</td>
                                            </tr>

                                             <tr>
                                              <td>2</td>
                                              <td>5/17/2015 - Sunday</td>
                                              <td>7.30 am - 11.30 am</td>
                                              <td>KPMG(H) vs ACC</td>
                                              <td>ETB (H) vs SSCC</td>
                                            </tr>
                                            
                                            <tr>
                                              <td>3</td>
                                              <td>5/23/2015 - Saturday</td>
                                              <td>7.30 am - 11.30 am</td>
                                              <td>SSCC (H) vs JAI HO</td>
                                              <td>ACC (H) vs BMCC</td>
                                            </tr>

                                            <tr>
                                              <td>4</td>
                                              <td>5/24/2015 - Sunday</td>
                                              <td>7.30 am - 11.30 am</td>
                                              <td>ETB  vs TLJ(H)</td>
                                              <td>KPMG vs BMO(H)</td>
                                            </tr>

                                            <tr>
                                              <td>5</td>
                                              <td>5/30/2015 - Saturday</td>
                                              <td>7.30 am - 11.30 am</td>
                                              <td>BMCC (H) vs KPMG</td>
                                              <td>BMO vs JAI HO (H)</td>
                                            </tr>

                                            <tr>
                                              <td>6</td>
                                              <td>5/31/2015 - Sunday</td>
                                              <td>7.30 am - 11.30 am</td>
                                              <td>KPMG (H) vs TLJ</td>
                                              <td>SSCC vs ACC (H)</td>
                                            </tr>

                                            <tr>
                                              <td> </td>
                                              <td>6/06/2015 - Saturday</td>
                                              <td>FULL DAY - EVENTS</td>
                                              <td>EGLINTON FLAT A</td>
                                              <td>EGLINTON FLAT B</td>
                                            </tr>

                                             <tr>
                                              <td> </td>
                                              <td>6/07/2015 - Sunday</td>
                                              <td>FULL DAY - EVENTS</td>
                                              <td>EGLINTON FLAT A</td>
                                              <td>EGLINTON FLAT B</td>
                                            </tr>

                                            <tr>
                                              <td>7</td>
                                              <td>6/13/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMO vs SSCC (H)</td>
                                              <td>ACC (H) vs JAI HO</td>
                                            </tr>

                                            <tr>
                                              <td>8</td>
                                              <td>6/14/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>KPMG (H) vs ETB</td>
                                              <td>BMCC vs TLJ (H)</td>
                                            </tr>

                                            <tr>
                                              <td>9</td>
                                              <td>6/20/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMCC (H) vs SSCC</td>
                                              <td>BMO (H) vs TLJ</td>
                                            </tr>

                                            <tr>
                                              <td>10</td>
                                              <td>6/21/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>ACC  vs ETB (H)</td>
                                              <td>KPMG vs JAI HO (H)</td>
                                            </tr>

                                            <tr>
                                              <td>11</td>
                                              <td>6/27/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>ACC (H) vs TLJ</td>
                                              <td>ETB vs JAI HO (H)</td>
                                            </tr>

                                            <tr>
                                              <td>12</td>
                                              <td>6/28/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMCC (H) vs BMO</td>
                                              <td>SSCC vs KPMG (H)</td>
                                            </tr>

                                            <tr>
                                              <td>13</td>
                                              <td>7/4/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>SSCC (H) vs TLJ</td>
                                              <td>ACC (H) vs KPMG</td>
                                            </tr>

                                            <tr>
                                              <td>14</td>
                                              <td>7/5/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>JAI HO vs BMO (H)</td>
                                              <td>BMCC vs ETB (H)</td>
                                            </tr>

                                            <tr>
                                              <td>15</td>
                                              <td>7/11/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>ETB vs SSCC (H)</td>
                                              <td>ACC vs TLJ (H))</td>
                                            </tr>

                                            <tr>
                                              <td>16</td>
                                              <td>7/12/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>ACC  vs JAI HO (H)</td>
                                              <td>ETB (H) vs BMO</td>
                                            </tr>

                                            <tr>
                                              <td>17</td>
                                              <td>7/18/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>TLJ vs BMCC (H)</td>
                                              <td>ACC vs BMO (H)</td>
                                            </tr>

                                            <tr>
                                              <td>18</td>
                                              <td>7/19/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>ETB (H) vs JAI HO</td>
                                              <td>TLJ (H) vs SSCC</td>
                                            </tr>

                                            <tr>
                                              <td>19</td>
                                              <td>7/25/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>TLJ (H) vs JAI HO</td>
                                              <td>BMCC vs BMO (H)</td>
                                            </tr>

                                            <tr>
                                              <td>20</td>
                                              <td>7/26/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>KPMG  (H) vs SSCC</td>
                                              <td>ETB vs ACC (H)</td>
                                            </tr>

                                            <tr>
                                              <td>21</td>
                                              <td>8/1/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMCC (H) vs ETB</td>
                                              <td>ACC vs SSCC (H)</td>
                                            </tr>

                                            <tr>
                                              <td>22</td>
                                              <td>8/2/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMO vs KPMG (H)</td>
                                              <td>TLJ vs JAI HO (H)</td>
                                            </tr>

                                            <tr>
                                              <td>23</td>
                                              <td>8/8/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>KPMG (H) vs ETB</td>
                                              <td>JAI HO (H) vs SSCC</td>
                                            </tr>

                                            <tr>
                                              <td>24</td>
                                              <td>8/9/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>TLJ (H) vs KPMG</td>
                                              <td>BMCC vs SSCC (H)</td>
                                            </tr>

                                            <tr>
                                              <td>25</td>
                                              <td>8/15/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMCC (H) vs ACC</td>
                                              <td>KPMG (H) vs JAI HO</td>
                                            </tr>

                                            <tr>
                                              <td>26</td>
                                              <td>8/16/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMO (H) vs SSCC</td>
                                              <td>TLJ vs ETB (H)</td>
                                            </tr>

                                            <tr>
                                              <td>27</td>
                                              <td>8/22/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMCC vs JAI HO (H)</td>
                                              <td>ACC (H) vs BMO</td>
                                            </tr>

                                            <tr>
                                              <td>28</td>
                                              <td>8/23/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>BMO (H) vs ETB</td>
                                              <td>BMCC vs KPMG (H)</td>
                                            </tr>

                                            <tr>
                                              <td>29</td>
                                              <td>8/29/2015 - Saturday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>SSCC (H) vs BMO SEMI-FINAL - 1</td>
                                              <td>ETB (H) vs BMCC SEMI-FINAL - 2</td>
                                            </tr>

                                            <tr>
                                              <td>30</td>
                                              <td>8/30/2015 - Sunday</td>
                                              <td>7.30 am - 11.30am</td>
                                              <td>RAIN OUT DAY</td>
                                              <td>RAIN OUT DAY</td>
                                            </tr>

                                            <tr>
                                              <td>31</td>
                                              <td>9/05/2015 - Saturday</td>
                                              <td>FULL DAY</td>
                                              <td>FINAL</td>
                                              <td>3rd PLACE</td>
                                            </tr>

                                            <tr>
                                              <td>32</td>
                                              <td>9/06/2015- Sunday</td>
                                              <td>FULL DAY</td>
                                              <td>RAIN OUT DAY</td>
                                              <td>RAIN OUT DAY</td>
                                            </tr>

                                            <tr>
                                              <td>33</td>
                                              <td>9/12/2015- Saturday</td>
                                              <td>7.30am - 11.30am</td>
                                              <td>RAIN OUT DAY</td>
                                              <td>RAIN OUT DAY</td>
                                            </tr>

                                            <tr>
                                              <td>34</td>
                                              <td>9/13/2015- Sunday</td>
                                              <td>7.30am - 11.30am</td>
                                              <td>RAIN OUT DAY</td>
                                              <td>RAIN OUT DAY</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      
                                      </div>
                                    </div><!-- End Table -->
                                  </div>
                                </div>
                              </div>
                            </ul>
                             <div style="background: red;">
                                <ul class="columns medium-12 large-6" style="background: #f5f5f5;">
                                    <li>ACC  - ASIAN CRICKET CLUB</li>
                                    <li>BMCC - BLUE MOUNTAIN CRICKET CLUB </li>
                                    <li>BMO  - BANK OF MONTREAL CRICKET CLUB</li>
                                    <li>ETB  - EXIOM THUNDERBOLTS CRICKET CLUB</li>
                                </ul>
                                <ul class="columns medium-12 large-6" style="background: #f5f5f5">
                                    <li>JAI HO  - JAI HO CRICKET CLUB</li>
                                    <li>KPMG - KPMG CRICKET CLUB</li>
                                    <li>TLJ - TORONTO LUMBER JACK CRICKET CLUB</li>
                                    <li>SSCC - STRICKERS SCARBOROUGH CRICKET CLUB</li>
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