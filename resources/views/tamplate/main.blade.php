@include('tamplate.header')
    <h4>This is the Body part</h4>
    @yield('lubna')
    <h4>Lubna is My Good Friend</h4>
    @yield('saima') <br>
    <a href="{{url('dhaka')}}">Dhaka</a>
    <a href="{{url('rifat')}}">Gazipur</a><br>
    @php
        $x = ['Mr','Md','Ali','Haydar','Arman'];
    @endphp
    @foreach ($x as $data)
        {{$data,' '}}
    @endforeach <br>
    @if (count($x)>3)
        {{'Haydar'}} has a big man
    @endif
@include('tamplate.footer')
