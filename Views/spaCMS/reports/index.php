<div id="reports-holder" class="content-holder">
    <div id="reports-tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <div class="section-aside">
            <ul id="nav2" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                <li class="ui-state-default ui-corner-top active" id="bookings-tab" style="display: list-item;">
                    <a href="#bookings" style="position: relative;" role="tab" data-toggle="tab">
                        <div class="title vertically-centered" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">List of Bookings</div>
                    </a>
                </li>
                <li class="ui-state-default ui-corner-top" id="sales-tab" style="display: list-item;">
                    <a href="#sales" style="position: relative;" role="tab" data-toggle="tab">
                        <div class="title vertically-centered" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Sales Report</div>
                    </a>
                </li>
            </ul>
        </div>


        <div class="tab-content section-main ui-widget-content ui-corner-bottom">
            <!-- Bookings -->
            <div class="tab-pane active" id="bookings">
                <div class="reports-bookings">
                    <div class="home-filters">
                        <div class="filter-wrapper" id="filter-type">
                            <div id="bookings-menu" class="filter-current dropdown-toggle"  data-toggle="dropdown">
                                All bookings and enquiries
                                <div class="handler">
                                    <div class="icons-arrow-bottom2"></div>
                                </div>
                            </div>
                            <ul class="filter-ddown dropdown-menu dropdown-menu-fix" role="menu" aria-labelledby="bookings-menu">
                                <li data-value="ALL" class="on" role="menuitem" tabindex="-1" >
                                    All bookings and enquiries
                                </li>
                                <li class="subitem" data-value="AAP" role="menuitem" tabindex="-1">
                                    Appointment bookings
                                </li>
                                <li class="subitem" data-value="DBO" role="menuitem" tabindex="-1">
                                    Dated bookings
                                </li>
                                <li class="subitem" data-value="ANV" role="menuitem" tabindex="-1">
                                    eVoucher bookings
                                </li>
                                <li class="subitem" data-value="LDS" role="menuitem" tabindex="-1">
                                    Customer enquiries
                                </li>
                            </ul>
                        </div>

                        <div class="filter-wrapper" id="filter-subtype">
                            <div id="bookings-menu-type" class="filter-current dropdown-toggle"  data-toggle="dropdown">All types<span class="count">3</span>
                                <div class="handler">
                                    <div class="icons-arrow-bottom2"></div>
                                </div>
                            </div>
                            <ul class="filter-ddown dropdown-menu dropdown-menu-fix" role="menu" aria-labelledby="bookings-menu-type">
                                <li class="on" role="menuitem" tabindex="-1">All types</li>
                                <li data-value="UNC" role="menuitem" tabindex="-1">Unconfirmed</li>
                                <li data-value="BCX" role="menuitem" tabindex="-1">Cancelled</li>
                                <li data-value="BRJ" role="menuitem" tabindex="-1">Rejected</li>
                                <li data-value="BFU" role="menuitem" tabindex="-1">Scheduled in the future</li>
                            </ul>
                        </div>

                        <div class="filter-wrapper short" id="filter-date">
                            <div id="bookings-menu-time" class="filter-current dropdown-toggle"  data-toggle="dropdown">
                                Last 3 months
                                <div class="handler">
                                    <div class="icons-arrow-bottom2"></div>
                                </div>
                            </div>
                            <ul class="filter-ddown dropdown-menu dropdown-menu-fix" role="menu" aria-labelledby="bookings-menu-time">
                                <li data-value="1M" class="" role="menuitem" tabindex="-1">
                                    Last 30 days
                                </li>
                                <li data-value="2M" role="menuitem" tabindex="-1">
                                    Last 60 days
                                </li>
                                <li data-value="3M" class="on" role="menuitem" tabindex="-1">
                                    Last 3 months
                                </li>
                                <li data-value="6M" role="menuitem" tabindex="-1">
                                    Last 6 months
                                </li>
                                <li data-value="12M" role="menuitem" tabindex="-1">
                                    Last 12 months
                                </li>
                                <li data-value="CUST" role="menuitem" tabindex="-1">
                                    Custom range
                                </li>
                            </ul>
                        </div>

                        <div class="filter-wrapper date-range hidden">
                            <form novalidate="novalidate">
                                <div class="txt-input txt-input-mini"><input type="text" name="filter-date-from" id="filter-date-from" class="date-format-default hasDatepicker" placeholder="From" value="" date-format="dd/mm/yy">
                                </div>
                                <span class="sep">-</span>
                                <div class="txt-input txt-input-mini"><input type="text" name="filter-date-to" id="filter-date-to" class="date-format-default hasDatepicker" placeholder="Until" value="" date-format="dd/mm/yy">
                                </div>
                                <button class="button button-basic refresh a-custom-filter" type="button">
                                    <div class="button-inner">
                                        <div class="button-icon icons-refresh"></div>&nbsp;
                                    </div>
                                </button>
                            </form>
                        </div>

                        <div class="top-search reports-search">
                            <div class="txt-input">
                                <input type="text" placeholder="Search: client, phone#, order#..." id="top-search" name="top-search" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                <a class="clear-search" href="#" style="display: none;"><div class="icons-clear-search-mini"></div></a>
                                <div class="search-loader" style="display: none;"></div>
                            </div>
                            <ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all search-results" role="listbox" aria-activedescendant="ui-active-menuitem" style="top: 0px; left: 0px; display: none;"></ul>
                        </div>
                    </div>
                    <div class="home-data">
                        <div class="data-head">
                            <table cellspacing="0" cellpadding="0" class="">
                                <tbody>
                                    <tr>
                                        <td class="icon-column"></td>
                                        <td class="column2">
                                            Booking ID<br>
                                            Order ref#
                                        </td>
                                        <td class="column3">
                                            Order date
                                        </td>
                                        <td class="column4">
                                            Customer
                                        </td>
                                        <td class="column5">
                                            Service
                                        </td>
                                        <td class="column6">
                                            Value
                                        </td>
                                        <td class="column7">
                                            Status
                                        </td>
                                        <td class="tick"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="data-body">
                            <table class="table table-hover" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr data-type="appointment" data-id="529483">
                                        <td class="icon-column">
                                            <div title="Appointment" class="icon icons-appointment"></div>
                                        </td>
                                        <td class="column2">

                                        </td>
                                        <td class="column3">
                                            11/08/2014 09:18
                                        </td>
                                        <td class="column4">
                                            0903676222
                                        </td>
                                        <td class="column5">
                                            abcxyz
                                        </td>
                                        <td class="column6">
                                            £40
                                        </td>
                                        <td class="column7">
                                            <span class="status status-checkedout">Complete</span>
                                        </td>
                                    </tr>

                                    <tr data-type="appointment" data-id="521260">
                                        <td class="icon-column">
                                            <div title="Appointment" class="icon icons-appointment"></div>
                                        </td>
                                        <td class="column2">

                                        </td>
                                        <td class="column3">
                                            07/08/2014 10:26
                                        </td>
                                        <td class="column4">
                                            Khách hàng 1
                                        </td>
                                        <td class="column5">
                                            Body Wraps
                                        </td>
                                        <td class="column6">

                                        </td>
                                        <td class="column7">
                                            <span class="status status-confirmed">Confirmed</span>
                                        </td>
                                    </tr>

                                    <tr data-type="appointment" data-id="488880">
                                        <td class="icon-column">
                                            <div title="Appointment" class="icon icons-appointment"></div>
                                        </td>
                                        <td class="column2">

                                        </td>
                                        <td class="column3">
                                            25/07/2014 06:11
                                        </td>
                                        <td class="column4">
                                            first customer
                                        </td>
                                        <td class="column5">
                                            Body Wraps
                                        </td>
                                        <td class="column6">

                                        </td>
                                        <td class="column7">
                                            <span class="status status-confirmed">Confirmed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="no-data">
                            The list is empty.
                        </div>
                        <div class="top-shadow hidden" style="top: 37px; left: 0px; width: 1090px;"></div>
                        <div class="bottom-shadow hidden" style="top: 528px; left: 0px; width: 1090px;"></div>
                    </div>
                </div>
            </div>


            <!-- Sales reports -->
            <div class="tab-pane" id="sales">
                <div class="report-actions">
                    <div class="date-range-selector">
                        <div class="current">
                            <div class="icon icons-date-selector"></div>
                            <div class="value">Day: 12/08/2014</div>
                            <div class="arrow icons-arrow-bottom2"></div>
                        </div>
                        <div class="selection hidden">
                            <div class="title">
                                <div class="icon icons-date-selector"></div>
                                <div class="value">Select date range</div>
                            </div>
                            <form>
                                <div class="period-granularity">
                                    <label>
                                        <input type="radio" checked="" value="day" name="period-granularity">
                                        Day
                                    </label>
                                    <label>
                                        <input type="radio" value="week" name="period-granularity">
                                        Week
                                    </label>
                                    <label>
                                        <input type="radio" value="month" name="period-granularity">
                                        Month
                                    </label>
                                </div>
                                <div class="date">
                                    <label>
                                        <span class="v-day" style="display: inline;">Date:</span>
                                        <span class="v-week" style="display: none;">Starting with day:</span>
                                        <span class="v-month" style="display: none;">Starting with day:</span>
                                    </label>
                                    <div class="txt-input date-input">
                                        <input type="text" readonly="" id="dp1407904445433" value="" class="datepicker hasDatepicker" name="" date-format="dd/mm/yy">
                                    </div>
                                </div>
                                <div class="buttons">
                                    <span class="action cancel">
                                        <span class="icon icons-action-cancel"></span>
                                        <span class="value">Cancel</span>
                                    </span>
                                    <span class="action main">
                                        <span class="icon icons-action-ok"></span>
                                        <span class="value">Show report</span>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="report-content">
                    <div class="printed-date">
                        <span class="title">Printed date</span>
                        <span class="date">2014-08-13 14:46</span>
                    </div>
                    <h1>Sales summary</h1>
                    <h2>Sunspa Resort</h2>
                    <div class="stats-group general">
                        <table>
                            <tbody>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>
                                        Total value
                                    </th>
                                    <th>Count</th>
                                </tr>
                                <tr class="important">
                                    <td>
                                        <h3 class="period">Thursday</h3>
                                        <span class="date">2014-08-07</span>
                                    </td>
                                    <td>
                                        <span class="highlighted">£40</span>
                                        <!-- <div class="change positive">
                                            <div class="icon icons-change-up"></div>
                                            <div class="value">17%</div>
                                        </div> -->
                                    </td>
                                    <td>
                                        <span>1</span>
                                        <!--<div class="change positive">
                                        <div class="icon icons-change-up"></div>
                                            <div class="value">17%</div>
                                        </div> -->
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>
                                        <span class="period">Last Wednesday</span>
                                        <span class="date">2013-12-11</span>
                                    </td>
                                    <td>
                                        <span>£1,343.00</span>
                                    </td>
                                    <td>
                                        <span>£1,343.00</span>
                                    </td>
                                    <td>
                                        <span>£1,343.00</span>
                                    </td>
                                    <td>
                                        <span>25</span>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="stats-group">
                        <table>
                            <tbody><tr>
                                <th><h3>By employee</h3></th>
                                <th>Total value</th>
                                <th>Count</th>
                            </tr>
                            <tr>
                                <td><span>Sunspa Resort</span></td>
                                <td><span>£40</span></td>
                                <td><span>1</span></td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="stats-group">
                        <table>
                            <tbody><tr>
                                <th><h3>By service group</h3></th>
                                <th>Total value</th>
                                <th>Count</th>
                            </tr>
                            <tr>
                                <td><span>Body</span></td>
                                <td><span>£40</span></td>
                                <td><span>1</span></td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="stats-group">
                        <table>
                            <tbody><tr>
                                <th><h3>Top services</h3></th>
                                <th>Total value</th>
                                <th>Count</th>
                            </tr>
                            <tr>
                                <td><span>Body Wraps</span></td>
                                <td><span>£40</span></td>
                                <td><span>1</span></td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="stats-group">
                        <table>
                            <tbody><tr>
                                <th><h3>By channel</h3></th>
                                <th>Total value</th>
                                <th>Count</th>
                            </tr>
                            <tr>
                                <td><span>Direct sales</span></td>
                                <td><span>£40</span></td>
                                <td><span>1</span></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>