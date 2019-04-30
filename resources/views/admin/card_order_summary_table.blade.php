<div id="timetabcontent_card">
    <div class="row">
        <div class="col-md-4 col-sm-8">
            <div class="activity-block">
                <div class="media">
                    <div class="media-body">
                        <h5>{{ __('Open Tasks') }}</h5>
                        <p>
                            <span class="spincreament" style="opacity: 1;">
                               {{ __('No of Tasks: ') }} {{ $timeValue['eur_card'][0]->no_of_card_eur }}
                            </span>
                        </p>                        
                    </div>
                    <i class="fa fa-bank text-success"></i>
                </div>
                <br>
                <div class="media">
                    <div class="media-body"><span class="progress-heading"></span></div>
                    <span>
                        <span class="">
                            <div width="90" height="20"
                                 style="display: inline-block; width: 90px; height: 20px; vertical-align: top;"></div></span> </span>
                </div>
                <i class="bg-icon text-right fa fa-bank  text-success"></i>
            </div>
        </div>
        <div class="col-md-4 col-sm-8">
            <div class="activity-block">
                <div class="media">
                    <div class="media-body">
                        <h5>{{ __('USD CARD ORDERED') }}</h5>
                        <p>
                            <span class="spincreament" style="opacity: 1;">
                               {{ __('No of Orders: ') }} {{ $timeValue['usd_card'][0]->no_of_card_usd }}
                            </span>
                        </p>
                        <p>  <span class="spincreament" style="opacity: 1;">
                                {{ __('Amount: ') }} {{ visual_number_format($timeValue['usd_card'][0]->total_order_amount_usd) }} {{ __('TCN') }}
                            </span>
                        </p>

                    </div>
                    <i class="fa fa-bank text-success"></i></div>
                <br>
                <div class="media">
                    <div class="media-body"><span class="progress-heading"></span></div>
                    <span><span class=""><div width="90" height="20"
                                              style="display: inline-block; width: 90px; height: 20px; vertical-align: top;"></div></span> </span>
                </div>
                <i class="bg-icon text-right fa fa-bank  text-success"></i>
            </div>
        </div>
        <div class="col-md-4 col-sm-8">
            <div class="activity-block">
                <div class="media">
                    <div class="media-body">
                        <h5>BOTH CARD ORDERED</h5>
                        <p>
                            <span class="spincreament" style="opacity: 1;">
                               {{ __('No of Orders: ') }} {{ $timeValue['eur_usd_card'][0]->no_of_card_eur_usd }}
                            </span>
                        </p>
                        <p>  <span class="spincreament" style="opacity: 1;">
                               {{ __('Amount: ') }} {{ visual_number_format($timeValue['eur_usd_card'][0]->total_order_amount_eur_usd) }} {{ __('TCN') }}
                            </span>
                        </p>

                    </div>
                    <i class="fa fa-bank text-success"></i></div>
                <br>
                <div class="media">
                    <div class="media-body"><span class="progress-heading"></span></div>
                    <span><span class=""><div width="90" height="20"
                                              style="display: inline-block; width: 90px; height: 20px; vertical-align: top;"></div></span> </span>
                </div>
                <i class="bg-icon text-right fa fa-bank  text-success"></i>
            </div>
        </div>
        <div class="col-md-4 col-sm-8">
            <div class="activity-block">
                <div class="media">
                    <div class="media-body">
                        <h5>Total Ordered Amount</h5>
                        <p>  <span class="spincreament" style="opacity: 1;">
                               {{ __('Amount: ') }} {{ visual_number_format($timeValue['eur_usd_card'][0]->total_order_amount_in_coin) }} {{ __('TCN') }}
                            </span></p>

                    </div>
                    <i class="fa fa-bank text-success"></i></div>
                <br>
                <div class="media">
                    <div class="media-body"><span class="progress-heading"></span></div>
                    <span><span class=""><div width="90" height="20"
                                              style="display: inline-block; width: 90px; height: 20px; vertical-align: top;"></div></span> </span>
                </div>
                <i class="bg-icon text-right fa fa-bank  text-success"></i>
            </div>
        </div>

    </div>
</div>