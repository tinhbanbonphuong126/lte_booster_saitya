<div class="m_loop m_line">
    <div class="m_both m_left">
        <input class="form-control" value="@isset($price) {{ $price->bangou }} @endisset" type="text" name="prices[]['bangou']"><span> 号地</span>
    </div>
    <div class="m_both m_right">
        <input value="@isset($price) {{ $price->description }} @endisset" class="form-control" type="prices[]['description']">

        <div class="action">
            <i class="icon ion-md-add"></i>
            <i class="icon ion-md-remove"></i>
        </div>
    </div>
</div>