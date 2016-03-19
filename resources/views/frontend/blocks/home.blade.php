<section class="section section-home">
    <div class="container">
        <article>
            <div class="col-md-12">
                <h1 class="product-name">{!! $data->name !!}</h1>
            </div>
            <div class="col-md-12 content-product-tabs"> 
                <p class="product-description">
                    {!! $data->intro!!}
                </p>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        {!! $data->content !!}        
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
