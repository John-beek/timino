<div class="container grid-xl">
    <div class="columns mt-1">
        <div class="column">
            <div class="col-12">
                <span class="label float-left hide-sm"><b>Current branch</b> : <span><?=$this->modelData->branch?></span></span>
                <span class="label float-right"><b>Version </b>: 1.0.0</span></span>
                <!--#link#-->
                <div class="clear-fix"></div>
            </div>
            <div class="mb-2"></div>
        </div>
    </div>

    <div class="columns mt-2">
        <div class="column col-6 col-sm-8 col-mx-auto text-center">
            <h1>Timino PHP MVC</h1>
            <p>Default View no templating engine.</p>
            <img src="<?=$this->uploads->IMG . 'logo.png'?>" alt="logo" title="Timino" class="logo mt-2">
        </div>

        <div class="column col-12 mt-4 text-center links">
            <span><a href="#">Documentation</a></span>
            <span><a href="#">News </a></span>
            <span><a href="#">Contribute</a></span>
            <span><a href="#">Report</a></span>
            <span><a href="#">Donate</a></span>
        </div>


        <div class="column col-12 text-center">
            <div class="mt-4"></div>
            <div class="footer">
                <p><?=$this->lang->set('SLOGAN')?></p>
            </div>
        </div>
    </div>
</div>