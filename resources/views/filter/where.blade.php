<div class="form-group">
    <label class="col-md-12 hidden-sm"> {{$label}}</label>
    <label class="col-sm-2 hidden visible-sm control-label"> {{$label}}</label>
    <div class="col-sm-8 col-md-12">
        @include($presenter->view())
    </div>
</div>