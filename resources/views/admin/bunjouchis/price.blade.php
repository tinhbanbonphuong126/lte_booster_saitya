<div class="m_loop m_line">
    <div class="m_both m_left">
        <input class="form-control prices_bangou" value="@isset($price) {{ $price->bangou }} @endisset" type="text"><span> 号地</span>
    </div>
    <div class="m_both m_right">
        <input maxlength="64" value="@isset($price) {{ $price->description }} @endisset" class="form-control prices_description">

        <div class="action">
            <i class="icon ion-md-add"></i>
            <i class="icon ion-md-remove"></i>
        </div>
    </div>
</div>