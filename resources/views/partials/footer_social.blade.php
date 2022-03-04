<h3>FOLLOW US</h3>
<ul>
    @foreach ($socials as $item)
    <li>
        <a href="#">
        <img src="{{ asset($item['icon']) }}" alt="">
        </a>
    </li>
    @endforeach
</ul>

<style>
    .footer-social{
  display: flex;
  align-items: center;
}

.footer-social h3{
    color: #558bff;
    margin: 0 15px;
}

.footer-social ul li{
    display: inline-block;
    margin: 0 15px;
}
</style>